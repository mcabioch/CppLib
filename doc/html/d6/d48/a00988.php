<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.13"/>
		<title>C++: mcd::PathfindingException Class Reference</title>
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
				$text = "Generated on Tue Sep 24 2019 18:56:58 for C++ by";
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
$(document).ready(function(){initNavTree('d6/d48/a00988.php','../../');});
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
<a href="#pub-types">Public Types</a> &#124;
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="#pub-static-methods">Static Public Member Functions</a> &#124;
<a href="../../da/deb/a00985.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">mcd::PathfindingException Class Reference</div>  </div>
</div><!--header-->
<div class="contents">

<p>All exceptions that could be thrown by the pathfinding algorithm.  
 <a href="../../d6/d48/a00988.php#details">More...</a></p>

<p><code>#include &lt;PathfindingException.hpp&gt;</code></p>
<div class="dynheader">
Inheritance diagram for mcd::PathfindingException:</div>
<div class="dyncontent">
<div class="center"><img src="../../d4/d21/a00987.png" border="0" usemap="#mcd_1_1PathfindingException_inherit__map" alt="Inheritance graph"/></div>
<map name="mcd_1_1PathfindingException_inherit__map" id="mcd_1_1PathfindingException_inherit__map">
<area shape="rect" id="node2" title="STL class. " alt="" coords="43,5,147,32"/>
</map>
<center><span class="legend">[<a target="top" href="../../graph_legend.php">legend</a>]</span></center></div>
<div class="dynheader">
Collaboration diagram for mcd::PathfindingException:</div>
<div class="dyncontent">
<div class="center"><img src="../../d3/d7b/a00986.png" border="0" usemap="#mcd_1_1PathfindingException_coll__map" alt="Collaboration graph"/></div>
<map name="mcd_1_1PathfindingException_coll__map" id="mcd_1_1PathfindingException_coll__map">
<area shape="rect" id="node2" title="STL class. " alt="" coords="43,5,147,32"/>
</map>
<center><span class="legend">[<a target="top" href="../../graph_legend.php">legend</a>]</span></center></div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-types"></a>
Public Types</h2></td></tr>
<tr class="memitem:a699cc4df8cc94d467e7372072d230b58"><td class="memItemLeft" align="right" valign="top">enum &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d6/d48/a00988.php#a699cc4df8cc94d467e7372072d230b58">PathfindingErrorCode</a> { <a class="el" href="../../d6/d48/a00988.php#a699cc4df8cc94d467e7372072d230b58a953fb2c2f911816df4bea409b251899d">NONE</a>, 
<a class="el" href="../../d6/d48/a00988.php#a699cc4df8cc94d467e7372072d230b58aa230dcfca5a342a5c42c16a4e73b2814">ARRIVED</a>, 
<a class="el" href="../../d6/d48/a00988.php#a699cc4df8cc94d467e7372072d230b58a435f7106806d5ce5f7746963f0605995">LOST</a>, 
<a class="el" href="../../d6/d48/a00988.php#a699cc4df8cc94d467e7372072d230b58a4a49678a71d5baef014ce968c4503982">OTHER</a>
 }</td></tr>
