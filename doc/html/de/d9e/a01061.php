<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.13"/>
		<title>C++: mcd::Timer Class Reference</title>
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
				$text = "Generated on Sun Sep 29 2019 11:39:30 for C++ by";
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
$(document).ready(function(){initNavTree('de/d9e/a01061.php','../../');});
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
<a href="../../d5/d4c/a01058.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">mcd::Timer Class Reference</div>  </div>
</div><!--header-->
<div class="contents">

<p>A timer to do something at the end.  
 <a href="../../de/d9e/a01061.php#details">More...</a></p>

<p><code>#include &lt;Timer.hpp&gt;</code></p>
<div class="dynheader">
Inheritance diagram for mcd::Timer:</div>
<div class="dyncontent">
<div class="center"><img src="../../d5/d16/a01060.png" border="0" usemap="#mcd_1_1Timer_inherit__map" alt="Inheritance graph"/></div>
<map name="mcd_1_1Timer_inherit__map" id="mcd_1_1Timer_inherit__map">
<area shape="rect" id="node2" href="../../dc/d99/a01053.php" title="mcd::Threadable\&lt; Timer \&gt;" alt="" coords="5,95,181,121"/>
<area shape="rect" id="node3" href="../../dc/d99/a01053.php" title="A class to let another one to be threadable with update() member in a thread. " alt="" coords="17,5,170,32"/>
</map>
<center><span class="legend">[<a target="top" href="../../graph_legend.php">legend</a>]</span></center></div>
<div class="dynheader">
Collaboration diagram for mcd::Timer:</div>
<div class="dyncontent">
<div class="center"><img src="../../d0/d90/a01059.png" border="0" usemap="#mcd_1_1Timer_coll__map" alt="Collaboration graph"/></div>
<map name="mcd_1_1Timer_coll__map" id="mcd_1_1Timer_coll__map">
<area shape="rect" id="node2" href="../../dc/d99/a01053.php" title="mcd::Threadable\&lt; Timer \&gt;" alt="" coords="5,95,181,121"/>
<area shape="rect" id="node3" href="../../dc/d99/a01053.php" title="A class to let another one to be threadable with update() member in a thread. " alt="" coords="17,5,170,32"/>
</map>
<center><span class="legend">[<a target="top" href="../../graph_legend.php">legend</a>]</span></center></div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:ae2847ca8c851863418d57e80e972095a"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../de/d9e/a01061.php#ae2847ca8c851863418d57e80e972095a">Timer</a> ()</td></tr>
<tr class="separator:ae2847ca8c851863418d57e80e972095a"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a5ce92c00f251ba4ee94fc8224a9ccbc7"><td class="memItemLeft" align="right" valign="top">std::time_t&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../de/d9e/a01061.php#a5ce92c00f251ba4ee94fc8224a9ccbc7">getStart</a> () const</td></tr>
<tr class="separator:a5ce92c00f251ba4ee94fc8224a9ccbc7"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:afe0b2617d4a9beb52d2118d532d0db03"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../de/d9e/a01061.php#afe0b2617d4a9beb52d2118d532d0db03">start</a> (int sec)</td></tr>
<tr class="separator:afe0b2617d4a9beb52d2118d532d0db03"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:affd1240db762eb2d3f125bfdda4aa990"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../de/d9e/a01061.php#affd1240db762eb2d3f125bfdda4aa990">restart</a> (int sec)</td></tr>
<tr class="separator:affd1240db762eb2d3f125bfdda4aa990"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aa0825ee9a421da67ddac15fd45632d4e"><td class="memItemLeft" align="right" valign="top">virtual void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../de/d9e/a01061.php#aa0825ee9a421da67ddac15fd45632d4e">update</a> () override</td></tr>
<tr class="separator:aa0825ee9a421da67ddac15fd45632d4e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="inherit_header pub_methods_a01053"><td colspan="2" onclick="javascript:toggleInherit('pub_methods_a01053')"><img src="../../closed.png" alt="-"/>&#160;Public Member Functions inherited from <a class="el" href="../../dc/d99/a01053.php">mcd::Threadable&lt; Timer &gt;</a></td></tr>
<tr class="memitem:a04bdb4a894312f6671680c2f103b8a63 inherit pub_methods_a01053"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dc/d99/a01053.php#a04bdb4a894312f6671680c2f103b8a63">Threadable</a> ()</td></tr>
<tr class="memdesc:a04bdb4a894312f6671680c2f103b8a63 inherit pub_methods_a01053"><td class="mdescLeft">&#160;</td><td class="mdescRight">The constructor of the Threadable class.  <a href="../../dc/d99/a01053.php#a04bdb4a894312f6671680c2f103b8a63">More...</a><br /></td></tr>
<tr class="separator:a04bdb4a894312f6671680c2f103b8a63 inherit pub_methods_a01053"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a29db3ebe9dfbf77bc04967565c0dcf6e inherit pub_methods_a01053"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dc/d99/a01053.php#a29db3ebe9dfbf77bc04967565c0dcf6e">Threadable</a> (<a class="el" href="../../dc/d99/a01053.php">Threadable</a>&lt; <a class="el" href="../../de/d9e/a01061.php">Timer</a> &gt; &amp;other)</td></tr>
<tr class="memdesc:a29db3ebe9dfbf77bc04967565c0dcf6e inherit pub_methods_a01053"><td class="mdescLeft">&#160;</td><td class="mdescRight">The copy constructor of the Threadable class.  <a href="../../dc/d99/a01053.php#a29db3ebe9dfbf77bc04967565c0dcf6e">More...</a><br /></td></tr>
<tr class="separator:a29db3ebe9dfbf77bc04967565c0dcf6e inherit pub_methods_a01053"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a4cbceb43796de6c36a5cd4f35a6402cb inherit pub_methods_a01053"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dc/d99/a01053.php#a4cbceb43796de6c36a5cd4f35a6402cb">Threadable</a> (<a class="el" href="../../dc/d99/a01053.php">Threadable</a>&lt; <a class="el" href="../../de/d9e/a01061.php">Timer</a> &gt; &amp;&amp;other)</td></tr>
<tr class="memdesc:a4cbceb43796de6c36a5cd4f35a6402cb inherit pub_methods_a01053"><td class="mdescLeft">&#160;</td><td class="mdescRight">The move constructor of the Threadable class.  <a href="../../dc/d99/a01053.php#a4cbceb43796de6c36a5cd4f35a6402cb">More...</a><br /></td></tr>
<tr class="separator:a4cbceb43796de6c36a5cd4f35a6402cb inherit pub_methods_a01053"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aab98cd8e5cd8832dfd6e82c17d1a689d inherit pub_methods_a01053"><td class="memItemLeft" align="right" valign="top">virtual&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dc/d99/a01053.php#aab98cd8e5cd8832dfd6e82c17d1a689d">~Threadable</a> ()</td></tr>
<tr class="memdesc:aab98cd8e5cd8832dfd6e82c17d1a689d inherit pub_methods_a01053"><td class="mdescLeft">&#160;</td><td class="mdescRight">The destructor of the Threadable class.  <a href="../../dc/d99/a01053.php#aab98cd8e5cd8832dfd6e82c17d1a689d">More...</a><br /></td></tr>
<tr class="separator:aab98cd8e5cd8832dfd6e82c17d1a689d inherit pub_methods_a01053"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aede63b72f054d20e35d22153af8313c8 inherit pub_methods_a01053"><td class="memItemLeft" align="right" valign="top"><a class="el" href="../../dc/d99/a01053.php">Threadable</a> &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dc/d99/a01053.php#aede63b72f054d20e35d22153af8313c8">operator=</a> (<a class="el" href="../../dc/d99/a01053.php">Threadable</a>&lt; <a class="el" href="../../de/d9e/a01061.php">Timer</a> &gt; &amp;other) noexcept</td></tr>
<tr class="memdesc:aede63b72f054d20e35d22153af8313c8 inherit pub_methods_a01053"><td class="mdescLeft">&#160;</td><td class="mdescRight">The copy operator of the class.  <a href="../../dc/d99/a01053.php#aede63b72f054d20e35d22153af8313c8">More...</a><br /></td></tr>
<tr class="separator:aede63b72f054d20e35d22153af8313c8 inherit pub_methods_a01053"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ab51cdb23e70b6ab97afb529098eb20c0 inherit pub_methods_a01053"><td class="memItemLeft" align="right" valign="top"><a class="el" href="../../dc/d99/a01053.php">Threadable</a> &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dc/d99/a01053.php#ab51cdb23e70b6ab97afb529098eb20c0">operator=</a> (<a class="el" href="../../dc/d99/a01053.php">Threadable</a>&lt; <a class="el" href="../../de/d9e/a01061.php">Timer</a> &gt; &amp;&amp;other) noexcept</td></tr>
<tr class="memdesc:ab51cdb23e70b6ab97afb529098eb20c0 inherit pub_methods_a01053"><td class="mdescLeft">&#160;</td><td class="mdescRight">The move operator of the class.  <a href="../../dc/d99/a01053.php#ab51cdb23e70b6ab97afb529098eb20c0">More...</a><br /></td></tr>
<tr class="separator:ab51cdb23e70b6ab97afb529098eb20c0 inherit pub_methods_a01053"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a1eb0985252b04c90761f92432ef4216d inherit pub_methods_a01053"><td class="memItemLeft" align="right" valign="top">virtual void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dc/d99/a01053.php#a1eb0985252b04c90761f92432ef4216d">launch</a> ()=0</td></tr>
<tr class="memdesc:a1eb0985252b04c90761f92432ef4216d inherit pub_methods_a01053"><td class="mdescLeft">&#160;</td><td class="mdescRight">Start the thread.  <a href="../../dc/d99/a01053.php#a1eb0985252b04c90761f92432ef4216d">More...</a><br /></td></tr>
<tr class="separator:a1eb0985252b04c90761f92432ef4216d inherit pub_methods_a01053"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a4dd37d54456e167f8b42d30be7076939 inherit pub_methods_a01053"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dc/d99/a01053.php#a4dd37d54456e167f8b42d30be7076939">stop</a> ()</td></tr>
<tr class="memdesc:a4dd37d54456e167f8b42d30be7076939 inherit pub_methods_a01053"><td class="mdescLeft">&#160;</td><td class="mdescRight">Stop the thread and delete the pointer correctly.  <a href="../../dc/d99/a01053.php#a4dd37d54456e167f8b42d30be7076939">More...</a><br /></td></tr>
<tr class="separator:a4dd37d54456e167f8b42d30be7076939 inherit pub_methods_a01053"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a156911948e5f5d2d5eeb0922ee3bd86d inherit pub_methods_a01053"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dc/d99/a01053.php#a156911948e5f5d2d5eeb0922ee3bd86d">launched</a> () const</td></tr>
<tr class="memdesc:a156911948e5f5d2d5eeb0922ee3bd86d inherit pub_methods_a01053"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return if the thread has been launched or not.  <a href="../../dc/d99/a01053.php#a156911948e5f5d2d5eeb0922ee3bd86d">More...</a><br /></td></tr>
<tr class="separator:a156911948e5f5d2d5eeb0922ee3bd86d inherit pub_methods_a01053"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a804393d97a319c38afa593072bd0ead9 inherit pub_methods_a01053"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dc/d99/a01053.php#a804393d97a319c38afa593072bd0ead9">hasToStop</a> () const</td></tr>
<tr class="memdesc:a804393d97a319c38afa593072bd0ead9 inherit pub_methods_a01053"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return if the thread has to stop or not.  <a href="../../dc/d99/a01053.php#a804393d97a319c38afa593072bd0ead9">More...</a><br /></td></tr>
<tr class="separator:a804393d97a319c38afa593072bd0ead9 inherit pub_methods_a01053"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:af6a411164d64b1b04b731f29d54e016a inherit pub_methods_a01053"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dc/d99/a01053.php#af6a411164d64b1b04b731f29d54e016a">inUse</a> ()</td></tr>
<tr class="memdesc:af6a411164d64b1b04b731f29d54e016a inherit pub_methods_a01053"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set that the thread is actually used.  <a href="../../dc/d99/a01053.php#af6a411164d64b1b04b731f29d54e016a">More...</a><br /></td></tr>
<tr class="separator:af6a411164d64b1b04b731f29d54e016a inherit pub_methods_a01053"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a0b2419ec1119f28dc2440e202f0d2c8e inherit pub_methods_a01053"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dc/d99/a01053.php#a0b2419ec1119f28dc2440e202f0d2c8e">notInUse</a> ()</td></tr>
<tr class="memdesc:a0b2419ec1119f28dc2440e202f0d2c8e inherit pub_methods_a01053"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set that the thread is not used.  <a href="../../dc/d99/a01053.php#a0b2419ec1119f28dc2440e202f0d2c8e">More...</a><br /></td></tr>
<tr class="separator:a0b2419ec1119f28dc2440e202f0d2c8e inherit pub_methods_a01053"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pro-attribs"></a>
Protected Attributes</h2></td></tr>
<tr class="memitem:acb15fc23bdf915fbc5093d3f40996a37"><td class="memItemLeft" align="right" valign="top">std::time_t&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../de/d9e/a01061.php#acb15fc23bdf915fbc5093d3f40996a37">m_start</a></td></tr>
<tr class="separator:acb15fc23bdf915fbc5093d3f40996a37"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a489644a70b400f78d63ad3449ffae846"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../de/d9e/a01061.php#a489644a70b400f78d63ad3449ffae846">started</a></td></tr>
<tr class="separator:a489644a70b400f78d63ad3449ffae846"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="inherit_header pro_attribs_a01053"><td colspan="2" onclick="javascript:toggleInherit('pro_attribs_a01053')"><img src="../../closed.png" alt="-"/>&#160;Protected Attributes inherited from <a class="el" href="../../dc/d99/a01053.php">mcd::Threadable&lt; Timer &gt;</a></td></tr>
<tr class="memitem:a0d2496ea879c9a8933fe714ffce9639a inherit pro_attribs_a01053"><td class="memItemLeft" align="right" valign="top">std::mutex&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dc/d99/a01053.php#a0d2496ea879c9a8933fe714ffce9639a">_mutex</a></td></tr>
<tr class="memdesc:a0d2496ea879c9a8933fe714ffce9639a inherit pro_attribs_a01053"><td class="mdescLeft">&#160;</td><td class="mdescRight">The mutex variable to use in the threadable class.  <a href="../../dc/d99/a01053.php#a0d2496ea879c9a8933fe714ffce9639a">More...</a><br /></td></tr>
<tr class="separator:a0d2496ea879c9a8933fe714ffce9639a inherit pro_attribs_a01053"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a0351657024f3b0d37b54c08a09a156fa inherit pro_attribs_a01053"><td class="memItemLeft" align="right" valign="top">long int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dc/d99/a01053.php#a0351657024f3b0d37b54c08a09a156fa">sleeper</a></td></tr>
<tr class="memdesc:a0351657024f3b0d37b54c08a09a156fa inherit pro_attribs_a01053"><td class="mdescLeft">&#160;</td><td class="mdescRight">The time that the threadable class has to sleep after each update.  <a href="../../dc/d99/a01053.php#a0351657024f3b0d37b54c08a09a156fa">More...</a><br /></td></tr>
<tr class="separator:a0351657024f3b0d37b54c08a09a156fa inherit pro_attribs_a01053"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>A timer to do something at the end. </p>
<dl class="todo"><dt><b><a class="el" href="../../dc/d9a/a00218.php#_todo000003">Todo:</a></b></dt><dd>Create the class </dd></dl>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a id="ae2847ca8c851863418d57e80e972095a"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ae2847ca8c851863418d57e80e972095a">&#9670;&nbsp;</a></span>Timer()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">mcd::Timer::Timer </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a id="a5ce92c00f251ba4ee94fc8224a9ccbc7"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a5ce92c00f251ba4ee94fc8224a9ccbc7">&#9670;&nbsp;</a></span>getStart()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">std::time_t mcd::Timer::getStart </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
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
<div class="center"><img src="../../de/d9e/a01061_a5ce92c00f251ba4ee94fc8224a9ccbc7_cgraph.png" border="0" usemap="#de/d9e/a01061_a5ce92c00f251ba4ee94fc8224a9ccbc7_cgraph" alt=""/></div>
<map name="de/d9e/a01061_a5ce92c00f251ba4ee94fc8224a9ccbc7_cgraph" id="de/d9e/a01061_a5ce92c00f251ba4ee94fc8224a9ccbc7_cgraph">
<area shape="rect" id="node2" href="../../de/d9e/a01061.php#afe0b2617d4a9beb52d2118d532d0db03" title="mcd::Timer::start" alt="" coords="201,5,324,32"/>
<area shape="rect" id="node3" href="../../de/d9e/a01061.php#affd1240db762eb2d3f125bfdda4aa990" title="mcd::Timer::restart" alt="" coords="196,56,329,83"/>
</map>
</div>

