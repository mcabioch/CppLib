<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.11"/>
		<title>C++: collides.hpp Source File</title>
		<link href="../../tabs.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="../../jquery.js"></script>
		<script type="text/javascript" src="../../dynsections.js"></script>
		<link href="../../navtree.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="../../resize.js"></script>
<script type="text/javascript" src="../../navtreedata.js"></script>
<script type="text/javascript" src="../../navtree.js"></script>
<script type="text/javascript">
  $(document).ready(initResizable);
  $(window).load(resizeHeight);
</script>
		<link href="../../search/search.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="../../search/searchdata.js"></script>
<script type="text/javascript" src="../../search/search.js"></script>
<script type="text/javascript">
  $(document).ready(function() { init_search(); });
</script>
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
				$text = "Generated on Wed Aug 8 2018 09:57:28 for C++ by";
				$text = substr($text, 0, sizeof($text) - 4);
				$tmp = substr($text, 17);
				$tmp = substr($tmp, 0, strpos($tmp, " for"));
				$lastModif = date("l jS \of F Y \a\\t H:i:s", strtotime($tmp));
			?>
		<!-- end header part -->
<!-- Generated by Doxygen 1.8.11 -->
<script type="text/javascript">
var searchBox = new SearchBox("searchBox", "../../search",false,'Search');
</script>
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="../../index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="../../pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="../../namespaces.php"><span>Namespaces</span></a></li>
      <li><a href="../../annotated.php"><span>Classes</span></a></li>
      <li class="current"><a href="../../files.php"><span>Files</span></a></li>
      <li>
        <div id="MSearchBox" class="MSearchBoxInactive">
        <span class="left">
          <img id="MSearchSelect" src="../../search/mag_sel.png"
               onmouseover="return searchBox.OnSearchSelectShow()"
               onmouseout="return searchBox.OnSearchSelectHide()"
               alt=""/>
          <input type="text" id="MSearchField" value="Search" accesskey="S"
               onfocus="searchBox.OnSearchFieldFocus(true)" 
               onblur="searchBox.OnSearchFieldFocus(false)" 
               onkeyup="searchBox.OnSearchFieldChange(event)"/>
          </span><span class="right">
            <a id="MSearchClose" href="javascript:searchBox.CloseResultsWindow()"><img id="MSearchCloseImg" border="0" src="../../search/close.png" alt=""/></a>
          </span>
        </div>
      </li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="../../files.php"><span>File&#160;List</span></a></li>
      <li><a href="../../globals.php"><span>File&#160;Members</span></a></li>
    </ul>
  </div>
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
$(document).ready(function(){initNavTree('d8/d53/a00081_source.php','../../');});
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
<div class="title">collides.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../d8/d53/a00081.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="preprocessor">#ifndef HEADER_CPP_COLLIDES</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="preprocessor">#define HEADER_CPP_COLLIDES</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;</div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d1/d44/a00098.php">C++/maths.hpp</a>&quot;</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;</div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="keywordtype">bool</span> <a class="code" href="../../d8/d53/a00081.php#af60fbd19bc0a11e705053162743b61ab">collidesC</a>(<a class="code" href="../../dc/dee/a00053.php#a2bf7d302208fe9b09381557fd448e273">double64_t</a> r1, <a class="code" href="../../dc/dee/a00053.php#a2bf7d302208fe9b09381557fd448e273">double64_t</a> x1, <a class="code" href="../../dc/dee/a00053.php#a2bf7d302208fe9b09381557fd448e273">double64_t</a> y1, <a class="code" href="../../dc/dee/a00053.php#a2bf7d302208fe9b09381557fd448e273">double64_t</a> r2, <a class="code" href="../../dc/dee/a00053.php#a2bf7d302208fe9b09381557fd448e273">double64_t</a> x2, <a class="code" href="../../dc/dee/a00053.php#a2bf7d302208fe9b09381557fd448e273">double64_t</a> y2);</div><div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;<span class="keywordtype">bool</span> <a class="code" href="../../d8/d53/a00081.php#a0ca458c90a6ad3c335611d4fa7632799">collidesR</a>(<a class="code" href="../../dc/dee/a00053.php#a2bf7d302208fe9b09381557fd448e273">double64_t</a> x1, <a class="code" href="../../dc/dee/a00053.php#a2bf7d302208fe9b09381557fd448e273">double64_t</a> y1, <a class="code" href="../../dc/dee/a00053.php#a2bf7d302208fe9b09381557fd448e273">double64_t</a> w1, <a class="code" href="../../dc/dee/a00053.php#a2bf7d302208fe9b09381557fd448e273">double64_t</a> h1, <a class="code" href="../../dc/dee/a00053.php#a2bf7d302208fe9b09381557fd448e273">double64_t</a> x2, <a class="code" href="../../dc/dee/a00053.php#a2bf7d302208fe9b09381557fd448e273">double64_t</a> y2, <a class="code" href="../../dc/dee/a00053.php#a2bf7d302208fe9b09381557fd448e273">double64_t</a> w2, <a class="code" href="../../dc/dee/a00053.php#a2bf7d302208fe9b09381557fd448e273">double64_t</a> h2);</div><div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;</div><div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;<span class="keywordtype">bool</span> <a class="code" href="../../d8/d53/a00081.php#aac46d2f6b2a395b12c6fb33535b86e13">collidesRC</a>(<a class="code" href="../../dc/dee/a00053.php#a2bf7d302208fe9b09381557fd448e273">double64_t</a> rx, <a class="code" href="../../dc/dee/a00053.php#a2bf7d302208fe9b09381557fd448e273">double64_t</a> ry, <a class="code" href="../../dc/dee/a00053.php#a2bf7d302208fe9b09381557fd448e273">double64_t</a> w, <a class="code" href="../../dc/dee/a00053.php#a2bf7d302208fe9b09381557fd448e273">double64_t</a> h, <a class="code" href="../../dc/dee/a00053.php#a2bf7d302208fe9b09381557fd448e273">double64_t</a> cx, <a class="code" href="../../dc/dee/a00053.php#a2bf7d302208fe9b09381557fd448e273">double64_t</a> cy, <a class="code" href="../../dc/dee/a00053.php#a2bf7d302208fe9b09381557fd448e273">double64_t</a> r);</div><div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;<span class="keywordtype">bool</span> <a class="code" href="../../d8/d53/a00081.php#a055c561b1007fa07d4c79f22e8350e42">collidesPC</a>(<a class="code" href="../../dc/dee/a00053.php#a2bf7d302208fe9b09381557fd448e273">double64_t</a> cx, <a class="code" href="../../dc/dee/a00053.php#a2bf7d302208fe9b09381557fd448e273">double64_t</a> cy, <a class="code" href="../../dc/dee/a00053.php#a2bf7d302208fe9b09381557fd448e273">double64_t</a> r, <a class="code" href="../../dc/dee/a00053.php#a2bf7d302208fe9b09381557fd448e273">double64_t</a> x, <a class="code" href="../../dc/dee/a00053.php#a2bf7d302208fe9b09381557fd448e273">double64_t</a> y);</div><div class="line"><a name="l00075"></a><span class="lineno">   75</span>&#160;<span class="keywordtype">bool</span> <a class="code" href="../../d8/d53/a00081.php#a7c26f38746418a618aa907cbba8cde78">collidesPR</a>(<a class="code" href="../../dc/dee/a00053.php#a2bf7d302208fe9b09381557fd448e273">double64_t</a> rx, <a class="code" href="../../dc/dee/a00053.php#a2bf7d302208fe9b09381557fd448e273">double64_t</a> ry, <a class="code" href="../../dc/dee/a00053.php#a2bf7d302208fe9b09381557fd448e273">double64_t</a> w, <a class="code" href="../../dc/dee/a00053.php#a2bf7d302208fe9b09381557fd448e273">double64_t</a> h, <a class="code" href="../../dc/dee/a00053.php#a2bf7d302208fe9b09381557fd448e273">double64_t</a> x, <a class="code" href="../../dc/dee/a00053.php#a2bf7d302208fe9b09381557fd448e273">double64_t</a> y);</div><div class="line"><a name="l00076"></a><span class="lineno">   76</span>&#160;</div><div class="line"><a name="l00088"></a><span class="lineno">   88</span>&#160;<span class="keywordtype">bool</span> <a class="code" href="../../d8/d53/a00081.php#a0dfd04142dcd92cf285fbe2fe933c875">ProjectionSurSegment</a>(<a class="code" href="../../dc/dee/a00053.php#a2bf7d302208fe9b09381557fd448e273">double64_t</a> Cx, <a class="code" href="../../dc/dee/a00053.php#a2bf7d302208fe9b09381557fd448e273">double64_t</a> Cy, <a class="code" href="../../dc/dee/a00053.php#a2bf7d302208fe9b09381557fd448e273">double64_t</a> Ax, <a class="code" href="../../dc/dee/a00053.php#a2bf7d302208fe9b09381557fd448e273">double64_t</a> Ay, <a class="code" href="../../dc/dee/a00053.php#a2bf7d302208fe9b09381557fd448e273">double64_t</a> Bx, <a class="code" href="../../dc/dee/a00053.php#a2bf7d302208fe9b09381557fd448e273">double64_t</a> By);</div><div class="line"><a name="l00089"></a><span class="lineno">   89</span>&#160;</div><div class="line"><a name="l00090"></a><span class="lineno">   90</span>&#160;<span class="preprocessor">#endif //HEADER_CPP_COLLIDES</span></div><div class="ttc" id="a00081_php_a7c26f38746418a618aa907cbba8cde78"><div class="ttname"><a href="../../d8/d53/a00081.php#a7c26f38746418a618aa907cbba8cde78">collidesPR</a></div><div class="ttdeci">bool collidesPR(double64_t rx, double64_t ry, double64_t w, double64_t h, double64_t x, double64_t y)</div><div class="ttdoc">Compute if there is a collision between a point and a rectangle. </div></div>
<div class="ttc" id="a00081_php_a0dfd04142dcd92cf285fbe2fe933c875"><div class="ttname"><a href="../../d8/d53/a00081.php#a0dfd04142dcd92cf285fbe2fe933c875">ProjectionSurSegment</a></div><div class="ttdeci">bool ProjectionSurSegment(double64_t Cx, double64_t Cy, double64_t Ax, double64_t Ay, double64_t Bx, double64_t By)</div><div class="ttdoc">Compute if there is a collision on a segment. </div></div>
<div class="ttc" id="a00081_php_aac46d2f6b2a395b12c6fb33535b86e13"><div class="ttname"><a href="../../d8/d53/a00081.php#aac46d2f6b2a395b12c6fb33535b86e13">collidesRC</a></div><div class="ttdeci">bool collidesRC(double64_t rx, double64_t ry, double64_t w, double64_t h, double64_t cx, double64_t cy, double64_t r)</div><div class="ttdoc">Compute if there is a collision between a rectangle and a circle. </div></div>
<div class="ttc" id="a00053_php_a2bf7d302208fe9b09381557fd448e273"><div class="ttname"><a href="../../dc/dee/a00053.php#a2bf7d302208fe9b09381557fd448e273">double64_t</a></div><div class="ttdeci">long double double64_t</div><div class="ttdef"><b>Definition:</b> types.hpp:16</div></div>
<div class="ttc" id="a00081_php_a0ca458c90a6ad3c335611d4fa7632799"><div class="ttname"><a href="../../d8/d53/a00081.php#a0ca458c90a6ad3c335611d4fa7632799">collidesR</a></div><div class="ttdeci">bool collidesR(double64_t x1, double64_t y1, double64_t w1, double64_t h1, double64_t x2, double64_t y2, double64_t w2, double64_t h2)</div><div class="ttdoc">Compute if there is a collision between two rectangles. </div></div>
<div class="ttc" id="a00081_php_a055c561b1007fa07d4c79f22e8350e42"><div class="ttname"><a href="../../d8/d53/a00081.php#a055c561b1007fa07d4c79f22e8350e42">collidesPC</a></div><div class="ttdeci">bool collidesPC(double64_t cx, double64_t cy, double64_t r, double64_t x, double64_t y)</div><div class="ttdoc">Compute if there is a collision between a point and a circle. </div></div>
<div class="ttc" id="a00098_php"><div class="ttname"><a href="../../d1/d44/a00098.php">maths.hpp</a></div></div>
<div class="ttc" id="a00081_php_af60fbd19bc0a11e705053162743b61ab"><div class="ttname"><a href="../../d8/d53/a00081.php#af60fbd19bc0a11e705053162743b61ab">collidesC</a></div><div class="ttdeci">bool collidesC(double64_t r1, double64_t x1, double64_t y1, double64_t r2, double64_t x2, double64_t y2)</div><div class="ttdoc">Compute if there is a collision between two circles. </div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_1788504ec76a4dda5464562bc560d0b5.php">C++Tests</a></li><li class="navelem"><a class="el" href="../../dir_2e741febc7df97747a68d36c1b3be5f0.php">C++</a></li><li class="navelem"><a class="el" href="../../dir_220287e732b97f08f66e5f221c69df74.php">inc</a></li><li class="navelem"><a class="el" href="../../dir_75b0389167f46f79a101ef8c4434cec4.php">C++</a></li><li class="navelem"><a class="el" href="../../d8/d53/a00081.php">collides.hpp</a></li>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
