<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.20"/>
		<title>C++: mcd::Logger Class Reference</title>
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
				$text = "Generated on Sun Nov 15 2020 19:05:49 for C++ by";
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
$(document).ready(function(){initNavTree('d9/d5c/a01321.php','../../'); initResizable(); });
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
<a href="../../d6/dfa/a01318.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">mcd::Logger Class Reference</div>  </div>
</div><!--header-->
<div class="contents">

<p>A class to log some messages.  
 <a href="../../d9/d5c/a01321.php#details">More...</a></p>

<p><code>#include &lt;Logger.hpp&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-types"></a>
Public Types</h2></td></tr>
<tr class="memitem:a25d94050e8e7f91c7e1f02ddc2af8e95"><td class="memItemLeft" align="right" valign="top">enum &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d9/d5c/a01321.php#a25d94050e8e7f91c7e1f02ddc2af8e95">Level</a> { <br />
&#160;&#160;<a class="el" href="../../d9/d5c/a01321.php#a25d94050e8e7f91c7e1f02ddc2af8e95ad58a475f585716dda86e2e0af0570cec">All</a> = 0, 
<a class="el" href="../../d9/d5c/a01321.php#a25d94050e8e7f91c7e1f02ddc2af8e95a8a3e3b4dccd41544fac18f0f339ba68e">Debug</a>, 
<a class="el" href="../../d9/d5c/a01321.php#a25d94050e8e7f91c7e1f02ddc2af8e95ae7888eab8f157c2bc53e24557f2a8458">Info</a>, 
<a class="el" href="../../d9/d5c/a01321.php#a25d94050e8e7f91c7e1f02ddc2af8e95a97b60120ff602c7d5050124927962f79">Warn</a>, 
<br />
&#160;&#160;<a class="el" href="../../d9/d5c/a01321.php#a25d94050e8e7f91c7e1f02ddc2af8e95a98b026269a3081d4a4801bc7418e1d47">Error</a>, 
<a class="el" href="../../d9/d5c/a01321.php#a25d94050e8e7f91c7e1f02ddc2af8e95a3b0278ed2e63ab59b05883c3943c73cf">Fatal</a>, 
<a class="el" href="../../d9/d5c/a01321.php#a25d94050e8e7f91c7e1f02ddc2af8e95a0bab71bd19d6bf8a3e85aaf73e41814a">Off</a>
<br />
 }</td></tr>
