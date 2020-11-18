/*!
 *
 *  \file       Clock.hpp
 *  \author     Mathias CABIOCH-DELALANDE
 *  \created    August, 19 2018
 *  \modified   November, 18 2020
 *
 */
#ifndef HEADER_MCD_CLOCK
#define HEADER_MCD_CLOCK

#include "includes.hpp"

namespace mcd
{
    /*!
     * \class	Clock
     * \brief	A clock to measure the elapsed time
     */
    class Clock {
        public:
        /* Constructor */
        Clock();

        /* Getters */
        /*!
         * \brief	Get time elapsed
         *		\return			Return time elapsed since the clock started in
         *microseconds
         */
        double64_t getElapsed();
        /*!
         * \brief	Get the time start
         *		\return			Return the start time since last clock start in
         *microseconds
         */
        double64_t getStart() const {
            return static_cast< double64_t >(m_start.time_since_epoch().count());
        }

        /* Others */
        /*!
         * \brief Start the clock
         */
        void start();
        /*!
         * \brief Restart the clock
         */
        void restart();

        protected:
        std::chrono::high_resolution_clock::time_point m_start;
        bool                                           started;
    };

    namespace clock
    {
        /*!
         * \brief Wait for a time
         *  \param[in]  timeInMilliseconds      The time to wait for in milliseconds
         */
        void waitFor(double64_t timeInMilliseconds);
    }   // namespace clock
}   // namespace mcd

#endif   // HEADER_MCD_CLOCK
