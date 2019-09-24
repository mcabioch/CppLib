#if 0
#include "C++/bdd.hpp"

namespace mcd {
	/* Constructor */
	BDD::BDD(bool fatal_error) :
		_url(""),
		_user(""),
		_pass(""),
		_database(""),
		_driver(nullptr),
		_con(nullptr),
		_stmt(nullptr),
		_res(nullptr),
		_table(""),
		_connected(false),
		_databased(false),
		_mutex(),
		_debug(false),
		_fatal_error(fatal_error)
	{}

	/* Destroyer */
	BDD::~BDD() {
		try {
			/* Delete the pointers */
			deletePtr(_res);
			deletePtr(_stmt);
			deletePtr(_con);
		} catch(sql::SQLException &e) {
			if(_fatal_error){
				error_log(line_number, "SQLException", e.what(), " (MySQL error code: ", e.getErrorCode(), ", SQLState: ", e.getSQLState(), " )");
			} else {
				warning_log(line_number, "SQLException", e.what(), " (MySQL error code: ", e.getErrorCode(), ", SQLState: ", e.getSQLState(), " )");
			}
		}
	}

	/* Reset the object */
	void BDD::reset(){
		_url = "";
		_user = "";
		_pass = "";

		try {
			/* Delete the pointers */
			deletePtr(_res);
			deletePtr(_stmt);
			deletePtr(_con);
		} catch(sql::SQLException &e) {
			warning_log(line_number, "SQLException", e.what(), " (MySQL error code: ", e.getErrorCode(), ", SQLState: ", e.getSQLState(), " )");
		}

		_connected = false;
		_databased = false;
		_debug = false;
	}

	BDD::BDD(const BDD& other) :
		_url(""),
		_user(""),
		_pass(""),
		_database(""),
		_driver(nullptr),
		_con(nullptr),
		_stmt(nullptr),
		_res(nullptr),
		_table(""),
		_connected(false),
		_databased(false),
		_mutex(),
		_debug(false),
		_fatal_error(false)
	{
		*this = other;
	}

	BDD& BDD::operator=(const BDD& other) noexcept {
		if(this == &other){ return *this; }

		_url = other._url;
		_user = other._user;
		_pass = other._pass;
		_database = other._database;
		_driver = other._driver;
		_con = other._con;
		_stmt = other._stmt;
		_res = other._res;
		_table = other._table;
		_connected = other._connected;
		_databased = other._databased;
		_debug = other._debug;
		_fatal_error = other._fatal_error;

		return *this;
	}

	BDD::BDD(const BDD&& other) :
		_url(""),
		_user(""),
		_pass(""),
		_database(""),
		_driver(nullptr),
		_con(nullptr),
		_stmt(nullptr),
		_res(nullptr),
		_table(""),
		_connected(false),
		_databased(false),
		_mutex(),
		_debug(false),
		_fatal_error(false)
	{
		*this = std::move(other);
	}

	BDD& BDD::operator=(const BDD&& other) noexcept {
		if(this == &other){ return *this; }

		_url = other._url;
		_user = other._user;
		_pass = other._pass;
		_database = other._database;
		_driver = other._driver;
		_con = other._con;
		_stmt = other._stmt;
		_res = other._res;
		_table = other._table;
		_connected = other._connected;
		_databased = other._databased;
		_debug = other._debug;
		_fatal_error = other._fatal_error;

		return *this;
	}

	/* Connection to a bdd */
	bool BDD::connect(std::string url, std::string user, std::string pass){
		_mutex.lock();
			_url = url;
			_user = user;
			_pass = pass;
		_mutex.unlock();

		_mutex.lock();
		try {
			/* Create a connection */
			_driver = get_driver_instance();
			_con = _driver->connect(_url, _user, _pass);
			_connected = true;
			_mutex.unlock();
			return true;
		} catch(sql::SQLException &e) {
			if(_fatal_error){
				_mutex.unlock();
				error_log(line_number, "SQLException", e.what(), " (MySQL error code: ", e.getErrorCode(), ", SQLState: ", e.getSQLState(), " )");
			} else {
				warning_log(line_number, "SQLException", e.what(), " (MySQL error code: ", e.getErrorCode(), ", SQLState: ", e.getSQLState(), " )");
			}
			_mutex.unlock();
			return false;
		}
	}

