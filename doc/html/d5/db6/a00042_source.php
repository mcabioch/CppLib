<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>C++: Ant.hpp Source File</title>
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
   &#160;<span id="projectnumber">1.0</span>
   </div>
   <div id="projectbrief">My own functions in C++</div>
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
$(document).ready(function(){initNavTree('d5/db6/a00042_source.php','../../');});
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
<div class="title">Ant.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../d5/db6/a00042.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="preprocessor">#ifndef HEADER_ANT</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="preprocessor">#define HEADER_ANT</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;</div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../dd/d32/a00041.php">Animal.hpp</a>&quot;</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;</div><div class="line"><a name="l00017"></a><span class="lineno"><a class="line" href="../../d0/d0b/a00004.php">   17</a></span>&#160;<span class="keyword">class </span><a class="code" href="../../d0/d0b/a00004.php">Ant</a> : <span class="keyword">public</span> <a class="code" href="../../d1/d7c/a00003.php">Animal</a> {</div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;    <span class="keyword">public</span>:</div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;        <span class="comment">/* Constructor &amp; Destroyer */</span></div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;            <a class="code" href="../../d0/d0b/a00004.php#a088ebbdb8d6cd05cf6f6c1d35b766c6e">Ant</a>(<a class="code" href="../../d3/dfe/a00025.php">Map</a>* map = <span class="keyword">nullptr</span>, <a class="code" href="../../df/d61/a00031.php">Point</a> pt = {0, 0, 0}, <a class="code" href="../../d7/dd4/a00013.php">ContraptionAttr</a> attr = {0, 0, 0});</div><div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;            <span class="keyword">virtual</span> <a class="code" href="../../d0/d0b/a00004.php#af335a456d7217ebd688e14918fc653e1">~Ant</a>();</div><div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;</div><div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;        <span class="comment">/* Setters */</span></div><div class="line"><a name="l00037"></a><span class="lineno"><a class="line" href="../../d0/d0b/a00004.php#a1817b0ca58a288635443ec70eef39435">   37</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d0/d0b/a00004.php#a1817b0ca58a288635443ec70eef39435">setCaste</a>(<span class="keyword">const</span> std::string caste){ this-&gt;caste = caste; }</div><div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;</div><div class="line"><a name="l00045"></a><span class="lineno"><a class="line" href="../../d0/d0b/a00004.php#a98381326b3d00b7ae08aae01a9b84ab7">   45</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d0/d0b/a00004.php#a98381326b3d00b7ae08aae01a9b84ab7">setStone</a>(<span class="keyword">const</span> <span class="keywordtype">double</span> stone){ this-&gt;stone = stone; }</div><div class="line"><a name="l00052"></a><span class="lineno"><a class="line" href="../../d0/d0b/a00004.php#a81a08f12660a3591d2eaa89d4d8ade22">   52</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d0/d0b/a00004.php#a81a08f12660a3591d2eaa89d4d8ade22">setStoneMax</a>(<span class="keyword">const</span> <span class="keywordtype">double</span> stoneMax){ this-&gt;stoneMax = stoneMax; }</div><div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;</div><div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;        <span class="comment">/* Getters */</span></div><div class="line"><a name="l00056"></a><span class="lineno"><a class="line" href="../../d0/d0b/a00004.php#a16d7a5ccf86a581fa5cacf21f9d8427d">   56</a></span>&#160;            std::string <a class="code" href="../../d0/d0b/a00004.php#a16d7a5ccf86a581fa5cacf21f9d8427d">getCaste</a>()<span class="keyword">const </span>{ <span class="keywordflow">return</span> caste; }</div><div class="line"><a name="l00057"></a><span class="lineno">   57</span>&#160;</div><div class="line"><a name="l00059"></a><span class="lineno"><a class="line" href="../../d0/d0b/a00004.php#a0d29f6509a768a83e38f43180e6f4523">   59</a></span>&#160;            <span class="keywordtype">double</span> <a class="code" href="../../d0/d0b/a00004.php#a0d29f6509a768a83e38f43180e6f4523">getStone</a>()<span class="keyword">const </span>{ <span class="keywordflow">return</span> stone; }</div><div class="line"><a name="l00061"></a><span class="lineno"><a class="line" href="../../d0/d0b/a00004.php#a70d09707d0774775b9c2a226598329c1">   61</a></span>&#160;            <span class="keywordtype">double</span> <a class="code" href="../../d0/d0b/a00004.php#a70d09707d0774775b9c2a226598329c1">getStoneMax</a>()<span class="keyword">const </span>{ <span class="keywordflow">return</span> stoneMax; }</div><div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;</div><div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;        <span class="comment">/* Friends */</span></div><div class="line"><a name="l00064"></a><span class="lineno">   64</span>&#160;</div><div class="line"><a name="l00065"></a><span class="lineno">   65</span>&#160;        <span class="comment">/* Others */</span></div><div class="line"><a name="l00072"></a><span class="lineno">   72</span>&#160;            <span class="keyword">virtual</span> <span class="keywordtype">void</span> <a class="code" href="../../d0/d0b/a00004.php#a199ef1722ee48997bc56b183f3c2e417">printInfos</a>(std::ostream&amp; stream)<span class="keyword">const</span>;</div><div class="line"><a name="l00073"></a><span class="lineno">   73</span>&#160;</div><div class="line"><a name="l00074"></a><span class="lineno">   74</span>&#160;    <span class="keyword">protected</span>:</div><div class="line"><a name="l00075"></a><span class="lineno">   75</span>&#160;</div><div class="line"><a name="l00076"></a><span class="lineno">   76</span>&#160;    <span class="keyword">private</span>:</div><div class="line"><a name="l00077"></a><span class="lineno">   77</span>&#160;        std::string caste;</div><div class="line"><a name="l00078"></a><span class="lineno">   78</span>&#160;</div><div class="line"><a name="l00079"></a><span class="lineno">   79</span>&#160;        <span class="keywordtype">double</span> stone;</div><div class="line"><a name="l00080"></a><span class="lineno">   80</span>&#160;        <span class="keywordtype">double</span> stoneMax;</div><div class="line"><a name="l00081"></a><span class="lineno">   81</span>&#160;};</div><div class="line"><a name="l00082"></a><span class="lineno">   82</span>&#160;</div><div class="line"><a name="l00083"></a><span class="lineno">   83</span>&#160;<span class="preprocessor">#endif //HEADER_ANT</span></div><div class="ttc" id="a00004_php_a98381326b3d00b7ae08aae01a9b84ab7"><div class="ttname"><a href="../../d0/d0b/a00004.php#a98381326b3d00b7ae08aae01a9b84ab7">Ant::setStone</a></div><div class="ttdeci">void setStone(const double stone)</div><div class="ttdoc">Se the stone for the ant. </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/db6/a00042_source.php#l00045">Ant.hpp:45</a></div></div>
<div class="ttc" id="a00004_php_a199ef1722ee48997bc56b183f3c2e417"><div class="ttname"><a href="../../d0/d0b/a00004.php#a199ef1722ee48997bc56b183f3c2e417">Ant::printInfos</a></div><div class="ttdeci">virtual void printInfos(std::ostream &amp;stream) const </div><div class="ttdoc">Print the infos in the instance of the class in stream. </div></div>
<div class="ttc" id="a00004_php_af335a456d7217ebd688e14918fc653e1"><div class="ttname"><a href="../../d0/d0b/a00004.php#af335a456d7217ebd688e14918fc653e1">Ant::~Ant</a></div><div class="ttdeci">virtual ~Ant()</div><div class="ttdoc">Virtual destructor. </div></div>
<div class="ttc" id="a00004_php_a0d29f6509a768a83e38f43180e6f4523"><div class="ttname"><a href="../../d0/d0b/a00004.php#a0d29f6509a768a83e38f43180e6f4523">Ant::getStone</a></div><div class="ttdeci">double getStone() const </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/db6/a00042_source.php#l00059">Ant.hpp:59</a></div></div>
<div class="ttc" id="a00004_php_a1817b0ca58a288635443ec70eef39435"><div class="ttname"><a href="../../d0/d0b/a00004.php#a1817b0ca58a288635443ec70eef39435">Ant::setCaste</a></div><div class="ttdeci">void setCaste(const std::string caste)</div><div class="ttdoc">Set the caste of the ant. </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/db6/a00042_source.php#l00037">Ant.hpp:37</a></div></div>
<div class="ttc" id="a00003_php"><div class="ttname"><a href="../../d1/d7c/a00003.php">Animal</a></div><div class="ttdoc">An animal. </div><div class="ttdef"><b>Definition:</b> <a href="../../dd/d32/a00041_source.php#l00017">Animal.hpp:17</a></div></div>
<div class="ttc" id="a00004_php_a70d09707d0774775b9c2a226598329c1"><div class="ttname"><a href="../../d0/d0b/a00004.php#a70d09707d0774775b9c2a226598329c1">Ant::getStoneMax</a></div><div class="ttdeci">double getStoneMax() const </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/db6/a00042_source.php#l00061">Ant.hpp:61</a></div></div>
<div class="ttc" id="a00041_php"><div class="ttname"><a href="../../dd/d32/a00041.php">Animal.hpp</a></div></div>
<div class="ttc" id="a00025_php"><div class="ttname"><a href="../../d3/dfe/a00025.php">Map</a></div><div class="ttdoc">A map class to have something common. </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d6f/a00063_source.php#l00046">Map.hpp:46</a></div></div>
<div class="ttc" id="a00004_php_a16d7a5ccf86a581fa5cacf21f9d8427d"><div class="ttname"><a href="../../d0/d0b/a00004.php#a16d7a5ccf86a581fa5cacf21f9d8427d">Ant::getCaste</a></div><div class="ttdeci">std::string getCaste() const </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/db6/a00042_source.php#l00056">Ant.hpp:56</a></div></div>
<div class="ttc" id="a00004_php"><div class="ttname"><a href="../../d0/d0b/a00004.php">Ant</a></div><div class="ttdoc">An ant. </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/db6/a00042_source.php#l00017">Ant.hpp:17</a></div></div>
<div class="ttc" id="a00004_php_a088ebbdb8d6cd05cf6f6c1d35b766c6e"><div class="ttname"><a href="../../d0/d0b/a00004.php#a088ebbdb8d6cd05cf6f6c1d35b766c6e">Ant::Ant</a></div><div class="ttdeci">Ant(Map *map=nullptr, Point pt={0, 0, 0}, ContraptionAttr attr={0, 0, 0})</div><div class="ttdoc">Constructor of the class. </div></div>
<div class="ttc" id="a00031_php"><div class="ttname"><a href="../../df/d61/a00031.php">Point</a></div><div class="ttdoc">A struct to define a point in space. </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d2e/a00056_source.php#l00063">defines.hpp:63</a></div></div>
<div class="ttc" id="a00004_php_a81a08f12660a3591d2eaa89d4d8ade22"><div class="ttname"><a href="../../d0/d0b/a00004.php#a81a08f12660a3591d2eaa89d4d8ade22">Ant::setStoneMax</a></div><div class="ttdeci">void setStoneMax(const double stoneMax)</div><div class="ttdoc">Set the maximum stone for the ant. </div><div class="ttdef"><b>Definition:</b> <a href="../../d5/db6/a00042_source.php#l00052">Ant.hpp:52</a></div></div>
<div class="ttc" id="a00013_php"><div class="ttname"><a href="../../d7/dd4/a00013.php">ContraptionAttr</a></div><div class="ttdoc">A struct to define Contraption attributes. </div><div class="ttdef"><b>Definition:</b> <a href="../../d9/d2e/a00056_source.php#l00073">defines.hpp:73</a></div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_1788504ec76a4dda5464562bc560d0b5.php">C++Tests</a></li><li class="navelem"><a class="el" href="../../dir_2e741febc7df97747a68d36c1b3be5f0.php">C++</a></li><li class="navelem"><a class="el" href="../../dir_220287e732b97f08f66e5f221c69df74.php">inc</a></li><li class="navelem"><a class="el" href="../../dir_75b0389167f46f79a101ef8c4434cec4.php">C++</a></li><li class="navelem"><a class="el" href="../../d5/db6/a00042.php">Ant.hpp</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
