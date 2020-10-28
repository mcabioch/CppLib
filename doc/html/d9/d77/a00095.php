<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.20"/>
		<title>C++: errors.hpp File Reference</title>
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
$(document).ready(function(){initNavTree('d9/d77/a00095.php','../../'); initResizable(); });
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
<a href="#define-members">Macros</a> &#124;
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<div class="title">errors.hpp File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><code>#include &quot;<a class="el" href="../../de/de1/a00065.php">console.hpp</a>&quot;</code><br />
<code>#include &quot;<a class="el" href="../../d4/d3a/a00101.php">files.hpp</a>&quot;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for errors.hpp:</div>
<div class="dyncontent">
<div class="center"><img src="../../d9/df8/a00096.png" border="0" usemap="#aerrors_8hpp" alt=""/></div>
<map name="errors_8hpp" id="errors_8hpp">
<area shape="rect" title=" " alt="" coords="1046,5,1126,32"/>
<area shape="rect" href="../../de/de1/a00065.php" title=" " alt="" coords="988,80,1080,107"/>
<area shape="rect" href="../../d4/d3a/a00101.php" title=" " alt="" coords="1104,80,1175,107"/>
<area shape="rect" href="../../db/db6/a00074.php" title=" " alt="" coords="990,155,1081,181"/>
<area shape="rect" title=" " alt="" coords="943,229,1026,256"/>
<area shape="rect" href="../../da/d45/a00011.php" title=" " alt="" coords="1050,229,1125,256"/>
<area shape="rect" href="../../dc/dee/a00053.php" title=" " alt="" coords="937,304,1019,331"/>
<area shape="rect" href="../../d1/d44/a00098.php" title=" " alt="" coords="1155,304,1257,331"/>
<area shape="rect" href="../../d3/dd5/a00215.php" title=" " alt="" coords="1044,304,1131,331"/>
<area shape="rect" href="../../df/d03/a00062.php" title=" " alt="" coords="745,379,835,405"/>
<area shape="rect" href="../../d7/d03/a00254.php" title=" " alt="" coords="1046,379,1129,405"/>
<area shape="rect" title=" " alt="" coords="865,379,926,405"/>
<area shape="rect" title=" " alt="" coords="950,379,1019,405"/>
<area shape="rect" href="../../d9/db6/a00146.php" title=" " alt="" coords="738,453,821,480"/>
<area shape="rect" href="../../d0/dc2/a00104.php" title=" " alt="" coords="705,528,800,555"/>
<area shape="rect" href="../../d7/dce/a00143.php" title=" " alt="" coords="627,603,710,629"/>
<area shape="rect" title=" " alt="" coords="734,603,801,629"/>
<area shape="rect" href="../../d8/d41/a00038.php" title=" " alt="" coords="673,677,755,704"/>
<area shape="rect" href="../../de/d79/a00203.php" title=" " alt="" coords="706,752,799,779"/>
<area shape="rect" href="../../dd/dd7/a00248.php" title=" " alt="" coords="620,827,699,853"/>
<area shape="rect" title=" " alt="" coords="723,827,782,853"/>
<area shape="rect" title=" " alt="" coords="806,827,865,853"/>
<area shape="rect" href="../../d3/d52/a00023.php" title=" " alt="" coords="383,901,450,928"/>
<area shape="rect" href="../../d5/df1/a00206.php" title=" " alt="" coords="488,901,599,928"/>
<area shape="rect" href="../../d6/d22/a00245.php" title=" " alt="" coords="623,901,696,928"/>
<area shape="rect" href="../../d3/d1a/a00251.php" title=" " alt="" coords="721,901,854,928"/>
<area shape="rect" title=" " alt="" coords="879,901,947,928"/>
<area shape="rect" href="../../d7/d06/a00131.php" title=" " alt="" coords="617,976,729,1003"/>
<area shape="rect" href="../../d6/d5b/a00026.php" title=" " alt="" coords="5,976,148,1003"/>
<area shape="rect" href="../../d5/d16/a00029.php" title=" " alt="" coords="172,976,312,1003"/>
<area shape="rect" href="../../dc/d87/a00032.php" title=" " alt="" coords="337,976,446,1003"/>
<area shape="rect" href="../../d4/d8c/a00035.php" title=" " alt="" coords="470,976,593,1003"/>
<area shape="rect" href="../../d7/d3f/a00173.php" title=" " alt="" coords="613,1051,733,1077"/>
<area shape="rect" title=" " alt="" coords="581,1125,649,1152"/>
<area shape="rect" href="../../de/d76/a00134.php" title=" " alt="" coords="673,1125,789,1152"/>
<area shape="rect" title=" " alt="" coords="245,1200,319,1227"/>
<area shape="rect" title=" " alt="" coords="343,1200,402,1227"/>
<area shape="rect" title=" " alt="" coords="427,1200,505,1227"/>
<area shape="rect" title=" " alt="" coords="530,1200,602,1227"/>
<area shape="rect" title=" " alt="" coords="627,1200,673,1227"/>
<area shape="rect" title=" " alt="" coords="697,1200,765,1227"/>
<area shape="rect" title=" " alt="" coords="789,1200,844,1227"/>
<area shape="rect" title=" " alt="" coords="869,1200,938,1227"/>
<area shape="rect" title=" " alt="" coords="963,1200,1017,1227"/>
<area shape="rect" title=" " alt="" coords="1042,1200,1095,1227"/>
<area shape="rect" title=" " alt="" coords="1119,1200,1178,1227"/>
<area shape="rect" href="../../d2/de7/a00014.php" title=" " alt="" coords="1048,453,1180,480"/>
<area shape="rect" title=" " alt="" coords="876,528,987,555"/>
<area shape="rect" title=" " alt="" coords="1011,528,1115,555"/>
<area shape="rect" title=" " alt="" coords="1139,528,1190,555"/>
<area shape="rect" title=" " alt="" coords="1215,528,1272,555"/>
<area shape="rect" title=" " alt="" coords="1297,528,1337,555"/>
<area shape="rect" title=" " alt="" coords="1361,528,1416,555"/>
<area shape="rect" title=" " alt="" coords="1160,379,1239,405"/>
<area shape="rect" title=" " alt="" coords="1263,379,1341,405"/>
<area shape="rect" title=" " alt="" coords="1106,155,1173,181"/>
</map>
</div>
</div><div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="../../d1/d84/a00097.png" border="0" usemap="#aerrors_8hppdep" alt=""/></div>
<map name="errors_8hppdep" id="errors_8hppdep">
<area shape="rect" title=" " alt="" coords="335,5,415,32"/>
<area shape="rect" href="../../d9/d01/a00227.php" title=" " alt="" coords="330,80,421,107"/>
<area shape="rect" href="../../dd/d52/a00221.php" title=" " alt="" coords="336,155,415,181"/>
<area shape="rect" href="../../d5/ddf/a00224.php" title="Used to replace strptime function when compiling for Windows." alt="" coords="335,229,415,256"/>
<area shape="rect" href="../../d0/d27/a00239.php" title=" " alt="" coords="311,304,440,331"/>
<area shape="rect" href="../../d4/d3e/a00116.php" title=" " alt="" coords="328,379,423,405"/>
<area shape="rect" href="../../d3/d8b/a00059.php" title=" " alt="" coords="5,603,87,629"/>
<area shape="rect" href="../../da/d24/a00068.php" title=" " alt="" coords="116,677,243,704"/>
<area shape="rect" href="../../da/dec/a00080.php" title=" " alt="" coords="162,453,237,480"/>
<area shape="rect" href="../../df/d6a/a00119.php" title=" " alt="" coords="318,528,417,555"/>
<area shape="rect" href="../../d5/de9/a00176.php" title=" " alt="" coords="413,453,487,480"/>
<area shape="rect" href="../../da/d15/a00188.php" title=" " alt="" coords="511,453,682,480"/>
<area shape="rect" href="../../d3/de5/a00209.php" title=" " alt="" coords="610,603,725,629"/>
<area shape="rect" href="../../d6/de1/a00233.php" title=" " alt="" coords="715,752,825,779"/>
<area shape="rect" href="../../d7/d40/a00236.php" title=" " alt="" coords="261,453,337,480"/>
<area shape="rect" href="../../da/d2a/a00086.php" title=" " alt="" coords="369,901,459,928"/>
<area shape="rect" href="../../db/db2/a00020.php" title=" " alt="" coords="217,976,377,1003"/>
<area shape="rect" href="../../d1/d09/a00077.php" title=" " alt="" coords="364,1051,461,1077"/>
<area shape="rect" href="../../dc/dfe/a00125.php" title=" " alt="" coords="454,976,587,1003"/>
<area shape="rect" href="../../d4/d51/a00017.php" title=" " alt="" coords="254,1051,339,1077"/>
<area shape="rect" href="../../d6/d2d/a00047.php" title=" " alt="" coords="369,1125,456,1152"/>
<area shape="rect" href="../../df/d98/a00107.php" title=" " alt="" coords="271,1200,349,1227"/>
<area shape="rect" href="../../d1/d88/a00128.php" title=" " alt="" coords="370,1275,455,1301"/>
<area shape="rect" href="../../d1/da8/a00230.php" title=" " alt="" coords="453,1349,525,1376"/>
<area shape="rect" href="../../d9/d2e/a00056.php" title=" " alt="" coords="221,1275,346,1301"/>
<area shape="rect" href="../../d5/de0/a00050.php" title=" " alt="" coords="276,1349,347,1376"/>
<area shape="rect" href="../../dd/d32/a00041.php" title=" " alt="" coords="376,1424,449,1451"/>
<area shape="rect" href="../../d0/d89/a00071.php" title=" " alt="" coords="309,1499,423,1525"/>
<area shape="rect" href="../../d3/d00/a00113.php" title=" " alt="" coords="407,1872,503,1899"/>
<area shape="rect" href="../../d1/dc1/a00092.php" title=" " alt="" coords="215,1573,293,1600"/>
<area shape="rect" href="../../d5/dcb/a00170.php" title=" " alt="" coords="331,1573,417,1600"/>
<area shape="rect" href="../../d4/d81/a00110.php" title=" " alt="" coords="99,1648,187,1675"/>
<area shape="rect" href="../../d9/d39/a00257.php" title=" " alt="" coords="209,1723,299,1749"/>
<area shape="rect" href="../../d7/d46/a00002.php" title=" " alt="" coords="69,1723,156,1749"/>
<area shape="rect" href="../../dd/dad/a00005.php" title=" " alt="" coords="71,1797,138,1824"/>
<area shape="rect" href="../../db/dab/a00089.php" title=" " alt="" coords="289,1872,379,1899"/>
<area shape="rect" href="../../d3/db1/a00200.php" title=" " alt="" coords="260,1947,411,1973"/>
<area shape="rect" href="../../de/db1/a00197.php" title=" " alt="" coords="350,2021,433,2048"/>
<area shape="rect" href="../../d5/df9/a00044.php" title=" " alt="" coords="333,2096,450,2123"/>
<area shape="rect" href="../../d6/d7d/a00161.php" title=" " alt="" coords="163,1797,271,1824"/>
<area shape="rect" href="../../dc/d57/a00194.php" title=" " alt="" coords="295,1797,373,1824"/>
<area shape="rect" href="../../dc/d9a/a00218.php" title=" " alt="" coords="341,1648,423,1675"/>
<area shape="rect" href="../../df/dc8/a00122.php" title=" " alt="" coords="486,1051,561,1077"/>
<area shape="rect" href="../../d2/d1f/a00083.php" title=" " alt="" coords="190,528,294,555"/>
<area shape="rect" href="../../d9/dd0/a00191.php" title=" " alt="" coords="441,528,601,555"/>
<area shape="rect" href="../../db/dd9/a00179.php" title=" " alt="" coords="445,603,557,629"/>
<area shape="rect" href="../../de/df3/a00185.php" title=" " alt="" coords="402,677,559,704"/>
<area shape="rect" href="../../d7/d25/a00182.php" title=" " alt="" coords="389,752,564,779"/>
<area shape="rect" href="../../d5/db1/a00140.php" title=" " alt="" coords="415,827,487,853"/>
<area shape="rect" href="../../d4/dee/a00008.php" title=" " alt="" coords="639,827,714,853"/>
<area shape="rect" href="../../d2/dc8/a00242.php" title=" " alt="" coords="739,827,817,853"/>
</map>
</div>
</div><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="namespaces"></a>
Namespaces</h2></td></tr>
<tr class="memitem:da/d53/a00265"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../da/d53/a00265.php">mcd</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="define-members"></a>
Macros</h2></td></tr>
<tr class="memitem:a08ee21f84a6b44ca59d7f045b55d6bfc"><td class="memItemLeft" align="right" valign="top">#define&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d9/d77/a00095.php#a08ee21f84a6b44ca59d7f045b55d6bfc">line_number</a>&#160;&#160;&#160;__LINE__</td></tr>
<tr class="memdesc:a08ee21f84a6b44ca59d7f045b55d6bfc"><td class="mdescLeft">&#160;</td><td class="mdescRight">Define to do an alias of <b>LINE</b>  <a href="../../d9/d77/a00095.php#a08ee21f84a6b44ca59d7f045b55d6bfc">More...</a><br /></td></tr>
<tr class="separator:a08ee21f84a6b44ca59d7f045b55d6bfc"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a6743e67ef3323372193a9936858a6fb8"><td class="memItemLeft" align="right" valign="top">#define&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d9/d77/a00095.php#a6743e67ef3323372193a9936858a6fb8">debug_dlog</a>()&#160;&#160;&#160;<a class="el" href="../../d9/d77/a00095.php#a33a5e22684c459c3d752ddee8f5e0915">debug_ilog</a>()</td></tr>
<tr class="separator:a6743e67ef3323372193a9936858a6fb8"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a33a5e22684c459c3d752ddee8f5e0915"><td class="memItemLeft" align="right" valign="top">#define&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d9/d77/a00095.php#a33a5e22684c459c3d752ddee8f5e0915">debug_ilog</a>()&#160;&#160;&#160;info_log(<a class="el" href="../../d9/d77/a00095.php#a08ee21f84a6b44ca59d7f045b55d6bfc">line_number</a>, __FILE__)</td></tr>
<tr class="separator:a33a5e22684c459c3d752ddee8f5e0915"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:abfef935e08c6c7f3d9247920b01659b1"><td class="memItemLeft" align="right" valign="top">#define&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d9/d77/a00095.php#abfef935e08c6c7f3d9247920b01659b1">debug_elog</a>()&#160;&#160;&#160;error_log(<a class="el" href="../../d9/d77/a00095.php#a08ee21f84a6b44ca59d7f045b55d6bfc">line_number</a>, __FILE__)</td></tr>
<tr class="separator:abfef935e08c6c7f3d9247920b01659b1"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:acaeb75ef78e20ba74be61d159e670373"><td class="memItemLeft" align="right" valign="top">#define&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d9/d77/a00095.php#acaeb75ef78e20ba74be61d159e670373">debug_wlog</a>()&#160;&#160;&#160;warning_log(<a class="el" href="../../d9/d77/a00095.php#a08ee21f84a6b44ca59d7f045b55d6bfc">line_number</a>, __FILE__)</td></tr>
<tr class="separator:acaeb75ef78e20ba74be61d159e670373"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a54252dbab5b5524cae2163d7c4bbf456"><td class="memItemLeft" align="right" valign="top">#define&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d9/d77/a00095.php#a54252dbab5b5524cae2163d7c4bbf456">debug_dlogs</a>(...)&#160;&#160;&#160;<a class="el" href="../../d9/d77/a00095.php#a03901e920751bab486efba87b39f2707">debug_ilogs</a>(__VA_ARGS__)</td></tr>
<tr class="separator:a54252dbab5b5524cae2163d7c4bbf456"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a03901e920751bab486efba87b39f2707"><td class="memItemLeft" align="right" valign="top">#define&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d9/d77/a00095.php#a03901e920751bab486efba87b39f2707">debug_ilogs</a>(...)&#160;&#160;&#160;info_log(<a class="el" href="../../d9/d77/a00095.php#a08ee21f84a6b44ca59d7f045b55d6bfc">line_number</a>, __FILE__, __VA_ARGS__)</td></tr>
<tr class="separator:a03901e920751bab486efba87b39f2707"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:adadf91083b9bc12bba2cf639e5b7aa21"><td class="memItemLeft" align="right" valign="top">#define&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d9/d77/a00095.php#adadf91083b9bc12bba2cf639e5b7aa21">debug_elogs</a>(...)&#160;&#160;&#160;error_log(<a class="el" href="../../d9/d77/a00095.php#a08ee21f84a6b44ca59d7f045b55d6bfc">line_number</a>, __FILE__, __VA_ARGS__)</td></tr>
<tr class="separator:adadf91083b9bc12bba2cf639e5b7aa21"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a05518c3c201982924254d7df8cc2d910"><td class="memItemLeft" align="right" valign="top">#define&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d9/d77/a00095.php#a05518c3c201982924254d7df8cc2d910">debug_wlogs</a>(...)&#160;&#160;&#160;warning_log(<a class="el" href="../../d9/d77/a00095.php#a08ee21f84a6b44ca59d7f045b55d6bfc">line_number</a>, __FILE__, __VA_ARGS__)</td></tr>
<tr class="separator:a05518c3c201982924254d7df8cc2d910"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:a1a14f66f0c6eba0c77338364977658e1"><td class="memTemplParams" colspan="2">template&lt;class T , class... Args&gt; </td></tr>
<tr class="memitem:a1a14f66f0c6eba0c77338364977658e1"><td class="memTemplItemLeft" align="right" valign="top">void&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../da/d53/a00265.php#a1a14f66f0c6eba0c77338364977658e1">mcd::error_log</a> (size_t line, T in, Args... args)</td></tr>
<tr class="memdesc:a1a14f66f0c6eba0c77338364977658e1"><td class="mdescLeft">&#160;</td><td class="mdescRight">Print the given text like an error.  <a href="../../da/d53/a00265.php#a1a14f66f0c6eba0c77338364977658e1">More...</a><br /></td></tr>
<tr class="separator:a1a14f66f0c6eba0c77338364977658e1"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ac625de83fcace96567aecd1363297776"><td class="memTemplParams" colspan="2">template&lt;class T , class... Args&gt; </td></tr>
<tr class="memitem:ac625de83fcace96567aecd1363297776"><td class="memTemplItemLeft" align="right" valign="top">void&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../da/d53/a00265.php#ac625de83fcace96567aecd1363297776">mcd::warning_log</a> (size_t line, T in, Args... args)</td></tr>
<tr class="memdesc:ac625de83fcace96567aecd1363297776"><td class="mdescLeft">&#160;</td><td class="mdescRight">Print the given text like a warning.  <a href="../../da/d53/a00265.php#ac625de83fcace96567aecd1363297776">More...</a><br /></td></tr>
<tr class="separator:ac625de83fcace96567aecd1363297776"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:af0b4fd6390d33edc9719d42b26f6e29f"><td class="memTemplParams" colspan="2">template&lt;class T , class... Args&gt; </td></tr>
<tr class="memitem:af0b4fd6390d33edc9719d42b26f6e29f"><td class="memTemplItemLeft" align="right" valign="top">void&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../da/d53/a00265.php#af0b4fd6390d33edc9719d42b26f6e29f">mcd::info_log</a> (size_t line, T in, Args... args)</td></tr>
<tr class="memdesc:af0b4fd6390d33edc9719d42b26f6e29f"><td class="mdescLeft">&#160;</td><td class="mdescRight">Print the given text like an information.  <a href="../../da/d53/a00265.php#af0b4fd6390d33edc9719d42b26f6e29f">More...</a><br /></td></tr>
<tr class="separator:af0b4fd6390d33edc9719d42b26f6e29f"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><dl class="section author"><dt>Author</dt><dd>Mathias CABIOCH-DELALANDE </dd></dl>
<dl class="section date"><dt>Date</dt><dd>November, 09 2019 </dd></dl>
</div><h2 class="groupheader">Macro Definition Documentation</h2>
<a id="a6743e67ef3323372193a9936858a6fb8"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a6743e67ef3323372193a9936858a6fb8">&#9670;&nbsp;</a></span>debug_dlog</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">#define debug_dlog</td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td>&#160;&#160;&#160;<a class="el" href="../../d9/d77/a00095.php#a33a5e22684c459c3d752ddee8f5e0915">debug_ilog</a>()</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a id="a54252dbab5b5524cae2163d7c4bbf456"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a54252dbab5b5524cae2163d7c4bbf456">&#9670;&nbsp;</a></span>debug_dlogs</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">#define debug_dlogs</td>
          <td>(</td>
          <td class="paramtype">&#160;</td>
          <td class="paramname"><em>...</em></td><td>)</td>
          <td>&#160;&#160;&#160;<a class="el" href="../../d9/d77/a00095.php#a03901e920751bab486efba87b39f2707">debug_ilogs</a>(__VA_ARGS__)</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a id="abfef935e08c6c7f3d9247920b01659b1"></a>
