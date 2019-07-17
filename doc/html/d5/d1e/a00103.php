<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.11"/>
		<title>C++: IOConfig.hpp File Reference</title>
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
$(document).ready(function(){initNavTree('d5/d1e/a00103.php','../../');});
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
<div class="title">IOConfig.hpp File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><code>#include &quot;<a class="el" href="../../d9/dcc/a00102.php">C++/includes.hpp</a>&quot;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for IOConfig.hpp:</div>
<div class="dyncontent">
<div class="center"><img src="../../db/d53/a00202.png" border="0" usemap="#IOConfig_8hpp" alt=""/></div>
<map name="IOConfig_8hpp" id="IOConfig_8hpp">
<area shape="rect" id="node2" href="../../d9/dcc/a00102.php" title="C++/includes.hpp" alt="" coords="693,80,819,107"/>
<area shape="rect" id="node3" href="../../d6/db3/a00130.php" title="C++/timeFunctions.hpp" alt="" coords="286,155,445,181"/>
<area shape="rect" id="node55" href="../../dd/d42/a00109.php" title="C++/NotCopyable.hpp" alt="" coords="469,155,622,181"/>
<area shape="rect" id="node5" href="../../d7/d12/a00126.php" title="C++/string.hpp" alt="" coords="364,229,473,256"/>
<area shape="rect" id="node7" href="../../df/dcd/a00127.php" title="C++/system.hpp" alt="" coords="291,304,411,331"/>
<area shape="rect" id="node52" href="../../de/d36/a00123.php" title="C++/RNG.hpp" alt="" coords="435,304,541,331"/>
<area shape="rect" id="node54" href="../../d0/dc2/a00104.php" title="C++/macro.hpp" alt="" coords="566,304,679,331"/>
<area shape="rect" id="node8" href="../../d1/d44/a00098.php" title="C++/errors.hpp" alt="" coords="295,379,406,405"/>
<area shape="rect" id="node9" href="../../db/ddf/a00088.php" title="C++/console.hpp" alt="" coords="221,453,344,480"/>
<area shape="rect" id="node50" href="../../da/d74/a00099.php" title="C++/files.hpp" alt="" coords="368,453,469,480"/>
<area shape="rect" id="node10" href="../../da/d82/a00091.php" title="C++/convert.hpp" alt="" coords="232,528,352,555"/>
<area shape="rect" id="node12" href="../../d9/da5/a00075.php" title="C++/array.hpp" alt="" coords="299,603,405,629"/>
<area shape="rect" id="node14" href="../../df/d13/a00085.php" title="C++/check.hpp" alt="" coords="296,677,408,704"/>
<area shape="rect" id="node49" href="../../da/d72/a00124.php" title="C++/sorting.hpp" alt="" coords="502,677,618,704"/>
<area shape="rect" id="node18" href="../../db/df8/a00076.php" title="C++/arraysIncludes.hpp" alt="" coords="515,752,677,779"/>
<area shape="rect" id="node47" href="../../d1/d1e/a00087.php" title="C++/collides.hpp" alt="" coords="369,752,490,779"/>
<area shape="rect" id="node25" href="../../d4/d98/a00120.php" title="C++/pointers.hpp" alt="" coords="480,901,603,928"/>
<area shape="rect" id="node28" href="../../d0/de8/a00133.php" title="C++/types.hpp" alt="" coords="595,976,704,1003"/>
<area shape="rect" id="node30" href="../../d9/da4/a00078.php" title="Big.hpp" alt="" coords="560,1051,627,1077"/>
<area shape="rect" id="node45" href="../../d8/dfa/a00121.php" title="PureVirtual.hpp" alt="" coords="651,1051,762,1077"/>
<area shape="rect" id="node46" href="../../de/d76/a00134.php" title="UsefullDefines.hpp" alt="" coords="787,1051,920,1077"/>
<area shape="rect" id="node41" href="../../da/dec/a00080.php" title="C++/Big_Constructor.hpp" alt="" coords="887,1125,1057,1152"/>
<area shape="rect" id="node42" href="../../d4/d63/a00082.php" title="C++/Big_Operator.hpp" alt="" coords="1082,1125,1235,1152"/>
<area shape="rect" id="node43" href="../../d1/d51/a00079.php" title="C++/Big_Comparison.hpp" alt="" coords="1260,1125,1433,1152"/>
<area shape="rect" id="node44" href="../../d8/d53/a00081.php" title="C++/Big_Maths.hpp" alt="" coords="1457,1125,1596,1152"/>
<area shape="rect" id="node48" href="../../df/d98/a00107.php" title="C++/maths.hpp" alt="" coords="194,827,307,853"/>
</map>
</div>
</div><div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="../../de/d79/a00203.png" border="0" usemap="#IOConfig_8hppdep" alt=""/></div>
<map name="IOConfig_8hppdep" id="IOConfig_8hppdep">
<area shape="rect" id="node2" href="../../d9/d77/a00095.php" title="defines.hpp" alt="" coords="302,80,391,107"/>
<area shape="rect" id="node3" href="../../d1/dc1/a00092.php" title="cryptage.hpp" alt="" coords="189,155,286,181"/>
<area shape="rect" id="node20" href="../../d7/d70/a00106.php" title="Map.hpp" alt="" coords="311,155,383,181"/>
<area shape="rect" id="node21" href="../../d5/deb/a00132.php" title="Tree.hpp" alt="" coords="407,155,481,181"/>
<area shape="rect" id="node4" href="../../d2/d1f/a00083.php" title="C++.hpp" alt="" coords="310,229,383,256"/>
<area shape="rect" id="node5" href="../../d9/dec/a00090.php" title="Contraption.hpp" alt="" coords="243,304,357,331"/>
<area shape="rect" id="node19" href="../../d4/d3a/a00101.php" title="Identifier.hpp" alt="" coords="342,677,439,704"/>
<area shape="rect" id="node6" href="../../d1/d84/a00097.php" title="Entity.hpp" alt="" coords="133,379,214,405"/>
<area shape="rect" id="node17" href="../../d4/d81/a00110.php" title="Object.hpp" alt="" coords="265,379,351,405"/>
<area shape="rect" id="node7" href="../../d0/d61/a00100.php" title="Hostile.hpp" alt="" coords="21,453,109,480"/>
<area shape="rect" id="node14" href="../../d5/d5b/a00135.php" title="Vegetal.hpp" alt="" coords="128,528,219,555"/>
<area shape="rect" id="node8" href="../../d6/d2c/a00072.php" title="Animal.hpp" alt="" coords="6,528,93,555"/>
<area shape="rect" id="node9" href="../../d1/d6e/a00073.php" title="Ant.hpp" alt="" coords="5,603,72,629"/>
<area shape="rect" id="node10" href="../../d9/df8/a00096.php" title="Entities.hpp" alt="" coords="223,677,313,704"/>
<area shape="rect" id="node11" href="../../df/d6a/a00119.php" title="PlayerAbstraction.hpp" alt="" coords="197,752,347,779"/>
<area shape="rect" id="node12" href="../../d8/d87/a00118.php" title="Player.hpp" alt="" coords="287,827,371,853"/>
<area shape="rect" id="node13" href="../../df/d5d/a00084.php" title="C++Entities.hpp" alt="" coords="271,901,388,928"/>
<area shape="rect" id="node15" href="../../d1/dd6/a00108.php" title="Mushroom.hpp" alt="" coords="97,603,205,629"/>
<area shape="rect" id="node16" href="../../d9/d4b/a00117.php" title="Plant.hpp" alt="" coords="229,603,307,629"/>
<area shape="rect" id="node18" href="../../dc/dfe/a00125.php" title="Stone.hpp" alt="" coords="271,453,353,480"/>
</map>
</div>
</div><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Classes</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d3/dfe/a00025.php">mcd::IOConfig</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A class to configure inputs and outputs.  <a href="../../d3/dfe/a00025.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="namespaces"></a>
Namespaces</h2></td></tr>
<tr class="memitem:dd/d1b/a00015"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dd/d1b/a00015.php">mcd</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><dl class="section author"><dt>Author</dt><dd>Mathias CABIOCH-DELALANDE </dd></dl>
<dl class="section date"><dt>Date</dt><dd>Created : Saturday January, 19 2019 17:09:41 </dd>
<dd>
Last modification : Saturday January, 19 2019 </dd></dl>
</div></div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../dir_bfccd401955b95cf8c75461437045ac0.php">inc</a></li><li class="navelem"><a class="el" href="../../dir_2ce2ad1ea5ded593884489da6d66e532.php">C++</a></li><li class="navelem"><a class="el" href="../../d5/d1e/a00103.php">IOConfig.hpp</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
