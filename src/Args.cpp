#include "C++/Args.hpp"

namespace mcd {
	bool Arguments::addProg(int argc, char** argv){
		mutex.lock();
		bool out = false;

		for(int i = 1; i < argc; ++i){
			std::string chain = argv[i];
			mutex.unlock();
			bool output = this->add("prog", chain);
			mutex.lock();

			out = out && output;
		}

		mutex.unlock();
		return out;
	}

	std::vector<std::string> Arguments::operator[](const std::string& index) const {
		mutex.lock();
		if(!contains(indexs, index)){
			mutex.unlock();
			return error;
		} else {
			mutex.unlock();
			return args.at(index);
		}
	}

	std::vector<std::string>& Arguments::operator[](const std::string& index) {
		mutex.lock();
		if(!contains(indexs, index)){
			mutex.unlock();
			throw std::string("Error Arguments operator[] : index '" + index + "' missing !");
		} else {
			mutex.unlock();
			return args[index];
		}
	}

	void Arguments::print(const std::string& index) const {
		mutex.lock();
		if(index == ""){
			for(size_t i{0}; i < indexs.size(); ++i){
				mutex.unlock();
				this->print(indexs[i]);
				mutex.lock();
			}

			mutex.unlock();
			return;
		}

		if(!contains(indexs, index)){
			warning_log(line_number, "Undefined index", "The index '", index, "' is undefined. Please verify it !");
			mutex.unlock();
			return;
		}

		std::cout << "Index : '" << index << "'" << std::endl;
		for(size_t i{0}; i < args.at(index).size(); ++i){
			std::cout << "\t- '" << args.at(index)[i] << "'" << std::endl;
		}

		mutex.unlock();
		return;
	}
}
