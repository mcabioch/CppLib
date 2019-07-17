<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>C++: Map.hpp Source File</title>
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
$(document).ready(function(){initNavTree('d1/d22/a00057_source.php','../../');});
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
<div class="title">Map.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../d1/d22/a00057.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="preprocessor">#ifndef HEADER_CPP_MAP</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="preprocessor">#define HEADER_CPP_MAP</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;</div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../d2/de7/a00014.php">C++/defines.hpp</a>&quot;</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;</div><div class="line"><a name="l00016"></a><span class="lineno"><a class="line" href="../../d1/d22/a00057.php#acd2017d946fd818c3b8ca377bc4006c7">   16</a></span>&#160;<span class="keyword">enum class</span> <a class="code" href="../../d1/d22/a00057.php#acd2017d946fd818c3b8ca377bc4006c7">Tile</a> {</div><div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;    <a class="code" href="../../d2/de7/a00014.php#a224b9163917ac32fc95a60d8c1eec3aaab50339a10e1de285ac99d4c3990b8693">NONE</a> = 0,</div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;    <a class="code" href="../../d1/d22/a00057.php#acd2017d946fd818c3b8ca377bc4006c7a2add2964642f39099cb51edf4a4f5a70">WATER</a>,</div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;    <a class="code" href="../../d1/d22/a00057.php#acd2017d946fd818c3b8ca377bc4006c7aa620a361e9c7602698b91e34b416c08b">LAVA</a>,</div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;    <a class="code" href="../../d1/d22/a00057.php#acd2017d946fd818c3b8ca377bc4006c7aa3030e42cd8f04255711905a9182399f">GRASS</a>,</div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;    <a class="code" href="../../d1/d22/a00057.php#acd2017d946fd818c3b8ca377bc4006c7a3ef5656907af69ff36347e8dc2416744">DIRT</a>,</div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;    <a class="code" href="../../d1/d22/a00057.php#acd2017d946fd818c3b8ca377bc4006c7a48d536b2de1195d0c9f6ea8ab884085e">WALL</a>,</div><div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;    <a class="code" href="../../d1/d22/a00057.php#acd2017d946fd818c3b8ca377bc4006c7aa63e2adb56a8019132fbe12acda3b7d6">STONE</a>,</div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;    <a class="code" href="../../d1/d22/a00057.php#acd2017d946fd818c3b8ca377bc4006c7aadec9358cd14fbdcdb29c5b2f040d712">HOLE</a>,</div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;    <a class="code" href="../../d1/d22/a00057.php#acd2017d946fd818c3b8ca377bc4006c7a6d0c9fc747131795e6e5d0c5119f12cb">VOID</a>,</div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;    <a class="code" href="../../d1/d22/a00057.php#acd2017d946fd818c3b8ca377bc4006c7abb1ca97ec761fc37101737ba0aa2e7c5">ERROR</a>,</div><div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;    <a class="code" href="../../d1/d22/a00057.php#acd2017d946fd818c3b8ca377bc4006c7a2582dd863c1c50525a267e1cbe656929">AIR</a></div><div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;};</div><div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;</div><div class="line"><a name="l00033"></a><span class="lineno"><a class="line" href="../../d1/d22/a00057.php">   33</a></span>&#160;<span class="keyword">struct </span><a class="code" href="../../d1/d22/a00057.php#df/d98/a00107">WorldDimensions</a> {</div><div class="line"><a name="l00034"></a><span class="lineno"><a class="line" href="../../d1/d22/a00057.php#a56d14d07cb773a1a4bf12f16e7b57d07">   34</a></span>&#160;    <span class="keywordtype">size_t</span> w = 0;</div><div class="line"><a name="l00035"></a><span class="lineno"><a class="line" href="../../d1/d22/a00057.php#aab0b2a75b9747cdc33e2982b2df3c322">   35</a></span>&#160;    <span class="keywordtype">size_t</span> h = 0;</div><div class="line"><a name="l00036"></a><span class="lineno"><a class="line" href="../../d1/d22/a00057.php#aa07c34b536e895dc3ab45bb353aa54a6">   36</a></span>&#160;    <span class="keywordtype">size_t</span> z = 0;</div><div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;};</div><div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;</div><div class="line"><a name="l00039"></a><span class="lineno"><a class="line" href="../../d1/d22/a00057.php#aac0c2192b0b28c4353d6250244b70287">   39</a></span>&#160;<span class="keyword">using</span> <a class="code" href="../../d1/d22/a00057.php#aac0c2192b0b28c4353d6250244b70287">MapLine</a> = std::vector&lt;Tile&gt;;</div><div class="line"><a name="l00040"></a><span class="lineno"><a class="line" href="../../d1/d22/a00057.php#a1ee2140d47f9982ff0aa65b71256bc80">   40</a></span>&#160;<span class="keyword">using</span> <a class="code" href="../../d1/d22/a00057.php#a1ee2140d47f9982ff0aa65b71256bc80">MapArray</a> = std::vector&lt;MapLine&gt;;</div><div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;</div><div class="line"><a name="l00046"></a><span class="lineno"><a class="line" href="../../de/d8c/a00036.php">   46</a></span>&#160;<span class="keyword">class </span><a class="code" href="../../de/d8c/a00036.php">Map</a> {</div><div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;    <span class="keyword">public</span>:</div><div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;        <span class="comment">/* Constructor */</span></div><div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;            <a class="code" href="../../de/d8c/a00036.php">Map</a>(<a class="code" href="../../d1/d22/a00057.php#df/d98/a00107">WorldDimensions</a> dimensions);</div><div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;</div><div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;        <span class="comment">/* Setters */</span></div><div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;            <span class="keywordtype">void</span> setSize(<a class="code" href="../../d1/d22/a00057.php#df/d98/a00107">WorldDimensions</a> dimensions);</div><div class="line"><a name="l00069"></a><span class="lineno">   69</span>&#160;            <span class="keywordtype">void</span> setW(<span class="keywordtype">size_t</span> w);</div><div class="line"><a name="l00076"></a><span class="lineno">   76</span>&#160;            <span class="keywordtype">void</span> setH(<span class="keywordtype">size_t</span> h);</div><div class="line"><a name="l00077"></a><span class="lineno">   77</span>&#160;</div><div class="line"><a name="l00078"></a><span class="lineno">   78</span>&#160;        <span class="comment">/* Getters */</span></div><div class="line"><a name="l00080"></a><span class="lineno"><a class="line" href="../../de/d8c/a00036.php#ae362b35f435bf1dcb6274821470ae0c9">   80</a></span>&#160;            <a class="code" href="../../d1/d22/a00057.php#df/d98/a00107">WorldDimensions</a> <a class="code" href="../../de/d8c/a00036.php#ae362b35f435bf1dcb6274821470ae0c9">getSize</a>()<span class="keyword">const </span>{ <span class="keywordflow">return</span> <a class="code" href="../../d1/d22/a00057.php#df/d98/a00107">WorldDimensions</a>{w, h}; }</div><div class="line"><a name="l00082"></a><span class="lineno"><a class="line" href="../../de/d8c/a00036.php#aadfd9c2b4c9555d97e47532ff0248f87">   82</a></span>&#160;            <span class="keywordtype">size_t</span> <a class="code" href="../../de/d8c/a00036.php#aadfd9c2b4c9555d97e47532ff0248f87">getW</a>()<span class="keyword">const </span>{ <span class="keywordflow">return</span> w; }</div><div class="line"><a name="l00084"></a><span class="lineno"><a class="line" href="../../de/d8c/a00036.php#a4b2f272b33eae99d8f64a7b13c687ab6">   84</a></span>&#160;            <span class="keywordtype">size_t</span> <a class="code" href="../../de/d8c/a00036.php#a4b2f272b33eae99d8f64a7b13c687ab6">getH</a>()<span class="keyword">const </span>{ <span class="keywordflow">return</span> h; }</div><div class="line"><a name="l00085"></a><span class="lineno">   85</span>&#160;</div><div class="line"><a name="l00087"></a><span class="lineno"><a class="line" href="../../de/d8c/a00036.php#aa083b12c5bc9d4ad54301a31603e9fa0">   87</a></span>&#160;            <a class="code" href="../../d1/d22/a00057.php#a1ee2140d47f9982ff0aa65b71256bc80">MapArray</a> <span class="keyword">get</span>()<span class="keyword">const</span> { <span class="keywordflow">return</span> map; }</div><div class="line"><a name="l00088"></a><span class="lineno">   88</span>&#160;</div><div class="line"><a name="l00089"></a><span class="lineno">   89</span>&#160;        <span class="comment">/* Operators */</span></div><div class="line"><a name="l00097"></a><span class="lineno">   97</span>&#160;            <a class="code" href="../../d1/d22/a00057.php#acd2017d946fd818c3b8ca377bc4006c7">Tile</a>&amp; operator()(<span class="keyword">const</span> <span class="keywordtype">size_t</span>&amp; i, <span class="keyword">const</span> <span class="keywordtype">size_t</span>&amp; j);</div><div class="line"><a name="l00105"></a><span class="lineno">  105</span>&#160;            <a class="code" href="../../d1/d22/a00057.php#acd2017d946fd818c3b8ca377bc4006c7">Tile</a> operator()(<span class="keyword">const</span> <span class="keywordtype">size_t</span>&amp; i, <span class="keyword">const</span> <span class="keywordtype">size_t</span>&amp; j) <span class="keyword">const</span>;</div><div class="line"><a name="l00106"></a><span class="lineno">  106</span>&#160;</div><div class="line"><a name="l00107"></a><span class="lineno">  107</span>&#160;        <span class="comment">/* Others */</span></div><div class="line"><a name="l00112"></a><span class="lineno">  112</span>&#160;            <span class="keywordtype">void</span> clear();</div><div class="line"><a name="l00117"></a><span class="lineno">  117</span>&#160;            <span class="keywordtype">void</span> consolePrint();</div><div class="line"><a name="l00118"></a><span class="lineno">  118</span>&#160;</div><div class="line"><a name="l00126"></a><span class="lineno">  126</span>&#160;            <span class="keywordtype">bool</span> isXIn(<span class="keywordtype">double</span> pt, <span class="keywordtype">double</span> dim);</div><div class="line"><a name="l00134"></a><span class="lineno">  134</span>&#160;            <span class="keywordtype">bool</span> isYIn(<span class="keywordtype">double</span> pt, <span class="keywordtype">double</span> dim);</div><div class="line"><a name="l00135"></a><span class="lineno">  135</span>&#160;</div><div class="line"><a name="l00142"></a><span class="lineno">  142</span>&#160;            <span class="keywordtype">bool</span> load(std::string file);</div><div class="line"><a name="l00149"></a><span class="lineno">  149</span>&#160;            <span class="keywordtype">bool</span> save(std::string file);</div><div class="line"><a name="l00150"></a><span class="lineno">  150</span>&#160;</div><div class="line"><a name="l00151"></a><span class="lineno">  151</span>&#160;    <span class="keyword">protected</span>:</div><div class="line"><a name="l00152"></a><span class="lineno">  152</span>&#160;</div><div class="line"><a name="l00153"></a><span class="lineno">  153</span>&#160;</div><div class="line"><a name="l00154"></a><span class="lineno">  154</span>&#160;    <span class="keyword">private</span>:</div><div class="line"><a name="l00155"></a><span class="lineno">  155</span>&#160;        <a class="code" href="../../d1/d22/a00057.php#acd2017d946fd818c3b8ca377bc4006c7">Tile</a> errorTile;</div><div class="line"><a name="l00156"></a><span class="lineno">  156</span>&#160;</div><div class="line"><a name="l00157"></a><span class="lineno">  157</span>&#160;        <span class="keywordtype">size_t</span> w;</div><div class="line"><a name="l00158"></a><span class="lineno">  158</span>&#160;        <span class="keywordtype">size_t</span> h;</div><div class="line"><a name="l00159"></a><span class="lineno">  159</span>&#160;</div><div class="line"><a name="l00160"></a><span class="lineno">  160</span>&#160;        <a class="code" href="../../d1/d22/a00057.php#a1ee2140d47f9982ff0aa65b71256bc80">MapArray</a> map;</div><div class="line"><a name="l00161"></a><span class="lineno">  161</span>&#160;};</div><div class="line"><a name="l00162"></a><span class="lineno">  162</span>&#160;</div><div class="line"><a name="l00163"></a><span class="lineno">  163</span>&#160;<span class="preprocessor">#endif //HEADER_CPP_MAP</span></div><div class="ttc" id="a00036_php"><div class="ttname"><a href="../../de/d8c/a00036.php">Map</a></div><div class="ttdoc">A map class to have something common. </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d22/a00057_source.php#l00046">Map.hpp:46</a></div></div>
<div class="ttc" id="a00057_php_acd2017d946fd818c3b8ca377bc4006c7aa3030e42cd8f04255711905a9182399f"><div class="ttname"><a href="../../d1/d22/a00057.php#acd2017d946fd818c3b8ca377bc4006c7aa3030e42cd8f04255711905a9182399f">Tile::GRASS</a></div></div>
<div class="ttc" id="a00057_php_acd2017d946fd818c3b8ca377bc4006c7abb1ca97ec761fc37101737ba0aa2e7c5"><div class="ttname"><a href="../../d1/d22/a00057.php#acd2017d946fd818c3b8ca377bc4006c7abb1ca97ec761fc37101737ba0aa2e7c5">Tile::ERROR</a></div></div>
<div class="ttc" id="a00057_php_acd2017d946fd818c3b8ca377bc4006c7a2add2964642f39099cb51edf4a4f5a70"><div class="ttname"><a href="../../d1/d22/a00057.php#acd2017d946fd818c3b8ca377bc4006c7a2add2964642f39099cb51edf4a4f5a70">Tile::WATER</a></div></div>
<div class="ttc" id="a00057_php_acd2017d946fd818c3b8ca377bc4006c7aadec9358cd14fbdcdb29c5b2f040d712"><div class="ttname"><a href="../../d1/d22/a00057.php#acd2017d946fd818c3b8ca377bc4006c7aadec9358cd14fbdcdb29c5b2f040d712">Tile::HOLE</a></div></div>
<div class="ttc" id="a00036_php_ae362b35f435bf1dcb6274821470ae0c9"><div class="ttname"><a href="../../de/d8c/a00036.php#ae362b35f435bf1dcb6274821470ae0c9">Map::getSize</a></div><div class="ttdeci">WorldDimensions getSize() const </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d22/a00057_source.php#l00080">Map.hpp:80</a></div></div>
<div class="ttc" id="a00036_php_aadfd9c2b4c9555d97e47532ff0248f87"><div class="ttname"><a href="../../de/d8c/a00036.php#aadfd9c2b4c9555d97e47532ff0248f87">Map::getW</a></div><div class="ttdeci">size_t getW() const </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d22/a00057_source.php#l00082">Map.hpp:82</a></div></div>
<div class="ttc" id="a00057_php_acd2017d946fd818c3b8ca377bc4006c7aa620a361e9c7602698b91e34b416c08b"><div class="ttname"><a href="../../d1/d22/a00057.php#acd2017d946fd818c3b8ca377bc4006c7aa620a361e9c7602698b91e34b416c08b">Tile::LAVA</a></div></div>
<div class="ttc" id="a00057_php_acd2017d946fd818c3b8ca377bc4006c7"><div class="ttname"><a href="../../d1/d22/a00057.php#acd2017d946fd818c3b8ca377bc4006c7">Tile</a></div><div class="ttdeci">Tile</div><div class="ttdoc">Tiles of the map. </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d22/a00057_source.php#l00016">Map.hpp:16</a></div></div>
<div class="ttc" id="a00057_php_df/d98/a00107"><div class="ttname"><a href="../../d1/d22/a00057.php#df/d98/a00107">WorldDimensions</a></div><div class="ttdoc">An object to group the dimensions of the world. </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d22/a00057_source.php#l00033">Map.hpp:33</a></div></div>
<div class="ttc" id="a00057_php_acd2017d946fd818c3b8ca377bc4006c7a3ef5656907af69ff36347e8dc2416744"><div class="ttname"><a href="../../d1/d22/a00057.php#acd2017d946fd818c3b8ca377bc4006c7a3ef5656907af69ff36347e8dc2416744">Tile::DIRT</a></div></div>
<div class="ttc" id="a00057_php_acd2017d946fd818c3b8ca377bc4006c7a48d536b2de1195d0c9f6ea8ab884085e"><div class="ttname"><a href="../../d1/d22/a00057.php#acd2017d946fd818c3b8ca377bc4006c7a48d536b2de1195d0c9f6ea8ab884085e">Tile::WALL</a></div></div>
<div class="ttc" id="a00057_php_acd2017d946fd818c3b8ca377bc4006c7aa63e2adb56a8019132fbe12acda3b7d6"><div class="ttname"><a href="../../d1/d22/a00057.php#acd2017d946fd818c3b8ca377bc4006c7aa63e2adb56a8019132fbe12acda3b7d6">Tile::STONE</a></div></div>
<div class="ttc" id="a00057_php_acd2017d946fd818c3b8ca377bc4006c7a2582dd863c1c50525a267e1cbe656929"><div class="ttname"><a href="../../d1/d22/a00057.php#acd2017d946fd818c3b8ca377bc4006c7a2582dd863c1c50525a267e1cbe656929">Tile::AIR</a></div></div>
<div class="ttc" id="a00014_php"><div class="ttname"><a href="../../d2/de7/a00014.php">defines.hpp</a></div></div>
<div class="ttc" id="a00057_php_acd2017d946fd818c3b8ca377bc4006c7a6d0c9fc747131795e6e5d0c5119f12cb"><div class="ttname"><a href="../../d1/d22/a00057.php#acd2017d946fd818c3b8ca377bc4006c7a6d0c9fc747131795e6e5d0c5119f12cb">Tile::VOID</a></div></div>
<div class="ttc" id="a00057_php_a1ee2140d47f9982ff0aa65b71256bc80"><div class="ttname"><a href="../../d1/d22/a00057.php#a1ee2140d47f9982ff0aa65b71256bc80">MapArray</a></div><div class="ttdeci">std::vector&lt; MapLine &gt; MapArray</div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d22/a00057_source.php#l00040">Map.hpp:40</a></div></div>
<div class="ttc" id="a00014_php_a224b9163917ac32fc95a60d8c1eec3aaab50339a10e1de285ac99d4c3990b8693"><div class="ttname"><a href="../../d2/de7/a00014.php#a224b9163917ac32fc95a60d8c1eec3aaab50339a10e1de285ac99d4c3990b8693">Direction::NONE</a></div></div>
<div class="ttc" id="a00057_php_aac0c2192b0b28c4353d6250244b70287"><div class="ttname"><a href="../../d1/d22/a00057.php#aac0c2192b0b28c4353d6250244b70287">MapLine</a></div><div class="ttdeci">std::vector&lt; Tile &gt; MapLine</div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d22/a00057_source.php#l00039">Map.hpp:39</a></div></div>
<div class="ttc" id="a00036_php_a4b2f272b33eae99d8f64a7b13c687ab6"><div class="ttname"><a href="../../de/d8c/a00036.php#a4b2f272b33eae99d8f64a7b13c687ab6">Map::getH</a></div><div class="ttdeci">size_t getH() const </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d22/a00057_source.php#l00084">Map.hpp:84</a></div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_1788504ec76a4dda5464562bc560d0b5.php">C++Tests</a></li><li class="navelem"><a class="el" href="../../dir_2e741febc7df97747a68d36c1b3be5f0.php">C++</a></li><li class="navelem"><a class="el" href="../../dir_220287e732b97f08f66e5f221c69df74.php">inc</a></li><li class="navelem"><a class="el" href="../../dir_75b0389167f46f79a101ef8c4434cec4.php">C++</a></li><li class="navelem"><a class="el" href="../../d1/d22/a00057.php">Map.hpp</a></li>
    <li class="footer">Generated on Tue Jul 31 2018 08:05:54 for C++ by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
