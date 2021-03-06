<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.20"/>
		<title>C++: mcd::Pathfinding Class Reference</title>
		<link href="../../tabs.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="../../jquery.js"></script>
		<script type="text/javascript" src="../../dynsections.js"></script>
		<link href="../../navtree.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="../../resize.js"></script>
<script type="text/javascript" src="../../navtreedata.js"></script>
<script type="text/javascript" src="../../navtree.js"></script>
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
									&#160;<span id="projectnumber">1.6.3.0</span>
								</div>
								<div id="projectbrief">My own C++ features</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<?php
				$text = "Generated on Wed Nov 18 2020 14:47:41 for C++ by";
				$text = substr($text, 0, sizeof($text) - 4);
				$tmp = substr($text, 17);
				$tmp = substr($tmp, 0, strpos($tmp, " for"));
				$lastModif = date("l jS \of F Y \a\\t H:i:s", strtotime($tmp));
			?>
		<!-- end header part -->
<!-- Generated by Doxygen 1.8.20 -->
<script type="text/javascript">
/* @license magnet:?xt=urn:btih:cf05388f2679ee054f2beb29a391d25f4e673ac3&amp;dn=gpl-2.0.txt GPL-v2 */
var searchBox = new SearchBox("searchBox", "../../search",false,'Search');
/* @license-end */
</script>
<script type="text/javascript" src="../../menudata.js"></script>
<script type="text/javascript" src="../../menu.js"></script>
<script type="text/javascript">
/* @license magnet:?xt=urn:btih:cf05388f2679ee054f2beb29a391d25f4e673ac3&amp;dn=gpl-2.0.txt GPL-v2 */
$(function() {
  initMenu('../../',true,false,'search.php','Search');
  $(document).ready(function() { init_search(); });
});
/* @license-end */</script>
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
/* @license magnet:?xt=urn:btih:cf05388f2679ee054f2beb29a391d25f4e673ac3&amp;dn=gpl-2.0.txt GPL-v2 */
$(document).ready(function(){initNavTree('d6/d4d/a01371.php','../../'); initResizable(); });
/* @license-end */
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
<a href="#pro-attribs">Protected Attributes</a> &#124;
<a href="../../dd/d0c/a01368.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">mcd::Pathfinding Class Reference<span class="mlabels"><span class="mlabel">abstract</span></span></div>  </div>
</div><!--header-->
<div class="contents">

<p>A class to implement some pathfinding algorithms.  
 <a href="../../d6/d4d/a01371.php#details">More...</a></p>

