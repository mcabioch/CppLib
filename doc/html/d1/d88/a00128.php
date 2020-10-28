<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.20"/>
		<title>C++: Logger.hpp File Reference</title>
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
$(document).ready(function(){initNavTree('d1/d88/a00128.php','../../'); initResizable(); });
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
<a href="#nested-classes">Classes</a> &#124;
<a href="#namespaces">Namespaces</a> &#124;
<a href="#define-members">Macros</a> &#124;
<a href="#var-members">Variables</a>  </div>
  <div class="headertitle">
<div class="title">Logger.hpp File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><code>#include &quot;<a class="el" href="../../d6/d2d/a00047.php">C++lib.hpp</a>&quot;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for Logger.hpp:</div>
<div class="dyncontent">
<div class="center"><img src="../../d9/d47/a00129.png" border="0" usemap="#aLogger_8hpp" alt=""/></div>
<map name="Logger_8hpp" id="Logger_8hpp">
<area shape="rect" title=" " alt="" coords="977,5,1062,32"/>
<area shape="rect" href="../../d6/d2d/a00047.php" title=" " alt="" coords="976,80,1063,107"/>
<area shape="rect" href="../../d4/d51/a00017.php" title=" " alt="" coords="839,155,925,181"/>
<area shape="rect" href="../../df/dc8/a00122.php" title=" " alt="" coords="982,155,1057,181"/>
<area shape="rect" href="../../d1/d09/a00077.php" title=" " alt="" coords="1111,229,1208,256"/>
<area shape="rect" href="../../db/db2/a00020.php" title=" " alt="" coords="769,229,929,256"/>
<area shape="rect" href="../../da/d2a/a00086.php" title=" " alt="" coords="975,304,1064,331"/>
<area shape="rect" href="../../d2/dc8/a00242.php" title=" " alt="" coords="728,379,807,405"/>
<area shape="rect" href="../../d4/dee/a00008.php" title=" " alt="" coords="831,379,906,405"/>
<area shape="rect" href="../../d3/d8b/a00059.php" title=" " alt="" coords="851,528,932,555"/>
<area shape="rect" href="../../da/d24/a00068.php" title=" " alt="" coords="877,603,1004,629"/>
<area shape="rect" href="../../d2/d1f/a00083.php" title=" " alt="" coords="993,677,1097,704"/>
<area shape="rect" href="../../df/d6a/a00119.php" title=" " alt="" coords="1082,453,1181,480"/>
<area shape="rect" href="../../d5/db1/a00140.php" title=" " alt="" coords="1203,379,1275,405"/>
<area shape="rect" href="../../d3/de5/a00209.php" title=" " alt="" coords="1410,528,1525,555"/>
<area shape="rect" href="../../d6/de1/a00233.php" title=" " alt="" coords="729,453,840,480"/>
<area shape="rect" href="../../d4/d3e/a00116.php" title=" " alt="" coords="1013,827,1108,853"/>
<area shape="rect" href="../../db/ddf/a00164.php" title=" " alt="" coords="533,901,655,928"/>
<area shape="rect" href="../../dc/de6/a00167.php" title=" " alt="" coords="680,901,815,928"/>
<area shape="rect" href="../../d0/d27/a00239.php" title=" " alt="" coords="839,901,968,928"/>
<area shape="rect" title=" " alt="" coords="993,901,1054,928"/>
<area shape="rect" title=" " alt="" coords="1079,901,1117,928"/>
<area shape="rect" title=" " alt="" coords="1141,901,1204,928"/>
<area shape="rect" title=" " alt="" coords="1229,901,1282,928"/>
<area shape="rect" title=" " alt="" coords="1306,901,1357,928"/>
<area shape="rect" href="../../d5/ddf/a00224.php" title="Used to replace strptime function when compiling for Windows." alt="" coords="817,976,897,1003"/>
<area shape="rect" title=" " alt="" coords="921,976,976,1003"/>
<area shape="rect" href="../../dd/d52/a00221.php" title=" " alt="" coords="802,1051,911,1077"/>
<area shape="rect" title=" " alt="" coords="686,1125,742,1152"/>
<area shape="rect" href="../../dd/dc1/a00212.php" title=" " alt="" coords="766,1125,843,1152"/>
<area shape="rect" href="../../d2/df5/a00137.php" title=" " alt="" coords="867,1125,950,1152"/>
<area shape="rect" href="../../d9/d01/a00227.php" title=" " alt="" coords="974,1125,1065,1152"/>
<area shape="rect" title=" " alt="" coords="772,1200,837,1227"/>
<area shape="rect" href="../../d9/d77/a00095.php" title=" " alt="" coords="979,1200,1059,1227"/>
<area shape="rect" href="../../de/de1/a00065.php" title=" " alt="" coords="920,1275,1012,1301"/>
<area shape="rect" href="../../d4/d3a/a00101.php" title=" " alt="" coords="1036,1275,1107,1301"/>
<area shape="rect" href="../../db/db6/a00074.php" title=" " alt="" coords="922,1349,1013,1376"/>
<area shape="rect" title=" " alt="" coords="875,1424,958,1451"/>
<area shape="rect" href="../../da/d45/a00011.php" title=" " alt="" coords="982,1424,1057,1451"/>
<area shape="rect" href="../../dc/dee/a00053.php" title=" " alt="" coords="869,1499,951,1525"/>
<area shape="rect" href="../../d1/d44/a00098.php" title=" " alt="" coords="1087,1499,1189,1525"/>
<area shape="rect" href="../../d3/dd5/a00215.php" title=" " alt="" coords="976,1499,1063,1525"/>
<area shape="rect" href="../../df/d03/a00062.php" title=" " alt="" coords="681,1573,771,1600"/>
<area shape="rect" href="../../d7/d03/a00254.php" title=" " alt="" coords="978,1573,1061,1600"/>
<area shape="rect" title=" " alt="" coords="798,1573,859,1600"/>
<area shape="rect" title=" " alt="" coords="883,1573,953,1600"/>
<area shape="rect" href="../../d9/db6/a00146.php" title=" " alt="" coords="679,1648,762,1675"/>
<area shape="rect" href="../../d0/dc2/a00104.php" title=" " alt="" coords="663,1723,757,1749"/>
<area shape="rect" href="../../d7/dce/a00143.php" title=" " alt="" coords="585,1797,667,1824"/>
<area shape="rect" title=" " alt="" coords="691,1797,758,1824"/>
<area shape="rect" href="../../d8/d41/a00038.php" title=" " alt="" coords="627,1872,710,1899"/>
<area shape="rect" href="../../de/d79/a00203.php" title=" " alt="" coords="706,1947,799,1973"/>
<area shape="rect" href="../../dd/dd7/a00248.php" title=" " alt="" coords="620,2021,699,2048"/>
<area shape="rect" title=" " alt="" coords="723,2021,782,2048"/>
<area shape="rect" title=" " alt="" coords="806,2021,865,2048"/>
<area shape="rect" href="../../d3/d52/a00023.php" title=" " alt="" coords="383,2096,450,2123"/>
<area shape="rect" href="../../d5/df1/a00206.php" title=" " alt="" coords="488,2096,599,2123"/>
<area shape="rect" href="../../d6/d22/a00245.php" title=" " alt="" coords="623,2096,696,2123"/>
<area shape="rect" href="../../d3/d1a/a00251.php" title=" " alt="" coords="721,2096,854,2123"/>
<area shape="rect" title=" " alt="" coords="879,2096,947,2123"/>
<area shape="rect" href="../../d7/d06/a00131.php" title=" " alt="" coords="617,2171,729,2197"/>
<area shape="rect" href="../../d6/d5b/a00026.php" title=" " alt="" coords="5,2171,148,2197"/>
<area shape="rect" href="../../d5/d16/a00029.php" title=" " alt="" coords="172,2171,312,2197"/>
<area shape="rect" href="../../dc/d87/a00032.php" title=" " alt="" coords="337,2171,446,2197"/>
<area shape="rect" href="../../d4/d8c/a00035.php" title=" " alt="" coords="470,2171,593,2197"/>
<area shape="rect" href="../../d7/d3f/a00173.php" title=" " alt="" coords="613,2245,733,2272"/>
<area shape="rect" title=" " alt="" coords="581,2320,649,2347"/>
<area shape="rect" href="../../de/d76/a00134.php" title=" " alt="" coords="673,2320,789,2347"/>
<area shape="rect" title=" " alt="" coords="245,2395,319,2421"/>
<area shape="rect" title=" " alt="" coords="343,2395,402,2421"/>
<area shape="rect" title=" " alt="" coords="427,2395,505,2421"/>
<area shape="rect" title=" " alt="" coords="530,2395,602,2421"/>
<area shape="rect" title=" " alt="" coords="627,2395,673,2421"/>
<area shape="rect" title=" " alt="" coords="697,2395,765,2421"/>
<area shape="rect" title=" " alt="" coords="789,2395,844,2421"/>
<area shape="rect" title=" " alt="" coords="869,2395,938,2421"/>
<area shape="rect" title=" " alt="" coords="963,2395,1017,2421"/>
<area shape="rect" title=" " alt="" coords="1042,2395,1095,2421"/>
<area shape="rect" title=" " alt="" coords="1119,2395,1178,2421"/>
<area shape="rect" href="../../d2/de7/a00014.php" title=" " alt="" coords="1005,1648,1137,1675"/>
<area shape="rect" title=" " alt="" coords="833,1723,944,1749"/>
<area shape="rect" title=" " alt="" coords="969,1723,1073,1749"/>
<area shape="rect" title=" " alt="" coords="1097,1723,1147,1749"/>
<area shape="rect" title=" " alt="" coords="1172,1723,1229,1749"/>
<area shape="rect" title=" " alt="" coords="1254,1723,1294,1749"/>
<area shape="rect" title=" " alt="" coords="1319,1723,1373,1749"/>
<area shape="rect" title=" " alt="" coords="1092,1573,1171,1600"/>
<area shape="rect" title=" " alt="" coords="1195,1573,1273,1600"/>
<area shape="rect" title=" " alt="" coords="1038,1349,1105,1376"/>
<area shape="rect" href="../../da/dec/a00080.php" title=" " alt="" coords="923,752,998,779"/>
<area shape="rect" href="../../d7/d40/a00236.php" title=" " alt="" coords="1023,752,1099,779"/>
<area shape="rect" href="../../d7/d25/a00182.php" title=" " alt="" coords="1205,453,1380,480"/>
<area shape="rect" href="../../de/df3/a00185.php" title=" " alt="" coords="1214,528,1371,555"/>
<area shape="rect" href="../../db/dd9/a00179.php" title=" " alt="" coords="1237,603,1349,629"/>
<area shape="rect" href="../../d9/dd0/a00191.php" title=" " alt="" coords="1213,677,1373,704"/>
<area shape="rect" href="../../d5/de9/a00176.php" title=" " alt="" coords="1174,752,1249,779"/>
<area shape="rect" href="../../da/d15/a00188.php" title=" " alt="" coords="1273,752,1443,779"/>
<area shape="rect" href="../../dc/dfe/a00125.php" title=" " alt="" coords="953,229,1086,256"/>
</map>
</div>
</div><div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="../../d6/db3/a00130.png" border="0" usemap="#aLogger_8hppdep" alt=""/></div>
<map name="Logger_8hppdep" id="Logger_8hppdep">
<area shape="rect" title=" " alt="" coords="304,5,389,32"/>
<area shape="rect" href="../../dd/d32/a00041.php" title=" " alt="" coords="310,80,383,107"/>
<area shape="rect" href="../../d0/d89/a00071.php" title=" " alt="" coords="243,155,357,181"/>
<area shape="rect" href="../../d3/d00/a00113.php" title=" " alt="" coords="341,528,437,555"/>
<area shape="rect" href="../../d1/dc1/a00092.php" title=" " alt="" coords="134,229,213,256"/>
<area shape="rect" href="../../d5/dcb/a00170.php" title=" " alt="" coords="265,229,351,256"/>
<area shape="rect" href="../../d4/d81/a00110.php" title=" " alt="" coords="32,304,120,331"/>
<area shape="rect" href="../../d9/d39/a00257.php" title=" " alt="" coords="128,379,219,405"/>
<area shape="rect" href="../../d7/d46/a00002.php" title=" " alt="" coords="6,379,93,405"/>
<area shape="rect" href="../../dd/dad/a00005.php" title=" " alt="" coords="5,453,72,480"/>
<area shape="rect" href="../../db/dab/a00089.php" title=" " alt="" coords="223,528,313,555"/>
<area shape="rect" href="../../d3/db1/a00200.php" title=" " alt="" coords="194,603,345,629"/>
<area shape="rect" href="../../de/db1/a00197.php" title=" " alt="" coords="284,677,367,704"/>
<area shape="rect" href="../../d5/df9/a00044.php" title=" " alt="" coords="267,752,384,779"/>
<area shape="rect" href="../../d6/d7d/a00161.php" title=" " alt="" coords="97,453,205,480"/>
<area shape="rect" href="../../dc/d57/a00194.php" title=" " alt="" coords="229,453,307,480"/>
<area shape="rect" href="../../dc/d9a/a00218.php" title=" " alt="" coords="271,304,353,331"/>
</map>
</div>
</div><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Classes</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../df/db8/a01317.php">mcd::Logger</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A class to log some messages.  <a href="../../df/db8/a01317.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="namespaces"></a>
Namespaces</h2></td></tr>
<tr class="memitem:da/d53/a00265"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../da/d53/a00265.php">mcd</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="define-members"></a>
Macros</h2></td></tr>
<tr class="memitem:ae48c93288111b5c36c6e44117992a8f3"><td class="memItemLeft" align="right" valign="top">#define&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d1/d88/a00128.php#ae48c93288111b5c36c6e44117992a8f3">logs</a>(LEVEL, ...)&#160;&#160;&#160;logger.log(LEVEL, __LINE__, __FILE__, __VA_ARGS__)</td></tr>
<tr class="separator:ae48c93288111b5c36c6e44117992a8f3"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:af7722e7b54e502ab2abf9327c2b80168"><td class="memItemLeft" align="right" valign="top">#define&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d1/d88/a00128.php#af7722e7b54e502ab2abf9327c2b80168">logReset</a>()&#160;&#160;&#160;logger.reset(__FILE__, __LINE__)</td></tr>
<tr class="separator:af7722e7b54e502ab2abf9327c2b80168"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a46d5e25a59c0c1ab0d7e8fc3812454a0"><td class="memItemLeft" align="right" valign="top">#define&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d1/d88/a00128.php#a46d5e25a59c0c1ab0d7e8fc3812454a0">debug_log</a>()&#160;&#160;&#160;<a class="el" href="../../d1/d88/a00128.php#ae48c93288111b5c36c6e44117992a8f3">logs</a>(<a class="el" href="../../df/db8/a01317.php#a25d94050e8e7f91c7e1f02ddc2af8e95a8a3e3b4dccd41544fac18f0f339ba68e">mcd::Logger::Debug</a>)</td></tr>
<tr class="separator:a46d5e25a59c0c1ab0d7e8fc3812454a0"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a4e44394dedcf599237302e670d0fbd30"><td class="memItemLeft" align="right" valign="top">#define&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d1/d88/a00128.php#a4e44394dedcf599237302e670d0fbd30">debug_logs</a>(...)&#160;&#160;&#160;<a class="el" href="../../d1/d88/a00128.php#ae48c93288111b5c36c6e44117992a8f3">logs</a>(<a class="el" href="../../df/db8/a01317.php#a25d94050e8e7f91c7e1f02ddc2af8e95a8a3e3b4dccd41544fac18f0f339ba68e">mcd::Logger::Debug</a>, __VA_ARGS__)</td></tr>
<tr class="separator:a4e44394dedcf599237302e670d0fbd30"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="var-members"></a>
Variables</h2></td></tr>
<tr class="memitem:a46f063faccea2fdafb8e5f33c2ccbc50"><td class="memItemLeft" align="right" valign="top">Logger&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../da/d53/a00265.php#a46f063faccea2fdafb8e5f33c2ccbc50">mcd::logger</a></td></tr>
<tr class="separator:a46f063faccea2fdafb8e5f33c2ccbc50"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><dl class="section author"><dt>Author</dt><dd>Mathias CABIOCH-DELALANDE </dd></dl>
<dl class="section date"><dt>Date</dt><dd>Created : Saturday November, 09 2019 17:01:15 </dd>
<dd>
Last modification : October, 04 2020 </dd></dl>
</div><h2 class="groupheader">Macro Definition Documentation</h2>
<a id="a46d5e25a59c0c1ab0d7e8fc3812454a0"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a46d5e25a59c0c1ab0d7e8fc3812454a0">&#9670;&nbsp;</a></span>debug_log</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">#define debug_log</td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td>&#160;&#160;&#160;<a class="el" href="../../d1/d88/a00128.php#ae48c93288111b5c36c6e44117992a8f3">logs</a>(<a class="el" href="../../df/db8/a01317.php#a25d94050e8e7f91c7e1f02ddc2af8e95a8a3e3b4dccd41544fac18f0f339ba68e">mcd::Logger::Debug</a>)</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a id="a4e44394dedcf599237302e670d0fbd30"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a4e44394dedcf599237302e670d0fbd30">&#9670;&nbsp;</a></span>debug_logs</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">#define debug_logs</td>
          <td>(</td>
          <td class="paramtype">&#160;</td>
          <td class="paramname"><em>...</em></td><td>)</td>
          <td>&#160;&#160;&#160;<a class="el" href="../../d1/d88/a00128.php#ae48c93288111b5c36c6e44117992a8f3">logs</a>(<a class="el" href="../../df/db8/a01317.php#a25d94050e8e7f91c7e1f02ddc2af8e95a8a3e3b4dccd41544fac18f0f339ba68e">mcd::Logger::Debug</a>, __VA_ARGS__)</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a id="af7722e7b54e502ab2abf9327c2b80168"></a>
