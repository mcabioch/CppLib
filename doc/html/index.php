<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.13"/>
		<title>C++: My own C++ features</title>
		<link href="tabs.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript" src="dynsections.js"></script>
		<link href="navtree.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="resize.js"></script>
<script type="text/javascript" src="navtreedata.js"></script>
<script type="text/javascript" src="navtree.js"></script>
<script type="text/javascript">
  $(document).ready(initResizable);
</script>
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
									&#160;<span id="projectnumber">2.0</span>
								</div>
								<div id="projectbrief">My own C++ features</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<?php
				$text = "Generated on Thu Sep 26 2019 12:13:20 for C++ by";
				$text = substr($text, 0, sizeof($text) - 4);
				$tmp = substr($text, 17);
				$tmp = substr($tmp, 0, strpos($tmp, " for"));
				$lastModif = date("l jS \of F Y \a\\t H:i:s", strtotime($tmp));
			?>
		<!-- end header part -->
<!-- Generated by Doxygen 1.8.13 -->
<script type="text/javascript">
var searchBox = new SearchBox("searchBox", "search",false,'Search');
</script>
<script type="text/javascript" src="menudata.js"></script>
<script type="text/javascript" src="menu.js"></script>
<script type="text/javascript">
$(function() {
  initMenu('',true,false,'search.php','Search');
  $(document).ready(function() { init_search(); });
});
</script>
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
$(document).ready(function(){initNavTree('index.php','');});
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

<div class="header">
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
<li class="level1"><a href="#upd_sec">Updates</a><ul><li class="level2"><a href="#upd_sec_20190906_subsec">September, 17 2019</a></li>
<li class="level2"><a href="#upd_sec_20190416_subsec">April, 16 2019</a></li>
</ul>
</li>
<li class="level1"><a href="#dow_sec">Downloads</a></li>
</ul>
</div>
<div class="textblock"><dl class="section date"><dt>Date</dt><dd>Created : February 2017 </dd>
<dd>
Last modification on <?php echo $lastModif; ?> </dd></dl>
<dl class="section author"><dt>Author</dt><dd>Mathias CABIOCH-DELALANDE </dd></dl>
<dl class="section copyright"><dt>Copyright</dt><dd>MCD <hr/>
</dd></dl>
<h1><a class="anchor" id="int_sec"></a>
Introduction</h1>
<p>This is my own C++ library using C++14. All of the features are in the mcd::namespace.</p>
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
<p><a href="globals_type.php" class="el" target="_blank">All the typedefs</a><br />
 <a href="globals_enum.php" class="el" target="_blank">All the enums</a><br />
 <a href="globals_defs.php" class="el" target="_blank">All the defines</a> </p>
<h2><a class="anchor" id="con_sec_fun_subsec"></a>
Functions</h2>
<p><a href="globals_func.php" class="el" target="_blank">All the functions</a></p>
<h1><a class="anchor" id="imp_sec"></a>
Important features</h1>
<h2><a class="anchor" id="imp_sec_tip_subsec"></a>
Tips and Advice</h2>
<p>To use an explicit fallthrough in a switch, write <em>/* fall through */</em> before the next case<br />
<br />
 To set a special attribute for a function : func() <b>__attribute__ ((attr1[, attr2, ...]))</b>;<br />
 <span class="tab"></span>deprecated("") or <b>__attribute_deprecated__</b><br />
 <span class="tab"></span><a href="https://access.redhat.com/documentation/en-US/Red_Hat_Enterprise_Linux/4/html/Using_the_GNU_Compiler_Collection/function-attributes.html" class="el" target="_blank">All the attributes</a><br />
</p>
<h2><a class="anchor" id="imp_sec_obj_subsec"></a>
Objects</h2>
<p><a class="el" href="df/d0c/a00788.php">mcd::Big</a><br />
 <a class="el" href="d5/d16/a01060.php">mcd::Point</a><br />
 PathfindingDijkstra<br />
 Threadable<br />
 <a class="el" href="dd/ded/a00211.php#d9/dce/a01052">mcd::trio</a><br />
 <a class="el" href="dd/ded/a00211.php#dc/d19/a01056">mcd::quatuor</a><br />
 <a class="el" href="d9/d9c/a00772.php">mcd::stack</a><br />
 <a class="el" href="de/d42/a00780.php">mcd::queue</a><br />
</p><ul>
<li><a class="el" href="dd/d94/a00888.php">mcd::Contraption</a><ul>
<li><a class="el" href="d7/dd4/a00968.php">mcd::Object</a><ul>
<li><a class="el" href="db/d08/a01028.php">mcd::Stone</a></li>
</ul>
</li>
<li><a class="el" href="de/d62/a00924.php">mcd::Entity</a><ul>
<li><a class="el" href="d8/db4/a00760.php">mcd::Animal</a><ul>
<li><a class="el" href="d3/d2c/a00764.php">mcd::Ant</a></li>
</ul>
</li>
<li><a class="el" href="d9/db3/a01064.php">mcd::Vegetal</a><ul>
<li><a class="el" href="d3/daa/a00996.php">mcd::Plant</a></li>
<li><a class="el" href="dd/d11/a00960.php">mcd::Mushroom</a></li>
</ul>
</li>
</ul>
</li>
</ul>
</li>
<li><a class="el" href="d7/df2/a01000.php">mcd::Player</a> </li>
</ul>
<h2><a class="anchor" id="imp_sec_var_subsec"></a>
Variables</h2>
<p>mcd::bdd<br />
 <a class="el" href="dd/ded/a00211.php#a08ac826a0e7f64dc1b04036ecec50ed1">mcd::rng</a><br />
 <a class="el" href="dd/ded/a00211.php#aa0ce198f34851e093bbc38dfd975e339">mcd::sha2</a> </p>
