<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.20"/>
		<title>C++: mcd::NotCopyable Class Reference</title>
		<link href="../../tabs.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="../../jquery.js"></script>
		<script type="text/javascript" src="../../dynsections.js"></script>
		<link href="../../navtree.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="../../resize.js"></script>
<script type="text/javascript" src="../../navtreedata.js"></script>
<script type="text/javascript" src="../../navtree.js"></script>
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
									&#160;<span id="projectnumber">1.6.1.1</span>
								</div>
								<div id="projectbrief">My own C++ features</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<?php
				$text = "Generated on Sun Nov 15 2020 11:00:16 for C++ by";
				$text = substr($text, 0, sizeof($text) - 4);
				$tmp = substr($text, 17);
				$tmp = substr($tmp, 0, strpos($tmp, " for"));
				$lastModif = date("l jS \of F Y \a\\t H:i:s", strtotime($tmp));
			?>
		<!-- end header part -->
<!-- Generated by Doxygen 1.8.20 -->
<script type="text/javascript">
/* @license magnet:?xt=urn:btih:cf05388f2679ee054f2beb29a391d25f4e673ac3&amp;dn=gpl-2.0.txt GPL-v2 */
var searchBox = new SearchBox("searchBox", "../../search",false,'Search');
/* @license-end */
</script>
<script type="text/javascript" src="../../menudata.js"></script>
<script type="text/javascript" src="../../menu.js"></script>
<script type="text/javascript">
/* @license magnet:?xt=urn:btih:cf05388f2679ee054f2beb29a391d25f4e673ac3&amp;dn=gpl-2.0.txt GPL-v2 */
$(function() {
  initMenu('../../',true,false,'search.php','Search');
  $(document).ready(function() { init_search(); });
});
/* @license-end */</script>
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
/* @license magnet:?xt=urn:btih:cf05388f2679ee054f2beb29a391d25f4e673ac3&amp;dn=gpl-2.0.txt GPL-v2 */
$(document).ready(function(){initNavTree('de/d6c/a01349.php','../../'); initResizable(); });
/* @license-end */
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
<a href="../../d9/de4/a01346.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">mcd::NotCopyable Class Reference</div>  </div>
</div><!--header-->
<div class="contents">

<p>A class to let some other not to be copyable.  
 <a href="../../de/d6c/a01349.php#details">More...</a></p>

<p><code>#include &lt;NotCopyable.hpp&gt;</code></p>
<div class="dynheader">
Inheritance diagram for mcd::NotCopyable:</div>
<div class="dyncontent">
<div class="center"><img src="../../d7/d57/a01348.png" border="0" usemap="#amcd_1_1NotCopyable_inherit__map" alt="Inheritance graph"/></div>
<map name="mcd_1_1NotCopyable_inherit__map" id="mcd_1_1NotCopyable_inherit__map">
<area shape="rect" title="A class to let some other not to be copyable." alt="" coords="167,5,297,32"/>
<area shape="rect" href="../../d3/d0b/a01253.php" title="A class to be the parent for every crypt class." alt="" coords="185,80,279,107"/>
<area shape="rect" href="../../d9/de7/a01257.php" title="A class to use the cesar algorithm for encryption." alt="" coords="5,155,96,181"/>
<area shape="rect" href="../../da/dd8/a01265.php" title="A class to test a homemade algorithm for encryption." alt="" coords="121,155,226,181"/>
<area shape="rect" href="../../d6/d16/a01269.php" title="A class to use the RSA algorithm for encryption." alt="" coords="249,155,332,181"/>
<area shape="rect" href="../../de/d34/a01261.php" title="An implementation of sha256 encryption." alt="" coords="356,155,447,181"/>
</map>
<center><span class="legend">[<a target="top" href="../../graph_legend.php">legend</a>]</span></center></div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:aa40da048522b578e9c2cc9f73c1a0d92"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../de/d6c/a01349.php#aa40da048522b578e9c2cc9f73c1a0d92">NotCopyable</a> ()</td></tr>
<tr class="memdesc:aa40da048522b578e9c2cc9f73c1a0d92"><td class="mdescLeft">&#160;</td><td class="mdescRight">The constructor of the class.  <a href="../../de/d6c/a01349.php#aa40da048522b578e9c2cc9f73c1a0d92">More...</a><br /></td></tr>
<tr class="separator:aa40da048522b578e9c2cc9f73c1a0d92"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a5efcd02383468e37e9c960f3d6f9d14c"><td class="memItemLeft" align="right" valign="top">virtual&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../de/d6c/a01349.php#a5efcd02383468e37e9c960f3d6f9d14c">~NotCopyable</a> ()</td></tr>
<tr class="separator:a5efcd02383468e37e9c960f3d6f9d14c"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>A class to let some other not to be copyable. </p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a id="aa40da048522b578e9c2cc9f73c1a0d92"></a>
<h2 class="memtitle"><span class="permalink"><a href="#aa40da048522b578e9c2cc9f73c1a0d92">&#9670;&nbsp;</a></span>NotCopyable()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">mcd::NotCopyable::NotCopyable </td>
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

<p>The constructor of the class. </p>

</div>
</div>
<a id="a5efcd02383468e37e9c960f3d6f9d14c"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a5efcd02383468e37e9c960f3d6f9d14c">&#9670;&nbsp;</a></span>~NotCopyable()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual mcd::NotCopyable::~NotCopyable </td>
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
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="../../dc/de6/a00167.php">NotCopyable.hpp</a></li>
</ul>
</div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../db/d12/a00268.php">mcd</a></li><li class="navelem"><a class="el" href="../../de/d6c/a01349.php">NotCopyable</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
