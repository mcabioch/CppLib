<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.13"/>
		<title>C++: mcd::Test Class Reference</title>
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
				$text = "Generated on Fri Dec 13 2019 22:15:49 for C++ by";
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
$(document).ready(function(){initNavTree('d6/dea/a01094.php','../../');});
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
<a href="#pub-static-methods">Static Public Member Functions</a> &#124;
<a href="../../d6/d0d/a01091.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">mcd::Test Class Reference</div>  </div>
</div><!--header-->
<div class="contents">

<p>A static class to test code.  
 <a href="../../d6/dea/a01094.php#details">More...</a></p>

<p><code>#include &lt;Test.hpp&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-static-methods"></a>
Static Public Member Functions</h2></td></tr>
<tr class="memitem:a58c6bc9145b1fbe2a22178c720661317"><td class="memItemLeft" align="right" valign="top">static size_t&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d6/dea/a01094.php#a58c6bc9145b1fbe2a22178c720661317">nb</a> ()</td></tr>
<tr class="memdesc:a58c6bc9145b1fbe2a22178c720661317"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the number of tests executed after a call to run  Abort the program if it's call before run.  <a href="#a58c6bc9145b1fbe2a22178c720661317">More...</a><br /></td></tr>
<tr class="separator:a58c6bc9145b1fbe2a22178c720661317"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a290862a332ef3120dafc5debf9f55b91"><td class="memItemLeft" align="right" valign="top">static size_t&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d6/dea/a01094.php#a290862a332ef3120dafc5debf9f55b91">success</a> ()</td></tr>
<tr class="memdesc:a290862a332ef3120dafc5debf9f55b91"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the number of success after a call to run  Abort the program if it's call before run.  <a href="#a290862a332ef3120dafc5debf9f55b91">More...</a><br /></td></tr>
<tr class="separator:a290862a332ef3120dafc5debf9f55b91"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a507900718727225ac3c0653480b2c48c"><td class="memItemLeft" align="right" valign="top">static size_t&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d6/dea/a01094.php#a507900718727225ac3c0653480b2c48c">failures</a> ()</td></tr>
<tr class="memdesc:a507900718727225ac3c0653480b2c48c"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the number of fails after a call to run  Abort the program if it's call before run.  <a href="#a507900718727225ac3c0653480b2c48c">More...</a><br /></td></tr>
<tr class="separator:a507900718727225ac3c0653480b2c48c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a39a0672f4d385729466b606f8e83365e"><td class="memItemLeft" align="right" valign="top">static void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d6/dea/a01094.php#a39a0672f4d385729466b606f8e83365e">addSuite</a> (const std::string &amp;name, std::function&lt; void()&gt; func)</td></tr>
<tr class="memdesc:a39a0672f4d385729466b606f8e83365e"><td class="mdescLeft">&#160;</td><td class="mdescRight">Add a function (without arguments and returning void) that contains a group of tests, could be a lambda.  <a href="#a39a0672f4d385729466b606f8e83365e">More...</a><br /></td></tr>
<tr class="separator:a39a0672f4d385729466b606f8e83365e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ad9b4d5f1877fd888ee1d6812d487fb5b"><td class="memItemLeft" align="right" valign="top">static void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d6/dea/a01094.php#ad9b4d5f1877fd888ee1d6812d487fb5b">run</a> (const std::string &amp;key=&quot;&quot;)</td></tr>
<tr class="memdesc:ad9b4d5f1877fd888ee1d6812d487fb5b"><td class="mdescLeft">&#160;</td><td class="mdescRight">Run all or a group of tests.  <a href="#ad9b4d5f1877fd888ee1d6812d487fb5b">More...</a><br /></td></tr>
<tr class="separator:ad9b4d5f1877fd888ee1d6812d487fb5b"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:afa2e1c8e4225517a259eb6e9e96bf480"><td class="memItemLeft" align="right" valign="top">static void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d6/dea/a01094.php#afa2e1c8e4225517a259eb6e9e96bf480">addTest</a> (const Test_struct &amp;test)</td></tr>
<tr class="memdesc:afa2e1c8e4225517a259eb6e9e96bf480"><td class="mdescLeft">&#160;</td><td class="mdescRight">Add a test analyze to an array.  <a href="#afa2e1c8e4225517a259eb6e9e96bf480">More...</a><br /></td></tr>
<tr class="separator:afa2e1c8e4225517a259eb6e9e96bf480"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a24b9749eacbe2b03325b920e7622f39d"><td class="memItemLeft" align="right" valign="top">static void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d6/dea/a01094.php#a24b9749eacbe2b03325b920e7622f39d">addThrow</a> (const std::string &amp;instr, const std::string &amp;except, const Test_struct &amp;test)</td></tr>
<tr class="memdesc:a24b9749eacbe2b03325b920e7622f39d"><td class="mdescLeft">&#160;</td><td class="mdescRight">Add a throw test with addTest.  <a href="#a24b9749eacbe2b03325b920e7622f39d">More...</a><br /></td></tr>
<tr class="separator:a24b9749eacbe2b03325b920e7622f39d"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a0039d201bb954bcf7abd3882a72a4aba"><td class="memTemplParams" colspan="2">template&lt;class T , class U &gt; </td></tr>
<tr class="memitem:a0039d201bb954bcf7abd3882a72a4aba"><td class="memTemplItemLeft" align="right" valign="top">static void&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d6/dea/a01094.php#a0039d201bb954bcf7abd3882a72a4aba">in</a> (const T &amp;value, const U &amp;array, const Test_struct &amp;test, bool start=false)</td></tr>
<tr class="memdesc:a0039d201bb954bcf7abd3882a72a4aba"><td class="mdescLeft">&#160;</td><td class="mdescRight"><a class="el" href="../../d6/dea/a01094.php" title="A static class to test code. ">Test</a> if a value is or isn't in an array.  <a href="#a0039d201bb954bcf7abd3882a72a4aba">More...</a><br /></td></tr>
<tr class="separator:a0039d201bb954bcf7abd3882a72a4aba"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a004909fc39f24bd39f2466083d105ffe"><td class="memTemplParams" colspan="2">template&lt;class T , class U &gt; </td></tr>
<tr class="memitem:a004909fc39f24bd39f2466083d105ffe"><td class="memTemplItemLeft" align="right" valign="top">static void&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d6/dea/a01094.php#a004909fc39f24bd39f2466083d105ffe">instance</a> (const U &amp;, const std::string &amp;strObj, const Test_struct &amp;test, bool cmp=true)</td></tr>
<tr class="memdesc:a004909fc39f24bd39f2466083d105ffe"><td class="mdescLeft">&#160;</td><td class="mdescRight"><a class="el" href="../../d6/dea/a01094.php" title="A static class to test code. ">Test</a> if class U is an instance of T or is a child instance of T.  <a href="#a004909fc39f24bd39f2466083d105ffe">More...</a><br /></td></tr>
<tr class="separator:a004909fc39f24bd39f2466083d105ffe"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a340ac80d0474d71a18df38abbc25c10f"><td class="memItemLeft" align="right" valign="top">static void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d6/dea/a01094.php#a340ac80d0474d71a18df38abbc25c10f">print</a> (std::ostream &amp;os, size_t format=0b00000010|0b00000100|0b00001000)</td></tr>
<tr class="memdesc:a340ac80d0474d71a18df38abbc25c10f"><td class="mdescLeft">&#160;</td><td class="mdescRight">Print the results of the tests.  <a href="#a340ac80d0474d71a18df38abbc25c10f">More...</a><br /></td></tr>
<tr class="separator:a340ac80d0474d71a18df38abbc25c10f"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>A static class to test code. </p>
</div><h2 class="groupheader">Member Function Documentation</h2>
<a id="a39a0672f4d385729466b606f8e83365e"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a39a0672f4d385729466b606f8e83365e">&#9670;&nbsp;</a></span>addSuite()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static void mcd::Test::addSuite </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>name</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">std::function&lt; void()&gt;&#160;</td>
          <td class="paramname"><em>func</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Add a function (without arguments and returning void) that contains a group of tests, could be a lambda. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">name</td><td>A name to group the tests and to call in run </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">func</td><td>The function containing the group of tests </td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>void </dd></dl>

