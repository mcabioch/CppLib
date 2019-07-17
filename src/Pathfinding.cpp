#include "C++/Pathfinding.hpp"

namespace mcd {
	Pathfinding::Pathfinding(const PathfindingProblem& problem, const PathfindingNode& start, const PathfindingNode& end) :
		_problem(problem),
		_start(start),
		_end(end),
		_path()
	{}

	Pathfinding::~Pathfinding(){}
}
