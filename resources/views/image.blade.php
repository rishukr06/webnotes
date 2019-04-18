<!DOCTYPE html>
<html>
<head>
	<title>webnotes</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style type="text/css">
      html body
{
  margin:0;
  padding: 0;
  font-size: 16px;
  font-family: sans-serif;

}
/* width */
::-webkit-scrollbar {
  width: 8px;
}

/* Track */
::-webkit-scrollbar-track {
  //box-shadow: inset 0 0 5px #fff;
  background-color: #ccc; 
  border-radius: 0px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background:black; 
  border-radius: 0px;

}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background:grey; 
  cursor:pointer;
} 

.main-container
{
  position: absolute;
  top:0;
  left:0;
  right: 0;
  bottom: 0;
  height: 100%;
  width: 100%;
  display: flex;

}
.text-editor
{ 
  position: absolute;
  left:0;
  height: 100vh;
  padding-top: 54px;
  width: 50%;
  overflow-y: scroll;
  overflow-x: hidden;
  background-color: #333;
  color:#fff !important;
  z-index: 1;
  word-wrap: break-word;
}
.browser
{
  position: absolute;
  right: 0;
  padding-top: 54px;
  height: 100vh;
  width: 50%;
  overflow:scroll;
  background-color:#fff;
}

p{
  font-size: 14px!important;
}
.container1
{
  background-color: #fff;
  padding-top: 100px;
}
pre
{ 
  padding: 5px;
  font-size: 15px;
  word-wrap: all;
  color:#fff !important;
}
select
{
  background: #292929;
  border-radius: 2px;
  border:none;
  color: #fff;
  cursor: pointer;
  outline: none;
  outline-style: none;
  border-bottom: 1px solid #000;
}
input[type="color"]:hover{cursor: pointer;}
input[type="range"]:hover{cursor: pointer;}
input[type="color"] {
  -webkit-appearance: none;
  border: none;
  width: 25px;
  height: 25px;
  border-radius: 5px;
  outline: none;
}
input[type="color"]::-webkit-color-swatch-wrapper {
  padding: 0;
  border: none;
  border-radius: 5px;
}
input[type="color"]::-webkit-color-swatch {
  border: none;
  border-radius: 5px;
}
b{
  text-transform: uppercase;
  font-size: 14px;
  color:yellow;
  font-weight: 450;
  letter-spacing: 1px;
  font-family: sans-serif;
}
.text-editor .reset
{
  position:fixed;
  padding: 20px 25px;
  background: #38c398;
  color: #fff;
  border-radius: 5px;
  cursor: pointer;
  left:50%;
  transform: translateX(-120%);
  z-index: 1    ;
}
.reset:hover
{
  background: #2a9272;
}
.tags
{
  color: violet;
}
.attributes
{
  color: #a7e80d;
}
.css
{
  color:#08b1e8;
  margin-bottom: 5px;
}
.info
{
  color: green;
}
img
{
  transition: 0.5s;
  
}
img:hover{transform:none!important;}

.nav-tabs .nav-link.active 
{
  background-color: #333!important;
  border-color: #333!important;
}
.nav-link
{
  cursor: pointer!important;
  border-radius: 0px!important;
}
.nav-link:hover
{
  border-color: #333!important;
}
.nav
{
  border-color: #333!important;
  overflow: hidden!important;
}
.right
{
  right:0;
  position: absolute;
  letter-spacing: 1px;
}
.right:hover
{ 
  background:#dc3545 !important;
}
.subject {display:none}

.sub-topics{display: inline-block;}

.underline:hover
{
  text-decoration: underline!important;
  border:none!important;
}
::-webkit-slider-thumb
{
  -webkit-appearance:none!important;
  -moz-appearance:none!important;
  width: 15px!important;
  height: 15px!important;
  border-radius: 50%!important;
  background: #2196F3!important;
  transition: 0.3s;
}
::-webkit-slider-thumb:hover
{
  box-shadow: 0px 0px 10px 5px #000;
}

