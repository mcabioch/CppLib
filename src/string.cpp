#include "C++/string.hpp"

namespace mcd
{
    std::vector< std::string > split(const std::string& in, char separator) {
        std::vector< std::string > out;
        std::string                part{""};

        for (auto c : in) {
            if (c == separator) {
                if (part != "") {
                    out.push_back(part);
                    part = "";
                }
            } else {
                part += c;
            }
        }

        if (part != "") { out.push_back(part); }

        return out;
    }

    std::vector< std::string > split(const std::string& in, const std::string& c) {
        std::vector< std::string > out;
        auto                       inside_in = in;
        size_t                     pos{0};

        while ((pos = inside_in.find(c)) != std::string::npos) {
            out.push_back(inside_in.substr(0, pos));
            inside_in = inside_in.substr(pos + c.size(), inside_in.size());
        }

        if (inside_in.size()) { out.push_back(inside_in.substr(0, inside_in.size())); }

        return out;
    }

    std::vector< std::string > split(const std::string& in, std::vector< std::string > cars) {
        std::vector< std::string > out;
        std::string                mask      = "&*-/_=";
        auto                       inside_in = in;

        for (auto car : cars) { inside_in = replace(inside_in, car, mask); }
        out = explode(inside_in, mask);

        return out;
    }

    void trim(std::string& in) {
        std::string out = in;
        in              = "";

        for (unsigned i{0}; i < out.size(); ++i) {
            if (!(out[i] == ' ' && (!in.size() || in[i - 1] == ' ' || i + 1 == out.size()))) {
                in += out[i];
            }
        }
    }

    std::string uppercase(const std::string&    str,
                          std::string::iterator begin,
                          std::string::iterator end) {
        std::string out    = "";
        short       modify = 0;

        for (auto it = str.begin(); it != str.end(); ++it) {
            if ((*it) == (*begin) && !modify) {
                modify = 1;
            } else if ((*it) == (*end)) {
                modify = 2;
            }

            if (modify == 1) {
                out += tos(static_cast< char >(toupper(*it)));
            } else {
                out += tos(*it);
            }
        }

        return out;
    }
    std::string lowercase(const std::string&    str,
                          std::string::iterator begin,
                          std::string::iterator end) {
        std::string out    = "";
        short       modify = 0;

        for (auto it = str.begin(); it != str.end(); ++it) {
            if ((*it) == (*begin) && !modify) {
                modify = 1;
            } else if ((*it) == (*end)) {
                modify = 2;
            }

            if (modify == 1) {
                out += tos(static_cast< char >(tolower(*it)));
            } else {
                out += tos(*it);
            }
        }

        return out;
    }

    std::string uppercase(const std::string& str) {
        auto inside_str = str;
        return uppercase(str, inside_str.begin(), inside_str.end());
    }
    std::string lowercase(const std::string& str) {
        auto inside_str = str;
        return lowercase(str, inside_str.begin(), inside_str.end());
    }

    std::string replace(const std::string& str,
                        const std::string& from,
                        const std::string& to,
                        bool               regex,
                        bool               word,
                        bool               insensitive) {
        std::regex str_regex;
        auto       inside_from = from;
        auto       inside_to   = to;

        try {
            if (!regex) {
                std::vector< std::pair< std::string, std::string > > masks;

                masks.push_back(std::make_pair("\\\\", "\\\\"));

                masks.push_back(std::make_pair("\\(", "\\("));
                masks.push_back(std::make_pair("\\)", "\\)"));
                masks.push_back(std::make_pair("\\[", "\\["));
                masks.push_back(std::make_pair("\\]", "\\]"));
                masks.push_back(std::make_pair("\\{", "\\{"));
                masks.push_back(std::make_pair("\\}", "\\}"));

                masks.push_back(std::make_pair("\\.", "\\."));
                masks.push_back(std::make_pair("\\*", "\\*"));
                masks.push_back(std::make_pair("\\-", "\\-"));
                masks.push_back(std::make_pair("\\|", "\\|"));
                masks.push_back(std::make_pair("\\?", "\\?"));
                masks.push_back(std::make_pair("\\+", "\\+"));
                masks.push_back(std::make_pair("\\^", "\\^"));
                masks.push_back(std::make_pair("\\$", "\\$"));

                for (auto mask : masks) {
                    inside_from = replace(inside_from, mask.first, mask.second, true);
                }
            }

            if (word) {
                inside_from = "([^a-zA-Z0-9_-])" + inside_from + "(?![a-zA-Z0-9_-])";
                inside_to   = "$1" + inside_to;
            }

            if (insensitive) {
                str_regex.assign(from, std::regex_constants::icase);
            } else {
                str_regex.assign(inside_from);
            }
        } catch (std::regex_error& e) {
            error_log(line_number,
                      "Regex Error",
                      "An error occured during the replacement in \n'",
                      str,
                      "'\n where '",
                      inside_from,
                      "' has to be replaced by '",
                      inside_to,
                      "'\n",
                      e.what());
        }

        return std::regex_replace(str, str_regex, inside_to);
    }

