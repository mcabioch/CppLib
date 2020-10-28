#include "C++/Big.hpp"

namespace mcd
{
    Big operator+(const Big& a, const Big& b) noexcept {
        Big c(a);
        c += b;
        return c;
    }

    Big operator-(const Big& a, const Big& b) noexcept {
        Big c(a);
        c -= b;
        return c;
    }

    Big operator*(const Big& a, const Big& b) noexcept {
        Big c(a);
        c *= b;
        return c;
    }

    Big operator/(const Big& a, const Big& b) {
        Big c(a);
        c /= b;
        return c;
    }

    Big operator%(const Big& a, const Big& b) {
        Big c(a);
        c %= b;
        return c;
    }

    Big& Big::operator+=(const Big& other) noexcept {
        if (other == Big(0)) {
        } else if (*this == Big(0)) {
            *this = other;
        } else if (*this < Big(0)) {
            *this = this->invert() - other;
            *this = this->invert();
        } else if (other < Big(0)) {
            *this = *this - other.invert();
        } else {
            std::string val  = _val;
            std::string tmp  = other._val;
            std::string temp = "";

            Big::equalize(val, tmp);
            Big::equalize(tmp, val);

            size_t step      = 2;
            int    restraint = 0;
            int    limit     = 100;

            for (size_t i{val.size()}; i > 0; i -= step) {
                int a = fromBigVal(val.substr(i - step, step));
                int b = fromBigVal(tmp.substr(i - step, step));
                int c = a + restraint + b;

                restraint = c / limit;
                c         = c % limit;

                std::string sC = toBigVal(c);
                sC             = ((sC.size() == 1) ? "0" : "") + sC;

                temp = sC + temp;
            }
            temp = toBigVal(restraint) + temp;
            this->set(temp);
        }

        return *this;
    }

    Big& Big::operator-=(const Big& other) noexcept {
        if (other == Big(0)) {
        } else if (*this == Big(0)) {
            *this = other;
            *this = this->invert();
        } else if (*this < Big(0)) {
            *this = this->invert() + other;
            *this = this->invert();
        } else if (other < Big(0)) {
            *this = *this + other.invert();
        } else if (other > *this) {
            *this = other - *this;
            *this = this->invert();
        } else {
            std::string val  = _val;
            std::string tmp  = other._val;
            std::string temp = "";

            Big::equalize(val, tmp);
            Big::equalize(tmp, val);

            size_t step      = 1;
            int    restraint = 0;
            int    limit     = 10;

            for (size_t i{val.size()}; i > 0; i -= step) {
                int a = fromBigVal(val.substr(i - step, step));
                int b = fromBigVal(tmp.substr(i - step, step));
                int c = a - b - restraint;

                restraint = 0;
                while (c < 0) {
                    c += limit;
                    restraint++;
                }

                std::string sC = toBigVal(c);

                temp = sC + temp;
            }
            this->set(temp);
        }

        return *this;
    }

    Big& Big::operator*=(const Big& other) noexcept {
        if (other == Big(0) || *this == Big(0)) {
            *this = Big(0);
        } else if (other == Big(1)) {
        } else if (*this == Big(1)) {
            *this = other;
        } else if (other == Big(-1)) {
            *this = this->invert();
        } else if (*this == Big(-1)) {
            *this = other;
            *this = this->invert();
        } else {
            std::string val  = _val;
            std::string tmp  = other._val;
            std::string temp = "";

            std::string zerosA = "";
            std::string zerosB = "";

            for (size_t i{val.size()}; i > 0 && val[i - 1] == '0'; --i) { zerosA += "0"; }
            for (size_t i{tmp.size()}; i > 0 && tmp[i - 1] == '0'; --i) { zerosB += "0"; }

            val = val.substr(0, val.size() - zerosA.size());
            tmp = tmp.substr(0, tmp.size() - zerosB.size());

            Big::equalize(val, tmp);
            Big::equalize(tmp, val);

            size_t step = 2;

            std::string multZeros = "";
            std::string lineMultZeros;

            Big bigTemp(0);

            for (size_t i{tmp.size()}; i > 0; i -= step) {
                int b         = fromBigVal(tmp.substr(i - step, step));
                lineMultZeros = "";

                for (size_t j{val.size()}; j > 0; j -= step) {
                    int a = fromBigVal(val.substr(j - step, step));

                    bigTemp += Big(toBigVal(a * b) + lineMultZeros + multZeros);

                    lineMultZeros += "00";
                }

                multZeros += "00";
            }

            temp = bigTemp._val + zerosA + zerosB;

            this->set(temp);
            if (other < Big(0)) { *this = this->invert(); }
        }

        return *this;
    }

