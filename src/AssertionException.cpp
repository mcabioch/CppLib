#include "C++/AssertionException.hpp"

namespace mcd {
	AssertionException::AssertionException(const std::string& explaination) throw() :
		_explaination(explaination)
	{}
	AssertionException::~AssertionException() throw() {}
}
