#include "C++/Test.hpp"

namespace mcd {
	std::vector<Test_struct> Test::_tests;
	std::map<std::string, std::vector<std::function<void()>>> Test::_funcs;

	size_t Test::_s = 0;
	size_t Test::_f = 0;
	std::map<size_t, std::string> Test::_names;
	bool Test::_launched = false;

	void Test::run(const std::string& key){
		for(auto& suite : _funcs){
			if(key == "" || key == suite.first){
				std::cout << "Running " << suite.first << std::endl;
				_names[_tests.size()] = suite.first;

				for(auto& func : suite.second){
					func();
				}
			}
		}

		_launched = true;
	}

	void Test::addTest(const Test_struct& test){
		_tests.push_back(test);

		if(test.expr){ _s++; }
		else { _f++; }
	}

	void Test::print(std::ostream& os, size_t format) {
		std::stringstream sstr;
		Binary<size_t> b(format);

		sstr << _tests.size() << " tests. " << (static_cast<double>(_s) / static_cast<double>(_tests.size()) * 100.0) << "% success (" << _s << " success, " << _f << " failures)." << std::endl;
		os << sstr.str() << "\n";

		for(size_t i = 0; i < _tests.size(); ++i){
			const auto& t = _tests[i];
			if(_names.find(i) != _names.end()){ os << "****** " << _names[i] << std::endl; }

			auto txt(printTest(t, i, format));
			if((b & TEST_FORMAT_ERROR).get() != 0 && !t.expr){ os << txt.str(); }
			if((b & TEST_FORMAT_SUCCESS).get() != 0 && t.expr){ os << txt.str(); }
		}
		os << "\n" << sstr.str();
	}

	std::stringstream Test::printTest(const Test_struct& t, size_t i, size_t format){
		std::stringstream txt;
		Binary<size_t> b(format);
		txt << std::setw(static_cast<int>(mcd::tos(_tests.size()).size())) << i+1 << ": ";

		if(t.expr){ txt << Color(Colors::LIGHT_BLUE_F); }
		else { txt << Color(Colors::RED_F); }

		if((b & TEST_FORMAT_MAX).get() != 0){
			txt << "For '" << t.func << "' in " << t.file << ":" << t.line << " : ";
		}

		txt << t.str;
		txt << Color(Colors::NORMAL) << std::endl;
		return txt;
	}
}
