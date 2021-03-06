/*!
 *
 *  \file       Referenced.hpp
 *  \author     Mathias CABIOCH-DELALANDE
 *  \created    July, 26 2018 08:47:36
 *  \modified   November, 18 2020
 *
 */
#ifndef HEADER_MCD_REFERENCED
#define HEADER_MCD_REFERENCED

#include "includes.hpp"

namespace mcd
{
    /*!
     * \class	Referenced
     * \brief	A class to have a reference to the class' pointer
     */
    template< class C >
    class Referenced {
        /* Members of Referenced */
        public:
        /* Constructor of Referenced */
        explicit Referenced(C* her) : _her(*her) {}

        /* Atttributes of Referenced */
        protected:
        /* Local */
        C& _her;
    };

    template< class C >
    C& ref(C* obj) {
        return *obj;
    }
    template< class C >
    C& ref(std::shared_ptr< C > obj) {
        return *obj;
    }
}   // namespace mcd

#endif   // HEADER_MCD_REFERENCED