	/* Try a connection to a bdd */
	bool BDD::try_connect(std::string url, std::string user, std::string pass){
		auto fe = _fatal_error;
		_fatal_error = false;

		this->connect(url, user, pass);

		_fatal_error = fe;

		if(!_connected){
			return false;
		}

		return true;
	}

	/* Set the database to ask to */
	bool BDD::setDatabase(std::string database) {
		if(!_connected){
			if(_fatal_error){
				error_log(line_number, "BDDException", "Please connect to a database with connect(url, user, password) before try to use it !");
			} else {
				warning_log(line_number, "BDDException", "Please connect to a database with connect(url, user, password) before try to use it !");
			}
			return false;
		}

		try {
			_mutex.lock();
				_con->setSchema(database);
				_stmt = _con->createStatement();
				_databased = true;
				_database = database;
			_mutex.unlock();
			return true;
		} catch(sql::SQLException &e) {
			if(_fatal_error){
				error_log(line_number, "SQLException", e.what(), " (MySQL error code: ", e.getErrorCode(), ", SQLState: ", e.getSQLState(), " )");
			} else {
				warning_log(line_number, "SQLException", e.what(), " (MySQL error code: ", e.getErrorCode(), ", SQLState: ", e.getSQLState(), " )");
			}
			return false;
		}
	}

	/* Try to set the database to ask to */
	bool BDD::try_database(std::string database){
		auto fe = _fatal_error;
		_fatal_error = false;

		this->setDatabase(database);

		_fatal_error = fe;

		if(!_databased){
			return false;
		}

		return true;
	}

	/* Set the table to do the queries */
	bool BDD::setTable(std::string table){
		if(!_connected){
			if(_fatal_error){
				error_log(line_number, "BDDException", "Please connect to a database with connect(url, user, password) before try to use !");
			} else {
				warning_log(line_number, "BDDException", "Please connect to a database with connect(url, user, password) before try to use !");
			}
			return false;
		}
		if(!_databased){
			if(_fatal_error){
				error_log(line_number, "BDDException", "Please select a database with setDatabase(database) before try to use !");
			} else {
				warning_log(line_number, "BDDException", "Please select a database with setDatabase(database) before try to use !");
			}
			return false;
		}

		_table = table;
		return true;
	}

	/* Query something to the database */
	sql::ResultSet* BDD::query(std::string task) {
		if(!_connected){
			if(_fatal_error){
				error_log(line_number, "BDDException", "Please connect to a database with connect(url, user, password) before try to use it !");
			} else {
				warning_log(line_number, "BDDException", "Please connect to a database with connect(url, user, password) before try to use it !");
			}
			return nullptr;
		}
		if(!_databased){
			if(_fatal_error){
				error_log(line_number, "BDDException", "Please select a database with setDatabase(database) before try to use !");
			} else {
				warning_log(line_number, "BDDException", "Please select a database with setDatabase(database) before try to use !");
			}
			return nullptr;
		}

		try {
			if(_debug){ std::cout << "Query : " << task << std::endl; }
			_res = _stmt->executeQuery(task);
			return _res;
		} catch(sql::SQLException &e) {
			if(_fatal_error){
				error_log(line_number, "SQLException", e.what(), " (MySQL error code: ", e.getErrorCode(), ", SQLState: ", e.getSQLState(), " )");
			} else {
				warning_log(line_number, "SQLException", e.what(), " (MySQL error code: ", e.getErrorCode(), ", SQLState: ", e.getSQLState(), " )");
			}
			return nullptr;
		}
	}

