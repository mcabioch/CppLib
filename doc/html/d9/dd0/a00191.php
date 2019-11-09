<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.13"/>
		<title>C++: strptime.h File Reference</title>
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
				$text = "Generated on Sat Nov 9 2019 14:37:52 for C++ by";
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
$(document).ready(function(){initNavTree('d9/dd0/a00191.php','../../');});
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
  <div class="headertitle">
<div class="title">strptime.h File Reference</div>  </div>
</div><!--header-->
<div class="contents">

<p>Used to replace strptime function when compiling for Windows.  
<a href="#details">More...</a></p>
<div class="textblock"><code>#include &quot;<a class="el" href="../../da/d15/a00188.php">C++/string.hpp</a>&quot;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for strptime.h:</div>
<div class="dyncontent">
<div class="center"><img src="../../dd/da2/a00192.png" border="0" usemap="#strptime_8h" alt=""/></div>
<map name="strptime_8h" id="strptime_8h">
<area shape="rect" id="node2" href="../../da/d15/a00188.php" title="C++/string.hpp" alt="" coords="816,80,925,107"/>
<area shape="rect" id="node4" href="../../dc/d57/a00194.php" title="C++/system.hpp" alt="" coords="743,155,863,181"/>
<area shape="rect" id="node57" href="../../db/dd9/a00179.php" title="C++/RNG.hpp" alt="" coords="887,155,993,181"/>
<area shape="rect" id="node59" href="../../d0/dc2/a00104.php" title="C++/macro.hpp" alt="" coords="1018,155,1131,181"/>
<area shape="rect" id="node5" href="../../da/dec/a00080.php" title="C++/errors.hpp" alt="" coords="747,229,858,256"/>
<area shape="rect" id="node6" href="../../d5/de0/a00050.php" title="C++/console.hpp" alt="" coords="673,304,796,331"/>
<area shape="rect" id="node55" href="../../d2/d1f/a00083.php" title="C++/files.hpp" alt="" coords="820,304,921,331"/>
<area shape="rect" id="node7" href="../../d3/d8b/a00059.php" title="C++/convert.hpp" alt="" coords="684,379,804,405"/>
<area shape="rect" id="node9" href="../../da/d45/a00011.php" title="C++/array.hpp" alt="" coords="751,453,857,480"/>
<area shape="rect" id="node11" href="../../dd/d32/a00041.php" title="C++/check.hpp" alt="" coords="748,528,860,555"/>
<area shape="rect" id="node54" href="../../d7/d25/a00182.php" title="C++/sorting.hpp" alt="" coords="886,528,1002,555"/>
<area shape="rect" id="node14" href="../../dc/d9a/a00218.php" title="C++/vector.hpp" alt="" coords="889,603,1002,629"/>
<area shape="rect" id="node48" href="../../d6/d2d/a00047.php" title="C++/collides.hpp" alt="" coords="743,603,865,629"/>
<area shape="rect" id="node15" href="../../d2/de7/a00014.php" title="C++/arraysIncludes.hpp" alt="" coords="909,677,1072,704"/>
<area shape="rect" id="node22" href="../../d5/dcb/a00170.php" title="C++/pointers.hpp" alt="" coords="872,976,995,1003"/>
<area shape="rect" id="node23" href="../../dd/dc1/a00212.php" title="C++/types.hpp" alt="" coords="771,1051,880,1077"/>
<area shape="rect" id="node25" href="../../d4/d51/a00017.php" title="Big.hpp" alt="" coords="736,1125,803,1152"/>
<area shape="rect" id="node44" href="../../d7/d3f/a00173.php" title="PureVirtual.hpp" alt="" coords="827,1125,938,1152"/>
<area shape="rect" id="node45" href="../../d3/dd5/a00215.php" title="UsefullDefines.hpp" alt="" coords="963,1125,1096,1152"/>
<area shape="rect" id="node26" href="../../d5/db1/a00140.php" title="C++/OsDetection.hpp" alt="" coords="322,1200,473,1227"/>
<area shape="rect" id="node40" href="../../d3/d52/a00023.php" title="C++/Big_Constructor.hpp" alt="" coords="497,1200,668,1227"/>
<area shape="rect" id="node41" href="../../d5/d16/a00029.php" title="C++/Big_Operator.hpp" alt="" coords="693,1200,846,1227"/>
<area shape="rect" id="node42" href="../../db/db2/a00020.php" title="C++/Big_Comparison.hpp" alt="" coords="871,1200,1044,1227"/>
<area shape="rect" id="node43" href="../../d6/d5b/a00026.php" title="C++/Big_Maths.hpp" alt="" coords="1068,1200,1207,1227"/>
<area shape="rect" id="node28" href="../../d4/d3a/a00101.php" title="C++/lowIncludes.hpp" alt="" coords="391,1275,537,1301"/>
<area shape="rect" id="node49" href="../../d3/d00/a00113.php" title="C++/Matrix.hpp" alt="" coords="702,677,815,704"/>
<area shape="rect" id="node50" href="../../da/d2a/a00086.php" title="C++/Fraction.hpp" alt="" coords="578,752,702,779"/>
<area shape="rect" id="node51" href="../../d4/d81/a00110.php" title="C++/maths.hpp" alt="" coords="583,827,697,853"/>
<area shape="rect" id="node52" href="../../dc/d87/a00032.php" title="C++/Binary.hpp" alt="" coords="829,901,944,928"/>
</map>
</div>
</div><div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="../../dd/df4/a00193.png" border="0" usemap="#strptime_8hdep" alt=""/></div>
<map name="strptime_8hdep" id="strptime_8hdep">
<area shape="rect" id="node2" href="../../de/d79/a00203.php" title="timeFunctions.hpp" alt="" coords="284,80,413,107"/>
<area shape="rect" id="node3" href="../../d9/d77/a00095.php" title="includes.hpp" alt="" coords="301,155,396,181"/>
<area shape="rect" id="node4" href="../../d5/df9/a00044.php" title="Clock.hpp" alt="" coords="5,379,87,405"/>
<area shape="rect" id="node25" href="../../dc/dee/a00053.php" title="ConsoleTable.hpp" alt="" coords="56,304,183,331"/>
<area shape="rect" id="node26" href="../../de/de1/a00065.php" title="Date.hpp" alt="" coords="135,229,210,256"/>
<area shape="rect" id="node28" href="../../d1/d44/a00098.php" title="IOConfig.hpp" alt="" coords="297,379,395,405"/>
<area shape="rect" id="node29" href="../../d7/dce/a00143.php" title="Path.hpp" alt="" coords="386,229,461,256"/>
<area shape="rect" id="node34" href="../../d3/df8/a00155.php" title="PathfindingException.hpp" alt="" coords="485,229,655,256"/>
<area shape="rect" id="node35" href="../../d5/de9/a00176.php" title="Referenced.hpp" alt="" coords="547,453,662,480"/>
<area shape="rect" id="node36" href="../../de/db1/a00197.php" title="Threadable.hpp" alt="" coords="688,453,799,480"/>
<area shape="rect" id="node39" href="../../d3/db1/a00200.php" title="Time.hpp" alt="" coords="235,229,311,256"/>
<area shape="rect" id="node5" href="../../d0/d89/a00071.php" title="defines.hpp" alt="" coords="336,603,425,629"/>
<area shape="rect" id="node6" href="../../df/d03/a00062.php" title="cryptage.hpp" alt="" coords="223,677,320,704"/>
<area shape="rect" id="node23" href="../../df/d98/a00107.php" title="Map.hpp" alt="" coords="345,677,417,704"/>
<area shape="rect" id="node24" href="../../d3/de5/a00209.php" title="Tree.hpp" alt="" coords="441,677,515,704"/>
<area shape="rect" id="node7" href="../../d4/d8c/a00035.php" title="C++.hpp" alt="" coords="344,752,417,779"/>
<area shape="rect" id="node8" href="../../d9/d2e/a00056.php" title="Contraption.hpp" alt="" coords="277,827,391,853"/>
<area shape="rect" id="node22" href="../../d1/dc1/a00092.php" title="Identifier.hpp" alt="" coords="376,1200,473,1227"/>
<area shape="rect" id="node9" href="../../d1/d09/a00077.php" title="Entity.hpp" alt="" coords="180,901,261,928"/>
<area shape="rect" id="node20" href="../../d2/df5/a00137.php" title="Object.hpp" alt="" coords="299,901,385,928"/>
<area shape="rect" id="node10" href="../../db/dab/a00089.php" title="Hostile.hpp" alt="" coords="66,976,154,1003"/>
<area shape="rect" id="node17" href="../../dd/d52/a00221.php" title="Vegetal.hpp" alt="" coords="175,1051,266,1077"/>
<area shape="rect" id="node11" href="../../d7/d46/a00002.php" title="Animal.hpp" alt="" coords="37,1051,124,1077"/>
<area shape="rect" id="node12" href="../../dd/dad/a00005.php" title="Ant.hpp" alt="" coords="39,1125,106,1152"/>
<area shape="rect" id="node13" href="../../db/db6/a00074.php" title="Entities.hpp" alt="" coords="257,1200,347,1227"/>
<area shape="rect" id="node14" href="../../dc/de6/a00167.php" title="PlayerAbstraction.hpp" alt="" coords="229,1275,380,1301"/>
<area shape="rect" id="node15" href="../../db/ddf/a00164.php" title="Player.hpp" alt="" coords="319,1349,403,1376"/>
<area shape="rect" id="node16" href="../../d8/d41/a00038.php" title="C++Entities.hpp" alt="" coords="302,1424,419,1451"/>
<area shape="rect" id="node18" href="../../d1/d88/a00128.php" title="Mushroom.hpp" alt="" coords="131,1125,239,1152"/>
<area shape="rect" id="node19" href="../../d6/d7d/a00161.php" title="Plant.hpp" alt="" coords="263,1125,341,1152"/>
<area shape="rect" id="node21" href="../../de/df3/a00185.php" title="Stone.hpp" alt="" coords="309,976,391,1003"/>
<area shape="rect" id="node27" href="../../da/d24/a00068.php" title="DateTime.hpp" alt="" coords="207,304,311,331"/>
<area shape="rect" id="node30" href="../../d6/db8/a00158.php" title="PathfindingProblem.hpp" alt="" coords="395,304,555,331"/>
<area shape="rect" id="node31" href="../../d9/db6/a00146.php" title="Pathfinding.hpp" alt="" coords="419,379,531,405"/>
<area shape="rect" id="node32" href="../../d7/d9a/a00152.php" title="PathfindingDijkstra.hpp" alt="" coords="365,453,522,480"/>
<area shape="rect" id="node33" href="../../da/d1e/a00149.php" title="PathfindingAlgorithms.hpp" alt="" coords="356,528,531,555"/>
<area shape="rect" id="node37" href="../../d4/dee/a00008.php" title="Args.hpp" alt="" coords="606,528,681,555"/>
<area shape="rect" id="node38" href="../../d5/df1/a00206.php" title="Timer.hpp" alt="" coords="705,528,785,555"/>
</map>
</div>
</div><a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Used to replace strptime function when compiling for Windows. </p>
<dl class="section author"><dt>Author</dt><dd>contributed to The NetBSD Foundation by Klaus Klein </dd></dl>
<dl class="section date"><dt>Date</dt><dd>Last modification : October, 02 2019</dd></dl>
<p>Copyright (c) 1997, 1998, 2005, 2008 The NetBSD Foundation, Inc.<br />
All rights reserved.</p>
<p>This code was contributed to The NetBSD Foundation by Klaus Klein. Heavily optimised by David Laight</p>
<p>Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:</p><ol type="1">
<li>Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.</li>
<li>Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.</li>
</ol>
<p>THIS SOFTWARE IS PROVIDED BY THE NETBSD FOUNDATION, INC. AND CONTRIBUTORS ``AS IS'' AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE FOUNDATION OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.</p>
<p>Inclusion in node-odbc note:</p>
<p>This code was found here: <a href="http://social.msdn.microsoft.com/forums/en-US/vcgeneral/thread/25a654f9-b6b6-490a-8f36-c87483bb36b7">http://social.msdn.microsoft.com/forums/en-US/vcgeneral/thread/25a654f9-b6b6-490a-8f36-c87483bb36b7</a> <br />
One user posted what looks to be a scaled down version of the NetBSD code but did not include any header with their work. Since it seems pretty obvious that the user took much of the code from NetBSD, that is why the NetBSD header is displayed above. </p>
</div></div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../dir_bfccd401955b95cf8c75461437045ac0.php">inc</a></li><li class="navelem"><a class="el" href="../../dir_2ce2ad1ea5ded593884489da6d66e532.php">C++</a></li><li class="navelem"><a class="el" href="../../d9/dd0/a00191.php">strptime.h</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
