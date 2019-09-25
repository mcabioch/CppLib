<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.13"/>
		<title>C++: string.hpp File Reference</title>
		<link href="../../tabs.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="../../jquery.js"></script>
		<script type="text/javascript" src="../../dynsections.js"></script>
		<link href="../../navtree.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="../../resize.js"></script>
<script type="text/javascript" src="../../navtreedata.js"></script>
<script type="text/javascript" src="../../navtree.js"></script>
<script type="text/javascript">
  $(document).ready(initResizable);
</script>
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
									&#160;<span id="projectnumber">2.0</span>
								</div>
								<div id="projectbrief">My own C++ features</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<?php
				$text = "Generated on Tue Sep 24 2019 19:59:50 for C++ by";
				$text = substr($text, 0, sizeof($text) - 4);
				$tmp = substr($text, 17);
				$tmp = substr($tmp, 0, strpos($tmp, " for"));
				$lastModif = date("l jS \of F Y \a\\t H:i:s", strtotime($tmp));
			?>
		<!-- end header part -->
<!-- Generated by Doxygen 1.8.13 -->
<script type="text/javascript">
var searchBox = new SearchBox("searchBox", "../../search",false,'Search');
</script>
<script type="text/javascript" src="../../menudata.js"></script>
<script type="text/javascript" src="../../menu.js"></script>
<script type="text/javascript">
$(function() {
  initMenu('../../',true,false,'search.php','Search');
  $(document).ready(function() { init_search(); });
});
</script>
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
$(document).ready(function(){initNavTree('d5/de9/a00176.php','../../');});
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
<code>#include &quot;<a class="el" href="../../db/dd9/a00179.php">C++/system.hpp</a>&quot;</code><br />
<code>#include &quot;<a class="el" href="../../dc/de6/a00167.php">C++/RNG.hpp</a>&quot;</code><br />
<code>#include &quot;<a class="el" href="../../d1/d44/a00098.php">C++/macro.hpp</a>&quot;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for string.hpp:</div>
<div class="dyncontent">
<div class="center"><img src="../../dd/d4c/a00177.png" border="0" usemap="#string_8hpp" alt=""/></div>
<map name="string_8hpp" id="string_8hpp">
<area shape="rect" id="node3" href="../../db/dd9/a00179.php" title="C++/system.hpp" alt="" coords="293,80,413,107"/>
<area shape="rect" id="node51" href="../../dc/de6/a00167.php" title="C++/RNG.hpp" alt="" coords="437,80,544,107"/>
<area shape="rect" id="node53" href="../../d1/d44/a00098.php" title="C++/macro.hpp" alt="" coords="569,80,682,107"/>
<area shape="rect" id="node4" href="../../d1/d09/a00077.php" title="C++/errors.hpp" alt="" coords="298,155,409,181"/>
<area shape="rect" id="node5" href="../../d6/d2d/a00047.php" title="C++/console.hpp" alt="" coords="224,229,347,256"/>
<area shape="rect" id="node49" href="../../da/dec/a00080.php" title="C++/files.hpp" alt="" coords="371,229,472,256"/>
<area shape="rect" id="node6" href="../../d9/d2e/a00056.php" title="C++/convert.hpp" alt="" coords="235,304,355,331"/>
<area shape="rect" id="node8" href="../../da/d45/a00011.php" title="C++/array.hpp" alt="" coords="301,379,408,405"/>
<area shape="rect" id="node10" href="../../d8/d41/a00038.php" title="C++/check.hpp" alt="" coords="299,453,411,480"/>
<area shape="rect" id="node48" href="../../d5/dcb/a00170.php" title="C++/sorting.hpp" alt="" coords="505,453,621,480"/>
<area shape="rect" id="node14" href="../../d2/de7/a00014.php" title="C++/arraysIncludes.hpp" alt="" coords="517,528,680,555"/>
<area shape="rect" id="node43" href="../../d5/df9/a00044.php" title="C++/collides.hpp" alt="" coords="371,528,493,555"/>
<area shape="rect" id="node21" href="../../d6/db8/a00158.php" title="C++/pointers.hpp" alt="" coords="481,827,604,853"/>
<area shape="rect" id="node24" href="../../de/db1/a00197.php" title="C++/types.hpp" alt="" coords="596,901,705,928"/>
<area shape="rect" id="node26" href="../../d4/d51/a00017.php" title="Big.hpp" alt="" coords="560,976,627,1003"/>
<area shape="rect" id="node41" href="../../d6/d7d/a00161.php" title="PureVirtual.hpp" alt="" coords="651,976,762,1003"/>
<area shape="rect" id="node42" href="../../d3/db1/a00200.php" title="UsefullDefines.hpp" alt="" coords="787,976,920,1003"/>
<area shape="rect" id="node37" href="../../d3/d52/a00023.php" title="C++/Big_Constructor.hpp" alt="" coords="887,1051,1057,1077"/>
<area shape="rect" id="node38" href="../../d5/d16/a00029.php" title="C++/Big_Operator.hpp" alt="" coords="1082,1051,1235,1077"/>
<area shape="rect" id="node39" href="../../db/db2/a00020.php" title="C++/Big_Comparison.hpp" alt="" coords="1260,1051,1433,1077"/>
<area shape="rect" id="node40" href="../../d6/d5b/a00026.php" title="C++/Big_Maths.hpp" alt="" coords="1457,1051,1596,1077"/>
<area shape="rect" id="node44" href="../../df/d98/a00107.php" title="C++/Matrix.hpp" alt="" coords="195,603,309,629"/>
<area shape="rect" id="node45" href="../../d2/d1f/a00083.php" title="C++/Fraction.hpp" alt="" coords="389,677,513,704"/>
<area shape="rect" id="node46" href="../../d0/dc2/a00104.php" title="C++/maths.hpp" alt="" coords="394,752,507,779"/>
</map>
</div>
</div><div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="../../d9/d90/a00178.png" border="0" usemap="#string_8hppdep" alt=""/></div>
<map name="string_8hppdep" id="string_8hppdep">
<area shape="rect" id="node2" href="../../da/d15/a00188.php" title="timeFunctions.hpp" alt="" coords="284,80,413,107"/>
<area shape="rect" id="node3" href="../../d1/dc1/a00092.php" title="includes.hpp" alt="" coords="301,155,396,181"/>
<area shape="rect" id="node4" href="../../dd/d32/a00041.php" title="Clock.hpp" alt="" coords="5,379,87,405"/>
<area shape="rect" id="node25" href="../../d5/de0/a00050.php" title="ConsoleTable.hpp" alt="" coords="56,304,183,331"/>
<area shape="rect" id="node26" href="../../df/d03/a00062.php" title="Date.hpp" alt="" coords="135,229,210,256"/>
<area shape="rect" id="node28" href="../../d9/d77/a00095.php" title="IOConfig.hpp" alt="" coords="297,379,395,405"/>
<area shape="rect" id="node29" href="../../d7/d06/a00131.php" title="Path.hpp" alt="" coords="386,229,461,256"/>
<area shape="rect" id="node34" href="../../d7/dce/a00143.php" title="PathfindingException.hpp" alt="" coords="485,229,655,256"/>
<area shape="rect" id="node35" href="../../db/ddf/a00164.php" title="Referenced.hpp" alt="" coords="547,453,662,480"/>
<area shape="rect" id="node36" href="../../d7/d25/a00182.php" title="Threadable.hpp" alt="" coords="688,453,799,480"/>
<area shape="rect" id="node39" href="../../de/df3/a00185.php" title="Time.hpp" alt="" coords="235,229,311,256"/>
<area shape="rect" id="node5" href="../../da/d24/a00068.php" title="defines.hpp" alt="" coords="336,603,425,629"/>
<area shape="rect" id="node6" href="../../d3/d8b/a00059.php" title="cryptage.hpp" alt="" coords="223,677,320,704"/>
<area shape="rect" id="node23" href="../../d4/d3a/a00101.php" title="Map.hpp" alt="" coords="345,677,417,704"/>
<area shape="rect" id="node24" href="../../dc/d57/a00194.php" title="Tree.hpp" alt="" coords="441,677,515,704"/>
<area shape="rect" id="node7" href="../../dc/d87/a00032.php" title="C++.hpp" alt="" coords="344,752,417,779"/>
<area shape="rect" id="node8" href="../../dc/dee/a00053.php" title="Contraption.hpp" alt="" coords="277,827,391,853"/>
<area shape="rect" id="node22" href="../../db/dab/a00089.php" title="Identifier.hpp" alt="" coords="376,1200,473,1227"/>
<area shape="rect" id="node9" href="../../db/db6/a00074.php" title="Entity.hpp" alt="" coords="180,901,261,928"/>
<area shape="rect" id="node20" href="../../d1/d88/a00128.php" title="Object.hpp" alt="" coords="299,901,385,928"/>
<area shape="rect" id="node10" href="../../da/d2a/a00086.php" title="Hostile.hpp" alt="" coords="66,976,154,1003"/>
<area shape="rect" id="node17" href="../../de/d79/a00203.php" title="Vegetal.hpp" alt="" coords="175,1051,266,1077"/>
<area shape="rect" id="node11" href="../../d7/d46/a00002.php" title="Animal.hpp" alt="" coords="37,1051,124,1077"/>
<area shape="rect" id="node12" href="../../dd/dad/a00005.php" title="Ant.hpp" alt="" coords="39,1125,106,1152"/>
<area shape="rect" id="node13" href="../../d0/d89/a00071.php" title="Entities.hpp" alt="" coords="257,1200,347,1227"/>
<area shape="rect" id="node14" href="../../d3/df8/a00155.php" title="PlayerAbstraction.hpp" alt="" coords="229,1275,380,1301"/>
<area shape="rect" id="node15" href="../../d7/d9a/a00152.php" title="Player.hpp" alt="" coords="319,1349,403,1376"/>
<area shape="rect" id="node16" href="../../d4/d8c/a00035.php" title="C++Entities.hpp" alt="" coords="302,1424,419,1451"/>
<area shape="rect" id="node18" href="../../df/dc8/a00122.php" title="Mushroom.hpp" alt="" coords="131,1125,239,1152"/>
<area shape="rect" id="node19" href="../../da/d1e/a00149.php" title="Plant.hpp" alt="" coords="263,1125,341,1152"/>
<area shape="rect" id="node21" href="../../d7/d3f/a00173.php" title="Stone.hpp" alt="" coords="309,976,391,1003"/>
<area shape="rect" id="node27" href="../../de/de1/a00065.php" title="DateTime.hpp" alt="" coords="207,304,311,331"/>
<area shape="rect" id="node30" href="../../d9/db6/a00146.php" title="PathfindingProblem.hpp" alt="" coords="395,304,555,331"/>
<area shape="rect" id="node31" href="../../de/d76/a00134.php" title="Pathfinding.hpp" alt="" coords="419,379,531,405"/>
<area shape="rect" id="node32" href="../../d5/db1/a00140.php" title="PathfindingDijkstra.hpp" alt="" coords="365,453,522,480"/>
<area shape="rect" id="node33" href="../../d2/df5/a00137.php" title="PathfindingAlgorithms.hpp" alt="" coords="356,528,531,555"/>
<area shape="rect" id="node37" href="../../d4/dee/a00008.php" title="Args.hpp" alt="" coords="606,528,681,555"/>
<area shape="rect" id="node38" href="../../d9/dd0/a00191.php" title="Timer.hpp" alt="" coords="705,528,785,555"/>
</map>
</div>
</div><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="namespaces"></a>
Namespaces</h2></td></tr>
<tr class="memitem:dd/ded/a00211"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dd/ded/a00211.php">mcd</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="enum-members"></a>
Enumerations</h2></td></tr>
<tr class="memitem:a372ef82d72716aed789680d0a84c06d3"><td class="memItemLeft" align="right" valign="top">enum &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dd/ded/a00211.php#a372ef82d72716aed789680d0a84c06d3">mcd::CaractSet</a> { <br />
&#160;&#160;<a class="el" href="../../dd/ded/a00211.php#a372ef82d72716aed789680d0a84c06d3a198de4e683a1a1dbd64f56f1796e360c">mcd::ALPHA</a> = 1, 
<a class="el" href="../../dd/ded/a00211.php#a372ef82d72716aed789680d0a84c06d3a9faad38e6204b43f9a15f1adecb9609a">mcd::LOWER</a> = 2, 
<a class="el" href="../../dd/ded/a00211.php#a372ef82d72716aed789680d0a84c06d3abe645a90a98231a6ec57513cbcd0d7e2">mcd::UPPER</a> = 4, 
<a class="el" href="../../dd/ded/a00211.php#a372ef82d72716aed789680d0a84c06d3a4c8dd61045696a4703edd23b8a21e4d7">mcd::NUM</a> = 8, 
<br />
&#160;&#160;<a class="el" href="../../dd/ded/a00211.php#a372ef82d72716aed789680d0a84c06d3a0d613d61e790e44c8751022bbc7f2555">mcd::SPEC</a> = 16, 
<a class="el" href="../../dd/ded/a00211.php#a372ef82d72716aed789680d0a84c06d3accd227a8556bcfc0c096afc4f3ecce59">mcd::READ</a> = 32, 
<a class="el" href="../../dd/ded/a00211.php#a372ef82d72716aed789680d0a84c06d3abe31a72161ed89098d2ab77b3d258ff5">mcd::ALL</a> = 512
<br />
 }</td></tr>
