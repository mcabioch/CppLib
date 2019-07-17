#include "C++/Big.hpp"

namespace mcd {
	Big::Big(std::string val) :
		_val(""),
		_neg(false)
	{
		this->set(val);
	}

	Big::Big() :
		Big("0")
	{}

	Big::Big(const Big& other) :
		_val(""),
		_neg(false)
	{
		*this = other;
	}

	Big::Big(const Big&& other) :
		_val(""),
		_neg(false)
	{
		*this = std::move(other);
	}
}
