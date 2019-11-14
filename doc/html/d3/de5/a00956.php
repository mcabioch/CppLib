<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.13"/>
		<title>C++: mcd::RSA Class Reference</title>
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
				$text = "Generated on Thu Nov 14 2019 13:45:02 for C++ by";
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
$(document).ready(function(){initNavTree('d3/de5/a00956.php','../../');});
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
<a href="#pro-attribs">Protected Attributes</a> &#124;
<a href="../../d5/da3/a00953.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">mcd::RSA Class Reference</div>  </div>
</div><!--header-->
<div class="contents">

<p>A class to use the <a class="el" href="../../d3/de5/a00956.php" title="A class to use the RSA algorithm for encryption. ">RSA</a> algorithm for encryption.  
 <a href="../../d3/de5/a00956.php#details">More...</a></p>

<p><code>#include &lt;cryptage.hpp&gt;</code></p>
<div class="dynheader">
Inheritance diagram for mcd::RSA:</div>
<div class="dyncontent">
<div class="center"><img src="../../dc/db6/a00955.png" border="0" usemap="#mcd_1_1RSA_inherit__map" alt="Inheritance graph"/></div>
<map name="mcd_1_1RSA_inherit__map" id="mcd_1_1RSA_inherit__map">
<area shape="rect" id="node2" href="../../d7/db6/a00940.php" title="A class to be the parent for every crypt class. " alt="" coords="23,80,118,107"/>
<area shape="rect" id="node3" href="../../de/def/a01016.php" title="A class to let some other not to be copyable. " alt="" coords="5,5,136,32"/>
</map>
<center><span class="legend">[<a target="top" href="../../graph_legend.php">legend</a>]</span></center></div>
<div class="dynheader">
Collaboration diagram for mcd::RSA:</div>
<div class="dyncontent">
<div class="center"><img src="../../d3/dca/a00954.png" border="0" usemap="#mcd_1_1RSA_coll__map" alt="Collaboration graph"/></div>
<map name="mcd_1_1RSA_coll__map" id="mcd_1_1RSA_coll__map">
<area shape="rect" id="node2" href="../../d7/db6/a00940.php" title="A class to be the parent for every crypt class. " alt="" coords="34,96,129,123"/>
<area shape="rect" id="node3" href="../../de/def/a01016.php" title="A class to let some other not to be copyable. " alt="" coords="5,13,136,39"/>
<area shape="rect" id="node4" title="STL class. " alt="" coords="173,96,253,123"/>
<area shape="rect" id="node5" title="STL class. " alt="" coords="161,5,287,47"/>
</map>
<center><span class="legend">[<a target="top" href="../../graph_legend.php">legend</a>]</span></center></div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:a022907735103df44ce25774a289cede1"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d3/de5/a00956.php#a022907735103df44ce25774a289cede1">RSA</a> ()</td></tr>
<tr class="separator:a022907735103df44ce25774a289cede1"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a9d09972656fd75b2377a173a30692db6"><td class="memItemLeft" align="right" valign="top">virtual&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d3/de5/a00956.php#a9d09972656fd75b2377a173a30692db6">~RSA</a> ()</td></tr>
<tr class="separator:a9d09972656fd75b2377a173a30692db6"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a7fdf2f24700983208b6bfab8df8ef911"><td class="memItemLeft" align="right" valign="top">std::string&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d3/de5/a00956.php#a7fdf2f24700983208b6bfab8df8ef911">getPublic</a> () const</td></tr>
<tr class="memdesc:a7fdf2f24700983208b6bfab8df8ef911"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the public key.  <a href="#a7fdf2f24700983208b6bfab8df8ef911">More...</a><br /></td></tr>
<tr class="separator:a7fdf2f24700983208b6bfab8df8ef911"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ac38c1c5dff307a8dd9ce9c00b8df8b87"><td class="memItemLeft" align="right" valign="top">std::string&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d3/de5/a00956.php#ac38c1c5dff307a8dd9ce9c00b8df8b87">getPrivate</a> () const</td></tr>
<tr class="memdesc:ac38c1c5dff307a8dd9ce9c00b8df8b87"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the private key.  <a href="#ac38c1c5dff307a8dd9ce9c00b8df8b87">More...</a><br /></td></tr>
<tr class="separator:ac38c1c5dff307a8dd9ce9c00b8df8b87"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a4fcb230195d7b3fb73b8f62488dcc2e5"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d3/de5/a00956.php#a4fcb230195d7b3fb73b8f62488dcc2e5">setPublic</a> (const std::string &amp;key=&quot;&quot;)</td></tr>
<tr class="memdesc:a4fcb230195d7b3fb73b8f62488dcc2e5"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set the public key.  <a href="#a4fcb230195d7b3fb73b8f62488dcc2e5">More...</a><br /></td></tr>
<tr class="separator:a4fcb230195d7b3fb73b8f62488dcc2e5"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aa9cb76b3198a8127bc0c771e3eb70b2d"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d3/de5/a00956.php#aa9cb76b3198a8127bc0c771e3eb70b2d">setPrivate</a> (const std::string &amp;key=&quot;&quot;)</td></tr>
<tr class="memdesc:aa9cb76b3198a8127bc0c771e3eb70b2d"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set the private key.  <a href="#aa9cb76b3198a8127bc0c771e3eb70b2d">More...</a><br /></td></tr>
<tr class="separator:aa9cb76b3198a8127bc0c771e3eb70b2d"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ad080bbc2c65c9690f38fa376ca65a985"><td class="memItemLeft" align="right" valign="top">virtual std::string&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d3/de5/a00956.php#ad080bbc2c65c9690f38fa376ca65a985">crypt</a> (const std::string &amp;message) override</td></tr>
<tr class="memdesc:ad080bbc2c65c9690f38fa376ca65a985"><td class="mdescLeft">&#160;</td><td class="mdescRight">Overload of the crypt <a class="el" href="../../d7/db6/a00940.php" title="A class to be the parent for every crypt class. ">Crypto</a>'s method.  <a href="#ad080bbc2c65c9690f38fa376ca65a985">More...</a><br /></td></tr>
<tr class="separator:ad080bbc2c65c9690f38fa376ca65a985"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ad831bd26ceeff7ad460bcabcad213155"><td class="memItemLeft" align="right" valign="top">virtual std::string&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d3/de5/a00956.php#ad831bd26ceeff7ad460bcabcad213155">decrypt</a> (const std::string &amp;message) override</td></tr>
<tr class="memdesc:ad831bd26ceeff7ad460bcabcad213155"><td class="mdescLeft">&#160;</td><td class="mdescRight">Overload of the decrypt <a class="el" href="../../d7/db6/a00940.php" title="A class to be the parent for every crypt class. ">Crypto</a>'s method.  <a href="#ad831bd26ceeff7ad460bcabcad213155">More...</a><br /></td></tr>
<tr class="separator:ad831bd26ceeff7ad460bcabcad213155"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="inherit_header pub_methods_a00940"><td colspan="2" onclick="javascript:toggleInherit('pub_methods_a00940')"><img src="../../closed.png" alt="-"/>&#160;Public Member Functions inherited from <a class="el" href="../../d7/db6/a00940.php">mcd::Crypto</a></td></tr>
<tr class="memitem:a3f598383428868a9f69502e5de031ea5 inherit pub_methods_a00940"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d7/db6/a00940.php#a3f598383428868a9f69502e5de031ea5">Crypto</a> ()</td></tr>
<tr class="separator:a3f598383428868a9f69502e5de031ea5 inherit pub_methods_a00940"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a16276f74e2eac6b2174d06361791f056 inherit pub_methods_a00940"><td class="memItemLeft" align="right" valign="top">virtual&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d7/db6/a00940.php#a16276f74e2eac6b2174d06361791f056">~Crypto</a> ()</td></tr>
<tr class="separator:a16276f74e2eac6b2174d06361791f056 inherit pub_methods_a00940"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="inherit_header pub_methods_a01016"><td colspan="2" onclick="javascript:toggleInherit('pub_methods_a01016')"><img src="../../closed.png" alt="-"/>&#160;Public Member Functions inherited from <a class="el" href="../../de/def/a01016.php">mcd::NotCopyable</a></td></tr>
<tr class="memitem:aa40da048522b578e9c2cc9f73c1a0d92 inherit pub_methods_a01016"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../de/def/a01016.php#aa40da048522b578e9c2cc9f73c1a0d92">NotCopyable</a> ()</td></tr>
<tr class="memdesc:aa40da048522b578e9c2cc9f73c1a0d92 inherit pub_methods_a01016"><td class="mdescLeft">&#160;</td><td class="mdescRight">The constructor of the class.  <a href="../../de/def/a01016.php#aa40da048522b578e9c2cc9f73c1a0d92">More...</a><br /></td></tr>
<tr class="separator:aa40da048522b578e9c2cc9f73c1a0d92 inherit pub_methods_a01016"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a5efcd02383468e37e9c960f3d6f9d14c inherit pub_methods_a01016"><td class="memItemLeft" align="right" valign="top">virtual&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../de/def/a01016.php#a5efcd02383468e37e9c960f3d6f9d14c">~NotCopyable</a> ()</td></tr>
<tr class="separator:a5efcd02383468e37e9c960f3d6f9d14c inherit pub_methods_a01016"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pro-attribs"></a>
Protected Attributes</h2></td></tr>
<tr class="memitem:ae37f658e3ba447726e0a0abd0f1ac5c8"><td class="memItemLeft" align="right" valign="top">std::string&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d3/de5/a00956.php#ae37f658e3ba447726e0a0abd0f1ac5c8">publicK</a></td></tr>
<tr class="separator:ae37f658e3ba447726e0a0abd0f1ac5c8"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a41496cdf1557d2e3dda4d0f414738af5"><td class="memItemLeft" align="right" valign="top">std::string&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d3/de5/a00956.php#a41496cdf1557d2e3dda4d0f414738af5">privateK</a></td></tr>
<tr class="separator:a41496cdf1557d2e3dda4d0f414738af5"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>A class to use the <a class="el" href="../../d3/de5/a00956.php" title="A class to use the RSA algorithm for encryption. ">RSA</a> algorithm for encryption. </p>
<dl class="todo"><dt><b><a class="el" href="../../d7/d40/a00236.php#_todo000002">Todo:</a></b></dt><dd>Create the class </dd></dl>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a id="a022907735103df44ce25774a289cede1"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a022907735103df44ce25774a289cede1">&#9670;&nbsp;</a></span>RSA()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">mcd::RSA::RSA </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a id="a9d09972656fd75b2377a173a30692db6"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a9d09972656fd75b2377a173a30692db6">&#9670;&nbsp;</a></span>~RSA()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual mcd::RSA::~RSA </td>
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
<div class="center"><img src="../../d3/de5/a00956_a9d09972656fd75b2377a173a30692db6_cgraph.png" border="0" usemap="#d3/de5/a00956_a9d09972656fd75b2377a173a30692db6_cgraph" alt=""/></div>
<map name="d3/de5/a00956_a9d09972656fd75b2377a173a30692db6_cgraph" id="d3/de5/a00956_a9d09972656fd75b2377a173a30692db6_cgraph">
<area shape="rect" id="node2" href="../../d7/db6/a00940.php#a2949148382033667a765326066311f21" title="mcd::Crypto::crypt" alt="" coords="187,5,318,32"/>
<area shape="rect" id="node3" href="../../d7/db6/a00940.php#a4d131065e81529530b7907ba397af30d" title="mcd::Crypto::decrypt" alt="" coords="180,56,325,83"/>
</map>
</div>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a id="ad080bbc2c65c9690f38fa376ca65a985"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ad080bbc2c65c9690f38fa376ca65a985">&#9670;&nbsp;</a></span>crypt()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual std::string mcd::RSA::crypt </td>
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

