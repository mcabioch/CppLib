#include "C++/Big.hpp"

namespace mcd
{
    Big& Big::operator=(const Big& other) noexcept {
        if (this == &other) { return *this; }

        _val = other._val;
        _neg = other._neg;

        return *this;
    }

    Big& Big::operator=(const Big&& other) noexcept {
        if (this == &other) { return *this; }

        _val = other._val;
        _neg = other._neg;

        return *this;
    }

    Big::operator std::string() const noexcept {
        size_t i{0};

        for (; _val[i] == '0' && i + 1 < _val.size(); ++i) {}

        return ((_neg) ? "-" : "") + _val.substr(i);
    }

    Big::operator bool() const noexcept { return (*this != Big(0)); }

    std::ostream& operator<<(std::ostream& os, const Big& other) noexcept {
        os << std::string(other);
        return os;
    }

    std::istream& operator>>(std::istream& is, Big& other) noexcept {
        std::string val;

        is >> val;
        other = Big(val);

        return is;
    }

    int fromBigVal(char in) {
        std::stringstream tmp;
        int               out;

        tmp << in;
        tmp >> out;
        return out;
    }

    int fromBigVal(const std::string& in) {
        std::stringstream tmp;
        int               out;

        tmp << in;
        tmp >> out;
        return out;
    }
}   // namespace mcd