    std::string randStr(size_t nb, unsigned short flags) {
        std::string                out  = "";
        std::vector< std::string > cars = {};

        if ((flags & CaractSet::NUM) == CaractSet::NUM ||
            (flags & CaractSet::READ) == CaractSet::READ ||
            (flags & CaractSet::ALL) == CaractSet::ALL) {
            cars.insert(cars.end(), {"0", "1", "2", "3", "4", "5", "6", "7", "8", "9"});
        }
        if ((flags & CaractSet::SPEC) == CaractSet::SPEC ||
            (flags & CaractSet::ALL) == CaractSet::ALL) {
            cars.insert(cars.end(), {" ", "?", "!", ".", "_", "-", ",", ":", ";", "/", "*"});
        }
        if ((flags & CaractSet::LOWER) == CaractSet::LOWER ||
            (flags & CaractSet::ALPHA) == CaractSet::ALPHA ||
            (flags & CaractSet::READ) == CaractSet::READ ||
            (flags & CaractSet::ALL) == CaractSet::ALL) {
            cars.insert(cars.end(),
                        {"a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m",
                         "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"});
        }
        if ((flags & CaractSet::UPPER) == CaractSet::UPPER ||
            (flags & CaractSet::ALPHA) == CaractSet::ALPHA ||
            (flags & CaractSet::READ) == CaractSet::READ ||
            (flags & CaractSet::ALL) == CaractSet::ALL) {
            cars.insert(cars.end(),
                        {"A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M",
                         "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"});
        }

        for (size_t i{0}; i < nb; ++i) { out += cars[rng(0, static_cast< int >(cars.size()) - 1)]; }

        return out;
    }

    size_t count(const std::string& text, char c) {
        size_t nb{0};

        for (auto car : text) {
            if (car == c) { nb++; }
        }

        return nb;
    }

    std::vector< std::vector< std::string > > getall(const std::string& str_regex,
                                                     const std::string& str,
                                                     bool               insensitive) {
        std::regex regex;
        if (insensitive) {
            regex.assign(str_regex, std::regex_constants::icase);
        } else {
            regex.assign(str_regex);
        }

        std::sregex_iterator                      regex_it_next(str.begin(), str.end(), regex);
        std::sregex_iterator                      regex_it_end;
        std::vector< std::vector< std::string > > out;

        while (regex_it_next != regex_it_end) {
            std::smatch                it_match = *regex_it_next;
            std::vector< std::string > occurence;

            if (it_match.size() > 1) {
                for (size_t i{1}; i < it_match.size(); ++i) {
                    occurence.push_back(it_match.str(i));
                }
                out.push_back(occurence);
            } else if (it_match.size() > 0) {
                for (size_t i{0}; i < it_match.size(); ++i) {
                    occurence.push_back(it_match.str(i));
                }
                out.push_back(occurence);
            }

            regex_it_next++;
        }

        return out;
    }

    std::string removeAccents(const std::string& str) {
        auto inside_str = str;

        inside_str = replace(inside_str, "(é|è|ê|ë)", "e", true);
        inside_str = replace(inside_str, "(É|È|Ê|Ë)", "E", true);
        inside_str = replace(inside_str, "(à|â|ä)", "a", true);
        inside_str = replace(inside_str, "(À|Â|Ä)", "A", true);
        inside_str = replace(inside_str, "(ç)", "c", true);
        inside_str = replace(inside_str, "(Ç)", "C", true);
        inside_str = replace(inside_str, "(î|ï|ì)", "i", true);
        inside_str = replace(inside_str, "(Î|Ï|Ì)", "I", true);
        inside_str = replace(inside_str, "(ô|ö|ò)", "o", true);
        inside_str = replace(inside_str, "(Ô|Ö|Ò)", "O", true);
        inside_str = replace(inside_str, "(û|ù|ü)", "u", true);
        inside_str = replace(inside_str, "(Û|Ù|Ü)", "U", true);

        return str;
    }
}   // namespace mcd
