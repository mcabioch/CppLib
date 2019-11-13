#include "C++/Logger.hpp"

namespace mcd {
	size_t Logger::_nbInstance = 0;

	Logger::Logger() :
		_mutex(),
		_initialized(false),
		_logFile(""),
		_printedLevel(ALL)
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
		{
			std::lock_guard<std::mutex> lock(_mutex);
			if(_initialized == true){
				return;
			}

			_initialized = true;
		}

		std::ifstream read;
		std::ofstream write;

		read.open(logConfigFile.c_str());

		if(!read){
			write.open(logConfigFile.c_str());

			write << "# Destination of the log messages\n";
			write << "output:res/logs/latest.log\n";
			write << "\n# ALL(0), DEBUG(1), INFO(2), WARN(3), ERROR(4), FATAL(5), OFF(6)\n";
			write << "level:1\n";

			write.close();
			read.open(logConfigFile.c_str());
		}

		auto lines = getlines(read);

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
				if(Level(level) > OFF){ level = toi(tos(OFF)); }

				_printedLevel = Level(level);
			}
		}

		read.close();

		read.open(_logFile.c_str());

		if(read){
			#if defined(OS_LINUX)
				exec(std::string("fold=`dirname ") + _logFile + "` && cp " + _logFile + " ${fold}/`date +\"%Y%m%d_%H%M%S\"`.log");
			#else
				warning_log(line_number, "Unsupported OS");
			#endif

			read.close();
		}

		write.open(_logFile.c_str());
		write << "";
		write.close();
	}

	bool Logger::isEnabled(Level level){
		return (toi(level) >= toi(_printedLevel));
	}

	Logger logger;
}
