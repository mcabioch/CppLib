/*!
*
*	\file		convert.hpp
*	\author		Mathias CABIOCH-DELALANDE
*	\modified	August, 15 2018
*
*/
#ifndef HEADER_CPP_CONVERT
#define HEADER_CPP_CONVERT

#include <type_traits>

#include "C++/array.hpp"

namespace mcd {
	#ifdef DOXYGEN_SHOULD_SKIP_THIS
		/*!
		* \brief	Convert \a in in a string
		*		\param[in]		in		The variable to convert
		*
		*		\return			Return a string
		*/
		template<typename Type>
		std::string tos(Type in){
			std::stringstream out;
			out << in;
			return out.str();
		}
	#else
		/*!
		* \brief	Convert an enum in string
		*		\param[in]		in		The variable to convert
		*
		*		\return			Return a string
		*/
		template<typename V>
		typename std::enable_if<
			std::is_enum<V>::value,
			std::string
		>::type
		tos(V in){
			std::stringstream out;

			out << static_cast<typename std::underlying_type<V>::type>(in);

			return out.str();
		}

		/*!
		* \brief	Convert a chrono::duration in string
		*		\param[in]		in		The variable to convert
		*
		*		\return			Return a string
		*/
		template<typename V>
		typename std::enable_if<
			Check::is_duration<V>::value,
			std::string
		>::type
		tos(V in){
			std::stringstream out;

			out << in.count();

			return out.str();
		}

		/*!
		* \brief	Convert \a in variable in string
		*		\param[in]		in		The variable to convert
		*
		*		\return			Return a string
		*/
		template<typename V>
		typename std::enable_if<
				!std::is_enum<V>::value &&
				!Check::is_duration<V>::value,
			std::string
		>::type
		tos(V in){
			std::stringstream out;

			out << in;

			return out.str();
		}
	#endif

	/*!
	* \brief	Convert \a in variable in int
	*		\param[in]		in		The variable to convert
	*
	*		\return			Return an int
	*/
	template<typename V>
	int toi(V in) {
		std::stringstream tmp;
		int out;

		tmp << tos(in);
		tmp >> out;

		return out;
	}

	/*!
	* \brief	Convert \a in variable in double
	*		\param[in]		in		The variable to convert
	*
	*		\return			Return a double
	*/
	template<typename V>
	double tod(V in) {
		std::stringstream tmp;
		double out;

		tmp << tos(in);
		tmp >> out;

		return out;
	}

	/*!
	* \brief	Convert \a in variable in float
	*		\param[in]		in		The variable to convert
	*
	*		\return			Return a float
	*/
	template<typename V>
	float tof(V in) {
		std::stringstream tmp;
		float out;

		tmp << tos(in);
		tmp >> out;

		return out;
	}

	/*!
	* \brief	Convert \a in variable in unsigned int
	*		\param[in]		in		The variable to convert
	*
	*		\return			Return an unsigned int
	*/
	template<typename V>
	unsigned int tou(V in) {
		std::stringstream tmp;
		unsigned int out;

		tmp << tos(in);
		tmp >> out;

		return out;
	}

	/*!
	* \brief	Convert \a in variable in unsigned long long int
	*		\param[in]		in		The variable to convert
	*
	*		\return			Return an unsigned long long int
	*/
	template<typename V>
	unsigned long long int tov(V in) {
		std::stringstream tmp;
		unsigned long long int out;

		tmp << tos(in);
		tmp >> out;

		return out;
	}

	/*!
	* \brief	Convert \a in variable in size_t
	*		\param[in]		in		The variable to convert
	*
	*		\return			Return a size_t
	*/
	template<typename V>
	size_t tost(V in) {
		std::stringstream tmp;
		size_t out;

		tmp << tos(in);
		tmp >> out;

		return out;
	}

	/*!
	* \brief	Convert \a in variable in short
	*		\param[in]		in		The variable to convert
	*
	*		\return			Return a size_t
	*/
	template<typename V>
	short tosh(V in) {
		std::stringstream tmp;
		short out;

		tmp << tos(in);
		tmp >> out;

		return out;
	}

	/*!
	* \brief	Convert \a in variable in boolean
	*		\param[in]		in		The variable to convert
	*
	*		\return			Return a size_t
	*/
	template<typename V>
	bool tob(V in) {
		std::stringstream tmp;
		bool out;

		tmp << tos(in);
		tmp >> out;

		return out;
	}

	/*!
	* \brief	Convert \a in variable in std::chrono::milliseconds
	*		\param[in]		in		The variable to convert
	*
	*		\return			Return a std::chrono::milliseconds
	*/
	template<typename V>
	std::chrono::milliseconds tomilli(V in) {
		std::stringstream tmp;
		long int tmp2;

		tmp << tos(in);
		tmp >> tmp2;

		std::chrono::milliseconds out(tmp2);

		return out;
	}
}

#endif //HEADER_CPP_CONVERT
