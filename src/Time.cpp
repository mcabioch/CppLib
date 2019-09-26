#include "C++/Time.hpp"

namespace mcd {
	Time::Time() :
		_act(),
		_dAct(),
		_milli(0),
		_time("")
	{
		this->init();
	}

	Time::Time(const std::string& time) :
		_act(),
		_dAct(),
		_milli(0),
		_time(time)
	{
		this->reset();
	}

	void Time::init(){
		_act = std::time(nullptr);
		_dAct = *(std::localtime(&_act));

		std::chrono::seconds sec(getSec());
		auto out = getMilli() - sec;

		_milli = static_cast<int>(out.count());
	}

	void Time::reset(){
		std::tm temp;
		strptime(_time.c_str(), "%H:%M:%S", &temp);

		_act = std::mktime(&temp);
		_dAct = *(std::localtime(&_act));

		auto m = getall(".([0-9]{3})", _time);
		if(m.size() == 0){
			_milli = 0;
		} else {
			_milli = toi(m[0][0]);
		}
	}

	int Time::hour()const {
		return _dAct.tm_hour;
	}

	int Time::minute()const {
		return _dAct.tm_min;
	}

	int Time::second()const {
		return _dAct.tm_sec;
	}

	int Time::milli()const {
		return _milli;
	}

	std::string Time::get(const std::string& format)const {
		std::map<std::string, std::string> corres;
		auto inside_format = format;

		corres["%H"] = ((this->hour() < 10)?"0":"") + tos(this->hour());
		corres["%I"] = ((toi(corres["%H"]) % 12 < 10)?"0":"") + tos(toi(corres["%H"]) % 12);

		corres["%M"] = ((this->minute() < 10)?"0":"") + tos(this->minute());

		corres["%S"] = ((this->second() < 10)?"0":"") + tos(this->second());

		corres["%N"] = ((this->milli() < 10)?"00":((this->milli() < 100)?"0":"")) + tos(this->milli());

		corres["%P"] = (this->hour() >= 12)?"PM":"AM";
		corres["%p"] = lowercase(corres["%P"]);

		for(auto d : corres){
			inside_format = replace(inside_format, d.first, d.second);
		}

		return inside_format;
	}

	void Time::set(const std::string& time){
		_time = time;
		this->reset();
	}

	bool operator<(const Time& a, const Time& b){
		if(a.hour() != b.hour()){ return a.hour() < b.hour(); }
		if(a.minute() != b.minute()){ return a.minute() < b.minute(); }
		if(a.second() != b.second()){ return a.second() < b.second(); }
		return a.milli() < b.milli();
	}

	bool operator==(const Time& a, const Time& b){
		if(a.hour() != b.hour()){ return false; }
		if(a.minute() != b.minute()){ return false; }
		if(a.second() != b.second()){ return false; }
		return a.milli() == b.milli();
	}

	bool operator!=(const Time& a, const Time& b){
		return !(a == b);
	}

	bool operator>(const Time& a, const Time& b){
		return !(a < b) && !(a == b);
	}

	bool operator<=(const Time& a, const Time& b){
		return (a < b) || (a == b);
	}

	bool operator>=(const Time& a, const Time& b){
		return (a > b) || (a == b);
	}

	std::ostream& operator<<(std::ostream& os, const Time& time){
		os << time.get();
		return os;
	}
}
