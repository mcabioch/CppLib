<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.20"/>
		<title>C++: check.hpp File Reference</title>
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
$(document).ready(function(){initNavTree('dc/dee/a00053.php','../../'); initResizable(); });
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
<a href="#define-members">Macros</a> &#124;
<a href="#typedef-members">Typedefs</a> &#124;
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<div class="title">check.hpp File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><code>#include &quot;<a class="el" href="../../df/d03/a00062.php">collides.hpp</a>&quot;</code><br />
<code>#include &quot;<a class="el" href="../../d7/d03/a00254.php">vector.hpp</a>&quot;</code><br />
<code>#include &lt;chrono&gt;</code><br />
<code>#include &lt;memory&gt;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for check.hpp:</div>
<div class="dyncontent">
<div class="center"><img src="../../d1/dea/a00054.png" border="0" usemap="#acheck_8hpp" alt=""/></div>
<map name="check_8hpp" id="check_8hpp">
<area shape="rect" title=" " alt="" coords="1026,5,1109,32"/>
<area shape="rect" href="../../df/d03/a00062.php" title=" " alt="" coords="858,80,949,107"/>
<area shape="rect" href="../../d7/d03/a00254.php" title=" " alt="" coords="978,80,1061,107"/>
<area shape="rect" title=" " alt="" coords="1085,80,1146,107"/>
<area shape="rect" title=" " alt="" coords="1170,80,1239,107"/>
<area shape="rect" href="../../d9/db6/a00146.php" title=" " alt="" coords="851,155,934,181"/>
<area shape="rect" href="../../d0/dc2/a00104.php" title=" " alt="" coords="705,229,800,256"/>
<area shape="rect" href="../../d7/dce/a00143.php" title=" " alt="" coords="627,304,710,331"/>
<area shape="rect" title=" " alt="" coords="734,304,801,331"/>
<area shape="rect" href="../../d8/d41/a00038.php" title=" " alt="" coords="673,379,755,405"/>
<area shape="rect" href="../../de/d79/a00203.php" title=" " alt="" coords="706,453,799,480"/>
<area shape="rect" href="../../dd/dd7/a00248.php" title=" " alt="" coords="620,528,699,555"/>
<area shape="rect" title=" " alt="" coords="723,528,782,555"/>
<area shape="rect" title=" " alt="" coords="806,528,865,555"/>
<area shape="rect" href="../../d3/d52/a00023.php" title=" " alt="" coords="383,603,450,629"/>
<area shape="rect" href="../../d5/df1/a00206.php" title=" " alt="" coords="488,603,599,629"/>
<area shape="rect" href="../../d6/d22/a00245.php" title=" " alt="" coords="623,603,696,629"/>
<area shape="rect" href="../../d3/d1a/a00251.php" title=" " alt="" coords="721,603,854,629"/>
<area shape="rect" title=" " alt="" coords="879,603,947,629"/>
<area shape="rect" href="../../d7/d06/a00131.php" title=" " alt="" coords="617,677,729,704"/>
<area shape="rect" href="../../d6/d5b/a00026.php" title=" " alt="" coords="5,677,148,704"/>
<area shape="rect" href="../../d5/d16/a00029.php" title=" " alt="" coords="172,677,312,704"/>
<area shape="rect" href="../../dc/d87/a00032.php" title=" " alt="" coords="337,677,446,704"/>
<area shape="rect" href="../../d4/d8c/a00035.php" title=" " alt="" coords="470,677,593,704"/>
<area shape="rect" href="../../d7/d3f/a00173.php" title=" " alt="" coords="613,752,733,779"/>
<area shape="rect" title=" " alt="" coords="581,827,649,853"/>
<area shape="rect" href="../../de/d76/a00134.php" title=" " alt="" coords="673,827,789,853"/>
<area shape="rect" title=" " alt="" coords="245,901,319,928"/>
<area shape="rect" title=" " alt="" coords="343,901,402,928"/>
<area shape="rect" title=" " alt="" coords="427,901,505,928"/>
<area shape="rect" title=" " alt="" coords="530,901,602,928"/>
<area shape="rect" title=" " alt="" coords="627,901,673,928"/>
<area shape="rect" title=" " alt="" coords="697,901,765,928"/>
<area shape="rect" title=" " alt="" coords="789,901,844,928"/>
<area shape="rect" title=" " alt="" coords="869,901,938,928"/>
<area shape="rect" title=" " alt="" coords="963,901,1017,928"/>
<area shape="rect" title=" " alt="" coords="1042,901,1095,928"/>
<area shape="rect" title=" " alt="" coords="1119,901,1178,928"/>
<area shape="rect" href="../../d2/de7/a00014.php" title=" " alt="" coords="1048,155,1180,181"/>
<area shape="rect" title=" " alt="" coords="876,229,987,256"/>
<area shape="rect" title=" " alt="" coords="1011,229,1115,256"/>
<area shape="rect" title=" " alt="" coords="1139,229,1190,256"/>
<area shape="rect" title=" " alt="" coords="1215,229,1272,256"/>
<area shape="rect" title=" " alt="" coords="1297,229,1337,256"/>
<area shape="rect" title=" " alt="" coords="1361,229,1416,256"/>
</map>
</div>
</div><div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="../../d4/d6d/a00055.png" border="0" usemap="#acheck_8hppdep" alt=""/></div>
<map name="check_8hppdep" id="check_8hppdep">
<area shape="rect" title=" " alt="" coords="334,5,417,32"/>
<area shape="rect" href="../../da/d45/a00011.php" title=" " alt="" coords="338,80,413,107"/>
<area shape="rect" href="../../db/db6/a00074.php" title=" " alt="" coords="330,155,421,181"/>
<area shape="rect" href="../../de/de1/a00065.php" title=" " alt="" coords="277,229,369,256"/>
<area shape="rect" href="../../d4/d3a/a00101.php" title=" " alt="" coords="393,229,464,256"/>
<area shape="rect" href="../../d9/d77/a00095.php" title=" " alt="" coords="335,304,415,331"/>
<area shape="rect" href="../../d9/d01/a00227.php" title=" " alt="" coords="330,379,421,405"/>
<area shape="rect" href="../../dd/d52/a00221.php" title=" " alt="" coords="336,453,415,480"/>
<area shape="rect" href="../../d5/ddf/a00224.php" title="Used to replace strptime function when compiling for Windows." alt="" coords="335,528,415,555"/>
<area shape="rect" href="../../d0/d27/a00239.php" title=" " alt="" coords="311,603,440,629"/>
<area shape="rect" href="../../d4/d3e/a00116.php" title=" " alt="" coords="328,677,423,704"/>
<area shape="rect" href="../../d3/d8b/a00059.php" title=" " alt="" coords="5,901,87,928"/>
<area shape="rect" href="../../da/d24/a00068.php" title=" " alt="" coords="120,976,247,1003"/>
<area shape="rect" href="../../da/dec/a00080.php" title=" " alt="" coords="162,752,237,779"/>
<area shape="rect" href="../../df/d6a/a00119.php" title=" " alt="" coords="318,827,417,853"/>
<area shape="rect" href="../../d5/de9/a00176.php" title=" " alt="" coords="413,752,487,779"/>
<area shape="rect" href="../../da/d15/a00188.php" title=" " alt="" coords="511,752,682,779"/>
<area shape="rect" href="../../d3/de5/a00209.php" title=" " alt="" coords="586,901,701,928"/>
<area shape="rect" href="../../d6/de1/a00233.php" title=" " alt="" coords="715,1051,825,1077"/>
<area shape="rect" href="../../d7/d40/a00236.php" title=" " alt="" coords="261,752,337,779"/>
<area shape="rect" href="../../da/d2a/a00086.php" title=" " alt="" coords="369,1200,459,1227"/>
<area shape="rect" href="../../db/db2/a00020.php" title=" " alt="" coords="217,1275,377,1301"/>
<area shape="rect" href="../../d1/d09/a00077.php" title=" " alt="" coords="364,1349,461,1376"/>
<area shape="rect" href="../../dc/dfe/a00125.php" title=" " alt="" coords="454,1275,587,1301"/>
<area shape="rect" href="../../d4/d51/a00017.php" title=" " alt="" coords="254,1349,339,1376"/>
<area shape="rect" href="../../d6/d2d/a00047.php" title=" " alt="" coords="369,1424,456,1451"/>
<area shape="rect" href="../../df/d98/a00107.php" title=" " alt="" coords="271,1499,349,1525"/>
<area shape="rect" href="../../d1/d88/a00128.php" title=" " alt="" coords="370,1573,455,1600"/>
<area shape="rect" href="../../d1/da8/a00230.php" title=" " alt="" coords="453,1648,525,1675"/>
<area shape="rect" href="../../d9/d2e/a00056.php" title=" " alt="" coords="221,1573,346,1600"/>
<area shape="rect" href="../../d5/de0/a00050.php" title=" " alt="" coords="276,1648,347,1675"/>
<area shape="rect" href="../../dd/d32/a00041.php" title=" " alt="" coords="376,1723,449,1749"/>
<area shape="rect" href="../../d0/d89/a00071.php" title=" " alt="" coords="309,1797,423,1824"/>
<area shape="rect" href="../../d3/d00/a00113.php" title=" " alt="" coords="407,2171,503,2197"/>
<area shape="rect" href="../../d1/dc1/a00092.php" title=" " alt="" coords="215,1872,293,1899"/>
<area shape="rect" href="../../d5/dcb/a00170.php" title=" " alt="" coords="331,1872,417,1899"/>
<area shape="rect" href="../../d4/d81/a00110.php" title=" " alt="" coords="99,1947,187,1973"/>
<area shape="rect" href="../../d9/d39/a00257.php" title=" " alt="" coords="209,2021,299,2048"/>
<area shape="rect" href="../../d7/d46/a00002.php" title=" " alt="" coords="69,2021,156,2048"/>
<area shape="rect" href="../../dd/dad/a00005.php" title=" " alt="" coords="71,2096,138,2123"/>
<area shape="rect" href="../../db/dab/a00089.php" title=" " alt="" coords="289,2171,379,2197"/>
<area shape="rect" href="../../d3/db1/a00200.php" title=" " alt="" coords="260,2245,411,2272"/>
<area shape="rect" href="../../de/db1/a00197.php" title=" " alt="" coords="350,2320,433,2347"/>
<area shape="rect" href="../../d5/df9/a00044.php" title=" " alt="" coords="333,2395,450,2421"/>
<area shape="rect" href="../../d6/d7d/a00161.php" title=" " alt="" coords="163,2096,271,2123"/>
<area shape="rect" href="../../dc/d57/a00194.php" title=" " alt="" coords="295,2096,373,2123"/>
<area shape="rect" href="../../dc/d9a/a00218.php" title=" " alt="" coords="341,1947,423,1973"/>
<area shape="rect" href="../../df/dc8/a00122.php" title=" " alt="" coords="486,1349,561,1376"/>
<area shape="rect" href="../../d2/d1f/a00083.php" title=" " alt="" coords="190,827,294,853"/>
<area shape="rect" href="../../d9/dd0/a00191.php" title=" " alt="" coords="441,827,601,853"/>
<area shape="rect" href="../../db/dd9/a00179.php" title=" " alt="" coords="442,901,554,928"/>
<area shape="rect" href="../../de/df3/a00185.php" title=" " alt="" coords="403,976,561,1003"/>
<area shape="rect" href="../../d7/d25/a00182.php" title=" " alt="" coords="389,1051,564,1077"/>
<area shape="rect" href="../../d5/db1/a00140.php" title=" " alt="" coords="415,1125,487,1152"/>
<area shape="rect" href="../../d4/dee/a00008.php" title=" " alt="" coords="639,1125,714,1152"/>
<area shape="rect" href="../../d2/dc8/a00242.php" title=" " alt="" coords="739,1125,817,1152"/>
</map>
</div>
</div><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Classes</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../de/df6/a01141.php">mcd::Check::is_vector&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A template class to test if T is a vector.  <a href="../../de/df6/a01141.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d9/d65/a01145.php">mcd::Check::is_array&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A template class to test if T is an array, a vector or a map.  <a href="../../d9/d65/a01145.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d8/d02/a01149.php">mcd::Check::is_pair&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A template class to test if T is a std::pair.  <a href="../../d8/d02/a01149.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dc/d06/a01153.php">mcd::Check::is_trio&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A template class to test if T is a std::pair.  <a href="../../dc/d06/a01153.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d9/d25/a01157.php">mcd::Check::is_quatuor&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A template class to test if T is a std::pair.  <a href="../../d9/d25/a01157.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dc/d81/a01161.php">mcd::Check::is_string&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A template class to test if T is a std::string.  <a href="../../dc/d81/a01161.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d8/d92/a01165.php">mcd::Check::is_smatch&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A template class to test if T is a string regex match.  <a href="../../d8/d92/a01165.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d7/daf/a01169.php">mcd::Check::is_duration&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A template class to test if T is a chrono::duration.  <a href="../../d7/daf/a01169.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d7/d0c/a01173.php">mcd::Check::has_size_method&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">Verify if an object has a size method.  <a href="../../d7/d0c/a01173.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dc/d98/a01177.php">mcd::Check::has_ostream_operator&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A template class to test if T has an ostream operator.  <a href="../../dc/d98/a01177.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d3/dd3/a01185.php">mcd::Check::has_istream_operator&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A template class to test if T has an istream operator.  <a href="../../d3/dd3/a01185.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dd/d43/a01193.php">mcd::Check::is_printable&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A template class to test if T is printable.  <a href="../../dd/d43/a01193.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d4/d10/a01197.php">mcd::Check::is_object&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A template class to test if T is an unknown object.  <a href="../../d4/d10/a01197.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../de/df7/a01201.php">mcd::Check::is_special_struct&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A template class to test if T is a special struct.  <a href="../../de/df7/a01201.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="namespaces"></a>
Namespaces</h2></td></tr>
<tr class="memitem:da/d53/a00265"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../da/d53/a00265.php">mcd</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:d1/dd4/a00267"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d1/dd4/a00267.php">mcd::this_thread</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:db/d12/a00268"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php">mcd::Check</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="define-members"></a>
Macros</h2></td></tr>
<tr class="memitem:a92713af8c651ed158031ed7d3fd15977"><td class="memItemLeft" align="right" valign="top">#define&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dc/dee/a00053.php#a92713af8c651ed158031ed7d3fd15977">has_method</a>(meth,  func)</td></tr>
<tr class="memdesc:a92713af8c651ed158031ed7d3fd15977"><td class="mdescLeft">&#160;</td><td class="mdescRight">Verify if an object has the given method.  <a href="../../dc/dee/a00053.php#a92713af8c651ed158031ed7d3fd15977">More...</a><br /></td></tr>
<tr class="separator:a92713af8c651ed158031ed7d3fd15977"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="typedef-members"></a>
Typedefs</h2></td></tr>
<tr class="memitem:aba609827ae566c40802bf828ab5a5a3c"><td class="memItemLeft" align="right" valign="top">using&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../da/d53/a00265.php#aba609827ae566c40802bf828ab5a5a3c">mcd::pair_str</a> = std::pair&lt; std::string, std::string &gt;</td></tr>
<tr class="memdesc:aba609827ae566c40802bf828ab5a5a3c"><td class="mdescLeft">&#160;</td><td class="mdescRight">Alias.  <a href="../../da/d53/a00265.php#aba609827ae566c40802bf828ab5a5a3c">More...</a><br /></td></tr>
<tr class="separator:aba609827ae566c40802bf828ab5a5a3c"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:a3a711ec2f858ee16756d8619224624ee"><td class="memTemplParams" colspan="2">template&lt;typename TimeDuration &gt; </td></tr>
<tr class="memitem:a3a711ec2f858ee16756d8619224624ee"><td class="memTemplItemLeft" align="right" valign="top">void&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d1/dd4/a00267.php#a3a711ec2f858ee16756d8619224624ee">mcd::this_thread::yield</a> () noexcept</td></tr>
<tr class="separator:a3a711ec2f858ee16756d8619224624ee"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aaa5ef673c6390db3486b12d03a64f8f5"><td class="memTemplParams" colspan="2">template&lt;class Rep , class Period &gt; </td></tr>
<tr class="memitem:aaa5ef673c6390db3486b12d03a64f8f5"><td class="memTemplItemLeft" align="right" valign="top">void&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d1/dd4/a00267.php#aaa5ef673c6390db3486b12d03a64f8f5">mcd::this_thread::sleep_for</a> (const std::chrono::duration&lt; Rep, Period &gt; &amp;rel_time)</td></tr>
<tr class="separator:aaa5ef673c6390db3486b12d03a64f8f5"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a13e84a38884d860a4854bdd4a031d218"><td class="memTemplParams" colspan="2">template&lt;typename T &gt; </td></tr>
<tr class="memitem:a13e84a38884d860a4854bdd4a031d218"><td class="memTemplItemLeft" align="right" valign="top">bool&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#a13e84a38884d860a4854bdd4a031d218">mcd::Check::isPrintable</a> (const T &amp;)</td></tr>
<tr class="memdesc:a13e84a38884d860a4854bdd4a031d218"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return true if a type has an ostream operator(&lt;&lt;)  <a href="../../db/d12/a00268.php#a13e84a38884d860a4854bdd4a031d218">More...</a><br /></td></tr>
<tr class="separator:a13e84a38884d860a4854bdd4a031d218"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ab0b2e96bd3f31d823dad478c5f54abf1"><td class="memTemplParams" colspan="2">template&lt;typename T &gt; </td></tr>
<tr class="memitem:ab0b2e96bd3f31d823dad478c5f54abf1"><td class="memTemplItemLeft" align="right" valign="top">void&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#ab0b2e96bd3f31d823dad478c5f54abf1">mcd::Check::printable</a> (const T &amp;in)</td></tr>
<tr class="memdesc:ab0b2e96bd3f31d823dad478c5f54abf1"><td class="mdescLeft">&#160;</td><td class="mdescRight">A function that say if a type has an ostream operator(&lt;&lt;)  <a href="../../db/d12/a00268.php#ab0b2e96bd3f31d823dad478c5f54abf1">More...</a><br /></td></tr>
<tr class="separator:ab0b2e96bd3f31d823dad478c5f54abf1"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><dl class="section author"><dt>Author</dt><dd>Mathias CABIOCH-DELALANDE </dd></dl>
<dl class="section date"><dt>Date</dt><dd>Last modification : November, 12 2019 </dd></dl>
</div><h2 class="groupheader">Macro Definition Documentation</h2>
<a id="a92713af8c651ed158031ed7d3fd15977"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a92713af8c651ed158031ed7d3fd15977">&#9670;&nbsp;</a></span>has_method</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">#define has_method</td>
          <td>(</td>
          <td class="paramtype">&#160;</td>
          <td class="paramname">meth, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">&#160;</td>
          <td class="paramname">func&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">
<b>Value:</b><div class="fragment"><div class="line">    <span class="keyword">template</span>&lt; <span class="keyword">typename</span> T &gt;                                                                         \</div>
<div class="line">    class func {                                                                                   \</div>
<div class="line">        private:                                                                                   \</div>
<div class="line">        typedef std::true_type  yes;                                                               \</div>
<div class="line">        typedef std::false_type no;                                                                \</div>
<div class="line">                                                                                                   \</div>
<div class="line">        template&lt; typename U &gt;                                                                     \</div>
<div class="line">        static <span class="keyword">auto</span> test(<span class="keywordtype">int</span>) -&gt; decltype(std::declval&lt; U &gt;().meth() == 1, yes());                 \</div>
<div class="line">        template&lt; typename &gt;                                                                       \</div>
<div class="line">        static no test(...);                                                                       \</div>
<div class="line">                                                                                                   \</div>
<div class="line">        public:                                                                                    \</div>
<div class="line">        func() {}                                                                                  \</div>
<div class="line">        virtual ~func() {}                                                                         \</div>
<div class="line">                                                                                                   \</div>
<div class="line">        static constexpr <span class="keywordtype">bool</span> value = std::is_same&lt; decltype(test&lt; T &gt;(0)), yes &gt;::value;          \</div>
<div class="line">    }</div>
</div><!-- fragment -->
<p>Verify if an object has the given method. </p>

</div>
</div>
</div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_1788504ec76a4dda5464562bc560d0b5.php">C++Tests</a></li><li class="navelem"><a class="el" href="../../dir_2e741febc7df97747a68d36c1b3be5f0.php">C++</a></li><li class="navelem"><a class="el" href="../../dir_220287e732b97f08f66e5f221c69df74.php">inc</a></li><li class="navelem"><a class="el" href="../../dir_75b0389167f46f79a101ef8c4434cec4.php">C++</a></li><li class="navelem"><a class="el" href="../../dc/dee/a00053.php">check.hpp</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
