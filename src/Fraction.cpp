#include "C++/Fraction.hpp"

namespace mcd {
	Fraction::Fraction() :
		_numerator(0),
		_denominator(0),
		_shape("")
	{}
	Fraction::Fraction(double value) :
		Fraction()
	{
		init(value);
	}
	Fraction::Fraction(long num, long denom) :
		Fraction()
	{
		_numerator = num;
		_denominator = denom;

		reduice();
	}

	Fraction::~Fraction(){}

	void Fraction::init(double value){
		std::string number = tos(value);

		if(number.find(".") == std::string::npos){
			_numerator = static_cast<long>(value);
			_denominator = 1;

			return;
		}

		bool neg = false;
		if(value < 0){
			neg = true;
			value *= -1;
		}

		if(hasPeriod(value)){
			auto afterVirg = number.find(".") + 1;
			auto pos = findPeriod(value) + afterVirg;

			long firstDix = 1;
			long first = 0;
			long secondDix = 1;
			long second  = 0;

			for(size_t i = 0; i < pos-afterVirg; ++i){
				firstDix *= 10;
			}
			first = static_cast<long>(value * static_cast<long double>(firstDix));

			for(size_t i = 0; i < (pos + _shape.size()) - afterVirg; ++i){
				secondDix *= 10;
			}
			second = static_cast<long>(value * static_cast<long double>(secondDix));

			long a = second-first;
			long b = secondDix-firstDix;

			_numerator = a;
			_denominator = b;
		} else {
			long dix = 1;
			long computed = 0;
			number = number.substr(number.find(".")+1);

			for(size_t i = 0; i < number.size(); ++i){
				dix *= 10;
			}
			computed = static_cast<long>(value * static_cast<long double>(dix));

			_numerator = computed;
			_denominator = dix;
		}

		if(neg){
			_numerator *= -1;
		}

		reduice();
	}

	void Fraction::reduice(){
		if(_numerator == 0){
			_denominator = 1;
		}

		long gcf = mcd::pgcd(_numerator, _denominator);

		_numerator /= gcf;
		_denominator /= gcf;

		if(_numerator < 0 && _denominator < 0){
			_numerator *= -1;
			_denominator *= -1;
		} else if(_denominator < 0){
			_numerator *= -1;
			_denominator *= -1;
		}
	}

	size_t Fraction::findPeriod(double value){
		std::string number = tos(value);

		number = number.substr(number.find(".")+1);

		std::string bestShape = "";
		size_t bestShapeMatchSize = 0;

		for(size_t start = 0; start < number.size(); ++start){
			for(size_t length = 1; length+start < number.size(); ++length){
				std::string shape = number.substr(start, length);

				std::string reg = "(" + shape + ")+.?$";
				std::smatch m;

				std::regex_search(number, m, std::regex(reg));

				if(bestShapeMatchSize < m.length(0) / shape.size()){
					bestShapeMatchSize = m.length(0) / shape.size();
					bestShape = shape;
				}
			}
		}

		if(bestShapeMatchSize > 3){
			_shape = bestShape;
			return number.find(_shape);
		}

		return std::string::npos;
	}

	bool Fraction::hasPeriod(double value){
		return (findPeriod(value) != std::string::npos);
	}

	std::string Fraction::tos(double value){
		std::stringstream sstream(std::stringstream::in | std::stringstream::out);
		sstream << std::setprecision(16) << value;
		return sstream.str();
	}

	Fraction& Fraction::operator+=(const Fraction& b){
		auto an = _numerator;
		auto ad = _denominator;
		auto bn = b._numerator;
		auto bd = b._denominator;

		if(ad != bd){
			auto tmp = ad;

			an *= bd;
			ad *= bd;

			bn *= tmp;
			bd *= tmp;
		}

		_numerator = (an + bn);
		_denominator = ad;
		reduice();

		return *this;
	}

	Fraction Fraction::operator+(const Fraction& b){
		Fraction c = *this;
		c += b;
		return c;
	}