	/* List all of the content */
	ListArray BDD::list(std::string table){
		ListArray out;

		if(!_connected){
			if(_fatal_error){
				error_log(line_number, "BDDException", "Please connect to a database with connect(url, user, password) before try to use it !");
			} else {
				warning_log(line_number, "BDDException", "Please connect to a database with connect(url, user, password) before try to use it !");
			}
			return out;
		}
		if(!_databased){
			if(_fatal_error){
				error_log(line_number, "BDDException", "Please select a database with setDatabase(database) before try to use !");
			} else {
				warning_log(line_number, "BDDException", "Please select a database with setDatabase(database) before try to use !");
			}
			return out;
		}

		std::string actTable = table;
		if(actTable == ""){
			actTable = _table;
		}

		std::string task = "SELECT * FROM `" + actTable + "`";
		auto rep = this->query(task);

		unsigned length = rep->getMetaData()->getColumnCount();
		if(_debug){
			std::cout << "There are " << length << " columns." << std::endl;

			for(unsigned i{1}; i < length+1; ++i){
				std::cout << "\tColumn " << i << " : '" << rep->getMetaData()->getColumnLabel(i) << "' (" << rep->getMetaData()->getColumnTypeName(i) << ")" << std::endl;
			}
			std::cout << std::endl;
		}

		while(rep->next()){
			if(_debug){ std::cout << "\t- "; }

			std::vector<std::string> outLine;

			for(unsigned i{0}; i < length; ++i){
				std::string outString = rep->getString(i+1);

				if(_debug){
					std::cout << outString;

					if(i + 1 < length){
						std::cout << " : ";
					}
				}

				outLine.push_back(outString);
			}

			out.push_back(outLine);

			if(_debug){ std::cout << std::endl; }
		}

		return out;
	}

	/* Insert values in the choosen table */
	size_t BDD::insert(std::string values, std::string args, std::string table){
		if(!_connected){
			if(_fatal_error){
				error_log(line_number, "BDDException", "Please connect to a database with connect(url, user, password) before try to use it !");
			} else {
				warning_log(line_number, "BDDException", "Please connect to a database with connect(url, user, password) before try to use it !");
			}
			return 0;
		}
		if(!_databased){
			if(_fatal_error){
				error_log(line_number, "BDDException", "Please select a database with setDatabase(database) before try to use !");
			} else {
				warning_log(line_number, "BDDException", "Please select a database with setDatabase(database) before try to use !");
			}
			return 0;
		}

		std::string actTable = table;
		if(actTable == ""){
			actTable = _table;
		}

		formatValues(values, actTable);

		std::string task = "INSERT INTO `" + actTable + "` VALUES(" + values + ") " + args;
		if(_debug){ std::cout << "Insertion : " << task << std::endl; }

		try {
			_stmt->execute(task);
			return this->lastId();
		} catch(sql::SQLException &e) {
			if(_fatal_error){
				error_log(line_number, "SQLException", e.what(), " (MySQL error code: ", e.getErrorCode(), ", SQLState: ", e.getSQLState(), " )");
			} else {
				warning_log(line_number, "SQLException", e.what(), " (MySQL error code: ", e.getErrorCode(), ", SQLState: ", e.getSQLState(), " )");
			}
			return 0;
		}
	
	}

	/* Update values in the choosen table */
	bool BDD::update(std::string values, std::string conditions, std::string args, std::string table){
		if(!_connected){
			if(_fatal_error){
				error_log(line_number, "BDDException", "Please connect to a database with connect(url, user, password) before try to use it !");
			} else {
				warning_log(line_number, "BDDException", "Please connect to a database with connect(url, user, password) before try to use it !");
			}
			return false;
		}
		if(!_databased){
			if(_fatal_error){
				error_log(line_number, "BDDException", "Please select a database with setDatabase(database) before try to use !");
			} else {
				warning_log(line_number, "BDDException", "Please select a database with setDatabase(database) before try to use !");
			}
			return false;
		}

		std::string actTable = table;
		if(actTable == ""){
			actTable = _table;
		}

		formatConditions(values, actTable);
		formatConditions(conditions, actTable);

		std::string task = "UPDATE `" + actTable + "` SET " + values + " " + conditions + " " + args;
		if(_debug){ std::cout << "Update : " << task << std::endl; }

		try {
			_stmt->execute(task);
			return true;
		} catch(sql::SQLException &e) {
			if(_fatal_error){
				error_log(line_number, "SQLException", e.what(), " (MySQL error code: ", e.getErrorCode(), ", SQLState: ", e.getSQLState(), " )");
			} else {
				warning_log(line_number, "SQLException", e.what(), " (MySQL error code: ", e.getErrorCode(), ", SQLState: ", e.getSQLState(), " )");
			}
			return false;
		}
	}

