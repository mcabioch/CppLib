<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.11"/>
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
  $(window).load(resizeHeight);
</script>
		<link href="../../search/search.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="../../search/searchdata.js"></script>
<script type="text/javascript" src="../../search/search.js"></script>
<script type="text/javascript">
  $(document).ready(function() { init_search(); });
</script>
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
				$text = "Generated on Sun Apr 28 2019 10:54:58 for C++ by";
				$text = substr($text, 0, sizeof($text) - 4);
				$tmp = substr($text, 17);
				$tmp = substr($tmp, 0, strpos($tmp, " for"));
				$lastModif = date("l jS \of F Y \a\\t H:i:s", strtotime($tmp));
			?>
		<!-- end header part -->
<!-- Generated by Doxygen 1.8.11 -->
<script type="text/javascript">
var searchBox = new SearchBox("searchBox", "../../search",false,'Search');
</script>
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="../../index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="../../pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="../../namespaces.php"><span>Namespaces</span></a></li>
      <li><a href="../../annotated.php"><span>Classes</span></a></li>
      <li class="current"><a href="../../files.php"><span>Files</span></a></li>
      <li>
        <div id="MSearchBox" class="MSearchBoxInactive">
        <span class="left">
          <img id="MSearchSelect" src="../../search/mag_sel.png"
               onmouseover="return searchBox.OnSearchSelectShow()"
               onmouseout="return searchBox.OnSearchSelectHide()"
               alt=""/>
          <input type="text" id="MSearchField" value="Search" accesskey="S"
               onfocus="searchBox.OnSearchFieldFocus(true)" 
               onblur="searchBox.OnSearchFieldFocus(false)" 
               onkeyup="searchBox.OnSearchFieldChange(event)"/>
          </span><span class="right">
            <a id="MSearchClose" href="javascript:searchBox.CloseResultsWindow()"><img id="MSearchCloseImg" border="0" src="../../search/close.png" alt=""/></a>
          </span>
        </div>
      </li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="../../files.php"><span>File&#160;List</span></a></li>
      <li><a href="../../globals.php"><span>File&#160;Members</span></a></li>
    </ul>
  </div>
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
$(document).ready(function(){initNavTree('d4/d98/a00120.php','../../');});
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
<code>#include &quot;<a class="el" href="../../d0/de8/a00133.php">C++/types.hpp</a>&quot;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for pointers.hpp:</div>
<div class="dyncontent">
<div class="center"><img src="../../d0/d53/a00232.png" border="0" usemap="#pointers_8hpp" alt=""/></div>
<map name="pointers_8hpp" id="pointers_8hpp">
<area shape="rect" id="node4" href="../../d0/de8/a00133.php" title="C++/types.hpp" alt="" coords="596,80,705,107"/>
<area shape="rect" id="node6" href="../../d9/da4/a00078.php" title="Big.hpp" alt="" coords="560,155,627,181"/>
<area shape="rect" id="node21" href="../../d8/dfa/a00121.php" title="PureVirtual.hpp" alt="" coords="651,155,762,181"/>
<area shape="rect" id="node22" href="../../de/d76/a00134.php" title="UsefullDefines.hpp" alt="" coords="787,155,920,181"/>
<area shape="rect" id="node17" href="../../da/dec/a00080.php" title="C++/Big_Constructor.hpp" alt="" coords="887,229,1057,256"/>
<area shape="rect" id="node18" href="../../d4/d63/a00082.php" title="C++/Big_Operator.hpp" alt="" coords="1082,229,1235,256"/>
<area shape="rect" id="node19" href="../../d1/d51/a00079.php" title="C++/Big_Comparison.hpp" alt="" coords="1260,229,1433,256"/>
<area shape="rect" id="node20" href="../../d8/d53/a00081.php" title="C++/Big_Maths.hpp" alt="" coords="1457,229,1596,256"/>
</map>
</div>
</div><div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="../../d6/de1/a00233.png" border="0" usemap="#pointers_8hppdep" alt=""/></div>
<map name="pointers_8hppdep" id="pointers_8hppdep">
<area shape="rect" id="node2" href="../../db/df8/a00076.php" title="arraysIncludes.hpp" alt="" coords="228,155,360,181"/>
<area shape="rect" id="node51" href="../../df/d98/a00107.php" title="maths.hpp" alt="" coords="374,80,457,107"/>
<area shape="rect" id="node3" href="../../df/d13/a00085.php" title="check.hpp" alt="" coords="362,229,445,256"/>
<area shape="rect" id="node50" href="../../da/d72/a00124.php" title="sorting.hpp" alt="" coords="251,229,337,256"/>
<area shape="rect" id="node4" href="../../d9/da5/a00075.php" title="array.hpp" alt="" coords="311,304,387,331"/>
<area shape="rect" id="node5" href="../../da/d82/a00091.php" title="convert.hpp" alt="" coords="303,379,394,405"/>
<area shape="rect" id="node6" href="../../db/ddf/a00088.php" title="console.hpp" alt="" coords="251,453,343,480"/>
<area shape="rect" id="node49" href="../../da/d74/a00099.php" title="files.hpp" alt="" coords="367,453,437,480"/>
<area shape="rect" id="node7" href="../../d1/d44/a00098.php" title="errors.hpp" alt="" coords="309,528,389,555"/>
<area shape="rect" id="node8" href="../../df/dcd/a00127.php" title="system.hpp" alt="" coords="303,603,394,629"/>
<area shape="rect" id="node9" href="../../d7/d12/a00126.php" title="string.hpp" alt="" coords="309,677,388,704"/>
<area shape="rect" id="node10" href="../../d6/db3/a00130.php" title="timeFunctions.hpp" alt="" coords="284,752,413,779"/>
<area shape="rect" id="node11" href="../../d9/dcc/a00102.php" title="includes.hpp" alt="" coords="301,827,396,853"/>
<area shape="rect" id="node12" href="../../da/d2a/a00086.php" title="Clock.hpp" alt="" coords="5,1051,87,1077"/>
<area shape="rect" id="node33" href="../../db/dab/a00089.php" title="ConsoleTable.hpp" alt="" coords="56,976,183,1003"/>
<area shape="rect" id="node34" href="../../d4/d7d/a00093.php" title="Date.hpp" alt="" coords="135,901,210,928"/>
<area shape="rect" id="node36" href="../../d5/d1e/a00103.php" title="IOConfig.hpp" alt="" coords="297,1051,395,1077"/>
<area shape="rect" id="node37" href="../../dd/d6d/a00111.php" title="Path.hpp" alt="" coords="386,901,461,928"/>
<area shape="rect" id="node42" href="../../d2/da3/a00115.php" title="PathfindingException.hpp" alt="" coords="485,901,655,928"/>
<area shape="rect" id="node43" href="../../df/dc8/a00122.php" title="Referenced.hpp" alt="" coords="549,1125,663,1152"/>
<area shape="rect" id="node44" href="../../d1/d88/a00128.php" title="Threadable.hpp" alt="" coords="688,1125,799,1152"/>
<area shape="rect" id="node48" href="../../d9/d47/a00129.php" title="Time.hpp" alt="" coords="235,901,311,928"/>
<area shape="rect" id="node13" href="../../d9/d77/a00095.php" title="defines.hpp" alt="" coords="401,1275,491,1301"/>
<area shape="rect" id="node14" href="../../d1/dc1/a00092.php" title="cryptage.hpp" alt="" coords="288,1349,385,1376"/>
<area shape="rect" id="node31" href="../../d7/d70/a00106.php" title="Map.hpp" alt="" coords="410,1349,482,1376"/>
<area shape="rect" id="node32" href="../../d5/deb/a00132.php" title="Tree.hpp" alt="" coords="507,1349,580,1376"/>
<area shape="rect" id="node15" href="../../d2/d1f/a00083.php" title="C++.hpp" alt="" coords="409,1424,483,1451"/>
<area shape="rect" id="node16" href="../../d9/dec/a00090.php" title="Contraption.hpp" alt="" coords="342,1499,457,1525"/>
<area shape="rect" id="node30" href="../../d4/d3a/a00101.php" title="Identifier.hpp" alt="" coords="441,1872,539,1899"/>
<area shape="rect" id="node17" href="../../d1/d84/a00097.php" title="Entity.hpp" alt="" coords="232,1573,313,1600"/>
<area shape="rect" id="node28" href="../../d4/d81/a00110.php" title="Object.hpp" alt="" coords="365,1573,450,1600"/>
<area shape="rect" id="node18" href="../../d0/d61/a00100.php" title="Hostile.hpp" alt="" coords="121,1648,209,1675"/>
<area shape="rect" id="node25" href="../../d5/d5b/a00135.php" title="Vegetal.hpp" alt="" coords="227,1723,318,1749"/>
<area shape="rect" id="node19" href="../../d6/d2c/a00072.php" title="Animal.hpp" alt="" coords="105,1723,192,1749"/>
<area shape="rect" id="node20" href="../../d1/d6e/a00073.php" title="Ant.hpp" alt="" coords="105,1797,171,1824"/>
<area shape="rect" id="node21" href="../../d9/df8/a00096.php" title="Entities.hpp" alt="" coords="322,1872,413,1899"/>
<area shape="rect" id="node22" href="../../df/d6a/a00119.php" title="PlayerAbstraction.hpp" alt="" coords="296,1947,447,1973"/>
<area shape="rect" id="node23" href="../../d8/d87/a00118.php" title="Player.hpp" alt="" coords="387,2021,471,2048"/>
<area shape="rect" id="node24" href="../../df/d5d/a00084.php" title="C++Entities.hpp" alt="" coords="370,2096,487,2123"/>
<area shape="rect" id="node26" href="../../d1/dd6/a00108.php" title="Mushroom.hpp" alt="" coords="196,1797,304,1824"/>
<area shape="rect" id="node27" href="../../d9/d4b/a00117.php" title="Plant.hpp" alt="" coords="329,1797,406,1824"/>
<area shape="rect" id="node29" href="../../dc/dfe/a00125.php" title="Stone.hpp" alt="" coords="371,1648,452,1675"/>
<area shape="rect" id="node35" href="../../dc/d54/a00094.php" title="DateTime.hpp" alt="" coords="207,976,311,1003"/>
<area shape="rect" id="node38" href="../../d4/d3e/a00116.php" title="PathfindingProblem.hpp" alt="" coords="395,976,555,1003"/>
<area shape="rect" id="node39" href="../../db/d57/a00112.php" title="Pathfinding.hpp" alt="" coords="419,1051,531,1077"/>
<area shape="rect" id="node40" href="../../d8/d17/a00114.php" title="PathfindingDijkstra.hpp" alt="" coords="367,1125,525,1152"/>
<area shape="rect" id="node41" href="../../d3/d00/a00113.php" title="PathfindingAlgorithms.hpp" alt="" coords="359,1200,533,1227"/>
<area shape="rect" id="node45" href="../../db/db6/a00074.php" title="Args.hpp" alt="" coords="609,1200,683,1227"/>
<area shape="rect" id="node46" href="../../d1/d09/a00077.php" title="bdd.hpp" alt="" coords="708,1200,776,1227"/>
<area shape="rect" id="node47" href="../../d7/d06/a00131.php" title="Timer.hpp" alt="" coords="801,1200,881,1227"/>
<area shape="rect" id="node52" href="../../d1/d1e/a00087.php" title="collides.hpp" alt="" coords="385,155,475,181"/>
</map>
</div>
</div><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Classes</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dc/d3c/a00028.php">mcd::Check::is_minded_ptr&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A template class to test if T is a std::shared_ptr, a std::unique_ptr or a std::weak_ptr.  <a href="../../dc/d3c/a00028.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../de/d8c/a00036.php">mcd::Check::is_thread_ptr&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A template class to test if T is a std::shared_ptr&lt;std::thread&gt;, a std::unique_ptr&lt;std::thread&gt;, a std::weak_ptr&lt;std::thread&gt; or a std::thread*.  <a href="../../de/d8c/a00036.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="namespaces"></a>
Namespaces</h2></td></tr>
<tr class="memitem:dd/d1b/a00015"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dd/d1b/a00015.php">mcd</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:d0/d5e/a00136"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d0/d5e/a00136.php">mcd::Check</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="define-members"></a>
Macros</h2></td></tr>
<tr class="memitem:a6fbaf936dc811e3422bec35b026f4983"><td class="memItemLeft" align="right" valign="top">#define&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d4/d98/a00120.php#a6fbaf936dc811e3422bec35b026f4983">MUTEX_RECREATE</a>(parent,  name,  type)</td></tr>
<tr class="separator:a6fbaf936dc811e3422bec35b026f4983"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a8614c85113bf4cfc4be80948688e9f5d"><td class="memItemLeft" align="right" valign="top">#define&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d4/d98/a00120.php#a8614c85113bf4cfc4be80948688e9f5d">MUTEX_RECREATE_ARGS</a>(parent,  name,  type, ...)</td></tr>
<tr class="separator:a8614c85113bf4cfc4be80948688e9f5d"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a1268e33dd61371fb191a2e753e76f545"><td class="memItemLeft" align="right" valign="top">#define&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d4/d98/a00120.php#a1268e33dd61371fb191a2e753e76f545">MUTEX_VOID_RECREATE</a>(parent,  name)</td></tr>
<tr class="separator:a1268e33dd61371fb191a2e753e76f545"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a5664112302c26ebee5460b2fcc0a7954"><td class="memItemLeft" align="right" valign="top">#define&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d4/d98/a00120.php#a5664112302c26ebee5460b2fcc0a7954">MUTEX_VOID_RECREATE_ARGS</a>(parent,  name, ...)</td></tr>
<tr class="separator:a5664112302c26ebee5460b2fcc0a7954"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:ad32e282421be0e66b0288fe7634ad183"><td class="memTemplParams" colspan="2">template&lt;typename T &gt; </td></tr>
<tr class="memitem:ad32e282421be0e66b0288fe7634ad183"><td class="memTemplItemLeft" align="right" valign="top">std::enable_if_t&lt; std::is_pointer&lt; T &gt;::value||Check::is_minded_ptr&lt; T &gt;::value &gt;&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../dd/d1b/a00015.php#ad32e282421be0e66b0288fe7634ad183">mcd::deletePtr</a> (T &amp;pointer)</td></tr>
<tr class="memdesc:ad32e282421be0e66b0288fe7634ad183"><td class="mdescLeft">&#160;</td><td class="mdescRight">Delete a pointer.  <a href="../../dd/d1b/a00015.php#ad32e282421be0e66b0288fe7634ad183">More...</a><br /></td></tr>
<tr class="separator:ad32e282421be0e66b0288fe7634ad183"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><dl class="section author"><dt>Author</dt><dd>Mathias CABIOCH-DELALANDE </dd></dl>
<dl class="section date"><dt>Date</dt><dd>Last modification : April, 15 2019 </dd></dl>
</div><h2 class="groupheader">Macro Definition Documentation</h2>
<a class="anchor" id="a6fbaf936dc811e3422bec35b026f4983"></a>
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
<a class="anchor" id="a8614c85113bf4cfc4be80948688e9f5d"></a>
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
<a class="anchor" id="a1268e33dd61371fb191a2e753e76f545"></a>
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
<a class="anchor" id="a5664112302c26ebee5460b2fcc0a7954"></a>
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
		<li class="navelem"><a class="el" href="../../dir_bfccd401955b95cf8c75461437045ac0.php">inc</a></li><li class="navelem"><a class="el" href="../../dir_2ce2ad1ea5ded593884489da6d66e532.php">C++</a></li><li class="navelem"><a class="el" href="../../d4/d98/a00120.php">pointers.hpp</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
