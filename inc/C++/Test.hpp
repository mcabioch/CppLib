/*!
*
*	\file		Test.hpp
*	\author		Mathias CABIOCH-DELALANDE
*	\created	Wednesday November, 27 2019 23:32:26
*	\modified	November, 30 2019
*
*/
#ifndef HEADER_CPP_TEST
#define HEADER_CPP_TEST

#include "C++/C++lib.hpp"

namespace mcd {
#ifndef DOXYGEN_SHOULD_SKIP_THIS
	struct Test_struct {
		bool expr;
		std::string str;
		std::string file;
		std::string func;
		int line;
	};
#endif //DOXYGEN_SHOULD_SKIP_THIS

	#define TEST_FORMAT_MAX		0b00000010
	#define TEST_FORMAT_ERROR	0b00000100
	#define TEST_FORMAT_SUCCESS	0b00001000
	#define TEST_FORMAT_ALL		TEST_FORMAT_MAX | TEST_FORMAT_ERROR | TEST_FORMAT_SUCCESS

	/*!
	* \class	Test
	* \brief	A static class to test code
	*/
	class Test {
		/* Members of Test */
		public:
			/* Getters of Test */
				/*!
				* \brief	Return the number of tests executed after a call to run
				* \error	Abort the program if it's call before run
				* \return	size_t
				*/
				inline static size_t nb(){
					trycatch_assert(_launched, debug_elogs("Please run the tests before recovering this value"));
					return _tests.size();
				}
				/*!
				* \brief	Return the number of success after a call to run
				* \error	Abort the program if it's call before run
				* \return	size_t
				*/
				inline static size_t success(){
					trycatch_assert(_launched, debug_elogs("Please run the tests before recovering this value"));
					return _s;
				}
				/*!
				* \brief	Return the number of fails after a call to run
				* \error	Abort the program if it's call before run
				* \return	size_t
				*/
				inline static size_t failures(){
					trycatch_assert(_launched, debug_elogs("Please run the tests before recovering this value"));
					return _f;
				}
			/* Others members of Test */
				/*!
				* \brief		Add a function (without arguments and returning void) that contains a group of tests, could be a lambda
				* \param[in]	name		A name to group the tests and to call in run
				* \param[in]	func		The function containing the group of tests
				* \return		void
				*/
				inline static void addSuite(const std::string& name, std::function<void()> func){ _funcs[name].push_back(func); }
				/*!
				* \brief		Run all or a group of tests
				* \param[in]	key			The tests group's name, empty for all tests
				* \return		void
				*/
				static void run(const std::string& key = "");

				/*!
				* \brief		Add a test analyze to an array
				* \param[in]	test		The test to add
				* \return		void
				*/
				static void addTest(const Test_struct& test);
				/*!
				* \brief		Add a throw test with addTest
				* \param[in]	instr		The tested code
				* \param[in]	except		The expected exception
				* \param[in]	test		The test's analyze
				* \return		void
				*/
				inline static void addThrow(const std::string& instr, const std::string& except, const Test_struct& test){ addTest({test.expr, instr + " throws " + except, test.file, test.func, test.line}); }

				/*!
				* \brief		Test if a value is or isn't in an array
				* \param[in]	value		The value to find
				* \param[in]	array		The array where to search
				* \param[in]	test		Some test analyze datas
				* \param[in]	start		Set if in test the presence or absence of value
				* \return		void
				*/
				template<class T, class U>
				static void in(const T& value, const U& array, const Test_struct& test, bool start = false){
					bool isIn = start;

					if(std::find(array.begin(), array.end(), value) != array.end()){
						isIn = !isIn;
					}

					addTest({isIn, mcd::tos(value) + " in " + test.str, test.file, test.func, test.line});
				}

				/*!
				* \brief		Test if class U is an instance of T or is a child instance of T
				* \param[in]	obj		The object of class U
				* \param[in]	strObj	The string with obj name
				* \param[in]	test	Some test analyze datas
				* \param[in]	cmp		Set if instance is normal or inverted, \b true is normal
				* \return		void
				*/
				template<class T, class U>
				static void instance(const U&, const std::string& strObj, const Test_struct& test, bool cmp = true){
					addTest({(std::is_base_of<T, U>::value == cmp), std::string("Is ") + strObj + " an instance of " + test.str, test.file, test.func, test.line});
				}

				/*!
				* \brief			Print the results of the tests
				* \param[in,out]	os		The stream where to write
				* \param[in]		format	The format of the analyze, default is TEST_FORMAT_ALL
				* \return			void
				*/
				static void print(std::ostream& os, size_t format = TEST_FORMAT_ALL);

		private:
			/*! \brief	The constructor of the class */
			Test();
			virtual ~Test();

			static std::stringstream printTest(const Test_struct& t, size_t i, size_t format);

		/* Atttributes of Test */
		private:
			/* Global */
				static std::vector<Test_struct> _tests;
				static std::map<std::string, std::vector<std::function<void()>>> _funcs;
			/* Local */
				static size_t _s, _f;
				static std::map<size_t, std::string> _names;
				static bool _launched;
	};

	#define TEST_ADD_TEST(EXPR, STR) \
	mcd::Test::addTest({static_cast<bool>(EXPR), STR, __FILE__, __PRETTY_FUNCTION__, __LINE__})

	#define unit_true(EXPR) \
	TEST_ADD_TEST(static_cast<bool>(EXPR), #EXPR)

	#define unit_false(EXPR) \
	TEST_ADD_TEST((!static_cast<bool>(EXPR)), "! #EXPR")

	#define unit_equals(A, B) \
	unit_true(A == B)

	#define unit_notEquals(A, B) \
	unit_false(A == B)

	#define unit_in(VALUE, ARRAY) \
	mcd::Test::in(VALUE, ARRAY, {false, #ARRAY, __FILE__, __PRETTY_FUNCTION__, __LINE__})

	#define unit_notIn(VALUE, ARRAY) \
	mcd::Test::in(VALUE, ARRAY, {false, #ARRAY, __FILE__, __PRETTY_FUNCTION__, __LINE__}, true)

	#define TEST_ADD_THROW(INSTR, EXCEPT, EXPR) \
	mcd::Test::addThrow(#INSTR, #EXCEPT, {static_cast<bool>(EXPR), "", __FILE__, __PRETTY_FUNCTION__, __LINE__})

	#define unit_throws(INSTR, EXCEPT) \
	{ \
		bool throws = false; \
		try { \
			INSTR; \
		} catch(const EXCEPT&){ \
			throws = true; \
		} catch(const std::exception&){} \
		TEST_ADD_THROW(INSTR, EXCEPT, throws); \
	}

	#define unit_noThrows(INSTR, EXCEPT) \
	{ \
		bool throws = true; \
		try { \
			INSTR; \
		} catch(const EXCEPT&){ \
			throws = false; \
		} catch(const std::exception&){} \
		TEST_ADD_THROW(INSTR, EXCEPT, throws); \
	}

	#define unit_instance(OBJ, INSTANCE) \
	mcd::Test::instance<INSTANCE>(OBJ, #OBJ, {false, #INSTANCE, __FILE__, __PRETTY_FUNCTION__, __LINE__})

	#define unit_notInstance(OBJ, INSTANCE) \
	mcd::Test::instance<INSTANCE>(OBJ, #OBJ, {false, #INSTANCE, __FILE__, __PRETTY_FUNCTION__, __LINE__}, false)
}

#endif //HEADER_CPP_TEST
