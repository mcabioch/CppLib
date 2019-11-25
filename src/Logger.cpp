#include "C++/Logger.hpp"

namespace mcd {
	size_t Logger::_nbInstance = 0;

	Logger::Logger() :
		_mutex(),
		_initialized(false),
		_logFile(""),
		_printedLevel(All),
		_actLevel(Off)
	{
		_nbInstance++;

		if(_nbInstance >= 2){
			destruct();
			return;
		}
	}

	Logger::~Logger(){
		destruct();
	}

	void Logger::destruct(){
		_nbInstance--;
	}

	void Logger::init(const std::string& logConfigFile){
		std::lock_guard<std::mutex> lock(_mutex);

		if(!startInit()){
			return;
		}

		auto lines = readConfig(logConfigFile);

		for(auto& line : lines){
			if(line.size() == 0
				|| line[0] == '#'
				|| line.find(":") == std::string::npos){
				continue;
			}
			auto parts = explode(line, ':');

			if(parts[0] == "output"){
				_logFile = parts[1];
			} else if(parts[0] == "level"){
				int level = toi(parts[1]);
				if(level < 0){ level = 0; }
				if(Level(level) > Off){ level = toi(tos(Off)); }

				_printedLevel = Level(level);
			}
		}

		backupLastLogs();
	}

	bool Logger::startInit(){
		if(_initialized == true){
			return false;
		}

		_initialized = true;

		return true;
	}

	std::vector<std::string> Logger::readConfig(const std::string& file){
		std::ifstream read;
		std::ofstream write;

		read.open(file.c_str());

		if(!read){
			write.open(file.c_str());

			write << "# Destination of the log messages\n";
			write << "output:res/logs/latest.log\n";
			write << "\n# All(0), Debug(1), Info(2), Warn(3), Error(4), Fatal(5), Off(6)\n";
			write << "level:1\n";

			write.close();
			read.open(file.c_str());
		}

		auto lines = getlines(read);

		read.close();

		return lines;
	}

	void Logger::backupLastLogs(){
		#if defined(OS_LINUX)
			exec(std::string("fold=`dirname ") + _logFile + "` && mkdir -p ${fold}");
		#else
			warning_log(line_number, "Unsupported OS");
		#endif

		std::ifstream read;
		read.open(_logFile.c_str());

		if(read){
			#if defined(OS_LINUX)
				exec(std::string("fold=`dirname ") + _logFile + "` && cp " + _logFile + " ${fold}/`date +\"%Y%m%d_%H%M%S\"`.log");
			#else
				warning_log(line_number, "Unsupported OS");
			#endif

			read.close();
		}

		std::ofstream write;
		write.open(_logFile.c_str());
		write << "";
		write.close();
	}

	bool Logger::isEnabled(Level level){
		return (toi(level) >= toi(_printedLevel));
	}

	Logger logger;
}
