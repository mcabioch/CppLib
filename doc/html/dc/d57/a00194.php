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
				$text = "Generated on Tue Jan 7 2020 14:03:44 for C++ by";
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
$(document).ready(function(){initNavTree('dc/d57/a00194.php','../../');});
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
<div class="textblock"><code>#include &quot;<a class="el" href="../../d6/de1/a00233.php">C++/vector.hpp</a>&quot;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for sorting.hpp:</div>
<div class="dyncontent">
<div class="center"><img src="../../d3/d2a/a00195.png" border="0" usemap="#sorting_8hpp" alt=""/></div>
<map name="sorting_8hpp" id="sorting_8hpp">
<area shape="rect" id="node2" href="../../d6/de1/a00233.php" title="C++/vector.hpp" alt="" coords="394,80,507,107"/>
<area shape="rect" id="node3" href="../../d2/de7/a00014.php" title="C++/arraysIncludes.hpp" alt="" coords="369,155,532,181"/>
<area shape="rect" id="node10" href="../../d7/d25/a00182.php" title="C++/pointers.hpp" alt="" coords="723,229,845,256"/>
<area shape="rect" id="node11" href="../../d9/d01/a00227.php" title="C++/types.hpp" alt="" coords="621,304,731,331"/>
<area shape="rect" id="node13" href="../../d3/d52/a00023.php" title="Big.hpp" alt="" coords="643,379,709,405"/>
<area shape="rect" id="node32" href="../../d5/ddf/a00224.php" title="C++/Tree.hpp" alt="" coords="515,379,618,405"/>
<area shape="rect" id="node33" href="../../de/df3/a00185.php" title="PureVirtual.hpp" alt="" coords="734,379,845,405"/>
<area shape="rect" id="node34" href="../../d1/da8/a00230.php" title="UsefullDefines.hpp" alt="" coords="869,379,1003,405"/>
<area shape="rect" id="node14" href="../../d7/d9a/a00152.php" title="C++/OsDetection.hpp" alt="" coords="322,453,473,480"/>
<area shape="rect" id="node28" href="../../d5/d16/a00029.php" title="C++/Big_Constructor.hpp" alt="" coords="497,453,668,480"/>
<area shape="rect" id="node29" href="../../d4/d8c/a00035.php" title="C++/Big_Operator.hpp" alt="" coords="693,453,846,480"/>
<area shape="rect" id="node30" href="../../d6/d5b/a00026.php" title="C++/Big_Comparison.hpp" alt="" coords="871,453,1044,480"/>
<area shape="rect" id="node31" href="../../dc/d87/a00032.php" title="C++/Big_Maths.hpp" alt="" coords="1068,453,1207,480"/>
<area shape="rect" id="node16" href="../../d3/d00/a00113.php" title="C++/lowIncludes.hpp" alt="" coords="391,528,537,555"/>
</map>
</div>
</div><div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="../../d7/ded/a00196.png" border="0" usemap="#sorting_8hppdep" alt=""/></div>
<map name="sorting_8hppdep" id="sorting_8hppdep">
<area shape="rect" id="node2" href="../../da/d45/a00011.php" title="array.hpp" alt="" coords="337,80,413,107"/>
<area shape="rect" id="node3" href="../../da/d24/a00068.php" title="convert.hpp" alt="" coords="330,155,421,181"/>
<area shape="rect" id="node4" href="../../d3/d8b/a00059.php" title="console.hpp" alt="" coords="277,229,369,256"/>
<area shape="rect" id="node51" href="../../d1/dc1/a00092.php" title="files.hpp" alt="" coords="393,229,464,256"/>
<area shape="rect" id="node5" href="../../db/dab/a00089.php" title="errors.hpp" alt="" coords="335,304,415,331"/>
<area shape="rect" id="node6" href="../../d5/df1/a00206.php" title="system.hpp" alt="" coords="330,379,421,405"/>
<area shape="rect" id="node7" href="../../d3/db1/a00200.php" title="string.hpp" alt="" coords="336,453,415,480"/>
<area shape="rect" id="node8" href="../../de/d79/a00203.php" title="Used to replace strptime function when compiling for Windows. " alt="" coords="335,528,415,555"/>
<area shape="rect" id="node9" href="../../dc/d9a/a00218.php" title="timeFunctions.hpp" alt="" coords="311,603,440,629"/>
<area shape="rect" id="node10" href="../../d0/dc2/a00104.php" title="includes.hpp" alt="" coords="328,677,423,704"/>
<area shape="rect" id="node11" href="../../dc/dee/a00053.php" title="Clock.hpp" alt="" coords="5,901,87,928"/>
<area shape="rect" id="node35" href="../../df/d03/a00062.php" title="ConsoleTable.hpp" alt="" coords="120,976,247,1003"/>
<area shape="rect" id="node36" href="../../db/db6/a00074.php" title="Date.hpp" alt="" coords="162,752,237,779"/>
<area shape="rect" id="node38" href="../../df/d98/a00107.php" title="IOConfig.hpp" alt="" coords="318,827,417,853"/>
<area shape="rect" id="node39" href="../../d3/df8/a00155.php" title="Path.hpp" alt="" coords="413,752,487,779"/>
<area shape="rect" id="node45" href="../../dc/de6/a00167.php" title="PathfindingException.hpp" alt="" coords="511,752,682,779"/>
<area shape="rect" id="node46" href="../../da/d15/a00188.php" title="Referenced.hpp" alt="" coords="586,901,701,928"/>
<area shape="rect" id="node47" href="../../dd/dc1/a00212.php" title="Threadable.hpp" alt="" coords="715,1051,825,1077"/>
<area shape="rect" id="node50" href="../../d3/dd5/a00215.php" title="Time.hpp" alt="" coords="261,752,337,779"/>
<area shape="rect" id="node12" href="../../da/dec/a00080.php" title="defines.hpp" alt="" coords="369,1200,459,1227"/>
<area shape="rect" id="node13" href="../../db/db2/a00020.php" title="AssertionException.hpp" alt="" coords="275,1275,435,1301"/>
<area shape="rect" id="node34" href="../../d0/d89/a00071.php" title="cryptage.hpp" alt="" coords="423,1349,520,1376"/>
<area shape="rect" id="node14" href="../../d4/d51/a00017.php" title="Assert.hpp" alt="" coords="313,1349,398,1376"/>
<area shape="rect" id="node15" href="../../d6/d2d/a00047.php" title="C++lib.hpp" alt="" coords="369,1424,456,1451"/>
<area shape="rect" id="node16" href="../../d4/d81/a00110.php" title="Logger.hpp" alt="" coords="317,1499,404,1525"/>
<area shape="rect" id="node33" href="../../d3/de5/a00209.php" title="Test.hpp" alt="" coords="428,1499,501,1525"/>
<area shape="rect" id="node17" href="../../dd/d32/a00041.php" title="C++.hpp" alt="" coords="376,1573,449,1600"/>
<area shape="rect" id="node18" href="../../de/de1/a00065.php" title="Contraption.hpp" alt="" coords="309,1648,423,1675"/>
<area shape="rect" id="node32" href="../../d4/d3a/a00101.php" title="Identifier.hpp" alt="" coords="408,2021,505,2048"/>
<area shape="rect" id="node19" href="../../da/d2a/a00086.php" title="Entity.hpp" alt="" coords="212,1723,293,1749"/>
<area shape="rect" id="node30" href="../../da/d1e/a00149.php" title="Object.hpp" alt="" coords="331,1723,417,1749"/>
<area shape="rect" id="node20" href="../../d1/d44/a00098.php" title="Hostile.hpp" alt="" coords="85,1797,173,1824"/>
<area shape="rect" id="node27" href="../../d7/d40/a00236.php" title="Vegetal.hpp" alt="" coords="207,1872,298,1899"/>
<area shape="rect" id="node21" href="../../d7/d46/a00002.php" title="Animal.hpp" alt="" coords="69,1872,156,1899"/>
<area shape="rect" id="node22" href="../../dd/dad/a00005.php" title="Ant.hpp" alt="" coords="71,1947,138,1973"/>
<area shape="rect" id="node23" href="../../d2/d1f/a00083.php" title="Entities.hpp" alt="" coords="289,2021,379,2048"/>
<area shape="rect" id="node24" href="../../db/dd9/a00179.php" title="PlayerAbstraction.hpp" alt="" coords="261,2096,412,2123"/>
<area shape="rect" id="node25" href="../../d5/de9/a00176.php" title="Player.hpp" alt="" coords="351,2171,435,2197"/>
<area shape="rect" id="node26" href="../../d5/df9/a00044.php" title="C++Entities.hpp" alt="" coords="334,2245,451,2272"/>
<area shape="rect" id="node28" href="../../d5/db1/a00140.php" title="Mushroom.hpp" alt="" coords="163,1947,271,1973"/>
<area shape="rect" id="node29" href="../../d7/d3f/a00173.php" title="Plant.hpp" alt="" coords="295,1947,373,1973"/>
<area shape="rect" id="node31" href="../../de/db1/a00197.php" title="Stone.hpp" alt="" coords="341,1797,423,1824"/>
<area shape="rect" id="node37" href="../../d1/d09/a00077.php" title="DateTime.hpp" alt="" coords="190,827,294,853"/>
<area shape="rect" id="node40" href="../../d5/dcb/a00170.php" title="PathfindingProblem.hpp" alt="" coords="441,827,601,853"/>
<area shape="rect" id="node41" href="../../d6/db8/a00158.php" title="Pathfinding.hpp" alt="" coords="442,901,554,928"/>
<area shape="rect" id="node42" href="../../db/ddf/a00164.php" title="PathfindingDijkstra.hpp" alt="" coords="403,976,561,1003"/>
<area shape="rect" id="node43" href="../../d6/d7d/a00161.php" title="PathfindingAlgorithms.hpp" alt="" coords="389,1051,564,1077"/>
<area shape="rect" id="node44" href="../../df/d6a/a00119.php" title="Map.hpp" alt="" coords="415,1125,487,1152"/>
<area shape="rect" id="node48" href="../../d4/dee/a00008.php" title="Args.hpp" alt="" coords="639,1125,714,1152"/>
<area shape="rect" id="node49" href="../../dd/d52/a00221.php" title="Timer.hpp" alt="" coords="738,1125,818,1152"/>
</map>
</div>
</div><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="namespaces"></a>
Namespaces</h2></td></tr>
<tr class="memitem:d6/d08/a00244"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d6/d08/a00244.php">mcd</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:a0a1aa5f89ff57aa7dc4e6d136c9c315f"><td class="memTemplParams" colspan="2">template&lt;typename Key , typename Value &gt; </td></tr>
<tr class="memitem:a0a1aa5f89ff57aa7dc4e6d136c9c315f"><td class="memTemplItemLeft" align="right" valign="top">auto&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d6/d08/a00244.php#a0a1aa5f89ff57aa7dc4e6d136c9c315f">mcd::sortAsc</a> (const std::map&lt; Key, Value &gt; &amp;map)</td></tr>
<tr class="memdesc:a0a1aa5f89ff57aa7dc4e6d136c9c315f"><td class="mdescLeft">&#160;</td><td class="mdescRight">sort a map ascendently  <a href="../../d6/d08/a00244.php#a0a1aa5f89ff57aa7dc4e6d136c9c315f">More...</a><br /></td></tr>
<tr class="separator:a0a1aa5f89ff57aa7dc4e6d136c9c315f"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a45ad9c2ac4a373fdad27e51c1c741d76"><td class="memTemplParams" colspan="2">template&lt;class Key , class Value &gt; </td></tr>
<tr class="memitem:a45ad9c2ac4a373fdad27e51c1c741d76"><td class="memTemplItemLeft" align="right" valign="top">auto&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d6/d08/a00244.php#a45ad9c2ac4a373fdad27e51c1c741d76">mcd::sortDesc</a> (const std::map&lt; Key, Value &gt; &amp;map)</td></tr>
<tr class="memdesc:a45ad9c2ac4a373fdad27e51c1c741d76"><td class="mdescLeft">&#160;</td><td class="mdescRight">Sort a map descendently.  <a href="../../d6/d08/a00244.php#a45ad9c2ac4a373fdad27e51c1c741d76">More...</a><br /></td></tr>
<tr class="separator:a45ad9c2ac4a373fdad27e51c1c741d76"><td class="memSeparator" colspan="2">&#160;</td></tr>
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
		<li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_1788504ec76a4dda5464562bc560d0b5.php">C++Tests</a></li><li class="navelem"><a class="el" href="../../dir_2e741febc7df97747a68d36c1b3be5f0.php">C++</a></li><li class="navelem"><a class="el" href="../../dir_220287e732b97f08f66e5f221c69df74.php">inc</a></li><li class="navelem"><a class="el" href="../../dir_75b0389167f46f79a101ef8c4434cec4.php">C++</a></li><li class="navelem"><a class="el" href="../../dc/d57/a00194.php">sorting.hpp</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
