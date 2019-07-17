#include "C++/Contraption.hpp"

namespace mcd {
	Contraption::Contraption(Map* map, Point pt, ContraptionAttr attr) :
		_map(map),
		_pt(),
		_attr(),
		_level(0)
	{
		setPosition(pt);
		setAttributes(attr);
	}

	Contraption::~Contraption(){}

	void Contraption::setPosition(double64_t x, double64_t y, double64_t z){
		setX(x);
		setY(y);
		setZ(z);
	}

	void Contraption::setX(double64_t x){
		if(_map != nullptr){
			if(_map->isXIn(x, this->getW())){
				_pt.x = x;
			}
		} else {
			_pt.x = x;
		}
	}

	void Contraption::setY(double64_t y){
		if(_map != nullptr){
			if(_map->isYIn(y, this->getH())){
				_pt.y = y;
			}
		} else {
			_pt.y = y;
		}
	}

	void Contraption::setAttributes(double64_t w, double64_t h, double64_t angle){
		setW(w);
		setH(h);
		setA(angle);
	}

	void Contraption::addPosition(double64_t x, double64_t y, double64_t z){
		setPosition(getX()+x, getY()+y, getZ()+z);
	}

	double64_t Contraption::getRelativeZ(Contraption& obj){
		double64_t out{0};

		double64_t cx = this->getX()+this->getW()/2;
		double64_t cy = this->getY()+this->getH()/2;

		double64_t cx2 = obj.getX()+obj.getW()/2;
		double64_t cy2 = obj.getY()+obj.getH()/2;

		if(collidesR(this->getX(), this->getY(), this->getW(), this->getH(), obj.getX(), obj.getY(), obj.getW(), obj.getH())){
			double64_t d = dist(cx, cx2, cy, cy2);
			double64_t dMax = 100;

			out = ((dMax - d) / (sq(dMax) * (9.0 / 10.0))) * 5.0;
		}

		if(out < 0){
			return 0;
		}

		return out;
	}

	void Contraption::printInfos(std::ostream& stream)const {
		stream << "\tPosition ;" << std::endl;
			stream << "\t\t- x : " << getX() << std::endl;
			stream << "\t\t- y : " << getY() << std::endl;
			stream << "\t\t- z : " << getZ() << std::endl;
		stream << "\tSize ;" << std::endl;
			stream << "\t\t- width : " << getW() << std::endl;
			stream << "\t\t- height : " << getH() << std::endl;
			stream << "\t\t- angle : " << getA() << std::endl;
		stream << "\tLevel : " << getLevel() << std::endl;
	}

	/* Print the informations of the object in an output stream */
	std::ostream& operator<<(std::ostream& stream, Contraption const &in){
		stream << getType(in) << std::endl;
		in.printInfos(stream);

		return stream;
	}
}
