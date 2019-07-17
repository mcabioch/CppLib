<!-- HTML header for doxygen 1.8.11-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<meta name="generator" content="Doxygen 1.8.11"/>
		<title>C++: File Members</title>
		<link href="tabs.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript" src="dynsections.js"></script>
		<link href="navtree.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="resize.js"></script>
<script type="text/javascript" src="navtreedata.js"></script>
<script type="text/javascript" src="navtree.js"></script>
<script type="text/javascript">
  $(document).ready(initResizable);
  $(window).load(resizeHeight);
</script>
		<link href="search/search.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="search/searchdata.js"></script>
<script type="text/javascript" src="search/search.js"></script>
<script type="text/javascript">
  $(document).ready(function() { init_search(); });
</script>
		<link href="doxygen.css" rel="stylesheet" type="text/css" />
		<link href="doxystyle.css" rel="stylesheet" type="text/css"/>
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
				$text = "Generated on Tue Apr 16 2019 18:27:05 for C++ by";
				$text = substr($text, 0, sizeof($text) - 4);
				$tmp = substr($text, 17);
				$tmp = substr($tmp, 0, strpos($tmp, " for"));
				$lastModif = date("l jS \of F Y \a\\t H:i:s", strtotime($tmp));
			?>
		<!-- end header part -->
<!-- Generated by Doxygen 1.8.11 -->
<script type="text/javascript">
var searchBox = new SearchBox("searchBox", "search",false,'Search');
</script>
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
      <li><a href="annotated.php"><span>Classes</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
      <li>
        <div id="MSearchBox" class="MSearchBoxInactive">
        <span class="left">
          <img id="MSearchSelect" src="search/mag_sel.png"
               onmouseover="return searchBox.OnSearchSelectShow()"
               onmouseout="return searchBox.OnSearchSelectHide()"
               alt=""/>
          <input type="text" id="MSearchField" value="Search" accesskey="S"
               onfocus="searchBox.OnSearchFieldFocus(true)" 
               onblur="searchBox.OnSearchFieldFocus(false)" 
               onkeyup="searchBox.OnSearchFieldChange(event)"/>
          </span><span class="right">
            <a id="MSearchClose" href="javascript:searchBox.CloseResultsWindow()"><img id="MSearchCloseImg" border="0" src="search/close.png" alt=""/></a>
          </span>
        </div>
      </li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="files.php"><span>File&#160;List</span></a></li>
      <li class="current"><a href="globals.php"><span>File&#160;Members</span></a></li>
    </ul>
  </div>
  <div id="navrow3" class="tabs2">
    <ul class="tablist">
      <li><a href="globals.php"><span>All</span></a></li>
      <li class="current"><a href="globals_func.php"><span>Functions</span></a></li>
      <li><a href="globals_vars.php"><span>Variables</span></a></li>
      <li><a href="globals_type.php"><span>Typedefs</span></a></li>
      <li><a href="globals_enum.php"><span>Enumerations</span></a></li>
      <li><a href="globals_eval.php"><span>Enumerator</span></a></li>
      <li><a href="globals_defs.php"><span>Macros</span></a></li>
    </ul>
  </div>
  <div id="navrow4" class="tabs3">
    <ul class="tablist">
      <li><a href="#index_a"><span>a</span></a></li>
      <li><a href="#index_c"><span>c</span></a></li>
      <li><a href="#index_d"><span>d</span></a></li>
      <li><a href="#index_e"><span>e</span></a></li>
      <li><a href="#index_f"><span>f</span></a></li>
      <li><a href="#index_g"><span>g</span></a></li>
      <li><a href="#index_i"><span>i</span></a></li>
      <li><a href="#index_l"><span>l</span></a></li>
      <li><a href="#index_m"><span>m</span></a></li>
      <li><a href="#index_n"><span>n</span></a></li>
      <li><a href="#index_o"><span>o</span></a></li>
      <li><a href="#index_p"><span>p</span></a></li>
      <li><a href="#index_r"><span>r</span></a></li>
      <li><a href="#index_s"><span>s</span></a></li>
      <li><a href="#index_t"><span>t</span></a></li>
      <li><a href="#index_u"><span>u</span></a></li>
      <li class="current"><a href="#index_w"><span>w</span></a></li>
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
$(document).ready(function(){initNavTree('globals_func.php','');});
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

