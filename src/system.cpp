#include "C++/system.hpp"

namespace mcd
{
    void exec(const std::string& cmd, bool force) {
        auto out = system(cmd.c_str());

        if (out && !force) {
            error_log(line_number, "System failed", "Command '" + cmd + "' returns " + tos(out));
        }

        return;
    }

    void servLog(const std::string& str, bool server, const std::string& name) {
        console::cout << console::Color(console::Colors::GREY_B,
                                        console::Colors::RED_F,
                                        console::Colors::ITALIC)
                      << str << console::Reinit() << console::endl;
        fflush(stdout);

        if (server) {
            std::cout << name << " > ";
            fflush(stdout);
        }
    }
}   // namespace mcd
