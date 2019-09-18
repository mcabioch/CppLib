My own C++ features
===================

\created	February 2017
\date		Last modification on \htmlonly<?php echo $lastModif; ?>\endhtmlonly
\author		Mathias CABIOCH-DELALANDE
\copyright	MCD

-------------------------------------

\tableofcontents

\section		int_sec			Introduction
	This is my own C++ library using C++14.
	All of the features are in the mcd::namespace.

\section		con_sec			Content
	\subsection	con_sec_obj_subsec		Objects
		<a class="el" href="annotated.php" target="_blank">All the objects</a>
	\subsection	con_sec_var_subsec		Variables
		<a class="el" href="globals_vars.php" target="_blank">All the variables</a>
	\subsection	con_sec_def_subsec		Structures \& Defines
		<a class="el" href="globals_type.php" target="_blank">All the typedefs</a>\n
		<a class="el" href="globals_enum.php" target="_blank">All the enums</a>\n
		<a class="el" href="globals_defs.php" target="_blank">All the defines</a>
	\subsection	con_sec_fun_subsec		Functions
		<a class="el" href="globals_func.php" target="_blank">All the functions</a>

\section		imp_sec			Important features
	\subsection	imp_sec_tip_subsec		Tips and Advice
		To use an explicit fallthrough in a switch, write <em>/\* fall through \*/</em> before the next case\n\n
		To set a special attribute for a function : func() <strong>__attribute__ ((attr1[, attr2, ...]))</strong>;\n
		<span class="tab"></span>deprecated("") or <strong>__attribute_deprecated__</strong>\n
		<span class="tab"></span><a class="el" href="https://access.redhat.com/documentation/en-US/Red_Hat_Enterprise_Linux/4/html/Using_the_GNU_Compiler_Collection/function-attributes.html" target="_blank">All the attributes</a>\n
	\subsection	imp_sec_obj_subsec		Objects
		\ref mcd::Big\n
		\ref mcd::Point\n
		PathfindingDijkstra\n
		Threadable\n
		\ref mcd::trio\n
		\ref mcd::quatuor\n
		\ref mcd::stack\n
		\ref mcd::queue\n
		- \ref mcd::Contraption
			- \ref mcd::Object
				- \ref mcd::Stone
			- \ref mcd::Entity
				- \ref mcd::Animal
					- \ref mcd::Ant
				- \ref mcd::Vegetal
					- \ref mcd::Plant
					- \ref mcd::Mushroom
		- \ref mcd::Player
	\subsection	imp_sec_var_subsec		Variables
		\ref mcd::bdd\n
		\ref mcd::rng\n
		\ref mcd::sha2
	\subsection	imp_sec_def_subsec		Structures \& Defines
		\ref mcd::Colors\n
		\ref mcd::Direction\n
		\ref mcd::CaractSet\n
		\ref mcd::double64_t\n
		\ref mcd::vector_str\n
		\ref mcd::map_str\n
		\ref mcd::pair_str\n
		\ref mcd::trio_str\n
		\ref mcd::quatuor_str\n
		\ref BIG_E\n
		\ref BIG_PI\n
		\ref line_number\n
		\ref THREADABLE\n
		\ref THREADABLE_LOCK
	\subsection	imp_sec_fun_subsec		Functions
		mcd::fileExists(const std::string& path)\n
		mcd::luhn(const std::string& num)\n
		mcd::sleep(size_t duration)\n
		mcd::print_all(Something data, bool change)\n
		printSize<Type>()\n
		mcd::printType(const C& obj)\n
		mcd::Check::printable(const T&)\n
		mcd::removeAccents(std::string str)\n
		mcd::randStr(size_t nb, unsigned short flags)

\section		upd_sec			Updates
	\subsection	upd_sec_20190906_subsec		September, 17 2019
		Adding a class to use matrices.\n
		Adding a class to use rational fractions.
	\subsection	upd_sec_20190906_subsec		September, 06 2019
		Correction of some bugs.\n
		Added to <a class="el" href="https://github.com/mcabioch/CppLib" target="_blank">GitHub</a>.
	\subsection	upd_sec_20190416_subsec		April, 16 2019
		Creation of the \ref mcd namespace.

\section		dow_sec			Downloads
	The <a class="el" href="https://github.com/mcabioch/CppLib" target="_blank">GitHub</a> link.