<div class="contents">
&#160;

<h3><a class="anchor" id="index_a"></a>- a -</h3><ul>
<li>abs()
: <a class="el" href="d8/d53/a00081.php#ae0e4b82dc4f1908ec8b8248bf5539ef1">Big_Maths.hpp</a>
, <a class="el" href="d3/d32/a00105.php#ad44dc8b9cd6eaa619880db19cf171751">maths.hpp</a>
</li>
<li>array1Dto2D()
: <a class="el" href="d9/da5/a00075.php#a3d4d62df9dc3a6a2461bc63d7cbd85d0">array.hpp</a>
</li>
<li>array2Dto1D()
: <a class="el" href="d9/da5/a00075.php#a290ab1227a622c80b64a2ba918f707ff">array.hpp</a>
</li>
</ul>


<h3><a class="anchor" id="index_c"></a>- c -</h3><ul>
<li>collidesC()
: <a class="el" href="d1/d1e/a00087.php#af60fbd19bc0a11e705053162743b61ab">collides.hpp</a>
</li>
<li>collidesPC()
: <a class="el" href="d1/d1e/a00087.php#a055c561b1007fa07d4c79f22e8350e42">collides.hpp</a>
</li>
<li>collidesPR()
: <a class="el" href="d1/d1e/a00087.php#a7c26f38746418a618aa907cbba8cde78">collides.hpp</a>
</li>
<li>collidesR()
: <a class="el" href="d1/d1e/a00087.php#a0ca458c90a6ad3c335611d4fa7632799">collides.hpp</a>
</li>
<li>collidesRC()
: <a class="el" href="d1/d1e/a00087.php#aac46d2f6b2a395b12c6fb33535b86e13">collides.hpp</a>
</li>
<li>contains()
: <a class="el" href="d9/da5/a00075.php#a54f668e0211381d2d15ca45dcf3c55d0">array.hpp</a>
</li>
<li>count()
: <a class="el" href="da/d72/a00124.php#acd2025e6c626d84af37996f3adc4d313">string.hpp</a>
</li>
</ul>


<h3><a class="anchor" id="index_d"></a>- d -</h3><ul>
<li>decimalPart()
: <a class="el" href="d3/d32/a00105.php#a6a8af65111300da455bef67651f83c73">maths.hpp</a>
</li>
<li>deletePtr()
: <a class="el" href="d8/d87/a00118.php#af1915631b948847ea6f17a35296f0be1">pointers.hpp</a>
</li>
<li>dist()
: <a class="el" href="d3/d32/a00105.php#a4142ea0a8b92d11dde61f60c7ab6591b">maths.hpp</a>
</li>
<li>dsigmoide()
: <a class="el" href="d3/d32/a00105.php#a4ff3753997a901c32bcda158286e48cf">maths.hpp</a>
</li>
</ul>


<h3><a class="anchor" id="index_e"></a>- e -</h3><ul>
<li>error_log()
: <a class="el" href="d1/d84/a00097.php#aae3e42b5bf8dba8bf6431f2dea60c67b">errors.hpp</a>
</li>
<li>eucl()
: <a class="el" href="d3/d32/a00105.php#ab60083feca94427f7b2c4dfaeb249f07">maths.hpp</a>
</li>
<li>exec()
: <a class="el" href="dc/dfe/a00125.php#a83bb269a60f8213b25020dfe2044adc2">system.hpp</a>
</li>
</ul>


<h3><a class="anchor" id="index_f"></a>- f -</h3><ul>
<li>fileExists()
: <a class="el" href="d1/d44/a00098.php#ab1af2da8389d04f4346ecca7cdc5e6ee">files.hpp</a>
</li>
<li>fileFormat()
: <a class="el" href="d1/d44/a00098.php#a42e1aa02e585ad4e35d14ef5c133395a">files.hpp</a>
</li>
<li>fromBigVal()
: <a class="el" href="d9/da4/a00078.php#a37cb35a4cd9b6f429cb689acbe47ae63">Big.hpp</a>
</li>
</ul>