	Fraction& Fraction::operator-=(const Fraction& b){
		auto an = _numerator;
		auto ad = _denominator;
		auto bn = b._numerator;
		auto bd = b._denominator;

		if(ad != bd){
			auto tmp = ad;

			an *= bd;
			ad *= bd;

			bn *= tmp;
			bd *= tmp;
		}

		_numerator = (an - bn);
		_denominator = ad;
		reduice();

		return *this;
	}

	Fraction Fraction::operator-(const Fraction& b){
		Fraction c = *this;
		c -= b;
		return c;
	}

	Fraction& Fraction::operator*=(const Fraction& b){
		auto an = _numerator;
		auto ad = _denominator;
		auto bn = b._numerator;
		auto bd = b._denominator;

		auto gcfan = mcd::pgcd(an, bd);
		auto gcfbn = mcd::pgcd(bn, ad);

		_numerator = (an/gcfan) * (bn/gcfbn);
		_denominator = (ad/gcfbn) * (bd/gcfan);
		reduice();

		return *this;
	}

	Fraction Fraction::operator*(const Fraction& b){
		Fraction c = *this;
		c *= b;
		return c;
	}

	Fraction& Fraction::operator/=(const Fraction& b){
		auto an = _numerator;
		auto ad = _denominator;
		auto bn = b._numerator;
		auto bd = b._denominator;

		auto gcfn = mcd::pgcd(an, bn);
		auto gcfd = mcd::pgcd(bd, ad);

		_numerator = (an/gcfn) * (bd/gcfd);
		_denominator = (ad/gcfd) * (bn/gcfn);
		reduice();

		return *this;
	}

	Fraction Fraction::operator/(const Fraction& b){
		Fraction c = *this;
		c /= b;
		return c;
	}

	Fraction& Fraction::operator%=(const Fraction& b){
		auto nb = b;

		_numerator = static_cast<long>(static_cast<double>(*this)) % static_cast<long>(static_cast<double>(nb));
		_denominator = 1;
		reduice();

		return *this;
	}

	Fraction Fraction::operator%(const Fraction& b){
		Fraction c = *this;
		c %= b;
		return c;
	}

	bool Fraction::operator==(const Fraction& b){
		return ((_numerator == b._numerator) && (_denominator == b._denominator));
	}

	bool Fraction::operator>(const Fraction& b){
		auto an = _numerator;
		auto ad = _denominator;
		auto bn = b._numerator;
		auto bd = b._denominator;

		if(an != bn && ad != bd){
			auto tmp = ad;

			an *= bd;
			ad *= bd;
			bn *= tmp;
			bd *= tmp;
		}

		if(ad == bd){
			return (an > bn);
		}
		if(an == bn){
			return (ad < bd);
		}
		return false;
	}

	bool Fraction::operator<(const Fraction& b){
		auto an = _numerator;
		auto ad = _denominator;
		auto bn = b._numerator;
		auto bd = b._denominator;

		if(an != bn && ad != bd){
			auto tmp = ad;

			an *= bd;
			ad *= bd;
			bn *= tmp;
			bd *= tmp;
		}

		if(ad == bd){
			return (an < bn);
		}
		if(an == bn){
			return (ad > bd);
		}
		return false;
	}

	bool Fraction::operator!=(const Fraction& b){
		return !(*this == b);
	}

	bool Fraction::operator>=(const Fraction& b){
		return ((*this > b) || (*this == b));
	}

	bool Fraction::operator<=(const Fraction& b){
		return ((*this < b) || (*this == b));
	}

	Fraction& Fraction::operator++(){
		_numerator += _denominator;
		reduice();

		return *this;
	}

	Fraction& Fraction::operator--(){
		_numerator -= _denominator;
		reduice();

		return *this;
	}

	std::ostream& operator<<(std::ostream& os, const Fraction& frac){
		if(frac._denominator == 1){
			os << frac._numerator;
		} else {
			os << frac._numerator << "/" << frac._denominator;
		}

		return os;
	}
}
