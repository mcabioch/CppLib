<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.20"/>
		<title>C++: mcd::Json Class Reference</title>
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
									&#160;<span id="projectnumber">1.6.2.3</span>
								</div>
								<div id="projectbrief">My own C++ features</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<?php
				$text = "Generated on Mon Nov 16 2020 10:12:13 for C++ by";
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
$(document).ready(function(){initNavTree('d9/de6/a01314.php','../../'); initResizable(); });
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
<a href="#pub-types">Public Types</a> &#124;
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="#friends">Friends</a> &#124;
<a href="../../de/d69/a01311.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">mcd::Json Class Reference</div>  </div>
</div><!--header-->
<div class="contents">

<p>A class to manage <a class="el" href="../../d9/de6/a01314.php" title="A class to manage Json formatted data.">Json</a> formatted data.  
 <a href="../../d9/de6/a01314.php#details">More...</a></p>

<p><code>#include &lt;Json.hpp&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-types"></a>
Public Types</h2></td></tr>
<tr class="memitem:a3c35d4f54c782ef8b7898a1641eb4666"><td class="memItemLeft" align="right" valign="top">enum &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d9/de6/a01314.php#a3c35d4f54c782ef8b7898a1641eb4666">JsonType</a> { <br />
&#160;&#160;<a class="el" href="../../d9/de6/a01314.php#a3c35d4f54c782ef8b7898a1641eb4666ae19fd5ef0dc672cdc7cfb36136c6d19e">NONE</a> = 0, 
<a class="el" href="../../d9/de6/a01314.php#a3c35d4f54c782ef8b7898a1641eb4666a9ba4796f99bbe8254dac0ab0035292f5">NUMBER</a>, 
<a class="el" href="../../d9/de6/a01314.php#a3c35d4f54c782ef8b7898a1641eb4666a2951db03ec2449efc8d28b4cbdea94d3">STRING</a>, 
<a class="el" href="../../d9/de6/a01314.php#a3c35d4f54c782ef8b7898a1641eb4666a02bcb429af87b535c2b0a35707bf7f4d">OBJECT</a>, 
<br />
&#160;&#160;<a class="el" href="../../d9/de6/a01314.php#a3c35d4f54c782ef8b7898a1641eb4666a49722f0db426d85726e7ed5675e889e4">ARRAY</a>
<br />
 }</td></tr>
