<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.13"/>
		<title>C++: mcd::PathfindingDijkstra Class Reference</title>
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
				$text = "Generated on Thu Nov 14 2019 13:45:02 for C++ by";
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
$(document).ready(function(){initNavTree('db/d14/a01040.php','../../');});
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
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="../../d2/d41/a01037.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">mcd::PathfindingDijkstra Class Reference</div>  </div>
</div><!--header-->
<div class="contents">

<p>An implementation of the Dijkstra algorithm.  
 <a href="../../db/d14/a01040.php#details">More...</a></p>

<p><code>#include &lt;PathfindingDijkstra.hpp&gt;</code></p>
<div class="dynheader">
Inheritance diagram for mcd::PathfindingDijkstra:</div>
<div class="dyncontent">
<div class="center"><img src="../../df/d21/a01039.png" border="0" usemap="#mcd_1_1PathfindingDijkstra_inherit__map" alt="Inheritance graph"/></div>
<map name="mcd_1_1PathfindingDijkstra_inherit__map" id="mcd_1_1PathfindingDijkstra_inherit__map">
<area shape="rect" id="node2" href="../../d8/d79/a01036.php" title="A class to implement some pathfinding algorithms. " alt="" coords="28,5,148,32"/>
</map>
<center><span class="legend">[<a target="top" href="../../graph_legend.php">legend</a>]</span></center></div>
<div class="dynheader">
Collaboration diagram for mcd::PathfindingDijkstra:</div>
<div class="dyncontent">
<div class="center"><img src="../../d4/dbc/a01038.png" border="0" usemap="#mcd_1_1PathfindingDijkstra_coll__map" alt="Collaboration graph"/></div>
<map name="mcd_1_1PathfindingDijkstra_coll__map" id="mcd_1_1PathfindingDijkstra_coll__map">
<area shape="rect" id="node2" href="../../d8/d79/a01036.php" title="A class to implement some pathfinding algorithms. " alt="" coords="1107,64,1227,91"/>
<area shape="rect" id="node3" href="../../df/d89/a01032.php" title="A class to manage a path computed by the map. " alt="" coords="727,5,809,32"/>
<area shape="rect" id="node4" href="../../db/d08/a01028.php" title="A node for the path. " alt="" coords="149,64,300,91"/>
<area shape="rect" id="node5" href="../../d5/de7/a01048.php" title="A class to group every pathfinding problems in one way to use it. " alt="" coords="833,167,1001,193"/>
<area shape="rect" id="node7" title="STL class. " alt="" coords="163,220,286,247"/>
<area shape="rect" id="node12" title="STL class. " alt="" coords="167,144,283,171"/>
</map>
<center><span class="legend">[<a target="top" href="../../graph_legend.php">legend</a>]</span></center></div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:a8e8246fb84c8dd3bf9e522f3fca7b39e"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d14/a01040.php#a8e8246fb84c8dd3bf9e522f3fca7b39e">PathfindingDijkstra</a> (const <a class="el" href="../../d5/de7/a01048.php">PathfindingProblem</a> &amp;problem, const <a class="el" href="../../db/d08/a01028.php">PathfindingNode</a> &amp;start, const <a class="el" href="../../db/d08/a01028.php">PathfindingNode</a> &amp;end)</td></tr>
<tr class="memdesc:a8e8246fb84c8dd3bf9e522f3fca7b39e"><td class="mdescLeft">&#160;</td><td class="mdescRight">The constructor of the class.  <a href="#a8e8246fb84c8dd3bf9e522f3fca7b39e">More...</a><br /></td></tr>
<tr class="separator:a8e8246fb84c8dd3bf9e522f3fca7b39e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aae9b7cf4f57d826b9f7e65d9410b572e"><td class="memItemLeft" align="right" valign="top">virtual&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d14/a01040.php#aae9b7cf4f57d826b9f7e65d9410b572e">~PathfindingDijkstra</a> ()</td></tr>
<tr class="separator:aae9b7cf4f57d826b9f7e65d9410b572e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a7b2872207d45871fcbcfa01e216090dd"><td class="memItemLeft" align="right" valign="top">virtual <a class="el" href="../../df/d89/a01032.php">Path</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d14/a01040.php#a7b2872207d45871fcbcfa01e216090dd">createPath</a> () override</td></tr>
<tr class="memdesc:a7b2872207d45871fcbcfa01e216090dd"><td class="mdescLeft">&#160;</td><td class="mdescRight">Compute the path to follow.  <a href="#a7b2872207d45871fcbcfa01e216090dd">More...</a><br /></td></tr>
<tr class="separator:a7b2872207d45871fcbcfa01e216090dd"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="inherit_header pub_methods_a01036"><td colspan="2" onclick="javascript:toggleInherit('pub_methods_a01036')"><img src="../../closed.png" alt="-"/>&#160;Public Member Functions inherited from <a class="el" href="../../d8/d79/a01036.php">mcd::Pathfinding</a></td></tr>
<tr class="memitem:aca54568ec2e832b3f08ef6f86c7184f2 inherit pub_methods_a01036"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d8/d79/a01036.php#aca54568ec2e832b3f08ef6f86c7184f2">Pathfinding</a> (const <a class="el" href="../../d5/de7/a01048.php">PathfindingProblem</a> &amp;problem, const <a class="el" href="../../db/d08/a01028.php">PathfindingNode</a> &amp;start, const <a class="el" href="../../db/d08/a01028.php">PathfindingNode</a> &amp;end)</td></tr>
<tr class="memdesc:aca54568ec2e832b3f08ef6f86c7184f2 inherit pub_methods_a01036"><td class="mdescLeft">&#160;</td><td class="mdescRight">The constructor of the class.  <a href="../../d8/d79/a01036.php#aca54568ec2e832b3f08ef6f86c7184f2">More...</a><br /></td></tr>
<tr class="separator:aca54568ec2e832b3f08ef6f86c7184f2 inherit pub_methods_a01036"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a4cb06bc7729ad6371ad3380e0fd54f51 inherit pub_methods_a01036"><td class="memItemLeft" align="right" valign="top">virtual&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d8/d79/a01036.php#a4cb06bc7729ad6371ad3380e0fd54f51">~Pathfinding</a> ()</td></tr>
<tr class="separator:a4cb06bc7729ad6371ad3380e0fd54f51 inherit pub_methods_a01036"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ac59e95d415c520941c5bac355537df7f inherit pub_methods_a01036"><td class="memItemLeft" align="right" valign="top"><a class="el" href="../../df/d89/a01032.php">Path</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d8/d79/a01036.php#ac59e95d415c520941c5bac355537df7f">getPath</a> ()</td></tr>
<tr class="memdesc:ac59e95d415c520941c5bac355537df7f inherit pub_methods_a01036"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the path to follow.  <a href="../../d8/d79/a01036.php#ac59e95d415c520941c5bac355537df7f">More...</a><br /></td></tr>
<tr class="separator:ac59e95d415c520941c5bac355537df7f inherit pub_methods_a01036"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="inherited"></a>
Additional Inherited Members</h2></td></tr>
<tr class="inherit_header pro_attribs_a01036"><td colspan="2" onclick="javascript:toggleInherit('pro_attribs_a01036')"><img src="../../closed.png" alt="-"/>&#160;Protected Attributes inherited from <a class="el" href="../../d8/d79/a01036.php">mcd::Pathfinding</a></td></tr>
<tr class="memitem:a8432f285b7015512efbe0a9a47bc76d7 inherit pro_attribs_a01036"><td class="memItemLeft" align="right" valign="top"><a class="el" href="../../d5/de7/a01048.php">PathfindingProblem</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d8/d79/a01036.php#a8432f285b7015512efbe0a9a47bc76d7">_problem</a></td></tr>
<tr class="separator:a8432f285b7015512efbe0a9a47bc76d7 inherit pro_attribs_a01036"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a6fc13e2aa513059f91865021b9b13eed inherit pro_attribs_a01036"><td class="memItemLeft" align="right" valign="top"><a class="el" href="../../db/d08/a01028.php">PathfindingNode</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d8/d79/a01036.php#a6fc13e2aa513059f91865021b9b13eed">_start</a></td></tr>
<tr class="separator:a6fc13e2aa513059f91865021b9b13eed inherit pro_attribs_a01036"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a6f42595f214b1d2328d40c7fcf371626 inherit pro_attribs_a01036"><td class="memItemLeft" align="right" valign="top"><a class="el" href="../../db/d08/a01028.php">PathfindingNode</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d8/d79/a01036.php#a6f42595f214b1d2328d40c7fcf371626">_end</a></td></tr>
<tr class="separator:a6f42595f214b1d2328d40c7fcf371626 inherit pro_attribs_a01036"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:afa7ec4aec9e8ed4aba2c3110ca86273f inherit pro_attribs_a01036"><td class="memItemLeft" align="right" valign="top"><a class="el" href="../../df/d89/a01032.php">Path</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d8/d79/a01036.php#afa7ec4aec9e8ed4aba2c3110ca86273f">_path</a></td></tr>
<tr class="separator:afa7ec4aec9e8ed4aba2c3110ca86273f inherit pro_attribs_a01036"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>An implementation of the Dijkstra algorithm. </p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a id="a8e8246fb84c8dd3bf9e522f3fca7b39e"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a8e8246fb84c8dd3bf9e522f3fca7b39e">&#9670;&nbsp;</a></span>PathfindingDijkstra()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">mcd::PathfindingDijkstra::PathfindingDijkstra </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="../../d5/de7/a01048.php">PathfindingProblem</a> &amp;&#160;</td>
          <td class="paramname"><em>problem</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="../../db/d08/a01028.php">PathfindingNode</a> &amp;&#160;</td>
          <td class="paramname"><em>start</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="../../db/d08/a01028.php">PathfindingNode</a> &amp;&#160;</td>
          <td class="paramname"><em>end</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>The constructor of the class. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">problem</td><td>The problem to solve </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">start</td><td>The start point index </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">end</td><td>The end point index </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a id="aae9b7cf4f57d826b9f7e65d9410b572e"></a>
<h2 class="memtitle"><span class="permalink"><a href="#aae9b7cf4f57d826b9f7e65d9410b572e">&#9670;&nbsp;</a></span>~PathfindingDijkstra()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual mcd::PathfindingDijkstra::~PathfindingDijkstra </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">virtual</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a id="a7b2872207d45871fcbcfa01e216090dd"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a7b2872207d45871fcbcfa01e216090dd">&#9670;&nbsp;</a></span>createPath()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual <a class="el" href="../../df/d89/a01032.php">Path</a> mcd::PathfindingDijkstra::createPath </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">override</span><span class="mlabel">virtual</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Compute the path to follow. </p>

<p>Implements <a class="el" href="../../d8/d79/a01036.php#a9a82c779fba2fba8d5adbd1c22ea8c0d">mcd::Pathfinding</a>.</p>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="../../d6/d7d/a00161.php">PathfindingDijkstra.hpp</a></li>
</ul>
</div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../da/d2e/a00238.php">mcd</a></li><li class="navelem"><a class="el" href="../../db/d14/a01040.php">PathfindingDijkstra</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
