#include "C++/DateTime.hpp"

namespace mcd
{
    DateTime::DateTime() : date(), time() {}

    DateTime::DateTime(const std::string& datetime) : DateTime() {
        auto parts = split(datetime);
        if (parts.size() > 0) { date.set(parts[0]); }
        if (parts.size() > 1) { time.set(parts[1]); }
    }

    std::string DateTime::get(const std::string& format) const {
        return date.get(time.get(format));
    }

    bool operator<(const DateTime& a, const DateTime& b) {
        return (a.date < b.date) || ((a.date == b.date) && (a.time < b.time));
    }

    bool operator==(const DateTime& a, const DateTime& b) {
        return (a.date == b.date) && (a.time == b.time);
    }

    std::ostream& operator<<(std::ostream& os, DateTime datetime) {
        os << datetime.get();
        return os;
    }
}   // namespace mcd
