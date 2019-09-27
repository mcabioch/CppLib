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
				$text = "Generated on Fri Sep 27 2019 01:33:44 for C++ by";
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
<div class="textblock"><code>#include &lt;utility&gt;</code><br />
<code>#include &lt;memory&gt;</code><br />
<code>#include &lt;chrono&gt;</code><br />
<code>#include &quot;<a class="el" href="../../d5/df1/a00206.php">C++/vector.hpp</a>&quot;</code><br />
<code>#include &quot;<a class="el" href="../../d6/d2d/a00047.php">C++/collides.hpp</a>&quot;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for check.hpp:</div>
<div class="dyncontent">
<div class="center"><img src="../../d5/db6/a00042.png" border="0" usemap="#check_8hpp" alt=""/></div>
<map name="check_8hpp" id="check_8hpp">
<area shape="rect" id="node5" href="../../d5/df1/a00206.php" title="C++/vector.hpp" alt="" coords="317,80,430,107"/>
<area shape="rect" id="node35" href="../../d6/d2d/a00047.php" title="C++/collides.hpp" alt="" coords="507,80,629,107"/>
<area shape="rect" id="node6" href="../../d2/de7/a00014.php" title="C++/arraysIncludes.hpp" alt="" coords="264,155,427,181"/>
<area shape="rect" id="node13" href="../../d6/d7d/a00161.php" title="C++/pointers.hpp" alt="" coords="567,453,689,480"/>
<area shape="rect" id="node16" href="../../d3/db1/a00200.php" title="C++/types.hpp" alt="" coords="681,528,791,555"/>
<area shape="rect" id="node18" href="../../d4/d51/a00017.php" title="Big.hpp" alt="" coords="645,603,712,629"/>
<area shape="rect" id="node33" href="../../db/ddf/a00164.php" title="PureVirtual.hpp" alt="" coords="737,603,847,629"/>
<area shape="rect" id="node34" href="../../de/d79/a00203.php" title="UsefullDefines.hpp" alt="" coords="872,603,1005,629"/>
<area shape="rect" id="node29" href="../../d3/d52/a00023.php" title="C++/Big_Constructor.hpp" alt="" coords="972,677,1143,704"/>
<area shape="rect" id="node30" href="../../d5/d16/a00029.php" title="C++/Big_Operator.hpp" alt="" coords="1167,677,1321,704"/>
<area shape="rect" id="node31" href="../../db/db2/a00020.php" title="C++/Big_Comparison.hpp" alt="" coords="1345,677,1519,704"/>
<area shape="rect" id="node32" href="../../d6/d5b/a00026.php" title="C++/Big_Maths.hpp" alt="" coords="1543,677,1681,704"/>
<area shape="rect" id="node36" href="../../d4/d81/a00110.php" title="C++/Matrix.hpp" alt="" coords="538,155,651,181"/>
<area shape="rect" id="node37" href="../../da/d2a/a00086.php" title="C++/Fraction.hpp" alt="" coords="619,229,743,256"/>
<area shape="rect" id="node38" href="../../df/d98/a00107.php" title="C++/maths.hpp" alt="" coords="619,304,733,331"/>
<area shape="rect" id="node39" href="../../dc/d87/a00032.php" title="C++/Binary.hpp" alt="" coords="619,379,733,405"/>
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
<area shape="rect" id="node46" href="../../d2/d1f/a00083.php" title="files.hpp" alt="" coords="367,229,437,256"/>
<area shape="rect" id="node5" href="../../da/dec/a00080.php" title="errors.hpp" alt="" coords="309,304,389,331"/>
<area shape="rect" id="node6" href="../../d7/d25/a00182.php" title="system.hpp" alt="" coords="303,379,394,405"/>
<area shape="rect" id="node7" href="../../db/dd9/a00179.php" title="string.hpp" alt="" coords="309,453,388,480"/>
<area shape="rect" id="node8" href="../../d9/dd0/a00191.php" title="timeFunctions.hpp" alt="" coords="284,528,413,555"/>
<area shape="rect" id="node9" href="../../d9/d77/a00095.php" title="includes.hpp" alt="" coords="301,603,396,629"/>
<area shape="rect" id="node10" href="../../d5/df9/a00044.php" title="Clock.hpp" alt="" coords="5,827,87,853"/>
<area shape="rect" id="node31" href="../../dc/dee/a00053.php" title="ConsoleTable.hpp" alt="" coords="56,752,183,779"/>
<area shape="rect" id="node32" href="../../de/de1/a00065.php" title="Date.hpp" alt="" coords="135,677,210,704"/>
<area shape="rect" id="node34" href="../../d1/d44/a00098.php" title="IOConfig.hpp" alt="" coords="297,827,395,853"/>
<area shape="rect" id="node35" href="../../de/d76/a00134.php" title="Path.hpp" alt="" coords="386,677,461,704"/>
<area shape="rect" id="node40" href="../../d9/db6/a00146.php" title="PathfindingException.hpp" alt="" coords="485,677,655,704"/>
<area shape="rect" id="node41" href="../../dc/de6/a00167.php" title="Referenced.hpp" alt="" coords="547,901,662,928"/>
<area shape="rect" id="node42" href="../../de/df3/a00185.php" title="Threadable.hpp" alt="" coords="688,901,799,928"/>
<area shape="rect" id="node45" href="../../da/d15/a00188.php" title="Time.hpp" alt="" coords="235,677,311,704"/>
<area shape="rect" id="node11" href="../../d0/d89/a00071.php" title="defines.hpp" alt="" coords="336,1051,425,1077"/>
<area shape="rect" id="node12" href="../../df/d03/a00062.php" title="cryptage.hpp" alt="" coords="223,1125,320,1152"/>
<area shape="rect" id="node29" href="../../d0/dc2/a00104.php" title="Map.hpp" alt="" coords="345,1125,417,1152"/>
<area shape="rect" id="node30" href="../../de/db1/a00197.php" title="Tree.hpp" alt="" coords="441,1125,515,1152"/>
<area shape="rect" id="node13" href="../../d4/d8c/a00035.php" title="C++.hpp" alt="" coords="344,1200,417,1227"/>
<area shape="rect" id="node14" href="../../d9/d2e/a00056.php" title="Contraption.hpp" alt="" coords="277,1275,391,1301"/>
<area shape="rect" id="node28" href="../../d1/dc1/a00092.php" title="Identifier.hpp" alt="" coords="376,1648,473,1675"/>
<area shape="rect" id="node15" href="../../d1/d09/a00077.php" title="Entity.hpp" alt="" coords="180,1349,261,1376"/>
<area shape="rect" id="node26" href="../../d7/d06/a00131.php" title="Object.hpp" alt="" coords="299,1349,385,1376"/>
<area shape="rect" id="node16" href="../../db/dab/a00089.php" title="Hostile.hpp" alt="" coords="66,1424,154,1451"/>
<area shape="rect" id="node23" href="../../d3/de5/a00209.php" title="Vegetal.hpp" alt="" coords="175,1499,266,1525"/>
<area shape="rect" id="node17" href="../../d7/d46/a00002.php" title="Animal.hpp" alt="" coords="37,1499,124,1525"/>
<area shape="rect" id="node18" href="../../dd/dad/a00005.php" title="Ant.hpp" alt="" coords="39,1573,106,1600"/>
<area shape="rect" id="node19" href="../../db/db6/a00074.php" title="Entities.hpp" alt="" coords="257,1648,347,1675"/>
<area shape="rect" id="node20" href="../../d6/db8/a00158.php" title="PlayerAbstraction.hpp" alt="" coords="229,1723,380,1749"/>
<area shape="rect" id="node21" href="../../d3/df8/a00155.php" title="Player.hpp" alt="" coords="319,1797,403,1824"/>
<area shape="rect" id="node22" href="../../d8/d41/a00038.php" title="C++Entities.hpp" alt="" coords="302,1872,419,1899"/>
<area shape="rect" id="node24" href="../../dc/dfe/a00125.php" title="Mushroom.hpp" alt="" coords="131,1573,239,1600"/>
<area shape="rect" id="node25" href="../../d7/d9a/a00152.php" title="Plant.hpp" alt="" coords="263,1573,341,1600"/>
<area shape="rect" id="node27" href="../../d5/de9/a00176.php" title="Stone.hpp" alt="" coords="309,1424,391,1451"/>
<area shape="rect" id="node33" href="../../da/d24/a00068.php" title="DateTime.hpp" alt="" coords="207,752,311,779"/>
<area shape="rect" id="node36" href="../../da/d1e/a00149.php" title="PathfindingProblem.hpp" alt="" coords="395,752,555,779"/>
<area shape="rect" id="node37" href="../../d2/df5/a00137.php" title="Pathfinding.hpp" alt="" coords="419,827,531,853"/>
<area shape="rect" id="node38" href="../../d7/dce/a00143.php" title="PathfindingDijkstra.hpp" alt="" coords="365,901,522,928"/>
<area shape="rect" id="node39" href="../../d5/db1/a00140.php" title="PathfindingAlgorithms.hpp" alt="" coords="356,976,531,1003"/>
<area shape="rect" id="node43" href="../../d4/dee/a00008.php" title="Args.hpp" alt="" coords="606,976,681,1003"/>
<area shape="rect" id="node44" href="../../dc/d57/a00194.php" title="Timer.hpp" alt="" coords="705,976,785,1003"/>
</map>
</div>
</div><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Classes</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d0/dad/a00806.php">mcd::Check::is_array&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A template class to test if T is an array, a vector or a map.  <a href="../../d0/dad/a00806.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d4/dfd/a00810.php">mcd::Check::is_vector&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A template class to test if T is a vector.  <a href="../../d4/dfd/a00810.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../da/d71/a00814.php">mcd::Check::is_pair&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A template class to test if T is a std::pair.  <a href="../../da/d71/a00814.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d3/d60/a00818.php">mcd::Check::is_trio&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A template class to test if T is a std::pair.  <a href="../../d3/d60/a00818.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d6/da7/a00822.php">mcd::Check::is_quatuor&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A template class to test if T is a std::pair.  <a href="../../d6/da7/a00822.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../da/d90/a00826.php">mcd::Check::is_string&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A template class to test if T is a std::string.  <a href="../../da/d90/a00826.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d9/daf/a00830.php">mcd::Check::is_smatch&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A template class to test if T is a string regex match.  <a href="../../d9/daf/a00830.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d9/d02/a00834.php">mcd::Check::is_duration&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A template class to test if T is a chrono::duration.  <a href="../../d9/d02/a00834.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d2/dc7/a00838.php">mcd::Check::has_size_method&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">Verify if an object has a size method.  <a href="../../d2/dc7/a00838.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d0/d11/a00842.php">mcd::Check::has_ostream_operator&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A template class to test if T has an ostream operator.  <a href="../../d0/d11/a00842.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dc/d0a/a00850.php">mcd::Check::has_istream_operator&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A template class to test if T has an istream operator.  <a href="../../dc/d0a/a00850.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d0/d66/a00858.php">mcd::Check::is_printable&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A template class to test if T is printable.  <a href="../../d0/d66/a00858.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dc/d41/a00862.php">mcd::Check::is_object&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A template class to test if T is an unknown object.  <a href="../../dc/d41/a00862.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dd/db2/a00866.php">mcd::Check::is_special_struct&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A template class to test if T is a special struct.  <a href="../../dd/db2/a00866.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="namespaces"></a>
Namespaces</h2></td></tr>
<tr class="memitem:df/d24/a00217"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../df/d24/a00217.php">mcd</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:dc/d9a/a00218"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dc/d9a/a00218.php">mcd::Check</a></td></tr>
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
<tr class="memitem:aba609827ae566c40802bf828ab5a5a3c"><td class="memItemLeft" align="right" valign="top">using&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../df/d24/a00217.php#aba609827ae566c40802bf828ab5a5a3c">mcd::pair_str</a> = std::pair&lt; std::string, std::string &gt;</td></tr>
<tr class="memdesc:aba609827ae566c40802bf828ab5a5a3c"><td class="mdescLeft">&#160;</td><td class="mdescRight">Alias.  <a href="../../df/d24/a00217.php#aba609827ae566c40802bf828ab5a5a3c">More...</a><br /></td></tr>
<tr class="separator:aba609827ae566c40802bf828ab5a5a3c"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:a2bef56760d8ffae969e8a1347194b42c"><td class="memTemplParams" colspan="2">template&lt;typename T &gt; </td></tr>
<tr class="memitem:a2bef56760d8ffae969e8a1347194b42c"><td class="memTemplItemLeft" align="right" valign="top">void&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../dc/d9a/a00218.php#a2bef56760d8ffae969e8a1347194b42c">mcd::Check::printable</a> (const T &amp;)</td></tr>
<tr class="memdesc:a2bef56760d8ffae969e8a1347194b42c"><td class="mdescLeft">&#160;</td><td class="mdescRight">A function that say if a type has an ostream operator(&lt;&lt;)  <a href="../../dc/d9a/a00218.php#a2bef56760d8ffae969e8a1347194b42c">More...</a><br /></td></tr>
<tr class="separator:a2bef56760d8ffae969e8a1347194b42c"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><dl class="section author"><dt>Author</dt><dd>Mathias CABIOCH-DELALANDE </dd></dl>
<dl class="section date"><dt>Date</dt><dd>Last modification : August, 14 2018 </dd></dl>
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
