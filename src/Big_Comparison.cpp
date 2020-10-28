#include "C++/Big.hpp"

namespace mcd
{
    bool operator>(const Big& a, const Big& b) noexcept {
        bool invert  = (a._neg && b._neg);
        bool similar = (!a._neg && !b._neg);

        if (a._val.size() > b._val.size()) {
            if (!invert && !similar) {
                return b._neg;
            } else {
                return (invert) ? false : true;
            }
        }
        if (a._val.size() < b._val.size()) {
            if (!invert && !similar) {
                return b._neg;
            } else {
                return (invert) ? true : false;
            }
        }

        if (!similar) { return b._neg; }

        for (size_t i{0}; i < a._val.size(); ++i) {
            int aV = fromBigVal(a._val[i]);
            int bV = fromBigVal(b._val[i]);

            if (aV < bV) { return false; }
            if (bV < aV) { return true; }
        }

        return (invert) ? true : false;
    }
}   // namespace mcd
