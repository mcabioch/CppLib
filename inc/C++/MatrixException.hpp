/*!
 *
 *	\file		MatrixException.hpp
 *	\author		Mathias CABIOCH-DELALANDE
 *	\created	Sunday November, 01 2020 19:05:50
 *	\modified	Sunday November, 01 2020
 *
 */
#ifndef HEADER_MATRIX_EXCEPTION
#define HEADER_MATRIX_EXCEPTION

#include "exception.hpp"
#include "maths.hpp"

namespace mcd
{
    /*!
     * \class	MatrixException
     * \brief	A class to throw some exceptions for a Matrix instance.
     */
    class MatrixException : public exception {
        public:
        MatrixException() : exception() {}
        MatrixException(const std::string& message) : exception(message) {}
    };
}   // namespace mcd

#endif   // HEADER_MATRIX_EXCEPTION