input[type="range"]
{
  position: relative;
  -webkit-appearance:none;
  top: -2.2px!important;
  width: 150px;
  height: 3px;
  outline: none;
  background: #000;
  border-radius: 2px;

}
.rangeval
{
  position: relative;
  padding: 4px;
  padding-left: 6px;
  height:auto;
  margin-left: 10px;
  width: auto;
  border-radius: 5%;
  background: #fff;
  color: #000!important;
}
.rangeval:before
{
  content: '';
  position: absolute;
  top:50%;
  left: -5px;
  transform: translateY(-50%) rotate(45deg);
  width: 10px;
  height: 10px;
  background: #fff;
}
@media screen and (max-width: 767px) {
  .main-container {
    display: block;
  } 
  .text-editor
  {
    width: 100%;
    max-height:500px!important;
  }
  .browser
  {
    position: absolute;
    top:450px!important;
    left: 0;
    width: 100%;
    height: auto;
    overflow-x: scroll;
    overflow-y: scroll;
  }
  .text-editor pre
  {
    padding-top: 40px;
  }
  .container1
  {
    padding-top: 10px;
  }
  .text-editor .nav
  {
    position: fixed;
    width: 100%;
  z-index: 999!important;
  }
}
    </style>
</head>
<body>
<!--main navbar-->
<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top" style="z-index: 3;">
  <a class="navbar-brand" href="/welcome">Web Notes</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="Navbar">
    <ul class="navbar-nav ">
      <li class="nav-item">
        <a class="nav-link" href="/welcome">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" onclick="document.getElementById('id01').style.display='block'">Topics</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about">About</a>
      </li>    
    </ul>
  </div>  
</nav>


<!--endNavBar-->
<div class="main-container">
	<!--modal-box-->
	<div id="id01" class="w3-modal">
 <div class="w3-modal-content w3-card-4 w3-animate-zoom">
  <header class="w3-container w3-blue"> 
   <span onclick="document.getElementById('id01').style.display='none'" 
   class="w3-button bg-danger w3-large w3-display-topright">&times;</span>
   <h2>Fields</h2>
  </header>

  <div class="w3-bar w3-border-bottom">
   <button class="tablink w3-bar-item w3-button" onclick="openSubject(event, 'HTML+CSS')">HTML+CSS</button>
   <button class="tablink w3-bar-item w3-button" onclick="openSubject(event, 'jQuery')">jQuery</button>
   <button class="tablink w3-bar-item w3-button" onclick="openSubject(event, 'Angularjs')">Angular Js</button>
  </div>

  <div id="HTML+CSS" class="w3-container subject">
    <div class="sub-topics">
     <ul>
        <li><a href="/a">&lt;a&gt;</a></li>
        <li><a href="/button">&lt;button&gt;</a></li>
        <li><a href="/datalist">&lt;datalist&gt;</a></li>
         <li><a href="/div">&lt;div&gt;</a></li>
     </ul>
    </div>
    <div class="sub-topics">
     <ul>
        <li><a href="/form">&lt;form&gt;</a></li>
          <li><a href="/image">&lt;img&gt;</a></li>
          <li><a href="/list">list</a></li>
           <li><a href="/table">&lt;table&gt;</a></li>
     </ul>
    </div>
  </div>

  <div id="jQuery" class="w3-container subject">
  <h2><br>Comming Soon...<br></h2>
  </div>

  <div id="Angularjs" class="w3-container subject">
   <h2><br>Comming Soon...<br></h2>
  </div>

  <div class="w3-container w3-light-grey w3-padding">
   <button class="w3-button w3-right w3-white w3-border" 
   onclick="document.getElementById('id01').style.display='none'">Close</button>
  </div>
 </div>
</div>

</div>

<script>
document.getElementsByClassName("tablink")[0].click();

