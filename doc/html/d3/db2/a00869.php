<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.13"/>
		<title>C++: mcd::ConsoleTable Class Reference</title>
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
				$text = "Generated on Fri Sep 6 2019 18:14:51 for C++ by";
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
$(document).ready(function(){initNavTree('d3/db2/a00869.php','../../');});
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
<a href="#friends">Friends</a> &#124;
<a href="../../dd/db2/a00866.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">mcd::ConsoleTable Class Reference</div>  </div>
</div><!--header-->
<div class="contents">

<p>A class to print a table in the console.  
 <a href="../../d3/db2/a00869.php#details">More...</a></p>

<p><code>#include &lt;ConsoleTable.hpp&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:acc7af9ad8f4b7175a82acb2edfce15b2"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d3/db2/a00869.php#acc7af9ad8f4b7175a82acb2edfce15b2">ConsoleTable</a> ()</td></tr>
<tr class="separator:acc7af9ad8f4b7175a82acb2edfce15b2"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a1878d602fe475fb47a2aca063e7cb9d6"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d3/db2/a00869.php#a1878d602fe475fb47a2aca063e7cb9d6">headers</a> (std::vector&lt; std::string &gt; h)</td></tr>
<tr class="separator:a1878d602fe475fb47a2aca063e7cb9d6"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aefb00d9e2e5755c7e2fd60cba225f504"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d3/db2/a00869.php#aefb00d9e2e5755c7e2fd60cba225f504">lines</a> (std::vector&lt; std::vector&lt; std::string &gt;&gt; ls)</td></tr>
<tr class="separator:aefb00d9e2e5755c7e2fd60cba225f504"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a3669c41beda1b667738b6e7c42663b29"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d3/db2/a00869.php#a3669c41beda1b667738b6e7c42663b29">line</a> (std::vector&lt; std::string &gt; l)</td></tr>
<tr class="separator:a3669c41beda1b667738b6e7c42663b29"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="friends"></a>
Friends</h2></td></tr>
<tr class="memitem:af23c547bfa2b35d582a6922d425d02f5"><td class="memItemLeft" align="right" valign="top">std::ostream &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d3/db2/a00869.php#af23c547bfa2b35d582a6922d425d02f5">operator&lt;&lt;</a> (std::ostream &amp;str, <a class="el" href="../../d3/db2/a00869.php">ConsoleTable</a> &amp;t)</td></tr>
<tr class="separator:af23c547bfa2b35d582a6922d425d02f5"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>A class to print a table in the console. </p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a id="acc7af9ad8f4b7175a82acb2edfce15b2"></a>
<h2 class="memtitle"><span class="permalink"><a href="#acc7af9ad8f4b7175a82acb2edfce15b2">&#9670;&nbsp;</a></span>ConsoleTable()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">mcd::ConsoleTable::ConsoleTable </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a id="a1878d602fe475fb47a2aca063e7cb9d6"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a1878d602fe475fb47a2aca063e7cb9d6">&#9670;&nbsp;</a></span>headers()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void mcd::ConsoleTable::headers </td>
          <td>(</td>
          <td class="paramtype">std::vector&lt; std::string &gt;&#160;</td>
          <td class="paramname"><em>h</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a id="a3669c41beda1b667738b6e7c42663b29"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a3669c41beda1b667738b6e7c42663b29">&#9670;&nbsp;</a></span>line()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void mcd::ConsoleTable::line </td>
          <td>(</td>
          <td class="paramtype">std::vector&lt; std::string &gt;&#160;</td>
          <td class="paramname"><em>l</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a id="aefb00d9e2e5755c7e2fd60cba225f504"></a>
<h2 class="memtitle"><span class="permalink"><a href="#aefb00d9e2e5755c7e2fd60cba225f504">&#9670;&nbsp;</a></span>lines()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">void mcd::ConsoleTable::lines </td>
          <td>(</td>
          <td class="paramtype">std::vector&lt; std::vector&lt; std::string &gt;&gt;&#160;</td>
          <td class="paramname"><em>ls</em></td><td>)</td>
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
<div class="center"><img src="../../d3/db2/a00869_aefb00d9e2e5755c7e2fd60cba225f504_cgraph.png" border="0" usemap="#d3/db2/a00869_aefb00d9e2e5755c7e2fd60cba225f504_cgraph" alt=""/></div>
<map name="d3/db2/a00869_aefb00d9e2e5755c7e2fd60cba225f504_cgraph" id="d3/db2/a00869_aefb00d9e2e5755c7e2fd60cba225f504_cgraph">
<area shape="rect" id="node2" href="../../d3/db2/a00869.php#a3669c41beda1b667738b6e7c42663b29" title="mcd::ConsoleTable::line" alt="" coords="196,13,359,39"/>
</map>
</div>

</div>
</div>
<h2 class="groupheader">Friends And Related Function Documentation</h2>
<a id="af23c547bfa2b35d582a6922d425d02f5"></a>
<h2 class="memtitle"><span class="permalink"><a href="#af23c547bfa2b35d582a6922d425d02f5">&#9670;&nbsp;</a></span>operator<<</h2>

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
          <td class="paramname"><em>str</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="../../d3/db2/a00869.php">ConsoleTable</a> &amp;&#160;</td>
          <td class="paramname"><em>t</em>&#160;</td>
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
<li><a class="el" href="../../dc/dee/a00053.php">ConsoleTable.hpp</a></li>
</ul>
</div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../d7/ded/a00196.php">mcd</a></li><li class="navelem"><a class="el" href="../../d3/db2/a00869.php">ConsoleTable</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
