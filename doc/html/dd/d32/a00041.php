<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.13"/>
		<title>C++: check.hpp File Reference</title>
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
				$text = "Generated on Sat Nov 9 2019 14:37:52 for C++ by";
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
$(document).ready(function(){initNavTree('dd/d32/a00041.php','../../');});
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
<a href="#define-members">Macros</a> &#124;
<a href="#typedef-members">Typedefs</a> &#124;
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<div class="title">check.hpp File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><code>#include &lt;memory&gt;</code><br />
<code>#include &lt;chrono&gt;</code><br />
<code>#include &quot;<a class="el" href="../../dc/d9a/a00218.php">C++/vector.hpp</a>&quot;</code><br />
<code>#include &quot;<a class="el" href="../../d6/d2d/a00047.php">C++/collides.hpp</a>&quot;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for check.hpp:</div>
<div class="dyncontent">
<div class="center"><img src="../../d5/db6/a00042.png" border="0" usemap="#check_8hpp" alt=""/></div>
<map name="check_8hpp" id="check_8hpp">
<area shape="rect" id="node4" href="../../dc/d9a/a00218.php" title="C++/vector.hpp" alt="" coords="622,80,735,107"/>
<area shape="rect" id="node38" href="../../d6/d2d/a00047.php" title="C++/collides.hpp" alt="" coords="813,80,934,107"/>
<area shape="rect" id="node5" href="../../d2/de7/a00014.php" title="C++/arraysIncludes.hpp" alt="" coords="569,155,732,181"/>
<area shape="rect" id="node12" href="../../d5/dcb/a00170.php" title="C++/pointers.hpp" alt="" coords="872,453,995,480"/>
<area shape="rect" id="node13" href="../../dd/dc1/a00212.php" title="C++/types.hpp" alt="" coords="771,528,880,555"/>
<area shape="rect" id="node15" href="../../d4/d51/a00017.php" title="Big.hpp" alt="" coords="736,603,803,629"/>
<area shape="rect" id="node34" href="../../d7/d3f/a00173.php" title="PureVirtual.hpp" alt="" coords="827,603,938,629"/>
<area shape="rect" id="node35" href="../../d3/dd5/a00215.php" title="UsefullDefines.hpp" alt="" coords="963,603,1096,629"/>
<area shape="rect" id="node16" href="../../d5/db1/a00140.php" title="C++/OsDetection.hpp" alt="" coords="322,677,473,704"/>
<area shape="rect" id="node30" href="../../d3/d52/a00023.php" title="C++/Big_Constructor.hpp" alt="" coords="497,677,668,704"/>
<area shape="rect" id="node31" href="../../d5/d16/a00029.php" title="C++/Big_Operator.hpp" alt="" coords="693,677,846,704"/>
<area shape="rect" id="node32" href="../../db/db2/a00020.php" title="C++/Big_Comparison.hpp" alt="" coords="871,677,1044,704"/>
<area shape="rect" id="node33" href="../../d6/d5b/a00026.php" title="C++/Big_Maths.hpp" alt="" coords="1068,677,1207,704"/>
<area shape="rect" id="node18" href="../../d4/d3a/a00101.php" title="C++/lowIncludes.hpp" alt="" coords="391,752,537,779"/>
<area shape="rect" id="node39" href="../../d3/d00/a00113.php" title="C++/Matrix.hpp" alt="" coords="843,155,957,181"/>
<area shape="rect" id="node40" href="../../da/d2a/a00086.php" title="C++/Fraction.hpp" alt="" coords="925,229,1049,256"/>
<area shape="rect" id="node41" href="../../d4/d81/a00110.php" title="C++/maths.hpp" alt="" coords="925,304,1038,331"/>
<area shape="rect" id="node42" href="../../dc/d87/a00032.php" title="C++/Binary.hpp" alt="" coords="924,379,1039,405"/>
</map>
</div>
</div><div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="../../d6/d42/a00043.png" border="0" usemap="#check_8hppdep" alt=""/></div>
<map name="check_8hppdep" id="check_8hppdep">
<area shape="rect" id="node2" href="../../da/d45/a00011.php" title="array.hpp" alt="" coords="311,80,387,107"/>
<area shape="rect" id="node3" href="../../d3/d8b/a00059.php" title="convert.hpp" alt="" coords="303,155,394,181"/>
<area shape="rect" id="node4" href="../../d5/de0/a00050.php" title="console.hpp" alt="" coords="251,229,343,256"/>
<area shape="rect" id="node47" href="../../d2/d1f/a00083.php" title="files.hpp" alt="" coords="367,229,437,256"/>
<area shape="rect" id="node5" href="../../da/dec/a00080.php" title="errors.hpp" alt="" coords="309,304,389,331"/>
<area shape="rect" id="node6" href="../../dc/d57/a00194.php" title="system.hpp" alt="" coords="303,379,394,405"/>
<area shape="rect" id="node7" href="../../da/d15/a00188.php" title="string.hpp" alt="" coords="309,453,388,480"/>
<area shape="rect" id="node8" href="../../d9/dd0/a00191.php" title="Used to replace strptime function when compiling for Windows. " alt="" coords="309,528,389,555"/>
<area shape="rect" id="node9" href="../../de/d79/a00203.php" title="timeFunctions.hpp" alt="" coords="284,603,413,629"/>
<area shape="rect" id="node10" href="../../d9/d77/a00095.php" title="includes.hpp" alt="" coords="301,677,396,704"/>
<area shape="rect" id="node11" href="../../d5/df9/a00044.php" title="Clock.hpp" alt="" coords="5,901,87,928"/>
<area shape="rect" id="node32" href="../../dc/dee/a00053.php" title="ConsoleTable.hpp" alt="" coords="56,827,183,853"/>
<area shape="rect" id="node33" href="../../de/de1/a00065.php" title="Date.hpp" alt="" coords="135,752,210,779"/>
<area shape="rect" id="node35" href="../../d1/d44/a00098.php" title="IOConfig.hpp" alt="" coords="297,901,395,928"/>
<area shape="rect" id="node36" href="../../d7/dce/a00143.php" title="Path.hpp" alt="" coords="386,752,461,779"/>
<area shape="rect" id="node41" href="../../d3/df8/a00155.php" title="PathfindingException.hpp" alt="" coords="485,752,655,779"/>
<area shape="rect" id="node42" href="../../d5/de9/a00176.php" title="Referenced.hpp" alt="" coords="547,976,662,1003"/>
<area shape="rect" id="node43" href="../../de/db1/a00197.php" title="Threadable.hpp" alt="" coords="688,976,799,1003"/>
<area shape="rect" id="node46" href="../../d3/db1/a00200.php" title="Time.hpp" alt="" coords="235,752,311,779"/>
<area shape="rect" id="node12" href="../../d0/d89/a00071.php" title="defines.hpp" alt="" coords="336,1125,425,1152"/>
<area shape="rect" id="node13" href="../../df/d03/a00062.php" title="cryptage.hpp" alt="" coords="223,1200,320,1227"/>
<area shape="rect" id="node30" href="../../df/d98/a00107.php" title="Map.hpp" alt="" coords="345,1200,417,1227"/>
<area shape="rect" id="node31" href="../../d3/de5/a00209.php" title="Tree.hpp" alt="" coords="441,1200,515,1227"/>
<area shape="rect" id="node14" href="../../d4/d8c/a00035.php" title="C++.hpp" alt="" coords="344,1275,417,1301"/>
<area shape="rect" id="node15" href="../../d9/d2e/a00056.php" title="Contraption.hpp" alt="" coords="277,1349,391,1376"/>
<area shape="rect" id="node29" href="../../d1/dc1/a00092.php" title="Identifier.hpp" alt="" coords="376,1723,473,1749"/>
<area shape="rect" id="node16" href="../../d1/d09/a00077.php" title="Entity.hpp" alt="" coords="180,1424,261,1451"/>
<area shape="rect" id="node27" href="../../d2/df5/a00137.php" title="Object.hpp" alt="" coords="299,1424,385,1451"/>
<area shape="rect" id="node17" href="../../db/dab/a00089.php" title="Hostile.hpp" alt="" coords="66,1499,154,1525"/>
<area shape="rect" id="node24" href="../../dd/d52/a00221.php" title="Vegetal.hpp" alt="" coords="175,1573,266,1600"/>
<area shape="rect" id="node18" href="../../d7/d46/a00002.php" title="Animal.hpp" alt="" coords="37,1573,124,1600"/>
<area shape="rect" id="node19" href="../../dd/dad/a00005.php" title="Ant.hpp" alt="" coords="39,1648,106,1675"/>
<area shape="rect" id="node20" href="../../db/db6/a00074.php" title="Entities.hpp" alt="" coords="257,1723,347,1749"/>
<area shape="rect" id="node21" href="../../dc/de6/a00167.php" title="PlayerAbstraction.hpp" alt="" coords="229,1797,380,1824"/>
<area shape="rect" id="node22" href="../../db/ddf/a00164.php" title="Player.hpp" alt="" coords="319,1872,403,1899"/>
<area shape="rect" id="node23" href="../../d8/d41/a00038.php" title="C++Entities.hpp" alt="" coords="302,1947,419,1973"/>
<area shape="rect" id="node25" href="../../d1/d88/a00128.php" title="Mushroom.hpp" alt="" coords="131,1648,239,1675"/>
<area shape="rect" id="node26" href="../../d6/d7d/a00161.php" title="Plant.hpp" alt="" coords="263,1648,341,1675"/>
<area shape="rect" id="node28" href="../../de/df3/a00185.php" title="Stone.hpp" alt="" coords="309,1499,391,1525"/>
<area shape="rect" id="node34" href="../../da/d24/a00068.php" title="DateTime.hpp" alt="" coords="207,827,311,853"/>
<area shape="rect" id="node37" href="../../d6/db8/a00158.php" title="PathfindingProblem.hpp" alt="" coords="395,827,555,853"/>
<area shape="rect" id="node38" href="../../d9/db6/a00146.php" title="Pathfinding.hpp" alt="" coords="419,901,531,928"/>
<area shape="rect" id="node39" href="../../d7/d9a/a00152.php" title="PathfindingDijkstra.hpp" alt="" coords="365,976,522,1003"/>
<area shape="rect" id="node40" href="../../da/d1e/a00149.php" title="PathfindingAlgorithms.hpp" alt="" coords="356,1051,531,1077"/>
<area shape="rect" id="node44" href="../../d4/dee/a00008.php" title="Args.hpp" alt="" coords="606,1051,681,1077"/>
<area shape="rect" id="node45" href="../../d5/df1/a00206.php" title="Timer.hpp" alt="" coords="705,1051,785,1077"/>
</map>
</div>
</div><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Classes</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d7/d4f/a00819.php">mcd::Check::is_vector&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A template class to test if T is a vector.  <a href="../../d7/d4f/a00819.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d3/db4/a00823.php">mcd::Check::is_array&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A template class to test if T is an array, a vector or a map.  <a href="../../d3/db4/a00823.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dc/d1b/a00827.php">mcd::Check::is_pair&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A template class to test if T is a std::pair.  <a href="../../dc/d1b/a00827.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d7/d5f/a00831.php">mcd::Check::is_trio&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A template class to test if T is a std::pair.  <a href="../../d7/d5f/a00831.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dd/d70/a00835.php">mcd::Check::is_quatuor&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A template class to test if T is a std::pair.  <a href="../../dd/d70/a00835.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../df/de8/a00839.php">mcd::Check::is_string&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A template class to test if T is a std::string.  <a href="../../df/de8/a00839.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dc/d22/a00843.php">mcd::Check::is_smatch&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A template class to test if T is a string regex match.  <a href="../../dc/d22/a00843.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d4/d60/a00847.php">mcd::Check::is_duration&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A template class to test if T is a chrono::duration.  <a href="../../d4/d60/a00847.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../df/d4c/a00851.php">mcd::Check::has_size_method&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">Verify if an object has a size method.  <a href="../../df/d4c/a00851.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../da/de6/a00855.php">mcd::Check::has_ostream_operator&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A template class to test if T has an ostream operator.  <a href="../../da/de6/a00855.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d7/d49/a00863.php">mcd::Check::has_istream_operator&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A template class to test if T has an istream operator.  <a href="../../d7/d49/a00863.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dd/de1/a00871.php">mcd::Check::is_printable&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A template class to test if T is printable.  <a href="../../dd/de1/a00871.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d1/d93/a00875.php">mcd::Check::is_object&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A template class to test if T is an unknown object.  <a href="../../d1/d93/a00875.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d2/da1/a00879.php">mcd::Check::is_special_struct&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A template class to test if T is a special struct.  <a href="../../d2/da1/a00879.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="namespaces"></a>
Namespaces</h2></td></tr>
<tr class="memitem:dd/d2d/a00229"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dd/d2d/a00229.php">mcd</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:d1/da8/a00230"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d1/da8/a00230.php">mcd::this_thread</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:df/d17/a00231"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../df/d17/a00231.php">mcd::Check</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="define-members"></a>
Macros</h2></td></tr>
<tr class="memitem:a92713af8c651ed158031ed7d3fd15977"><td class="memItemLeft" align="right" valign="top">#define&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dd/d32/a00041.php#a92713af8c651ed158031ed7d3fd15977">has_method</a>(meth,  func)</td></tr>
<tr class="memdesc:a92713af8c651ed158031ed7d3fd15977"><td class="mdescLeft">&#160;</td><td class="mdescRight">Verify if an object has the given method.  <a href="#a92713af8c651ed158031ed7d3fd15977">More...</a><br /></td></tr>
<tr class="separator:a92713af8c651ed158031ed7d3fd15977"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="typedef-members"></a>
Typedefs</h2></td></tr>
<tr class="memitem:aba609827ae566c40802bf828ab5a5a3c"><td class="memItemLeft" align="right" valign="top">using&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dd/d2d/a00229.php#aba609827ae566c40802bf828ab5a5a3c">mcd::pair_str</a> = std::pair&lt; std::string, std::string &gt;</td></tr>
<tr class="memdesc:aba609827ae566c40802bf828ab5a5a3c"><td class="mdescLeft">&#160;</td><td class="mdescRight">Alias.  <a href="../../dd/d2d/a00229.php#aba609827ae566c40802bf828ab5a5a3c">More...</a><br /></td></tr>
<tr class="separator:aba609827ae566c40802bf828ab5a5a3c"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:a3a711ec2f858ee16756d8619224624ee"><td class="memTemplParams" colspan="2">template&lt;typename TimeDuration &gt; </td></tr>
<tr class="memitem:a3a711ec2f858ee16756d8619224624ee"><td class="memTemplItemLeft" align="right" valign="top">void&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d1/da8/a00230.php#a3a711ec2f858ee16756d8619224624ee">mcd::this_thread::yield</a> () noexcept</td></tr>
<tr class="separator:a3a711ec2f858ee16756d8619224624ee"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aaa5ef673c6390db3486b12d03a64f8f5"><td class="memTemplParams" colspan="2">template&lt;class Rep , class Period &gt; </td></tr>
<tr class="memitem:aaa5ef673c6390db3486b12d03a64f8f5"><td class="memTemplItemLeft" align="right" valign="top">void&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d1/da8/a00230.php#aaa5ef673c6390db3486b12d03a64f8f5">mcd::this_thread::sleep_for</a> (const std::chrono::duration&lt; Rep, Period &gt; &amp;rel_time)</td></tr>
<tr class="separator:aaa5ef673c6390db3486b12d03a64f8f5"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a2bef56760d8ffae969e8a1347194b42c"><td class="memTemplParams" colspan="2">template&lt;typename T &gt; </td></tr>
<tr class="memitem:a2bef56760d8ffae969e8a1347194b42c"><td class="memTemplItemLeft" align="right" valign="top">void&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../df/d17/a00231.php#a2bef56760d8ffae969e8a1347194b42c">mcd::Check::printable</a> (const T &amp;)</td></tr>
<tr class="memdesc:a2bef56760d8ffae969e8a1347194b42c"><td class="mdescLeft">&#160;</td><td class="mdescRight">A function that say if a type has an ostream operator(&lt;&lt;)  <a href="../../df/d17/a00231.php#a2bef56760d8ffae969e8a1347194b42c">More...</a><br /></td></tr>
<tr class="separator:a2bef56760d8ffae969e8a1347194b42c"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><dl class="section author"><dt>Author</dt><dd>Mathias CABIOCH-DELALANDE </dd></dl>
<dl class="section date"><dt>Date</dt><dd>Last modification : October, 03 2019 </dd></dl>
</div><h2 class="groupheader">Macro Definition Documentation</h2>
<a id="a92713af8c651ed158031ed7d3fd15977"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a92713af8c651ed158031ed7d3fd15977">&#9670;&nbsp;</a></span>has_method</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">#define has_method</td>
          <td>(</td>
          <td class="paramtype">&#160;</td>
          <td class="paramname">meth, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">&#160;</td>
          <td class="paramname">func&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">
<b>Value:</b><div class="fragment"><div class="line"><span class="keyword">template</span>&lt;<span class="keyword">typename</span> T&gt;\</div><div class="line">        class func {\</div><div class="line">            private:\</div><div class="line">                typedef std::true_type yes;\</div><div class="line">                typedef std::false_type no;\</div><div class="line">    \</div><div class="line">                template&lt;typename U&gt;\</div><div class="line">                static <span class="keyword">auto</span> test(<span class="keywordtype">int</span>) -&gt; decltype(std::declval&lt;U&gt;().meth() == 1, yes());\</div><div class="line">                template&lt;typename&gt;\</div><div class="line">                static no test(...);\</div><div class="line">    \</div><div class="line">            public:\</div><div class="line">                func(){}\</div><div class="line">                virtual ~func(){}\</div><div class="line">    \</div><div class="line">                static constexpr <span class="keywordtype">bool</span> value = std::is_same&lt;decltype(test&lt;T&gt;(0)), yes&gt;::value;\</div><div class="line">        }</div></div><!-- fragment -->
<p>Verify if an object has the given method. </p>

</div>
</div>
</div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../dir_bfccd401955b95cf8c75461437045ac0.php">inc</a></li><li class="navelem"><a class="el" href="../../dir_2ce2ad1ea5ded593884489da6d66e532.php">C++</a></li><li class="navelem"><a class="el" href="../../dd/d32/a00041.php">check.hpp</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
