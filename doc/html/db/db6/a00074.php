<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.20"/>
		<title>C++: convert.hpp File Reference</title>
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
									&#160;<span id="projectnumber">1.6.0.0</span>
								</div>
								<div id="projectbrief">My own C++ features</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<?php
				$text = "Generated on Wed Oct 28 2020 16:13:45 for C++ by";
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
$(document).ready(function(){initNavTree('db/db6/a00074.php','../../'); initResizable(); });
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
<a href="#namespaces">Namespaces</a> &#124;
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<div class="title">convert.hpp File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><code>#include &lt;type_traits&gt;</code><br />
<code>#include &quot;<a class="el" href="../../da/d45/a00011.php">array.hpp</a>&quot;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for convert.hpp:</div>
<div class="dyncontent">
<div class="center"><img src="../../d9/da5/a00075.png" border="0" usemap="#aconvert_8hpp" alt=""/></div>
<map name="convert_8hpp" id="convert_8hpp">
<area shape="rect" title=" " alt="" coords="990,5,1081,32"/>
<area shape="rect" title=" " alt="" coords="943,80,1026,107"/>
<area shape="rect" href="../../da/d45/a00011.php" title=" " alt="" coords="1050,80,1125,107"/>
<area shape="rect" href="../../dc/dee/a00053.php" title=" " alt="" coords="937,155,1019,181"/>
<area shape="rect" href="../../d1/d44/a00098.php" title=" " alt="" coords="1155,155,1257,181"/>
<area shape="rect" href="../../d3/dd5/a00215.php" title=" " alt="" coords="1044,155,1131,181"/>
<area shape="rect" href="../../df/d03/a00062.php" title=" " alt="" coords="745,229,835,256"/>
<area shape="rect" href="../../d7/d03/a00254.php" title=" " alt="" coords="1046,229,1129,256"/>
<area shape="rect" title=" " alt="" coords="865,229,926,256"/>
<area shape="rect" title=" " alt="" coords="950,229,1019,256"/>
<area shape="rect" href="../../d9/db6/a00146.php" title=" " alt="" coords="738,304,821,331"/>
<area shape="rect" href="../../d0/dc2/a00104.php" title=" " alt="" coords="705,379,800,405"/>
<area shape="rect" href="../../d7/dce/a00143.php" title=" " alt="" coords="627,453,710,480"/>
<area shape="rect" title=" " alt="" coords="734,453,801,480"/>
<area shape="rect" href="../../d8/d41/a00038.php" title=" " alt="" coords="673,528,755,555"/>
<area shape="rect" href="../../de/d79/a00203.php" title=" " alt="" coords="706,603,799,629"/>
<area shape="rect" href="../../dd/dd7/a00248.php" title=" " alt="" coords="620,677,699,704"/>
<area shape="rect" title=" " alt="" coords="723,677,782,704"/>
<area shape="rect" title=" " alt="" coords="806,677,865,704"/>
<area shape="rect" href="../../d3/d52/a00023.php" title=" " alt="" coords="383,752,450,779"/>
<area shape="rect" href="../../d5/df1/a00206.php" title=" " alt="" coords="488,752,599,779"/>
<area shape="rect" href="../../d6/d22/a00245.php" title=" " alt="" coords="623,752,696,779"/>
<area shape="rect" href="../../d3/d1a/a00251.php" title=" " alt="" coords="721,752,854,779"/>
<area shape="rect" title=" " alt="" coords="879,752,947,779"/>
<area shape="rect" href="../../d7/d06/a00131.php" title=" " alt="" coords="617,827,729,853"/>
<area shape="rect" href="../../d6/d5b/a00026.php" title=" " alt="" coords="5,827,148,853"/>
<area shape="rect" href="../../d5/d16/a00029.php" title=" " alt="" coords="172,827,312,853"/>
<area shape="rect" href="../../dc/d87/a00032.php" title=" " alt="" coords="337,827,446,853"/>
<area shape="rect" href="../../d4/d8c/a00035.php" title=" " alt="" coords="470,827,593,853"/>
<area shape="rect" href="../../d7/d3f/a00173.php" title=" " alt="" coords="613,901,733,928"/>
<area shape="rect" title=" " alt="" coords="581,976,649,1003"/>
<area shape="rect" href="../../de/d76/a00134.php" title=" " alt="" coords="673,976,789,1003"/>
<area shape="rect" title=" " alt="" coords="245,1051,319,1077"/>
<area shape="rect" title=" " alt="" coords="343,1051,402,1077"/>
<area shape="rect" title=" " alt="" coords="427,1051,505,1077"/>
<area shape="rect" title=" " alt="" coords="530,1051,602,1077"/>
<area shape="rect" title=" " alt="" coords="627,1051,673,1077"/>
<area shape="rect" title=" " alt="" coords="697,1051,765,1077"/>
<area shape="rect" title=" " alt="" coords="789,1051,844,1077"/>
<area shape="rect" title=" " alt="" coords="869,1051,938,1077"/>
<area shape="rect" title=" " alt="" coords="963,1051,1017,1077"/>
<area shape="rect" title=" " alt="" coords="1042,1051,1095,1077"/>
<area shape="rect" title=" " alt="" coords="1119,1051,1178,1077"/>
<area shape="rect" href="../../d2/de7/a00014.php" title=" " alt="" coords="1048,304,1180,331"/>
<area shape="rect" title=" " alt="" coords="876,379,987,405"/>
<area shape="rect" title=" " alt="" coords="1011,379,1115,405"/>
<area shape="rect" title=" " alt="" coords="1139,379,1190,405"/>
<area shape="rect" title=" " alt="" coords="1215,379,1272,405"/>
<area shape="rect" title=" " alt="" coords="1297,379,1337,405"/>
<area shape="rect" title=" " alt="" coords="1361,379,1416,405"/>
<area shape="rect" title=" " alt="" coords="1160,229,1239,256"/>
<area shape="rect" title=" " alt="" coords="1263,229,1341,256"/>
</map>
</div>
</div><div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="../../db/df8/a00076.png" border="0" usemap="#aconvert_8hppdep" alt=""/></div>
<map name="convert_8hppdep" id="convert_8hppdep">
<area shape="rect" title=" " alt="" coords="330,5,421,32"/>
<area shape="rect" href="../../de/de1/a00065.php" title=" " alt="" coords="277,80,369,107"/>
<area shape="rect" href="../../d4/d3a/a00101.php" title=" " alt="" coords="393,80,464,107"/>
<area shape="rect" href="../../d9/d77/a00095.php" title=" " alt="" coords="335,155,415,181"/>
<area shape="rect" href="../../d9/d01/a00227.php" title=" " alt="" coords="330,229,421,256"/>
<area shape="rect" href="../../dd/d52/a00221.php" title=" " alt="" coords="336,304,415,331"/>
<area shape="rect" href="../../d5/ddf/a00224.php" title="Used to replace strptime function when compiling for Windows." alt="" coords="335,379,415,405"/>
<area shape="rect" href="../../d0/d27/a00239.php" title=" " alt="" coords="311,453,440,480"/>
<area shape="rect" href="../../d4/d3e/a00116.php" title=" " alt="" coords="328,528,423,555"/>
<area shape="rect" href="../../d3/d8b/a00059.php" title=" " alt="" coords="5,752,87,779"/>
<area shape="rect" href="../../da/d24/a00068.php" title=" " alt="" coords="120,827,247,853"/>
<area shape="rect" href="../../da/dec/a00080.php" title=" " alt="" coords="162,603,237,629"/>
<area shape="rect" href="../../df/d6a/a00119.php" title=" " alt="" coords="318,677,417,704"/>
<area shape="rect" href="../../d5/de9/a00176.php" title=" " alt="" coords="413,603,487,629"/>
<area shape="rect" href="../../da/d15/a00188.php" title=" " alt="" coords="511,603,682,629"/>
<area shape="rect" href="../../d3/de5/a00209.php" title=" " alt="" coords="586,752,701,779"/>
<area shape="rect" href="../../d6/de1/a00233.php" title=" " alt="" coords="715,901,825,928"/>
<area shape="rect" href="../../d7/d40/a00236.php" title=" " alt="" coords="261,603,337,629"/>
<area shape="rect" href="../../da/d2a/a00086.php" title=" " alt="" coords="369,1051,459,1077"/>
<area shape="rect" href="../../db/db2/a00020.php" title=" " alt="" coords="217,1125,377,1152"/>
<area shape="rect" href="../../d1/d09/a00077.php" title=" " alt="" coords="364,1200,461,1227"/>
<area shape="rect" href="../../dc/dfe/a00125.php" title=" " alt="" coords="454,1125,587,1152"/>
<area shape="rect" href="../../d4/d51/a00017.php" title=" " alt="" coords="254,1200,339,1227"/>
<area shape="rect" href="../../d6/d2d/a00047.php" title=" " alt="" coords="369,1275,456,1301"/>
<area shape="rect" href="../../df/d98/a00107.php" title=" " alt="" coords="271,1349,349,1376"/>
<area shape="rect" href="../../d1/d88/a00128.php" title=" " alt="" coords="370,1424,455,1451"/>
<area shape="rect" href="../../d1/da8/a00230.php" title=" " alt="" coords="453,1499,525,1525"/>
<area shape="rect" href="../../d9/d2e/a00056.php" title=" " alt="" coords="221,1424,346,1451"/>
<area shape="rect" href="../../d5/de0/a00050.php" title=" " alt="" coords="276,1499,347,1525"/>
<area shape="rect" href="../../dd/d32/a00041.php" title=" " alt="" coords="376,1573,449,1600"/>
<area shape="rect" href="../../d0/d89/a00071.php" title=" " alt="" coords="309,1648,423,1675"/>
<area shape="rect" href="../../d3/d00/a00113.php" title=" " alt="" coords="407,2021,503,2048"/>
<area shape="rect" href="../../d1/dc1/a00092.php" title=" " alt="" coords="215,1723,293,1749"/>
<area shape="rect" href="../../d5/dcb/a00170.php" title=" " alt="" coords="331,1723,417,1749"/>
<area shape="rect" href="../../d4/d81/a00110.php" title=" " alt="" coords="99,1797,187,1824"/>
<area shape="rect" href="../../d9/d39/a00257.php" title=" " alt="" coords="209,1872,299,1899"/>
<area shape="rect" href="../../d7/d46/a00002.php" title=" " alt="" coords="69,1872,156,1899"/>
<area shape="rect" href="../../dd/dad/a00005.php" title=" " alt="" coords="71,1947,138,1973"/>
<area shape="rect" href="../../db/dab/a00089.php" title=" " alt="" coords="289,2021,379,2048"/>
<area shape="rect" href="../../d3/db1/a00200.php" title=" " alt="" coords="260,2096,411,2123"/>
<area shape="rect" href="../../de/db1/a00197.php" title=" " alt="" coords="350,2171,433,2197"/>
<area shape="rect" href="../../d5/df9/a00044.php" title=" " alt="" coords="333,2245,450,2272"/>
<area shape="rect" href="../../d6/d7d/a00161.php" title=" " alt="" coords="163,1947,271,1973"/>
<area shape="rect" href="../../dc/d57/a00194.php" title=" " alt="" coords="295,1947,373,1973"/>
<area shape="rect" href="../../dc/d9a/a00218.php" title=" " alt="" coords="341,1797,423,1824"/>
<area shape="rect" href="../../df/dc8/a00122.php" title=" " alt="" coords="486,1200,561,1227"/>
<area shape="rect" href="../../d2/d1f/a00083.php" title=" " alt="" coords="190,677,294,704"/>
<area shape="rect" href="../../d9/dd0/a00191.php" title=" " alt="" coords="441,677,601,704"/>
<area shape="rect" href="../../db/dd9/a00179.php" title=" " alt="" coords="442,752,554,779"/>
<area shape="rect" href="../../de/df3/a00185.php" title=" " alt="" coords="403,827,561,853"/>
<area shape="rect" href="../../d7/d25/a00182.php" title=" " alt="" coords="389,901,564,928"/>
<area shape="rect" href="../../d5/db1/a00140.php" title=" " alt="" coords="415,976,487,1003"/>
<area shape="rect" href="../../d4/dee/a00008.php" title=" " alt="" coords="639,976,714,1003"/>
<area shape="rect" href="../../d2/dc8/a00242.php" title=" " alt="" coords="739,976,817,1003"/>
</map>
</div>
</div><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="namespaces"></a>
Namespaces</h2></td></tr>
<tr class="memitem:da/d53/a00265"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../da/d53/a00265.php">mcd</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:ae057a7c5042a3cacb444199a2b6b7598"><td class="memTemplParams" colspan="2">template&lt;typename Type &gt; </td></tr>
<tr class="memitem:ae057a7c5042a3cacb444199a2b6b7598"><td class="memTemplItemLeft" align="right" valign="top">std::string&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../da/d53/a00265.php#ae057a7c5042a3cacb444199a2b6b7598">mcd::tos</a> (const Type &amp;in)</td></tr>
<tr class="memdesc:ae057a7c5042a3cacb444199a2b6b7598"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert <em>in</em> in a string.  <a href="../../da/d53/a00265.php#ae057a7c5042a3cacb444199a2b6b7598">More...</a><br /></td></tr>
<tr class="separator:ae057a7c5042a3cacb444199a2b6b7598"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a476d57ae34f933a4192553496ec91208"><td class="memTemplParams" colspan="2">template&lt;typename V &gt; </td></tr>
<tr class="memitem:a476d57ae34f933a4192553496ec91208"><td class="memTemplItemLeft" align="right" valign="top">int&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../da/d53/a00265.php#a476d57ae34f933a4192553496ec91208">mcd::toi</a> (const V &amp;in)</td></tr>
<tr class="memdesc:a476d57ae34f933a4192553496ec91208"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert <em>in</em> variable in int.  <a href="../../da/d53/a00265.php#a476d57ae34f933a4192553496ec91208">More...</a><br /></td></tr>
<tr class="separator:a476d57ae34f933a4192553496ec91208"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a3c6193ba2e9669603892d2508cbc6668"><td class="memTemplParams" colspan="2">template&lt;typename V &gt; </td></tr>
<tr class="memitem:a3c6193ba2e9669603892d2508cbc6668"><td class="memTemplItemLeft" align="right" valign="top">double&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../da/d53/a00265.php#a3c6193ba2e9669603892d2508cbc6668">mcd::tod</a> (const V &amp;in)</td></tr>
<tr class="memdesc:a3c6193ba2e9669603892d2508cbc6668"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert <em>in</em> variable in double.  <a href="../../da/d53/a00265.php#a3c6193ba2e9669603892d2508cbc6668">More...</a><br /></td></tr>
<tr class="separator:a3c6193ba2e9669603892d2508cbc6668"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a6ed92c0cecb59861393802ac313a2b0f"><td class="memTemplParams" colspan="2">template&lt;typename V &gt; </td></tr>
<tr class="memitem:a6ed92c0cecb59861393802ac313a2b0f"><td class="memTemplItemLeft" align="right" valign="top">float&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../da/d53/a00265.php#a6ed92c0cecb59861393802ac313a2b0f">mcd::tof</a> (const V &amp;in)</td></tr>
<tr class="memdesc:a6ed92c0cecb59861393802ac313a2b0f"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert <em>in</em> variable in float.  <a href="../../da/d53/a00265.php#a6ed92c0cecb59861393802ac313a2b0f">More...</a><br /></td></tr>
<tr class="separator:a6ed92c0cecb59861393802ac313a2b0f"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a818831d2e74dbfa3be2150c38a9afa31"><td class="memTemplParams" colspan="2">template&lt;typename V &gt; </td></tr>
<tr class="memitem:a818831d2e74dbfa3be2150c38a9afa31"><td class="memTemplItemLeft" align="right" valign="top">unsigned int&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../da/d53/a00265.php#a818831d2e74dbfa3be2150c38a9afa31">mcd::tou</a> (const V &amp;in)</td></tr>
<tr class="memdesc:a818831d2e74dbfa3be2150c38a9afa31"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert <em>in</em> variable in unsigned int.  <a href="../../da/d53/a00265.php#a818831d2e74dbfa3be2150c38a9afa31">More...</a><br /></td></tr>
<tr class="separator:a818831d2e74dbfa3be2150c38a9afa31"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a21f9e69f4ccff705b65007a1ac7063ef"><td class="memTemplParams" colspan="2">template&lt;typename V &gt; </td></tr>
<tr class="memitem:a21f9e69f4ccff705b65007a1ac7063ef"><td class="memTemplItemLeft" align="right" valign="top">unsigned long long int&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../da/d53/a00265.php#a21f9e69f4ccff705b65007a1ac7063ef">mcd::tov</a> (const V &amp;in)</td></tr>
<tr class="memdesc:a21f9e69f4ccff705b65007a1ac7063ef"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert <em>in</em> variable in unsigned long long int.  <a href="../../da/d53/a00265.php#a21f9e69f4ccff705b65007a1ac7063ef">More...</a><br /></td></tr>
<tr class="separator:a21f9e69f4ccff705b65007a1ac7063ef"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a917e4be62e6930b138038ae16ebc7904"><td class="memTemplParams" colspan="2">template&lt;typename V &gt; </td></tr>
<tr class="memitem:a917e4be62e6930b138038ae16ebc7904"><td class="memTemplItemLeft" align="right" valign="top">size_t&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../da/d53/a00265.php#a917e4be62e6930b138038ae16ebc7904">mcd::tost</a> (const V &amp;in)</td></tr>
<tr class="memdesc:a917e4be62e6930b138038ae16ebc7904"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert <em>in</em> variable in size_t.  <a href="../../da/d53/a00265.php#a917e4be62e6930b138038ae16ebc7904">More...</a><br /></td></tr>
<tr class="separator:a917e4be62e6930b138038ae16ebc7904"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:adfea444e2cb8e428b7c9604d77076ad1"><td class="memTemplParams" colspan="2">template&lt;typename V &gt; </td></tr>
<tr class="memitem:adfea444e2cb8e428b7c9604d77076ad1"><td class="memTemplItemLeft" align="right" valign="top">short&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../da/d53/a00265.php#adfea444e2cb8e428b7c9604d77076ad1">mcd::tosh</a> (const V &amp;in)</td></tr>
<tr class="memdesc:adfea444e2cb8e428b7c9604d77076ad1"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert <em>in</em> variable in short.  <a href="../../da/d53/a00265.php#adfea444e2cb8e428b7c9604d77076ad1">More...</a><br /></td></tr>
<tr class="separator:adfea444e2cb8e428b7c9604d77076ad1"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a7b322c51a82629ed6b2325f2f938eae3"><td class="memTemplParams" colspan="2">template&lt;typename V &gt; </td></tr>
<tr class="memitem:a7b322c51a82629ed6b2325f2f938eae3"><td class="memTemplItemLeft" align="right" valign="top">bool&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../da/d53/a00265.php#a7b322c51a82629ed6b2325f2f938eae3">mcd::tob</a> (const V &amp;in)</td></tr>
<tr class="memdesc:a7b322c51a82629ed6b2325f2f938eae3"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert <em>in</em> variable in boolean.  <a href="../../da/d53/a00265.php#a7b322c51a82629ed6b2325f2f938eae3">More...</a><br /></td></tr>
<tr class="separator:a7b322c51a82629ed6b2325f2f938eae3"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a71458bb6c1d0939bd975cdf25e864599"><td class="memTemplParams" colspan="2">template&lt;typename V &gt; </td></tr>
<tr class="memitem:a71458bb6c1d0939bd975cdf25e864599"><td class="memTemplItemLeft" align="right" valign="top">std::chrono::milliseconds&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../da/d53/a00265.php#a71458bb6c1d0939bd975cdf25e864599">mcd::tomilli</a> (const V &amp;in)</td></tr>
<tr class="memdesc:a71458bb6c1d0939bd975cdf25e864599"><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert <em>in</em> variable in std::chrono::milliseconds.  <a href="../../da/d53/a00265.php#a71458bb6c1d0939bd975cdf25e864599">More...</a><br /></td></tr>
<tr class="separator:a71458bb6c1d0939bd975cdf25e864599"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><dl class="section author"><dt>Author</dt><dd>Mathias CABIOCH-DELALANDE </dd></dl>
<dl class="section date"><dt>Date</dt><dd>Last modification : October, 02 2019 </dd></dl>
</div></div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_1788504ec76a4dda5464562bc560d0b5.php">C++Tests</a></li><li class="navelem"><a class="el" href="../../dir_2e741febc7df97747a68d36c1b3be5f0.php">C++</a></li><li class="navelem"><a class="el" href="../../dir_220287e732b97f08f66e5f221c69df74.php">inc</a></li><li class="navelem"><a class="el" href="../../dir_75b0389167f46f79a101ef8c4434cec4.php">C++</a></li><li class="navelem"><a class="el" href="../../db/db6/a00074.php">convert.hpp</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
