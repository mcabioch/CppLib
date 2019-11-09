<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.13"/>
		<title>C++: mcd::Tree&lt; T &gt; Class Template Reference</title>
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
				$text = "Generated on Sat Nov 9 2019 14:37:52 for C++ by";
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
$(document).ready(function(){initNavTree('d2/d4d/a01079.php','../../');});
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
<a href="#pub-static-methods">Static Public Member Functions</a> &#124;
<a href="../../d6/d80/a01076.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">mcd::Tree&lt; T &gt; Class Template Reference</div>  </div>
</div><!--header-->
<div class="contents">

<p>A class to manage a binary tree.  
 <a href="../../d2/d4d/a01079.php#details">More...</a></p>

<p><code>#include &lt;Tree.hpp&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:a93774d1792effab8a46379c6781729f0"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d2/d4d/a01079.php#a93774d1792effab8a46379c6781729f0">Tree</a> (<a class="el" href="../../dd/d2d/a00229.php#a476a24d6aeedfa55efcaee6379946a75">TREE_SORT</a> sorting=<a class="el" href="../../dd/d2d/a00229.php#a476a24d6aeedfa55efcaee6379946a75a8f22891e42808a1ec2280811f4954151">ASC</a>)</td></tr>
<tr class="separator:a93774d1792effab8a46379c6781729f0"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a44571a01497b2ac582c292c8bad9de33"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d2/d4d/a01079.php#a44571a01497b2ac582c292c8bad9de33">~Tree</a> ()</td></tr>
<tr class="separator:a44571a01497b2ac582c292c8bad9de33"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a5f28587248a842f1ff72837a8132c00e"><td class="memItemLeft" align="right" valign="top">std::pair&lt; <a class="el" href="../../dd/d2d/a00229.php#dd/d80/a01075">Node</a>&lt; T &gt; *, std::string &gt;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d2/d4d/a01079.php#a5f28587248a842f1ff72837a8132c00e">find</a> (T value)</td></tr>
<tr class="memdesc:a5f28587248a842f1ff72837a8132c00e"><td class="mdescLeft">&#160;</td><td class="mdescRight">Find a value in the tree and return the node and the path to the node.  <a href="#a5f28587248a842f1ff72837a8132c00e">More...</a><br /></td></tr>
<tr class="separator:a5f28587248a842f1ff72837a8132c00e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ada7f6fc4dba1856a8aae67983ba5544b"><td class="memItemLeft" align="right" valign="top">size_t&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d2/d4d/a01079.php#ada7f6fc4dba1856a8aae67983ba5544b">getRightCount</a> (<a class="el" href="../../dd/d2d/a00229.php#dd/d80/a01075">Node</a>&lt; T &gt; *node)</td></tr>
<tr class="memdesc:ada7f6fc4dba1856a8aae67983ba5544b"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the depth on right.  <a href="#ada7f6fc4dba1856a8aae67983ba5544b">More...</a><br /></td></tr>
<tr class="separator:ada7f6fc4dba1856a8aae67983ba5544b"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a634efe609117c9533707b9f30bd0c488"><td class="memItemLeft" align="right" valign="top">size_t&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d2/d4d/a01079.php#a634efe609117c9533707b9f30bd0c488">getLeftCount</a> (<a class="el" href="../../dd/d2d/a00229.php#dd/d80/a01075">Node</a>&lt; T &gt; *node)</td></tr>
<tr class="memdesc:a634efe609117c9533707b9f30bd0c488"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the depth on left.  <a href="#a634efe609117c9533707b9f30bd0c488">More...</a><br /></td></tr>
<tr class="separator:a634efe609117c9533707b9f30bd0c488"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a1e6f8d4ad100be50a970848a0c8437d1"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d2/d4d/a01079.php#a1e6f8d4ad100be50a970848a0c8437d1">print</a> ()</td></tr>
<tr class="memdesc:a1e6f8d4ad100be50a970848a0c8437d1"><td class="mdescLeft">&#160;</td><td class="mdescRight">Print the tree.  <a href="#a1e6f8d4ad100be50a970848a0c8437d1">More...</a><br /></td></tr>
<tr class="separator:a1e6f8d4ad100be50a970848a0c8437d1"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aa1c0e2b0a15c31c48ed5cade92c4ae3d"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d2/d4d/a01079.php#aa1c0e2b0a15c31c48ed5cade92c4ae3d">applyForEach</a> (void(*func)(<a class="el" href="../../dd/d2d/a00229.php#dd/d80/a01075">Node</a>&lt; T &gt; *, long int))</td></tr>
<tr class="memdesc:aa1c0e2b0a15c31c48ed5cade92c4ae3d"><td class="mdescLeft">&#160;</td><td class="mdescRight">Do something for each node.  <a href="#aa1c0e2b0a15c31c48ed5cade92c4ae3d">More...</a><br /></td></tr>
<tr class="separator:aa1c0e2b0a15c31c48ed5cade92c4ae3d"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a069d03de16fc9d3db25d7ec67ed6811b"><td class="memItemLeft" align="right" valign="top">size_t&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d2/d4d/a01079.php#a069d03de16fc9d3db25d7ec67ed6811b">height</a> ()</td></tr>
<tr class="memdesc:a069d03de16fc9d3db25d7ec67ed6811b"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the height of the tree.  <a href="#a069d03de16fc9d3db25d7ec67ed6811b">More...</a><br /></td></tr>
<tr class="separator:a069d03de16fc9d3db25d7ec67ed6811b"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a53cd621cced254067f1ebac4e2abe8df"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d2/d4d/a01079.php#a53cd621cced254067f1ebac4e2abe8df">insert</a> (std::pair&lt; T, <a class="el" href="../../dd/d2d/a00229.php#a0d3d39a7992ee9e893a83ab18066f79d">NodeWeight</a> &gt; datas)</td></tr>
<tr class="memdesc:a53cd621cced254067f1ebac4e2abe8df"><td class="mdescLeft">&#160;</td><td class="mdescRight">Insert datas in the tree.  <a href="#a53cd621cced254067f1ebac4e2abe8df">More...</a><br /></td></tr>
<tr class="separator:a53cd621cced254067f1ebac4e2abe8df"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a3a02b5886471e9607d6dd9caa3216657"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d2/d4d/a01079.php#a3a02b5886471e9607d6dd9caa3216657">create</a> (std::vector&lt; std::pair&lt; T, <a class="el" href="../../dd/d2d/a00229.php#a0d3d39a7992ee9e893a83ab18066f79d">NodeWeight</a> &gt;&gt; datas)</td></tr>
<tr class="memdesc:a3a02b5886471e9607d6dd9caa3216657"><td class="mdescLeft">&#160;</td><td class="mdescRight">Create a binary tree with a custom sort function.  <a href="#a3a02b5886471e9607d6dd9caa3216657">More...</a><br /></td></tr>
<tr class="separator:a3a02b5886471e9607d6dd9caa3216657"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a20ba766efa9e94d90d156432d6f101b1"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d2/d4d/a01079.php#a20ba766efa9e94d90d156432d6f101b1">add</a> (T data, <a class="el" href="../../dd/d2d/a00229.php#a0d3d39a7992ee9e893a83ab18066f79d">NodeWeight</a> weight)</td></tr>
<tr class="memdesc:a20ba766efa9e94d90d156432d6f101b1"><td class="mdescLeft">&#160;</td><td class="mdescRight">Add datas in the tree.  <a href="#a20ba766efa9e94d90d156432d6f101b1">More...</a><br /></td></tr>
<tr class="separator:a20ba766efa9e94d90d156432d6f101b1"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a38b40b07bade18a081d80596983dd16c"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d2/d4d/a01079.php#a38b40b07bade18a081d80596983dd16c">equilibrate</a> (<a class="el" href="../../dd/d2d/a00229.php#a476a24d6aeedfa55efcaee6379946a75">TREE_SORT</a> sort=<a class="el" href="../../dd/d2d/a00229.php#a476a24d6aeedfa55efcaee6379946a75a8f22891e42808a1ec2280811f4954151">ASC</a>)</td></tr>
<tr class="memdesc:a38b40b07bade18a081d80596983dd16c"><td class="mdescLeft">&#160;</td><td class="mdescRight">Equilibrate the tree.  <a href="#a38b40b07bade18a081d80596983dd16c">More...</a><br /></td></tr>
<tr class="separator:a38b40b07bade18a081d80596983dd16c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ad9cda4b45c11828381cde08fa48ae94d"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d2/d4d/a01079.php#ad9cda4b45c11828381cde08fa48ae94d">onDelete</a> (void(*func)(<a class="el" href="../../dd/d2d/a00229.php#dd/d80/a01075">Node</a>&lt; T &gt; *))</td></tr>
<tr class="memdesc:ad9cda4b45c11828381cde08fa48ae94d"><td class="mdescLeft">&#160;</td><td class="mdescRight">A setter for the deletion function.  <a href="#ad9cda4b45c11828381cde08fa48ae94d">More...</a><br /></td></tr>
<tr class="separator:ad9cda4b45c11828381cde08fa48ae94d"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a279d0472004ed9618dde58fcfd6bb508"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d2/d4d/a01079.php#a279d0472004ed9618dde58fcfd6bb508">onCompare</a> (void(*func)(<a class="el" href="../../dd/d2d/a00229.php#dd/d80/a01075">Node</a>&lt; T &gt; *, <a class="el" href="../../dd/d2d/a00229.php#dd/d80/a01075">Node</a>&lt; T &gt; *))</td></tr>
<tr class="memdesc:a279d0472004ed9618dde58fcfd6bb508"><td class="mdescLeft">&#160;</td><td class="mdescRight">A setter for the comparator function.  <a href="#a279d0472004ed9618dde58fcfd6bb508">More...</a><br /></td></tr>
<tr class="separator:a279d0472004ed9618dde58fcfd6bb508"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aaf42d9cae430064e1b52b8cd3e57ee42"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d2/d4d/a01079.php#aaf42d9cae430064e1b52b8cd3e57ee42">asc</a> ()</td></tr>
<tr class="memdesc:aaf42d9cae430064e1b52b8cd3e57ee42"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set the sorter ascending.  <a href="#aaf42d9cae430064e1b52b8cd3e57ee42">More...</a><br /></td></tr>
<tr class="separator:aaf42d9cae430064e1b52b8cd3e57ee42"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a52f3b03c077b82ded999b5cbd197f1e3"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d2/d4d/a01079.php#a52f3b03c077b82ded999b5cbd197f1e3">desc</a> ()</td></tr>
<tr class="memdesc:a52f3b03c077b82ded999b5cbd197f1e3"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set the sorter descending.  <a href="#a52f3b03c077b82ded999b5cbd197f1e3">More...</a><br /></td></tr>
<tr class="separator:a52f3b03c077b82ded999b5cbd197f1e3"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-static-methods"></a>
Static Public Member Functions</h2></td></tr>
<tr class="memitem:a22b22135964e818cd9d0ef9ded9f39de"><td class="memTemplParams" colspan="2">template&lt;typename U &gt; </td></tr>
<tr class="memitem:a22b22135964e818cd9d0ef9ded9f39de"><td class="memTemplItemLeft" align="right" valign="top">static std::vector&lt; std::pair&lt; T, <a class="el" href="../../dd/d2d/a00229.php#a0d3d39a7992ee9e893a83ab18066f79d">NodeWeight</a> &gt; &gt;&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d2/d4d/a01079.php#a22b22135964e818cd9d0ef9ded9f39de">convert</a> (std::vector&lt; std::pair&lt; T, U &gt;&gt; in)</td></tr>
<tr class="memdesc:a22b22135964e818cd9d0ef9ded9f39de"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return an array format for the tree.  <a href="#a22b22135964e818cd9d0ef9ded9f39de">More...</a><br /></td></tr>
<tr class="separator:a22b22135964e818cd9d0ef9ded9f39de"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><h3>template&lt;typename T&gt;<br />
class mcd::Tree&lt; T &gt;</h3>

