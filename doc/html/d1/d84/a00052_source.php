<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.8.11"/>
<title>C++: Animal.hpp Source File</title>
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
$(document).ready(function(){initNavTree('d1/d84/a00052_source.php','../../');});
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
<div class="title">Animal.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<a href="../../d1/d84/a00052.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;</div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="preprocessor">#ifndef HEADER_ANIMAL</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="preprocessor">#define HEADER_ANIMAL</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;</div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="../../db/db6/a00074.php">Hostile.hpp</a>&quot;</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;</div><div class="line"><a name="l00017"></a><span class="lineno"><a class="line" href="../../d1/d7c/a00003.php">   17</a></span>&#160;<span class="keyword">class </span><a class="code" href="../../d1/d7c/a00003.php">Animal</a> : <span class="keyword">public</span> <a class="code" href="../../d1/d2b/a00018.php">Entity</a>, <span class="keyword">public</span> <a class="code" href="../../d7/de0/a00022.php">Hostile</a> {</div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;    <span class="keyword">public</span>:</div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;        <span class="comment">/* Constructor &amp; Destroyer */</span></div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;            <a class="code" href="../../d1/d7c/a00003.php#a46fa459910827becd0cc0463f260d4e0">Animal</a>(<a class="code" href="../../db/df3/a00034.php">Map</a>* map = <span class="keyword">nullptr</span>, <a class="code" href="../../db/d3a/a00040.php">Point</a> pt = {0, 0, 0}, <a class="code" href="../../d2/de7/a00014.php">ContraptionAttr</a> attr = {0, 0, 0});</div><div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;            <span class="keyword">virtual</span> <a class="code" href="../../d1/d7c/a00003.php#a16d8b7f94611cc65f5cdb58cc105527b">~Animal</a>();</div><div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;</div><div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;        <span class="comment">/* Setters */</span></div><div class="line"><a name="l00037"></a><span class="lineno"><a class="line" href="../../d1/d7c/a00003.php#aebcd5a392cc2f21a3a84c64bdb6da8d8">   37</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d1/d7c/a00003.php#aebcd5a392cc2f21a3a84c64bdb6da8d8">setSpeed</a>(<span class="keywordtype">double</span> speed){ this-&gt;speed = speed; }</div><div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;</div><div class="line"><a name="l00045"></a><span class="lineno"><a class="line" href="../../d1/d7c/a00003.php#ac1860f30915418b618296f857be9151d">   45</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d1/d7c/a00003.php#ac1860f30915418b618296f857be9151d">setFood</a>(<span class="keyword">const</span> <span class="keywordtype">double</span> food){ this-&gt;food = food; }</div><div class="line"><a name="l00052"></a><span class="lineno"><a class="line" href="../../d1/d7c/a00003.php#ae77854b90674fa4d0de31766b04efc36">   52</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d1/d7c/a00003.php#ae77854b90674fa4d0de31766b04efc36">setFoodMax</a>(<span class="keyword">const</span> <span class="keywordtype">double</span> foodMax){ this-&gt;foodMax = foodMax; }</div><div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;</div><div class="line"><a name="l00060"></a><span class="lineno"><a class="line" href="../../d1/d7c/a00003.php#aacbfd4edeec5da6823f8f64d615aa23e">   60</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d1/d7c/a00003.php#aacbfd4edeec5da6823f8f64d615aa23e">setSpecies</a>(<span class="keyword">const</span> std::string species){ this-&gt;species = species; }</div><div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;</div><div class="line"><a name="l00068"></a><span class="lineno"><a class="line" href="../../d1/d7c/a00003.php#acd3a1a440f7f4f0553235f0ed106b7f8">   68</a></span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d1/d7c/a00003.php#acd3a1a440f7f4f0553235f0ed106b7f8">setSpecialAttack</a>(<span class="keyword">const</span> std::string specialAttack){ this-&gt;specialAttack = specialAttack; }</div><div class="line"><a name="l00069"></a><span class="lineno">   69</span>&#160;</div><div class="line"><a name="l00070"></a><span class="lineno">   70</span>&#160;        <span class="comment">/* Getters */</span></div><div class="line"><a name="l00072"></a><span class="lineno"><a class="line" href="../../d1/d7c/a00003.php#a8b3e1d9fdc351f93f8b8ad56b916971b">   72</a></span>&#160;            <span class="keywordtype">double</span> <a class="code" href="../../d1/d7c/a00003.php#a8b3e1d9fdc351f93f8b8ad56b916971b">getSpeed</a>()<span class="keyword">const </span>{ <span class="keywordflow">return</span> speed; }</div><div class="line"><a name="l00073"></a><span class="lineno">   73</span>&#160;</div><div class="line"><a name="l00075"></a><span class="lineno"><a class="line" href="../../d1/d7c/a00003.php#a85a4f637c29b0ac8b9b30ca6ce759da6">   75</a></span>&#160;            <span class="keywordtype">double</span> <a class="code" href="../../d1/d7c/a00003.php#a85a4f637c29b0ac8b9b30ca6ce759da6">getFood</a>()<span class="keyword">const </span>{ <span class="keywordflow">return</span> food; }</div><div class="line"><a name="l00077"></a><span class="lineno"><a class="line" href="../../d1/d7c/a00003.php#a7d60d308a46df248a62583cb904132da">   77</a></span>&#160;            <span class="keywordtype">double</span> <a class="code" href="../../d1/d7c/a00003.php#a7d60d308a46df248a62583cb904132da">getFoodMax</a>()<span class="keyword">const </span>{ <span class="keywordflow">return</span> foodMax; }</div><div class="line"><a name="l00078"></a><span class="lineno">   78</span>&#160;</div><div class="line"><a name="l00080"></a><span class="lineno"><a class="line" href="../../d1/d7c/a00003.php#a49bb6b51a6d4213beaee878ca25075bc">   80</a></span>&#160;            std::string <a class="code" href="../../d1/d7c/a00003.php#a49bb6b51a6d4213beaee878ca25075bc">getSpecies</a>()<span class="keyword">const </span>{ <span class="keywordflow">return</span> species; }</div><div class="line"><a name="l00081"></a><span class="lineno">   81</span>&#160;</div><div class="line"><a name="l00083"></a><span class="lineno"><a class="line" href="../../d1/d7c/a00003.php#af7d494388300a7c6e47d0f0fb8bf6397">   83</a></span>&#160;            std::string <a class="code" href="../../d1/d7c/a00003.php#af7d494388300a7c6e47d0f0fb8bf6397">getSpecialAttack</a>()<span class="keyword">const </span>{ <span class="keywordflow">return</span> specialAttack; }</div><div class="line"><a name="l00084"></a><span class="lineno">   84</span>&#160;</div><div class="line"><a name="l00085"></a><span class="lineno">   85</span>&#160;        <span class="comment">/* Friends */</span></div><div class="line"><a name="l00086"></a><span class="lineno">   86</span>&#160;</div><div class="line"><a name="l00087"></a><span class="lineno">   87</span>&#160;        <span class="comment">/* Others */</span></div><div class="line"><a name="l00088"></a><span class="lineno">   88</span>&#160;            <span class="comment">/* Collisions */</span></div><div class="line"><a name="l00095"></a><span class="lineno">   95</span>&#160;                <span class="keywordtype">bool</span> <a class="code" href="../../d1/d7c/a00003.php#aab6124c1e2241cf9491eb0dcc9c7d482">collidesRect</a>(<a class="code" href="../../d7/dd4/a00013.php">Contraption</a>&amp; other);</div><div class="line"><a name="l00103"></a><span class="lineno">  103</span>&#160;                <span class="keywordtype">bool</span> <a class="code" href="../../d1/d7c/a00003.php#a68a645b96b63d106fafc6ef24f472cdc">collidesCircle</a>(<a class="code" href="../../d7/dd4/a00013.php">Contraption</a>&amp; other, <span class="keywordtype">double</span> radius);</div><div class="line"><a name="l00104"></a><span class="lineno">  104</span>&#160;</div><div class="line"><a name="l00111"></a><span class="lineno"><a class="line" href="../../d1/d7c/a00003.php#ad9fd8916f14ba954f4f98911e34a6d99">  111</a></span>&#160;                <span class="keywordtype">bool</span> <a class="code" href="../../d1/d7c/a00003.php#ad9fd8916f14ba954f4f98911e34a6d99">collides</a>(<a class="code" href="../../d7/dd4/a00013.php">Contraption</a>&amp; other){ <span class="keywordflow">return</span> <a class="code" href="../../d1/d7c/a00003.php#aab6124c1e2241cf9491eb0dcc9c7d482">collidesRect</a>(other); }</div><div class="line"><a name="l00112"></a><span class="lineno">  112</span>&#160;</div><div class="line"><a name="l00119"></a><span class="lineno">  119</span>&#160;                <span class="keywordtype">bool</span> <a class="code" href="../../d1/d7c/a00003.php#aab6124c1e2241cf9491eb0dcc9c7d482">collidesRect</a>(<a class="code" href="../../d7/dd4/a00013.php">Contraption</a>* other = <span class="keyword">nullptr</span>);</div><div class="line"><a name="l00127"></a><span class="lineno">  127</span>&#160;                <span class="keywordtype">bool</span> <a class="code" href="../../d1/d7c/a00003.php#a68a645b96b63d106fafc6ef24f472cdc">collidesCircle</a>(<a class="code" href="../../d7/dd4/a00013.php">Contraption</a>* other = <span class="keyword">nullptr</span>, <span class="keywordtype">double</span> radius = 0);</div><div class="line"><a name="l00128"></a><span class="lineno">  128</span>&#160;</div><div class="line"><a name="l00135"></a><span class="lineno"><a class="line" href="../../d1/d7c/a00003.php#ade814dc70fcbf6685e6359420e7cf860">  135</a></span>&#160;                <span class="keywordtype">bool</span> <a class="code" href="../../d1/d7c/a00003.php#ade814dc70fcbf6685e6359420e7cf860">collides</a>(<a class="code" href="../../d7/dd4/a00013.php">Contraption</a>* other = <span class="keyword">nullptr</span>){ <span class="keywordflow">return</span> <a class="code" href="../../d1/d7c/a00003.php#aab6124c1e2241cf9491eb0dcc9c7d482">collidesRect</a>(other); }</div><div class="line"><a name="l00136"></a><span class="lineno">  136</span>&#160;</div><div class="line"><a name="l00141"></a><span class="lineno"><a class="line" href="../../d1/d7c/a00003.php#a3106b384960dd889ce599eed9d2b61d9">  141</a></span>&#160;                <span class="keywordtype">void</span> <a class="code" href="../../d1/d7c/a00003.php#a3106b384960dd889ce599eed9d2b61d9">anyObstacle</a>(){ obstacle = <span class="keyword">nullptr</span>; }</div><div class="line"><a name="l00142"></a><span class="lineno">  142</span>&#160;            <span class="comment">/**************/</span></div><div class="line"><a name="l00143"></a><span class="lineno">  143</span>&#160;</div><div class="line"><a name="l00150"></a><span class="lineno">  150</span>&#160;            <span class="keyword">virtual</span> <span class="keywordtype">void</span> <a class="code" href="../../d1/d7c/a00003.php#aadcff88a99d15e3420b1a06401879bf7">printInfos</a>(std::ostream&amp; stream)<span class="keyword">const</span>;</div><div class="line"><a name="l00151"></a><span class="lineno">  151</span>&#160;</div><div class="line"><a name="l00156"></a><span class="lineno">  156</span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d1/d7c/a00003.php#aa260b234c8945347a33c1b35649bdf0b">goLeft</a>();</div><div class="line"><a name="l00161"></a><span class="lineno">  161</span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d1/d7c/a00003.php#ac08f32231f137ed194a34b487b2f8db1">goRight</a>();</div><div class="line"><a name="l00166"></a><span class="lineno">  166</span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d1/d7c/a00003.php#af284d102e5bc1de273df697bec76c2e8">goTop</a>();</div><div class="line"><a name="l00171"></a><span class="lineno">  171</span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d1/d7c/a00003.php#acab06880e7336633b3d89bdbfbdbb4c8">goBot</a>();</div><div class="line"><a name="l00172"></a><span class="lineno">  172</span>&#160;</div><div class="line"><a name="l00179"></a><span class="lineno">  179</span>&#160;            <span class="keywordtype">void</span> <a class="code" href="../../d1/d7c/a00003.php#a4547306d9b5d2184500f758cc926f133">turn</a>(<span class="keywordtype">double</span> na);</div><div class="line"><a name="l00180"></a><span class="lineno">  180</span>&#160;</div><div class="line"><a name="l00187"></a><span class="lineno">  187</span>&#160;            <span class="keywordtype">double</span> <a class="code" href="../../d1/d7c/a00003.php#a24b488a8597fd44c0e4654598736bd4a">getRelativeZ</a>(<a class="code" href="../../d7/dd4/a00013.php">Contraption</a>&amp; obj);</div><div class="line"><a name="l00188"></a><span class="lineno">  188</span>&#160;</div><div class="line"><a name="l00193"></a><span class="lineno">  193</span>&#160;            <span class="keyword">virtual</span> <span class="keywordtype">void</span> <a class="code" href="../../d1/d7c/a00003.php#a07c40f873879cc72d0fc94a0831b955a">move</a>();</div><div class="line"><a name="l00200"></a><span class="lineno">  200</span>&#160;            <span class="keyword">virtual</span> <span class="keywordtype">void</span> <a class="code" href="../../d1/d7c/a00003.php#a07c40f873879cc72d0fc94a0831b955a">move</a>(<a class="code" href="../../d4/d31/a00069.php#a224b9163917ac32fc95a60d8c1eec3aa">Direction</a> dir);</div><div class="line"><a name="l00201"></a><span class="lineno">  201</span>&#160;</div><div class="line"><a name="l00208"></a><span class="lineno"><a class="line" href="../../d1/d7c/a00003.php#aea47bc43468e85f59c2a9ff1a3e64887">  208</a></span>&#160;            <span class="keyword">virtual</span> <span class="keywordtype">bool</span> <a class="code" href="../../d1/d7c/a00003.php#aea47bc43468e85f59c2a9ff1a3e64887">attack</a>(<a class="code" href="../../d1/d2b/a00018.php">Entity</a>* <a class="code" href="../../d7/de0/a00022.php#a54cd84496707554686bc5fc43b57a4f8">target</a> = <span class="keyword">nullptr</span>){</div><div class="line"><a name="l00209"></a><span class="lineno">  209</span>&#160;                <span class="keywordflow">if</span>(<a class="code" href="../../d7/de0/a00022.php#a54cd84496707554686bc5fc43b57a4f8">target</a> == <span class="keyword">nullptr</span>){</div><div class="line"><a name="l00210"></a><span class="lineno">  210</span>&#160;                    <a class="code" href="../../d7/de0/a00022.php#a54cd84496707554686bc5fc43b57a4f8">target</a> = <a class="code" href="../../d7/de0/a00022.php#ae9646e71bc0ee3240492aa98060e4942">getTarget</a>();</div><div class="line"><a name="l00211"></a><span class="lineno">  211</span>&#160;                }</div><div class="line"><a name="l00212"></a><span class="lineno">  212</span>&#160;                <span class="keywordflow">if</span>(<a class="code" href="../../d7/de0/a00022.php#a54cd84496707554686bc5fc43b57a4f8">target</a> == <span class="keyword">nullptr</span>){</div><div class="line"><a name="l00213"></a><span class="lineno">  213</span>&#160;                    <span class="keywordflow">return</span> <span class="keyword">false</span>;</div><div class="line"><a name="l00214"></a><span class="lineno">  214</span>&#160;                }</div><div class="line"><a name="l00215"></a><span class="lineno">  215</span>&#160;</div><div class="line"><a name="l00216"></a><span class="lineno">  216</span>&#160;                <span class="keywordflow">return</span> <span class="keyword">true</span>;</div><div class="line"><a name="l00217"></a><span class="lineno">  217</span>&#160;            }</div><div class="line"><a name="l00218"></a><span class="lineno">  218</span>&#160;</div><div class="line"><a name="l00219"></a><span class="lineno">  219</span>&#160;    <span class="keyword">protected</span>:</div><div class="line"><a name="l00220"></a><span class="lineno"><a class="line" href="../../d1/d7c/a00003.php#a3f306d4e967d165b8ef55f6cdf9bde23">  220</a></span>&#160;        <a class="code" href="../../d4/d31/a00069.php#a224b9163917ac32fc95a60d8c1eec3aa">Direction</a> <a class="code" href="../../d1/d7c/a00003.php#a3f306d4e967d165b8ef55f6cdf9bde23">direction</a>;</div><div class="line"><a name="l00221"></a><span class="lineno">  221</span>&#160;</div><div class="line"><a name="l00222"></a><span class="lineno">  222</span>&#160;    <span class="keyword">private</span>:</div><div class="line"><a name="l00223"></a><span class="lineno">  223</span>&#160;        <span class="keywordtype">double</span> speed;</div><div class="line"><a name="l00224"></a><span class="lineno">  224</span>&#160;</div><div class="line"><a name="l00225"></a><span class="lineno">  225</span>&#160;        <a class="code" href="../../d7/dd4/a00013.php">Contraption</a>* obstacle;</div><div class="line"><a name="l00226"></a><span class="lineno">  226</span>&#160;</div><div class="line"><a name="l00227"></a><span class="lineno">  227</span>&#160;        <span class="keywordtype">double</span> food;</div><div class="line"><a name="l00228"></a><span class="lineno">  228</span>&#160;        <span class="keywordtype">double</span> foodMax;</div><div class="line"><a name="l00229"></a><span class="lineno">  229</span>&#160;</div><div class="line"><a name="l00230"></a><span class="lineno">  230</span>&#160;        std::string species;</div><div class="line"><a name="l00231"></a><span class="lineno">  231</span>&#160;        std::string specialAttack;</div><div class="line"><a name="l00232"></a><span class="lineno">  232</span>&#160;};</div><div class="line"><a name="l00233"></a><span class="lineno">  233</span>&#160;</div><div class="line"><a name="l00234"></a><span class="lineno">  234</span>&#160;<span class="preprocessor">#endif //HEADER_ANIMAL</span></div><div class="ttc" id="a00003_php_ac08f32231f137ed194a34b487b2f8db1"><div class="ttname"><a href="../../d1/d7c/a00003.php#ac08f32231f137ed194a34b487b2f8db1">Animal::goRight</a></div><div class="ttdeci">void goRight()</div><div class="ttdoc">Go to the right. </div></div>
<div class="ttc" id="a00003_php_a07c40f873879cc72d0fc94a0831b955a"><div class="ttname"><a href="../../d1/d7c/a00003.php#a07c40f873879cc72d0fc94a0831b955a">Animal::move</a></div><div class="ttdeci">virtual void move()</div><div class="ttdoc">Move to the actual direction. </div></div>
<div class="ttc" id="a00003_php_ade814dc70fcbf6685e6359420e7cf860"><div class="ttname"><a href="../../d1/d7c/a00003.php#ade814dc70fcbf6685e6359420e7cf860">Animal::collides</a></div><div class="ttdeci">bool collides(Contraption *other=nullptr)</div><div class="ttdoc">Verify the collisions between two objects like rectangles. </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d84/a00052_source.php#l00135">Animal.hpp:135</a></div></div>
<div class="ttc" id="a00003_php_ac1860f30915418b618296f857be9151d"><div class="ttname"><a href="../../d1/d7c/a00003.php#ac1860f30915418b618296f857be9151d">Animal::setFood</a></div><div class="ttdeci">void setFood(const double food)</div><div class="ttdoc">Set the food. </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d84/a00052_source.php#l00045">Animal.hpp:45</a></div></div>
<div class="ttc" id="a00034_php"><div class="ttname"><a href="../../db/df3/a00034.php">Map</a></div><div class="ttdoc">A map class to have something common. </div><div class="ttdef"><b>Definition:</b> <a href="../../db/df8/a00076_source.php#l00046">Map.hpp:46</a></div></div>
<div class="ttc" id="a00022_php_ae9646e71bc0ee3240492aa98060e4942"><div class="ttname"><a href="../../d7/de0/a00022.php#ae9646e71bc0ee3240492aa98060e4942">Hostile::getTarget</a></div><div class="ttdeci">Entity * getTarget() const </div><div class="ttdoc">Get the Hotsile&amp;#39;s target. </div><div class="ttdef"><b>Definition:</b> <a href="../../db/db6/a00074_source.php#l00051">Hostile.hpp:51</a></div></div>
<div class="ttc" id="a00003_php_a24b488a8597fd44c0e4654598736bd4a"><div class="ttname"><a href="../../d1/d7c/a00003.php#a24b488a8597fd44c0e4654598736bd4a">Animal::getRelativeZ</a></div><div class="ttdeci">double getRelativeZ(Contraption &amp;obj)</div><div class="ttdoc">Compute the Z. </div></div>
<div class="ttc" id="a00003_php"><div class="ttname"><a href="../../d1/d7c/a00003.php">Animal</a></div><div class="ttdoc">An animal. </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d84/a00052_source.php#l00017">Animal.hpp:17</a></div></div>
<div class="ttc" id="a00003_php_a7d60d308a46df248a62583cb904132da"><div class="ttname"><a href="../../d1/d7c/a00003.php#a7d60d308a46df248a62583cb904132da">Animal::getFoodMax</a></div><div class="ttdeci">double getFoodMax() const </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d84/a00052_source.php#l00077">Animal.hpp:77</a></div></div>
<div class="ttc" id="a00074_php"><div class="ttname"><a href="../../db/db6/a00074.php">Hostile.hpp</a></div></div>
<div class="ttc" id="a00003_php_aa260b234c8945347a33c1b35649bdf0b"><div class="ttname"><a href="../../d1/d7c/a00003.php#aa260b234c8945347a33c1b35649bdf0b">Animal::goLeft</a></div><div class="ttdeci">void goLeft()</div><div class="ttdoc">Go to the left. </div></div>
<div class="ttc" id="a00003_php_aacbfd4edeec5da6823f8f64d615aa23e"><div class="ttname"><a href="../../d1/d7c/a00003.php#aacbfd4edeec5da6823f8f64d615aa23e">Animal::setSpecies</a></div><div class="ttdeci">void setSpecies(const std::string species)</div><div class="ttdoc">Set the species. </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d84/a00052_source.php#l00060">Animal.hpp:60</a></div></div>
<div class="ttc" id="a00003_php_af284d102e5bc1de273df697bec76c2e8"><div class="ttname"><a href="../../d1/d7c/a00003.php#af284d102e5bc1de273df697bec76c2e8">Animal::goTop</a></div><div class="ttdeci">void goTop()</div><div class="ttdoc">Go to the top. </div></div>
<div class="ttc" id="a00040_php"><div class="ttname"><a href="../../db/d3a/a00040.php">Point</a></div><div class="ttdoc">A struct to define a point in space. </div><div class="ttdef"><b>Definition:</b> <a href="../../d4/d31/a00069_source.php#l00065">defines.hpp:65</a></div></div>
<div class="ttc" id="a00003_php_a46fa459910827becd0cc0463f260d4e0"><div class="ttname"><a href="../../d1/d7c/a00003.php#a46fa459910827becd0cc0463f260d4e0">Animal::Animal</a></div><div class="ttdeci">Animal(Map *map=nullptr, Point pt={0, 0, 0}, ContraptionAttr attr={0, 0, 0})</div><div class="ttdoc">Constructor of the class. </div></div>
<div class="ttc" id="a00018_php"><div class="ttname"><a href="../../d1/d2b/a00018.php">Entity</a></div><div class="ttdoc">An entity. </div><div class="ttdef"><b>Definition:</b> <a href="../../d0/d89/a00071_source.php#l00017">Entity.hpp:17</a></div></div>
<div class="ttc" id="a00003_php_aadcff88a99d15e3420b1a06401879bf7"><div class="ttname"><a href="../../d1/d7c/a00003.php#aadcff88a99d15e3420b1a06401879bf7">Animal::printInfos</a></div><div class="ttdeci">virtual void printInfos(std::ostream &amp;stream) const </div><div class="ttdoc">Print the infos in the instance of the class in stream. </div></div>
<div class="ttc" id="a00003_php_a68a645b96b63d106fafc6ef24f472cdc"><div class="ttname"><a href="../../d1/d7c/a00003.php#a68a645b96b63d106fafc6ef24f472cdc">Animal::collidesCircle</a></div><div class="ttdeci">bool collidesCircle(Contraption &amp;other, double radius)</div><div class="ttdoc">Verify the collisions between a circle around this Animal and an other animal. </div></div>
<div class="ttc" id="a00003_php_a49bb6b51a6d4213beaee878ca25075bc"><div class="ttname"><a href="../../d1/d7c/a00003.php#a49bb6b51a6d4213beaee878ca25075bc">Animal::getSpecies</a></div><div class="ttdeci">std::string getSpecies() const </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d84/a00052_source.php#l00080">Animal.hpp:80</a></div></div>
<div class="ttc" id="a00022_php_a54cd84496707554686bc5fc43b57a4f8"><div class="ttname"><a href="../../d7/de0/a00022.php#a54cd84496707554686bc5fc43b57a4f8">Hostile::target</a></div><div class="ttdeci">Entity * target</div><div class="ttdef"><b>Definition:</b> <a href="../../db/db6/a00074_source.php#l00087">Hostile.hpp:87</a></div></div>
<div class="ttc" id="a00003_php_af7d494388300a7c6e47d0f0fb8bf6397"><div class="ttname"><a href="../../d1/d7c/a00003.php#af7d494388300a7c6e47d0f0fb8bf6397">Animal::getSpecialAttack</a></div><div class="ttdeci">std::string getSpecialAttack() const </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d84/a00052_source.php#l00083">Animal.hpp:83</a></div></div>
<div class="ttc" id="a00003_php_aea47bc43468e85f59c2a9ff1a3e64887"><div class="ttname"><a href="../../d1/d7c/a00003.php#aea47bc43468e85f59c2a9ff1a3e64887">Animal::attack</a></div><div class="ttdeci">virtual bool attack(Entity *target=nullptr)</div><div class="ttdoc">Attack the target. </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d84/a00052_source.php#l00208">Animal.hpp:208</a></div></div>
<div class="ttc" id="a00014_php"><div class="ttname"><a href="../../d2/de7/a00014.php">ContraptionAttr</a></div><div class="ttdoc">A struct to define Contraption attributes. </div><div class="ttdef"><b>Definition:</b> <a href="../../d4/d31/a00069_source.php#l00075">defines.hpp:75</a></div></div>
<div class="ttc" id="a00003_php_a85a4f637c29b0ac8b9b30ca6ce759da6"><div class="ttname"><a href="../../d1/d7c/a00003.php#a85a4f637c29b0ac8b9b30ca6ce759da6">Animal::getFood</a></div><div class="ttdeci">double getFood() const </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d84/a00052_source.php#l00075">Animal.hpp:75</a></div></div>
<div class="ttc" id="a00003_php_ae77854b90674fa4d0de31766b04efc36"><div class="ttname"><a href="../../d1/d7c/a00003.php#ae77854b90674fa4d0de31766b04efc36">Animal::setFoodMax</a></div><div class="ttdeci">void setFoodMax(const double foodMax)</div><div class="ttdoc">Set the maximum food. </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d84/a00052_source.php#l00052">Animal.hpp:52</a></div></div>
<div class="ttc" id="a00022_php"><div class="ttname"><a href="../../d7/de0/a00022.php">Hostile</a></div><div class="ttdoc">A class to derivate from when the thing can attack. </div><div class="ttdef"><b>Definition:</b> <a href="../../db/db6/a00074_source.php#l00017">Hostile.hpp:17</a></div></div>
<div class="ttc" id="a00003_php_aab6124c1e2241cf9491eb0dcc9c7d482"><div class="ttname"><a href="../../d1/d7c/a00003.php#aab6124c1e2241cf9491eb0dcc9c7d482">Animal::collidesRect</a></div><div class="ttdeci">bool collidesRect(Contraption &amp;other)</div><div class="ttdoc">Verify the collisions between two objects like rectangles. </div></div>
<div class="ttc" id="a00003_php_acab06880e7336633b3d89bdbfbdbb4c8"><div class="ttname"><a href="../../d1/d7c/a00003.php#acab06880e7336633b3d89bdbfbdbb4c8">Animal::goBot</a></div><div class="ttdeci">void goBot()</div><div class="ttdoc">Go to the bot. </div></div>
<div class="ttc" id="a00069_php_a224b9163917ac32fc95a60d8c1eec3aa"><div class="ttname"><a href="../../d4/d31/a00069.php#a224b9163917ac32fc95a60d8c1eec3aa">Direction</a></div><div class="ttdeci">Direction</div><div class="ttdoc">Directions to move. </div><div class="ttdef"><b>Definition:</b> <a href="../../d4/d31/a00069_source.php#l00085">defines.hpp:85</a></div></div>
<div class="ttc" id="a00003_php_a3f306d4e967d165b8ef55f6cdf9bde23"><div class="ttname"><a href="../../d1/d7c/a00003.php#a3f306d4e967d165b8ef55f6cdf9bde23">Animal::direction</a></div><div class="ttdeci">Direction direction</div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d84/a00052_source.php#l00220">Animal.hpp:220</a></div></div>
<div class="ttc" id="a00003_php_a4547306d9b5d2184500f758cc926f133"><div class="ttname"><a href="../../d1/d7c/a00003.php#a4547306d9b5d2184500f758cc926f133">Animal::turn</a></div><div class="ttdeci">void turn(double na)</div><div class="ttdoc">Turn with a given angle. </div></div>
<div class="ttc" id="a00003_php_aebcd5a392cc2f21a3a84c64bdb6da8d8"><div class="ttname"><a href="../../d1/d7c/a00003.php#aebcd5a392cc2f21a3a84c64bdb6da8d8">Animal::setSpeed</a></div><div class="ttdeci">void setSpeed(double speed)</div><div class="ttdoc">Set the speed. </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d84/a00052_source.php#l00037">Animal.hpp:37</a></div></div>
<div class="ttc" id="a00003_php_acd3a1a440f7f4f0553235f0ed106b7f8"><div class="ttname"><a href="../../d1/d7c/a00003.php#acd3a1a440f7f4f0553235f0ed106b7f8">Animal::setSpecialAttack</a></div><div class="ttdeci">void setSpecialAttack(const std::string specialAttack)</div><div class="ttdoc">Set the special attack. </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d84/a00052_source.php#l00068">Animal.hpp:68</a></div></div>
<div class="ttc" id="a00003_php_a3106b384960dd889ce599eed9d2b61d9"><div class="ttname"><a href="../../d1/d7c/a00003.php#a3106b384960dd889ce599eed9d2b61d9">Animal::anyObstacle</a></div><div class="ttdeci">void anyObstacle()</div><div class="ttdoc">Take of the obstacle. </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d84/a00052_source.php#l00141">Animal.hpp:141</a></div></div>
<div class="ttc" id="a00003_php_ad9fd8916f14ba954f4f98911e34a6d99"><div class="ttname"><a href="../../d1/d7c/a00003.php#ad9fd8916f14ba954f4f98911e34a6d99">Animal::collides</a></div><div class="ttdeci">bool collides(Contraption &amp;other)</div><div class="ttdoc">Verify the collisions between two objects like rectangles. </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d84/a00052_source.php#l00111">Animal.hpp:111</a></div></div>
<div class="ttc" id="a00003_php_a8b3e1d9fdc351f93f8b8ad56b916971b"><div class="ttname"><a href="../../d1/d7c/a00003.php#a8b3e1d9fdc351f93f8b8ad56b916971b">Animal::getSpeed</a></div><div class="ttdeci">double getSpeed() const </div><div class="ttdef"><b>Definition:</b> <a href="../../d1/d84/a00052_source.php#l00072">Animal.hpp:72</a></div></div>
<div class="ttc" id="a00003_php_a16d8b7f94611cc65f5cdb58cc105527b"><div class="ttname"><a href="../../d1/d7c/a00003.php#a16d8b7f94611cc65f5cdb58cc105527b">Animal::~Animal</a></div><div class="ttdeci">virtual ~Animal()</div><div class="ttdoc">Virtual destructor. </div></div>
<div class="ttc" id="a00013_php"><div class="ttname"><a href="../../d7/dd4/a00013.php">Contraption</a></div><div class="ttdoc">A contraption. </div><div class="ttdef"><b>Definition:</b> <a href="../../df/d5f/a00064_source.php#l00020">Contraption.hpp:20</a></div></div>
</div><!-- fragment --></div><!-- contents -->
</div><!-- doc-content -->
<!-- start footer part -->
<div id="nav-path" class="navpath"><!-- id is needed for treeview function! -->
  <ul>
    <li class="navelem"><a class="el" href="../../dir_badfd550b617ce52cc73ed1c8c9513f6.php">Algo</a></li><li class="navelem"><a class="el" href="../../dir_1788504ec76a4dda5464562bc560d0b5.php">C++Tests</a></li><li class="navelem"><a class="el" href="../../dir_2e741febc7df97747a68d36c1b3be5f0.php">C++</a></li><li class="navelem"><a class="el" href="../../dir_220287e732b97f08f66e5f221c69df74.php">inc</a></li><li class="navelem"><a class="el" href="../../dir_75b0389167f46f79a101ef8c4434cec4.php">C++</a></li><li class="navelem"><a class="el" href="../../d1/d84/a00052.php">Animal.hpp</a></li>
    <li class="footer">Generated by
    <a href="http://www.doxygen.org/index.html">
    <img class="footer" src="../../doxygen.png" alt="doxygen"/></a> 1.8.11 </li>
  </ul>
</div>
</body>
</html>