<p><code>#include &lt;Pathfinding.hpp&gt;</code></p>
<div class="dynheader">
Inheritance diagram for mcd::Pathfinding:</div>
<div class="dyncontent">
<div class="center"><img src="../../d8/dbe/a01370.png" border="0" usemap="#amcd_1_1Pathfinding_inherit__map" alt="Inheritance graph"/></div>
<map name="mcd_1_1Pathfinding_inherit__map" id="mcd_1_1Pathfinding_inherit__map">
<area shape="rect" title="A class to implement some pathfinding algorithms." alt="" coords="28,5,148,32"/>
<area shape="rect" href="../../d5/df5/a01375.php" title="An implementation of the Dijkstra algorithm." alt="" coords="5,80,171,107"/>
</map>
<center><span class="legend">[<a target="top" href="../../graph_legend.php">legend</a>]</span></center></div>
<div class="dynheader">
Collaboration diagram for mcd::Pathfinding:</div>
<div class="dyncontent">
<div class="center"><img src="../../d1/d17/a01369.png" border="0" usemap="#amcd_1_1Pathfinding_coll__map" alt="Collaboration graph"/></div>
<map name="mcd_1_1Pathfinding_coll__map" id="mcd_1_1Pathfinding_coll__map">
<area shape="rect" title="A class to implement some pathfinding algorithms." alt="" coords="1107,64,1227,91"/>
<area shape="rect" href="../../dd/d86/a01367.php" title="A class to manage a path computed by the map." alt="" coords="727,5,809,32"/>
<area shape="rect" href="../../dd/d8b/a01363.php" title="A node for the path." alt="" coords="149,64,300,91"/>
<area shape="rect" title=" " alt="" coords="507,126,701,167"/>
<area shape="rect" href="../../de/dfe/a01383.php" title="A class to group every pathfinding problems in one way to use it." alt="" coords="833,167,1001,193"/>
<area shape="rect" title=" " alt="" coords="525,257,683,298"/>
<area shape="rect" title="STL class." alt="" coords="163,220,286,247"/>
<area shape="rect" title=" " alt="" coords="505,191,703,233"/>
<area shape="rect" title=" " alt="" coords="5,235,44,261"/>
<area shape="rect" title=" " alt="" coords="5,164,44,191"/>
<area shape="rect" title="STL class." alt="" coords="167,144,283,171"/>
</map>
<center><span class="legend">[<a target="top" href="../../graph_legend.php">legend</a>]</span></center></div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:aca54568ec2e832b3f08ef6f86c7184f2"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d6/d4d/a01371.php#aca54568ec2e832b3f08ef6f86c7184f2">Pathfinding</a> (const <a class="el" href="../../de/dfe/a01383.php">PathfindingProblem</a> &amp;problem, const <a class="el" href="../../dd/d8b/a01363.php">PathfindingNode</a> &amp;start, const <a class="el" href="../../dd/d8b/a01363.php">PathfindingNode</a> &amp;end)</td></tr>
<tr class="memdesc:aca54568ec2e832b3f08ef6f86c7184f2"><td class="mdescLeft">&#160;</td><td class="mdescRight">The constructor of the class.  <a href="../../d6/d4d/a01371.php#aca54568ec2e832b3f08ef6f86c7184f2">More...</a><br /></td></tr>
<tr class="separator:aca54568ec2e832b3f08ef6f86c7184f2"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a4cb06bc7729ad6371ad3380e0fd54f51"><td class="memItemLeft" align="right" valign="top">virtual&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d6/d4d/a01371.php#a4cb06bc7729ad6371ad3380e0fd54f51">~Pathfinding</a> ()</td></tr>
<tr class="separator:a4cb06bc7729ad6371ad3380e0fd54f51"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ac59e95d415c520941c5bac355537df7f"><td class="memItemLeft" align="right" valign="top"><a class="el" href="../../dd/d86/a01367.php">Path</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d6/d4d/a01371.php#ac59e95d415c520941c5bac355537df7f">getPath</a> ()</td></tr>
<tr class="memdesc:ac59e95d415c520941c5bac355537df7f"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the path to follow.  <a href="../../d6/d4d/a01371.php#ac59e95d415c520941c5bac355537df7f">More...</a><br /></td></tr>
<tr class="separator:ac59e95d415c520941c5bac355537df7f"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a9a82c779fba2fba8d5adbd1c22ea8c0d"><td class="memItemLeft" align="right" valign="top">virtual <a class="el" href="../../dd/d86/a01367.php">Path</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d6/d4d/a01371.php#a9a82c779fba2fba8d5adbd1c22ea8c0d">createPath</a> ()=0</td></tr>
<tr class="memdesc:a9a82c779fba2fba8d5adbd1c22ea8c0d"><td class="mdescLeft">&#160;</td><td class="mdescRight">Compute the path to follow.  <a href="../../d6/d4d/a01371.php#a9a82c779fba2fba8d5adbd1c22ea8c0d">More...</a><br /></td></tr>
<tr class="separator:a9a82c779fba2fba8d5adbd1c22ea8c0d"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pro-attribs"></a>
Protected Attributes</h2></td></tr>
<tr class="memitem:a8432f285b7015512efbe0a9a47bc76d7"><td class="memItemLeft" align="right" valign="top"><a class="el" href="../../de/dfe/a01383.php">PathfindingProblem</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d6/d4d/a01371.php#a8432f285b7015512efbe0a9a47bc76d7">_problem</a></td></tr>
<tr class="separator:a8432f285b7015512efbe0a9a47bc76d7"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a6fc13e2aa513059f91865021b9b13eed"><td class="memItemLeft" align="right" valign="top"><a class="el" href="../../dd/d8b/a01363.php">PathfindingNode</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d6/d4d/a01371.php#a6fc13e2aa513059f91865021b9b13eed">_start</a></td></tr>
<tr class="separator:a6fc13e2aa513059f91865021b9b13eed"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a6f42595f214b1d2328d40c7fcf371626"><td class="memItemLeft" align="right" valign="top"><a class="el" href="../../dd/d8b/a01363.php">PathfindingNode</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d6/d4d/a01371.php#a6f42595f214b1d2328d40c7fcf371626">_end</a></td></tr>
<tr class="separator:a6f42595f214b1d2328d40c7fcf371626"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:afa7ec4aec9e8ed4aba2c3110ca86273f"><td class="memItemLeft" align="right" valign="top"><a class="el" href="../../dd/d86/a01367.php">Path</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d6/d4d/a01371.php#afa7ec4aec9e8ed4aba2c3110ca86273f">_path</a></td></tr>
<tr class="separator:afa7ec4aec9e8ed4aba2c3110ca86273f"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>A class to implement some pathfinding algorithms. </p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a id="aca54568ec2e832b3f08ef6f86c7184f2"></a>
<h2 class="memtitle"><span class="permalink"><a href="#aca54568ec2e832b3f08ef6f86c7184f2">&#9670;&nbsp;</a></span>Pathfinding()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">mcd::Pathfinding::Pathfinding </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="../../de/dfe/a01383.php">PathfindingProblem</a> &amp;&#160;</td>
          <td class="paramname"><em>problem</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="../../dd/d8b/a01363.php">PathfindingNode</a> &amp;&#160;</td>
          <td class="paramname"><em>start</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="../../dd/d8b/a01363.php">PathfindingNode</a> &amp;&#160;</td>
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
<a id="a4cb06bc7729ad6371ad3380e0fd54f51"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a4cb06bc7729ad6371ad3380e0fd54f51">&#9670;&nbsp;</a></span>~Pathfinding()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual mcd::Pathfinding::~Pathfinding </td>
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
<a id="a9a82c779fba2fba8d5adbd1c22ea8c0d"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a9a82c779fba2fba8d5adbd1c22ea8c0d">&#9670;&nbsp;</a></span>createPath()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual <a class="el" href="../../dd/d86/a01367.php">Path</a> mcd::Pathfinding::createPath </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">pure virtual</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Compute the path to follow. </p>

