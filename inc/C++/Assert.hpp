/*!
 *
 *	\file		Assert.hpp
 *	\author		Mathias CABIOCH-DELALANDE
 *	\created	Wednesday November, 13 2019 11:22:08
 *	\modified	November, 13 2020
 *
 */
#ifndef HEADER_ASSERT
#define HEADER_ASSERT

#include "AssertionException.hpp"

namespace mcd
{
    struct AssertionLocationStruct {
        std::string file;
        std::string func;
        int         line;
    };

    /*!
     * \class	Assert
     * \brief	My assert's implementation
     */
    class Assert {
        /* Members of Assert */
        public:
        /* Constructors & Destructor of Assert */
        /*! \brief	The constructor of the class */
        Assert() {}
        virtual ~Assert() {}
        /* Operators of Assert */
        void operator()(bool expr, const AssertionLocationStruct& location, const std::string& msg);
    };

    extern Assert assertion;
#define assert(EXPR)                                                                               \
    mcd::assertion(static_cast< bool >(EXPR), {__FILE__, __PRETTY_FUNCTION__, __LINE__}, #EXPR)

#define trycatch_assert_2(EXPR, INSTEAD)                                                           \
    try {                                                                                          \
        assert(EXPR);                                                                              \
    } catch (const mcd::AssertionException& e) {                                                   \
        std::cout << mcd::console::Color(mcd::console::Colors::LIGHT_YELLOW_F) << e.what()         \
                  << mcd::console::Color(mcd::console::Colors::NORMAL) << std::endl;               \
        INSTEAD;                                                                                   \
    }
#define trycatch_assert_1(EXPR) trycatch_assert_2(EXPR, std::function< void() >())

#define trycatch_assert_X(x, A, FUNC, ...) FUNC
#define trycatch_assert(...)                                                                       \
    trycatch_assert_X(__VA_ARGS__, trycatch_assert_2(__VA_ARGS__), trycatch_assert_1(__VA_ARGS__), )
}   // namespace mcd

#endif   // HEADER_ASSERT
