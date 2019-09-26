#include "C++/Big.hpp"

namespace mcd {
	Big::~Big(){}

	void Big::equalize(std::string& val, const std::string& shape){
		if(val.size() % 2 != 0){
			val = '0' + val;
		}

		if(val.size() >= shape.size()){ return; }

		for(size_t i{val.size()}; i < shape.size(); ++i){
			val = '0' + val;
		}

		if(val.size() % 2 != 0){
			val = '0' + val;
		}
	}

	void Big::set(const std::string& val){
		auto inside_val = val;

		for(size_t i{0}; i < inside_val.size() && inside_val[i] == ' ';){ inside_val = inside_val.substr(i + 1); }

		if(inside_val.size() == 0){
			inside_val = "0";
		} else {
			if(inside_val[0] == '-' || inside_val[0] == '+'){
				_neg = (inside_val[0] == '-');
				inside_val = inside_val.substr(1);
			}

			std::string tmp = inside_val;
			inside_val = "";

			for(auto& c : tmp){
				if(c >= '0' && c <= '9'){
					inside_val += c;
				}
			}

			for(size_t i{0}; i < inside_val.size() && inside_val[i] == '0';){ inside_val = inside_val.substr(i + 1); }
			if(inside_val == ""){ inside_val = "0"; }
		}

		if(inside_val == "0"){
			_neg = false;
		}

		Big::equalize(inside_val, "");
		_val = inside_val;
	}

	Big Big::invert()const {
		Big out(*this);

		if(out != Big(0)){
			out._neg = !out._neg;
		}

		return out;
	}

	void Big::minusDivide(Big& val, const Big& other, Big& increment, long int factor){
		Big loop = other * Big(factor);

		while(val >= loop){
			val -= loop;
			increment += Big(factor);
		}
	}

	Big Big::division(const std::string& val, const Big& d, Big& q){
		Big r;
		std::string rVal = "";
		auto inside_val = val;

		size_t i{0};
		rVal = "0";

		while(Big(rVal) < d && i <= inside_val.size()){
			i++;
			rVal = inside_val.substr(0, i);
		}

		inside_val = inside_val.substr(rVal.size());
		r = Big(rVal);

		this->minusDivide(r, d, q, 1);

		this->divide(inside_val, d, q, r);

		return r;
	}

	void Big::divide(const std::string& val, const Big& d, Big& q, Big& r){
		size_t i{1};
		std::string rVal = std::string(r);
		std::string qVal = std::string(q);

		std::string newVal = "0";
		auto inside_val = val;

		if(i > inside_val.size()){
			return;
		}
		newVal = rVal + inside_val.substr(0, i);

		inside_val = inside_val.substr(i);
		r = Big(newVal);
		q = Big(0);

		if(r < d){
			qVal += "0";
			q = Big(qVal);

			this->divide(inside_val, d, q, r);
		} else {
			this->minusDivide(r, d, q, 1);

			qVal += static_cast<std::string>(q);
			q = Big(qVal);

			this->divide(inside_val, d, q, r);
		}

		return;
	}
}