function openSubject(evt, subjectName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("subject");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].classList.remove("w3-light-grey");
  }
  document.getElementById(subjectName).style.display = "block";
  evt.currentTarget.classList.add("w3-light-grey");
}
</script>
 

	<!--modal-box-ends-->
	<!--txt-editor-->
  <div class="holder">
	  <div class="text-editor">
    <!--NavBar-->
     <div class="container-fluid"  style="margin: 0;padding: 0;">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs " style="background-color: #2196F3;" role="tablist">
    <li class="nav-item">
      <a class="nav-link active text-white" data-toggle="tab" href="#html">HTML</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" data-toggle="tab" href="#css">CSS</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white underline"   data-toggle="modal" data-target="#myModal">Get this</a>
    </li>
    <li class="nav-item">
      <a  style=" background:#b12b38;padding:7px;" class="nav-link right" onclick="defaultfun()">RESET</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <!---->
  <div class="tab-content">
    <div id="html" class="container-fluid tab-pane active">
      <pre>
<span class="tags">&lt;html&gt;
&lt;head&gt;
&lt;style</span> <span class="attributes">type</span>="text/css"&gt;

&lt;<span class="tags">/style&gt;
&lt;/head&gt;
&lt;body&gt;

<span class="tags">&lt;img</span>

<b>src</b>="<select id="src" onchange="srcfun()">
<option value="https://images.pexels.com/photos/414612/pexels-photo-414612.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500">../img/bg.jpg</option>
<option title="give online URL">custom</option>
</select>"&gt;

<b>align</b>="<select id="align" name="align" onchange="alignfun()">
  <option>left</option>
  <option>right</option>
  </select>"

<b>vspace</b>="<select id="vspace"  onchange="vspacefun()">
   <option>0</option>
  <option>20</option>
  <option>40</option>
  <option>60</option>
  <option>80</option>
  <option>custom</option>
  </select>"

<b>hspace</b>="<select id="hspace"  onchange="hspacefun()">
  <option>0</option>
  <option>20</option>
  <option>40</option>
  <option>60</option>
  <option>80</option>
  <option>custom</option>
  </select>"

<b>title</b>="<select id="title"  onchange="titlefun()">
  <option>this is a image</option>
  <option>custom</option>
  </select>"
  
<b>alt</b>="<span style="color: #fff">image not found</span>"&gt;

&lt;/body&gt;
&lt;/html&gt;</span>
</pre>
    </div>
    <div id="css" class="container-fluid tab-pane fade">
<pre>
<span class="tags">body</span>
{
  <span class="css">margin: 0;
  padding: 0;
  </span>
}

