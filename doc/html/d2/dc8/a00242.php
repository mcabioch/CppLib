<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.20"/>
		<title>C++: timeFunctions.hpp File Reference</title>
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
				$text = "Generated on Sun Nov 15 2020 11:00:16 for C++ by";
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
$(document).ready(function(){initNavTree('d2/dc8/a00242.php','../../'); initResizable(); });
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
<a href="#namespaces">Namespaces</a> &#124;
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<div class="title">timeFunctions.hpp File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><code>#include &quot;<a class="el" href="../../d9/d01/a00227.php">strptime.h</a>&quot;</code><br />
<code>#include &lt;ctime&gt;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for timeFunctions.hpp:</div>
<div class="dyncontent">
<div class="center"><img src="../../d6/d82/a00243.png" border="0" usemap="#atimeFunctions_8hpp" alt=""/></div>
<map name="timeFunctions_8hpp" id="timeFunctions_8hpp">
<area shape="rect" title=" " alt="" coords="645,5,775,32"/>
<area shape="rect" href="../../d9/d01/a00227.php" title="Used to replace strptime function when compiling for Windows." alt="" coords="625,80,705,107"/>
<area shape="rect" title=" " alt="" coords="729,80,784,107"/>
<area shape="rect" href="../../d5/ddf/a00224.php" title=" " alt="" coords="610,155,719,181"/>
<area shape="rect" title=" " alt="" coords="494,229,550,256"/>
<area shape="rect" href="../../d3/dd5/a00215.php" title=" " alt="" coords="574,229,651,256"/>
<area shape="rect" href="../../d2/df5/a00137.php" title=" " alt="" coords="675,229,758,256"/>
<area shape="rect" href="../../d1/da8/a00230.php" title=" " alt="" coords="782,229,873,256"/>
<area shape="rect" title=" " alt="" coords="580,304,645,331"/>
<area shape="rect" href="../../d9/d77/a00095.php" title=" " alt="" coords="787,304,867,331"/>
<area shape="rect" href="../../de/de1/a00065.php" title=" " alt="" coords="728,379,820,405"/>
<area shape="rect" href="../../d4/d3a/a00101.php" title=" " alt="" coords="844,379,915,405"/>
<area shape="rect" href="../../db/db6/a00074.php" title=" " alt="" coords="730,453,821,480"/>
<area shape="rect" title=" " alt="" coords="683,528,766,555"/>
<area shape="rect" href="../../da/d45/a00011.php" title=" " alt="" coords="790,528,865,555"/>
<area shape="rect" href="../../dc/dee/a00053.php" title=" " alt="" coords="841,603,923,629"/>
<area shape="rect" href="../../dc/d9a/a00218.php" title=" " alt="" coords="729,603,816,629"/>
<area shape="rect" href="../../df/d03/a00062.php" title=" " alt="" coords="1034,677,1125,704"/>
<area shape="rect" href="../../d9/d39/a00257.php" title=" " alt="" coords="731,677,814,704"/>
<area shape="rect" title=" " alt="" coords="845,677,906,704"/>
<area shape="rect" title=" " alt="" coords="930,677,999,704"/>
<area shape="rect" href="../../d9/db6/a00146.php" title=" " alt="" coords="1043,752,1126,779"/>
<area shape="rect" href="../../d0/dc2/a00104.php" title=" " alt="" coords="1180,827,1275,853"/>
<area shape="rect" href="../../d6/d7d/a00161.php" title=" " alt="" coords="1014,827,1155,853"/>
<area shape="rect" href="../../d7/dce/a00143.php" title=" " alt="" coords="1065,901,1147,928"/>
<area shape="rect" title=" " alt="" coords="1194,901,1261,928"/>
<area shape="rect" href="../../d8/d41/a00038.php" title=" " alt="" coords="1062,976,1145,1003"/>
<area shape="rect" href="../../d5/df1/a00206.php" title=" " alt="" coords="701,1051,794,1077"/>
<area shape="rect" href="../../d3/d1a/a00251.php" title=" " alt="" coords="615,1125,693,1152"/>
<area shape="rect" title=" " alt="" coords="718,1125,777,1152"/>
<area shape="rect" title=" " alt="" coords="801,1125,859,1152"/>
<area shape="rect" href="../../d3/d52/a00023.php" title=" " alt="" coords="371,1200,438,1227"/>
<area shape="rect" href="../../d3/de5/a00209.php" title=" " alt="" coords="483,1200,593,1227"/>
<area shape="rect" href="../../dd/dd7/a00248.php" title=" " alt="" coords="617,1200,691,1227"/>
<area shape="rect" href="../../d7/d03/a00254.php" title=" " alt="" coords="715,1200,849,1227"/>
<area shape="rect" title=" " alt="" coords="873,1200,941,1227"/>
<area shape="rect" href="../../d7/d06/a00131.php" title=" " alt="" coords="618,1275,730,1301"/>
<area shape="rect" href="../../d6/d5b/a00026.php" title=" " alt="" coords="451,1275,593,1301"/>
<area shape="rect" href="../../d5/d16/a00029.php" title=" " alt="" coords="5,1275,145,1301"/>
<area shape="rect" href="../../dc/d87/a00032.php" title=" " alt="" coords="170,1275,279,1301"/>
<area shape="rect" href="../../d4/d8c/a00035.php" title=" " alt="" coords="303,1275,426,1301"/>
<area shape="rect" href="../../d5/de9/a00176.php" title=" " alt="" coords="614,1349,734,1376"/>
<area shape="rect" title=" " alt="" coords="583,1424,651,1451"/>
<area shape="rect" href="../../de/d76/a00134.php" title=" " alt="" coords="675,1424,791,1451"/>
<area shape="rect" title=" " alt="" coords="246,1499,321,1525"/>
<area shape="rect" title=" " alt="" coords="345,1499,403,1525"/>
<area shape="rect" title=" " alt="" coords="428,1499,507,1525"/>
<area shape="rect" title=" " alt="" coords="531,1499,603,1525"/>
<area shape="rect" title=" " alt="" coords="628,1499,675,1525"/>
<area shape="rect" title=" " alt="" coords="699,1499,767,1525"/>
<area shape="rect" title=" " alt="" coords="791,1499,845,1525"/>
<area shape="rect" title=" " alt="" coords="870,1499,939,1525"/>
<area shape="rect" title=" " alt="" coords="964,1499,1019,1525"/>
<area shape="rect" title=" " alt="" coords="1043,1499,1097,1525"/>
<area shape="rect" title=" " alt="" coords="1121,1499,1179,1525"/>
<area shape="rect" href="../../d1/d44/a00098.php" title=" " alt="" coords="937,901,1040,928"/>
<area shape="rect" title=" " alt="" coords="953,976,1032,1003"/>
<area shape="rect" title=" " alt="" coords="851,976,929,1003"/>
<area shape="rect" href="../../d2/de7/a00014.php" title=" " alt="" coords="700,752,832,779"/>
<area shape="rect" title=" " alt="" coords="449,827,560,853"/>
<area shape="rect" title=" " alt="" coords="585,827,689,853"/>
<area shape="rect" title=" " alt="" coords="713,827,763,853"/>
<area shape="rect" title=" " alt="" coords="788,827,845,853"/>
<area shape="rect" title=" " alt="" coords="870,827,910,853"/>
<area shape="rect" title=" " alt="" coords="935,827,989,853"/>
<area shape="rect" title=" " alt="" coords="846,453,913,480"/>
</map>
</div>
</div><div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="../../d6/d08/a00244.png" border="0" usemap="#atimeFunctions_8hppdep" alt=""/></div>
<map name="timeFunctions_8hppdep" id="timeFunctions_8hppdep">
<area shape="rect" title=" " alt="" coords="311,5,440,32"/>
<area shape="rect" href="../../d4/d3e/a00116.php" title=" " alt="" coords="328,80,423,107"/>
<area shape="rect" href="../../d3/d8b/a00059.php" title=" " alt="" coords="5,304,87,331"/>
<area shape="rect" href="../../da/d24/a00068.php" title=" " alt="" coords="116,379,243,405"/>
<area shape="rect" href="../../da/dec/a00080.php" title=" " alt="" coords="162,155,237,181"/>
<area shape="rect" href="../../df/d6a/a00119.php" title=" " alt="" coords="318,229,417,256"/>
<area shape="rect" href="../../db/dd9/a00179.php" title=" " alt="" coords="413,155,487,181"/>
<area shape="rect" href="../../d9/dd0/a00191.php" title=" " alt="" coords="511,155,682,181"/>
<area shape="rect" href="../../dd/dc1/a00212.php" title=" " alt="" coords="610,304,725,331"/>
<area shape="rect" href="../../d7/d40/a00236.php" title=" " alt="" coords="715,453,825,480"/>
<area shape="rect" href="../../d0/d27/a00239.php" title=" " alt="" coords="261,155,337,181"/>
<area shape="rect" href="../../da/d2a/a00086.php" title=" " alt="" coords="369,603,459,629"/>
<area shape="rect" href="../../db/db2/a00020.php" title=" " alt="" coords="217,677,377,704"/>
<area shape="rect" href="../../d1/d09/a00077.php" title=" " alt="" coords="364,752,461,779"/>
<area shape="rect" href="../../dc/dfe/a00125.php" title=" " alt="" coords="454,677,587,704"/>
<area shape="rect" href="../../d4/d51/a00017.php" title=" " alt="" coords="254,752,339,779"/>
<area shape="rect" href="../../d6/d2d/a00047.php" title=" " alt="" coords="369,827,456,853"/>
<area shape="rect" href="../../df/d98/a00107.php" title=" " alt="" coords="271,901,349,928"/>
<area shape="rect" href="../../d1/d88/a00128.php" title=" " alt="" coords="370,976,455,1003"/>
<area shape="rect" href="../../d6/de1/a00233.php" title=" " alt="" coords="453,1051,525,1077"/>
<area shape="rect" href="../../d9/d2e/a00056.php" title=" " alt="" coords="221,976,346,1003"/>
<area shape="rect" href="../../d5/de0/a00050.php" title=" " alt="" coords="276,1051,347,1077"/>
<area shape="rect" href="../../dd/d32/a00041.php" title=" " alt="" coords="376,1125,449,1152"/>
<area shape="rect" href="../../d0/d89/a00071.php" title=" " alt="" coords="309,1200,423,1227"/>
<area shape="rect" href="../../d3/d00/a00113.php" title=" " alt="" coords="407,1573,503,1600"/>
<area shape="rect" href="../../d1/dc1/a00092.php" title=" " alt="" coords="215,1275,293,1301"/>
<area shape="rect" href="../../d7/d3f/a00173.php" title=" " alt="" coords="331,1275,417,1301"/>
<area shape="rect" href="../../d4/d81/a00110.php" title=" " alt="" coords="99,1349,187,1376"/>
<area shape="rect" href="../../dd/dd7/a00260.php" title=" " alt="" coords="209,1424,299,1451"/>
<area shape="rect" href="../../d7/d46/a00002.php" title=" " alt="" coords="69,1424,156,1451"/>
<area shape="rect" href="../../dd/dad/a00005.php" title=" " alt="" coords="71,1499,138,1525"/>
<area shape="rect" href="../../db/dab/a00089.php" title=" " alt="" coords="289,1573,379,1600"/>
<area shape="rect" href="../../de/d79/a00203.php" title=" " alt="" coords="260,1648,411,1675"/>
<area shape="rect" href="../../d3/db1/a00200.php" title=" " alt="" coords="350,1723,433,1749"/>
<area shape="rect" href="../../d5/df9/a00044.php" title=" " alt="" coords="333,1797,450,1824"/>
<area shape="rect" href="../../db/ddf/a00164.php" title=" " alt="" coords="163,1499,271,1525"/>
<area shape="rect" href="../../de/db1/a00197.php" title=" " alt="" coords="295,1499,373,1525"/>
<area shape="rect" href="../../dd/d52/a00221.php" title=" " alt="" coords="341,1349,423,1376"/>
<area shape="rect" href="../../df/dc8/a00122.php" title=" " alt="" coords="486,752,561,779"/>
<area shape="rect" href="../../d2/d1f/a00083.php" title=" " alt="" coords="190,229,294,256"/>
<area shape="rect" href="../../dc/d57/a00194.php" title=" " alt="" coords="441,229,601,256"/>
<area shape="rect" href="../../d7/d25/a00182.php" title=" " alt="" coords="445,304,557,331"/>
<area shape="rect" href="../../da/d15/a00188.php" title=" " alt="" coords="402,379,559,405"/>
<area shape="rect" href="../../de/df3/a00185.php" title=" " alt="" coords="389,453,564,480"/>
<area shape="rect" href="../../d5/db1/a00140.php" title=" " alt="" coords="415,528,487,555"/>
<area shape="rect" href="../../d4/dee/a00008.php" title=" " alt="" coords="639,528,714,555"/>
<area shape="rect" href="../../d6/d22/a00245.php" title=" " alt="" coords="739,528,817,555"/>
</map>
</div>
</div><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="namespaces"></a>
Namespaces</h2></td></tr>
<tr class="memitem:db/d12/a00268"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php">mcd</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:a49144605ea2f1f8a9463ae309c293628"><td class="memItemLeft" align="right" valign="top">std::time_t&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#a49144605ea2f1f8a9463ae309c293628">mcd::getSec</a> ()</td></tr>
<tr class="memdesc:a49144605ea2f1f8a9463ae309c293628"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the number of seconds since the Epoch.  <a href="../../db/d12/a00268.php#a49144605ea2f1f8a9463ae309c293628">More...</a><br /></td></tr>
<tr class="separator:a49144605ea2f1f8a9463ae309c293628"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ac4573282fe9cf6a0af8de786baaf6456"><td class="memItemLeft" align="right" valign="top">std::chrono::milliseconds&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#ac4573282fe9cf6a0af8de786baaf6456">mcd::getMilli</a> ()</td></tr>
<tr class="memdesc:ac4573282fe9cf6a0af8de786baaf6456"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the milliseconds since the Epoch.  <a href="../../db/d12/a00268.php#ac4573282fe9cf6a0af8de786baaf6456">More...</a><br /></td></tr>
<tr class="separator:ac4573282fe9cf6a0af8de786baaf6456"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a0003c12a7cc73a35e488f59ad14770bf"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#a0003c12a7cc73a35e488f59ad14770bf">mcd::sleep</a> (size_t duration)</td></tr>
<tr class="memdesc:a0003c12a7cc73a35e488f59ad14770bf"><td class="mdescLeft">&#160;</td><td class="mdescRight">Sleep the thread during <em>duration</em> seconds.  <a href="../../db/d12/a00268.php#a0003c12a7cc73a35e488f59ad14770bf">More...</a><br /></td></tr>
<tr class="separator:a0003c12a7cc73a35e488f59ad14770bf"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a30ed8e5c290433011b9855598cfc050a"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#a30ed8e5c290433011b9855598cfc050a">mcd::milliSleep</a> (size_t duration)</td></tr>
<tr class="memdesc:a30ed8e5c290433011b9855598cfc050a"><td class="mdescLeft">&#160;</td><td class="mdescRight">Sleep the thread during <em>duration</em> milliseconds.  <a href="../../db/d12/a00268.php#a30ed8e5c290433011b9855598cfc050a">More...</a><br /></td></tr>
<tr class="separator:a30ed8e5c290433011b9855598cfc050a"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a773d8ead6e35e10f86f4285f3f79ecb9"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#a773d8ead6e35e10f86f4285f3f79ecb9">mcd::microSleep</a> (size_t duration)</td></tr>
<tr class="memdesc:a773d8ead6e35e10f86f4285f3f79ecb9"><td class="mdescLeft">&#160;</td><td class="mdescRight">Sleep the thread during <em>duration</em> microseconds.  <a href="../../db/d12/a00268.php#a773d8ead6e35e10f86f4285f3f79ecb9">More...</a><br /></td></tr>
<tr class="separator:a773d8ead6e35e10f86f4285f3f79ecb9"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a5b2e0c30451ea35d0cc5eb9badea5be0"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#a5b2e0c30451ea35d0cc5eb9badea5be0">mcd::nanoSleep</a> (size_t duration)</td></tr>
<tr class="memdesc:a5b2e0c30451ea35d0cc5eb9badea5be0"><td class="mdescLeft">&#160;</td><td class="mdescRight">Sleep the thread during <em>duration</em> nanoseconds.  <a href="../../db/d12/a00268.php#a5b2e0c30451ea35d0cc5eb9badea5be0">More...</a><br /></td></tr>
<tr class="separator:a5b2e0c30451ea35d0cc5eb9badea5be0"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
</div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_1788504ec76a4dda5464562bc560d0b5.php">C++Tests</a></li><li class="navelem"><a class="el" href="../../dir_2e741febc7df97747a68d36c1b3be5f0.php">C++</a></li><li class="navelem"><a class="el" href="../../dir_220287e732b97f08f66e5f221c69df74.php">inc</a></li><li class="navelem"><a class="el" href="../../dir_75b0389167f46f79a101ef8c4434cec4.php">C++</a></li><li class="navelem"><a class="el" href="../../d2/dc8/a00242.php">timeFunctions.hpp</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
