<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.20"/>
		<title>C++: Map.hpp File Reference</title>
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
									&#160;<span id="projectnumber">1.6.1.1</span>
								</div>
								<div id="projectbrief">My own C++ features</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<?php
				$text = "Generated on Fri Nov 13 2020 12:37:29 for C++ by";
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
$(document).ready(function(){initNavTree('d5/db1/a00140.php','../../'); initResizable(); });
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
<a href="#typedef-members">Typedefs</a> &#124;
<a href="#enum-members">Enumerations</a>  </div>
  <div class="headertitle">
<div class="title">Map.hpp File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><code>#include &quot;<a class="el" href="../../de/df3/a00185.php">PathfindingAlgorithms.hpp</a>&quot;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for Map.hpp:</div>
<div class="dyncontent">
<div class="center"><img src="../../d5/d4e/a00141.png" border="0" usemap="#aMap_8hpp" alt=""/></div>
<map name="Map_8hpp" id="Map_8hpp">
<area shape="rect" title=" " alt="" coords="830,5,902,32"/>
<area shape="rect" href="../../de/df3/a00185.php" title=" " alt="" coords="779,80,953,107"/>
<area shape="rect" href="../../da/d15/a00188.php" title=" " alt="" coords="787,155,945,181"/>
<area shape="rect" href="../../d7/d25/a00182.php" title=" " alt="" coords="810,229,922,256"/>
<area shape="rect" href="../../dc/d57/a00194.php" title=" " alt="" coords="786,304,946,331"/>
<area shape="rect" href="../../db/dd9/a00179.php" title=" " alt="" coords="755,379,830,405"/>
<area shape="rect" href="../../d9/dd0/a00191.php" title=" " alt="" coords="854,379,1025,405"/>
<area shape="rect" href="../../d4/d3e/a00116.php" title=" " alt="" coords="819,453,913,480"/>
<area shape="rect" href="../../dc/de6/a00167.php" title=" " alt="" coords="338,528,461,555"/>
<area shape="rect" href="../../d5/dcb/a00170.php" title=" " alt="" coords="485,528,620,555"/>
<area shape="rect" href="../../d2/dc8/a00242.php" title=" " alt="" coords="644,528,773,555"/>
<area shape="rect" title=" " alt="" coords="798,528,859,555"/>
<area shape="rect" title=" " alt="" coords="884,528,923,555"/>
<area shape="rect" title=" " alt="" coords="947,528,1009,555"/>
<area shape="rect" title=" " alt="" coords="1034,528,1087,555"/>
<area shape="rect" title=" " alt="" coords="1111,528,1162,555"/>
<area shape="rect" href="../../d9/d01/a00227.php" title="Used to replace strptime function when compiling for Windows." alt="" coords="623,603,703,629"/>
<area shape="rect" title=" " alt="" coords="728,603,783,629"/>
<area shape="rect" href="../../d5/ddf/a00224.php" title=" " alt="" coords="609,677,718,704"/>
<area shape="rect" title=" " alt="" coords="493,752,549,779"/>
<area shape="rect" href="../../d3/dd5/a00215.php" title=" " alt="" coords="573,752,650,779"/>
<area shape="rect" href="../../d2/df5/a00137.php" title=" " alt="" coords="674,752,757,779"/>
<area shape="rect" href="../../d1/da8/a00230.php" title=" " alt="" coords="781,752,871,779"/>
<area shape="rect" title=" " alt="" coords="579,827,644,853"/>
<area shape="rect" href="../../d9/d77/a00095.php" title=" " alt="" coords="786,827,866,853"/>
<area shape="rect" href="../../de/de1/a00065.php" title=" " alt="" coords="728,901,820,928"/>
<area shape="rect" href="../../d4/d3a/a00101.php" title=" " alt="" coords="844,901,915,928"/>
<area shape="rect" href="../../db/db6/a00074.php" title=" " alt="" coords="730,976,821,1003"/>
<area shape="rect" title=" " alt="" coords="683,1051,766,1077"/>
<area shape="rect" href="../../da/d45/a00011.php" title=" " alt="" coords="790,1051,865,1077"/>
<area shape="rect" href="../../dc/dee/a00053.php" title=" " alt="" coords="841,1125,923,1152"/>
<area shape="rect" href="../../dc/d9a/a00218.php" title=" " alt="" coords="729,1125,816,1152"/>
<area shape="rect" href="../../df/d03/a00062.php" title=" " alt="" coords="1034,1200,1125,1227"/>
<area shape="rect" href="../../d9/d39/a00257.php" title=" " alt="" coords="731,1200,814,1227"/>
<area shape="rect" title=" " alt="" coords="845,1200,906,1227"/>
<area shape="rect" title=" " alt="" coords="930,1200,999,1227"/>
<area shape="rect" href="../../d9/db6/a00146.php" title=" " alt="" coords="1043,1275,1126,1301"/>
<area shape="rect" href="../../d0/dc2/a00104.php" title=" " alt="" coords="1180,1349,1275,1376"/>
<area shape="rect" href="../../d6/d7d/a00161.php" title=" " alt="" coords="1014,1349,1155,1376"/>
<area shape="rect" href="../../d7/dce/a00143.php" title=" " alt="" coords="1065,1424,1147,1451"/>
<area shape="rect" title=" " alt="" coords="1194,1424,1261,1451"/>
<area shape="rect" href="../../d8/d41/a00038.php" title=" " alt="" coords="1062,1499,1145,1525"/>
<area shape="rect" href="../../d5/df1/a00206.php" title=" " alt="" coords="701,1573,794,1600"/>
<area shape="rect" href="../../d3/d1a/a00251.php" title=" " alt="" coords="615,1648,693,1675"/>
<area shape="rect" title=" " alt="" coords="718,1648,777,1675"/>
<area shape="rect" title=" " alt="" coords="801,1648,859,1675"/>
<area shape="rect" href="../../d3/d52/a00023.php" title=" " alt="" coords="371,1723,438,1749"/>
<area shape="rect" href="../../d3/de5/a00209.php" title=" " alt="" coords="483,1723,593,1749"/>
<area shape="rect" href="../../dd/dd7/a00248.php" title=" " alt="" coords="617,1723,691,1749"/>
<area shape="rect" href="../../d7/d03/a00254.php" title=" " alt="" coords="715,1723,849,1749"/>
<area shape="rect" title=" " alt="" coords="873,1723,941,1749"/>
<area shape="rect" href="../../d7/d06/a00131.php" title=" " alt="" coords="618,1797,730,1824"/>
<area shape="rect" href="../../d6/d5b/a00026.php" title=" " alt="" coords="451,1797,593,1824"/>
<area shape="rect" href="../../d5/d16/a00029.php" title=" " alt="" coords="5,1797,145,1824"/>
<area shape="rect" href="../../dc/d87/a00032.php" title=" " alt="" coords="170,1797,279,1824"/>
<area shape="rect" href="../../d4/d8c/a00035.php" title=" " alt="" coords="303,1797,426,1824"/>
<area shape="rect" href="../../d5/de9/a00176.php" title=" " alt="" coords="614,1872,734,1899"/>
<area shape="rect" title=" " alt="" coords="583,1947,651,1973"/>
<area shape="rect" href="../../de/d76/a00134.php" title=" " alt="" coords="675,1947,791,1973"/>
<area shape="rect" title=" " alt="" coords="246,2021,321,2048"/>
<area shape="rect" title=" " alt="" coords="345,2021,403,2048"/>
<area shape="rect" title=" " alt="" coords="428,2021,507,2048"/>
<area shape="rect" title=" " alt="" coords="531,2021,603,2048"/>
<area shape="rect" title=" " alt="" coords="628,2021,675,2048"/>
<area shape="rect" title=" " alt="" coords="699,2021,767,2048"/>
<area shape="rect" title=" " alt="" coords="791,2021,845,2048"/>
<area shape="rect" title=" " alt="" coords="870,2021,939,2048"/>
<area shape="rect" title=" " alt="" coords="964,2021,1019,2048"/>
<area shape="rect" title=" " alt="" coords="1043,2021,1097,2048"/>
<area shape="rect" title=" " alt="" coords="1121,2021,1179,2048"/>
<area shape="rect" href="../../d1/d44/a00098.php" title=" " alt="" coords="937,1424,1040,1451"/>
<area shape="rect" title=" " alt="" coords="953,1499,1032,1525"/>
<area shape="rect" title=" " alt="" coords="851,1499,929,1525"/>
<area shape="rect" href="../../d2/de7/a00014.php" title=" " alt="" coords="700,1275,832,1301"/>
<area shape="rect" title=" " alt="" coords="449,1349,560,1376"/>
<area shape="rect" title=" " alt="" coords="585,1349,689,1376"/>
<area shape="rect" title=" " alt="" coords="713,1349,763,1376"/>
<area shape="rect" title=" " alt="" coords="788,1349,845,1376"/>
<area shape="rect" title=" " alt="" coords="870,1349,910,1376"/>
<area shape="rect" title=" " alt="" coords="935,1349,989,1376"/>
<area shape="rect" title=" " alt="" coords="846,976,913,1003"/>
</map>
</div>
</div><div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="../../d2/d82/a00142.png" border="0" usemap="#aMap_8hppdep" alt=""/></div>
<map name="Map_8hppdep" id="Map_8hppdep">
<area shape="rect" title=" " alt="" coords="314,5,386,32"/>
<area shape="rect" href="../../da/d2a/a00086.php" title=" " alt="" coords="305,80,395,107"/>
<area shape="rect" href="../../db/db2/a00020.php" title=" " alt="" coords="153,155,313,181"/>
<area shape="rect" href="../../d1/d09/a00077.php" title=" " alt="" coords="300,229,397,256"/>
<area shape="rect" href="../../dc/dfe/a00125.php" title=" " alt="" coords="390,155,523,181"/>
<area shape="rect" href="../../d4/d51/a00017.php" title=" " alt="" coords="190,229,275,256"/>
<area shape="rect" href="../../d6/d2d/a00047.php" title=" " alt="" coords="305,304,392,331"/>
<area shape="rect" href="../../df/d98/a00107.php" title=" " alt="" coords="207,379,285,405"/>
<area shape="rect" href="../../d1/d88/a00128.php" title=" " alt="" coords="306,453,391,480"/>
<area shape="rect" href="../../d6/de1/a00233.php" title=" " alt="" coords="389,528,461,555"/>
<area shape="rect" href="../../d9/d2e/a00056.php" title=" " alt="" coords="157,453,282,480"/>
<area shape="rect" href="../../d5/de0/a00050.php" title=" " alt="" coords="212,528,283,555"/>
<area shape="rect" href="../../dd/d32/a00041.php" title=" " alt="" coords="312,603,385,629"/>
<area shape="rect" href="../../d0/d89/a00071.php" title=" " alt="" coords="245,677,359,704"/>
<area shape="rect" href="../../d3/d00/a00113.php" title=" " alt="" coords="343,1051,439,1077"/>
<area shape="rect" href="../../d1/dc1/a00092.php" title=" " alt="" coords="151,752,229,779"/>
<area shape="rect" href="../../d7/d3f/a00173.php" title=" " alt="" coords="267,752,353,779"/>
<area shape="rect" href="../../d4/d81/a00110.php" title=" " alt="" coords="35,827,123,853"/>
<area shape="rect" href="../../dd/dd7/a00260.php" title=" " alt="" coords="145,901,235,928"/>
<area shape="rect" href="../../d7/d46/a00002.php" title=" " alt="" coords="5,901,92,928"/>
<area shape="rect" href="../../dd/dad/a00005.php" title=" " alt="" coords="7,976,74,1003"/>
<area shape="rect" href="../../db/dab/a00089.php" title=" " alt="" coords="225,1051,315,1077"/>
<area shape="rect" href="../../de/d79/a00203.php" title=" " alt="" coords="196,1125,347,1152"/>
<area shape="rect" href="../../d3/db1/a00200.php" title=" " alt="" coords="286,1200,369,1227"/>
<area shape="rect" href="../../d5/df9/a00044.php" title=" " alt="" coords="269,1275,386,1301"/>
<area shape="rect" href="../../db/ddf/a00164.php" title=" " alt="" coords="99,976,207,1003"/>
<area shape="rect" href="../../de/db1/a00197.php" title=" " alt="" coords="231,976,309,1003"/>
<area shape="rect" href="../../dd/d52/a00221.php" title=" " alt="" coords="277,827,359,853"/>
<area shape="rect" href="../../df/dc8/a00122.php" title=" " alt="" coords="422,229,497,256"/>
</map>
</div>
</div><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Classes</h2></td></tr>
<tr class="memitem:dd/d5d/a01325"><td class="memItemLeft" align="right" valign="top">struct &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#dd/d5d/a01325">mcd::WorldDimensions</a></td></tr>
<tr class="memdesc:dd/d5d/a01325"><td class="mdescLeft">&#160;</td><td class="mdescRight">An object to group the dimensions of the world.  <a href="../../db/d12/a00268.php#dd/d5d/a01325">More...</a><br /></td></tr>
<tr class="separator:dd/d5d/a01325"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:df/d29/a01329"><td class="memItemLeft" align="right" valign="top">struct &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#df/d29/a01329">mcd::MapMove</a></td></tr>
<tr class="memdesc:df/d29/a01329"><td class="mdescLeft">&#160;</td><td class="mdescRight">A struct to know informations about th movement of something in the map.  <a href="../../db/d12/a00268.php#df/d29/a01329">More...</a><br /></td></tr>
<tr class="separator:df/d29/a01329"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dc/d2a/a01333.php">mcd::Map</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A class to manage a map and that implement some pathfinding algorithms.  <a href="../../dc/d2a/a01333.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="namespaces"></a>
Namespaces</h2></td></tr>
<tr class="memitem:db/d12/a00268"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php">mcd</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="typedef-members"></a>
Typedefs</h2></td></tr>
<tr class="memitem:abc72a1c83ec918a79447dfa996951da3"><td class="memItemLeft" align="right" valign="top">using&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#abc72a1c83ec918a79447dfa996951da3">mcd::MapLine</a> = std::vector&lt; Tile &gt;</td></tr>
<tr class="separator:abc72a1c83ec918a79447dfa996951da3"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aeb393906487fbd42d8ae5f6831423fbb"><td class="memItemLeft" align="right" valign="top">using&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#aeb393906487fbd42d8ae5f6831423fbb">mcd::MapArray</a> = std::vector&lt; MapLine &gt;</td></tr>
<tr class="separator:aeb393906487fbd42d8ae5f6831423fbb"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="enum-members"></a>
Enumerations</h2></td></tr>
<tr class="memitem:a7350be9df9566241dfb80071a89f9ede"><td class="memItemLeft" align="right" valign="top">enum &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#a7350be9df9566241dfb80071a89f9ede">mcd::Tile</a> { <a class="el" href="../../db/d12/a00268.php#a7350be9df9566241dfb80071a89f9edeab50339a10e1de285ac99d4c3990b8693">mcd::Tile::NONE</a> = 0, 
<a class="el" href="../../db/d12/a00268.php#a7350be9df9566241dfb80071a89f9edea2399122c182da0d5946e2937bb73edf2">mcd::Tile::OBSTACLE</a>, 
<a class="el" href="../../db/d12/a00268.php#a7350be9df9566241dfb80071a89f9edeadedcb56e75fe1488e20865e0ea36d0b9">mcd::Tile::GROUND</a>, 
<a class="el" href="../../db/d12/a00268.php#a7350be9df9566241dfb80071a89f9edeabb1ca97ec761fc37101737ba0aa2e7c5">mcd::Tile::ERROR</a>
 }</td></tr>
