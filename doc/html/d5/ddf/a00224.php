<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.20"/>
		<title>C++: string.hpp File Reference</title>
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
				$text = "Generated on Fri Nov 13 2020 12:37:29 for C++ by";
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
$(document).ready(function(){initNavTree('d5/ddf/a00224.php','../../'); initResizable(); });
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
<a href="#enum-members">Enumerations</a> &#124;
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<div class="title">string.hpp File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><code>#include &lt;locale&gt;</code><br />
<code>#include &quot;<a class="el" href="../../d3/dd5/a00215.php">RNG.hpp</a>&quot;</code><br />
<code>#include &quot;<a class="el" href="../../d2/df5/a00137.php">macro.hpp</a>&quot;</code><br />
<code>#include &quot;<a class="el" href="../../d1/da8/a00230.php">system.hpp</a>&quot;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for string.hpp:</div>
<div class="dyncontent">
<div class="center"><img src="../../dc/d98/a00225.png" border="0" usemap="#astring_8hpp" alt=""/></div>
<map name="string_8hpp" id="string_8hpp">
<area shape="rect" title=" " alt="" coords="625,5,704,32"/>
<area shape="rect" title=" " alt="" coords="494,80,550,107"/>
<area shape="rect" href="../../d3/dd5/a00215.php" title=" " alt="" coords="574,80,651,107"/>
<area shape="rect" href="../../d2/df5/a00137.php" title=" " alt="" coords="675,80,758,107"/>
<area shape="rect" href="../../d1/da8/a00230.php" title=" " alt="" coords="782,80,873,107"/>
<area shape="rect" title=" " alt="" coords="580,155,645,181"/>
<area shape="rect" href="../../d9/d77/a00095.php" title=" " alt="" coords="787,155,867,181"/>
<area shape="rect" href="../../de/de1/a00065.php" title=" " alt="" coords="728,229,820,256"/>
<area shape="rect" href="../../d4/d3a/a00101.php" title=" " alt="" coords="844,229,915,256"/>
<area shape="rect" href="../../db/db6/a00074.php" title=" " alt="" coords="730,304,821,331"/>
<area shape="rect" title=" " alt="" coords="683,379,766,405"/>
<area shape="rect" href="../../da/d45/a00011.php" title=" " alt="" coords="790,379,865,405"/>
<area shape="rect" href="../../dc/dee/a00053.php" title=" " alt="" coords="841,453,923,480"/>
<area shape="rect" href="../../dc/d9a/a00218.php" title=" " alt="" coords="729,453,816,480"/>
<area shape="rect" href="../../df/d03/a00062.php" title=" " alt="" coords="1034,528,1125,555"/>
<area shape="rect" href="../../d9/d39/a00257.php" title=" " alt="" coords="731,528,814,555"/>
<area shape="rect" title=" " alt="" coords="845,528,906,555"/>
<area shape="rect" title=" " alt="" coords="930,528,999,555"/>
<area shape="rect" href="../../d9/db6/a00146.php" title=" " alt="" coords="1043,603,1126,629"/>
<area shape="rect" href="../../d0/dc2/a00104.php" title=" " alt="" coords="1180,677,1275,704"/>
<area shape="rect" href="../../d6/d7d/a00161.php" title=" " alt="" coords="1014,677,1155,704"/>
<area shape="rect" href="../../d7/dce/a00143.php" title=" " alt="" coords="1065,752,1147,779"/>
<area shape="rect" title=" " alt="" coords="1194,752,1261,779"/>
<area shape="rect" href="../../d8/d41/a00038.php" title=" " alt="" coords="1062,827,1145,853"/>
<area shape="rect" href="../../d5/df1/a00206.php" title=" " alt="" coords="701,901,794,928"/>
<area shape="rect" href="../../d3/d1a/a00251.php" title=" " alt="" coords="615,976,693,1003"/>
<area shape="rect" title=" " alt="" coords="718,976,777,1003"/>
<area shape="rect" title=" " alt="" coords="801,976,859,1003"/>
<area shape="rect" href="../../d3/d52/a00023.php" title=" " alt="" coords="371,1051,438,1077"/>
<area shape="rect" href="../../d3/de5/a00209.php" title=" " alt="" coords="483,1051,593,1077"/>
<area shape="rect" href="../../dd/dd7/a00248.php" title=" " alt="" coords="617,1051,691,1077"/>
<area shape="rect" href="../../d7/d03/a00254.php" title=" " alt="" coords="715,1051,849,1077"/>
<area shape="rect" title=" " alt="" coords="873,1051,941,1077"/>
<area shape="rect" href="../../d7/d06/a00131.php" title=" " alt="" coords="618,1125,730,1152"/>
<area shape="rect" href="../../d6/d5b/a00026.php" title=" " alt="" coords="451,1125,593,1152"/>
<area shape="rect" href="../../d5/d16/a00029.php" title=" " alt="" coords="5,1125,145,1152"/>
<area shape="rect" href="../../dc/d87/a00032.php" title=" " alt="" coords="170,1125,279,1152"/>
<area shape="rect" href="../../d4/d8c/a00035.php" title=" " alt="" coords="303,1125,426,1152"/>
<area shape="rect" href="../../d5/de9/a00176.php" title=" " alt="" coords="614,1200,734,1227"/>
<area shape="rect" title=" " alt="" coords="583,1275,651,1301"/>
<area shape="rect" href="../../de/d76/a00134.php" title=" " alt="" coords="675,1275,791,1301"/>
<area shape="rect" title=" " alt="" coords="246,1349,321,1376"/>
<area shape="rect" title=" " alt="" coords="345,1349,403,1376"/>
<area shape="rect" title=" " alt="" coords="428,1349,507,1376"/>
<area shape="rect" title=" " alt="" coords="531,1349,603,1376"/>
<area shape="rect" title=" " alt="" coords="628,1349,675,1376"/>
<area shape="rect" title=" " alt="" coords="699,1349,767,1376"/>
<area shape="rect" title=" " alt="" coords="791,1349,845,1376"/>
<area shape="rect" title=" " alt="" coords="870,1349,939,1376"/>
<area shape="rect" title=" " alt="" coords="964,1349,1019,1376"/>
<area shape="rect" title=" " alt="" coords="1043,1349,1097,1376"/>
<area shape="rect" title=" " alt="" coords="1121,1349,1179,1376"/>
<area shape="rect" href="../../d1/d44/a00098.php" title=" " alt="" coords="937,752,1040,779"/>
<area shape="rect" title=" " alt="" coords="953,827,1032,853"/>
<area shape="rect" title=" " alt="" coords="851,827,929,853"/>
<area shape="rect" href="../../d2/de7/a00014.php" title=" " alt="" coords="700,603,832,629"/>
<area shape="rect" title=" " alt="" coords="449,677,560,704"/>
<area shape="rect" title=" " alt="" coords="585,677,689,704"/>
<area shape="rect" title=" " alt="" coords="713,677,763,704"/>
<area shape="rect" title=" " alt="" coords="788,677,845,704"/>
<area shape="rect" title=" " alt="" coords="870,677,910,704"/>
<area shape="rect" title=" " alt="" coords="935,677,989,704"/>
<area shape="rect" title=" " alt="" coords="846,304,913,331"/>
</map>
</div>
</div><div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="../../dc/d55/a00226.png" border="0" usemap="#astring_8hppdep" alt=""/></div>
<map name="string_8hppdep" id="string_8hppdep">
<area shape="rect" title=" " alt="" coords="336,5,415,32"/>
<area shape="rect" href="../../d9/d01/a00227.php" title="Used to replace strptime function when compiling for Windows." alt="" coords="335,80,415,107"/>
<area shape="rect" href="../../d2/dc8/a00242.php" title=" " alt="" coords="311,155,440,181"/>
<area shape="rect" href="../../d4/d3e/a00116.php" title=" " alt="" coords="328,229,423,256"/>
<area shape="rect" href="../../d3/d8b/a00059.php" title=" " alt="" coords="5,453,87,480"/>
<area shape="rect" href="../../da/d24/a00068.php" title=" " alt="" coords="116,528,243,555"/>
<area shape="rect" href="../../da/dec/a00080.php" title=" " alt="" coords="162,304,237,331"/>
<area shape="rect" href="../../df/d6a/a00119.php" title=" " alt="" coords="318,379,417,405"/>
<area shape="rect" href="../../db/dd9/a00179.php" title=" " alt="" coords="413,304,487,331"/>
<area shape="rect" href="../../d9/dd0/a00191.php" title=" " alt="" coords="511,304,682,331"/>
<area shape="rect" href="../../dd/dc1/a00212.php" title=" " alt="" coords="610,453,725,480"/>
<area shape="rect" href="../../d7/d40/a00236.php" title=" " alt="" coords="715,603,825,629"/>
<area shape="rect" href="../../d0/d27/a00239.php" title=" " alt="" coords="261,304,337,331"/>
<area shape="rect" href="../../da/d2a/a00086.php" title=" " alt="" coords="369,752,459,779"/>
<area shape="rect" href="../../db/db2/a00020.php" title=" " alt="" coords="217,827,377,853"/>
<area shape="rect" href="../../d1/d09/a00077.php" title=" " alt="" coords="364,901,461,928"/>
<area shape="rect" href="../../dc/dfe/a00125.php" title=" " alt="" coords="454,827,587,853"/>
<area shape="rect" href="../../d4/d51/a00017.php" title=" " alt="" coords="254,901,339,928"/>
<area shape="rect" href="../../d6/d2d/a00047.php" title=" " alt="" coords="369,976,456,1003"/>
<area shape="rect" href="../../df/d98/a00107.php" title=" " alt="" coords="271,1051,349,1077"/>
<area shape="rect" href="../../d1/d88/a00128.php" title=" " alt="" coords="370,1125,455,1152"/>
<area shape="rect" href="../../d6/de1/a00233.php" title=" " alt="" coords="453,1200,525,1227"/>
<area shape="rect" href="../../d9/d2e/a00056.php" title=" " alt="" coords="221,1125,346,1152"/>
<area shape="rect" href="../../d5/de0/a00050.php" title=" " alt="" coords="276,1200,347,1227"/>
<area shape="rect" href="../../dd/d32/a00041.php" title=" " alt="" coords="376,1275,449,1301"/>
<area shape="rect" href="../../d0/d89/a00071.php" title=" " alt="" coords="309,1349,423,1376"/>
<area shape="rect" href="../../d3/d00/a00113.php" title=" " alt="" coords="407,1723,503,1749"/>
<area shape="rect" href="../../d1/dc1/a00092.php" title=" " alt="" coords="215,1424,293,1451"/>
<area shape="rect" href="../../d7/d3f/a00173.php" title=" " alt="" coords="331,1424,417,1451"/>
<area shape="rect" href="../../d4/d81/a00110.php" title=" " alt="" coords="99,1499,187,1525"/>
<area shape="rect" href="../../dd/dd7/a00260.php" title=" " alt="" coords="209,1573,299,1600"/>
<area shape="rect" href="../../d7/d46/a00002.php" title=" " alt="" coords="69,1573,156,1600"/>
<area shape="rect" href="../../dd/dad/a00005.php" title=" " alt="" coords="71,1648,138,1675"/>
<area shape="rect" href="../../db/dab/a00089.php" title=" " alt="" coords="289,1723,379,1749"/>
<area shape="rect" href="../../de/d79/a00203.php" title=" " alt="" coords="260,1797,411,1824"/>
<area shape="rect" href="../../d3/db1/a00200.php" title=" " alt="" coords="350,1872,433,1899"/>
<area shape="rect" href="../../d5/df9/a00044.php" title=" " alt="" coords="333,1947,450,1973"/>
<area shape="rect" href="../../db/ddf/a00164.php" title=" " alt="" coords="163,1648,271,1675"/>
<area shape="rect" href="../../de/db1/a00197.php" title=" " alt="" coords="295,1648,373,1675"/>
<area shape="rect" href="../../dd/d52/a00221.php" title=" " alt="" coords="341,1499,423,1525"/>
<area shape="rect" href="../../df/dc8/a00122.php" title=" " alt="" coords="486,901,561,928"/>
<area shape="rect" href="../../d2/d1f/a00083.php" title=" " alt="" coords="190,379,294,405"/>
<area shape="rect" href="../../dc/d57/a00194.php" title=" " alt="" coords="441,379,601,405"/>
<area shape="rect" href="../../d7/d25/a00182.php" title=" " alt="" coords="445,453,557,480"/>
<area shape="rect" href="../../da/d15/a00188.php" title=" " alt="" coords="402,528,559,555"/>
<area shape="rect" href="../../de/df3/a00185.php" title=" " alt="" coords="389,603,564,629"/>
<area shape="rect" href="../../d5/db1/a00140.php" title=" " alt="" coords="415,677,487,704"/>
<area shape="rect" href="../../d4/dee/a00008.php" title=" " alt="" coords="639,677,714,704"/>
<area shape="rect" href="../../d6/d22/a00245.php" title=" " alt="" coords="739,677,817,704"/>
</map>
</div>
</div><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="namespaces"></a>
Namespaces</h2></td></tr>
<tr class="memitem:db/d12/a00268"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php">mcd</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="enum-members"></a>
Enumerations</h2></td></tr>
<tr class="memitem:a372ef82d72716aed789680d0a84c06d3"><td class="memItemLeft" align="right" valign="top">enum &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#a372ef82d72716aed789680d0a84c06d3">mcd::CaractSet</a> { <br />
&#160;&#160;<a class="el" href="../../db/d12/a00268.php#a372ef82d72716aed789680d0a84c06d3a198de4e683a1a1dbd64f56f1796e360c">mcd::ALPHA</a> = 1, 
<a class="el" href="../../db/d12/a00268.php#a372ef82d72716aed789680d0a84c06d3a9faad38e6204b43f9a15f1adecb9609a">mcd::LOWER</a> = 2, 
<a class="el" href="../../db/d12/a00268.php#a372ef82d72716aed789680d0a84c06d3abe645a90a98231a6ec57513cbcd0d7e2">mcd::UPPER</a> = 4, 
<a class="el" href="../../db/d12/a00268.php#a372ef82d72716aed789680d0a84c06d3a4c8dd61045696a4703edd23b8a21e4d7">mcd::NUM</a> = 8, 
<br />
&#160;&#160;<a class="el" href="../../db/d12/a00268.php#a372ef82d72716aed789680d0a84c06d3a0d613d61e790e44c8751022bbc7f2555">mcd::SPEC</a> = 16, 
<a class="el" href="../../db/d12/a00268.php#a372ef82d72716aed789680d0a84c06d3accd227a8556bcfc0c096afc4f3ecce59">mcd::READ</a> = 32, 
<a class="el" href="../../db/d12/a00268.php#a372ef82d72716aed789680d0a84c06d3abe31a72161ed89098d2ab77b3d258ff5">mcd::ALL</a> = 512
<br />
 }</td></tr>
