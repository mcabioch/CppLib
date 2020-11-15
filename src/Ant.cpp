#include "C++/Ant.hpp"

namespace mcd::entites
{
    Ant::Ant(Map* map, Point pt, ContraptionAttr attr) :
        Animal(map, pt, attr), _caste(""), _stone(0), _stoneMax(0) {
        setStone(0);
        setStoneMax(0);
    }

    Ant::~Ant() {}

    void Ant::printInfos(std::ostream& stream) const {
        Animal::printInfos(stream);
        stream << "\tAnt specifications ;" << std::endl;
        stream << "\t\t- Stone : " << _stone << "/" << _stoneMax << std::endl;
        stream << "\t\t- Caste : '" << _caste << "'" << std::endl;
    }
}   // namespace mcd::entites