	/* Update values in the choosen table */
	bool BDD::update(std::vector<std::string> values, std::string conditions, std::string args, std::string table){
		if(!_connected){
			if(_fatal_error){
				error_log(line_number, "BDDException", "Please connect to a database with connect(url, user, password) before try to use it !");
			} else {
				warning_log(line_number, "BDDException", "Please connect to a database with connect(url, user, password) before try to use it !");
			}
			return false;
		}
		if(!_databased){
			if(_fatal_error){
				error_log(line_number, "BDDException", "Please select a database with setDatabase(database) before try to use !");
			} else {
				warning_log(line_number, "BDDException", "Please select a database with setDatabase(database) before try to use !");
			}
			return false;
		}

		std::string actTable = table;
		if(actTable == ""){
			actTable = _table;
		}

		auto cols = this->getColumns(table);
		for(size_t i{0}, j{0}; i < cols.size() && j < values.size(); ++i){
			auto col = cols[i];
			auto& val = values[j];

			if(col["autoincrement"] == "1" || col["default"] == "1"){ continue; }

			val = col["name"] + " = " + val;
			j++;
		}

		std::string command = "";

		for(auto value : values){
			if(command != ""){ command += ", "; }
			command += replace(value, ", ", "\\, ");
		}

		return this->update(command, conditions, args, actTable);
	}

	/* Delete values in the choosen table */
	bool BDD::remove(std::string condition, std::string args, std::string table){
		if(!_connected){
			if(_fatal_error){
				error_log(line_number, "BDDException", "Please connect to a database with connect(url, user, password) before try to use it !");
			} else {
				warning_log(line_number, "BDDException", "Please connect to a database with connect(url, user, password) before try to use it !");
			}
			return false;
		}
		if(!_databased){
			if(_fatal_error){
				error_log(line_number, "BDDException", "Please select a database with setDatabase(database) before try to use !");
			} else {
				warning_log(line_number, "BDDException", "Please select a database with setDatabase(database) before try to use !");
			}
			return false;
		}

		std::string actTable = table;
		if(actTable == ""){
			actTable = _table;
		}

		formatConditions(condition, actTable);

		std::string task = "DELETE FROM `" + actTable + "` " + condition + " " + args;
		if(_debug){ std::cout << "Deletion : " << task << std::endl; }

		try {
			_stmt->execute(task);
			return true;
		} catch(sql::SQLException &e) {
			if(_fatal_error){
				error_log(line_number, "SQLException", e.what(), " (MySQL error code: ", e.getErrorCode(), ", SQLState: ", e.getSQLState(), " )");
			} else {
				warning_log(line_number, "SQLException", e.what(), " (MySQL error code: ", e.getErrorCode(), ", SQLState: ", e.getSQLState(), " )");
			}
			return false;
		}
	}

	/* Verify if something exist in the bdd */
	bool BDD::exists(std::string task){
		this->setFatal(false);
		auto res = this->query(task);
		this->setFatal(true);

		if(res == nullptr){
			return false;
		}
		return true;
	}

