<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.20"/>
		<title>C++: array.hpp File Reference</title>
		<link href="../../tabs.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="../../jquery.js"></script>
		<script type="text/javascript" src="../../dynsections.js"></script>
		<link href="../../navtree.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="../../resize.js"></script>
<script type="text/javascript" src="../../navtreedata.js"></script>
<script type="text/javascript" src="../../navtree.js"></script>
		<link href="../../search/search.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="../../search/searchdata.js"></script>
<script type="text/javascript" src="../../search/search.js"></script>
		<link href="../../doxygen.css" rel="stylesheet" type="text/css" />
		<link href="../../doxystyle.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<div id="top"><!-- do not remove this div, it is closed by doxygen! -->
			<div id="titlearea">
				<table cellspacing="0" cellpadding="0">
					<tbody>
						<tr style="height: 56px;">
							<td id="projectalign" style="padding-left: 0.5em;">
								<div id="projectname">C++
									&#160;<span id="projectnumber">1.6.3.0</span>
								</div>
								<div id="projectbrief">My own C++ features</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<?php
				$text = "Generated on Wed Nov 18 2020 14:47:41 for C++ by";
				$text = substr($text, 0, sizeof($text) - 4);
				$tmp = substr($text, 17);
				$tmp = substr($tmp, 0, strpos($tmp, " for"));
				$lastModif = date("l jS \of F Y \a\\t H:i:s", strtotime($tmp));
			?>
		<!-- end header part -->
