#include "C++/errors.hpp"

namespace mcd
{
    /* Reinit the console colors */
    void errors_log() {
        console::cout << console::Reinit() << console::endl;
        exit(-1);
    }

    void warnings_log() { console::cout << console::Reinit() << console::endl; }

    void infos_log() { console::cout << console::Reinit() << console::endl; }
    /*****************************/
}   // namespace mcd
