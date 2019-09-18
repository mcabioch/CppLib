<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.13"/>
		<title>C++: collides.hpp File Reference</title>
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
				$text = "Generated on Tue Sep 17 2019 17:17:10 for C++ by";
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
$(document).ready(function(){initNavTree('d6/d2d/a00047.php','../../');});
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
<div class="title">collides.hpp File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><code>#include &quot;<a class="el" href="../../d4/d81/a00110.php">C++/Matrix.hpp</a>&quot;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for collides.hpp:</div>
<div class="dyncontent">
<div class="center"><img src="../../d4/dca/a00048.png" border="0" usemap="#collides_8hpp" alt=""/></div>
<map name="collides_8hpp" id="collides_8hpp">
<area shape="rect" id="node2" href="../../d4/d81/a00110.php" title="C++/Matrix.hpp" alt="" coords="542,80,655,107"/>
<area shape="rect" id="node3" href="../../da/d2a/a00086.php" title="C++/Fraction.hpp" alt="" coords="537,155,661,181"/>
<area shape="rect" id="node4" href="../../df/d98/a00107.php" title="C++/maths.hpp" alt="" coords="485,229,598,256"/>
<area shape="rect" id="node5" href="../../d6/d7d/a00161.php" title="C++/pointers.hpp" alt="" coords="480,304,603,331"/>
<area shape="rect" id="node8" href="../../d3/db1/a00200.php" title="C++/types.hpp" alt="" coords="595,379,704,405"/>
<area shape="rect" id="node10" href="../../db/db2/a00020.php" title="Big.hpp" alt="" coords="560,453,627,480"/>
<area shape="rect" id="node25" href="../../db/ddf/a00164.php" title="PureVirtual.hpp" alt="" coords="651,453,762,480"/>
<area shape="rect" id="node26" href="../../de/d79/a00203.php" title="UsefullDefines.hpp" alt="" coords="787,453,920,480"/>
<area shape="rect" id="node21" href="../../d6/d5b/a00026.php" title="C++/Big_Constructor.hpp" alt="" coords="887,528,1057,555"/>
<area shape="rect" id="node22" href="../../dc/d87/a00032.php" title="C++/Big_Operator.hpp" alt="" coords="1082,528,1235,555"/>
<area shape="rect" id="node23" href="../../d3/d52/a00023.php" title="C++/Big_Comparison.hpp" alt="" coords="1260,528,1433,555"/>
<area shape="rect" id="node24" href="../../d5/d16/a00029.php" title="C++/Big_Maths.hpp" alt="" coords="1457,528,1596,555"/>
</map>
</div>
</div><div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="../../d2/dee/a00049.png" border="0" usemap="#collides_8hppdep" alt=""/></div>
<map name="collides_8hppdep" id="collides_8hppdep">
<area shape="rect" id="node2" href="../../dd/d32/a00041.php" title="check.hpp" alt="" coords="307,80,390,107"/>
<area shape="rect" id="node3" href="../../da/d45/a00011.php" title="array.hpp" alt="" coords="311,155,387,181"/>
<area shape="rect" id="node4" href="../../d3/d8b/a00059.php" title="convert.hpp" alt="" coords="303,229,394,256"/>
<area shape="rect" id="node5" href="../../d5/de0/a00050.php" title="console.hpp" alt="" coords="251,304,343,331"/>
<area shape="rect" id="node47" href="../../d2/d1f/a00083.php" title="files.hpp" alt="" coords="367,304,437,331"/>
<area shape="rect" id="node6" href="../../da/dec/a00080.php" title="errors.hpp" alt="" coords="309,379,389,405"/>
<area shape="rect" id="node7" href="../../d7/d25/a00182.php" title="system.hpp" alt="" coords="303,453,394,480"/>
<area shape="rect" id="node8" href="../../db/dd9/a00179.php" title="string.hpp" alt="" coords="309,528,388,555"/>
<area shape="rect" id="node9" href="../../d9/dd0/a00191.php" title="timeFunctions.hpp" alt="" coords="284,603,413,629"/>
<area shape="rect" id="node10" href="../../d9/d77/a00095.php" title="includes.hpp" alt="" coords="301,677,396,704"/>
<area shape="rect" id="node11" href="../../d5/df9/a00044.php" title="Clock.hpp" alt="" coords="5,901,87,928"/>
<area shape="rect" id="node32" href="../../dc/dee/a00053.php" title="ConsoleTable.hpp" alt="" coords="56,827,183,853"/>
<area shape="rect" id="node33" href="../../de/de1/a00065.php" title="Date.hpp" alt="" coords="135,752,210,779"/>
<area shape="rect" id="node35" href="../../d1/d44/a00098.php" title="IOConfig.hpp" alt="" coords="297,901,395,928"/>
<area shape="rect" id="node36" href="../../de/d76/a00134.php" title="Path.hpp" alt="" coords="386,752,461,779"/>
<area shape="rect" id="node41" href="../../d9/db6/a00146.php" title="PathfindingException.hpp" alt="" coords="485,752,655,779"/>
<area shape="rect" id="node42" href="../../dc/de6/a00167.php" title="Referenced.hpp" alt="" coords="547,976,662,1003"/>
<area shape="rect" id="node43" href="../../de/df3/a00185.php" title="Threadable.hpp" alt="" coords="688,976,799,1003"/>
<area shape="rect" id="node46" href="../../da/d15/a00188.php" title="Time.hpp" alt="" coords="235,752,311,779"/>
<area shape="rect" id="node12" href="../../d0/d89/a00071.php" title="defines.hpp" alt="" coords="336,1125,425,1152"/>
<area shape="rect" id="node13" href="../../df/d03/a00062.php" title="cryptage.hpp" alt="" coords="223,1200,320,1227"/>
<area shape="rect" id="node30" href="../../d0/dc2/a00104.php" title="Map.hpp" alt="" coords="345,1200,417,1227"/>
<area shape="rect" id="node31" href="../../de/db1/a00197.php" title="Tree.hpp" alt="" coords="441,1200,515,1227"/>
<area shape="rect" id="node14" href="../../d4/d8c/a00035.php" title="C++.hpp" alt="" coords="344,1275,417,1301"/>
<area shape="rect" id="node15" href="../../d9/d2e/a00056.php" title="Contraption.hpp" alt="" coords="277,1349,391,1376"/>
<area shape="rect" id="node29" href="../../d1/dc1/a00092.php" title="Identifier.hpp" alt="" coords="376,1723,473,1749"/>
<area shape="rect" id="node16" href="../../d1/d09/a00077.php" title="Entity.hpp" alt="" coords="180,1424,261,1451"/>
<area shape="rect" id="node27" href="../../d7/d06/a00131.php" title="Object.hpp" alt="" coords="299,1424,385,1451"/>
<area shape="rect" id="node17" href="../../db/dab/a00089.php" title="Hostile.hpp" alt="" coords="66,1499,154,1525"/>
<area shape="rect" id="node24" href="../../d5/df1/a00206.php" title="Vegetal.hpp" alt="" coords="175,1573,266,1600"/>
<area shape="rect" id="node18" href="../../d7/d46/a00002.php" title="Animal.hpp" alt="" coords="37,1573,124,1600"/>
<area shape="rect" id="node19" href="../../dd/dad/a00005.php" title="Ant.hpp" alt="" coords="39,1648,106,1675"/>
<area shape="rect" id="node20" href="../../db/db6/a00074.php" title="Entities.hpp" alt="" coords="257,1723,347,1749"/>
<area shape="rect" id="node21" href="../../d6/db8/a00158.php" title="PlayerAbstraction.hpp" alt="" coords="229,1797,380,1824"/>
<area shape="rect" id="node22" href="../../d3/df8/a00155.php" title="Player.hpp" alt="" coords="319,1872,403,1899"/>
<area shape="rect" id="node23" href="../../d8/d41/a00038.php" title="C++Entities.hpp" alt="" coords="302,1947,419,1973"/>
<area shape="rect" id="node25" href="../../dc/dfe/a00125.php" title="Mushroom.hpp" alt="" coords="131,1648,239,1675"/>
<area shape="rect" id="node26" href="../../d7/d9a/a00152.php" title="Plant.hpp" alt="" coords="263,1648,341,1675"/>
<area shape="rect" id="node28" href="../../d5/de9/a00176.php" title="Stone.hpp" alt="" coords="309,1499,391,1525"/>
<area shape="rect" id="node34" href="../../da/d24/a00068.php" title="DateTime.hpp" alt="" coords="207,827,311,853"/>
<area shape="rect" id="node37" href="../../da/d1e/a00149.php" title="PathfindingProblem.hpp" alt="" coords="395,827,555,853"/>
<area shape="rect" id="node38" href="../../d2/df5/a00137.php" title="Pathfinding.hpp" alt="" coords="419,901,531,928"/>
<area shape="rect" id="node39" href="../../d7/dce/a00143.php" title="PathfindingDijkstra.hpp" alt="" coords="365,976,522,1003"/>
<area shape="rect" id="node40" href="../../d5/db1/a00140.php" title="PathfindingAlgorithms.hpp" alt="" coords="356,1051,531,1077"/>
<area shape="rect" id="node44" href="../../d4/dee/a00008.php" title="Args.hpp" alt="" coords="606,1051,681,1077"/>
<area shape="rect" id="node45" href="../../dc/d57/a00194.php" title="Timer.hpp" alt="" coords="705,1051,785,1077"/>
</map>
</div>
</div><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="namespaces"></a>
Namespaces</h2></td></tr>
<tr class="memitem:d3/dd1/a00214"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d3/dd1/a00214.php">mcd</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:ace8a4328114062b56cf578ad92df821f"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d3/dd1/a00214.php#ace8a4328114062b56cf578ad92df821f">mcd::collidesC</a> (double64_t r1, double64_t x1, double64_t y1, double64_t r2, double64_t x2, double64_t y2)</td></tr>
<tr class="memdesc:ace8a4328114062b56cf578ad92df821f"><td class="mdescLeft">&#160;</td><td class="mdescRight">Compute if there is a collision between two circles.  <a href="../../d3/dd1/a00214.php#ace8a4328114062b56cf578ad92df821f">More...</a><br /></td></tr>
<tr class="separator:ace8a4328114062b56cf578ad92df821f"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ab43dbb509e6ac3b52cd7767a1fb6bdaa"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d3/dd1/a00214.php#ab43dbb509e6ac3b52cd7767a1fb6bdaa">mcd::collidesR</a> (double64_t x1, double64_t y1, double64_t w1, double64_t h1, double64_t x2, double64_t y2, double64_t w2, double64_t h2)</td></tr>
<tr class="memdesc:ab43dbb509e6ac3b52cd7767a1fb6bdaa"><td class="mdescLeft">&#160;</td><td class="mdescRight">Compute if there is a collision between two rectangles.  <a href="../../d3/dd1/a00214.php#ab43dbb509e6ac3b52cd7767a1fb6bdaa">More...</a><br /></td></tr>
<tr class="separator:ab43dbb509e6ac3b52cd7767a1fb6bdaa"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:adbb1b1f3a194f48bab3af872f65b9757"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d3/dd1/a00214.php#adbb1b1f3a194f48bab3af872f65b9757">mcd::collidesRC</a> (double64_t rx, double64_t ry, double64_t w, double64_t h, double64_t cx, double64_t cy, double64_t r)</td></tr>
<tr class="memdesc:adbb1b1f3a194f48bab3af872f65b9757"><td class="mdescLeft">&#160;</td><td class="mdescRight">Compute if there is a collision between a rectangle and a circle.  <a href="../../d3/dd1/a00214.php#adbb1b1f3a194f48bab3af872f65b9757">More...</a><br /></td></tr>
<tr class="separator:adbb1b1f3a194f48bab3af872f65b9757"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ae694a8102421f25c163a0ef7a9e903e2"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d3/dd1/a00214.php#ae694a8102421f25c163a0ef7a9e903e2">mcd::collidesPC</a> (double64_t cx, double64_t cy, double64_t r, double64_t x, double64_t y)</td></tr>
<tr class="memdesc:ae694a8102421f25c163a0ef7a9e903e2"><td class="mdescLeft">&#160;</td><td class="mdescRight">Compute if there is a collision between a point and a circle.  <a href="../../d3/dd1/a00214.php#ae694a8102421f25c163a0ef7a9e903e2">More...</a><br /></td></tr>
<tr class="separator:ae694a8102421f25c163a0ef7a9e903e2"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a3c001118da32a4466802e0b378af661b"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d3/dd1/a00214.php#a3c001118da32a4466802e0b378af661b">mcd::collidesPR</a> (double64_t rx, double64_t ry, double64_t w, double64_t h, double64_t x, double64_t y)</td></tr>
<tr class="memdesc:a3c001118da32a4466802e0b378af661b"><td class="mdescLeft">&#160;</td><td class="mdescRight">Compute if there is a collision between a point and a rectangle.  <a href="../../d3/dd1/a00214.php#a3c001118da32a4466802e0b378af661b">More...</a><br /></td></tr>
<tr class="separator:a3c001118da32a4466802e0b378af661b"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:af6f9411fa8041c4f9f81519deeba4a0a"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d3/dd1/a00214.php#af6f9411fa8041c4f9f81519deeba4a0a">mcd::ProjectionSurSegment</a> (double64_t Cx, double64_t Cy, double64_t Ax, double64_t Ay, double64_t Bx, double64_t By)</td></tr>
<tr class="memdesc:af6f9411fa8041c4f9f81519deeba4a0a"><td class="mdescLeft">&#160;</td><td class="mdescRight">Compute if there is a collision on a segment.  <a href="../../d3/dd1/a00214.php#af6f9411fa8041c4f9f81519deeba4a0a">More...</a><br /></td></tr>
<tr class="separator:af6f9411fa8041c4f9f81519deeba4a0a"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><dl class="section author"><dt>Author</dt><dd>Mathias CABIOCH-DELALANDE </dd></dl>
<dl class="section date"><dt>Date</dt><dd>Last modification : September, 17 2019 </dd></dl>
</div></div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../dir_bfccd401955b95cf8c75461437045ac0.php">inc</a></li><li class="navelem"><a class="el" href="../../dir_2ce2ad1ea5ded593884489da6d66e532.php">C++</a></li><li class="navelem"><a class="el" href="../../d6/d2d/a00047.php">collides.hpp</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
