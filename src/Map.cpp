#include "C++/Map.hpp"

namespace mcd {
	/* Constructor */
	Map::Map(WorldDimensions dimensions) :
		_errorTile(Tile::ERROR),
		_w(0),
		_h(0),
		_map(),
		_entities(),
		_printed(false)
	{
		setSize(dimensions);
	}

	Map::~Map(){
	
	}

	/* Setters */
	void Map::setSize(WorldDimensions dimensions){
		_w = dimensions.w;
		_h = dimensions.h;

		MapLine line;
		line.reserve(_w);

		for(size_t i{0}; i < _h; ++i){
			for(size_t j{0}; j < _w; ++j){
				line.push_back(Tile::NONE);
			}

			_map.push_back(line);
			line.clear();
		}
	}

	void Map::setW(size_t w){
		setSize(WorldDimensions{w, _h});
	}

	void Map::setH(size_t h){
		setSize(WorldDimensions{_w, h});
	}

	/* Getters */


	/* Operators */
	Tile& Map::operator()(size_t i, size_t j){
		if(j < _h && i < _w){
			return _map[j][i];
		} else {
			error_log(line_number,
					  "Map operator() error",
					  "The value of w(", i, ") or h(", j, ") is wrong !",
					  "\nMax values are : w = ", _w, " and h = ", _h
					 );
			return _errorTile;
		}
	}

	Tile Map::operator()(size_t i, size_t j) const {
		const Tile& tile = operator()(i, j);
		return tile;
	}

	/* Others */
	void Map::clear(){
		for(auto& line : _map){
			line.clear();
		}

		_map.clear();

		_w = 0;
		_h = 0;
	}

	bool Map::isXIn(double64_t pt, double64_t dim){
		if(pt < 0 || pt > static_cast<double64_t>(getW()) - dim){
			return false;
		}

		return true;
	}

	bool Map::isYIn(double64_t pt, double64_t dim){
		if(pt < 0 || pt > static_cast<double64_t>(getH()) - dim){
			return false;
		}

		return true;
	}

	bool Map::load(const std::string& file){
		std::ifstream input;
		std::string path = file + ".map";

		input.open(path.c_str());

		if(!input){
			return false;
		}

		auto lines = getlines(input);
		_map.clear();

		_h = lines.size();

		for(auto line : lines){
			MapLine mapline;
			_w = line.size();

			for(auto point : line){
				mapline.push_back(static_cast<Tile>(toi(point)));
			}

			_map.push_back(mapline);
			mapline.clear();
		}

		input.close();

		return true;
	}

	bool Map::save(const std::string& file)const {
		std::ofstream output;
		std::string path = file + ".map";

		output.open(path.c_str());

		if(!output){
			return false;
		}

		for(auto line : _map){
			for(auto point : line){
				output << tos(point);
			}

			output << std::endl;
		}

		output.close();

		return true;
	}

	bool Map::putEntity(size_t& id, double64_t x, double64_t y, double64_t w, double64_t h){
		if(!this->isXIn(x, w) || !this->isYIn(y, h)){
			return false;
		}

		Point pos;
		Point size;

		pos.x = x;
		pos.y = y;

		size.x = w;
		size.y = h;

		id = _entities.size();

		_entities.push_back(std::make_pair(pos, size));
		return true;
	}