    Big& Big::operator/=(const Big& other) {
        if (*this == Big(0)) {
        } else if (other == Big(0)) {
            throw std::overflow_error("Divide by zero exception");
        } else if (other == Big(1)) {
        } else if (other == Big(-1)) {
            *this = this->invert();
        } else {
            std::string val;
            if (*this < Big(0)) {
                val = std::string(-*this);
            } else {
                val = std::string(*this);
            }
            Big q;

            if (other < Big(0)) {
                this->division(val, -other, q);
                *this = this->invert();
            } else {
                this->division(val, other, q);
            }
            this->set(q._val);
        }

        return *this;
    }

    Big& Big::operator%=(const Big& other) {
        if (*this == Big(0)) {
        } else if (other == Big(0)) {
            throw std::overflow_error("Divide by zero exception");
        } else if (other == Big(1) || other == Big(-1)) {
            *this = Big(0);
        } else {
            std::string val;
            if (*this < Big(0)) {
                val = std::string(-*this);
            } else {
                val = std::string(*this);
            }
            Big q;

            if (other < Big(0)) {
                this->set(this->division(val, -other, q)._val);
            } else {
                this->set(this->division(val, other, q)._val);
            }
        }

        return *this;
    }

    Big pow(const Big& a, const Big& exp) {
        Big out(1);

        for (Big i(0); i < exp; ++i) { out *= a; }

        return out;
    }

    Big nroot(const Big& a, size_t exp) {
        Big out;

        Big::nroot(a._val, exp, out);

        return out;
    }

    size_t Big::notNull(std::vector< std::vector< Big > >& array, size_t column) {
        for (size_t i{array.size()}; i > 0; --i) {
            auto& line = array[i - 1];
            if (line[column] != Big(0)) { return i - 1; }
        }

        return 0;
    }

    bool Big::addZeros(std::vector< std::vector< Big > >& array,
                       const std::string&                 val,
                       std::vector< std::string >&        slices) {
        size_t arrayIndex = array.size();
        auto   inside_val = val;

        array.push_back(array[arrayIndex - 1]);

        if (slices.size() == 0) { return false; }

        inside_val += std::string(slices[slices.size() - 1]);

        std::string zeros = "";

        for (size_t i{0}; i < array[arrayIndex].size() - 1; ++i) {
            auto& cell = array[arrayIndex][i];
            zeros += "0";
            cell._val = std::string(array[Big::notNull(array, i)][i]) + zeros;
        }
        array[arrayIndex][array[arrayIndex].size() - 1] = Big(inside_val);

        return true;
    }