<span class="tags">img</span>
{

  <span class="css">display:</span><select onchange="displayfun()" id="display">
    <option>block</option>
    <option>none</option>
  </select>;
  <span class="css">border:</span><input id="border" type="range" min="0" max="100" value="0" class="range" onchange="borderfun()"><span class="rangeval" id="border-value">0px</span>
  <span class="css">border-style:</span><select onchange="borderstylefun()" id="borderstyle">
    <option>Solid</option>
    <option>Dashed</option>
     <option>dotted</option>
      <option>double</option>
       <option>groove</option>
        <option>ridge</option>
         <option>inset</option>
          <option>outset</option>
           <option>hidden</option>
    <option value="">none</option>
  </select>;
  <span class="css">border-color:</span><input style="position: relative;top:8px;" type="color" id="cssbordercolor" onchange="cssbordercolorfun()" value="#cccccc">
  
  <span class="css">border-radius:</span><input class="range" id="radius" type="range" min="1" max="100" value="1" onchange="radiusfun()"><span class="rangeval" id="radius-value">0px</span>

   <span class="css">box-shadow:</span>h-offset <input onchange="filterfun()" id="hoffset" class="range" type="range" min="-150" max="150" value="0"><span id="hoffset-value" class="rangeval">0px</span>

              v-offset <input id="voffset" onchange="filterfun()" class="range" type="range" value="0" min="-150"  max="150"><span id="voffset-value" class="rangeval">0px</span>

                  blur<input id="sblur" onchange="filterfun()" class="range" type="range" value="0" min="0"  max="100"><span id="sblur-value" class="rangeval">0px</span>
              color <input style="position: relative;top:8px;" type="color" id="scolor" onchange="filterfun()" value="#000000">
  
 
  <span class="css">height:</span><select name="height" onchange="heightfun()" id="height">
    <option>auto</option>
    <option>200px</option>
    <option>250px</option>
    <option>50%</option>
    <option>custom</option>
  </select>;
  <span class="css">width:</span><select name="width" onchange="widthfun()" id="width">
    <option>auto</option>
    <option>300px</option>
    <option>350px</option>
    <option>50%</option>
    <option>custom</option>
  </select>;

   <span class="css">padding:</span><input class="range" id="padding" type="range" min="0" max="100" value="0" step='1' onchange="paddingfun()"><span id="padding-value" class="rangeval">0px</span>

  <span class="css">opacity:</span><input class="range" id="opacity" type="range" min="0.0" max="1.0" value="1.0" step='.1' onchange="opacityfun()"><span id="opacity-value" class="rangeval">1.0</span>

  <span class="css">transform:</span><select onchange="transform()" id="transform">
    <option>none</option>
    <option>translate(-30px)</option>
    <option>translateX(30px)</option>
    <option>translateX(-30px)</option>
    <option>translateY(30px)</option>
    <option>translateY(-30px)</option>
    <option>rotate(180deg)</option>
    <option>rotateX(180deg)</option>
    <option>rotateX(-180deg)</option>
   <option>rotateY(180deg)</option>
   <option>rotateY(-180deg)</option>
    <option>skewX(30deg)</option>
    <option>skewX(-30deg)</option>
    <option>skewY(30deg)</option>
    <option>skewY(-30deg)</option>
    <option>custom</option>
</select>;<span class="info"> /* used for animations */</span>
  <span class="css">-webkit-filter:</span>
  blur<input onchange="filterfun()" id="blur" class="range" type="range" min="0" max="100" value="0"><span id="blur-value" ></span>
  brightness<input id="brightness" onchange="filterfun()" class="range" type="range" value="100" min="0"  max="100"><span id="brightness-value"></span>
  contrast<input id="contrast" onchange="filterfun()" class="range" type="range" value="100" min="0"  max="100"><span id="contrast-value"></span>
  grayscale<input id="grayscale" onchange="filterfun()" class="range" type="range" value="0" min="0"  max="100"><span id="grayscale-value"></span>
  hue-rotate<input id="huerotate" onchange="filterfun()" class="range" type="range" value="0" min="0"  max="360"><span id="huerotate-value"></span>
  invert<input id="invert" onchange="filterfun()" class="range" type="range" value="0" min="0"  max="100"><span id="invert-value"></span>
  saturate<input id="saturate" onchange="filterfun()" class="range" type="range" value="1" min="0"  max="100"><span id="saturate-value"></span>
  sepia<input id="sepia" onchange="filterfun()" class="range" type="range" value="0" min="0"  max="100"><span id="sepia-value"></span>
  <span class="css">transition:</span><select onchange="transition()" id="transition">
    <option>0.5s</option>
    <option>1s</option>
    <option>5s</option>
    <option>custom</option>
</select>;<span class="info"> /* control speed of transformations */</span>
}
<span class="tags">img:<span style="color: #fff">hover</span></span><span class="info"> /* on-mouse-over */</span>
{
  <span class="css">transform:none;</span><span class="info"> /*reset transform property */</span>
}
<span class="info">/* <b>NOTE:</b> These are some frequently used css with the above tag */</span>
</pre>

</div>
</div>
</div>
</div>

 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
           <h5 class="modal-title text text-info" style="left:0!important;">SOURCE CODE</h5>
          <button type="button" class="close btn btn-danger" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <!--code-->
           <pre style="color: black!important;font-weight: 450!important;font-size: 16px;">
&lt;html&gt;
&lt;head&gt;
&lt;style type="text/css"&gt;
body
{
  margin: 0;
  padding: 0;
}