<tr class="memdesc:a7350be9df9566241dfb80071a89f9ede"><td class="mdescLeft">&#160;</td><td class="mdescRight">Tiles of the map.  <a href="../../db/d12/a00268.php#a7350be9df9566241dfb80071a89f9ede">More...</a><br /></td></tr>
<tr class="separator:a7350be9df9566241dfb80071a89f9ede"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><dl class="section author"><dt>Author</dt><dd>Mathias CABIOCH-DELALANDE </dd></dl>
<dl class="section date"><dt>Date</dt><dd>Created : July, 29 2018 14:27:51 </dd>
<dd>
Last modification : November, 13 2020 </dd></dl>
</div><hr/><h2 class="groupheader">Class Documentation</h2>
<a name="dd/d5d/a01325" id="dd/d5d/a01325"></a>
<h2 class="memtitle"><span class="permalink"><a href="#dd/d5d/a01325">&#9670;&nbsp;</a></span>mcd::WorldDimensions</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct mcd::WorldDimensions</td>
        </tr>
      </table>
</div><div class="memdoc">
<div class="textblock"><p>An object to group the dimensions of the world. </p>
</div><table class="fieldtable">
<tr><th colspan="3">Class Members</th></tr>
<tr><td class="fieldtype">
<a id="abe35d460277b28d79aa0261fd58b89da"></a>size_t</td>
<td class="fieldname">
h</td>
<td class="fielddoc">
</td></tr>
<tr><td class="fieldtype">
<a id="a5e12726e58baa05036bc160c31d08016"></a>size_t</td>
<td class="fieldname">
w</td>
<td class="fielddoc">
</td></tr>
<tr><td class="fieldtype">
<a id="a6e818e561922fa511658e15bec5fa55d"></a>size_t</td>
<td class="fieldname">
z</td>
<td class="fielddoc">
</td></tr>
</table>

