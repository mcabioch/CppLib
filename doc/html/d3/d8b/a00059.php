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
				$text = "Generated on Thu Oct 3 2019 19:33:52 for C++ by";
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
<area shape="rect" id="node3" href="../../da/d45/a00011.php" title="C++/array.hpp" alt="" coords="519,80,625,107"/>
<area shape="rect" id="node5" href="../../dd/d32/a00041.php" title="C++/check.hpp" alt="" coords="516,155,628,181"/>
<area shape="rect" id="node45" href="../../d5/de9/a00176.php" title="C++/sorting.hpp" alt="" coords="710,155,826,181"/>
<area shape="rect" id="node9" href="../../dd/dc1/a00212.php" title="C++/vector.hpp" alt="" coords="713,229,826,256"/>
<area shape="rect" id="node39" href="../../d6/d2d/a00047.php" title="C++/collides.hpp" alt="" coords="567,229,689,256"/>
<area shape="rect" id="node10" href="../../d2/de7/a00014.php" title="C++/arraysIncludes.hpp" alt="" coords="733,304,896,331"/>
<area shape="rect" id="node17" href="../../db/ddf/a00164.php" title="C++/pointers.hpp" alt="" coords="696,603,819,629"/>
<area shape="rect" id="node18" href="../../d5/df1/a00206.php" title="C++/types.hpp" alt="" coords="595,677,704,704"/>
<area shape="rect" id="node20" href="../../d4/d51/a00017.php" title="Big.hpp" alt="" coords="560,752,627,779"/>
<area shape="rect" id="node35" href="../../dc/de6/a00167.php" title="PureVirtual.hpp" alt="" coords="651,752,762,779"/>
<area shape="rect" id="node36" href="../../d3/de5/a00209.php" title="UsefullDefines.hpp" alt="" coords="787,752,920,779"/>
<area shape="rect" id="node31" href="../../d3/d52/a00023.php" title="C++/Big_Constructor.hpp" alt="" coords="887,827,1057,853"/>
<area shape="rect" id="node32" href="../../d5/d16/a00029.php" title="C++/Big_Operator.hpp" alt="" coords="1082,827,1235,853"/>
<area shape="rect" id="node33" href="../../db/db2/a00020.php" title="C++/Big_Comparison.hpp" alt="" coords="1260,827,1433,853"/>
<area shape="rect" id="node34" href="../../d6/d5b/a00026.php" title="C++/Big_Maths.hpp" alt="" coords="1457,827,1596,853"/>
<area shape="rect" id="node40" href="../../d4/d81/a00110.php" title="C++/Matrix.hpp" alt="" coords="526,304,639,331"/>
<area shape="rect" id="node41" href="../../da/d2a/a00086.php" title="C++/Fraction.hpp" alt="" coords="402,379,526,405"/>
<area shape="rect" id="node42" href="../../df/d98/a00107.php" title="C++/maths.hpp" alt="" coords="407,453,521,480"/>
<area shape="rect" id="node43" href="../../dc/d87/a00032.php" title="C++/Binary.hpp" alt="" coords="653,528,768,555"/>
</map>
</div>
</div><div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="../../d4/de8/a00061.png" border="0" usemap="#convert_8hppdep" alt=""/></div>
<map name="convert_8hppdep" id="convert_8hppdep">
<area shape="rect" id="node2" href="../../d5/de0/a00050.php" title="console.hpp" alt="" coords="251,80,343,107"/>
<area shape="rect" id="node45" href="../../d2/d1f/a00083.php" title="files.hpp" alt="" coords="367,80,437,107"/>
<area shape="rect" id="node3" href="../../da/dec/a00080.php" title="errors.hpp" alt="" coords="309,155,389,181"/>
<area shape="rect" id="node4" href="../../da/d15/a00188.php" title="system.hpp" alt="" coords="303,229,394,256"/>
<area shape="rect" id="node5" href="../../d7/d25/a00182.php" title="string.hpp" alt="" coords="309,304,388,331"/>
<area shape="rect" id="node6" href="../../de/df3/a00185.php" title="Used to replace strptime function when compiling for Windows. " alt="" coords="309,379,389,405"/>
<area shape="rect" id="node7" href="../../de/db1/a00197.php" title="timeFunctions.hpp" alt="" coords="284,453,413,480"/>
<area shape="rect" id="node8" href="../../d9/d77/a00095.php" title="includes.hpp" alt="" coords="301,528,396,555"/>
<area shape="rect" id="node9" href="../../d5/df9/a00044.php" title="Clock.hpp" alt="" coords="5,752,87,779"/>
<area shape="rect" id="node30" href="../../dc/dee/a00053.php" title="ConsoleTable.hpp" alt="" coords="56,677,183,704"/>
<area shape="rect" id="node31" href="../../de/de1/a00065.php" title="Date.hpp" alt="" coords="135,603,210,629"/>
<area shape="rect" id="node33" href="../../d1/d44/a00098.php" title="IOConfig.hpp" alt="" coords="297,752,395,779"/>
<area shape="rect" id="node34" href="../../d2/df5/a00137.php" title="Path.hpp" alt="" coords="386,603,461,629"/>
<area shape="rect" id="node39" href="../../da/d1e/a00149.php" title="PathfindingException.hpp" alt="" coords="485,603,655,629"/>
<area shape="rect" id="node40" href="../../d5/dcb/a00170.php" title="Referenced.hpp" alt="" coords="547,827,662,853"/>
<area shape="rect" id="node41" href="../../d9/dd0/a00191.php" title="Threadable.hpp" alt="" coords="688,827,799,853"/>
<area shape="rect" id="node44" href="../../dc/d57/a00194.php" title="Time.hpp" alt="" coords="235,603,311,629"/>
<area shape="rect" id="node10" href="../../d0/d89/a00071.php" title="defines.hpp" alt="" coords="336,976,425,1003"/>
<area shape="rect" id="node11" href="../../df/d03/a00062.php" title="cryptage.hpp" alt="" coords="223,1051,320,1077"/>
<area shape="rect" id="node28" href="../../d0/dc2/a00104.php" title="Map.hpp" alt="" coords="345,1051,417,1077"/>
<area shape="rect" id="node29" href="../../de/d79/a00203.php" title="Tree.hpp" alt="" coords="441,1051,515,1077"/>
<area shape="rect" id="node12" href="../../d4/d8c/a00035.php" title="C++.hpp" alt="" coords="344,1125,417,1152"/>
<area shape="rect" id="node13" href="../../d9/d2e/a00056.php" title="Contraption.hpp" alt="" coords="277,1200,391,1227"/>
<area shape="rect" id="node27" href="../../d1/dc1/a00092.php" title="Identifier.hpp" alt="" coords="376,1573,473,1600"/>
<area shape="rect" id="node14" href="../../d1/d09/a00077.php" title="Entity.hpp" alt="" coords="180,1275,261,1301"/>
<area shape="rect" id="node25" href="../../de/d76/a00134.php" title="Object.hpp" alt="" coords="299,1275,385,1301"/>
<area shape="rect" id="node15" href="../../db/dab/a00089.php" title="Hostile.hpp" alt="" coords="66,1349,154,1376"/>
<area shape="rect" id="node22" href="../../d3/dd5/a00215.php" title="Vegetal.hpp" alt="" coords="175,1424,266,1451"/>
<area shape="rect" id="node16" href="../../d7/d46/a00002.php" title="Animal.hpp" alt="" coords="37,1424,124,1451"/>
<area shape="rect" id="node17" href="../../dd/dad/a00005.php" title="Ant.hpp" alt="" coords="39,1499,106,1525"/>
<area shape="rect" id="node18" href="../../db/db6/a00074.php" title="Entities.hpp" alt="" coords="257,1573,347,1600"/>
<area shape="rect" id="node19" href="../../d6/d7d/a00161.php" title="PlayerAbstraction.hpp" alt="" coords="229,1648,380,1675"/>
<area shape="rect" id="node20" href="../../d6/db8/a00158.php" title="Player.hpp" alt="" coords="319,1723,403,1749"/>
<area shape="rect" id="node21" href="../../d8/d41/a00038.php" title="C++Entities.hpp" alt="" coords="302,1797,419,1824"/>
<area shape="rect" id="node23" href="../../dc/dfe/a00125.php" title="Mushroom.hpp" alt="" coords="131,1499,239,1525"/>
<area shape="rect" id="node24" href="../../d3/df8/a00155.php" title="Plant.hpp" alt="" coords="263,1499,341,1525"/>
<area shape="rect" id="node26" href="../../db/dd9/a00179.php" title="Stone.hpp" alt="" coords="309,1349,391,1376"/>
<area shape="rect" id="node32" href="../../da/d24/a00068.php" title="DateTime.hpp" alt="" coords="207,677,311,704"/>
<area shape="rect" id="node35" href="../../d7/d9a/a00152.php" title="PathfindingProblem.hpp" alt="" coords="395,677,555,704"/>
<area shape="rect" id="node36" href="../../d5/db1/a00140.php" title="Pathfinding.hpp" alt="" coords="419,752,531,779"/>
<area shape="rect" id="node37" href="../../d9/db6/a00146.php" title="PathfindingDijkstra.hpp" alt="" coords="365,827,522,853"/>
<area shape="rect" id="node38" href="../../d7/dce/a00143.php" title="PathfindingAlgorithms.hpp" alt="" coords="356,901,531,928"/>
<area shape="rect" id="node42" href="../../d4/dee/a00008.php" title="Args.hpp" alt="" coords="606,901,681,928"/>
<area shape="rect" id="node43" href="../../d3/db1/a00200.php" title="Timer.hpp" alt="" coords="705,901,785,928"/>
</map>
</div>
</div><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="namespaces"></a>
Namespaces</h2></td></tr>
<tr class="memitem:dc/d28/a00223"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dc/d28/a00223.php">mcd</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:ae057a7c5042a3cacb444199a2b6b7598"><td class="memTemplParams" colspan="2">template&lt;typename Type &gt; </td></tr>
<tr class="memitem:ae057a7c5042a3cacb444199a2b6b7598"><td class="memTemplItemLeft" align="right" valign="top">std::string&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../dc/d28/a00223.php#ae057a7c5042a3cacb444199a2b6b7598">mcd::tos</a> (const Type &amp;in)</td></tr>
<tr class="memdesc:ae057a7c5042a3cacb444199a2b6b7598"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert <em>in</em> in a string.  <a href="../../dc/d28/a00223.php#ae057a7c5042a3cacb444199a2b6b7598">More...</a><br /></td></tr>
<tr class="separator:ae057a7c5042a3cacb444199a2b6b7598"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a476d57ae34f933a4192553496ec91208"><td class="memTemplParams" colspan="2">template&lt;typename V &gt; </td></tr>
<tr class="memitem:a476d57ae34f933a4192553496ec91208"><td class="memTemplItemLeft" align="right" valign="top">int&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../dc/d28/a00223.php#a476d57ae34f933a4192553496ec91208">mcd::toi</a> (const V &amp;in)</td></tr>
<tr class="memdesc:a476d57ae34f933a4192553496ec91208"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert <em>in</em> variable in int.  <a href="../../dc/d28/a00223.php#a476d57ae34f933a4192553496ec91208">More...</a><br /></td></tr>
<tr class="separator:a476d57ae34f933a4192553496ec91208"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a3c6193ba2e9669603892d2508cbc6668"><td class="memTemplParams" colspan="2">template&lt;typename V &gt; </td></tr>
<tr class="memitem:a3c6193ba2e9669603892d2508cbc6668"><td class="memTemplItemLeft" align="right" valign="top">double&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../dc/d28/a00223.php#a3c6193ba2e9669603892d2508cbc6668">mcd::tod</a> (const V &amp;in)</td></tr>
<tr class="memdesc:a3c6193ba2e9669603892d2508cbc6668"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert <em>in</em> variable in double.  <a href="../../dc/d28/a00223.php#a3c6193ba2e9669603892d2508cbc6668">More...</a><br /></td></tr>
<tr class="separator:a3c6193ba2e9669603892d2508cbc6668"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a6ed92c0cecb59861393802ac313a2b0f"><td class="memTemplParams" colspan="2">template&lt;typename V &gt; </td></tr>
<tr class="memitem:a6ed92c0cecb59861393802ac313a2b0f"><td class="memTemplItemLeft" align="right" valign="top">float&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../dc/d28/a00223.php#a6ed92c0cecb59861393802ac313a2b0f">mcd::tof</a> (const V &amp;in)</td></tr>
<tr class="memdesc:a6ed92c0cecb59861393802ac313a2b0f"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert <em>in</em> variable in float.  <a href="../../dc/d28/a00223.php#a6ed92c0cecb59861393802ac313a2b0f">More...</a><br /></td></tr>
<tr class="separator:a6ed92c0cecb59861393802ac313a2b0f"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a818831d2e74dbfa3be2150c38a9afa31"><td class="memTemplParams" colspan="2">template&lt;typename V &gt; </td></tr>
<tr class="memitem:a818831d2e74dbfa3be2150c38a9afa31"><td class="memTemplItemLeft" align="right" valign="top">unsigned int&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../dc/d28/a00223.php#a818831d2e74dbfa3be2150c38a9afa31">mcd::tou</a> (const V &amp;in)</td></tr>
<tr class="memdesc:a818831d2e74dbfa3be2150c38a9afa31"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert <em>in</em> variable in unsigned int.  <a href="../../dc/d28/a00223.php#a818831d2e74dbfa3be2150c38a9afa31">More...</a><br /></td></tr>
<tr class="separator:a818831d2e74dbfa3be2150c38a9afa31"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a21f9e69f4ccff705b65007a1ac7063ef"><td class="memTemplParams" colspan="2">template&lt;typename V &gt; </td></tr>
<tr class="memitem:a21f9e69f4ccff705b65007a1ac7063ef"><td class="memTemplItemLeft" align="right" valign="top">unsigned long long int&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../dc/d28/a00223.php#a21f9e69f4ccff705b65007a1ac7063ef">mcd::tov</a> (const V &amp;in)</td></tr>
<tr class="memdesc:a21f9e69f4ccff705b65007a1ac7063ef"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert <em>in</em> variable in unsigned long long int.  <a href="../../dc/d28/a00223.php#a21f9e69f4ccff705b65007a1ac7063ef">More...</a><br /></td></tr>
<tr class="separator:a21f9e69f4ccff705b65007a1ac7063ef"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a917e4be62e6930b138038ae16ebc7904"><td class="memTemplParams" colspan="2">template&lt;typename V &gt; </td></tr>
<tr class="memitem:a917e4be62e6930b138038ae16ebc7904"><td class="memTemplItemLeft" align="right" valign="top">size_t&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../dc/d28/a00223.php#a917e4be62e6930b138038ae16ebc7904">mcd::tost</a> (const V &amp;in)</td></tr>
<tr class="memdesc:a917e4be62e6930b138038ae16ebc7904"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert <em>in</em> variable in size_t.  <a href="../../dc/d28/a00223.php#a917e4be62e6930b138038ae16ebc7904">More...</a><br /></td></tr>
<tr class="separator:a917e4be62e6930b138038ae16ebc7904"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:adfea444e2cb8e428b7c9604d77076ad1"><td class="memTemplParams" colspan="2">template&lt;typename V &gt; </td></tr>
<tr class="memitem:adfea444e2cb8e428b7c9604d77076ad1"><td class="memTemplItemLeft" align="right" valign="top">short&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../dc/d28/a00223.php#adfea444e2cb8e428b7c9604d77076ad1">mcd::tosh</a> (const V &amp;in)</td></tr>
<tr class="memdesc:adfea444e2cb8e428b7c9604d77076ad1"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert <em>in</em> variable in short.  <a href="../../dc/d28/a00223.php#adfea444e2cb8e428b7c9604d77076ad1">More...</a><br /></td></tr>
<tr class="separator:adfea444e2cb8e428b7c9604d77076ad1"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a7b322c51a82629ed6b2325f2f938eae3"><td class="memTemplParams" colspan="2">template&lt;typename V &gt; </td></tr>
<tr class="memitem:a7b322c51a82629ed6b2325f2f938eae3"><td class="memTemplItemLeft" align="right" valign="top">bool&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../dc/d28/a00223.php#a7b322c51a82629ed6b2325f2f938eae3">mcd::tob</a> (const V &amp;in)</td></tr>
<tr class="memdesc:a7b322c51a82629ed6b2325f2f938eae3"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert <em>in</em> variable in boolean.  <a href="../../dc/d28/a00223.php#a7b322c51a82629ed6b2325f2f938eae3">More...</a><br /></td></tr>
<tr class="separator:a7b322c51a82629ed6b2325f2f938eae3"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a71458bb6c1d0939bd975cdf25e864599"><td class="memTemplParams" colspan="2">template&lt;typename V &gt; </td></tr>
<tr class="memitem:a71458bb6c1d0939bd975cdf25e864599"><td class="memTemplItemLeft" align="right" valign="top">std::chrono::milliseconds&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../dc/d28/a00223.php#a71458bb6c1d0939bd975cdf25e864599">mcd::tomilli</a> (const V &amp;in)</td></tr>
<tr class="memdesc:a71458bb6c1d0939bd975cdf25e864599"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert <em>in</em> variable in std::chrono::milliseconds.  <a href="../../dc/d28/a00223.php#a71458bb6c1d0939bd975cdf25e864599">More...</a><br /></td></tr>
<tr class="separator:a71458bb6c1d0939bd975cdf25e864599"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><dl class="section author"><dt>Author</dt><dd>Mathias CABIOCH-DELALANDE </dd></dl>
<dl class="section date"><dt>Date</dt><dd>Last modification : October, 02 2019 </dd></dl>
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
