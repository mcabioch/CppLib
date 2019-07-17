/*!
*
*	\file		PathfindingException.hpp
*	\author		Mathias CABIOCH-DELALANDE
*	\created	July, 30 2018 09:25:28
*	\modified	August, 15 2018
*
*/
#ifndef HEADER_CPP_PATHFINDING_EXCEPTION
#define HEADER_CPP_PATHFINDING_EXCEPTION

#include "C++/includes.hpp"

namespace mcd {
	/*!
	* \class	PathfindingException
	* \brief	All exceptions that could be thrown by the pathfinding algorithm
	*/
	class PathfindingException : public std::exception {
		/* Members of PathfindingException */
		public:
			enum PathfindingErrorCode {
				NONE,
				ARRIVED,
				LOST,
				OTHER
			};

			/* Constructors & Destructor of PathfindingException */
				/*! \brief	The constructor of the class */
				PathfindingException(PathfindingErrorCode error = PathfindingErrorCode::NONE, std::string const& explaination = "") throw();
				virtual ~PathfindingException() throw();

				PathfindingException(const PathfindingException& other) throw();
			/* Getters of PathfindingException */
			
			/* Setters of PathfindingException */
			
			/* Statics of PathfindingException */
			
			/* Operators of PathfindingException */
			
			/* Friends of PathfindingException */
			
			/* Others members of PathfindingException */
				/*! \brief	Return the explaination of the exception */
				virtual const char* what() const throw(){
					return _explaination.c_str();
				}

				/*! \brief	Return the error code of the exception */
				PathfindingErrorCode getErrorCode() const throw(){
					return _error;
				}

				static void Arrived();
				static void Lost();

		protected:
			/* Getters of PathfindingException */
			
			/* Setters of PathfindingException */
			
			/* Statics of PathfindingException */
			
			/* Friends of PathfindingException */
			
			/* Others members of PathfindingException */
			

		private:
		

		/* Atttributes of PathfindingException */
		public:
			/* Global */
			
			/* Local */
			

		protected:
			/* Global */
			
			/* Local */
			

		private:
			/* Global */
			
			/* Local */
				PathfindingErrorCode _error;
				std::string _explaination;
	};
}

#endif //HEADER_CPP_PATHFINDING_EXCEPTION
