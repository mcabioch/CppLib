<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.13"/>
		<title>C++: PathfindingDijkstra.hpp File Reference</title>
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
				$text = "Generated on Tue Sep 24 2019 21:29:34 for C++ by";
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
$(document).ready(function(){initNavTree('d5/db1/a00140.php','../../');});
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
<div class="title">PathfindingDijkstra.hpp File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><code>#include &quot;<a class="el" href="../../de/d76/a00134.php">C++/Pathfinding.hpp</a>&quot;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for PathfindingDijkstra.hpp:</div>
<div class="dyncontent">
<div class="center"><img src="../../d5/d4e/a00141.png" border="0" usemap="#PathfindingDijkstra_8hpp" alt=""/></div>
<map name="PathfindingDijkstra_8hpp" id="PathfindingDijkstra_8hpp">
<area shape="rect" id="node2" href="../../de/d76/a00134.php" title="C++/Pathfinding.hpp" alt="" coords="687,80,830,107"/>
<area shape="rect" id="node3" href="../../d9/db6/a00146.php" title="C++/PathfindingProblem.hpp" alt="" coords="663,155,854,181"/>
<area shape="rect" id="node4" href="../../d7/dce/a00143.php" title="C++/PathfindingException.hpp" alt="" coords="571,229,771,256"/>
<area shape="rect" id="node67" href="../../d7/d06/a00131.php" title="C++/Path.hpp" alt="" coords="795,229,899,256"/>
<area shape="rect" id="node5" href="../../d1/dc1/a00092.php" title="C++/includes.hpp" alt="" coords="696,304,821,331"/>
<area shape="rect" id="node6" href="../../da/d15/a00188.php" title="C++/timeFunctions.hpp" alt="" coords="289,379,447,405"/>
<area shape="rect" id="node61" href="../../dc/dfe/a00125.php" title="C++/NotCopyable.hpp" alt="" coords="471,379,625,405"/>
<area shape="rect" id="node8" href="../../d5/de9/a00176.php" title="C++/string.hpp" alt="" coords="367,453,476,480"/>
<area shape="rect" id="node10" href="../../db/dd9/a00179.php" title="C++/system.hpp" alt="" coords="293,528,413,555"/>
<area shape="rect" id="node58" href="../../dc/de6/a00167.php" title="C++/RNG.hpp" alt="" coords="437,528,544,555"/>
<area shape="rect" id="node60" href="../../d1/d44/a00098.php" title="C++/macro.hpp" alt="" coords="569,528,682,555"/>
<area shape="rect" id="node11" href="../../d1/d09/a00077.php" title="C++/errors.hpp" alt="" coords="298,603,409,629"/>
<area shape="rect" id="node12" href="../../d6/d2d/a00047.php" title="C++/console.hpp" alt="" coords="224,677,347,704"/>
<area shape="rect" id="node56" href="../../da/dec/a00080.php" title="C++/files.hpp" alt="" coords="371,677,472,704"/>
<area shape="rect" id="node13" href="../../d9/d2e/a00056.php" title="C++/convert.hpp" alt="" coords="235,752,355,779"/>
<area shape="rect" id="node15" href="../../da/d45/a00011.php" title="C++/array.hpp" alt="" coords="301,827,408,853"/>
<area shape="rect" id="node17" href="../../d8/d41/a00038.php" title="C++/check.hpp" alt="" coords="299,901,411,928"/>
<area shape="rect" id="node55" href="../../d5/dcb/a00170.php" title="C++/sorting.hpp" alt="" coords="505,901,621,928"/>
<area shape="rect" id="node21" href="../../d2/de7/a00014.php" title="C++/arraysIncludes.hpp" alt="" coords="517,976,680,1003"/>
<area shape="rect" id="node50" href="../../d5/df9/a00044.php" title="C++/collides.hpp" alt="" coords="371,976,493,1003"/>
<area shape="rect" id="node28" href="../../d6/db8/a00158.php" title="C++/pointers.hpp" alt="" coords="481,1275,604,1301"/>
<area shape="rect" id="node31" href="../../de/db1/a00197.php" title="C++/types.hpp" alt="" coords="596,1349,705,1376"/>
<area shape="rect" id="node33" href="../../d4/d51/a00017.php" title="Big.hpp" alt="" coords="560,1424,627,1451"/>
<area shape="rect" id="node48" href="../../d6/d7d/a00161.php" title="PureVirtual.hpp" alt="" coords="651,1424,762,1451"/>
<area shape="rect" id="node49" href="../../d3/db1/a00200.php" title="UsefullDefines.hpp" alt="" coords="787,1424,920,1451"/>
<area shape="rect" id="node44" href="../../d3/d52/a00023.php" title="C++/Big_Constructor.hpp" alt="" coords="887,1499,1057,1525"/>
<area shape="rect" id="node45" href="../../d5/d16/a00029.php" title="C++/Big_Operator.hpp" alt="" coords="1082,1499,1235,1525"/>
<area shape="rect" id="node46" href="../../db/db2/a00020.php" title="C++/Big_Comparison.hpp" alt="" coords="1260,1499,1433,1525"/>
<area shape="rect" id="node47" href="../../d6/d5b/a00026.php" title="C++/Big_Maths.hpp" alt="" coords="1457,1499,1596,1525"/>
<area shape="rect" id="node51" href="../../df/d98/a00107.php" title="C++/Matrix.hpp" alt="" coords="195,1051,309,1077"/>
<area shape="rect" id="node52" href="../../d2/d1f/a00083.php" title="C++/Fraction.hpp" alt="" coords="389,1125,513,1152"/>
<area shape="rect" id="node53" href="../../d0/dc2/a00104.php" title="C++/maths.hpp" alt="" coords="394,1200,507,1227"/>
</map>
</div>
</div><div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="../../d2/d82/a00142.png" border="0" usemap="#PathfindingDijkstra_8hppdep" alt=""/></div>
<map name="PathfindingDijkstra_8hppdep" id="PathfindingDijkstra_8hppdep">
<area shape="rect" id="node2" href="../../d2/df5/a00137.php" title="PathfindingAlgorithms.hpp" alt="" coords="261,80,436,107"/>
<area shape="rect" id="node3" href="../../da/d24/a00068.php" title="defines.hpp" alt="" coords="304,155,393,181"/>
<area shape="rect" id="node4" href="../../d3/d8b/a00059.php" title="cryptage.hpp" alt="" coords="191,229,288,256"/>
<area shape="rect" id="node21" href="../../d4/d3a/a00101.php" title="Map.hpp" alt="" coords="313,229,385,256"/>
<area shape="rect" id="node22" href="../../dc/d57/a00194.php" title="Tree.hpp" alt="" coords="409,229,483,256"/>
<area shape="rect" id="node5" href="../../dc/d87/a00032.php" title="C++.hpp" alt="" coords="312,304,385,331"/>
<area shape="rect" id="node6" href="../../dc/dee/a00053.php" title="Contraption.hpp" alt="" coords="245,379,359,405"/>
<area shape="rect" id="node20" href="../../db/dab/a00089.php" title="Identifier.hpp" alt="" coords="344,752,441,779"/>
<area shape="rect" id="node7" href="../../db/db6/a00074.php" title="Entity.hpp" alt="" coords="148,453,229,480"/>
<area shape="rect" id="node18" href="../../d1/d88/a00128.php" title="Object.hpp" alt="" coords="267,453,353,480"/>
<area shape="rect" id="node8" href="../../da/d2a/a00086.php" title="Hostile.hpp" alt="" coords="34,528,122,555"/>
<area shape="rect" id="node15" href="../../de/d79/a00203.php" title="Vegetal.hpp" alt="" coords="143,603,234,629"/>
<area shape="rect" id="node9" href="../../d7/d46/a00002.php" title="Animal.hpp" alt="" coords="5,603,92,629"/>
<area shape="rect" id="node10" href="../../dd/dad/a00005.php" title="Ant.hpp" alt="" coords="7,677,74,704"/>
<area shape="rect" id="node11" href="../../d0/d89/a00071.php" title="Entities.hpp" alt="" coords="225,752,315,779"/>
<area shape="rect" id="node12" href="../../d3/df8/a00155.php" title="PlayerAbstraction.hpp" alt="" coords="197,827,348,853"/>
<area shape="rect" id="node13" href="../../d7/d9a/a00152.php" title="Player.hpp" alt="" coords="287,901,371,928"/>
<area shape="rect" id="node14" href="../../d4/d8c/a00035.php" title="C++Entities.hpp" alt="" coords="270,976,387,1003"/>
<area shape="rect" id="node16" href="../../df/dc8/a00122.php" title="Mushroom.hpp" alt="" coords="99,677,207,704"/>
<area shape="rect" id="node17" href="../../da/d1e/a00149.php" title="Plant.hpp" alt="" coords="231,677,309,704"/>
<area shape="rect" id="node19" href="../../d7/d3f/a00173.php" title="Stone.hpp" alt="" coords="277,528,359,555"/>
</map>
</div>
</div><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Classes</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d2/d4c/a00984.php">mcd::PathfindingDijkstra</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">An implementation of the Dijkstra algorithm.  <a href="../../d2/d4c/a00984.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="namespaces"></a>
Namespaces</h2></td></tr>
<tr class="memitem:dd/ded/a00211"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dd/ded/a00211.php">mcd</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><dl class="section author"><dt>Author</dt><dd>Mathias CABIOCH-DELALANDE </dd></dl>
<dl class="section date"><dt>Date</dt><dd>Created : July, 30 2018 11:12:40 </dd>
<dd>
Last modification : August, 17 2018 </dd></dl>
</div></div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../dir_bfccd401955b95cf8c75461437045ac0.php">inc</a></li><li class="navelem"><a class="el" href="../../dir_2ce2ad1ea5ded593884489da6d66e532.php">C++</a></li><li class="navelem"><a class="el" href="../../d5/db1/a00140.php">PathfindingDijkstra.hpp</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
