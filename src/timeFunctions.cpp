#include "C++/timeFunctions.hpp"

namespace mcd
{
    std::time_t getSec() { return std::time(nullptr); }

    std::chrono::milliseconds getMilli() {
        return std::chrono::duration_cast< std::chrono::milliseconds >(
            std::chrono::system_clock::now().time_since_epoch());
    }

    void sleep(size_t duration) { this_thread::sleep_for(std::chrono::seconds(duration)); }

    void milliSleep(size_t duration) {
        this_thread::sleep_for(std::chrono::milliseconds(duration));
    }

    void microSleep(size_t duration) {
        this_thread::sleep_for(std::chrono::microseconds(duration));
    }

    void nanoSleep(size_t duration) { this_thread::sleep_for(std::chrono::nanoseconds(duration)); }
}   // namespace mcd
