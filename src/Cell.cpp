#include "C++/Cell.hpp"

namespace mcd
{

namespace natural
{
Cell::Cell(Chromosomes chroms) : _chroms(chroms)
{
}

Cell::~Cell() {}

Cell Cell::operator+=(const Cell &c1)
{
	auto c = _chroms;
	c.clear();

	for (auto &ch1 : _chroms)
	{
		for (auto &ch2 : c1._chroms)
		{
			if (ch1 == ch2)
			{
				c.push_back(ch1 + ch2);
			}
		}
	}

	_chroms = c;

	return *this;
}

Cell Cell::copy() const
{
	Chromosomes chs;

	for (auto &chrom : _chroms)
	{
		chs.push_back(chrom.copy());
	}

	return Cell(chs);
}

double Cell::Value(std::string str, size_t chromosomeIndex, size_t geneNumber) const
{
	return _chroms.at(chromosomeIndex).Value(str, geneNumber);
}

} // namespace natural

} // namespace mcd