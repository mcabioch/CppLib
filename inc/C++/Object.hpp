/*!
 *
 *  \file       Object.hpp
 *  \author     Mathias CABIOCH-DELALANDE
 *  \created    August, 17 2018
 *  \modified   November, 18 2020
 *
 */
#ifndef HEADER_MCD_ENTITIES_OBJECT
#define HEADER_MCD_ENTITIES_OBJECT

#include "Contraption.hpp"

namespace mcd::entities
{
    /*!
     * \class	Object
     * \brief	An object
     */
    class Object : public Contraption {
        public:
        /* Constructor & Destroyer */
        /*!
         * \brief	Constructor of the class
         *		\param[in]		map			The map where it is
         *		\param[in]		pt			The position in the map
         *		\param[in]		attr		The attributes of the object(width,
         *height, angle)
         */
        Object(Map* map = nullptr, Point pt = {0, 0, 0}, ContraptionAttr attr = {0, 0, 0});
        /*! \brief	Virtual destructor */
        virtual ~Object();

        /* Setters */

        /* Getters */

        /* Friends */

        /* Others */
        /*!
         * \brief	Print the infos in the instance of the class in \a stream
         *		\param[in]		stream		The output stream
         *
         *		\return			void
         */
        virtual void printInfos(std::ostream& stream) const override;

        protected:
        private:
    };
}   // namespace mcd::entities

#endif   // HEADER_MCD_ENTITIES_OBJECT
