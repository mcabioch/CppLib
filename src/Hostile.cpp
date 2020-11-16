#include "C++/Hostile.hpp"

namespace mcd::entities
{
    Hostile::Hostile() :
        _target(nullptr),

        _attacked(false), _attackedSpec(false),

        _strength(0) {}

    Hostile::~Hostile() {}

    bool Hostile::hurt(Entity* target) {
        if (target == nullptr) {
            target = _target.get();

            if (target == nullptr) { return false; }
        }

        _attacked = true;
        target->hit(_strength);

        return true;
    }

    void Hostile::printInfos(std::ostream& stream) const {
        stream << "\tHostile attributes ;" << std::endl;
        stream << "\t\t- strength : " << getStrength() << std::endl;
    }
}   // namespace mcd::entities
