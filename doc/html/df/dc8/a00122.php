<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.20"/>
		<title>C++: Json.hpp File Reference</title>
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
				$text = "Generated on Wed Nov 18 2020 14:47:41 for C++ by";
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
$(document).ready(function(){initNavTree('df/dc8/a00122.php','../../'); initResizable(); });
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
<div class="title">Json.hpp File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><code>#include &quot;<a class="el" href="../../dc/dfe/a00125.php">JsonException.hpp</a>&quot;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for Json.hpp:</div>
<div class="dyncontent">
<div class="center"><img src="../../de/d36/a00123.png" border="0" usemap="#aJson_8hpp" alt=""/></div>
<map name="Json_8hpp" id="Json_8hpp">
<area shape="rect" title=" " alt="" coords="786,5,861,32"/>
<area shape="rect" href="../../dc/dfe/a00125.php" title=" " alt="" coords="757,80,890,107"/>
<area shape="rect" href="../../da/d2a/a00086.php" title=" " alt="" coords="779,155,868,181"/>
<area shape="rect" href="../../d6/d22/a00245.php" title=" " alt="" coords="532,229,611,256"/>
<area shape="rect" href="../../d4/dee/a00008.php" title=" " alt="" coords="635,229,710,256"/>
<area shape="rect" href="../../d3/d8b/a00059.php" title=" " alt="" coords="653,379,735,405"/>
<area shape="rect" href="../../da/d24/a00068.php" title=" " alt="" coords="681,453,808,480"/>
<area shape="rect" href="../../d2/d1f/a00083.php" title=" " alt="" coords="797,528,901,555"/>
<area shape="rect" href="../../df/d6a/a00119.php" title=" " alt="" coords="886,304,985,331"/>
<area shape="rect" href="../../d5/db1/a00140.php" title=" " alt="" coords="1017,229,1089,256"/>
<area shape="rect" href="../../dd/dc1/a00212.php" title=" " alt="" coords="1214,379,1329,405"/>
<area shape="rect" href="../../d7/d40/a00236.php" title=" " alt="" coords="535,304,645,331"/>
<area shape="rect" href="../../d4/d3e/a00116.php" title=" " alt="" coords="820,677,915,704"/>
<area shape="rect" href="../../dc/de6/a00167.php" title=" " alt="" coords="339,752,462,779"/>
<area shape="rect" href="../../d5/dcb/a00170.php" title=" " alt="" coords="487,752,621,779"/>
<area shape="rect" href="../../d2/dc8/a00242.php" title=" " alt="" coords="645,752,775,779"/>
<area shape="rect" title=" " alt="" coords="799,752,861,779"/>
<area shape="rect" title=" " alt="" coords="885,752,924,779"/>
<area shape="rect" title=" " alt="" coords="948,752,1011,779"/>
<area shape="rect" title=" " alt="" coords="1035,752,1089,779"/>
<area shape="rect" title=" " alt="" coords="1113,752,1163,779"/>
<area shape="rect" href="../../d9/d01/a00227.php" title="Used to replace strptime function when compiling for Windows." alt="" coords="623,827,703,853"/>
<area shape="rect" title=" " alt="" coords="728,827,783,853"/>
<area shape="rect" href="../../d5/ddf/a00224.php" title=" " alt="" coords="609,901,718,928"/>
<area shape="rect" title=" " alt="" coords="493,976,549,1003"/>
<area shape="rect" href="../../d3/dd5/a00215.php" title=" " alt="" coords="573,976,650,1003"/>
<area shape="rect" href="../../d2/df5/a00137.php" title=" " alt="" coords="674,976,757,1003"/>
<area shape="rect" href="../../d1/da8/a00230.php" title=" " alt="" coords="781,976,871,1003"/>
<area shape="rect" title=" " alt="" coords="579,1051,644,1077"/>
<area shape="rect" href="../../d9/d77/a00095.php" title=" " alt="" coords="786,1051,866,1077"/>
<area shape="rect" href="../../de/de1/a00065.php" title=" " alt="" coords="728,1125,820,1152"/>
<area shape="rect" href="../../d4/d3a/a00101.php" title=" " alt="" coords="844,1125,915,1152"/>
<area shape="rect" href="../../db/db6/a00074.php" title=" " alt="" coords="730,1200,821,1227"/>
<area shape="rect" title=" " alt="" coords="683,1275,766,1301"/>
<area shape="rect" href="../../da/d45/a00011.php" title=" " alt="" coords="790,1275,865,1301"/>
<area shape="rect" href="../../dc/dee/a00053.php" title=" " alt="" coords="841,1349,923,1376"/>
<area shape="rect" href="../../dc/d9a/a00218.php" title=" " alt="" coords="729,1349,816,1376"/>
<area shape="rect" href="../../df/d03/a00062.php" title=" " alt="" coords="1034,1424,1125,1451"/>
<area shape="rect" href="../../d9/d39/a00257.php" title=" " alt="" coords="731,1424,814,1451"/>
<area shape="rect" title=" " alt="" coords="845,1424,906,1451"/>
<area shape="rect" title=" " alt="" coords="930,1424,999,1451"/>
<area shape="rect" href="../../d9/db6/a00146.php" title=" " alt="" coords="1043,1499,1126,1525"/>
<area shape="rect" href="../../d0/dc2/a00104.php" title=" " alt="" coords="1180,1573,1275,1600"/>
<area shape="rect" href="../../d6/d7d/a00161.php" title=" " alt="" coords="1014,1573,1155,1600"/>
<area shape="rect" href="../../d7/dce/a00143.php" title=" " alt="" coords="1065,1648,1147,1675"/>
<area shape="rect" title=" " alt="" coords="1194,1648,1261,1675"/>
<area shape="rect" href="../../d8/d41/a00038.php" title=" " alt="" coords="1062,1723,1145,1749"/>
<area shape="rect" href="../../d5/df1/a00206.php" title=" " alt="" coords="701,1797,794,1824"/>
<area shape="rect" href="../../d3/d1a/a00251.php" title=" " alt="" coords="615,1872,693,1899"/>
<area shape="rect" title=" " alt="" coords="718,1872,777,1899"/>
<area shape="rect" title=" " alt="" coords="801,1872,859,1899"/>
<area shape="rect" href="../../d3/d52/a00023.php" title=" " alt="" coords="371,1947,438,1973"/>
<area shape="rect" href="../../d3/de5/a00209.php" title=" " alt="" coords="483,1947,593,1973"/>
<area shape="rect" href="../../dd/dd7/a00248.php" title=" " alt="" coords="617,1947,691,1973"/>
<area shape="rect" href="../../d7/d03/a00254.php" title=" " alt="" coords="715,1947,849,1973"/>
<area shape="rect" title=" " alt="" coords="873,1947,941,1973"/>
<area shape="rect" href="../../d7/d06/a00131.php" title=" " alt="" coords="618,2021,730,2048"/>
<area shape="rect" href="../../d6/d5b/a00026.php" title=" " alt="" coords="451,2021,593,2048"/>
<area shape="rect" href="../../d5/d16/a00029.php" title=" " alt="" coords="5,2021,145,2048"/>
<area shape="rect" href="../../dc/d87/a00032.php" title=" " alt="" coords="170,2021,279,2048"/>
<area shape="rect" href="../../d4/d8c/a00035.php" title=" " alt="" coords="303,2021,426,2048"/>
<area shape="rect" href="../../d5/de9/a00176.php" title=" " alt="" coords="614,2096,734,2123"/>
<area shape="rect" title=" " alt="" coords="583,2171,651,2197"/>
<area shape="rect" href="../../de/d76/a00134.php" title=" " alt="" coords="675,2171,791,2197"/>
<area shape="rect" title=" " alt="" coords="246,2245,321,2272"/>
<area shape="rect" title=" " alt="" coords="345,2245,403,2272"/>
<area shape="rect" title=" " alt="" coords="428,2245,507,2272"/>
<area shape="rect" title=" " alt="" coords="531,2245,603,2272"/>
<area shape="rect" title=" " alt="" coords="628,2245,675,2272"/>
<area shape="rect" title=" " alt="" coords="699,2245,767,2272"/>
<area shape="rect" title=" " alt="" coords="791,2245,845,2272"/>
<area shape="rect" title=" " alt="" coords="870,2245,939,2272"/>
<area shape="rect" title=" " alt="" coords="964,2245,1019,2272"/>
<area shape="rect" title=" " alt="" coords="1043,2245,1097,2272"/>
<area shape="rect" title=" " alt="" coords="1121,2245,1179,2272"/>
<area shape="rect" href="../../d1/d44/a00098.php" title=" " alt="" coords="937,1648,1040,1675"/>
<area shape="rect" title=" " alt="" coords="953,1723,1032,1749"/>
<area shape="rect" title=" " alt="" coords="851,1723,929,1749"/>
<area shape="rect" href="../../d2/de7/a00014.php" title=" " alt="" coords="700,1499,832,1525"/>
<area shape="rect" title=" " alt="" coords="449,1573,560,1600"/>
<area shape="rect" title=" " alt="" coords="585,1573,689,1600"/>
<area shape="rect" title=" " alt="" coords="713,1573,763,1600"/>
<area shape="rect" title=" " alt="" coords="788,1573,845,1600"/>
<area shape="rect" title=" " alt="" coords="870,1573,910,1600"/>
<area shape="rect" title=" " alt="" coords="935,1573,989,1600"/>
<area shape="rect" title=" " alt="" coords="846,1200,913,1227"/>
<area shape="rect" href="../../da/dec/a00080.php" title=" " alt="" coords="830,603,905,629"/>
<area shape="rect" href="../../d0/d27/a00239.php" title=" " alt="" coords="729,603,805,629"/>
<area shape="rect" href="../../de/df3/a00185.php" title=" " alt="" coords="1009,304,1184,331"/>
<area shape="rect" href="../../da/d15/a00188.php" title=" " alt="" coords="1018,379,1175,405"/>
<area shape="rect" href="../../d7/d25/a00182.php" title=" " alt="" coords="1041,453,1153,480"/>
<area shape="rect" href="../../dc/d57/a00194.php" title=" " alt="" coords="1017,528,1177,555"/>
<area shape="rect" href="../../db/dd9/a00179.php" title=" " alt="" coords="1174,603,1249,629"/>
<area shape="rect" href="../../d9/dd0/a00191.php" title=" " alt="" coords="979,603,1150,629"/>
</map>
</div>
</div><div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="../../da/d72/a00124.png" border="0" usemap="#aJson_8hppdep" alt=""/></div>
<map name="Json_8hppdep" id="Json_8hppdep">
<area shape="rect" title=" " alt="" coords="311,5,386,32"/>
<area shape="rect" href="../../d6/d2d/a00047.php" title=" " alt="" coords="305,80,392,107"/>
<area shape="rect" href="../../df/d98/a00107.php" title=" " alt="" coords="207,155,285,181"/>
<area shape="rect" href="../../d1/d88/a00128.php" title=" " alt="" coords="306,229,391,256"/>
<area shape="rect" href="../../d6/de1/a00233.php" title=" " alt="" coords="389,304,461,331"/>
<area shape="rect" href="../../d9/d2e/a00056.php" title=" " alt="" coords="157,229,282,256"/>
<area shape="rect" href="../../d5/de0/a00050.php" title=" " alt="" coords="212,304,283,331"/>
<area shape="rect" href="../../dd/d32/a00041.php" title=" " alt="" coords="312,379,385,405"/>
<area shape="rect" href="../../d0/d89/a00071.php" title=" " alt="" coords="245,453,359,480"/>
<area shape="rect" href="../../d3/d00/a00113.php" title=" " alt="" coords="343,827,439,853"/>
<area shape="rect" href="../../d1/dc1/a00092.php" title=" " alt="" coords="151,528,229,555"/>
<area shape="rect" href="../../d7/d3f/a00173.php" title=" " alt="" coords="267,528,353,555"/>
<area shape="rect" href="../../d4/d81/a00110.php" title=" " alt="" coords="35,603,123,629"/>
<area shape="rect" href="../../dd/dd7/a00260.php" title=" " alt="" coords="145,677,235,704"/>
<area shape="rect" href="../../d7/d46/a00002.php" title=" " alt="" coords="5,677,92,704"/>
<area shape="rect" href="../../dd/dad/a00005.php" title=" " alt="" coords="7,752,74,779"/>
<area shape="rect" href="../../db/dab/a00089.php" title=" " alt="" coords="225,827,315,853"/>
<area shape="rect" href="../../de/d79/a00203.php" title=" " alt="" coords="196,901,347,928"/>
<area shape="rect" href="../../d3/db1/a00200.php" title=" " alt="" coords="286,976,369,1003"/>
<area shape="rect" href="../../d5/df9/a00044.php" title=" " alt="" coords="269,1051,386,1077"/>
<area shape="rect" href="../../db/ddf/a00164.php" title=" " alt="" coords="99,752,207,779"/>
<area shape="rect" href="../../de/db1/a00197.php" title=" " alt="" coords="231,752,309,779"/>
<area shape="rect" href="../../dd/d52/a00221.php" title=" " alt="" coords="277,603,359,629"/>
</map>
</div>
</div><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Classes</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d2/d8e/a01315.php">mcd::Json</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A class to manage <a class="el" href="../../d2/d8e/a01315.php" title="A class to manage Json formatted data.">Json</a> formatted data.  <a href="../../d2/d8e/a01315.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="namespaces"></a>
Namespaces</h2></td></tr>
<tr class="memitem:db/d12/a00268"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php">mcd</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><dl class="section author"><dt>Author</dt><dd>Mathias CABIOCH-DELALANDE </dd></dl>
<dl class="section date"><dt>Date</dt><dd>Created : Sunday November, 24 2019 14:24:00 </dd>
<dd>
Last modification : November, 18 2020 </dd></dl>
</div></div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_1788504ec76a4dda5464562bc560d0b5.php">C++Tests</a></li><li class="navelem"><a class="el" href="../../dir_2e741febc7df97747a68d36c1b3be5f0.php">C++</a></li><li class="navelem"><a class="el" href="../../dir_220287e732b97f08f66e5f221c69df74.php">inc</a></li><li class="navelem"><a class="el" href="../../dir_75b0389167f46f79a101ef8c4434cec4.php">C++</a></li><li class="navelem"><a class="el" href="../../df/dc8/a00122.php">Json.hpp</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