<h3><a class="anchor" id="index_g"></a>- g -</h3><ul>
<li>getall()
: <a class="el" href="da/d72/a00124.php#adc5dd3b93a37a832631d6e4339dc49ab">string.hpp</a>
</li>
<li>getFileSize()
: <a class="el" href="d1/d44/a00098.php#ab148021dd478aa69c83029819b268737">files.hpp</a>
</li>
<li>getlines()
: <a class="el" href="d1/d44/a00098.php#a2917d2eb46f63f2c97b1a30de55ec3c5">files.hpp</a>
</li>
<li>getMilli()
: <a class="el" href="d1/d88/a00128.php#ae4c6c825f2c7a717a5c24349d50fef7c">timeFunctions.hpp</a>
</li>
<li>getSec()
: <a class="el" href="d1/d88/a00128.php#a5834b1cc3c766f7520e829ca23284546">timeFunctions.hpp</a>
</li>
<li>getType()
: <a class="el" href="d1/d22/a00057.php#a497ec31c29c2eb98e791cb531907f9da">types.hpp</a>
</li>
</ul>


<h3><a class="anchor" id="index_i"></a>- i -</h3><ul>
<li>implode()
: <a class="el" href="d9/da5/a00075.php#a5090547d046a342ba3ac573e8248f628">array.hpp</a>
</li>
<li>info_log()
: <a class="el" href="d1/d84/a00097.php#a44a10c1b63e7f3384683e01f34ccd0e8">errors.hpp</a>
</li>
<li>isDivisor()
: <a class="el" href="d8/d53/a00081.php#a12f3ee0ee5338e75e0e9806911ea3417">Big_Maths.hpp</a>
</li>
<li>isLuhn()
: <a class="el" href="d3/d32/a00105.php#a17156bd6d64ba06c42acc22f8d8ab059">maths.hpp</a>
</li>
<li>isNumber()
: <a class="el" href="d3/d32/a00105.php#a65b1640156c68ea7687a41428022c1d8">maths.hpp</a>
</li>
<li>isPrime()
: <a class="el" href="d3/d32/a00105.php#a94305b67cb0435c3395b548ec8283154">maths.hpp</a>
</li>
</ul>


<h3><a class="anchor" id="index_l"></a>- l -</h3><ul>
<li>log2p()
: <a class="el" href="d3/d32/a00105.php#a75105ac3cb9ee25de080d973f0bfe112">maths.hpp</a>
</li>
<li>lowercase()
: <a class="el" href="da/d72/a00124.php#ab6e8937516645f1cb8f4f9c6981feed5">string.hpp</a>
</li>
<li>luhn()
: <a class="el" href="d3/d32/a00105.php#af80c49d6dbb8806f9d77da44f00a2079">maths.hpp</a>
</li>
</ul>


<h3><a class="anchor" id="index_m"></a>- m -</h3><ul>
<li>max()
: <a class="el" href="d3/d32/a00105.php#ac5673d3f9fc79ba39127c4a339dea626">maths.hpp</a>
</li>
<li>microSleep()
: <a class="el" href="d1/d88/a00128.php#ab27162b475af107bc907f477ace449f7">timeFunctions.hpp</a>
</li>
<li>milliSleep()
: <a class="el" href="d1/d88/a00128.php#aefa9275ce349fc4ef80ae49bf20e47e7">timeFunctions.hpp</a>
</li>
<li>min()
: <a class="el" href="d3/d32/a00105.php#a193486f414e3b93b2284a85977a4a02c">maths.hpp</a>
</li>
<li>mod()
: <a class="el" href="d3/d32/a00105.php#a9f362f22a77587bb719f13bc7fb185a2">maths.hpp</a>
</li>
</ul>


<h3><a class="anchor" id="index_n"></a>- n -</h3><ul>
<li>nanoSleep()
: <a class="el" href="d1/d88/a00128.php#a9c6ad480454627ccf3536c19d6ff19bd">timeFunctions.hpp</a>
</li>
</ul>