	/* Format the values */
	void BDD::formatValues(std::string& values, std::string table){
		/* Get all the arguments */
			if(_debug){ std::cout << "Start 1 : \"" << values << "\"" << std::endl; }
			values = replace(values, "\\\\,", "-_-_-_-_-");
			if(_debug){ std::cout << "Start 2 : \"" << values << "\"" << std::endl; }
			auto args = explode(values, ", ");
		/*************************/

		if(values.find("=") == std::string::npos){
			/* Verify with the columns */
			auto columns = getColumns(table);

			for(size_t i{0}; i < columns.size(); ++i){
				auto column = columns[i];

				if(column["autoincrement"] == "1"){
					args.insert(args.begin()+i, "NULL");
				} else if(column["default"] == "1"){
					args.insert(args.begin()+i, column["default value"]);
				} else if(column["null"] == "1" && i >= args.size()){
					args.insert(args.begin()+i, "NULL");
				}
			}
		}

		formatBdd(args);

		/* Put the arguments in a string */
			values = implode(args, ", ");
			if(_debug){ std::cout << "End 1 : \"" << values << "\"" << std::endl; }
			values = replace(values, "-_-_-_-_-", ",");
			if(_debug){ std::cout << "End 2 : \"" << values << "\"" << std::endl; }
		/*********************************/
	}
	/* Format the values */
	void BDD::formatConditions(std::string& conditions, std::string){
		/* Get all the arguments */
			if(_debug){ std::cout << "Start 1 : \"" << conditions << "\"" << std::endl; }
			conditions = replace(conditions, "\\\\,", "-_-_-_-_-");
			if(_debug){ std::cout << "Start 2 : \"" << conditions << "\"" << std::endl; }
			auto args = explode(conditions, ", ");
		/*************************/

		formatBdd(args);

		/* Put the arguments in a string */
			conditions = implode(args, ", ");
			if(_debug){ std::cout << "End 1 : \"" << conditions << "\"" << std::endl; }
			conditions = replace(conditions, "-_-_-_-_-", ",");
			if(_debug){ std::cout << "End 2 : \"" << conditions << "\"" << std::endl; }
		/*********************************/
	}
	/* Format the values */
	void BDD::formatBdd(std::vector<std::string>& args){
		/* For each arguments */
		for(auto& arg : args){
			if(_debug){ std::cout << "Args start : \"" << arg << "\"" << std::endl; }

			arg = replace(arg, "[ ]*=[ ]*", " = ", true);

			if(_debug){ std::cout << "Args 1 : \"" << arg << "\"" << std::endl; }
		
			if(arg.find(" = ") != std::string::npos){
				if(arg.find("WHERE ") != std::string::npos){
					arg = explode(arg, "WHERE ")[1];
					auto parts = explode(arg, " AND ");

					formatBdd(parts);

					arg = "WHERE " + implode(parts, " AND ");
				} else {
					auto parts = explode(arg, " = ");
					size_t i{0};

					for(auto& part : parts){
						if(i % 2 == 0){
							part = "`" + part + "`";
						} else {
							part = "'" + replace(part, "'", "\\'") + "'";
						}

						i++;
					}

					arg = implode(parts, " = ");
				}
			} else {
				if(arg != "NULL" && arg != "NOW()"){
					arg = "'" + replace(arg, "'", "\\'") + "'";
				}
			}

			if(_debug){ std::cout << "Args end : \"" << arg << "\"" << std::endl; }
		}
	}

	/* Get all the columns of a given table */
	ColsArray BDD::getColumns(std::string table){
		ColsArray out;

		if(!_connected){
			if(_fatal_error){
				error_log(line_number, "BDDException", "Please connect to a database with connect(url, user, password) before try to use it !");
			} else {
				warning_log(line_number, "BDDException", "Please connect to a database with connect(url, user, password) before try to use it !");
			}
			return out;
		}
		if(!_databased){
			if(_fatal_error){
				error_log(line_number, "BDDException", "Please select a database with setDatabase(database) before try to use !");
			} else {
				warning_log(line_number, "BDDException", "Please select a database with setDatabase(database) before try to use !");
			}
			return out;
		}

		std::string actTable = table;
		if(actTable == ""){
			actTable = _table;
		}

		std::string task = "SELECT * FROM `" + actTable + "`";
		auto rep = query(task);

		/* Get the default value of columns */
			auto cols = query("SELECT COLUMN_NAME AS columnname, COLUMN_DEFAULT AS defaultvalue FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '" + _database + "' AND TABLE_NAME = '" + actTable + "' AND COLUMN_DEFAULT IS NOT NULL");
			std::map<std::string, std::string> convertedCols;
	
			while(cols->next()){
				convertedCols[cols->getString(1)] = cols->getString(2);
			}
		/************************************/

		unsigned length = rep->getMetaData()->getColumnCount();

		if(_debug){ std::cout << "There are " << length << " columns." << std::endl; }

		std::map<std::string, std::string> outLine;
		for(unsigned i{1}; i < length+1; ++i){
			if(_debug){ std::cout << "\tColumn " << i << " ;" << std::endl; }

			outLine["name"] = rep->getMetaData()->getColumnLabel(i);
			if(_debug){ std::cout << "\t- Name : '" << rep->getMetaData()->getColumnLabel(i) << "'" << std::endl; }

			outLine["type"] = rep->getMetaData()->getColumnTypeName(i);
			if(_debug){ std::cout << "\t- Type : '" << rep->getMetaData()->getColumnTypeName(i) << "'" << std::endl; }

			if(rep->getMetaData()->isAutoIncrement(i)){
				outLine["autoincrement"] = "1";
			} else {
				outLine["autoincrement"] = "0";
			}
			if(_debug){ std::cout << "\t- AutoIncrement : '" << rep->getMetaData()->isAutoIncrement(i) << "'" << std::endl; }
			if(rep->getMetaData()->isNullable(i)){
				outLine["null"] = "1";
			} else {
				outLine["null"] = "0";
			}
			if(_debug){ std::cout << "\t- Nullable : '" << rep->getMetaData()->isNullable(i) << "'" << std::endl; }
			if(rep->getMetaData()->isNumeric(i)){
				outLine["numeric"] = "1";
			} else {
				outLine["numeric"] = "0";
			}
			if(_debug){ std::cout << "\t- Numeric : '" << rep->getMetaData()->isNumeric(i) << "'" << std::endl; }
			outLine["default"] = "0";
			for(auto& col : convertedCols){
				if(col.first == rep->getMetaData()->getColumnLabel(i)){
					outLine["default"] = "1";
					outLine["default value"] = col.second;
				}
			}
			if(_debug){
				std::cout << "\t- Default : '" << outLine["default"] << "'" << std::endl;
				if(outLine["default"] == "1"){
					std::cout << "\t- Value : '" << outLine["default value"] << "'" << std::endl;
				}
			}
		

			out.push_back(outLine);
		}

		if(_debug){ std::cout << std::endl; }

		return out;
	}

