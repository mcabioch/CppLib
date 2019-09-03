#include "C++/system.hpp"

namespace mcd {
	void exec(const std::string& cmd, bool force){
		auto out = system(cmd.c_str());

		if(out && !force){
			error_log(line_number, "System failed", "Command '" + cmd + "' returns " + tos(out));
		}

		return;
	}

	void servLog(const std::string& str, bool server, const std::string& name){
		cout << Color(Colors::GREY_B, Colors::RED_F, Colors::ITALIC) << str << Reinit() << endl;
		fflush(stdout);

		if(server){
			std::cout << name << " > ";
			fflush(stdout);
		}
	}
}
