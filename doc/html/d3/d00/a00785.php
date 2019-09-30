<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.13"/>
		<title>C++: mcd::t_stack&lt; T, Container &gt; Class Template Reference</title>
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
$(document).ready(function(){initNavTree('d3/d00/a00785.php','../../');});
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
<a href="../../da/d96/a00782.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">mcd::t_stack&lt; T, Container &gt; Class Template Reference</div>  </div>
</div><!--header-->
<div class="contents">

<p>An thread-safe implementation of stack.  
 <a href="../../d3/d00/a00785.php#details">More...</a></p>

<p><code>#include &lt;array.hpp&gt;</code></p>
<div class="dynheader">
Inheritance diagram for mcd::t_stack&lt; T, Container &gt;:</div>
<div class="dyncontent">
<div class="center"><img src="../../d9/d00/a00784.png" border="0" usemap="#mcd_1_1t__stack_3_01T_00_01Container_01_4_inherit__map" alt="Inheritance graph"/></div>
<map name="mcd_1_1t__stack_3_01T_00_01Container_01_4_inherit__map" id="mcd_1_1t__stack_3_01T_00_01Container_01_4_inherit__map">
<area shape="rect" id="node2" href="../../d6/d86/a00781.php" title="An implementation of std::stack. " alt="" coords="11,80,194,107"/>
<area shape="rect" id="node3" title="STL class. " alt="" coords="15,5,191,32"/>
</map>
<center><span class="legend">[<a target="top" href="../../graph_legend.php">legend</a>]</span></center></div>
<div class="dynheader">
Collaboration diagram for mcd::t_stack&lt; T, Container &gt;:</div>
<div class="dyncontent">
<div class="center"><img src="../../dc/d0c/a00783.png" border="0" usemap="#mcd_1_1t__stack_3_01T_00_01Container_01_4_coll__map" alt="Collaboration graph"/></div>
<map name="mcd_1_1t__stack_3_01T_00_01Container_01_4_coll__map" id="mcd_1_1t__stack_3_01T_00_01Container_01_4_coll__map">
<area shape="rect" id="node2" href="../../d6/d86/a00781.php" title="An implementation of std::stack. " alt="" coords="11,171,194,197"/>
<area shape="rect" id="node3" title="STL class. " alt="" coords="15,95,191,121"/>
</map>
<center><span class="legend">[<a target="top" href="../../graph_legend.php">legend</a>]</span></center></div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:aa4c2b6ebb0b904372919f1c9d0e8a7fa"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d3/d00/a00785.php#aa4c2b6ebb0b904372919f1c9d0e8a7fa">t_stack</a> ()</td></tr>
<tr class="separator:aa4c2b6ebb0b904372919f1c9d0e8a7fa"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ac52e7cd746a8da37bc0d9aba1b44a12a"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d3/d00/a00785.php#ac52e7cd746a8da37bc0d9aba1b44a12a">push</a> (const T &amp;value)</td></tr>
<tr class="separator:ac52e7cd746a8da37bc0d9aba1b44a12a"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a366f9af743a2aa515c828da000add01a"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d3/d00/a00785.php#a366f9af743a2aa515c828da000add01a">push</a> (T &amp;&amp;value)</td></tr>
<tr class="separator:a366f9af743a2aa515c828da000add01a"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="inherit_header pub_methods_a00781"><td colspan="2" onclick="javascript:toggleInherit('pub_methods_a00781')"><img src="../../closed.png" alt="-"/>&#160;Public Member Functions inherited from <a class="el" href="../../d6/d86/a00781.php">mcd::stack&lt; T, Container &gt;</a></td></tr>
<tr class="memitem:aa9d55e0af1d4e27cc1abba7a2d399afc inherit pub_methods_a00781"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d6/d86/a00781.php#aa9d55e0af1d4e27cc1abba7a2d399afc">stack</a> ()</td></tr>
<tr class="separator:aa9d55e0af1d4e27cc1abba7a2d399afc inherit pub_methods_a00781"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ac779733da952e8cfda80b14655a07172 inherit pub_methods_a00781"><td class="memItemLeft" align="right" valign="top">T&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d6/d86/a00781.php#ac779733da952e8cfda80b14655a07172">get</a> ()</td></tr>
<tr class="memdesc:ac779733da952e8cfda80b14655a07172 inherit pub_methods_a00781"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the first element of the stack and erase it from the stack.  <a href="../../d6/d86/a00781.php#ac779733da952e8cfda80b14655a07172">More...</a><br /></td></tr>
<tr class="separator:ac779733da952e8cfda80b14655a07172 inherit pub_methods_a00781"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><h3>template&lt;class T, class Container = std::deque&lt;T&gt;&gt;<br />
class mcd::t_stack&lt; T, Container &gt;</h3>

<p>An thread-safe implementation of stack. </p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a id="aa4c2b6ebb0b904372919f1c9d0e8a7fa"></a>
<h2 class="memtitle"><span class="permalink"><a href="#aa4c2b6ebb0b904372919f1c9d0e8a7fa">&#9670;&nbsp;</a></span>t_stack()</h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;class T , class Container  = std::deque&lt;T&gt;&gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="../../d3/d00/a00785.php">mcd::t_stack</a>&lt; T, Container &gt;::<a class="el" href="../../d3/d00/a00785.php">t_stack</a> </td>
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
<a id="ac52e7cd746a8da37bc0d9aba1b44a12a"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ac52e7cd746a8da37bc0d9aba1b44a12a">&#9670;&nbsp;</a></span>push() <span class="overload">[1/2]</span></h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;class T , class Container  = std::deque&lt;T&gt;&gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">void <a class="el" href="../../d3/d00/a00785.php">mcd::t_stack</a>&lt; T, Container &gt;::push </td>
          <td>(</td>
          <td class="paramtype">const T &amp;&#160;</td>
          <td class="paramname"><em>value</em></td><td>)</td>
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
<a id="a366f9af743a2aa515c828da000add01a"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a366f9af743a2aa515c828da000add01a">&#9670;&nbsp;</a></span>push() <span class="overload">[2/2]</span></h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;class T , class Container  = std::deque&lt;T&gt;&gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">void <a class="el" href="../../d3/d00/a00785.php">mcd::t_stack</a>&lt; T, Container &gt;::push </td>
          <td>(</td>
          <td class="paramtype">T &amp;&amp;&#160;</td>
          <td class="paramname"><em>value</em></td><td>)</td>
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
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="../../da/d45/a00011.php">array.hpp</a></li>
</ul>
</div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../d5/d0b/a00220.php">mcd</a></li><li class="navelem"><a class="el" href="../../d3/d00/a00785.php">t_stack</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