<tr class="separator:a25d94050e8e7f91c7e1f02ddc2af8e95"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:a189cdd6486b23632d014a2e795ed8e13"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d9/d5c/a01321.php#a189cdd6486b23632d014a2e795ed8e13">Logger</a> ()</td></tr>
<tr class="memdesc:a189cdd6486b23632d014a2e795ed8e13"><td class="mdescLeft">&#160;</td><td class="mdescRight">The constructor of the class.  <a href="../../d9/d5c/a01321.php#a189cdd6486b23632d014a2e795ed8e13">More...</a><br /></td></tr>
<tr class="separator:a189cdd6486b23632d014a2e795ed8e13"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a9b43e0ba2ab53c8a6758b20d3f828f96"><td class="memItemLeft" align="right" valign="top">virtual&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d9/d5c/a01321.php#a9b43e0ba2ab53c8a6758b20d3f828f96">~Logger</a> ()</td></tr>
<tr class="memdesc:a9b43e0ba2ab53c8a6758b20d3f828f96"><td class="mdescLeft">&#160;</td><td class="mdescRight">The destructor of the class.  <a href="../../d9/d5c/a01321.php#a9b43e0ba2ab53c8a6758b20d3f828f96">More...</a><br /></td></tr>
<tr class="separator:a9b43e0ba2ab53c8a6758b20d3f828f96"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ab549f25e73c47afaff922b59cda6ccc4"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d9/d5c/a01321.php#ab549f25e73c47afaff922b59cda6ccc4">init</a> (const std::string &amp;logConfigFile)</td></tr>
<tr class="memdesc:ab549f25e73c47afaff922b59cda6ccc4"><td class="mdescLeft">&#160;</td><td class="mdescRight">Initialize the logger with the logger config file location.  <a href="../../d9/d5c/a01321.php#ab549f25e73c47afaff922b59cda6ccc4">More...</a><br /></td></tr>
<tr class="separator:ab549f25e73c47afaff922b59cda6ccc4"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a9351097884f74c914c92bd982e70d159"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d9/d5c/a01321.php#a9351097884f74c914c92bd982e70d159">reset</a> (std::string file, int line)</td></tr>
<tr class="memdesc:a9351097884f74c914c92bd982e70d159"><td class="mdescLeft">&#160;</td><td class="mdescRight">Reset the logger.  <a href="../../d9/d5c/a01321.php#a9351097884f74c914c92bd982e70d159">More...</a><br /></td></tr>
<tr class="separator:a9351097884f74c914c92bd982e70d159"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ad8527d935f1fa6c697d792a8f72276e4"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d9/d5c/a01321.php#ad8527d935f1fa6c697d792a8f72276e4">isInit</a> () const</td></tr>
<tr class="memdesc:ad8527d935f1fa6c697d792a8f72276e4"><td class="mdescLeft">&#160;</td><td class="mdescRight">Know if the logger is initialized.  <a href="../../d9/d5c/a01321.php#ad8527d935f1fa6c697d792a8f72276e4">More...</a><br /></td></tr>
<tr class="separator:ad8527d935f1fa6c697d792a8f72276e4"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a365030ec32e6af40c6c53a53ff5163f4"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d9/d5c/a01321.php#a365030ec32e6af40c6c53a53ff5163f4">isEnabled</a> (<a class="el" href="../../d9/d5c/a01321.php#a25d94050e8e7f91c7e1f02ddc2af8e95">Level</a> level)</td></tr>
<tr class="memdesc:a365030ec32e6af40c6c53a53ff5163f4"><td class="mdescLeft">&#160;</td><td class="mdescRight">Know if a log Level is enabled or not.  <a href="../../d9/d5c/a01321.php#a365030ec32e6af40c6c53a53ff5163f4">More...</a><br /></td></tr>
<tr class="separator:a365030ec32e6af40c6c53a53ff5163f4"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a2cb99172e98a89e45fdcb9b394eea99e"><td class="memTemplParams" colspan="2">template&lt;class... Args&gt; </td></tr>
<tr class="memitem:a2cb99172e98a89e45fdcb9b394eea99e"><td class="memTemplItemLeft" align="right" valign="top">void&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d9/d5c/a01321.php#a2cb99172e98a89e45fdcb9b394eea99e">log</a> (<a class="el" href="../../d9/d5c/a01321.php#a25d94050e8e7f91c7e1f02ddc2af8e95">Level</a> level, int line, const std::string &amp;file, Args... args)</td></tr>
<tr class="memdesc:a2cb99172e98a89e45fdcb9b394eea99e"><td class="mdescLeft">&#160;</td><td class="mdescRight">Method to cll to log something.  <a href="../../d9/d5c/a01321.php#a2cb99172e98a89e45fdcb9b394eea99e">More...</a><br /></td></tr>
<tr class="separator:a2cb99172e98a89e45fdcb9b394eea99e"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>A class to log some messages. </p>
</div><h2 class="groupheader">Member Enumeration Documentation</h2>
<a id="a25d94050e8e7f91c7e1f02ddc2af8e95"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a25d94050e8e7f91c7e1f02ddc2af8e95">&#9670;&nbsp;</a></span>Level</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">enum <a class="el" href="../../d9/d5c/a01321.php#a25d94050e8e7f91c7e1f02ddc2af8e95">mcd::Logger::Level</a></td>
        </tr>
      </table>
</div><div class="memdoc">
<table class="fieldtable">
<tr><th colspan="2">Enumerator</th></tr><tr><td class="fieldname"><a id="a25d94050e8e7f91c7e1f02ddc2af8e95ad58a475f585716dda86e2e0af0570cec"></a>All&#160;</td><td class="fielddoc"></td></tr>
<tr><td class="fieldname"><a id="a25d94050e8e7f91c7e1f02ddc2af8e95a8a3e3b4dccd41544fac18f0f339ba68e"></a>Debug&#160;</td><td class="fielddoc"></td></tr>
<tr><td class="fieldname"><a id="a25d94050e8e7f91c7e1f02ddc2af8e95ae7888eab8f157c2bc53e24557f2a8458"></a>Info&#160;</td><td class="fielddoc"></td></tr>
<tr><td class="fieldname"><a id="a25d94050e8e7f91c7e1f02ddc2af8e95a97b60120ff602c7d5050124927962f79"></a>Warn&#160;</td><td class="fielddoc"></td></tr>
<tr><td class="fieldname"><a id="a25d94050e8e7f91c7e1f02ddc2af8e95a98b026269a3081d4a4801bc7418e1d47"></a>Error&#160;</td><td class="fielddoc"></td></tr>
<tr><td class="fieldname"><a id="a25d94050e8e7f91c7e1f02ddc2af8e95a3b0278ed2e63ab59b05883c3943c73cf"></a>Fatal&#160;</td><td class="fielddoc"></td></tr>
<tr><td class="fieldname"><a id="a25d94050e8e7f91c7e1f02ddc2af8e95a0bab71bd19d6bf8a3e85aaf73e41814a"></a>Off&#160;</td><td class="fielddoc"></td></tr>
</table>

