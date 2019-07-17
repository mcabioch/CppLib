#include "C++/Map.hpp"

namespace mcd {
	Path Map::dijkstra(size_t id, Point dest){
		Point start = _entities[id].first;
		return this->dijkstra(start, dest);
	}

	Path Map::dijkstra(Point origin, Point dest){
		PathfindingNode realDest = {array2Dto1D(static_cast<size_t>(dest.x),
												static_cast<size_t>(dest.y),
												_map[0].size())};
		this->validArrival(origin, dest);
		this->validArrival(dest, origin);

		PathfindingDijkstra pathfinder(
										this->getProblem(),
										{
											array2Dto1D(static_cast<size_t>(origin.x),
														static_cast<size_t>(origin.y),
														_map[0].size())
										},
										{
											array2Dto1D(static_cast<size_t>(dest.x),
														static_cast<size_t>(dest.y),
														_map[0].size())
										}
									);

		auto path = pathfinder.getPath();
		path.end = realDest;
		return path;
	}

	/*Path Map::anthill(size_t id, Point dest){
		Point start = _entities[id].first;
		return this->anthill(start, dest);
	}

	Path Map::anthill(Point origin, Point dest){
		PathfindingNode realDest = {array2Dto1D(static_cast<size_t>(dest.x),
												static_cast<size_t>(dest.y),
												_map[0].size())};
		this->validArrival(origin, dest);

		PathfindingAnthill pathfinder(
										this->getProblem(),
										{
											array2Dto1D(static_cast<size_t>(origin.x),
														static_cast<size_t>(origin.y),
														_map[0].size())
										},
										{
											array2Dto1D(static_cast<size_t>(dest.x),
														static_cast<size_t>(dest.y),
														_map[0].size())
										}
									);

		pathfinder.iterations = w * h * 2;

		auto path = pathfinder.getPath();
		path.end = realDest;
		return path;
	}*/

	/*Path Map::aStar(size_t id, Point dest){
		Point start = _entities[id].first;
		return this->aStar(start, dest);
	}

	Path Map::aStar(Point origin, Point dest){
		PathfindingNode realDest = {array2Dto1D(static_cast<size_t>(dest.x),
												static_cast<size_t>(dest.y),
												_map[0].size())};
		this->validArrival(origin, dest);

		PathfindingAStar pathfinder(
										this->getProblem(),
										origin,
										dest,
										_map[0].size()
									);

		auto path = pathfinder.getPath();
		path.end = realDest;
		return path;
	}*/
}
