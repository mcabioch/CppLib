<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.20"/>
		<title>C++: mcd::natural::Gene Class Reference</title>
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
									&#160;<span id="projectnumber">1.6.2.2</span>
								</div>
								<div id="projectbrief">My own C++ features</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<?php
				$text = "Generated on Sun Nov 15 2020 19:28:34 for C++ by";
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
$(document).ready(function(){initNavTree('dc/d8c/a01297.php','../../'); initResizable(); });
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
<a href="#pub-static-attribs">Static Public Attributes</a> &#124;
<a href="#friends">Friends</a> &#124;
<a href="../../d7/d88/a01294.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">mcd::natural::Gene Class Reference</div>  </div>
</div><!--header-->
<div class="contents">

<p>A gene that represent a caracteristic.  
 <a href="../../dc/d8c/a01297.php#details">More...</a></p>

<p><code>#include &lt;Gene.hpp&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-types"></a>
Public Types</h2></td></tr>
<tr class="memitem:a29dd9b8ac897a110f7047c2912ebd2e0"><td class="memItemLeft" align="right" valign="top">enum &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dc/d8c/a01297.php#a29dd9b8ac897a110f7047c2912ebd2e0">GeneType</a> { <br />
&#160;&#160;<a class="el" href="../../dc/d8c/a01297.php#a29dd9b8ac897a110f7047c2912ebd2e0ae7b17b5d887f18544b1ca0f51244e8c4">FLOAT</a>, 
<a class="el" href="../../dc/d8c/a01297.php#a29dd9b8ac897a110f7047c2912ebd2e0a644487cee470ea37ef049351feaaca2e">INT</a>, 
<a class="el" href="../../dc/d8c/a01297.php#a29dd9b8ac897a110f7047c2912ebd2e0aa91e524760eeac3e25168c3c4fd16c64">BOOL</a>, 
<a class="el" href="../../dc/d8c/a01297.php#a29dd9b8ac897a110f7047c2912ebd2e0a30cd035484abb297f1f5503dd95b94fd">RANGED_INT</a>, 
<br />
&#160;&#160;<a class="el" href="../../dc/d8c/a01297.php#a29dd9b8ac897a110f7047c2912ebd2e0a31801000c46cfa54c27b6f7bcef2afa5">RANGED_FLOAT</a>, 
<a class="el" href="../../dc/d8c/a01297.php#a29dd9b8ac897a110f7047c2912ebd2e0a4015002ac12a4c3852ba72131800aa26">LISTED</a>, 
<a class="el" href="../../dc/d8c/a01297.php#a29dd9b8ac897a110f7047c2912ebd2e0a11190a1a9c9f6f59c60d10762eb91896">STATIC</a>
<br />
 }</td></tr>
