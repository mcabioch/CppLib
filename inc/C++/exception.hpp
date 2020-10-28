/*!
 *
 *	\file		exception.hpp
 *	\author		Mathias CABIOCH-DELALANDE
 *	\created	Saturday October, 24 2020 13:36:33
 *	\modified	Saturday October, 24 2020
 *
 */
#ifndef HEADER_CPP_EXCEPTION
#define HEADER_CPP_EXCEPTION

#include <exception>
#include <stdexcept>

namespace mcd
{
    /*!
     * \class	exception
     * \brief	A class to call custom exceptions
     */
    class exception : std::exception {
        /* Members of exception */
        public:
        /* Constructors & Destructor of exception */
        /*! \brief	The constructor of the class */
        exception() noexcept;

        /*!
         * \brief	The constructor of the class
         *	\param[in]		msg		The message to see when what() is call
         */
        exception(const std::string& msg) noexcept;

        virtual ~exception() noexcept;

        /*!
         * \brief	The copy constructor of the class
         *	\param[in]		other		The class' instance for copying
         */
        exception(const exception& other) noexcept;

        /*!
         * \brief	The move constructor of the class
         *	\param[in]		other		The class' instance for moving
         */
        exception(const exception&& other) noexcept;

        /* Operators of exception */
        /*!
         * \brief	The copy operator of the class
         *	\param[in]		other		The class' instance for copying
         */
        exception& operator=(const exception& other) noexcept;

        /*!
         * \brief	The move operator of the class
         *	\param[in]		other		The class' instance for moving
         */
        exception& operator=(const exception&& other) noexcept;

        /* Others members of exception */
        virtual const char* what() const noexcept;

        protected:
        private:
        /* Atttributes of exception */
        public:
        protected:
        /* Local */
        std::string _msg;

        private:
    };
}   // namespace mcd

#endif   // HEADER_CPP_EXCEPTION
