<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.13"/>
		<title>C++: mcd::Arguments Class Reference</title>
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
				$text = "Generated on Fri Sep 27 2019 01:18:24 for C++ by";
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
$(document).ready(function(){initNavTree('d3/dee/a00774.php','../../');});
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
<a href="../../dd/de5/a00771.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">mcd::Arguments Class Reference</div>  </div>
</div><!--header-->
<div class="contents">

<p>A class to manage the arguments.  
 <a href="../../d3/dee/a00774.php#details">More...</a></p>

<p><code>#include &lt;Args.hpp&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:ac6c3e24abf9d442d2a01b601ad3a0968"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d3/dee/a00774.php#ac6c3e24abf9d442d2a01b601ad3a0968">Arguments</a> ()</td></tr>
<tr class="memdesc:ac6c3e24abf9d442d2a01b601ad3a0968"><td class="mdescLeft">&#160;</td><td class="mdescRight">Constructor of the class.  <a href="#ac6c3e24abf9d442d2a01b601ad3a0968">More...</a><br /></td></tr>
<tr class="separator:ac6c3e24abf9d442d2a01b601ad3a0968"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a9fd4e17aa2d814f460da6128e98b7519"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d3/dee/a00774.php#a9fd4e17aa2d814f460da6128e98b7519">~Arguments</a> ()</td></tr>
<tr class="separator:a9fd4e17aa2d814f460da6128e98b7519"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a1eabf4c8408ded2b8deca24d99fd3234"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d3/dee/a00774.php#a1eabf4c8408ded2b8deca24d99fd3234">addProg</a> (int argc, char **argv)</td></tr>
<tr class="memdesc:a1eabf4c8408ded2b8deca24d99fd3234"><td class="mdescLeft">&#160;</td><td class="mdescRight">Add the arguments of theMay, n to the object.  <a href="#a1eabf4c8408ded2b8deca24d99fd3234">More...</a><br /></td></tr>
<tr class="separator:a1eabf4c8408ded2b8deca24d99fd3234"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a0d178470f50f3a3f12b2dab7aa40f004"><td class="memTemplParams" colspan="2">template&lt;typename T &gt; </td></tr>
<tr class="memitem:a0d178470f50f3a3f12b2dab7aa40f004"><td class="memTemplItemLeft" align="right" valign="top">bool&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../d3/dee/a00774.php#a0d178470f50f3a3f12b2dab7aa40f004">add</a> (const std::string &amp;category, T value)</td></tr>
<tr class="memdesc:a0d178470f50f3a3f12b2dab7aa40f004"><td class="mdescLeft">&#160;</td><td class="mdescRight">Add a value to a part of the array.  <a href="#a0d178470f50f3a3f12b2dab7aa40f004">More...</a><br /></td></tr>
<tr class="separator:a0d178470f50f3a3f12b2dab7aa40f004"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ae401cb47faea064ac04133ea929c0f94"><td class="memItemLeft" align="right" valign="top">std::vector&lt; std::string &gt; &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d3/dee/a00774.php#ae401cb47faea064ac04133ea929c0f94">operator[]</a> (const std::string &amp;index)</td></tr>
<tr class="memdesc:ae401cb47faea064ac04133ea929c0f94"><td class="mdescLeft">&#160;</td><td class="mdescRight">Get the arguments in an index.  <a href="#ae401cb47faea064ac04133ea929c0f94">More...</a><br /></td></tr>
<tr class="separator:ae401cb47faea064ac04133ea929c0f94"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ab25a5cb9e0a7d21921baa90a95cd99b8"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d3/dee/a00774.php#ab25a5cb9e0a7d21921baa90a95cd99b8">print</a> (const std::string &amp;index=&quot;&quot;)</td></tr>
<tr class="memdesc:ab25a5cb9e0a7d21921baa90a95cd99b8"><td class="mdescLeft">&#160;</td><td class="mdescRight">Print all the arguments in the <em>index</em>.  <a href="#ab25a5cb9e0a7d21921baa90a95cd99b8">More...</a><br /></td></tr>
<tr class="separator:ab25a5cb9e0a7d21921baa90a95cd99b8"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>A class to manage the arguments. </p>
<p>This class is usefull to simplify and keep the given arguments </p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a id="ac6c3e24abf9d442d2a01b601ad3a0968"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ac6c3e24abf9d442d2a01b601ad3a0968">&#9670;&nbsp;</a></span>Arguments()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">mcd::Arguments::Arguments </td>
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

<p>Constructor of the class. </p>

