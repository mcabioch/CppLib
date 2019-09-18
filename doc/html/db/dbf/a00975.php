<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.13"/>
		<title>C++: mcd::PathfindingNode Struct Reference</title>
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
				$text = "Generated on Tue Sep 17 2019 17:17:10 for C++ by";
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
$(document).ready(function(){initNavTree('db/dbf/a00975.php','../../');});
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
<a href="#pub-attribs">Public Attributes</a> &#124;
<a href="#friends">Friends</a> &#124;
<a href="../../de/d4e/a00972.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">mcd::PathfindingNode Struct Reference</div>  </div>
</div><!--header-->
<div class="contents">

<p>A node for the path.  
 <a href="../../db/dbf/a00975.php#details">More...</a></p>

<p><code>#include &lt;Path.hpp&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-attribs"></a>
Public Attributes</h2></td></tr>
<tr class="memitem:ac252a8bf89c83a96e63604fdb8eb144b"><td class="memItemLeft" align="right" valign="top">size_t&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/dbf/a00975.php#ac252a8bf89c83a96e63604fdb8eb144b">id</a></td></tr>
<tr class="separator:ac252a8bf89c83a96e63604fdb8eb144b"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="friends"></a>
Friends</h2></td></tr>
<tr class="memitem:af8e324237235cd148492d82eadf94e0c"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/dbf/a00975.php#af8e324237235cd148492d82eadf94e0c">operator==</a> (const <a class="el" href="../../db/dbf/a00975.php">PathfindingNode</a> &amp;a, const <a class="el" href="../../db/dbf/a00975.php">PathfindingNode</a> &amp;b)</td></tr>
<tr class="separator:af8e324237235cd148492d82eadf94e0c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:accb5b160fd3f52084b8b83c8dddaae93"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/dbf/a00975.php#accb5b160fd3f52084b8b83c8dddaae93">operator&lt;</a> (const <a class="el" href="../../db/dbf/a00975.php">PathfindingNode</a> &amp;a, const <a class="el" href="../../db/dbf/a00975.php">PathfindingNode</a> &amp;b)</td></tr>
<tr class="separator:accb5b160fd3f52084b8b83c8dddaae93"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aeba800fc4624a565bb41c02943679938"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/dbf/a00975.php#aeba800fc4624a565bb41c02943679938">operator&gt;</a> (const <a class="el" href="../../db/dbf/a00975.php">PathfindingNode</a> &amp;a, const <a class="el" href="../../db/dbf/a00975.php">PathfindingNode</a> &amp;b)</td></tr>
<tr class="separator:aeba800fc4624a565bb41c02943679938"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a3fe0870c6659f0faf93353dae13f198b"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/dbf/a00975.php#a3fe0870c6659f0faf93353dae13f198b">operator!=</a> (const <a class="el" href="../../db/dbf/a00975.php">PathfindingNode</a> &amp;a, const <a class="el" href="../../db/dbf/a00975.php">PathfindingNode</a> &amp;b)</td></tr>
<tr class="separator:a3fe0870c6659f0faf93353dae13f198b"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a3a838d53f4f20b9d921b88c936c9b0c6"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/dbf/a00975.php#a3a838d53f4f20b9d921b88c936c9b0c6">operator&lt;=</a> (const <a class="el" href="../../db/dbf/a00975.php">PathfindingNode</a> &amp;a, const <a class="el" href="../../db/dbf/a00975.php">PathfindingNode</a> &amp;b)</td></tr>
<tr class="separator:a3a838d53f4f20b9d921b88c936c9b0c6"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a50c4ea549ad84f73f8eb09fc5aa2bff3"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/dbf/a00975.php#a50c4ea549ad84f73f8eb09fc5aa2bff3">operator&gt;=</a> (const <a class="el" href="../../db/dbf/a00975.php">PathfindingNode</a> &amp;a, const <a class="el" href="../../db/dbf/a00975.php">PathfindingNode</a> &amp;b)</td></tr>
<tr class="separator:a50c4ea549ad84f73f8eb09fc5aa2bff3"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>A node for the path. </p>
</div><h2 class="groupheader">Friends And Related Function Documentation</h2>
<a id="a3fe0870c6659f0faf93353dae13f198b"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a3fe0870c6659f0faf93353dae13f198b">&#9670;&nbsp;</a></span>operator!=</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">bool operator!= </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="../../db/dbf/a00975.php">PathfindingNode</a> &amp;&#160;</td>
          <td class="paramname"><em>a</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="../../db/dbf/a00975.php">PathfindingNode</a> &amp;&#160;</td>
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
<span class="mlabels"><span class="mlabel">friend</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

