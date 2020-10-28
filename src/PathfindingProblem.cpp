#include "C++/PathfindingProblem.hpp"

namespace mcd
{
    PathfindingProblem::PathfindingProblem(std::vector< PathfindingNode >                     ns,
                                           std::map< size_t, std::map< size_t, double64_t > > ds) :
        nodes(ns),
        nbNodes(nodes.size()), distances(ds), weights(), computed() {
        for (auto& distance : distances) {
            std::map< size_t, double64_t > weight;
            std::map< size_t, bool >       compute;

            for (auto& dis : distance.second) {
                weight[dis.first]  = 0;
                compute[dis.first] = false;
            }

            weights[distance.first]  = weight;
            computed[distance.first] = compute;
        }
    }

    PathfindingProblem::~PathfindingProblem() {}
}   // namespace mcd
