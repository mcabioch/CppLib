<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.13"/>
		<title>C++: OsDetection.hpp File Reference</title>
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
				$text = "Generated on Sat Nov 30 2019 18:26:01 for C++ by";
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
$(document).ready(function(){initNavTree('d7/d9a/a00152.php','../../');});
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
<a href="#define-members">Macros</a>  </div>
  <div class="headertitle">
<div class="title">OsDetection.hpp File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><code>#include &lt;unistd.h&gt;</code><br />
<code>#include &quot;<a class="el" href="../../d3/d00/a00113.php">C++/lowIncludes.hpp</a>&quot;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for OsDetection.hpp:</div>
<div class="dyncontent">
<div class="center"><img src="../../da/d01/a00153.png" border="0" usemap="#OsDetection_8hpp" alt=""/></div>
<map name="OsDetection_8hpp" id="OsDetection_8hpp">
<area shape="rect" id="node3" href="../../d3/d00/a00113.php" title="C++/lowIncludes.hpp" alt="" coords="391,80,537,107"/>
</map>
</div>
</div><div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="../../d3/d65/a00154.png" border="0" usemap="#OsDetection_8hppdep" alt=""/></div>
<map name="OsDetection_8hppdep" id="OsDetection_8hppdep">
<area shape="rect" id="node2" href="../../d3/d52/a00023.php" title="Big.hpp" alt="" coords="290,80,357,107"/>
<area shape="rect" id="node64" href="../../d5/ddf/a00224.php" title="Tree.hpp" alt="" coords="381,80,455,107"/>
<area shape="rect" id="node3" href="../../d9/d01/a00227.php" title="types.hpp" alt="" coords="331,155,409,181"/>
<area shape="rect" id="node4" href="../../d7/d25/a00182.php" title="pointers.hpp" alt="" coords="323,229,417,256"/>
<area shape="rect" id="node5" href="../../d2/de7/a00014.php" title="arraysIncludes.hpp" alt="" coords="239,304,371,331"/>
<area shape="rect" id="node59" href="../../d8/d41/a00038.php" title="Binary.hpp" alt="" coords="395,304,479,331"/>
<area shape="rect" id="node6" href="../../d6/de1/a00233.php" title="vector.hpp" alt="" coords="279,603,362,629"/>
<area shape="rect" id="node7" href="../../d5/de0/a00050.php" title="check.hpp" alt="" coords="389,677,471,704"/>
<area shape="rect" id="node58" href="../../dc/d57/a00194.php" title="sorting.hpp" alt="" coords="277,677,364,704"/>
<area shape="rect" id="node8" href="../../da/d45/a00011.php" title="array.hpp" alt="" coords="337,752,413,779"/>
<area shape="rect" id="node9" href="../../da/d24/a00068.php" title="convert.hpp" alt="" coords="330,827,421,853"/>
<area shape="rect" id="node10" href="../../d3/d8b/a00059.php" title="console.hpp" alt="" coords="277,901,369,928"/>
<area shape="rect" id="node57" href="../../d1/dc1/a00092.php" title="files.hpp" alt="" coords="393,901,464,928"/>
<area shape="rect" id="node11" href="../../db/dab/a00089.php" title="errors.hpp" alt="" coords="335,976,415,1003"/>
<area shape="rect" id="node12" href="../../d5/df1/a00206.php" title="system.hpp" alt="" coords="330,1051,421,1077"/>
<area shape="rect" id="node13" href="../../d3/db1/a00200.php" title="string.hpp" alt="" coords="336,1125,415,1152"/>
<area shape="rect" id="node14" href="../../de/d79/a00203.php" title="Used to replace strptime function when compiling for Windows. " alt="" coords="335,1200,415,1227"/>
<area shape="rect" id="node15" href="../../dc/d9a/a00218.php" title="timeFunctions.hpp" alt="" coords="311,1275,440,1301"/>
<area shape="rect" id="node16" href="../../d0/dc2/a00104.php" title="includes.hpp" alt="" coords="328,1349,423,1376"/>
<area shape="rect" id="node17" href="../../dc/dee/a00053.php" title="Clock.hpp" alt="" coords="5,1573,87,1600"/>
<area shape="rect" id="node41" href="../../df/d03/a00062.php" title="ConsoleTable.hpp" alt="" coords="120,1648,247,1675"/>
<area shape="rect" id="node42" href="../../db/db6/a00074.php" title="Date.hpp" alt="" coords="162,1424,237,1451"/>
<area shape="rect" id="node44" href="../../df/d98/a00107.php" title="IOConfig.hpp" alt="" coords="310,1499,409,1525"/>
<area shape="rect" id="node45" href="../../d3/df8/a00155.php" title="Path.hpp" alt="" coords="413,1424,487,1451"/>
<area shape="rect" id="node51" href="../../dc/de6/a00167.php" title="PathfindingException.hpp" alt="" coords="511,1424,682,1451"/>
<area shape="rect" id="node52" href="../../da/d15/a00188.php" title="Referenced.hpp" alt="" coords="586,1573,701,1600"/>
<area shape="rect" id="node53" href="../../dd/dc1/a00212.php" title="Threadable.hpp" alt="" coords="715,1723,825,1749"/>
<area shape="rect" id="node56" href="../../d3/dd5/a00215.php" title="Time.hpp" alt="" coords="261,1424,337,1451"/>
<area shape="rect" id="node18" href="../../da/dec/a00080.php" title="defines.hpp" alt="" coords="369,1872,459,1899"/>
<area shape="rect" id="node19" href="../../db/db2/a00020.php" title="AssertionException.hpp" alt="" coords="275,1947,435,1973"/>
<area shape="rect" id="node40" href="../../d0/d89/a00071.php" title="cryptage.hpp" alt="" coords="423,2021,520,2048"/>
<area shape="rect" id="node20" href="../../d4/d51/a00017.php" title="Assert.hpp" alt="" coords="313,2021,398,2048"/>
<area shape="rect" id="node21" href="../../d6/d2d/a00047.php" title="C++lib.hpp" alt="" coords="369,2096,456,2123"/>
<area shape="rect" id="node22" href="../../d4/d81/a00110.php" title="Logger.hpp" alt="" coords="317,2171,404,2197"/>
<area shape="rect" id="node39" href="../../d3/de5/a00209.php" title="Test.hpp" alt="" coords="428,2171,501,2197"/>
<area shape="rect" id="node23" href="../../dd/d32/a00041.php" title="C++.hpp" alt="" coords="376,2245,449,2272"/>
<area shape="rect" id="node24" href="../../de/de1/a00065.php" title="Contraption.hpp" alt="" coords="309,2320,423,2347"/>
<area shape="rect" id="node38" href="../../d4/d3a/a00101.php" title="Identifier.hpp" alt="" coords="408,2693,505,2720"/>
<area shape="rect" id="node25" href="../../da/d2a/a00086.php" title="Entity.hpp" alt="" coords="212,2395,293,2421"/>
<area shape="rect" id="node36" href="../../da/d1e/a00149.php" title="Object.hpp" alt="" coords="331,2395,417,2421"/>
<area shape="rect" id="node26" href="../../d1/d44/a00098.php" title="Hostile.hpp" alt="" coords="98,2469,186,2496"/>
<area shape="rect" id="node33" href="../../d7/d40/a00236.php" title="Vegetal.hpp" alt="" coords="207,2544,298,2571"/>
<area shape="rect" id="node27" href="../../d7/d46/a00002.php" title="Animal.hpp" alt="" coords="69,2544,156,2571"/>
<area shape="rect" id="node28" href="../../dd/dad/a00005.php" title="Ant.hpp" alt="" coords="71,2619,138,2645"/>
<area shape="rect" id="node29" href="../../d2/d1f/a00083.php" title="Entities.hpp" alt="" coords="289,2693,379,2720"/>
<area shape="rect" id="node30" href="../../db/dd9/a00179.php" title="PlayerAbstraction.hpp" alt="" coords="261,2768,412,2795"/>
<area shape="rect" id="node31" href="../../d5/de9/a00176.php" title="Player.hpp" alt="" coords="351,2843,435,2869"/>
<area shape="rect" id="node32" href="../../d5/df9/a00044.php" title="C++Entities.hpp" alt="" coords="334,2917,451,2944"/>
<area shape="rect" id="node34" href="../../d5/db1/a00140.php" title="Mushroom.hpp" alt="" coords="163,2619,271,2645"/>
<area shape="rect" id="node35" href="../../d7/d3f/a00173.php" title="Plant.hpp" alt="" coords="295,2619,373,2645"/>
<area shape="rect" id="node37" href="../../de/db1/a00197.php" title="Stone.hpp" alt="" coords="341,2469,423,2496"/>
<area shape="rect" id="node43" href="../../d1/d09/a00077.php" title="DateTime.hpp" alt="" coords="182,1499,286,1525"/>
<area shape="rect" id="node46" href="../../d5/dcb/a00170.php" title="PathfindingProblem.hpp" alt="" coords="433,1499,593,1525"/>
<area shape="rect" id="node47" href="../../d6/db8/a00158.php" title="Pathfinding.hpp" alt="" coords="442,1573,554,1600"/>
<area shape="rect" id="node48" href="../../db/ddf/a00164.php" title="PathfindingDijkstra.hpp" alt="" coords="403,1648,561,1675"/>
<area shape="rect" id="node49" href="../../d6/d7d/a00161.php" title="PathfindingAlgorithms.hpp" alt="" coords="389,1723,564,1749"/>
<area shape="rect" id="node50" href="../../df/d6a/a00119.php" title="Map.hpp" alt="" coords="415,1797,487,1824"/>
<area shape="rect" id="node54" href="../../d4/dee/a00008.php" title="Args.hpp" alt="" coords="639,1797,714,1824"/>
<area shape="rect" id="node55" href="../../dd/d52/a00221.php" title="Timer.hpp" alt="" coords="738,1797,818,1824"/>
<area shape="rect" id="node60" href="../../df/dc8/a00122.php" title="maths.hpp" alt="" coords="394,379,477,405"/>
<area shape="rect" id="node61" href="../../d9/d77/a00095.php" title="Fraction.hpp" alt="" coords="388,453,483,480"/>
<area shape="rect" id="node62" href="../../dc/dfe/a00125.php" title="Matrix.hpp" alt="" coords="393,528,475,555"/>
<area shape="rect" id="node63" href="../../d9/d2e/a00056.php" title="collides.hpp" alt="" coords="389,603,479,629"/>
</map>
</div>
</div><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="define-members"></a>
Macros</h2></td></tr>
<tr class="memitem:a921a8364e814a54925abcb8ba8f472bc"><td class="memItemLeft" align="right" valign="top">#define&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d7/d9a/a00152.php#a921a8364e814a54925abcb8ba8f472bc">OS_UNRECOGNIZE</a></td></tr>
<tr class="separator:a921a8364e814a54925abcb8ba8f472bc"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><dl class="section author"><dt>Author</dt><dd>Mathias CABIOCH-DELALANDE </dd></dl>
<dl class="section date"><dt>Date</dt><dd>Created : Friday October, 04 2019 16:09:57 </dd>
<dd>
Last modification : Friday October, 04 2019 </dd></dl>
</div><h2 class="groupheader">Macro Definition Documentation</h2>
<a id="a921a8364e814a54925abcb8ba8f472bc"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a921a8364e814a54925abcb8ba8f472bc">&#9670;&nbsp;</a></span>OS_UNRECOGNIZE</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">#define OS_UNRECOGNIZE</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
</div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../dir_bfccd401955b95cf8c75461437045ac0.php">inc</a></li><li class="navelem"><a class="el" href="../../dir_2ce2ad1ea5ded593884489da6d66e532.php">C++</a></li><li class="navelem"><a class="el" href="../../d7/d9a/a00152.php">OsDetection.hpp</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
