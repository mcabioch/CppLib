<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.13"/>
		<title>C++: maths.hpp File Reference</title>
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
				$text = "Generated on Thu Sep 26 2019 10:38:54 for C++ by";
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
$(document).ready(function(){initNavTree('d0/dc2/a00104.php','../../');});
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
<div class="title">maths.hpp File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><code>#include &quot;<a class="el" href="../../d6/db8/a00158.php">C++/pointers.hpp</a>&quot;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for maths.hpp:</div>
<div class="dyncontent">
<div class="center"><img src="../../d3/d32/a00105.png" border="0" usemap="#maths_8hpp" alt=""/></div>
<map name="maths_8hpp" id="maths_8hpp">
<area shape="rect" id="node2" href="../../d6/db8/a00158.php" title="C++/pointers.hpp" alt="" coords="480,80,603,107"/>
<area shape="rect" id="node5" href="../../de/db1/a00197.php" title="C++/types.hpp" alt="" coords="595,155,704,181"/>
<area shape="rect" id="node7" href="../../d4/d51/a00017.php" title="Big.hpp" alt="" coords="560,229,627,256"/>
<area shape="rect" id="node22" href="../../d6/d7d/a00161.php" title="PureVirtual.hpp" alt="" coords="651,229,762,256"/>
<area shape="rect" id="node23" href="../../d3/db1/a00200.php" title="UsefullDefines.hpp" alt="" coords="787,229,920,256"/>
<area shape="rect" id="node18" href="../../d3/d52/a00023.php" title="C++/Big_Constructor.hpp" alt="" coords="887,304,1057,331"/>
<area shape="rect" id="node19" href="../../d5/d16/a00029.php" title="C++/Big_Operator.hpp" alt="" coords="1082,304,1235,331"/>
<area shape="rect" id="node20" href="../../db/db2/a00020.php" title="C++/Big_Comparison.hpp" alt="" coords="1260,304,1433,331"/>
<area shape="rect" id="node21" href="../../d6/d5b/a00026.php" title="C++/Big_Maths.hpp" alt="" coords="1457,304,1596,331"/>
</map>
</div>
</div><div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="../../d7/d70/a00106.png" border="0" usemap="#maths_8hppdep" alt=""/></div>
<map name="maths_8hppdep" id="maths_8hppdep">
<area shape="rect" id="node2" href="../../d2/d1f/a00083.php" title="Fraction.hpp" alt="" coords="301,80,396,107"/>
<area shape="rect" id="node3" href="../../df/d98/a00107.php" title="Matrix.hpp" alt="" coords="307,155,390,181"/>
<area shape="rect" id="node4" href="../../d5/df9/a00044.php" title="collides.hpp" alt="" coords="303,229,394,256"/>
<area shape="rect" id="node5" href="../../d8/d41/a00038.php" title="check.hpp" alt="" coords="307,304,390,331"/>
<area shape="rect" id="node6" href="../../da/d45/a00011.php" title="array.hpp" alt="" coords="311,379,387,405"/>
<area shape="rect" id="node7" href="../../d9/d2e/a00056.php" title="convert.hpp" alt="" coords="303,453,394,480"/>
<area shape="rect" id="node8" href="../../d6/d2d/a00047.php" title="console.hpp" alt="" coords="251,528,343,555"/>
<area shape="rect" id="node50" href="../../da/dec/a00080.php" title="files.hpp" alt="" coords="367,528,437,555"/>
<area shape="rect" id="node9" href="../../d1/d09/a00077.php" title="errors.hpp" alt="" coords="309,603,389,629"/>
<area shape="rect" id="node10" href="../../db/dd9/a00179.php" title="system.hpp" alt="" coords="303,677,394,704"/>
<area shape="rect" id="node11" href="../../d5/de9/a00176.php" title="string.hpp" alt="" coords="309,752,388,779"/>
<area shape="rect" id="node12" href="../../da/d15/a00188.php" title="timeFunctions.hpp" alt="" coords="284,827,413,853"/>
<area shape="rect" id="node13" href="../../d1/dc1/a00092.php" title="includes.hpp" alt="" coords="301,901,396,928"/>
<area shape="rect" id="node14" href="../../dd/d32/a00041.php" title="Clock.hpp" alt="" coords="5,1125,87,1152"/>
<area shape="rect" id="node35" href="../../d5/de0/a00050.php" title="ConsoleTable.hpp" alt="" coords="56,1051,183,1077"/>
<area shape="rect" id="node36" href="../../df/d03/a00062.php" title="Date.hpp" alt="" coords="135,976,210,1003"/>
<area shape="rect" id="node38" href="../../d9/d77/a00095.php" title="IOConfig.hpp" alt="" coords="297,1125,395,1152"/>
<area shape="rect" id="node39" href="../../d7/d06/a00131.php" title="Path.hpp" alt="" coords="386,976,461,1003"/>
<area shape="rect" id="node44" href="../../d7/dce/a00143.php" title="PathfindingException.hpp" alt="" coords="485,976,655,1003"/>
<area shape="rect" id="node45" href="../../db/ddf/a00164.php" title="Referenced.hpp" alt="" coords="547,1200,662,1227"/>
<area shape="rect" id="node46" href="../../d7/d25/a00182.php" title="Threadable.hpp" alt="" coords="688,1200,799,1227"/>
<area shape="rect" id="node49" href="../../de/df3/a00185.php" title="Time.hpp" alt="" coords="235,976,311,1003"/>
<area shape="rect" id="node15" href="../../da/d24/a00068.php" title="defines.hpp" alt="" coords="336,1349,425,1376"/>
<area shape="rect" id="node16" href="../../d3/d8b/a00059.php" title="cryptage.hpp" alt="" coords="223,1424,320,1451"/>
<area shape="rect" id="node33" href="../../d4/d3a/a00101.php" title="Map.hpp" alt="" coords="345,1424,417,1451"/>
<area shape="rect" id="node34" href="../../dc/d57/a00194.php" title="Tree.hpp" alt="" coords="441,1424,515,1451"/>
<area shape="rect" id="node17" href="../../dc/d87/a00032.php" title="C++.hpp" alt="" coords="344,1499,417,1525"/>
<area shape="rect" id="node18" href="../../dc/dee/a00053.php" title="Contraption.hpp" alt="" coords="277,1573,391,1600"/>
<area shape="rect" id="node32" href="../../db/dab/a00089.php" title="Identifier.hpp" alt="" coords="376,1947,473,1973"/>
<area shape="rect" id="node19" href="../../db/db6/a00074.php" title="Entity.hpp" alt="" coords="180,1648,261,1675"/>
<area shape="rect" id="node30" href="../../d1/d88/a00128.php" title="Object.hpp" alt="" coords="299,1648,385,1675"/>
<area shape="rect" id="node20" href="../../da/d2a/a00086.php" title="Hostile.hpp" alt="" coords="66,1723,154,1749"/>
<area shape="rect" id="node27" href="../../de/d79/a00203.php" title="Vegetal.hpp" alt="" coords="175,1797,266,1824"/>
<area shape="rect" id="node21" href="../../d7/d46/a00002.php" title="Animal.hpp" alt="" coords="37,1797,124,1824"/>
<area shape="rect" id="node22" href="../../dd/dad/a00005.php" title="Ant.hpp" alt="" coords="39,1872,106,1899"/>
<area shape="rect" id="node23" href="../../d0/d89/a00071.php" title="Entities.hpp" alt="" coords="257,1947,347,1973"/>
<area shape="rect" id="node24" href="../../d3/df8/a00155.php" title="PlayerAbstraction.hpp" alt="" coords="229,2021,380,2048"/>
<area shape="rect" id="node25" href="../../d7/d9a/a00152.php" title="Player.hpp" alt="" coords="319,2096,403,2123"/>
<area shape="rect" id="node26" href="../../d4/d8c/a00035.php" title="C++Entities.hpp" alt="" coords="302,2171,419,2197"/>
<area shape="rect" id="node28" href="../../df/dc8/a00122.php" title="Mushroom.hpp" alt="" coords="131,1872,239,1899"/>
<area shape="rect" id="node29" href="../../da/d1e/a00149.php" title="Plant.hpp" alt="" coords="263,1872,341,1899"/>
<area shape="rect" id="node31" href="../../d7/d3f/a00173.php" title="Stone.hpp" alt="" coords="309,1723,391,1749"/>
<area shape="rect" id="node37" href="../../de/de1/a00065.php" title="DateTime.hpp" alt="" coords="207,1051,311,1077"/>
<area shape="rect" id="node40" href="../../d9/db6/a00146.php" title="PathfindingProblem.hpp" alt="" coords="395,1051,555,1077"/>
<area shape="rect" id="node41" href="../../de/d76/a00134.php" title="Pathfinding.hpp" alt="" coords="419,1125,531,1152"/>
<area shape="rect" id="node42" href="../../d5/db1/a00140.php" title="PathfindingDijkstra.hpp" alt="" coords="365,1200,522,1227"/>
<area shape="rect" id="node43" href="../../d2/df5/a00137.php" title="PathfindingAlgorithms.hpp" alt="" coords="356,1275,531,1301"/>
<area shape="rect" id="node47" href="../../d4/dee/a00008.php" title="Args.hpp" alt="" coords="606,1275,681,1301"/>
<area shape="rect" id="node48" href="../../d9/dd0/a00191.php" title="Timer.hpp" alt="" coords="705,1275,785,1301"/>
</map>
</div>
</div><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="namespaces"></a>
Namespaces</h2></td></tr>
<tr class="memitem:dd/ded/a00211"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dd/ded/a00211.php">mcd</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:ab001b84d20c0fffe59c7a55ed872d300"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dd/ded/a00211.php#ab001b84d20c0fffe59c7a55ed872d300">mcd::isLuhn</a> (const std::string &amp;num)</td></tr>
<tr class="memdesc:ab001b84d20c0fffe59c7a55ed872d300"><td class="mdescLeft">&#160;</td><td class="mdescRight">Validate a number like a card number, a SIRET number, ...  <a href="../../dd/ded/a00211.php#ab001b84d20c0fffe59c7a55ed872d300">More...</a><br /></td></tr>
<tr class="separator:ab001b84d20c0fffe59c7a55ed872d300"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a176933d706495ddff7385a68319e7169"><td class="memItemLeft" align="right" valign="top">int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dd/ded/a00211.php#a176933d706495ddff7385a68319e7169">mcd::luhn</a> (const std::string &amp;num)</td></tr>
<tr class="memdesc:a176933d706495ddff7385a68319e7169"><td class="mdescLeft">&#160;</td><td class="mdescRight">Compute the checksum number.  <a href="../../dd/ded/a00211.php#a176933d706495ddff7385a68319e7169">More...</a><br /></td></tr>
<tr class="separator:a176933d706495ddff7385a68319e7169"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:af9443ebf71fe196006831fe344a09f13"><td class="memTemplParams" colspan="2">template&lt;typename V &gt; </td></tr>
<tr class="memitem:af9443ebf71fe196006831fe344a09f13"><td class="memTemplItemLeft" align="right" valign="top">V&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../dd/ded/a00211.php#af9443ebf71fe196006831fe344a09f13">mcd::wholePart</a> (V a)</td></tr>
<tr class="memdesc:af9443ebf71fe196006831fe344a09f13"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the whole part of the given number.  <a href="../../dd/ded/a00211.php#af9443ebf71fe196006831fe344a09f13">More...</a><br /></td></tr>
<tr class="separator:af9443ebf71fe196006831fe344a09f13"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a0598b7abd7e7441f6553f1b486053945"><td class="memTemplParams" colspan="2">template&lt;typename V &gt; </td></tr>
<tr class="memitem:a0598b7abd7e7441f6553f1b486053945"><td class="memTemplItemLeft" align="right" valign="top">V&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../dd/ded/a00211.php#a0598b7abd7e7441f6553f1b486053945">mcd::decimalPart</a> (V a)</td></tr>
<tr class="memdesc:a0598b7abd7e7441f6553f1b486053945"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the decimal part of the given number.  <a href="../../dd/ded/a00211.php#a0598b7abd7e7441f6553f1b486053945">More...</a><br /></td></tr>
<tr class="separator:a0598b7abd7e7441f6553f1b486053945"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:af44c5ff8cc0a054f720ed177e7e44265"><td class="memTemplParams" colspan="2">template&lt;typename V , typename U &gt; </td></tr>
<tr class="memitem:af44c5ff8cc0a054f720ed177e7e44265"><td class="memTemplItemLeft" align="right" valign="top">V&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../dd/ded/a00211.php#af44c5ff8cc0a054f720ed177e7e44265">mcd::mod</a> (V a, U b, bool positive=false)</td></tr>
<tr class="memdesc:af44c5ff8cc0a054f720ed177e7e44265"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the modulo of two numbers.  <a href="../../dd/ded/a00211.php#af44c5ff8cc0a054f720ed177e7e44265">More...</a><br /></td></tr>
<tr class="separator:af44c5ff8cc0a054f720ed177e7e44265"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a6f68c011df46f54833bbda0ac9de04e2"><td class="memTemplParams" colspan="2">template&lt;typename V , typename U &gt; </td></tr>
<tr class="memitem:a6f68c011df46f54833bbda0ac9de04e2"><td class="memTemplItemLeft" align="right" valign="top">V&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../dd/ded/a00211.php#a6f68c011df46f54833bbda0ac9de04e2">mcd::invmod</a> (V a, U b, bool positive=false)</td></tr>
<tr class="memdesc:a6f68c011df46f54833bbda0ac9de04e2"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the modular inverse of a number.  <a href="../../dd/ded/a00211.php#a6f68c011df46f54833bbda0ac9de04e2">More...</a><br /></td></tr>
<tr class="separator:a6f68c011df46f54833bbda0ac9de04e2"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a0f3f4e24615446479ff59ce15ce61cde"><td class="memTemplParams" colspan="2">template&lt;typename V &gt; </td></tr>
<tr class="memitem:a0f3f4e24615446479ff59ce15ce61cde"><td class="memTemplItemLeft" align="right" valign="top">V&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../dd/ded/a00211.php#a0f3f4e24615446479ff59ce15ce61cde">mcd::pgcd</a> (V a, V b)</td></tr>
<tr class="memdesc:a0f3f4e24615446479ff59ce15ce61cde"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the result of the pgcd.  <a href="../../dd/ded/a00211.php#a0f3f4e24615446479ff59ce15ce61cde">More...</a><br /></td></tr>
<tr class="separator:a0f3f4e24615446479ff59ce15ce61cde"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a10764d50321a1ff81cc7cd4a9f7e42bc"><td class="memTemplParams" colspan="2">template&lt;typename V &gt; </td></tr>
<tr class="memitem:a10764d50321a1ff81cc7cd4a9f7e42bc"><td class="memTemplItemLeft" align="right" valign="top">V&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../dd/ded/a00211.php#a10764d50321a1ff81cc7cd4a9f7e42bc">mcd::eucl</a> (V a, V b)</td></tr>
<tr class="memdesc:a10764d50321a1ff81cc7cd4a9f7e42bc"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the result of the euclidian function.  <a href="../../dd/ded/a00211.php#a10764d50321a1ff81cc7cd4a9f7e42bc">More...</a><br /></td></tr>
<tr class="separator:a10764d50321a1ff81cc7cd4a9f7e42bc"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a4d75f23c9b03fd2c56324895d0ff3c58"><td class="memTemplParams" colspan="2">template&lt;class T &gt; </td></tr>
<tr class="memitem:a4d75f23c9b03fd2c56324895d0ff3c58"><td class="memTemplItemLeft" align="right" valign="top">T&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../dd/ded/a00211.php#a4d75f23c9b03fd2c56324895d0ff3c58">mcd::dist</a> (T x1, T x2, T y1, T y2, T z1=0, T z2=0)</td></tr>
<tr class="memdesc:a4d75f23c9b03fd2c56324895d0ff3c58"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the distance of the given coordinates.  <a href="../../dd/ded/a00211.php#a4d75f23c9b03fd2c56324895d0ff3c58">More...</a><br /></td></tr>
<tr class="separator:a4d75f23c9b03fd2c56324895d0ff3c58"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a900f9e45ac94dbf01c4b67fb40682118"><td class="memItemLeft" align="right" valign="top">double64_t&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dd/ded/a00211.php#a900f9e45ac94dbf01c4b67fb40682118">mcd::dist</a> (const Point &amp;ptA, const Point &amp;ptB)</td></tr>
<tr class="memdesc:a900f9e45ac94dbf01c4b67fb40682118"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the distance between the two given points.  <a href="../../dd/ded/a00211.php#a900f9e45ac94dbf01c4b67fb40682118">More...</a><br /></td></tr>
<tr class="separator:a900f9e45ac94dbf01c4b67fb40682118"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a9adc0354f681800c75d220e526377397"><td class="memTemplParams" colspan="2">template&lt;class T &gt; </td></tr>
<tr class="memitem:a9adc0354f681800c75d220e526377397"><td class="memTemplItemLeft" align="right" valign="top">T&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../dd/ded/a00211.php#a9adc0354f681800c75d220e526377397">mcd::sq</a> (T in)</td></tr>
<tr class="memdesc:a9adc0354f681800c75d220e526377397"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the square of the given number.  <a href="../../dd/ded/a00211.php#a9adc0354f681800c75d220e526377397">More...</a><br /></td></tr>
<tr class="separator:a9adc0354f681800c75d220e526377397"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a4af7738b8b199b0b0868819828bf3f4f"><td class="memTemplParams" colspan="2">template&lt;class T &gt; </td></tr>
<tr class="memitem:a4af7738b8b199b0b0868819828bf3f4f"><td class="memTemplItemLeft" align="right" valign="top">T&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../dd/ded/a00211.php#a4af7738b8b199b0b0868819828bf3f4f">mcd::abs</a> (T in)</td></tr>
<tr class="memdesc:a4af7738b8b199b0b0868819828bf3f4f"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the absolute value of the given number.  <a href="../../dd/ded/a00211.php#a4af7738b8b199b0b0868819828bf3f4f">More...</a><br /></td></tr>
<tr class="separator:a4af7738b8b199b0b0868819828bf3f4f"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:abc683613235e8674b000071c25747728"><td class="memTemplParams" colspan="2">template&lt;typename T , typename V , typename U  = typename std::conditional&lt;			std::is_integral&lt;T&gt;::value &amp;&amp; std::is_integral&lt;V&gt;::value || std::is_floating_point&lt;T&gt;::value &amp;&amp; std::is_floating_point&lt;V&gt;::value,			typename std::conditional&lt;				sizeof(T) &gt;= sizeof(V),				T,				V			&gt;::type, typename std::conditional&lt; std::is_floating_point&lt; T &gt;::value &amp;&amp;std::is_integral&lt; V &gt;::value, T, typename std::conditional&lt; std::is_floating_point&lt; V &gt;::value &amp;&amp;std::is_integral&lt; T &gt;::value, V, V &gt;::type &gt;::type &gt; </td></tr>
<tr class="memitem:abc683613235e8674b000071c25747728"><td class="memTemplItemLeft" align="right" valign="top">::type U&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../dd/ded/a00211.php#abc683613235e8674b000071c25747728">mcd::min</a> (T a, V b)</td></tr>
<tr class="memdesc:abc683613235e8674b000071c25747728"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the minimum of the arguments.  <a href="../../dd/ded/a00211.php#abc683613235e8674b000071c25747728">More...</a><br /></td></tr>
<tr class="separator:abc683613235e8674b000071c25747728"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a50e5370a188b7230c0dce47cc746f533"><td class="memTemplParams" colspan="2">template&lt;typename T , typename V , typename U  = typename std::conditional&lt;			std::is_integral&lt;T&gt;::value &amp;&amp; std::is_integral&lt;V&gt;::value || std::is_floating_point&lt;T&gt;::value &amp;&amp; std::is_floating_point&lt;V&gt;::value,			typename std::conditional&lt;				sizeof(T) &gt;= sizeof(V),				T,				V			&gt;::type, typename std::conditional&lt; std::is_floating_point&lt; T &gt;::value &amp;&amp;std::is_integral&lt; V &gt;::value, T, typename std::conditional&lt; std::is_floating_point&lt; V &gt;::value &amp;&amp;std::is_integral&lt; T &gt;::value, V, V &gt;::type &gt;::type &gt; </td></tr>
<tr class="memitem:a50e5370a188b7230c0dce47cc746f533"><td class="memTemplItemLeft" align="right" valign="top">::type U&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../dd/ded/a00211.php#a50e5370a188b7230c0dce47cc746f533">mcd::max</a> (T a, V b)</td></tr>
<tr class="memdesc:a50e5370a188b7230c0dce47cc746f533"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the maximum of the arguments.  <a href="../../dd/ded/a00211.php#a50e5370a188b7230c0dce47cc746f533">More...</a><br /></td></tr>
<tr class="separator:a50e5370a188b7230c0dce47cc746f533"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a7e1c88cc52e517f309354a546e78f403"><td class="memTemplParams" colspan="2">template&lt;class T &gt; </td></tr>
<tr class="memitem:a7e1c88cc52e517f309354a546e78f403"><td class="memTemplItemLeft" align="right" valign="top">T&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../dd/ded/a00211.php#a7e1c88cc52e517f309354a546e78f403">mcd::round</a> (T a, int zeros=0)</td></tr>
<tr class="memdesc:a7e1c88cc52e517f309354a546e78f403"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the round of the given number.  <a href="../../dd/ded/a00211.php#a7e1c88cc52e517f309354a546e78f403">More...</a><br /></td></tr>
<tr class="separator:a7e1c88cc52e517f309354a546e78f403"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ad3913978376bb08e036a7bf0b21d6b50"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dd/ded/a00211.php#ad3913978376bb08e036a7bf0b21d6b50">mcd::isPrime</a> (float nb)</td></tr>
<tr class="memdesc:ad3913978376bb08e036a7bf0b21d6b50"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return true if the given number is prime, false either.  <a href="../../dd/ded/a00211.php#ad3913978376bb08e036a7bf0b21d6b50">More...</a><br /></td></tr>
<tr class="separator:ad3913978376bb08e036a7bf0b21d6b50"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a6a0096efe278298f80c641af617dd216"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dd/ded/a00211.php#a6a0096efe278298f80c641af617dd216">mcd::isNumber</a> (char c)</td></tr>
<tr class="memdesc:a6a0096efe278298f80c641af617dd216"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return true if the caracter is a number.  <a href="../../dd/ded/a00211.php#a6a0096efe278298f80c641af617dd216">More...</a><br /></td></tr>
<tr class="separator:a6a0096efe278298f80c641af617dd216"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a2d67b0e24c6216a693a903f5bc8c31a0"><td class="memItemLeft" align="right" valign="top">double64_t&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dd/ded/a00211.php#a2d67b0e24c6216a693a903f5bc8c31a0">mcd::sigmoide</a> (double64_t in)</td></tr>
<tr class="memdesc:a2d67b0e24c6216a693a903f5bc8c31a0"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the result of the sigmoide function.  <a href="../../dd/ded/a00211.php#a2d67b0e24c6216a693a903f5bc8c31a0">More...</a><br /></td></tr>
<tr class="separator:a2d67b0e24c6216a693a903f5bc8c31a0"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a9042d2e8e9a6311b4260c6f376f4072c"><td class="memItemLeft" align="right" valign="top">double64_t&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dd/ded/a00211.php#a9042d2e8e9a6311b4260c6f376f4072c">mcd::dsigmoide</a> (double64_t in)</td></tr>
<tr class="memdesc:a9042d2e8e9a6311b4260c6f376f4072c"><td class="mdescLeft">&#160;</td><td class="mdescRight">Compute with the derivated sigmoide.  <a href="../../dd/ded/a00211.php#a9042d2e8e9a6311b4260c6f376f4072c">More...</a><br /></td></tr>
<tr class="separator:a9042d2e8e9a6311b4260c6f376f4072c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a69d6be0b9d139073dda5e708c76dccdd"><td class="memItemLeft" align="right" valign="top">int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dd/ded/a00211.php#a69d6be0b9d139073dda5e708c76dccdd">mcd::log2p</a> (int x)</td></tr>
<tr class="memdesc:a69d6be0b9d139073dda5e708c76dccdd"><td class="mdescLeft">&#160;</td><td class="mdescRight">Do the log of x in base 2.  <a href="../../dd/ded/a00211.php#a69d6be0b9d139073dda5e708c76dccdd">More...</a><br /></td></tr>
<tr class="separator:a69d6be0b9d139073dda5e708c76dccdd"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><dl class="section author"><dt>Author</dt><dd>Mathias CABIOCH-DELALANDE </dd></dl>
<dl class="section date"><dt>Date</dt><dd>Last modification : September, 24 2019 </dd></dl>
</div></div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../dir_bfccd401955b95cf8c75461437045ac0.php">inc</a></li><li class="navelem"><a class="el" href="../../dir_2ce2ad1ea5ded593884489da6d66e532.php">C++</a></li><li class="navelem"><a class="el" href="../../d0/dc2/a00104.php">maths.hpp</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
