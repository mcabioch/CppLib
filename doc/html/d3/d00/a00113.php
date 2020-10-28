<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.20"/>
		<title>C++: Identifier.hpp File Reference</title>
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
$(document).ready(function(){initNavTree('d3/d00/a00113.php','../../'); initResizable(); });
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
<a href="#namespaces">Namespaces</a>  </div>
  <div class="headertitle">
<div class="title">Identifier.hpp File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><code>#include &quot;<a class="el" href="../../dd/d32/a00041.php">C++.hpp</a>&quot;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for Identifier.hpp:</div>
<div class="dyncontent">
<div class="center"><img src="../../d8/d17/a00114.png" border="0" usemap="#aIdentifier_8hpp" alt=""/></div>
<map name="Identifier_8hpp" id="Identifier_8hpp">
<area shape="rect" title=" " alt="" coords="969,5,1065,32"/>
<area shape="rect" href="../../dd/d32/a00041.php" title=" " alt="" coords="980,80,1053,107"/>
<area shape="rect" href="../../d5/de0/a00050.php" title=" " alt="" coords="880,155,951,181"/>
<area shape="rect" href="../../d1/d88/a00128.php" title=" " alt="" coords="974,229,1059,256"/>
<area shape="rect" href="../../d1/da8/a00230.php" title=" " alt="" coords="1057,304,1129,331"/>
<area shape="rect" href="../../d9/d2e/a00056.php" title=" " alt="" coords="825,229,950,256"/>
<area shape="rect" href="../../df/d98/a00107.php" title=" " alt="" coords="875,304,953,331"/>
<area shape="rect" href="../../d6/d2d/a00047.php" title=" " alt="" coords="973,379,1060,405"/>
<area shape="rect" href="../../d4/d51/a00017.php" title=" " alt="" coords="837,453,922,480"/>
<area shape="rect" href="../../df/dc8/a00122.php" title=" " alt="" coords="979,453,1054,480"/>
<area shape="rect" href="../../d1/d09/a00077.php" title=" " alt="" coords="1108,528,1205,555"/>
<area shape="rect" href="../../db/db2/a00020.php" title=" " alt="" coords="766,528,926,555"/>
<area shape="rect" href="../../da/d2a/a00086.php" title=" " alt="" coords="972,603,1061,629"/>
<area shape="rect" href="../../d2/dc8/a00242.php" title=" " alt="" coords="725,677,804,704"/>
<area shape="rect" href="../../d4/dee/a00008.php" title=" " alt="" coords="829,677,903,704"/>
<area shape="rect" href="../../d3/d8b/a00059.php" title=" " alt="" coords="847,827,928,853"/>
<area shape="rect" href="../../da/d24/a00068.php" title=" " alt="" coords="875,901,1001,928"/>
<area shape="rect" href="../../d2/d1f/a00083.php" title=" " alt="" coords="990,976,1094,1003"/>
<area shape="rect" href="../../df/d6a/a00119.php" title=" " alt="" coords="1079,752,1178,779"/>
<area shape="rect" href="../../d5/db1/a00140.php" title=" " alt="" coords="1210,677,1282,704"/>
<area shape="rect" href="../../d3/de5/a00209.php" title=" " alt="" coords="1407,827,1522,853"/>
<area shape="rect" href="../../d6/de1/a00233.php" title=" " alt="" coords="728,752,839,779"/>
<area shape="rect" href="../../d4/d3e/a00116.php" title=" " alt="" coords="1012,1125,1107,1152"/>
<area shape="rect" href="../../db/ddf/a00164.php" title=" " alt="" coords="531,1200,654,1227"/>
<area shape="rect" href="../../dc/de6/a00167.php" title=" " alt="" coords="679,1200,813,1227"/>
<area shape="rect" href="../../d0/d27/a00239.php" title=" " alt="" coords="837,1200,967,1227"/>
<area shape="rect" title=" " alt="" coords="991,1200,1053,1227"/>
<area shape="rect" title=" " alt="" coords="1077,1200,1116,1227"/>
<area shape="rect" title=" " alt="" coords="1140,1200,1203,1227"/>
<area shape="rect" title=" " alt="" coords="1227,1200,1281,1227"/>
<area shape="rect" title=" " alt="" coords="1305,1200,1355,1227"/>
<area shape="rect" href="../../d5/ddf/a00224.php" title="Used to replace strptime function when compiling for Windows." alt="" coords="815,1275,895,1301"/>
<area shape="rect" title=" " alt="" coords="920,1275,975,1301"/>
<area shape="rect" href="../../dd/d52/a00221.php" title=" " alt="" coords="801,1349,910,1376"/>
<area shape="rect" title=" " alt="" coords="685,1424,741,1451"/>
<area shape="rect" href="../../dd/dc1/a00212.php" title=" " alt="" coords="765,1424,842,1451"/>
<area shape="rect" href="../../d2/df5/a00137.php" title=" " alt="" coords="866,1424,949,1451"/>
<area shape="rect" href="../../d9/d01/a00227.php" title=" " alt="" coords="973,1424,1063,1451"/>
<area shape="rect" title=" " alt="" coords="771,1499,836,1525"/>
<area shape="rect" href="../../d9/d77/a00095.php" title=" " alt="" coords="978,1499,1058,1525"/>
<area shape="rect" href="../../de/de1/a00065.php" title=" " alt="" coords="920,1573,1012,1600"/>
<area shape="rect" href="../../d4/d3a/a00101.php" title=" " alt="" coords="1036,1573,1107,1600"/>
<area shape="rect" href="../../db/db6/a00074.php" title=" " alt="" coords="922,1648,1013,1675"/>
<area shape="rect" title=" " alt="" coords="875,1723,958,1749"/>
<area shape="rect" href="../../da/d45/a00011.php" title=" " alt="" coords="982,1723,1057,1749"/>
<area shape="rect" href="../../dc/dee/a00053.php" title=" " alt="" coords="869,1797,951,1824"/>
<area shape="rect" href="../../d1/d44/a00098.php" title=" " alt="" coords="1087,1797,1189,1824"/>
<area shape="rect" href="../../d3/dd5/a00215.php" title=" " alt="" coords="976,1797,1063,1824"/>
<area shape="rect" href="../../df/d03/a00062.php" title=" " alt="" coords="681,1872,771,1899"/>
<area shape="rect" href="../../d7/d03/a00254.php" title=" " alt="" coords="978,1872,1061,1899"/>
<area shape="rect" title=" " alt="" coords="798,1872,859,1899"/>
<area shape="rect" title=" " alt="" coords="883,1872,953,1899"/>
<area shape="rect" href="../../d9/db6/a00146.php" title=" " alt="" coords="679,1947,762,1973"/>
<area shape="rect" href="../../d0/dc2/a00104.php" title=" " alt="" coords="663,2021,757,2048"/>
<area shape="rect" href="../../d7/dce/a00143.php" title=" " alt="" coords="585,2096,667,2123"/>
<area shape="rect" title=" " alt="" coords="691,2096,758,2123"/>
<area shape="rect" href="../../d8/d41/a00038.php" title=" " alt="" coords="627,2171,710,2197"/>
<area shape="rect" href="../../de/d79/a00203.php" title=" " alt="" coords="706,2245,799,2272"/>
<area shape="rect" href="../../dd/dd7/a00248.php" title=" " alt="" coords="620,2320,699,2347"/>
<area shape="rect" title=" " alt="" coords="723,2320,782,2347"/>
<area shape="rect" title=" " alt="" coords="806,2320,865,2347"/>
<area shape="rect" href="../../d3/d52/a00023.php" title=" " alt="" coords="383,2395,450,2421"/>
<area shape="rect" href="../../d5/df1/a00206.php" title=" " alt="" coords="488,2395,599,2421"/>
<area shape="rect" href="../../d6/d22/a00245.php" title=" " alt="" coords="623,2395,696,2421"/>
<area shape="rect" href="../../d3/d1a/a00251.php" title=" " alt="" coords="721,2395,854,2421"/>
<area shape="rect" title=" " alt="" coords="879,2395,947,2421"/>
<area shape="rect" href="../../d7/d06/a00131.php" title=" " alt="" coords="617,2469,729,2496"/>
<area shape="rect" href="../../d6/d5b/a00026.php" title=" " alt="" coords="5,2469,148,2496"/>
<area shape="rect" href="../../d5/d16/a00029.php" title=" " alt="" coords="172,2469,312,2496"/>
<area shape="rect" href="../../dc/d87/a00032.php" title=" " alt="" coords="337,2469,446,2496"/>
<area shape="rect" href="../../d4/d8c/a00035.php" title=" " alt="" coords="470,2469,593,2496"/>
<area shape="rect" href="../../d7/d3f/a00173.php" title=" " alt="" coords="613,2544,733,2571"/>
<area shape="rect" title=" " alt="" coords="581,2619,649,2645"/>
<area shape="rect" href="../../de/d76/a00134.php" title=" " alt="" coords="673,2619,789,2645"/>
<area shape="rect" title=" " alt="" coords="245,2693,319,2720"/>
<area shape="rect" title=" " alt="" coords="343,2693,402,2720"/>
<area shape="rect" title=" " alt="" coords="427,2693,505,2720"/>
<area shape="rect" title=" " alt="" coords="530,2693,602,2720"/>
<area shape="rect" title=" " alt="" coords="627,2693,673,2720"/>
<area shape="rect" title=" " alt="" coords="697,2693,765,2720"/>
<area shape="rect" title=" " alt="" coords="789,2693,844,2720"/>
<area shape="rect" title=" " alt="" coords="869,2693,938,2720"/>
<area shape="rect" title=" " alt="" coords="963,2693,1017,2720"/>
<area shape="rect" title=" " alt="" coords="1042,2693,1095,2720"/>
<area shape="rect" title=" " alt="" coords="1119,2693,1178,2720"/>
<area shape="rect" href="../../d2/de7/a00014.php" title=" " alt="" coords="1005,1947,1137,1973"/>
<area shape="rect" title=" " alt="" coords="833,2021,944,2048"/>
<area shape="rect" title=" " alt="" coords="969,2021,1073,2048"/>
<area shape="rect" title=" " alt="" coords="1097,2021,1147,2048"/>
<area shape="rect" title=" " alt="" coords="1172,2021,1229,2048"/>
<area shape="rect" title=" " alt="" coords="1254,2021,1294,2048"/>
<area shape="rect" title=" " alt="" coords="1319,2021,1373,2048"/>
<area shape="rect" title=" " alt="" coords="1092,1872,1171,1899"/>
<area shape="rect" title=" " alt="" coords="1195,1872,1273,1899"/>
<area shape="rect" title=" " alt="" coords="1038,1648,1105,1675"/>
<area shape="rect" href="../../da/dec/a00080.php" title=" " alt="" coords="922,1051,997,1077"/>
<area shape="rect" href="../../d7/d40/a00236.php" title=" " alt="" coords="1021,1051,1097,1077"/>
<area shape="rect" href="../../d7/d25/a00182.php" title=" " alt="" coords="1203,752,1377,779"/>
<area shape="rect" href="../../de/df3/a00185.php" title=" " alt="" coords="1211,827,1369,853"/>
<area shape="rect" href="../../db/dd9/a00179.php" title=" " alt="" coords="1234,901,1346,928"/>
<area shape="rect" href="../../d9/dd0/a00191.php" title=" " alt="" coords="1210,976,1370,1003"/>
<area shape="rect" href="../../d5/de9/a00176.php" title=" " alt="" coords="1173,1051,1247,1077"/>
<area shape="rect" href="../../da/d15/a00188.php" title=" " alt="" coords="1271,1051,1442,1077"/>
<area shape="rect" href="../../dc/dfe/a00125.php" title=" " alt="" coords="950,528,1083,555"/>
</map>
</div>
</div><div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="../../d2/da3/a00115.png" border="0" usemap="#aIdentifier_8hppdep" alt=""/></div>
<map name="Identifier_8hppdep" id="Identifier_8hppdep">
<area shape="rect" title=" " alt="" coords="16,5,112,32"/>
<area shape="rect" href="../../de/db1/a00197.php" title=" " alt="" coords="23,80,105,107"/>
<area shape="rect" href="../../d5/df9/a00044.php" title=" " alt="" coords="5,155,123,181"/>
</map>
</div>
</div><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Classes</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d3/d07/a01301.php">mcd::Identifier</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A class to store some identify datas.  <a href="../../d3/d07/a01301.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="namespaces"></a>
Namespaces</h2></td></tr>
<tr class="memitem:da/d53/a00265"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../da/d53/a00265.php">mcd</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><dl class="section author"><dt>Author</dt><dd>Mathias CABIOCH-DELALANDE </dd></dl>
<dl class="section date"><dt>Date</dt><dd>Last modification : September, 26 2019 </dd></dl>
</div></div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_1788504ec76a4dda5464562bc560d0b5.php">C++Tests</a></li><li class="navelem"><a class="el" href="../../dir_2e741febc7df97747a68d36c1b3be5f0.php">C++</a></li><li class="navelem"><a class="el" href="../../dir_220287e732b97f08f66e5f221c69df74.php">inc</a></li><li class="navelem"><a class="el" href="../../dir_75b0389167f46f79a101ef8c4434cec4.php">C++</a></li><li class="navelem"><a class="el" href="../../d3/d00/a00113.php">Identifier.hpp</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
