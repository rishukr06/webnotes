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
.arttval
{
  color: #FFFcc0;
}
.text-editor
{ 
  position: absolute;
  left:0;
  height: 100vh;
  padding-top: 54px;
  width: 50%;
  overflow-y: scroll!important;
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
.heading:hover{transform:none!important;}
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
input[type="radio"]
{
  position: relative;
  top:3px;"
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
&lt;title</span>&gt;myPage &lt;<span class="tags">/title&gt;<span class="info"> /*Title of the webpage */</span>
&lt;/head&gt;
&lt;body&gt;
&lt;form <span class="attributes">action</span><span style="color: #fff">="/action_page.php"</span> <span class="attributes">method</span>="<select onchange="methodfun()" id="method"><option>GET</option><option>POST</option></select>"
 <span class="attributes">accept-charset</span>="<select onchange="acceptfun()" id="accept"><option>ISO-8859-1</option><option>UTF-8</option></select>"
 <span class="attributes">autocomplete</span>="<select onchange="autofun()" id="auto"><option>off</option><option>on</option></select>" <span class="attributes">name</span><span style="color: #fff">="myForm"</span>
 <span class="attributes">target</span>="<select onchange="targetfun()" id="target"><option>_blank</option>
                <option>_self</option>
                <option>_top</option>
                <option>_parent</option>
              </select>"&gt;

  <span style="color: #fff;">First name:</span>&lt;input <span class="attributes">type</span><span style="color: #fff;">="text"</span> <span class="attributes">name</span><span style="color: #fff;">="firstname"</span>  <span class="attributes">value</span><span style="color: #fff;">="</span><select onchange="fnfun()" id="fn"><option>Rishu</option><option>custom</option></select>"&gt;
  <span style="color: #fff;">Last name:</span>&lt;input <span class="attributes">type</span><span style="color: #fff;">="text"</span> <span class="attributes">name</span><span style="color: #fff;">="lastname"</span> <span class="attributes">value</span><span style="color: #fff;">="</span><select onchange="lnfun()" id="ln"><option>Kumar</option><option>custom</option></select>"&gt;

&lt;/form&gt;
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
  font-family:sans-serif;
  </span>
}

<span class="tags">form</span>
{
  <span class="css">position:</span><select onchange="positionfun()" id="position">
    <option>relative</option>
    <option>absolute</option>
    <option>fixed</option>
    <option>unset</option>
  </select>
  <span class="css">display:</span><select onchange="displayfun()" id="display">
    <option>block</option>
    <option>none</option>
  </select>;
  <span class="css">border:</span><input style="position: relative;top:8px;z-index: 2;" id="border" type="range" min="0" max="100" value="0" onchange="borderfun()"><span id="border-value" class="rangeval">unset</span>
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

  <span class="css">color:</span><input style="position: relative;top:8px;" type="color" id="color" onchange="colorfun()" value="#000000">

  <span class="css">background-color:</span><input style="position: relative;top:8px;" type="color" id="bgcolor" onchange="bgcolorfun()" value="#ffffff">

  <span class="css">font-size:</span><input style="position: relative;top:8px;" id="size" type="range" min="0" max="100" value="0" onchange="sizefun()"><span id="size-value" class="rangeval">unset</span>
  
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

  <span class="css">border-radius:</span><input style="position: relative;top:8px;" id="radius" type="range" min="1" max="100" value="1" onchange="radiusfun()"><span id="radius-value" class="rangeval">unset</span>

   <span class="css">box-shadow:</span>h-offset <input onchange="filterfun()" id="hoffset" style="position: relative;top:8px;" type="range" min="-150" max="150" value="0"><span id="hoffset-value" class="rangeval">unset</span>

              v-offset <input id="voffset" onchange="filterfun()" style="position: relative;top:8px;" type="range" value="0" min="-150"  max="150"><span id="voffset-value" class="rangeval">unset</span>

              blur <input id="sblur" onchange="filterfun()" style="position: relative;top:8px;" type="range" value="0" min="0"  max="100"><span id="sblur-value" class="rangeval">unset</span>
              color <input style="position: relative;top:8px;" type="color" id="scolor" onchange="filterfun()" value="#000000">
   
  <span class="css">text-decoration:</span><select onchange="decorationfun()" id="decoration">
    <option>none</option>
    <option>overline</option>
    <option>line-through</option>
    <option>underline</option>
  </select>;

  <span class="css">cursor:</span><select onchange="cursorfun()" id="cursor">
    <option>pointer</option>
    <option>alias</option>
    <option>all-scroll</option>
    <option>auto</option>
    <option>cell</option>
    <option>copy</option>
    <option>crosshair</option>
    <option>default</option>
    <option>grab</option>
    <option>grabing</option>
    <option>help</option>
    <option>progress</option>
    <option>no-drop</option>
    <option>wait</option>
    <option>zoom-in</option>
    <option>zoom-out</option>
    <option>none</option>
  </select>;

  <span class="css">text-transform:</span><select onchange="texttransformfun()" id="texttransform">
    <option>unset</option>
    <option>lowercase</option>
    <option>uppercase</option>
  </select>
  <span class="css">text-align:</span><select onchange="alignfun()" id="align">
    <option>left</option>
    <option>center</option>
    <option>right</option>
  </select>

  <span class="css">padding:</span><input style="position: relative;top:8px;" id="padding" type="range" min="0" max="100" value="0" step='1' onchange="paddingfun()"><span id="padding-value" class="rangeval">0px</span>

  <span class="css">margin:</span><input style="position: relative;top:8px;" id="margin" type="range" min="0" max="100" value="0" step='1' onchange="marginfun()"><span id="margin-value" class="rangeval">0px</span>

  <span class="css">opacity:</span><input style="position: relative;top:8px;" id="opacity" type="range" min="0.0" max="1.0" value="1.0" step='.1' onchange="opacityfun()"><span id="opacity-value" class="rangeval">1.0</span>

  <span class="css">overflow:</span><select name="Overflow" onchange="overflowfun()" id="Overflow">
    <option>visible</option>
    <option>hidden</option>
    <option>scroll</option>
  </select>;

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
&lt;title&gt;myPage&lt;/title&gt;
&lt;style type="text/css"&gt;
body
{
  margin: 0;
  padding: 0;
  font-family:sans-serif;
}

form
{
  display:<span id="display_value">block</span>;
  position:<span id="position_value">unset</span>;
  text-decoration:<span id="decoration_value">none</span>;
  border:<span id="border_value">0</span>;
  background:<span id="bgcolor_value">#ffffff</span>;
  color:<span id="color_value">black</span>;
  opacity:<span id="opacity_value">1</span>;
  text-align:<span id="align_value">left</span>;
  text-transform:<span id="texttransform_value">unset</span>;
  <span id="display_border_value">border-style:<span id="border_style_value">solid</span>;</span>
  <span id ="display_color_value">border-color:<span id="css_border_color_value">#ccc</span>;</span>
  <span id ="display_ravius_value">border-radius:<span id="radius_value">0px</span>;</span>
  box-shadow:<span id="hoffset_value">0px</span> <span id="voffset_value">0px</span> <span id="sblur_value">0px</span> <span id="scolor_value">#000000</span>;
  padding:<span id="padding_value">0</span>;
  margin:<span id="margin_value">0</span>;
  cursor:<span id="cursor_value">pointer</span>;
  height:<span id="height_value">auto</span>;
  width:<span id="width_value">auto</span>;
  overflow:<span id="overflow_value">visible</span>;
}


&lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;form action="" method="<span id="method_value">GET</span>" autocomplet="<span id="auto_value">off</span>" accept-charset="<span id="accept_value">ISO-8859-1</span>" target="<span id="target_value">_blank</span>"&gt;
First name:&lt;input type="text" name="firstname" value="<span id="fn_value">Rishu</span>"&gt;
Last name:&lt;input type="text" name="lastname" value="<span id="ln_value">kumar</span>"&gt;
&lt;/form&gt;
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
      <form id="anchor" style="transition: 0.5s;" action="action_page" target="_blank">
        @csrf
        First name: <input id="fnn" type="text" name="FirstName" value="Rishu"><br>
        Last name: <input id="lnn" type="text" name="LastName" value="Kumar"><br>
        <input type="submit" value="Submit">
        </form>

<p style="margin-top: 15px;">Click the "Submit" button and the form-data will be sent to a page on the server called "/action_page.php".</p>

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
    document.getElementById('anchor').style.margin='unset';
    document.getElementById('anchor').style.display="block";//reset display
    document.getElementById('anchor').style.opacity=1;//reset  opacity
    document.getElementById('anchor').style.border="";//reset border
    document.getElementById('anchor').style.borderColor='';//reset image border-color
    document.getElementById('anchor').style.borderRadius='0px';//reset radius of image
    document.getElementById('anchor').style.borderStyle='';//reset border style
    document.getElementById('anchor').style.width='auto';//reset width 
    document.getElementById('anchor').style.height='auto';//reset height
    document.getElementById('anchor').style.textAlign="left";//reset alignment
     document.getElementById('anchor').style.position="unset";
    document.getElementById('anchor').style.filter="none";//reset filter
    document.getElementById('anchor').style.padding=0;//reset padding
    document.getElementById('anchor').style.backgroundColor="#ffffff";//reset bgcolor
    document.getElementById('anchor').style.color="black";//reset color
    document.getElementById('anchor').style.fontSize='';//reset size
    document.getElementById('anchor').style.textTransform='unset';//reset text-transform
    document.getElementById('anchor').style.textDecoration='none';//reset text-decoration
    
    document.getElementById('anchor').style.transition='0.5s';//reset speed
    document.getElementById('anchor').style.overflow='visible';//reset text-decoration
    document.getElementById('lnn').value="Kumar";
    document.getElementById('fnn').value="Rishu";
    document.getElementById('anchor').target="_blank";
    document.getElementById('anchor').method="GET";
    document.getElementById('anchor').autoComplete="off";
    document.getElementById('anchor').acceptCharset="ISO-8859-1";
    document.getElementById('Logs').innerHTML +="<p>"+ ++i +" >>"+"You have reset the code"+"</p>"+"\n";

//===============================Reset values in source code==========================================================//
    document.getElementById("fn_value").innerHTML="Rishu";
    document.getElementById("ln_value").innerHTML="kumar";
    document.getElementById("display_value").innerHTML="block";
    document.getElementById("position_value").innerHTML="unset";
    document.getElementById("decoration_value").innerHTML="none";
    document.getElementById("border_value").innerHTML="0";
    document.getElementById("bgcolor_value").innerHTML="#fff";
    document.getElementById("color_value").innerHTML="#000";
    document.getElementById("opacity_value").innerHTML="1";
    document.getElementById("align_value").innerHTML="left";
    document.getElementById("texttransform_value").innerHTML="unset";
    document.getElementById("border_style_value").innerHTML="";
    document.getElementById("css_border_color_value").innerHTML="";
    document.getElementById("radius_value").innerHTML="0px";
    document.getElementById("hoffset_value").innerHTML="0";
    document.getElementById("voffset_value").innerHTML="0";
    document.getElementById("sblur_value").innerHTML="0";
    document.getElementById("scolor_value").innerHTML="#000";
    document.getElementById("padding_value").innerHTML="0";
    document.getElementById("margin_value").innerHTML="0";
    document.getElementById("cursor_value").innerHTML="pointer";
    document.getElementById("height_value").innerHTML="auto";
    document.getElementById("width_value").innerHTML="auto";
    document.getElementById("overflow_value").innerHTML="visible";

//==================================display required css only=======================================================//
        /* will add this function later*/
  }
  function fnfun(){
    var logs="you have changed firstname value";
    var value = document.getElementById('fn').value;
    if(value!='custom')
    {
      document.getElementById('fnn').value=value;
      document.getElementById("fn_value").innerHTML=value;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+value+"</p>"+"\n";
    }
    else
    {
      var custom = prompt("Enter firstName");
      document.getElementById('fnn').value=custom;
      document.getElementById("fn_value").innerHTML=custom;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+custom+"</p>"+"\n";
    }
  }
  function lnfun(){
    var logs="you have changed lastname value";
    var value = document.getElementById('ln').value;
    if(value!='custom')
    {
      document.getElementById('lnn').value=value;
      document.getElementById("ln_value").innerHTML=value;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+value+"</p>"+"\n";
    }
    else
    {
      var custom = prompt("Enter lastName");
      document.getElementById('lnn').value=custom;
      document.getElementById("ln_value").innerHTML=custom;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+custom+"</p>"+"\n";
    }
  }
   function methodfun()
        {
          var logs = "you have set method as:"
          var value = document.getElementById('method').value;
          document.getElementById('anchor').method=value;
          document.getElementById('method_value').innerHTML=value;
           document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+value+"</p>"+"\n";
        }
         function acceptfun()
        {
          var logs = "you have set accept-charset as:"
          var value = document.getElementById('accept').value;
          document.getElementById('anchor').acceptCharset=value;
           document.getElementById('accept_value').innerHTML=value;
           document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+value+"</p>"+"\n";
        }
         function targetfun()
        {
          var logs = "you have set target as:"
          var value = document.getElementById('target').value;
          document.getElementById('anchor').target=value;
           document.getElementById('target_value').innerHTML=value;
           document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+value+"</p>"+"\n";
        }
         function autofun()
        {
          var logs = "you have set autocomplete as:"
          var value = document.getElementById('auto').value;
          document.getElementById('anchor').autoComplete=value;
           document.getElementById('auto_value').innerHTML=value;
           document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+value+"</p>"+"\n";
        }
   function positionfun()
        {
          var logs = "you have set postion as:"
          var value = document.getElementById('position').value;
          document.getElementById('anchor').style.position=value;
           document.getElementById('position_value').innerHTML=value;
           document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+value+"</p>"+"\n";
          //document.getElementById('frame').style.display="block";
        }
         function cursorfun()
        {
          var logs = "you have set cursor as:"
          var value = document.getElementById('cursor').value;
          document.getElementById('anchor').style.cursor=value;
           document.getElementById('cursor_value').innerHTML=value;
           document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+value+"</p>"+"\n";
          //document.getElementById('frame').style.display="block";
        }
   function linkfun()
        {

         //document.getElementById('anchor').href="http://localhost/project_X/about.php";
          document.getElementById('browser').style.display="block";
          document.getElementById('frame').style.display="block";
        }
    function hreffun(){
    var logs="you have changed the value of href:";
    var value = document.getElementById('href').value;
    if(value!='custom')
    {
      document.getElementById('anchor').href=value;
      //document.getElementById("height_value").innerHTML=value;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+value+"</p>"+"\n";
    }
    else
    {
      var custom = prompt("Enter url");
      document.getElementById('anchor').href=custom;
      document.getElementById("href_value").innerHTML=custom;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+custom+"</p>"+"\n";
    }
  }
  function borderfun(){
    var value = document.getElementById('border').value;
    var type_value = document.getElementById('borderstyle').value;
    var color_value = document.getElementById('cssbordercolor').value;
    var logs="you have changed the value of border to";

      document.getElementById('anchor').style.border=value+'px';
      document.getElementById('anchor').style.borderStyle=type_value;
      document.getElementById('anchor').style.borderColor=color_value;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+value+"px"+"</p>"+"\n";
      document.getElementById("border_value").innerHTML=value+'px';
      document.getElementById("border-value").innerHTML=' '+value+'px';
  }
  function alignfun(){
    var value = document.getElementById('align').value;
    document.getElementById('anchor').style.textAlign=value;
    document.getElementById("align_value").innerHTML=value;
    document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+"You have aligned element to"+" "+value+"</p>"+"\n";
  }
  function decorationfun() {
    var value = document.getElementById('decoration').value;
    document.getElementById('anchor').style.textDecoration=value;
    document.getElementById('decoration_value').innerHTML=value;
    document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+"You have changed text decoration as:"+" "+value+"</p>"+"\n";
  }
  function texttransformfun(){
    var value = document.getElementById('texttransform').value;
    document.getElementById('anchor').style.textTransform=value;
    document.getElementById("texttransform_value").innerHTML=value;
    document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+"You have transform text to"+" "+value+"</p>"+"\n";
  }
  function sizefun(){
    var value = document.getElementById('size').value+'px';
    document.getElementById('anchor').style.fontSize=value;
    document.getElementById("size_value").innerHTML=value;
    document.getElementById("size-value").innerHTML=value;
    document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+"You have changed font size to"+" "+value+"</p>"+"\n";
  }
  
  function radiusfun(){
    var value = document.getElementById('radius').value;
    
      document.getElementById('anchor').style.borderRadius=value+'px';
      document.getElementById("radius_value").innerHTML=value+'px';
      document.getElementById("radius-value").innerHTML=' '+value+'px';
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+"You have changed border radius property to"+" "+value+"px"+"</p>"+"\n";
  }
  
  function borderstylefun(){
    var value = document.getElementById('borderstyle').value;
    document.getElementById('anchor').style.borderStyle=value;
    document.getElementById("border_style_value").innerHTML=value;
    document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+"You have set border style as"+" "+value+"</p>"+"\n";
  }
  function cssbordercolorfun(){
    var logs="you have changed the value of bordercolor as";
    var value = document.getElementById('cssbordercolor').value;
      document.getElementById('anchor').style.borderColor=value;
      document.getElementById("css_border_color_value").innerHTML=value;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+value+"</p>"+"\n";
  }
  function colorfun(){
    var logs="you have changed the value of color as";
    var value = document.getElementById('color').value;
      document.getElementById('anchor').style.color=value;
      document.getElementById("color_value").innerHTML=value;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+value+"</p>"+"\n";
  }
  function bgcolorfun(){
    var logs="you have changed the value of background color as";
    var value = document.getElementById('bgcolor').value;
      document.getElementById('anchor').style.backgroundColor=value;
      document.getElementById("bgcolor_value").innerHTML=value;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+value+"</p>"+"\n";
  }
  function heightfun(){
    var logs="you have changed the value of height to";
    var value = document.getElementById('height').value;
    if(value!='custom')
    {
      document.getElementById('anchor').style.height=value;
      document.getElementById("height_value").innerHTML=value;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+value+"</p>"+"\n";
    }
    else
    {
      var custom = prompt("Enter value in px (or) %");
      document.getElementById('anchor').style.height=custom;
      document.getElementById("height_value").innerHTML=custom;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+custom+"</p>"+"\n";
    }
  }

  function widthfun(){
    var logs="you have changed the value of width to";
    var value = document.getElementById('width').value;
    if(value!='custom')
    {
      document.getElementById('anchor').style.width=value;
      document.getElementById("width_value").innerHTML=value;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+value+"</p>"+"\n";
    }
    else
    {
      var custom = prompt("Enter value in px (or) %");
      document.getElementById('anchor').style.width=custom;
      document.getElementById("width_value").innerHTML=custom;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+custom+"</p>"+"\n";
    }
  }
  
  function transform(){
    var logs="you have set transform property :";
    var value = document.getElementById('transform').value;
    if(value!='custom')
    {
      document.getElementById('anchor').style.transform=value;
      document.getElementById("transform_value").innerHTML=value;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+value+"</p>"+"\n";
    }
    else
    {
      var custom = prompt("Enter value");
      document.getElementById('anchor').style.transform=custom;
      document.getElementById("transform_value").innerHTML=custom;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+custom+"</p>"+"\n";
    }
  }
  function transition(){
    var logs="you have set transition property(speed) :";
    var value = document.getElementById('transition').value;
    if(value!='custom')
    {
      document.getElementById('anchor').style.transition=value;
      document.getElementById("transition_value").innerHTML=value;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+value+"</p>"+"\n";
    }
    else
    {
      var custom = prompt("Enter time in seconds"+'<br>'+"eg:2");
      if(custom>=0 && custom<=99999999999)
      {
        document.getElementById('anchor').style.transition=custom+'s';
        document.getElementById("transition_value").innerHTML=custom+'s';
        document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+custom+'s'+"</p>"+"\n";
      }
      else{alert("Invalid input");}
    }
  }
  function overflowfun(){
    var value = document.getElementById('Overflow').value;
    document.getElementById('anchor').style.overflow=value;
    document.getElementById("overflow_value").innerHTML=value;
    document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+"You have set overflow property as"+" "+value+"</p>"+"\n";
  }
  function opacityfun(){
    var value = document.getElementById('opacity').value;
    var logs="you have changed the opacity value to";

      document.getElementById('anchor').style.opacity=value;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+value+"</p>"+"\n";
      document.getElementById("opacity_value").innerHTML=value;
      document.getElementById("opacity-value").innerHTML=' '+value;
  }
  function displayfun(){
    var value = document.getElementById('display').value;
    var logs="you have set display property of anchor as";

      document.getElementById('anchor').style.display=value;
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
    var logs="you have changed padding property:";

      document.getElementById('anchor').style.padding=value;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+value+"</p>"+"\n";
      document.getElementById("padding_value").innerHTML=value;
      document.getElementById("padding-value").innerHTML=value;
  }
  function marginfun(){
    var value = document.getElementById('margin').value+'px';
    var logs="you have changed margin property:";

      document.getElementById('anchor').style.margin=value;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+value+"</p>"+"\n";
      document.getElementById("margin_value").innerHTML=value;
      document.getElementById("margin-value").innerHTML=value;
  }
  function filterfun(){

    //====shadowfunction=======//
    var hoffset = document.getElementById('hoffset').value+'px';
    var voffset = document.getElementById('voffset').value+'px';
    var sblur = document.getElementById('sblur').value+'px';
    var scolor =document.getElementById('scolor').value;
    //===logs===//
    var logs="you have changed box-shadow values ";
      //document.getElementById('img').setAttribute("style","-webkit-filter:blur(" + value + "px) brightness(" + brightness_value + "%) grayscale(" + grayscale + "%) contrast(" + contrast + "%) hue-rotate(" + huerotate + "deg) invert(" + invert + "%) saturate(" + saturate + ") sepia(" + sepia + "%)");
      
      document.getElementById('anchor').style.filter="drop-shadow("+hoffset+" "+voffset+" "+sblur+" "+scolor+")";

      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+hoffset+" "+voffset+" "+sblur+" "+scolor+" "+"</p>"+"\n";

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