#include "C++/Map.hpp"

namespace mcd
{
    void Map::consolePrint() {
        this->_printed = true;

        for (size_t i{0}; i < _map.size(); ++i) {
            for (size_t j{0}; j < _map[i].size(); ++j) {
                switch (_map[i][j]) {
                    case Tile::NONE:
                        if (!this->printEntity(j, i)) {
                            std::cout
                                << console::Color(console::Colors::NORMAL, console::Colors::BOLD)
                                << "*";
                        }
                        break;
                    case Tile::OBSTACLE:
                        std::cout << console::Color(console::Colors::GREY_B);
                        if (!this->printEntity(j, i)) { std::cout << " "; }
                        break;
                    case Tile::GROUND:
                        std::cout << console::Color(console::Colors::GREEN_B);
                        if (!this->printEntity(j, i)) { std::cout << " "; }
                        break;
                    case Tile::ERROR:
                    default:
                        std::cout << console::Color(console::Colors::PURPLE_B);
                        if (!this->printEntity(j, i)) { std::cout << " "; }
                        break;
                }

                std::cout << console::Reinit();
            }

            std::cout << std::endl;
        }
    }

    MapMove Map::testPath(Path& path, bool show, console::Color color) {
        MapMove movement;

        Point begin;
        Point end;

        begin = array1Dto2D(path.start.id, _map[0].size());
        end   = array1Dto2D(path.end.id, _map[0].size());

        if (show) {
            if (!this->_printed) {
                std::cout << console::Cls();
                this->consolePrint();

                console::Cursor::put(" ",
                                     begin.y + 1,
                                     begin.x + 1,
                                     console::Color(console::Colors::BLUE_B));
                console::Cursor::put(" ",
                                     end.y + 1,
                                     end.x + 1,
                                     console::Color(console::Colors::RED_B));
            }
        }

        PathfindingNode node;
        Point           coords;

        if (path.next(node)) {
            coords        = array1Dto2D(node.id, _map[0].size());
            movement.next = true;
            if (show) { console::Cursor::put(" ", coords.y + 1, coords.x + 1, color); }
        } else {
            coords = array1Dto2D(node.id, _map[0].size());
            if (dist(coords, end) == 0) { movement.end = true; }
        }

        return movement;
    }

    void Map::resetSim(Path& path) {
        this->_printed = false;
        path.reset();
    }
}   // namespace mcd