<h2><a class="anchor" id="imp_sec_def_subsec"></a>
Structures &amp; Defines</h2>
<p><a class="el" href="dd/ded/a00211.php#ae124ce77f8e386663ac11e2e35e6070a">mcd::Colors</a><br />
 <a class="el" href="dd/ded/a00211.php#a55fd359a467c1bfe9d2f72c227bb1706">mcd::Direction</a><br />
 <a class="el" href="dd/ded/a00211.php#a372ef82d72716aed789680d0a84c06d3">mcd::CaractSet</a><br />
 <a class="el" href="dd/ded/a00211.php#adda27badcbfcfc854854c6ab094cf34e">mcd::double64_t</a><br />
 <a class="el" href="dd/ded/a00211.php#a20cc1353da1673066a19b886e7e5c61e">mcd::vector_str</a><br />
 <a class="el" href="dd/ded/a00211.php#a38f7073118052c23b1e5051bbafacac3">mcd::map_str</a><br />
 <a class="el" href="dd/ded/a00211.php#aba609827ae566c40802bf828ab5a5a3c">mcd::pair_str</a><br />
 <a class="el" href="dd/ded/a00211.php#adc4a4720990996356b2c954e9d611e9b">mcd::trio_str</a><br />
 <a class="el" href="dd/ded/a00211.php#aaa50b5dcb5cb495757e7084494fd482d">mcd::quatuor_str</a><br />
 <a class="el" href="d6/d5b/a00026.php#aa7b6d263fd9b5d3381ca7e6af68a1ac9">BIG_E</a><br />
 <a class="el" href="d6/d5b/a00026.php#abded7950b004fc558461964290e7573c">BIG_PI</a><br />
 <a class="el" href="d1/d09/a00077.php#a08ee21f84a6b44ca59d7f045b55d6bfc">line_number</a><br />
 <a class="el" href="d7/d25/a00182.php#a09979566ade438911265d3e17ecc3abc">THREADABLE</a><br />
 <a class="el" href="d7/d25/a00182.php#a3a0fe346d6bb1356037b21f558e5c308">THREADABLE_LOCK</a> </p>
<h2><a class="anchor" id="imp_sec_fun_subsec"></a>
Functions</h2>
<p><a class="el" href="dd/ded/a00211.php#ae44c2e346da18a7424d97535fb654448" title="Return true if the file exists. ">mcd::fileExists(const std::string&amp; path)</a><br />
 <a class="el" href="dd/ded/a00211.php#a176933d706495ddff7385a68319e7169" title="Compute the checksum number. ">mcd::luhn(const std::string&amp; num)</a><br />
 <a class="el" href="dd/ded/a00211.php#a0003c12a7cc73a35e488f59ad14770bf" title="Sleep the thread during duration seconds. ">mcd::sleep(size_t duration)</a><br />
 <a class="el" href="dd/ded/a00211.php#a95b30a0f37ef4accc8c762eee75bcc12" title="Prints approximately everything. ">mcd::print_all(Something data, bool change)</a><br />
 <a class="el" href="dd/ded/a00211.php#a5046a9dfac4629babcb20cf7b914415e" title="Print the size of obj type. ">printSize&lt;Type&gt;()</a><br />
 <a class="el" href="dd/ded/a00211.php#a2bb83762638ce787815f3699d67faa92" title="Print the type of obj. ">mcd::printType(const C&amp; obj)</a><br />
 <a class="el" href="dd/dc1/a00212.php#a2bef56760d8ffae969e8a1347194b42c" title="A function that say if a type has an ostream operator(&lt;&lt;) ">mcd::Check::printable(const T&amp;)</a><br />
 mcd::removeAccents(std::string str)<br />
 <a class="el" href="dd/ded/a00211.php#a1ddd069f38e7407563a5d8e763d7dc90" title="Create a random string. ">mcd::randStr(size_t nb, unsigned short flags)</a></p>
<h1><a class="anchor" id="upd_sec"></a>
Updates</h1>
<h2><a class="anchor" id="upd_sec_20190906_subsec"></a>
September, 17 2019</h2>
<p>Adding a class to use matrices.<br />
 Adding a class to use rational fractions. </p>
<h2><a class="anchor" id="upd_sec_20190906_subsec"></a>
September, 17 2019</h2>
<p>Correction of some bugs.<br />
 Added to <a href="https://github.com/mcabioch/CppLib" class="el" target="_blank">GitHub</a>. </p>
<h2><a class="anchor" id="upd_sec_20190416_subsec"></a>
April, 16 2019</h2>
<p>Creation of the <a class="el" href="dd/ded/a00211.php">mcd</a> namespace.</p>
<h1><a class="anchor" id="dow_sec"></a>
Downloads</h1>
<p>The <a href="https://github.com/mcabioch/CppLib" class="el" target="_blank">GitHub</a> link. </p>
</div></div><!-- contents -->
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
