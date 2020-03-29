/*!
 *
 *	\file		Cell.hpp
 *	\author		Mathias CABIOCH-DELALANDE
 *	\created	Thursday January, 17 2019 20:33:57
 *	\modified	February, 12 2020
 *
 */
#ifndef HEADER_GENETIC_CELL
#define HEADER_GENETIC_CELL

#include "C++/Chromosome.hpp"

namespace mcd
{
    namespace natural
    {
        /*!
         * \class	Cell
         * \brief	A cell with chromosomes
         */
        class Cell {
            /* Members of Cell */
            public:
            /* Constructors & Destructor of Cell */
            /*! \brief	The constructor of the class
             *	\param[in]	chroms	A vector of Chromosome, an alias is Chromosomes
             */
            Cell(Chromosomes chroms);
            virtual ~Cell();

            /* Getters of Chromosome */
            double Value(std::string str, size_t chromosomeIndex, size_t geneNumber) const;

            /* Operators of Cell */
            /*! \brief	Do the crossover for each Chromosome between the 2 Cells */
            Cell        operator+=(const Cell& c1);
            friend bool operator==(const Cell& c1, const Cell& c2) {
                return (c1._chroms == c2._chroms);
            }
            friend bool operator!=(const Cell& c1, const Cell& c2) { return !(c1 == c2); }

            /* Friends of Cell */
            friend std::ostream& operator<<(std::ostream& os, const Cell& c) {
                os << c._chroms.size();

                for (auto& chrom : c._chroms) { os << "\n" << chrom; }

                return os;
            }
            friend std::istream& operator>>(std::istream& is, Cell& c) {
                size_t tmp;
                is >> tmp;

                c._chroms.clear();
                for (size_t i{0}; i < tmp; ++i) {
                    Chromosome ch({});
                    is >> ch;
                    c._chroms.push_back(ch);
                }

                return is;
            }

            /*! \brief	Do the crossover for each Chromosome between the 2 Cells */
            friend Cell operator+(const Cell& c1, const Cell& c2) {
                Cell c = c1;

                c += c2;

                return c;
            }

            /* Others members of Gene */
            /*! \brief	Create a new Cell applying some potential mutations */
            Cell copy() const;

            protected:
            /* Local */
            Chromosomes _chroms;
        };

    }   // namespace natural

}   // namespace mcd

#endif   // HEADER_GENETIC_CELL