    void Big::nthroot(const std::string&                 val,
                      size_t                             exp,
                      Big&                               r,
                      std::vector< std::vector< Big > >& array,
                      std::vector< std::string >&        slices) {
        if (slices.size() == 0) { return; }

        std::vector< Big > lineArray;
        auto               inside_val = val;

        inside_val += std::string(slices[slices.size() - 1]);
        slices.erase(slices.end());
        slices.shrink_to_fit();

        size_t arrayIndex = array.size() - 1;

        if (array[arrayIndex][array[arrayIndex].size() - 2] > Big(inside_val)) {
            Big::addZeros(array, inside_val, slices);
            Big::nthroot(inside_val, exp, r, array, slices);
        } else {
            bool loop = true;
            bool next = false;

            while (loop && !next) {
                for (size_t index{0}, i{0}; i < exp; ++i, ++index) {
                    lineArray.push_back(array[Big::notNull(array, 0)][0] + Big(1));

                    for (size_t j{1}; j + i < exp - 1; ++j) {
                        lineArray.push_back(array[Big::notNull(array, j)][j] + lineArray[j - 1]);
                    }

                    if (i == 0) {
                        lineArray.push_back(array[Big::notNull(array, exp - 1)][exp - 1] -
                                            lineArray[exp - 2]);

                        if (lineArray[exp - 1] == Big(0)) { loop = false; }
                        if (lineArray[exp - 1] < lineArray[exp - 2]) { next = true; }
                    } else if (i < exp - 1) {
                        size_t j = lineArray.size();
                        lineArray.push_back(array[Big::notNull(array, j)][j] + lineArray[j - 1]);
                    }

                    for (size_t j{lineArray.size()}; j < exp; ++j) { lineArray.push_back(Big(0)); }

                    array.push_back(lineArray);
                    lineArray.clear();
                }
            }

            if (next) {
                Big tmp = array[Big::notNull(array, array[arrayIndex].size() - 1)]
                               [array[arrayIndex].size() - 2];
                inside_val = static_cast< std::string >(
                    array[Big::notNull(array, array[arrayIndex].size() - 1)]
                         [array[arrayIndex].size() - 1]);

                if (tmp <= Big(inside_val)) { inside_val = ""; }

                Big::addZeros(array, inside_val, slices);
                Big::nthroot(inside_val, exp, r, array, slices);
            } else {
                r = (array[array.size() - 1][0] + Big(exp) - Big(1)) / Big(exp);
            }
        }
    }

    void Big::nroot(const std::string& val, size_t exp, Big& r) {
        std::vector< std::vector< Big > > array;
        std::vector< std::string >        slices;
        auto                              inside_val = val;

        for (size_t i{inside_val.size()}; i > 0; --i) {
            size_t pos = 0;
            size_t len = 0;

            if (inside_val.size() >= exp) {
                pos = i;
                len = exp;

                i -= (exp - 1);
            } else {
                pos = i;
                len = inside_val.size();
            }

            if (len > 0) {
                slices.push_back(inside_val.substr(pos - len, len));
                inside_val = inside_val.substr(0, pos - len);
            }
        }

        std::vector< Big > lineArray;
        inside_val += std::string(slices[slices.size() - 1]);

        for (size_t i{0}; i < exp - 1; ++i) { lineArray.push_back(Big(0)); }
        lineArray.push_back(Big(inside_val));

        array.push_back(lineArray);
        lineArray.clear();

        Big::nthroot("", exp, r, array, slices);

        r = (array[array.size() - 1][0] + Big(exp) - Big(1)) / Big(exp);
    }

    Big pgcd(const Big& a, const Big& b) {
        Big A = (a < Big(0)) ? a.invert() : a;
        Big B = (b < Big(0)) ? b.invert() : b;

        Big mini = (A < B) ? A : B;
        Big maxi = (A > B) ? A : B;

        Big r = maxi % mini;

        if (!r) { return mini; }

        return pgcd(mini, r);
    }

    bool Big::prime() const {
        Big root = sqrt(*this) + Big(1);

        for (Big i{2}; i < root + 1; ++i) {
            if (i != *this && isDivisor(*this, i)) { return false; }
        }

        return true;
    }

    Big mod(const Big& b, const Big& n) {
        Big n0 = n;
        Big b0 = b;

        Big t0(0);
        Big t(1);

        Big q = n0 / b0;
        Big r = n0 - q * b0;

        while (r > 0) {
            Big tmp = t0 - q * t;

            if (tmp >= 0) {
                tmp = tmp % n;
            } else {
                tmp = n - ((-tmp) % n);
            }

            t0 = t;
            t  = tmp;
            n0 = b0;
            b0 = r;

            q = n0 / b0;
            r = n0 - q * b0;
        }

        if (b0 != 1) {
            throw std::overflow_error("Error during modulo inversion");
            return b;
        } else {
            return t;
        }
    }
}   // namespace mcd