<tr class="separator:a372ef82d72716aed789680d0a84c06d3"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:ad1e8ca2394e07c20ed9c391a37a62322"><td class="memItemLeft" align="right" valign="top">std::vector&lt; std::string &gt;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#ad1e8ca2394e07c20ed9c391a37a62322">mcd::split</a> (const std::string &amp;in, char separator=' ')</td></tr>
<tr class="memdesc:ad1e8ca2394e07c20ed9c391a37a62322"><td class="mdescLeft">&#160;</td><td class="mdescRight">Explode a string in an array with the given caracter.  <a href="../../db/d12/a00268.php#ad1e8ca2394e07c20ed9c391a37a62322">More...</a><br /></td></tr>
<tr class="separator:ad1e8ca2394e07c20ed9c391a37a62322"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ad53f932fcd1da3c4e7eeca04def94f13"><td class="memItemLeft" align="right" valign="top">std::vector&lt; std::string &gt;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#ad53f932fcd1da3c4e7eeca04def94f13">mcd::split</a> (const std::string &amp;in, const std::string &amp;c)</td></tr>
<tr class="memdesc:ad53f932fcd1da3c4e7eeca04def94f13"><td class="mdescLeft">&#160;</td><td class="mdescRight">Explode a string in an array with the given string.  <a href="../../db/d12/a00268.php#ad53f932fcd1da3c4e7eeca04def94f13">More...</a><br /></td></tr>
<tr class="separator:ad53f932fcd1da3c4e7eeca04def94f13"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a9a5719217b3760cbe64206000529fba8"><td class="memItemLeft" align="right" valign="top">std::vector&lt; std::string &gt;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#a9a5719217b3760cbe64206000529fba8">mcd::split</a> (const std::string &amp;in, std::vector&lt; std::string &gt; cars)</td></tr>
<tr class="memdesc:a9a5719217b3760cbe64206000529fba8"><td class="mdescLeft">&#160;</td><td class="mdescRight">Explode a string in an array with the given separators.  <a href="../../db/d12/a00268.php#a9a5719217b3760cbe64206000529fba8">More...</a><br /></td></tr>
<tr class="separator:a9a5719217b3760cbe64206000529fba8"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a05a9ea6944b5f2bf87c0eb17a5e0b32f"><td class="memTemplParams" colspan="2">template&lt;typename... Args&gt; </td></tr>
<tr class="memitem:a05a9ea6944b5f2bf87c0eb17a5e0b32f"><td class="memTemplItemLeft" align="right" valign="top">auto&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#a05a9ea6944b5f2bf87c0eb17a5e0b32f">mcd::explode</a> (Args &amp;&amp;... args) -&gt; decltype(split(std::forward&lt; Args &gt;(args)...))</td></tr>
<tr class="memdesc:a05a9ea6944b5f2bf87c0eb17a5e0b32f"><td class="mdescLeft">&#160;</td><td class="mdescRight">Alias for <b>split</b>.  <a href="../../db/d12/a00268.php#a05a9ea6944b5f2bf87c0eb17a5e0b32f">More...</a><br /></td></tr>
<tr class="separator:a05a9ea6944b5f2bf87c0eb17a5e0b32f"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aa97708c3c4ad49b7e60d30c66bfad80a"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#aa97708c3c4ad49b7e60d30c66bfad80a">mcd::trim</a> (std::string &amp;in)</td></tr>
<tr class="memdesc:aa97708c3c4ad49b7e60d30c66bfad80a"><td class="mdescLeft">&#160;</td><td class="mdescRight">Delete all the too-much spaces in the given string.  <a href="../../db/d12/a00268.php#aa97708c3c4ad49b7e60d30c66bfad80a">More...</a><br /></td></tr>
<tr class="separator:aa97708c3c4ad49b7e60d30c66bfad80a"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a334e09619932c4b2c193abe4fc9c3306"><td class="memItemLeft" align="right" valign="top">std::string&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#a334e09619932c4b2c193abe4fc9c3306">mcd::uppercase</a> (const std::string &amp;str, std::string::iterator begin, std::string::iterator end)</td></tr>
<tr class="memdesc:a334e09619932c4b2c193abe4fc9c3306"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set the given interval to uppercase.  <a href="../../db/d12/a00268.php#a334e09619932c4b2c193abe4fc9c3306">More...</a><br /></td></tr>
<tr class="separator:a334e09619932c4b2c193abe4fc9c3306"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a0c6d83e8654926ceebd7777a9ada0652"><td class="memItemLeft" align="right" valign="top">std::string&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#a0c6d83e8654926ceebd7777a9ada0652">mcd::lowercase</a> (const std::string &amp;str, std::string::iterator begin, std::string::iterator end)</td></tr>
<tr class="memdesc:a0c6d83e8654926ceebd7777a9ada0652"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set the given interval to lowercase.  <a href="../../db/d12/a00268.php#a0c6d83e8654926ceebd7777a9ada0652">More...</a><br /></td></tr>
<tr class="separator:a0c6d83e8654926ceebd7777a9ada0652"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a39b79dedb67710e8708dfec2985c6406"><td class="memItemLeft" align="right" valign="top">std::string&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#a39b79dedb67710e8708dfec2985c6406">mcd::uppercase</a> (const std::string &amp;str)</td></tr>
<tr class="memdesc:a39b79dedb67710e8708dfec2985c6406"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set the given string to uppercase.  <a href="../../db/d12/a00268.php#a39b79dedb67710e8708dfec2985c6406">More...</a><br /></td></tr>
<tr class="separator:a39b79dedb67710e8708dfec2985c6406"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a0762354667dfb9f9e539e501399a9a00"><td class="memItemLeft" align="right" valign="top">std::string&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#a0762354667dfb9f9e539e501399a9a00">mcd::lowercase</a> (const std::string &amp;str)</td></tr>
<tr class="memdesc:a0762354667dfb9f9e539e501399a9a00"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set the given string to lowercase.  <a href="../../db/d12/a00268.php#a0762354667dfb9f9e539e501399a9a00">More...</a><br /></td></tr>
<tr class="separator:a0762354667dfb9f9e539e501399a9a00"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ae61cb7564bc3b0ccbcad0b991b74635d"><td class="memItemLeft" align="right" valign="top">std::string&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#ae61cb7564bc3b0ccbcad0b991b74635d">mcd::replace</a> (const std::string &amp;str, const std::string &amp;from, const std::string &amp;to, bool regex=false, bool word=false, bool insensitive=false)</td></tr>
<tr class="memdesc:ae61cb7564bc3b0ccbcad0b991b74635d"><td class="mdescLeft">&#160;</td><td class="mdescRight">Replace something by something else in a string using regex_replace.  <a href="../../db/d12/a00268.php#ae61cb7564bc3b0ccbcad0b991b74635d">More...</a><br /></td></tr>
<tr class="separator:ae61cb7564bc3b0ccbcad0b991b74635d"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a1ddd069f38e7407563a5d8e763d7dc90"><td class="memItemLeft" align="right" valign="top">std::string&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#a1ddd069f38e7407563a5d8e763d7dc90">mcd::randStr</a> (size_t nb, unsigned short flags=CaractSet::ALL)</td></tr>
<tr class="memdesc:a1ddd069f38e7407563a5d8e763d7dc90"><td class="mdescLeft">&#160;</td><td class="mdescRight">Create a random string.  <a href="../../db/d12/a00268.php#a1ddd069f38e7407563a5d8e763d7dc90">More...</a><br /></td></tr>
<tr class="separator:a1ddd069f38e7407563a5d8e763d7dc90"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a95be8eb46f76298e1218183421d13825"><td class="memItemLeft" align="right" valign="top">size_t&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#a95be8eb46f76298e1218183421d13825">mcd::count</a> (const std::string &amp;text, char c)</td></tr>
<tr class="memdesc:a95be8eb46f76298e1218183421d13825"><td class="mdescLeft">&#160;</td><td class="mdescRight">Count the number of appearances.  <a href="../../db/d12/a00268.php#a95be8eb46f76298e1218183421d13825">More...</a><br /></td></tr>
<tr class="separator:a95be8eb46f76298e1218183421d13825"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a2b44ab9ee6b692aa036d6f7d0285e909"><td class="memItemLeft" align="right" valign="top">std::vector&lt; std::vector&lt; std::string &gt; &gt;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#a2b44ab9ee6b692aa036d6f7d0285e909">mcd::getall</a> (const std::string &amp;str_regex, const std::string &amp;str, bool insensitive=false)</td></tr>
<tr class="memdesc:a2b44ab9ee6b692aa036d6f7d0285e909"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return all occurences of a regex in a string.  <a href="../../db/d12/a00268.php#a2b44ab9ee6b692aa036d6f7d0285e909">More...</a><br /></td></tr>
<tr class="separator:a2b44ab9ee6b692aa036d6f7d0285e909"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a685af449d029b7793f497633bbafbcbb"><td class="memItemLeft" align="right" valign="top">std::string&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../db/d12/a00268.php#a685af449d029b7793f497633bbafbcbb">mcd::removeAccents</a> (const std::string &amp;str)</td></tr>
<tr class="memdesc:a685af449d029b7793f497633bbafbcbb"><td class="mdescLeft">&#160;</td><td class="mdescRight">Replace all the accents of a string.  <a href="../../db/d12/a00268.php#a685af449d029b7793f497633bbafbcbb">More...</a><br /></td></tr>
<tr class="separator:a685af449d029b7793f497633bbafbcbb"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><dl class="section author"><dt>Author</dt><dd>Mathias CABIOCH-DELALANDE </dd></dl>
<dl class="section date"><dt>Date</dt><dd>Last modification : September, 25 2019 </dd></dl>
</div></div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_1788504ec76a4dda5464562bc560d0b5.php">C++Tests</a></li><li class="navelem"><a class="el" href="../../dir_2e741febc7df97747a68d36c1b3be5f0.php">C++</a></li><li class="navelem"><a class="el" href="../../dir_220287e732b97f08f66e5f221c69df74.php">inc</a></li><li class="navelem"><a class="el" href="../../dir_75b0389167f46f79a101ef8c4434cec4.php">C++</a></li><li class="navelem"><a class="el" href="../../d5/ddf/a00224.php">string.hpp</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
