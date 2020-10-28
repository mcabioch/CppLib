#include "C++/Entity.hpp"

namespace mcd
{
    Entity::Entity(Map* map, Point pt, ContraptionAttr attr) :
        Contraption(map, pt, attr),

        _life(0), _damages(0), _resistance(0), _age(0),

        _reborn(0), _timeActReborn(0), _timePrecReborn(0),

        _regen(0), _timeActRegen(0), _timePrecRegen(0) {
        setReborn(0);
        setTimeActReborn(0);
        setTimePrecReborn(0);

        setRegen(0);
        setTimeActRegen(0);
        setTimePrecRegen(0);
    }

    Entity::~Entity() {}

    void Entity::printInfos(std::ostream& stream) const {
        Contraption::printInfos(stream);
        stream << "\tLife ;" << std::endl;
        stream << "\t\t- life : " << getLifeMax() << std::endl;
        stream << "\t\t- damages : " << getDamages() << std::endl;
        stream << "\tSpecifications ;" << std::endl;
        stream << "\t\t- resistance : " << getResistance() << std::endl;
        stream << "\t\t- age : " << getAge() << std::endl;
    }

    void Entity::hit(double64_t damages) {
        this->sender("hit", {tos(damages)});

        double64_t d = damages - _resistance;

        d = (d < 0) ? 0 : d;

        if (d > _life) {
            _life = 0;
        } else {
            _life -= d;
        }
    }

    void Entity::grow() {}
}   // namespace mcd