</div>
</div>
<a id="affd1240db762eb2d3f125bfdda4aa990"></a>
<h2 class="memtitle"><span class="permalink"><a href="#affd1240db762eb2d3f125bfdda4aa990">&#9670;&nbsp;</a></span>restart()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void mcd::Timer::restart </td>
          <td>(</td>
          <td class="paramtype">int&#160;</td>
          <td class="paramname"><em>sec</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a id="afe0b2617d4a9beb52d2118d532d0db03"></a>
<h2 class="memtitle"><span class="permalink"><a href="#afe0b2617d4a9beb52d2118d532d0db03">&#9670;&nbsp;</a></span>start()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void mcd::Timer::start </td>
          <td>(</td>
          <td class="paramtype">int&#160;</td>
          <td class="paramname"><em>sec</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a id="aa0825ee9a421da67ddac15fd45632d4e"></a>
<h2 class="memtitle"><span class="permalink"><a href="#aa0825ee9a421da67ddac15fd45632d4e">&#9670;&nbsp;</a></span>update()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual void mcd::Timer::update </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span><span class="mlabel">override</span><span class="mlabel">virtual</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

</div>
</div>
<h2 class="groupheader">Member Data Documentation</h2>
<a id="acb15fc23bdf915fbc5093d3f40996a37"></a>
<h2 class="memtitle"><span class="permalink"><a href="#acb15fc23bdf915fbc5093d3f40996a37">&#9670;&nbsp;</a></span>m_start</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">std::time_t mcd::Timer::m_start</td>
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
<a id="a489644a70b400f78d63ad3449ffae846"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a489644a70b400f78d63ad3449ffae846">&#9670;&nbsp;</a></span>started</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">bool mcd::Timer::started</td>
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
<li><a class="el" href="../../de/db1/a00197.php">Timer.hpp</a></li>
</ul>
</div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../d5/d0b/a00220.php">mcd</a></li><li class="navelem"><a class="el" href="../../de/d9e/a01061.php">Timer</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
