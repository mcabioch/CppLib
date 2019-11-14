#include "C++/Args.hpp"

namespace mcd {
	bool Arguments::addProg(int argc, char** argv){
		bool out = this->add("prog_name", std::string(argv[0]));;
		_mutex.lock();

		for(int i = 1; i < argc; ++i){
			std::string chain = argv[i];
			_mutex.unlock();
			bool output = this->add("prog", chain);
			_mutex.lock();

			out = out && output;
		}

		_mutex.unlock();
		return out;
	}

	std::vector<std::string> Arguments::operator[](const std::string& index) const {
		_mutex.lock();
		if(!contains(indexs, index)){
			_mutex.unlock();
			return error;
		} else {
			_mutex.unlock();
			return args.at(index);
		}
	}

	std::vector<std::string>& Arguments::operator[](const std::string& index) {
		_mutex.lock();
		if(!contains(indexs, index)){
			_mutex.unlock();
			throw std::string("Error Arguments operator[] : index '" + index + "' missing !");
		} else {
			_mutex.unlock();
			return args[index];
		}
	}

	void Arguments::print(const std::string& index) const {
		_mutex.lock();
		if(index == ""){
			for(size_t i{0}; i < indexs.size(); ++i){
				_mutex.unlock();
				this->print(indexs[i]);
				_mutex.lock();
			}

			_mutex.unlock();
			return;
		}

		if(!contains(indexs, index)){
			warning_log(line_number, "Undefined index", "The index '", index, "' is undefined. Please verify it !");
			_mutex.unlock();
			return;
		}

		std::cout << "Index : '" << index << "'" << std::endl;
		for(size_t i{0}; i < args.at(index).size(); ++i){
			std::cout << "\t- '" << args.at(index)[i] << "'" << std::endl;
		}

		_mutex.unlock();
		return;
	}
}
