<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.20"/>
		<title>C++: Time.hpp File Reference</title>
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
				$text = "Generated on Sun Nov 1 2020 19:28:20 for C++ by";
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
$(document).ready(function(){initNavTree('d0/d27/a00239.php','../../'); initResizable(); });
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
<div class="title">Time.hpp File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><code>#include &quot;<a class="el" href="../../d4/d3e/a00116.php">includes.hpp</a>&quot;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for Time.hpp:</div>
<div class="dyncontent">
<div class="center"><img src="../../d9/d21/a00240.png" border="0" usemap="#aTime_8hpp" alt=""/></div>
<map name="Time_8hpp" id="Time_8hpp">
<area shape="rect" title=" " alt="" coords="829,5,905,32"/>
<area shape="rect" href="../../d4/d3e/a00116.php" title=" " alt="" coords="820,80,915,107"/>
<area shape="rect" href="../../dc/de6/a00167.php" title=" " alt="" coords="339,155,462,181"/>
<area shape="rect" href="../../d5/dcb/a00170.php" title=" " alt="" coords="487,155,621,181"/>
<area shape="rect" href="../../d2/dc8/a00242.php" title=" " alt="" coords="645,155,775,181"/>
<area shape="rect" title=" " alt="" coords="799,155,861,181"/>
<area shape="rect" title=" " alt="" coords="885,155,924,181"/>
<area shape="rect" title=" " alt="" coords="948,155,1011,181"/>
<area shape="rect" title=" " alt="" coords="1035,155,1089,181"/>
<area shape="rect" title=" " alt="" coords="1113,155,1163,181"/>
<area shape="rect" href="../../d9/d01/a00227.php" title="Used to replace strptime function when compiling for Windows." alt="" coords="623,229,703,256"/>
<area shape="rect" title=" " alt="" coords="728,229,783,256"/>
<area shape="rect" href="../../d5/ddf/a00224.php" title=" " alt="" coords="609,304,718,331"/>
<area shape="rect" title=" " alt="" coords="493,379,549,405"/>
<area shape="rect" href="../../d3/dd5/a00215.php" title=" " alt="" coords="573,379,650,405"/>
<area shape="rect" href="../../d2/df5/a00137.php" title=" " alt="" coords="674,379,757,405"/>
<area shape="rect" href="../../d1/da8/a00230.php" title=" " alt="" coords="781,379,871,405"/>
<area shape="rect" title=" " alt="" coords="579,453,644,480"/>
<area shape="rect" href="../../d9/d77/a00095.php" title=" " alt="" coords="786,453,866,480"/>
<area shape="rect" href="../../de/de1/a00065.php" title=" " alt="" coords="728,528,820,555"/>
<area shape="rect" href="../../d4/d3a/a00101.php" title=" " alt="" coords="844,528,915,555"/>
<area shape="rect" href="../../db/db6/a00074.php" title=" " alt="" coords="730,603,821,629"/>
<area shape="rect" title=" " alt="" coords="683,677,766,704"/>
<area shape="rect" href="../../da/d45/a00011.php" title=" " alt="" coords="790,677,865,704"/>
<area shape="rect" href="../../dc/dee/a00053.php" title=" " alt="" coords="841,752,923,779"/>
<area shape="rect" href="../../dc/d9a/a00218.php" title=" " alt="" coords="729,752,816,779"/>
<area shape="rect" href="../../df/d03/a00062.php" title=" " alt="" coords="1034,827,1125,853"/>
<area shape="rect" href="../../d9/d39/a00257.php" title=" " alt="" coords="731,827,814,853"/>
<area shape="rect" title=" " alt="" coords="845,827,906,853"/>
<area shape="rect" title=" " alt="" coords="930,827,999,853"/>
<area shape="rect" href="../../d9/db6/a00146.php" title=" " alt="" coords="1043,901,1126,928"/>
<area shape="rect" href="../../d0/dc2/a00104.php" title=" " alt="" coords="1180,976,1275,1003"/>
<area shape="rect" href="../../d6/d7d/a00161.php" title=" " alt="" coords="1014,976,1155,1003"/>
<area shape="rect" href="../../d7/dce/a00143.php" title=" " alt="" coords="1065,1051,1147,1077"/>
<area shape="rect" title=" " alt="" coords="1194,1051,1261,1077"/>
<area shape="rect" href="../../d8/d41/a00038.php" title=" " alt="" coords="1062,1125,1145,1152"/>
<area shape="rect" href="../../d5/df1/a00206.php" title=" " alt="" coords="701,1200,794,1227"/>
<area shape="rect" href="../../d3/d1a/a00251.php" title=" " alt="" coords="615,1275,693,1301"/>
<area shape="rect" title=" " alt="" coords="718,1275,777,1301"/>
<area shape="rect" title=" " alt="" coords="801,1275,859,1301"/>
<area shape="rect" href="../../d3/d52/a00023.php" title=" " alt="" coords="371,1349,438,1376"/>
<area shape="rect" href="../../d3/de5/a00209.php" title=" " alt="" coords="483,1349,593,1376"/>
<area shape="rect" href="../../dd/dd7/a00248.php" title=" " alt="" coords="617,1349,691,1376"/>
<area shape="rect" href="../../d7/d03/a00254.php" title=" " alt="" coords="715,1349,849,1376"/>
<area shape="rect" title=" " alt="" coords="873,1349,941,1376"/>
<area shape="rect" href="../../d7/d06/a00131.php" title=" " alt="" coords="618,1424,730,1451"/>
<area shape="rect" href="../../d6/d5b/a00026.php" title=" " alt="" coords="451,1424,593,1451"/>
<area shape="rect" href="../../d5/d16/a00029.php" title=" " alt="" coords="5,1424,145,1451"/>
<area shape="rect" href="../../dc/d87/a00032.php" title=" " alt="" coords="170,1424,279,1451"/>
<area shape="rect" href="../../d4/d8c/a00035.php" title=" " alt="" coords="303,1424,426,1451"/>
<area shape="rect" href="../../d5/de9/a00176.php" title=" " alt="" coords="614,1499,734,1525"/>
<area shape="rect" title=" " alt="" coords="583,1573,651,1600"/>
<area shape="rect" href="../../de/d76/a00134.php" title=" " alt="" coords="675,1573,791,1600"/>
<area shape="rect" title=" " alt="" coords="246,1648,321,1675"/>
<area shape="rect" title=" " alt="" coords="345,1648,403,1675"/>
<area shape="rect" title=" " alt="" coords="428,1648,507,1675"/>
<area shape="rect" title=" " alt="" coords="531,1648,603,1675"/>
<area shape="rect" title=" " alt="" coords="628,1648,675,1675"/>
<area shape="rect" title=" " alt="" coords="699,1648,767,1675"/>
<area shape="rect" title=" " alt="" coords="791,1648,845,1675"/>
<area shape="rect" title=" " alt="" coords="870,1648,939,1675"/>
<area shape="rect" title=" " alt="" coords="964,1648,1019,1675"/>
<area shape="rect" title=" " alt="" coords="1043,1648,1097,1675"/>
<area shape="rect" title=" " alt="" coords="1121,1648,1179,1675"/>
<area shape="rect" href="../../d1/d44/a00098.php" title=" " alt="" coords="937,1051,1040,1077"/>
<area shape="rect" title=" " alt="" coords="953,1125,1032,1152"/>
<area shape="rect" title=" " alt="" coords="851,1125,929,1152"/>
<area shape="rect" href="../../d2/de7/a00014.php" title=" " alt="" coords="700,901,832,928"/>
<area shape="rect" title=" " alt="" coords="449,976,560,1003"/>
<area shape="rect" title=" " alt="" coords="585,976,689,1003"/>
<area shape="rect" title=" " alt="" coords="713,976,763,1003"/>
<area shape="rect" title=" " alt="" coords="788,976,845,1003"/>
<area shape="rect" title=" " alt="" coords="870,976,910,1003"/>
<area shape="rect" title=" " alt="" coords="935,976,989,1003"/>
<area shape="rect" title=" " alt="" coords="846,603,913,629"/>
</map>
</div>
</div><div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="../../d6/db6/a00241.png" border="0" usemap="#aTime_8hppdep" alt=""/></div>
<map name="Time_8hppdep" id="Time_8hppdep">
<area shape="rect" title=" " alt="" coords="312,5,388,32"/>
<area shape="rect" href="../../d2/d1f/a00083.php" title=" " alt="" coords="298,80,402,107"/>
<area shape="rect" href="../../da/d2a/a00086.php" title=" " alt="" coords="305,155,395,181"/>
<area shape="rect" href="../../db/db2/a00020.php" title=" " alt="" coords="153,229,313,256"/>
<area shape="rect" href="../../d1/d09/a00077.php" title=" " alt="" coords="300,304,397,331"/>
<area shape="rect" href="../../dc/dfe/a00125.php" title=" " alt="" coords="390,229,523,256"/>
<area shape="rect" href="../../d4/d51/a00017.php" title=" " alt="" coords="190,304,275,331"/>
<area shape="rect" href="../../d6/d2d/a00047.php" title=" " alt="" coords="305,379,392,405"/>
<area shape="rect" href="../../df/d98/a00107.php" title=" " alt="" coords="207,453,285,480"/>
<area shape="rect" href="../../d1/d88/a00128.php" title=" " alt="" coords="306,528,391,555"/>
<area shape="rect" href="../../d6/de1/a00233.php" title=" " alt="" coords="389,603,461,629"/>
<area shape="rect" href="../../d9/d2e/a00056.php" title=" " alt="" coords="157,528,282,555"/>
<area shape="rect" href="../../d5/de0/a00050.php" title=" " alt="" coords="212,603,283,629"/>
<area shape="rect" href="../../dd/d32/a00041.php" title=" " alt="" coords="312,677,385,704"/>
<area shape="rect" href="../../d0/d89/a00071.php" title=" " alt="" coords="245,752,359,779"/>
<area shape="rect" href="../../d3/d00/a00113.php" title=" " alt="" coords="343,1125,439,1152"/>
<area shape="rect" href="../../d1/dc1/a00092.php" title=" " alt="" coords="151,827,229,853"/>
<area shape="rect" href="../../d7/d3f/a00173.php" title=" " alt="" coords="267,827,353,853"/>
<area shape="rect" href="../../d4/d81/a00110.php" title=" " alt="" coords="35,901,123,928"/>
<area shape="rect" href="../../dd/dd7/a00260.php" title=" " alt="" coords="145,976,235,1003"/>
<area shape="rect" href="../../d7/d46/a00002.php" title=" " alt="" coords="5,976,92,1003"/>
<area shape="rect" href="../../dd/dad/a00005.php" title=" " alt="" coords="7,1051,74,1077"/>
<area shape="rect" href="../../db/dab/a00089.php" title=" " alt="" coords="225,1125,315,1152"/>
<area shape="rect" href="../../de/d79/a00203.php" title=" " alt="" coords="196,1200,347,1227"/>
<area shape="rect" href="../../d3/db1/a00200.php" title=" " alt="" coords="286,1275,369,1301"/>
<area shape="rect" href="../../d5/df9/a00044.php" title=" " alt="" coords="269,1349,386,1376"/>
<area shape="rect" href="../../db/ddf/a00164.php" title=" " alt="" coords="99,1051,207,1077"/>
<area shape="rect" href="../../de/db1/a00197.php" title=" " alt="" coords="231,1051,309,1077"/>
<area shape="rect" href="../../dd/d52/a00221.php" title=" " alt="" coords="277,901,359,928"/>
<area shape="rect" href="../../df/dc8/a00122.php" title=" " alt="" coords="422,304,497,331"/>
</map>
</div>
</div><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Classes</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d2/db1/a01428.php">mcd::Time</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A class to play with dates.  <a href="../../d2/db1/a01428.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="namespaces"></a>
Namespaces</h2></td></tr>
<tr class="memitem:db/d12/a00268"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php">mcd</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><dl class="section author"><dt>Author</dt><dd>Mathias CABIOCH-DELALANDE </dd></dl>
<dl class="section date"><dt>Date</dt><dd>Last modification : October, 28 2020</dd></dl>
<p>Formats disponibles afin de récupérer l'heure<br  />
 %H : Return the number of hours of the day between 00 and 24<br  />
 %I : Return the number of hours of the day between 00 and 12<br  />
 <br  />
 %M : Return the number of minutes of the hour<br  />
 <br  />
 %S : Return the number of seconds of the minute<br  />
 <br  />
 %N : Return the number of milliseconds of the second<br  />
 <br  />
 %P : Return AM or PM<br  />
 %p : Return am or pm<br  />
</p>
</div></div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_1788504ec76a4dda5464562bc560d0b5.php">C++Tests</a></li><li class="navelem"><a class="el" href="../../dir_2e741febc7df97747a68d36c1b3be5f0.php">C++</a></li><li class="navelem"><a class="el" href="../../dir_220287e732b97f08f66e5f221c69df74.php">inc</a></li><li class="navelem"><a class="el" href="../../dir_75b0389167f46f79a101ef8c4434cec4.php">C++</a></li><li class="navelem"><a class="el" href="../../d0/d27/a00239.php">Time.hpp</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
