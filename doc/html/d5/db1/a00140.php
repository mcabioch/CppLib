<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.13"/>
		<title>C++: Pathfinding.hpp File Reference</title>
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
				$text = "Generated on Wed Oct 2 2019 11:35:18 for C++ by";
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
<div class="title">Pathfinding.hpp File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><code>#include &quot;<a class="el" href="../../d7/d9a/a00152.php">C++/PathfindingProblem.hpp</a>&quot;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for Pathfinding.hpp:</div>
<div class="dyncontent">
<div class="center"><img src="../../d5/d4e/a00141.png" border="0" usemap="#Pathfinding_8hpp" alt=""/></div>
<map name="Pathfinding_8hpp" id="Pathfinding_8hpp">
<area shape="rect" id="node2" href="../../d7/d9a/a00152.php" title="C++/PathfindingProblem.hpp" alt="" coords="786,80,977,107"/>
<area shape="rect" id="node3" href="../../da/d1e/a00149.php" title="C++/PathfindingException.hpp" alt="" coords="693,155,893,181"/>
<area shape="rect" id="node69" href="../../d2/df5/a00137.php" title="C++/Path.hpp" alt="" coords="917,155,1021,181"/>
<area shape="rect" id="node4" href="../../d9/d77/a00095.php" title="C++/includes.hpp" alt="" coords="819,229,944,256"/>
<area shape="rect" id="node5" href="../../dc/d57/a00194.php" title="C++/timeFunctions.hpp" alt="" coords="263,304,422,331"/>
<area shape="rect" id="node62" href="../../d1/d88/a00128.php" title="C++/NotCopyable.hpp" alt="" coords="446,304,599,331"/>
<area shape="rect" id="node63" href="../../d7/d06/a00131.php" title="C++/NotInstantiable.hpp" alt="" coords="624,304,789,331"/>
<area shape="rect" id="node7" href="../../d7/d25/a00182.php" title="C++/string.hpp" alt="" coords="341,379,451,405"/>
<area shape="rect" id="node9" href="../../de/df3/a00185.php" title="C++/system.hpp" alt="" coords="268,453,388,480"/>
<area shape="rect" id="node59" href="../../d7/d3f/a00173.php" title="C++/RNG.hpp" alt="" coords="412,453,519,480"/>
<area shape="rect" id="node61" href="../../d4/d3a/a00101.php" title="C++/macro.hpp" alt="" coords="543,453,657,480"/>
<area shape="rect" id="node10" href="../../da/dec/a00080.php" title="C++/errors.hpp" alt="" coords="273,528,383,555"/>
<area shape="rect" id="node11" href="../../d5/de0/a00050.php" title="C++/console.hpp" alt="" coords="199,603,321,629"/>
<area shape="rect" id="node57" href="../../d2/d1f/a00083.php" title="C++/files.hpp" alt="" coords="345,603,447,629"/>
<area shape="rect" id="node12" href="../../d3/d8b/a00059.php" title="C++/convert.hpp" alt="" coords="209,677,329,704"/>
<area shape="rect" id="node14" href="../../da/d45/a00011.php" title="C++/array.hpp" alt="" coords="276,752,383,779"/>
<area shape="rect" id="node16" href="../../dd/d32/a00041.php" title="C++/check.hpp" alt="" coords="273,827,385,853"/>
<area shape="rect" id="node56" href="../../d5/de9/a00176.php" title="C++/sorting.hpp" alt="" coords="467,827,583,853"/>
<area shape="rect" id="node20" href="../../d3/de5/a00209.php" title="C++/vector.hpp" alt="" coords="498,901,611,928"/>
<area shape="rect" id="node50" href="../../d6/d2d/a00047.php" title="C++/collides.hpp" alt="" coords="353,901,474,928"/>
<area shape="rect" id="node21" href="../../d2/de7/a00014.php" title="C++/arraysIncludes.hpp" alt="" coords="519,976,681,1003"/>
<area shape="rect" id="node28" href="../../db/ddf/a00164.php" title="C++/pointers.hpp" alt="" coords="481,1275,604,1301"/>
<area shape="rect" id="node31" href="../../de/d79/a00203.php" title="C++/types.hpp" alt="" coords="596,1349,705,1376"/>
<area shape="rect" id="node33" href="../../d4/d51/a00017.php" title="Big.hpp" alt="" coords="560,1424,627,1451"/>
<area shape="rect" id="node48" href="../../dc/de6/a00167.php" title="PureVirtual.hpp" alt="" coords="651,1424,762,1451"/>
<area shape="rect" id="node49" href="../../d5/df1/a00206.php" title="UsefullDefines.hpp" alt="" coords="787,1424,920,1451"/>
<area shape="rect" id="node44" href="../../d3/d52/a00023.php" title="C++/Big_Constructor.hpp" alt="" coords="887,1499,1057,1525"/>
<area shape="rect" id="node45" href="../../d5/d16/a00029.php" title="C++/Big_Operator.hpp" alt="" coords="1082,1499,1235,1525"/>
<area shape="rect" id="node46" href="../../db/db2/a00020.php" title="C++/Big_Comparison.hpp" alt="" coords="1260,1499,1433,1525"/>
<area shape="rect" id="node47" href="../../d6/d5b/a00026.php" title="C++/Big_Maths.hpp" alt="" coords="1457,1499,1596,1525"/>
<area shape="rect" id="node51" href="../../d4/d81/a00110.php" title="C++/Matrix.hpp" alt="" coords="311,976,425,1003"/>
<area shape="rect" id="node52" href="../../da/d2a/a00086.php" title="C++/Fraction.hpp" alt="" coords="187,1051,311,1077"/>
<area shape="rect" id="node53" href="../../df/d98/a00107.php" title="C++/maths.hpp" alt="" coords="193,1125,306,1152"/>
<area shape="rect" id="node54" href="../../dc/d87/a00032.php" title="C++/Binary.hpp" alt="" coords="439,1200,553,1227"/>
</map>
</div>
</div><div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="../../d2/d82/a00142.png" border="0" usemap="#Pathfinding_8hppdep" alt=""/></div>
<map name="Pathfinding_8hppdep" id="Pathfinding_8hppdep">
<area shape="rect" id="node2" href="../../d9/db6/a00146.php" title="PathfindingDijkstra.hpp" alt="" coords="270,80,427,107"/>
<area shape="rect" id="node3" href="../../d7/dce/a00143.php" title="PathfindingAlgorithms.hpp" alt="" coords="261,155,436,181"/>
<area shape="rect" id="node4" href="../../d0/d89/a00071.php" title="defines.hpp" alt="" coords="304,229,393,256"/>
<area shape="rect" id="node5" href="../../df/d03/a00062.php" title="cryptage.hpp" alt="" coords="191,304,288,331"/>
<area shape="rect" id="node22" href="../../d0/dc2/a00104.php" title="Map.hpp" alt="" coords="313,304,385,331"/>
<area shape="rect" id="node23" href="../../d3/db1/a00200.php" title="Tree.hpp" alt="" coords="409,304,483,331"/>
<area shape="rect" id="node6" href="../../d4/d8c/a00035.php" title="C++.hpp" alt="" coords="312,379,385,405"/>
<area shape="rect" id="node7" href="../../d9/d2e/a00056.php" title="Contraption.hpp" alt="" coords="245,453,359,480"/>
<area shape="rect" id="node21" href="../../d1/dc1/a00092.php" title="Identifier.hpp" alt="" coords="344,827,441,853"/>
<area shape="rect" id="node8" href="../../d1/d09/a00077.php" title="Entity.hpp" alt="" coords="148,528,229,555"/>
<area shape="rect" id="node19" href="../../de/d76/a00134.php" title="Object.hpp" alt="" coords="267,528,353,555"/>
<area shape="rect" id="node9" href="../../db/dab/a00089.php" title="Hostile.hpp" alt="" coords="34,603,122,629"/>
<area shape="rect" id="node16" href="../../dd/dc1/a00212.php" title="Vegetal.hpp" alt="" coords="143,677,234,704"/>
<area shape="rect" id="node10" href="../../d7/d46/a00002.php" title="Animal.hpp" alt="" coords="5,677,92,704"/>
<area shape="rect" id="node11" href="../../dd/dad/a00005.php" title="Ant.hpp" alt="" coords="7,752,74,779"/>
<area shape="rect" id="node12" href="../../db/db6/a00074.php" title="Entities.hpp" alt="" coords="225,827,315,853"/>
<area shape="rect" id="node13" href="../../d6/d7d/a00161.php" title="PlayerAbstraction.hpp" alt="" coords="197,901,348,928"/>
<area shape="rect" id="node14" href="../../d6/db8/a00158.php" title="Player.hpp" alt="" coords="287,976,371,1003"/>
<area shape="rect" id="node15" href="../../d8/d41/a00038.php" title="C++Entities.hpp" alt="" coords="270,1051,387,1077"/>
<area shape="rect" id="node17" href="../../dc/dfe/a00125.php" title="Mushroom.hpp" alt="" coords="99,752,207,779"/>
<area shape="rect" id="node18" href="../../d3/df8/a00155.php" title="Plant.hpp" alt="" coords="231,752,309,779"/>
<area shape="rect" id="node20" href="../../db/dd9/a00179.php" title="Stone.hpp" alt="" coords="277,603,359,629"/>
</map>
</div>
</div><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Classes</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../df/d59/a01001.php">mcd::Pathfinding</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A class to implement some pathfinding algorithms.  <a href="../../df/d59/a01001.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="namespaces"></a>
Namespaces</h2></td></tr>
<tr class="memitem:d5/d0b/a00220"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d5/d0b/a00220.php">mcd</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><dl class="section author"><dt>Author</dt><dd>Mathias CABIOCH-DELALANDE </dd></dl>
<dl class="section date"><dt>Date</dt><dd>Created : July, 30 2018 09:09:52 </dd>
<dd>
Last modification : August, 15 2018 </dd></dl>
</div></div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../dir_bfccd401955b95cf8c75461437045ac0.php">inc</a></li><li class="navelem"><a class="el" href="../../dir_2ce2ad1ea5ded593884489da6d66e532.php">C++</a></li><li class="navelem"><a class="el" href="../../d5/db1/a00140.php">Pathfinding.hpp</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
