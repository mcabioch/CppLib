/*!
 *
 *  \file       IOConfig.hpp
 *  \author     Mathias CABIOCH-DELALANDE
 *  \created    Saturday January, 19 2019 17:09:41
 *  \modified   November, 18 2020
 *
 */
#ifndef HEADER_MCD_IOCONFIG
#define HEADER_MCD_IOCONFIG

#include "includes.hpp"

namespace mcd
{
    /*!
     * \class	IOConfig
     * \brief	A class to configure inputs and outputs
     */
    class IOConfig {
        /* Usefull or required defines */
        typedef std::numeric_limits< double > dbl;
        /* Members of IOConfig */
        public:
        /* Constructors & Destructor of IOConfig */
        /*! \brief	The constructor of the class */
        IOConfig();
        virtual ~IOConfig();
    };

    // /* \brief	Redefining std::basic_istream to allow use of formatted inputs */
    // template< class E, class T, int N >
    // std::basic_istream< E, T >& operator>>(std::basic_istream< E, T >& in, const E (&literal)[N])
    // {
    //     std::array< E, N - 1 > buffer;                      // get buffer
    //     in >> buffer[0];                                    // skips whitespace
    //     if (N > 2) in.read(&buffer[1], N - 2);              // read the rest
    //     if (strncmp(&buffer[0], literal, N - 1))            // if it failed
    //         in.setstate(in.rdstate() | std::ios::badbit);   // set the state
    //     return in;
    // }
    // /* \brief	Redefining std::basic_istream to allow use of formatted inputs */
    // template< class E, class T >
    // std::basic_istream< E, T >& operator>>(std::basic_istream< E, T >& in, const E& literal) {
    //     E buffer;                                           // get buffer
    //     in >> buffer;                                       // read data
    //     if (buffer != literal)                              // if it failed
    //         in.setstate(in.rdstate() | std::ios::badbit);   // set the state
    //     return in;
    // }
    // /* \brief	Redefining std::basic_istream to allow use of formatted inputs
    //  * \details	redirect mutable char arrays to their normal function
    //  */
    // template< class E, class T, int N >
    // std::basic_istream< E, T >& operator>>(std::basic_istream< E, T >& in, E (&carray)[N]) {
    //     return std::operator>>(in, carray);
    // }
}   // namespace mcd

#endif   // HEADER_MCD_IOCONFIG
