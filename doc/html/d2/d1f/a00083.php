<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.13"/>
		<title>C++: Fraction.hpp File Reference</title>
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
				$text = "Generated on Tue Sep 24 2019 18:58:40 for C++ by";
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
$(document).ready(function(){initNavTree('d2/d1f/a00083.php','../../');});
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
<div class="title">Fraction.hpp File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><code>#include &quot;<a class="el" href="../../d0/dc2/a00104.php">C++/maths.hpp</a>&quot;</code><br />
<code>#include &lt;iomanip&gt;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for Fraction.hpp:</div>
<div class="dyncontent">
<div class="center"><img src="../../df/d5d/a00084.png" border="0" usemap="#Fraction_8hpp" alt=""/></div>
<map name="Fraction_8hpp" id="Fraction_8hpp">
<area shape="rect" id="node2" href="../../d0/dc2/a00104.php" title="C++/maths.hpp" alt="" coords="485,80,598,107"/>
<area shape="rect" id="node3" href="../../d6/db8/a00158.php" title="C++/pointers.hpp" alt="" coords="480,155,603,181"/>
<area shape="rect" id="node6" href="../../de/db1/a00197.php" title="C++/types.hpp" alt="" coords="595,229,704,256"/>
<area shape="rect" id="node8" href="../../d4/d51/a00017.php" title="Big.hpp" alt="" coords="560,304,627,331"/>
<area shape="rect" id="node23" href="../../d6/d7d/a00161.php" title="PureVirtual.hpp" alt="" coords="651,304,762,331"/>
<area shape="rect" id="node24" href="../../d3/db1/a00200.php" title="UsefullDefines.hpp" alt="" coords="787,304,920,331"/>
<area shape="rect" id="node19" href="../../d3/d52/a00023.php" title="C++/Big_Constructor.hpp" alt="" coords="887,379,1057,405"/>
<area shape="rect" id="node20" href="../../d5/d16/a00029.php" title="C++/Big_Operator.hpp" alt="" coords="1082,379,1235,405"/>
<area shape="rect" id="node21" href="../../db/db2/a00020.php" title="C++/Big_Comparison.hpp" alt="" coords="1260,379,1433,405"/>
<area shape="rect" id="node22" href="../../d6/d5b/a00026.php" title="C++/Big_Maths.hpp" alt="" coords="1457,379,1596,405"/>
</map>
</div>
</div><div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="../../df/d13/a00085.png" border="0" usemap="#Fraction_8hppdep" alt=""/></div>
<map name="Fraction_8hppdep" id="Fraction_8hppdep">
<area shape="rect" id="node2" href="../../df/d98/a00107.php" title="Matrix.hpp" alt="" coords="307,80,390,107"/>
<area shape="rect" id="node3" href="../../d5/df9/a00044.php" title="collides.hpp" alt="" coords="303,155,394,181"/>
<area shape="rect" id="node4" href="../../d8/d41/a00038.php" title="check.hpp" alt="" coords="307,229,390,256"/>
<area shape="rect" id="node5" href="../../da/d45/a00011.php" title="array.hpp" alt="" coords="311,304,387,331"/>
<area shape="rect" id="node6" href="../../d9/d2e/a00056.php" title="convert.hpp" alt="" coords="303,379,394,405"/>
<area shape="rect" id="node7" href="../../d6/d2d/a00047.php" title="console.hpp" alt="" coords="251,453,343,480"/>
<area shape="rect" id="node49" href="../../da/dec/a00080.php" title="files.hpp" alt="" coords="367,453,437,480"/>
<area shape="rect" id="node8" href="../../d1/d09/a00077.php" title="errors.hpp" alt="" coords="309,528,389,555"/>
<area shape="rect" id="node9" href="../../db/dd9/a00179.php" title="system.hpp" alt="" coords="303,603,394,629"/>
<area shape="rect" id="node10" href="../../d5/de9/a00176.php" title="string.hpp" alt="" coords="309,677,388,704"/>
<area shape="rect" id="node11" href="../../da/d15/a00188.php" title="timeFunctions.hpp" alt="" coords="284,752,413,779"/>
<area shape="rect" id="node12" href="../../d1/dc1/a00092.php" title="includes.hpp" alt="" coords="301,827,396,853"/>
<area shape="rect" id="node13" href="../../dd/d32/a00041.php" title="Clock.hpp" alt="" coords="5,1051,87,1077"/>
<area shape="rect" id="node34" href="../../d5/de0/a00050.php" title="ConsoleTable.hpp" alt="" coords="56,976,183,1003"/>
<area shape="rect" id="node35" href="../../df/d03/a00062.php" title="Date.hpp" alt="" coords="135,901,210,928"/>
<area shape="rect" id="node37" href="../../d9/d77/a00095.php" title="IOConfig.hpp" alt="" coords="297,1051,395,1077"/>
<area shape="rect" id="node38" href="../../d7/d06/a00131.php" title="Path.hpp" alt="" coords="386,901,461,928"/>
<area shape="rect" id="node43" href="../../d7/dce/a00143.php" title="PathfindingException.hpp" alt="" coords="485,901,655,928"/>
<area shape="rect" id="node44" href="../../db/ddf/a00164.php" title="Referenced.hpp" alt="" coords="547,1125,662,1152"/>
<area shape="rect" id="node45" href="../../d7/d25/a00182.php" title="Threadable.hpp" alt="" coords="688,1125,799,1152"/>
<area shape="rect" id="node48" href="../../de/df3/a00185.php" title="Time.hpp" alt="" coords="235,901,311,928"/>
<area shape="rect" id="node14" href="../../da/d24/a00068.php" title="defines.hpp" alt="" coords="336,1275,425,1301"/>
<area shape="rect" id="node15" href="../../d3/d8b/a00059.php" title="cryptage.hpp" alt="" coords="223,1349,320,1376"/>
<area shape="rect" id="node32" href="../../d4/d3a/a00101.php" title="Map.hpp" alt="" coords="345,1349,417,1376"/>
<area shape="rect" id="node33" href="../../dc/d57/a00194.php" title="Tree.hpp" alt="" coords="441,1349,515,1376"/>
<area shape="rect" id="node16" href="../../dc/d87/a00032.php" title="C++.hpp" alt="" coords="344,1424,417,1451"/>
<area shape="rect" id="node17" href="../../dc/dee/a00053.php" title="Contraption.hpp" alt="" coords="277,1499,391,1525"/>
<area shape="rect" id="node31" href="../../db/dab/a00089.php" title="Identifier.hpp" alt="" coords="376,1872,473,1899"/>
<area shape="rect" id="node18" href="../../db/db6/a00074.php" title="Entity.hpp" alt="" coords="180,1573,261,1600"/>
<area shape="rect" id="node29" href="../../d1/d88/a00128.php" title="Object.hpp" alt="" coords="299,1573,385,1600"/>
<area shape="rect" id="node19" href="../../da/d2a/a00086.php" title="Hostile.hpp" alt="" coords="66,1648,154,1675"/>
<area shape="rect" id="node26" href="../../de/d79/a00203.php" title="Vegetal.hpp" alt="" coords="175,1723,266,1749"/>
<area shape="rect" id="node20" href="../../d7/d46/a00002.php" title="Animal.hpp" alt="" coords="37,1723,124,1749"/>
<area shape="rect" id="node21" href="../../dd/dad/a00005.php" title="Ant.hpp" alt="" coords="39,1797,106,1824"/>
<area shape="rect" id="node22" href="../../d0/d89/a00071.php" title="Entities.hpp" alt="" coords="257,1872,347,1899"/>
<area shape="rect" id="node23" href="../../d3/df8/a00155.php" title="PlayerAbstraction.hpp" alt="" coords="229,1947,380,1973"/>
<area shape="rect" id="node24" href="../../d7/d9a/a00152.php" title="Player.hpp" alt="" coords="319,2021,403,2048"/>
<area shape="rect" id="node25" href="../../d4/d8c/a00035.php" title="C++Entities.hpp" alt="" coords="302,2096,419,2123"/>
<area shape="rect" id="node27" href="../../df/dc8/a00122.php" title="Mushroom.hpp" alt="" coords="131,1797,239,1824"/>
<area shape="rect" id="node28" href="../../da/d1e/a00149.php" title="Plant.hpp" alt="" coords="263,1797,341,1824"/>
<area shape="rect" id="node30" href="../../d7/d3f/a00173.php" title="Stone.hpp" alt="" coords="309,1648,391,1675"/>
<area shape="rect" id="node36" href="../../de/de1/a00065.php" title="DateTime.hpp" alt="" coords="207,976,311,1003"/>
<area shape="rect" id="node39" href="../../d9/db6/a00146.php" title="PathfindingProblem.hpp" alt="" coords="395,976,555,1003"/>
<area shape="rect" id="node40" href="../../de/d76/a00134.php" title="Pathfinding.hpp" alt="" coords="419,1051,531,1077"/>
<area shape="rect" id="node41" href="../../d5/db1/a00140.php" title="PathfindingDijkstra.hpp" alt="" coords="365,1125,522,1152"/>
<area shape="rect" id="node42" href="../../d2/df5/a00137.php" title="PathfindingAlgorithms.hpp" alt="" coords="356,1200,531,1227"/>
<area shape="rect" id="node46" href="../../d4/dee/a00008.php" title="Args.hpp" alt="" coords="606,1200,681,1227"/>
<area shape="rect" id="node47" href="../../d9/dd0/a00191.php" title="Timer.hpp" alt="" coords="705,1200,785,1227"/>
</map>
</div>
</div><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Classes</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dd/d38/a00928.php">mcd::Fraction</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A class to manage fractions.  <a href="../../dd/d38/a00928.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="namespaces"></a>
Namespaces</h2></td></tr>
<tr class="memitem:dd/ded/a00211"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dd/ded/a00211.php">mcd</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><dl class="section author"><dt>Author</dt><dd>Mathias CABIOCH-DELALANDE </dd></dl>
<dl class="section date"><dt>Date</dt><dd>Created : Monday September, 16 2019 17:05:47 </dd>
<dd>
Last modification : Monday September, 17 2019 </dd></dl>
</div></div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../dir_bfccd401955b95cf8c75461437045ac0.php">inc</a></li><li class="navelem"><a class="el" href="../../dir_2ce2ad1ea5ded593884489da6d66e532.php">C++</a></li><li class="navelem"><a class="el" href="../../d2/d1f/a00083.php">Fraction.hpp</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