<h2 class="memtitle"><span class="permalink"><a href="#abfef935e08c6c7f3d9247920b01659b1">&#9670;&nbsp;</a></span>debug_elog</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">#define debug_elog</td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td>&#160;&#160;&#160;error_log(<a class="el" href="../../d9/d77/a00095.php#a08ee21f84a6b44ca59d7f045b55d6bfc">line_number</a>, __FILE__)</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a id="adadf91083b9bc12bba2cf639e5b7aa21"></a>
<h2 class="memtitle"><span class="permalink"><a href="#adadf91083b9bc12bba2cf639e5b7aa21">&#9670;&nbsp;</a></span>debug_elogs</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">#define debug_elogs</td>
          <td>(</td>
          <td class="paramtype">&#160;</td>
          <td class="paramname"><em>...</em></td><td>)</td>
          <td>&#160;&#160;&#160;error_log(<a class="el" href="../../d9/d77/a00095.php#a08ee21f84a6b44ca59d7f045b55d6bfc">line_number</a>, __FILE__, __VA_ARGS__)</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a id="a33a5e22684c459c3d752ddee8f5e0915"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a33a5e22684c459c3d752ddee8f5e0915">&#9670;&nbsp;</a></span>debug_ilog</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">#define debug_ilog</td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td>&#160;&#160;&#160;info_log(<a class="el" href="../../d9/d77/a00095.php#a08ee21f84a6b44ca59d7f045b55d6bfc">line_number</a>, __FILE__)</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a id="a03901e920751bab486efba87b39f2707"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a03901e920751bab486efba87b39f2707">&#9670;&nbsp;</a></span>debug_ilogs</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">#define debug_ilogs</td>
          <td>(</td>
          <td class="paramtype">&#160;</td>
          <td class="paramname"><em>...</em></td><td>)</td>
          <td>&#160;&#160;&#160;info_log(<a class="el" href="../../d9/d77/a00095.php#a08ee21f84a6b44ca59d7f045b55d6bfc">line_number</a>, __FILE__, __VA_ARGS__)</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a id="acaeb75ef78e20ba74be61d159e670373"></a>
