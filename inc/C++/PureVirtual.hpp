/*!
*
*	\file		PureVirtual.hpp
*	\author		Mathias CABIOCH-DELALANDE
*	\created	Saturday August, 11 2018 12:06:08
*	\modified	August, 17 2018
*
*/
#ifndef HEADER_PURE_VIRTUAL
#define HEADER_PURE_VIRTUAL

namespace mcd {
	/*!
	* \class	PureVirtual
	* \brief	A class to make some other to be abstract class
	*/
	class PureVirtual {
		/* Usefull or required defines */
		
		/* Members of PureVirtual */
		public:
			/* Internal enums of PureVirtual */
			
			/* Constructors & Destructor of PureVirtual */
				/*! \brief	The constructor of the class */
				PureVirtual();
				virtual ~PureVirtual();
			/* Getters of PureVirtual */
			
			/* Setters of PureVirtual */
			
			/* Statics of PureVirtual */
			
			/* Operators of PureVirtual */
			
			/* Friends of PureVirtual */
			
			/* Others members of PureVirtual */
				virtual void PureVirtualMethod() final = 0;

		protected:
			/* Getters of PureVirtual */
			
			/* Setters of PureVirtual */
			
			/* Statics of PureVirtual */
			
			/* Friends of PureVirtual */
			
			/* Others members of PureVirtual */
			

		private:
		

		/* Atttributes of PureVirtual */
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

#endif //HEADER_PURE_VIRTUAL
