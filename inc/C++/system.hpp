/*!
 *
 *  \file       system.hpp
 *  \author     Mathias CABIOCH-DELALANDE
 *  \created    April, 24 2019
 *  \modified   November, 18 2020
 *
 */
#ifndef HEADER_MCD_SYSTEM
#define HEADER_MCD_SYSTEM

#include "errors.hpp"

namespace mcd
{
    /*! \brief	Use system in an IF and say if there is an error */
    void exec(const std::string& cmd, bool force = false);

    /*! \brief	Write a string in cout like in a server */
    void servLog(const std::string& str, bool server = false, const std::string& name = "Server");
}   // namespace mcd

#endif   // HEADER_MCD_SYSTEM
