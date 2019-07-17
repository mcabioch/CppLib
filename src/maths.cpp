#include "C++/maths.hpp"

namespace mcd {
	bool isLuhn(const std::string& num){
		Big val(num.substr(num.size() - 1));
		Big tmp = luhn(num.substr(0, num.size() - 1));

		return (tmp == val);
	}

	int luhn(const std::string& num){
		int x = 0;

		for(size_t i{num.size()}; i > 0; --i){
			int a;
			std::stringstream aStream;

			aStream << num[i - 1];
			aStream >> a;

			if((i - num.size()) % 2 == 0){
				int tmp = a*2;
				std::stringstream tmpStream;
				std::stringstream bStream;
				std::stringstream cStream;

				if(tmp > 9){
					std::string strTmp;
					int b;
					int c;

					tmpStream << tmp;
					tmpStream >> strTmp;

					bStream << strTmp[0];
					bStream >> b;

					cStream << strTmp[1];
					cStream >> c;

					tmp = b + c;
				}
				x += tmp;
			} else {
				x += a;
			}
		}

		return (10 - x%10) % 10;
	}

	/* Return true if the given number is prime, false either */
	bool isPrime(float nb){
		if(nb == 1 || nb == 2){ return true; }
		if(!mod(nb, 2)){ return false; }

		double64_t root = std::sqrt(nb);

		if(root == wholePart(root)){ return false; }

		for(int i = 3; i < static_cast<long int>(root); i+=2){
			if(!mod(nb, i)){
				return false;
			}
		}

		return true;
	}

	/* Return true if the caracter is a number */
	bool isNumber(char c){
		if(c < '0' || c > '9'){ return false; }

		return true;
	}
}
