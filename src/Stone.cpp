#include "C++/Stone.hpp"

namespace mcd::entities
{
    Stone::Stone(Map* map, Point pt, ContraptionAttr attr) : Object(map, pt, attr) {}

    Stone::~Stone() {}

    void Stone::printInfos(std::ostream& stream) const { Object::printInfos(stream); }
}   // namespace mcd::entities