<p>A class to manage a binary tree. </p>
<dl class="todo"><dt><b><a class="el" href="../../d9/d01/a00227.php#_todo000004">Todo:</a></b></dt><dd>Refactoring </dd></dl>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a id="a93774d1792effab8a46379c6781729f0"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a93774d1792effab8a46379c6781729f0">&#9670;&nbsp;</a></span>Tree()</h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="../../d2/d4d/a01079.php">mcd::Tree</a>&lt; T &gt;::<a class="el" href="../../d2/d4d/a01079.php">Tree</a> </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="../../dd/d2d/a00229.php#a476a24d6aeedfa55efcaee6379946a75">TREE_SORT</a>&#160;</td>
          <td class="paramname"><em>sorting</em> = <code><a class="el" href="../../dd/d2d/a00229.php#a476a24d6aeedfa55efcaee6379946a75a8f22891e42808a1ec2280811f4954151">ASC</a></code></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span><span class="mlabel">explicit</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">
<div class="dynheader">
Here is the call graph for this function:</div>
<div class="dyncontent">
<div class="center"><img src="../../d2/d4d/a01079_a93774d1792effab8a46379c6781729f0_cgraph.png" border="0" usemap="#d2/d4d/a01079_a93774d1792effab8a46379c6781729f0_cgraph" alt=""/></div>
<map name="d2/d4d/a01079_a93774d1792effab8a46379c6781729f0_cgraph" id="d2/d4d/a01079_a93774d1792effab8a46379c6781729f0_cgraph">
<area shape="rect" id="node2" href="../../dd/d2d/a00229.php#aa17a2314efb86933584ae451318a17da" title="Function to sort a tree ascendently depending on weights. " alt="" coords="172,5,307,32"/>
<area shape="rect" id="node3" href="../../dd/d2d/a00229.php#a1865ef6e7eed9ac5fa5b177b3f8dd1e9" title="Function to sort a tree descendently depending on weights. " alt="" coords="168,56,311,83"/>
</map>
</div>