<tr class="separator:a699cc4df8cc94d467e7372072d230b58"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:a468ceec0e52bd2d0843313bf80691625"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d6/d48/a00988.php#a468ceec0e52bd2d0843313bf80691625">PathfindingException</a> (<a class="el" href="../../d6/d48/a00988.php#a699cc4df8cc94d467e7372072d230b58">PathfindingErrorCode</a> error=PathfindingErrorCode::NONE, std::string const &amp;explaination=&quot;&quot;)  throw ()</td></tr>
<tr class="memdesc:a468ceec0e52bd2d0843313bf80691625"><td class="mdescLeft">&#160;</td><td class="mdescRight">The constructor of the class.  <a href="#a468ceec0e52bd2d0843313bf80691625">More...</a><br /></td></tr>
<tr class="separator:a468ceec0e52bd2d0843313bf80691625"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a22d196716aa61adb8fa0e0d48320c9ab"><td class="memItemLeft" align="right" valign="top">virtual&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d6/d48/a00988.php#a22d196716aa61adb8fa0e0d48320c9ab">~PathfindingException</a> ()  throw ()</td></tr>
<tr class="separator:a22d196716aa61adb8fa0e0d48320c9ab"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a71da44443282ca94d2c9e10a9be0dafc"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d6/d48/a00988.php#a71da44443282ca94d2c9e10a9be0dafc">PathfindingException</a> (const <a class="el" href="../../d6/d48/a00988.php">PathfindingException</a> &amp;other)  throw ()</td></tr>
<tr class="separator:a71da44443282ca94d2c9e10a9be0dafc"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a92a9aea3e0fc189dc0c17a78ffa68bdf"><td class="memItemLeft" align="right" valign="top">virtual const char *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d6/d48/a00988.php#a92a9aea3e0fc189dc0c17a78ffa68bdf">what</a> () const  throw ()</td></tr>
<tr class="memdesc:a92a9aea3e0fc189dc0c17a78ffa68bdf"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the explaination of the exception.  <a href="#a92a9aea3e0fc189dc0c17a78ffa68bdf">More...</a><br /></td></tr>
<tr class="separator:a92a9aea3e0fc189dc0c17a78ffa68bdf"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a922e8cbd5025f4f17e45889055df165c"><td class="memItemLeft" align="right" valign="top"><a class="el" href="../../d6/d48/a00988.php#a699cc4df8cc94d467e7372072d230b58">PathfindingErrorCode</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d6/d48/a00988.php#a922e8cbd5025f4f17e45889055df165c">getErrorCode</a> () const  throw ()</td></tr>
<tr class="memdesc:a922e8cbd5025f4f17e45889055df165c"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the error code of the exception.  <a href="#a922e8cbd5025f4f17e45889055df165c">More...</a><br /></td></tr>
<tr class="separator:a922e8cbd5025f4f17e45889055df165c"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-static-methods"></a>
Static Public Member Functions</h2></td></tr>
<tr class="memitem:a9fcff7a44db764decbb680479144b97b"><td class="memItemLeft" align="right" valign="top">static void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d6/d48/a00988.php#a9fcff7a44db764decbb680479144b97b">Arrived</a> ()</td></tr>
<tr class="separator:a9fcff7a44db764decbb680479144b97b"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a933816a487769eec830729b051d0fbcd"><td class="memItemLeft" align="right" valign="top">static void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d6/d48/a00988.php#a933816a487769eec830729b051d0fbcd">Lost</a> ()</td></tr>
<tr class="separator:a933816a487769eec830729b051d0fbcd"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>All exceptions that could be thrown by the pathfinding algorithm. </p>
</div><h2 class="groupheader">Member Enumeration Documentation</h2>
<a id="a699cc4df8cc94d467e7372072d230b58"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a699cc4df8cc94d467e7372072d230b58">&#9670;&nbsp;</a></span>PathfindingErrorCode</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">enum <a class="el" href="../../d6/d48/a00988.php#a699cc4df8cc94d467e7372072d230b58">mcd::PathfindingException::PathfindingErrorCode</a></td>
        </tr>
      </table>
</div><div class="memdoc">
<table class="fieldtable">
<tr><th colspan="2">Enumerator</th></tr><tr><td class="fieldname"><a id="a699cc4df8cc94d467e7372072d230b58a953fb2c2f911816df4bea409b251899d"></a>NONE&#160;</td><td class="fielddoc"></td></tr>
<tr><td class="fieldname"><a id="a699cc4df8cc94d467e7372072d230b58aa230dcfca5a342a5c42c16a4e73b2814"></a>ARRIVED&#160;</td><td class="fielddoc"></td></tr>
<tr><td class="fieldname"><a id="a699cc4df8cc94d467e7372072d230b58a435f7106806d5ce5f7746963f0605995"></a>LOST&#160;</td><td class="fielddoc"></td></tr>
<tr><td class="fieldname"><a id="a699cc4df8cc94d467e7372072d230b58a4a49678a71d5baef014ce968c4503982"></a>OTHER&#160;</td><td class="fielddoc"></td></tr>
</table>

