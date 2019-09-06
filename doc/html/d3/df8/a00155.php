<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.13"/>
		<title>C++: sorting.hpp File Reference</title>
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
				$text = "Generated on Fri Sep 6 2019 16:27:16 for C++ by";
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
$(document).ready(function(){initNavTree('d3/df8/a00155.php','../../');});
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
<div class="title">sorting.hpp File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><code>#include &quot;<a class="el" href="../../d2/de7/a00014.php">C++/arraysIncludes.hpp</a>&quot;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for sorting.hpp:</div>
<div class="dyncontent">
<div class="center"><img src="../../d2/d34/a00156.png" border="0" usemap="#sorting_8hpp" alt=""/></div>
<map name="sorting_8hpp" id="sorting_8hpp">
<area shape="rect" id="node2" href="../../d2/de7/a00014.php" title="C++/arraysIncludes.hpp" alt="" coords="215,80,377,107"/>
<area shape="rect" id="node9" href="../../d7/dce/a00143.php" title="C++/pointers.hpp" alt="" coords="568,155,691,181"/>
<area shape="rect" id="node12" href="../../d7/d25/a00182.php" title="C++/types.hpp" alt="" coords="683,229,792,256"/>
<area shape="rect" id="node14" href="../../db/db2/a00020.php" title="Big.hpp" alt="" coords="648,304,715,331"/>
<area shape="rect" id="node29" href="../../d9/db6/a00146.php" title="PureVirtual.hpp" alt="" coords="739,304,850,331"/>
<area shape="rect" id="node30" href="../../de/df3/a00185.php" title="UsefullDefines.hpp" alt="" coords="875,304,1008,331"/>
<area shape="rect" id="node25" href="../../d6/d5b/a00026.php" title="C++/Big_Constructor.hpp" alt="" coords="975,379,1145,405"/>
<area shape="rect" id="node26" href="../../dc/d87/a00032.php" title="C++/Big_Operator.hpp" alt="" coords="1170,379,1323,405"/>
<area shape="rect" id="node27" href="../../d3/d52/a00023.php" title="C++/Big_Comparison.hpp" alt="" coords="1348,379,1521,405"/>
<area shape="rect" id="node28" href="../../d5/d16/a00029.php" title="C++/Big_Maths.hpp" alt="" coords="1545,379,1684,405"/>
</map>
</div>
</div><div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="../../d1/db7/a00157.png" border="0" usemap="#sorting_8hppdep" alt=""/></div>
<map name="sorting_8hppdep" id="sorting_8hppdep">
<area shape="rect" id="node2" href="../../da/d45/a00011.php" title="array.hpp" alt="" coords="311,80,387,107"/>
<area shape="rect" id="node3" href="../../d3/d8b/a00059.php" title="convert.hpp" alt="" coords="303,155,394,181"/>
<area shape="rect" id="node4" href="../../d5/de0/a00050.php" title="console.hpp" alt="" coords="251,229,343,256"/>
<area shape="rect" id="node46" href="../../d2/d1f/a00083.php" title="files.hpp" alt="" coords="367,229,437,256"/>
<area shape="rect" id="node5" href="../../da/dec/a00080.php" title="errors.hpp" alt="" coords="309,304,389,331"/>
<area shape="rect" id="node6" href="../../db/ddf/a00164.php" title="system.hpp" alt="" coords="303,379,394,405"/>
<area shape="rect" id="node7" href="../../d6/d7d/a00161.php" title="string.hpp" alt="" coords="309,453,388,480"/>
<area shape="rect" id="node8" href="../../d7/d3f/a00173.php" title="timeFunctions.hpp" alt="" coords="284,528,413,555"/>
<area shape="rect" id="node9" href="../../d1/dc1/a00092.php" title="includes.hpp" alt="" coords="301,603,396,629"/>
<area shape="rect" id="node10" href="../../d5/df9/a00044.php" title="Clock.hpp" alt="" coords="5,827,87,853"/>
<area shape="rect" id="node31" href="../../dc/dee/a00053.php" title="ConsoleTable.hpp" alt="" coords="56,752,183,779"/>
<area shape="rect" id="node32" href="../../de/de1/a00065.php" title="Date.hpp" alt="" coords="135,677,210,704"/>
<area shape="rect" id="node34" href="../../d9/d77/a00095.php" title="IOConfig.hpp" alt="" coords="297,827,395,853"/>
<area shape="rect" id="node35" href="../../d4/d3e/a00116.php" title="Path.hpp" alt="" coords="386,677,461,704"/>
<area shape="rect" id="node40" href="../../d1/d88/a00128.php" title="PathfindingException.hpp" alt="" coords="485,677,655,704"/>
<area shape="rect" id="node41" href="../../da/d1e/a00149.php" title="Referenced.hpp" alt="" coords="547,901,662,928"/>
<area shape="rect" id="node42" href="../../dc/de6/a00167.php" title="Threadable.hpp" alt="" coords="688,901,799,928"/>
<area shape="rect" id="node45" href="../../d5/dcb/a00170.php" title="Time.hpp" alt="" coords="235,677,311,704"/>
<area shape="rect" id="node11" href="../../d0/d89/a00071.php" title="defines.hpp" alt="" coords="336,1051,425,1077"/>
<area shape="rect" id="node12" href="../../df/d03/a00062.php" title="cryptage.hpp" alt="" coords="223,1125,320,1152"/>
<area shape="rect" id="node29" href="../../d4/d3a/a00101.php" title="Map.hpp" alt="" coords="345,1125,417,1152"/>
<area shape="rect" id="node30" href="../../db/dd9/a00179.php" title="Tree.hpp" alt="" coords="441,1125,515,1152"/>
<area shape="rect" id="node13" href="../../d4/d8c/a00035.php" title="C++.hpp" alt="" coords="344,1200,417,1227"/>
<area shape="rect" id="node14" href="../../d9/d2e/a00056.php" title="Contraption.hpp" alt="" coords="277,1275,391,1301"/>
<area shape="rect" id="node28" href="../../db/dab/a00089.php" title="Identifier.hpp" alt="" coords="376,1648,473,1675"/>
<area shape="rect" id="node15" href="../../d1/d09/a00077.php" title="Entity.hpp" alt="" coords="180,1349,261,1376"/>
<area shape="rect" id="node26" href="../../d3/d00/a00113.php" title="Object.hpp" alt="" coords="299,1349,385,1376"/>
<area shape="rect" id="node16" href="../../da/d2a/a00086.php" title="Hostile.hpp" alt="" coords="66,1424,154,1451"/>
<area shape="rect" id="node23" href="../../da/d15/a00188.php" title="Vegetal.hpp" alt="" coords="175,1499,266,1525"/>
<area shape="rect" id="node17" href="../../d7/d46/a00002.php" title="Animal.hpp" alt="" coords="37,1499,124,1525"/>
<area shape="rect" id="node18" href="../../dd/dad/a00005.php" title="Ant.hpp" alt="" coords="39,1573,106,1600"/>
<area shape="rect" id="node19" href="../../db/db6/a00074.php" title="Entities.hpp" alt="" coords="257,1648,347,1675"/>
<area shape="rect" id="node20" href="../../d5/db1/a00140.php" title="PlayerAbstraction.hpp" alt="" coords="229,1723,380,1749"/>
<area shape="rect" id="node21" href="../../d2/df5/a00137.php" title="Player.hpp" alt="" coords="319,1797,403,1824"/>
<area shape="rect" id="node22" href="../../d8/d41/a00038.php" title="C++Entities.hpp" alt="" coords="302,1872,419,1899"/>
<area shape="rect" id="node24" href="../../df/d98/a00107.php" title="Mushroom.hpp" alt="" coords="131,1573,239,1600"/>
<area shape="rect" id="node25" href="../../de/d76/a00134.php" title="Plant.hpp" alt="" coords="263,1573,341,1600"/>
<area shape="rect" id="node27" href="../../d6/db8/a00158.php" title="Stone.hpp" alt="" coords="309,1424,391,1451"/>
<area shape="rect" id="node33" href="../../da/d24/a00068.php" title="DateTime.hpp" alt="" coords="207,752,311,779"/>
<area shape="rect" id="node36" href="../../d7/d06/a00131.php" title="PathfindingProblem.hpp" alt="" coords="395,752,555,779"/>
<area shape="rect" id="node37" href="../../df/d6a/a00119.php" title="Pathfinding.hpp" alt="" coords="419,827,531,853"/>
<area shape="rect" id="node38" href="../../dc/dfe/a00125.php" title="PathfindingDijkstra.hpp" alt="" coords="365,901,522,928"/>
<area shape="rect" id="node39" href="../../df/dc8/a00122.php" title="PathfindingAlgorithms.hpp" alt="" coords="356,976,531,1003"/>
<area shape="rect" id="node43" href="../../d4/dee/a00008.php" title="Args.hpp" alt="" coords="606,976,681,1003"/>
<area shape="rect" id="node44" href="../../d5/de9/a00176.php" title="Timer.hpp" alt="" coords="705,976,785,1003"/>
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
<tr class="memitem:aded48db1a26c07f913737ebb691c64bf"><td class="memTemplParams" colspan="2">template&lt;typename Key , typename Value &gt; </td></tr>
<tr class="memitem:aded48db1a26c07f913737ebb691c64bf"><td class="memTemplItemLeft" align="right" valign="top">auto&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d7/ded/a00196.php#aded48db1a26c07f913737ebb691c64bf">mcd::sortAsc</a> (std::map&lt; Key, Value &gt; map)</td></tr>
<tr class="memdesc:aded48db1a26c07f913737ebb691c64bf"><td class="mdescLeft">&#160;</td><td class="mdescRight">sort a map ascendently  <a href="../../d7/ded/a00196.php#aded48db1a26c07f913737ebb691c64bf">More...</a><br /></td></tr>
<tr class="separator:aded48db1a26c07f913737ebb691c64bf"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a878c72753e2d2de82e186351a5314bb6"><td class="memTemplParams" colspan="2">template&lt;class Key , class Value &gt; </td></tr>
<tr class="memitem:a878c72753e2d2de82e186351a5314bb6"><td class="memTemplItemLeft" align="right" valign="top">auto&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d7/ded/a00196.php#a878c72753e2d2de82e186351a5314bb6">mcd::sortDesc</a> (std::map&lt; Key, Value &gt; map)</td></tr>
<tr class="memdesc:a878c72753e2d2de82e186351a5314bb6"><td class="mdescLeft">&#160;</td><td class="mdescRight">Sort a map descendently.  <a href="../../d7/ded/a00196.php#a878c72753e2d2de82e186351a5314bb6">More...</a><br /></td></tr>
<tr class="separator:a878c72753e2d2de82e186351a5314bb6"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><dl class="section author"><dt>Author</dt><dd>Mathias CABIOCH-DELALANDE </dd></dl>
<dl class="section date"><dt>Date</dt><dd>Last modification : August, 05 2018 </dd></dl>
</div></div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../dir_bfccd401955b95cf8c75461437045ac0.php">inc</a></li><li class="navelem"><a class="el" href="../../dir_2ce2ad1ea5ded593884489da6d66e532.php">C++</a></li><li class="navelem"><a class="el" href="../../d3/df8/a00155.php">sorting.hpp</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
