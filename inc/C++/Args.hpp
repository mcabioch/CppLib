/*!
 *
 *  \file       Args.hpp
 *  \author     Mathias CABIOCH-DELALANDE
 *  \created    November, 13 2019
 *  \modified   November, 18 2020
 *
 */
#ifndef HEADER_MCD_ARGS
#define HEADER_MCD_ARGS

#include "Threadable.hpp"

namespace mcd
{
    /*!
     * \class		Arguments
     * \brief		A class to manage the arguments
     * \details		This class is usefull to simplify and keep the given arguments
     */
    class Arguments {
        public:
        /* Constructor et Destroyer */
        /*! \brief	Constructor of the class */
        Arguments() : args(), indexs(), error(), _mutex() {}
        ~Arguments() {}

        /* Setters */
        /*!
         * \brief	Add the arguments of the program to the object
         * \details	"prog" is used for args key and "prog_name" for the name of the program
         *		\param[in]		argc		The number of arguments
         *		\param[in]		argv		An array of char*
         *
         *		\return			\b true or \b false
         */
        bool addProg(int argc, char** argv);
        /*!
         * \brief	Add a value to a part of the array
         *		\param[in]		category	The category in which to add the
         *value \param[in]		value		The value to add
         *
         *		\return			\b true or \b false
         */
        template< typename T >
        bool add(const std::string& category, T value) {
            _mutex.lock();
            if (contains(indexs, category)) {
                auto& cat = args[category];

                cat.push_back(tos(value));
            } else {
                indexs.push_back(category);
                std::vector< std::string > cat;

                cat.push_back(tos(value));

                args[category] = cat;
            }
            _mutex.unlock();

            return true;
        }

        /* Getters */
        /*!
         * \brief	Get the arguments in an index
         *		\param[in]		index		The index of the arguments
         *
         *		\return			Return a vector that contains the arguments
         *		\throws			Throw an std::out_of_range exception if index does
         *not exist
         */
        std::vector< std::string > operator[](const std::string& index) const;
        /*!
         * \brief	Get the arguments in an index
         *		\param[in]		index		The index of the arguments
         *
         *		\return			Return a vector that contains the arguments
         *		\throws			Throw an std::out_of_range exception if index does
         *not exist
         */
        std::vector< std::string >& operator[](const std::string& index);

        /* Others */
        /*!
         * \brief	Print all the arguments in the \a index
         *		\param[in]		index		The index of the arguments
         *
         *		\return			void
         */
        void print(const std::string& index = "") const;
        /*!
         * \brief	Test if an index exists in the array
         *		\param[in]		index		The index to look for
         *
         *		\return			\b true or \b false
         */
        bool has(const std::string& index) const;

        private:
        std::map< std::string, std::vector< std::string > > args;
        std::vector< std::string >                          indexs;
        const std::vector< std::string >                    error;
        mutable mutex                                       _mutex;
    };

    /*! \brief	A global arguments variable to save and keep some arguments */
    extern Arguments arguments;
}   // namespace mcd

#endif   // HEADER_MCD_ARGS
