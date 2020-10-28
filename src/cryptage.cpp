#include "C++/cryptage.hpp"

namespace mcd
{
    /* Defined differents crypt variables */
    Cesar   cesar;
    SHA2    sha2;
    MyCrypt mycrypt;
    /**************************************/

    Crypto::Crypto() {}

    std::string Cesar::crypt(const std::string& message, int decal) {
        std::string out{""};
        int         retour{26};

        decal = decal % retour;

        for (size_t i{0}; i < message.size(); ++i) {
            char c   = message[i];
            int  car = static_cast< int >(c) + decal;

            out += (c > 64 && c < 91)
                       ? (car >= 91) ? static_cast< char >(car - retour) : static_cast< char >(car)
                       : (c > 96 && c < 123) ? (car >= 123) ? static_cast< char >(car - retour)
                                                            : static_cast< char >(car)
                                             : c;
        }

        return out;
    }

    std::string Cesar::decrypt(const std::string& message, int decal) {
        std::string out{""};
        int         retour{26};

        decal = decal % retour;

        for (size_t i{0}; i < message.size(); ++i) {
            char c   = message[i];
            int  car = static_cast< int >(c) - decal;

            out += (c > 64 && c < 91)
                       ? (car <= 64) ? static_cast< char >(car + retour) : static_cast< char >(car)
                       : (c > 96 && c < 123) ? (car <= 96) ? static_cast< char >(car + retour)
                                                           : static_cast< char >(car)
                                             : c;
        }

        return out;
    }

    std::string Cesar::decrypt(const std::string& message) {
        std::string out{""};

        out           = message;
        auto lowerStr = lowercase(out, out.begin(), out.end());
        lowerStr      = replace(lowerStr, " ", "");

        size_t maxi = 0;
        char   c    = 'a';

        for (auto car : lowerStr) {
            auto temp = maxi;
            maxi      = max(maxi, count(lowerStr, car));
            if (maxi != temp) { c = car; }
        }

        return this->decrypt(message, c - 'e');
    }

    const uint32_t SHA2::sha2_keys[64] = {
        0x428a2f98, 0x71374491, 0xb5c0fbcf, 0xe9b5dba5, 0x3956c25b, 0x59f111f1, 0x923f82a4,
        0xab1c5ed5, 0xd807aa98, 0x12835b01, 0x243185be, 0x550c7dc3, 0x72be5d74, 0x80deb1fe,
        0x9bdc06a7, 0xc19bf174, 0xe49b69c1, 0xefbe4786, 0x0fc19dc6, 0x240ca1cc, 0x2de92c6f,
        0x4a7484aa, 0x5cb0a9dc, 0x76f988da, 0x983e5152, 0xa831c66d, 0xb00327c8, 0xbf597fc7,
        0xc6e00bf3, 0xd5a79147, 0x06ca6351, 0x14292967, 0x27b70a85, 0x2e1b2138, 0x4d2c6dfc,
        0x53380d13, 0x650a7354, 0x766a0abb, 0x81c2c92e, 0x92722c85, 0xa2bfe8a1, 0xa81a664b,
        0xc24b8b70, 0xc76c51a3, 0xd192e819, 0xd6990624, 0xf40e3585, 0x106aa070, 0x19a4c116,
        0x1e376c08, 0x2748774c, 0x34b0bcb5, 0x391c0cb3, 0x4ed8aa4a, 0x5b9cca4f, 0x682e6ff3,
        0x748f82ee, 0x78a5636f, 0x84c87814, 0x8cc70208, 0x90befffa, 0xa4506ceb, 0xbef9a3f7,
        0xc67178f2};

    SHA2::SHA2() : totalLength(0), length(0) {
        h[0] = 0x6a09e667;
        h[1] = 0xbb67ae85;
        h[2] = 0x3c6ef372;
        h[3] = 0xa54ff53a;
        h[4] = 0x510e527f;
        h[5] = 0x9b05688c;
        h[6] = 0x1f83d9ab;
        h[7] = 0x5be0cd19;
    }

    std::string SHA2::crypt(const std::string& message) {
        uint8_t digest[SHA2::DIGEST_SIZE] = {0};

        this->update(message);
        this->final(digest);

        char buf[2 * SHA2::DIGEST_SIZE + 1] = {0};

        for (size_t i{0}; i < SHA2::DIGEST_SIZE; ++i) { sprintf(buf + i * 2, "%02x", digest[i]); }

        return std::string(buf);
    }

