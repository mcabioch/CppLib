<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.20"/>
		<title>C++: pointers.hpp File Reference</title>
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
$(document).ready(function(){initNavTree('d5/df1/a00206.php','../../'); initResizable(); });
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
<a href="#typedef-members">Typedefs</a> &#124;
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<div class="title">pointers.hpp File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><code>#include &quot;<a class="el" href="../../d3/d1a/a00251.php">types.hpp</a>&quot;</code><br />
<code>#include &lt;mutex&gt;</code><br />
<code>#include &lt;thread&gt;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for pointers.hpp:</div>
<div class="dyncontent">
<div class="center"><img src="../../de/dd2/a00207.png" border="0" usemap="#apointers_8hpp" alt=""/></div>
<map name="pointers_8hpp" id="pointers_8hpp">
<area shape="rect" title=" " alt="" coords="706,5,799,32"/>
<area shape="rect" href="../../d3/d1a/a00251.php" title=" " alt="" coords="620,80,699,107"/>
<area shape="rect" title=" " alt="" coords="723,80,782,107"/>
<area shape="rect" title=" " alt="" coords="806,80,865,107"/>
<area shape="rect" href="../../d3/d52/a00023.php" title=" " alt="" coords="383,155,450,181"/>
<area shape="rect" href="../../d3/de5/a00209.php" title=" " alt="" coords="488,155,599,181"/>
<area shape="rect" href="../../dd/dd7/a00248.php" title=" " alt="" coords="623,155,696,181"/>
<area shape="rect" href="../../d7/d03/a00254.php" title=" " alt="" coords="721,155,854,181"/>
<area shape="rect" title=" " alt="" coords="879,155,947,181"/>
<area shape="rect" href="../../d7/d06/a00131.php" title=" " alt="" coords="617,229,729,256"/>
<area shape="rect" href="../../d6/d5b/a00026.php" title=" " alt="" coords="5,229,148,256"/>
<area shape="rect" href="../../d5/d16/a00029.php" title=" " alt="" coords="172,229,312,256"/>
<area shape="rect" href="../../dc/d87/a00032.php" title=" " alt="" coords="337,229,446,256"/>
<area shape="rect" href="../../d4/d8c/a00035.php" title=" " alt="" coords="470,229,593,256"/>
<area shape="rect" href="../../d5/de9/a00176.php" title=" " alt="" coords="613,304,733,331"/>
<area shape="rect" title=" " alt="" coords="581,379,649,405"/>
<area shape="rect" href="../../de/d76/a00134.php" title=" " alt="" coords="673,379,789,405"/>
<area shape="rect" title=" " alt="" coords="245,453,319,480"/>
<area shape="rect" title=" " alt="" coords="343,453,402,480"/>
<area shape="rect" title=" " alt="" coords="427,453,505,480"/>
<area shape="rect" title=" " alt="" coords="530,453,602,480"/>
<area shape="rect" title=" " alt="" coords="627,453,673,480"/>
<area shape="rect" title=" " alt="" coords="697,453,765,480"/>
<area shape="rect" title=" " alt="" coords="789,453,844,480"/>
<area shape="rect" title=" " alt="" coords="869,453,938,480"/>
<area shape="rect" title=" " alt="" coords="963,453,1017,480"/>
<area shape="rect" title=" " alt="" coords="1042,453,1095,480"/>
<area shape="rect" title=" " alt="" coords="1119,453,1178,480"/>
</map>
</div>
</div><div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="../../dc/d31/a00208.png" border="0" usemap="#apointers_8hppdep" alt=""/></div>
<map name="pointers_8hppdep" id="pointers_8hppdep">
<area shape="rect" title=" " alt="" coords="339,5,433,32"/>
<area shape="rect" href="../../d2/de7/a00014.php" title=" " alt="" coords="255,80,387,107"/>
<area shape="rect" href="../../d8/d41/a00038.php" title=" " alt="" coords="411,80,494,107"/>
<area shape="rect" href="../../d9/d39/a00257.php" title=" " alt="" coords="279,379,362,405"/>
<area shape="rect" href="../../dc/dee/a00053.php" title=" " alt="" coords="389,453,471,480"/>
<area shape="rect" href="../../dc/d9a/a00218.php" title=" " alt="" coords="277,453,364,480"/>
<area shape="rect" href="../../da/d45/a00011.php" title=" " alt="" coords="338,528,413,555"/>
<area shape="rect" href="../../db/db6/a00074.php" title=" " alt="" coords="330,603,421,629"/>
<area shape="rect" href="../../de/de1/a00065.php" title=" " alt="" coords="277,677,369,704"/>
<area shape="rect" href="../../d4/d3a/a00101.php" title=" " alt="" coords="393,677,464,704"/>
<area shape="rect" href="../../d9/d77/a00095.php" title=" " alt="" coords="335,752,415,779"/>
<area shape="rect" href="../../d1/da8/a00230.php" title=" " alt="" coords="330,827,421,853"/>
<area shape="rect" href="../../d5/ddf/a00224.php" title=" " alt="" coords="336,901,415,928"/>
<area shape="rect" href="../../d9/d01/a00227.php" title="Used to replace strptime function when compiling for Windows." alt="" coords="335,976,415,1003"/>
<area shape="rect" href="../../d2/dc8/a00242.php" title=" " alt="" coords="311,1051,440,1077"/>
<area shape="rect" href="../../d4/d3e/a00116.php" title=" " alt="" coords="328,1125,423,1152"/>
<area shape="rect" href="../../d3/d8b/a00059.php" title=" " alt="" coords="5,1349,87,1376"/>
<area shape="rect" href="../../da/d24/a00068.php" title=" " alt="" coords="120,1424,247,1451"/>
<area shape="rect" href="../../da/dec/a00080.php" title=" " alt="" coords="162,1200,237,1227"/>
<area shape="rect" href="../../df/d6a/a00119.php" title=" " alt="" coords="318,1275,417,1301"/>
<area shape="rect" href="../../db/dd9/a00179.php" title=" " alt="" coords="413,1200,487,1227"/>
<area shape="rect" href="../../d9/dd0/a00191.php" title=" " alt="" coords="511,1200,682,1227"/>
<area shape="rect" href="../../dd/dc1/a00212.php" title=" " alt="" coords="586,1349,701,1376"/>
<area shape="rect" href="../../d7/d40/a00236.php" title=" " alt="" coords="715,1499,825,1525"/>
<area shape="rect" href="../../d0/d27/a00239.php" title=" " alt="" coords="261,1200,337,1227"/>
<area shape="rect" href="../../da/d2a/a00086.php" title=" " alt="" coords="369,1648,459,1675"/>
<area shape="rect" href="../../db/db2/a00020.php" title=" " alt="" coords="217,1723,377,1749"/>
<area shape="rect" href="../../d1/d09/a00077.php" title=" " alt="" coords="364,1797,461,1824"/>
<area shape="rect" href="../../dc/dfe/a00125.php" title=" " alt="" coords="454,1723,587,1749"/>
<area shape="rect" href="../../d4/d51/a00017.php" title=" " alt="" coords="254,1797,339,1824"/>
<area shape="rect" href="../../d6/d2d/a00047.php" title=" " alt="" coords="369,1872,456,1899"/>
<area shape="rect" href="../../df/d98/a00107.php" title=" " alt="" coords="271,1947,349,1973"/>
<area shape="rect" href="../../d1/d88/a00128.php" title=" " alt="" coords="370,2021,455,2048"/>
<area shape="rect" href="../../d6/de1/a00233.php" title=" " alt="" coords="453,2096,525,2123"/>
<area shape="rect" href="../../d9/d2e/a00056.php" title=" " alt="" coords="221,2021,346,2048"/>
<area shape="rect" href="../../d5/de0/a00050.php" title=" " alt="" coords="276,2096,347,2123"/>
<area shape="rect" href="../../dd/d32/a00041.php" title=" " alt="" coords="376,2171,449,2197"/>
<area shape="rect" href="../../d0/d89/a00071.php" title=" " alt="" coords="309,2245,423,2272"/>
<area shape="rect" href="../../d3/d00/a00113.php" title=" " alt="" coords="407,2619,503,2645"/>
<area shape="rect" href="../../d1/dc1/a00092.php" title=" " alt="" coords="215,2320,293,2347"/>
<area shape="rect" href="../../d7/d3f/a00173.php" title=" " alt="" coords="331,2320,417,2347"/>
<area shape="rect" href="../../d4/d81/a00110.php" title=" " alt="" coords="99,2395,187,2421"/>
<area shape="rect" href="../../dd/dd7/a00260.php" title=" " alt="" coords="209,2469,299,2496"/>
<area shape="rect" href="../../d7/d46/a00002.php" title=" " alt="" coords="69,2469,156,2496"/>
<area shape="rect" href="../../dd/dad/a00005.php" title=" " alt="" coords="71,2544,138,2571"/>
<area shape="rect" href="../../db/dab/a00089.php" title=" " alt="" coords="289,2619,379,2645"/>
<area shape="rect" href="../../de/d79/a00203.php" title=" " alt="" coords="260,2693,411,2720"/>
<area shape="rect" href="../../d3/db1/a00200.php" title=" " alt="" coords="350,2768,433,2795"/>
<area shape="rect" href="../../d5/df9/a00044.php" title=" " alt="" coords="333,2843,450,2869"/>
<area shape="rect" href="../../db/ddf/a00164.php" title=" " alt="" coords="163,2544,271,2571"/>
<area shape="rect" href="../../de/db1/a00197.php" title=" " alt="" coords="295,2544,373,2571"/>
<area shape="rect" href="../../dd/d52/a00221.php" title=" " alt="" coords="341,2395,423,2421"/>
<area shape="rect" href="../../df/dc8/a00122.php" title=" " alt="" coords="486,1797,561,1824"/>
<area shape="rect" href="../../d2/d1f/a00083.php" title=" " alt="" coords="190,1275,294,1301"/>
<area shape="rect" href="../../dc/d57/a00194.php" title=" " alt="" coords="441,1275,601,1301"/>
<area shape="rect" href="../../d7/d25/a00182.php" title=" " alt="" coords="442,1349,554,1376"/>
<area shape="rect" href="../../da/d15/a00188.php" title=" " alt="" coords="403,1424,561,1451"/>
<area shape="rect" href="../../de/df3/a00185.php" title=" " alt="" coords="389,1499,564,1525"/>
<area shape="rect" href="../../d5/db1/a00140.php" title=" " alt="" coords="415,1573,487,1600"/>
<area shape="rect" href="../../d4/dee/a00008.php" title=" " alt="" coords="639,1573,714,1600"/>
<area shape="rect" href="../../d6/d22/a00245.php" title=" " alt="" coords="739,1573,817,1600"/>
<area shape="rect" href="../../d7/dce/a00143.php" title=" " alt="" coords="411,155,494,181"/>
<area shape="rect" href="../../d0/dc2/a00104.php" title=" " alt="" coords="372,229,467,256"/>
<area shape="rect" href="../../d6/d7d/a00161.php" title=" " alt="" coords="491,229,633,256"/>
<area shape="rect" href="../../d9/db6/a00146.php" title=" " alt="" coords="390,304,473,331"/>
<area shape="rect" href="../../df/d03/a00062.php" title=" " alt="" coords="386,379,477,405"/>
</map>
</div>
</div><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Classes</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../da/de3/a01398.php">mcd::check::is_minded_ptr&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A template class to test if T is a std::shared_ptr, a std::unique_ptr or a std::weak_ptr.  <a href="../../da/de3/a01398.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d0/dc7/a01402.php">mcd::check::is_thread_ptr&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A template class to test if T is a std::shared_ptr&lt;thread&gt;, a std::unique_ptr&lt;thread&gt;, a std::weak_ptr&lt;thread&gt; or a thread*.  <a href="../../d0/dc7/a01402.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="namespaces"></a>
Namespaces</h2></td></tr>
<tr class="memitem:db/d12/a00268"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php">mcd</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:d0/d19/a00273"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d0/d19/a00273.php">mcd::check</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="define-members"></a>
Macros</h2></td></tr>
<tr class="memitem:a6fbaf936dc811e3422bec35b026f4983"><td class="memItemLeft" align="right" valign="top">#define&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d5/df1/a00206.php#a6fbaf936dc811e3422bec35b026f4983">MUTEX_RECREATE</a>(parent,  name,  type)</td></tr>
<tr class="separator:a6fbaf936dc811e3422bec35b026f4983"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a8614c85113bf4cfc4be80948688e9f5d"><td class="memItemLeft" align="right" valign="top">#define&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d5/df1/a00206.php#a8614c85113bf4cfc4be80948688e9f5d">MUTEX_RECREATE_ARGS</a>(parent,  name,  type, ...)</td></tr>
<tr class="separator:a8614c85113bf4cfc4be80948688e9f5d"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a1268e33dd61371fb191a2e753e76f545"><td class="memItemLeft" align="right" valign="top">#define&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d5/df1/a00206.php#a1268e33dd61371fb191a2e753e76f545">MUTEX_VOID_RECREATE</a>(parent,  name)</td></tr>
<tr class="separator:a1268e33dd61371fb191a2e753e76f545"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a5664112302c26ebee5460b2fcc0a7954"><td class="memItemLeft" align="right" valign="top">#define&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d5/df1/a00206.php#a5664112302c26ebee5460b2fcc0a7954">MUTEX_VOID_RECREATE_ARGS</a>(parent,  name, ...)</td></tr>
<tr class="separator:a5664112302c26ebee5460b2fcc0a7954"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:af882b89ff60874679a5db7856d4130f2"><td class="memItemLeft" align="right" valign="top">#define&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d5/df1/a00206.php#af882b89ff60874679a5db7856d4130f2">MUTEX_CONST_RECREATE</a>(parent,  name,  type)</td></tr>
<tr class="separator:af882b89ff60874679a5db7856d4130f2"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a37add3fecd1208aa0e5fb744bbb8b838"><td class="memItemLeft" align="right" valign="top">#define&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d5/df1/a00206.php#a37add3fecd1208aa0e5fb744bbb8b838">MUTEX_CONST_RECREATE_ARGS</a>(parent,  name,  type, ...)</td></tr>
<tr class="separator:a37add3fecd1208aa0e5fb744bbb8b838"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a017296688d5943266bbe011c59365008"><td class="memItemLeft" align="right" valign="top">#define&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d5/df1/a00206.php#a017296688d5943266bbe011c59365008">MUTEX_VOID_CONST_RECREATE</a>(parent,  name)</td></tr>
<tr class="separator:a017296688d5943266bbe011c59365008"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a0cbcd876925de883c4a297851fdc7b4b"><td class="memItemLeft" align="right" valign="top">#define&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../d5/df1/a00206.php#a0cbcd876925de883c4a297851fdc7b4b">MUTEX_VOID_CONST_RECREATE_ARGS</a>(parent,  name, ...)</td></tr>
<tr class="separator:a0cbcd876925de883c4a297851fdc7b4b"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="typedef-members"></a>
Typedefs</h2></td></tr>
<tr class="memitem:a21976f3e9e8d360ccff90c8ead193a5e"><td class="memItemLeft" align="right" valign="top">using&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#a21976f3e9e8d360ccff90c8ead193a5e">mcd::thread</a> = std::thread</td></tr>
<tr class="separator:a21976f3e9e8d360ccff90c8ead193a5e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a7139c2a1e77039f963009520820d8c87"><td class="memItemLeft" align="right" valign="top">using&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#a7139c2a1e77039f963009520820d8c87">mcd::mutex</a> = std::mutex</td></tr>
<tr class="separator:a7139c2a1e77039f963009520820d8c87"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:a8ca7d4ec117db95e54663f086d9265f1"><td class="memTemplParams" colspan="2">template&lt;typename T &gt; </td></tr>
<tr class="memitem:a8ca7d4ec117db95e54663f086d9265f1"><td class="memTemplItemLeft" align="right" valign="top">std::enable_if_t&lt; std::is_pointer&lt; T &gt;::value||check::is_minded_ptr&lt; T &gt;::value &gt;&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#a8ca7d4ec117db95e54663f086d9265f1">mcd::deletePtr</a> (T &amp;pointer)</td></tr>
<tr class="memdesc:a8ca7d4ec117db95e54663f086d9265f1"><td class="mdescLeft">&#160;</td><td class="mdescRight">Delete a pointer.  <a href="../../db/d12/a00268.php#a8ca7d4ec117db95e54663f086d9265f1">More...</a><br /></td></tr>
<tr class="separator:a8ca7d4ec117db95e54663f086d9265f1"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><dl class="section author"><dt>Author</dt><dd>Mathias CABIOCH-DELALANDE </dd></dl>
<dl class="section date"><dt>Date</dt><dd>Last modification : October, 03 2019 </dd></dl>
</div><h2 class="groupheader">Macro Definition Documentation</h2>
<a id="af882b89ff60874679a5db7856d4130f2"></a>
<h2 class="memtitle"><span class="permalink"><a href="#af882b89ff60874679a5db7856d4130f2">&#9670;&nbsp;</a></span>MUTEX_CONST_RECREATE</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">#define MUTEX_CONST_RECREATE</td>
          <td>(</td>
          <td class="paramtype">&#160;</td>
          <td class="paramname">parent, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">&#160;</td>
          <td class="paramname">name, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">&#160;</td>
          <td class="paramname">type&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">
<b>Value:</b><div class="fragment"><div class="line">    type name()<span class="keyword"> const </span>{                                                                            \</div>
<div class="line">        _mutex.lock();                                                                             \</div>
<div class="line">        type out = parent::name();                                                                 \</div>
<div class="line">        _mutex.unlock();                                                                           \</div>
<div class="line">        return out;                                                                                \</div>
<div class="line">    }</div>
</div><!-- fragment -->
</div>
</div>
<a id="a37add3fecd1208aa0e5fb744bbb8b838"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a37add3fecd1208aa0e5fb744bbb8b838">&#9670;&nbsp;</a></span>MUTEX_CONST_RECREATE_ARGS</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">#define MUTEX_CONST_RECREATE_ARGS</td>
          <td>(</td>
          <td class="paramtype">&#160;</td>
          <td class="paramname">parent, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">&#160;</td>
          <td class="paramname">name, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">&#160;</td>
          <td class="paramname">type, </td>
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
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">
<b>Value:</b><div class="fragment"><div class="line">    type name(__VA_ARGS__)<span class="keyword"> const </span>{                                                                 \</div>
<div class="line">        _mutex.lock();                                                                             \</div>
<div class="line">        type out = parent::name(__VA_ARGS__);                                                      \</div>
<div class="line">        _mutex.unlock();                                                                           \</div>
<div class="line">        return out;                                                                                \</div>
<div class="line">    }</div>
</div><!-- fragment -->
</div>
</div>
<a id="a6fbaf936dc811e3422bec35b026f4983"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a6fbaf936dc811e3422bec35b026f4983">&#9670;&nbsp;</a></span>MUTEX_RECREATE</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">#define MUTEX_RECREATE</td>
          <td>(</td>
          <td class="paramtype">&#160;</td>
          <td class="paramname">parent, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">&#160;</td>
          <td class="paramname">name, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">&#160;</td>
          <td class="paramname">type&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">
<b>Value:</b><div class="fragment"><div class="line">    type name() {                                                                                  \</div>
<div class="line">        _mutex.lock();                                                                             \</div>
<div class="line">        type out = parent::name();                                                                 \</div>
<div class="line">        _mutex.unlock();                                                                           \</div>
<div class="line">        return out;                                                                                \</div>
<div class="line">    }</div>
</div><!-- fragment -->
</div>
</div>
<a id="a8614c85113bf4cfc4be80948688e9f5d"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a8614c85113bf4cfc4be80948688e9f5d">&#9670;&nbsp;</a></span>MUTEX_RECREATE_ARGS</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">#define MUTEX_RECREATE_ARGS</td>
          <td>(</td>
          <td class="paramtype">&#160;</td>
          <td class="paramname">parent, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">&#160;</td>
          <td class="paramname">name, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">&#160;</td>
          <td class="paramname">type, </td>
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
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">
<b>Value:</b><div class="fragment"><div class="line">    type name(__VA_ARGS__) {                                                                       \</div>
<div class="line">        _mutex.lock();                                                                             \</div>
<div class="line">        type out = parent::name(__VA_ARGS__);                                                      \</div>
<div class="line">        _mutex.unlock();                                                                           \</div>
<div class="line">        return out;                                                                                \</div>
<div class="line">    }</div>
</div><!-- fragment -->
</div>
</div>
<a id="a017296688d5943266bbe011c59365008"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a017296688d5943266bbe011c59365008">&#9670;&nbsp;</a></span>MUTEX_VOID_CONST_RECREATE</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">#define MUTEX_VOID_CONST_RECREATE</td>
          <td>(</td>
          <td class="paramtype">&#160;</td>
          <td class="paramname">parent, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">&#160;</td>
          <td class="paramname">name&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">
<b>Value:</b><div class="fragment"><div class="line">    <span class="keywordtype">void</span> name()<span class="keyword"> const </span>{                                                                            \</div>
<div class="line">        _mutex.lock();                                                                             \</div>
<div class="line">        parent::name();                                                                            \</div>
<div class="line">        _mutex.unlock();                                                                           \</div>
<div class="line">    }</div>
</div><!-- fragment -->
</div>
</div>
<a id="a0cbcd876925de883c4a297851fdc7b4b"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a0cbcd876925de883c4a297851fdc7b4b">&#9670;&nbsp;</a></span>MUTEX_VOID_CONST_RECREATE_ARGS</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">#define MUTEX_VOID_CONST_RECREATE_ARGS</td>
          <td>(</td>
          <td class="paramtype">&#160;</td>
          <td class="paramname">parent, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">&#160;</td>
          <td class="paramname">name, </td>
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
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">
<b>Value:</b><div class="fragment"><div class="line">    <span class="keywordtype">void</span> name(__VA_ARGS__)<span class="keyword"> const </span>{                                                                 \</div>
<div class="line">        _mutex.lock();                                                                             \</div>
<div class="line">        parent::name(__VA_ARGS__);                                                                 \</div>
<div class="line">        _mutex.unlock();                                                                           \</div>
<div class="line">    }</div>
</div><!-- fragment -->
</div>
</div>
<a id="a1268e33dd61371fb191a2e753e76f545"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a1268e33dd61371fb191a2e753e76f545">&#9670;&nbsp;</a></span>MUTEX_VOID_RECREATE</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">#define MUTEX_VOID_RECREATE</td>
          <td>(</td>
          <td class="paramtype">&#160;</td>
          <td class="paramname">parent, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">&#160;</td>
          <td class="paramname">name&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">
<b>Value:</b><div class="fragment"><div class="line">    <span class="keywordtype">void</span> name() {                                                                                  \</div>
<div class="line">        _mutex.lock();                                                                             \</div>
<div class="line">        parent::name();                                                                            \</div>
<div class="line">        _mutex.unlock();                                                                           \</div>
<div class="line">    }</div>
</div><!-- fragment -->
</div>
</div>
<a id="a5664112302c26ebee5460b2fcc0a7954"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a5664112302c26ebee5460b2fcc0a7954">&#9670;&nbsp;</a></span>MUTEX_VOID_RECREATE_ARGS</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">#define MUTEX_VOID_RECREATE_ARGS</td>
          <td>(</td>
          <td class="paramtype">&#160;</td>
          <td class="paramname">parent, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">&#160;</td>
          <td class="paramname">name, </td>
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
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">
<b>Value:</b><div class="fragment"><div class="line">    <span class="keywordtype">void</span> name(__VA_ARGS__) {                                                                       \</div>
<div class="line">        _mutex.lock();                                                                             \</div>
<div class="line">        parent::name(__VA_ARGS__);                                                                 \</div>
<div class="line">        _mutex.unlock();                                                                           \</div>
<div class="line">    }</div>
</div><!-- fragment -->
</div>
</div>
</div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_1788504ec76a4dda5464562bc560d0b5.php">C++Tests</a></li><li class="navelem"><a class="el" href="../../dir_2e741febc7df97747a68d36c1b3be5f0.php">C++</a></li><li class="navelem"><a class="el" href="../../dir_220287e732b97f08f66e5f221c69df74.php">inc</a></li><li class="navelem"><a class="el" href="../../dir_75b0389167f46f79a101ef8c4434cec4.php">C++</a></li><li class="navelem"><a class="el" href="../../d5/df1/a00206.php">pointers.hpp</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
