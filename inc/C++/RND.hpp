/*!
 *
 *	\file		RND.hpp
 *	\author		Mathias CABIOCH-DELALANDE
 *	\created	May, 29 2018
 *  \modified   November, 15 2020
 *
 */
#ifndef HEADER_CPP_RND
#define HEADER_CPP_RND

#include <random>

namespace mcd
{
    /*!
     * \class RND
     * \brief	A class to simplify the use of random
     */
    template< typename T, typename U >
    class RND {
        public:
        RND() : rd(), gen(rd()) {}

        /*!
         * \brief	The definition of the operator ()
         *		\param[in]		a		The first boundary
         *		\param[in]		b		The first boundary
         *
         *		\return			Return a random number between \a a and \a b
         */
        T operator()(T a, T b) {
            U dist(a, b);
            return dist(gen);
        }

        private:
        std::random_device rd;
        std::mt19937       gen;
    };

#ifndef DOXYGEN_SHOULD_SKIP_THIS
    typedef RND< int, std::uniform_int_distribution<> > Rnd;
#endif /* DOXYGEN_SHOULD_SKIP_THIS */

    /*!
     * \brief	Compute a random number in a computed range
     *		\param[in]		a		The boundary of the range
     *		\param[in]		b		The distance btween the boundaries
     *
     *		\return			Return a random value
     */
    template< typename T, typename U = double >
    T rndRange(T a, U b = 0.1) {
        Rnd local_rnd;

        return local_rnd(static_cast< int >(a * (1.0 - b)), static_cast< int >(a * (1.0 + b)));
    }

    /*!
     * \brief	Compute a floating point random number
     *		\param[in]		minimum		The minimum value
     *		\param[in]		maximum		The maximum value
     *		\param[in]		decade		The number of value after the comma
     *
     *		\return			Return a random floating point value
     */
    template< typename T = double >
    T rndFloatingNumber(int minimum, int maximum, int decade) {
        Rnd local_rnd;

        return static_cast< T >(local_rnd(minimum, maximum * decade)) / static_cast< T >(decade);
    }

    /*!
     * \brief	A global rnd variable to compute random integers
     * \details	rnd(\b int, \b int)
     */
    extern Rnd rnd;
}   // namespace mcd

#endif   // HEADER_CPP_RND