<h3><a class="anchor" id="index_o"></a>- o -</h3><ul>
<li>operator!=()
: <a class="el" href="d1/d51/a00079.php#ad9c55799e64051a79feb72642bacc2bd">Big_Comparison.hpp</a>
, <a class="el" href="d4/d7d/a00093.php#afd179446ef2a78265104038e26b5174b">Date.hpp</a>
, <a class="el" href="d1/d22/a00057.php#afe6bddc898007446cefa681bdcee2f70">types.hpp</a>
, <a class="el" href="df/dcd/a00127.php#a9ccc494b666d059616ff7511d7f8488d">Time.hpp</a>
, <a class="el" href="d1/d22/a00057.php#aeae7ce6ba6f05dea9ceb12844ebc7a5d">types.hpp</a>
</li>
<li>operator%()
: <a class="el" href="d9/da5/a00075.php#aaff2e93f8a7ffc3e84a3e14a584392fd">array.hpp</a>
</li>
<li>operator%=()
: <a class="el" href="d9/da5/a00075.php#a4ea5f5fe68709a70535f1d9097b4c5e3">array.hpp</a>
</li>
<li>operator+()
: <a class="el" href="d9/da5/a00075.php#af3dd873a961cbff7c1524add89469140">array.hpp</a>
, <a class="el" href="d4/d63/a00082.php#ad475b8459ee2ea450eecbc0b2a49f221">Big_Operator.hpp</a>
</li>
<li>operator++()
: <a class="el" href="d4/d63/a00082.php#a428362bc3ba31175efe0bd92444b0272">Big_Operator.hpp</a>
</li>
<li>operator+=()
: <a class="el" href="d9/da5/a00075.php#a0de5dca1e8d2e9a9c106a8c4b861e0be">array.hpp</a>
</li>
<li>operator-()
: <a class="el" href="d9/da5/a00075.php#aaf00ffb32776bdb3501a7e7dacbd3992">array.hpp</a>
, <a class="el" href="d4/d63/a00082.php#a8d411571b65ece2daacc12f0293850e8">Big_Operator.hpp</a>
</li>
<li>operator--()
: <a class="el" href="d4/d63/a00082.php#a5226a81d618e406ae59842011efff7f0">Big_Operator.hpp</a>
</li>
<li>operator-=()
: <a class="el" href="d9/da5/a00075.php#a72657fb961ec7b79362bc04d2516621e">array.hpp</a>
</li>
<li>operator&lt;()
: <a class="el" href="d1/d51/a00079.php#a9c625348272715ed4dad2c1420fb5bd0">Big_Comparison.hpp</a>
, <a class="el" href="d4/d7d/a00093.php#a900297f0a1d5018e0c30d2e8fa6a99c6">Date.hpp</a>
, <a class="el" href="df/dcd/a00127.php#a2176bf97f6b18969bb71b7c3f2e56234">Time.hpp</a>
, <a class="el" href="d1/d22/a00057.php#a8c3e1e97161b4bb75526a9ae5c6fece1">types.hpp</a>
</li>
<li>operator&lt;&lt;()
: <a class="el" href="d4/d7d/a00093.php#a1862604492a841a6b98e1a3061d95b96">Date.hpp</a>
, <a class="el" href="dc/d54/a00094.php#af57470a685eee50ced503a3ab380e9ba">DateTime.hpp</a>
, <a class="el" href="df/dcd/a00127.php#aa153c7e397eda8644c840a97f6036c5b">Time.hpp</a>
</li>
<li>operator&lt;=()
: <a class="el" href="d4/d7d/a00093.php#a54e8d7e0bf2a62a64edbf0163b916964">Date.hpp</a>
, <a class="el" href="d1/d51/a00079.php#a74e55e1a85a44b255d0f8e1158e02658">Big_Comparison.hpp</a>
, <a class="el" href="df/dcd/a00127.php#a6a0cd3c0e9278655b3751210ee91ab22">Time.hpp</a>
, <a class="el" href="d1/d22/a00057.php#a8d3641e527de40cc4aa34d588800b2ce">types.hpp</a>
</li>
<li>operator==()
: <a class="el" href="d1/d22/a00057.php#a6c1714b34921047b134b7033985baff9">types.hpp</a>
, <a class="el" href="d4/d7d/a00093.php#a9cfaaa2dd5867578b32c02fd8bc16339">Date.hpp</a>
, <a class="el" href="d1/d22/a00057.php#ad85246dd91c3685dafa427df745d7cf3">types.hpp</a>
, <a class="el" href="d1/d51/a00079.php#a5eed09966f2142f9d979e7be4643c06a">Big_Comparison.hpp</a>
, <a class="el" href="df/dcd/a00127.php#a7f236759032a4630990af05bd6c8530b">Time.hpp</a>
</li>
<li>operator&gt;()
: <a class="el" href="d1/d22/a00057.php#af9b09d51936de8ac9821f04d90423e25">types.hpp</a>
, <a class="el" href="df/dcd/a00127.php#a8527bf1c14fd3ecf9d5ad2f3e2706ab3">Time.hpp</a>
, <a class="el" href="d4/d7d/a00093.php#a0522a0522684cb4206274de78a4f2fce">Date.hpp</a>
</li>
<li>operator&gt;=()
: <a class="el" href="df/dcd/a00127.php#a4c81c1c1150b34a04ec6951f24e830ae">Time.hpp</a>
, <a class="el" href="d4/d7d/a00093.php#a97555d84e3c89d8d27146e61a875a7f6">Date.hpp</a>
, <a class="el" href="d1/d51/a00079.php#adf83d734f0c4b777bb675bf327996987">Big_Comparison.hpp</a>
, <a class="el" href="d1/d22/a00057.php#afb3f2280ed94a648a640b4d1a2d72687">types.hpp</a>
</li>
</ul>


