<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.20"/>
		<title>C++: mcd::SHA2 Class Reference</title>
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
									&#160;<span id="projectnumber">1.6.3.0</span>
								</div>
								<div id="projectbrief">My own C++ features</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<?php
				$text = "Generated on Wed Nov 18 2020 14:47:41 for C++ by";
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
$(document).ready(function(){initNavTree('de/dcb/a01263.php','../../'); initResizable(); });
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
<a href="#pro-methods">Protected Member Functions</a> &#124;
<a href="#pro-attribs">Protected Attributes</a> &#124;
<a href="#pro-static-attribs">Static Protected Attributes</a> &#124;
<a href="../../d7/da3/a01260.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">mcd::SHA2 Class Reference</div>  </div>
</div><!--header-->
<div class="contents">

<p>An implementation of sha256 encryption.  
 <a href="../../de/dcb/a01263.php#details">More...</a></p>

<p><code>#include &lt;cryptage.hpp&gt;</code></p>
<div class="dynheader">
Inheritance diagram for mcd::SHA2:</div>
<div class="dyncontent">
<div class="center"><img src="../../d3/d53/a01262.png" border="0" usemap="#amcd_1_1SHA2_inherit__map" alt="Inheritance graph"/></div>
<map name="mcd_1_1SHA2_inherit__map" id="mcd_1_1SHA2_inherit__map">
<area shape="rect" title="An implementation of sha256 encryption." alt="" coords="25,155,116,181"/>
<area shape="rect" href="../../d7/d88/a01255.php" title="A class to be the parent for every crypt class." alt="" coords="23,80,118,107"/>
<area shape="rect" href="../../d1/dcd/a01351.php" title="A class to let some other not to be copyable." alt="" coords="5,5,136,32"/>
</map>
<center><span class="legend">[<a target="top" href="../../graph_legend.php">legend</a>]</span></center></div>
<div class="dynheader">
Collaboration diagram for mcd::SHA2:</div>
<div class="dyncontent">
<div class="center"><img src="../../de/d34/a01261.png" border="0" usemap="#amcd_1_1SHA2_coll__map" alt="Collaboration graph"/></div>
<map name="mcd_1_1SHA2_coll__map" id="mcd_1_1SHA2_coll__map">
<area shape="rect" title="An implementation of sha256 encryption." alt="" coords="25,155,116,181"/>
<area shape="rect" href="../../d7/d88/a01255.php" title="A class to be the parent for every crypt class." alt="" coords="23,80,118,107"/>
<area shape="rect" href="../../d1/dcd/a01351.php" title="A class to let some other not to be copyable." alt="" coords="5,5,136,32"/>
</map>
<center><span class="legend">[<a target="top" href="../../graph_legend.php">legend</a>]</span></center></div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:ac0448ebc3e08f664e880fff43cb0f5f1"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../de/dcb/a01263.php#ac0448ebc3e08f664e880fff43cb0f5f1">SHA2</a> ()</td></tr>
<tr class="separator:ac0448ebc3e08f664e880fff43cb0f5f1"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a84db99430c12dfd433432818c954d569"><td class="memItemLeft" align="right" valign="top">virtual&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../de/dcb/a01263.php#a84db99430c12dfd433432818c954d569">~SHA2</a> ()</td></tr>
<tr class="separator:a84db99430c12dfd433432818c954d569"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ad8366a3e1e990f5faaf956599832fa8b"><td class="memItemLeft" align="right" valign="top">virtual std::string&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../de/dcb/a01263.php#ad8366a3e1e990f5faaf956599832fa8b">crypt</a> (const std::string &amp;message) override</td></tr>
<tr class="memdesc:ad8366a3e1e990f5faaf956599832fa8b"><td class="mdescLeft">&#160;</td><td class="mdescRight">Overload of the crypt <a class="el" href="../../d7/d88/a01255.php" title="A class to be the parent for every crypt class.">Crypto</a>'s method.  <a href="../../de/dcb/a01263.php#ad8366a3e1e990f5faaf956599832fa8b">More...</a><br /></td></tr>
<tr class="separator:ad8366a3e1e990f5faaf956599832fa8b"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="inherit_header pub_methods_a01255"><td colspan="2" onclick="javascript:toggleInherit('pub_methods_a01255')"><img src="../../closed.png" alt="-"/>&#160;Public Member Functions inherited from <a class="el" href="../../d7/d88/a01255.php">mcd::Crypto</a></td></tr>
<tr class="memitem:a3f598383428868a9f69502e5de031ea5 inherit pub_methods_a01255"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d7/d88/a01255.php#a3f598383428868a9f69502e5de031ea5">Crypto</a> ()</td></tr>
<tr class="separator:a3f598383428868a9f69502e5de031ea5 inherit pub_methods_a01255"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a16276f74e2eac6b2174d06361791f056 inherit pub_methods_a01255"><td class="memItemLeft" align="right" valign="top">virtual&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d7/d88/a01255.php#a16276f74e2eac6b2174d06361791f056">~Crypto</a> ()</td></tr>
<tr class="separator:a16276f74e2eac6b2174d06361791f056 inherit pub_methods_a01255"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="inherit_header pub_methods_a01351"><td colspan="2" onclick="javascript:toggleInherit('pub_methods_a01351')"><img src="../../closed.png" alt="-"/>&#160;Public Member Functions inherited from <a class="el" href="../../d1/dcd/a01351.php">mcd::NotCopyable</a></td></tr>
<tr class="memitem:aa40da048522b578e9c2cc9f73c1a0d92 inherit pub_methods_a01351"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d1/dcd/a01351.php#aa40da048522b578e9c2cc9f73c1a0d92">NotCopyable</a> ()</td></tr>
<tr class="memdesc:aa40da048522b578e9c2cc9f73c1a0d92 inherit pub_methods_a01351"><td class="mdescLeft">&#160;</td><td class="mdescRight">The constructor of the class.  <a href="../../d1/dcd/a01351.php#aa40da048522b578e9c2cc9f73c1a0d92">More...</a><br /></td></tr>
<tr class="separator:aa40da048522b578e9c2cc9f73c1a0d92 inherit pub_methods_a01351"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a5efcd02383468e37e9c960f3d6f9d14c inherit pub_methods_a01351"><td class="memItemLeft" align="right" valign="top">virtual&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d1/dcd/a01351.php#a5efcd02383468e37e9c960f3d6f9d14c">~NotCopyable</a> ()</td></tr>
<tr class="separator:a5efcd02383468e37e9c960f3d6f9d14c inherit pub_methods_a01351"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pro-methods"></a>
Protected Member Functions</h2></td></tr>
<tr class="memitem:a74c404cd90d7d9331818f2eea6f1f7d2"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../de/dcb/a01263.php#a74c404cd90d7d9331818f2eea6f1f7d2">transform</a> (const uint8_t *message, size_t block_nb)</td></tr>
<tr class="memdesc:a74c404cd90d7d9331818f2eea6f1f7d2"><td class="mdescLeft">&#160;</td><td class="mdescRight">Transform the message in the block number.  <a href="../../de/dcb/a01263.php#a74c404cd90d7d9331818f2eea6f1f7d2">More...</a><br /></td></tr>
<tr class="separator:a74c404cd90d7d9331818f2eea6f1f7d2"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a2a9dc41a2367f4dabb2c345ee0bf51c6"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../de/dcb/a01263.php#a2a9dc41a2367f4dabb2c345ee0bf51c6">update</a> (const std::string &amp;message)</td></tr>
<tr class="memdesc:a2a9dc41a2367f4dabb2c345ee0bf51c6"><td class="mdescLeft">&#160;</td><td class="mdescRight">Update the message.  <a href="../../de/dcb/a01263.php#a2a9dc41a2367f4dabb2c345ee0bf51c6">More...</a><br /></td></tr>
<tr class="separator:a2a9dc41a2367f4dabb2c345ee0bf51c6"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a46a2f66f96d1152c972b8fc2c228db77"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../de/dcb/a01263.php#a46a2f66f96d1152c972b8fc2c228db77">final</a> (uint8_t *digest)</td></tr>
<tr class="memdesc:a46a2f66f96d1152c972b8fc2c228db77"><td class="mdescLeft">&#160;</td><td class="mdescRight">The final update of the message.  <a href="../../de/dcb/a01263.php#a46a2f66f96d1152c972b8fc2c228db77">More...</a><br /></td></tr>
<tr class="separator:a46a2f66f96d1152c972b8fc2c228db77"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pro-attribs"></a>
Protected Attributes</h2></td></tr>
<tr class="memitem:ab980e5f7d9f33cf1ef036fabc59dbd7d"><td class="memItemLeft" align="right" valign="top">size_t&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../de/dcb/a01263.php#ab980e5f7d9f33cf1ef036fabc59dbd7d">totalLength</a></td></tr>
<tr class="separator:ab980e5f7d9f33cf1ef036fabc59dbd7d"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ad7a6034372b883a9d87b527d16c55acf"><td class="memItemLeft" align="right" valign="top">size_t&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../de/dcb/a01263.php#ad7a6034372b883a9d87b527d16c55acf">length</a></td></tr>
<tr class="separator:ad7a6034372b883a9d87b527d16c55acf"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aa50ce5e9d8271080d4dd30b9afe50e89"><td class="memItemLeft" align="right" valign="top">uint8_t&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../de/dcb/a01263.php#aa50ce5e9d8271080d4dd30b9afe50e89">block</a> [2 *<a class="el" href="../../de/dcb/a01263.php#ae41078716ddc513c6af9a825448cbabd">BLOCK_SIZE</a>]</td></tr>
<tr class="separator:aa50ce5e9d8271080d4dd30b9afe50e89"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a53cfb8aef4749f35c4714b3ba88e5a4c"><td class="memItemLeft" align="right" valign="top">uint32_t&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../de/dcb/a01263.php#a53cfb8aef4749f35c4714b3ba88e5a4c">h</a> [8]</td></tr>
<tr class="separator:a53cfb8aef4749f35c4714b3ba88e5a4c"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pro-static-attribs"></a>
Static Protected Attributes</h2></td></tr>
<tr class="memitem:a040f0fbef61aaa96faaaf4c2fe2da895"><td class="memItemLeft" align="right" valign="top">static const size_t&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../de/dcb/a01263.php#a040f0fbef61aaa96faaaf4c2fe2da895">DIGEST_SIZE</a> = (256 / 8)</td></tr>
<tr class="separator:a040f0fbef61aaa96faaaf4c2fe2da895"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ae118c7ed9d79b55029696e4e4aff27d6"><td class="memItemLeft" align="right" valign="top">static const uint32_t&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../de/dcb/a01263.php#ae118c7ed9d79b55029696e4e4aff27d6">sha2_keys</a> []</td></tr>
<tr class="separator:ae118c7ed9d79b55029696e4e4aff27d6"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ae41078716ddc513c6af9a825448cbabd"><td class="memItemLeft" align="right" valign="top">static const size_t&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../de/dcb/a01263.php#ae41078716ddc513c6af9a825448cbabd">BLOCK_SIZE</a> = (512 / 8)</td></tr>
<tr class="separator:ae41078716ddc513c6af9a825448cbabd"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>An implementation of sha256 encryption. </p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a id="ac0448ebc3e08f664e880fff43cb0f5f1"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ac0448ebc3e08f664e880fff43cb0f5f1">&#9670;&nbsp;</a></span>SHA2()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">mcd::SHA2::SHA2 </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a id="a84db99430c12dfd433432818c954d569"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a84db99430c12dfd433432818c954d569">&#9670;&nbsp;</a></span>~SHA2()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual mcd::SHA2::~SHA2 </td>
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
<h2 class="groupheader">Member Function Documentation</h2>
<a id="ad8366a3e1e990f5faaf956599832fa8b"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ad8366a3e1e990f5faaf956599832fa8b">&#9670;&nbsp;</a></span>crypt()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual std::string mcd::SHA2::crypt </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>message</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">override</span><span class="mlabel">virtual</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Overload of the crypt <a class="el" href="../../d7/d88/a01255.php" title="A class to be the parent for every crypt class.">Crypto</a>'s method. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">message</td><td>The message to encrypt</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Return the crypted message </dd></dl>

