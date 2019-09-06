<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.13"/>
		<title>C++: timeFunctions.hpp File Reference</title>
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
				$text = "Generated on Fri Sep 6 2019 18:14:51 for C++ by";
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
<a href="#namespaces">Namespaces</a> &#124;
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<div class="title">timeFunctions.hpp File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><code>#include &lt;ctime&gt;</code><br />
<code>#include &quot;<a class="el" href="../../d6/d7d/a00161.php">C++/string.hpp</a>&quot;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for timeFunctions.hpp:</div>
<div class="dyncontent">
<div class="center"><img src="../../d8/df1/a00174.png" border="0" usemap="#timeFunctions_8hpp" alt=""/></div>
<map name="timeFunctions_8hpp" id="timeFunctions_8hpp">
<area shape="rect" id="node3" href="../../d6/d7d/a00161.php" title="C++/string.hpp" alt="" coords="367,80,476,107"/>
<area shape="rect" id="node5" href="../../db/ddf/a00164.php" title="C++/system.hpp" alt="" coords="293,155,413,181"/>
<area shape="rect" id="node50" href="../../d7/d9a/a00152.php" title="C++/RNG.hpp" alt="" coords="437,155,544,181"/>
<area shape="rect" id="node52" href="../../d1/d44/a00098.php" title="C++/macro.hpp" alt="" coords="569,155,682,181"/>
<area shape="rect" id="node6" href="../../da/dec/a00080.php" title="C++/errors.hpp" alt="" coords="298,229,409,256"/>
<area shape="rect" id="node7" href="../../d5/de0/a00050.php" title="C++/console.hpp" alt="" coords="224,304,347,331"/>
<area shape="rect" id="node48" href="../../d2/d1f/a00083.php" title="C++/files.hpp" alt="" coords="371,304,472,331"/>
<area shape="rect" id="node8" href="../../d3/d8b/a00059.php" title="C++/convert.hpp" alt="" coords="235,379,355,405"/>
<area shape="rect" id="node10" href="../../da/d45/a00011.php" title="C++/array.hpp" alt="" coords="301,453,408,480"/>
<area shape="rect" id="node12" href="../../dd/d32/a00041.php" title="C++/check.hpp" alt="" coords="299,528,411,555"/>
<area shape="rect" id="node47" href="../../d3/df8/a00155.php" title="C++/sorting.hpp" alt="" coords="505,528,621,555"/>
<area shape="rect" id="node16" href="../../d2/de7/a00014.php" title="C++/arraysIncludes.hpp" alt="" coords="517,603,680,629"/>
<area shape="rect" id="node45" href="../../d6/d2d/a00047.php" title="C++/collides.hpp" alt="" coords="371,603,493,629"/>
<area shape="rect" id="node23" href="../../d7/dce/a00143.php" title="C++/pointers.hpp" alt="" coords="481,752,604,779"/>
<area shape="rect" id="node26" href="../../d7/d25/a00182.php" title="C++/types.hpp" alt="" coords="596,827,705,853"/>
<area shape="rect" id="node28" href="../../db/db2/a00020.php" title="Big.hpp" alt="" coords="560,901,627,928"/>
<area shape="rect" id="node43" href="../../d9/db6/a00146.php" title="PureVirtual.hpp" alt="" coords="651,901,762,928"/>
<area shape="rect" id="node44" href="../../de/df3/a00185.php" title="UsefullDefines.hpp" alt="" coords="787,901,920,928"/>
<area shape="rect" id="node39" href="../../d6/d5b/a00026.php" title="C++/Big_Constructor.hpp" alt="" coords="887,976,1057,1003"/>
<area shape="rect" id="node40" href="../../dc/d87/a00032.php" title="C++/Big_Operator.hpp" alt="" coords="1082,976,1235,1003"/>
<area shape="rect" id="node41" href="../../d3/d52/a00023.php" title="C++/Big_Comparison.hpp" alt="" coords="1260,976,1433,1003"/>
<area shape="rect" id="node42" href="../../d5/d16/a00029.php" title="C++/Big_Maths.hpp" alt="" coords="1457,976,1596,1003"/>
<area shape="rect" id="node46" href="../../d0/dc2/a00104.php" title="C++/maths.hpp" alt="" coords="195,677,309,704"/>
</map>
</div>
</div><div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="../../de/d45/a00175.png" border="0" usemap="#timeFunctions_8hppdep" alt=""/></div>
<map name="timeFunctions_8hppdep" id="timeFunctions_8hppdep">
<area shape="rect" id="node2" href="../../d1/dc1/a00092.php" title="includes.hpp" alt="" coords="301,80,396,107"/>
<area shape="rect" id="node3" href="../../d5/df9/a00044.php" title="Clock.hpp" alt="" coords="5,304,87,331"/>
<area shape="rect" id="node24" href="../../dc/dee/a00053.php" title="ConsoleTable.hpp" alt="" coords="56,229,183,256"/>
<area shape="rect" id="node25" href="../../de/de1/a00065.php" title="Date.hpp" alt="" coords="135,155,210,181"/>
<area shape="rect" id="node27" href="../../d9/d77/a00095.php" title="IOConfig.hpp" alt="" coords="297,304,395,331"/>
<area shape="rect" id="node28" href="../../d4/d3e/a00116.php" title="Path.hpp" alt="" coords="386,155,461,181"/>
<area shape="rect" id="node33" href="../../d1/d88/a00128.php" title="PathfindingException.hpp" alt="" coords="485,155,655,181"/>
<area shape="rect" id="node34" href="../../da/d1e/a00149.php" title="Referenced.hpp" alt="" coords="547,379,662,405"/>
<area shape="rect" id="node35" href="../../dc/de6/a00167.php" title="Threadable.hpp" alt="" coords="688,379,799,405"/>
<area shape="rect" id="node38" href="../../d5/dcb/a00170.php" title="Time.hpp" alt="" coords="235,155,311,181"/>
<area shape="rect" id="node4" href="../../d0/d89/a00071.php" title="defines.hpp" alt="" coords="336,528,425,555"/>
<area shape="rect" id="node5" href="../../df/d03/a00062.php" title="cryptage.hpp" alt="" coords="223,603,320,629"/>
<area shape="rect" id="node22" href="../../d4/d3a/a00101.php" title="Map.hpp" alt="" coords="345,603,417,629"/>
<area shape="rect" id="node23" href="../../db/dd9/a00179.php" title="Tree.hpp" alt="" coords="441,603,515,629"/>
<area shape="rect" id="node6" href="../../d4/d8c/a00035.php" title="C++.hpp" alt="" coords="344,677,417,704"/>
<area shape="rect" id="node7" href="../../d9/d2e/a00056.php" title="Contraption.hpp" alt="" coords="277,752,391,779"/>
<area shape="rect" id="node21" href="../../db/dab/a00089.php" title="Identifier.hpp" alt="" coords="376,1125,473,1152"/>
<area shape="rect" id="node8" href="../../d1/d09/a00077.php" title="Entity.hpp" alt="" coords="180,827,261,853"/>
<area shape="rect" id="node19" href="../../d3/d00/a00113.php" title="Object.hpp" alt="" coords="299,827,385,853"/>
<area shape="rect" id="node9" href="../../da/d2a/a00086.php" title="Hostile.hpp" alt="" coords="66,901,154,928"/>
<area shape="rect" id="node16" href="../../da/d15/a00188.php" title="Vegetal.hpp" alt="" coords="175,976,266,1003"/>
<area shape="rect" id="node10" href="../../d7/d46/a00002.php" title="Animal.hpp" alt="" coords="37,976,124,1003"/>
<area shape="rect" id="node11" href="../../dd/dad/a00005.php" title="Ant.hpp" alt="" coords="39,1051,106,1077"/>
<area shape="rect" id="node12" href="../../db/db6/a00074.php" title="Entities.hpp" alt="" coords="257,1125,347,1152"/>
<area shape="rect" id="node13" href="../../d5/db1/a00140.php" title="PlayerAbstraction.hpp" alt="" coords="229,1200,380,1227"/>
<area shape="rect" id="node14" href="../../d2/df5/a00137.php" title="Player.hpp" alt="" coords="319,1275,403,1301"/>
<area shape="rect" id="node15" href="../../d8/d41/a00038.php" title="C++Entities.hpp" alt="" coords="302,1349,419,1376"/>
<area shape="rect" id="node17" href="../../df/d98/a00107.php" title="Mushroom.hpp" alt="" coords="131,1051,239,1077"/>
<area shape="rect" id="node18" href="../../de/d76/a00134.php" title="Plant.hpp" alt="" coords="263,1051,341,1077"/>
<area shape="rect" id="node20" href="../../d6/db8/a00158.php" title="Stone.hpp" alt="" coords="309,901,391,928"/>
<area shape="rect" id="node26" href="../../da/d24/a00068.php" title="DateTime.hpp" alt="" coords="207,229,311,256"/>
<area shape="rect" id="node29" href="../../d7/d06/a00131.php" title="PathfindingProblem.hpp" alt="" coords="395,229,555,256"/>
<area shape="rect" id="node30" href="../../df/d6a/a00119.php" title="Pathfinding.hpp" alt="" coords="419,304,531,331"/>
<area shape="rect" id="node31" href="../../dc/dfe/a00125.php" title="PathfindingDijkstra.hpp" alt="" coords="365,379,522,405"/>
<area shape="rect" id="node32" href="../../df/dc8/a00122.php" title="PathfindingAlgorithms.hpp" alt="" coords="356,453,531,480"/>
<area shape="rect" id="node36" href="../../d4/dee/a00008.php" title="Args.hpp" alt="" coords="606,453,681,480"/>
<area shape="rect" id="node37" href="../../d5/de9/a00176.php" title="Timer.hpp" alt="" coords="705,453,785,480"/>
</map>
</div>
</div><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="namespaces"></a>
Namespaces</h2></td></tr>
<tr class="memitem:d7/ded/a00196"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d7/ded/a00196.php">mcd</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:a49144605ea2f1f8a9463ae309c293628"><td class="memItemLeft" align="right" valign="top">std::time_t&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d7/ded/a00196.php#a49144605ea2f1f8a9463ae309c293628">mcd::getSec</a> ()</td></tr>
<tr class="memdesc:a49144605ea2f1f8a9463ae309c293628"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the number of seconds since the Epoch.  <a href="../../d7/ded/a00196.php#a49144605ea2f1f8a9463ae309c293628">More...</a><br /></td></tr>
<tr class="separator:a49144605ea2f1f8a9463ae309c293628"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ac4573282fe9cf6a0af8de786baaf6456"><td class="memItemLeft" align="right" valign="top">std::chrono::milliseconds&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d7/ded/a00196.php#ac4573282fe9cf6a0af8de786baaf6456">mcd::getMilli</a> ()</td></tr>
<tr class="memdesc:ac4573282fe9cf6a0af8de786baaf6456"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the milliseconds since the Epoch.  <a href="../../d7/ded/a00196.php#ac4573282fe9cf6a0af8de786baaf6456">More...</a><br /></td></tr>
<tr class="separator:ac4573282fe9cf6a0af8de786baaf6456"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a0003c12a7cc73a35e488f59ad14770bf"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d7/ded/a00196.php#a0003c12a7cc73a35e488f59ad14770bf">mcd::sleep</a> (size_t duration)</td></tr>
<tr class="memdesc:a0003c12a7cc73a35e488f59ad14770bf"><td class="mdescLeft">&#160;</td><td class="mdescRight">Sleep the thread during <em>duration</em> seconds.  <a href="../../d7/ded/a00196.php#a0003c12a7cc73a35e488f59ad14770bf">More...</a><br /></td></tr>
<tr class="separator:a0003c12a7cc73a35e488f59ad14770bf"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a30ed8e5c290433011b9855598cfc050a"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d7/ded/a00196.php#a30ed8e5c290433011b9855598cfc050a">mcd::milliSleep</a> (size_t duration)</td></tr>
<tr class="memdesc:a30ed8e5c290433011b9855598cfc050a"><td class="mdescLeft">&#160;</td><td class="mdescRight">Sleep the thread during <em>duration</em> milliseconds.  <a href="../../d7/ded/a00196.php#a30ed8e5c290433011b9855598cfc050a">More...</a><br /></td></tr>
<tr class="separator:a30ed8e5c290433011b9855598cfc050a"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a773d8ead6e35e10f86f4285f3f79ecb9"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d7/ded/a00196.php#a773d8ead6e35e10f86f4285f3f79ecb9">mcd::microSleep</a> (size_t duration)</td></tr>
<tr class="memdesc:a773d8ead6e35e10f86f4285f3f79ecb9"><td class="mdescLeft">&#160;</td><td class="mdescRight">Sleep the thread during <em>duration</em> microseconds.  <a href="../../d7/ded/a00196.php#a773d8ead6e35e10f86f4285f3f79ecb9">More...</a><br /></td></tr>
<tr class="separator:a773d8ead6e35e10f86f4285f3f79ecb9"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a5b2e0c30451ea35d0cc5eb9badea5be0"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d7/ded/a00196.php#a5b2e0c30451ea35d0cc5eb9badea5be0">mcd::nanoSleep</a> (size_t duration)</td></tr>
<tr class="memdesc:a5b2e0c30451ea35d0cc5eb9badea5be0"><td class="mdescLeft">&#160;</td><td class="mdescRight">Sleep the thread during <em>duration</em> nanoseconds.  <a href="../../d7/ded/a00196.php#a5b2e0c30451ea35d0cc5eb9badea5be0">More...</a><br /></td></tr>
<tr class="separator:a5b2e0c30451ea35d0cc5eb9badea5be0"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
</div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_1788504ec76a4dda5464562bc560d0b5.php">C++Tests</a></li><li class="navelem"><a class="el" href="../../dir_2e741febc7df97747a68d36c1b3be5f0.php">C++</a></li><li class="navelem"><a class="el" href="../../dir_220287e732b97f08f66e5f221c69df74.php">inc</a></li><li class="navelem"><a class="el" href="../../dir_75b0389167f46f79a101ef8c4434cec4.php">C++</a></li><li class="navelem"><a class="el" href="../../d7/d3f/a00173.php">timeFunctions.hpp</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
