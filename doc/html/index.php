<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.20"/>
		<title>C++: My own C++ features</title>
		<link href="tabs.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript" src="dynsections.js"></script>
		<link href="navtree.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="resize.js"></script>
<script type="text/javascript" src="navtreedata.js"></script>
<script type="text/javascript" src="navtree.js"></script>
		<link href="search/search.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="search/searchdata.js"></script>
<script type="text/javascript" src="search/search.js"></script>
		<link href="doxygen.css" rel="stylesheet" type="text/css" />
		<link href="doxystyle.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<div id="top"><!-- do not remove this div, it is closed by doxygen! -->
			<div id="titlearea">
				<table cellspacing="0" cellpadding="0">
					<tbody>
						<tr style="height: 56px;">
							<td id="projectalign" style="padding-left: 0.5em;">
								<div id="projectname">C++
									&#160;<span id="projectnumber">1.6.0.0</span>
								</div>
								<div id="projectbrief">My own C++ features</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<?php
				$text = "Generated on Wed Oct 28 2020 16:13:45 for C++ by";
				$text = substr($text, 0, sizeof($text) - 4);
				$tmp = substr($text, 17);
				$tmp = substr($tmp, 0, strpos($tmp, " for"));
				$lastModif = date("l jS \of F Y \a\\t H:i:s", strtotime($tmp));
			?>
		<!-- end header part -->
<!-- Generated by Doxygen 1.8.20 -->
<script type="text/javascript">
/* @license magnet:?xt=urn:btih:cf05388f2679ee054f2beb29a391d25f4e673ac3&amp;dn=gpl-2.0.txt GPL-v2 */
var searchBox = new SearchBox("searchBox", "search",false,'Search');
/* @license-end */
</script>
<script type="text/javascript" src="menudata.js"></script>
<script type="text/javascript" src="menu.js"></script>
<script type="text/javascript">
/* @license magnet:?xt=urn:btih:cf05388f2679ee054f2beb29a391d25f4e673ac3&amp;dn=gpl-2.0.txt GPL-v2 */
$(function() {
  initMenu('',true,false,'search.php','Search');
  $(document).ready(function() { init_search(); });
});
/* @license-end */</script>
<div id="main-nav"></div>
</div><!-- top -->
<div id="side-nav" class="ui-resizable side-nav-resizable">
  <div id="nav-tree">
    <div id="nav-tree-contents">
      <div id="nav-sync" class="sync"></div>
    </div>
  </div>
  <div id="splitbar" style="-moz-user-select:none;" 
       class="ui-resizable-handle">
  </div>
</div>
<script type="text/javascript">
/* @license magnet:?xt=urn:btih:cf05388f2679ee054f2beb29a391d25f4e673ac3&amp;dn=gpl-2.0.txt GPL-v2 */
$(document).ready(function(){initNavTree('index.php',''); initResizable(); });
/* @license-end */
</script>
<div id="doc-content">
<!-- window showing the filter options -->
<div id="MSearchSelectWindow"
     onmouseover="return searchBox.OnSearchSelectShow()"
     onmouseout="return searchBox.OnSearchSelectHide()"
     onkeydown="return searchBox.OnSearchSelectKey(event)">
</div>

<!-- iframe showing the search results (closed by default) -->
<div id="MSearchResultsWindow">
<iframe src="javascript:void(0)" frameborder="0" 
        name="MSearchResults" id="MSearchResults">
</iframe>
</div>

<div class="PageDoc"><div class="header">
  <div class="headertitle">
