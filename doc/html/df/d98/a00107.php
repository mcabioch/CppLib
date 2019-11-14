<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.13"/>
		<title>C++: Logger.hpp File Reference</title>
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
				$text = "Generated on Thu Nov 14 2019 11:50:48 for C++ by";
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
$(document).ready(function(){initNavTree('df/d98/a00107.php','../../');});
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
<a href="#var-members">Variables</a>  </div>
  <div class="headertitle">
<div class="title">Logger.hpp File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><code>#include &quot;<a class="el" href="../../d1/d09/a00077.php">C++/defines.hpp</a>&quot;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for Logger.hpp:</div>
<div class="dyncontent">
<div class="center"><img src="../../d1/dd6/a00108.png" border="0" usemap="#Logger_8hpp" alt=""/></div>
<map name="Logger_8hpp" id="Logger_8hpp">
<area shape="rect" id="node2" href="../../d1/d09/a00077.php" title="C++/defines.hpp" alt="" coords="746,80,865,107"/>
<area shape="rect" id="node3" href="../../d3/dd5/a00215.php" title="C++/Timer.hpp" alt="" coords="367,155,478,181"/>
<area shape="rect" id="node75" href="../../d4/dee/a00008.php" title="C++/Args.hpp" alt="" coords="503,155,607,181"/>
<area shape="rect" id="node76" href="../../db/db6/a00074.php" title="C++/DateTime.hpp" alt="" coords="577,453,711,480"/>
<area shape="rect" id="node79" href="../../d5/de0/a00050.php" title="C++/Clock.hpp" alt="" coords="682,304,793,331"/>
<area shape="rect" id="node80" href="../../d3/d8b/a00059.php" title="C++/ConsoleTable.hpp" alt="" coords="752,379,909,405"/>
<area shape="rect" id="node81" href="../../de/df3/a00185.php" title="C++/Referenced.hpp" alt="" coords="868,229,1012,256"/>
<area shape="rect" id="node82" href="../../d0/dc2/a00104.php" title="C++/IOConfig.hpp" alt="" coords="985,304,1114,331"/>
<area shape="rect" id="node83" href="../../d4/d3e/a00116.php" title="C++/Map.hpp" alt="" coords="1113,155,1215,181"/>
<area shape="rect" id="node4" href="../../d5/df1/a00206.php" title="C++/Threadable.hpp" alt="" coords="389,229,531,256"/>
<area shape="rect" id="node5" href="../../d4/d3a/a00101.php" title="C++/includes.hpp" alt="" coords="768,603,893,629"/>
<area shape="rect" id="node6" href="../../d5/db1/a00140.php" title="C++/NotCopyable.hpp" alt="" coords="211,677,365,704"/>
<area shape="rect" id="node7" href="../../d7/dce/a00143.php" title="C++/NotInstantiable.hpp" alt="" coords="389,677,555,704"/>
<area shape="rect" id="node8" href="../../dd/dc1/a00212.php" title="C++/timeFunctions.hpp" alt="" coords="579,677,738,704"/>
<area shape="rect" id="node10" href="../../d3/db1/a00200.php" title="Used to replace strptime function when compiling for Windows. " alt="" coords="657,752,767,779"/>
<area shape="rect" id="node11" href="../../de/db1/a00197.php" title="C++/string.hpp" alt="" coords="657,827,767,853"/>
<area shape="rect" id="node13" href="../../de/d79/a00203.php" title="C++/system.hpp" alt="" coords="584,901,704,928"/>
<area shape="rect" id="node67" href="../../da/d15/a00188.php" title="C++/RNG.hpp" alt="" coords="728,901,835,928"/>
<area shape="rect" id="node69" href="../../d3/d00/a00113.php" title="C++/macro.hpp" alt="" coords="859,901,973,928"/>
<area shape="rect" id="node14" href="../../da/d2a/a00086.php" title="C++/errors.hpp" alt="" coords="589,976,699,1003"/>
<area shape="rect" id="node15" href="../../d9/d2e/a00056.php" title="C++/console.hpp" alt="" coords="515,1051,637,1077"/>
<area shape="rect" id="node65" href="../../db/dab/a00089.php" title="C++/files.hpp" alt="" coords="661,1051,763,1077"/>
<area shape="rect" id="node16" href="../../de/de1/a00065.php" title="C++/convert.hpp" alt="" coords="525,1125,645,1152"/>
<area shape="rect" id="node18" href="../../da/d45/a00011.php" title="C++/array.hpp" alt="" coords="592,1200,699,1227"/>
<area shape="rect" id="node20" href="../../d6/d2d/a00047.php" title="C++/check.hpp" alt="" coords="589,1275,701,1301"/>
<area shape="rect" id="node64" href="../../d9/dd0/a00191.php" title="C++/sorting.hpp" alt="" coords="727,1275,843,1301"/>
<area shape="rect" id="node23" href="../../d9/d01/a00227.php" title="C++/vector.hpp" alt="" coords="730,1349,843,1376"/>
<area shape="rect" id="node58" href="../../dc/dee/a00053.php" title="C++/collides.hpp" alt="" coords="585,1349,706,1376"/>
<area shape="rect" id="node24" href="../../d2/de7/a00014.php" title="C++/arraysIncludes.hpp" alt="" coords="751,1424,913,1451"/>
<area shape="rect" id="node31" href="../../db/dd9/a00179.php" title="C++/pointers.hpp" alt="" coords="713,1723,836,1749"/>
<area shape="rect" id="node32" href="../../dd/d52/a00221.php" title="C++/types.hpp" alt="" coords="612,1797,721,1824"/>
<area shape="rect" id="node34" href="../../d3/d52/a00023.php" title="Big.hpp" alt="" coords="633,1872,700,1899"/>
<area shape="rect" id="node53" href="../../dc/d9a/a00218.php" title="C++/Tree.hpp" alt="" coords="506,1872,609,1899"/>
<area shape="rect" id="node54" href="../../d7/d25/a00182.php" title="PureVirtual.hpp" alt="" coords="725,1872,835,1899"/>
<area shape="rect" id="node55" href="../../d5/ddf/a00224.php" title="UsefullDefines.hpp" alt="" coords="860,1872,993,1899"/>
<area shape="rect" id="node35" href="../../da/d1e/a00149.php" title="C++/OsDetection.hpp" alt="" coords="322,1947,473,1973"/>
<area shape="rect" id="node49" href="../../d5/d16/a00029.php" title="C++/Big_Constructor.hpp" alt="" coords="1035,1947,1205,1973"/>
<area shape="rect" id="node50" href="../../d4/d8c/a00035.php" title="C++/Big_Operator.hpp" alt="" coords="497,1947,650,1973"/>
<area shape="rect" id="node51" href="../../d6/d5b/a00026.php" title="C++/Big_Comparison.hpp" alt="" coords="675,1947,848,1973"/>
<area shape="rect" id="node52" href="../../dc/d87/a00032.php" title="C++/Big_Maths.hpp" alt="" coords="872,1947,1011,1973"/>
<area shape="rect" id="node37" href="../../d4/d81/a00110.php" title="C++/lowIncludes.hpp" alt="" coords="391,2021,537,2048"/>
<area shape="rect" id="node59" href="../../df/dc8/a00122.php" title="C++/Matrix.hpp" alt="" coords="543,1424,657,1451"/>
<area shape="rect" id="node60" href="../../d1/dc1/a00092.php" title="C++/Fraction.hpp" alt="" coords="419,1499,543,1525"/>
<area shape="rect" id="node61" href="../../df/d6a/a00119.php" title="C++/maths.hpp" alt="" coords="425,1573,538,1600"/>
<area shape="rect" id="node62" href="../../d8/d41/a00038.php" title="C++/Binary.hpp" alt="" coords="671,1648,785,1675"/>
<area shape="rect" id="node77" href="../../d0/d89/a00071.php" title="C++/Date.hpp" alt="" coords="629,528,734,555"/>
<area shape="rect" id="node78" href="../../d3/de5/a00209.php" title="C++/Time.hpp" alt="" coords="497,528,604,555"/>
<area shape="rect" id="node84" href="../../d6/db8/a00158.php" title="C++/PathfindingAlgorithms.hpp" alt="" coords="1109,229,1313,256"/>
<area shape="rect" id="node85" href="../../d6/d7d/a00161.php" title="C++/PathfindingDijkstra.hpp" alt="" coords="1139,304,1325,331"/>
<area shape="rect" id="node86" href="../../d3/df8/a00155.php" title="C++/Pathfinding.hpp" alt="" coords="1161,379,1303,405"/>
<area shape="rect" id="node87" href="../../dc/de6/a00167.php" title="C++/PathfindingProblem.hpp" alt="" coords="1137,453,1327,480"/>
<area shape="rect" id="node88" href="../../db/ddf/a00164.php" title="C++/PathfindingException.hpp" alt="" coords="1163,528,1363,555"/>
<area shape="rect" id="node89" href="../../d7/d9a/a00152.php" title="C++/Path.hpp" alt="" coords="1035,528,1139,555"/>
</map>
</div>
</div><div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="../../dd/d42/a00109.png" border="0" usemap="#Logger_8hppdep" alt=""/></div>
<map name="Logger_8hppdep" id="Logger_8hppdep">
<area shape="rect" id="node2" href="../../dd/d32/a00041.php" title="C++.hpp" alt="" coords="310,80,383,107"/>
<area shape="rect" id="node3" href="../../df/d03/a00062.php" title="Contraption.hpp" alt="" coords="243,155,357,181"/>
<area shape="rect" id="node17" href="../../d1/d44/a00098.php" title="Identifier.hpp" alt="" coords="342,528,439,555"/>
<area shape="rect" id="node4" href="../../d2/d1f/a00083.php" title="Entity.hpp" alt="" coords="133,229,214,256"/>
<area shape="rect" id="node15" href="../../d9/db6/a00146.php" title="Object.hpp" alt="" coords="265,229,351,256"/>
<area shape="rect" id="node5" href="../../d9/d77/a00095.php" title="Hostile.hpp" alt="" coords="32,304,120,331"/>
<area shape="rect" id="node12" href="../../d1/da8/a00230.php" title="Vegetal.hpp" alt="" coords="128,379,219,405"/>
<area shape="rect" id="node6" href="../../d7/d46/a00002.php" title="Animal.hpp" alt="" coords="6,379,93,405"/>
<area shape="rect" id="node7" href="../../dd/dad/a00005.php" title="Ant.hpp" alt="" coords="5,453,72,480"/>
<area shape="rect" id="node8" href="../../da/dec/a00080.php" title="Entities.hpp" alt="" coords="223,528,313,555"/>
<area shape="rect" id="node9" href="../../d5/de9/a00176.php" title="PlayerAbstraction.hpp" alt="" coords="195,603,346,629"/>
<area shape="rect" id="node10" href="../../d7/d3f/a00173.php" title="Player.hpp" alt="" coords="285,677,369,704"/>
<area shape="rect" id="node11" href="../../d5/df9/a00044.php" title="C++Entities.hpp" alt="" coords="268,752,385,779"/>
<area shape="rect" id="node13" href="../../d2/df5/a00137.php" title="Mushroom.hpp" alt="" coords="97,453,205,480"/>
<area shape="rect" id="node14" href="../../d5/dcb/a00170.php" title="Plant.hpp" alt="" coords="229,453,307,480"/>
<area shape="rect" id="node16" href="../../dc/d57/a00194.php" title="Stone.hpp" alt="" coords="271,304,353,331"/>
</map>
</div>
</div><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Classes</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d7/d76/a00992.php">mcd::Logger</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A class to log some messages.  <a href="../../d7/d76/a00992.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="namespaces"></a>
Namespaces</h2></td></tr>
<tr class="memitem:da/d2e/a00238"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../da/d2e/a00238.php">mcd</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="define-members"></a>
Macros</h2></td></tr>
<tr class="memitem:ae48c93288111b5c36c6e44117992a8f3"><td class="memItemLeft" align="right" valign="top">#define&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../df/d98/a00107.php#ae48c93288111b5c36c6e44117992a8f3">logs</a>(LEVEL, ...)&#160;&#160;&#160;logger.log(LEVEL, __LINE__, __FILE__, __VA_ARGS__)</td></tr>
<tr class="separator:ae48c93288111b5c36c6e44117992a8f3"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a46d5e25a59c0c1ab0d7e8fc3812454a0"><td class="memItemLeft" align="right" valign="top">#define&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../df/d98/a00107.php#a46d5e25a59c0c1ab0d7e8fc3812454a0">debug_log</a>()&#160;&#160;&#160;<a class="el" href="../../df/d98/a00107.php#ae48c93288111b5c36c6e44117992a8f3">logs</a>(<a class="el" href="../../d7/d76/a00992.php#a25d94050e8e7f91c7e1f02ddc2af8e95a2317dfad63407c5b05415b976cff9030">mcd::Logger::DEBUG</a>)</td></tr>
<tr class="separator:a46d5e25a59c0c1ab0d7e8fc3812454a0"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a4e44394dedcf599237302e670d0fbd30"><td class="memItemLeft" align="right" valign="top">#define&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../df/d98/a00107.php#a4e44394dedcf599237302e670d0fbd30">debug_logs</a>(...)&#160;&#160;&#160;<a class="el" href="../../df/d98/a00107.php#ae48c93288111b5c36c6e44117992a8f3">logs</a>(<a class="el" href="../../d7/d76/a00992.php#a25d94050e8e7f91c7e1f02ddc2af8e95a2317dfad63407c5b05415b976cff9030">mcd::Logger::DEBUG</a>, __VA_ARGS__)</td></tr>
<tr class="separator:a4e44394dedcf599237302e670d0fbd30"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="var-members"></a>
Variables</h2></td></tr>
<tr class="memitem:a46f063faccea2fdafb8e5f33c2ccbc50"><td class="memItemLeft" align="right" valign="top">Logger&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../da/d2e/a00238.php#a46f063faccea2fdafb8e5f33c2ccbc50">mcd::logger</a></td></tr>
<tr class="separator:a46f063faccea2fdafb8e5f33c2ccbc50"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><dl class="section author"><dt>Author</dt><dd>Mathias CABIOCH-DELALANDE </dd></dl>
<dl class="section date"><dt>Date</dt><dd>Created : Saturday November, 09 2019 17:01:15 </dd>
<dd>
Last modification : Saturday November, 13 2019 </dd></dl>
</div><h2 class="groupheader">Macro Definition Documentation</h2>
<a id="a46d5e25a59c0c1ab0d7e8fc3812454a0"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a46d5e25a59c0c1ab0d7e8fc3812454a0">&#9670;&nbsp;</a></span>debug_log</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">#define debug_log</td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td>&#160;&#160;&#160;<a class="el" href="../../df/d98/a00107.php#ae48c93288111b5c36c6e44117992a8f3">logs</a>(<a class="el" href="../../d7/d76/a00992.php#a25d94050e8e7f91c7e1f02ddc2af8e95a2317dfad63407c5b05415b976cff9030">mcd::Logger::DEBUG</a>)</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a id="a4e44394dedcf599237302e670d0fbd30"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a4e44394dedcf599237302e670d0fbd30">&#9670;&nbsp;</a></span>debug_logs</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">#define debug_logs</td>
          <td>(</td>
          <td class="paramtype">&#160;</td>
          <td class="paramname"><em>...</em></td><td>)</td>
          <td>&#160;&#160;&#160;<a class="el" href="../../df/d98/a00107.php#ae48c93288111b5c36c6e44117992a8f3">logs</a>(<a class="el" href="../../d7/d76/a00992.php#a25d94050e8e7f91c7e1f02ddc2af8e95a2317dfad63407c5b05415b976cff9030">mcd::Logger::DEBUG</a>, __VA_ARGS__)</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a id="ae48c93288111b5c36c6e44117992a8f3"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ae48c93288111b5c36c6e44117992a8f3">&#9670;&nbsp;</a></span>logs</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">#define logs</td>
          <td>(</td>
          <td class="paramtype">&#160;</td>
          <td class="paramname">LEVEL, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">&#160;</td>
          <td class="paramname"><em>...</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td>&#160;&#160;&#160;logger.log(LEVEL, __LINE__, __FILE__, __VA_ARGS__)</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
</div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../dir_bfccd401955b95cf8c75461437045ac0.php">inc</a></li><li class="navelem"><a class="el" href="../../dir_2ce2ad1ea5ded593884489da6d66e532.php">C++</a></li><li class="navelem"><a class="el" href="../../df/d98/a00107.php">Logger.hpp</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
