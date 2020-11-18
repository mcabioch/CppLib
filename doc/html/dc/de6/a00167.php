<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.20"/>
		<title>C++: NotCopyable.hpp File Reference</title>
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
				$text = "Generated on Tue Nov 17 2020 15:27:34 for C++ by";
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
$(document).ready(function(){initNavTree('dc/de6/a00167.php','../../'); initResizable(); });
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
<div class="title">NotCopyable.hpp File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="../../de/d53/a00169.png" border="0" usemap="#aNotCopyable_8hppdep" alt=""/></div>
<map name="NotCopyable_8hppdep" id="NotCopyable_8hppdep">
<area shape="rect" title=" " alt="" coords="314,5,437,32"/>
<area shape="rect" href="../../d4/d3e/a00116.php" title=" " alt="" coords="328,80,423,107"/>
<area shape="rect" href="../../d3/d8b/a00059.php" title=" " alt="" coords="5,304,87,331"/>
<area shape="rect" href="../../da/d24/a00068.php" title=" " alt="" coords="116,379,243,405"/>
<area shape="rect" href="../../da/dec/a00080.php" title=" " alt="" coords="162,155,237,181"/>
<area shape="rect" href="../../df/d6a/a00119.php" title=" " alt="" coords="318,229,417,256"/>
<area shape="rect" href="../../db/dd9/a00179.php" title=" " alt="" coords="413,155,487,181"/>
<area shape="rect" href="../../d9/dd0/a00191.php" title=" " alt="" coords="511,155,682,181"/>
<area shape="rect" href="../../dd/dc1/a00212.php" title=" " alt="" coords="610,304,725,331"/>
<area shape="rect" href="../../d7/d40/a00236.php" title=" " alt="" coords="715,453,825,480"/>
<area shape="rect" href="../../d0/d27/a00239.php" title=" " alt="" coords="261,155,337,181"/>
<area shape="rect" href="../../da/d2a/a00086.php" title=" " alt="" coords="369,603,459,629"/>
<area shape="rect" href="../../db/db2/a00020.php" title=" " alt="" coords="217,677,377,704"/>
<area shape="rect" href="../../d1/d09/a00077.php" title=" " alt="" coords="364,752,461,779"/>
<area shape="rect" href="../../dc/dfe/a00125.php" title=" " alt="" coords="454,677,587,704"/>
<area shape="rect" href="../../d4/d51/a00017.php" title=" " alt="" coords="254,752,339,779"/>
<area shape="rect" href="../../d6/d2d/a00047.php" title=" " alt="" coords="369,827,456,853"/>
<area shape="rect" href="../../df/d98/a00107.php" title=" " alt="" coords="271,901,349,928"/>
<area shape="rect" href="../../d1/d88/a00128.php" title=" " alt="" coords="370,976,455,1003"/>
<area shape="rect" href="../../d6/de1/a00233.php" title=" " alt="" coords="453,1051,525,1077"/>
<area shape="rect" href="../../d9/d2e/a00056.php" title=" " alt="" coords="221,976,346,1003"/>
<area shape="rect" href="../../d5/de0/a00050.php" title=" " alt="" coords="276,1051,347,1077"/>
<area shape="rect" href="../../dd/d32/a00041.php" title=" " alt="" coords="376,1125,449,1152"/>
<area shape="rect" href="../../d0/d89/a00071.php" title=" " alt="" coords="309,1200,423,1227"/>
<area shape="rect" href="../../d3/d00/a00113.php" title=" " alt="" coords="407,1573,503,1600"/>
<area shape="rect" href="../../d1/dc1/a00092.php" title=" " alt="" coords="215,1275,293,1301"/>
<area shape="rect" href="../../d7/d3f/a00173.php" title=" " alt="" coords="331,1275,417,1301"/>
<area shape="rect" href="../../d4/d81/a00110.php" title=" " alt="" coords="99,1349,187,1376"/>
<area shape="rect" href="../../dd/dd7/a00260.php" title=" " alt="" coords="209,1424,299,1451"/>
<area shape="rect" href="../../d7/d46/a00002.php" title=" " alt="" coords="69,1424,156,1451"/>
<area shape="rect" href="../../dd/dad/a00005.php" title=" " alt="" coords="71,1499,138,1525"/>
<area shape="rect" href="../../db/dab/a00089.php" title=" " alt="" coords="289,1573,379,1600"/>
<area shape="rect" href="../../de/d79/a00203.php" title=" " alt="" coords="260,1648,411,1675"/>
<area shape="rect" href="../../d3/db1/a00200.php" title=" " alt="" coords="350,1723,433,1749"/>
<area shape="rect" href="../../d5/df9/a00044.php" title=" " alt="" coords="333,1797,450,1824"/>
<area shape="rect" href="../../db/ddf/a00164.php" title=" " alt="" coords="163,1499,271,1525"/>
<area shape="rect" href="../../de/db1/a00197.php" title=" " alt="" coords="295,1499,373,1525"/>
<area shape="rect" href="../../dd/d52/a00221.php" title=" " alt="" coords="341,1349,423,1376"/>
<area shape="rect" href="../../df/dc8/a00122.php" title=" " alt="" coords="486,752,561,779"/>
<area shape="rect" href="../../d2/d1f/a00083.php" title=" " alt="" coords="190,229,294,256"/>
<area shape="rect" href="../../dc/d57/a00194.php" title=" " alt="" coords="441,229,601,256"/>
<area shape="rect" href="../../d7/d25/a00182.php" title=" " alt="" coords="445,304,557,331"/>
<area shape="rect" href="../../da/d15/a00188.php" title=" " alt="" coords="402,379,559,405"/>
<area shape="rect" href="../../de/df3/a00185.php" title=" " alt="" coords="389,453,564,480"/>
<area shape="rect" href="../../d5/db1/a00140.php" title=" " alt="" coords="415,528,487,555"/>
<area shape="rect" href="../../d4/dee/a00008.php" title=" " alt="" coords="639,528,714,555"/>
<area shape="rect" href="../../d6/d22/a00245.php" title=" " alt="" coords="739,528,817,555"/>
</map>
</div>
</div><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Classes</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d1/dcd/a01351.php">mcd::NotCopyable</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A class to let some other not to be copyable.  <a href="../../d1/dcd/a01351.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="namespaces"></a>
Namespaces</h2></td></tr>
<tr class="memitem:db/d12/a00268"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php">mcd</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><dl class="section author"><dt>Author</dt><dd>Mathias CABIOCH-DELALANDE </dd></dl>
<dl class="section date"><dt>Date</dt><dd>Created : Monday August, 06 2018 06:55:14 </dd>
<dd>
Last modification : September, 29 2019 </dd></dl>
</div></div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_1788504ec76a4dda5464562bc560d0b5.php">C++Tests</a></li><li class="navelem"><a class="el" href="../../dir_2e741febc7df97747a68d36c1b3be5f0.php">C++</a></li><li class="navelem"><a class="el" href="../../dir_220287e732b97f08f66e5f221c69df74.php">inc</a></li><li class="navelem"><a class="el" href="../../dir_75b0389167f46f79a101ef8c4434cec4.php">C++</a></li><li class="navelem"><a class="el" href="../../dc/de6/a00167.php">NotCopyable.hpp</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