	/* Verify if a table contains an autoincremented column */
	bool BDD::hasAutoincrement(std::string table){
		auto cols = this->getColumns(table);

		for(auto& col : cols){
			if(col["autoincrement"] == "1"){ return true; }
		}

		return false;
	}

	/* Return the columns count */
	size_t BDD::getCount(std::string table, std::string conditions){
		if(!_connected){
			if(_fatal_error){
				error_log(line_number, "BDDException", "Please connect to a database with connect(url, user, password) before try to use it !");
			} else {
				warning_log(line_number, "BDDException", "Please connect to a database with connect(url, user, password) before try to use it !");
			}
			return 0;
		}
		if(!_databased){
			if(_fatal_error){
				error_log(line_number, "BDDException", "Please select a database with setDatabase(database) before try to use !");
			} else {
				warning_log(line_number, "BDDException", "Please select a database with setDatabase(database) before try to use !");
			}
			return 0;
		}

		std::string actTable = table;
		if(actTable == ""){
			actTable = _table;
		}

		std::string task = "SELECT COUNT(*) AS count FROM `" + actTable + "` " + conditions;
		auto rep = this->query(task);
		if(rep == nullptr){ return 0; }

		rep->next();
	
		return tost(rep->getString(1));
	}

	/* Get all the tables */
	ListArray BDD::tables(){
		ListArray out;

		if(!_connected){
			if(_fatal_error){
				error_log(line_number, "BDDException", "Please connect to a database with connect(url, user, password) before try to use it !");
			} else {
				warning_log(line_number, "BDDException", "Please connect to a database with connect(url, user, password) before try to use it !");
			}
			return out;
		}
		if(!_databased){
			if(_fatal_error){
				error_log(line_number, "BDDException", "Please select a database with setDatabase(database) before try to use !");
			} else {
				warning_log(line_number, "BDDException", "Please select a database with setDatabase(database) before try to use !");
			}
			return out;
		}

		std::string task = "SHOW TABLES";
		auto rep = query(task);

		unsigned length = rep->getMetaData()->getColumnCount();

		while(rep->next()){
			if(_debug){ std::cout << "\t- "; }

			std::vector<std::string> outLine;

			for(unsigned i{0}; i < length; ++i){
				std::string outString = rep->getString(i+1);

				if(_debug){
					std::cout << outString;

					if(i + 1 < length){
						std::cout << " : ";
					}
				}

				outLine.push_back(outString);
			}

			out.push_back(outLine);

			if(_debug){ std::cout << std::endl; }
		}

		return out;
	}

	/*! \brief	Return the last created id with "SELECT LAST_INSERT_ID() AS id" */
	size_t BDD::lastId(){
		std::string task = "SELECT LAST_INSERT_ID() AS id";
		auto rep = query(task);
		if(rep == nullptr){ return 0; }

		rep->next();
		auto id = rep->getString(1);
	
		return tost(id);
	}

	/* Return the formatted name */
	std::string BDD::formatColumn(std::string name){
		return replace(name, "_", " ");
	}
}
#endif
