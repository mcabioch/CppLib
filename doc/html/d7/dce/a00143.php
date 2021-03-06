<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.20"/>
		<title>C++: maths.hpp File Reference</title>
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
$(document).ready(function(){initNavTree('d7/dce/a00143.php','../../'); initResizable(); });
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
<div class="title">maths.hpp File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><code>#include &quot;<a class="el" href="../../d8/d41/a00038.php">Binary.hpp</a>&quot;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for maths.hpp:</div>
<div class="dyncontent">
<div class="center"><img src="../../d5/da7/a00144.png" border="0" usemap="#amaths_8hpp" alt=""/></div>
<map name="maths_8hpp" id="maths_8hpp">
<area shape="rect" title=" " alt="" coords="711,5,794,32"/>
<area shape="rect" href="../../d8/d41/a00038.php" title=" " alt="" coords="711,80,794,107"/>
<area shape="rect" href="../../d5/df1/a00206.php" title=" " alt="" coords="706,155,799,181"/>
<area shape="rect" href="../../d3/d1a/a00251.php" title=" " alt="" coords="620,229,699,256"/>
<area shape="rect" title=" " alt="" coords="723,229,782,256"/>
<area shape="rect" title=" " alt="" coords="806,229,865,256"/>
<area shape="rect" href="../../d3/d52/a00023.php" title=" " alt="" coords="383,304,450,331"/>
<area shape="rect" href="../../d3/de5/a00209.php" title=" " alt="" coords="488,304,599,331"/>
<area shape="rect" href="../../dd/dd7/a00248.php" title=" " alt="" coords="623,304,696,331"/>
<area shape="rect" href="../../d7/d03/a00254.php" title=" " alt="" coords="721,304,854,331"/>
<area shape="rect" title=" " alt="" coords="879,304,947,331"/>
<area shape="rect" href="../../d7/d06/a00131.php" title=" " alt="" coords="617,379,729,405"/>
<area shape="rect" href="../../d6/d5b/a00026.php" title=" " alt="" coords="5,379,148,405"/>
<area shape="rect" href="../../d5/d16/a00029.php" title=" " alt="" coords="172,379,312,405"/>
<area shape="rect" href="../../dc/d87/a00032.php" title=" " alt="" coords="337,379,446,405"/>
<area shape="rect" href="../../d4/d8c/a00035.php" title=" " alt="" coords="470,379,593,405"/>
<area shape="rect" href="../../d5/de9/a00176.php" title=" " alt="" coords="613,453,733,480"/>
<area shape="rect" title=" " alt="" coords="581,528,649,555"/>
<area shape="rect" href="../../de/d76/a00134.php" title=" " alt="" coords="673,528,789,555"/>
<area shape="rect" title=" " alt="" coords="245,603,319,629"/>
<area shape="rect" title=" " alt="" coords="343,603,402,629"/>
<area shape="rect" title=" " alt="" coords="427,603,505,629"/>
<area shape="rect" title=" " alt="" coords="530,603,602,629"/>
<area shape="rect" title=" " alt="" coords="627,603,673,629"/>
<area shape="rect" title=" " alt="" coords="697,603,765,629"/>
<area shape="rect" title=" " alt="" coords="789,603,844,629"/>
<area shape="rect" title=" " alt="" coords="869,603,938,629"/>
<area shape="rect" title=" " alt="" coords="963,603,1017,629"/>
<area shape="rect" title=" " alt="" coords="1042,603,1095,629"/>
<area shape="rect" title=" " alt="" coords="1119,603,1178,629"/>
</map>
</div>
</div><div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="../../da/ddb/a00145.png" border="0" usemap="#amaths_8hppdep" alt=""/></div>
<map name="maths_8hppdep" id="maths_8hppdep">
<area shape="rect" title=" " alt="" coords="334,5,417,32"/>
<area shape="rect" href="../../d0/dc2/a00104.php" title=" " alt="" coords="257,80,352,107"/>
<area shape="rect" href="../../d6/d7d/a00161.php" title=" " alt="" coords="377,80,518,107"/>
<area shape="rect" href="../../d9/db6/a00146.php" title=" " alt="" coords="334,155,417,181"/>
<area shape="rect" href="../../df/d03/a00062.php" title=" " alt="" coords="330,229,421,256"/>
<area shape="rect" href="../../dc/dee/a00053.php" title=" " alt="" coords="334,304,417,331"/>
<area shape="rect" href="../../da/d45/a00011.php" title=" " alt="" coords="338,379,413,405"/>
<area shape="rect" href="../../db/db6/a00074.php" title=" " alt="" coords="330,453,421,480"/>
<area shape="rect" href="../../de/de1/a00065.php" title=" " alt="" coords="277,528,369,555"/>
<area shape="rect" href="../../d4/d3a/a00101.php" title=" " alt="" coords="393,528,464,555"/>
<area shape="rect" href="../../d9/d77/a00095.php" title=" " alt="" coords="335,603,415,629"/>
<area shape="rect" href="../../d1/da8/a00230.php" title=" " alt="" coords="330,677,421,704"/>
<area shape="rect" href="../../d5/ddf/a00224.php" title=" " alt="" coords="336,752,415,779"/>
<area shape="rect" href="../../d9/d01/a00227.php" title="Used to replace strptime function when compiling for Windows." alt="" coords="335,827,415,853"/>
<area shape="rect" href="../../d2/dc8/a00242.php" title=" " alt="" coords="311,901,440,928"/>
<area shape="rect" href="../../d4/d3e/a00116.php" title=" " alt="" coords="328,976,423,1003"/>
<area shape="rect" href="../../d3/d8b/a00059.php" title=" " alt="" coords="5,1200,87,1227"/>
<area shape="rect" href="../../da/d24/a00068.php" title=" " alt="" coords="120,1275,247,1301"/>
<area shape="rect" href="../../da/dec/a00080.php" title=" " alt="" coords="162,1051,237,1077"/>
<area shape="rect" href="../../df/d6a/a00119.php" title=" " alt="" coords="318,1125,417,1152"/>
<area shape="rect" href="../../db/dd9/a00179.php" title=" " alt="" coords="413,1051,487,1077"/>
<area shape="rect" href="../../d9/dd0/a00191.php" title=" " alt="" coords="511,1051,682,1077"/>
<area shape="rect" href="../../dd/dc1/a00212.php" title=" " alt="" coords="586,1200,701,1227"/>
<area shape="rect" href="../../d7/d40/a00236.php" title=" " alt="" coords="715,1349,825,1376"/>
<area shape="rect" href="../../d0/d27/a00239.php" title=" " alt="" coords="261,1051,337,1077"/>
<area shape="rect" href="../../da/d2a/a00086.php" title=" " alt="" coords="369,1499,459,1525"/>
<area shape="rect" href="../../db/db2/a00020.php" title=" " alt="" coords="217,1573,377,1600"/>
<area shape="rect" href="../../d1/d09/a00077.php" title=" " alt="" coords="364,1648,461,1675"/>
<area shape="rect" href="../../dc/dfe/a00125.php" title=" " alt="" coords="454,1573,587,1600"/>
<area shape="rect" href="../../d4/d51/a00017.php" title=" " alt="" coords="254,1648,339,1675"/>
<area shape="rect" href="../../d6/d2d/a00047.php" title=" " alt="" coords="369,1723,456,1749"/>
<area shape="rect" href="../../df/d98/a00107.php" title=" " alt="" coords="271,1797,349,1824"/>
<area shape="rect" href="../../d1/d88/a00128.php" title=" " alt="" coords="370,1872,455,1899"/>
<area shape="rect" href="../../d6/de1/a00233.php" title=" " alt="" coords="453,1947,525,1973"/>
<area shape="rect" href="../../d9/d2e/a00056.php" title=" " alt="" coords="221,1872,346,1899"/>
<area shape="rect" href="../../d5/de0/a00050.php" title=" " alt="" coords="276,1947,347,1973"/>
<area shape="rect" href="../../dd/d32/a00041.php" title=" " alt="" coords="376,2021,449,2048"/>
<area shape="rect" href="../../d0/d89/a00071.php" title=" " alt="" coords="309,2096,423,2123"/>
<area shape="rect" href="../../d3/d00/a00113.php" title=" " alt="" coords="407,2469,503,2496"/>
<area shape="rect" href="../../d1/dc1/a00092.php" title=" " alt="" coords="215,2171,293,2197"/>
<area shape="rect" href="../../d7/d3f/a00173.php" title=" " alt="" coords="331,2171,417,2197"/>
<area shape="rect" href="../../d4/d81/a00110.php" title=" " alt="" coords="99,2245,187,2272"/>
<area shape="rect" href="../../dd/dd7/a00260.php" title=" " alt="" coords="209,2320,299,2347"/>
<area shape="rect" href="../../d7/d46/a00002.php" title=" " alt="" coords="69,2320,156,2347"/>
<area shape="rect" href="../../dd/dad/a00005.php" title=" " alt="" coords="71,2395,138,2421"/>
<area shape="rect" href="../../db/dab/a00089.php" title=" " alt="" coords="289,2469,379,2496"/>
<area shape="rect" href="../../de/d79/a00203.php" title=" " alt="" coords="260,2544,411,2571"/>
<area shape="rect" href="../../d3/db1/a00200.php" title=" " alt="" coords="350,2619,433,2645"/>
<area shape="rect" href="../../d5/df9/a00044.php" title=" " alt="" coords="333,2693,450,2720"/>
<area shape="rect" href="../../db/ddf/a00164.php" title=" " alt="" coords="163,2395,271,2421"/>
<area shape="rect" href="../../de/db1/a00197.php" title=" " alt="" coords="295,2395,373,2421"/>
<area shape="rect" href="../../dd/d52/a00221.php" title=" " alt="" coords="341,2245,423,2272"/>
<area shape="rect" href="../../df/dc8/a00122.php" title=" " alt="" coords="486,1648,561,1675"/>
<area shape="rect" href="../../d2/d1f/a00083.php" title=" " alt="" coords="190,1125,294,1152"/>
<area shape="rect" href="../../dc/d57/a00194.php" title=" " alt="" coords="441,1125,601,1152"/>
<area shape="rect" href="../../d7/d25/a00182.php" title=" " alt="" coords="442,1200,554,1227"/>
<area shape="rect" href="../../da/d15/a00188.php" title=" " alt="" coords="403,1275,561,1301"/>
<area shape="rect" href="../../de/df3/a00185.php" title=" " alt="" coords="389,1349,564,1376"/>
<area shape="rect" href="../../d5/db1/a00140.php" title=" " alt="" coords="415,1424,487,1451"/>
<area shape="rect" href="../../d4/dee/a00008.php" title=" " alt="" coords="639,1424,714,1451"/>
<area shape="rect" href="../../d6/d22/a00245.php" title=" " alt="" coords="739,1424,817,1451"/>
</map>
</div>
</div><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="namespaces"></a>
Namespaces</h2></td></tr>
<tr class="memitem:db/d12/a00268"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php">mcd</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:ab001b84d20c0fffe59c7a55ed872d300"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#ab001b84d20c0fffe59c7a55ed872d300">mcd::isLuhn</a> (const std::string &amp;num)</td></tr>
<tr class="memdesc:ab001b84d20c0fffe59c7a55ed872d300"><td class="mdescLeft">&#160;</td><td class="mdescRight">Validate a number like a card number, a SIRET number, ...  <a href="../../db/d12/a00268.php#ab001b84d20c0fffe59c7a55ed872d300">More...</a><br /></td></tr>
<tr class="separator:ab001b84d20c0fffe59c7a55ed872d300"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a176933d706495ddff7385a68319e7169"><td class="memItemLeft" align="right" valign="top">int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#a176933d706495ddff7385a68319e7169">mcd::luhn</a> (const std::string &amp;num)</td></tr>
<tr class="memdesc:a176933d706495ddff7385a68319e7169"><td class="mdescLeft">&#160;</td><td class="mdescRight">Compute the checksum number.  <a href="../../db/d12/a00268.php#a176933d706495ddff7385a68319e7169">More...</a><br /></td></tr>
<tr class="separator:a176933d706495ddff7385a68319e7169"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:af9443ebf71fe196006831fe344a09f13"><td class="memTemplParams" colspan="2">template&lt;typename V &gt; </td></tr>
<tr class="memitem:af9443ebf71fe196006831fe344a09f13"><td class="memTemplItemLeft" align="right" valign="top">V&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#af9443ebf71fe196006831fe344a09f13">mcd::wholePart</a> (V a)</td></tr>
<tr class="memdesc:af9443ebf71fe196006831fe344a09f13"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the whole part of the given number.  <a href="../../db/d12/a00268.php#af9443ebf71fe196006831fe344a09f13">More...</a><br /></td></tr>
<tr class="separator:af9443ebf71fe196006831fe344a09f13"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a0598b7abd7e7441f6553f1b486053945"><td class="memTemplParams" colspan="2">template&lt;typename V &gt; </td></tr>
<tr class="memitem:a0598b7abd7e7441f6553f1b486053945"><td class="memTemplItemLeft" align="right" valign="top">V&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#a0598b7abd7e7441f6553f1b486053945">mcd::decimalPart</a> (V a)</td></tr>
<tr class="memdesc:a0598b7abd7e7441f6553f1b486053945"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the decimal part of the given number.  <a href="../../db/d12/a00268.php#a0598b7abd7e7441f6553f1b486053945">More...</a><br /></td></tr>
<tr class="separator:a0598b7abd7e7441f6553f1b486053945"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:af44c5ff8cc0a054f720ed177e7e44265"><td class="memTemplParams" colspan="2">template&lt;typename V , typename U &gt; </td></tr>
<tr class="memitem:af44c5ff8cc0a054f720ed177e7e44265"><td class="memTemplItemLeft" align="right" valign="top">V&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#af44c5ff8cc0a054f720ed177e7e44265">mcd::mod</a> (V a, U b, bool positive=false)</td></tr>
<tr class="memdesc:af44c5ff8cc0a054f720ed177e7e44265"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the modulo of two numbers.  <a href="../../db/d12/a00268.php#af44c5ff8cc0a054f720ed177e7e44265">More...</a><br /></td></tr>
<tr class="separator:af44c5ff8cc0a054f720ed177e7e44265"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a6f68c011df46f54833bbda0ac9de04e2"><td class="memTemplParams" colspan="2">template&lt;typename V , typename U &gt; </td></tr>
<tr class="memitem:a6f68c011df46f54833bbda0ac9de04e2"><td class="memTemplItemLeft" align="right" valign="top">V&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#a6f68c011df46f54833bbda0ac9de04e2">mcd::invmod</a> (V a, U b, bool positive=false)</td></tr>
<tr class="memdesc:a6f68c011df46f54833bbda0ac9de04e2"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the modular inverse of a number.  <a href="../../db/d12/a00268.php#a6f68c011df46f54833bbda0ac9de04e2">More...</a><br /></td></tr>
<tr class="separator:a6f68c011df46f54833bbda0ac9de04e2"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a0f3f4e24615446479ff59ce15ce61cde"><td class="memTemplParams" colspan="2">template&lt;typename V &gt; </td></tr>
<tr class="memitem:a0f3f4e24615446479ff59ce15ce61cde"><td class="memTemplItemLeft" align="right" valign="top">V&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#a0f3f4e24615446479ff59ce15ce61cde">mcd::pgcd</a> (V a, V b)</td></tr>
<tr class="memdesc:a0f3f4e24615446479ff59ce15ce61cde"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the result of the pgcd.  <a href="../../db/d12/a00268.php#a0f3f4e24615446479ff59ce15ce61cde">More...</a><br /></td></tr>
<tr class="separator:a0f3f4e24615446479ff59ce15ce61cde"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a10764d50321a1ff81cc7cd4a9f7e42bc"><td class="memTemplParams" colspan="2">template&lt;typename V &gt; </td></tr>
<tr class="memitem:a10764d50321a1ff81cc7cd4a9f7e42bc"><td class="memTemplItemLeft" align="right" valign="top">V&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#a10764d50321a1ff81cc7cd4a9f7e42bc">mcd::eucl</a> (V a, V b)</td></tr>
<tr class="memdesc:a10764d50321a1ff81cc7cd4a9f7e42bc"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the result of the euclidian function.  <a href="../../db/d12/a00268.php#a10764d50321a1ff81cc7cd4a9f7e42bc">More...</a><br /></td></tr>
<tr class="separator:a10764d50321a1ff81cc7cd4a9f7e42bc"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a4d75f23c9b03fd2c56324895d0ff3c58"><td class="memTemplParams" colspan="2">template&lt;class T &gt; </td></tr>
<tr class="memitem:a4d75f23c9b03fd2c56324895d0ff3c58"><td class="memTemplItemLeft" align="right" valign="top">T&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#a4d75f23c9b03fd2c56324895d0ff3c58">mcd::dist</a> (T x1, T x2, T y1, T y2, T z1=0, T z2=0)</td></tr>
<tr class="memdesc:a4d75f23c9b03fd2c56324895d0ff3c58"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the distance of the given coordinates.  <a href="../../db/d12/a00268.php#a4d75f23c9b03fd2c56324895d0ff3c58">More...</a><br /></td></tr>
<tr class="separator:a4d75f23c9b03fd2c56324895d0ff3c58"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a900f9e45ac94dbf01c4b67fb40682118"><td class="memItemLeft" align="right" valign="top">double64_t&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#a900f9e45ac94dbf01c4b67fb40682118">mcd::dist</a> (const Point &amp;ptA, const Point &amp;ptB)</td></tr>
<tr class="memdesc:a900f9e45ac94dbf01c4b67fb40682118"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the distance between the two given points.  <a href="../../db/d12/a00268.php#a900f9e45ac94dbf01c4b67fb40682118">More...</a><br /></td></tr>
<tr class="separator:a900f9e45ac94dbf01c4b67fb40682118"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a9adc0354f681800c75d220e526377397"><td class="memTemplParams" colspan="2">template&lt;class T &gt; </td></tr>
<tr class="memitem:a9adc0354f681800c75d220e526377397"><td class="memTemplItemLeft" align="right" valign="top">T&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#a9adc0354f681800c75d220e526377397">mcd::sq</a> (T in)</td></tr>
<tr class="memdesc:a9adc0354f681800c75d220e526377397"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the square of the given number.  <a href="../../db/d12/a00268.php#a9adc0354f681800c75d220e526377397">More...</a><br /></td></tr>
<tr class="separator:a9adc0354f681800c75d220e526377397"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a4af7738b8b199b0b0868819828bf3f4f"><td class="memTemplParams" colspan="2">template&lt;class T &gt; </td></tr>
<tr class="memitem:a4af7738b8b199b0b0868819828bf3f4f"><td class="memTemplItemLeft" align="right" valign="top">T&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#a4af7738b8b199b0b0868819828bf3f4f">mcd::abs</a> (T in)</td></tr>
<tr class="memdesc:a4af7738b8b199b0b0868819828bf3f4f"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the absolute value of the given number.  <a href="../../db/d12/a00268.php#a4af7738b8b199b0b0868819828bf3f4f">More...</a><br /></td></tr>
<tr class="separator:a4af7738b8b199b0b0868819828bf3f4f"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:abc683613235e8674b000071c25747728"><td class="memTemplParams" colspan="2">template&lt;typename T , typename V , typename U  = typename std::conditional&lt;                  std::is_integral&lt; T &gt;::value &amp;&amp; std::is_integral&lt; V &gt;::value ||                      std::is_floating_point&lt; T &gt;::value &amp;&amp; std::is_floating_point&lt; V &gt;::value,                  typename std::conditional&lt; sizeof(T) &gt;= sizeof(V), T, V &gt;::type, typename std::conditional&lt; std::is_floating_point&lt; T &gt;::value &amp;&amp;std::is_integral&lt; V &gt;::value, T, typename std::conditional&lt; std::is_floating_point&lt; V &gt;::value &amp;&amp;std::is_integral&lt; T &gt;::value, V, V &gt;::type &gt;::type &gt; </td></tr>
<tr class="memitem:abc683613235e8674b000071c25747728"><td class="memTemplItemLeft" align="right" valign="top">::type U&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#abc683613235e8674b000071c25747728">mcd::min</a> (T a, V b)</td></tr>
<tr class="memdesc:abc683613235e8674b000071c25747728"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the minimum of the arguments.  <a href="../../db/d12/a00268.php#abc683613235e8674b000071c25747728">More...</a><br /></td></tr>
<tr class="separator:abc683613235e8674b000071c25747728"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a50e5370a188b7230c0dce47cc746f533"><td class="memTemplParams" colspan="2">template&lt;typename T , typename V , typename U  = typename std::conditional&lt;                  std::is_integral&lt; T &gt;::value &amp;&amp; std::is_integral&lt; V &gt;::value ||                      std::is_floating_point&lt; T &gt;::value &amp;&amp; std::is_floating_point&lt; V &gt;::value,                  typename std::conditional&lt; sizeof(T) &gt;= sizeof(V), T, V &gt;::type, typename std::conditional&lt; std::is_floating_point&lt; T &gt;::value &amp;&amp;std::is_integral&lt; V &gt;::value, T, typename std::conditional&lt; std::is_floating_point&lt; V &gt;::value &amp;&amp;std::is_integral&lt; T &gt;::value, V, V &gt;::type &gt;::type &gt; </td></tr>
<tr class="memitem:a50e5370a188b7230c0dce47cc746f533"><td class="memTemplItemLeft" align="right" valign="top">::type U&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#a50e5370a188b7230c0dce47cc746f533">mcd::max</a> (T a, V b)</td></tr>
<tr class="memdesc:a50e5370a188b7230c0dce47cc746f533"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the maximum of the arguments.  <a href="../../db/d12/a00268.php#a50e5370a188b7230c0dce47cc746f533">More...</a><br /></td></tr>
<tr class="separator:a50e5370a188b7230c0dce47cc746f533"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a7e1c88cc52e517f309354a546e78f403"><td class="memTemplParams" colspan="2">template&lt;class T &gt; </td></tr>
<tr class="memitem:a7e1c88cc52e517f309354a546e78f403"><td class="memTemplItemLeft" align="right" valign="top">T&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#a7e1c88cc52e517f309354a546e78f403">mcd::round</a> (T a, int zeros=0)</td></tr>
<tr class="memdesc:a7e1c88cc52e517f309354a546e78f403"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the round of the given number.  <a href="../../db/d12/a00268.php#a7e1c88cc52e517f309354a546e78f403">More...</a><br /></td></tr>
<tr class="separator:a7e1c88cc52e517f309354a546e78f403"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ad3913978376bb08e036a7bf0b21d6b50"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#ad3913978376bb08e036a7bf0b21d6b50">mcd::isPrime</a> (float nb)</td></tr>
<tr class="memdesc:ad3913978376bb08e036a7bf0b21d6b50"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return true if the given number is prime, false either.  <a href="../../db/d12/a00268.php#ad3913978376bb08e036a7bf0b21d6b50">More...</a><br /></td></tr>
<tr class="separator:ad3913978376bb08e036a7bf0b21d6b50"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a6a0096efe278298f80c641af617dd216"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#a6a0096efe278298f80c641af617dd216">mcd::isNumber</a> (char c)</td></tr>
<tr class="memdesc:a6a0096efe278298f80c641af617dd216"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return true if the caracter is a number.  <a href="../../db/d12/a00268.php#a6a0096efe278298f80c641af617dd216">More...</a><br /></td></tr>
<tr class="separator:a6a0096efe278298f80c641af617dd216"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a2d67b0e24c6216a693a903f5bc8c31a0"><td class="memItemLeft" align="right" valign="top">double64_t&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#a2d67b0e24c6216a693a903f5bc8c31a0">mcd::sigmoide</a> (double64_t in)</td></tr>
<tr class="memdesc:a2d67b0e24c6216a693a903f5bc8c31a0"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the result of the sigmoide function.  <a href="../../db/d12/a00268.php#a2d67b0e24c6216a693a903f5bc8c31a0">More...</a><br /></td></tr>
<tr class="separator:a2d67b0e24c6216a693a903f5bc8c31a0"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a9042d2e8e9a6311b4260c6f376f4072c"><td class="memItemLeft" align="right" valign="top">double64_t&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#a9042d2e8e9a6311b4260c6f376f4072c">mcd::dsigmoide</a> (double64_t in)</td></tr>
<tr class="memdesc:a9042d2e8e9a6311b4260c6f376f4072c"><td class="mdescLeft">&#160;</td><td class="mdescRight">Compute with the derivated sigmoide.  <a href="../../db/d12/a00268.php#a9042d2e8e9a6311b4260c6f376f4072c">More...</a><br /></td></tr>
<tr class="separator:a9042d2e8e9a6311b4260c6f376f4072c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a9db342c58a4088c0753e28475e369323"><td class="memItemLeft" align="right" valign="top">double64_t&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#a9db342c58a4088c0753e28475e369323">mcd::tanh</a> (double64_t in)</td></tr>
<tr class="memdesc:a9db342c58a4088c0753e28475e369323"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the result of the tanh function.  <a href="../../db/d12/a00268.php#a9db342c58a4088c0753e28475e369323">More...</a><br /></td></tr>
<tr class="separator:a9db342c58a4088c0753e28475e369323"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a9767e5acc7c07b8ef837e2485dfc3ec5"><td class="memItemLeft" align="right" valign="top">double64_t&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#a9767e5acc7c07b8ef837e2485dfc3ec5">mcd::dtanh</a> (double64_t in)</td></tr>
<tr class="memdesc:a9767e5acc7c07b8ef837e2485dfc3ec5"><td class="mdescLeft">&#160;</td><td class="mdescRight">Compute with the derivated tanh.  <a href="../../db/d12/a00268.php#a9767e5acc7c07b8ef837e2485dfc3ec5">More...</a><br /></td></tr>
<tr class="separator:a9767e5acc7c07b8ef837e2485dfc3ec5"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a69d6be0b9d139073dda5e708c76dccdd"><td class="memItemLeft" align="right" valign="top">int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#a69d6be0b9d139073dda5e708c76dccdd">mcd::log2p</a> (int x)</td></tr>
<tr class="memdesc:a69d6be0b9d139073dda5e708c76dccdd"><td class="mdescLeft">&#160;</td><td class="mdescRight">Do the log of x in base 2.  <a href="../../db/d12/a00268.php#a69d6be0b9d139073dda5e708c76dccdd">More...</a><br /></td></tr>
<tr class="separator:a69d6be0b9d139073dda5e708c76dccdd"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a77f16d62ba2ac4c7ad44d4459f149b2e"><td class="memTemplParams" colspan="2">template&lt;class T &gt; </td></tr>
<tr class="memitem:a77f16d62ba2ac4c7ad44d4459f149b2e"><td class="memTemplItemLeft" align="right" valign="top">T&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#a77f16d62ba2ac4c7ad44d4459f149b2e">mcd::Q_rsqrt</a> (T number)</td></tr>
<tr class="memdesc:a77f16d62ba2ac4c7ad44d4459f149b2e"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return the inverse square root with a float precision.  <a href="../../db/d12/a00268.php#a77f16d62ba2ac4c7ad44d4459f149b2e">More...</a><br /></td></tr>
<tr class="separator:a77f16d62ba2ac4c7ad44d4459f149b2e"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><dl class="section author"><dt>Author</dt><dd>Mathias CABIOCH-DELALANDE </dd></dl>
<dl class="section date"><dt>Date</dt><dd>Created : August, 14 2018 </dd>
<dd>
Last modification : November, 18 2020 </dd></dl>
</div></div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_1788504ec76a4dda5464562bc560d0b5.php">C++Tests</a></li><li class="navelem"><a class="el" href="../../dir_2e741febc7df97747a68d36c1b3be5f0.php">C++</a></li><li class="navelem"><a class="el" href="../../dir_220287e732b97f08f66e5f221c69df74.php">inc</a></li><li class="navelem"><a class="el" href="../../dir_75b0389167f46f79a101ef8c4434cec4.php">C++</a></li><li class="navelem"><a class="el" href="../../d7/dce/a00143.php">maths.hpp</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
