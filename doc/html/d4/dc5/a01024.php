<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.13"/>
		<title>C++: mcd::RNG&lt; T, U &gt; Class Template Reference</title>
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
				$text = "Generated on Wed Sep 25 2019 20:37:25 for C++ by";
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
$(document).ready(function(){initNavTree('d4/dc5/a01024.php','../../');});
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
<a href="../../d5/dfb/a01021.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">mcd::RNG&lt; T, U &gt; Class Template Reference</div>  </div>
</div><!--header-->
<div class="contents">

<p>A class to simplify the use of random.  
 <a href="../../d4/dc5/a01024.php#details">More...</a></p>

<p><code>#include &lt;RNG.hpp&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:ada6783e2f83f41b11d72687c90c29ead"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d4/dc5/a01024.php#ada6783e2f83f41b11d72687c90c29ead">RNG</a> ()</td></tr>
<tr class="separator:ada6783e2f83f41b11d72687c90c29ead"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a717048eaee5dc829e132237026beaecc"><td class="memItemLeft" align="right" valign="top">T&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d4/dc5/a01024.php#a717048eaee5dc829e132237026beaecc">operator()</a> (T a, T b)</td></tr>
<tr class="memdesc:a717048eaee5dc829e132237026beaecc"><td class="mdescLeft">&#160;</td><td class="mdescRight">The definition of the operator ()  <a href="#a717048eaee5dc829e132237026beaecc">More...</a><br /></td></tr>
<tr class="separator:a717048eaee5dc829e132237026beaecc"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><h3>template&lt;typename T, typename U&gt;<br />
class mcd::RNG&lt; T, U &gt;</h3>

<p>A class to simplify the use of random. </p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a id="ada6783e2f83f41b11d72687c90c29ead"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ada6783e2f83f41b11d72687c90c29ead">&#9670;&nbsp;</a></span>RNG()</h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T , typename U &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="../../d4/dc5/a01024.php">mcd::RNG</a>&lt; T, U &gt;::<a class="el" href="../../d4/dc5/a01024.php">RNG</a> </td>
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
<h2 class="groupheader">Member Function Documentation</h2>
<a id="a717048eaee5dc829e132237026beaecc"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a717048eaee5dc829e132237026beaecc">&#9670;&nbsp;</a></span>operator()()</h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T , typename U &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">T <a class="el" href="../../d4/dc5/a01024.php">mcd::RNG</a>&lt; T, U &gt;::operator() </td>
          <td>(</td>
          <td class="paramtype">T&#160;</td>
          <td class="paramname"><em>a</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">T&#160;</td>
          <td class="paramname"><em>b</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>The definition of the operator () </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">a</td><td>The first boundary </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">b</td><td>The first boundary</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Return a random number between <em>a</em> and <em>b</em> </dd></dl>
<div class="dynheader">
Here is the call graph for this function:</div>
<div class="dyncontent">
<div class="center"><img src="../../d4/dc5/a01024_a717048eaee5dc829e132237026beaecc_cgraph.png" border="0" usemap="#d4/dc5/a01024_a717048eaee5dc829e132237026beaecc_cgraph" alt=""/></div>
<map name="d4/dc5/a01024_a717048eaee5dc829e132237026beaecc_cgraph" id="d4/dc5/a01024_a717048eaee5dc829e132237026beaecc_cgraph">
<area shape="rect" id="node2" href="../../dd/ded/a00211.php#a4d75f23c9b03fd2c56324895d0ff3c58" title="Return the distance of the given coordinates. " alt="" coords="201,5,277,32"/>
<area shape="rect" id="node3" href="../../dd/ded/a00211.php#ae3a712e4de66375b1a188fa464c968e2" title="Compute the squareroot of a. " alt="" coords="325,5,403,32"/>
</map>
</div>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="../../dc/de6/a00167.php">RNG.hpp</a></li>
</ul>
</div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../dd/ded/a00211.php">mcd</a></li><li class="navelem"><a class="el" href="../../d4/dc5/a01024.php">RNG</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
