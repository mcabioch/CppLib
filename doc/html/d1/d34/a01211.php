<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.20"/>
		<title>C++: mcd::genetic::Chromosome Class Reference</title>
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
				$text = "Generated on Wed Nov 18 2020 14:47:42 for C++ by";
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
$(document).ready(function(){initNavTree('d1/d34/a01211.php','../../'); initResizable(); });
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
<a href="#pro-attribs">Protected Attributes</a> &#124;
<a href="#friends">Friends</a> &#124;
<a href="../../d9/d31/a01208.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">mcd::genetic::Chromosome Class Reference</div>  </div>
</div><!--header-->
<div class="contents">

<p>A double group of genes.  
 <a href="../../d1/d34/a01211.php#details">More...</a></p>

<p><code>#include &lt;Chromosome.hpp&gt;</code></p>
<div class="dynheader">
Collaboration diagram for mcd::genetic::Chromosome:</div>
<div class="dyncontent">
<div class="center"><img src="../../de/d04/a01209.png" border="0" usemap="#amcd_1_1genetic_1_1Chromosome_coll__map" alt="Collaboration graph"/></div>
<map name="mcd_1_1genetic_1_1Chromosome_coll__map" id="mcd_1_1genetic_1_1Chromosome_coll__map">
<area shape="rect" title="A double group of genes." alt="" coords="26,288,209,315"/>
<area shape="rect" title=" " alt="" coords="48,184,187,211"/>
<area shape="rect" href="../../d8/d38/a01299.php" title="A gene that represent a caracteristic." alt="" coords="5,95,141,121"/>
<area shape="rect" title="STL class." alt="" coords="166,95,282,121"/>
<area shape="rect" title=" " alt="" coords="205,5,243,32"/>
</map>
<center><span class="legend">[<a target="top" href="../../graph_legend.php">legend</a>]</span></center></div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:a6a8a2b9c5dc9b20ab381537dd4eb814e"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d1/d34/a01211.php#a6a8a2b9c5dc9b20ab381537dd4eb814e">Chromosome</a> (<a class="el" href="../../dd/d86/a00271.php#a558590aa4062bed1dd3e130a2170254e">Genes</a> gs1)</td></tr>
<tr class="memdesc:a6a8a2b9c5dc9b20ab381537dd4eb814e"><td class="mdescLeft">&#160;</td><td class="mdescRight">The constructor of the class.  <a href="../../d1/d34/a01211.php#a6a8a2b9c5dc9b20ab381537dd4eb814e">More...</a><br /></td></tr>
<tr class="separator:a6a8a2b9c5dc9b20ab381537dd4eb814e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aa1ee29bc5737528140061f13cc52fd82"><td class="memItemLeft" align="right" valign="top">virtual&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d1/d34/a01211.php#aa1ee29bc5737528140061f13cc52fd82">~Chromosome</a> ()</td></tr>
<tr class="separator:aa1ee29bc5737528140061f13cc52fd82"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a2df472bc4ec846a07de0ed25b3e5d69a"><td class="memItemLeft" align="right" valign="top">double&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d1/d34/a01211.php#a2df472bc4ec846a07de0ed25b3e5d69a">Value</a> (std::string str, size_t index) const</td></tr>
<tr class="separator:a2df472bc4ec846a07de0ed25b3e5d69a"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a1de2f9e687d9a38bf46df75cba211157"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d1/d34/a01211.php#a1de2f9e687d9a38bf46df75cba211157">Values</a> (std::string str, double val1, double val2)</td></tr>
<tr class="separator:a1de2f9e687d9a38bf46df75cba211157"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a268b4a8ea3c6b526f5e8f1b2b310a705"><td class="memItemLeft" align="right" valign="top"><a class="el" href="../../d1/d34/a01211.php">Chromosome</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d1/d34/a01211.php#a268b4a8ea3c6b526f5e8f1b2b310a705">operator+=</a> (const <a class="el" href="../../d1/d34/a01211.php">Chromosome</a> &amp;c1)</td></tr>
<tr class="memdesc:a268b4a8ea3c6b526f5e8f1b2b310a705"><td class="mdescLeft">&#160;</td><td class="mdescRight">Do a crossover between the two Genes vectors.  <a href="../../d1/d34/a01211.php#a268b4a8ea3c6b526f5e8f1b2b310a705">More...</a><br /></td></tr>
<tr class="separator:a268b4a8ea3c6b526f5e8f1b2b310a705"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a8b1df7d685e6f49558c4c6e260547777"><td class="memItemLeft" align="right" valign="top"><a class="el" href="../../d1/d34/a01211.php">Chromosome</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d1/d34/a01211.php#a8b1df7d685e6f49558c4c6e260547777">copy</a> () const</td></tr>
<tr class="memdesc:a8b1df7d685e6f49558c4c6e260547777"><td class="mdescLeft">&#160;</td><td class="mdescRight">Create a new <a class="el" href="../../d1/d34/a01211.php" title="A double group of genes.">Chromosome</a> applying some potential mutations.  <a href="../../d1/d34/a01211.php#a8b1df7d685e6f49558c4c6e260547777">More...</a><br /></td></tr>
<tr class="separator:a8b1df7d685e6f49558c4c6e260547777"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pro-attribs"></a>
Protected Attributes</h2></td></tr>
<tr class="memitem:a0bcc18d6c2889d5aa4e4fcefc7b9cf0e"><td class="memItemLeft" align="right" valign="top"><a class="el" href="../../dd/d86/a00271.php#a558590aa4062bed1dd3e130a2170254e">Genes</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d1/d34/a01211.php#a0bcc18d6c2889d5aa4e4fcefc7b9cf0e">_genes1</a></td></tr>
<tr class="separator:a0bcc18d6c2889d5aa4e4fcefc7b9cf0e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a19b48a42ee3fa0244f2d0bfd6a59915c"><td class="memItemLeft" align="right" valign="top"><a class="el" href="../../dd/d86/a00271.php#a558590aa4062bed1dd3e130a2170254e">Genes</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d1/d34/a01211.php#a19b48a42ee3fa0244f2d0bfd6a59915c">_genes2</a></td></tr>
<tr class="separator:a19b48a42ee3fa0244f2d0bfd6a59915c"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="friends"></a>
Friends</h2></td></tr>
<tr class="memitem:a1803f44b93c73c5cf0f3d8204eac3c9e"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d1/d34/a01211.php#a1803f44b93c73c5cf0f3d8204eac3c9e">operator==</a> (const <a class="el" href="../../d1/d34/a01211.php">Chromosome</a> &amp;c1, const <a class="el" href="../../d1/d34/a01211.php">Chromosome</a> &amp;c2)</td></tr>
<tr class="separator:a1803f44b93c73c5cf0f3d8204eac3c9e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a76b305eaa6cc1a513e64de3459e3b550"><td class="memItemLeft" align="right" valign="top">std::ostream &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d1/d34/a01211.php#a76b305eaa6cc1a513e64de3459e3b550">operator&lt;&lt;</a> (std::ostream &amp;os, const <a class="el" href="../../d1/d34/a01211.php">Chromosome</a> &amp;c)</td></tr>
<tr class="separator:a76b305eaa6cc1a513e64de3459e3b550"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a9a437c818c1b78544066972a94410efc"><td class="memItemLeft" align="right" valign="top">std::istream &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d1/d34/a01211.php#a9a437c818c1b78544066972a94410efc">operator&gt;&gt;</a> (std::istream &amp;is, <a class="el" href="../../d1/d34/a01211.php">Chromosome</a> &amp;c)</td></tr>
<tr class="separator:a9a437c818c1b78544066972a94410efc"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:abed91ce31a251621eff0ec618c9d95e2"><td class="memItemLeft" align="right" valign="top"><a class="el" href="../../d1/d34/a01211.php">Chromosome</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d1/d34/a01211.php#abed91ce31a251621eff0ec618c9d95e2">operator+</a> (const <a class="el" href="../../d1/d34/a01211.php">Chromosome</a> &amp;c1, const <a class="el" href="../../d1/d34/a01211.php">Chromosome</a> &amp;c2)</td></tr>
<tr class="memdesc:abed91ce31a251621eff0ec618c9d95e2"><td class="mdescLeft">&#160;</td><td class="mdescRight">Do a crossover between the two Genes vectors.  <a href="../../d1/d34/a01211.php#abed91ce31a251621eff0ec618c9d95e2">More...</a><br /></td></tr>
<tr class="separator:abed91ce31a251621eff0ec618c9d95e2"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>A double group of genes. </p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a id="a6a8a2b9c5dc9b20ab381537dd4eb814e"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a6a8a2b9c5dc9b20ab381537dd4eb814e">&#9670;&nbsp;</a></span>Chromosome()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">mcd::genetic::Chromosome::Chromosome </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="../../dd/d86/a00271.php#a558590aa4062bed1dd3e130a2170254e">Genes</a>&#160;</td>
          <td class="paramname"><em>gs1</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>The constructor of the class. </p>