<tr class="separator:a3c35d4f54c782ef8b7898a1641eb4666"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:aa7c169d27c4e904b13ad8ca6fd184109"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d9/de6/a01314.php#aa7c169d27c4e904b13ad8ca6fd184109">Json</a> ()</td></tr>
<tr class="memdesc:aa7c169d27c4e904b13ad8ca6fd184109"><td class="mdescLeft">&#160;</td><td class="mdescRight">The constructor of the class.  <a href="../../d9/de6/a01314.php#aa7c169d27c4e904b13ad8ca6fd184109">More...</a><br /></td></tr>
<tr class="separator:aa7c169d27c4e904b13ad8ca6fd184109"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a970b92e7933d91f9cc8672572e3dacf4"><td class="memItemLeft" align="right" valign="top">virtual&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d9/de6/a01314.php#a970b92e7933d91f9cc8672572e3dacf4">~Json</a> ()</td></tr>
<tr class="separator:a970b92e7933d91f9cc8672572e3dacf4"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ad95d9afd2d3392fe080bf50958ec6464"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d9/de6/a01314.php#ad95d9afd2d3392fe080bf50958ec6464">Json</a> (const <a class="el" href="../../d9/de6/a01314.php">Json</a> &amp;other) noexcept</td></tr>
<tr class="memdesc:ad95d9afd2d3392fe080bf50958ec6464"><td class="mdescLeft">&#160;</td><td class="mdescRight">The copy constructor of the class.  <a href="../../d9/de6/a01314.php#ad95d9afd2d3392fe080bf50958ec6464">More...</a><br /></td></tr>
<tr class="separator:ad95d9afd2d3392fe080bf50958ec6464"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a17143d6387d6cacd7408b40d90278203"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d9/de6/a01314.php#a17143d6387d6cacd7408b40d90278203">Json</a> (const <a class="el" href="../../d9/de6/a01314.php">Json</a> &amp;&amp;other) noexcept</td></tr>
<tr class="memdesc:a17143d6387d6cacd7408b40d90278203"><td class="mdescLeft">&#160;</td><td class="mdescRight">The move constructor of the class.  <a href="../../d9/de6/a01314.php#a17143d6387d6cacd7408b40d90278203">More...</a><br /></td></tr>
<tr class="separator:a17143d6387d6cacd7408b40d90278203"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a915790021b9c9f20ac2ea225baecf489"><td class="memItemLeft" align="right" valign="top">std::string&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d9/de6/a01314.php#a915790021b9c9f20ac2ea225baecf489">get</a> () const</td></tr>
<tr class="memdesc:a915790021b9c9f20ac2ea225baecf489"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the value of a <a class="el" href="../../d9/de6/a01314.php" title="A class to manage Json formatted data.">Json</a> object of type NONE, NUMBER or STRING.  <a href="../../d9/de6/a01314.php#a915790021b9c9f20ac2ea225baecf489">More...</a><br /></td></tr>
<tr class="separator:a915790021b9c9f20ac2ea225baecf489"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ac2afe8da3954c9e84cc97674a0194d03"><td class="memItemLeft" align="right" valign="top"><a class="el" href="../../d9/de6/a01314.php">Json</a> &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d9/de6/a01314.php#ac2afe8da3954c9e84cc97674a0194d03">operator=</a> (const <a class="el" href="../../d9/de6/a01314.php">Json</a> &amp;other) noexcept</td></tr>
<tr class="memdesc:ac2afe8da3954c9e84cc97674a0194d03"><td class="mdescLeft">&#160;</td><td class="mdescRight">The copy operator of the class.  <a href="../../d9/de6/a01314.php#ac2afe8da3954c9e84cc97674a0194d03">More...</a><br /></td></tr>
<tr class="separator:ac2afe8da3954c9e84cc97674a0194d03"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a4e9c27bf8d0e1fa81ff8da964bd6a729"><td class="memItemLeft" align="right" valign="top"><a class="el" href="../../d9/de6/a01314.php">Json</a> &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d9/de6/a01314.php#a4e9c27bf8d0e1fa81ff8da964bd6a729">operator=</a> (const <a class="el" href="../../d9/de6/a01314.php">Json</a> &amp;&amp;other) noexcept</td></tr>
<tr class="memdesc:a4e9c27bf8d0e1fa81ff8da964bd6a729"><td class="mdescLeft">&#160;</td><td class="mdescRight">The move operator of the class.  <a href="../../d9/de6/a01314.php#a4e9c27bf8d0e1fa81ff8da964bd6a729">More...</a><br /></td></tr>
<tr class="separator:a4e9c27bf8d0e1fa81ff8da964bd6a729"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:af146512243e74e908084f7751a8ffdf4"><td class="memItemLeft" align="right" valign="top"><a class="el" href="../../d9/de6/a01314.php">Json</a> &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d9/de6/a01314.php#af146512243e74e908084f7751a8ffdf4">operator[]</a> (int index)</td></tr>
<tr class="memdesc:af146512243e74e908084f7751a8ffdf4"><td class="mdescLeft">&#160;</td><td class="mdescRight">An operator to use a <a class="el" href="../../d9/de6/a01314.php" title="A class to manage Json formatted data.">Json</a> object as an array.  <a href="../../d9/de6/a01314.php#af146512243e74e908084f7751a8ffdf4">More...</a><br /></td></tr>
<tr class="separator:af146512243e74e908084f7751a8ffdf4"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a719db725a687aedc671dbd88ba853c45"><td class="memItemLeft" align="right" valign="top"><a class="el" href="../../d9/de6/a01314.php">Json</a> &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d9/de6/a01314.php#a719db725a687aedc671dbd88ba853c45">operator[]</a> (const std::string &amp;index)</td></tr>
<tr class="memdesc:a719db725a687aedc671dbd88ba853c45"><td class="mdescLeft">&#160;</td><td class="mdescRight">An operator to use a <a class="el" href="../../d9/de6/a01314.php" title="A class to manage Json formatted data.">Json</a> object as an array.  <a href="../../d9/de6/a01314.php#a719db725a687aedc671dbd88ba853c45">More...</a><br /></td></tr>
<tr class="separator:a719db725a687aedc671dbd88ba853c45"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ad537515267c98725dc1a77cc2e28467a"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d9/de6/a01314.php#ad537515267c98725dc1a77cc2e28467a">parse</a> (const std::string &amp;data)</td></tr>
<tr class="memdesc:ad537515267c98725dc1a77cc2e28467a"><td class="mdescLeft">&#160;</td><td class="mdescRight">Parse a std::string into a <a class="el" href="../../d9/de6/a01314.php" title="A class to manage Json formatted data.">Json</a> object.  <a href="../../d9/de6/a01314.php#ad537515267c98725dc1a77cc2e28467a">More...</a><br /></td></tr>
<tr class="separator:ad537515267c98725dc1a77cc2e28467a"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a269d5572a1b6fdfa1da58b7b89dbe8b3"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d9/de6/a01314.php#a269d5572a1b6fdfa1da58b7b89dbe8b3">parseFile</a> (const std::string &amp;filename)</td></tr>
<tr class="memdesc:a269d5572a1b6fdfa1da58b7b89dbe8b3"><td class="mdescLeft">&#160;</td><td class="mdescRight">Parse json data saved in a file into a usable <a class="el" href="../../d9/de6/a01314.php" title="A class to manage Json formatted data.">Json</a> object.  <a href="../../d9/de6/a01314.php#a269d5572a1b6fdfa1da58b7b89dbe8b3">More...</a><br /></td></tr>
<tr class="separator:a269d5572a1b6fdfa1da58b7b89dbe8b3"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a415f3cd1b8e73f404854f9c5729cf68d"><td class="memItemLeft" align="right" valign="top">size_t&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d9/de6/a01314.php#a415f3cd1b8e73f404854f9c5729cf68d">size</a> ()</td></tr>
<tr class="memdesc:a415f3cd1b8e73f404854f9c5729cf68d"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the size of a <a class="el" href="../../d9/de6/a01314.php" title="A class to manage Json formatted data.">Json</a> object of type OBJECT or ARRAY.  <a href="../../d9/de6/a01314.php#a415f3cd1b8e73f404854f9c5729cf68d">More...</a><br /></td></tr>
<tr class="separator:a415f3cd1b8e73f404854f9c5729cf68d"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="friends"></a>
Friends</h2></td></tr>
<tr class="memitem:a03e32be5b88c0a40797b0ed39c9bdcba"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d9/de6/a01314.php#a03e32be5b88c0a40797b0ed39c9bdcba">operator==</a> (const <a class="el" href="../../d9/de6/a01314.php">Json</a> &amp;a, const <a class="el" href="../../d9/de6/a01314.php">Json</a> &amp;b) noexcept</td></tr>
<tr class="separator:a03e32be5b88c0a40797b0ed39c9bdcba"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a6b1400a312593beec3776b4f998a7419"><td class="memItemLeft" align="right" valign="top">std::ostream &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d9/de6/a01314.php#a6b1400a312593beec3776b4f998a7419">operator&lt;&lt;</a> (std::ostream &amp;os, const <a class="el" href="../../d9/de6/a01314.php">Json</a> &amp;js)</td></tr>
<tr class="separator:a6b1400a312593beec3776b4f998a7419"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>A class to manage <a class="el" href="../../d9/de6/a01314.php" title="A class to manage Json formatted data.">Json</a> formatted data. </p>
</div><h2 class="groupheader">Member Enumeration Documentation</h2>
<a id="a3c35d4f54c782ef8b7898a1641eb4666"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a3c35d4f54c782ef8b7898a1641eb4666">&#9670;&nbsp;</a></span>JsonType</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">enum <a class="el" href="../../d9/de6/a01314.php#a3c35d4f54c782ef8b7898a1641eb4666">mcd::Json::JsonType</a></td>
        </tr>
      </table>