<p>Implemented in <a class="el" href="../../d5/df5/a01375.php#a7b2872207d45871fcbcfa01e216090dd">mcd::PathfindingDijkstra</a>.</p>

</div>
</div>
<a id="ac59e95d415c520941c5bac355537df7f"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ac59e95d415c520941c5bac355537df7f">&#9670;&nbsp;</a></span>getPath()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="../../dd/d86/a01367.php">Path</a> mcd::Pathfinding::getPath </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Return the path to follow. </p>
<div class="dynheader">
Here is the call graph for this function:</div>
<div class="dyncontent">
<div class="center"><img src="../../d6/d4d/a01371_ac59e95d415c520941c5bac355537df7f_cgraph.png" border="0" usemap="#ad6/d4d/a01371_ac59e95d415c520941c5bac355537df7f_cgraph" alt=""/></div>
<map name="d6/d4d/a01371_ac59e95d415c520941c5bac355537df7f_cgraph" id="d6/d4d/a01371_ac59e95d415c520941c5bac355537df7f_cgraph">
<area shape="rect" title="Return the path to follow." alt="" coords="5,5,179,32"/>
<area shape="rect" href="../../d6/d4d/a01371.php#a9a82c779fba2fba8d5adbd1c22ea8c0d" title="Compute the path to follow." alt="" coords="227,5,417,32"/>
</map>
</div>

</div>
</div>
<h2 class="groupheader">Member Data Documentation</h2>
<a id="a6f42595f214b1d2328d40c7fcf371626"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a6f42595f214b1d2328d40c7fcf371626">&#9670;&nbsp;</a></span>_end</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="../../dd/d8b/a01363.php">PathfindingNode</a> mcd::Pathfinding::_end</td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">protected</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

</div>
</div>
<a id="afa7ec4aec9e8ed4aba2c3110ca86273f"></a>
<h2 class="memtitle"><span class="permalink"><a href="#afa7ec4aec9e8ed4aba2c3110ca86273f">&#9670;&nbsp;</a></span>_path</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="../../dd/d86/a01367.php">Path</a> mcd::Pathfinding::_path</td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">protected</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

</div>
</div>
<a id="a8432f285b7015512efbe0a9a47bc76d7"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a8432f285b7015512efbe0a9a47bc76d7">&#9670;&nbsp;</a></span>_problem</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="../../de/dfe/a01383.php">PathfindingProblem</a> mcd::Pathfinding::_problem</td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">protected</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

</div>
</div>
<a id="a6fc13e2aa513059f91865021b9b13eed"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a6fc13e2aa513059f91865021b9b13eed">&#9670;&nbsp;</a></span>_start</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="../../dd/d8b/a01363.php">PathfindingNode</a> mcd::Pathfinding::_start</td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">protected</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="../../d7/d25/a00182.php">Pathfinding.hpp</a></li>
</ul>
</div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../db/d12/a00268.php">mcd</a></li><li class="navelem"><a class="el" href="../../d6/d4d/a01371.php">Pathfinding</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
