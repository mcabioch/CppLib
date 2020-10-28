#include "C++/errors.hpp"

namespace mcd
{
    /* Reinit the console colors */
    void errors_log() {
        cout << Reinit() << endl;
        exit(-1);
    }

    void warnings_log() { cout << Reinit() << endl; }

    void infos_log() { cout << Reinit() << endl; }
    /*****************************/
}   // namespace mcd
