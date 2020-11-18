/*!
 *
 *  \file       macro.hpp
 *  \author     Mathias CABIOCH-DELALANDE
 *  \created    May, 29 2018
 *  \modified   November, 18 2020
 *
 */
#ifndef HEADER_MCD_MACRO
#define HEADER_MCD_MACRO

namespace mcd
{
    /*!
     * \brief	A macro to \b create aliases
     *		\param[in]		highLevelF			The alias
     *		\param[in]		lowLevelF			The function
     */
#define ALIAS_TEMPLATE_FUNCTION(highLevelF, lowLevelF)                                             \
    template< typename... Args >                                                                   \
    inline auto highLevelF(Args&&... args)->decltype(lowLevelF(std::forward< Args >(args)...)) {   \
        return lowLevelF(std::forward< Args >(args)...);                                           \
    }
    /*****************************/
}   // namespace mcd

#endif   // HEADER_MCD_MACRO
