namespace mcd {
	/*! \brief	++Big */
	inline Big operator++(Big& in, int) noexcept {
		Big tmp = in;
		in += 1;
		return tmp;
	}

	/*! \brief	Big++ */
	inline Big& operator++(Big& in) noexcept {
		in += 1;
		return in;
	}

	/*! \brief	--Big */
	inline Big operator--(Big& in, int) noexcept {
		Big tmp = in;
		in -= 1;
		return tmp;
	}

	/*! \brief	Big-- */
	inline Big& operator--(Big& in) noexcept {
		in -= 1;
		return in;
	}

	/*! \brief	+Big */
	inline Big operator+(const Big& in) noexcept {
		return in;
	}

	/*! \brief	-Big */
	inline Big operator-(const Big& in) noexcept {
		return in.invert();
	}
}
