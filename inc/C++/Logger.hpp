/*!
*
*	\file		Logger.hpp
*	\author		Mathias CABIOCH-DELALANDE
*	\created	Saturday November, 09 2019 17:01:15
*	\modified	Saturday November, 13 2019
*
*/
#ifndef HEADER_LOGGER
#define HEADER_LOGGER

#include "C++/defines.hpp"

namespace mcd {
	/*!
	* \todo		Add comments
	* \class	Logger
	* \brief	A class to log some messages
	*/
	class Logger {
		/* Usefull or required defines */
			
		/* Members of Logger */
		public:
			/* Internal enums of Logger */
				enum Level {
					ALL=0,
					DEBUG,
					INFO,
					WARN,
					ERROR,
					FATAL,
					OFF
				};
			/* Constructors & Destructor of Logger */
				/*! \brief	The constructor of the class */
				Logger();
				/*! \brief	The destructor of the class */
				virtual ~Logger();
			/* Getters of Logger */
				
			/* Setters of Logger */
				
			/* Statics of Logger */
				
			/* Operators of Logger */
				
			/* Friends of Logger */
				
			/* Others members of Logger */
				void init(const std::string& logConfigFile);
				bool isInit()const { return _initialized; }
				bool isEnabled(Level level);

				template<class ...Args>
				void log(Level level, int line, const std::string& file, Args... args){
					std::lock_guard<std::mutex> lock(_mutex);

					if(!_initialized){
						warning_log(line_number, "Wrong use", "Init the Logger before use it !");
						return;
					}

					if(!isEnabled(level)){
						return;
					}

					std::ofstream write;
					write.open(_logFile.c_str(), std::ios::app);

					if(!write){
						error_log(line_number, "File opening error", "Something went wrong when trying to open, ", _logFile);
					}

					DateTime date;
					write << date.get();
					write << " [ ";
					switch(level){
						case DEBUG:
							write << "DEBUG";
							break;
						case INFO:
							write << "INFO";
							break;
						case WARN:
							write << "WARNING";
							break;
						case ERROR:
							write << "ERROR";
							break;
						case FATAL:
							write << "FATAL";
							break;
						default:
							break;
					}
					write << " ] " << file << ":" << line << " : ";
					write.close();

					intern_log(args...);

					return;
				}

		protected:
			/* Getters of Logger */
				
			/* Setters of Logger */
				
			/* Statics of Logger */
				
			/* Friends of Logger */
				
			/* Others members of Logger */
				

		private:
			/*!
			* \brief	The copy constructor of the class
			*	\param[in]		other		The class' instance for copying
			*/
			Logger(const Logger& other);
			/*!
			* \brief	The move constructor of the class
			*	\param[in]		other		The class' instance for moving
			*/
			Logger(const Logger&& other);
			/*!
			* \brief	The copy operator of the class
			*	\param[in]		other		The class' instance for copying
			*/
			Logger& operator=(const Logger& other) noexcept;
			/*!
			* \brief	The move operator of the class
			*	\param[in]		other		The class' instance for moving
			*/
			Logger& operator=(const Logger&& other) noexcept;

			void destruct();

			template<class T, class ...Args>
			void intern_log(const T& msg, Args... args){
				std::ofstream write;
				write.open(_logFile.c_str(), std::ios::app);

				write << msg << " ";
				write.close();

				intern_log(args...);

				return;
			}

			template<class T, class ...Args>
			void intern_log(const T& msg){
				std::ofstream write;
				write.open(_logFile.c_str(), std::ios::app);

				write << msg << std::endl;
				write.close();

				return;
			}

			bool startInit();
			std::vector<std::string> readConfig(const std::string& file);
			void backupLastLogs();

		/* Atttributes of Logger */
		public:
			/* Global */
				
			/* Local */
				

		protected:
			/* Global */
				
			/* Local */
				

		private:
			/* Global */
				
			/* Local */
				static size_t _nbInstance;
				mutex _mutex;
				bool _initialized;

				std::string _logFile;
				Level _printedLevel;
	};

	extern Logger logger;
	#define logs(LEVEL, ...) logger.log(LEVEL, __LINE__, __FILE__, __VA_ARGS__)

	#define debug_log() logs(mcd::Logger::DEBUG)
	#define debug_logs(...) logs(mcd::Logger::DEBUG, __VA_ARGS__)
}

#endif //HEADER_LOGGER