</div>
</div>
<a id="afa2e1c8e4225517a259eb6e9e96bf480"></a>
<h2 class="memtitle"><span class="permalink"><a href="#afa2e1c8e4225517a259eb6e9e96bf480">&#9670;&nbsp;</a></span>addTest()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static void mcd::Test::addTest </td>
          <td>(</td>
          <td class="paramtype">const Test_struct &amp;&#160;</td>
          <td class="paramname"><em>test</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Add a test analyze to an array. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">test</td><td>The test to add </td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>void </dd></dl>

</div>
</div>
<a id="a24b9749eacbe2b03325b920e7622f39d"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a24b9749eacbe2b03325b920e7622f39d">&#9670;&nbsp;</a></span>addThrow()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static void mcd::Test::addThrow </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>instr</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>except</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const Test_struct &amp;&#160;</td>
          <td class="paramname"><em>test</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Add a throw test with addTest. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">instr</td><td>The tested code </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">except</td><td>The expected exception </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">test</td><td>The test's analyze </td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>void </dd></dl>

</div>
</div>
<a id="a507900718727225ac3c0653480b2c48c"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a507900718727225ac3c0653480b2c48c">&#9670;&nbsp;</a></span>failures()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static size_t mcd::Test::failures </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Return the number of fails after a call to run  Abort the program if it's call before run. </p>
<dl class="section return"><dt>Returns</dt><dd>size_t </dd></dl>

</div>
</div>
<a id="a0039d201bb954bcf7abd3882a72a4aba"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a0039d201bb954bcf7abd3882a72a4aba">&#9670;&nbsp;</a></span>in()</h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;class T , class U &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static void mcd::Test::in </td>
          <td>(</td>
          <td class="paramtype">const T &amp;&#160;</td>
          <td class="paramname"><em>value</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const U &amp;&#160;</td>
          <td class="paramname"><em>array</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const Test_struct &amp;&#160;</td>
          <td class="paramname"><em>test</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">bool&#160;</td>
          <td class="paramname"><em>start</em> = <code>false</code>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p><a class="el" href="../../d6/dea/a01094.php" title="A static class to test code. ">Test</a> if a value is or isn't in an array. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">value</td><td>The value to find </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">array</td><td>The array where to search </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">test</td><td>Some test analyze datas </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">start</td><td>Set if in test the presence or absence of value </td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>void </dd></dl>
<div class="dynheader">
Here is the call graph for this function:</div>
<div class="dyncontent">
<div class="center"><img src="../../d6/dea/a01094_a0039d201bb954bcf7abd3882a72a4aba_cgraph.png" border="0" usemap="#d6/dea/a01094_a0039d201bb954bcf7abd3882a72a4aba_cgraph" alt=""/></div>
<map name="d6/dea/a01094_a0039d201bb954bcf7abd3882a72a4aba_cgraph" id="d6/dea/a01094_a0039d201bb954bcf7abd3882a72a4aba_cgraph">
<area shape="rect" id="node2" href="../../d6/d08/a00244.php#ae057a7c5042a3cacb444199a2b6b7598" title="Convert in in a string. " alt="" coords="152,5,225,32"/>
</map>
</div>

</div>
</div>
<a id="a004909fc39f24bd39f2466083d105ffe"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a004909fc39f24bd39f2466083d105ffe">&#9670;&nbsp;</a></span>instance()</h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;class T , class U &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static void mcd::Test::instance </td>
          <td>(</td>
          <td class="paramtype">const U &amp;&#160;</td>
          <td class="paramname">, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>strObj</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const Test_struct &amp;&#160;</td>
          <td class="paramname"><em>test</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">bool&#160;</td>
          <td class="paramname"><em>cmp</em> = <code>true</code>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p><a class="el" href="../../d6/dea/a01094.php" title="A static class to test code. ">Test</a> if class U is an instance of T or is a child instance of T. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">obj</td><td>The object of class U </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">strObj</td><td>The string with obj name </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">test</td><td>Some test analyze datas </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">cmp</td><td>Set if instance is normal or inverted, <b>true</b> is normal </td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>void </dd></dl>

</div>
</div>
<a id="a58c6bc9145b1fbe2a22178c720661317"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a58c6bc9145b1fbe2a22178c720661317">&#9670;&nbsp;</a></span>nb()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static size_t mcd::Test::nb </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Return the number of tests executed after a call to run  Abort the program if it's call before run. </p>
<dl class="section return"><dt>Returns</dt><dd>size_t </dd></dl>

</div>
</div>
<a id="a340ac80d0474d71a18df38abbc25c10f"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a340ac80d0474d71a18df38abbc25c10f">&#9670;&nbsp;</a></span>print()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static void mcd::Test::print </td>
          <td>(</td>
          <td class="paramtype">std::ostream &amp;&#160;</td>
          <td class="paramname"><em>os</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">size_t&#160;</td>
          <td class="paramname"><em>format</em> = <code>0b00000010|0b00000100|0b00001000</code>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Print the results of the tests. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in,out]</td><td class="paramname">os</td><td>The stream where to write </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">format</td><td>The format of the analyze, default is TEST_FORMAT_ALL </td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>void </dd></dl>

</div>
</div>
<a id="ad9b4d5f1877fd888ee1d6812d487fb5b"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ad9b4d5f1877fd888ee1d6812d487fb5b">&#9670;&nbsp;</a></span>run()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static void mcd::Test::run </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>key</em> = <code>&quot;&quot;</code></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Run all or a group of tests. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">key</td><td>The tests group's name, empty for all tests </td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>void </dd></dl>

</div>
</div>
<a id="a290862a332ef3120dafc5debf9f55b91"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a290862a332ef3120dafc5debf9f55b91">&#9670;&nbsp;</a></span>success()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static size_t mcd::Test::success </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Return the number of success after a call to run  Abort the program if it's call before run. </p>
<dl class="section return"><dt>Returns</dt><dd>size_t </dd></dl>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="../../d3/de5/a00209.php">Test.hpp</a></li>
</ul>
</div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../d6/d08/a00244.php">mcd</a></li><li class="navelem"><a class="el" href="../../d6/dea/a01094.php">Test</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
