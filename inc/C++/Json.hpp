/*!
 *
 *  \file       Json.hpp
 *  \author     Mathias CABIOCH-DELALANDE
 *  \created    Sunday November, 24 2019 14:24:00
 *  \modified   November, 18 2020
 *
 */
#ifndef HEADER_MCD_JSON
#define HEADER_MCD_JSON

#include "JsonException.hpp"

namespace mcd
{
    /*!
     * \class	Json
     * \brief	A class to manage Json formatted data
     */
    class Json {
        /* Members of Json */
        public:
        /* Internal enums of Json */
        enum JsonType { NONE = 0, NUMBER, STRING, OBJECT, ARRAY };

        /* Constructors & Destructor of Json */
        /*! \brief	The constructor of the class */
        explicit Json();
        virtual ~Json();

        /*!
         * \brief	The copy constructor of the class
         *	\param[in]		other		The class' instance for copying
         */
        Json(const Json& other) noexcept;

        /*!
         * \brief	The move constructor of the class
         *	\param[in]		other		The class' instance for moving
         */
        Json(const Json&& other) noexcept;

        /* Getters of Json */
        /*!
         * \brief	Return the value of a Json object of type NONE, NUMBER or STRING.
         */
        std::string get() const;

        /* Operators of Json */
        /*!
         * \brief	The copy operator of the class
         *	\param[in]		other		The class' instance for copying
         */
        Json& operator=(const Json& other) noexcept;

        /*!
         * \brief	The move operator of the class
         *	\param[in]		other		The class' instance for moving
         */
        Json& operator=(const Json&& other) noexcept;

        /*!
         * \brief	An operator to use a Json object as an array
         *	\param[in]		index		The index in the Json object, it can
         *                                       be used in an array like part of the object
         *  \return         Return a child Json object
         */
        Json& operator[](int index) { return operator[](tos(index)); }

        /*!
         * \brief	An operator to use a Json object as an array
         *	\param[in]		index		The index in the Json object
         *  \return         Return a child Json object
         */
        Json& operator[](const std::string& index);

        /* Friends of Json */
        friend bool operator==(const Json& a, const Json& b) noexcept {
            return a._data == b._data && a._type == b._type && a._converted == b._converted;
        }

        friend std::ostream& operator<<(std::ostream& os, const Json& js);

        /* Others members of Json */
        /*!
         * \brief	Parse a std::string into a Json object
         */
        void parse(const std::string& data);

        /*!
         * \brief	Parse json data saved in a file into a usable Json object
         */
        void parseFile(const std::string& filename);

        /*!
         * \brief	Return the size of a Json object of type OBJECT or ARRAY.
         */
        inline size_t size() { return (_data != "") ? 1 : _converted.size(); }

        private:
        /* Others members of Json */
        std::ostream& print(std::ostream& os, const std::string& tab = "") const;

        void set(const std::string& data);

        void internal_parse(const std::string& data);
        void normal_parse(const std::string& data);
        void array_parse(const std::string& data);

        /* Atttributes of Json */
        private:
        /* Local */
        std::string                   _data;
        std::map< std::string, Json > _converted;
        JsonType                      _type;
    };
}   // namespace mcd

#endif   // HEADER_MCD_JSON
