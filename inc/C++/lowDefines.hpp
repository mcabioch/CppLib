/*!
 *
 *	\file		lowDefines.hpp
 *	\author		Mathias CABIOCH-DELALANDE
 *	\created	Sunday October, 25 2020 18:40:52
 *	\modified	November, 01 2020
 *
 */
#ifndef HEADER_LOW_DEFINES
#define HEADER_LOW_DEFINES

#include "OsDetection.hpp"

namespace mcd
{
/*!
 * \brief    A define to add operator > using == and <
 * \param[in]   Type    The type of the object to test
 */
#define AUTO_OPERATOR_GREATER(Type)                                                                \
    friend inline bool operator>(const Type& a, const Type& b) noexcept {                          \
        return !(a < b) && !(a == b);                                                              \
    }

/*!
 * \brief    A define to add operator >= using <
 * \param[in]   Type    The type of the object to test
 */
#define AUTO_OPERATOR_GREATER_EQ(Type)                                                             \
    friend inline bool operator>=(const Type& a, const Type& b) noexcept { return !(a < b); }

/*!
 * \brief    A define to add operator <= using == and <
 * \param[in]   Type    The type of the object to test
 */
#define AUTO_OPERATOR_LESS_EQ(Type)                                                                \
    friend inline bool operator<=(const Type& a, const Type& b) noexcept { return a == b || a < b; }

/*!
 * \brief    A define to add operator != using ==
 * \param[in]   Type    The type of the object to test
 */
#define AUTO_OPERATOR_DIFF(Type)                                                                   \
    friend inline bool operator!=(const Type& a, const Type& b) noexcept { return !(a == b); }

/*!
 * \brief    A define to add operators <=, >, >=, and != when == and < are defined.
 * \param[in]   Type    The type of the object to test
 */
#define AUTO_OPERATORS(Type)                                                                       \
    AUTO_OPERATOR_GREATER(Type)                                                                    \
    AUTO_OPERATOR_GREATER_EQ(Type)                                                                 \
    AUTO_OPERATOR_LESS_EQ(Type)                                                                    \
    AUTO_OPERATOR_DIFF(Type)

#define try_catch(Instruction, Exception)                                                          \
    try {                                                                                          \
        Instruction;                                                                               \
    } catch (const Exception& exception) { exception.what(); }
}   // namespace mcd

#endif   // HEADER_LOW_DEFINES
