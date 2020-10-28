/*!
 *
 *	\file		lowDefines.hpp
 *	\author		Mathias CABIOCH-DELALANDE
 *	\created	Sunday October, 25 2020 18:40:52
 *	\modified	Sunday October, 25 2020
 *
 */
#ifndef HEADER_LOW_DEFINES
#define HEADER_LOW_DEFINES

#include "OsDetection.hpp"

/*!
 * \brief    A define to add operators <=, >, >=, and != when == and < are defined.
 */
#define MCD_AUTO_OPERATORS(Type)                                                                   \
    friend bool operator<=(const Type& a, const Type& b) const noexcept {                          \
        return a == b || a < b;                                                                    \
    }                                                                                              \
    friend bool operator>(const Type& a, const Type& b) const noexcept { return !(a <= b); }       \
    friend bool operator!=(const Type& a, const Type& b) const noexcept { return !(a == b); }      \
    friend bool operator>=(const Type& a, const Type& b) const noexcept { return a == b || a > b; }

#endif   // HEADER_LOW_DEFINES
