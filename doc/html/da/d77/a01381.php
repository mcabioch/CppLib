<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.20"/>
		<title>C++: mcd::PathfindingProblem Class Reference</title>
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
									&#160;<span id="projectnumber">1.6.1.1</span>
								</div>
								<div id="projectbrief">My own C++ features</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<?php
				$text = "Generated on Sun Nov 15 2020 19:05:49 for C++ by";
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
$(document).ready(function(){initNavTree('da/d77/a01381.php','../../'); initResizable(); });
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
<a href="#pub-attribs">Public Attributes</a> &#124;
<a href="../../db/d74/a01378.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">mcd::PathfindingProblem Class Reference</div>  </div>
</div><!--header-->
<div class="contents">

<p>A class to group every pathfinding problems in one way to use it.  
 <a href="../../da/d77/a01381.php#details">More...</a></p>

<p><code>#include &lt;PathfindingProblem.hpp&gt;</code></p>
<div class="dynheader">
Collaboration diagram for mcd::PathfindingProblem:</div>
<div class="dyncontent">
<div class="center"><img src="../../d0/d9b/a01379.png" border="0" usemap="#amcd_1_1PathfindingProblem_coll__map" alt="Collaboration graph"/></div>
<map name="mcd_1_1PathfindingProblem_coll__map" id="mcd_1_1PathfindingProblem_coll__map">
<area shape="rect" title="A class to group every pathfinding problems in one way to use it." alt="" coords="812,78,980,105"/>
<area shape="rect" title=" " alt="" coords="525,5,683,47"/>
<area shape="rect" title="STL class." alt="" coords="163,58,286,85"/>
<area shape="rect" title=" " alt="" coords="505,71,703,112"/>
<area shape="rect" title=" " alt="" coords="5,39,44,66"/>
<area shape="rect" title=" " alt="" coords="5,110,44,137"/>
<area shape="rect" title="STL class." alt="" coords="167,130,283,157"/>
<area shape="rect" title=" " alt="" coords="507,136,701,177"/>
<area shape="rect" href="../../d2/d1f/a01361.php" title="A node for the path." alt="" coords="149,181,300,207"/>
</map>
<center><span class="legend">[<a target="top" href="../../graph_legend.php">legend</a>]</span></center></div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:af2aa5f359715262ae600422bb49e79af"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../da/d77/a01381.php#af2aa5f359715262ae600422bb49e79af">PathfindingProblem</a> (std::vector&lt; <a class="el" href="../../d2/d1f/a01361.php">PathfindingNode</a> &gt; <a class="el" href="../../da/d77/a01381.php#a32f76a1b0a2107e3468ff49fd398b0ae">nodes</a>, std::map&lt; size_t, std::map&lt; size_t, <a class="el" href="../../db/d12/a00268.php#adda27badcbfcfc854854c6ab094cf34e">double64_t</a> &gt; &gt; <a class="el" href="../../da/d77/a01381.php#a099eeefd81c8fcb6b145679e4e7fb65c">distances</a>)</td></tr>
<tr class="memdesc:af2aa5f359715262ae600422bb49e79af"><td class="mdescLeft">&#160;</td><td class="mdescRight">The constructor of the class.  <a href="../../da/d77/a01381.php#af2aa5f359715262ae600422bb49e79af">More...</a><br /></td></tr>
<tr class="separator:af2aa5f359715262ae600422bb49e79af"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a7b56ebc82f1c77cbe1a6e2d6f8f6c3b0"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../da/d77/a01381.php#a7b56ebc82f1c77cbe1a6e2d6f8f6c3b0">PathfindingProblem</a> (std::vector&lt; <a class="el" href="../../d2/d1f/a01361.php">PathfindingNode</a> &gt; <a class="el" href="../../da/d77/a01381.php#a32f76a1b0a2107e3468ff49fd398b0ae">nodes</a>, std::map&lt; size_t, std::map&lt; size_t, <a class="el" href="../../db/d12/a00268.php#adda27badcbfcfc854854c6ab094cf34e">double64_t</a> &gt; &gt; <a class="el" href="../../da/d77/a01381.php#a099eeefd81c8fcb6b145679e4e7fb65c">distances</a>, std::map&lt; size_t, std::map&lt; size_t, <a class="el" href="../../db/d12/a00268.php#adda27badcbfcfc854854c6ab094cf34e">double64_t</a> &gt; &gt; <a class="el" href="../../da/d77/a01381.php#a99cf4dedc5270b2ffc388dd771f4564a">weights</a>)</td></tr>
<tr class="separator:a7b56ebc82f1c77cbe1a6e2d6f8f6c3b0"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a0bf356ad792ba79df121cedf0501f6f1"><td class="memItemLeft" align="right" valign="top">virtual&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../da/d77/a01381.php#a0bf356ad792ba79df121cedf0501f6f1">~PathfindingProblem</a> ()</td></tr>
<tr class="separator:a0bf356ad792ba79df121cedf0501f6f1"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-attribs"></a>
Public Attributes</h2></td></tr>
<tr class="memitem:a32f76a1b0a2107e3468ff49fd398b0ae"><td class="memItemLeft" align="right" valign="top">std::vector&lt; <a class="el" href="../../d2/d1f/a01361.php">PathfindingNode</a> &gt;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../da/d77/a01381.php#a32f76a1b0a2107e3468ff49fd398b0ae">nodes</a></td></tr>
<tr class="separator:a32f76a1b0a2107e3468ff49fd398b0ae"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a87c634685eea28780ddc10b7aa08af07"><td class="memItemLeft" align="right" valign="top">size_t&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../da/d77/a01381.php#a87c634685eea28780ddc10b7aa08af07">nbNodes</a></td></tr>
<tr class="separator:a87c634685eea28780ddc10b7aa08af07"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a099eeefd81c8fcb6b145679e4e7fb65c"><td class="memItemLeft" align="right" valign="top">std::map&lt; size_t, std::map&lt; size_t, <a class="el" href="../../db/d12/a00268.php#adda27badcbfcfc854854c6ab094cf34e">double64_t</a> &gt; &gt;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../da/d77/a01381.php#a099eeefd81c8fcb6b145679e4e7fb65c">distances</a></td></tr>
<tr class="separator:a099eeefd81c8fcb6b145679e4e7fb65c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a99cf4dedc5270b2ffc388dd771f4564a"><td class="memItemLeft" align="right" valign="top">std::map&lt; size_t, std::map&lt; size_t, <a class="el" href="../../db/d12/a00268.php#adda27badcbfcfc854854c6ab094cf34e">double64_t</a> &gt; &gt;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../da/d77/a01381.php#a99cf4dedc5270b2ffc388dd771f4564a">weights</a></td></tr>
<tr class="separator:a99cf4dedc5270b2ffc388dd771f4564a"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a058cdcc45ae37d3932b328594455c34f"><td class="memItemLeft" align="right" valign="top">std::map&lt; size_t, std::map&lt; size_t, bool &gt; &gt;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../da/d77/a01381.php#a058cdcc45ae37d3932b328594455c34f">computed</a></td></tr>
<tr class="separator:a058cdcc45ae37d3932b328594455c34f"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>A class to group every pathfinding problems in one way to use it. </p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a id="af2aa5f359715262ae600422bb49e79af"></a>
<h2 class="memtitle"><span class="permalink"><a href="#af2aa5f359715262ae600422bb49e79af">&#9670;&nbsp;</a></span>PathfindingProblem() <span class="overload">[1/2]</span></h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">mcd::PathfindingProblem::PathfindingProblem </td>
          <td>(</td>
          <td class="paramtype">std::vector&lt; <a class="el" href="../../d2/d1f/a01361.php">PathfindingNode</a> &gt;&#160;</td>
          <td class="paramname"><em>nodes</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">std::map&lt; size_t, std::map&lt; size_t, <a class="el" href="../../db/d12/a00268.php#adda27badcbfcfc854854c6ab094cf34e">double64_t</a> &gt; &gt;&#160;</td>
          <td class="paramname"><em>distances</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>The constructor of the class. </p>

</div>
</div>
<a id="a7b56ebc82f1c77cbe1a6e2d6f8f6c3b0"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a7b56ebc82f1c77cbe1a6e2d6f8f6c3b0">&#9670;&nbsp;</a></span>PathfindingProblem() <span class="overload">[2/2]</span></h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">mcd::PathfindingProblem::PathfindingProblem </td>
          <td>(</td>
          <td class="paramtype">std::vector&lt; <a class="el" href="../../d2/d1f/a01361.php">PathfindingNode</a> &gt;&#160;</td>
          <td class="paramname"><em>nodes</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">std::map&lt; size_t, std::map&lt; size_t, <a class="el" href="../../db/d12/a00268.php#adda27badcbfcfc854854c6ab094cf34e">double64_t</a> &gt; &gt;&#160;</td>
          <td class="paramname"><em>distances</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">std::map&lt; size_t, std::map&lt; size_t, <a class="el" href="../../db/d12/a00268.php#adda27badcbfcfc854854c6ab094cf34e">double64_t</a> &gt; &gt;&#160;</td>
          <td class="paramname"><em>weights</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a id="a0bf356ad792ba79df121cedf0501f6f1"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a0bf356ad792ba79df121cedf0501f6f1">&#9670;&nbsp;</a></span>~PathfindingProblem()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual mcd::PathfindingProblem::~PathfindingProblem </td>
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
<h2 class="groupheader">Member Data Documentation</h2>
<a id="a058cdcc45ae37d3932b328594455c34f"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a058cdcc45ae37d3932b328594455c34f">&#9670;&nbsp;</a></span>computed</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">std::map&lt; size_t, std::map&lt; size_t, bool &gt; &gt; mcd::PathfindingProblem::computed</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a id="a099eeefd81c8fcb6b145679e4e7fb65c"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a099eeefd81c8fcb6b145679e4e7fb65c">&#9670;&nbsp;</a></span>distances</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">std::map&lt; size_t, std::map&lt; size_t, <a class="el" href="../../db/d12/a00268.php#adda27badcbfcfc854854c6ab094cf34e">double64_t</a> &gt; &gt; mcd::PathfindingProblem::distances</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a id="a87c634685eea28780ddc10b7aa08af07"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a87c634685eea28780ddc10b7aa08af07">&#9670;&nbsp;</a></span>nbNodes</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">size_t mcd::PathfindingProblem::nbNodes</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a id="a32f76a1b0a2107e3468ff49fd398b0ae"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a32f76a1b0a2107e3468ff49fd398b0ae">&#9670;&nbsp;</a></span>nodes</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">std::vector&lt; <a class="el" href="../../d2/d1f/a01361.php">PathfindingNode</a> &gt; mcd::PathfindingProblem::nodes</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a id="a99cf4dedc5270b2ffc388dd771f4564a"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a99cf4dedc5270b2ffc388dd771f4564a">&#9670;&nbsp;</a></span>weights</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">std::map&lt; size_t, std::map&lt; size_t, <a class="el" href="../../db/d12/a00268.php#adda27badcbfcfc854854c6ab094cf34e">double64_t</a> &gt; &gt; mcd::PathfindingProblem::weights</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="../../dc/d57/a00194.php">PathfindingProblem.hpp</a></li>
</ul>
</div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../db/d12/a00268.php">mcd</a></li><li class="navelem"><a class="el" href="../../da/d77/a01381.php">PathfindingProblem</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
