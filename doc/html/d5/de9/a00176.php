<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.20"/>
		<title>C++: OsDetection.hpp File Reference</title>
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
$(document).ready(function(){initNavTree('d5/de9/a00176.php','../../'); initResizable(); });
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
<a href="#define-members">Macros</a>  </div>
  <div class="headertitle">
<div class="title">OsDetection.hpp File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><code>#include &lt;unistd.h&gt;</code><br />
<code>#include &quot;<a class="el" href="../../de/d76/a00134.php">lowIncludes.hpp</a>&quot;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for OsDetection.hpp:</div>
<div class="dyncontent">
<div class="center"><img src="../../dd/d4c/a00177.png" border="0" usemap="#aOsDetection_8hpp" alt=""/></div>
<map name="OsDetection_8hpp" id="OsDetection_8hpp">
<area shape="rect" title=" " alt="" coords="373,5,493,32"/>
<area shape="rect" title=" " alt="" coords="342,80,410,107"/>
<area shape="rect" href="../../de/d76/a00134.php" title=" " alt="" coords="434,80,550,107"/>
<area shape="rect" title=" " alt="" coords="5,155,80,181"/>
<area shape="rect" title=" " alt="" coords="104,155,163,181"/>
<area shape="rect" title=" " alt="" coords="187,155,266,181"/>
<area shape="rect" title=" " alt="" coords="291,155,363,181"/>
<area shape="rect" title=" " alt="" coords="387,155,434,181"/>
<area shape="rect" title=" " alt="" coords="458,155,526,181"/>
<area shape="rect" title=" " alt="" coords="550,155,605,181"/>
<area shape="rect" title=" " alt="" coords="629,155,699,181"/>
<area shape="rect" title=" " alt="" coords="723,155,778,181"/>
<area shape="rect" title=" " alt="" coords="803,155,856,181"/>
<area shape="rect" title=" " alt="" coords="880,155,939,181"/>
</map>
</div>
</div><div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="../../d9/d90/a00178.png" border="0" usemap="#aOsDetection_8hppdep" alt=""/></div>
<map name="OsDetection_8hppdep" id="OsDetection_8hppdep">
<area shape="rect" title=" " alt="" coords="326,5,446,32"/>
<area shape="rect" href="../../d7/d06/a00131.php" title=" " alt="" coords="330,80,442,107"/>
<area shape="rect" href="../../d3/d52/a00023.php" title=" " alt="" coords="306,155,373,181"/>
<area shape="rect" href="../../dd/dd7/a00248.php" title=" " alt="" coords="397,155,471,181"/>
<area shape="rect" href="../../d3/d1a/a00251.php" title=" " alt="" coords="347,229,425,256"/>
<area shape="rect" href="../../d5/df1/a00206.php" title=" " alt="" coords="339,304,433,331"/>
<area shape="rect" href="../../d2/de7/a00014.php" title=" " alt="" coords="255,379,387,405"/>
<area shape="rect" href="../../d8/d41/a00038.php" title=" " alt="" coords="411,379,494,405"/>
<area shape="rect" href="../../d9/d39/a00257.php" title=" " alt="" coords="279,677,362,704"/>
<area shape="rect" href="../../dc/dee/a00053.php" title=" " alt="" coords="389,752,471,779"/>
<area shape="rect" href="../../dc/d9a/a00218.php" title=" " alt="" coords="277,752,364,779"/>
<area shape="rect" href="../../da/d45/a00011.php" title=" " alt="" coords="338,827,413,853"/>
<area shape="rect" href="../../db/db6/a00074.php" title=" " alt="" coords="330,901,421,928"/>
<area shape="rect" href="../../de/de1/a00065.php" title=" " alt="" coords="277,976,369,1003"/>
<area shape="rect" href="../../d4/d3a/a00101.php" title=" " alt="" coords="393,976,464,1003"/>
<area shape="rect" href="../../d9/d77/a00095.php" title=" " alt="" coords="335,1051,415,1077"/>
<area shape="rect" href="../../d1/da8/a00230.php" title=" " alt="" coords="330,1125,421,1152"/>
<area shape="rect" href="../../d5/ddf/a00224.php" title=" " alt="" coords="336,1200,415,1227"/>
<area shape="rect" href="../../d9/d01/a00227.php" title="Used to replace strptime function when compiling for Windows." alt="" coords="335,1275,415,1301"/>
<area shape="rect" href="../../d2/dc8/a00242.php" title=" " alt="" coords="311,1349,440,1376"/>
<area shape="rect" href="../../d4/d3e/a00116.php" title=" " alt="" coords="328,1424,423,1451"/>
<area shape="rect" href="../../d3/d8b/a00059.php" title=" " alt="" coords="5,1648,87,1675"/>
<area shape="rect" href="../../da/d24/a00068.php" title=" " alt="" coords="120,1723,247,1749"/>
<area shape="rect" href="../../da/dec/a00080.php" title=" " alt="" coords="162,1499,237,1525"/>
<area shape="rect" href="../../df/d6a/a00119.php" title=" " alt="" coords="318,1573,417,1600"/>
<area shape="rect" href="../../db/dd9/a00179.php" title=" " alt="" coords="413,1499,487,1525"/>
<area shape="rect" href="../../d9/dd0/a00191.php" title=" " alt="" coords="511,1499,682,1525"/>
<area shape="rect" href="../../dd/dc1/a00212.php" title=" " alt="" coords="586,1648,701,1675"/>
<area shape="rect" href="../../d7/d40/a00236.php" title=" " alt="" coords="715,1797,825,1824"/>
<area shape="rect" href="../../d0/d27/a00239.php" title=" " alt="" coords="261,1499,337,1525"/>
<area shape="rect" href="../../da/d2a/a00086.php" title=" " alt="" coords="369,1947,459,1973"/>
<area shape="rect" href="../../db/db2/a00020.php" title=" " alt="" coords="217,2021,377,2048"/>
<area shape="rect" href="../../d1/d09/a00077.php" title=" " alt="" coords="364,2096,461,2123"/>
<area shape="rect" href="../../dc/dfe/a00125.php" title=" " alt="" coords="454,2021,587,2048"/>
<area shape="rect" href="../../d4/d51/a00017.php" title=" " alt="" coords="254,2096,339,2123"/>
<area shape="rect" href="../../d6/d2d/a00047.php" title=" " alt="" coords="369,2171,456,2197"/>
<area shape="rect" href="../../df/d98/a00107.php" title=" " alt="" coords="271,2245,349,2272"/>
<area shape="rect" href="../../d1/d88/a00128.php" title=" " alt="" coords="370,2320,455,2347"/>
<area shape="rect" href="../../d6/de1/a00233.php" title=" " alt="" coords="453,2395,525,2421"/>
<area shape="rect" href="../../d9/d2e/a00056.php" title=" " alt="" coords="221,2320,346,2347"/>
<area shape="rect" href="../../d5/de0/a00050.php" title=" " alt="" coords="276,2395,347,2421"/>
<area shape="rect" href="../../dd/d32/a00041.php" title=" " alt="" coords="376,2469,449,2496"/>
<area shape="rect" href="../../d0/d89/a00071.php" title=" " alt="" coords="309,2544,423,2571"/>
<area shape="rect" href="../../d3/d00/a00113.php" title=" " alt="" coords="407,2917,503,2944"/>
<area shape="rect" href="../../d1/dc1/a00092.php" title=" " alt="" coords="215,2619,293,2645"/>
<area shape="rect" href="../../d7/d3f/a00173.php" title=" " alt="" coords="331,2619,417,2645"/>
<area shape="rect" href="../../d4/d81/a00110.php" title=" " alt="" coords="99,2693,187,2720"/>
<area shape="rect" href="../../dd/dd7/a00260.php" title=" " alt="" coords="209,2768,299,2795"/>
<area shape="rect" href="../../d7/d46/a00002.php" title=" " alt="" coords="69,2768,156,2795"/>
<area shape="rect" href="../../dd/dad/a00005.php" title=" " alt="" coords="71,2843,138,2869"/>
<area shape="rect" href="../../db/dab/a00089.php" title=" " alt="" coords="289,2917,379,2944"/>
<area shape="rect" href="../../de/d79/a00203.php" title=" " alt="" coords="260,2992,411,3019"/>
<area shape="rect" href="../../d3/db1/a00200.php" title=" " alt="" coords="350,3067,433,3093"/>
<area shape="rect" href="../../d5/df9/a00044.php" title=" " alt="" coords="333,3141,450,3168"/>
<area shape="rect" href="../../db/ddf/a00164.php" title=" " alt="" coords="163,2843,271,2869"/>
<area shape="rect" href="../../de/db1/a00197.php" title=" " alt="" coords="295,2843,373,2869"/>
<area shape="rect" href="../../dd/d52/a00221.php" title=" " alt="" coords="341,2693,423,2720"/>
<area shape="rect" href="../../df/dc8/a00122.php" title=" " alt="" coords="486,2096,561,2123"/>
<area shape="rect" href="../../d2/d1f/a00083.php" title=" " alt="" coords="190,1573,294,1600"/>
<area shape="rect" href="../../dc/d57/a00194.php" title=" " alt="" coords="441,1573,601,1600"/>
<area shape="rect" href="../../d7/d25/a00182.php" title=" " alt="" coords="442,1648,554,1675"/>
<area shape="rect" href="../../da/d15/a00188.php" title=" " alt="" coords="403,1723,561,1749"/>
<area shape="rect" href="../../de/df3/a00185.php" title=" " alt="" coords="389,1797,564,1824"/>
<area shape="rect" href="../../d5/db1/a00140.php" title=" " alt="" coords="415,1872,487,1899"/>
<area shape="rect" href="../../d4/dee/a00008.php" title=" " alt="" coords="639,1872,714,1899"/>
<area shape="rect" href="../../d6/d22/a00245.php" title=" " alt="" coords="739,1872,817,1899"/>
<area shape="rect" href="../../d7/dce/a00143.php" title=" " alt="" coords="411,453,494,480"/>
<area shape="rect" href="../../d0/dc2/a00104.php" title=" " alt="" coords="372,528,467,555"/>
<area shape="rect" href="../../d6/d7d/a00161.php" title=" " alt="" coords="491,528,633,555"/>
<area shape="rect" href="../../d9/db6/a00146.php" title=" " alt="" coords="390,603,473,629"/>
<area shape="rect" href="../../df/d03/a00062.php" title=" " alt="" coords="386,677,477,704"/>
</map>
</div>
</div><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="define-members"></a>
Macros</h2></td></tr>
<tr class="memitem:a921a8364e814a54925abcb8ba8f472bc"><td class="memItemLeft" align="right" valign="top">#define&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d5/de9/a00176.php#a921a8364e814a54925abcb8ba8f472bc">OS_UNRECOGNIZE</a></td></tr>
<tr class="separator:a921a8364e814a54925abcb8ba8f472bc"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><dl class="section author"><dt>Author</dt><dd>Mathias CABIOCH-DELALANDE </dd></dl>
<dl class="section date"><dt>Date</dt><dd>Created : Friday October, 04 2019 16:09:57 </dd>
<dd>
Last modification : Friday October, 04 2019 </dd></dl>
</div><h2 class="groupheader">Macro Definition Documentation</h2>
<a id="a921a8364e814a54925abcb8ba8f472bc"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a921a8364e814a54925abcb8ba8f472bc">&#9670;&nbsp;</a></span>OS_UNRECOGNIZE</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">#define OS_UNRECOGNIZE</td>
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
		<li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_1788504ec76a4dda5464562bc560d0b5.php">C++Tests</a></li><li class="navelem"><a class="el" href="../../dir_2e741febc7df97747a68d36c1b3be5f0.php">C++</a></li><li class="navelem"><a class="el" href="../../dir_220287e732b97f08f66e5f221c69df74.php">inc</a></li><li class="navelem"><a class="el" href="../../dir_75b0389167f46f79a101ef8c4434cec4.php">C++</a></li><li class="navelem"><a class="el" href="../../d5/de9/a00176.php">OsDetection.hpp</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
