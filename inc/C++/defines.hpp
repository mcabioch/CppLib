/*!
 *
 *  \file       defines.hpp
 *  \author     Mathias CABIOCH-DELALANDE
 *  \created    January, 19 2019
 *  \modified   November, 18 2020
 *
 *	\details	- Enable the use of ;
 *					- BDD with bdd\n
 *					- RND with rnd\n
 *					- Arguments with arguments\n
 *					- std::ifstream with reader\n
 *					- std::ofstream with writer\n
 *					- IOConfig with ioconfig\n
 *
 */
#ifndef HEADER_MCD_DEFINES
#define HEADER_MCD_DEFINES

#include "Timer.hpp"
//#include "bdd.hpp"
#include "Args.hpp"
#include "Clock.hpp"
#include "ConsoleTable.hpp"
#include "DateTime.hpp"
#include "IOConfig.hpp"
#include "Map.hpp"
#include "Referenced.hpp"

namespace mcd
{
    /* Some defines */
    /*! \brief	Alias */
    using VI = std::vector< int >;
    /*! \brief	Alias */
    using vector_str = std::vector< std::string >;
    /*! \brief	Alias */
    using map_str = std::map< std::string, std::string >;
    /*! \brief	Alias */
    using pair_str = std::pair< std::string, std::string >;
    /****************/

    /*! \brief	A struct to define \b Contraption attributes */
    struct ContraptionAttr {
        /*! Width */
        double64_t w = 0;
        /*! Height */
        double64_t h = 0;
        /*! Angle */
        double64_t angle = 0;
    };

    /*! \brief	Directions to move */
    enum class Direction { UP = 0, DOWN = 1, RIGHT = 2, LEFT = 3, NONE = 4 };
}   // namespace mcd

#endif   // HEADER_MCD_DEFINES
