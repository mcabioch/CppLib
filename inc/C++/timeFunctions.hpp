/*!
 *
 *  \file       time.hpp
 *  \author     Mathias CABIOCH-DELALANDE
 *  \created    August, 14 2018
 *  \modified   November, 18 2020
 *
 */
#ifndef HEADER_MCD_TIME_FUNC
#define HEADER_MCD_TIME_FUNC

#include "strptime.h"

#include <ctime>

namespace mcd
{
    /*!
     * \brief	Get the number of seconds since the Epoch
     *
     *		\return			Return the number of seconds
     */
    std::time_t getSec();

    /*! \brief	Return the milliseconds since the Epoch */
    std::chrono::milliseconds getMilli();

    /*!
     * \brief	Sleep the thread during \a duration seconds
     *	\param[in]		duration		The time to sleep
     *	return			void
     */
    void sleep(size_t duration);

    /*!
     * \brief	Sleep the thread during \a duration milliseconds
     *	\param[in]		duration		The time to sleep
     *	return			void
     */
    void milliSleep(size_t duration);

    /*!
     * \brief	Sleep the thread during \a duration microseconds
     *	\param[in]		duration		The time to sleep
     *	return			void
     */
    void microSleep(size_t duration);

    /*!
     * \brief	Sleep the thread during \a duration nanoseconds
     *	\param[in]		duration		The time to sleep
     *	return			void
     */
    void nanoSleep(size_t duration);
}   // namespace mcd

#endif   // HEADER_MCD_TIME_FUNCS