</div><div class="memdoc">
<table class="fieldtable">
<tr><th colspan="2">Enumerator</th></tr><tr><td class="fieldname"><a id="a3c35d4f54c782ef8b7898a1641eb4666ae19fd5ef0dc672cdc7cfb36136c6d19e"></a>NONE&#160;</td><td class="fielddoc"></td></tr>
<tr><td class="fieldname"><a id="a3c35d4f54c782ef8b7898a1641eb4666a9ba4796f99bbe8254dac0ab0035292f5"></a>NUMBER&#160;</td><td class="fielddoc"></td></tr>
<tr><td class="fieldname"><a id="a3c35d4f54c782ef8b7898a1641eb4666a2951db03ec2449efc8d28b4cbdea94d3"></a>STRING&#160;</td><td class="fielddoc"></td></tr>
<tr><td class="fieldname"><a id="a3c35d4f54c782ef8b7898a1641eb4666a02bcb429af87b535c2b0a35707bf7f4d"></a>OBJECT&#160;</td><td class="fielddoc"></td></tr>
<tr><td class="fieldname"><a id="a3c35d4f54c782ef8b7898a1641eb4666a49722f0db426d85726e7ed5675e889e4"></a>ARRAY&#160;</td><td class="fielddoc"></td></tr>
</table>

