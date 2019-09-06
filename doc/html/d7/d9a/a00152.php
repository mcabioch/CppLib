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
				$text = "Generated on Fri Sep 6 2019 16:41:58 for C++ by";
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
<div class="center"><img src="../../da/d01/a00153.png" border="0" usemap="#RNG_8hpp" alt=""/></div>
</div>
</div><div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="../../d3/d65/a00154.png" border="0" usemap="#RNG_8hppdep" alt=""/></div>
<map name="RNG_8hppdep" id="RNG_8hppdep">
<area shape="rect" id="node2" href="../../d6/d7d/a00161.php" title="string.hpp" alt="" coords="309,80,388,107"/>
<area shape="rect" id="node3" href="../../d7/d3f/a00173.php" title="timeFunctions.hpp" alt="" coords="284,155,413,181"/>
<area shape="rect" id="node4" href="../../d1/dc1/a00092.php" title="includes.hpp" alt="" coords="301,229,396,256"/>
<area shape="rect" id="node5" href="../../d5/df9/a00044.php" title="Clock.hpp" alt="" coords="5,453,87,480"/>
<area shape="rect" id="node26" href="../../dc/dee/a00053.php" title="ConsoleTable.hpp" alt="" coords="56,379,183,405"/>
<area shape="rect" id="node27" href="../../de/de1/a00065.php" title="Date.hpp" alt="" coords="135,304,210,331"/>
<area shape="rect" id="node29" href="../../d9/d77/a00095.php" title="IOConfig.hpp" alt="" coords="297,453,395,480"/>
<area shape="rect" id="node30" href="../../d4/d3e/a00116.php" title="Path.hpp" alt="" coords="386,304,461,331"/>
<area shape="rect" id="node35" href="../../d1/d88/a00128.php" title="PathfindingException.hpp" alt="" coords="485,304,655,331"/>
<area shape="rect" id="node36" href="../../da/d1e/a00149.php" title="Referenced.hpp" alt="" coords="547,528,662,555"/>
<area shape="rect" id="node37" href="../../dc/de6/a00167.php" title="Threadable.hpp" alt="" coords="688,528,799,555"/>
<area shape="rect" id="node40" href="../../d5/dcb/a00170.php" title="Time.hpp" alt="" coords="235,304,311,331"/>
<area shape="rect" id="node6" href="../../d0/d89/a00071.php" title="defines.hpp" alt="" coords="336,677,425,704"/>
<area shape="rect" id="node7" href="../../df/d03/a00062.php" title="cryptage.hpp" alt="" coords="223,752,320,779"/>
<area shape="rect" id="node24" href="../../d4/d3a/a00101.php" title="Map.hpp" alt="" coords="345,752,417,779"/>
<area shape="rect" id="node25" href="../../db/dd9/a00179.php" title="Tree.hpp" alt="" coords="441,752,515,779"/>
<area shape="rect" id="node8" href="../../d4/d8c/a00035.php" title="C++.hpp" alt="" coords="344,827,417,853"/>
<area shape="rect" id="node9" href="../../d9/d2e/a00056.php" title="Contraption.hpp" alt="" coords="277,901,391,928"/>
<area shape="rect" id="node23" href="../../db/dab/a00089.php" title="Identifier.hpp" alt="" coords="376,1275,473,1301"/>
<area shape="rect" id="node10" href="../../d1/d09/a00077.php" title="Entity.hpp" alt="" coords="180,976,261,1003"/>
<area shape="rect" id="node21" href="../../d3/d00/a00113.php" title="Object.hpp" alt="" coords="299,976,385,1003"/>
<area shape="rect" id="node11" href="../../da/d2a/a00086.php" title="Hostile.hpp" alt="" coords="66,1051,154,1077"/>
<area shape="rect" id="node18" href="../../da/d15/a00188.php" title="Vegetal.hpp" alt="" coords="175,1125,266,1152"/>
<area shape="rect" id="node12" href="../../d7/d46/a00002.php" title="Animal.hpp" alt="" coords="37,1125,124,1152"/>
<area shape="rect" id="node13" href="../../dd/dad/a00005.php" title="Ant.hpp" alt="" coords="39,1200,106,1227"/>
<area shape="rect" id="node14" href="../../db/db6/a00074.php" title="Entities.hpp" alt="" coords="257,1275,347,1301"/>
<area shape="rect" id="node15" href="../../d5/db1/a00140.php" title="PlayerAbstraction.hpp" alt="" coords="229,1349,380,1376"/>
<area shape="rect" id="node16" href="../../d2/df5/a00137.php" title="Player.hpp" alt="" coords="319,1424,403,1451"/>
<area shape="rect" id="node17" href="../../d8/d41/a00038.php" title="C++Entities.hpp" alt="" coords="302,1499,419,1525"/>
<area shape="rect" id="node19" href="../../df/d98/a00107.php" title="Mushroom.hpp" alt="" coords="131,1200,239,1227"/>
<area shape="rect" id="node20" href="../../de/d76/a00134.php" title="Plant.hpp" alt="" coords="263,1200,341,1227"/>
<area shape="rect" id="node22" href="../../d6/db8/a00158.php" title="Stone.hpp" alt="" coords="309,1051,391,1077"/>
<area shape="rect" id="node28" href="../../da/d24/a00068.php" title="DateTime.hpp" alt="" coords="207,379,311,405"/>
<area shape="rect" id="node31" href="../../d7/d06/a00131.php" title="PathfindingProblem.hpp" alt="" coords="395,379,555,405"/>
<area shape="rect" id="node32" href="../../df/d6a/a00119.php" title="Pathfinding.hpp" alt="" coords="419,453,531,480"/>
<area shape="rect" id="node33" href="../../dc/dfe/a00125.php" title="PathfindingDijkstra.hpp" alt="" coords="365,528,522,555"/>
<area shape="rect" id="node34" href="../../df/dc8/a00122.php" title="PathfindingAlgorithms.hpp" alt="" coords="356,603,531,629"/>
<area shape="rect" id="node38" href="../../d4/dee/a00008.php" title="Args.hpp" alt="" coords="606,603,681,629"/>
<area shape="rect" id="node39" href="../../d5/de9/a00176.php" title="Timer.hpp" alt="" coords="705,603,785,629"/>
</map>
</div>
</div><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Classes</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../df/d59/a01001.php">mcd::RNG&lt; T, U &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A class to simplify the use of random.  <a href="../../df/d59/a01001.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="namespaces"></a>
Namespaces</h2></td></tr>
<tr class="memitem:d7/ded/a00196"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d7/ded/a00196.php">mcd</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:a95489209bc34099d9508c0e22a279bb0"><td class="memTemplParams" colspan="2">template&lt;typename T , typename U  = double&gt; </td></tr>
<tr class="memitem:a95489209bc34099d9508c0e22a279bb0"><td class="memTemplItemLeft" align="right" valign="top">T&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d7/ded/a00196.php#a95489209bc34099d9508c0e22a279bb0">mcd::rngRange</a> (T a, U b=0.1)</td></tr>
<tr class="memdesc:a95489209bc34099d9508c0e22a279bb0"><td class="mdescLeft">&#160;</td><td class="mdescRight">Compute a random number in a computed range.  <a href="../../d7/ded/a00196.php#a95489209bc34099d9508c0e22a279bb0">More...</a><br /></td></tr>
<tr class="separator:a95489209bc34099d9508c0e22a279bb0"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="var-members"></a>
Variables</h2></td></tr>
<tr class="memitem:a08ac826a0e7f64dc1b04036ecec50ed1"><td class="memItemLeft" align="right" valign="top">Rng&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d7/ded/a00196.php#a08ac826a0e7f64dc1b04036ecec50ed1">mcd::rng</a></td></tr>
<tr class="memdesc:a08ac826a0e7f64dc1b04036ecec50ed1"><td class="mdescLeft">&#160;</td><td class="mdescRight">A global rng variable to compute random integers.  <a href="../../d7/ded/a00196.php#a08ac826a0e7f64dc1b04036ecec50ed1">More...</a><br /></td></tr>
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
		<li class="navelem"><a class="el" href="../../dir_bfccd401955b95cf8c75461437045ac0.php">inc</a></li><li class="navelem"><a class="el" href="../../dir_2ce2ad1ea5ded593884489da6d66e532.php">C++</a></li><li class="navelem"><a class="el" href="../../d7/d9a/a00152.php">RNG.hpp</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