<tr class="separator:a372ef82d72716aed789680d0a84c06d3"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:a0f44d33dc7a87f999c8a168d159b7b7c"><td class="memItemLeft" align="right" valign="top">std::vector&lt; std::string &gt;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dd/ded/a00211.php#a0f44d33dc7a87f999c8a168d159b7b7c">mcd::split</a> (std::string in, char separator=' ')</td></tr>
<tr class="memdesc:a0f44d33dc7a87f999c8a168d159b7b7c"><td class="mdescLeft">&#160;</td><td class="mdescRight">Explode a string in an array with the given caracter.  <a href="../../dd/ded/a00211.php#a0f44d33dc7a87f999c8a168d159b7b7c">More...</a><br /></td></tr>
<tr class="separator:a0f44d33dc7a87f999c8a168d159b7b7c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a15734b133c7e5ce88308110f4efb3bfa"><td class="memItemLeft" align="right" valign="top">std::vector&lt; std::string &gt;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dd/ded/a00211.php#a15734b133c7e5ce88308110f4efb3bfa">mcd::split</a> (std::string in, std::string c)</td></tr>
<tr class="memdesc:a15734b133c7e5ce88308110f4efb3bfa"><td class="mdescLeft">&#160;</td><td class="mdescRight">Explode a string in an array with the given string.  <a href="../../dd/ded/a00211.php#a15734b133c7e5ce88308110f4efb3bfa">More...</a><br /></td></tr>
<tr class="separator:a15734b133c7e5ce88308110f4efb3bfa"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a1462df0e8bb2fe7f5bb61bca736ecffa"><td class="memItemLeft" align="right" valign="top">std::vector&lt; std::string &gt;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dd/ded/a00211.php#a1462df0e8bb2fe7f5bb61bca736ecffa">mcd::split</a> (std::string in, std::vector&lt; std::string &gt; cars)</td></tr>
<tr class="memdesc:a1462df0e8bb2fe7f5bb61bca736ecffa"><td class="mdescLeft">&#160;</td><td class="mdescRight">Explode a string in an array with the given separators.  <a href="../../dd/ded/a00211.php#a1462df0e8bb2fe7f5bb61bca736ecffa">More...</a><br /></td></tr>
<tr class="separator:a1462df0e8bb2fe7f5bb61bca736ecffa"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aa97708c3c4ad49b7e60d30c66bfad80a"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dd/ded/a00211.php#aa97708c3c4ad49b7e60d30c66bfad80a">mcd::trim</a> (std::string &amp;in)</td></tr>
<tr class="memdesc:aa97708c3c4ad49b7e60d30c66bfad80a"><td class="mdescLeft">&#160;</td><td class="mdescRight">Alias for <b>split</b>.  <a href="../../dd/ded/a00211.php#aa97708c3c4ad49b7e60d30c66bfad80a">More...</a><br /></td></tr>
<tr class="separator:aa97708c3c4ad49b7e60d30c66bfad80a"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a9b1fa9cade94967538723cead132456c"><td class="memItemLeft" align="right" valign="top">std::string&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dd/ded/a00211.php#a9b1fa9cade94967538723cead132456c">mcd::uppercase</a> (std::string str, std::string::iterator begin, std::string::iterator end)</td></tr>
<tr class="memdesc:a9b1fa9cade94967538723cead132456c"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set the given interval to uppercase.  <a href="../../dd/ded/a00211.php#a9b1fa9cade94967538723cead132456c">More...</a><br /></td></tr>
<tr class="separator:a9b1fa9cade94967538723cead132456c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a8401081694d2f40477e24639f48ae3d6"><td class="memItemLeft" align="right" valign="top">std::string&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dd/ded/a00211.php#a8401081694d2f40477e24639f48ae3d6">mcd::lowercase</a> (std::string str, std::string::iterator begin, std::string::iterator end)</td></tr>
<tr class="memdesc:a8401081694d2f40477e24639f48ae3d6"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set the given interval to lowercase.  <a href="../../dd/ded/a00211.php#a8401081694d2f40477e24639f48ae3d6">More...</a><br /></td></tr>
<tr class="separator:a8401081694d2f40477e24639f48ae3d6"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a6bcf7344b39a112c02618ee2831e7188"><td class="memItemLeft" align="right" valign="top">std::string&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dd/ded/a00211.php#a6bcf7344b39a112c02618ee2831e7188">mcd::uppercase</a> (std::string str)</td></tr>
<tr class="memdesc:a6bcf7344b39a112c02618ee2831e7188"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set the given string to uppercase.  <a href="../../dd/ded/a00211.php#a6bcf7344b39a112c02618ee2831e7188">More...</a><br /></td></tr>
<tr class="separator:a6bcf7344b39a112c02618ee2831e7188"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a7305496cd0af7ff6f673de5b9d5d8837"><td class="memItemLeft" align="right" valign="top">std::string&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dd/ded/a00211.php#a7305496cd0af7ff6f673de5b9d5d8837">mcd::lowercase</a> (std::string str)</td></tr>
<tr class="memdesc:a7305496cd0af7ff6f673de5b9d5d8837"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set the given string to lowercase.  <a href="../../dd/ded/a00211.php#a7305496cd0af7ff6f673de5b9d5d8837">More...</a><br /></td></tr>
<tr class="separator:a7305496cd0af7ff6f673de5b9d5d8837"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a127c51f4d8bd9fdb9eaef6a5173a5d03"><td class="memItemLeft" align="right" valign="top">std::string&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dd/ded/a00211.php#a127c51f4d8bd9fdb9eaef6a5173a5d03">mcd::replace</a> (std::string str, std::string from, std::string to, bool regex=false, bool word=false, bool insensitive=false)</td></tr>
<tr class="memdesc:a127c51f4d8bd9fdb9eaef6a5173a5d03"><td class="mdescLeft">&#160;</td><td class="mdescRight">Replace something by something else in a string using regex_replace.  <a href="../../dd/ded/a00211.php#a127c51f4d8bd9fdb9eaef6a5173a5d03">More...</a><br /></td></tr>
<tr class="separator:a127c51f4d8bd9fdb9eaef6a5173a5d03"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a1ddd069f38e7407563a5d8e763d7dc90"><td class="memItemLeft" align="right" valign="top">std::string&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dd/ded/a00211.php#a1ddd069f38e7407563a5d8e763d7dc90">mcd::randStr</a> (size_t nb, unsigned short flags=CaractSet::ALL)</td></tr>
<tr class="memdesc:a1ddd069f38e7407563a5d8e763d7dc90"><td class="mdescLeft">&#160;</td><td class="mdescRight">Create a random string.  <a href="../../dd/ded/a00211.php#a1ddd069f38e7407563a5d8e763d7dc90">More...</a><br /></td></tr>
<tr class="separator:a1ddd069f38e7407563a5d8e763d7dc90"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ad9a09991409b1fa61f97f8519efcaf30"><td class="memItemLeft" align="right" valign="top">size_t&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dd/ded/a00211.php#ad9a09991409b1fa61f97f8519efcaf30">mcd::count</a> (std::string text, char c)</td></tr>
<tr class="memdesc:ad9a09991409b1fa61f97f8519efcaf30"><td class="mdescLeft">&#160;</td><td class="mdescRight">Count the number of appearances.  <a href="../../dd/ded/a00211.php#ad9a09991409b1fa61f97f8519efcaf30">More...</a><br /></td></tr>
<tr class="separator:ad9a09991409b1fa61f97f8519efcaf30"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a057304d2908e871b3c8f65db3b41057a"><td class="memItemLeft" align="right" valign="top">std::vector&lt; std::vector&lt; std::string &gt; &gt;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dd/ded/a00211.php#a057304d2908e871b3c8f65db3b41057a">mcd::getall</a> (std::string str_regex, std::string str, bool insensitive=false)</td></tr>
<tr class="memdesc:a057304d2908e871b3c8f65db3b41057a"><td class="mdescLeft">&#160;</td><td class="mdescRight">Return all occurences of a regex in a string.  <a href="../../dd/ded/a00211.php#a057304d2908e871b3c8f65db3b41057a">More...</a><br /></td></tr>
<tr class="separator:a057304d2908e871b3c8f65db3b41057a"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a31744f235bdcd875c6e69661a4f0a490"><td class="memItemLeft" align="right" valign="top">std::string&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="../../dd/ded/a00211.php#a31744f235bdcd875c6e69661a4f0a490">mcd::removeAccents</a> (std::string str)</td></tr>
<tr class="memdesc:a31744f235bdcd875c6e69661a4f0a490"><td class="mdescLeft">&#160;</td><td class="mdescRight">Replace all the accents of a string.  <a href="../../dd/ded/a00211.php#a31744f235bdcd875c6e69661a4f0a490">More...</a><br /></td></tr>
<tr class="separator:a31744f235bdcd875c6e69661a4f0a490"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><dl class="section author"><dt>Author</dt><dd>Mathias CABIOCH-DELALANDE </dd></dl>
<dl class="section date"><dt>Date</dt><dd>Last modification : October, 12 2018 </dd></dl>
</div></div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../dir_bfccd401955b95cf8c75461437045ac0.php">inc</a></li><li class="navelem"><a class="el" href="../../dir_2ce2ad1ea5ded593884489da6d66e532.php">C++</a></li><li class="navelem"><a class="el" href="../../d5/de9/a00176.php">string.hpp</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
