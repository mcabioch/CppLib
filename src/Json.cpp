#include "C++/Json.hpp"

namespace mcd
{
    Json::Json() : _data(""), _converted(), _type(NONE) {}
    Json::~Json() {}

    Json::Json(const Json& other) noexcept : _data(""), _converted(), _type(NONE) { *this = other; }

    Json& Json::operator=(const Json& other) noexcept {
        if (this == &other) { return *this; }

        _data      = other._data;
        _converted = other._converted;
        _type      = other._type;

        return *this;
    }

    Json::Json(const Json&& other) noexcept : _data(""), _converted(), _type(NONE) {
        *this = std::move(other);
    }

    Json& Json::operator=(const Json&& other) noexcept {
        if (this == &other) { return *this; }

        _data      = other._data;
        _converted = other._converted;
        _type      = other._type;

        return *this;
    }

    Json& Json::operator[](const std::string& index) { return _converted.at(index); }

    void Json::parse(const std::string& data) {
        _data = "";
        _converted.clear();

        auto        lines          = split(data, '\n');
        std::string formatted_data = "";

        for (auto line : lines) {
            trim(line);

            line = replace(line, "{ ", "{");
            line = replace(line, " }", "}");

            line = replace(line, "[ ", "[");
            line = replace(line, "] ", "]");

            line = replace(line, ", \"", ",\"");
            line = replace(line, "}, {", "},{");
            line = replace(line, "\": ", "\":");

            formatted_data += line;
        }

        internal_parse(formatted_data);
    }

    void Json::parseFile(const std::string& filename) {
        std::ifstream read;
        read.open(filename);

        if (!read) { throw JsonException("Impossible to open the file '" + filename + "' !"); }

        parse(implode(getlines(read), "\n"));
    }

    std::string Json::get() const {
        switch (_type) {
            case OBJECT:
                throw JsonException("You can't get a unique value for a Json Object!");
                break;
            case ARRAY:
                throw JsonException("You can't get a unique value for a Json Array!");
                break;
            default: break;
        }

        return _data;
    }

    std::ostream& operator<<(std::ostream& os, const Json& js) { return js.print(os); }

    std::ostream& Json::print(std::ostream& os, const std::string& tab) const {
        if (_type == Json::JsonType::NONE || _type == Json::JsonType::STRING) {
            os << "\"" << _data << "\"";
        } else if (_type == Json::JsonType::NUMBER) {
            os << _data;
        } else if (_type == Json::JsonType::OBJECT) {
            os << "{";

            size_t i = 0;
            for (auto& data : _converted) {
                if (i == 0) { os << "\n"; }

                os << tab << "    \"" << data.first << "\": ";
                data.second.print(os, tab + "    ");

                if (i + 1 < _converted.size()) { os << ",\n"; }

                ++i;
            }
            os << "\n" << tab << "}";
        } else if (_type == Json::JsonType::ARRAY) {
            os << "[";

            size_t i = 0;
            for (auto& data : _converted) {
                if (i == 0) { os << "\n"; }

                os << tab << "    ";
                data.second.print(os, tab + "    ");

                if (i + 1 < _converted.size()) { os << ",\n"; }

                ++i;
            }
            os << "\n" << tab << "]";
        } else {
        }
        return os;
    }

    void Json::set(const std::string& data) { _data = data; }

    void Json::internal_parse(const std::string& data) {
        if (!data.size()) {
            _type = NONE;
            return;
        }

        if (data.at(0) == '[') {
            array_parse(data);
        } else {
            normal_parse(data);
        }
    }

