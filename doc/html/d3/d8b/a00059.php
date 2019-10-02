<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.13"/>
		<title>C++: convert.hpp File Reference</title>
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
				$text = "Generated on Tue Oct 1 2019 15:13:17 for C++ by";
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
$(document).ready(function(){initNavTree('d3/d8b/a00059.php','../../');});
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
<div class="title">convert.hpp File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><code>#include &lt;type_traits&gt;</code><br />
<code>#include &quot;<a class="el" href="../../da/d45/a00011.php">C++/array.hpp</a>&quot;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for convert.hpp:</div>
<div class="dyncontent">
<div class="center"><img src="../../d9/d73/a00060.png" border="0" usemap="#convert_8hpp" alt=""/></div>
<map name="convert_8hpp" id="convert_8hpp">
<area shape="rect" id="node3" href="../../da/d45/a00011.php" title="C++/array.hpp" alt="" coords="304,80,411,107"/>
<area shape="rect" id="node5" href="../../dd/d32/a00041.php" title="C++/check.hpp" alt="" coords="301,155,413,181"/>
<area shape="rect" id="node45" href="../../d5/de9/a00176.php" title="C++/sorting.hpp" alt="" coords="495,155,611,181"/>
<area shape="rect" id="node9" href="../../d3/de5/a00209.php" title="C++/vector.hpp" alt="" coords="498,229,611,256"/>
<area shape="rect" id="node39" href="../../d6/d2d/a00047.php" title="C++/collides.hpp" alt="" coords="353,229,474,256"/>
<area shape="rect" id="node10" href="../../d2/de7/a00014.php" title="C++/arraysIncludes.hpp" alt="" coords="519,304,681,331"/>
<area shape="rect" id="node17" href="../../db/ddf/a00164.php" title="C++/pointers.hpp" alt="" coords="481,603,604,629"/>
<area shape="rect" id="node20" href="../../de/d79/a00203.php" title="C++/types.hpp" alt="" coords="596,677,705,704"/>
<area shape="rect" id="node22" href="../../d4/d51/a00017.php" title="Big.hpp" alt="" coords="560,752,627,779"/>
<area shape="rect" id="node37" href="../../dc/de6/a00167.php" title="PureVirtual.hpp" alt="" coords="651,752,762,779"/>
<area shape="rect" id="node38" href="../../d5/df1/a00206.php" title="UsefullDefines.hpp" alt="" coords="787,752,920,779"/>
<area shape="rect" id="node33" href="../../d3/d52/a00023.php" title="C++/Big_Constructor.hpp" alt="" coords="887,827,1057,853"/>
<area shape="rect" id="node34" href="../../d5/d16/a00029.php" title="C++/Big_Operator.hpp" alt="" coords="1082,827,1235,853"/>
<area shape="rect" id="node35" href="../../db/db2/a00020.php" title="C++/Big_Comparison.hpp" alt="" coords="1260,827,1433,853"/>
<area shape="rect" id="node36" href="../../d6/d5b/a00026.php" title="C++/Big_Maths.hpp" alt="" coords="1457,827,1596,853"/>
<area shape="rect" id="node40" href="../../d4/d81/a00110.php" title="C++/Matrix.hpp" alt="" coords="311,304,425,331"/>
<area shape="rect" id="node41" href="../../da/d2a/a00086.php" title="C++/Fraction.hpp" alt="" coords="187,379,311,405"/>
<area shape="rect" id="node42" href="../../df/d98/a00107.php" title="C++/maths.hpp" alt="" coords="193,453,306,480"/>
<area shape="rect" id="node43" href="../../dc/d87/a00032.php" title="C++/Binary.hpp" alt="" coords="439,528,553,555"/>
</map>
</div>
</div><div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="../../d4/de8/a00061.png" border="0" usemap="#convert_8hppdep" alt=""/></div>
<map name="convert_8hppdep" id="convert_8hppdep">
<area shape="rect" id="node2" href="../../d5/de0/a00050.php" title="console.hpp" alt="" coords="251,80,343,107"/>
<area shape="rect" id="node44" href="../../d2/d1f/a00083.php" title="files.hpp" alt="" coords="367,80,437,107"/>
<area shape="rect" id="node3" href="../../da/dec/a00080.php" title="errors.hpp" alt="" coords="309,155,389,181"/>
<area shape="rect" id="node4" href="../../de/df3/a00185.php" title="system.hpp" alt="" coords="303,229,394,256"/>
<area shape="rect" id="node5" href="../../d7/d25/a00182.php" title="string.hpp" alt="" coords="309,304,388,331"/>
<area shape="rect" id="node6" href="../../dc/d57/a00194.php" title="timeFunctions.hpp" alt="" coords="284,379,413,405"/>
<area shape="rect" id="node7" href="../../d9/d77/a00095.php" title="includes.hpp" alt="" coords="301,453,396,480"/>
<area shape="rect" id="node8" href="../../d5/df9/a00044.php" title="Clock.hpp" alt="" coords="5,677,87,704"/>
<area shape="rect" id="node29" href="../../dc/dee/a00053.php" title="ConsoleTable.hpp" alt="" coords="56,603,183,629"/>
<area shape="rect" id="node30" href="../../de/de1/a00065.php" title="Date.hpp" alt="" coords="135,528,210,555"/>
<area shape="rect" id="node32" href="../../d1/d44/a00098.php" title="IOConfig.hpp" alt="" coords="297,677,395,704"/>
<area shape="rect" id="node33" href="../../d2/df5/a00137.php" title="Path.hpp" alt="" coords="386,528,461,555"/>
<area shape="rect" id="node38" href="../../da/d1e/a00149.php" title="PathfindingException.hpp" alt="" coords="485,528,655,555"/>
<area shape="rect" id="node39" href="../../d5/dcb/a00170.php" title="Referenced.hpp" alt="" coords="547,752,662,779"/>
<area shape="rect" id="node40" href="../../da/d15/a00188.php" title="Threadable.hpp" alt="" coords="688,752,799,779"/>
<area shape="rect" id="node43" href="../../d9/dd0/a00191.php" title="Time.hpp" alt="" coords="235,528,311,555"/>
<area shape="rect" id="node9" href="../../d0/d89/a00071.php" title="defines.hpp" alt="" coords="336,901,425,928"/>
<area shape="rect" id="node10" href="../../df/d03/a00062.php" title="cryptage.hpp" alt="" coords="223,976,320,1003"/>
<area shape="rect" id="node27" href="../../d0/dc2/a00104.php" title="Map.hpp" alt="" coords="345,976,417,1003"/>
<area shape="rect" id="node28" href="../../d3/db1/a00200.php" title="Tree.hpp" alt="" coords="441,976,515,1003"/>
<area shape="rect" id="node11" href="../../d4/d8c/a00035.php" title="C++.hpp" alt="" coords="344,1051,417,1077"/>
<area shape="rect" id="node12" href="../../d9/d2e/a00056.php" title="Contraption.hpp" alt="" coords="277,1125,391,1152"/>
<area shape="rect" id="node26" href="../../d1/dc1/a00092.php" title="Identifier.hpp" alt="" coords="376,1499,473,1525"/>
<area shape="rect" id="node13" href="../../d1/d09/a00077.php" title="Entity.hpp" alt="" coords="180,1200,261,1227"/>
<area shape="rect" id="node24" href="../../de/d76/a00134.php" title="Object.hpp" alt="" coords="299,1200,385,1227"/>
<area shape="rect" id="node14" href="../../db/dab/a00089.php" title="Hostile.hpp" alt="" coords="66,1275,154,1301"/>
<area shape="rect" id="node21" href="../../dd/dc1/a00212.php" title="Vegetal.hpp" alt="" coords="175,1349,266,1376"/>
<area shape="rect" id="node15" href="../../d7/d46/a00002.php" title="Animal.hpp" alt="" coords="37,1349,124,1376"/>
<area shape="rect" id="node16" href="../../dd/dad/a00005.php" title="Ant.hpp" alt="" coords="39,1424,106,1451"/>
<area shape="rect" id="node17" href="../../db/db6/a00074.php" title="Entities.hpp" alt="" coords="257,1499,347,1525"/>
<area shape="rect" id="node18" href="../../d6/d7d/a00161.php" title="PlayerAbstraction.hpp" alt="" coords="229,1573,380,1600"/>
<area shape="rect" id="node19" href="../../d6/db8/a00158.php" title="Player.hpp" alt="" coords="319,1648,403,1675"/>
<area shape="rect" id="node20" href="../../d8/d41/a00038.php" title="C++Entities.hpp" alt="" coords="302,1723,419,1749"/>
<area shape="rect" id="node22" href="../../dc/dfe/a00125.php" title="Mushroom.hpp" alt="" coords="131,1424,239,1451"/>
<area shape="rect" id="node23" href="../../d3/df8/a00155.php" title="Plant.hpp" alt="" coords="263,1424,341,1451"/>
<area shape="rect" id="node25" href="../../db/dd9/a00179.php" title="Stone.hpp" alt="" coords="309,1275,391,1301"/>
<area shape="rect" id="node31" href="../../da/d24/a00068.php" title="DateTime.hpp" alt="" coords="207,603,311,629"/>
<area shape="rect" id="node34" href="../../d7/d9a/a00152.php" title="PathfindingProblem.hpp" alt="" coords="395,603,555,629"/>
<area shape="rect" id="node35" href="../../d5/db1/a00140.php" title="Pathfinding.hpp" alt="" coords="419,677,531,704"/>
<area shape="rect" id="node36" href="../../d9/db6/a00146.php" title="PathfindingDijkstra.hpp" alt="" coords="365,752,522,779"/>
<area shape="rect" id="node37" href="../../d7/dce/a00143.php" title="PathfindingAlgorithms.hpp" alt="" coords="356,827,531,853"/>
<area shape="rect" id="node41" href="../../d4/dee/a00008.php" title="Args.hpp" alt="" coords="606,827,681,853"/>
<area shape="rect" id="node42" href="../../de/db1/a00197.php" title="Timer.hpp" alt="" coords="705,827,785,853"/>
</map>
</div>
</div><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="namespaces"></a>
Namespaces</h2></td></tr>
<tr class="memitem:d5/d0b/a00220"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d5/d0b/a00220.php">mcd</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:a4a881e27c7ab22bb256fe6fa915a53f3"><td class="memTemplParams" colspan="2">template&lt;typename Type &gt; </td></tr>
<tr class="memitem:a4a881e27c7ab22bb256fe6fa915a53f3"><td class="memTemplItemLeft" align="right" valign="top">std::string&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d5/d0b/a00220.php#a4a881e27c7ab22bb256fe6fa915a53f3">mcd::tos</a> (Type in)</td></tr>
<tr class="memdesc:a4a881e27c7ab22bb256fe6fa915a53f3"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert <em>in</em> in a string.  <a href="../../d5/d0b/a00220.php#a4a881e27c7ab22bb256fe6fa915a53f3">More...</a><br /></td></tr>
<tr class="separator:a4a881e27c7ab22bb256fe6fa915a53f3"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a394c6f6e658ef68f7fa628a4ef1a27d8"><td class="memTemplParams" colspan="2">template&lt;typename V &gt; </td></tr>
<tr class="memitem:a394c6f6e658ef68f7fa628a4ef1a27d8"><td class="memTemplItemLeft" align="right" valign="top">int&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d5/d0b/a00220.php#a394c6f6e658ef68f7fa628a4ef1a27d8">mcd::toi</a> (V in)</td></tr>
<tr class="memdesc:a394c6f6e658ef68f7fa628a4ef1a27d8"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert <em>in</em> variable in int.  <a href="../../d5/d0b/a00220.php#a394c6f6e658ef68f7fa628a4ef1a27d8">More...</a><br /></td></tr>
<tr class="separator:a394c6f6e658ef68f7fa628a4ef1a27d8"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a04a4013b5e7e102afa595db39c2c51d0"><td class="memTemplParams" colspan="2">template&lt;typename V &gt; </td></tr>
<tr class="memitem:a04a4013b5e7e102afa595db39c2c51d0"><td class="memTemplItemLeft" align="right" valign="top">double&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d5/d0b/a00220.php#a04a4013b5e7e102afa595db39c2c51d0">mcd::tod</a> (V in)</td></tr>
<tr class="memdesc:a04a4013b5e7e102afa595db39c2c51d0"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert <em>in</em> variable in double.  <a href="../../d5/d0b/a00220.php#a04a4013b5e7e102afa595db39c2c51d0">More...</a><br /></td></tr>
<tr class="separator:a04a4013b5e7e102afa595db39c2c51d0"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aff767f9afbaa05b8075ddb95ed1005ec"><td class="memTemplParams" colspan="2">template&lt;typename V &gt; </td></tr>
<tr class="memitem:aff767f9afbaa05b8075ddb95ed1005ec"><td class="memTemplItemLeft" align="right" valign="top">float&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d5/d0b/a00220.php#aff767f9afbaa05b8075ddb95ed1005ec">mcd::tof</a> (V in)</td></tr>
<tr class="memdesc:aff767f9afbaa05b8075ddb95ed1005ec"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert <em>in</em> variable in float.  <a href="../../d5/d0b/a00220.php#aff767f9afbaa05b8075ddb95ed1005ec">More...</a><br /></td></tr>
<tr class="separator:aff767f9afbaa05b8075ddb95ed1005ec"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ad6f79ef9559f97a0c2df2ae9a2823b2d"><td class="memTemplParams" colspan="2">template&lt;typename V &gt; </td></tr>
<tr class="memitem:ad6f79ef9559f97a0c2df2ae9a2823b2d"><td class="memTemplItemLeft" align="right" valign="top">unsigned int&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d5/d0b/a00220.php#ad6f79ef9559f97a0c2df2ae9a2823b2d">mcd::tou</a> (V in)</td></tr>
<tr class="memdesc:ad6f79ef9559f97a0c2df2ae9a2823b2d"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert <em>in</em> variable in unsigned int.  <a href="../../d5/d0b/a00220.php#ad6f79ef9559f97a0c2df2ae9a2823b2d">More...</a><br /></td></tr>
<tr class="separator:ad6f79ef9559f97a0c2df2ae9a2823b2d"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aac31252127b23397d1d2a33edcbef372"><td class="memTemplParams" colspan="2">template&lt;typename V &gt; </td></tr>
<tr class="memitem:aac31252127b23397d1d2a33edcbef372"><td class="memTemplItemLeft" align="right" valign="top">unsigned long long int&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d5/d0b/a00220.php#aac31252127b23397d1d2a33edcbef372">mcd::tov</a> (V in)</td></tr>
<tr class="memdesc:aac31252127b23397d1d2a33edcbef372"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert <em>in</em> variable in unsigned long long int.  <a href="../../d5/d0b/a00220.php#aac31252127b23397d1d2a33edcbef372">More...</a><br /></td></tr>
<tr class="separator:aac31252127b23397d1d2a33edcbef372"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a19f7b1d39da03306645ea0d3cf20ac57"><td class="memTemplParams" colspan="2">template&lt;typename V &gt; </td></tr>
<tr class="memitem:a19f7b1d39da03306645ea0d3cf20ac57"><td class="memTemplItemLeft" align="right" valign="top">size_t&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d5/d0b/a00220.php#a19f7b1d39da03306645ea0d3cf20ac57">mcd::tost</a> (V in)</td></tr>
<tr class="memdesc:a19f7b1d39da03306645ea0d3cf20ac57"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert <em>in</em> variable in size_t.  <a href="../../d5/d0b/a00220.php#a19f7b1d39da03306645ea0d3cf20ac57">More...</a><br /></td></tr>
<tr class="separator:a19f7b1d39da03306645ea0d3cf20ac57"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:affda53dfde66654c598d454cffb0e68c"><td class="memTemplParams" colspan="2">template&lt;typename V &gt; </td></tr>
<tr class="memitem:affda53dfde66654c598d454cffb0e68c"><td class="memTemplItemLeft" align="right" valign="top">short&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d5/d0b/a00220.php#affda53dfde66654c598d454cffb0e68c">mcd::tosh</a> (V in)</td></tr>
<tr class="memdesc:affda53dfde66654c598d454cffb0e68c"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert <em>in</em> variable in short.  <a href="../../d5/d0b/a00220.php#affda53dfde66654c598d454cffb0e68c">More...</a><br /></td></tr>
<tr class="separator:affda53dfde66654c598d454cffb0e68c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:af64dff777bec7ba0d0dd8ad991a0a513"><td class="memTemplParams" colspan="2">template&lt;typename V &gt; </td></tr>
<tr class="memitem:af64dff777bec7ba0d0dd8ad991a0a513"><td class="memTemplItemLeft" align="right" valign="top">bool&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d5/d0b/a00220.php#af64dff777bec7ba0d0dd8ad991a0a513">mcd::tob</a> (V in)</td></tr>
<tr class="memdesc:af64dff777bec7ba0d0dd8ad991a0a513"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert <em>in</em> variable in boolean.  <a href="../../d5/d0b/a00220.php#af64dff777bec7ba0d0dd8ad991a0a513">More...</a><br /></td></tr>
<tr class="separator:af64dff777bec7ba0d0dd8ad991a0a513"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aebefabfd65c7a5f04f743779483dabbc"><td class="memTemplParams" colspan="2">template&lt;typename V &gt; </td></tr>
<tr class="memitem:aebefabfd65c7a5f04f743779483dabbc"><td class="memTemplItemLeft" align="right" valign="top">std::chrono::milliseconds&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d5/d0b/a00220.php#aebefabfd65c7a5f04f743779483dabbc">mcd::tomilli</a> (V in)</td></tr>
<tr class="memdesc:aebefabfd65c7a5f04f743779483dabbc"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert <em>in</em> variable in std::chrono::milliseconds.  <a href="../../d5/d0b/a00220.php#aebefabfd65c7a5f04f743779483dabbc">More...</a><br /></td></tr>
<tr class="separator:aebefabfd65c7a5f04f743779483dabbc"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><dl class="section author"><dt>Author</dt><dd>Mathias CABIOCH-DELALANDE </dd></dl>
<dl class="section date"><dt>Date</dt><dd>Last modification : August, 15 2018 </dd></dl>
</div></div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../dir_bfccd401955b95cf8c75461437045ac0.php">inc</a></li><li class="navelem"><a class="el" href="../../dir_2ce2ad1ea5ded593884489da6d66e532.php">C++</a></li><li class="navelem"><a class="el" href="../../d3/d8b/a00059.php">convert.hpp</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
