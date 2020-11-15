#include "C++/console.hpp"

namespace mcd::console
{
    /* ThreadCout & ThreadEndlCout variables */
    mutex ThreadCout::_mutex;
    bool  ThreadCout::_mutexed = false;

    ThreadCout     cout;
    ThreadEndlCout endl;
    /*****************************************/

    /* Clear the console */
    Cls::Cls() : Color(Colors::NORMAL) {
        colors = "H\033[2J";
        code2  = "";
    }
    /*******************/

    /* Colors */
    Reinit::Reinit() : Color(Colors::NORMAL) {}

    Color::Color(const std::string& color) : code1("\033["), colors(color), code2("m") {}

    std::ostream& operator<<(std::ostream& stream, Color const& c) {
        return stream << c.code1 << c.colors << c.code2;
    }
    /**********/

    /* Cursor */
    void Cursor::save() { std::cout << "\033[s"; }

    void Cursor::restore() { std::cout << "\033[u"; }
    /**********/

    /* SetPrecision variable */
    SetPrecision setprecision;
    /*************************/

    void printLine(std::string caract, size_t size, std::ostream& os) {
        for (size_t i = 0; i < size; ++i) { os << caract; }
        os << std::endl;
    }
}   // namespace mcd::console