<p>Implements <a class="el" href="../../d7/d88/a01255.php#a2949148382033667a765326066311f21">mcd::Crypto</a>.</p>

</div>
</div>
<a id="a46a2f66f96d1152c972b8fc2c228db77"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a46a2f66f96d1152c972b8fc2c228db77">&#9670;&nbsp;</a></span>final()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">void mcd::SHA2::final </td>
          <td>(</td>
          <td class="paramtype">uint8_t *&#160;</td>
          <td class="paramname"><em>digest</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">protected</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>The final update of the message. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">digest</td><td>The different part of the message</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>void </dd></dl>

</div>
</div>
<a id="a74c404cd90d7d9331818f2eea6f1f7d2"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a74c404cd90d7d9331818f2eea6f1f7d2">&#9670;&nbsp;</a></span>transform()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">void mcd::SHA2::transform </td>
          <td>(</td>
          <td class="paramtype">const uint8_t *&#160;</td>
          <td class="paramname"><em>message</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">size_t&#160;</td>
          <td class="paramname"><em>block_nb</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">protected</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Transform the message in the block number. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">message</td><td>The message to encrypt </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">block_nb</td><td>The number of the block to encrypt</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>void </dd></dl>

</div>
</div>
<a id="a2a9dc41a2367f4dabb2c345ee0bf51c6"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a2a9dc41a2367f4dabb2c345ee0bf51c6">&#9670;&nbsp;</a></span>update()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">void mcd::SHA2::update </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>message</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">protected</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Update the message. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">message</td><td>The message to encrypt</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>void </dd></dl>

</div>
</div>
<h2 class="groupheader">Member Data Documentation</h2>
<a id="aa50ce5e9d8271080d4dd30b9afe50e89"></a>
<h2 class="memtitle"><span class="permalink"><a href="#aa50ce5e9d8271080d4dd30b9afe50e89">&#9670;&nbsp;</a></span>block</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">uint8_t mcd::SHA2::block[2 *<a class="el" href="../../de/dcb/a01263.php#ae41078716ddc513c6af9a825448cbabd">BLOCK_SIZE</a>]</td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">protected</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

</div>
</div>
<a id="ae41078716ddc513c6af9a825448cbabd"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ae41078716ddc513c6af9a825448cbabd">&#9670;&nbsp;</a></span>BLOCK_SIZE</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">const size_t mcd::SHA2::BLOCK_SIZE = (512 / 8)</td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span><span class="mlabel">protected</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

</div>
</div>
<a id="a040f0fbef61aaa96faaaf4c2fe2da895"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a040f0fbef61aaa96faaaf4c2fe2da895">&#9670;&nbsp;</a></span>DIGEST_SIZE</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">const size_t mcd::SHA2::DIGEST_SIZE = (256 / 8)</td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span><span class="mlabel">protected</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

</div>
</div>
<a id="a53cfb8aef4749f35c4714b3ba88e5a4c"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a53cfb8aef4749f35c4714b3ba88e5a4c">&#9670;&nbsp;</a></span>h</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">uint32_t mcd::SHA2::h[8]</td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">protected</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

</div>
</div>
<a id="ad7a6034372b883a9d87b527d16c55acf"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ad7a6034372b883a9d87b527d16c55acf">&#9670;&nbsp;</a></span>length</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">size_t mcd::SHA2::length</td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">protected</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

</div>
</div>
<a id="ae118c7ed9d79b55029696e4e4aff27d6"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ae118c7ed9d79b55029696e4e4aff27d6">&#9670;&nbsp;</a></span>sha2_keys</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">const uint32_t mcd::SHA2::sha2_keys[]</td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span><span class="mlabel">protected</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

</div>
</div>
<a id="ab980e5f7d9f33cf1ef036fabc59dbd7d"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ab980e5f7d9f33cf1ef036fabc59dbd7d">&#9670;&nbsp;</a></span>totalLength</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">size_t mcd::SHA2::totalLength</td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">protected</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="../../d1/d09/a00077.php">cryptage.hpp</a></li>
</ul>
</div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../db/d12/a00268.php">mcd</a></li><li class="navelem"><a class="el" href="../../de/dcb/a01263.php">SHA2</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
