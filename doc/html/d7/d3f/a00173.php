<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.13"/>
		<title>C++: Player.hpp File Reference</title>
		<link href="../../tabs.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="../../jquery.js"></script>
		<script type="text/javascript" src="../../dynsections.js"></script>
		<link href="../../navtree.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="../../resize.js"></script>
<script type="text/javascript" src="../../navtreedata.js"></script>
<script type="text/javascript" src="../../navtree.js"></script>
<script type="text/javascript">
  $(document).ready(initResizable);
</script>
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
									&#160;<span id="projectnumber">2.0</span>
								</div>
								<div id="projectbrief">My own C++ features</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<?php
				$text = "Generated on Thu Nov 14 2019 11:50:48 for C++ by";
				$text = substr($text, 0, sizeof($text) - 4);
				$tmp = substr($text, 17);
				$tmp = substr($tmp, 0, strpos($tmp, " for"));
				$lastModif = date("l jS \of F Y \a\\t H:i:s", strtotime($tmp));
			?>
		<!-- end header part -->
<!-- Generated by Doxygen 1.8.13 -->
<script type="text/javascript">
var searchBox = new SearchBox("searchBox", "../../search",false,'Search');
</script>
<script type="text/javascript" src="../../menudata.js"></script>
<script type="text/javascript" src="../../menu.js"></script>
<script type="text/javascript">
$(function() {
  initMenu('../../',true,false,'search.php','Search');
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
$(document).ready(function(){initNavTree('d7/d3f/a00173.php','../../');});
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
<a href="#namespaces">Namespaces</a>  </div>
  <div class="headertitle">
<div class="title">Player.hpp File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><code>#include &quot;<a class="el" href="../../d5/de9/a00176.php">C++/PlayerAbstraction.hpp</a>&quot;</code><br />
<code>#include &quot;<a class="el" href="../../d1/d44/a00098.php">C++/Identifier.hpp</a>&quot;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for Player.hpp:</div>
<div class="dyncontent">
<div class="center"><img src="../../d8/df1/a00174.png" border="0" usemap="#Player_8hpp" alt=""/></div>
<map name="Player_8hpp" id="Player_8hpp">
<area shape="rect" id="node2" href="../../d5/de9/a00176.php" title="C++/PlayerAbstraction.hpp" alt="" coords="542,80,722,107"/>
<area shape="rect" id="node107" href="../../d1/d44/a00098.php" title="C++/Identifier.hpp" alt="" coords="743,155,870,181"/>
<area shape="rect" id="node3" href="../../da/dec/a00080.php" title="C++/Entities.hpp" alt="" coords="562,155,683,181"/>
<area shape="rect" id="node4" href="../../dc/d57/a00194.php" title="C++/Stone.hpp" alt="" coords="695,229,806,256"/>
<area shape="rect" id="node100" href="../../d5/dcb/a00170.php" title="C++/Plant.hpp" alt="" coords="280,229,387,256"/>
<area shape="rect" id="node103" href="../../d2/df5/a00137.php" title="C++/Mushroom.hpp" alt="" coords="411,229,549,256"/>
<area shape="rect" id="node104" href="../../dd/dad/a00005.php" title="C++/Ant.hpp" alt="" coords="574,229,671,256"/>
<area shape="rect" id="node5" href="../../d9/db6/a00146.php" title="C++/Object.hpp" alt="" coords="692,379,807,405"/>
<area shape="rect" id="node6" href="../../df/d03/a00062.php" title="C++/Contraption.hpp" alt="" coords="663,528,807,555"/>
<area shape="rect" id="node7" href="../../dd/d32/a00041.php" title="C++/C++.hpp" alt="" coords="738,603,841,629"/>
<area shape="rect" id="node8" href="../../da/d24/a00068.php" title="C++/cryptage.hpp" alt="" coords="630,752,757,779"/>
<area shape="rect" id="node97" href="../../df/d98/a00107.php" title="C++/Logger.hpp" alt="" coords="731,677,847,704"/>
<area shape="rect" id="node98" href="../../d4/d51/a00017.php" title="C++/Assert.hpp" alt="" coords="872,677,987,704"/>
<area shape="rect" id="node9" href="../../d1/d09/a00077.php" title="C++/defines.hpp" alt="" coords="735,827,854,853"/>
<area shape="rect" id="node10" href="../../d3/dd5/a00215.php" title="C++/Timer.hpp" alt="" coords="367,901,478,928"/>
<area shape="rect" id="node82" href="../../d4/dee/a00008.php" title="C++/Args.hpp" alt="" coords="503,901,607,928"/>
<area shape="rect" id="node83" href="../../db/db6/a00074.php" title="C++/DateTime.hpp" alt="" coords="577,1200,711,1227"/>
<area shape="rect" id="node86" href="../../d5/de0/a00050.php" title="C++/Clock.hpp" alt="" coords="682,1051,793,1077"/>
<area shape="rect" id="node87" href="../../d3/d8b/a00059.php" title="C++/ConsoleTable.hpp" alt="" coords="752,1125,909,1152"/>
<area shape="rect" id="node88" href="../../de/df3/a00185.php" title="C++/Referenced.hpp" alt="" coords="868,976,1012,1003"/>
<area shape="rect" id="node89" href="../../d0/dc2/a00104.php" title="C++/IOConfig.hpp" alt="" coords="985,1051,1114,1077"/>
<area shape="rect" id="node90" href="../../d4/d3e/a00116.php" title="C++/Map.hpp" alt="" coords="1123,901,1226,928"/>
<area shape="rect" id="node11" href="../../d5/df1/a00206.php" title="C++/Threadable.hpp" alt="" coords="383,976,524,1003"/>
<area shape="rect" id="node12" href="../../d4/d3a/a00101.php" title="C++/includes.hpp" alt="" coords="768,1349,893,1376"/>
<area shape="rect" id="node13" href="../../d5/db1/a00140.php" title="C++/NotCopyable.hpp" alt="" coords="211,1424,365,1451"/>
<area shape="rect" id="node14" href="../../d7/dce/a00143.php" title="C++/NotInstantiable.hpp" alt="" coords="389,1424,555,1451"/>
<area shape="rect" id="node15" href="../../dd/dc1/a00212.php" title="C++/timeFunctions.hpp" alt="" coords="579,1424,738,1451"/>
<area shape="rect" id="node17" href="../../d3/db1/a00200.php" title="Used to replace strptime function when compiling for Windows. " alt="" coords="657,1499,767,1525"/>
<area shape="rect" id="node18" href="../../de/db1/a00197.php" title="C++/string.hpp" alt="" coords="657,1573,767,1600"/>
<area shape="rect" id="node20" href="../../de/d79/a00203.php" title="C++/system.hpp" alt="" coords="584,1648,704,1675"/>
<area shape="rect" id="node74" href="../../da/d15/a00188.php" title="C++/RNG.hpp" alt="" coords="728,1648,835,1675"/>
<area shape="rect" id="node76" href="../../d3/d00/a00113.php" title="C++/macro.hpp" alt="" coords="859,1648,973,1675"/>
<area shape="rect" id="node21" href="../../da/d2a/a00086.php" title="C++/errors.hpp" alt="" coords="589,1723,699,1749"/>
<area shape="rect" id="node22" href="../../d9/d2e/a00056.php" title="C++/console.hpp" alt="" coords="515,1797,637,1824"/>
<area shape="rect" id="node72" href="../../db/dab/a00089.php" title="C++/files.hpp" alt="" coords="661,1797,763,1824"/>
<area shape="rect" id="node23" href="../../de/de1/a00065.php" title="C++/convert.hpp" alt="" coords="525,1872,645,1899"/>
<area shape="rect" id="node25" href="../../da/d45/a00011.php" title="C++/array.hpp" alt="" coords="592,1947,699,1973"/>
<area shape="rect" id="node27" href="../../d6/d2d/a00047.php" title="C++/check.hpp" alt="" coords="589,2021,701,2048"/>
<area shape="rect" id="node71" href="../../d9/dd0/a00191.php" title="C++/sorting.hpp" alt="" coords="727,2021,843,2048"/>
<area shape="rect" id="node30" href="../../d9/d01/a00227.php" title="C++/vector.hpp" alt="" coords="730,2096,843,2123"/>
<area shape="rect" id="node65" href="../../dc/dee/a00053.php" title="C++/collides.hpp" alt="" coords="585,2096,706,2123"/>
<area shape="rect" id="node31" href="../../d2/de7/a00014.php" title="C++/arraysIncludes.hpp" alt="" coords="751,2171,913,2197"/>
<area shape="rect" id="node38" href="../../db/dd9/a00179.php" title="C++/pointers.hpp" alt="" coords="713,2469,836,2496"/>
<area shape="rect" id="node39" href="../../dd/d52/a00221.php" title="C++/types.hpp" alt="" coords="612,2544,721,2571"/>
<area shape="rect" id="node41" href="../../d3/d52/a00023.php" title="Big.hpp" alt="" coords="633,2619,700,2645"/>
<area shape="rect" id="node60" href="../../dc/d9a/a00218.php" title="C++/Tree.hpp" alt="" coords="506,2619,609,2645"/>
<area shape="rect" id="node61" href="../../d7/d25/a00182.php" title="PureVirtual.hpp" alt="" coords="725,2619,835,2645"/>
<area shape="rect" id="node62" href="../../d5/ddf/a00224.php" title="UsefullDefines.hpp" alt="" coords="860,2619,993,2645"/>
<area shape="rect" id="node42" href="../../da/d1e/a00149.php" title="C++/OsDetection.hpp" alt="" coords="322,2693,473,2720"/>
<area shape="rect" id="node56" href="../../d5/d16/a00029.php" title="C++/Big_Constructor.hpp" alt="" coords="1035,2693,1205,2720"/>
<area shape="rect" id="node57" href="../../d4/d8c/a00035.php" title="C++/Big_Operator.hpp" alt="" coords="497,2693,650,2720"/>
<area shape="rect" id="node58" href="../../d6/d5b/a00026.php" title="C++/Big_Comparison.hpp" alt="" coords="675,2693,848,2720"/>
<area shape="rect" id="node59" href="../../dc/d87/a00032.php" title="C++/Big_Maths.hpp" alt="" coords="872,2693,1011,2720"/>
<area shape="rect" id="node44" href="../../d4/d81/a00110.php" title="C++/lowIncludes.hpp" alt="" coords="391,2768,537,2795"/>
<area shape="rect" id="node66" href="../../df/dc8/a00122.php" title="C++/Matrix.hpp" alt="" coords="543,2171,657,2197"/>
<area shape="rect" id="node67" href="../../d1/dc1/a00092.php" title="C++/Fraction.hpp" alt="" coords="419,2245,543,2272"/>
<area shape="rect" id="node68" href="../../df/d6a/a00119.php" title="C++/maths.hpp" alt="" coords="425,2320,538,2347"/>
<area shape="rect" id="node69" href="../../d8/d41/a00038.php" title="C++/Binary.hpp" alt="" coords="671,2395,785,2421"/>
<area shape="rect" id="node84" href="../../d0/d89/a00071.php" title="C++/Date.hpp" alt="" coords="622,1275,727,1301"/>
<area shape="rect" id="node85" href="../../d3/de5/a00209.php" title="C++/Time.hpp" alt="" coords="491,1275,597,1301"/>
<area shape="rect" id="node91" href="../../d6/db8/a00158.php" title="C++/PathfindingAlgorithms.hpp" alt="" coords="1109,976,1313,1003"/>
<area shape="rect" id="node92" href="../../d6/d7d/a00161.php" title="C++/PathfindingDijkstra.hpp" alt="" coords="1139,1051,1325,1077"/>
<area shape="rect" id="node93" href="../../d3/df8/a00155.php" title="C++/Pathfinding.hpp" alt="" coords="1161,1125,1303,1152"/>
<area shape="rect" id="node94" href="../../dc/de6/a00167.php" title="C++/PathfindingProblem.hpp" alt="" coords="1137,1200,1327,1227"/>
<area shape="rect" id="node95" href="../../db/ddf/a00164.php" title="C++/PathfindingException.hpp" alt="" coords="1163,1275,1363,1301"/>
<area shape="rect" id="node96" href="../../d7/d9a/a00152.php" title="C++/Path.hpp" alt="" coords="1035,1275,1139,1301"/>
<area shape="rect" id="node99" href="../../db/db2/a00020.php" title="C++/AssertionException.hpp" alt="" coords="833,752,1023,779"/>
<area shape="rect" id="node101" href="../../d1/da8/a00230.php" title="C++/Vegetal.hpp" alt="" coords="418,304,539,331"/>
<area shape="rect" id="node102" href="../../d2/d1f/a00083.php" title="C++/Entity.hpp" alt="" coords="553,453,663,480"/>
<area shape="rect" id="node105" href="../../d7/d46/a00002.php" title="C++/Animal.hpp" alt="" coords="564,304,681,331"/>
<area shape="rect" id="node106" href="../../d9/d77/a00095.php" title="C++/Hostile.hpp" alt="" coords="549,379,667,405"/>
</map>
</div>
</div><div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="../../de/d45/a00175.png" border="0" usemap="#Player_8hppdep" alt=""/></div>
<map name="Player_8hppdep" id="Player_8hppdep">
<area shape="rect" id="node2" href="../../d5/df9/a00044.php" title="C++Entities.hpp" alt="" coords="5,80,123,107"/>
</map>
</div>
</div><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Classes</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dc/d19/a01056.php">mcd::Player&lt; PlayerParent &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A player that can be a child from any class.  <a href="../../dc/d19/a01056.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="namespaces"></a>
Namespaces</h2></td></tr>
<tr class="memitem:da/d2e/a00238"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../da/d2e/a00238.php">mcd</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><dl class="section author"><dt>Author</dt><dd>Mathias CABIOCH-DELALANDE </dd></dl>
<dl class="section date"><dt>Date</dt><dd>Last modification : August, 17 2018 </dd></dl>
</div></div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../dir_bfccd401955b95cf8c75461437045ac0.php">inc</a></li><li class="navelem"><a class="el" href="../../dir_2ce2ad1ea5ded593884489da6d66e532.php">C++</a></li><li class="navelem"><a class="el" href="../../d7/d3f/a00173.php">Player.hpp</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
