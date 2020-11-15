/*!
 *
 *	\file		vector.hpp
 *	\author		Mathias CABIOCH-DELALANDE
 *	\created	Friday September, 27 2019 00:02:47
 *	\modified	November, 15 2020
 *
 */
#ifndef HEADER_VECTOR
#define HEADER_VECTOR

#include "arraysIncludes.hpp"

namespace mcd
{
    /*!
     * \class	vector
     * \brief	Add some features to std::vector
     */
    template< class C >
    class vector : public std::vector< C > {
        /* Members of vector */
        public:
        /* Constructor */
        vector() : std::vector< C >() {}
        vector(const std::initializer_list< C >& v) : std::vector< C >(v) {}
        vector(const std::vector< C >& v) : std::vector< C >(v) {}

        /* Operators of vector */
        vector< C >& operator=(const std::initializer_list< C >& v) {
            *this = v;

            return *this;
        }
        vector< C >& operator=(const std::vector< C >& v) {
            *this = v;

            return *this;
        }

        /*!
         * \brief   Overload of the += operator to add the content of a vector into another
         *  \param[in]      b         The second vector to use in the computation
         *  \return         Return the computed vector
         */
        vector< C >& operator+=(const vector< C >& b) {
            for (const auto& val : b) { this->push_back(val); }

            return *this;
        }

        /*!
         * \brief   Overload of the + operator to add the content of a vector into another
         *  \param[in]      a         The first vector to use in the computation
         *  \param[in]      b         The second vector to use in the computation
         *  \return         Return the computed vector
         */
        friend vector< C > operator+(const vector< C >& a, const vector< C >& b) {
            vector< C > c = a;
            c += b;
            return c;
        }

        /*!
         * \brief   Overload of the -= operator to erase in a vector the values of another one.
         *  \param[in]      b         The second vector to use in the computation
         *  \return         Return the computed vector
         */
        vector< C >& operator-=(const vector< C >& b) {
            for (const auto& val : b) {
                auto it_pos = std::find(this->begin(), this->end(), val);
                if (it_pos != this->end()) {
                    this->erase(it_pos);
                    this->shrink_to_fit();
                }
            }

            return *this;
        }

        /*!
         * \brief   Overload of the - operator to erase in a vector the values of another one.
         *  \param[in]      a         The first vector to use in the computation
         *  \param[in]      b         The second vector to use in the computation
         *  \return         Return the computed vector
         */
        friend vector< C > operator-(const vector< C >& a, const vector< C >& b) {
            vector< C > c = a;
            c -= b;
            return c;
        }

        /*!
         * \brief   Overload of the &= operator to get the values that are in the two vectors
         *  \param[in]      b         The second vector to use in the computation
         *  \return         Return the computed vector
         */
        vector< C >& operator&=(const vector< C >& b) {
            *this -= (*this - b);

            return *this;
        }

        /*!
         * \brief   Overload of the & operator to get the values that are in the two vectors
         *  \param[in]      a         The first vector to use in the computation
         *  \param[in]      b         The second vector to use in the computation
         *  \return         Return the computed vector
         */
        friend vector< C > operator&(const vector< C >& a, const vector< C >& b) {
            vector< C > c = a;
            c &= b;
            return c;
        }

        /*!
         * \brief   Overload of the |= operator to get only the values that are in one
         * of the vector but not in twice.
         *  \param[in]      b         The second vector to use in the computation
         *  \return         Return the computed vector
         */
        vector< C >& operator|=(const vector< C >& b) {
            vector< C > c = *this;
            *this += b;
            *this -= (c & b);

            return *this;
        }

        /*!
         * \brief   Overload of the | operator to get only the values that are in one
         * of the vector but not in twice.
         *  \param[in]      a       The first vector to use in the computation
         *  \param[in]      b       The second vector to use in the computation
         *  \return         Return the computed vector
         */
        friend vector< C > operator|(const vector< C >& a, const vector< C >& b) {
            vector< C > c = a;
            c |= b;
            return c;
        }

        /*!
         * \brief   Overload of the ^= operator to add the values of another vector
         * without doubling them.
         *  \param[in]      b         The second vector to use in the computation
         *  \return Return the computed vector
         */
        vector< C >& operator^=(const vector< C >& b) {
            vector< C > inside_b = b;

            inside_b -= *this & b;
            *this -= *this & b;

            *this += inside_b;

            return *this;
        }

        /*!
         * \brief   Overload of the ^ operator to add the values of another vector
         * without doubling
         *  \param[in]      a       The first vector to use in the computation
         *  \param[in]      b       The second vector to use in the computation
         *  \return         Return the computed vector
         */
        friend vector< C > operator^(const vector< C >& a, const vector< C >& b) {
            vector< C > c = a;
            c ^= b;
            return c;
        }

        /* Friends of vector */
        /*!
         * \brief   Overload of the << operator to write a vector in an output stream (std::ostream)
         *  \param[in|out]      os          The output stream variable
         *  \param[in]          other       The vector to write
         *  \return             Return a reference to the std::ostream variable
         */
        friend std::ostream& operator<<(std::ostream& os, const vector& other) {
            os << other.size();
            for (auto v : other) { os << " " << v; }

            return os;
        }

        /*!
         * \brief   Overload of the >> operator to read a vector from an input stream (std::istream)
         *  \param[in|out]      is          The input stream variable
         *  \param[out]         other       The vector to write in
         *  \return             Return a reference to the std::istream variable
         */
        friend std::istream& operator>>(std::istream& is, vector& other) {
            size_t s;
            is >> s;

            other.clear();
            for (size_t i = 0; i < s; ++i) {
                C val;
                is >> val;

                other.push_back(val);
            }

            return is;
        }

        /* Others members of vector */
        /*!
         * \brief   Erase an element in a vector at pos
         *  \param[in]      pos         The position to erase
         */
        void pop(size_t pos = 0) {
            if (pos >= this->size()) { return; }

            this->erase(this->begin() + pos);
        }

        /*!
         * \brief   Add an element in a vector at pos
         *  \param[in]      obj         The object to add
         *  \param[in]      pos         The position of the object
         */
        void push(const C& obj, size_t pos = 0) {
            if (pos >= this->size()) {
                this->push_back(obj);
                return;
            }

            vector< C > tmp;

            for (auto it = this->begin(); it != this->begin() + pos; ++it) { tmp.push_back((*it)); }
            tmp.push_back(obj);
            for (auto it = this->begin() + pos; it != this->end(); ++it) { tmp.push_back((*it)); }

            *this = tmp;
        }

        /*!
         * \brief   Add an element in a vector on the top
         *  \param[in]      obj         The object to add
         */
        void push_top(const C& obj) { push(obj, 0); }

        /*!
         * \brief   Use the std::random_shuffle function to shuffle the vector
         */
        void shuffle() { std::random_shuffle(this->begin(), this->end()); }
    };
}   // namespace mcd

#endif   // HEADER_VECTOR