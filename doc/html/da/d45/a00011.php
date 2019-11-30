<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.13"/>
		<title>C++: array.hpp File Reference</title>
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
				$text = "Generated on Sat Nov 30 2019 18:26:00 for C++ by";
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
$(document).ready(function(){initNavTree('da/d45/a00011.php','../../');});
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
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<div class="title">array.hpp File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><code>#include &lt;stdexcept&gt;</code><br />
<code>#include &quot;<a class="el" href="../../d5/de0/a00050.php">C++/check.hpp</a>&quot;</code><br />
<code>#include &quot;<a class="el" href="../../dc/d57/a00194.php">C++/sorting.hpp</a>&quot;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for array.hpp:</div>
<div class="dyncontent">
<div class="center"><img src="../../df/d86/a00012.png" border="0" usemap="#array_8hpp" alt=""/></div>
<map name="array_8hpp" id="array_8hpp">
<area shape="rect" id="node3" href="../../d5/de0/a00050.php" title="C++/check.hpp" alt="" coords="589,80,701,107"/>
<area shape="rect" id="node47" href="../../dc/d57/a00194.php" title="C++/sorting.hpp" alt="" coords="727,80,843,107"/>
<area shape="rect" id="node6" href="../../d6/de1/a00233.php" title="C++/vector.hpp" alt="" coords="730,155,843,181"/>
<area shape="rect" id="node41" href="../../d9/d2e/a00056.php" title="C++/collides.hpp" alt="" coords="585,155,706,181"/>
<area shape="rect" id="node7" href="../../d2/de7/a00014.php" title="C++/arraysIncludes.hpp" alt="" coords="751,229,913,256"/>
<area shape="rect" id="node14" href="../../d7/d25/a00182.php" title="C++/pointers.hpp" alt="" coords="713,528,836,555"/>
<area shape="rect" id="node15" href="../../d9/d01/a00227.php" title="C++/types.hpp" alt="" coords="612,603,721,629"/>
<area shape="rect" id="node17" href="../../d3/d52/a00023.php" title="Big.hpp" alt="" coords="633,677,700,704"/>
<area shape="rect" id="node36" href="../../d5/ddf/a00224.php" title="C++/Tree.hpp" alt="" coords="506,677,609,704"/>
<area shape="rect" id="node37" href="../../de/df3/a00185.php" title="PureVirtual.hpp" alt="" coords="725,677,835,704"/>
<area shape="rect" id="node38" href="../../d1/da8/a00230.php" title="UsefullDefines.hpp" alt="" coords="860,677,993,704"/>
<area shape="rect" id="node18" href="../../d7/d9a/a00152.php" title="C++/OsDetection.hpp" alt="" coords="322,752,473,779"/>
<area shape="rect" id="node32" href="../../d5/d16/a00029.php" title="C++/Big_Constructor.hpp" alt="" coords="1035,752,1205,779"/>
<area shape="rect" id="node33" href="../../d4/d8c/a00035.php" title="C++/Big_Operator.hpp" alt="" coords="497,752,650,779"/>
<area shape="rect" id="node34" href="../../d6/d5b/a00026.php" title="C++/Big_Comparison.hpp" alt="" coords="675,752,848,779"/>
<area shape="rect" id="node35" href="../../dc/d87/a00032.php" title="C++/Big_Maths.hpp" alt="" coords="872,752,1011,779"/>
<area shape="rect" id="node20" href="../../d3/d00/a00113.php" title="C++/lowIncludes.hpp" alt="" coords="391,827,537,853"/>
<area shape="rect" id="node42" href="../../dc/dfe/a00125.php" title="C++/Matrix.hpp" alt="" coords="543,229,657,256"/>
<area shape="rect" id="node43" href="../../d9/d77/a00095.php" title="C++/Fraction.hpp" alt="" coords="419,304,543,331"/>
<area shape="rect" id="node44" href="../../df/dc8/a00122.php" title="C++/maths.hpp" alt="" coords="425,379,538,405"/>
<area shape="rect" id="node45" href="../../d8/d41/a00038.php" title="C++/Binary.hpp" alt="" coords="671,453,785,480"/>
</map>
</div>
</div><div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="../../d7/dd4/a00013.png" border="0" usemap="#array_8hppdep" alt=""/></div>
<map name="array_8hppdep" id="array_8hppdep">
<area shape="rect" id="node2" href="../../da/d24/a00068.php" title="convert.hpp" alt="" coords="330,80,421,107"/>
<area shape="rect" id="node3" href="../../d3/d8b/a00059.php" title="console.hpp" alt="" coords="277,155,369,181"/>
<area shape="rect" id="node50" href="../../d1/dc1/a00092.php" title="files.hpp" alt="" coords="393,155,464,181"/>
<area shape="rect" id="node4" href="../../db/dab/a00089.php" title="errors.hpp" alt="" coords="335,229,415,256"/>
<area shape="rect" id="node5" href="../../d5/df1/a00206.php" title="system.hpp" alt="" coords="330,304,421,331"/>
<area shape="rect" id="node6" href="../../d3/db1/a00200.php" title="string.hpp" alt="" coords="336,379,415,405"/>
<area shape="rect" id="node7" href="../../de/d79/a00203.php" title="Used to replace strptime function when compiling for Windows. " alt="" coords="335,453,415,480"/>
<area shape="rect" id="node8" href="../../dc/d9a/a00218.php" title="timeFunctions.hpp" alt="" coords="311,528,440,555"/>
<area shape="rect" id="node9" href="../../d0/dc2/a00104.php" title="includes.hpp" alt="" coords="328,603,423,629"/>
<area shape="rect" id="node10" href="../../dc/dee/a00053.php" title="Clock.hpp" alt="" coords="5,827,87,853"/>
<area shape="rect" id="node34" href="../../df/d03/a00062.php" title="ConsoleTable.hpp" alt="" coords="120,901,247,928"/>
<area shape="rect" id="node35" href="../../db/db6/a00074.php" title="Date.hpp" alt="" coords="162,677,237,704"/>
<area shape="rect" id="node37" href="../../df/d98/a00107.php" title="IOConfig.hpp" alt="" coords="318,752,417,779"/>
<area shape="rect" id="node38" href="../../d3/df8/a00155.php" title="Path.hpp" alt="" coords="413,677,487,704"/>
<area shape="rect" id="node44" href="../../dc/de6/a00167.php" title="PathfindingException.hpp" alt="" coords="511,677,682,704"/>
<area shape="rect" id="node45" href="../../da/d15/a00188.php" title="Referenced.hpp" alt="" coords="586,827,701,853"/>
<area shape="rect" id="node46" href="../../dd/dc1/a00212.php" title="Threadable.hpp" alt="" coords="715,976,825,1003"/>
<area shape="rect" id="node49" href="../../d3/dd5/a00215.php" title="Time.hpp" alt="" coords="261,677,337,704"/>
<area shape="rect" id="node11" href="../../da/dec/a00080.php" title="defines.hpp" alt="" coords="369,1125,459,1152"/>
<area shape="rect" id="node12" href="../../db/db2/a00020.php" title="AssertionException.hpp" alt="" coords="275,1200,435,1227"/>
<area shape="rect" id="node33" href="../../d0/d89/a00071.php" title="cryptage.hpp" alt="" coords="423,1275,520,1301"/>
<area shape="rect" id="node13" href="../../d4/d51/a00017.php" title="Assert.hpp" alt="" coords="313,1275,398,1301"/>
<area shape="rect" id="node14" href="../../d6/d2d/a00047.php" title="C++lib.hpp" alt="" coords="369,1349,456,1376"/>
<area shape="rect" id="node15" href="../../d4/d81/a00110.php" title="Logger.hpp" alt="" coords="317,1424,404,1451"/>
<area shape="rect" id="node32" href="../../d3/de5/a00209.php" title="Test.hpp" alt="" coords="428,1424,501,1451"/>
<area shape="rect" id="node16" href="../../dd/d32/a00041.php" title="C++.hpp" alt="" coords="376,1499,449,1525"/>
<area shape="rect" id="node17" href="../../de/de1/a00065.php" title="Contraption.hpp" alt="" coords="309,1573,423,1600"/>
<area shape="rect" id="node31" href="../../d4/d3a/a00101.php" title="Identifier.hpp" alt="" coords="408,1947,505,1973"/>
<area shape="rect" id="node18" href="../../da/d2a/a00086.php" title="Entity.hpp" alt="" coords="212,1648,293,1675"/>
<area shape="rect" id="node29" href="../../da/d1e/a00149.php" title="Object.hpp" alt="" coords="331,1648,417,1675"/>
<area shape="rect" id="node19" href="../../d1/d44/a00098.php" title="Hostile.hpp" alt="" coords="85,1723,173,1749"/>
<area shape="rect" id="node26" href="../../d7/d40/a00236.php" title="Vegetal.hpp" alt="" coords="207,1797,298,1824"/>
<area shape="rect" id="node20" href="../../d7/d46/a00002.php" title="Animal.hpp" alt="" coords="69,1797,156,1824"/>
<area shape="rect" id="node21" href="../../dd/dad/a00005.php" title="Ant.hpp" alt="" coords="71,1872,138,1899"/>
<area shape="rect" id="node22" href="../../d2/d1f/a00083.php" title="Entities.hpp" alt="" coords="289,1947,379,1973"/>
<area shape="rect" id="node23" href="../../db/dd9/a00179.php" title="PlayerAbstraction.hpp" alt="" coords="261,2021,412,2048"/>
<area shape="rect" id="node24" href="../../d5/de9/a00176.php" title="Player.hpp" alt="" coords="351,2096,435,2123"/>
<area shape="rect" id="node25" href="../../d5/df9/a00044.php" title="C++Entities.hpp" alt="" coords="334,2171,451,2197"/>
<area shape="rect" id="node27" href="../../d5/db1/a00140.php" title="Mushroom.hpp" alt="" coords="163,1872,271,1899"/>
<area shape="rect" id="node28" href="../../d7/d3f/a00173.php" title="Plant.hpp" alt="" coords="295,1872,373,1899"/>
<area shape="rect" id="node30" href="../../de/db1/a00197.php" title="Stone.hpp" alt="" coords="341,1723,423,1749"/>
<area shape="rect" id="node36" href="../../d1/d09/a00077.php" title="DateTime.hpp" alt="" coords="190,752,294,779"/>
<area shape="rect" id="node39" href="../../d5/dcb/a00170.php" title="PathfindingProblem.hpp" alt="" coords="441,752,601,779"/>
<area shape="rect" id="node40" href="../../d6/db8/a00158.php" title="Pathfinding.hpp" alt="" coords="442,827,554,853"/>
<area shape="rect" id="node41" href="../../db/ddf/a00164.php" title="PathfindingDijkstra.hpp" alt="" coords="403,901,561,928"/>
<area shape="rect" id="node42" href="../../d6/d7d/a00161.php" title="PathfindingAlgorithms.hpp" alt="" coords="389,976,564,1003"/>
<area shape="rect" id="node43" href="../../df/d6a/a00119.php" title="Map.hpp" alt="" coords="415,1051,487,1077"/>
<area shape="rect" id="node47" href="../../d4/dee/a00008.php" title="Args.hpp" alt="" coords="639,1051,714,1077"/>
<area shape="rect" id="node48" href="../../dd/d52/a00221.php" title="Timer.hpp" alt="" coords="738,1051,818,1077"/>
</map>
</div>
</div><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Classes</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d0/dad/a00806.php">mcd::stack&lt; T, Container &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">An implementation of std::stack.  <a href="../../d0/dad/a00806.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d4/dfd/a00810.php">mcd::t_stack&lt; T, Container &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">An thread-safe implementation of stack.  <a href="../../d4/dfd/a00810.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../da/d71/a00814.php">mcd::queue&lt; T, Container &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">An implementation of std::queue.  <a href="../../da/d71/a00814.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d3/d60/a00818.php">mcd::t_queue&lt; T, Container &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">An thread-safe implementation of queue.  <a href="../../d3/d60/a00818.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="namespaces"></a>
Namespaces</h2></td></tr>
<tr class="memitem:d6/d08/a00244"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d6/d08/a00244.php">mcd</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:ad751f3d04e342cbe86c561683c3bd99c"><td class="memTemplParams" colspan="2">template&lt;typename T &gt; </td></tr>
<tr class="memitem:ad751f3d04e342cbe86c561683c3bd99c"><td class="memTemplItemLeft" align="right" valign="top">std::string&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d6/d08/a00244.php#ad751f3d04e342cbe86c561683c3bd99c">mcd::implode</a> (const std::vector&lt; T &gt; &amp;a, const std::string &amp;glue=&quot;&quot;)</td></tr>
<tr class="memdesc:ad751f3d04e342cbe86c561683c3bd99c"><td class="mdescLeft">&#160;</td><td class="mdescRight">Stick the <em>a</em> vector with the <em>glue</em> given.  <a href="../../d6/d08/a00244.php#ad751f3d04e342cbe86c561683c3bd99c">More...</a><br /></td></tr>
<tr class="separator:ad751f3d04e342cbe86c561683c3bd99c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a0029a835651d350c925a43fd718ab590"><td class="memTemplParams" colspan="2">template&lt;typename Array &gt; </td></tr>
<tr class="memitem:a0029a835651d350c925a43fd718ab590"><td class="memTemplItemLeft" align="right" valign="top">void&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d6/d08/a00244.php#a0029a835651d350c925a43fd718ab590">mcd::print_r</a> (const Array &amp;a)</td></tr>
<tr class="memdesc:a0029a835651d350c925a43fd718ab590"><td class="mdescLeft">&#160;</td><td class="mdescRight">Print the content of an array.  <a href="../../d6/d08/a00244.php#a0029a835651d350c925a43fd718ab590">More...</a><br /></td></tr>
<tr class="separator:a0029a835651d350c925a43fd718ab590"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a4462e6059998aa718e92fd11fd9747e8"><td class="memTemplParams" colspan="2">template&lt;typename V &gt; </td></tr>
<tr class="memitem:a4462e6059998aa718e92fd11fd9747e8"><td class="memTemplItemLeft" align="right" valign="top">std::vector&lt; V &gt;&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d6/d08/a00244.php#a4462e6059998aa718e92fd11fd9747e8">mcd::rewrite</a> (const std::vector&lt; V &gt; &amp;table, unsigned index)</td></tr>
<tr class="memdesc:a4462e6059998aa718e92fd11fd9747e8"><td class="mdescLeft">&#160;</td><td class="mdescRight">Rewrite a vector array without the value at the given index.  <a href="../../d6/d08/a00244.php#a4462e6059998aa718e92fd11fd9747e8">More...</a><br /></td></tr>
<tr class="separator:a4462e6059998aa718e92fd11fd9747e8"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ad53bf266a5db5dc112e71ebe3c78946e"><td class="memTemplParams" colspan="2">template&lt;typename T &gt; </td></tr>
<tr class="memitem:ad53bf266a5db5dc112e71ebe3c78946e"><td class="memTemplItemLeft" align="right" valign="top">bool&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d6/d08/a00244.php#ad53bf266a5db5dc112e71ebe3c78946e">mcd::contains</a> (const std::vector&lt; T &gt; &amp;table, T value)</td></tr>
<tr class="memdesc:ad53bf266a5db5dc112e71ebe3c78946e"><td class="mdescLeft">&#160;</td><td class="mdescRight">Verify if a vector contains or not something.  <a href="../../d6/d08/a00244.php#ad53bf266a5db5dc112e71ebe3c78946e">More...</a><br /></td></tr>
<tr class="separator:ad53bf266a5db5dc112e71ebe3c78946e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a5996fcf8097a903a5461a6035ff0f98d"><td class="memTemplParams" colspan="2">template&lt;typename Something &gt; </td></tr>
<tr class="memitem:a5996fcf8097a903a5461a6035ff0f98d"><td class="memTemplItemLeft" align="right" valign="top">void&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d6/d08/a00244.php#a5996fcf8097a903a5461a6035ff0f98d">mcd::print_all</a> (const Something &amp;data, bool change=false)</td></tr>
<tr class="memdesc:a5996fcf8097a903a5461a6035ff0f98d"><td class="mdescLeft">&#160;</td><td class="mdescRight">Prints approximately everything.  <a href="../../d6/d08/a00244.php#a5996fcf8097a903a5461a6035ff0f98d">More...</a><br /></td></tr>
<tr class="separator:a5996fcf8097a903a5461a6035ff0f98d"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:af1c42a8b9412d2afa3b486c5e629f752"><td class="memItemLeft" align="right" valign="top">size_t&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d6/d08/a00244.php#af1c42a8b9412d2afa3b486c5e629f752">mcd::array2Dto1D</a> (size_t x, size_t y, size_t maxX)</td></tr>
<tr class="separator:af1c42a8b9412d2afa3b486c5e629f752"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a040a2aa0625adc9f13e6568d906a20a2"><td class="memItemLeft" align="right" valign="top">std::pair&lt; size_t, size_t &gt;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d6/d08/a00244.php#a040a2aa0625adc9f13e6568d906a20a2">mcd::array1Dto2D</a> (size_t index, size_t maxX)</td></tr>
<tr class="separator:a040a2aa0625adc9f13e6568d906a20a2"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a53a33cf86c36584f92495307f8e68a00"><td class="memItemLeft" align="right" valign="top">size_t&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d6/d08/a00244.php#a53a33cf86c36584f92495307f8e68a00">mcd::array2Dto1D</a> (const Point &amp;pt, size_t maxX)</td></tr>
<tr class="separator:a53a33cf86c36584f92495307f8e68a00"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><dl class="section author"><dt>Author</dt><dd>Mathias CABIOCH-DELALANDE </dd></dl>
<dl class="section date"><dt>Date</dt><dd>Last modification : October, 03 2019 </dd></dl>
</div></div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../dir_bfccd401955b95cf8c75461437045ac0.php">inc</a></li><li class="navelem"><a class="el" href="../../dir_2ce2ad1ea5ded593884489da6d66e532.php">C++</a></li><li class="navelem"><a class="el" href="../../da/d45/a00011.php">array.hpp</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
