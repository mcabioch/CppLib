<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.13"/>
		<title>C++: mcd::Threadable&lt; C &gt; Class Template Reference</title>
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
				$text = "Generated on Tue Sep 24 2019 20:08:41 for C++ by";
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
$(document).ready(function(){initNavTree('df/d89/a01032.php','../../');});
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
<a href="../../d0/daa/a01029.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">mcd::Threadable&lt; C &gt; Class Template Reference<span class="mlabels"><span class="mlabel">abstract</span></span></div>  </div>
</div><!--header-->
<div class="contents">

<p>A class to let another one to be threadable with update() member in a thread.  
 <a href="../../df/d89/a01032.php#details">More...</a></p>

<p><code>#include &lt;Threadable.hpp&gt;</code></p>
<div class="dynheader">
Inheritance diagram for mcd::Threadable&lt; C &gt;:</div>
<div class="dyncontent">
<div class="center"><img src="../../d6/dcf/a01031.png" border="0" usemap="#mcd_1_1Threadable_3_01C_01_4_inherit__map" alt="Inheritance graph"/></div>
<map name="mcd_1_1Threadable_3_01C_01_4_inherit__map" id="mcd_1_1Threadable_3_01C_01_4_inherit__map">
<area shape="rect" id="node2" href="../../df/d89/a01032.php" title="mcd::Threadable\&lt; Timer \&gt;" alt="" coords="5,95,181,121"/>
<area shape="rect" id="node3" href="../../db/d14/a01040.php" title="A timer to do something at the end. " alt="" coords="49,171,137,197"/>
</map>
<center><span class="legend">[<a target="top" href="../../graph_legend.php">legend</a>]</span></center></div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:a04bdb4a894312f6671680c2f103b8a63"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../df/d89/a01032.php#a04bdb4a894312f6671680c2f103b8a63">Threadable</a> ()</td></tr>
<tr class="memdesc:a04bdb4a894312f6671680c2f103b8a63"><td class="mdescLeft">&#160;</td><td class="mdescRight">The constructor of the <a class="el" href="../../df/d89/a01032.php" title="A class to let another one to be threadable with update() member in a thread. ">Threadable</a> class.  <a href="#a04bdb4a894312f6671680c2f103b8a63">More...</a><br /></td></tr>
<tr class="separator:a04bdb4a894312f6671680c2f103b8a63"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a29db3ebe9dfbf77bc04967565c0dcf6e"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../df/d89/a01032.php#a29db3ebe9dfbf77bc04967565c0dcf6e">Threadable</a> (<a class="el" href="../../df/d89/a01032.php">Threadable</a>&lt; C &gt; &amp;other)</td></tr>
<tr class="memdesc:a29db3ebe9dfbf77bc04967565c0dcf6e"><td class="mdescLeft">&#160;</td><td class="mdescRight">The copy constructor of the <a class="el" href="../../df/d89/a01032.php" title="A class to let another one to be threadable with update() member in a thread. ">Threadable</a> class.  <a href="#a29db3ebe9dfbf77bc04967565c0dcf6e">More...</a><br /></td></tr>
<tr class="separator:a29db3ebe9dfbf77bc04967565c0dcf6e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aab98cd8e5cd8832dfd6e82c17d1a689d"><td class="memItemLeft" align="right" valign="top">virtual&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../df/d89/a01032.php#aab98cd8e5cd8832dfd6e82c17d1a689d">~Threadable</a> ()</td></tr>
<tr class="memdesc:aab98cd8e5cd8832dfd6e82c17d1a689d"><td class="mdescLeft">&#160;</td><td class="mdescRight">The destructor of the <a class="el" href="../../df/d89/a01032.php" title="A class to let another one to be threadable with update() member in a thread. ">Threadable</a> class.  <a href="#aab98cd8e5cd8832dfd6e82c17d1a689d">More...</a><br /></td></tr>
<tr class="separator:aab98cd8e5cd8832dfd6e82c17d1a689d"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a1eb0985252b04c90761f92432ef4216d"><td class="memItemLeft" align="right" valign="top">virtual void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../df/d89/a01032.php#a1eb0985252b04c90761f92432ef4216d">launch</a> ()=0</td></tr>
<tr class="memdesc:a1eb0985252b04c90761f92432ef4216d"><td class="mdescLeft">&#160;</td><td class="mdescRight">Start the thread.  <a href="#a1eb0985252b04c90761f92432ef4216d">More...</a><br /></td></tr>
<tr class="separator:a1eb0985252b04c90761f92432ef4216d"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a4dd37d54456e167f8b42d30be7076939"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../df/d89/a01032.php#a4dd37d54456e167f8b42d30be7076939">stop</a> ()</td></tr>
<tr class="memdesc:a4dd37d54456e167f8b42d30be7076939"><td class="mdescLeft">&#160;</td><td class="mdescRight">Stop the thread and delete the pointer correctly.  <a href="#a4dd37d54456e167f8b42d30be7076939">More...</a><br /></td></tr>
<tr class="separator:a4dd37d54456e167f8b42d30be7076939"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a156911948e5f5d2d5eeb0922ee3bd86d"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../df/d89/a01032.php#a156911948e5f5d2d5eeb0922ee3bd86d">launched</a> () const</td></tr>
<tr class="memdesc:a156911948e5f5d2d5eeb0922ee3bd86d"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return if the thread has been launched or not.  <a href="#a156911948e5f5d2d5eeb0922ee3bd86d">More...</a><br /></td></tr>
<tr class="separator:a156911948e5f5d2d5eeb0922ee3bd86d"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a804393d97a319c38afa593072bd0ead9"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../df/d89/a01032.php#a804393d97a319c38afa593072bd0ead9">hasToStop</a> () const</td></tr>
<tr class="memdesc:a804393d97a319c38afa593072bd0ead9"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return if the thread has to stop or not.  <a href="#a804393d97a319c38afa593072bd0ead9">More...</a><br /></td></tr>
<tr class="separator:a804393d97a319c38afa593072bd0ead9"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:af6a411164d64b1b04b731f29d54e016a"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../df/d89/a01032.php#af6a411164d64b1b04b731f29d54e016a">inUse</a> ()</td></tr>
<tr class="memdesc:af6a411164d64b1b04b731f29d54e016a"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set that the thread is actually used.  <a href="#af6a411164d64b1b04b731f29d54e016a">More...</a><br /></td></tr>
<tr class="separator:af6a411164d64b1b04b731f29d54e016a"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a0b2419ec1119f28dc2440e202f0d2c8e"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../df/d89/a01032.php#a0b2419ec1119f28dc2440e202f0d2c8e">notInUse</a> ()</td></tr>
<tr class="memdesc:a0b2419ec1119f28dc2440e202f0d2c8e"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set that the thread is not used.  <a href="#a0b2419ec1119f28dc2440e202f0d2c8e">More...</a><br /></td></tr>
<tr class="separator:a0b2419ec1119f28dc2440e202f0d2c8e"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pro-attribs"></a>
Protected Attributes</h2></td></tr>
<tr class="memitem:a0d2496ea879c9a8933fe714ffce9639a"><td class="memItemLeft" align="right" valign="top">std::mutex&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../df/d89/a01032.php#a0d2496ea879c9a8933fe714ffce9639a">_mutex</a></td></tr>
<tr class="memdesc:a0d2496ea879c9a8933fe714ffce9639a"><td class="mdescLeft">&#160;</td><td class="mdescRight">The mutex variable to use in the threadable class.  <a href="#a0d2496ea879c9a8933fe714ffce9639a">More...</a><br /></td></tr>
<tr class="separator:a0d2496ea879c9a8933fe714ffce9639a"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a0351657024f3b0d37b54c08a09a156fa"><td class="memItemLeft" align="right" valign="top">long int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../df/d89/a01032.php#a0351657024f3b0d37b54c08a09a156fa">sleeper</a></td></tr>
<tr class="memdesc:a0351657024f3b0d37b54c08a09a156fa"><td class="mdescLeft">&#160;</td><td class="mdescRight">The time that the threadable class has to sleep after each update.  <a href="#a0351657024f3b0d37b54c08a09a156fa">More...</a><br /></td></tr>
<tr class="separator:a0351657024f3b0d37b54c08a09a156fa"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><h3>template&lt;class C&gt;<br />
class mcd::Threadable&lt; C &gt;</h3>

