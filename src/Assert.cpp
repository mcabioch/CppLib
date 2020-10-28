#include "C++/Assert.hpp"

namespace mcd
{
    void Assert::operator()(bool                           expr,
                            const AssertionLocationStruct& location,
                            const std::string&             msg) {
        if (!expr) {
            std::stringstream sstr;
            sstr << mcd::arguments["prog_name"][0] << ": " << location.file << ":" << location.func
                 << ":" << location.line << ": Assertion `" << msg << "` failed.";

            throw AssertionException(sstr.str());
        }
    }

    Assert assertion;
}   // namespace mcd