    void SHA2::update(const std::string& message) {
        size_t len = message.size();

        auto           array_message = message.c_str();
        const uint8_t* shifted_message;

        size_t tmp_len = SHA2::BLOCK_SIZE - this->length;
        size_t rem_len = (len < tmp_len) ? len : tmp_len;

        memcpy(&this->block[this->length], array_message, rem_len);

        if (this->length + len < SHA2::BLOCK_SIZE) {
            this->length += len;
            return;
        }

        size_t new_len  = len - rem_len;
        size_t block_nb = new_len / SHA2::BLOCK_SIZE;

        shifted_message = reinterpret_cast< const uint8_t* >(array_message) + rem_len;

        this->transform(this->block, 1);
        this->transform(shifted_message, block_nb);

        rem_len = new_len % SHA2::BLOCK_SIZE;
        memcpy(this->block, &shifted_message[block_nb << 6], rem_len);

        this->length = rem_len;
        this->totalLength += (block_nb + 1) << 6;
    }

    void SHA2::final(uint8_t* digest) {
        size_t block_nb = (1 + ((SHA2::BLOCK_SIZE - 9) < (this->length % SHA2::BLOCK_SIZE)));
        size_t len_b    = (this->totalLength + this->length) << 3;
        size_t pm_len   = block_nb << 6;

        memset(this->block + this->length, 0, pm_len - this->length);
        this->block[this->length] = 0x80;

        SHA2_UNPACK32(len_b, this->block + pm_len - 4);

        this->transform(this->block, block_nb);

        for (int i{0}; i < 8; ++i) { SHA2_UNPACK32(this->h[i], &digest[i << 2]); }
    }

    void SHA2::transform(const uint8_t* message, size_t block_nb) {
        uint32_t w[64];
        uint32_t wv[8];
        uint32_t t1, t2;

        const uint8_t* sub_block;

        for (size_t i{0}; i < block_nb; ++i) {
            sub_block = message + (i << 6);

            for (int j{0}; j < 16; ++j) { SHA2_PACK32(&sub_block[j << 2], &w[j]); }

            for (int j{16}; j < 64; ++j) {
                w[j] = SHA256_F4(w[j - 2]) + w[j - 7] + SHA256_F3(w[j - 15]) + w[j - 16];
            }

            for (int j{0}; j < 8; ++j) { wv[j] = this->h[j]; }

            for (int j{0}; j < 64; ++j) {
                t1 = wv[7] + SHA256_F2(wv[4]) + SHA2_CH(wv[4], wv[5], wv[6]) + SHA2::sha2_keys[j] +
                     w[j];
                t2 = SHA256_F1(wv[0]) + SHA2_MAJ(wv[0], wv[1], wv[2]);

                wv[7] = wv[6];
                wv[6] = wv[5];
                wv[5] = wv[4];
                wv[4] = wv[3] + t1;
                wv[3] = wv[2];
                wv[2] = wv[1];
                wv[1] = wv[0];
                wv[0] = t1 + t2;
            }

            for (int j{0}; j < 8; ++j) { this->h[j] += wv[j]; }
        }
    }

    std::string MyCrypt::crypt(const std::string& str, const std::string& key) {
        _str_key = implode(explode(key, " "), "");

        return crypt(str);
    }

    std::string MyCrypt::decrypt(const std::string& str, const std::string& key) {
        _str_key = implode(explode(key, " "), "");

        return decrypt(str);
    }

    std::string MyCrypt::crypt(const std::string& str) {
        std::string out = "";

        std::string str_key = "";
        int         int_key = 0;

        for (size_t i{0}; i < _str_key.size(); i += 2) {
            str_key += _str_key[i];
            int_key += _str_key[i];
        }

        int_key %= 26;

        std::vector< char > str_vect, str_mixed;

        for (auto& s : str) { str_vect.push_back(s); }

        for (size_t i{0}; i <= str_vect.size() - i - 1; ++i) {
            auto vect_size = str_vect.size();
            str_mixed.push_back(str_vect[vect_size - i - 1]);
            if (vect_size - i - 1 != i) { str_mixed.push_back(str_vect[i]); }
        }

        for (auto& s : str_mixed) {
            int i = s;
            if (i >= 'a' && i <= 'z') {
                i += int_key;
                if (i > 'z') { i -= 26; }
            } else if (i >= 'A' && i <= 'Z') {
                i += int_key;
                if (i > 'Z') { i -= 26; }
            }
            s = static_cast< char >(i);
        }

        for (size_t i{0}; i < str_mixed.size();) {
            for (size_t j{0}; j < str_key.size() && i < str_mixed.size(); ++j) {
                int val = str_mixed[i];
                int k   = str_key[j];

                if (k >= 'a' && k <= 'z') {
                    k -= 'a' + 1;
                } else if (k >= 'A' && k <= 'Z') {
                    k -= 'A' + 1;
                }

                if (str_mixed[i] >= 'a' && str_mixed[i] <= 'z') {
                    val += k;

                    if (val > 'z') { val -= 26; }
                } else if (str_mixed[i] >= 'A' && str_mixed[i] <= 'Z') {
                    val += k;

                    if (val > 'Z') { val -= 26; }
                } else {
                    j--;
                }

                str_mixed[i] = static_cast< char >(val);

                i++;
            }
        }

        out = implode(str_mixed, "");

        return out;
    }

