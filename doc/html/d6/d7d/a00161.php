<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.13"/>
		<title>C++: pointers.hpp File Reference</title>
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
				$text = "Generated on Fri Sep 27 2019 01:01:20 for C++ by";
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
$(document).ready(function(){initNavTree('d6/d7d/a00161.php','../../');});
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
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<div class="title">pointers.hpp File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><code>#include &lt;thread&gt;</code><br />
<code>#include &lt;mutex&gt;</code><br />
<code>#include &quot;<a class="el" href="../../d3/db1/a00200.php">C++/types.hpp</a>&quot;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for pointers.hpp:</div>
<div class="dyncontent">
<div class="center"><img src="../../db/d44/a00162.png" border="0" usemap="#pointers_8hpp" alt=""/></div>
<map name="pointers_8hpp" id="pointers_8hpp">
<area shape="rect" id="node4" href="../../d3/db1/a00200.php" title="C++/types.hpp" alt="" coords="595,80,704,107"/>
<area shape="rect" id="node6" href="../../d4/d51/a00017.php" title="Big.hpp" alt="" coords="560,155,627,181"/>
<area shape="rect" id="node21" href="../../db/ddf/a00164.php" title="PureVirtual.hpp" alt="" coords="651,155,762,181"/>
<area shape="rect" id="node22" href="../../de/d79/a00203.php" title="UsefullDefines.hpp" alt="" coords="787,155,920,181"/>
<area shape="rect" id="node17" href="../../d3/d52/a00023.php" title="C++/Big_Constructor.hpp" alt="" coords="887,229,1057,256"/>
<area shape="rect" id="node18" href="../../d5/d16/a00029.php" title="C++/Big_Operator.hpp" alt="" coords="1082,229,1235,256"/>
<area shape="rect" id="node19" href="../../db/db2/a00020.php" title="C++/Big_Comparison.hpp" alt="" coords="1260,229,1433,256"/>
<area shape="rect" id="node20" href="../../d6/d5b/a00026.php" title="C++/Big_Maths.hpp" alt="" coords="1457,229,1596,256"/>
</map>
</div>
</div><div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="../../dd/dae/a00163.png" border="0" usemap="#pointers_8hppdep" alt=""/></div>
<map name="pointers_8hppdep" id="pointers_8hppdep">
<area shape="rect" id="node2" href="../../d2/de7/a00014.php" title="arraysIncludes.hpp" alt="" coords="212,80,344,107"/>
<area shape="rect" id="node51" href="../../dc/d87/a00032.php" title="Binary.hpp" alt="" coords="368,80,452,107"/>
<area shape="rect" id="node3" href="../../d5/df1/a00206.php" title="vector.hpp" alt="" coords="253,379,335,405"/>
<area shape="rect" id="node4" href="../../dd/d32/a00041.php" title="check.hpp" alt="" coords="362,453,445,480"/>
<area shape="rect" id="node50" href="../../d7/d3f/a00173.php" title="sorting.hpp" alt="" coords="251,453,337,480"/>
<area shape="rect" id="node5" href="../../da/d45/a00011.php" title="array.hpp" alt="" coords="311,528,387,555"/>
<area shape="rect" id="node6" href="../../d3/d8b/a00059.php" title="convert.hpp" alt="" coords="303,603,394,629"/>
<area shape="rect" id="node7" href="../../d5/de0/a00050.php" title="console.hpp" alt="" coords="251,677,343,704"/>
<area shape="rect" id="node49" href="../../d2/d1f/a00083.php" title="files.hpp" alt="" coords="367,677,437,704"/>
<area shape="rect" id="node8" href="../../da/dec/a00080.php" title="errors.hpp" alt="" coords="309,752,389,779"/>
<area shape="rect" id="node9" href="../../d7/d25/a00182.php" title="system.hpp" alt="" coords="303,827,394,853"/>
<area shape="rect" id="node10" href="../../db/dd9/a00179.php" title="string.hpp" alt="" coords="309,901,388,928"/>
<area shape="rect" id="node11" href="../../d9/dd0/a00191.php" title="timeFunctions.hpp" alt="" coords="284,976,413,1003"/>
<area shape="rect" id="node12" href="../../d9/d77/a00095.php" title="includes.hpp" alt="" coords="301,1051,396,1077"/>
<area shape="rect" id="node13" href="../../d5/df9/a00044.php" title="Clock.hpp" alt="" coords="5,1275,87,1301"/>
<area shape="rect" id="node34" href="../../dc/dee/a00053.php" title="ConsoleTable.hpp" alt="" coords="56,1200,183,1227"/>
<area shape="rect" id="node35" href="../../de/de1/a00065.php" title="Date.hpp" alt="" coords="135,1125,210,1152"/>
<area shape="rect" id="node37" href="../../d1/d44/a00098.php" title="IOConfig.hpp" alt="" coords="297,1275,395,1301"/>
<area shape="rect" id="node38" href="../../de/d76/a00134.php" title="Path.hpp" alt="" coords="386,1125,461,1152"/>
<area shape="rect" id="node43" href="../../d9/db6/a00146.php" title="PathfindingException.hpp" alt="" coords="485,1125,655,1152"/>
<area shape="rect" id="node44" href="../../dc/de6/a00167.php" title="Referenced.hpp" alt="" coords="547,1349,662,1376"/>
<area shape="rect" id="node45" href="../../de/df3/a00185.php" title="Threadable.hpp" alt="" coords="688,1349,799,1376"/>
<area shape="rect" id="node48" href="../../da/d15/a00188.php" title="Time.hpp" alt="" coords="235,1125,311,1152"/>
<area shape="rect" id="node14" href="../../d0/d89/a00071.php" title="defines.hpp" alt="" coords="336,1499,425,1525"/>
<area shape="rect" id="node15" href="../../df/d03/a00062.php" title="cryptage.hpp" alt="" coords="223,1573,320,1600"/>
<area shape="rect" id="node32" href="../../d0/dc2/a00104.php" title="Map.hpp" alt="" coords="345,1573,417,1600"/>
<area shape="rect" id="node33" href="../../de/db1/a00197.php" title="Tree.hpp" alt="" coords="441,1573,515,1600"/>
<area shape="rect" id="node16" href="../../d4/d8c/a00035.php" title="C++.hpp" alt="" coords="344,1648,417,1675"/>
<area shape="rect" id="node17" href="../../d9/d2e/a00056.php" title="Contraption.hpp" alt="" coords="277,1723,391,1749"/>
<area shape="rect" id="node31" href="../../d1/dc1/a00092.php" title="Identifier.hpp" alt="" coords="376,2096,473,2123"/>
<area shape="rect" id="node18" href="../../d1/d09/a00077.php" title="Entity.hpp" alt="" coords="180,1797,261,1824"/>
<area shape="rect" id="node29" href="../../d7/d06/a00131.php" title="Object.hpp" alt="" coords="299,1797,385,1824"/>
<area shape="rect" id="node19" href="../../db/dab/a00089.php" title="Hostile.hpp" alt="" coords="66,1872,154,1899"/>
<area shape="rect" id="node26" href="../../d3/de5/a00209.php" title="Vegetal.hpp" alt="" coords="175,1947,266,1973"/>
<area shape="rect" id="node20" href="../../d7/d46/a00002.php" title="Animal.hpp" alt="" coords="37,1947,124,1973"/>
<area shape="rect" id="node21" href="../../dd/dad/a00005.php" title="Ant.hpp" alt="" coords="39,2021,106,2048"/>
<area shape="rect" id="node22" href="../../db/db6/a00074.php" title="Entities.hpp" alt="" coords="257,2096,347,2123"/>
<area shape="rect" id="node23" href="../../d6/db8/a00158.php" title="PlayerAbstraction.hpp" alt="" coords="229,2171,380,2197"/>
<area shape="rect" id="node24" href="../../d3/df8/a00155.php" title="Player.hpp" alt="" coords="319,2245,403,2272"/>
<area shape="rect" id="node25" href="../../d8/d41/a00038.php" title="C++Entities.hpp" alt="" coords="302,2320,419,2347"/>
<area shape="rect" id="node27" href="../../dc/dfe/a00125.php" title="Mushroom.hpp" alt="" coords="131,2021,239,2048"/>
<area shape="rect" id="node28" href="../../d7/d9a/a00152.php" title="Plant.hpp" alt="" coords="263,2021,341,2048"/>
<area shape="rect" id="node30" href="../../d5/de9/a00176.php" title="Stone.hpp" alt="" coords="309,1872,391,1899"/>
<area shape="rect" id="node36" href="../../da/d24/a00068.php" title="DateTime.hpp" alt="" coords="207,1200,311,1227"/>
<area shape="rect" id="node39" href="../../da/d1e/a00149.php" title="PathfindingProblem.hpp" alt="" coords="395,1200,555,1227"/>
<area shape="rect" id="node40" href="../../d2/df5/a00137.php" title="Pathfinding.hpp" alt="" coords="419,1275,531,1301"/>
<area shape="rect" id="node41" href="../../d7/dce/a00143.php" title="PathfindingDijkstra.hpp" alt="" coords="365,1349,522,1376"/>
<area shape="rect" id="node42" href="../../d5/db1/a00140.php" title="PathfindingAlgorithms.hpp" alt="" coords="356,1424,531,1451"/>
<area shape="rect" id="node46" href="../../d4/dee/a00008.php" title="Args.hpp" alt="" coords="606,1424,681,1451"/>
<area shape="rect" id="node47" href="../../dc/d57/a00194.php" title="Timer.hpp" alt="" coords="705,1424,785,1451"/>
<area shape="rect" id="node52" href="../../df/d98/a00107.php" title="maths.hpp" alt="" coords="367,155,450,181"/>
<area shape="rect" id="node53" href="../../da/d2a/a00086.php" title="Fraction.hpp" alt="" coords="361,229,456,256"/>
<area shape="rect" id="node54" href="../../d4/d81/a00110.php" title="Matrix.hpp" alt="" coords="365,304,447,331"/>
<area shape="rect" id="node55" href="../../d6/d2d/a00047.php" title="collides.hpp" alt="" coords="361,379,451,405"/>
</map>
</div>
</div><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Classes</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d1/dd8/a01022.php">mcd::Check::is_minded_ptr&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A template class to test if T is a std::shared_ptr, a std::unique_ptr or a std::weak_ptr.  <a href="../../d1/dd8/a01022.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../de/d02/a01026.php">mcd::Check::is_thread_ptr&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A template class to test if T is a std::shared_ptr&lt;std::thread&gt;, a std::unique_ptr&lt;std::thread&gt;, a std::weak_ptr&lt;std::thread&gt; or a std::thread*.  <a href="../../de/d02/a01026.php#details">More...</a><br /></td></tr>
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
<tr class="memitem:a6fbaf936dc811e3422bec35b026f4983"><td class="memItemLeft" align="right" valign="top">#define&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d6/d7d/a00161.php#a6fbaf936dc811e3422bec35b026f4983">MUTEX_RECREATE</a>(parent,  name,  type)</td></tr>
<tr class="separator:a6fbaf936dc811e3422bec35b026f4983"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a8614c85113bf4cfc4be80948688e9f5d"><td class="memItemLeft" align="right" valign="top">#define&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d6/d7d/a00161.php#a8614c85113bf4cfc4be80948688e9f5d">MUTEX_RECREATE_ARGS</a>(parent,  name,  type, ...)</td></tr>
<tr class="separator:a8614c85113bf4cfc4be80948688e9f5d"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a1268e33dd61371fb191a2e753e76f545"><td class="memItemLeft" align="right" valign="top">#define&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d6/d7d/a00161.php#a1268e33dd61371fb191a2e753e76f545">MUTEX_VOID_RECREATE</a>(parent,  name)</td></tr>
<tr class="separator:a1268e33dd61371fb191a2e753e76f545"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a5664112302c26ebee5460b2fcc0a7954"><td class="memItemLeft" align="right" valign="top">#define&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d6/d7d/a00161.php#a5664112302c26ebee5460b2fcc0a7954">MUTEX_VOID_RECREATE_ARGS</a>(parent,  name, ...)</td></tr>
<tr class="separator:a5664112302c26ebee5460b2fcc0a7954"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:ad32e282421be0e66b0288fe7634ad183"><td class="memTemplParams" colspan="2">template&lt;typename T &gt; </td></tr>
<tr class="memitem:ad32e282421be0e66b0288fe7634ad183"><td class="memTemplItemLeft" align="right" valign="top">std::enable_if_t&lt; std::is_pointer&lt; T &gt;::value||Check::is_minded_ptr&lt; T &gt;::value &gt;&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../df/d24/a00217.php#ad32e282421be0e66b0288fe7634ad183">mcd::deletePtr</a> (T &amp;pointer)</td></tr>
<tr class="memdesc:ad32e282421be0e66b0288fe7634ad183"><td class="mdescLeft">&#160;</td><td class="mdescRight">Delete a pointer.  <a href="../../df/d24/a00217.php#ad32e282421be0e66b0288fe7634ad183">More...</a><br /></td></tr>
<tr class="separator:ad32e282421be0e66b0288fe7634ad183"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><dl class="section author"><dt>Author</dt><dd>Mathias CABIOCH-DELALANDE </dd></dl>
<dl class="section date"><dt>Date</dt><dd>Last modification : April, 15 2019 </dd></dl>
</div><h2 class="groupheader">Macro Definition Documentation</h2>
<a id="a6fbaf936dc811e3422bec35b026f4983"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a6fbaf936dc811e3422bec35b026f4983">&#9670;&nbsp;</a></span>MUTEX_RECREATE</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">#define MUTEX_RECREATE</td>
          <td>(</td>
          <td class="paramtype">&#160;</td>
          <td class="paramname">parent, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">&#160;</td>
          <td class="paramname">name, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">&#160;</td>
          <td class="paramname">type&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">
<b>Value:</b><div class="fragment"><div class="line">type name(){\</div><div class="line">    _mutex.lock();\</div><div class="line">    type out = parent::name();\</div><div class="line">    _mutex.unlock();\</div><div class="line">    return out;\</div><div class="line">}</div></div><!-- fragment -->
</div>
</div>
<a id="a8614c85113bf4cfc4be80948688e9f5d"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a8614c85113bf4cfc4be80948688e9f5d">&#9670;&nbsp;</a></span>MUTEX_RECREATE_ARGS</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">#define MUTEX_RECREATE_ARGS</td>
          <td>(</td>
          <td class="paramtype">&#160;</td>
          <td class="paramname">parent, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">&#160;</td>
          <td class="paramname">name, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">&#160;</td>
          <td class="paramname">type, </td>
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
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">
<b>Value:</b><div class="fragment"><div class="line">type name(__VA_ARGS__){\</div><div class="line">    _mutex.lock();\</div><div class="line">    type out = parent::name(__VA_ARGS__);\</div><div class="line">    _mutex.unlock();\</div><div class="line">    return out;\</div><div class="line">}</div></div><!-- fragment -->
</div>
</div>
<a id="a1268e33dd61371fb191a2e753e76f545"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a1268e33dd61371fb191a2e753e76f545">&#9670;&nbsp;</a></span>MUTEX_VOID_RECREATE</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">#define MUTEX_VOID_RECREATE</td>
          <td>(</td>
          <td class="paramtype">&#160;</td>
          <td class="paramname">parent, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">&#160;</td>
          <td class="paramname">name&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">
<b>Value:</b><div class="fragment"><div class="line"><span class="keywordtype">void</span> name(){\</div><div class="line">    _mutex.lock();\</div><div class="line">    parent::name();\</div><div class="line">    _mutex.unlock();\</div><div class="line">}</div></div><!-- fragment -->
</div>
</div>
<a id="a5664112302c26ebee5460b2fcc0a7954"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a5664112302c26ebee5460b2fcc0a7954">&#9670;&nbsp;</a></span>MUTEX_VOID_RECREATE_ARGS</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">#define MUTEX_VOID_RECREATE_ARGS</td>
          <td>(</td>
          <td class="paramtype">&#160;</td>
          <td class="paramname">parent, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">&#160;</td>
          <td class="paramname">name, </td>
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
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">
<b>Value:</b><div class="fragment"><div class="line"><span class="keywordtype">void</span> name(__VA_ARGS__){\</div><div class="line">    _mutex.lock();\</div><div class="line">    parent::name(__VA_ARGS__);\</div><div class="line">    _mutex.unlock();\</div><div class="line">}</div></div><!-- fragment -->
</div>
</div>
</div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../dir_bfccd401955b95cf8c75461437045ac0.php">inc</a></li><li class="navelem"><a class="el" href="../../dir_2ce2ad1ea5ded593884489da6d66e532.php">C++</a></li><li class="navelem"><a class="el" href="../../d6/d7d/a00161.php">pointers.hpp</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