<p>A class to let another one to be threadable with update() member in a thread. </p>
<p>On heritage,<br />
</p><ul>
<li>: public <a class="el" href="../../df/d89/a01032.php" title="A class to let another one to be threadable with update() member in a thread. ">Threadable</a>&lt;<b>Your</b> <b>class</b> &gt;</li>
<li>Add <b>THREADABLE</b> before <b>public</b> </li>
</ul>
<p>On use,<br />
</p><ul>
<li>In a member function that will not be called by update(), put on the first line of it : THREADABLE_LOCK </li>
</ul>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a id="a04bdb4a894312f6671680c2f103b8a63"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a04bdb4a894312f6671680c2f103b8a63">&#9670;&nbsp;</a></span>Threadable() <span class="overload">[1/2]</span></h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;class C&gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="../../df/d89/a01032.php">mcd::Threadable</a>&lt; C &gt;::<a class="el" href="../../df/d89/a01032.php">Threadable</a> </td>
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

<p>The constructor of the <a class="el" href="../../df/d89/a01032.php" title="A class to let another one to be threadable with update() member in a thread. ">Threadable</a> class. </p>

</div>
</div>
<a id="a29db3ebe9dfbf77bc04967565c0dcf6e"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a29db3ebe9dfbf77bc04967565c0dcf6e">&#9670;&nbsp;</a></span>Threadable() <span class="overload">[2/2]</span></h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;class C&gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="../../df/d89/a01032.php">mcd::Threadable</a>&lt; C &gt;::<a class="el" href="../../df/d89/a01032.php">Threadable</a> </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="../../df/d89/a01032.php">Threadable</a>&lt; C &gt; &amp;&#160;</td>
          <td class="paramname"><em>other</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>The copy constructor of the <a class="el" href="../../df/d89/a01032.php" title="A class to let another one to be threadable with update() member in a thread. ">Threadable</a> class. </p>

