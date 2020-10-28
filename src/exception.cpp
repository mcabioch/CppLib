#include "C++/exception.hpp"

namespace mcd
{
    exception::exception() noexcept : _msg("") {}

    exception::exception(const std::string& msg) noexcept : _msg(msg) {}

    exception::~exception() noexcept {}

    exception::exception(const exception& other) noexcept : _msg("") { *this = other; }

    exception& exception::operator=(const exception& other) noexcept {
        if (this == &other) { return *this; }

        _msg = other._msg;

        return *this;
    }

    exception::exception(const exception&& other) noexcept : _msg("") { *this = std::move(other); }

    exception& exception::operator=(const exception&& other) noexcept {
        if (this == &other) { return *this; }

        _msg = other._msg;

        return *this;
    }

    const char* exception::what() const noexcept { return _msg.c_str(); }
}   // namespace mcd