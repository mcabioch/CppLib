#include "C++/array.hpp"

namespace mcd
{
    void print_all(const std::smatch& data, bool change, const std::string& decal) {
        std::cout << decal << "match[" << data.size() << "]" << std::endl;
        for (auto d : data) { print_all(d.str(), change, decal + "--"); }
    }
}   // namespace mcd
