#include "C++/Chromosome.hpp"

namespace mcd
{
    namespace natural
    {
        Chromosome::Chromosome(Genes gs1) : _genes1(gs1), _genes2() {
            for (auto& g : _genes1) { _genes2.push_back(g.copy()); }
        }

        Chromosome::Chromosome(Genes gs1, Genes gs2) : _genes1(gs1), _genes2(gs2) {}

        Chromosome::~Chromosome() {}

        Chromosome Chromosome::operator+=(const Chromosome& c1) {
            Genes gL, gR;

            if (rng(0, 1)) {
                gL = _genes1;
            } else {
                gL = _genes2;
            }

            if (rng(0, 1)) {
                gR = c1._genes1;
            } else {
                gR = c1._genes2;
            }

            size_t trues = 0;
            for (auto& g1 : gL) {
                for (auto& g2 : gR) {
                    if (g1 == g2) { trues++; }
                }
            }

            if (gL.size() == gR.size() && trues == gL.size()) {
                transfer(gL, _genes1);
                transfer(gR, _genes2);
            }

            return *this;
        }

        void Chromosome::Values(std::string str, double val1, double val2) {
            for (auto& g : _genes1) {
                if (g.Name() == str) {
                    g.Value(val1);
                    break;
                }
            }

            for (auto& g : _genes2) {
                if (g.Name() == str) {
                    g.Value(val2);
                    break;
                }
            }
        }

        double Chromosome::Value(std::string str, size_t index) const {
            Genes genes;

            if (index == 0) {
                genes = _genes1;
            } else if (index == 1) {
                genes = _genes2;
            }

            for (auto& g : genes) {
                if (g.Name() == str) { return g.Value(); }
            }

            return 0;
        }

        Chromosome Chromosome::copy() const {
            Genes gs1, gs2;

            transfer(_genes1, gs1);
            transfer(_genes2, gs2);

            return Chromosome(gs1, gs2);
        }

    }   // namespace natural

}   // namespace mcd