	PathfindingProblem Map::getProblem(){
		std::vector<PathfindingNode> nodes;
		std::map<size_t, std::map<size_t, double64_t> > distances;

		for(size_t i{0}; i < _map.size(); ++i){
			for(size_t j{0}; j < _map[i].size(); ++j){
				size_t index = array2Dto1D(j, i, _map[i].size());

				switch(_map[i][j]){
					case Tile::GROUND:{
							std::vector<Point> neighbours;
							nodes.push_back({index});
							Point pt;

							pt.x = j;
							pt.y = i;

							if(isFree(pt.top())){
								neighbours.push_back(pt.top());
							}
							if(isFree(pt.left())){
								neighbours.push_back(pt.left());
							}
							if(isFree(pt.bot())){
								neighbours.push_back(pt.bot());
							}
							if(isFree(pt.right())){
								neighbours.push_back(pt.right());
							}

							for(auto& neighbour : neighbours){
								switch(_map[static_cast<size_t>(neighbour.y)][static_cast<size_t>(neighbour.x)]){
									case Tile::GROUND:{
											distances[index][array2Dto1D(
																			neighbour,
																			_map[static_cast<size_t>(neighbour.y)].size()
																		)] = 1;
										}
										break;
									case Tile::NONE:
									case Tile::OBSTACLE:
									case Tile::ERROR:
									default:
										break;
								}
							}
						}
						break;
					case Tile::NONE:
					case Tile::OBSTACLE:
					case Tile::ERROR:
					default:
						break;
				}
			}
		}

		return PathfindingProblem(nodes, distances);
	}

	MapMove Map::moveEntity(size_t id, Path& path, double64_t x, double64_t y){
		MapMove movement;

		if(id >= _entities.size()){ return movement; }

		auto& entity = _entities[id];
		auto& pos = entity.first;

		PathfindingNode actualNode;

		Point actual = pos;
		Point arrival;

		arrival.x = x;
		arrival.y = y;

		if(path.next(actualNode)){
			movement.next = true;

			auto coords = array1Dto2D(actualNode.id, _map[0].size());

			actual.x = static_cast<double64_t>(coords.first);
			actual.y = static_cast<double64_t>(coords.second);
		} else {
			if(dist(actual.x, arrival.x, actual.y, arrival.y) == 0){
				movement.end = true;
			}
		}

		pos = actual;

		return movement;
	}

	void Map::setEntity(size_t id, double64_t x, double64_t y){
		if(id >= _entities.size()){ return; }

		auto& entity = _entities[id];
		auto& pos = entity.first;

		pos.x = x;
		pos.y = y;

		return;
	}

	bool Map::isFree(const Point& pt){
		if(!isXIn(pt.x, 1) || !isYIn(pt.y, 1)){
			return false;
		}

		try {
			switch(_map.at(static_cast<size_t>(pt.y)).at(static_cast<size_t>(pt.x))){
				case Tile::GROUND:
					return true;
				case Tile::NONE:
				case Tile::OBSTACLE:
				case Tile::ERROR:
				default:
					return false;
			}
		} catch(std::exception& e){
			return false;
		}
	}

	bool Map::printEntity(size_t x, size_t y)const {
		for(auto& entity : _entities){
			auto& pos = entity.first;

			if(
				(pos.x == static_cast<double64_t>(x))
				&&
				(pos.y == static_cast<double64_t>(y))
			){
				std::cout << Color(Colors::RED_F) << "E";
				return true;
			}
		}

		return false;
	}

	void Map::validArrival(const Point& from, Point& to){
		while(!this->isFree(to)){
			std::vector<Point> pts;

			if(this->isFree(to.top())){ pts.push_back(to.top()); }
			if(this->isFree(to.bot())){ pts.push_back(to.bot()); }
			if(this->isFree(to.left())){ pts.push_back(to.left()); }
			if(this->isFree(to.right())){ pts.push_back(to.right()); }

			auto dis = dist(to.x, from.x, to.y, from.y);

			if(pts.size() == 0){
				pts.push_back(to.top());
				pts.push_back(to.bot());
				pts.push_back(to.left());
				pts.push_back(to.right());
			}

			for(auto& pt : pts){
				auto tmp = min(dis, dist(pt.x, from.x, pt.y, from.y));
				if(tmp != dis){
					dis = tmp;
					to = pt;
				} else {
					if(rng(0, 2) == 0){
						dis = tmp;
						to = pt;
					}
				}
			}
		}
	}
}
