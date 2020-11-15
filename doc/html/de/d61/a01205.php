<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.20"/>
		<title>C++: mcd::check::is_special_struct&lt; T &gt; Class Template Reference</title>
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
									&#160;<span id="projectnumber">1.6.2.2</span>
								</div>
								<div id="projectbrief">My own C++ features</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<?php
				$text = "Generated on Sun Nov 15 2020 19:28:34 for C++ by";
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
$(document).ready(function(){initNavTree('de/d61/a01205.php','../../'); initResizable(); });
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
<a href="#pub-static-attribs">Static Public Attributes</a> &#124;
<a href="../../d4/d5d/a01202.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">mcd::check::is_special_struct&lt; T &gt; Class Template Reference</div>  </div>
</div><!--header-->
<div class="contents">

<p>A template class to test if T is a special struct.  
 <a href="../../de/d61/a01205.php#details">More...</a></p>

<p><code>#include &lt;check.hpp&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-static-attribs"></a>
Static Public Attributes</h2></td></tr>
<tr class="memitem:adb3d78bf0acb5e62f39d063521210081"><td class="memItemLeft" align="right" valign="top">static const bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../de/d61/a01205.php#adb3d78bf0acb5e62f39d063521210081">value</a></td></tr>
<tr class="separator:adb3d78bf0acb5e62f39d063521210081"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><h3>template&lt;typename T&gt;<br />
class mcd::check::is_special_struct&lt; T &gt;</h3>

<p>A template class to test if T is a special struct. </p>
</div><h2 class="groupheader">Member Data Documentation</h2>
<a id="adb3d78bf0acb5e62f39d063521210081"></a>
<h2 class="memtitle"><span class="permalink"><a href="#adb3d78bf0acb5e62f39d063521210081">&#9670;&nbsp;</a></span>value</h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">const bool <a class="el" href="../../de/d61/a01205.php">mcd::check::is_special_struct</a>&lt; T &gt;::value</td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">
<b>Initial value:</b><div class="fragment"><div class="line">=</div>
<div class="line">                <a class="code" href="../../dc/d06/a01153.php#a9472e28f114b77cc3153ffc8d8f1e22b">is_pair&lt; T &gt;::value</a> || <a class="code" href="../../d9/d25/a01157.php#aead7729c41ce0e6681cf2a5a58724b1c">is_trio&lt; T &gt;::value</a> || <a class="code" href="../../dc/d81/a01161.php#a7a705037a3a5261728af10be1a077032">is_quatuor&lt; T &gt;::value</a></div>
</div><!-- fragment -->
</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="../../dc/dee/a00053.php">check.hpp</a></li>
</ul>
</div><!-- contents -->
</div><!-- doc-content -->
<div class="ttc" id="aa01157_php_aead7729c41ce0e6681cf2a5a58724b1c"><div class="ttname"><a href="../../d9/d25/a01157.php#aead7729c41ce0e6681cf2a5a58724b1c">mcd::check::is_trio::value</a></div><div class="ttdeci">static const bool value</div><div class="ttdef"><b>Definition:</b> check.hpp:167</div></div>
<div class="ttc" id="aa01161_php_a7a705037a3a5261728af10be1a077032"><div class="ttname"><a href="../../dc/d81/a01161.php#a7a705037a3a5261728af10be1a077032">mcd::check::is_quatuor::value</a></div><div class="ttdeci">static const bool value</div><div class="ttdef"><b>Definition:</b> check.hpp:182</div></div>
<div class="ttc" id="aa01153_php_a9472e28f114b77cc3153ffc8d8f1e22b"><div class="ttname"><a href="../../dc/d06/a01153.php#a9472e28f114b77cc3153ffc8d8f1e22b">mcd::check::is_pair::value</a></div><div class="ttdeci">static const bool value</div><div class="ttdef"><b>Definition:</b> check.hpp:152</div></div>
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../db/d12/a00268.php">mcd</a></li><li class="navelem"><a class="el" href="../../d9/dd6/a00272.php">check</a></li><li class="navelem"><a class="el" href="../../de/d61/a01205.php">is_special_struct</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
