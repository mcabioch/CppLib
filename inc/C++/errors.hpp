/*!
 *
 *	\file		errors.hpp
 *	\author		Mathias CABIOCH-DELALANDE
 *	\date		November, 13 2020
 *
 */
#ifndef HEADER_CPP_ERRORS
#define HEADER_CPP_ERRORS

#include "console.hpp"
#include "files.hpp"

namespace mcd
{
/*!
 * \brief		Define to do an alias of __LINE__
 */
#define line_number __LINE__

#define debug_dlog() debug_ilog()
#define debug_ilog() info_log(line_number, __FILE__)
#define debug_elog() error_log(line_number, __FILE__)
#define debug_wlog() warning_log(line_number, __FILE__)

#define debug_dlogs(...) debug_ilogs(__VA_ARGS__)
#define debug_ilogs(...) info_log(line_number, __FILE__, __VA_ARGS__)
#define debug_elogs(...) error_log(line_number, __FILE__, __VA_ARGS__)
#define debug_wlogs(...) warning_log(line_number, __FILE__, __VA_ARGS__)

#ifndef DOXYGEN_SHOULD_SKIP_THIS
    template< typename T >
    void printArguments(Console::Colors color, const std::string& arg, T in, size_t line) {
        Console::cout << Console::Color(color);
        Console::cout << Console::Color(Console::Colors::NORMAL, color) << "# ";
        Console::cout << Console::Color(Console::Colors::BOLD, color) << arg;
        Console::cout << Console::Color(Console::Colors::NORMAL, color) << ": ";
        Console::cout << Console::Color(Console::Colors::BOLD, color) << in;
        Console::cout << Console::Color(Console::Colors::NORMAL, color) << " on line ";
        Console::cout << Console::Color(Console::Colors::BOLD, color) << line << "\n";
        Console::cout << Console::Color(Console::Colors::NORMAL, color) << "\t";
    }
#endif   // DOXYGEN_SHOULD_SKIP_THIS

#ifndef DOXYGEN_SHOULD_SKIP_THIS
    void errors_log();
    template< class T, class... Args >
    void errors_log(T in, Args... args) {
        Console::cout << in;
        errors_log(args...);
    }
#endif   // DOXYGEN_SHOULD_SKIP_THIS
    /*!
     * \brief	Print the given text like an error
     *		\param[in]		line		The line number where the function is call
     *(use line_number) \param[in]		in			The type of the error
     *\param[in] args		The differents things to print
     *
     *		\return			void
     */
    template< class T, class... Args >
    void error_log(size_t line, T in, Args... args) {
        printArguments(Console::Colors::RED_F, " ERR", in, line);
        errors_log(args...);
    }

#ifndef DOXYGEN_SHOULD_SKIP_THIS
    void warnings_log();
    template< class T, class... Args >
    void warnings_log(T in, Args... args) {
        Console::cout << in;
        warnings_log(args...);
    }
#endif   // DOXYGEN_SHOULD_SKIP_THIS
    /*!
     * \brief	Print the given text like a warning
     *		\param[in]		line		The line number where the function is call
     *(use line_number) \param[in]		in			The type of the warning
     *\param[in] args		The differents things to print
     *
     *		\return			void
     */
    template< class T, class... Args >
    void warning_log(size_t line, T in, Args... args) {
        printArguments(Console::Colors::LIGHT_YELLOW_F, "WARN", in, line);
        warnings_log(args...);
    }

#ifndef DOXYGEN_SHOULD_SKIP_THIS
    void infos_log();
    template< class T, class... Args >
    void infos_log(T in, Args... args) {
        Console::cout << in;
        infos_log(args...);
    }
#endif   // DOXYGEN_SHOULD_SKIP_THIS
    /*!
     * \brief	Print the given text like an information
     *		\param[in]		line		The line number where the function is call
     *(use line_number) \param[in]		in			The type of the info
     *\param[in] args		The differents things to print
     *
     *		\return			void
     */
    template< class T, class... Args >
    void info_log(size_t line, T in, Args... args) {
        printArguments(Console::Colors::CYAN_F, "INFO", in, line);
        infos_log(args...);
    }
}   // namespace mcd

#endif   // HEADER_CPP_ERRORS
