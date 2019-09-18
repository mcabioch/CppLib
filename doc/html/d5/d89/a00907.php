<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.13"/>
		<title>C++: mcd::MyCrypt Class Reference</title>
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
				$text = "Generated on Wed Sep 18 2019 11:06:49 for C++ by";
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
$(document).ready(function(){initNavTree('d5/d89/a00907.php','../../');});
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
<a href="../../d8/d0a/a00904.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">mcd::MyCrypt Class Reference</div>  </div>
</div><!--header-->
<div class="contents">

<p>A class to use the <a class="el" href="../../d7/d12/a00911.php" title="A class to use the RSA algorithm for encryption. ">RSA</a> algorithm for encryption.  
 <a href="../../d5/d89/a00907.php#details">More...</a></p>

<p><code>#include &lt;cryptage.hpp&gt;</code></p>
<div class="dynheader">
Inheritance diagram for mcd::MyCrypt:</div>
<div class="dyncontent">
<div class="center"><img src="../../da/dd8/a00906.png" border="0" usemap="#mcd_1_1MyCrypt_inherit__map" alt="Inheritance graph"/></div>
<map name="mcd_1_1MyCrypt_inherit__map" id="mcd_1_1MyCrypt_inherit__map">
<area shape="rect" id="node2" href="../../d2/d21/a00895.php" title="A class to be the parent for every crypt class. " alt="" coords="23,80,118,107"/>
<area shape="rect" id="node3" href="../../d4/d94/a00967.php" title="A class to let some other not to be copyable. " alt="" coords="5,5,136,32"/>
</map>
<center><span class="legend">[<a target="top" href="../../graph_legend.php">legend</a>]</span></center></div>
<div class="dynheader">
Collaboration diagram for mcd::MyCrypt:</div>
<div class="dyncontent">
<div class="center"><img src="../../da/d5b/a00905.png" border="0" usemap="#mcd_1_1MyCrypt_coll__map" alt="Collaboration graph"/></div>
<map name="mcd_1_1MyCrypt_coll__map" id="mcd_1_1MyCrypt_coll__map">
<area shape="rect" id="node2" href="../../d2/d21/a00895.php" title="A class to be the parent for every crypt class. " alt="" coords="23,80,118,107"/>
<area shape="rect" id="node3" href="../../d4/d94/a00967.php" title="A class to let some other not to be copyable. " alt="" coords="5,5,136,32"/>
</map>
<center><span class="legend">[<a target="top" href="../../graph_legend.php">legend</a>]</span></center></div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:ac618fc32b73d9bb13b07bc9db802cbef"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d5/d89/a00907.php#ac618fc32b73d9bb13b07bc9db802cbef">MyCrypt</a> ()</td></tr>
<tr class="separator:ac618fc32b73d9bb13b07bc9db802cbef"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a3e5b32554500cf6843d09009fbaafbc9"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d5/d89/a00907.php#a3e5b32554500cf6843d09009fbaafbc9">~MyCrypt</a> ()</td></tr>
<tr class="separator:a3e5b32554500cf6843d09009fbaafbc9"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a73db8d36191071f9ca2e5fe62d75a0d0"><td class="memItemLeft" align="right" valign="top">virtual std::string&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d5/d89/a00907.php#a73db8d36191071f9ca2e5fe62d75a0d0">crypt</a> (const std::string &amp;str, const std::string &amp;key)</td></tr>
<tr class="memdesc:a73db8d36191071f9ca2e5fe62d75a0d0"><td class="mdescLeft">&#160;</td><td class="mdescRight">Crypt the message with a pass key.  <a href="#a73db8d36191071f9ca2e5fe62d75a0d0">More...</a><br /></td></tr>
<tr class="separator:a73db8d36191071f9ca2e5fe62d75a0d0"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a18850d238fad5966016ef020c05f82ce"><td class="memItemLeft" align="right" valign="top">virtual std::string&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d5/d89/a00907.php#a18850d238fad5966016ef020c05f82ce">decrypt</a> (const std::string &amp;str, const std::string &amp;key)</td></tr>
<tr class="memdesc:a18850d238fad5966016ef020c05f82ce"><td class="mdescLeft">&#160;</td><td class="mdescRight">Decrypt the message with a pass key.  <a href="#a18850d238fad5966016ef020c05f82ce">More...</a><br /></td></tr>
<tr class="separator:a18850d238fad5966016ef020c05f82ce"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aee90d618d42b9a7d9057a0bfc1f769c2"><td class="memItemLeft" align="right" valign="top">virtual std::string&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d5/d89/a00907.php#aee90d618d42b9a7d9057a0bfc1f769c2">crypt</a> (const std::string &amp;str) override</td></tr>
<tr class="memdesc:aee90d618d42b9a7d9057a0bfc1f769c2"><td class="mdescLeft">&#160;</td><td class="mdescRight">Overload of the crypt <a class="el" href="../../d2/d21/a00895.php" title="A class to be the parent for every crypt class. ">Crypto</a>'s method.  <a href="#aee90d618d42b9a7d9057a0bfc1f769c2">More...</a><br /></td></tr>
<tr class="separator:aee90d618d42b9a7d9057a0bfc1f769c2"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ac1f14b79c663f1347bef0d7ba017449d"><td class="memItemLeft" align="right" valign="top">virtual std::string&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d5/d89/a00907.php#ac1f14b79c663f1347bef0d7ba017449d">decrypt</a> (const std::string &amp;str) override</td></tr>
<tr class="memdesc:ac1f14b79c663f1347bef0d7ba017449d"><td class="mdescLeft">&#160;</td><td class="mdescRight">Overload of the decrypt <a class="el" href="../../d2/d21/a00895.php" title="A class to be the parent for every crypt class. ">Crypto</a>'s method.  <a href="#ac1f14b79c663f1347bef0d7ba017449d">More...</a><br /></td></tr>
<tr class="separator:ac1f14b79c663f1347bef0d7ba017449d"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="inherit_header pub_methods_a00895"><td colspan="2" onclick="javascript:toggleInherit('pub_methods_a00895')"><img src="../../closed.png" alt="-"/>&#160;Public Member Functions inherited from <a class="el" href="../../d2/d21/a00895.php">mcd::Crypto</a></td></tr>
<tr class="memitem:a3f598383428868a9f69502e5de031ea5 inherit pub_methods_a00895"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d2/d21/a00895.php#a3f598383428868a9f69502e5de031ea5">Crypto</a> ()</td></tr>
<tr class="separator:a3f598383428868a9f69502e5de031ea5 inherit pub_methods_a00895"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a16276f74e2eac6b2174d06361791f056 inherit pub_methods_a00895"><td class="memItemLeft" align="right" valign="top">virtual&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d2/d21/a00895.php#a16276f74e2eac6b2174d06361791f056">~Crypto</a> ()</td></tr>
<tr class="separator:a16276f74e2eac6b2174d06361791f056 inherit pub_methods_a00895"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="inherit_header pub_methods_a00967"><td colspan="2" onclick="javascript:toggleInherit('pub_methods_a00967')"><img src="../../closed.png" alt="-"/>&#160;Public Member Functions inherited from <a class="el" href="../../d4/d94/a00967.php">mcd::NotCopyable</a></td></tr>
<tr class="memitem:aa40da048522b578e9c2cc9f73c1a0d92 inherit pub_methods_a00967"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d4/d94/a00967.php#aa40da048522b578e9c2cc9f73c1a0d92">NotCopyable</a> ()</td></tr>
<tr class="memdesc:aa40da048522b578e9c2cc9f73c1a0d92 inherit pub_methods_a00967"><td class="mdescLeft">&#160;</td><td class="mdescRight">The constructor of the class.  <a href="../../d4/d94/a00967.php#aa40da048522b578e9c2cc9f73c1a0d92">More...</a><br /></td></tr>
<tr class="separator:aa40da048522b578e9c2cc9f73c1a0d92 inherit pub_methods_a00967"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a5efcd02383468e37e9c960f3d6f9d14c inherit pub_methods_a00967"><td class="memItemLeft" align="right" valign="top">virtual&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d4/d94/a00967.php#a5efcd02383468e37e9c960f3d6f9d14c">~NotCopyable</a> ()</td></tr>
<tr class="separator:a5efcd02383468e37e9c960f3d6f9d14c inherit pub_methods_a00967"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>A class to use the <a class="el" href="../../d7/d12/a00911.php" title="A class to use the RSA algorithm for encryption. ">RSA</a> algorithm for encryption. </p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a id="ac618fc32b73d9bb13b07bc9db802cbef"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ac618fc32b73d9bb13b07bc9db802cbef">&#9670;&nbsp;</a></span>MyCrypt()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">mcd::MyCrypt::MyCrypt </td>
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
<a id="a3e5b32554500cf6843d09009fbaafbc9"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a3e5b32554500cf6843d09009fbaafbc9">&#9670;&nbsp;</a></span>~MyCrypt()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">mcd::MyCrypt::~MyCrypt </td>
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
<div class="dynheader">
Here is the call graph for this function:</div>
<div class="dyncontent">
<div class="center"><img src="../../d5/d89/a00907_a3e5b32554500cf6843d09009fbaafbc9_cgraph.png" border="0" usemap="#d5/d89/a00907_a3e5b32554500cf6843d09009fbaafbc9_cgraph" alt=""/></div>
<map name="d5/d89/a00907_a3e5b32554500cf6843d09009fbaafbc9_cgraph" id="d5/d89/a00907_a3e5b32554500cf6843d09009fbaafbc9_cgraph">
<area shape="rect" id="node2" href="../../d2/d21/a00895.php#a2949148382033667a765326066311f21" title="mcd::Crypto::crypt" alt="" coords="231,5,362,32"/>
<area shape="rect" id="node3" href="../../d2/d21/a00895.php#a4d131065e81529530b7907ba397af30d" title="mcd::Crypto::decrypt" alt="" coords="224,56,369,83"/>
</map>
</div>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a id="a73db8d36191071f9ca2e5fe62d75a0d0"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a73db8d36191071f9ca2e5fe62d75a0d0">&#9670;&nbsp;</a></span>crypt() <span class="overload">[1/2]</span></h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual std::string mcd::MyCrypt::crypt </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>str</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>key</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">virtual</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Crypt the message with a pass key. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">str</td><td>The message to encrypt </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">key</td><td>The key to use</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Return the encrypted message </dd></dl>

