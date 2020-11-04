#include "C++/Date.hpp"

namespace mcd
{
    Date::Date() : _act(), _dAct(), _date("") { this->init(); }

    Date::Date(const std::string& date) : _act(), _dAct(), _date(date) { this->reset(); }

    void Date::init() {
        _act  = std::time(nullptr);
        _dAct = *(std::localtime(&_act));
    }

    void Date::reset() {
        std::tm temp;
        strptime((_date + " 00:00:00").c_str(), "%Y-%m-%d %H:%M:%S", &temp);

        _act  = std::mktime(&temp);
        _dAct = *(std::localtime(&_act));
    }

    int Date::day() const { return _dAct.tm_mday; }

    std::string Date::strDay() const {
        std::string out = "";

        switch (this->weekDay()) {
            case 1: out = "Lundi"; break;
            case 2: out = "Mardi"; break;
            case 3: out = "Mercredi"; break;
            case 4: out = "Jeudi"; break;
            case 5: out = "Vendredi"; break;
            case 6: out = "Samedi"; break;
            case 7: out = "Dimanche"; break;
            default: break;
        }

        return out;
    }

    int Date::weekDay() const { return _dAct.tm_wday; }

    int Date::yearDay() const { return _dAct.tm_yday + 1; }

    int Date::monthWeek() const { return -1; }

    int Date::yearWeek() const { return -1; }

    int Date::month() const { return 1 + _dAct.tm_mon; }

    std::string Date::strMonth() const {
        std::string out = "";

        switch (this->month()) {
            case 1: out = "Janvier"; break;
            case 2: out = "Février"; break;
            case 3: out = "Mars"; break;
            case 4: out = "Avril"; break;
            case 5: out = "Mai"; break;
            case 6: out = "Juin"; break;
            case 7: out = "Juillet"; break;
            case 8: out = "Août"; break;
            case 9: out = "Septembre"; break;
            case 10: out = "Octobre"; break;
            case 11: out = "Novembre"; break;
            case 12: out = "Décembre"; break;
            default: break;
        }

        return out;
    }

    int Date::year() const { return 1900 + _dAct.tm_year; }

    std::string Date::get(const std::string& format) const {
        std::map< std::string, std::string > corres;
        auto                                 inside_format = format;

        corres["%A"] = tos(this->strDay());
        corres["%a"] = corres["%A"].substr(0, 3);
        corres["%d"] = ((this->day() < 10) ? "0" : "") + tos(this->day());
        corres["%j"] = ((this->yearDay() < 10) ? "00" : ((this->yearDay() < 100) ? "0" : "")) +
                       tos(this->yearDay());
        corres["%u"] = tos(this->weekDay());

        corres["%U"] = tos(this->yearWeek());
        corres["%V"] = tos(this->monthWeek());

        corres["%B"] = this->strMonth();
        corres["%b"] = corres["%B"].substr(0, 3);
        corres["%m"] = ((this->month() < 10) ? "0" : "") + tos(this->month());

        corres["%C"] =
            tos((this->year() / 100) + ((this->year() / 100 * 100 != this->year()) ? 1 : 0));
        corres["%s"] =
            (toi(corres["%C"]) == 1)
                ? "er"
                : ((toi(corres["%C"]) == 2)
                       ? "ème"
                       : ((toi(corres["%C"]) == 3) ? "ème"
                                                   : ((toi(corres["%C"]) > 3) ? "ème" : "")));

        corres["%Y"] = tos(this->year());
        corres["%y"] = corres["%Y"].substr(2, 2);

        for (auto d : corres) { inside_format = replace(inside_format, d.first, d.second); }

        return inside_format;
    }

    void Date::set(const std::string& date) {
        _date = date;
        this->reset();
    }

    bool operator<(const Date& a, const Date& b) {
        if (a.year() != b.year()) { return a.year() < b.year(); }
        if (a.month() != b.month()) { return a.month() < b.month(); }
        return a.day() < b.day();
    }

    bool operator==(const Date& a, const Date& b) {
        if (a.year() != b.year()) { return false; }
        if (a.month() != b.month()) { return false; }
        return a.day() == b.day();
    }

    std::ostream& operator<<(std::ostream& os, const Date& date) {
        os << date.get();
        return os;
    }
}   // namespace mcd
