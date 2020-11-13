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
                                << Console::Color(Console::Colors::NORMAL, Console::Colors::BOLD)
                                << "*";
                        }
                        break;
                    case Tile::OBSTACLE:
                        std::cout << Console::Color(Console::Colors::GREY_B);
                        if (!this->printEntity(j, i)) { std::cout << " "; }
                        break;
                    case Tile::GROUND:
                        std::cout << Console::Color(Console::Colors::GREEN_B);
                        if (!this->printEntity(j, i)) { std::cout << " "; }
                        break;
                    case Tile::ERROR:
                    default:
                        std::cout << Console::Color(Console::Colors::PURPLE_B);
                        if (!this->printEntity(j, i)) { std::cout << " "; }
                        break;
                }

                std::cout << Console::Reinit();
            }

            std::cout << std::endl;
        }
    }

    MapMove Map::testPath(Path& path, bool show, Console::Color color) {
        MapMove movement;

        Point begin;
        Point end;

        begin = array1Dto2D(path.start.id, _map[0].size());
        end   = array1Dto2D(path.end.id, _map[0].size());

        if (show) {
            if (!this->_printed) {
                std::cout << Console::Cls();
                this->consolePrint();

                Console::Cursor::put(" ",
                                     begin.y + 1,
                                     begin.x + 1,
                                     Console::Color(Console::Colors::BLUE_B));
                Console::Cursor::put(" ",
                                     end.y + 1,
                                     end.x + 1,
                                     Console::Color(Console::Colors::RED_B));
            }
        }

        PathfindingNode node;
        Point           coords;

        if (path.next(node)) {
            coords        = array1Dto2D(node.id, _map[0].size());
            movement.next = true;
            if (show) { Console::Cursor::put(" ", coords.y + 1, coords.x + 1, color); }
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
