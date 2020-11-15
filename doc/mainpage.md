# My own C++ features

\created February 2017
\date Last modification on \htmlonly<?php echo $lastModif; ?>\endhtmlonly
\author Mathias CABIOCH-DELALANDE
\copyright MCD

---

\tableofcontents

\section int_sec Introduction
This is my own C++ library using C++14.
All of the features are in the namespace \ref mcd.

\section con_sec Content
\subsection con_sec_obj_subsec Objects
<a class="el" href="annotated.php" target="_blank">All the objects</a>
\subsection con_sec_var_subsec Variables
<a class="el" href="globals_vars.php" target="_blank">All the variables</a>
\subsection con_sec_def_subsec Structures \& Defines
<a class="el" href="globals_type.php" target="_blank">All the typedefs</a>\n
<a class="el" href="globals_enum.php" target="_blank">All the enums</a>\n
<a class="el" href="globals_defs.php" target="_blank">All the defines</a>
\subsection con_sec_fun_subsec Functions
<a class="el" href="globals_func.php" target="_blank">All the functions</a>

\section imp_sec Important features
\subsection imp_sec_tip_subsec Tips and Advice
To use an explicit fallthrough in a switch, write <em>/\* fall through \*/</em> before the next case\n\n
To set a special attribute for a function : func() <strong>**attribute** ((attr1[, attr2, ...]))</strong>;\n
<span class="tab"></span>deprecated("") or <strong>**attribute_deprecated**</strong>\n
<span class="tab"></span><a class="el" href="https://access.redhat.com/documentation/en-US/Red_Hat_Enterprise_Linux/4/html/Using_the_GNU_Compiler_Collection/function-attributes.html" target="_blank">All the attributes</a>\n

\subsection imp_sec_obj_subsec Objects

- \ref mcd::Big\n
- \ref mcd::Point\n
- \ref mcd::PathfindingDijkstra\n
- \ref mcd::Threadable\n
- \ref mcd::trio\n
- \ref mcd::quatuor\n
- \ref mcd::stack\n
- \ref mcd::queue\n
- \ref mcd::vector\n
- \ref mcd::Contraption\n
  - \ref mcd::Object\n
    - \ref mcd::Stone\n
    - \ref mcd::Entity\n
      - \ref mcd::Animal\n
        - \ref mcd::Ant\n
      - \ref mcd::Vegetal\n
        - \ref mcd::Plant\n
        - \ref mcd::Mushroom\n
  - \ref mcd::Player

\subsection imp_sec_var_subsec Variables

\ref mcd::bdd\n
\ref mcd::rnd\n
\ref mcd::sha2

\subsection imp_sec_def_subsec Structures \& Defines

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

\subsection imp_sec_fun_subsec Functions

mcd::fileExists(const std::string& path)\n
mcd::luhn(const std::string& num)\n
mcd::sleep(size_t duration)\n
mcd::console::print_all(Something data, bool change)\n
printSize<Type>()\n
mcd::printType(const C& obj)\n
mcd::check::printable(const T&)\n
mcd::removeAccents(std::string str)\n
mcd::randStr(size_t nb, unsigned short flags)

\section upd_sec Updates

\subsection upd_sec_20201027_subsec October, 27 2020 (1.6.1.0)

Adding a define \ref AUTO_OPERATORS to define class operators automatically if the operators == and < are defined.

\subsection upd_sec_20201027_subsec October, 27 2020 (1.6.0.0)

Adding a class to manage Json objects.

\subsection upd_sec_2019127_subsec November, 27 2019 (1.5.0.0)

Adding a class to do some unitary tests in a program.

\subsection upd_sec_2019114_subsec November, 14 2019 (1.4.1.1)

Changing assert behaviour to throw a mcd::AssertionException instead of closing the program.

\subsection upd_sec_20191109_subsec November, 09 2019 (1.4.0.0)

Adding an object to log informations (logger).

\subsection upd_sec_20190929_subsec September, 29 2019 (1.3.0.0)

Adding a class to use and see binary values (Binary).

\subsection upd_sec_20190917_subsec September, 17 2019 (1.2.0.0)

Adding a class to use matrices (Matrix).\n
Adding a class to use rational fractions (Fraction).

\subsection upd_sec_20190906_subsec September, 06 2019 (1.1.1.1)

Correction of some bugs.\n
Added to <a class="el" href="https://github.com/mcabioch/CppLib" target="_blank">GitHub</a>.

\subsection upd_sec_20190416_subsec April, 16 2019 (1.1.1.0)

Creation of the \ref mcd namespace.

\section dow_sec Downloads
The <a class="el" href="https://github.com/mcabioch/CppLib" target="_blank">GitHub</a> link.