</div>
</div>
<a id="aab98cd8e5cd8832dfd6e82c17d1a689d"></a>
<h2 class="memtitle"><span class="permalink"><a href="#aab98cd8e5cd8832dfd6e82c17d1a689d">&#9670;&nbsp;</a></span>~Threadable()</h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;class C&gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual <a class="el" href="../../df/d89/a01032.php">mcd::Threadable</a>&lt; C &gt;::~<a class="el" href="../../df/d89/a01032.php">Threadable</a> </td>
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

<p>The destructor of the <a class="el" href="../../df/d89/a01032.php" title="A class to let another one to be threadable with update() member in a thread. ">Threadable</a> class. </p>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a id="a804393d97a319c38afa593072bd0ead9"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a804393d97a319c38afa593072bd0ead9">&#9670;&nbsp;</a></span>hasToStop()</h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;class C&gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">bool <a class="el" href="../../df/d89/a01032.php">mcd::Threadable</a>&lt; C &gt;::hasToStop </td>
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

<p>Return if the thread has to stop or not. </p>
<dl class="section return"><dt>Returns</dt><dd><b>true</b> or <b>false</b> </dd></dl>

</div>
</div>
<a id="af6a411164d64b1b04b731f29d54e016a"></a>
<h2 class="memtitle"><span class="permalink"><a href="#af6a411164d64b1b04b731f29d54e016a">&#9670;&nbsp;</a></span>inUse()</h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;class C&gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">void <a class="el" href="../../df/d89/a01032.php">mcd::Threadable</a>&lt; C &gt;::inUse </td>
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

<p>Set that the thread is actually used. </p>

</div>
</div>
<a id="a1eb0985252b04c90761f92432ef4216d"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a1eb0985252b04c90761f92432ef4216d">&#9670;&nbsp;</a></span>launch()</h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;class C&gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual void <a class="el" href="../../df/d89/a01032.php">mcd::Threadable</a>&lt; C &gt;::launch </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">pure virtual</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Start the thread. </p>

</div>
</div>
<a id="a156911948e5f5d2d5eeb0922ee3bd86d"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a156911948e5f5d2d5eeb0922ee3bd86d">&#9670;&nbsp;</a></span>launched()</h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;class C&gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">bool <a class="el" href="../../df/d89/a01032.php">mcd::Threadable</a>&lt; C &gt;::launched </td>
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

<p>Return if the thread has been launched or not. </p>
<dl class="section return"><dt>Returns</dt><dd><b>true</b> or <b>false</b> </dd></dl>

</div>
</div>
<a id="a0b2419ec1119f28dc2440e202f0d2c8e"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a0b2419ec1119f28dc2440e202f0d2c8e">&#9670;&nbsp;</a></span>notInUse()</h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;class C&gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">void <a class="el" href="../../df/d89/a01032.php">mcd::Threadable</a>&lt; C &gt;::notInUse </td>
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

<p>Set that the thread is not used. </p>

</div>
</div>
<a id="a4dd37d54456e167f8b42d30be7076939"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a4dd37d54456e167f8b42d30be7076939">&#9670;&nbsp;</a></span>stop()</h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;class C&gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">void <a class="el" href="../../df/d89/a01032.php">mcd::Threadable</a>&lt; C &gt;::stop </td>
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

<p>Stop the thread and delete the pointer correctly. </p>

</div>
</div>
<h2 class="groupheader">Member Data Documentation</h2>
<a id="a0d2496ea879c9a8933fe714ffce9639a"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a0d2496ea879c9a8933fe714ffce9639a">&#9670;&nbsp;</a></span>_mutex</h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;class C&gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">std::mutex <a class="el" href="../../df/d89/a01032.php">mcd::Threadable</a>&lt; C &gt;::_mutex</td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">protected</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>The mutex variable to use in the threadable class. </p>

</div>
</div>
<a id="a0351657024f3b0d37b54c08a09a156fa"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a0351657024f3b0d37b54c08a09a156fa">&#9670;&nbsp;</a></span>sleeper</h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;class C&gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">long int <a class="el" href="../../df/d89/a01032.php">mcd::Threadable</a>&lt; C &gt;::sleeper</td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">protected</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>The time that the threadable class has to sleep after each update. </p>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="../../d7/d25/a00182.php">Threadable.hpp</a></li>
</ul>
</div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../dd/ded/a00211.php">mcd</a></li><li class="navelem"><a class="el" href="../../df/d89/a01032.php">Threadable</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
