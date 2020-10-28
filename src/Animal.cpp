#include "C++/Animal.hpp"

namespace mcd
{
    Animal::Animal(Map* map, Point pt, ContraptionAttr attr) :
        Entity(map, pt, attr),

        _direction(Direction::NONE), _movedU(false), _movedD(false), _movedR(false), _movedL(false),
        _obstacle(nullptr),

        _speed(0), _food(0), _foodMax(0), _species(""), _specialAttack("")

    {
        setFood(0);
        setFoodMax(0);
    }

    Animal::~Animal() {}

    void Animal::printInfos(std::ostream& stream) const {
        Entity::printInfos(stream);
        Hostile::printInfos(stream);
        stream << "\tAnimal specifications ;" << std::endl;
        stream << "\t\tFood : " << _food << "/" << _foodMax << std::endl;
        stream << "\t\tSpecies : '" << _species << "'" << std::endl;
        stream << "\t\tSpecial attack : '" << _specialAttack << "'" << std::endl;
    }

    void Animal::goLeft() {
        _movedL    = true;
        _direction = Direction::LEFT;
        turn(270);
    }

    void Animal::goRight() {
        _movedR    = true;
        _direction = Direction::RIGHT;
        turn(90);
    }

    void Animal::goTop() {
        _movedU    = true;
        _direction = Direction::UP;
        turn(0);
    }

    void Animal::goBot() {
        _movedD    = true;
        _direction = Direction::DOWN;
        turn(180);
    }

    void Animal::turn(double64_t na) {
        if (na != getA()) { this->sender("turn", {tos(na)}); }
    }

    double64_t Animal::getRelativeZ(Contraption& obj) {
        if (_obstacle != nullptr && _obstacle.get() == getTarget()) {
            return Contraption::getRelativeZ(obj);
        }

        return 0;
    }

    void Animal::move() {
        this->sender("move", {tos(_direction)});

        switch (_direction) {
            case Direction::UP: setY(getY() - _speed); break;
            case Direction::DOWN: setY(getY() + _speed); break;
            case Direction::LEFT: setX(getX() - _speed); break;
            case Direction::RIGHT: setX(getX() + _speed); break;
            case Direction::NONE:
                /* fall through */
            default: break;
        }
    }

    void Animal::move(Direction dir) {
        _direction = dir;
        move();
    }

    bool Animal::collidesRect(Contraption& other) { return collidesRect(&other); }

    bool Animal::collidesCircle(Contraption& other, double64_t radius) {
        return collidesCircle(&other, radius);
    }

    bool Animal::collidesRect(Contraption* other) {
        if (other == nullptr) {
            if (_obstacle == nullptr) { return false; }

            other = _obstacle.get();
        }

        return collidesR(this->getX(),
                         this->getY(),
                         this->getW(),
                         this->getH(),
                         other->getX(),
                         other->getY(),
                         other->getW(),
                         other->getH());
    }

    bool Animal::collidesCircle(Contraption* other, double64_t radius) {
        if (other == nullptr) {
            if (_obstacle == nullptr) { return false; }

            other = _obstacle.get();
        }

        return collidesRC(other->getX(),
                          other->getY(),
                          other->getW(),
                          other->getH(),
                          this->getX(),
                          this->getY(),
                          radius);
    }
}   // namespace mcd