<div class="title">My own C++ features </div>  </div>
</div><!--header-->
<div class="contents">
<div class="toc"><h3>Table of Contents</h3>
<ul><li class="level1"><a href="#int_sec">Introduction</a></li>
<li class="level1"><a href="#con_sec">Content</a><ul><li class="level2"><a href="#con_sec_obj_subsec">Objects</a></li>
<li class="level2"><a href="#con_sec_var_subsec">Variables</a></li>
<li class="level2"><a href="#con_sec_def_subsec">Structures &amp; Defines</a></li>
<li class="level2"><a href="#con_sec_fun_subsec">Functions</a></li>
</ul>
</li>
<li class="level1"><a href="#imp_sec">Important features</a><ul><li class="level2"><a href="#imp_sec_tip_subsec">Tips and Advice</a></li>
<li class="level2"><a href="#imp_sec_obj_subsec">Objects</a></li>
<li class="level2"><a href="#imp_sec_var_subsec">Variables</a></li>
<li class="level2"><a href="#imp_sec_def_subsec">Structures &amp; Defines</a></li>
<li class="level2"><a href="#imp_sec_fun_subsec">Functions</a></li>
</ul>
</li>
<li class="level1"><a href="#upd_sec">Updates</a><ul><li class="level2"><a href="#upd_sec_20201027_subsec">October, 27 2020 (1.6.0.0)</a></li>
<li class="level2"><a href="#upd_sec_2019127_subsec">November, 27 2019 (1.5.0.0)</a></li>
<li class="level2"><a href="#upd_sec_2019114_subsec">November, 14 2019 (1.4.1.1)</a></li>
<li class="level2"><a href="#upd_sec_20191109_subsec">November, 09 2019 (1.4.0.0)</a></li>
<li class="level2"><a href="#upd_sec_20190929_subsec">September, 29 2019 (1.3.0.0)</a></li>
<li class="level2"><a href="#upd_sec_20190917_subsec">September, 17 2019 (1.2.0.0)</a></li>
<li class="level2"><a href="#upd_sec_20190906_subsec">September, 06 2019 (1.1.1.1)</a></li>
<li class="level2"><a href="#upd_sec_20190416_subsec">April, 16 2019 (1.1.1.0)</a></li>
</ul>
</li>
<li class="level1"><a href="#dow_sec">Downloads</a></li>
</ul>
</div>
<div class="textblock"><p><a class="anchor" id="md__home_mathias_Bureau_Algo_C"></a>++Tests_C++_doc_mainpage</p>
<dl class="section date"><dt>Date</dt><dd>Created : February 2017 </dd>
<dd>
Last modification on <?php echo $lastModif; ?> </dd></dl>
<dl class="section author"><dt>Author</dt><dd>Mathias CABIOCH-DELALANDE </dd></dl>
<dl class="section copyright"><dt>Copyright</dt><dd>MCD</dd></dl>
<hr  />
<h1><a class="anchor" id="int_sec"></a>
Introduction</h1>
<p>This is my own C++ library using C++14. All of the features are in the namespace <a class="el" href="da/d53/a00265.php">mcd</a>.</p>
<h1><a class="anchor" id="con_sec"></a>
Content</h1>
<h2><a class="anchor" id="con_sec_obj_subsec"></a>
Objects</h2>
<p><a href="annotated.php" class="el" target="_blank">All the objects</a> </p>
<h2><a class="anchor" id="con_sec_var_subsec"></a>
Variables</h2>
<p><a href="globals_vars.php" class="el" target="_blank">All the variables</a> </p>
<h2><a class="anchor" id="con_sec_def_subsec"></a>
Structures &amp; Defines</h2>
<p><a href="globals_type.php" class="el" target="_blank">All the typedefs</a><br  />
<a href="globals_enum.php" class="el" target="_blank">All the enums</a><br  />
<a href="globals_defs.php" class="el" target="_blank">All the defines</a> </p>
<h2><a class="anchor" id="con_sec_fun_subsec"></a>
Functions</h2>
<p><a href="globals_func.php" class="el" target="_blank">All the functions</a></p>
<h1><a class="anchor" id="imp_sec"></a>
Important features</h1>
<h2><a class="anchor" id="imp_sec_tip_subsec"></a>
Tips and Advice</h2>
<p>To use an explicit fallthrough in a switch, write <em>/* fall through */</em> before the next case<br  />
<br  />
To set a special attribute for a function : func() <b><b>attribute</b> ((attr1[, attr2, ...]))</b>;<br  />
<span class="tab"></span>deprecated("") or <b><b>attribute_deprecated</b></b><br  />
<span class="tab"></span><a href="https://access.redhat.com/documentation/en-US/Red_Hat_Enterprise_Linux/4/html/Using_the_GNU_Compiler_Collection/function-attributes.html" class="el" target="_blank">All the attributes</a><br  />
 </p>
<h2><a class="anchor" id="imp_sec_obj_subsec"></a>
Objects</h2>
<ul>
<li>mcd::Big<br  />
</li>
<li>mcd::Point<br  />
</li>
<li>PathfindingDijkstra<br  />
</li>
<li>Threadable<br  />
</li>
<li>mcd::trio<br  />
</li>
<li>mcd::quatuor<br  />
</li>
<li>mcd::stack<br  />
</li>
<li>mcd::queue<br  />
</li>
<li>mcd::Contraption<br  />
<ul>
<li>mcd::Object<br  />
<ul>
<li>mcd::Stone<br  />
</li>
<li>mcd::Entity<br  />
<ul>
<li>mcd::Animal<br  />
<ul>
<li>mcd::Ant<br  />
</li>
</ul>
</li>
<li>mcd::Vegetal<br  />
<ul>
<li>mcd::Plant<br  />
</li>
<li>mcd::Mushroom<br  />
</li>
</ul>
</li>
</ul>
</li>
</ul>
</li>
<li><a class="el" href="da/d77/a01381.php">mcd::Player</a></li>
</ul>
</li>
</ul>
<h2><a class="anchor" id="imp_sec_var_subsec"></a>
Variables</h2>
<p>mcd::bdd<br  />
 mcd::rng<br  />
 <a class="el" href="da/d53/a00265.php#aa0ce198f34851e093bbc38dfd975e339">mcd::sha2</a></p>