</div>
</div>
<h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a id="a189cdd6486b23632d014a2e795ed8e13"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a189cdd6486b23632d014a2e795ed8e13">&#9670;&nbsp;</a></span>Logger()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">mcd::Logger::Logger </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>The constructor of the class. </p>

</div>
</div>
<a id="a9b43e0ba2ab53c8a6758b20d3f828f96"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a9b43e0ba2ab53c8a6758b20d3f828f96">&#9670;&nbsp;</a></span>~Logger()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual mcd::Logger::~Logger </td>
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

<p>The destructor of the class. </p>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a id="ab549f25e73c47afaff922b59cda6ccc4"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ab549f25e73c47afaff922b59cda6ccc4">&#9670;&nbsp;</a></span>init()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void mcd::Logger::init </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>logConfigFile</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Initialize the logger with the logger config file location. </p>
<p>If the file does not exists, a default file is created. </p><dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">logConfigFile</td><td>The logger config file location </td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>void </dd></dl>

</div>
</div>
<a id="a365030ec32e6af40c6c53a53ff5163f4"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a365030ec32e6af40c6c53a53ff5163f4">&#9670;&nbsp;</a></span>isEnabled()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">bool mcd::Logger::isEnabled </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="../../d9/d5c/a01321.php#a25d94050e8e7f91c7e1f02ddc2af8e95">Level</a>&#160;</td>
          <td class="paramname"><em>level</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Know if a log Level is enabled or not. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">level</td><td>The log Level to test </td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Boolean </dd></dl>

</div>
</div>
<a id="ad8527d935f1fa6c697d792a8f72276e4"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ad8527d935f1fa6c697d792a8f72276e4">&#9670;&nbsp;</a></span>isInit()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">bool mcd::Logger::isInit </td>
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

<p>Know if the logger is initialized. </p>
<dl class="section return"><dt>Returns</dt><dd>Boolean </dd></dl>

</div>
</div>
<a id="a2cb99172e98a89e45fdcb9b394eea99e"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a2cb99172e98a89e45fdcb9b394eea99e">&#9670;&nbsp;</a></span>log()</h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;class... Args&gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">void mcd::Logger::log </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="../../d9/d5c/a01321.php#a25d94050e8e7f91c7e1f02ddc2af8e95">Level</a>&#160;</td>
          <td class="paramname"><em>level</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int&#160;</td>
          <td class="paramname"><em>line</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>file</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">Args...&#160;</td>
          <td class="paramname"><em>args</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Method to cll to log something. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">level</td><td>The Level of the log message </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">line</td><td>The line where the log message came from </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">file</td><td>The file where the log message came from </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">args</td><td>The different parts of the message </td></tr>
  </table>
  </dd>
</dl>
<dl class="exception"><dt>Exceptions</dt><dd>
  <table class="exception">
    <tr><td class="paramname">std::logic_error</td><td>Throws if the logger is not initiated </td></tr>
    <tr><td class="paramname">std::ios_base::failure</td><td>Throws if it's impossible to open the file </td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>void </dd></dl>
<div class="dynheader">
Here is the call graph for this function:</div>
<div class="dyncontent">
<div class="center"><img src="../../d9/d5c/a01321_a2cb99172e98a89e45fdcb9b394eea99e_cgraph.png" border="0" usemap="#ad9/d5c/a01321_a2cb99172e98a89e45fdcb9b394eea99e_cgraph" alt=""/></div>
<map name="d9/d5c/a01321_a2cb99172e98a89e45fdcb9b394eea99e_cgraph" id="d9/d5c/a01321_a2cb99172e98a89e45fdcb9b394eea99e_cgraph">
<area shape="rect" title="Method to cll to log something." alt="" coords="5,31,124,57"/>
<area shape="rect" href="../../d2/d1d/a01277.php#a7b25df777f0b2b3ac2396538eb3ca028" title=" " alt="" coords="182,5,321,32"/>
<area shape="rect" href="../../d9/d5c/a01321.php#a365030ec32e6af40c6c53a53ff5163f4" title="Know if a log Level is enabled or not." alt="" coords="172,56,331,83"/>
</map>
</div>

</div>
</div>
<a id="a9351097884f74c914c92bd982e70d159"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a9351097884f74c914c92bd982e70d159">&#9670;&nbsp;</a></span>reset()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void mcd::Logger::reset </td>
          <td>(</td>
          <td class="paramtype">std::string&#160;</td>
          <td class="paramname"><em>file</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int&#160;</td>
          <td class="paramname"><em>line</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Reset the logger. </p>
<p>Reset the logger without any file. </p><dl class="section return"><dt>Returns</dt><dd>void </dd></dl>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="../../d1/d88/a00128.php">Logger.hpp</a></li>
</ul>
</div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../db/d12/a00268.php">mcd</a></li><li class="navelem"><a class="el" href="../../d9/d5c/a01321.php">Logger</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
