/*!
*
*	\file		Threadable.hpp
*	\author		Mathias CABIOCH-DELALANDE
*	\modified	August, 17 2018
*
*/
#ifndef HEADER_CPP_THREADABLE
#define HEADER_CPP_THREADABLE

#include "C++/includes.hpp"

namespace mcd {
#define THREADABLE\
	public:\
		/*! \brief	The function to start the thread */\
		void launch(){\
			Threadable::launch(this);\
		}\
		/*!
		\brief	The function call by the thread, that call update()
		\details	The update call is locked up between a lock and an unlock of the Threadable \b mutex
		*/\
		void updater(){\
			while(!this->hasToStop()){\
				_mutex.lock();\
					this->update();\
					this->notInUse();\
				_mutex.unlock();\
\
				this->sleeping_loop();\
\
				_mutex.lock();\
					this->inUse();\
				_mutex.unlock();\
			}\
\
			_mutex.lock();\
				this->notInUse();\
			_mutex.unlock();\
		}

#define THREADABLE_LOCK std::lock_guard<std::mutex> guard(_mutex);

	/*!
	* \brief	A class to let another one to be threadable with update() member in a thread
	* \details	On heritage,\n
	*			- : public Threadable<\b Your \b class >
	*			- Add \b THREADABLE before \b public
	*
	*			On use,\n
	*			- In a member function that will not be called by update(), put on the first line of it : THREADABLE_LOCK
	*/
	template<class C>
	class Threadable {
		public:
			/*! \brief	The constructor of the Threadable class */
			Threadable() : 
				m_loopThread(nullptr),
				m_threadStopper(false),
				used(false),
				_mutex(),
				sleeper(0)
			{}
			/*! \brief	The copy constructor of the Threadable class */
			Threadable(Threadable<C>& other) : 
				m_loopThread(nullptr),
				m_threadStopper(false),
				used(false),
				_mutex(),
				sleeper(0)
			{
				other._mutex.lock();
					_mutex.lock();
						m_loopThread = other.m_loopThread;
						m_threadStopper = other.m_threadStopper;
						used = other.used;
						sleeper = other.sleeper;
					_mutex.unlock();
				other._mutex.unlock();
			}
			/*! \brief	The destructor of the Threadable class */
			virtual ~Threadable(){
				this->stop();
			}

			#ifndef DOXYGEN_SHOULD_SKIP_THIS
				virtual void update() = 0;

				void launch(C* obj){
					m_loopThread.reset(new std::thread(&C::updater, obj));
				}
			#endif //DOXYGEN_SHOULD_SKIP_THIS

			/*! \brief	Start the thread */
			virtual void launch() = 0;

			/*! \brief	Stop the thread and delete the pointer correctly */
			void stop(){
				m_threadStopper = true;
				_mutex.lock();
				while(used){
					_mutex.unlock();
					milliSleep(10);
					_mutex.lock();
				}
				_mutex.unlock();
				deletePtr(m_loopThread);
			}

			/*!
			* \brief	Return if the thread has been launched or not
			*		\return		\b true or \b false
			*/
			bool launched()const {
				return (m_loopThread != nullptr);
			}

			/*!
			* \brief	Return if the thread has to stop or not
			*		\return		\b true or \b false
			*/
			bool hasToStop()const {
				return m_threadStopper;
			}

			/*! \brief	Set that the thread is actually used */
			void inUse(){ used = true; }
			/*! \brief	Set that the thread is not used */
			void notInUse(){ used = false; }

		protected:
			#ifndef DOXYGEN_SHOULD_SKIP_THIS
				void sleeping_loop(){
					long int actually = 0;
					long int step = 10;

					while(actually < (this->sleeper * 1000) && !this->hasToStop()){
						nanoSleep(step);
						actually += step;
					}
				}
			#endif //DOXYGEN_SHOULD_SKIP_THIS

		protected:
			#ifndef DOXYGEN_SHOULD_SKIP_THIS
				std::shared_ptr<std::thread> m_loopThread;
				bool m_threadStopper;
				bool used;
			#endif //DOXYGEN_SHOULD_SKIP_THIS

			/*! \brief	The mutex variable to use in the threadable class */
			std::mutex _mutex;

			/*! \brief	The time that the threadable class has to sleep after each update */
			long int sleeper;
	};
}

#endif //HEADER_CPP_THREADABLE