img
{
  display:<span id="display_value">block</span>;
  border:<span id="border_value">0</span>;
  opacity:<span id="opacity_value">1</span>;
  <span id="display_border_value">border-style:<span id="border_style_value">solid</span>;</span>
  <span id ="display_color_value">border-color:<span id="css_border_color_value">#cccccc</span>;</span>
  <span id ="display_ravius_value">border-radius:<span id="radius_value">0px</span>;</span>
  <span id ="display_height_value">height:<span id="height_value">auto</span>;</span>
  <span id ="display_width_value">width:<span id="width_value">auto</span>;</span>
  <span id ="display_transform_value">transform:<span id="transform_value">none</span>;</span>
  -webkit-filter:blur(<span id="blur_value"></span>) brightness(<span id="brightness_value"></span>) contrast(<span id="contrast_value"></span>) grayscale(<span id="grayscale_value"></span>) hue-rotate(<span id="huerotate_value"></span>) invert(<span id="invert_value"></span>) saturate(<span id="saturate_value"></span>) sepia(<span id="sepia_value"></span>);
  <span id ="display_transition_value">transition:<span id="transition_value">0.5s</span>;</span>
  box-shadow:<span id="hoffset_value">0px</span> <span id="voffset_value">0px</span> <span id="sblur_value">0px</span> <span id="scolor_value">#000000</span>;
  padding:<span id="padding_value">0</span>;
}
 
img:hover
{
  transform:none;
}
&lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;

&lt;img src="<span id="src_value"></span>" align="<span id="align_value">left</span>" alt="image not found" vspace="<span id="vspace_value"></span>" hspace="<span id="hspace_value"></span>" title="<span id="title_value">this is a image</span>"&gt;
&lt;/body&gt;
&lt;/html&gt;</span>
</pre>
         
        </div>
        <div class="modal-footer">
          <button type="button" style="border:1px Solid #333!important;" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      </div>
    </div>
  
  </div>


	<!--txt-editor-end-->

	<!--brower-->
	<div class="browser">
  <!--NavBar-->
     <div class="container-fluid"  style="margin: 0;padding: 0;">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" style="background: #2196F3;" role="tablist">
    <li class="nav-item">
      <a class="nav-link active text-white" data-toggle="tab" href="#output">Output</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" data-toggle="tab" href="#Logs">Logs</a>
    </li>
  </ul>

  <!-- Tab panes -->
<div class="tab-content">
    <div id="output" class="container-fluid tab-pane active">
    <div class="container1">
      <img id="img" src="https://images.pexels.com/photos/414612/pexels-photo-414612.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="image" alt="image not not found" title="this is a image">
    </div>
  </div>
   <div id="Logs" class="container-fluid tab-pane fade">
  
   </div>
</div>
</div>
</div>

	<!--brower-ends-->