</div>
</div>
<h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a id="a468ceec0e52bd2d0843313bf80691625"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a468ceec0e52bd2d0843313bf80691625">&#9670;&nbsp;</a></span>PathfindingException() <span class="overload">[1/2]</span></h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">mcd::PathfindingException::PathfindingException </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="../../d6/d48/a00988.php#a699cc4df8cc94d467e7372072d230b58">PathfindingErrorCode</a>&#160;</td>
          <td class="paramname"><em>error</em> = <code>PathfindingErrorCode::NONE</code>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">std::string const &amp;&#160;</td>
          <td class="paramname"><em>explaination</em> = <code>&quot;&quot;</code>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
        <tr>
          <td align="right">throw </td><td>(</td><td colspan="2"></td>
        </tr>
        <tr>
          <td align="right"></td><td>)</td><td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>The constructor of the class. </p>

</div>
</div>
<a id="a22d196716aa61adb8fa0e0d48320c9ab"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a22d196716aa61adb8fa0e0d48320c9ab">&#9670;&nbsp;</a></span>~PathfindingException()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual mcd::PathfindingException::~PathfindingException </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
        <tr>
          <td align="right">throw </td><td>(</td><td colspan="2"></td>
        </tr>
        <tr>
          <td align="right"></td><td>)</td><td></td><td></td>
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
<a id="a71da44443282ca94d2c9e10a9be0dafc"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a71da44443282ca94d2c9e10a9be0dafc">&#9670;&nbsp;</a></span>PathfindingException() <span class="overload">[2/2]</span></h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">mcd::PathfindingException::PathfindingException </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="../../d6/d48/a00988.php">PathfindingException</a> &amp;&#160;</td>
          <td class="paramname"><em>other</em></td><td>)</td>
          <td></td>
        </tr>
        <tr>
          <td align="right">throw </td><td>(</td><td colspan="2"></td>
        </tr>
        <tr>
          <td align="right"></td><td>)</td><td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a id="a9fcff7a44db764decbb680479144b97b"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a9fcff7a44db764decbb680479144b97b">&#9670;&nbsp;</a></span>Arrived()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static void mcd::PathfindingException::Arrived </td>
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

</div>
</div>
<a id="a922e8cbd5025f4f17e45889055df165c"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a922e8cbd5025f4f17e45889055df165c">&#9670;&nbsp;</a></span>getErrorCode()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="../../d6/d48/a00988.php#a699cc4df8cc94d467e7372072d230b58">PathfindingErrorCode</a> mcd::PathfindingException::getErrorCode </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
        <tr>
          <td align="right">throw </td><td>(</td><td colspan="2"></td>
        </tr>
        <tr>
          <td align="right"></td><td>)</td><td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Return the error code of the exception. </p>
<div class="dynheader">
Here is the call graph for this function:</div>
<div class="dyncontent">
<div class="center"><img src="../../d6/d48/a00988_a922e8cbd5025f4f17e45889055df165c_cgraph.png" border="0" usemap="#d6/d48/a00988_a922e8cbd5025f4f17e45889055df165c_cgraph" alt=""/></div>
<map name="d6/d48/a00988_a922e8cbd5025f4f17e45889055df165c_cgraph" id="d6/d48/a00988_a922e8cbd5025f4f17e45889055df165c_cgraph">
<area shape="rect" id="node2" href="../../d6/d48/a00988.php#a9fcff7a44db764decbb680479144b97b" title="mcd::PathfindingException\l::Arrived" alt="" coords="232,5,411,47"/>
<area shape="rect" id="node3" href="../../d6/d48/a00988.php#a933816a487769eec830729b051d0fbcd" title="mcd::PathfindingException\l::Lost" alt="" coords="232,71,411,112"/>
</map>
</div>

</div>
</div>
<a id="a933816a487769eec830729b051d0fbcd"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a933816a487769eec830729b051d0fbcd">&#9670;&nbsp;</a></span>Lost()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static void mcd::PathfindingException::Lost </td>
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

</div>
</div>
<a id="a92a9aea3e0fc189dc0c17a78ffa68bdf"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a92a9aea3e0fc189dc0c17a78ffa68bdf">&#9670;&nbsp;</a></span>what()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual const char* mcd::PathfindingException::what </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
        <tr>
          <td align="right">throw </td><td>(</td><td colspan="2"></td>
        </tr>
        <tr>
          <td align="right"></td><td>)</td><td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span><span class="mlabel">virtual</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Return the explaination of the exception. </p>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="../../d7/dce/a00143.php">PathfindingException.hpp</a></li>
</ul>
</div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../dd/ded/a00211.php">mcd</a></li><li class="navelem"><a class="el" href="../../d6/d48/a00988.php">PathfindingException</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
