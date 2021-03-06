#include "C++/Plant.hpp"

namespace mcd::entities
{
    Plant::Plant(Map* map, Point pt, ContraptionAttr attr) : Vegetal(map, pt, attr) {}

    Plant::~Plant() {}

    void Plant::printInfos(std::ostream& stream) const { Vegetal::printInfos(stream); }
}   // namespace mcd::entities
