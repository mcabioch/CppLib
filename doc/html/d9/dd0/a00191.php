<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.13"/>
		<title>C++: RNG.hpp File Reference</title>
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
				$text = "Generated on Sun Dec 1 2019 13:57:10 for C++ by";
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
$(document).ready(function(){initNavTree('d9/dd0/a00191.php','../../');});
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
<a href="#namespaces">Namespaces</a> &#124;
<a href="#func-members">Functions</a> &#124;
<a href="#var-members">Variables</a>  </div>
  <div class="headertitle">
<div class="title">RNG.hpp File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><code>#include &lt;random&gt;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for RNG.hpp:</div>
<div class="dyncontent">
<div class="center"><img src="../../dd/da2/a00192.png" border="0" usemap="#RNG_8hpp" alt=""/></div>
</div>
</div><div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="../../dd/df4/a00193.png" border="0" usemap="#RNG_8hppdep" alt=""/></div>
<map name="RNG_8hppdep" id="RNG_8hppdep">
<area shape="rect" id="node2" href="../../d3/db1/a00200.php" title="string.hpp" alt="" coords="336,80,415,107"/>
<area shape="rect" id="node3" href="../../de/d79/a00203.php" title="Used to replace strptime function when compiling for Windows. " alt="" coords="335,155,415,181"/>
<area shape="rect" id="node4" href="../../dc/d9a/a00218.php" title="timeFunctions.hpp" alt="" coords="311,229,440,256"/>
<area shape="rect" id="node5" href="../../d0/dc2/a00104.php" title="includes.hpp" alt="" coords="328,304,423,331"/>
<area shape="rect" id="node6" href="../../dc/dee/a00053.php" title="Clock.hpp" alt="" coords="5,528,87,555"/>
<area shape="rect" id="node30" href="../../df/d03/a00062.php" title="ConsoleTable.hpp" alt="" coords="116,603,243,629"/>
<area shape="rect" id="node31" href="../../db/db6/a00074.php" title="Date.hpp" alt="" coords="162,379,237,405"/>
<area shape="rect" id="node33" href="../../df/d98/a00107.php" title="IOConfig.hpp" alt="" coords="318,453,417,480"/>
<area shape="rect" id="node34" href="../../d3/df8/a00155.php" title="Path.hpp" alt="" coords="413,379,487,405"/>
<area shape="rect" id="node40" href="../../dc/de6/a00167.php" title="PathfindingException.hpp" alt="" coords="511,379,682,405"/>
<area shape="rect" id="node41" href="../../da/d15/a00188.php" title="Referenced.hpp" alt="" coords="605,528,719,555"/>
<area shape="rect" id="node42" href="../../dd/dc1/a00212.php" title="Threadable.hpp" alt="" coords="715,677,825,704"/>
<area shape="rect" id="node45" href="../../d3/dd5/a00215.php" title="Time.hpp" alt="" coords="261,379,337,405"/>
<area shape="rect" id="node7" href="../../da/dec/a00080.php" title="defines.hpp" alt="" coords="356,827,445,853"/>
<area shape="rect" id="node8" href="../../db/db2/a00020.php" title="AssertionException.hpp" alt="" coords="262,901,422,928"/>
<area shape="rect" id="node29" href="../../d0/d89/a00071.php" title="cryptage.hpp" alt="" coords="409,976,507,1003"/>
<area shape="rect" id="node9" href="../../d4/d51/a00017.php" title="Assert.hpp" alt="" coords="299,976,385,1003"/>
<area shape="rect" id="node10" href="../../d6/d2d/a00047.php" title="C++lib.hpp" alt="" coords="356,1051,443,1077"/>
<area shape="rect" id="node11" href="../../d4/d81/a00110.php" title="Logger.hpp" alt="" coords="304,1125,391,1152"/>
<area shape="rect" id="node28" href="../../d3/de5/a00209.php" title="Test.hpp" alt="" coords="415,1125,488,1152"/>
<area shape="rect" id="node12" href="../../dd/d32/a00041.php" title="C++.hpp" alt="" coords="363,1200,436,1227"/>
<area shape="rect" id="node13" href="../../de/de1/a00065.php" title="Contraption.hpp" alt="" coords="295,1275,410,1301"/>
<area shape="rect" id="node27" href="../../d4/d3a/a00101.php" title="Identifier.hpp" alt="" coords="395,1648,492,1675"/>
<area shape="rect" id="node14" href="../../da/d2a/a00086.php" title="Entity.hpp" alt="" coords="199,1349,280,1376"/>
<area shape="rect" id="node25" href="../../da/d1e/a00149.php" title="Object.hpp" alt="" coords="318,1349,403,1376"/>
<area shape="rect" id="node15" href="../../d1/d44/a00098.php" title="Hostile.hpp" alt="" coords="85,1424,173,1451"/>
<area shape="rect" id="node22" href="../../d7/d40/a00236.php" title="Vegetal.hpp" alt="" coords="194,1499,285,1525"/>
<area shape="rect" id="node16" href="../../d7/d46/a00002.php" title="Animal.hpp" alt="" coords="56,1499,143,1525"/>
<area shape="rect" id="node17" href="../../dd/dad/a00005.php" title="Ant.hpp" alt="" coords="58,1573,125,1600"/>
<area shape="rect" id="node18" href="../../d2/d1f/a00083.php" title="Entities.hpp" alt="" coords="275,1648,366,1675"/>
<area shape="rect" id="node19" href="../../db/dd9/a00179.php" title="PlayerAbstraction.hpp" alt="" coords="248,1723,399,1749"/>
<area shape="rect" id="node20" href="../../d5/de9/a00176.php" title="Player.hpp" alt="" coords="337,1797,421,1824"/>
<area shape="rect" id="node21" href="../../d5/df9/a00044.php" title="C++Entities.hpp" alt="" coords="321,1872,438,1899"/>
<area shape="rect" id="node23" href="../../d5/db1/a00140.php" title="Mushroom.hpp" alt="" coords="149,1573,257,1600"/>
<area shape="rect" id="node24" href="../../d7/d3f/a00173.php" title="Plant.hpp" alt="" coords="282,1573,359,1600"/>
<area shape="rect" id="node26" href="../../de/db1/a00197.php" title="Stone.hpp" alt="" coords="328,1424,409,1451"/>
<area shape="rect" id="node32" href="../../d1/d09/a00077.php" title="DateTime.hpp" alt="" coords="190,453,294,480"/>
<area shape="rect" id="node35" href="../../d5/dcb/a00170.php" title="PathfindingProblem.hpp" alt="" coords="441,453,601,480"/>
<area shape="rect" id="node36" href="../../d6/db8/a00158.php" title="Pathfinding.hpp" alt="" coords="438,528,550,555"/>
<area shape="rect" id="node37" href="../../db/ddf/a00164.php" title="PathfindingDijkstra.hpp" alt="" coords="402,603,559,629"/>
<area shape="rect" id="node38" href="../../d6/d7d/a00161.php" title="PathfindingAlgorithms.hpp" alt="" coords="389,677,564,704"/>
<area shape="rect" id="node39" href="../../df/d6a/a00119.php" title="Map.hpp" alt="" coords="415,752,487,779"/>
<area shape="rect" id="node43" href="../../d4/dee/a00008.php" title="Args.hpp" alt="" coords="639,752,714,779"/>
<area shape="rect" id="node44" href="../../dd/d52/a00221.php" title="Timer.hpp" alt="" coords="738,752,818,779"/>
</map>
</div>
</div><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Classes</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d9/df5/a01086.php">mcd::RNG&lt; T, U &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A class to simplify the use of random.  <a href="../../d9/df5/a01086.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="namespaces"></a>
Namespaces</h2></td></tr>
<tr class="memitem:d6/d08/a00244"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d6/d08/a00244.php">mcd</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:a95489209bc34099d9508c0e22a279bb0"><td class="memTemplParams" colspan="2">template&lt;typename T , typename U  = double&gt; </td></tr>
<tr class="memitem:a95489209bc34099d9508c0e22a279bb0"><td class="memTemplItemLeft" align="right" valign="top">T&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d6/d08/a00244.php#a95489209bc34099d9508c0e22a279bb0">mcd::rngRange</a> (T a, U b=0.1)</td></tr>
<tr class="memdesc:a95489209bc34099d9508c0e22a279bb0"><td class="mdescLeft">&#160;</td><td class="mdescRight">Compute a random number in a computed range.  <a href="../../d6/d08/a00244.php#a95489209bc34099d9508c0e22a279bb0">More...</a><br /></td></tr>
<tr class="separator:a95489209bc34099d9508c0e22a279bb0"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="var-members"></a>
Variables</h2></td></tr>
<tr class="memitem:a08ac826a0e7f64dc1b04036ecec50ed1"><td class="memItemLeft" align="right" valign="top">Rng&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d6/d08/a00244.php#a08ac826a0e7f64dc1b04036ecec50ed1">mcd::rng</a></td></tr>
<tr class="memdesc:a08ac826a0e7f64dc1b04036ecec50ed1"><td class="mdescLeft">&#160;</td><td class="mdescRight">A global rng variable to compute random integers.  <a href="../../d6/d08/a00244.php#a08ac826a0e7f64dc1b04036ecec50ed1">More...</a><br /></td></tr>
<tr class="separator:a08ac826a0e7f64dc1b04036ecec50ed1"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><dl class="section author"><dt>Author</dt><dd>Mathias CABIOCH-DELALANDE </dd></dl>
<dl class="section date"><dt>Date</dt><dd>May, 29 2018 </dd></dl>
</div></div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../dir_bfccd401955b95cf8c75461437045ac0.php">inc</a></li><li class="navelem"><a class="el" href="../../dir_2ce2ad1ea5ded593884489da6d66e532.php">C++</a></li><li class="navelem"><a class="el" href="../../d9/dd0/a00191.php">RNG.hpp</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