</div>
</div>
<h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a id="aa7c169d27c4e904b13ad8ca6fd184109"></a>
<h2 class="memtitle"><span class="permalink"><a href="#aa7c169d27c4e904b13ad8ca6fd184109">&#9670;&nbsp;</a></span>Json() <span class="overload">[1/3]</span></h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">mcd::Json::Json </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">explicit</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>The constructor of the class. </p>

</div>
</div>
<a id="a970b92e7933d91f9cc8672572e3dacf4"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a970b92e7933d91f9cc8672572e3dacf4">&#9670;&nbsp;</a></span>~Json()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual mcd::Json::~Json </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
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
<a id="ad95d9afd2d3392fe080bf50958ec6464"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ad95d9afd2d3392fe080bf50958ec6464">&#9670;&nbsp;</a></span>Json() <span class="overload">[2/3]</span></h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">mcd::Json::Json </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="../../d9/de6/a01314.php">Json</a> &amp;&#160;</td>
          <td class="paramname"><em>other</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">noexcept</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>The copy constructor of the class. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">other</td><td>The class' instance for copying </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a id="a17143d6387d6cacd7408b40d90278203"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a17143d6387d6cacd7408b40d90278203">&#9670;&nbsp;</a></span>Json() <span class="overload">[3/3]</span></h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">mcd::Json::Json </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="../../d9/de6/a01314.php">Json</a> &amp;&amp;&#160;</td>
          <td class="paramname"><em>other</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">noexcept</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>The move constructor of the class. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">other</td><td>The class' instance for moving </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a id="a915790021b9c9f20ac2ea225baecf489"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a915790021b9c9f20ac2ea225baecf489">&#9670;&nbsp;</a></span>get()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">std::string mcd::Json::get </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Return the value of a <a class="el" href="../../d9/de6/a01314.php" title="A class to manage Json formatted data.">Json</a> object of type NONE, NUMBER or STRING. </p>

</div>
</div>
<a id="a4e9c27bf8d0e1fa81ff8da964bd6a729"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a4e9c27bf8d0e1fa81ff8da964bd6a729">&#9670;&nbsp;</a></span>operator=() <span class="overload">[1/2]</span></h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="../../d9/de6/a01314.php">Json</a>&amp; mcd::Json::operator= </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="../../d9/de6/a01314.php">Json</a> &amp;&amp;&#160;</td>
          <td class="paramname"><em>other</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">noexcept</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>The move operator of the class. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">other</td><td>The class' instance for moving </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a id="ac2afe8da3954c9e84cc97674a0194d03"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ac2afe8da3954c9e84cc97674a0194d03">&#9670;&nbsp;</a></span>operator=() <span class="overload">[2/2]</span></h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="../../d9/de6/a01314.php">Json</a>&amp; mcd::Json::operator= </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="../../d9/de6/a01314.php">Json</a> &amp;&#160;</td>
          <td class="paramname"><em>other</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">noexcept</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>The copy operator of the class. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">other</td><td>The class' instance for copying </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a id="a719db725a687aedc671dbd88ba853c45"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a719db725a687aedc671dbd88ba853c45">&#9670;&nbsp;</a></span>operator[]() <span class="overload">[1/2]</span></h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="../../d9/de6/a01314.php">Json</a>&amp; mcd::Json::operator[] </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>index</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>An operator to use a <a class="el" href="../../d9/de6/a01314.php" title="A class to manage Json formatted data.">Json</a> object as an array. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">index</td><td>The index in the <a class="el" href="../../d9/de6/a01314.php" title="A class to manage Json formatted data.">Json</a> object </td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Return a child <a class="el" href="../../d9/de6/a01314.php" title="A class to manage Json formatted data.">Json</a> object </dd></dl>

