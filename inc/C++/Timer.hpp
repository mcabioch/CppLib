/*!
 *
 *  \file       Timer.hpp
 *  \author     Mathias CABIOCH-DELALANDE
 *  \created    August, 17 2018
 *  \modified   November, 18 2020
 *
 */
#ifndef HEADER_MCD_TIMER
#define HEADER_MCD_TIMER

#include "Threadable.hpp"

namespace mcd
{
    /*!
     * \class	Timer
     * \brief	A timer to do something at the end
     * \todo		Create the class
     */
    class Timer : public Threadable< Timer > {
        THREADABLE

        public:
        /* Constructor */
        Timer();

        /* Getters */
        std::time_t getStart() const { return m_start; }

        /* Others */
        void start(int sec);
        void restart(int sec);

        virtual void update() override {}

        protected:
        std::time_t m_start;
        bool        started;
    };
}   // namespace mcd

#endif   // HEADER_MCD_TIMER
