/*!
 *
 *	\file		AssertionException.hpp
 *	\author		Mathias CABIOCH-DELALANDE
 *	\created	Wednesday November, 13 2019 11:20:22
 *	\modified	October, 24 2020
 *
 */
#ifndef HEADER_ASSERTION_EXCEPTION
#define HEADER_ASSERTION_EXCEPTION

#include "defines.hpp"

namespace mcd
{
    /*!
     * \class	AssertionException
     * \brief	An exception thrown by my assert's implementation
     */
    class AssertionException : public exception {
        /* Members of AssertionException */
        public:
        /* Constructors & Destructor of AssertionException */
        /*! \brief	The constructor of the class */
        explicit AssertionException(const std::string& explaination) throw();
        virtual ~AssertionException() throw();
    };
}   // namespace mcd

#endif   // HEADER_ASSERTION_EXCEPTION
