#include "C++/PathfindingException.hpp"

namespace mcd {
	PathfindingException::PathfindingException(PathfindingErrorCode error, const std::string& explaination) throw() :
		_error(error),
		_explaination(explaination)
	{}

	PathfindingException::~PathfindingException() throw(){}

	PathfindingException::PathfindingException(const PathfindingException& other) throw() :
		_error(other._error),
		_explaination(other._explaination)
	{}

	void PathfindingException::Arrived(){
		PathfindingException except(PathfindingErrorCode::ARRIVED, "");
		throw except;
	}

	void PathfindingException::Lost(){
		PathfindingException except(PathfindingErrorCode::LOST, "");
		throw except;
	}
}
