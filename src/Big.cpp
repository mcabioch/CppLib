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

	void Big::set(std::string val){
		for(size_t i{0}; i < val.size() && val[i] == ' ';){ val = val.substr(i + 1); }

		if(val.size() == 0){
			val = "0";
		} else {
			if(val[0] == '-' || val[0] == '+'){
				_neg = (val[0] == '-');
				val = val.substr(1);
			}

			std::string tmp = val;
			val = "";

			for(auto& c : tmp){
				if(c >= '0' && c <= '9'){
					val += c;
				}
			}

			for(size_t i{0}; i < val.size() && val[i] == '0';){ val = val.substr(i + 1); }
			if(val == ""){ val = "0"; }
		}

		if(val == "0"){
			_neg = false;
		}

		Big::equalize(val, "");
		_val = val;
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

	Big Big::division(std::string val, const Big& d, Big& q){
		Big r;
		std::string rVal = "";

		size_t i{0};
		rVal = "0";

		while(rVal < d && i <= val.size()){
			i++;
			rVal = val.substr(0, i);
		}

		val = val.substr(rVal.size());
		r = rVal;

		this->minusDivide(r, d, q, 1);

		this->divide(val, d, q, r);

		return r;
	}

	void Big::divide(std::string val, const Big& d, Big& q, Big& r){
		size_t i{1};
		std::string rVal = std::string(r);
		std::string qVal = std::string(q);

		std::string newVal = "0";

		if(i > val.size()){
			return;
		}
		newVal = rVal + val.substr(0, i);

		val = val.substr(i);
		r = newVal;
		q = Big(0);

		if(r < d){
			qVal += "0";
			q = qVal;

			this->divide(val, d, q, r);
		} else {
			this->minusDivide(r, d, q, 1);

			qVal += static_cast<std::string>(q);
			q = qVal;

			this->divide(val, d, q, r);
		}

		return;
	}
}
