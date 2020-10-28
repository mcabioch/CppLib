#include "C++/files.hpp"

namespace mcd
{
    /* Format the string for files */
    void fileFormat(std::string& line) {
        std::string out = line;
        line            = "";

        for (auto& c : out) {
            if (c != '\r' && c != '\n') { line += c; }
        }
    }

    /* Get the file's size */
    size_t getFileSize(const std::string& path) {
        size_t size{0};

        std::ifstream file;
        file.open(path.c_str(), std::ios::binary);

        if (!file) { return -1; }

        file.seekg(0, std::ios::end);                 // Go to the end of the file
        size = static_cast< size_t >(file.tellg());   // Tell the position of the cursor

        return size;
    }

    /* Get the lines of a given input stream */
    std::vector< std::string > getlines(std::ifstream& input) {
        std::vector< std::string > out;

        if (!input) { return out; }

        for (std::string line; std::getline(input, line);) { out.push_back(line); }

        input.close();

        return out;
    }

    /* Write the lines into a given output stream */
    bool setlines(std::ofstream& output, const std::vector< std::string >& lines) {
        if (!output) { return false; }

        for (auto line : lines) { output << line << std::endl; }

        output.close();

        return true;
    }

    bool fileExists(const std::string& path) {
        std::ifstream verifier;

        verifier.open(path.c_str());

        if (!verifier) { return false; }

        verifier.close();
        return true;
    }
}   // namespace mcd
