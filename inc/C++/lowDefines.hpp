/*!
 *
 *  \file       lowDefines.hpp
 *  \author     Mathias CABIOCH-DELALANDE
 *  \created    Sunday October, 25 2020 18:40:52
 *  \modified   November, 18 2020
 *
 */
#ifndef HEADER_MCD_LOW_DEFINES
#define HEADER_MCD_LOW_DEFINES

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

/*!
 * \brief    A define to generate begin, cebgin, end, and cend iterators.
 * \param[in]   ArrayType      The type of the array to create iterators for
 * \param[in]   ArrayMember    The name of the member variable to create iterators for
 */
#define GENERATE_ITERATORS(ArrayType, ArrayMember)                                                 \
    typename ArrayType::iterator       begin() { return ArrayMember.begin(); }                     \
    typename ArrayType::const_iterator begin() const { return ArrayMember.begin(); }               \
    typename ArrayType::const_iterator cbegin() const { return begin(); }                          \
                                                                                                   \
    typename ArrayType::iterator       end() { return ArrayMember.end(); }                         \
    typename ArrayType::const_iterator end() const { return ArrayMember.end(); }                   \
    typename ArrayType::const_iterator cend() const { return end(); }
}   // namespace mcd

#endif   // HEADER_MCD_LOW_DEFINES