    void Json::normal_parse(const std::string& data) {
        _data = data;
        _type = OBJECT;
        std::map< std::string, std::string > out;

        int parent = 0;

        bool next = false;

        bool isIndex     = true;
        bool setIndex    = false;
        bool isText      = false;
        bool isNumber    = false;
        bool isTextNoStr = false;
        bool keep        = false;

        std::string text;
        std::string index;

        for (size_t i = 0; i < _data.size(); ++i) {
            const auto& d          = _data[i];
            auto        lastParent = parent;

            if (!isText) {
                switch (d) {
                    case '{':
                    case '[': parent++; break;
                    case '}':
                    case ']':
                        parent--;
                        if (isTextNoStr) {
                            isTextNoStr = false;
                            next        = true;
                        }
                        break;
                    default: break;
                }
            }

            if (parent == 0 && lastParent == 0) {
                keep = true;
                break;
            }

            if (lastParent <= 1 && parent == 1) {
                switch (d) {
                    case '"':
                        if (!isText && ((i > 0 && _data[i - 1] != '\\') || i == 0)) {
                            isText = true;
                            text   = "";
                            continue;
                        } else if (isText && ((i > 0 && _data[i - 1] != '\\') || i == 0)) {
                            isText = false;
                            next   = true;
                        }
                        break;
                    case '-':
                    case '0':
                    case '1':
                    case '2':
                    case '3':
                    case '4':
                    case '5':
                    case '6':
                    case '7':
                    case '8':
                    case '9':
                        if (!isText && !isNumber) {
                            isNumber = true;
                            text     = d;
                            continue;
                        }
                        break;
                    case ':':
                        if (!isText || isNumber) {
                            isIndex  = false;
                            isNumber = false;

                            auto nextData = _data[i + 1];
                            if (nextData != '"' && nextData != '[' && nextData != '{') {
                                isTextNoStr = true;
                            }
                            continue;
                        }
                        break;
                    case ',':
                        if (!isText) {
                            if (isNumber) {
                                setIndex    = true;
                                isNumber    = false;
                                isTextNoStr = false;

                                next = true;
                            } else {
                                isIndex = true;

                                if (isTextNoStr) {
                                    isTextNoStr = false;

                                    next = true;
                                }
                            }
                        }
                        break;
                    default: break;
                }
                if (isText || isTextNoStr || isNumber) { text += d; }
            } else if (parent > 1) {
                text += d;
            } else if (parent == 1 && lastParent > 1) {
                text += d;
                next = true;
            }

            if (next) {
                if (isIndex) {
                    index   = text;
                    isIndex = false;
                } else {
                    Json json;
                    json.internal_parse(text);
                    _converted[index] = json;

                    if (setIndex) { isIndex = true; }
                }

                text = "";
                next = false;
            }
        }

        if (!keep) {
            _data = "";
        } else {
            if (std::regex_match(_data, std::regex("-?[0-9]*\\.?[0-9]+"))) {
                _type = NUMBER;
            } else {
                _type = STRING;
            }
        }
    }

    void Json::array_parse(const std::string& data) {
        _data = data;
        _type = ARRAY;
        std::map< std::string, std::string > out;
        size_t                               index_int = 0;

        int parent = 0;

        bool next = false;

        bool isText      = false;
        bool isTextNoStr = false;

        std::string text;
        std::string index;

        for (size_t i = 0; i < _data.size(); ++i) {
            const auto& d          = _data[i];
            auto        lastParent = parent;

            if (!isText) {
                switch (d) {
                    case '{':
                    case '[': parent++; break;
                    case '}':
                    case ']':
                        parent--;
                        if (isTextNoStr) {
                            isTextNoStr = false;
                            next        = true;
                        }
                        break;
                    default: break;
                }
            }

            if (lastParent <= 1 && parent == 1) {
                switch (d) {
                    case '"':
                        if (!isText && ((i > 0 && _data[i - 1] != '\\') || i == 0)) {
                            isText = true;
                            text   = "";
                            continue;
                        } else if (isText && ((i > 0 && _data[i - 1] != '\\') || i == 0)) {
                            isText = false;
                            next   = true;
                        }
                        break;
                    case ',':
                        if (!isText) {
                            if (isTextNoStr) {
                                isTextNoStr = false;
                                next        = true;
                            }
                        }
                        break;
                    default: break;
                }
                if (isText || isTextNoStr) { text += d; }
            } else if (parent > 1) {
                text += d;
            } else if (parent == 1 && lastParent > 1) {
                text += d;
                next = true;
            }

            if (text.size()) {
                if (next) {
                    index = tos(index_int);
                    index_int++;

                    Json json;
                    json.internal_parse(text);
                    _converted[index] = json;

                    text = "";
                    next = false;
                }
            }
        }

        _data = "";
    }
}   // namespace mcd