</div>
</div>
<a id="a9fd4e17aa2d814f460da6128e98b7519"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a9fd4e17aa2d814f460da6128e98b7519">&#9670;&nbsp;</a></span>~Arguments()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">mcd::Arguments::~Arguments </td>
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
<div class="center"><img src="../../d3/dee/a00774_a9fd4e17aa2d814f460da6128e98b7519_cgraph.png" border="0" usemap="#d3/dee/a00774_a9fd4e17aa2d814f460da6128e98b7519_cgraph" alt=""/></div>
<map name="d3/dee/a00774_a9fd4e17aa2d814f460da6128e98b7519_cgraph" id="d3/dee/a00774_a9fd4e17aa2d814f460da6128e98b7519_cgraph">
<area shape="rect" id="node2" href="../../d3/dee/a00774.php#a1eabf4c8408ded2b8deca24d99fd3234" title="Add the arguments of theMay, n to the object. " alt="" coords="251,5,425,32"/>
</map>
</div>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a id="a0d178470f50f3a3f12b2dab7aa40f004"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a0d178470f50f3a3f12b2dab7aa40f004">&#9670;&nbsp;</a></span>add()</h2>

<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">bool mcd::Arguments::add </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>category</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">T&#160;</td>
          <td class="paramname"><em>value</em>&#160;</td>
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

<p>Add a value to a part of the array. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">category</td><td>The category in which to add the value </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">value</td><td>The value to add</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd><b>true</b> or <b>false</b> </dd></dl>
<div class="dynheader">
Here is the call graph for this function:</div>
<div class="dyncontent">
<div class="center"><img src="../../d3/dee/a00774_a0d178470f50f3a3f12b2dab7aa40f004_cgraph.png" border="0" usemap="#d3/dee/a00774_a0d178470f50f3a3f12b2dab7aa40f004_cgraph" alt=""/></div>
<map name="d3/dee/a00774_a0d178470f50f3a3f12b2dab7aa40f004_cgraph" id="d3/dee/a00774_a0d178470f50f3a3f12b2dab7aa40f004_cgraph">
<area shape="rect" id="node2" href="../../df/d24/a00217.php#a3ac7c03f689e82ab37f28905b06cedbd" title="Verify if a vector contains or not something. " alt="" coords="239,5,343,32"/>
<area shape="rect" id="node4" href="../../df/d24/a00217.php#a4a881e27c7ab22bb256fe6fa915a53f3" title="Convert in in a string. " alt="" coords="254,56,327,83"/>
<area shape="rect" id="node5" href="../../d3/dee/a00774.php#ae401cb47faea064ac04133ea929c0f94" title="Get the arguments in an index. " alt="" coords="200,107,381,133"/>
<area shape="rect" id="node6" href="../../d3/dee/a00774.php#ab25a5cb9e0a7d21921baa90a95cd99b8" title="Print all the arguments in the index. " alt="" coords="215,157,366,184"/>
<area shape="rect" id="node3" href="../../df/d24/a00217.php#a95b30a0f37ef4accc8c762eee75bcc12" title="Prints approximately everything. " alt="" coords="429,5,529,32"/>
</map>
</div>

</div>
</div>
<a id="a1eabf4c8408ded2b8deca24d99fd3234"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a1eabf4c8408ded2b8deca24d99fd3234">&#9670;&nbsp;</a></span>addProg()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">bool mcd::Arguments::addProg </td>
          <td>(</td>
          <td class="paramtype">int&#160;</td>
          <td class="paramname"><em>argc</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">char **&#160;</td>
          <td class="paramname"><em>argv</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Add the arguments of theMay, n to the object. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">argc</td><td>The number of arguments </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">argv</td><td>An array of char*</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd><b>true</b> or <b>false</b> </dd></dl>

</div>
</div>
<a id="ae401cb47faea064ac04133ea929c0f94"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ae401cb47faea064ac04133ea929c0f94">&#9670;&nbsp;</a></span>operator[]()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">std::vector&lt;std::string&gt;&amp; mcd::Arguments::operator[] </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>index</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get the arguments in an index. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">index</td><td>The index of the arguments</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Return a vector that contains the arguments </dd></dl>

</div>
</div>
<a id="ab25a5cb9e0a7d21921baa90a95cd99b8"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ab25a5cb9e0a7d21921baa90a95cd99b8">&#9670;&nbsp;</a></span>print()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void mcd::Arguments::print </td>
          <td>(</td>
          <td class="paramtype">const std::string &amp;&#160;</td>
          <td class="paramname"><em>index</em> = <code>&quot;&quot;</code></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Print all the arguments in the <em>index</em>. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">index</td><td>The index of the arguments</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>void </dd></dl>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="../../d4/dee/a00008.php">Args.hpp</a></li>
</ul>
</div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../df/d24/a00217.php">mcd</a></li><li class="navelem"><a class="el" href="../../d3/dee/a00774.php">Arguments</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