    std::string MyCrypt::decrypt(const std::string& str) {
        std::string out = "";

        std::string str_key = "";
        int         int_key = 0;

        for (size_t i{0}; i < _str_key.size(); i += 2) {
            str_key += _str_key[i];
            int_key += _str_key[i];
        }

        int_key %= 26;

        std::vector< char > str_vect, str_mixed;

        for (auto& s : str) {
            str_vect.push_back(s);
            str_mixed.push_back(' ');
        }

        for (size_t i{0}; i < str_vect.size();) {
            for (size_t j{0}; j < str_key.size() && i < str_vect.size(); ++j) {
                int val = str_vect[i];
                int k   = str_key[j];

                if (k >= 'a' && k <= 'z') {
                    k -= 'a' + 1;
                } else if (k >= 'A' && k <= 'Z') {
                    k -= 'A' + 1;
                }

                if (str_vect[i] >= 'a' && str_vect[i] <= 'z') {
                    val -= k;

                    if (val < 'a') { val += 26; }
                } else if (str_vect[i] >= 'A' && str_vect[i] <= 'Z') {
                    val -= k;

                    if (val < 'A') { val += 26; }
                } else {
                    j--;
                }

                str_vect[i] = static_cast< char >(val);

                i++;
            }
        }

        for (auto& s : str_vect) {
            int i = s;
            if (i >= 'a' && i <= 'z') {
                i -= int_key;
                if (i < 'a') { i += 26; }
            } else if (i >= 'A' && i <= 'Z') {
                i -= int_key;
                if (i < 'A') { i += 26; }
            }
            s = static_cast< char >(i);
        }

        bool   state  = false;
        size_t index1 = 0, index2 = 0;
        for (size_t i{0}; i < str_vect.size(); ++i) {
            auto vect_size = str_vect.size();

            if (!state) {
                str_mixed[vect_size - 1 - i + index2] = str_vect[i];
                index1++;
                state = true;
            } else {
                str_mixed[i - index1] = str_vect[i];
                index2++;
                state = false;
            }
        }

        out = implode(str_mixed, "");

        return out;
    }

    RSA::RSA() : publicK(""), privateK("") {
#if 0
			/* Déclaration des variables */
				Big p;
				Big q;

				Big n;
				Big phi;

				Big e;
				Big d;
			/*****************************/

			/* Initailisation des variables */
				p = 503;
				q = 563;

				n = p*q;
				phi = (p-1)*(q-1);

				for(e = MAX(p, q)+1; pgcd(phi, e) != 1 && e < phi; e++){
					std::cout << "e = " << e << std::endl;
				}
				//d = eucl(e, phi);

				std::cout << "p = " << p << "\n"
						  << "q = " << q << "\n"
						  << "n = " << n << "\n"
						  << "phi = " << phi << "\n"
						  << "e = " << e << "\n"
						  << "d = " << d << "\n"
						  << std::endl;
			/********************************/

			/* Initialisation des clés */
				publicK = e.getVal()+"-"+n.getVal();
				privateK = d.getVal()+"-"+n.getVal();
			/***************************/
#endif
    }

    std::string RSA::crypt(const std::string& message) {
        std::string out{""};

#if 0
			std::vector<std::string> caracts;

			auto params = explode(publicK, "-");
			std::string e = params[0];
			std::string n = params[1];

			for(auto c : message){
				std::string tmp{""};
				if(c < 10){
					tmp += "0";
				}
				if(c < 100){
					tmp += "0";
				}
				tmp += tos(static_cast<int>(c));
				caracts.push_back(tmp);
			}

			for(auto& c : caracts){
				Big E(e);
				Big N(n);
				Big C(tos(c));

				std::cout << C << "^" << E << " = " << power(C, E) << std::endl;
				std::cout << power(C, E) << "%" << N << " = " << (power(C, E) % N) << std::endl;
			}
			std::cout << std::endl;
#else
        out = message;
#endif

        return out;
    }

    std::string RSA::decrypt(const std::string& message) {
        std::string out{""};

        out = message;

        return out;
    }

    std::string RSA::getPublic() const { return publicK; }

    std::string RSA::getPrivate() const { return privateK; }
}   // namespace mcd
