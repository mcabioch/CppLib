#include "C++/array.hpp"

namespace mcd {
	void print_all(std::smatch data, bool change, std::string decal){
		std::cout << decal << "match[" << data.size() << "]" << std::endl;
		for(auto d : data){
			print_all(d.str(), change, decal + "--");
		}
	}
}
