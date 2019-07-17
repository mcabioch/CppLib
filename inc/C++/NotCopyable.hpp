/*!
*
*	\file		NotCopyable.hpp
*	\author		Mathias CABIOCH-DELALANDE
*	\created	06 août 2018 06:55:14
*	\modified	06 août 2018
*
*/
#ifndef HEADER_CPP_NOT_COPYABLE
#define HEADER_CPP_NOT_COPYABLE

namespace mcd {
	/*!
	* \class	NotCopyable
	* \brief	A class to let some other not to be copyable
	*/
	class NotCopyable {
		/* Usefull or required defines */
		
		/* Members of NotCopyable */
		public:
			/* Internal enums of NotCopyable */
			
			/* Constructors & Destructor of NotCopyable */
				/*! \brief	The constructor of the class */
				NotCopyable(){}
				virtual ~NotCopyable(){}
			/* Getters of NotCopyable */
			
			/* Setters of NotCopyable */
			
			/* Statics of NotCopyable */
			
			/* Operators of NotCopyable */
			
			/* Friends of NotCopyable */
			
			/* Others members of NotCopyable */
			

		protected:
			/* Getters of NotCopyable */
			
			/* Setters of NotCopyable */
			
			/* Statics of NotCopyable */
			
			/* Friends of NotCopyable */
			
			/* Others members of NotCopyable */
			

		private:
				/*! \brief	The copy constructor of the class */
				NotCopyable(const NotCopyable&){}
				/*! \brief	The move constructor of the class */
				NotCopyable(const NotCopyable&&){}

				/*! \brief	The copy operator of the class */
				NotCopyable& operator=(const NotCopyable&) noexcept { return *this; }
				/*! \brief	The move operator of the class */
				NotCopyable& operator=(const NotCopyable&&) noexcept { return *this; }

		/* Atttributes of NotCopyable */
		public:
			/* Global */
			
			/* Local */
			

		protected:
			/* Global */
			
			/* Local */
			

		private:
			/* Global */
			
			/* Local */
			
	};
}

#endif //HEADER_CPP_NOT_COPYABLE
