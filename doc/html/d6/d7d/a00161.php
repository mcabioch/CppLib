<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.20"/>
		<title>C++: MatrixException.hpp File Reference</title>
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
									&#160;<span id="projectnumber">1.6.2.3</span>
								</div>
								<div id="projectbrief">My own C++ features</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<?php
				$text = "Generated on Mon Nov 16 2020 10:12:13 for C++ by";
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
$(document).ready(function(){initNavTree('d6/d7d/a00161.php','../../'); initResizable(); });
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
<div class="title">MatrixException.hpp File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><code>#include &quot;<a class="el" href="../../d1/d44/a00098.php">exception.hpp</a>&quot;</code><br />
<code>#include &quot;<a class="el" href="../../d7/dce/a00143.php">maths.hpp</a>&quot;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for MatrixException.hpp:</div>
<div class="dyncontent">
<div class="center"><img src="../../db/d44/a00162.png" border="0" usemap="#aMatrixException_8hpp" alt=""/></div>
<map name="MatrixException_8hpp" id="MatrixException_8hpp">
<area shape="rect" title=" " alt="" coords="623,5,765,32"/>
<area shape="rect" href="../../d1/d44/a00098.php" title=" " alt="" coords="584,80,687,107"/>
<area shape="rect" href="../../d7/dce/a00143.php" title=" " alt="" coords="711,80,794,107"/>
<area shape="rect" title=" " alt="" coords="500,155,579,181"/>
<area shape="rect" title=" " alt="" coords="603,155,681,181"/>
<area shape="rect" href="../../d8/d41/a00038.php" title=" " alt="" coords="711,155,794,181"/>
<area shape="rect" href="../../d5/df1/a00206.php" title=" " alt="" coords="706,229,799,256"/>
<area shape="rect" href="../../d3/d1a/a00251.php" title=" " alt="" coords="620,304,699,331"/>
<area shape="rect" title=" " alt="" coords="723,304,782,331"/>
<area shape="rect" title=" " alt="" coords="806,304,865,331"/>
<area shape="rect" href="../../d3/d52/a00023.php" title=" " alt="" coords="383,379,450,405"/>
<area shape="rect" href="../../d3/de5/a00209.php" title=" " alt="" coords="488,379,599,405"/>
<area shape="rect" href="../../dd/dd7/a00248.php" title=" " alt="" coords="623,379,696,405"/>
<area shape="rect" href="../../d7/d03/a00254.php" title=" " alt="" coords="721,379,854,405"/>
<area shape="rect" title=" " alt="" coords="879,379,947,405"/>
<area shape="rect" href="../../d7/d06/a00131.php" title=" " alt="" coords="617,453,729,480"/>
<area shape="rect" href="../../d6/d5b/a00026.php" title=" " alt="" coords="5,453,148,480"/>
<area shape="rect" href="../../d5/d16/a00029.php" title=" " alt="" coords="172,453,312,480"/>
<area shape="rect" href="../../dc/d87/a00032.php" title=" " alt="" coords="337,453,446,480"/>
<area shape="rect" href="../../d4/d8c/a00035.php" title=" " alt="" coords="470,453,593,480"/>
<area shape="rect" href="../../d5/de9/a00176.php" title=" " alt="" coords="613,528,733,555"/>
<area shape="rect" title=" " alt="" coords="581,603,649,629"/>
<area shape="rect" href="../../de/d76/a00134.php" title=" " alt="" coords="673,603,789,629"/>
<area shape="rect" title=" " alt="" coords="245,677,319,704"/>
<area shape="rect" title=" " alt="" coords="343,677,402,704"/>
<area shape="rect" title=" " alt="" coords="427,677,505,704"/>
<area shape="rect" title=" " alt="" coords="530,677,602,704"/>
<area shape="rect" title=" " alt="" coords="627,677,673,704"/>
<area shape="rect" title=" " alt="" coords="697,677,765,704"/>
<area shape="rect" title=" " alt="" coords="789,677,844,704"/>
<area shape="rect" title=" " alt="" coords="869,677,938,704"/>
<area shape="rect" title=" " alt="" coords="963,677,1017,704"/>
<area shape="rect" title=" " alt="" coords="1042,677,1095,704"/>
<area shape="rect" title=" " alt="" coords="1119,677,1178,704"/>
</map>
</div>
</div><div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="../../dd/dae/a00163.png" border="0" usemap="#aMatrixException_8hppdep" alt=""/></div>
<map name="MatrixException_8hppdep" id="MatrixException_8hppdep">
<area shape="rect" title=" " alt="" coords="305,5,446,32"/>
<area shape="rect" href="../../d9/db6/a00146.php" title=" " alt="" coords="334,80,417,107"/>
<area shape="rect" href="../../df/d03/a00062.php" title=" " alt="" coords="330,155,421,181"/>
<area shape="rect" href="../../dc/dee/a00053.php" title=" " alt="" coords="334,229,417,256"/>
<area shape="rect" href="../../da/d45/a00011.php" title=" " alt="" coords="338,304,413,331"/>
<area shape="rect" href="../../db/db6/a00074.php" title=" " alt="" coords="330,379,421,405"/>
<area shape="rect" href="../../de/de1/a00065.php" title=" " alt="" coords="277,453,369,480"/>
<area shape="rect" href="../../d4/d3a/a00101.php" title=" " alt="" coords="393,453,464,480"/>
<area shape="rect" href="../../d9/d77/a00095.php" title=" " alt="" coords="335,528,415,555"/>
<area shape="rect" href="../../d1/da8/a00230.php" title=" " alt="" coords="330,603,421,629"/>
<area shape="rect" href="../../d5/ddf/a00224.php" title=" " alt="" coords="336,677,415,704"/>
<area shape="rect" href="../../d9/d01/a00227.php" title="Used to replace strptime function when compiling for Windows." alt="" coords="335,752,415,779"/>
<area shape="rect" href="../../d2/dc8/a00242.php" title=" " alt="" coords="311,827,440,853"/>
<area shape="rect" href="../../d4/d3e/a00116.php" title=" " alt="" coords="328,901,423,928"/>
<area shape="rect" href="../../d3/d8b/a00059.php" title=" " alt="" coords="5,1125,87,1152"/>
<area shape="rect" href="../../da/d24/a00068.php" title=" " alt="" coords="120,1200,247,1227"/>
<area shape="rect" href="../../da/dec/a00080.php" title=" " alt="" coords="162,976,237,1003"/>
<area shape="rect" href="../../df/d6a/a00119.php" title=" " alt="" coords="318,1051,417,1077"/>
<area shape="rect" href="../../db/dd9/a00179.php" title=" " alt="" coords="413,976,487,1003"/>
<area shape="rect" href="../../d9/dd0/a00191.php" title=" " alt="" coords="511,976,682,1003"/>
<area shape="rect" href="../../dd/dc1/a00212.php" title=" " alt="" coords="586,1125,701,1152"/>
<area shape="rect" href="../../d7/d40/a00236.php" title=" " alt="" coords="715,1275,825,1301"/>
<area shape="rect" href="../../d0/d27/a00239.php" title=" " alt="" coords="261,976,337,1003"/>
<area shape="rect" href="../../da/d2a/a00086.php" title=" " alt="" coords="369,1424,459,1451"/>
<area shape="rect" href="../../db/db2/a00020.php" title=" " alt="" coords="217,1499,377,1525"/>
<area shape="rect" href="../../d1/d09/a00077.php" title=" " alt="" coords="364,1573,461,1600"/>
<area shape="rect" href="../../dc/dfe/a00125.php" title=" " alt="" coords="454,1499,587,1525"/>
<area shape="rect" href="../../d4/d51/a00017.php" title=" " alt="" coords="254,1573,339,1600"/>
<area shape="rect" href="../../d6/d2d/a00047.php" title=" " alt="" coords="369,1648,456,1675"/>
<area shape="rect" href="../../df/d98/a00107.php" title=" " alt="" coords="271,1723,349,1749"/>
<area shape="rect" href="../../d1/d88/a00128.php" title=" " alt="" coords="370,1797,455,1824"/>
<area shape="rect" href="../../d6/de1/a00233.php" title=" " alt="" coords="453,1872,525,1899"/>
<area shape="rect" href="../../d9/d2e/a00056.php" title=" " alt="" coords="221,1797,346,1824"/>
<area shape="rect" href="../../d5/de0/a00050.php" title=" " alt="" coords="276,1872,347,1899"/>
<area shape="rect" href="../../dd/d32/a00041.php" title=" " alt="" coords="376,1947,449,1973"/>
<area shape="rect" href="../../d0/d89/a00071.php" title=" " alt="" coords="309,2021,423,2048"/>
<area shape="rect" href="../../d3/d00/a00113.php" title=" " alt="" coords="407,2395,503,2421"/>
<area shape="rect" href="../../d1/dc1/a00092.php" title=" " alt="" coords="215,2096,293,2123"/>
<area shape="rect" href="../../d7/d3f/a00173.php" title=" " alt="" coords="331,2096,417,2123"/>
<area shape="rect" href="../../d4/d81/a00110.php" title=" " alt="" coords="99,2171,187,2197"/>
<area shape="rect" href="../../dd/dd7/a00260.php" title=" " alt="" coords="209,2245,299,2272"/>
<area shape="rect" href="../../d7/d46/a00002.php" title=" " alt="" coords="69,2245,156,2272"/>
<area shape="rect" href="../../dd/dad/a00005.php" title=" " alt="" coords="71,2320,138,2347"/>
<area shape="rect" href="../../db/dab/a00089.php" title=" " alt="" coords="289,2395,379,2421"/>
<area shape="rect" href="../../de/d79/a00203.php" title=" " alt="" coords="260,2469,411,2496"/>
<area shape="rect" href="../../d3/db1/a00200.php" title=" " alt="" coords="350,2544,433,2571"/>
<area shape="rect" href="../../d5/df9/a00044.php" title=" " alt="" coords="333,2619,450,2645"/>
<area shape="rect" href="../../db/ddf/a00164.php" title=" " alt="" coords="163,2320,271,2347"/>
<area shape="rect" href="../../de/db1/a00197.php" title=" " alt="" coords="295,2320,373,2347"/>
<area shape="rect" href="../../dd/d52/a00221.php" title=" " alt="" coords="341,2171,423,2197"/>
<area shape="rect" href="../../df/dc8/a00122.php" title=" " alt="" coords="486,1573,561,1600"/>
<area shape="rect" href="../../d2/d1f/a00083.php" title=" " alt="" coords="190,1051,294,1077"/>
<area shape="rect" href="../../dc/d57/a00194.php" title=" " alt="" coords="441,1051,601,1077"/>
<area shape="rect" href="../../d7/d25/a00182.php" title=" " alt="" coords="442,1125,554,1152"/>
<area shape="rect" href="../../da/d15/a00188.php" title=" " alt="" coords="403,1200,561,1227"/>
<area shape="rect" href="../../de/df3/a00185.php" title=" " alt="" coords="389,1275,564,1301"/>
<area shape="rect" href="../../d5/db1/a00140.php" title=" " alt="" coords="415,1349,487,1376"/>
<area shape="rect" href="../../d4/dee/a00008.php" title=" " alt="" coords="639,1349,714,1376"/>
<area shape="rect" href="../../d6/d22/a00245.php" title=" " alt="" coords="739,1349,817,1376"/>
</map>
</div>
</div><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Classes</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d5/da0/a01342.php">mcd::MatrixException</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A class to throw some exceptions for a <a class="el" href="../../d2/d4d/a01338.php" title="A class to represent matrix.">Matrix</a> instance.  <a href="../../d5/da0/a01342.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="namespaces"></a>
Namespaces</h2></td></tr>
<tr class="memitem:db/d12/a00268"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php">mcd</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><dl class="section author"><dt>Author</dt><dd>Mathias CABIOCH-DELALANDE </dd></dl>
<dl class="section date"><dt>Date</dt><dd>Created : Sunday November, 01 2020 19:05:50 </dd>
<dd>
Last modification : Sunday November, 01 2020 </dd></dl>
</div></div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_1788504ec76a4dda5464562bc560d0b5.php">C++Tests</a></li><li class="navelem"><a class="el" href="../../dir_2e741febc7df97747a68d36c1b3be5f0.php">C++</a></li><li class="navelem"><a class="el" href="../../dir_220287e732b97f08f66e5f221c69df74.php">inc</a></li><li class="navelem"><a class="el" href="../../dir_75b0389167f46f79a101ef8c4434cec4.php">C++</a></li><li class="navelem"><a class="el" href="../../d6/d7d/a00161.php">MatrixException.hpp</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
