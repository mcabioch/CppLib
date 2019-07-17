#include "C++/Mushroom.hpp"

namespace mcd {
	Mushroom::Mushroom(Map* map, Point pt, ContraptionAttr attr) :
		Vegetal(map, pt, attr)
	{}

	Mushroom::~Mushroom(){

	}

	void Mushroom::printInfos(std::ostream& stream)const {
		Vegetal::printInfos(stream);
	}
}