<tr class="separator:a29dd9b8ac897a110f7047c2912ebd2e0"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:afac2f9fde459a7a311c2a19078f0cc95"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dc/d8c/a01297.php#afac2f9fde459a7a311c2a19078f0cc95">Gene</a> (std::string name, <a class="el" href="../../dc/d8c/a01297.php#a29dd9b8ac897a110f7047c2912ebd2e0">GeneType</a> type=GeneType::FLOAT, double value=0, double mini=0, double maxi=0, std::vector&lt; double &gt; list={})</td></tr>
<tr class="memdesc:afac2f9fde459a7a311c2a19078f0cc95"><td class="mdescLeft">&#160;</td><td class="mdescRight">The constructor of the class.  <a href="../../dc/d8c/a01297.php#afac2f9fde459a7a311c2a19078f0cc95">More...</a><br /></td></tr>
<tr class="separator:afac2f9fde459a7a311c2a19078f0cc95"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a57128a7a4b82cf0a0ba0b8856bab161a"><td class="memItemLeft" align="right" valign="top">virtual&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dc/d8c/a01297.php#a57128a7a4b82cf0a0ba0b8856bab161a">~Gene</a> ()</td></tr>
<tr class="separator:a57128a7a4b82cf0a0ba0b8856bab161a"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aef9707ac6796358b612094b0ebc35402"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dc/d8c/a01297.php#aef9707ac6796358b612094b0ebc35402">Gene</a> (const <a class="el" href="../../dc/d8c/a01297.php">Gene</a> &amp;g)</td></tr>
<tr class="separator:aef9707ac6796358b612094b0ebc35402"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:acc86646db1f38e98d7d1d21236debe9d"><td class="memItemLeft" align="right" valign="top">double&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dc/d8c/a01297.php#acc86646db1f38e98d7d1d21236debe9d">Value</a> () const</td></tr>
<tr class="separator:acc86646db1f38e98d7d1d21236debe9d"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ae75e8789e328d8ffa258b201849d6a44"><td class="memItemLeft" align="right" valign="top">std::string&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dc/d8c/a01297.php#ae75e8789e328d8ffa258b201849d6a44">Name</a> () const</td></tr>
<tr class="separator:ae75e8789e328d8ffa258b201849d6a44"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a1c76cb1011260b0ad8495d1e591057ba"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dc/d8c/a01297.php#a1c76cb1011260b0ad8495d1e591057ba">Value</a> (const double &amp;value)</td></tr>
<tr class="separator:a1c76cb1011260b0ad8495d1e591057ba"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:af2f9b44131d9874e8b2d27566f8f5bf0"><td class="memItemLeft" align="right" valign="top"><a class="el" href="../../dc/d8c/a01297.php">Gene</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dc/d8c/a01297.php#af2f9b44131d9874e8b2d27566f8f5bf0">copy</a> () const</td></tr>
<tr class="memdesc:af2f9b44131d9874e8b2d27566f8f5bf0"><td class="mdescLeft">&#160;</td><td class="mdescRight">Create a new <a class="el" href="../../dc/d8c/a01297.php" title="A gene that represent a caracteristic.">Gene</a> applying some potential mutations.  <a href="../../dc/d8c/a01297.php#af2f9b44131d9874e8b2d27566f8f5bf0">More...</a><br /></td></tr>
<tr class="separator:af2f9b44131d9874e8b2d27566f8f5bf0"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-static-attribs"></a>
Static Public Attributes</h2></td></tr>
<tr class="memitem:aea82298faeb2f83a45c7ca43558c0390"><td class="memItemLeft" align="right" valign="top">static int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dc/d8c/a01297.php#aea82298faeb2f83a45c7ca43558c0390">MutationRate</a></td></tr>
<tr class="memdesc:aea82298faeb2f83a45c7ca43558c0390"><td class="mdescLeft">&#160;</td><td class="mdescRight">The mutation rate in using of copy method. It's one over <em>MutationRate</em>.  <a href="../../dc/d8c/a01297.php#aea82298faeb2f83a45c7ca43558c0390">More...</a><br /></td></tr>
<tr class="separator:aea82298faeb2f83a45c7ca43558c0390"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a956e43802a33c93c589c52568f12f6d1"><td class="memItemLeft" align="right" valign="top">static int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dc/d8c/a01297.php#a956e43802a33c93c589c52568f12f6d1">FloatAccuracy</a></td></tr>
<tr class="memdesc:a956e43802a33c93c589c52568f12f6d1"><td class="mdescLeft">&#160;</td><td class="mdescRight">Define the maximum number after the comma for a float value. Default is 4.  <a href="../../dc/d8c/a01297.php#a956e43802a33c93c589c52568f12f6d1">More...</a><br /></td></tr>
<tr class="separator:a956e43802a33c93c589c52568f12f6d1"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="friends"></a>
Friends</h2></td></tr>
<tr class="memitem:abfba7cb01e60aeda7477a3b504d4ed57"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dc/d8c/a01297.php#abfba7cb01e60aeda7477a3b504d4ed57">operator==</a> (const <a class="el" href="../../dc/d8c/a01297.php">Gene</a> &amp;g1, const <a class="el" href="../../dc/d8c/a01297.php">Gene</a> &amp;g2)</td></tr>
<tr class="memdesc:abfba7cb01e60aeda7477a3b504d4ed57"><td class="mdescLeft">&#160;</td><td class="mdescRight">Tries if the names are equals.  <a href="../../dc/d8c/a01297.php#abfba7cb01e60aeda7477a3b504d4ed57">More...</a><br /></td></tr>
<tr class="separator:abfba7cb01e60aeda7477a3b504d4ed57"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aadb0dff1f1d91e1b0b2c7a382de48eb8"><td class="memItemLeft" align="right" valign="top">std::ostream &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dc/d8c/a01297.php#aadb0dff1f1d91e1b0b2c7a382de48eb8">operator&lt;&lt;</a> (std::ostream &amp;os, const <a class="el" href="../../dc/d8c/a01297.php">Gene</a> &amp;g)</td></tr>
<tr class="memdesc:aadb0dff1f1d91e1b0b2c7a382de48eb8"><td class="mdescLeft">&#160;</td><td class="mdescRight">Tries if the names are differents.  <a href="../../dc/d8c/a01297.php#aadb0dff1f1d91e1b0b2c7a382de48eb8">More...</a><br /></td></tr>
<tr class="separator:aadb0dff1f1d91e1b0b2c7a382de48eb8"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a2614d14b993a651c047de4bf36f7aef2"><td class="memItemLeft" align="right" valign="top">std::istream &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dc/d8c/a01297.php#a2614d14b993a651c047de4bf36f7aef2">operator&gt;&gt;</a> (std::istream &amp;is, <a class="el" href="../../dc/d8c/a01297.php">Gene</a> &amp;g)</td></tr>
<tr class="separator:a2614d14b993a651c047de4bf36f7aef2"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>A gene that represent a caracteristic. </p>
</div><h2 class="groupheader">Member Enumeration Documentation</h2>
<a id="a29dd9b8ac897a110f7047c2912ebd2e0"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a29dd9b8ac897a110f7047c2912ebd2e0">&#9670;&nbsp;</a></span>GeneType</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">enum <a class="el" href="../../dc/d8c/a01297.php#a29dd9b8ac897a110f7047c2912ebd2e0">mcd::natural::Gene::GeneType</a></td>
        </tr>
      </table>
