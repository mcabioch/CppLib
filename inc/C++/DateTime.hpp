/*!
 *
 *  \file       DateTime.hpp
 *  \author     Mathias CABIOCH-DELALANDE
 *  \created    August, 17 2018
 *  \modified   November, 18 2020
 *
 */
#ifndef HEADER_MCD_DATETIME
#define HEADER_MCD_DATETIME

#include "Date.hpp"
#include "Time.hpp"

namespace mcd
{
    /*!
     * \class	DateTime
     * \brief	A class to play with dates and times
     */
    class DateTime : public Date, public Time {
        public:
        DateTime();
        explicit DateTime(const std::string& datetime);

        virtual ~DateTime() {}

        /* Getters */
        virtual std::string get(const std::string& format = "%Y-%m-%d %H:%M:%S") const override;

        /* Operators */
        friend bool operator<(const DateTime& a, const DateTime& b);
        friend bool operator==(const DateTime& a, const DateTime& b);

        AUTO_OPERATORS(DateTime)

        friend std::ostream& operator<<(std::ostream& os, DateTime datetime);

        private:
        Date date;
        Time time;
    };
}   // namespace mcd

#endif   // HEADER_MCD_DATETIME