</div>
</div>
<a id="a44571a01497b2ac582c292c8bad9de33"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a44571a01497b2ac582c292c8bad9de33">&#9670;&nbsp;</a></span>~Tree()</h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="../../d2/d4d/a01079.php">mcd::Tree</a>&lt; T &gt;::~<a class="el" href="../../d2/d4d/a01079.php">Tree</a> </td>
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
<a id="a20ba766efa9e94d90d156432d6f101b1"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a20ba766efa9e94d90d156432d6f101b1">&#9670;&nbsp;</a></span>add()</h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">void <a class="el" href="../../d2/d4d/a01079.php">mcd::Tree</a>&lt; T &gt;::add </td>
          <td>(</td>
          <td class="paramtype">T&#160;</td>
          <td class="paramname"><em>data</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="../../dd/d2d/a00229.php#a0d3d39a7992ee9e893a83ab18066f79d">NodeWeight</a>&#160;</td>
          <td class="paramname"><em>weight</em>&#160;</td>
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

<p>Add datas in the tree. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">data</td><td>The data to add </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">weight</td><td>The weight of the data</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Return a pointer to the node after treatment </dd></dl>

</div>
</div>
<a id="aa1c0e2b0a15c31c48ed5cade92c4ae3d"></a>
<h2 class="memtitle"><span class="permalink"><a href="#aa1c0e2b0a15c31c48ed5cade92c4ae3d">&#9670;&nbsp;</a></span>applyForEach()</h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">void <a class="el" href="../../d2/d4d/a01079.php">mcd::Tree</a>&lt; T &gt;::applyForEach </td>
          <td>(</td>
          <td class="paramtype">void(*)(<a class="el" href="../../dd/d2d/a00229.php#dd/d80/a01075">Node</a>&lt; T &gt; *, long int)&#160;</td>
          <td class="paramname"><em>func</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Do something for each node. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">func</td><td>The function to apply</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>void </dd></dl>

</div>
</div>
<a id="aaf42d9cae430064e1b52b8cd3e57ee42"></a>
<h2 class="memtitle"><span class="permalink"><a href="#aaf42d9cae430064e1b52b8cd3e57ee42">&#9670;&nbsp;</a></span>asc()</h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">void <a class="el" href="../../d2/d4d/a01079.php">mcd::Tree</a>&lt; T &gt;::asc </td>
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

<p>Set the sorter ascending. </p>
<div class="dynheader">
Here is the call graph for this function:</div>
<div class="dyncontent">
<div class="center"><img src="../../d2/d4d/a01079_aaf42d9cae430064e1b52b8cd3e57ee42_cgraph.png" border="0" usemap="#d2/d4d/a01079_aaf42d9cae430064e1b52b8cd3e57ee42_cgraph" alt=""/></div>
<map name="d2/d4d/a01079_aaf42d9cae430064e1b52b8cd3e57ee42_cgraph" id="d2/d4d/a01079_aaf42d9cae430064e1b52b8cd3e57ee42_cgraph">
<area shape="rect" id="node2" href="../../dd/d2d/a00229.php#aa17a2314efb86933584ae451318a17da" title="Function to sort a tree ascendently depending on weights. " alt="" coords="164,5,299,32"/>
</map>
</div>

</div>
</div>
<a id="a22b22135964e818cd9d0ef9ded9f39de"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a22b22135964e818cd9d0ef9ded9f39de">&#9670;&nbsp;</a></span>convert()</h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T &gt; </div>
<div class="memtemplate">
template&lt;typename U &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static std::vector&lt;std::pair&lt;T, <a class="el" href="../../dd/d2d/a00229.php#a0d3d39a7992ee9e893a83ab18066f79d">NodeWeight</a>&gt; &gt; <a class="el" href="../../d2/d4d/a01079.php">mcd::Tree</a>&lt; T &gt;::convert </td>
          <td>(</td>
          <td class="paramtype">std::vector&lt; std::pair&lt; T, U &gt;&gt;&#160;</td>
          <td class="paramname"><em>in</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Return an array format for the tree. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">in</td><td>The value to convert</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Return <em>in</em> converted for the tree </dd></dl>

</div>
</div>
<a id="a3a02b5886471e9607d6dd9caa3216657"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a3a02b5886471e9607d6dd9caa3216657">&#9670;&nbsp;</a></span>create()</h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">void <a class="el" href="../../d2/d4d/a01079.php">mcd::Tree</a>&lt; T &gt;::create </td>
          <td>(</td>
          <td class="paramtype">std::vector&lt; std::pair&lt; T, <a class="el" href="../../dd/d2d/a00229.php#a0d3d39a7992ee9e893a83ab18066f79d">NodeWeight</a> &gt;&gt;&#160;</td>
          <td class="paramname"><em>datas</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Create a binary tree with a custom sort function. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">datas</td><td>All the datas for the tree</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>void </dd></dl>

</div>
</div>
<a id="a52f3b03c077b82ded999b5cbd197f1e3"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a52f3b03c077b82ded999b5cbd197f1e3">&#9670;&nbsp;</a></span>desc()</h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">void <a class="el" href="../../d2/d4d/a01079.php">mcd::Tree</a>&lt; T &gt;::desc </td>
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

<p>Set the sorter descending. </p>
<div class="dynheader">
Here is the call graph for this function:</div>
<div class="dyncontent">
<div class="center"><img src="../../d2/d4d/a01079_a52f3b03c077b82ded999b5cbd197f1e3_cgraph.png" border="0" usemap="#d2/d4d/a01079_a52f3b03c077b82ded999b5cbd197f1e3_cgraph" alt=""/></div>
<map name="d2/d4d/a01079_a52f3b03c077b82ded999b5cbd197f1e3_cgraph" id="d2/d4d/a01079_a52f3b03c077b82ded999b5cbd197f1e3_cgraph">
<area shape="rect" id="node2" href="../../dd/d2d/a00229.php#a1865ef6e7eed9ac5fa5b177b3f8dd1e9" title="Function to sort a tree descendently depending on weights. " alt="" coords="171,5,313,32"/>
</map>
</div>

</div>
</div>
<a id="a38b40b07bade18a081d80596983dd16c"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a38b40b07bade18a081d80596983dd16c">&#9670;&nbsp;</a></span>equilibrate()</h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">void <a class="el" href="../../d2/d4d/a01079.php">mcd::Tree</a>&lt; T &gt;::equilibrate </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="../../dd/d2d/a00229.php#a476a24d6aeedfa55efcaee6379946a75">TREE_SORT</a>&#160;</td>
          <td class="paramname"><em>sort</em> = <code><a class="el" href="../../dd/d2d/a00229.php#a476a24d6aeedfa55efcaee6379946a75a8f22891e42808a1ec2280811f4954151">ASC</a></code></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Equilibrate the tree. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">sort</td><td>Choose the sorting order with a TREE_SORT</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>void </dd></dl>

</div>
</div>
<a id="a5f28587248a842f1ff72837a8132c00e"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a5f28587248a842f1ff72837a8132c00e">&#9670;&nbsp;</a></span>find()</h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">std::pair&lt;<a class="el" href="../../dd/d2d/a00229.php#dd/d80/a01075">Node</a>&lt;T&gt;*, std::string&gt; <a class="el" href="../../d2/d4d/a01079.php">mcd::Tree</a>&lt; T &gt;::find </td>
          <td>(</td>
          <td class="paramtype">T&#160;</td>
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

<p>Find a value in the tree and return the node and the path to the node. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">value</td><td>The value to find in the tree</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Return the node and the path to this node from the root </dd></dl>

</div>
</div>
<a id="a634efe609117c9533707b9f30bd0c488"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a634efe609117c9533707b9f30bd0c488">&#9670;&nbsp;</a></span>getLeftCount()</h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">size_t <a class="el" href="../../d2/d4d/a01079.php">mcd::Tree</a>&lt; T &gt;::getLeftCount </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="../../dd/d2d/a00229.php#dd/d80/a01075">Node</a>&lt; T &gt; *&#160;</td>
          <td class="paramname"><em>node</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Get the depth on left. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">node</td><td>The root node of the tree</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Return the number of nodes on the left </dd></dl>

</div>
</div>
<a id="ada7f6fc4dba1856a8aae67983ba5544b"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ada7f6fc4dba1856a8aae67983ba5544b">&#9670;&nbsp;</a></span>getRightCount()</h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">size_t <a class="el" href="../../d2/d4d/a01079.php">mcd::Tree</a>&lt; T &gt;::getRightCount </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="../../dd/d2d/a00229.php#dd/d80/a01075">Node</a>&lt; T &gt; *&#160;</td>
          <td class="paramname"><em>node</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Get the depth on right. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">node</td><td>The root node of the tree</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Return the number of nodes on the right </dd></dl>

</div>
</div>
<a id="a069d03de16fc9d3db25d7ec67ed6811b"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a069d03de16fc9d3db25d7ec67ed6811b">&#9670;&nbsp;</a></span>height()</h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">size_t <a class="el" href="../../d2/d4d/a01079.php">mcd::Tree</a>&lt; T &gt;::height </td>
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

<p>Return the height of the tree. </p>
<dl class="section return"><dt>Returns</dt><dd>Return the height of the tree </dd></dl>

</div>
</div>
<a id="a53cd621cced254067f1ebac4e2abe8df"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a53cd621cced254067f1ebac4e2abe8df">&#9670;&nbsp;</a></span>insert()</h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">void <a class="el" href="../../d2/d4d/a01079.php">mcd::Tree</a>&lt; T &gt;::insert </td>
          <td>(</td>
          <td class="paramtype">std::pair&lt; T, <a class="el" href="../../dd/d2d/a00229.php#a0d3d39a7992ee9e893a83ab18066f79d">NodeWeight</a> &gt;&#160;</td>
          <td class="paramname"><em>datas</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Insert datas in the tree. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">datas</td><td>The datas for the new node</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>void </dd></dl>

</div>
</div>
<a id="a279d0472004ed9618dde58fcfd6bb508"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a279d0472004ed9618dde58fcfd6bb508">&#9670;&nbsp;</a></span>onCompare()</h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">void <a class="el" href="../../d2/d4d/a01079.php">mcd::Tree</a>&lt; T &gt;::onCompare </td>
          <td>(</td>
          <td class="paramtype">void(*)(<a class="el" href="../../dd/d2d/a00229.php#dd/d80/a01075">Node</a>&lt; T &gt; *, <a class="el" href="../../dd/d2d/a00229.php#dd/d80/a01075">Node</a>&lt; T &gt; *)&#160;</td>
          <td class="paramname"><em>func</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>A setter for the comparator function. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">func</td><td>The function to use to the weights' comparison</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>void </dd></dl>

</div>
</div>
<a id="ad9cda4b45c11828381cde08fa48ae94d"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ad9cda4b45c11828381cde08fa48ae94d">&#9670;&nbsp;</a></span>onDelete()</h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">void <a class="el" href="../../d2/d4d/a01079.php">mcd::Tree</a>&lt; T &gt;::onDelete </td>
          <td>(</td>
          <td class="paramtype">void(*)(<a class="el" href="../../dd/d2d/a00229.php#dd/d80/a01075">Node</a>&lt; T &gt; *)&#160;</td>
          <td class="paramname"><em>func</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>A setter for the deletion function. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">func</td><td>The function to use on the destroy of the object</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>void </dd></dl>

</div>
</div>
<a id="a1e6f8d4ad100be50a970848a0c8437d1"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a1e6f8d4ad100be50a970848a0c8437d1">&#9670;&nbsp;</a></span>print()</h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">void <a class="el" href="../../d2/d4d/a01079.php">mcd::Tree</a>&lt; T &gt;::print </td>
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

<p>Print the tree. </p>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="../../d3/de5/a00209.php">Tree.hpp</a></li>
</ul>
</div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../dd/d2d/a00229.php">mcd</a></li><li class="navelem"><a class="el" href="../../d2/d4d/a01079.php">Tree</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
