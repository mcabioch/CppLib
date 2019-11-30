<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.13"/>
		<title>C++: Matrix_functions.hpp File Reference</title>
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
				$text = "Generated on Sat Nov 30 2019 15:18:55 for C++ by";
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
$(document).ready(function(){initNavTree('de/d76/a00134.php','../../');});
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
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<div class="title">Matrix_functions.hpp File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:a9b0f04cced69a887b46bddde8e3f3c0a"><td class="memTemplParams" colspan="2">template&lt;class D &gt; </td></tr>
<tr class="memitem:a9b0f04cced69a887b46bddde8e3f3c0a"><td class="memTemplItemLeft" align="right" valign="top">void&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../de/d76/a00134.php#a9b0f04cced69a887b46bddde8e3f3c0a">GaussJordan</a> (const Matrix&lt; D &gt; &amp;M, Matrix&lt; D &gt; &amp;I, size_t i, size_t j)</td></tr>
<tr class="separator:a9b0f04cced69a887b46bddde8e3f3c0a"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a9a3710d279e209fbff51b625690ef630"><td class="memTemplParams" colspan="2">template&lt;class D &gt; </td></tr>
<tr class="memitem:a9a3710d279e209fbff51b625690ef630"><td class="memTemplItemLeft" align="right" valign="top">std::ostream &amp;&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../de/d76/a00134.php#a9a3710d279e209fbff51b625690ef630">operator&lt;&lt;</a> (std::ostream &amp;os, const Matrix&lt; D &gt; &amp;M)</td></tr>
<tr class="separator:a9a3710d279e209fbff51b625690ef630"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ac79943d7aebf62ae9c882752261ee7cb"><td class="memTemplParams" colspan="2">template&lt;class C , typename U &gt; </td></tr>
<tr class="memitem:ac79943d7aebf62ae9c882752261ee7cb"><td class="memTemplItemLeft" align="right" valign="top">Matrix&lt; C &gt;&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../de/d76/a00134.php#ac79943d7aebf62ae9c882752261ee7cb">mod</a> (const Matrix&lt; C &gt; &amp;M, U b, bool positive=false)</td></tr>
<tr class="separator:ac79943d7aebf62ae9c882752261ee7cb"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><dl class="section author"><dt>Author</dt><dd>Mathias CABIOCH-DELALANDE </dd></dl>
<dl class="section date"><dt>Date</dt><dd>Created : Sunday September, 15 2019 19:17:03 </dd>
<dd>
Last modification : September, 26 2019 </dd></dl>
</div><h2 class="groupheader">Function Documentation</h2>
<a id="a9b0f04cced69a887b46bddde8e3f3c0a"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a9b0f04cced69a887b46bddde8e3f3c0a">&#9670;&nbsp;</a></span>GaussJordan()</h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;class D &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">void GaussJordan </td>
          <td>(</td>
          <td class="paramtype">const Matrix&lt; D &gt; &amp;&#160;</td>
          <td class="paramname"><em>M</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">Matrix&lt; D &gt; &amp;&#160;</td>
          <td class="paramname"><em>I</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">size_t&#160;</td>
          <td class="paramname"><em>i</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">size_t&#160;</td>
          <td class="paramname"><em>j</em>&#160;</td>
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
<a id="ac79943d7aebf62ae9c882752261ee7cb"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ac79943d7aebf62ae9c882752261ee7cb">&#9670;&nbsp;</a></span>mod()</h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;class C , typename U &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">Matrix&lt;C&gt; mod </td>
          <td>(</td>
          <td class="paramtype">const Matrix&lt; C &gt; &amp;&#160;</td>
          <td class="paramname"><em>M</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">U&#160;</td>
          <td class="paramname"><em>b</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">bool&#160;</td>
          <td class="paramname"><em>positive</em> = <code>false</code>&#160;</td>
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
<a id="a9a3710d279e209fbff51b625690ef630"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a9a3710d279e209fbff51b625690ef630">&#9670;&nbsp;</a></span>operator<<()</h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;class D &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">std::ostream&amp; operator&lt;&lt; </td>
          <td>(</td>
          <td class="paramtype">std::ostream &amp;&#160;</td>
          <td class="paramname"><em>os</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const Matrix&lt; D &gt; &amp;&#160;</td>
          <td class="paramname"><em>M</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">
<div class="dynheader">
Here is the call graph for this function:</div>
<div class="dyncontent">
<div class="center"><img src="../../de/d76/a00134_a9a3710d279e209fbff51b625690ef630_cgraph.png" border="0" usemap="#de/d76/a00134_a9a3710d279e209fbff51b625690ef630_cgraph" alt=""/></div>
<map name="de/d76/a00134_a9a3710d279e209fbff51b625690ef630_cgraph" id="de/d76/a00134_a9a3710d279e209fbff51b625690ef630_cgraph">
<area shape="rect" id="node2" href="../../d6/d08/a00244.php#ae057a7c5042a3cacb444199a2b6b7598" title="Convert in in a string. " alt="" coords="139,5,212,32"/>
</map>
</div>

</div>
</div>
</div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../dir_bfccd401955b95cf8c75461437045ac0.php">inc</a></li><li class="navelem"><a class="el" href="../../dir_2ce2ad1ea5ded593884489da6d66e532.php">C++</a></li><li class="navelem"><a class="el" href="../../de/d76/a00134.php">Matrix_functions.hpp</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
