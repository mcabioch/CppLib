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
				$text = "Generated on Fri Dec 13 2019 22:15:49 for C++ by";
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
$(document).ready(function(){initNavTree('d5/dcb/a00170.php','../../');});
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
<div class="textblock"><code>#include &quot;<a class="el" href="../../dc/de6/a00167.php">C++/PathfindingException.hpp</a>&quot;</code><br />
<code>#include &quot;<a class="el" href="../../d3/df8/a00155.php">C++/Path.hpp</a>&quot;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for PathfindingProblem.hpp:</div>
<div class="dyncontent">
<div class="center"><img src="../../d1/d0d/a00171.png" border="0" usemap="#PathfindingProblem_8hpp" alt=""/></div>
<map name="PathfindingProblem_8hpp" id="PathfindingProblem_8hpp">
<area shape="rect" id="node2" href="../../dc/de6/a00167.php" title="C++/PathfindingException.hpp" alt="" coords="643,80,843,107"/>
<area shape="rect" id="node73" href="../../d3/df8/a00155.php" title="C++/Path.hpp" alt="" coords="867,80,971,107"/>
<area shape="rect" id="node3" href="../../d0/dc2/a00104.php" title="C++/includes.hpp" alt="" coords="768,155,893,181"/>
<area shape="rect" id="node4" href="../../d7/dce/a00143.php" title="C++/NotCopyable.hpp" alt="" coords="211,229,365,256"/>
<area shape="rect" id="node5" href="../../d9/db6/a00146.php" title="C++/NotInstantiable.hpp" alt="" coords="389,229,555,256"/>
<area shape="rect" id="node6" href="../../dc/d9a/a00218.php" title="C++/timeFunctions.hpp" alt="" coords="579,229,738,256"/>
<area shape="rect" id="node8" href="../../de/d79/a00203.php" title="Used to replace strptime function when compiling for Windows. " alt="" coords="657,304,767,331"/>
<area shape="rect" id="node9" href="../../d3/db1/a00200.php" title="C++/string.hpp" alt="" coords="657,379,767,405"/>
<area shape="rect" id="node11" href="../../d5/df1/a00206.php" title="C++/system.hpp" alt="" coords="584,453,704,480"/>
<area shape="rect" id="node65" href="../../d9/dd0/a00191.php" title="C++/RNG.hpp" alt="" coords="728,453,835,480"/>
<area shape="rect" id="node67" href="../../d4/d3e/a00116.php" title="C++/macro.hpp" alt="" coords="859,453,973,480"/>
<area shape="rect" id="node12" href="../../db/dab/a00089.php" title="C++/errors.hpp" alt="" coords="589,528,699,555"/>
<area shape="rect" id="node13" href="../../d3/d8b/a00059.php" title="C++/console.hpp" alt="" coords="515,603,637,629"/>
<area shape="rect" id="node63" href="../../d1/dc1/a00092.php" title="C++/files.hpp" alt="" coords="661,603,763,629"/>
<area shape="rect" id="node14" href="../../da/d24/a00068.php" title="C++/convert.hpp" alt="" coords="525,677,645,704"/>
<area shape="rect" id="node16" href="../../da/d45/a00011.php" title="C++/array.hpp" alt="" coords="592,752,699,779"/>
<area shape="rect" id="node18" href="../../d5/de0/a00050.php" title="C++/check.hpp" alt="" coords="589,827,701,853"/>
<area shape="rect" id="node62" href="../../dc/d57/a00194.php" title="C++/sorting.hpp" alt="" coords="727,827,843,853"/>
<area shape="rect" id="node21" href="../../d6/de1/a00233.php" title="C++/vector.hpp" alt="" coords="730,901,843,928"/>
<area shape="rect" id="node56" href="../../d9/d2e/a00056.php" title="C++/collides.hpp" alt="" coords="585,901,706,928"/>
<area shape="rect" id="node22" href="../../d2/de7/a00014.php" title="C++/arraysIncludes.hpp" alt="" coords="751,976,913,1003"/>
<area shape="rect" id="node29" href="../../d7/d25/a00182.php" title="C++/pointers.hpp" alt="" coords="713,1275,836,1301"/>
<area shape="rect" id="node30" href="../../d9/d01/a00227.php" title="C++/types.hpp" alt="" coords="612,1349,721,1376"/>
<area shape="rect" id="node32" href="../../d3/d52/a00023.php" title="Big.hpp" alt="" coords="633,1424,700,1451"/>
<area shape="rect" id="node51" href="../../d5/ddf/a00224.php" title="C++/Tree.hpp" alt="" coords="506,1424,609,1451"/>
<area shape="rect" id="node52" href="../../de/df3/a00185.php" title="PureVirtual.hpp" alt="" coords="725,1424,835,1451"/>
<area shape="rect" id="node53" href="../../d1/da8/a00230.php" title="UsefullDefines.hpp" alt="" coords="860,1424,993,1451"/>
<area shape="rect" id="node33" href="../../d7/d9a/a00152.php" title="C++/OsDetection.hpp" alt="" coords="322,1499,473,1525"/>
<area shape="rect" id="node47" href="../../d5/d16/a00029.php" title="C++/Big_Constructor.hpp" alt="" coords="1035,1499,1205,1525"/>
<area shape="rect" id="node48" href="../../d4/d8c/a00035.php" title="C++/Big_Operator.hpp" alt="" coords="497,1499,650,1525"/>
<area shape="rect" id="node49" href="../../d6/d5b/a00026.php" title="C++/Big_Comparison.hpp" alt="" coords="675,1499,848,1525"/>
<area shape="rect" id="node50" href="../../dc/d87/a00032.php" title="C++/Big_Maths.hpp" alt="" coords="872,1499,1011,1525"/>
<area shape="rect" id="node35" href="../../d3/d00/a00113.php" title="C++/lowIncludes.hpp" alt="" coords="391,1573,537,1600"/>
<area shape="rect" id="node57" href="../../dc/dfe/a00125.php" title="C++/Matrix.hpp" alt="" coords="543,976,657,1003"/>
<area shape="rect" id="node58" href="../../d9/d77/a00095.php" title="C++/Fraction.hpp" alt="" coords="419,1051,543,1077"/>
<area shape="rect" id="node59" href="../../df/dc8/a00122.php" title="C++/maths.hpp" alt="" coords="425,1125,538,1152"/>
<area shape="rect" id="node60" href="../../d8/d41/a00038.php" title="C++/Binary.hpp" alt="" coords="671,1200,785,1227"/>
</map>
</div>
</div><div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="../../d6/dfb/a00172.png" border="0" usemap="#PathfindingProblem_8hppdep" alt=""/></div>
<map name="PathfindingProblem_8hppdep" id="PathfindingProblem_8hppdep">
<area shape="rect" id="node2" href="../../d6/db8/a00158.php" title="Pathfinding.hpp" alt="" coords="294,80,406,107"/>
<area shape="rect" id="node3" href="../../db/ddf/a00164.php" title="PathfindingDijkstra.hpp" alt="" coords="271,155,429,181"/>
<area shape="rect" id="node4" href="../../d6/d7d/a00161.php" title="PathfindingAlgorithms.hpp" alt="" coords="263,229,437,256"/>
<area shape="rect" id="node5" href="../../df/d6a/a00119.php" title="Map.hpp" alt="" coords="314,304,386,331"/>
<area shape="rect" id="node6" href="../../da/dec/a00080.php" title="defines.hpp" alt="" coords="305,379,395,405"/>
<area shape="rect" id="node7" href="../../db/db2/a00020.php" title="AssertionException.hpp" alt="" coords="211,453,371,480"/>
<area shape="rect" id="node28" href="../../d0/d89/a00071.php" title="cryptage.hpp" alt="" coords="359,528,456,555"/>
<area shape="rect" id="node8" href="../../d4/d51/a00017.php" title="Assert.hpp" alt="" coords="249,528,334,555"/>
<area shape="rect" id="node9" href="../../d6/d2d/a00047.php" title="C++lib.hpp" alt="" coords="305,603,392,629"/>
<area shape="rect" id="node10" href="../../d4/d81/a00110.php" title="Logger.hpp" alt="" coords="253,677,340,704"/>
<area shape="rect" id="node27" href="../../d3/de5/a00209.php" title="Test.hpp" alt="" coords="364,677,437,704"/>
<area shape="rect" id="node11" href="../../dd/d32/a00041.php" title="C++.hpp" alt="" coords="312,752,385,779"/>
<area shape="rect" id="node12" href="../../de/de1/a00065.php" title="Contraption.hpp" alt="" coords="245,827,359,853"/>
<area shape="rect" id="node26" href="../../d4/d3a/a00101.php" title="Identifier.hpp" alt="" coords="344,1200,441,1227"/>
<area shape="rect" id="node13" href="../../da/d2a/a00086.php" title="Entity.hpp" alt="" coords="148,901,229,928"/>
<area shape="rect" id="node24" href="../../da/d1e/a00149.php" title="Object.hpp" alt="" coords="267,901,353,928"/>
<area shape="rect" id="node14" href="../../d1/d44/a00098.php" title="Hostile.hpp" alt="" coords="34,976,122,1003"/>
<area shape="rect" id="node21" href="../../d7/d40/a00236.php" title="Vegetal.hpp" alt="" coords="143,1051,234,1077"/>
<area shape="rect" id="node15" href="../../d7/d46/a00002.php" title="Animal.hpp" alt="" coords="5,1051,92,1077"/>
<area shape="rect" id="node16" href="../../dd/dad/a00005.php" title="Ant.hpp" alt="" coords="7,1125,74,1152"/>
<area shape="rect" id="node17" href="../../d2/d1f/a00083.php" title="Entities.hpp" alt="" coords="225,1200,315,1227"/>
<area shape="rect" id="node18" href="../../db/dd9/a00179.php" title="PlayerAbstraction.hpp" alt="" coords="197,1275,348,1301"/>
<area shape="rect" id="node19" href="../../d5/de9/a00176.php" title="Player.hpp" alt="" coords="287,1349,371,1376"/>
<area shape="rect" id="node20" href="../../d5/df9/a00044.php" title="C++Entities.hpp" alt="" coords="270,1424,387,1451"/>
<area shape="rect" id="node22" href="../../d5/db1/a00140.php" title="Mushroom.hpp" alt="" coords="99,1125,207,1152"/>
<area shape="rect" id="node23" href="../../d7/d3f/a00173.php" title="Plant.hpp" alt="" coords="231,1125,309,1152"/>
<area shape="rect" id="node25" href="../../de/db1/a00197.php" title="Stone.hpp" alt="" coords="277,976,359,1003"/>
</map>
</div>
</div><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Classes</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dd/d57/a01054.php">mcd::PathfindingProblem</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A class to group every pathfinding problems in one way to use it.  <a href="../../dd/d57/a01054.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="namespaces"></a>
Namespaces</h2></td></tr>
<tr class="memitem:d6/d08/a00244"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d6/d08/a00244.php">mcd</a></td></tr>
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
		<li class="navelem"><a class="el" href="../../dir_bfccd401955b95cf8c75461437045ac0.php">inc</a></li><li class="navelem"><a class="el" href="../../dir_2ce2ad1ea5ded593884489da6d66e532.php">C++</a></li><li class="navelem"><a class="el" href="../../d5/dcb/a00170.php">PathfindingProblem.hpp</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
