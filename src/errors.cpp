#include "C++/errors.hpp"

namespace mcd
{
    /* Reinit the console colors */
    void errors_log() {
        Console::cout << Console::Reinit() << Console::endl;
        exit(-1);
    }

    void warnings_log() { Console::cout << Console::Reinit() << Console::endl; }

    void infos_log() { Console::cout << Console::Reinit() << Console::endl; }
    /*****************************/
}   // namespace mcd