</div>
</div>
<a id="accb5b160fd3f52084b8b83c8dddaae93"></a>
<h2 class="memtitle"><span class="permalink"><a href="#accb5b160fd3f52084b8b83c8dddaae93">&#9670;&nbsp;</a></span>operator<</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">bool operator&lt; </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="../../db/dbf/a00975.php">PathfindingNode</a> &amp;&#160;</td>
          <td class="paramname"><em>a</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="../../db/dbf/a00975.php">PathfindingNode</a> &amp;&#160;</td>
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
<span class="mlabels"><span class="mlabel">friend</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

</div>
</div>
<a id="a3a838d53f4f20b9d921b88c936c9b0c6"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a3a838d53f4f20b9d921b88c936c9b0c6">&#9670;&nbsp;</a></span>operator<=</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">bool operator&lt;= </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="../../db/dbf/a00975.php">PathfindingNode</a> &amp;&#160;</td>
          <td class="paramname"><em>a</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="../../db/dbf/a00975.php">PathfindingNode</a> &amp;&#160;</td>
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
<span class="mlabels"><span class="mlabel">friend</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

</div>
</div>
<a id="af8e324237235cd148492d82eadf94e0c"></a>
<h2 class="memtitle"><span class="permalink"><a href="#af8e324237235cd148492d82eadf94e0c">&#9670;&nbsp;</a></span>operator==</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">bool operator== </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="../../db/dbf/a00975.php">PathfindingNode</a> &amp;&#160;</td>
          <td class="paramname"><em>a</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="../../db/dbf/a00975.php">PathfindingNode</a> &amp;&#160;</td>
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
<span class="mlabels"><span class="mlabel">friend</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

</div>
</div>
<a id="aeba800fc4624a565bb41c02943679938"></a>
<h2 class="memtitle"><span class="permalink"><a href="#aeba800fc4624a565bb41c02943679938">&#9670;&nbsp;</a></span>operator></h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">bool operator&gt; </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="../../db/dbf/a00975.php">PathfindingNode</a> &amp;&#160;</td>
          <td class="paramname"><em>a</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="../../db/dbf/a00975.php">PathfindingNode</a> &amp;&#160;</td>
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
<span class="mlabels"><span class="mlabel">friend</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

</div>
</div>
<a id="a50c4ea549ad84f73f8eb09fc5aa2bff3"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a50c4ea549ad84f73f8eb09fc5aa2bff3">&#9670;&nbsp;</a></span>operator>=</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">bool operator&gt;= </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="../../db/dbf/a00975.php">PathfindingNode</a> &amp;&#160;</td>
          <td class="paramname"><em>a</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="../../db/dbf/a00975.php">PathfindingNode</a> &amp;&#160;</td>
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
<span class="mlabels"><span class="mlabel">friend</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

</div>
</div>
<h2 class="groupheader">Member Data Documentation</h2>
<a id="ac252a8bf89c83a96e63604fdb8eb144b"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ac252a8bf89c83a96e63604fdb8eb144b">&#9670;&nbsp;</a></span>id</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">size_t mcd::PathfindingNode::id</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<hr/>The documentation for this struct was generated from the following file:<ul>
<li><a class="el" href="../../de/d76/a00134.php">Path.hpp</a></li>
</ul>
</div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../d3/dd1/a00214.php">mcd</a></li><li class="navelem"><a class="el" href="../../db/dbf/a00975.php">PathfindingNode</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>