<p>It creates another vector of genes using copy on gs1 </p><dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">gs1</td><td>A vector of <a class="el" href="../../d8/d38/a01299.php" title="A gene that represent a caracteristic.">Gene</a>, an alias is Genes. </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a id="aa1ee29bc5737528140061f13cc52fd82"></a>
<h2 class="memtitle"><span class="permalink"><a href="#aa1ee29bc5737528140061f13cc52fd82">&#9670;&nbsp;</a></span>~Chromosome()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual mcd::genetic::Chromosome::~Chromosome </td>
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
<h2 class="groupheader">Member Function Documentation</h2>
<a id="a8b1df7d685e6f49558c4c6e260547777"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a8b1df7d685e6f49558c4c6e260547777">&#9670;&nbsp;</a></span>copy()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="../../d1/d34/a01211.php">Chromosome</a> mcd::genetic::Chromosome::copy </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Create a new <a class="el" href="../../d1/d34/a01211.php" title="A double group of genes.">Chromosome</a> applying some potential mutations. </p>

</div>
</div>
<a id="a268b4a8ea3c6b526f5e8f1b2b310a705"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a268b4a8ea3c6b526f5e8f1b2b310a705">&#9670;&nbsp;</a></span>operator+=()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="../../d1/d34/a01211.php">Chromosome</a> mcd::genetic::Chromosome::operator+= </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="../../d1/d34/a01211.php">Chromosome</a> &amp;&#160;</td>
          <td class="paramname"><em>c1</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Do a crossover between the two Genes vectors. </p>