</div>
</div>
<a id="af146512243e74e908084f7751a8ffdf4"></a>
<h2 class="memtitle"><span class="permalink"><a href="#af146512243e74e908084f7751a8ffdf4">&#9670;&nbsp;</a></span>operator[]() <span class="overload">[2/2]</span></h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="../../d9/de6/a01314.php">Json</a>&amp; mcd::Json::operator[] </td>
          <td>(</td>
          <td class="paramtype">int&#160;</td>
          <td class="paramname"><em>index</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>An operator to use a <a class="el" href="../../d9/de6/a01314.php" title="A class to manage Json formatted data.">Json</a> object as an array. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">index</td><td>The index in the <a class="el" href="../../d9/de6/a01314.php" title="A class to manage Json formatted data.">Json</a> object, it can be used in an array like part of the object </td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Return a child <a class="el" href="../../d9/de6/a01314.php" title="A class to manage Json formatted data.">Json</a> object </dd></dl>
<div class="dynheader">
Here is the call graph for this function:</div>
<div class="dyncontent">
<div class="center"><img src="../../d9/de6/a01314_af146512243e74e908084f7751a8ffdf4_cgraph.png" border="0" usemap="#ad9/de6/a01314_af146512243e74e908084f7751a8ffdf4_cgraph" alt=""/></div>
<map name="d9/de6/a01314_af146512243e74e908084f7751a8ffdf4_cgraph" id="d9/de6/a01314_af146512243e74e908084f7751a8ffdf4_cgraph">
<area shape="rect" title="An operator to use a Json object as an array." alt="" coords="5,29,152,56"/>
<area shape="rect" href="../../db/d12/a00268.php#ae057a7c5042a3cacb444199a2b6b7598" title="Convert in in a string." alt="" coords="200,29,273,56"/>
</map>
</div>

</div>
</div>
<a id="ad537515267c98725dc1a77cc2e28467a"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ad537515267c98725dc1a77cc2e28467a">&#9670;&nbsp;</a></span>parse()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void mcd::Json::parse </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>data</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Parse a std::string into a <a class="el" href="../../d9/de6/a01314.php" title="A class to manage Json formatted data.">Json</a> object. </p>

</div>
</div>
<a id="a269d5572a1b6fdfa1da58b7b89dbe8b3"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a269d5572a1b6fdfa1da58b7b89dbe8b3">&#9670;&nbsp;</a></span>parseFile()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void mcd::Json::parseFile </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>filename</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Parse json data saved in a file into a usable <a class="el" href="../../d9/de6/a01314.php" title="A class to manage Json formatted data.">Json</a> object. </p>

</div>
</div>
<a id="a415f3cd1b8e73f404854f9c5729cf68d"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a415f3cd1b8e73f404854f9c5729cf68d">&#9670;&nbsp;</a></span>size()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">size_t mcd::Json::size </td>
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

<p>Return the size of a <a class="el" href="../../d9/de6/a01314.php" title="A class to manage Json formatted data.">Json</a> object of type OBJECT or ARRAY. </p>

</div>
</div>
<h2 class="groupheader">Friends And Related Function Documentation</h2>
<a id="a6b1400a312593beec3776b4f998a7419"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a6b1400a312593beec3776b4f998a7419">&#9670;&nbsp;</a></span>operator&lt;&lt;</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">std::ostream&amp; operator&lt;&lt; </td>
          <td>(</td>
          <td class="paramtype">std::ostream &amp;&#160;</td>
          <td class="paramname"><em>os</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="../../d9/de6/a01314.php">Json</a> &amp;&#160;</td>
          <td class="paramname"><em>js</em>&#160;</td>
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
<a id="a03e32be5b88c0a40797b0ed39c9bdcba"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a03e32be5b88c0a40797b0ed39c9bdcba">&#9670;&nbsp;</a></span>operator==</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">bool operator== </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="../../d9/de6/a01314.php">Json</a> &amp;&#160;</td>
          <td class="paramname"><em>a</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="../../d9/de6/a01314.php">Json</a> &amp;&#160;</td>
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
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="../../df/dc8/a00122.php">Json.hpp</a></li>
</ul>
</div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../db/d12/a00268.php">mcd</a></li><li class="navelem"><a class="el" href="../../d9/de6/a01314.php">Json</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
