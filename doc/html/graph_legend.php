<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.13"/>
		<title>C++: Graph Legend</title>
		<link href="tabs.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript" src="dynsections.js"></script>
		<link href="navtree.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="resize.js"></script>
<script type="text/javascript" src="navtreedata.js"></script>
<script type="text/javascript" src="navtree.js"></script>
<script type="text/javascript">
  $(document).ready(initResizable);
</script>
		<link href="search/search.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="search/searchdata.js"></script>
<script type="text/javascript" src="search/search.js"></script>
		<link href="doxygen.css" rel="stylesheet" type="text/css" />
		<link href="doxystyle.css" rel="stylesheet" type="text/css"/>
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
				$text = "Generated on Fri Sep 6 2019 16:26:33 for C++ by";
				$text = substr($text, 0, sizeof($text) - 4);
				$tmp = substr($text, 17);
				$tmp = substr($tmp, 0, strpos($tmp, " for"));
				$lastModif = date("l jS \of F Y \a\\t H:i:s", strtotime($tmp));
			?>
		<!-- end header part -->
<!-- Generated by Doxygen 1.8.13 -->
<script type="text/javascript">
var searchBox = new SearchBox("searchBox", "search",false,'Search');
</script>
<script type="text/javascript" src="menudata.js"></script>
<script type="text/javascript" src="menu.js"></script>
<script type="text/javascript">
$(function() {
  initMenu('',true,false,'search.php','Search');
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
$(document).ready(function(){initNavTree('graph_legend.php','');});
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
  <div class="headertitle">
<div class="title">Graph Legend</div>  </div>
</div><!--header-->
<div class="contents">
<p>This page explains how to interpret the graphs that are generated by doxygen.</p>
<p>Consider the following example: </p><div class="fragment"><div class="line">/*! Invisible class because of truncation */</div><div class="line">class Invisible { };</div><div class="line"></div><div class="line">/*! Truncated class, inheritance relation is hidden */</div><div class="line">class Truncated : public Invisible { };</div><div class="line"></div><div class="line">/* Class not documented with doxygen comments */</div><div class="line">class Undocumented { };</div><div class="line"></div><div class="line">/*! Class that is inherited using public inheritance */</div><div class="line">class PublicBase : public Truncated { };</div><div class="line"></div><div class="line">/*! A template class */</div><div class="line">template&lt;class T&gt; class Templ { };</div><div class="line"></div><div class="line">/*! Class that is inherited using protected inheritance */</div><div class="line">class ProtectedBase { };</div><div class="line"></div><div class="line">/*! Class that is inherited using private inheritance */</div><div class="line">class PrivateBase { };</div><div class="line"></div><div class="line">/*! Class that is used by the Inherited class */</div><div class="line">class Used { };</div><div class="line"></div><div class="line">/*! Super class that inherits a number of other classes */</div><div class="line">class Inherited : public PublicBase,</div><div class="line">                  protected ProtectedBase,</div><div class="line">                  private PrivateBase,</div><div class="line">                  public Undocumented,</div><div class="line">                  public Templ&lt;int&gt;</div><div class="line">{</div><div class="line">  private:</div><div class="line">    Used *m_usedClass;</div><div class="line">};</div></div><!-- fragment --><p> This will result in the following graph:</p>
<center><div class="image">
<img src="graph_legend.png"/>
</div>
</center><p>The boxes in the above graph have the following meaning: </p>
<ul>
<li>
A filled gray box represents the struct or class for which the graph is generated. </li>
<li>
A box with a black border denotes a documented struct or class. </li>
<li>
A box with a gray border denotes an undocumented struct or class. </li>
<li>
A box with a red border denotes a documented struct or class forwhich not all inheritance/containment relations are shown. A graph is truncated if it does not fit within the specified boundaries. </li>
</ul>
<p>The arrows have the following meaning: </p>
<ul>
<li>
A dark blue arrow is used to visualize a public inheritance relation between two classes. </li>
<li>
A dark green arrow is used for protected inheritance. </li>
<li>
A dark red arrow is used for private inheritance. </li>
<li>
A purple dashed arrow is used if a class is contained or used by another class. The arrow is labelled with the variable(s) through which the pointed class or struct is accessible. </li>
<li>
A yellow dashed arrow denotes a relation between a template instance and the template class it was instantiated from. The arrow is labelled with the template parameters of the instance. </li>
</ul>
</div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
