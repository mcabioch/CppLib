#include "C++/PathfindingDijkstra.hpp"

namespace mcd {
	PathfindingDijkstra::PathfindingDijkstra(
		const PathfindingProblem& problem,
		const PathfindingNode& start,
		const PathfindingNode& end
	) :
		Pathfinding(problem, start, end),
		_visited(),
		_weights(),
		_computed(),
		_previous()
	{
		for(auto& square : _problem.nodes){
			_visited[square.id] = false;
			if(square.id == _start.id){
				_computed[square.id] = true;
			} else {
				_computed[square.id] = false;
			}
			_weights[square.id] = 0;
		}
	}

	PathfindingDijkstra::~PathfindingDijkstra(){}

	Path PathfindingDijkstra::createPath(){
		try {
			next();
		} catch(PathfindingException& e){
			this->constructPath(_end.id);
			_path.reverse();
		}

		return _path;
	}

	void PathfindingDijkstra::next(){
		try {
			auto node = littlest();

			if(node == _end.id){
				PathfindingException::Arrived();
			}

			auto linkedNodes = linked(node);

			for(auto& linkedNode : linkedNodes){
				auto newWeight = _weights.at(node) + _problem.distances.at(node).at(linkedNode);
				if(
					(!_computed.at(linkedNode)) || (_weights.at(linkedNode) > newWeight)
				){
					_weights.at(linkedNode) = newWeight;
					_computed.at(linkedNode) = true;
					_previous[linkedNode] = node;
				}
			}

			_visited.at(node) = true;
			this->next();
		} catch(std::out_of_range& e){
			return;
		} catch(PathfindingException& e){
			PathfindingException::Arrived();
		}

		return;
	}

	size_t PathfindingDijkstra::littlest(){
		double64_t minimum = 999999999;
		size_t miniId = _problem.nodes.size();

		for(auto& w : _weights){
			if(w.second < minimum && _computed[w.first] && !_visited[w.first]){
				minimum = w.second;
				miniId = w.first;
			}
		}

		return miniId;
	}

	std::vector<size_t> PathfindingDijkstra::linked(size_t node){
		std::vector<size_t> out;

		for(auto& square : _problem.distances.at(node)){
			if(!_visited.at(square.first)){
				out.push_back(square.first);
			}
		}

		return out;
	}

	void PathfindingDijkstra::constructPath(size_t node){
		try {
			_path.push({node});
			this->constructPath(_previous.at(node));
		} catch(std::out_of_range& e){
			return;
		}
	}
}
