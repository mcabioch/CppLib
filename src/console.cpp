#include "C++/console.hpp"

namespace mcd {
	/* ThreadCout & ThreadEndlCout variables */
		std::mutex ThreadCout::_mutex;
		bool ThreadCout::_mutexed = false;

		ThreadCout cout;
		ThreadEndlCout endl;
	/*****************************************/

	/* Clear the console */
		Cls::Cls() :
			Color(Colors::NORMAL)
		{
			colors = "H\033[2J";
			code2 = "";
		}
	/*******************/

	/* Colors */
		Reinit::Reinit() :
			Color(Colors::NORMAL)
		{}

		Color::Color(const std::string& color) :
			code1("\033["),
			colors(color),
			code2("m")
		{}

		std::ostream &operator<<(std::ostream &stream, Color const &c){
			return stream << c.code1 << c.colors << c.code2;
		}
	/**********/

	/* Cursor */
		void ConsoleCursor::save(){
			std::cout << "\033[s";
		}

		void ConsoleCursor::restore(){
			std::cout << "\033[u";
		}
	/**********/
}
