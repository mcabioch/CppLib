<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.13"/>
		<title>C++: mcd::Clock Class Reference</title>
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
				$text = "Generated on Wed Nov 13 2019 15:53:44 for C++ by";
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
$(document).ready(function(){initNavTree('d2/dab/a00886.php','../../');});
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
<a href="../../d7/d34/a00883.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">mcd::Clock Class Reference</div>  </div>
</div><!--header-->
<div class="contents">

<p>A clock to measure the elapsed time.  
 <a href="../../d2/dab/a00886.php#details">More...</a></p>

<p><code>#include &lt;Clock.hpp&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:ae0aa0853cddce8c1e8c4339eb7016223"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d2/dab/a00886.php#ae0aa0853cddce8c1e8c4339eb7016223">Clock</a> ()</td></tr>
<tr class="separator:ae0aa0853cddce8c1e8c4339eb7016223"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a47ce94671d48c1f42862771174c86810"><td class="memItemLeft" align="right" valign="top"><a class="el" href="../../d0/d53/a00232.php#adda27badcbfcfc854854c6ab094cf34e">double64_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d2/dab/a00886.php#a47ce94671d48c1f42862771174c86810">getElapsed</a> ()</td></tr>
<tr class="memdesc:a47ce94671d48c1f42862771174c86810"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get time elapsed.  <a href="#a47ce94671d48c1f42862771174c86810">More...</a><br /></td></tr>
<tr class="separator:a47ce94671d48c1f42862771174c86810"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a276d9d978a8670e8354cac2b589c60ce"><td class="memItemLeft" align="right" valign="top"><a class="el" href="../../d0/d53/a00232.php#adda27badcbfcfc854854c6ab094cf34e">double64_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d2/dab/a00886.php#a276d9d978a8670e8354cac2b589c60ce">getStart</a> () const</td></tr>
<tr class="memdesc:a276d9d978a8670e8354cac2b589c60ce"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the time start.  <a href="#a276d9d978a8670e8354cac2b589c60ce">More...</a><br /></td></tr>
<tr class="separator:a276d9d978a8670e8354cac2b589c60ce"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a25b787edba50392a8f18995a6ae6dc9e"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d2/dab/a00886.php#a25b787edba50392a8f18995a6ae6dc9e">start</a> ()</td></tr>
<tr class="separator:a25b787edba50392a8f18995a6ae6dc9e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a3008b7b555fb4e6c3415aec152b5de2d"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d2/dab/a00886.php#a3008b7b555fb4e6c3415aec152b5de2d">restart</a> ()</td></tr>
<tr class="separator:a3008b7b555fb4e6c3415aec152b5de2d"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pro-attribs"></a>
Protected Attributes</h2></td></tr>
<tr class="memitem:a9714489f034bfffabff995741d899513"><td class="memItemLeft" align="right" valign="top">std::chrono::high_resolution_clock::time_point&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d2/dab/a00886.php#a9714489f034bfffabff995741d899513">m_start</a></td></tr>
<tr class="separator:a9714489f034bfffabff995741d899513"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a20216632ae0d7b1504060826edfdd062"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d2/dab/a00886.php#a20216632ae0d7b1504060826edfdd062">started</a></td></tr>
<tr class="separator:a20216632ae0d7b1504060826edfdd062"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>A clock to measure the elapsed time. </p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a id="ae0aa0853cddce8c1e8c4339eb7016223"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ae0aa0853cddce8c1e8c4339eb7016223">&#9670;&nbsp;</a></span>Clock()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">mcd::Clock::Clock </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a id="a47ce94671d48c1f42862771174c86810"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a47ce94671d48c1f42862771174c86810">&#9670;&nbsp;</a></span>getElapsed()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="../../d0/d53/a00232.php#adda27badcbfcfc854854c6ab094cf34e">double64_t</a> mcd::Clock::getElapsed </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get time elapsed. </p>
<dl class="section return"><dt>Returns</dt><dd>Return time elapsed since the clock started in microseconds </dd></dl>

</div>
</div>
<a id="a276d9d978a8670e8354cac2b589c60ce"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a276d9d978a8670e8354cac2b589c60ce">&#9670;&nbsp;</a></span>getStart()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="../../d0/d53/a00232.php#adda27badcbfcfc854854c6ab094cf34e">double64_t</a> mcd::Clock::getStart </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Get the time start. </p>
<dl class="section return"><dt>Returns</dt><dd>Return the start time since last clock start in microseconds </dd></dl>
<div class="dynheader">
Here is the call graph for this function:</div>
<div class="dyncontent">
<div class="center"><img src="../../d2/dab/a00886_a276d9d978a8670e8354cac2b589c60ce_cgraph.png" border="0" usemap="#d2/dab/a00886_a276d9d978a8670e8354cac2b589c60ce_cgraph" alt=""/></div>
<map name="d2/dab/a00886_a276d9d978a8670e8354cac2b589c60ce_cgraph" id="d2/dab/a00886_a276d9d978a8670e8354cac2b589c60ce_cgraph">
<area shape="rect" id="node2" href="../../d2/dab/a00886.php#a25b787edba50392a8f18995a6ae6dc9e" title="mcd::Clock::start" alt="" coords="202,5,325,32"/>
<area shape="rect" id="node3" href="../../d2/dab/a00886.php#a3008b7b555fb4e6c3415aec152b5de2d" title="mcd::Clock::restart" alt="" coords="196,56,331,83"/>
</map>
</div>

</div>
</div>
<a id="a3008b7b555fb4e6c3415aec152b5de2d"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a3008b7b555fb4e6c3415aec152b5de2d">&#9670;&nbsp;</a></span>restart()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void mcd::Clock::restart </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Restart the clock </p>

</div>
</div>
<a id="a25b787edba50392a8f18995a6ae6dc9e"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a25b787edba50392a8f18995a6ae6dc9e">&#9670;&nbsp;</a></span>start()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void mcd::Clock::start </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Start the clock </p>

</div>
</div>
<h2 class="groupheader">Member Data Documentation</h2>
<a id="a9714489f034bfffabff995741d899513"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a9714489f034bfffabff995741d899513">&#9670;&nbsp;</a></span>m_start</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">std::chrono::high_resolution_clock::time_point mcd::Clock::m_start</td>
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
<a id="a20216632ae0d7b1504060826edfdd062"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a20216632ae0d7b1504060826edfdd062">&#9670;&nbsp;</a></span>started</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">bool mcd::Clock::started</td>
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
<li><a class="el" href="../../d5/df9/a00044.php">Clock.hpp</a></li>
</ul>
</div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../d0/d53/a00232.php">mcd</a></li><li class="navelem"><a class="el" href="../../d2/dab/a00886.php">Clock</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
