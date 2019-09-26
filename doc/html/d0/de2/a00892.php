<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.13"/>
		<title>C++: mcd::Crypto Class Reference</title>
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
				$text = "Generated on Thu Sep 26 2019 14:13:35 for C++ by";
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
$(document).ready(function(){initNavTree('d0/de2/a00892.php','../../');});
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
<a href="../../de/dc8/a00889.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">mcd::Crypto Class Reference<span class="mlabels"><span class="mlabel">abstract</span></span></div>  </div>
</div><!--header-->
<div class="contents">

<p>A class to be the parent for every crypt class.  
 <a href="../../d0/de2/a00892.php#details">More...</a></p>

<p><code>#include &lt;cryptage.hpp&gt;</code></p>
<div class="dynheader">
Inheritance diagram for mcd::Crypto:</div>
<div class="dyncontent">
<div class="center"><img src="../../de/dfc/a00891.png" border="0" usemap="#mcd_1_1Crypto_inherit__map" alt="Inheritance graph"/></div>
<map name="mcd_1_1Crypto_inherit__map" id="mcd_1_1Crypto_inherit__map">
<area shape="rect" id="node3" href="../../da/dd6/a00896.php" title="A class to use the cesar algorithm for encryption. " alt="" coords="5,155,96,181"/>
<area shape="rect" id="node4" href="../../d8/d0a/a00904.php" title="A class to test a homemade algorithm for encryption. " alt="" coords="121,155,226,181"/>
<area shape="rect" id="node5" href="../../d0/d85/a00908.php" title="A class to use the RSA algorithm for encryption. " alt="" coords="249,155,332,181"/>
<area shape="rect" id="node6" href="../../d9/db0/a00900.php" title="An implementation of sha256 encryption. " alt="" coords="356,155,447,181"/>
<area shape="rect" id="node2" href="../../da/d17/a00964.php" title="A class to let some other not to be copyable. " alt="" coords="167,5,297,32"/>
</map>
<center><span class="legend">[<a target="top" href="../../graph_legend.php">legend</a>]</span></center></div>
<div class="dynheader">
Collaboration diagram for mcd::Crypto:</div>
<div class="dyncontent">
<div class="center"><img src="../../d7/d46/a00890.png" border="0" usemap="#mcd_1_1Crypto_coll__map" alt="Collaboration graph"/></div>
<map name="mcd_1_1Crypto_coll__map" id="mcd_1_1Crypto_coll__map">
<area shape="rect" id="node2" href="../../da/d17/a00964.php" title="A class to let some other not to be copyable. " alt="" coords="5,5,136,32"/>
</map>
<center><span class="legend">[<a target="top" href="../../graph_legend.php">legend</a>]</span></center></div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:a3f598383428868a9f69502e5de031ea5"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d0/de2/a00892.php#a3f598383428868a9f69502e5de031ea5">Crypto</a> ()</td></tr>
<tr class="separator:a3f598383428868a9f69502e5de031ea5"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a16276f74e2eac6b2174d06361791f056"><td class="memItemLeft" align="right" valign="top">virtual&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d0/de2/a00892.php#a16276f74e2eac6b2174d06361791f056">~Crypto</a> ()</td></tr>
<tr class="separator:a16276f74e2eac6b2174d06361791f056"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a2949148382033667a765326066311f21"><td class="memItemLeft" align="right" valign="top">virtual std::string&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d0/de2/a00892.php#a2949148382033667a765326066311f21">crypt</a> (const std::string &amp;message)=0</td></tr>
<tr class="separator:a2949148382033667a765326066311f21"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a4d131065e81529530b7907ba397af30d"><td class="memItemLeft" align="right" valign="top">virtual std::string&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d0/de2/a00892.php#a4d131065e81529530b7907ba397af30d">decrypt</a> (const std::string &amp;message)=0</td></tr>
<tr class="separator:a4d131065e81529530b7907ba397af30d"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="inherit_header pub_methods_a00964"><td colspan="2" onclick="javascript:toggleInherit('pub_methods_a00964')"><img src="../../closed.png" alt="-"/>&#160;Public Member Functions inherited from <a class="el" href="../../da/d17/a00964.php">mcd::NotCopyable</a></td></tr>
<tr class="memitem:aa40da048522b578e9c2cc9f73c1a0d92 inherit pub_methods_a00964"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../da/d17/a00964.php#aa40da048522b578e9c2cc9f73c1a0d92">NotCopyable</a> ()</td></tr>
<tr class="memdesc:aa40da048522b578e9c2cc9f73c1a0d92 inherit pub_methods_a00964"><td class="mdescLeft">&#160;</td><td class="mdescRight">The constructor of the class.  <a href="../../da/d17/a00964.php#aa40da048522b578e9c2cc9f73c1a0d92">More...</a><br /></td></tr>
<tr class="separator:aa40da048522b578e9c2cc9f73c1a0d92 inherit pub_methods_a00964"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a5efcd02383468e37e9c960f3d6f9d14c inherit pub_methods_a00964"><td class="memItemLeft" align="right" valign="top">virtual&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../da/d17/a00964.php#a5efcd02383468e37e9c960f3d6f9d14c">~NotCopyable</a> ()</td></tr>
<tr class="separator:a5efcd02383468e37e9c960f3d6f9d14c inherit pub_methods_a00964"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>A class to be the parent for every crypt class. </p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a id="a3f598383428868a9f69502e5de031ea5"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a3f598383428868a9f69502e5de031ea5">&#9670;&nbsp;</a></span>Crypto()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">mcd::Crypto::Crypto </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a id="a16276f74e2eac6b2174d06361791f056"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a16276f74e2eac6b2174d06361791f056">&#9670;&nbsp;</a></span>~Crypto()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual mcd::Crypto::~Crypto </td>
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
<div class="dynheader">
Here is the call graph for this function:</div>
<div class="dyncontent">
<div class="center"><img src="../../d0/de2/a00892_a16276f74e2eac6b2174d06361791f056_cgraph.png" border="0" usemap="#d0/de2/a00892_a16276f74e2eac6b2174d06361791f056_cgraph" alt=""/></div>
<map name="d0/de2/a00892_a16276f74e2eac6b2174d06361791f056_cgraph" id="d0/de2/a00892_a16276f74e2eac6b2174d06361791f056_cgraph">
<area shape="rect" id="node2" href="../../d0/de2/a00892.php#a2949148382033667a765326066311f21" title="mcd::Crypto::crypt" alt="" coords="210,5,341,32"/>
<area shape="rect" id="node3" href="../../d0/de2/a00892.php#a4d131065e81529530b7907ba397af30d" title="mcd::Crypto::decrypt" alt="" coords="203,56,348,83"/>
</map>
</div>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a id="a2949148382033667a765326066311f21"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a2949148382033667a765326066311f21">&#9670;&nbsp;</a></span>crypt()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual std::string mcd::Crypto::crypt </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>message</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">pure virtual</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">
<p>Pur virtual function to disallow you to use the class alone </p><dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">message</td><td>The message to crypt </td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>void </dd></dl>

