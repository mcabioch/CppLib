#include "C++/PathfindingException.hpp"

namespace mcd
{
    PathfindingException::PathfindingException(PathfindingErrorCode error,
                                               const std::string&   explaination) throw() :
        exception(explaination),
        _error(error) {}

    PathfindingException::~PathfindingException() throw() {}

    PathfindingException::PathfindingException(const PathfindingException& other) throw() :
        exception(other._msg), _error(other._error) {}

    void PathfindingException::Arrived() {
        PathfindingException except(PathfindingErrorCode::ARRIVED, "");
        throw except;
    }

    void PathfindingException::Lost() {
        PathfindingException except(PathfindingErrorCode::LOST, "");
        throw except;
    }
}   // namespace mcd