<h3><a class="anchor" id="index_p"></a>- p -</h3><ul>
<li>pgcd()
: <a class="el" href="d3/d32/a00105.php#a6e9b223b45f9c0ef8d93fa65db1a8f98">maths.hpp</a>
</li>
<li>pop()
: <a class="el" href="d9/da5/a00075.php#af0b00d73c5298e0e46ed92f4d699d5f1">array.hpp</a>
</li>
<li>ppcm()
: <a class="el" href="d8/d53/a00081.php#ab1f2c2ec203d00b95fdb6afa41078465">Big_Maths.hpp</a>
</li>
<li>print_all()
: <a class="el" href="d9/da5/a00075.php#a37317d7bf62b3a11e70c60b5760d61d2">array.hpp</a>
</li>
<li>print_r()
: <a class="el" href="d9/da5/a00075.php#aac0759458c145572c122af7a6cff118c">array.hpp</a>
</li>
<li>printSize()
: <a class="el" href="d1/d22/a00057.php#ae3710ad55e61cc2cfa9ed28a0a66e73d">types.hpp</a>
</li>
<li>printType()
: <a class="el" href="d1/d22/a00057.php#a19a7086649ffef67d2846ad82f94db00">types.hpp</a>
</li>
<li>ProjectionSurSegment()
: <a class="el" href="d1/d1e/a00087.php#a0dfd04142dcd92cf285fbe2fe933c875">collides.hpp</a>
</li>
</ul>


<h3><a class="anchor" id="index_r"></a>- r -</h3><ul>
<li>randStr()
: <a class="el" href="da/d72/a00124.php#a1524e86da969173ebb7f94e7e5e7678e">string.hpp</a>
</li>
<li>ref()
: <a class="el" href="d4/d98/a00120.php#a40315697c73409f96f88e9339a8e983e">Referenced.hpp</a>
</li>
<li>removeAccents()
: <a class="el" href="da/d72/a00124.php#a14e02f8805cfac4b82495e998a4f47e9">string.hpp</a>
</li>
<li>replace()
: <a class="el" href="da/d72/a00124.php#a9ecbdf7ad4acac1473a2953ed1944751">string.hpp</a>
</li>
<li>rewrite()
: <a class="el" href="d9/da5/a00075.php#addfa691004e6d94461994bb7eccadf19">array.hpp</a>
</li>
<li>rngRange()
: <a class="el" href="d8/dfa/a00121.php#a9f2903f65500ce246447f08fea1d734a">RNG.hpp</a>
</li>
<li>round()
: <a class="el" href="d3/d32/a00105.php#a709c7dabaae9dea50d277980278081e0">maths.hpp</a>
</li>
</ul>