</div>
<!--javAScript function-->
<script type="text/javascript">
  /*
||===========================||
|| written by: Rishu kumar   ||
||===========================||
*/
  var i=0;
  function defaultfun(){
//================================reset text-editor===============================================
    $(document).ready(function(){$(".holder").load("txteditor.php");});
//=================================reset-browser======================================= 

    document.getElementById('img').style.display="block";//reset display
    document.getElementById('img').style.opacity=1;//reset image opacity
    document.getElementById('img').border="0px";//reset image border
    document.getElementById('img').style.borderColor='';//reset image border-color
    document.getElementById('img').style.borderRadius='0px';//reset radius of image
    document.getElementById('img').style.borderStyle='';//reset border style
    document.getElementById('img').style.width='auto';//reset width 
    document.getElementById('img').style.height='auto';//reset height
    document.getElementById('img').align='left';//reset alignment
    document.getElementById('img').style.transform='none';//reset image transformation
    document.getElementById('img').style.transition="0.5s"//reset speed
    document.getElementById('img').style.filter="none";//reset filter
    document.getElementById('img').vspace="0";//reset vspace
    document.getElementById('img').hspace="0";//reset hspace
    document.getElementById('img').src="https://images.pexels.com/photos/414612/pexels-photo-414612.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500";//reset img url
    document.getElementById('img').title="this is a image";//reset title
    document.getElementById('img').style.padding=0;//reset padding
    document.getElementById('Logs').innerHTML +="<p>"+ ++i +" >>"+"You have reset the code"+"</p>"+"\n";

//===============================Reset values in source code==========================================================//
    
    document.getElementById("display_value").innerHTML="block";
    document.getElementById("opacity_value").innerHTML="1";
    document.getElementById("border_value").innerHTML=0;
    document.getElementById("border_style_value").innerHTML="";
    document.getElementById("css_border_color_value").innerHTML="";
    document.getElementById("radius_value").innerHTML="0px";
    document.getElementById("height_value").innerHTML="auto";
    document.getElementById("width_value").innerHTML="auto";
    document.getElementById("align_value").innerHTML="left";
    document.getElementById("transform_value").innerHTML="none";
    document.getElementById("transition_value").innerHTML="0.5s";
    document.getElementById("blur_value").innerHTML="";
    document.getElementById("brightness_value").innerHTML="";
    document.getElementById("contrast_value").innerHTML="";
    document.getElementById("grayscale_value").innerHTML="";
    document.getElementById("huerotate_value").innerHTML="";
    document.getElementById("invert_value").innerHTML="";
    document.getElementById("saturate_value").innerHTML="";
    document.getElementById("sepia_value").innerHTML="";
    document.getElementById("vspace_value").innerHTML="";
    document.getElementById("hspace_value").innerHTML="";
    document.getElementById("src_value").innerHTML="";
    document.getElementById("sblur_value").innerHTML="0px";
    document.getElementById("hoffset_value").innerHTML="0px";
    document.getElementById("voffset_value").innerHTML="0px";
    document.getElementById("scolor_value").innerHTML="#000000";
    document.getElementById("padding_value").innerHTML="0px";
    document.getElementById("title_value").innerHTML="this is a image";

//==================================display required css only=======================================================//
        /* will add this function later*/
  }
  function borderfun(){
    var value = document.getElementById('border').value;
    var type_value = document.getElementById('borderstyle').value;
    var color_value = document.getElementById('cssbordercolor').value;
    var logs="you have changed the value of border to";

      document.getElementById('img').style.border=value+'px';
      document.getElementById('img').style.borderStyle=type_value;
      document.getElementById('img').style.borderColor=color_value;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+value+"px"+"</p>"+"\n";
      document.getElementById("border_value").innerHTML=value+'px';
      document.getElementById("border-value").innerHTML=value+'px';
  }
  function alignfun(){
    var value = document.getElementById('align').value;
    document.getElementById('img').align=value;
    document.getElementById("align_value").innerHTML=value;
    document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+"You have aligned img to"+" "+value+"</p>"+"\n";
  }
  
  function radiusfun(){
    var value = document.getElementById('radius').value;
    
      document.getElementById('img').style.borderRadius=value+'px';
      document.getElementById("radius_value").innerHTML=value+'px';
      document.getElementById("radius-value").innerHTML=' '+value+'px';
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+"You have changed border radius property to"+" "+value+"px"+"</p>"+"\n";
  }
  
  function borderstylefun(){
    var value = document.getElementById('borderstyle').value;
    document.getElementById('img').style.borderStyle=value;
    document.getElementById("border_style_value").innerHTML=value;
    document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+"You have set border style of img as"+" "+value+"</p>"+"\n";
  }
  function cssbordercolorfun(){
    var logs="you have changed the value of bordercolor as";
    var value = document.getElementById('cssbordercolor').value;
      document.getElementById('img').style.borderColor=value;
      document.getElementById("css_border_color_value").innerHTML=value;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+value+"</p>"+"\n";
  }
  function heightfun(){
    var logs="you have changed the value of img height to";
    var value = document.getElementById('height').value;
    if(value!='custom')
    {
      document.getElementById('img').style.height=value;
      document.getElementById("height_value").innerHTML=value;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+value+"</p>"+"\n";
    }
    else
    {
      var custom = prompt("Enter value in px (or) %");
      document.getElementById('img').style.height=custom;
      document.getElementById("height_value").innerHTML=custom;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+custom+"</p>"+"\n";
    }
  }
  function widthfun(){
    var logs="you have changed the value of img width to";
    var value = document.getElementById('width').value;
    if(value!='custom')
    {
      document.getElementById('img').style.width=value;
      document.getElementById("width_value").innerHTML=value;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+value+"</p>"+"\n";
    }
    else
    {
      var custom = prompt("Enter value in px (or) %");
      document.getElementById('img').style.width=custom;
      document.getElementById("width_value").innerHTML=custom;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+custom+"</p>"+"\n";
    }
  }
  
  function transform(){
    var logs="you have set transform property :";
    var value = document.getElementById('transform').value;
    if(value!='custom')
    {
      document.getElementById('img').style.transform=value;
      document.getElementById("transform_value").innerHTML=value;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+value+"</p>"+"\n";
    }
    else
    {
      var custom = prompt("Enter value");
      document.getElementById('img').style.transform=custom;
      document.getElementById("transform_value").innerHTML=custom;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+custom+"</p>"+"\n";
    }
  }
  function transition(){
    var logs="you have set transition property(speed) :";
    var value = document.getElementById('transition').value;
    if(value!='custom')
    {
      document.getElementById('img').style.transition=value;
      document.getElementById("transition_value").innerHTML=value;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+value+"</p>"+"\n";
    }
    else
    {
      var custom = prompt("Enter time in seconds");
      document.getElementById('img').style.transition=custom;
      document.getElementById("transition_value").innerHTML=custom;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+custom+"</p>"+"\n";
    }
  }
  function opacityfun(){
    var value = document.getElementById('opacity').value;
    var logs="you have changed the opacity of image to";

      document.getElementById('img').style.opacity=value;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+value+"</p>"+"\n";
      document.getElementById("opacity_value").innerHTML=value;
      document.getElementById("opacity-value").innerHTML=' '+value;
  }
  function displayfun(){
    var value = document.getElementById('display').value;
    var logs="you have set display property of image as";

      document.getElementById('img').style.display=value;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+value+"</p>"+"\n";
      document.getElementById("display_value").innerHTML=value;
  }
  function srcfun(){
    var value = document.getElementById('src').value;
    var logs="you have changed source of image:";
      if(value!='custom'){
      document.getElementById('img').src=value;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+value+"</p>"+"\n";
    }
    else
    {
      var custom = prompt("Enter url");
      document.getElementById('img').src=custom;
      document.getElementById("src_value").innerHTML=custom;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+custom+"</p>"+"\n";
    }
  }
  function vspacefun(){
    var value = document.getElementById('vspace').value;
    var logs="you have set vspace value of image to:";
      if(value!='custom'){
      document.getElementById('img').vspace=value;
      document.getElementById("vspace_value").innerHTML=value;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+value+"</p>"+"\n";
    }
    else
    {
      var custom = prompt("Enter value");
      if(custom>=0 && custom<=9999999999999){
      document.getElementById('img').vspace=custom;
      document.getElementById("vspace_value").innerHTML=custom;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+custom+"</p>"+"\n";
      }
      else{
        alert('Invalid value');
      }
    }
  }
  function hspacefun(){
    var value = document.getElementById('hspace').value;
    var logs="you have set hspace value of image to:";
      if(value!='custom'){
      document.getElementById('img').hspace=value;
      document.getElementById("hspace_value").innerHTML=value;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+value+"</p>"+"\n";
    }
    else
    {
      var custom = prompt("Enter value");
      if(custom>=0 && custom<=9999999999999){
      document.getElementById('img').hspace=custom;
      document.getElementById("vspace_value").innerHTML=custom;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+custom+"</p>"+"\n";
      }
      else{
        alert("Invalid value");
      }
    }
  }
  function titlefun(){
    var value = document.getElementById('title').value;
    var logs="you have changed the title of image:";
      if(value!='custom'){
      document.getElementById('img').title=value;
      document.getElementById("title_value").innerHTML=value;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+value+"</p>"+"\n";
    }
    else
    {
      var custom = prompt("Enter image title");
      document.getElementById('img').title=custom;
      document.getElementById("title_value").innerHTML=custom;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+custom+"</p>"+"\n";
    }
  }
  function paddingfun(){
    var value = document.getElementById('padding').value+'px';
    var logs="you have changed padding property of image:";

      document.getElementById('img').style.padding=value;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+value+"</p>"+"\n";
      document.getElementById("padding_value").innerHTML=value;
      document.getElementById("padding-value").innerHTML=value;
  }
  function filterfun(){
    var value = document.getElementById('blur').value;
    var brightness_value = document.getElementById('brightness').value;
    var contrast = document.getElementById('contrast').value;
    var grayscale =document.getElementById('grayscale').value;
    var huerotate = document.getElementById('huerotate').value;
    var invert = document.getElementById('invert').value;
    var saturate = document.getElementById('saturate').value;
    var sepia = document.getElementById('sepia').value;
    //====shadowfunction=======//
    var hoffset = document.getElementById('hoffset').value+'px';
    var voffset = document.getElementById('voffset').value+'px';
    var sblur = document.getElementById('sblur').value+'px';
    var scolor =document.getElementById('scolor').value;
    //===logs===//
    var logs="you have changed filter values";
      //document.getElementById('img').setAttribute("style","-webkit-filter:blur(" + value + "px) brightness(" + brightness_value + "%) grayscale(" + grayscale + "%) contrast(" + contrast + "%) hue-rotate(" + huerotate + "deg) invert(" + invert + "%) saturate(" + saturate + ") sepia(" + sepia + "%)");
      
      document.getElementById('img').style.filter="blur("+value+"px) brightness("+brightness_value+"%) grayscale(" +grayscale+"%) contrast(" + contrast + "%) hue-rotate(" + huerotate + "deg) invert(" + invert + "%) saturate(" + saturate + ") sepia(" + sepia + "%) drop-shadow("+hoffset+" "+voffset+" "+sblur+" "+scolor+")";

      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+"</p>"+"\n";
      
      document.getElementById("blur-value").innerHTML=' '+value+'px';
      document.getElementById("brightness-value").innerHTML=' '+brightness_value+'%';
      document.getElementById("contrast-value").innerHTML=' '+contrast+'%';
      document.getElementById("grayscale-value").innerHTML=' '+grayscale+'%';
      document.getElementById("huerotate-value").innerHTML=' '+huerotate+'deg';
      document.getElementById("invert-value").innerHTML=' '+invert+'%';
      document.getElementById("saturate-value").innerHTML=' '+saturate+'';
      document.getElementById("sepia-value").innerHTML=' '+sepia+'%';

      document.getElementById("blur_value").innerHTML=value+'px';
      document.getElementById("brightness_value").innerHTML=brightness_value+'%';
      document.getElementById("contrast_value").innerHTML=contrast+'%';
      document.getElementById("grayscale_value").innerHTML=grayscale+'%';
      document.getElementById("huerotate_value").innerHTML=huerotate+'deg';
      document.getElementById("invert_value").innerHTML=invert+'%';
      document.getElementById("saturate_value").innerHTML=saturate+'';
      document.getElementById("sepia_value").innerHTML=sepia+'%';

      document.getElementById("sblur-value").innerHTML=' '+sblur+'';
      document.getElementById("hoffset-value").innerHTML=' '+hoffset+'';
      document.getElementById("voffset-value").innerHTML=' '+voffset+'';

      document.getElementById("sblur_value").innerHTML=sblur;
      document.getElementById("hoffset_value").innerHTML=hoffset;
      document.getElementById("voffset_value").innerHTML=voffset;
      document.getElementById("scolor_value").innerHTML=scolor;
  }
  

</script>
<!--js-ends-->
</div>
</body>
</html>