<h2 class="memtitle"><span class="permalink"><a href="#af7722e7b54e502ab2abf9327c2b80168">&#9670;&nbsp;</a></span>logReset</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">#define logReset</td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td>&#160;&#160;&#160;logger.reset(__FILE__, __LINE__)</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a id="ae48c93288111b5c36c6e44117992a8f3"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ae48c93288111b5c36c6e44117992a8f3">&#9670;&nbsp;</a></span>logs</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">#define logs</td>
          <td>(</td>
          <td class="paramtype">&#160;</td>
          <td class="paramname">LEVEL, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">&#160;</td>
          <td class="paramname"><em>...</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td>&#160;&#160;&#160;logger.log(LEVEL, __LINE__, __FILE__, __VA_ARGS__)</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
</div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_1788504ec76a4dda5464562bc560d0b5.php">C++Tests</a></li><li class="navelem"><a class="el" href="../../dir_2e741febc7df97747a68d36c1b3be5f0.php">C++</a></li><li class="navelem"><a class="el" href="../../dir_220287e732b97f08f66e5f221c69df74.php">inc</a></li><li class="navelem"><a class="el" href="../../dir_75b0389167f46f79a101ef8c4434cec4.php">C++</a></li><li class="navelem"><a class="el" href="../../d1/d88/a00128.php">Logger.hpp</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