</div>
</div>
<a name="df/d29/a01329" id="df/d29/a01329"></a>
<h2 class="memtitle"><span class="permalink"><a href="#df/d29/a01329">&#9670;&nbsp;</a></span>mcd::MapMove</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct mcd::MapMove</td>
        </tr>
      </table>
</div><div class="memdoc">
<div class="textblock"><p>A struct to know informations about th movement of something in the map. </p>
</div><table class="fieldtable">
<tr><th colspan="3">Class Members</th></tr>
<tr><td class="fieldtype">
<a id="a2f707d77cfeffb93eceecea7c25a7cc6"></a>bool</td>
<td class="fieldname">
end</td>
<td class="fielddoc">
</td></tr>
<tr><td class="fieldtype">
<a id="a61ee478b9a87acbd0fb2299f867a1bea"></a>bool</td>
<td class="fieldname">
next</td>
<td class="fielddoc">
</td></tr>
</table>

</div>
</div>
</div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_1788504ec76a4dda5464562bc560d0b5.php">C++Tests</a></li><li class="navelem"><a class="el" href="../../dir_2e741febc7df97747a68d36c1b3be5f0.php">C++</a></li><li class="navelem"><a class="el" href="../../dir_220287e732b97f08f66e5f221c69df74.php">inc</a></li><li class="navelem"><a class="el" href="../../dir_75b0389167f46f79a101ef8c4434cec4.php">C++</a></li><li class="navelem"><a class="el" href="../../d5/db1/a00140.php">Map.hpp</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