<h2><a class="anchor" id="imp_sec_def_subsec"></a>
Structures &amp; Defines</h2>
<p>mcd::Colors<br  />
 mcd::Direction<br  />
 mcd::CaractSet<br  />
 mcd::double64_t<br  />
 mcd::vector_str<br  />
 mcd::map_str<br  />
 mcd::pair_str<br  />
 mcd::trio_str<br  />
 mcd::quatuor_str<br  />
 BIG_E<br  />
 BIG_PI<br  />
 line_number<br  />
 THREADABLE<br  />
 <a class="el" href="d6/de1/a00233.php#a3a0fe346d6bb1356037b21f558e5c308">THREADABLE_LOCK</a></p>
<h2><a class="anchor" id="imp_sec_fun_subsec"></a>
Functions</h2>
<p><a class="el" href="da/d53/a00265.php#ae44c2e346da18a7424d97535fb654448" title="Return true if the file exists.">mcd::fileExists(const std::string&amp; path)</a><br  />
<a class="el" href="da/d53/a00265.php#a176933d706495ddff7385a68319e7169" title="Compute the checksum number.">mcd::luhn(const std::string&amp; num)</a><br  />
<a class="el" href="da/d53/a00265.php#a0003c12a7cc73a35e488f59ad14770bf" title="Sleep the thread during duration seconds.">mcd::sleep(size_t duration)</a><br  />
mcd::print_all(Something data, bool change)<br  />
<a class="el" href="da/d53/a00265.php#a5046a9dfac4629babcb20cf7b914415e" title="Print the size of obj type.">printSize&lt;Type&gt;()</a><br  />
<a class="el" href="da/d53/a00265.php#a2bb83762638ce787815f3699d67faa92" title="Print the type of obj.">mcd::printType(const C&amp; obj)</a><br  />
<a class="el" href="db/d12/a00268.php#ab0b2e96bd3f31d823dad478c5f54abf1" title="A function that say if a type has an ostream operator(&lt;&lt;)">mcd::Check::printable(const T&amp;)</a><br  />
mcd::removeAccents(std::string str)<br  />
<a class="el" href="da/d53/a00265.php#a1ddd069f38e7407563a5d8e763d7dc90" title="Create a random string.">mcd::randStr(size_t nb, unsigned short flags)</a></p>
<h1><a class="anchor" id="upd_sec"></a>
Updates</h1>
<h2><a class="anchor" id="upd_sec_20201027_subsec"></a>
October, 27 2020 (1.6.0.0)</h2>
<p>Adding a class to manage Json objects.</p>
<h2><a class="anchor" id="upd_sec_2019127_subsec"></a>
November, 27 2019 (1.5.0.0)</h2>
<p>Adding a class to do some unitary tests in a program.</p>
<h2><a class="anchor" id="upd_sec_2019114_subsec"></a>
November, 14 2019 (1.4.1.1)</h2>
<p>Changing assert behaviour to throw a <a class="el" href="dd/de4/a01121.php" title="An exception thrown by my assert&#39;s implementation.">mcd::AssertionException</a> instead of closing the program.</p>
<h2><a class="anchor" id="upd_sec_20191109_subsec"></a>
November, 09 2019 (1.4.0.0)</h2>
<p>Adding an object to log informations (logger).</p>
<h2><a class="anchor" id="upd_sec_20190929_subsec"></a>
September, 29 2019 (1.3.0.0)</h2>
<p>Adding a class to use and see binary values (Binary).</p>
<h2><a class="anchor" id="upd_sec_20190917_subsec"></a>
September, 17 2019 (1.2.0.0)</h2>
<p>Adding a class to use matrices (Matrix).<br  />
Adding a class to use rational fractions (Fraction).</p>
<h2><a class="anchor" id="upd_sec_20190906_subsec"></a>
September, 06 2019 (1.1.1.1)</h2>
<p>Correction of some bugs.<br  />
Added to <a href="https://github.com/mcabioch/CppLib" class="el" target="_blank">GitHub</a>.</p>
<h2><a class="anchor" id="upd_sec_20190416_subsec"></a>
April, 16 2019 (1.1.1.0)</h2>
<p>Creation of the <a class="el" href="da/d53/a00265.php">mcd</a> namespace.</p>
<h1><a class="anchor" id="dow_sec"></a>
Downloads</h1>
<p>The <a href="https://github.com/mcabioch/CppLib" class="el" target="_blank">GitHub</a> link. </p>
</div></div><!-- PageDoc -->
</div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
