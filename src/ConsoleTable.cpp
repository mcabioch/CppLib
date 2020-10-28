#include "C++/ConsoleTable.hpp"

namespace mcd
{
    ConsoleTable::ConsoleTable() : table(), tableCars() {
        tableCars["top left"]     = "┌";
        tableCars["top right"]    = "┐";
        tableCars["bottom right"] = "┘";
        tableCars["bottom left"]  = "└";

        tableCars["line"] = "─";
        tableCars["col"]  = "│";

        tableCars["line-col right"] = "┤";
        tableCars["line-col left"]  = "├";
        tableCars["line-col"]       = "┼";

        tableCars["line-col top"]    = "┬";
        tableCars["line-col bottom"] = "┴";
    }

    void ConsoleTable::headers(std::vector< std::string > h) {
        if (table.size() > 0) {
            table[0] = h;
        } else {
            table.push_back(h);
        }
    }

    void ConsoleTable::line(std::vector< std::string > l) { table.push_back(l); }

    std::ostream& operator<<(std::ostream& str, ConsoleTable& t) {
        for (size_t i{0}; i < t.table.size(); ++i) {
            for (size_t j{0}; j < t.table[i].size(); ++j) {
                t.table[i][j] = removeAccents(t.table[i][j]);
            }
        }

        if (t.table.size() < 2) {
            str << "VOID";
            return str;
        }

        /* Columns width */
        std::vector< size_t > colsW;
        size_t                add = 2;

        for (size_t i{0}; i < t.table[0].size(); ++i) {
            size_t colW = t.table[0][i].size();

            if (t.table.size() > 1) {
                for (size_t j{1}; j < t.table.size(); ++j) {
                    colW = max(colW, t.table[j][i].size());
                }
            }

            colsW.push_back(colW);
        }
        /*****************/
        /* Head */
        str << t.tableCars["top left"];
        for (size_t i{0}; i < t.table[0].size(); ++i) {
            size_t width = colsW[i] - t.table[0][i].size() + add * 2;
            for (size_t j{0}; j < width / 2; ++j) { str << t.tableCars["line"]; }
            for (size_t j{0}; j < t.table[0][i].size(); ++j) { str << t.tableCars["line"]; }
            for (size_t j{0}; j < width - static_cast< size_t >(width / 2); ++j) {
                str << t.tableCars["line"];
            }
            str << t.tableCars["line-col top"];
        }
        str << "\b" << t.tableCars["top right"];
        str << std::endl;

        str << t.tableCars["col"];
        for (size_t i{0}; i < t.table[0].size(); ++i) {
            size_t width = colsW[i] - t.table[0][i].size() + add * 2;
            for (size_t j{0}; j < width / 2; ++j) { str << " "; }
            str << t.table[0][i];
            for (size_t j{0}; j < width - static_cast< size_t >(width / 2); ++j) { str << " "; }
            str << t.tableCars["col"];
        }
        str << std::endl;

        str << t.tableCars["line-col left"];
        for (size_t i{0}; i < t.table[0].size(); ++i) {
            size_t width = colsW[i] - t.table[0][i].size() + add * 2;
            for (size_t j{0}; j < width / 2; ++j) { str << t.tableCars["line"]; }
            for (size_t j{0}; j < t.table[0][i].size(); ++j) { str << t.tableCars["line"]; }
            for (size_t j{0}; j < width - static_cast< size_t >(width / 2); ++j) {
                str << t.tableCars["line"];
            }
            str << t.tableCars["line-col"];
        }
        str << "\b" << t.tableCars["line-col right"];
        str << std::endl;
        /********/
        if (t.table.size() > 1) {
            /* Body */
            size_t nbLine = t.table[1].size();

            for (size_t j{0}; j < nbLine; ++j) {
                str << t.tableCars["col"];
                for (size_t i{1}; i < t.table.size(); ++i) {
                    size_t width = colsW[i - 1] - t.table[i][j].size() + add * 2;

                    for (size_t k{0}; k < width / 2; ++k) { str << " "; }
                    str << t.table[i][j];
                    for (size_t k{0}; k < width - static_cast< size_t >(width / 2); ++k) {
                        str << " ";
                    }
                    str << t.tableCars["col"];
                }
                str << std::endl;
            }
            /********/
        }
        /* Footer */
        str << t.tableCars["bottom left"];
        for (size_t i{0}; i < t.table[0].size(); ++i) {
            size_t width = colsW[i] - t.table[0][i].size() + add * 2;

            for (size_t j{0}; j < width / 2; ++j) { str << t.tableCars["line"]; }
            for (size_t j{0}; j < t.table[0][i].size(); ++j) { str << t.tableCars["line"]; }
            for (size_t j{0}; j < width - static_cast< size_t >(width / 2); ++j) {
                str << t.tableCars["line"];
            }
            str << t.tableCars["line-col bottom"];
        }
        str << "\b" << t.tableCars["bottom right"];
        str << std::endl;
        /**********/

        return str;
    }
}   // namespace mcd