</div><div class="memdoc">
<table class="fieldtable">
<tr><th colspan="2">Enumerator</th></tr><tr><td class="fieldname"><a id="a29dd9b8ac897a110f7047c2912ebd2e0ae7b17b5d887f18544b1ca0f51244e8c4"></a>FLOAT&#160;</td><td class="fielddoc"></td></tr>
<tr><td class="fieldname"><a id="a29dd9b8ac897a110f7047c2912ebd2e0a644487cee470ea37ef049351feaaca2e"></a>INT&#160;</td><td class="fielddoc"></td></tr>
<tr><td class="fieldname"><a id="a29dd9b8ac897a110f7047c2912ebd2e0aa91e524760eeac3e25168c3c4fd16c64"></a>BOOL&#160;</td><td class="fielddoc"></td></tr>
<tr><td class="fieldname"><a id="a29dd9b8ac897a110f7047c2912ebd2e0a30cd035484abb297f1f5503dd95b94fd"></a>RANGED_INT&#160;</td><td class="fielddoc"></td></tr>
<tr><td class="fieldname"><a id="a29dd9b8ac897a110f7047c2912ebd2e0a31801000c46cfa54c27b6f7bcef2afa5"></a>RANGED_FLOAT&#160;</td><td class="fielddoc"></td></tr>
<tr><td class="fieldname"><a id="a29dd9b8ac897a110f7047c2912ebd2e0a4015002ac12a4c3852ba72131800aa26"></a>LISTED&#160;</td><td class="fielddoc"></td></tr>
<tr><td class="fieldname"><a id="a29dd9b8ac897a110f7047c2912ebd2e0a11190a1a9c9f6f59c60d10762eb91896"></a>STATIC&#160;</td><td class="fielddoc"></td></tr>
</table>