</div>
</div>
<a id="a2df472bc4ec846a07de0ed25b3e5d69a"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a2df472bc4ec846a07de0ed25b3e5d69a">&#9670;&nbsp;</a></span>Value()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">double mcd::genetic::Chromosome::Value </td>
          <td>(</td>
          <td class="paramtype">std::string&#160;</td>
          <td class="paramname"><em>str</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">size_t&#160;</td>
          <td class="paramname"><em>index</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a id="a1de2f9e687d9a38bf46df75cba211157"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a1de2f9e687d9a38bf46df75cba211157">&#9670;&nbsp;</a></span>Values()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void mcd::genetic::Chromosome::Values </td>
          <td>(</td>
          <td class="paramtype">std::string&#160;</td>
          <td class="paramname"><em>str</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">double&#160;</td>
          <td class="paramname"><em>val1</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">double&#160;</td>
          <td class="paramname"><em>val2</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<h2 class="groupheader">Friends And Related Function Documentation</h2>
<a id="abed91ce31a251621eff0ec618c9d95e2"></a>
<h2 class="memtitle"><span class="permalink"><a href="#abed91ce31a251621eff0ec618c9d95e2">&#9670;&nbsp;</a></span>operator+</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="../../d1/d34/a01211.php">Chromosome</a> operator+ </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="../../d1/d34/a01211.php">Chromosome</a> &amp;&#160;</td>
          <td class="paramname"><em>c1</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="../../d1/d34/a01211.php">Chromosome</a> &amp;&#160;</td>
          <td class="paramname"><em>c2</em>&#160;</td>
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

<p>Do a crossover between the two Genes vectors. </p>

</div>
</div>
<a id="a76b305eaa6cc1a513e64de3459e3b550"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a76b305eaa6cc1a513e64de3459e3b550">&#9670;&nbsp;</a></span>operator&lt;&lt;</h2>

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
          <td class="paramtype">const <a class="el" href="../../d1/d34/a01211.php">Chromosome</a> &amp;&#160;</td>
          <td class="paramname"><em>c</em>&#160;</td>
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
<a id="a1803f44b93c73c5cf0f3d8204eac3c9e"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a1803f44b93c73c5cf0f3d8204eac3c9e">&#9670;&nbsp;</a></span>operator==</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">bool operator== </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="../../d1/d34/a01211.php">Chromosome</a> &amp;&#160;</td>
          <td class="paramname"><em>c1</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="../../d1/d34/a01211.php">Chromosome</a> &amp;&#160;</td>
          <td class="paramname"><em>c2</em>&#160;</td>
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
<a id="a9a437c818c1b78544066972a94410efc"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a9a437c818c1b78544066972a94410efc">&#9670;&nbsp;</a></span>operator&gt;&gt;</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">std::istream&amp; operator&gt;&gt; </td>
          <td>(</td>
          <td class="paramtype">std::istream &amp;&#160;</td>
          <td class="paramname"><em>is</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="../../d1/d34/a01211.php">Chromosome</a> &amp;&#160;</td>
          <td class="paramname"><em>c</em>&#160;</td>
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
<h2 class="groupheader">Member Data Documentation</h2>
<a id="a0bcc18d6c2889d5aa4e4fcefc7b9cf0e"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a0bcc18d6c2889d5aa4e4fcefc7b9cf0e">&#9670;&nbsp;</a></span>_genes1</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="../../dd/d86/a00271.php#a558590aa4062bed1dd3e130a2170254e">Genes</a> mcd::genetic::Chromosome::_genes1</td>
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
<a id="a19b48a42ee3fa0244f2d0bfd6a59915c"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a19b48a42ee3fa0244f2d0bfd6a59915c">&#9670;&nbsp;</a></span>_genes2</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="../../dd/d86/a00271.php#a558590aa4062bed1dd3e130a2170254e">Genes</a> mcd::genetic::Chromosome::_genes2</td>
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
<li><a class="el" href="../../d9/d2e/a00056.php">Chromosome.hpp</a></li>
</ul>
</div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../db/d12/a00268.php">mcd</a></li><li class="navelem"><a class="el" href="../../dd/d86/a00271.php">genetic</a></li><li class="navelem"><a class="el" href="../../d1/d34/a01211.php">Chromosome</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