<h2 class="memtitle"><span class="permalink"><a href="#acaeb75ef78e20ba74be61d159e670373">&#9670;&nbsp;</a></span>debug_wlog</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">#define debug_wlog</td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td>&#160;&#160;&#160;warning_log(<a class="el" href="../../d9/d77/a00095.php#a08ee21f84a6b44ca59d7f045b55d6bfc">line_number</a>, __FILE__)</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a id="a05518c3c201982924254d7df8cc2d910"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a05518c3c201982924254d7df8cc2d910">&#9670;&nbsp;</a></span>debug_wlogs</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">#define debug_wlogs</td>
          <td>(</td>
          <td class="paramtype">&#160;</td>
          <td class="paramname"><em>...</em></td><td>)</td>
          <td>&#160;&#160;&#160;warning_log(<a class="el" href="../../d9/d77/a00095.php#a08ee21f84a6b44ca59d7f045b55d6bfc">line_number</a>, __FILE__, __VA_ARGS__)</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a id="a08ee21f84a6b44ca59d7f045b55d6bfc"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a08ee21f84a6b44ca59d7f045b55d6bfc">&#9670;&nbsp;</a></span>line_number</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">#define line_number&#160;&#160;&#160;__LINE__</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Define to do an alias of <b>LINE</b> </p>

</div>
</div>
</div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_1788504ec76a4dda5464562bc560d0b5.php">C++Tests</a></li><li class="navelem"><a class="el" href="../../dir_2e741febc7df97747a68d36c1b3be5f0.php">C++</a></li><li class="navelem"><a class="el" href="../../dir_220287e732b97f08f66e5f221c69df74.php">inc</a></li><li class="navelem"><a class="el" href="../../dir_75b0389167f46f79a101ef8c4434cec4.php">C++</a></li><li class="navelem"><a class="el" href="../../d9/d77/a00095.php">errors.hpp</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