<p>Overload of the crypt <a class="el" href="../../d7/db6/a00940.php" title="A class to be the parent for every crypt class. ">Crypto</a>'s method. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">message</td><td>The message to encrypt</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Return the encrypted message </dd></dl>

<p>Implements <a class="el" href="../../d7/db6/a00940.php#a2949148382033667a765326066311f21">mcd::Crypto</a>.</p>

</div>
</div>
<a id="ad831bd26ceeff7ad460bcabcad213155"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ad831bd26ceeff7ad460bcabcad213155">&#9670;&nbsp;</a></span>decrypt()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual std::string mcd::RSA::decrypt </td>
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

<p>Overload of the decrypt <a class="el" href="../../d7/db6/a00940.php" title="A class to be the parent for every crypt class. ">Crypto</a>'s method. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">message</td><td>The message to decrypt</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Return the decrypted message </dd></dl>

<p>Implements <a class="el" href="../../d7/db6/a00940.php#a4d131065e81529530b7907ba397af30d">mcd::Crypto</a>.</p>

</div>
</div>
<a id="ac38c1c5dff307a8dd9ce9c00b8df8b87"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ac38c1c5dff307a8dd9ce9c00b8df8b87">&#9670;&nbsp;</a></span>getPrivate()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">std::string mcd::RSA::getPrivate </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get the private key. </p>
<dl class="section return"><dt>Returns</dt><dd>Return the private key of the object </dd></dl>