</div>
</div>
<a id="aee90d618d42b9a7d9057a0bfc1f769c2"></a>
<h2 class="memtitle"><span class="permalink"><a href="#aee90d618d42b9a7d9057a0bfc1f769c2">&#9670;&nbsp;</a></span>crypt() <span class="overload">[2/2]</span></h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual std::string mcd::MyCrypt::crypt </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>str</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">override</span><span class="mlabel">virtual</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Overload of the crypt <a class="el" href="../../d2/d21/a00895.php" title="A class to be the parent for every crypt class. ">Crypto</a>'s method. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">str</td><td>The message to encrypt</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Return the encrypted message </dd></dl>

<p>Implements <a class="el" href="../../d2/d21/a00895.php#a2949148382033667a765326066311f21">mcd::Crypto</a>.</p>

</div>
</div>
<a id="a18850d238fad5966016ef020c05f82ce"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a18850d238fad5966016ef020c05f82ce">&#9670;&nbsp;</a></span>decrypt() <span class="overload">[1/2]</span></h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual std::string mcd::MyCrypt::decrypt </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>str</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>key</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">virtual</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Decrypt the message with a pass key. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">str</td><td>The message to decrypt </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">key</td><td>The key to use</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Return the decrypted message </dd></dl>

</div>
</div>
<a id="ac1f14b79c663f1347bef0d7ba017449d"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ac1f14b79c663f1347bef0d7ba017449d">&#9670;&nbsp;</a></span>decrypt() <span class="overload">[2/2]</span></h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual std::string mcd::MyCrypt::decrypt </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>str</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">override</span><span class="mlabel">virtual</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Overload of the decrypt <a class="el" href="../../d2/d21/a00895.php" title="A class to be the parent for every crypt class. ">Crypto</a>'s method. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">str</td><td>The message to decrypt</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Return the decrypted message </dd></dl>

<p>Implements <a class="el" href="../../d2/d21/a00895.php#a4d131065e81529530b7907ba397af30d">mcd::Crypto</a>.</p>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="../../df/d03/a00062.php">cryptage.hpp</a></li>
</ul>
</div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../d3/dd1/a00214.php">mcd</a></li><li class="navelem"><a class="el" href="../../d5/d89/a00907.php">MyCrypt</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
