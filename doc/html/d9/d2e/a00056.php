<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.20"/>
		<title>C++: Chromosome.hpp File Reference</title>
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
$(document).ready(function(){initNavTree('d9/d2e/a00056.php','../../'); initResizable(); });
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
<a href="#typedef-members">Typedefs</a>  </div>
  <div class="headertitle">
<div class="title">Chromosome.hpp File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><code>#include &quot;<a class="el" href="../../df/d98/a00107.php">Gene.hpp</a>&quot;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for Chromosome.hpp:</div>
<div class="dyncontent">
<div class="center"><img src="../../d1/d22/a00057.png" border="0" usemap="#aChromosome_8hpp" alt=""/></div>
<map name="Chromosome_8hpp" id="Chromosome_8hpp">
<area shape="rect" title=" " alt="" coords="762,5,887,32"/>
<area shape="rect" href="../../df/d98/a00107.php" title=" " alt="" coords="785,80,864,107"/>
<area shape="rect" href="../../d6/d2d/a00047.php" title=" " alt="" coords="781,155,868,181"/>
<area shape="rect" href="../../d4/d51/a00017.php" title=" " alt="" coords="645,229,730,256"/>
<area shape="rect" href="../../df/dc8/a00122.php" title=" " alt="" coords="787,229,862,256"/>
<area shape="rect" href="../../d1/d09/a00077.php" title=" " alt="" coords="916,304,1013,331"/>
<area shape="rect" href="../../db/db2/a00020.php" title=" " alt="" coords="574,304,734,331"/>
<area shape="rect" href="../../da/d2a/a00086.php" title=" " alt="" coords="780,379,869,405"/>
<area shape="rect" href="../../d6/d22/a00245.php" title=" " alt="" coords="533,453,612,480"/>
<area shape="rect" href="../../d4/dee/a00008.php" title=" " alt="" coords="637,453,711,480"/>
<area shape="rect" href="../../d3/d8b/a00059.php" title=" " alt="" coords="655,603,736,629"/>
<area shape="rect" href="../../da/d24/a00068.php" title=" " alt="" coords="683,677,809,704"/>
<area shape="rect" href="../../d2/d1f/a00083.php" title=" " alt="" coords="798,752,902,779"/>
<area shape="rect" href="../../df/d6a/a00119.php" title=" " alt="" coords="887,528,986,555"/>
<area shape="rect" href="../../d5/db1/a00140.php" title=" " alt="" coords="1018,453,1090,480"/>
<area shape="rect" href="../../dd/dc1/a00212.php" title=" " alt="" coords="1215,603,1330,629"/>
<area shape="rect" href="../../d7/d40/a00236.php" title=" " alt="" coords="536,528,647,555"/>
<area shape="rect" href="../../d4/d3e/a00116.php" title=" " alt="" coords="821,901,916,928"/>
<area shape="rect" href="../../dc/de6/a00167.php" title=" " alt="" coords="341,976,463,1003"/>
<area shape="rect" href="../../d5/dcb/a00170.php" title=" " alt="" coords="488,976,623,1003"/>
<area shape="rect" href="../../d2/dc8/a00242.php" title=" " alt="" coords="647,976,776,1003"/>
<area shape="rect" title=" " alt="" coords="801,976,862,1003"/>
<area shape="rect" title=" " alt="" coords="887,976,925,1003"/>
<area shape="rect" title=" " alt="" coords="949,976,1012,1003"/>
<area shape="rect" title=" " alt="" coords="1037,976,1090,1003"/>
<area shape="rect" title=" " alt="" coords="1114,976,1165,1003"/>
<area shape="rect" href="../../d9/d01/a00227.php" title="Used to replace strptime function when compiling for Windows." alt="" coords="625,1051,705,1077"/>
<area shape="rect" title=" " alt="" coords="729,1051,784,1077"/>
<area shape="rect" href="../../d5/ddf/a00224.php" title=" " alt="" coords="610,1125,719,1152"/>
<area shape="rect" title=" " alt="" coords="494,1200,550,1227"/>
<area shape="rect" href="../../d3/dd5/a00215.php" title=" " alt="" coords="574,1200,651,1227"/>
<area shape="rect" href="../../d2/df5/a00137.php" title=" " alt="" coords="675,1200,758,1227"/>
<area shape="rect" href="../../d1/da8/a00230.php" title=" " alt="" coords="782,1200,873,1227"/>
<area shape="rect" title=" " alt="" coords="580,1275,645,1301"/>
<area shape="rect" href="../../d9/d77/a00095.php" title=" " alt="" coords="787,1275,867,1301"/>
<area shape="rect" href="../../de/de1/a00065.php" title=" " alt="" coords="728,1349,820,1376"/>
<area shape="rect" href="../../d4/d3a/a00101.php" title=" " alt="" coords="844,1349,915,1376"/>
<area shape="rect" href="../../db/db6/a00074.php" title=" " alt="" coords="730,1424,821,1451"/>
<area shape="rect" title=" " alt="" coords="683,1499,766,1525"/>
<area shape="rect" href="../../da/d45/a00011.php" title=" " alt="" coords="790,1499,865,1525"/>
<area shape="rect" href="../../dc/dee/a00053.php" title=" " alt="" coords="841,1573,923,1600"/>
<area shape="rect" href="../../dc/d9a/a00218.php" title=" " alt="" coords="729,1573,816,1600"/>
<area shape="rect" href="../../df/d03/a00062.php" title=" " alt="" coords="1034,1648,1125,1675"/>
<area shape="rect" href="../../d9/d39/a00257.php" title=" " alt="" coords="731,1648,814,1675"/>
<area shape="rect" title=" " alt="" coords="845,1648,906,1675"/>
<area shape="rect" title=" " alt="" coords="930,1648,999,1675"/>
<area shape="rect" href="../../d9/db6/a00146.php" title=" " alt="" coords="1043,1723,1126,1749"/>
<area shape="rect" href="../../d0/dc2/a00104.php" title=" " alt="" coords="1180,1797,1275,1824"/>
<area shape="rect" href="../../d6/d7d/a00161.php" title=" " alt="" coords="1014,1797,1155,1824"/>
<area shape="rect" href="../../d7/dce/a00143.php" title=" " alt="" coords="1065,1872,1147,1899"/>
<area shape="rect" title=" " alt="" coords="1194,1872,1261,1899"/>
<area shape="rect" href="../../d8/d41/a00038.php" title=" " alt="" coords="1062,1947,1145,1973"/>
<area shape="rect" href="../../d5/df1/a00206.php" title=" " alt="" coords="701,2021,794,2048"/>
<area shape="rect" href="../../d3/d1a/a00251.php" title=" " alt="" coords="615,2096,693,2123"/>
<area shape="rect" title=" " alt="" coords="718,2096,777,2123"/>
<area shape="rect" title=" " alt="" coords="801,2096,859,2123"/>
<area shape="rect" href="../../d3/d52/a00023.php" title=" " alt="" coords="371,2171,438,2197"/>
<area shape="rect" href="../../d3/de5/a00209.php" title=" " alt="" coords="483,2171,593,2197"/>
<area shape="rect" href="../../dd/dd7/a00248.php" title=" " alt="" coords="617,2171,691,2197"/>
<area shape="rect" href="../../d7/d03/a00254.php" title=" " alt="" coords="715,2171,849,2197"/>
<area shape="rect" title=" " alt="" coords="873,2171,941,2197"/>
<area shape="rect" href="../../d7/d06/a00131.php" title=" " alt="" coords="618,2245,730,2272"/>
<area shape="rect" href="../../d6/d5b/a00026.php" title=" " alt="" coords="451,2245,593,2272"/>
<area shape="rect" href="../../d5/d16/a00029.php" title=" " alt="" coords="5,2245,145,2272"/>
<area shape="rect" href="../../dc/d87/a00032.php" title=" " alt="" coords="170,2245,279,2272"/>
<area shape="rect" href="../../d4/d8c/a00035.php" title=" " alt="" coords="303,2245,426,2272"/>
<area shape="rect" href="../../d5/de9/a00176.php" title=" " alt="" coords="614,2320,734,2347"/>
<area shape="rect" title=" " alt="" coords="583,2395,651,2421"/>
<area shape="rect" href="../../de/d76/a00134.php" title=" " alt="" coords="675,2395,791,2421"/>
<area shape="rect" title=" " alt="" coords="246,2469,321,2496"/>
<area shape="rect" title=" " alt="" coords="345,2469,403,2496"/>
<area shape="rect" title=" " alt="" coords="428,2469,507,2496"/>
<area shape="rect" title=" " alt="" coords="531,2469,603,2496"/>
<area shape="rect" title=" " alt="" coords="628,2469,675,2496"/>
<area shape="rect" title=" " alt="" coords="699,2469,767,2496"/>
<area shape="rect" title=" " alt="" coords="791,2469,845,2496"/>
<area shape="rect" title=" " alt="" coords="870,2469,939,2496"/>
<area shape="rect" title=" " alt="" coords="964,2469,1019,2496"/>
<area shape="rect" title=" " alt="" coords="1043,2469,1097,2496"/>
<area shape="rect" title=" " alt="" coords="1121,2469,1179,2496"/>
<area shape="rect" href="../../d1/d44/a00098.php" title=" " alt="" coords="937,1872,1040,1899"/>
<area shape="rect" title=" " alt="" coords="955,1947,1033,1973"/>
<area shape="rect" title=" " alt="" coords="852,1947,931,1973"/>
<area shape="rect" href="../../d2/de7/a00014.php" title=" " alt="" coords="679,1723,811,1749"/>
<area shape="rect" title=" " alt="" coords="449,1797,560,1824"/>
<area shape="rect" title=" " alt="" coords="585,1797,689,1824"/>
<area shape="rect" title=" " alt="" coords="713,1797,763,1824"/>
<area shape="rect" title=" " alt="" coords="788,1797,845,1824"/>
<area shape="rect" title=" " alt="" coords="870,1797,910,1824"/>
<area shape="rect" title=" " alt="" coords="935,1797,989,1824"/>
<area shape="rect" title=" " alt="" coords="846,1424,913,1451"/>
<area shape="rect" href="../../da/dec/a00080.php" title=" " alt="" coords="831,827,906,853"/>
<area shape="rect" href="../../d0/d27/a00239.php" title=" " alt="" coords="731,827,807,853"/>
<area shape="rect" href="../../de/df3/a00185.php" title=" " alt="" coords="1011,528,1185,555"/>
<area shape="rect" href="../../da/d15/a00188.php" title=" " alt="" coords="1019,603,1177,629"/>
<area shape="rect" href="../../d7/d25/a00182.php" title=" " alt="" coords="1042,677,1154,704"/>
<area shape="rect" href="../../dc/d57/a00194.php" title=" " alt="" coords="1018,752,1178,779"/>
<area shape="rect" href="../../db/dd9/a00179.php" title=" " alt="" coords="1175,827,1250,853"/>
<area shape="rect" href="../../d9/dd0/a00191.php" title=" " alt="" coords="981,827,1151,853"/>
<area shape="rect" href="../../dc/dfe/a00125.php" title=" " alt="" coords="758,304,891,331"/>
</map>
</div>
</div><div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="../../d7/df7/a00058.png" border="0" usemap="#aChromosome_8hppdep" alt=""/></div>
<map name="Chromosome_8hppdep" id="Chromosome_8hppdep">
<area shape="rect" title=" " alt="" coords="284,5,409,32"/>
<area shape="rect" href="../../d5/de0/a00050.php" title=" " alt="" coords="311,80,382,107"/>
<area shape="rect" href="../../dd/d32/a00041.php" title=" " alt="" coords="310,155,383,181"/>
<area shape="rect" href="../../d0/d89/a00071.php" title=" " alt="" coords="243,229,357,256"/>
<area shape="rect" href="../../d3/d00/a00113.php" title=" " alt="" coords="341,603,437,629"/>
<area shape="rect" href="../../d1/dc1/a00092.php" title=" " alt="" coords="134,304,213,331"/>
<area shape="rect" href="../../d7/d3f/a00173.php" title=" " alt="" coords="265,304,351,331"/>
<area shape="rect" href="../../d4/d81/a00110.php" title=" " alt="" coords="32,379,120,405"/>
<area shape="rect" href="../../dd/dd7/a00260.php" title=" " alt="" coords="128,453,219,480"/>
<area shape="rect" href="../../d7/d46/a00002.php" title=" " alt="" coords="6,453,93,480"/>
<area shape="rect" href="../../dd/dad/a00005.php" title=" " alt="" coords="5,528,72,555"/>
<area shape="rect" href="../../db/dab/a00089.php" title=" " alt="" coords="223,603,313,629"/>
<area shape="rect" href="../../de/d79/a00203.php" title=" " alt="" coords="194,677,345,704"/>
<area shape="rect" href="../../d3/db1/a00200.php" title=" " alt="" coords="284,752,367,779"/>
<area shape="rect" href="../../d5/df9/a00044.php" title=" " alt="" coords="267,827,384,853"/>
<area shape="rect" href="../../db/ddf/a00164.php" title=" " alt="" coords="97,528,205,555"/>
<area shape="rect" href="../../de/db1/a00197.php" title=" " alt="" coords="229,528,307,555"/>
<area shape="rect" href="../../dd/d52/a00221.php" title=" " alt="" coords="271,379,353,405"/>
</map>
</div>
</div><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Classes</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d1/d34/a01211.php">mcd::genetic::Chromosome</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A double group of genes.  <a href="../../d1/d34/a01211.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="namespaces"></a>
Namespaces</h2></td></tr>
<tr class="memitem:db/d12/a00268"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php">mcd</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:dd/d86/a00271"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dd/d86/a00271.php">mcd::genetic</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="typedef-members"></a>
Typedefs</h2></td></tr>
<tr class="memitem:aee886c080102ea9c98ab235a2edd614e"><td class="memItemLeft" align="right" valign="top">typedef std::vector&lt; Chromosome &gt;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dd/d86/a00271.php#aee886c080102ea9c98ab235a2edd614e">mcd::genetic::Chromosomes</a></td></tr>
<tr class="separator:aee886c080102ea9c98ab235a2edd614e"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><dl class="section author"><dt>Author</dt><dd>Mathias CABIOCH-DELALANDE </dd></dl>
<dl class="section date"><dt>Date</dt><dd>Created : Monday January, 14 2019 21:55:17 </dd>
<dd>
Last modification : November, 18 2020 </dd></dl>
</div></div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_1788504ec76a4dda5464562bc560d0b5.php">C++Tests</a></li><li class="navelem"><a class="el" href="../../dir_2e741febc7df97747a68d36c1b3be5f0.php">C++</a></li><li class="navelem"><a class="el" href="../../dir_220287e732b97f08f66e5f221c69df74.php">inc</a></li><li class="navelem"><a class="el" href="../../dir_75b0389167f46f79a101ef8c4434cec4.php">C++</a></li><li class="navelem"><a class="el" href="../../d9/d2e/a00056.php">Chromosome.hpp</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
