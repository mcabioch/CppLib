<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.13"/>
		<title>C++: mcd::ConsoleCursor Class Reference</title>
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
				$text = "Generated on Fri Oct 4 2019 16:27:33 for C++ by";
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
$(document).ready(function(){initNavTree('d3/d8a/a00899.php','../../');});
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
<a href="#pub-static-methods">Static Public Member Functions</a> &#124;
<a href="../../da/dd6/a00896.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">mcd::ConsoleCursor Class Reference</div>  </div>
</div><!--header-->
<div class="contents">

<p>A class to play with the cursor in the console.  
 <a href="../../d3/d8a/a00899.php#details">More...</a></p>

<p><code>#include &lt;console.hpp&gt;</code></p>
<div class="dynheader">
Inheritance diagram for mcd::ConsoleCursor:</div>
<div class="dyncontent">
<div class="center"><img src="../../d2/d79/a00898.png" border="0" usemap="#mcd_1_1ConsoleCursor_inherit__map" alt="Inheritance graph"/></div>
<map name="mcd_1_1ConsoleCursor_inherit__map" id="mcd_1_1ConsoleCursor_inherit__map">
<area shape="rect" id="node2" href="../../db/dbb/a01047.php" title="A class to make some other to be abstract class. " alt="" coords="17,5,136,32"/>
</map>
<center><span class="legend">[<a target="top" href="../../graph_legend.php">legend</a>]</span></center></div>
<div class="dynheader">
Collaboration diagram for mcd::ConsoleCursor:</div>
<div class="dyncontent">
<div class="center"><img src="../../de/d01/a00897.png" border="0" usemap="#mcd_1_1ConsoleCursor_coll__map" alt="Collaboration graph"/></div>
<map name="mcd_1_1ConsoleCursor_coll__map" id="mcd_1_1ConsoleCursor_coll__map">
<area shape="rect" id="node2" href="../../db/dbb/a01047.php" title="A class to make some other to be abstract class. " alt="" coords="17,5,136,32"/>
</map>
<center><span class="legend">[<a target="top" href="../../graph_legend.php">legend</a>]</span></center></div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-static-methods"></a>
Static Public Member Functions</h2></td></tr>
<tr class="memitem:a191575f00626575e84455dfae871f502"><td class="memTemplParams" colspan="2">template&lt;typename T &gt; </td></tr>
<tr class="memitem:a191575f00626575e84455dfae871f502"><td class="memTemplItemLeft" align="right" valign="top">static void&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d3/d8a/a00899.php#a191575f00626575e84455dfae871f502">goTo</a> (T x, T y)</td></tr>
<tr class="memdesc:a191575f00626575e84455dfae871f502"><td class="mdescLeft">&#160;</td><td class="mdescRight">Go to an x/y position.  <a href="#a191575f00626575e84455dfae871f502">More...</a><br /></td></tr>
<tr class="separator:a191575f00626575e84455dfae871f502"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ab58627fbfed0b6cabd5030943113e5e5"><td class="memItemLeft" align="right" valign="top">static void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d3/d8a/a00899.php#ab58627fbfed0b6cabd5030943113e5e5">save</a> ()</td></tr>
<tr class="memdesc:ab58627fbfed0b6cabd5030943113e5e5"><td class="mdescLeft">&#160;</td><td class="mdescRight">Save the actual cursor position.  <a href="#ab58627fbfed0b6cabd5030943113e5e5">More...</a><br /></td></tr>
<tr class="separator:ab58627fbfed0b6cabd5030943113e5e5"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a6f731b973f917b6c2f3a04267f12c851"><td class="memItemLeft" align="right" valign="top">static void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d3/d8a/a00899.php#a6f731b973f917b6c2f3a04267f12c851">restore</a> ()</td></tr>
<tr class="memdesc:a6f731b973f917b6c2f3a04267f12c851"><td class="mdescLeft">&#160;</td><td class="mdescRight">Restore the cursor's saved position.  <a href="#a6f731b973f917b6c2f3a04267f12c851">More...</a><br /></td></tr>
<tr class="separator:a6f731b973f917b6c2f3a04267f12c851"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a75615abf8f124c460b9b163868c89b7e"><td class="memItemLeft" align="right" valign="top">static void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d3/d8a/a00899.php#a75615abf8f124c460b9b163868c89b7e">home</a> ()</td></tr>
<tr class="memdesc:a75615abf8f124c460b9b163868c89b7e"><td class="mdescLeft">&#160;</td><td class="mdescRight">Alias for the restore member.  <a href="#a75615abf8f124c460b9b163868c89b7e">More...</a><br /></td></tr>
<tr class="separator:a75615abf8f124c460b9b163868c89b7e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a2ca0b4e7146c9b27b2396c2ba114c923"><td class="memTemplParams" colspan="2">template&lt;typename T &gt; </td></tr>
<tr class="memitem:a2ca0b4e7146c9b27b2396c2ba114c923"><td class="memTemplItemLeft" align="right" valign="top">static void&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d3/d8a/a00899.php#a2ca0b4e7146c9b27b2396c2ba114c923">put</a> (const std::string &amp;str, T x, T y, const <a class="el" href="../../d7/d92/a00887.php">Color</a> &amp;color=0)</td></tr>
<tr class="memdesc:a2ca0b4e7146c9b27b2396c2ba114c923"><td class="mdescLeft">&#160;</td><td class="mdescRight">Write something to the given position.  <a href="#a2ca0b4e7146c9b27b2396c2ba114c923">More...</a><br /></td></tr>
<tr class="separator:a2ca0b4e7146c9b27b2396c2ba114c923"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="inherited"></a>
Additional Inherited Members</h2></td></tr>
<tr class="inherit_header pub_methods_a01047"><td colspan="2" onclick="javascript:toggleInherit('pub_methods_a01047')"><img src="../../closed.png" alt="-"/>&#160;Public Member Functions inherited from <a class="el" href="../../db/dbb/a01047.php">mcd::PureVirtual</a></td></tr>
<tr class="memitem:ab67f25d69c1686f95be6fbfcc4ac4663 inherit pub_methods_a01047"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/dbb/a01047.php#ab67f25d69c1686f95be6fbfcc4ac4663">PureVirtual</a> ()</td></tr>
<tr class="memdesc:ab67f25d69c1686f95be6fbfcc4ac4663 inherit pub_methods_a01047"><td class="mdescLeft">&#160;</td><td class="mdescRight">The constructor of the class.  <a href="../../db/dbb/a01047.php#ab67f25d69c1686f95be6fbfcc4ac4663">More...</a><br /></td></tr>
<tr class="separator:ab67f25d69c1686f95be6fbfcc4ac4663 inherit pub_methods_a01047"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:acb8cb10e007f7c5f6ac757843a212598 inherit pub_methods_a01047"><td class="memItemLeft" align="right" valign="top">virtual&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/dbb/a01047.php#acb8cb10e007f7c5f6ac757843a212598">~PureVirtual</a> ()</td></tr>
<tr class="separator:acb8cb10e007f7c5f6ac757843a212598 inherit pub_methods_a01047"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a1885fa694cc2d28cb55186fb3b53615d inherit pub_methods_a01047"><td class="memItemLeft" align="right" valign="top">virtual void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/dbb/a01047.php#a1885fa694cc2d28cb55186fb3b53615d">PureVirtualMethod</a> () final=0</td></tr>
<tr class="separator:a1885fa694cc2d28cb55186fb3b53615d inherit pub_methods_a01047"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>A class to play with the cursor in the console. </p>
<p>This class allow you to move, save and restore the cursor position </p>
</div><h2 class="groupheader">Member Function Documentation</h2>
<a id="a191575f00626575e84455dfae871f502"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a191575f00626575e84455dfae871f502">&#9670;&nbsp;</a></span>goTo()</h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static void mcd::ConsoleCursor::goTo </td>
          <td>(</td>
          <td class="paramtype">T&#160;</td>
          <td class="paramname"><em>x</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">T&#160;</td>
          <td class="paramname"><em>y</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Go to an x/y position. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">x</td><td>The x position </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">y</td><td>The y position</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>void </dd></dl>

</div>
</div>
<a id="a75615abf8f124c460b9b163868c89b7e"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a75615abf8f124c460b9b163868c89b7e">&#9670;&nbsp;</a></span>home()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static void mcd::ConsoleCursor::home </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Alias for the restore member. </p>
<dl class="section return"><dt>Returns</dt><dd>void </dd></dl>

</div>
</div>
<a id="a2ca0b4e7146c9b27b2396c2ba114c923"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a2ca0b4e7146c9b27b2396c2ba114c923">&#9670;&nbsp;</a></span>put()</h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static void mcd::ConsoleCursor::put </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>str</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">T&#160;</td>
          <td class="paramname"><em>x</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">T&#160;</td>
          <td class="paramname"><em>y</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="../../d7/d92/a00887.php">Color</a> &amp;&#160;</td>
          <td class="paramname"><em>color</em> = <code>0</code>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Write something to the given position. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">str</td><td>The string to put in the ostream </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">x</td><td>The x position of the string </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">y</td><td>The y position of the string </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">color</td><td>The color of the string </td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>void </dd></dl>
<div class="dynheader">
Here is the call graph for this function:</div>
<div class="dyncontent">
<div class="center"><img src="../../d3/d8a/a00899_a2ca0b4e7146c9b27b2396c2ba114c923_cgraph.png" border="0" usemap="#d3/d8a/a00899_a2ca0b4e7146c9b27b2396c2ba114c923_cgraph" alt=""/></div>
<map name="d3/d8a/a00899_a2ca0b4e7146c9b27b2396c2ba114c923_cgraph" id="d3/d8a/a00899_a2ca0b4e7146c9b27b2396c2ba114c923_cgraph">
<area shape="rect" id="node2" href="../../d3/d8a/a00899.php#ab58627fbfed0b6cabd5030943113e5e5" title="Save the actual cursor position. " alt="" coords="221,5,364,47"/>
<area shape="rect" id="node3" href="../../d3/d8a/a00899.php#a191575f00626575e84455dfae871f502" title="Go to an x/y position. " alt="" coords="221,71,364,112"/>
<area shape="rect" id="node4" href="../../d3/d8a/a00899.php#a6f731b973f917b6c2f3a04267f12c851" title="Restore the cursor&#39;s saved position. " alt="" coords="221,136,364,177"/>
</map>
</div>

</div>
</div>
<a id="a6f731b973f917b6c2f3a04267f12c851"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a6f731b973f917b6c2f3a04267f12c851">&#9670;&nbsp;</a></span>restore()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static void mcd::ConsoleCursor::restore </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Restore the cursor's saved position. </p>
<dl class="section return"><dt>Returns</dt><dd>void </dd></dl>

</div>
</div>
<a id="ab58627fbfed0b6cabd5030943113e5e5"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ab58627fbfed0b6cabd5030943113e5e5">&#9670;&nbsp;</a></span>save()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static void mcd::ConsoleCursor::save </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Save the actual cursor position. </p>
<dl class="section return"><dt>Returns</dt><dd>void </dd></dl>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="../../d5/de0/a00050.php">console.hpp</a></li>
</ul>
</div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../dd/d2d/a00229.php">mcd</a></li><li class="navelem"><a class="el" href="../../d3/d8a/a00899.php">ConsoleCursor</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
