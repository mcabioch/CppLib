<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.13"/>
		<title>C++: Timer.hpp File Reference</title>
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
				$text = "Generated on Thu Sep 12 2019 17:17:41 for C++ by";
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
$(document).ready(function(){initNavTree('d5/de9/a00176.php','../../');});
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
<div class="title">Timer.hpp File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><code>#include &quot;<a class="el" href="../../dc/de6/a00167.php">C++/Threadable.hpp</a>&quot;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for Timer.hpp:</div>
<div class="dyncontent">
<div class="center"><img src="../../dd/d4c/a00177.png" border="0" usemap="#Timer_8hpp" alt=""/></div>
<map name="Timer_8hpp" id="Timer_8hpp">
<area shape="rect" id="node2" href="../../dc/de6/a00167.php" title="C++/Threadable.hpp" alt="" coords="688,80,829,107"/>
<area shape="rect" id="node3" href="../../d1/dc1/a00092.php" title="C++/includes.hpp" alt="" coords="696,155,821,181"/>
<area shape="rect" id="node4" href="../../d7/d3f/a00173.php" title="C++/timeFunctions.hpp" alt="" coords="289,229,447,256"/>
<area shape="rect" id="node56" href="../../d4/d81/a00110.php" title="C++/NotCopyable.hpp" alt="" coords="471,229,625,256"/>
<area shape="rect" id="node6" href="../../d6/d7d/a00161.php" title="C++/string.hpp" alt="" coords="367,304,476,331"/>
<area shape="rect" id="node8" href="../../db/ddf/a00164.php" title="C++/system.hpp" alt="" coords="293,379,413,405"/>
<area shape="rect" id="node53" href="../../d7/d9a/a00152.php" title="C++/RNG.hpp" alt="" coords="437,379,544,405"/>
<area shape="rect" id="node55" href="../../d1/d44/a00098.php" title="C++/macro.hpp" alt="" coords="569,379,682,405"/>
<area shape="rect" id="node9" href="../../da/dec/a00080.php" title="C++/errors.hpp" alt="" coords="298,453,409,480"/>
<area shape="rect" id="node10" href="../../d5/de0/a00050.php" title="C++/console.hpp" alt="" coords="224,528,347,555"/>
<area shape="rect" id="node51" href="../../d2/d1f/a00083.php" title="C++/files.hpp" alt="" coords="371,528,472,555"/>
<area shape="rect" id="node11" href="../../d3/d8b/a00059.php" title="C++/convert.hpp" alt="" coords="235,603,355,629"/>
<area shape="rect" id="node13" href="../../da/d45/a00011.php" title="C++/array.hpp" alt="" coords="301,677,408,704"/>
<area shape="rect" id="node15" href="../../dd/d32/a00041.php" title="C++/check.hpp" alt="" coords="299,752,411,779"/>
<area shape="rect" id="node50" href="../../d3/df8/a00155.php" title="C++/sorting.hpp" alt="" coords="505,752,621,779"/>
<area shape="rect" id="node19" href="../../d2/de7/a00014.php" title="C++/arraysIncludes.hpp" alt="" coords="517,827,680,853"/>
<area shape="rect" id="node48" href="../../d6/d2d/a00047.php" title="C++/collides.hpp" alt="" coords="371,827,493,853"/>
<area shape="rect" id="node26" href="../../d7/dce/a00143.php" title="C++/pointers.hpp" alt="" coords="481,976,604,1003"/>
<area shape="rect" id="node29" href="../../d7/d25/a00182.php" title="C++/types.hpp" alt="" coords="596,1051,705,1077"/>
<area shape="rect" id="node31" href="../../db/db2/a00020.php" title="Big.hpp" alt="" coords="560,1125,627,1152"/>
<area shape="rect" id="node46" href="../../d9/db6/a00146.php" title="PureVirtual.hpp" alt="" coords="651,1125,762,1152"/>
<area shape="rect" id="node47" href="../../de/df3/a00185.php" title="UsefullDefines.hpp" alt="" coords="787,1125,920,1152"/>
<area shape="rect" id="node42" href="../../d6/d5b/a00026.php" title="C++/Big_Constructor.hpp" alt="" coords="887,1200,1057,1227"/>
<area shape="rect" id="node43" href="../../dc/d87/a00032.php" title="C++/Big_Operator.hpp" alt="" coords="1082,1200,1235,1227"/>
<area shape="rect" id="node44" href="../../d3/d52/a00023.php" title="C++/Big_Comparison.hpp" alt="" coords="1260,1200,1433,1227"/>
<area shape="rect" id="node45" href="../../d5/d16/a00029.php" title="C++/Big_Maths.hpp" alt="" coords="1457,1200,1596,1227"/>
<area shape="rect" id="node49" href="../../d0/dc2/a00104.php" title="C++/maths.hpp" alt="" coords="195,901,309,928"/>
</map>
</div>
</div><div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="../../d9/d90/a00178.png" border="0" usemap="#Timer_8hppdep" alt=""/></div>
<map name="Timer_8hppdep" id="Timer_8hppdep">
<area shape="rect" id="node2" href="../../d0/d89/a00071.php" title="defines.hpp" alt="" coords="304,80,393,107"/>
<area shape="rect" id="node3" href="../../df/d03/a00062.php" title="cryptage.hpp" alt="" coords="191,155,288,181"/>
<area shape="rect" id="node20" href="../../d4/d3a/a00101.php" title="Map.hpp" alt="" coords="313,155,385,181"/>
<area shape="rect" id="node21" href="../../db/dd9/a00179.php" title="Tree.hpp" alt="" coords="409,155,483,181"/>
<area shape="rect" id="node4" href="../../d4/d8c/a00035.php" title="C++.hpp" alt="" coords="312,229,385,256"/>
<area shape="rect" id="node5" href="../../d9/d2e/a00056.php" title="Contraption.hpp" alt="" coords="245,304,359,331"/>
<area shape="rect" id="node19" href="../../db/dab/a00089.php" title="Identifier.hpp" alt="" coords="344,677,441,704"/>
<area shape="rect" id="node6" href="../../d1/d09/a00077.php" title="Entity.hpp" alt="" coords="148,379,229,405"/>
<area shape="rect" id="node17" href="../../d3/d00/a00113.php" title="Object.hpp" alt="" coords="267,379,353,405"/>
<area shape="rect" id="node7" href="../../da/d2a/a00086.php" title="Hostile.hpp" alt="" coords="34,453,122,480"/>
<area shape="rect" id="node14" href="../../da/d15/a00188.php" title="Vegetal.hpp" alt="" coords="143,528,234,555"/>
<area shape="rect" id="node8" href="../../d7/d46/a00002.php" title="Animal.hpp" alt="" coords="5,528,92,555"/>
<area shape="rect" id="node9" href="../../dd/dad/a00005.php" title="Ant.hpp" alt="" coords="7,603,74,629"/>
<area shape="rect" id="node10" href="../../db/db6/a00074.php" title="Entities.hpp" alt="" coords="225,677,315,704"/>
<area shape="rect" id="node11" href="../../d5/db1/a00140.php" title="PlayerAbstraction.hpp" alt="" coords="197,752,348,779"/>
<area shape="rect" id="node12" href="../../d2/df5/a00137.php" title="Player.hpp" alt="" coords="287,827,371,853"/>
<area shape="rect" id="node13" href="../../d8/d41/a00038.php" title="C++Entities.hpp" alt="" coords="270,901,387,928"/>
<area shape="rect" id="node15" href="../../df/d98/a00107.php" title="Mushroom.hpp" alt="" coords="99,603,207,629"/>
<area shape="rect" id="node16" href="../../de/d76/a00134.php" title="Plant.hpp" alt="" coords="231,603,309,629"/>
<area shape="rect" id="node18" href="../../d6/db8/a00158.php" title="Stone.hpp" alt="" coords="277,453,359,480"/>
</map>
</div>
</div><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Classes</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d3/ded/a01017.php">mcd::Timer</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A timer to do something at the end.  <a href="../../d3/ded/a01017.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="namespaces"></a>
Namespaces</h2></td></tr>
<tr class="memitem:d7/ded/a00196"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d7/ded/a00196.php">mcd</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><dl class="section author"><dt>Author</dt><dd>Mathias CABIOCH-DELALANDE </dd></dl>
<dl class="section date"><dt>Date</dt><dd>Last modification : August, 17 2018 </dd></dl>
</div></div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../dir_bfccd401955b95cf8c75461437045ac0.php">inc</a></li><li class="navelem"><a class="el" href="../../dir_2ce2ad1ea5ded593884489da6d66e532.php">C++</a></li><li class="navelem"><a class="el" href="../../d5/de9/a00176.php">Timer.hpp</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
