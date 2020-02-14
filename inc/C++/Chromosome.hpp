/*!
*
*	\file		Chromosome.hpp
*	\author		Mathias CABIOCH-DELALANDE
*	\created	Monday January, 14 2019 21:55:17
*	\modified	February, 12 2020
*
*/
#ifndef HEADER_GENETIC_CHROMOSOME
#define HEADER_GENETIC_CHROMOSOME

#include "C++/Gene.hpp"

namespace mcd
{

namespace natural
{
/*!
	* \class	Chromosome
	* \brief	A double group of genes
	*/
class Chromosome
{
	/* Members of Chromosome */
public:
	/* Constructors & Destructor of Chromosome */
	/*! \brief	The constructor of the class 
	*	\details	It creates another vector of genes using copy on gs1
	*	\param[in]	gs1		A vector of Gene, an alias is Genes.
	*/
	Chromosome(Genes gs1);
	virtual ~Chromosome();

	/* Getters of Chromosome */
	double Value(std::string str, size_t index) const;

	/* Setters of Chromosome */
	void Values(std::string str, double val1, double val2);

	/* Operators of Chromosome */
	/*! \brief	Do a crossover between the two Genes vectors */
	Chromosome operator+=(const Chromosome &c1);
	friend bool operator==(const Chromosome &c1, const Chromosome &c2)
	{
		return (c1._genes1 == c2._genes1) && (c1._genes2 == c2._genes2);
	}
	friend bool operator!=(const Chromosome &c1, const Chromosome &c2)
	{
		return !(c1 == c2);
	}

	/* Friends of Chromosome */
	friend std::ostream &operator<<(std::ostream &os, const Chromosome &c)
	{
		os << c._genes1.size() << "\n";

		for (auto &g : c._genes1)
		{
			os << g << "\n";
		}

		os << c._genes2.size();

		for (auto &g : c._genes2)
		{
			os << "\n"
			   << g;
		}

		return os;
	}
	friend std::istream &operator>>(std::istream &is, Chromosome &c)
	{
		size_t nb;

		is >> nb;
		c._genes1.clear();
		for (size_t i{0}; i < nb; ++i)
		{
			Gene g("");
			is >> g;
			c._genes1.push_back(g);
		}
		is >> nb;
		c._genes2.clear();
		for (size_t i{0}; i < nb; ++i)
		{
			Gene g("");
			is >> g;
			c._genes2.push_back(g);
		}

		return is;
	}

	/*! \brief	Do a crossover between the two Genes vectors */
	friend Chromosome operator+(const Chromosome &c1, const Chromosome &c2)
	{
		Chromosome c = c1;

		c += c2;

		return c;
	}

	/* Others members of Gene */
	/*! \brief	Create a new Chromosome applying some potential mutations */
	Chromosome copy() const;

private:
	/*! \brief	The constructor of the class */
	Chromosome(Genes gs1, Genes gs2);

protected:
	/* Local */
	Genes _genes1;
	Genes _genes2;
};

typedef std::vector<Chromosome> Chromosomes;

} // namespace natural

} // namespace mcd

#endif //HEADER_GENETIC_CHROMOSOME