<p>Implemented in <a class="el" href="../../d0/d85/a00908.php#ad080bbc2c65c9690f38fa376ca65a985">mcd::RSA</a>, <a class="el" href="../../d8/d0a/a00904.php#aee90d618d42b9a7d9057a0bfc1f769c2">mcd::MyCrypt</a>, and <a class="el" href="../../d9/db0/a00900.php#ad8366a3e1e990f5faaf956599832fa8b">mcd::SHA2</a>.</p>

</div>
</div>
<a id="a4d131065e81529530b7907ba397af30d"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a4d131065e81529530b7907ba397af30d">&#9670;&nbsp;</a></span>decrypt()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual std::string mcd::Crypto::decrypt </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>message</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">pure virtual</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">
<p>Pur virtual function to disallow you to use the class alone </p><dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">message</td><td>The message to decrypt </td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>void </dd></dl>

<p>Implemented in <a class="el" href="../../d0/d85/a00908.php#ad831bd26ceeff7ad460bcabcad213155">mcd::RSA</a>, <a class="el" href="../../d8/d0a/a00904.php#ac1f14b79c663f1347bef0d7ba017449d">mcd::MyCrypt</a>, and <a class="el" href="../../da/dd6/a00896.php#a3368134737d4f820661e03afbc91b8f1">mcd::Cesar</a>.</p>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="../../d3/d8b/a00059.php">cryptage.hpp</a></li>
</ul>
</div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../dd/ded/a00211.php">mcd</a></li><li class="navelem"><a class="el" href="../../d0/de2/a00892.php">Crypto</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