</div>
</div>
<h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a id="afac2f9fde459a7a311c2a19078f0cc95"></a>
<h2 class="memtitle"><span class="permalink"><a href="#afac2f9fde459a7a311c2a19078f0cc95">&#9670;&nbsp;</a></span>Gene() <span class="overload">[1/2]</span></h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">mcd::natural::Gene::Gene </td>
          <td>(</td>
          <td class="paramtype">std::string&#160;</td>
          <td class="paramname"><em>name</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="../../dc/d8c/a01297.php#a29dd9b8ac897a110f7047c2912ebd2e0">GeneType</a>&#160;</td>
          <td class="paramname"><em>type</em> = <code>GeneType::FLOAT</code>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">double&#160;</td>
          <td class="paramname"><em>value</em> = <code>0</code>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">double&#160;</td>
          <td class="paramname"><em>mini</em> = <code>0</code>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">double&#160;</td>
          <td class="paramname"><em>maxi</em> = <code>0</code>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">std::vector&lt; double &gt;&#160;</td>
          <td class="paramname"><em>list</em> = <code>{}</code>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>The constructor of the class. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">name</td><td>The name of the caracteristic </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">type</td><td>The type of the <a class="el" href="../../dc/d8c/a01297.php" title="A gene that represent a caracteristic.">Gene</a>, a GeneType value </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">value</td><td>The initial value of the <a class="el" href="../../dc/d8c/a01297.php" title="A gene that represent a caracteristic.">Gene</a> </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">mini</td><td>The minimum value for a Ranged <a class="el" href="../../dc/d8c/a01297.php" title="A gene that represent a caracteristic.">Gene</a> </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">maxi</td><td>The maximum value for a Ranged <a class="el" href="../../dc/d8c/a01297.php" title="A gene that represent a caracteristic.">Gene</a> </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">list</td><td>A list of possible value for a Listed <a class="el" href="../../dc/d8c/a01297.php" title="A gene that represent a caracteristic.">Gene</a> </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a id="a57128a7a4b82cf0a0ba0b8856bab161a"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a57128a7a4b82cf0a0ba0b8856bab161a">&#9670;&nbsp;</a></span>~Gene()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual mcd::natural::Gene::~Gene </td>
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
<a id="aef9707ac6796358b612094b0ebc35402"></a>
<h2 class="memtitle"><span class="permalink"><a href="#aef9707ac6796358b612094b0ebc35402">&#9670;&nbsp;</a></span>Gene() <span class="overload">[2/2]</span></h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">mcd::natural::Gene::Gene </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="../../dc/d8c/a01297.php">Gene</a> &amp;&#160;</td>
          <td class="paramname"><em>g</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a id="af2f9b44131d9874e8b2d27566f8f5bf0"></a>
<h2 class="memtitle"><span class="permalink"><a href="#af2f9b44131d9874e8b2d27566f8f5bf0">&#9670;&nbsp;</a></span>copy()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="../../dc/d8c/a01297.php">Gene</a> mcd::natural::Gene::copy </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Create a new <a class="el" href="../../dc/d8c/a01297.php" title="A gene that represent a caracteristic.">Gene</a> applying some potential mutations. </p>

</div>
</div>
<a id="ae75e8789e328d8ffa258b201849d6a44"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ae75e8789e328d8ffa258b201849d6a44">&#9670;&nbsp;</a></span>Name()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">std::string mcd::natural::Gene::Name </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a id="acc86646db1f38e98d7d1d21236debe9d"></a>
<h2 class="memtitle"><span class="permalink"><a href="#acc86646db1f38e98d7d1d21236debe9d">&#9670;&nbsp;</a></span>Value() <span class="overload">[1/2]</span></h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">double mcd::natural::Gene::Value </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a id="a1c76cb1011260b0ad8495d1e591057ba"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a1c76cb1011260b0ad8495d1e591057ba">&#9670;&nbsp;</a></span>Value() <span class="overload">[2/2]</span></h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void mcd::natural::Gene::Value </td>
          <td>(</td>
          <td class="paramtype">const double &amp;&#160;</td>
          <td class="paramname"><em>value</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<h2 class="groupheader">Friends And Related Function Documentation</h2>
<a id="aadb0dff1f1d91e1b0b2c7a382de48eb8"></a>
<h2 class="memtitle"><span class="permalink"><a href="#aadb0dff1f1d91e1b0b2c7a382de48eb8">&#9670;&nbsp;</a></span>operator&lt;&lt;</h2>

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
          <td class="paramtype">const <a class="el" href="../../dc/d8c/a01297.php">Gene</a> &amp;&#160;</td>
          <td class="paramname"><em>g</em>&#160;</td>
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

<p>Tries if the names are differents. </p>
<p>Write the 3 values of a gene on 3 lines </p>

</div>
</div>
<a id="abfba7cb01e60aeda7477a3b504d4ed57"></a>
<h2 class="memtitle"><span class="permalink"><a href="#abfba7cb01e60aeda7477a3b504d4ed57">&#9670;&nbsp;</a></span>operator==</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">bool operator== </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="../../dc/d8c/a01297.php">Gene</a> &amp;&#160;</td>
          <td class="paramname"><em>g1</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="../../dc/d8c/a01297.php">Gene</a> &amp;&#160;</td>
          <td class="paramname"><em>g2</em>&#160;</td>
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

<p>Tries if the names are equals. </p>

</div>
</div>
<a id="a2614d14b993a651c047de4bf36f7aef2"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a2614d14b993a651c047de4bf36f7aef2">&#9670;&nbsp;</a></span>operator&gt;&gt;</h2>

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
          <td class="paramtype"><a class="el" href="../../dc/d8c/a01297.php">Gene</a> &amp;&#160;</td>
          <td class="paramname"><em>g</em>&#160;</td>
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
<a id="a956e43802a33c93c589c52568f12f6d1"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a956e43802a33c93c589c52568f12f6d1">&#9670;&nbsp;</a></span>FloatAccuracy</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">int mcd::natural::Gene::FloatAccuracy</td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Define the maximum number after the comma for a float value. Default is 4. </p>

</div>
</div>
<a id="aea82298faeb2f83a45c7ca43558c0390"></a>
<h2 class="memtitle"><span class="permalink"><a href="#aea82298faeb2f83a45c7ca43558c0390">&#9670;&nbsp;</a></span>MutationRate</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">int mcd::natural::Gene::MutationRate</td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>The mutation rate in using of copy method. It's one over <em>MutationRate</em>. </p>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="../../df/d98/a00107.php">Gene.hpp</a></li>
</ul>
</div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../db/d12/a00268.php">mcd</a></li><li class="navelem"><a class="el" href="../../d9/d2a/a00270.php">natural</a></li><li class="navelem"><a class="el" href="../../dc/d8c/a01297.php">Gene</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
