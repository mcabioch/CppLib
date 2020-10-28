#include "C++/AssertionException.hpp"

namespace mcd
{
    AssertionException::AssertionException(const std::string& explaination) throw() :
        exception(explaination) {}
    AssertionException::~AssertionException() throw() {}
}   // namespace mcd
