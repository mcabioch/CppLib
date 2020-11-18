/*!
 *
 *  \file       ConsoleTable.hpp
 *  \author     Mathias CABIOCH-DELALANDE
 *  \created    August, 16 2018
 *  \modified   November, 18 2020
 *
 */
#ifndef HEADER_MCD_CONSOLE_TABLE
#define HEADER_MCD_CONSOLE_TABLE

#include "includes.hpp"

namespace mcd
{
    /*!
     * \class	ConsoleTable
     * \brief	A class to print a table in the console
     */
    class ConsoleTable {
        public:
        ConsoleTable();

        void headers(std::vector< std::string > h);

        void lines(std::vector< std::vector< std::string > > ls) {
            for (auto l : ls) { this->line(l); }
        }
        void line(std::vector< std::string > l);

        friend std::ostream& operator<<(std::ostream& str, ConsoleTable& t);

        private:
        std::vector< std::vector< std::string > > table;
        std::map< std::string, std::string >      tableCars;
    };
}   // namespace mcd

#endif   // HEADER_MCD_CONSOLE_TABLE
