#include "C++/Clock.hpp"

namespace mcd
{
    /* Constructor */
    Clock::Clock() : m_start(), started(false) {}

    /* Start the clock */
    void Clock::start() {
        if (!started) {
            m_start = std::chrono::high_resolution_clock::now();
            started = true;
        }
    }

    /* Restart the clock */
    void Clock::restart() {
        if (started) {
            m_start = std::chrono::high_resolution_clock::now();
        } else {
            start();
        }
    }

    /* Return the number of seconds since the clock is started */
    double64_t Clock::getElapsed() {
        if (!started) { return 0; }

        std::chrono::high_resolution_clock::time_point end =
            std::chrono::high_resolution_clock::now();
        auto elapsed =
            std::chrono::duration_cast< std::chrono::microseconds >(end - m_start).count();
        return static_cast< double64_t >(elapsed);
    }
}   // namespace mcd