</div>
</div>
<a id="a7fdf2f24700983208b6bfab8df8ef911"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a7fdf2f24700983208b6bfab8df8ef911">&#9670;&nbsp;</a></span>getPublic()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">std::string mcd::RSA::getPublic </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get the public key. </p>
<dl class="section return"><dt>Returns</dt><dd>Return the public key of the object </dd></dl>

</div>
</div>
<a id="aa9cb76b3198a8127bc0c771e3eb70b2d"></a>
<h2 class="memtitle"><span class="permalink"><a href="#aa9cb76b3198a8127bc0c771e3eb70b2d">&#9670;&nbsp;</a></span>setPrivate()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void mcd::RSA::setPrivate </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>key</em> = <code>&quot;&quot;</code></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Set the private key. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">key</td><td>The key</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>void </dd></dl>

</div>
</div>
<a id="a4fcb230195d7b3fb73b8f62488dcc2e5"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a4fcb230195d7b3fb73b8f62488dcc2e5">&#9670;&nbsp;</a></span>setPublic()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void mcd::RSA::setPublic </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>key</em> = <code>&quot;&quot;</code></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Set the public key. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">key</td><td>The key</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>void </dd></dl>

</div>
</div>
<h2 class="groupheader">Member Data Documentation</h2>
<a id="a41496cdf1557d2e3dda4d0f414738af5"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a41496cdf1557d2e3dda4d0f414738af5">&#9670;&nbsp;</a></span>privateK</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">std::string mcd::RSA::privateK</td>
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
<a id="ae37f658e3ba447726e0a0abd0f1ac5c8"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ae37f658e3ba447726e0a0abd0f1ac5c8">&#9670;&nbsp;</a></span>publicK</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">std::string mcd::RSA::publicK</td>
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
<li><a class="el" href="../../da/d24/a00068.php">cryptage.hpp</a></li>
</ul>
</div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../da/d2e/a00238.php">mcd</a></li><li class="navelem"><a class="el" href="../../d3/de5/a00956.php">RSA</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
