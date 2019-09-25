#include "C++/Path.hpp"

namespace mcd {
	Path::Path() :
		pathLength(0),
		start(),
		end(),
		_index(0),
		_path()
	{
		this->reset();
	}
	Path::~Path(){}

	bool Path::next(PathfindingNode& node){
		if(_index >= _path.size()){
			node = _path[_path.size()-1];
			return false;
		}

		node = _path[_index];
		_index++;

		return true;
	}

	bool Path::hasNext()const {
		if(_index >= _path.size()){ return false; }
		return true;
	}

	void Path::reset(){
		_index = 0;
	}
}
