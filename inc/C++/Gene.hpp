/*!
*
*	\file		Gene.hpp
*	\author		Mathias CABIOCH-DELALANDE
*	\created	Tuesday November, 27 2018 15:12:24
*	\modified	February, 12 2020
*
*/
#ifndef HEADER_GENETIC_GENE
#define HEADER_GENETIC_GENE

#include "C++/C++lib.hpp"

namespace mcd
{

namespace natural
{
/*!
	* \class	Gene
	* \brief	A gene that represent a caracteristic
	*/
class Gene
{
	/* Members of Gene */
public:
	/* Internal enums of Gene */
	enum GeneType
	{
		FLOAT,
		INT,
		BOOL,
		RANGED_INT,
		RANGED_FLOAT,
		LISTED
	};
	/* Constructors & Destructor of Gene */
	/*! \brief	The constructor of the class
	*	\param[in]	name	The name of the caracteristic
	*	\param[in]	type	The type of the Gene, a GeneType value
	*	\param[in]	value	The initial value of the Gene
	*	\param[in]	mini	The minimum value for a Ranged Gene
	*	\param[in]	maxi	The maximum value for a Ranged Gene
	*	\param[in]	list	A list of possible value for a Listed Gene
	*/
	Gene(std::string name, GeneType type = GeneType::FLOAT, double value = 0, double mini = 0, double maxi = 0, std::vector<double> list = {});
	virtual ~Gene();

	Gene(const Gene &g);
	/* Getters of Gene */
	double Value() const;
	std::string Name() const;
	/* Setters of Gene */
	void Value(const double &value);
	/* Operators of Gene */
	/*! \brief	Tries if the names are equals */
	friend bool operator==(const Gene &g1, const Gene &g2)
	{
		return (g1._name == g2._name);
	}
	/*! \brief	Tries if the names are differents */
	friend bool operator!=(const Gene &g1, const Gene &g2)
	{
		return !(g1 == g2);
	}
	/* Friends of Gene */
	/*! \brief	Write the 3 values of a gene on 3 lines */
	friend std::ostream &operator<<(std::ostream &os, const Gene &g)
	{
		os << g._name << "\n"
		   << g._value << "\n"
		   << g._type << "\n"
		   << g._minimum << "\n"
		   << g._maximum << "\n"
		   << g._list.size();

		for (auto &l : g._list)
		{
			os << "\n"
			   << l;
		}

		return os;
	}
	friend std::istream &operator>>(std::istream &is, Gene &g)
	{
		int tmp;
		size_t list_size;

		is >> g._name >> g._value >> tmp >> g._minimum >> g._maximum >> list_size;
		g._type = static_cast<GeneType>(tmp);
		for (size_t i = 0; i < list_size; ++i)
		{
			double t;
			is >> t;
			g._list.push_back(t);
		}

		return is;
	}
	/* Others members of Gene */
	/*! \brief	Create a new Gene applying some potential mutations */
	Gene copy() const;

public:
	/* Global */
	/*! \brief	The mutation rate in using of copy method. It's one over \a MutationRate */
	static int MutationRate;
	/*! \brief	Define the maximum number after the comma for a float value. Default is 4 */
	static int FloatAccuracy;

private:
	/* Local */
	std::string _name;
	GeneType _type;
	double _value;
	double _minimum;
	double _maximum;
	std::vector<double> _list;
};

typedef std::vector<Gene> Genes;

/*! \brief	Transfer a vector of Gene into another one, using the copy method */
void transfer(const Genes &in, Genes &out);

} // namespace natural

} // namespace mcd

#endif //HEADER_GENETIC_GENE
