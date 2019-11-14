<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.13"/>
		<title>C++: vector.hpp File Reference</title>
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
				$text = "Generated on Wed Nov 13 2019 15:53:44 for C++ by";
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
$(document).ready(function(){initNavTree('dd/d52/a00221.php','../../');});
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
<div class="title">vector.hpp File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><code>#include &quot;<a class="el" href="../../d2/de7/a00014.php">C++/arraysIncludes.hpp</a>&quot;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for vector.hpp:</div>
<div class="dyncontent">
<div class="center"><img src="../../d0/d24/a00222.png" border="0" usemap="#vector_8hpp" alt=""/></div>
<map name="vector_8hpp" id="vector_8hpp">
<area shape="rect" id="node2" href="../../d2/de7/a00014.php" title="C++/arraysIncludes.hpp" alt="" coords="369,80,532,107"/>
<area shape="rect" id="node9" href="../../d7/d3f/a00173.php" title="C++/pointers.hpp" alt="" coords="723,155,845,181"/>
<area shape="rect" id="node10" href="../../d3/dd5/a00215.php" title="C++/types.hpp" alt="" coords="621,229,731,256"/>
<area shape="rect" id="node12" href="../../d4/d51/a00017.php" title="Big.hpp" alt="" coords="643,304,709,331"/>
<area shape="rect" id="node31" href="../../dd/dc1/a00212.php" title="C++/Tree.hpp" alt="" coords="515,304,618,331"/>
<area shape="rect" id="node32" href="../../d5/de9/a00176.php" title="PureVirtual.hpp" alt="" coords="734,304,845,331"/>
<area shape="rect" id="node33" href="../../dc/d9a/a00218.php" title="UsefullDefines.hpp" alt="" coords="869,304,1003,331"/>
<area shape="rect" id="node13" href="../../d7/dce/a00143.php" title="C++/OsDetection.hpp" alt="" coords="322,379,473,405"/>
<area shape="rect" id="node27" href="../../d3/d52/a00023.php" title="C++/Big_Constructor.hpp" alt="" coords="497,379,668,405"/>
<area shape="rect" id="node28" href="../../d5/d16/a00029.php" title="C++/Big_Operator.hpp" alt="" coords="693,379,846,405"/>
<area shape="rect" id="node29" href="../../db/db2/a00020.php" title="C++/Big_Comparison.hpp" alt="" coords="871,379,1044,405"/>
<area shape="rect" id="node30" href="../../d6/d5b/a00026.php" title="C++/Big_Maths.hpp" alt="" coords="1068,379,1207,405"/>
<area shape="rect" id="node15" href="../../d0/dc2/a00104.php" title="C++/lowIncludes.hpp" alt="" coords="391,453,537,480"/>
</map>
</div>
</div><div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="../../dc/d28/a00223.png" border="0" usemap="#vector_8hppdep" alt=""/></div>
<map name="vector_8hppdep" id="vector_8hppdep">
<area shape="rect" id="node2" href="../../dd/d32/a00041.php" title="check.hpp" alt="" coords="279,80,362,107"/>
<area shape="rect" id="node49" href="../../de/df3/a00185.php" title="sorting.hpp" alt="" coords="387,80,473,107"/>
<area shape="rect" id="node3" href="../../da/d45/a00011.php" title="array.hpp" alt="" coords="337,155,413,181"/>
<area shape="rect" id="node4" href="../../d3/d8b/a00059.php" title="convert.hpp" alt="" coords="330,229,421,256"/>
<area shape="rect" id="node5" href="../../d5/de0/a00050.php" title="console.hpp" alt="" coords="277,304,369,331"/>
<area shape="rect" id="node48" href="../../d2/d1f/a00083.php" title="files.hpp" alt="" coords="393,304,464,331"/>
<area shape="rect" id="node6" href="../../da/dec/a00080.php" title="errors.hpp" alt="" coords="335,379,415,405"/>
<area shape="rect" id="node7" href="../../de/db1/a00197.php" title="system.hpp" alt="" coords="330,453,421,480"/>
<area shape="rect" id="node8" href="../../d9/dd0/a00191.php" title="string.hpp" alt="" coords="336,528,415,555"/>
<area shape="rect" id="node9" href="../../dc/d57/a00194.php" title="Used to replace strptime function when compiling for Windows. " alt="" coords="335,603,415,629"/>
<area shape="rect" id="node10" href="../../d5/df1/a00206.php" title="timeFunctions.hpp" alt="" coords="311,677,440,704"/>
<area shape="rect" id="node11" href="../../d9/d77/a00095.php" title="includes.hpp" alt="" coords="328,752,423,779"/>
<area shape="rect" id="node12" href="../../d5/df9/a00044.php" title="Clock.hpp" alt="" coords="5,976,87,1003"/>
<area shape="rect" id="node32" href="../../dc/dee/a00053.php" title="ConsoleTable.hpp" alt="" coords="120,1051,247,1077"/>
<area shape="rect" id="node33" href="../../de/de1/a00065.php" title="Date.hpp" alt="" coords="162,827,237,853"/>
<area shape="rect" id="node35" href="../../d1/d44/a00098.php" title="IOConfig.hpp" alt="" coords="318,901,417,928"/>
<area shape="rect" id="node36" href="../../d9/db6/a00146.php" title="Path.hpp" alt="" coords="413,827,487,853"/>
<area shape="rect" id="node42" href="../../d6/db8/a00158.php" title="PathfindingException.hpp" alt="" coords="511,827,682,853"/>
<area shape="rect" id="node43" href="../../db/dd9/a00179.php" title="Referenced.hpp" alt="" coords="586,976,701,1003"/>
<area shape="rect" id="node44" href="../../d3/db1/a00200.php" title="Threadable.hpp" alt="" coords="715,1125,825,1152"/>
<area shape="rect" id="node47" href="../../de/d79/a00203.php" title="Time.hpp" alt="" coords="261,827,337,853"/>
<area shape="rect" id="node13" href="../../d0/d89/a00071.php" title="defines.hpp" alt="" coords="369,1275,459,1301"/>
<area shape="rect" id="node14" href="../../df/d03/a00062.php" title="cryptage.hpp" alt="" coords="308,1349,405,1376"/>
<area shape="rect" id="node31" href="../../d4/d3a/a00101.php" title="Logger.hpp" alt="" coords="429,1349,516,1376"/>
<area shape="rect" id="node15" href="../../d4/d8c/a00035.php" title="C++.hpp" alt="" coords="377,1424,451,1451"/>
<area shape="rect" id="node16" href="../../d9/d2e/a00056.php" title="Contraption.hpp" alt="" coords="310,1499,425,1525"/>
<area shape="rect" id="node30" href="../../d1/dc1/a00092.php" title="Identifier.hpp" alt="" coords="409,1872,507,1899"/>
<area shape="rect" id="node17" href="../../d1/d09/a00077.php" title="Entity.hpp" alt="" coords="213,1573,295,1600"/>
<area shape="rect" id="node28" href="../../d5/db1/a00140.php" title="Object.hpp" alt="" coords="333,1573,418,1600"/>
<area shape="rect" id="node18" href="../../db/dab/a00089.php" title="Hostile.hpp" alt="" coords="86,1648,174,1675"/>
<area shape="rect" id="node25" href="../../d5/ddf/a00224.php" title="Vegetal.hpp" alt="" coords="209,1723,299,1749"/>
<area shape="rect" id="node19" href="../../d7/d46/a00002.php" title="Animal.hpp" alt="" coords="71,1723,157,1749"/>
<area shape="rect" id="node20" href="../../dd/dad/a00005.php" title="Ant.hpp" alt="" coords="73,1797,139,1824"/>
<area shape="rect" id="node21" href="../../db/db6/a00074.php" title="Entities.hpp" alt="" coords="290,1872,381,1899"/>
<area shape="rect" id="node22" href="../../d5/dcb/a00170.php" title="PlayerAbstraction.hpp" alt="" coords="263,1947,413,1973"/>
<area shape="rect" id="node23" href="../../dc/de6/a00167.php" title="Player.hpp" alt="" coords="352,2021,436,2048"/>
<area shape="rect" id="node24" href="../../d8/d41/a00038.php" title="C++Entities.hpp" alt="" coords="335,2096,453,2123"/>
<area shape="rect" id="node26" href="../../d7/d06/a00131.php" title="Mushroom.hpp" alt="" coords="164,1797,272,1824"/>
<area shape="rect" id="node27" href="../../db/ddf/a00164.php" title="Plant.hpp" alt="" coords="297,1797,374,1824"/>
<area shape="rect" id="node29" href="../../da/d15/a00188.php" title="Stone.hpp" alt="" coords="343,1648,424,1675"/>
<area shape="rect" id="node34" href="../../da/d24/a00068.php" title="DateTime.hpp" alt="" coords="190,901,294,928"/>
<area shape="rect" id="node37" href="../../d6/d7d/a00161.php" title="PathfindingProblem.hpp" alt="" coords="441,901,601,928"/>
<area shape="rect" id="node38" href="../../da/d1e/a00149.php" title="Pathfinding.hpp" alt="" coords="442,976,554,1003"/>
<area shape="rect" id="node39" href="../../d3/df8/a00155.php" title="PathfindingDijkstra.hpp" alt="" coords="403,1051,561,1077"/>
<area shape="rect" id="node40" href="../../d7/d9a/a00152.php" title="PathfindingAlgorithms.hpp" alt="" coords="389,1125,564,1152"/>
<area shape="rect" id="node41" href="../../d4/d81/a00110.php" title="Map.hpp" alt="" coords="415,1200,487,1227"/>
<area shape="rect" id="node45" href="../../d4/dee/a00008.php" title="Args.hpp" alt="" coords="639,1200,714,1227"/>
<area shape="rect" id="node46" href="../../d3/de5/a00209.php" title="Timer.hpp" alt="" coords="738,1200,818,1227"/>
</map>
</div>
</div><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Classes</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d4/da7/a01102.php">mcd::vector&lt; C &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">Add some features to std::vector.  <a href="../../d4/da7/a01102.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="namespaces"></a>
Namespaces</h2></td></tr>
<tr class="memitem:d0/d53/a00232"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d0/d53/a00232.php">mcd</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><dl class="section author"><dt>Author</dt><dd>Mathias CABIOCH-DELALANDE </dd></dl>
<dl class="section date"><dt>Date</dt><dd>Created : Friday September, 27 2019 00:02:47 </dd>
<dd>
Last modification : Friday September, 27 2019 </dd></dl>
</div></div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../dir_bfccd401955b95cf8c75461437045ac0.php">inc</a></li><li class="navelem"><a class="el" href="../../dir_2ce2ad1ea5ded593884489da6d66e532.php">C++</a></li><li class="navelem"><a class="el" href="../../dd/d52/a00221.php">vector.hpp</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
