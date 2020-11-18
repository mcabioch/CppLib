/*!
 *
 *  \file       Json.hpp
 *  \author     Mathias CABIOCH-DELALANDE
 *  \created    Sunday November, 24 2019 14:24:00
 *  \modified   November, 18 2020
 *
 */
#ifndef HEADER_MCD_JSON_EXCEPTION
#define HEADER_MCD_JSON_EXCEPTION

#include "defines.hpp"

namespace mcd
{
    /*!
     * \class	JsonException
     * \brief	A class to throw Json exceptions
     */
    class JsonException : public exception {
        public:
        JsonException() : exception() {}
        JsonException(const std::string& message) : exception(message) {}
    };
}   // namespace mcd

#endif   // HEADER_MCD_JSON_EXCEPTION
