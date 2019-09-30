<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.13"/>
		<title>C++: mcd::ThreadCout Class Reference</title>
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
				$text = "Generated on Sun Sep 29 2019 11:39:30 for C++ by";
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
$(document).ready(function(){initNavTree('de/d01/a00897.php','../../');});
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
<a href="#friends">Friends</a> &#124;
<a href="../../dc/dfa/a00894.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">mcd::ThreadCout Class Reference</div>  </div>
</div><!--header-->
<div class="contents">

<p>A class to use std::cout thread safe.  
 <a href="../../de/d01/a00897.php#details">More...</a></p>

<p><code>#include &lt;console.hpp&gt;</code></p>
<div class="dynheader">
Inheritance diagram for mcd::ThreadCout:</div>
<div class="dyncontent">
<div class="center"><img src="../../da/dd6/a00896.png" border="0" usemap="#mcd_1_1ThreadCout_inherit__map" alt="Inheritance graph"/></div>
<map name="mcd_1_1ThreadCout_inherit__map" id="mcd_1_1ThreadCout_inherit__map">
<area shape="rect" id="node2" title="STL class. " alt="" coords="35,244,130,271"/>
<area shape="rect" id="node3" title="STL class. " alt="" coords="16,155,149,196"/>
<area shape="rect" id="node4" title="STL class. " alt="" coords="5,80,160,107"/>
<area shape="rect" id="node5" title="STL class. " alt="" coords="33,5,133,32"/>
</map>
<center><span class="legend">[<a target="top" href="../../graph_legend.php">legend</a>]</span></center></div>
<div class="dynheader">
Collaboration diagram for mcd::ThreadCout:</div>
<div class="dyncontent">
<div class="center"><img src="../../d2/d21/a00895.png" border="0" usemap="#mcd_1_1ThreadCout_coll__map" alt="Collaboration graph"/></div>
<map name="mcd_1_1ThreadCout_coll__map" id="mcd_1_1ThreadCout_coll__map">
<area shape="rect" id="node2" title="STL class. " alt="" coords="35,244,130,271"/>
<area shape="rect" id="node3" title="STL class. " alt="" coords="16,155,149,196"/>
<area shape="rect" id="node4" title="STL class. " alt="" coords="5,80,160,107"/>
<area shape="rect" id="node5" title="STL class. " alt="" coords="33,5,133,32"/>
</map>
<center><span class="legend">[<a target="top" href="../../graph_legend.php">legend</a>]</span></center></div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:adacc9d5343e07aa8396f8b1edd92bb39"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../de/d01/a00897.php#adacc9d5343e07aa8396f8b1edd92bb39">ThreadCout</a> ()</td></tr>
<tr class="separator:adacc9d5343e07aa8396f8b1edd92bb39"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a43b2683a0e3d46205643de53236dc4f8"><td class="memItemLeft" align="right" valign="top">virtual&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../de/d01/a00897.php#a43b2683a0e3d46205643de53236dc4f8">~ThreadCout</a> ()</td></tr>
<tr class="separator:a43b2683a0e3d46205643de53236dc4f8"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="friends"></a>
Friends</h2></td></tr>
<tr class="memitem:a358d316052544257ab9aee6f1fe762dc"><td class="memTemplParams" colspan="2">template&lt;class T &gt; </td></tr>
<tr class="memitem:a358d316052544257ab9aee6f1fe762dc"><td class="memTemplItemLeft" align="right" valign="top"><a class="el" href="../../de/d01/a00897.php">ThreadCout</a> &amp;&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../de/d01/a00897.php#a358d316052544257ab9aee6f1fe762dc">operator&lt;&lt;</a> (<a class="el" href="../../de/d01/a00897.php">ThreadCout</a> &amp;os, T obj)</td></tr>
<tr class="separator:a358d316052544257ab9aee6f1fe762dc"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a8b27881bbb3b1a50ddf821d8ce62e4d6"><td class="memItemLeft" align="right" valign="top"><a class="el" href="../../de/d01/a00897.php">ThreadCout</a> &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../de/d01/a00897.php#a8b27881bbb3b1a50ddf821d8ce62e4d6">operator&lt;&lt;</a> (<a class="el" href="../../de/d01/a00897.php">ThreadCout</a> &amp;os, <a class="el" href="../../dc/d2c/a00893.php">ThreadEndlCout</a> &amp;)</td></tr>
<tr class="separator:a8b27881bbb3b1a50ddf821d8ce62e4d6"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>A class to use std::cout thread safe. </p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a id="adacc9d5343e07aa8396f8b1edd92bb39"></a>
<h2 class="memtitle"><span class="permalink"><a href="#adacc9d5343e07aa8396f8b1edd92bb39">&#9670;&nbsp;</a></span>ThreadCout()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">mcd::ThreadCout::ThreadCout </td>
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

</div>
</div>
<a id="a43b2683a0e3d46205643de53236dc4f8"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a43b2683a0e3d46205643de53236dc4f8">&#9670;&nbsp;</a></span>~ThreadCout()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual mcd::ThreadCout::~ThreadCout </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span><span class="mlabel">virtual</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

</div>
</div>
<h2 class="groupheader">Friends And Related Function Documentation</h2>
<a id="a358d316052544257ab9aee6f1fe762dc"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a358d316052544257ab9aee6f1fe762dc">&#9670;&nbsp;</a></span>operator<< <span class="overload">[1/2]</span></h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;class T &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="../../de/d01/a00897.php">ThreadCout</a>&amp; operator&lt;&lt; </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="../../de/d01/a00897.php">ThreadCout</a> &amp;&#160;</td>
          <td class="paramname"><em>os</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">T&#160;</td>
          <td class="paramname"><em>obj</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">friend</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

</div>
</div>
<a id="a8b27881bbb3b1a50ddf821d8ce62e4d6"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a8b27881bbb3b1a50ddf821d8ce62e4d6">&#9670;&nbsp;</a></span>operator<< <span class="overload">[2/2]</span></h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="../../de/d01/a00897.php">ThreadCout</a>&amp; operator&lt;&lt; </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="../../de/d01/a00897.php">ThreadCout</a> &amp;&#160;</td>
          <td class="paramname"><em>os</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="../../dc/d2c/a00893.php">ThreadEndlCout</a> &amp;&#160;</td>
          <td class="paramname">&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">friend</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

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
		<li class="navelem"><a class="el" href="../../d5/d0b/a00220.php">mcd</a></li><li class="navelem"><a class="el" href="../../de/d01/a00897.php">ThreadCout</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
