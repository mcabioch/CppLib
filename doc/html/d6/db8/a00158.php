<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.13"/>
		<title>C++: PathfindingProblem.hpp File Reference</title>
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
				$text = "Generated on Sat Nov 9 2019 14:37:52 for C++ by";
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
$(document).ready(function(){initNavTree('d6/db8/a00158.php','../../');});
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
<div class="title">PathfindingProblem.hpp File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><code>#include &quot;<a class="el" href="../../d3/df8/a00155.php">C++/PathfindingException.hpp</a>&quot;</code><br />
<code>#include &quot;<a class="el" href="../../d7/dce/a00143.php">C++/Path.hpp</a>&quot;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for PathfindingProblem.hpp:</div>
<div class="dyncontent">
<div class="center"><img src="../../de/db9/a00159.png" border="0" usemap="#PathfindingProblem_8hpp" alt=""/></div>
<map name="PathfindingProblem_8hpp" id="PathfindingProblem_8hpp">
<area shape="rect" id="node2" href="../../d3/df8/a00155.php" title="C++/PathfindingException.hpp" alt="" coords="1209,80,1409,107"/>
<area shape="rect" id="node73" href="../../d7/dce/a00143.php" title="C++/Path.hpp" alt="" coords="1433,80,1537,107"/>
<area shape="rect" id="node3" href="../../d9/d77/a00095.php" title="C++/includes.hpp" alt="" coords="1335,155,1460,181"/>
<area shape="rect" id="node4" href="../../de/d79/a00203.php" title="C++/timeFunctions.hpp" alt="" coords="738,229,897,256"/>
<area shape="rect" id="node65" href="../../d7/d06/a00131.php" title="C++/NotCopyable.hpp" alt="" coords="921,229,1074,256"/>
<area shape="rect" id="node66" href="../../de/d76/a00134.php" title="C++/NotInstantiable.hpp" alt="" coords="1099,229,1264,256"/>
<area shape="rect" id="node6" href="../../d9/dd0/a00191.php" title="Used to replace strptime function when compiling for Windows. " alt="" coords="815,304,926,331"/>
<area shape="rect" id="node7" href="../../da/d15/a00188.php" title="C++/string.hpp" alt="" coords="816,379,925,405"/>
<area shape="rect" id="node9" href="../../dc/d57/a00194.php" title="C++/system.hpp" alt="" coords="743,453,863,480"/>
<area shape="rect" id="node62" href="../../db/dd9/a00179.php" title="C++/RNG.hpp" alt="" coords="887,453,993,480"/>
<area shape="rect" id="node64" href="../../d0/dc2/a00104.php" title="C++/macro.hpp" alt="" coords="1018,453,1131,480"/>
<area shape="rect" id="node10" href="../../da/dec/a00080.php" title="C++/errors.hpp" alt="" coords="747,528,858,555"/>
<area shape="rect" id="node11" href="../../d5/de0/a00050.php" title="C++/console.hpp" alt="" coords="673,603,796,629"/>
<area shape="rect" id="node60" href="../../d2/d1f/a00083.php" title="C++/files.hpp" alt="" coords="820,603,921,629"/>
<area shape="rect" id="node12" href="../../d3/d8b/a00059.php" title="C++/convert.hpp" alt="" coords="684,677,804,704"/>
<area shape="rect" id="node14" href="../../da/d45/a00011.php" title="C++/array.hpp" alt="" coords="751,752,857,779"/>
<area shape="rect" id="node16" href="../../dd/d32/a00041.php" title="C++/check.hpp" alt="" coords="748,827,860,853"/>
<area shape="rect" id="node59" href="../../d7/d25/a00182.php" title="C++/sorting.hpp" alt="" coords="886,827,1002,853"/>
<area shape="rect" id="node19" href="../../dc/d9a/a00218.php" title="C++/vector.hpp" alt="" coords="889,901,1002,928"/>
<area shape="rect" id="node53" href="../../d6/d2d/a00047.php" title="C++/collides.hpp" alt="" coords="743,901,865,928"/>
<area shape="rect" id="node20" href="../../d2/de7/a00014.php" title="C++/arraysIncludes.hpp" alt="" coords="909,976,1072,1003"/>
<area shape="rect" id="node27" href="../../d5/dcb/a00170.php" title="C++/pointers.hpp" alt="" coords="872,1275,995,1301"/>
<area shape="rect" id="node28" href="../../dd/dc1/a00212.php" title="C++/types.hpp" alt="" coords="771,1349,880,1376"/>
<area shape="rect" id="node30" href="../../d4/d51/a00017.php" title="Big.hpp" alt="" coords="736,1424,803,1451"/>
<area shape="rect" id="node49" href="../../d7/d3f/a00173.php" title="PureVirtual.hpp" alt="" coords="827,1424,938,1451"/>
<area shape="rect" id="node50" href="../../d3/dd5/a00215.php" title="UsefullDefines.hpp" alt="" coords="963,1424,1096,1451"/>
<area shape="rect" id="node31" href="../../d5/db1/a00140.php" title="C++/OsDetection.hpp" alt="" coords="322,1499,473,1525"/>
<area shape="rect" id="node45" href="../../d3/d52/a00023.php" title="C++/Big_Constructor.hpp" alt="" coords="497,1499,668,1525"/>
<area shape="rect" id="node46" href="../../d5/d16/a00029.php" title="C++/Big_Operator.hpp" alt="" coords="693,1499,846,1525"/>
<area shape="rect" id="node47" href="../../db/db2/a00020.php" title="C++/Big_Comparison.hpp" alt="" coords="871,1499,1044,1525"/>
<area shape="rect" id="node48" href="../../d6/d5b/a00026.php" title="C++/Big_Maths.hpp" alt="" coords="1068,1499,1207,1525"/>
<area shape="rect" id="node33" href="../../d4/d3a/a00101.php" title="C++/lowIncludes.hpp" alt="" coords="391,1573,537,1600"/>
<area shape="rect" id="node54" href="../../d3/d00/a00113.php" title="C++/Matrix.hpp" alt="" coords="702,976,815,1003"/>
<area shape="rect" id="node55" href="../../da/d2a/a00086.php" title="C++/Fraction.hpp" alt="" coords="578,1051,702,1077"/>
<area shape="rect" id="node56" href="../../d4/d81/a00110.php" title="C++/maths.hpp" alt="" coords="583,1125,697,1152"/>
<area shape="rect" id="node57" href="../../dc/d87/a00032.php" title="C++/Binary.hpp" alt="" coords="829,1200,944,1227"/>
</map>
</div>
</div><div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="../../de/d38/a00160.png" border="0" usemap="#PathfindingProblem_8hppdep" alt=""/></div>
<map name="PathfindingProblem_8hppdep" id="PathfindingProblem_8hppdep">
<area shape="rect" id="node2" href="../../d9/db6/a00146.php" title="Pathfinding.hpp" alt="" coords="293,80,405,107"/>
<area shape="rect" id="node3" href="../../d7/d9a/a00152.php" title="PathfindingDijkstra.hpp" alt="" coords="270,155,427,181"/>
<area shape="rect" id="node4" href="../../da/d1e/a00149.php" title="PathfindingAlgorithms.hpp" alt="" coords="261,229,436,256"/>
<area shape="rect" id="node5" href="../../d0/d89/a00071.php" title="defines.hpp" alt="" coords="304,304,393,331"/>
<area shape="rect" id="node6" href="../../df/d03/a00062.php" title="cryptage.hpp" alt="" coords="191,379,288,405"/>
<area shape="rect" id="node23" href="../../df/d98/a00107.php" title="Map.hpp" alt="" coords="313,379,385,405"/>
<area shape="rect" id="node24" href="../../d3/de5/a00209.php" title="Tree.hpp" alt="" coords="409,379,483,405"/>
<area shape="rect" id="node7" href="../../d4/d8c/a00035.php" title="C++.hpp" alt="" coords="312,453,385,480"/>
<area shape="rect" id="node8" href="../../d9/d2e/a00056.php" title="Contraption.hpp" alt="" coords="245,528,359,555"/>
<area shape="rect" id="node22" href="../../d1/dc1/a00092.php" title="Identifier.hpp" alt="" coords="344,901,441,928"/>
<area shape="rect" id="node9" href="../../d1/d09/a00077.php" title="Entity.hpp" alt="" coords="148,603,229,629"/>
<area shape="rect" id="node20" href="../../d2/df5/a00137.php" title="Object.hpp" alt="" coords="267,603,353,629"/>
<area shape="rect" id="node10" href="../../db/dab/a00089.php" title="Hostile.hpp" alt="" coords="34,677,122,704"/>
<area shape="rect" id="node17" href="../../dd/d52/a00221.php" title="Vegetal.hpp" alt="" coords="143,752,234,779"/>
<area shape="rect" id="node11" href="../../d7/d46/a00002.php" title="Animal.hpp" alt="" coords="5,752,92,779"/>
<area shape="rect" id="node12" href="../../dd/dad/a00005.php" title="Ant.hpp" alt="" coords="7,827,74,853"/>
<area shape="rect" id="node13" href="../../db/db6/a00074.php" title="Entities.hpp" alt="" coords="225,901,315,928"/>
<area shape="rect" id="node14" href="../../dc/de6/a00167.php" title="PlayerAbstraction.hpp" alt="" coords="197,976,348,1003"/>
<area shape="rect" id="node15" href="../../db/ddf/a00164.php" title="Player.hpp" alt="" coords="287,1051,371,1077"/>
<area shape="rect" id="node16" href="../../d8/d41/a00038.php" title="C++Entities.hpp" alt="" coords="270,1125,387,1152"/>
<area shape="rect" id="node18" href="../../d1/d88/a00128.php" title="Mushroom.hpp" alt="" coords="99,827,207,853"/>
<area shape="rect" id="node19" href="../../d6/d7d/a00161.php" title="Plant.hpp" alt="" coords="231,827,309,853"/>
<area shape="rect" id="node21" href="../../de/df3/a00185.php" title="Stone.hpp" alt="" coords="277,677,359,704"/>
</map>
</div>
</div><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Classes</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d6/dcd/a01023.php">mcd::PathfindingProblem</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A class to group every pathfinding problems in one way to use it.  <a href="../../d6/dcd/a01023.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="namespaces"></a>
Namespaces</h2></td></tr>
<tr class="memitem:dd/d2d/a00229"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dd/d2d/a00229.php">mcd</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><dl class="section author"><dt>Author</dt><dd>Mathias CABIOCH-DELALANDE </dd></dl>
<dl class="section date"><dt>Date</dt><dd>Created : July, 30 2018 09:16:58 </dd>
<dd>
Last modification : August, 16 2018 </dd></dl>
</div></div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../dir_bfccd401955b95cf8c75461437045ac0.php">inc</a></li><li class="navelem"><a class="el" href="../../dir_2ce2ad1ea5ded593884489da6d66e532.php">C++</a></li><li class="navelem"><a class="el" href="../../d6/db8/a00158.php">PathfindingProblem.hpp</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