<!-- Generated by Doxygen 1.8.20 -->
<script type="text/javascript">
/* @license magnet:?xt=urn:btih:cf05388f2679ee054f2beb29a391d25f4e673ac3&amp;dn=gpl-2.0.txt GPL-v2 */
var searchBox = new SearchBox("searchBox", "../../search",false,'Search');
/* @license-end */
</script>
<script type="text/javascript" src="../../menudata.js"></script>
<script type="text/javascript" src="../../menu.js"></script>
<script type="text/javascript">
/* @license magnet:?xt=urn:btih:cf05388f2679ee054f2beb29a391d25f4e673ac3&amp;dn=gpl-2.0.txt GPL-v2 */
$(function() {
  initMenu('../../',true,false,'search.php','Search');
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
$(document).ready(function(){initNavTree('da/d45/a00011.php','../../'); initResizable(); });
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

<div class="header">
  <div class="summary">
<a href="#nested-classes">Classes</a> &#124;
<a href="#namespaces">Namespaces</a> &#124;
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<div class="title">array.hpp File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><code>#include &quot;<a class="el" href="../../dc/dee/a00053.php">check.hpp</a>&quot;</code><br />
<code>#include &quot;<a class="el" href="../../dc/d9a/a00218.php">sorting.hpp</a>&quot;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for array.hpp:</div>
<div class="dyncontent">
<div class="center"><img src="../../df/d86/a00012.png" border="0" usemap="#aarray_8hpp" alt=""/></div>
<map name="array_8hpp" id="array_8hpp">
<area shape="rect" title=" " alt="" coords="790,5,865,32"/>
<area shape="rect" href="../../dc/dee/a00053.php" title=" " alt="" coords="841,80,923,107"/>
<area shape="rect" href="../../dc/d9a/a00218.php" title=" " alt="" coords="729,80,816,107"/>
<area shape="rect" href="../../df/d03/a00062.php" title=" " alt="" coords="1034,155,1125,181"/>
<area shape="rect" href="../../d9/d39/a00257.php" title=" " alt="" coords="731,155,814,181"/>
<area shape="rect" title=" " alt="" coords="845,155,906,181"/>
<area shape="rect" title=" " alt="" coords="930,155,999,181"/>
<area shape="rect" href="../../d9/db6/a00146.php" title=" " alt="" coords="1043,229,1126,256"/>
<area shape="rect" href="../../d0/dc2/a00104.php" title=" " alt="" coords="1180,304,1275,331"/>
<area shape="rect" href="../../d6/d7d/a00161.php" title=" " alt="" coords="1014,304,1155,331"/>
<area shape="rect" href="../../d7/dce/a00143.php" title=" " alt="" coords="1065,379,1147,405"/>
<area shape="rect" title=" " alt="" coords="1194,379,1261,405"/>
<area shape="rect" href="../../d8/d41/a00038.php" title=" " alt="" coords="1062,453,1145,480"/>
<area shape="rect" href="../../d5/df1/a00206.php" title=" " alt="" coords="701,528,794,555"/>
<area shape="rect" href="../../d3/d1a/a00251.php" title=" " alt="" coords="615,603,693,629"/>
<area shape="rect" title=" " alt="" coords="718,603,777,629"/>
<area shape="rect" title=" " alt="" coords="801,603,859,629"/>
<area shape="rect" href="../../d3/d52/a00023.php" title=" " alt="" coords="371,677,438,704"/>
<area shape="rect" href="../../d3/de5/a00209.php" title=" " alt="" coords="483,677,593,704"/>
<area shape="rect" href="../../dd/dd7/a00248.php" title=" " alt="" coords="617,677,691,704"/>
<area shape="rect" href="../../d7/d03/a00254.php" title=" " alt="" coords="715,677,849,704"/>
<area shape="rect" title=" " alt="" coords="873,677,941,704"/>
<area shape="rect" href="../../d7/d06/a00131.php" title=" " alt="" coords="618,752,730,779"/>
<area shape="rect" href="../../d6/d5b/a00026.php" title=" " alt="" coords="451,752,593,779"/>
<area shape="rect" href="../../d5/d16/a00029.php" title=" " alt="" coords="5,752,145,779"/>
<area shape="rect" href="../../dc/d87/a00032.php" title=" " alt="" coords="170,752,279,779"/>
<area shape="rect" href="../../d4/d8c/a00035.php" title=" " alt="" coords="303,752,426,779"/>
<area shape="rect" href="../../d5/de9/a00176.php" title=" " alt="" coords="614,827,734,853"/>
<area shape="rect" title=" " alt="" coords="583,901,651,928"/>
<area shape="rect" href="../../de/d76/a00134.php" title=" " alt="" coords="675,901,791,928"/>
<area shape="rect" title=" " alt="" coords="246,976,321,1003"/>
<area shape="rect" title=" " alt="" coords="345,976,403,1003"/>
<area shape="rect" title=" " alt="" coords="428,976,507,1003"/>
<area shape="rect" title=" " alt="" coords="531,976,603,1003"/>
<area shape="rect" title=" " alt="" coords="628,976,675,1003"/>
<area shape="rect" title=" " alt="" coords="699,976,767,1003"/>
<area shape="rect" title=" " alt="" coords="791,976,845,1003"/>
<area shape="rect" title=" " alt="" coords="870,976,939,1003"/>
<area shape="rect" title=" " alt="" coords="964,976,1019,1003"/>
<area shape="rect" title=" " alt="" coords="1043,976,1097,1003"/>
<area shape="rect" title=" " alt="" coords="1121,976,1179,1003"/>
<area shape="rect" href="../../d1/d44/a00098.php" title=" " alt="" coords="937,379,1040,405"/>
<area shape="rect" title=" " alt="" coords="953,453,1032,480"/>
<area shape="rect" title=" " alt="" coords="851,453,929,480"/>
<area shape="rect" href="../../d2/de7/a00014.php" title=" " alt="" coords="700,229,832,256"/>
<area shape="rect" title=" " alt="" coords="449,304,560,331"/>
<area shape="rect" title=" " alt="" coords="585,304,689,331"/>
<area shape="rect" title=" " alt="" coords="713,304,763,331"/>
<area shape="rect" title=" " alt="" coords="788,304,845,331"/>
<area shape="rect" title=" " alt="" coords="870,304,910,331"/>
<area shape="rect" title=" " alt="" coords="935,304,989,331"/>
</map>
</div>
</div><div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="../../d7/dd4/a00013.png" border="0" usemap="#aarray_8hppdep" alt=""/></div>
<map name="array_8hppdep" id="array_8hppdep">
<area shape="rect" title=" " alt="" coords="338,5,413,32"/>
<area shape="rect" href="../../db/db6/a00074.php" title=" " alt="" coords="330,80,421,107"/>
<area shape="rect" href="../../de/de1/a00065.php" title=" " alt="" coords="277,155,369,181"/>
<area shape="rect" href="../../d4/d3a/a00101.php" title=" " alt="" coords="393,155,464,181"/>
<area shape="rect" href="../../d9/d77/a00095.php" title=" " alt="" coords="335,229,415,256"/>
<area shape="rect" href="../../d1/da8/a00230.php" title=" " alt="" coords="330,304,421,331"/>
<area shape="rect" href="../../d5/ddf/a00224.php" title=" " alt="" coords="336,379,415,405"/>
<area shape="rect" href="../../d9/d01/a00227.php" title="Used to replace strptime function when compiling for Windows." alt="" coords="335,453,415,480"/>
<area shape="rect" href="../../d2/dc8/a00242.php" title=" " alt="" coords="311,528,440,555"/>
<area shape="rect" href="../../d4/d3e/a00116.php" title=" " alt="" coords="328,603,423,629"/>
<area shape="rect" href="../../d3/d8b/a00059.php" title=" " alt="" coords="5,827,87,853"/>
<area shape="rect" href="../../da/d24/a00068.php" title=" " alt="" coords="120,901,247,928"/>
<area shape="rect" href="../../da/dec/a00080.php" title=" " alt="" coords="162,677,237,704"/>
<area shape="rect" href="../../df/d6a/a00119.php" title=" " alt="" coords="318,752,417,779"/>
<area shape="rect" href="../../db/dd9/a00179.php" title=" " alt="" coords="413,677,487,704"/>
<area shape="rect" href="../../d9/dd0/a00191.php" title=" " alt="" coords="511,677,682,704"/>
<area shape="rect" href="../../dd/dc1/a00212.php" title=" " alt="" coords="586,827,701,853"/>
<area shape="rect" href="../../d7/d40/a00236.php" title=" " alt="" coords="715,976,825,1003"/>
<area shape="rect" href="../../d0/d27/a00239.php" title=" " alt="" coords="261,677,337,704"/>
<area shape="rect" href="../../da/d2a/a00086.php" title=" " alt="" coords="369,1125,459,1152"/>
<area shape="rect" href="../../db/db2/a00020.php" title=" " alt="" coords="217,1200,377,1227"/>
<area shape="rect" href="../../d1/d09/a00077.php" title=" " alt="" coords="364,1275,461,1301"/>
<area shape="rect" href="../../dc/dfe/a00125.php" title=" " alt="" coords="454,1200,587,1227"/>
<area shape="rect" href="../../d4/d51/a00017.php" title=" " alt="" coords="254,1275,339,1301"/>
<area shape="rect" href="../../d6/d2d/a00047.php" title=" " alt="" coords="369,1349,456,1376"/>
<area shape="rect" href="../../df/d98/a00107.php" title=" " alt="" coords="271,1424,349,1451"/>
<area shape="rect" href="../../d1/d88/a00128.php" title=" " alt="" coords="370,1499,455,1525"/>
<area shape="rect" href="../../d6/de1/a00233.php" title=" " alt="" coords="453,1573,525,1600"/>
<area shape="rect" href="../../d9/d2e/a00056.php" title=" " alt="" coords="221,1499,346,1525"/>
<area shape="rect" href="../../d5/de0/a00050.php" title=" " alt="" coords="276,1573,347,1600"/>
<area shape="rect" href="../../dd/d32/a00041.php" title=" " alt="" coords="376,1648,449,1675"/>
<area shape="rect" href="../../d0/d89/a00071.php" title=" " alt="" coords="309,1723,423,1749"/>
<area shape="rect" href="../../d3/d00/a00113.php" title=" " alt="" coords="407,2096,503,2123"/>
<area shape="rect" href="../../d1/dc1/a00092.php" title=" " alt="" coords="215,1797,293,1824"/>
<area shape="rect" href="../../d7/d3f/a00173.php" title=" " alt="" coords="331,1797,417,1824"/>
<area shape="rect" href="../../d4/d81/a00110.php" title=" " alt="" coords="99,1872,187,1899"/>
<area shape="rect" href="../../dd/dd7/a00260.php" title=" " alt="" coords="209,1947,299,1973"/>
<area shape="rect" href="../../d7/d46/a00002.php" title=" " alt="" coords="69,1947,156,1973"/>
<area shape="rect" href="../../dd/dad/a00005.php" title=" " alt="" coords="71,2021,138,2048"/>
<area shape="rect" href="../../db/dab/a00089.php" title=" " alt="" coords="289,2096,379,2123"/>
<area shape="rect" href="../../de/d79/a00203.php" title=" " alt="" coords="260,2171,411,2197"/>
<area shape="rect" href="../../d3/db1/a00200.php" title=" " alt="" coords="350,2245,433,2272"/>
<area shape="rect" href="../../d5/df9/a00044.php" title=" " alt="" coords="333,2320,450,2347"/>
<area shape="rect" href="../../db/ddf/a00164.php" title=" " alt="" coords="163,2021,271,2048"/>
<area shape="rect" href="../../de/db1/a00197.php" title=" " alt="" coords="295,2021,373,2048"/>
<area shape="rect" href="../../dd/d52/a00221.php" title=" " alt="" coords="341,1872,423,1899"/>
<area shape="rect" href="../../df/dc8/a00122.php" title=" " alt="" coords="486,1275,561,1301"/>
<area shape="rect" href="../../d2/d1f/a00083.php" title=" " alt="" coords="190,752,294,779"/>
<area shape="rect" href="../../dc/d57/a00194.php" title=" " alt="" coords="441,752,601,779"/>
<area shape="rect" href="../../d7/d25/a00182.php" title=" " alt="" coords="442,827,554,853"/>
<area shape="rect" href="../../da/d15/a00188.php" title=" " alt="" coords="403,901,561,928"/>
<area shape="rect" href="../../de/df3/a00185.php" title=" " alt="" coords="389,976,564,1003"/>
<area shape="rect" href="../../d5/db1/a00140.php" title=" " alt="" coords="415,1051,487,1077"/>
<area shape="rect" href="../../d4/dee/a00008.php" title=" " alt="" coords="639,1051,714,1077"/>
<area shape="rect" href="../../d6/d22/a00245.php" title=" " alt="" coords="739,1051,817,1077"/>
</map>
</div>
</div><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Classes</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d9/d10/a01103.php">mcd::stack&lt; T, Container &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">An implementation of std::stack.  <a href="../../d9/d10/a01103.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../de/d4a/a01107.php">mcd::t_stack&lt; T, Container &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">An thread-safe implementation of stack.  <a href="../../de/d4a/a01107.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d3/de1/a01111.php">mcd::queue&lt; T, Container &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">An implementation of std::queue.  <a href="../../d3/de1/a01111.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../df/dd5/a01115.php">mcd::t_queue&lt; T, Container &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">An thread-safe implementation of queue.  <a href="../../df/dd5/a01115.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="namespaces"></a>
Namespaces</h2></td></tr>
<tr class="memitem:db/d12/a00268"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php">mcd</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:d9/d2a/a00270"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d9/d2a/a00270.php">mcd::console</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:ad751f3d04e342cbe86c561683c3bd99c"><td class="memTemplParams" colspan="2">template&lt;typename T &gt; </td></tr>
<tr class="memitem:ad751f3d04e342cbe86c561683c3bd99c"><td class="memTemplItemLeft" align="right" valign="top">std::string&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#ad751f3d04e342cbe86c561683c3bd99c">mcd::implode</a> (const std::vector&lt; T &gt; &amp;a, const std::string &amp;glue=&quot;&quot;)</td></tr>
<tr class="memdesc:ad751f3d04e342cbe86c561683c3bd99c"><td class="mdescLeft">&#160;</td><td class="mdescRight">Stick the <em>a</em> vector with the <em>glue</em> given.  <a href="../../db/d12/a00268.php#ad751f3d04e342cbe86c561683c3bd99c">More...</a><br /></td></tr>
<tr class="separator:ad751f3d04e342cbe86c561683c3bd99c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a6d3bfa61258ecc1a75733f516ea81097"><td class="memTemplParams" colspan="2">template&lt;typename Array &gt; </td></tr>
<tr class="memitem:a6d3bfa61258ecc1a75733f516ea81097"><td class="memTemplItemLeft" align="right" valign="top">void&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d9/d2a/a00270.php#a6d3bfa61258ecc1a75733f516ea81097">mcd::console::print_r</a> (const Array &amp;a)</td></tr>
<tr class="memdesc:a6d3bfa61258ecc1a75733f516ea81097"><td class="mdescLeft">&#160;</td><td class="mdescRight">Print the content of an array.  <a href="../../d9/d2a/a00270.php#a6d3bfa61258ecc1a75733f516ea81097">More...</a><br /></td></tr>
<tr class="separator:a6d3bfa61258ecc1a75733f516ea81097"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a71d86de24ac44a702d65c29bcb96c686"><td class="memTemplParams" colspan="2">template&lt;typename V &gt; </td></tr>
<tr class="memitem:a71d86de24ac44a702d65c29bcb96c686"><td class="memTemplItemLeft" align="right" valign="top">std::vector&lt; V &gt;&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#a71d86de24ac44a702d65c29bcb96c686">mcd::rewrite</a> (const std::vector&lt; V &gt; &amp;table, unsigned index)</td></tr>
<tr class="memdesc:a71d86de24ac44a702d65c29bcb96c686"><td class="mdescLeft">&#160;</td><td class="mdescRight">Rewrite a vector array without the value at the given index.  <a href="../../db/d12/a00268.php#a71d86de24ac44a702d65c29bcb96c686">More...</a><br /></td></tr>
<tr class="separator:a71d86de24ac44a702d65c29bcb96c686"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ad53bf266a5db5dc112e71ebe3c78946e"><td class="memTemplParams" colspan="2">template&lt;typename T &gt; </td></tr>
<tr class="memitem:ad53bf266a5db5dc112e71ebe3c78946e"><td class="memTemplItemLeft" align="right" valign="top">bool&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#ad53bf266a5db5dc112e71ebe3c78946e">mcd::contains</a> (const std::vector&lt; T &gt; &amp;table, T value)</td></tr>
<tr class="memdesc:ad53bf266a5db5dc112e71ebe3c78946e"><td class="mdescLeft">&#160;</td><td class="mdescRight">Verify if a vector contains or not something.  <a href="../../db/d12/a00268.php#ad53bf266a5db5dc112e71ebe3c78946e">More...</a><br /></td></tr>
<tr class="separator:ad53bf266a5db5dc112e71ebe3c78946e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aaa5354eebbe04b0a9bfc29f7155b8d48"><td class="memTemplParams" colspan="2">template&lt;typename Something &gt; </td></tr>
<tr class="memitem:aaa5354eebbe04b0a9bfc29f7155b8d48"><td class="memTemplItemLeft" align="right" valign="top">void&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d9/d2a/a00270.php#aaa5354eebbe04b0a9bfc29f7155b8d48">mcd::console::print_all</a> (const Something &amp;data, bool change=false)</td></tr>
<tr class="memdesc:aaa5354eebbe04b0a9bfc29f7155b8d48"><td class="mdescLeft">&#160;</td><td class="mdescRight">Prints approximately everything.  <a href="../../d9/d2a/a00270.php#aaa5354eebbe04b0a9bfc29f7155b8d48">More...</a><br /></td></tr>
<tr class="separator:aaa5354eebbe04b0a9bfc29f7155b8d48"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:af1c42a8b9412d2afa3b486c5e629f752"><td class="memItemLeft" align="right" valign="top">size_t&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#af1c42a8b9412d2afa3b486c5e629f752">mcd::array2Dto1D</a> (size_t x, size_t y, size_t maxX)</td></tr>
<tr class="memdesc:af1c42a8b9412d2afa3b486c5e629f752"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert 2D coords to 1D coords.  <a href="../../db/d12/a00268.php#af1c42a8b9412d2afa3b486c5e629f752">More...</a><br /></td></tr>
<tr class="separator:af1c42a8b9412d2afa3b486c5e629f752"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a25ccd89a356e58d7653bd783306d2942"><td class="memItemLeft" align="right" valign="top">std::pair&lt; size_t, size_t &gt;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#a25ccd89a356e58d7653bd783306d2942">mcd::array1Dto2D</a> (size_t index, size_t maxX)</td></tr>
<tr class="memdesc:a25ccd89a356e58d7653bd783306d2942"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert 1D coords to 2D coords.  <a href="../../db/d12/a00268.php#a25ccd89a356e58d7653bd783306d2942">More...</a><br /></td></tr>
<tr class="separator:a25ccd89a356e58d7653bd783306d2942"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a53a33cf86c36584f92495307f8e68a00"><td class="memItemLeft" align="right" valign="top">size_t&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#a53a33cf86c36584f92495307f8e68a00">mcd::array2Dto1D</a> (const Point &amp;pt, size_t maxX)</td></tr>
<tr class="memdesc:a53a33cf86c36584f92495307f8e68a00"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert 2D coords to 1D coords.  <a href="../../db/d12/a00268.php#a53a33cf86c36584f92495307f8e68a00">More...</a><br /></td></tr>
<tr class="separator:a53a33cf86c36584f92495307f8e68a00"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a3aef993a0cb554fa885596a645ad8b0a"><td class="memTemplParams" colspan="2">template&lt;class T &gt; </td></tr>
<tr class="memitem:a3aef993a0cb554fa885596a645ad8b0a"><td class="memTemplItemLeft" align="right" valign="top">void&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d9/d2a/a00270.php#a3aef993a0cb554fa885596a645ad8b0a">mcd::console::vector2DPrint</a> (const vector&lt; vector&lt; T &gt; &gt; values, int autosize=0, std::ostream &amp;os=std::cout)</td></tr>
<tr class="memdesc:a3aef993a0cb554fa885596a645ad8b0a"><td class="mdescLeft">&#160;</td><td class="mdescRight">Print in <em>os</em> the 2D vector as a visual 2D array.  <a href="../../d9/d2a/a00270.php#a3aef993a0cb554fa885596a645ad8b0a">More...</a><br /></td></tr>
<tr class="separator:a3aef993a0cb554fa885596a645ad8b0a"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aa463dccf66e89fdb6a84bb6d6f9ba29d"><td class="memTemplParams" colspan="2">template&lt;class T &gt; </td></tr>
<tr class="memitem:aa463dccf66e89fdb6a84bb6d6f9ba29d"><td class="memTemplItemLeft" align="right" valign="top">void&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d9/d2a/a00270.php#aa463dccf66e89fdb6a84bb6d6f9ba29d">mcd::console::vector2DPrintInverted</a> (const vector&lt; vector&lt; T &gt; &gt; values, int autosize=0, std::ostream &amp;os=std::cout, int shift=0)</td></tr>
<tr class="memdesc:aa463dccf66e89fdb6a84bb6d6f9ba29d"><td class="mdescLeft">&#160;</td><td class="mdescRight">Print in <em>os</em> the 2D vector as a visual 2D array inverting x and y axis.  <a href="../../d9/d2a/a00270.php#aa463dccf66e89fdb6a84bb6d6f9ba29d">More...</a><br /></td></tr>
<tr class="separator:aa463dccf66e89fdb6a84bb6d6f9ba29d"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:af3638871c13207c94b12eb5760dadf6f"><td class="memTemplParams" colspan="2">template&lt;typename T , typename U &gt; </td></tr>
<tr class="memitem:af3638871c13207c94b12eb5760dadf6f"><td class="memTemplItemLeft" align="right" valign="top">std::set&lt; std::pair&lt; T, U &gt;, std::function&lt; bool(std::pair&lt; T, U &gt;, std::pair&lt; T, U &gt;) &gt; &gt;&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#af3638871c13207c94b12eb5760dadf6f">mcd::sortMapValuesAsc</a> (std::map&lt; T, U &gt; array)</td></tr>
<tr class="separator:af3638871c13207c94b12eb5760dadf6f"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a5ed3b7735514675ef4f03b28d5b7b4a3"><td class="memTemplParams" colspan="2">template&lt;typename T , typename U &gt; </td></tr>
<tr class="memitem:a5ed3b7735514675ef4f03b28d5b7b4a3"><td class="memTemplItemLeft" align="right" valign="top">std::set&lt; std::pair&lt; T, U &gt;, std::function&lt; bool(std::pair&lt; T, U &gt;, std::pair&lt; T, U &gt;) &gt; &gt;&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#a5ed3b7735514675ef4f03b28d5b7b4a3">mcd::sortMapValuesDesc</a> (std::map&lt; T, U &gt; array)</td></tr>
<tr class="separator:a5ed3b7735514675ef4f03b28d5b7b4a3"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><dl class="section author"><dt>Author</dt><dd>Mathias CABIOCH-DELALANDE </dd></dl>
<dl class="section date"><dt>Date</dt><dd>Created : April, 24 2019 </dd>
<dd>
Last modification : November, 18 2020 </dd></dl>
</div></div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_1788504ec76a4dda5464562bc560d0b5.php">C++Tests</a></li><li class="navelem"><a class="el" href="../../dir_2e741febc7df97747a68d36c1b3be5f0.php">C++</a></li><li class="navelem"><a class="el" href="../../dir_220287e732b97f08f66e5f221c69df74.php">inc</a></li><li class="navelem"><a class="el" href="../../dir_75b0389167f46f79a101ef8c4434cec4.php">C++</a></li><li class="navelem"><a class="el" href="../../da/d45/a00011.php">array.hpp</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
