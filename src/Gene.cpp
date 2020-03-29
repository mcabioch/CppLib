#include "C++/Gene.hpp"

namespace mcd
{
    namespace natural
    {
        int Gene::MutationRate  = 21;
        int Gene::FloatAccuracy = 4;

        Gene::Gene(std::string           name,
                   GeneType              type,
                   double                value,
                   double                mini,
                   double                maxi,
                   std::vector< double > list) :
            _name(name),
            _type(type), _value(value), _minimum(mini), _maximum(maxi), _list(list) {}
        Gene::~Gene() {}

        Gene::Gene(const Gene& g) :
            _name(g._name), _type(g._type), _value(g._value), _minimum(g._minimum),
            _maximum(g._maximum), _list(g._list) {}

        double      Gene::Value() const { return _value; }
        std::string Gene::Name() const { return _name; }

        Gene Gene::copy() const {
            Gene   g(_name, _type, 0, _minimum, _maximum, _list);
            double value = _value;

            if (MutationRate > 0) {
                switch (_type) {
                    case GeneType::BOOL:
                        if (!rng(0, MutationRate - 1)) {
                            if (_value == 0) {
                                value = 1;
                            } else {
                                value = 0;
                            }
                        }
                        break;
                    case GeneType::INT:
                        if (!rng(0, MutationRate - 1)) {
                            double dix = rng(0, 1);

                            dix = pow(10, dix);
                            dix *= rng(1, 9);

                            if (rng(0, 1)) {
                                value = _value + dix;
                            } else {
                                value = _value - dix;
                            }
                        }
                        break;
                    case GeneType::RANGED_FLOAT:
                    case GeneType::FLOAT:
                        if (!rng(0, MutationRate - 1)) {
                            double dix = rng(0, 2);

                            dix = pow(10, dix);
                            dix *= rng(1, 9);
                            dix /= static_cast< double >(pow(10, rng(2, FloatAccuracy)));

                            if (rng(0, 1)) {
                                value = _value + dix;
                            } else {
                                value = _value - dix;
                            }

                            if (_type == GeneType::RANGED_FLOAT) {
                                while (value < _minimum) { value += _maximum; }
                                while (value > _maximum) { value -= _minimum; }
                            }
                        }
                        break;
                    case GeneType::RANGED_INT:
                        if (!rng(0, MutationRate - 1)) {
                            double quantity =
                                rng(static_cast< int >(_minimum), static_cast< int >(_maximum));

                            if (rng(0, 1)) {
                                value = _value + quantity;
                            } else {
                                value = _value - quantity;
                            }

                            while (value < _minimum) { value += _maximum; }
                            while (value > _maximum) { value -= _minimum; }
                        }
                        break;
                    case GeneType::LISTED:
                        if (!rng(0, MutationRate - 1)) {
                            size_t index =
                                static_cast< size_t >(rng(0, static_cast< int >(_list.size()) - 1));
                            value = _list.at(index);
                        }
                        break;
                    default: break;
                }
            }

            g.Value(value);

            return g;
        }

        void Gene::Value(const double& value) { _value = value; }

        void transfer(const Genes& in, Genes& out) {
            out.clear();
            for (auto& g : in) { out.push_back(g.copy()); }
        }

    }   // namespace natural

}   // namespace mcd