<h3><a class="anchor" id="index_s"></a>- s -</h3><ul>
<li>servLog()
: <a class="el" href="dc/dfe/a00125.php#a714a48beb28e34bd3256ae54e8dad152">system.hpp</a>
</li>
<li>setlines()
: <a class="el" href="d1/d44/a00098.php#aa9034f20bf3b289424ebda507e52e427">files.hpp</a>
</li>
<li>sigmoide()
: <a class="el" href="d3/d32/a00105.php#a755249c836b296951c41c8f1043aa383">maths.hpp</a>
</li>
<li>sleep()
: <a class="el" href="d1/d88/a00128.php#a13ee6d9e075a29ff03eed9f6f0288d4f">timeFunctions.hpp</a>
</li>
<li>sortAsc()
: <a class="el" href="df/dc8/a00122.php#a26ed92f1897ceffb429cd8f436460a3e">sorting.hpp</a>
</li>
<li>sortDesc()
: <a class="el" href="df/dc8/a00122.php#a3d14862e28ea7d3bb92662b4068f5763">sorting.hpp</a>
</li>
<li>split()
: <a class="el" href="da/d72/a00124.php#a147a636a70e5b5afedf65472e75bc002">string.hpp</a>
</li>
<li>sq()
: <a class="el" href="d3/d32/a00105.php#a54a702d8a0a5aa317cc65f5b01ed4ee6">maths.hpp</a>
, <a class="el" href="d8/d53/a00081.php#a7c148b59e6069f589a433b84ee0a08e5">Big_Maths.hpp</a>
</li>
<li>sqrt()
: <a class="el" href="d8/d53/a00081.php#afe63588b865baac135e4e15fe0a5a5dc">Big_Maths.hpp</a>
</li>
</ul>


<h3><a class="anchor" id="index_t"></a>- t -</h3><ul>
<li>tob()
: <a class="el" href="da/d82/a00091.php#aed2aab2b7ac71c437284d02abd685dcf">convert.hpp</a>
</li>
<li>toBigVal()
: <a class="el" href="d9/da4/a00078.php#a8ddcbf3fd6be0f42c96653bff6dd98c1">Big.hpp</a>
</li>
<li>tod()
: <a class="el" href="da/d82/a00091.php#a2432d9eaa9d57e487a6813a01993e8ef">convert.hpp</a>
</li>
<li>tof()
: <a class="el" href="da/d82/a00091.php#a28ef26e9e217e572497d67676081f08e">convert.hpp</a>
</li>
<li>toi()
: <a class="el" href="da/d82/a00091.php#a0de9d90c31d0a16f1d173f84be9e091a">convert.hpp</a>
</li>
<li>tomilli()
: <a class="el" href="da/d82/a00091.php#a265eba33269d06ee9905dabc1504661b">convert.hpp</a>
</li>
<li>tos()
: <a class="el" href="da/d82/a00091.php#af8a9ceaea141bbbc132bfce8a86d2aec">convert.hpp</a>
</li>
<li>tosh()
: <a class="el" href="da/d82/a00091.php#af957ca296c618a5c127e977aa7f0e5bc">convert.hpp</a>
</li>
<li>tost()
: <a class="el" href="da/d82/a00091.php#a013b8a84340b1ab68401095a566cc0ea">convert.hpp</a>
</li>
<li>tou()
: <a class="el" href="da/d82/a00091.php#a046732bd284eb239dc2eda5a92a17681">convert.hpp</a>
</li>
<li>tov()
: <a class="el" href="da/d82/a00091.php#aa70ef73b7fa30f68e3f14a6b60de10eb">convert.hpp</a>
</li>
<li>treeAscSorter()
: <a class="el" href="d6/d42/a00043.php#a05b65486fa381f9881b8ea58c13382ad">Tree.hpp</a>
</li>
<li>treeDescSorter()
: <a class="el" href="d6/d42/a00043.php#adcf4acfe617e3974a5ba668de737b80c">Tree.hpp</a>
</li>
<li>trim()
: <a class="el" href="da/d72/a00124.php#aabfbfab3c3f6562da02d78a54d1ca0e0">string.hpp</a>
</li>
</ul>


<h3><a class="anchor" id="index_u"></a>- u -</h3><ul>
<li>uppercase()
: <a class="el" href="da/d72/a00124.php#aad282b8ce93b90e54cbd1e337446f15a">string.hpp</a>
</li>
</ul>


<h3><a class="anchor" id="index_w"></a>- w -</h3><ul>
<li>warning_log()
: <a class="el" href="d1/d84/a00097.php#ab02b1d548b1c53cda0de554f2e086e43">errors.hpp</a>
</li>
<li>wholePart()
: <a class="el" href="d3/d32/a00105.php#ab5254a19797bf686467bc0f475bf6fdd">maths.hpp</a>
</li>
</ul>
</div><!-- contents -->
</div><!-- doc-content -->
<!-- HTML footer for doxygen 1.8.11-->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
	<ul>
		<li class="footer">
			<?php
				echo $text;
			?>
		</li>
	</ul>
</div>
</body>
</html>
