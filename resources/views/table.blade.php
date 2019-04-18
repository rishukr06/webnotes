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
table
{
  transition: 0.5s;
  border-collapse:separate!important;
  border-color: #000;
  height: auto;
  width: auto;
}
table:hover{transform:none!important;}
#tr:hover
{
  background-color: #f5f5f5;
}
th
{
  background-color: transparent;
}
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
  }
}
    </style>
</head>
<body>
<!--main navbar-->
<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top" style="z-index: 3;">
  <a class="navbar-brand" href="../welcome">Web Notes</a>
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
  <!--starting form to extract value for displaying code-->
  <div class="tab-content">
    <div id="html" class="container-fluid tab-pane active">
      <pre>
<span class="tags">&lt;html&gt;
&lt;head&gt;
&lt;style</span> <span class="attributes">type</span>="text/css"&gt;

&lt;<span class="tags">/style&gt;
&lt;/head&gt;
&lt;body&gt;

<span class="tags">&lt;table</span> <b>border</b>="<select name="border" id="border" onchange="borderfun()">
  <option>1</option>
  <option>0</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
  <option>custom</option>
</select>" 

<b>bordercolor</b>="<select name="bordercolor" id="bordercolor" onchange="bordercolorfun()">
  <option>Black</option>
  <option>Red</option>
  <option>Blue</option>
  <option>Orange</option>
  <option>green</option>
  <option>custom</option>
  </select>"

<b>bgcolor</b>="<select id="bgcolor" name="bgcolor" onchange="bgcolorfun()">
  <option>white</option>
  <option>coral</option>
  <option>lightblue</option>
  <option>Gray</option>
  <option>Lightgreen</option>
  <option>custom</option>
  </select>"

<b>align</b>="<select id="align" name="align" onchange="alignfun()">
  <option>center</option>
  <option>left</option>
  <option>right</option>
  </select>"

<b>frame</b>="<select id="frame" name="frame" onchange="framefun()">
  <option value="NULL">None</option>
  <option>box</option>
  <option>void</option>
  <option>above</option>
  <option>below</option>
  <option>hsides</option>
  <option>lhs</option>
  <option>rhs</option>
  <option>vsides</option>
  <option>border</option>
  </select>"

<b>cellpadding</b>="<select id="cellpadding" name="cellpadding" onchange="cellpaddingfun()">
  <option value="0">0px</option>
  <option>2px</option>
  <option>4px</option>
  <option>6px</option>
  <option>8px</option>
  <option>10px</option>
  <option>12px</option>
  <option>20px</option>
  <option>35px</option>
  <option>50px</option>
  <option>custom</option>
  </select>"

<b>cellspacing</b>="<select id="cellspacing" name="cellspacing" onchange="cellspacingfun()">
  <option value="0">0px</option>
  <option>2px</option>
  <option>4px</option>
  <option>6px</option>
  <option>8px</option>
  <option>10px</option>
  <option>12px</option>
  <option>20px</option>
  <option>35px</option>
  <option>50px</option>
  <option>custom</option>
  </select>"

<b>rules</b>="<select id="rules" name="rules" onchange="rulesfun()">
<option>all</option>
<option>Rows</option>
<option>Cols</option>
<option>Groups</option>
</select>"&gt;
<span class="tags">&lt;tr&gt;
  &lt;th </span><b>colspan</b>="<select name="colspan" id="colspan" onchange="colspanfun()"><option>1</option><option>0</option><option>2</option><option>3</option></select> <b>rowspan</b>="<select id="rowspan" name="rowspan" onchange="rowspanfun()"><option>1</option><option>0</option><option>2</option><option>3</option><option>4</option></select>"&gt;Heading-1<span class="tags">&lt;/th&gt;</span>
  <span class="tags">&lt;th&gt;</span>Heading-2<span class="tags">&lt;/th&gt;</span>
  <span class="tags">&lt;th&gt;</span>Heading-3<span class="tags">&lt;/th&gt;</span>
<span class="tags">&lt;/tr&gt;</span>
<span class="tags">&lt;tr&gt;
  &lt;td <span class="attributes">title</span>="Row=1,col=1"&gt;</span>data-1<span class="tags">&lt;/td&gt;</span>
  <span class="tags">&lt;td<span class="attributes"> title</span>="Row=1,col=2"&gt;</span>data-2<span class="tags">&lt;/td&gt;</span>
  <span class="tags">&lt;td <span class="attributes">title</span>="Row=1,col=3"&gt;</span>data-3<span class="tags">&lt;/td&gt;
&lt;/tr&gt;</span>
<span class="tags">&lt;tr&gt;
  &lt;td <span class="attributes">title</span>="Row=2,col=1"&gt;</span>data-1<span class="tags">&lt;/td&gt;</span>
  <span class="tags">&lt;td<span class="attributes"> title</span>="Row=2,col=2"&gt;</span>data-2<span class="tags">&lt;/td&gt;</span>
  <span class="tags">&lt;td <span class="attributes">title</span>="Row=2,col=3"&gt;</span>data-3<span class="tags">&lt;/td&gt;
&lt;/tr&gt;</span>
<span class="tags">&lt;tr&gt;
  &lt;td <span class="attributes">title</span>="Row=3,col=1"&gt;</span>data-1<span class="tags">&lt;/td&gt;</span>
  <span class="tags">&lt;td<span class="attributes"> title</span>="Row=3,col=2"&gt;</span>data-2<span class="tags">&lt;/td&gt;</span>
  <span class="tags">&lt;td <span class="attributes">title</span>="Row=3,col=3"&gt;</span>data-3<span class="tags">&lt;/td&gt;
&lt;/tr&gt;
&lt;/table&gt;
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
  font-family : sans-serif;
  font-size: 16px;</span>
}

<span class="tags">table</span>
{
 
  <span class="css">border-style:</span><select name="borderstyle" onchange="borderstylefun()" id="borderstyle">
    <option value="">none</option>
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
  <span class="css">border-color:</span><select name="cssbordercolor" onchange="cssbordercolorfun()"                   id="cssbordercolor">
    <option>black</option>
    <option>red</option>
    <option>orange</option>
    <option>yellow</option>
    <option>brown</option>
    <option>grey</option>
    <option>blue</option>
    <option>lightblue</option>
    <option>green</option>
    <option>custom</option>
  </select>;
  <span class="css">color:</span><select name="color" onchange="colorfun()" id="color">
    <option>black</option>
    <option>red</option>
    <option>orange</option>
    <option>yellow</option>
    <option>brown</option>
    <option>grey</option>
    <option>blue</option>
    <option>lightblue</option>
    <option>green</option>
    <option>custom</option>
  </select>;
  <span class="css">border-radius:</span><select name="radius" onchange="radiusfun()" id="radius">
    <option>2px</option>
    <option>5px</option>
    <option>8px</option>
    <option>10px</option>
    <option>20px</option>
    <option>50%</option>
    <option>custom</option>
  </select>;
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
  <span class="css">overflow:</span><select name="Overflow" onchange="overflowfun()" id="Overflow">
    <option>visible</option>
    <option>hidden</option>
    <option>scroll</option>
  </select>;
  <span class="css">text-align:</span><select name="tetxalign" onchange="txtalignfun()" id="txtalign">
    <option>left</option>
    <option>center</option>
    <option>right</option>
  </select>;
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
  <span class="css">transition:</span><select onchange="transition()" id="transition">
    <option>0.5s</option>
    <option>1s</option>
    <option>5s</option>
    <option>custom</option>
</select>;<span class="info"> /* control speed of environment */</span>
}
<span class="tags">table:<span style="color: #fff">hover</span></span>
{
  <span class="css">transform:none;</span><span class="info"> /*reset transform property */</span>
}
<span class="tags">tr:<span style="color: #fff">hover</span></span><span class="info"> /* works onmouseover*/</span>
{
  <span class="css">background-color:#f5f5f5;</span>
}
<span class="tags">th</span></span>
{
  <span class="css">background-color:</span><select name="thbgcolor" onchange="changebgcolor()" id="thbgcolor">
    <option>black</option>
    <option>red</option>
    <option>orange</option>
    <option>yellow</option>
    <option>brown</option>
    <option>grey</option>
    <option>blue</option>
    <option>lightblue</option>
    <option>green</option>
    <option>custom</option>
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
&lt;style type="text/css"&gt;
body
{
  margin: 0;
  padding: 0;
  font-family : sans-serif;
  font-size: 16px;
}

table
{
 
  <span id="display_border_value">border-style:<span id="border_style_value"></span>;</span>
  <span id ="display_color_value">border-color:<span id="css_border_color_value"></span>;</span>
  <span id ="display_border_color_value">color:<span id="color_value">black</span>;</span>
  <span id ="display_ravius_value">border-radius:<span id="radius_value">0px</span>;</span>
  <span id ="display_height_value">height:<span id="height_value">auto</span>;</span>
  <span id ="display_width_value">width:<span id="width_value">auto</span>;</span>
  <span id ="display_overflow_value">overflow:<span id="overflow_value">visible</span>;</span>
  <span id ="display_align_value">text-align:<span id="text_align_value">center</span>;</span>
  <span id ="display_transform_value">transform:<span id="transform_value">none</span>;</span>
  <span id ="display_transition_value">transition:<span id="transition_value">0.5s</span>;</span>
}
tr:hover
{
 background-color:#f5f5f5;
}
th
{
 background-color:<span id="thbg_value">transparent</span>;
} 
table:hover
{
  transform:none;
}
&lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;

&lt;table border="<span id="border_value">1</span>" 

bordercolor="<span id="bordercolor_value">black</span>"

bgcolor="<span id="bgcolor_value">white</span>"

align="<span id="align_value">center</span>"

frame="<span id="frame_value">none</span>"

cellpadding="<span id="cellpadding_value"></span>"

cellspacing="<span id="cellspacing_value"></span>"

rules="<span id="rules_value"></span>"&gt;
&lt;tr&gt;
  &lt;th colspan="<span id="colspan_value">1</span>" rowspan="<span id="rowspan_value">1</span>"&gt;Heading-1&lt;/th&gt;
  &lt;th&gt;Heading-2&lt;/th&gt;
  &lt;th&gt;Heading-3&lt;/th&gt;
&lt;/tr&gt;
&lt;tr&gt;
  &lt;td title="Row=1,col=1"&gt;data-1&lt;/td&gt;
  &lt;td title="Row=1,col=2"&gt;data-2&lt;/td&gt;
  &lt;td title="Row=1,col=3"&gt;data-3&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
  &lt;td title="Row=2,col=1"&gt;data-1&lt;/td&gt;
  &lt;td title="Row=2,col=2"&gt;data-2&lt;/td&gt;
  &lt;td title="Row=2,col=3"&gt;data-3&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
  &lt;td title="Row=3,col=1"&gt;data-1&lt;/td&gt;
  &lt;td title="Row=3,col=2"&gt;data-2&lt;/td&gt;
  &lt;td title="Row=3,col=3"&gt;data-3&lt;/td&gt;
&lt;/tr&gt;
&lt;/tr&gt;
&lt;/table&gt;
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
      <table align="center" id="table" cellpadding="" cellspacing="" rules="" border="1">
        <tr>
          <th id="th" class="th">Heading-1</th>
          <th id="th1" >Heading-2</th>
          <th id="th2" >Heading-3</th>
        </tr>
        <tr id="tr" onmouseover="">
          <td title="Row=1,col=1">data-1</td>
          <td title="Row=1,col=2">data-2</td>
          <td title="Row=1,col=3">data-3</td>
        </tr>
        <tr id="tr">
          <td title="Row=2,col=1">data-4</td>
          <td title="Row=2,col=2">data-5</td>
          <td title="Row=2,col=3">data-6</td>
        </tr>
        <tr id="tr">
          <td title="Row=3,col=1">data-7</td>
          <td title="Row=3,col=2">data-8</td>
          <td title="Row=3,col=3">data-9</td>
        </tr>
      </table>
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

    document.getElementById('table').border=1;//reset table border
    document.getElementById('table').style.borderColor='black';//reset table border-color
    document.getElementById('table').rules='all';//reset table rules property
    document.getElementById('table').style.background='white';//reset table background-color
    document.getElementById('table').frame='NULL';//reset table frame property
    document.getElementById('table').align='center';//reset align property
    document.getElementById('table').cellPadding=0;//reset cell-padding attribute
    document.getElementById('table').cellSpacing=1;//reset cell-spacing attribute
    document.getElementById('th').colSpan=1;//reset colspan property
    document.getElementById('th').rowSpan=1;//reset rowspan property
    document.getElementById('table').style.borderRadius='none';//reset radius of table
    document.getElementById('table').style.overflow='visible';//reset overflow property
    document.getElementById('table').style.borderCollapse="none";//reset border collapse property
    document.getElementById('table').style.borderStyle='';//reset border style
    document.getElementById('table').style.borderRadius=0;//rrest borderRadius
    document.getElementById('table').style.width='auto';//reset width of table
    document.getElementById('table').style.height='auto';//reset height
    document.getElementById('table').style.textAlign='left';//reset alignment
    document.getElementById('th').style.backgroundColor="transparent";//reset th color
    document.getElementById('th1').style.backgroundColor="transparent";//reset th color
    document.getElementById('th2').style.backgroundColor="transparent";//reset th color
    document.getElementById('table').style.color='black';//reset table data color
    document.getElementById('table').style.transform='none';//reset table transformation
    document.getElementById('table').style.transition="0.5s"//reset speed
    document.getElementById('Logs').innerHTML +="<p>"+ ++i +" >>"+"You have reset the code"+"</p>"+"\n";

//===============================Reset values in source code==========================================================//

    document.getElementById("border_value").innerHTML=1;
    document.getElementById("border_style_value").innerHTML="";
    document.getElementById("css_border_color_value").innerHTML="black";
    document.getElementById("color_value").innerHTML="black";
    document.getElementById("radius_value").innerHTML="0px";
    document.getElementById("height_value").innerHTML="auto";
    document.getElementById("width_value").innerHTML="auto";
    document.getElementById("overflow_value").innerHTML="visible";
    document.getElementById("text_align_value").innerHTML="left";
    document.getElementById("thbg_value").innerHTML="transparent";
    document.getElementById("bordercolor_value").innerHTML="black";
    document.getElementById("bgcolor_value").innerHTML="white";
    document.getElementById("align_value").innerHTML="center";
    document.getElementById("frame_value").innerHTML="none";
    document.getElementById("cellpadding_value").innerHTML="";
    document.getElementById("cellspacing_value").innerHTML="";
    document.getElementById("rules_value").innerHTML="";
    document.getElementById("colspan_value").innerHTML=1;
    document.getElementById("rowspan_value").innerHTML=1;
    document.getElementById("transform_value").innerHTML="none";
    document.getElementById("transition_value").innerHTML="0.5s";

//==================================display required css only=======================================================//
        /* will add this function later*/
  }
  function borderfun(){
    var value = document.getElementById('border').value;
    var logs="you have changed the value of border to";
    if(value!='custom')
    {
      document.getElementById('table').border=value;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+value+"</p>"+"\n";
      document.getElementById("border_value").innerHTML=value;
    }
    else
    {
      var custom = prompt("Enter value");
      document.getElementById('table').border=custom;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+custom+"</p>"+"\n";
      document.getElementById('border_value').innerHTML=custom;
    }
  }
  function bordercolorfun(){
    var logs="you have changed the value of bordercolor as";
    var value = document.getElementById('bordercolor').value;
    if(value!='custom')
    {
      document.getElementById('table').style.borderColor=value;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+value+"</p>"+"\n";
      document.getElementById("bordercolor_value").innerHTML=value;
    }
    else
    {
      var custom = prompt("Enter name (or) hex code of color");
      document.getElementById('table').style.borderColor=custom;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+custom+"</p>"+"\n";
      document.getElementById("bordercolor_value").innerHTML=custom;
    

    }
  }
  function rulesfun(){
    var value = document.getElementById('rules').value;
    document.getElementById('table').rules=value;
    document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+"You have changed rules proprty to"+" "+value+"</p>"+"\n";
    document.getElementById("rules_value").innerHTML=value;
  }
  function bgcolorfun(){
    var value = document.getElementById('bgcolor').value;
    if(value!='custom')
    {
      document.getElementById('table').style.background=value;
      document.getElementById("bgcolor_value").innerHTML=value;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+"You have changed table background as"+" "+value+"</p>"+"\n";
    }
    else
    {
      var custom = prompt("Enter name (or) hex code of color");
      document.getElementById('table').style.background=custom;
      document.getElementById("bgcolor_value").innerHTML=custom;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+"You have changed table background as"+" "+custom+"</p>"+"\n";
    }
  }
  function framefun(){
      var value = document.getElementById('frame').value;
      document.getElementById('table').frame=value;
      document.getElementById("frame_value").innerHTML=value;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+"You have changed frame propertyof table as"+" "+value+"</p>"+"\n";
  }
  function alignfun(){
    var value = document.getElementById('align').value;
    document.getElementById('table').align=value;
    document.getElementById("align_value").innerHTML=value;
    document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+"You have aligned table to"+" "+value+"</p>"+"\n";
  }
  function cellpaddingfun(){
    var value = document.getElementById('cellpadding').value;
    if(value!='custom')
    {
      document.getElementById('table').cellPadding=value;
      document.getElementById("cellpadding_value").innerHTML=value;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+"You have changed cellpadding values to"+" "+value+"</p>"+"\n";
    }
    else
    {
      var custom = prompt("Enter value in px");
      document.getElementById('table').cellPadding=custom;
      document.getElementById("cellpadding_value").innerHTML=custom;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+"You have changed cellpadding values to"+" "+custom+"</p>"+"\n";
    }
  }
  function cellspacingfun(){
    var value = document.getElementById('cellspacing').value;
    if(value!='custom')
    {
      document.getElementById('table').cellSpacing=value;
      document.getElementById("cellspacing_value").innerHTML=value;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+"You have changed cellspacing values to"+" "+value+"</p>"+"\n";
    }
    else
    {
      var custom = prompt("Enter value in px");
      document.getElementById('table').cellSpacing=custom;
      document.getElementById("cellspacing_value").innerHTML=custom;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+"You have changed cellspacing values to"+" "+custom+"</p>"+"\n";
    }
  }
  function colspanfun(){
    var value = document.getElementById('colspan').value;
    document.getElementById('th').colSpan=value;
    document.getElementById("colspan_value").innerHTML=value;
    document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+"You have changed colspan values to"+" "+value+"</p>"+"\n";
  }
  function rowspanfun(){
    var value = document.getElementById('rowspan').value;
    document.getElementById('th').rowSpan=value;
    document.getElementById("rowspan_value").innerHTML=value;
    document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+"You have changed rowspan values to"+" "+value+"</p>"+"\n";
  }
  function radiusfun(){
    var value = document.getElementById('radius').value;
    if(value!='custom')
    {
      document.getElementById('table').style.borderRadius=value;
      document.getElementById("radius_value").innerHTML=value;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+"You have changed border radius property to"+" "+value+"</p>"+"\n";
    }
    else
    {
      var custom = prompt("Enter value in px (or) %");
      document.getElementById('table').style.borderRadius=custom;
      document.getElementById("radius_value").innerHTML=custom;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+"You have changed border radius property to"+" "+custom+"</p>"+"\n";
    }
  }
  function overflowfun(){
    var value = document.getElementById('Overflow').value;
    document.getElementById('table').style.overflow=value;
    document.getElementById("overflow_value").innerHTML=value;
    document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+"You have set table overflow property as"+" "+value+"</p>"+"\n";
  }
  function collapsefun(){
    var value = document.getElementById('collapse').value;
    document.getElementById('table').style.borderCollapse=value+'!important';
    document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+"You have changed table collapse property as"+" "+value+"</p>"+"\n";
  }
  function borderstylefun(){
    var value = document.getElementById('borderstyle').value;
    document.getElementById('table').style.borderStyle=value;
    document.getElementById("border_style_value").innerHTML=value;
    document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+"You have set border style of table as"+" "+value+"</p>"+"\n";
  }
  function cssbordercolorfun(){
    var logs="you have changed the value of bordercolor as";
    var value = document.getElementById('cssbordercolor').value;
    if(value!='custom')
    {
      document.getElementById('table').style.borderColor=value;
      document.getElementById("css_border_color_value").innerHTML=value;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+value+"</p>"+"\n";
    }
    else
    {
      var custom = prompt("Enter name (or) hex code of color");
      document.getElementById('table').style.borderColor=custom;
      document.getElementById("css_border_color_value").innerHTML=custom;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+custom+"</p>"+"\n";
    }
  }
  function heightfun(){
    var logs="you have changed the value of table height to";
    var value = document.getElementById('height').value;
    if(value!='custom')
    {
      document.getElementById('table').style.height=value;
      document.getElementById("height_value").innerHTML=value;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+value+"</p>"+"\n";
    }
    else
    {
      var custom = prompt("Enter value in px (or) %");
      document.getElementById('table').style.height=custom;
      document.getElementById("height_value").innerHTML=custom;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+custom+"</p>"+"\n";
    }
  }
  function widthfun(){
    var logs="you have changed the value of table width to";
    var value = document.getElementById('width').value;
    if(value!='custom')
    {
      document.getElementById('table').style.width=value;
      document.getElementById("width_value").innerHTML=value;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+value+"</p>"+"\n";
    }
    else
    {
      var custom = prompt("Enter value in px (or) %");
      document.getElementById('table').style.width=custom;
      document.getElementById("width_value").innerHTML=custom;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+custom+"</p>"+"\n";
    }
  }
  function txtalignfun(){
    var value = document.getElementById('txtalign').value;
    document.getElementById('table').style.textAlign=value;
    document.getElementById("text_align_value").innerHTML=value;
    document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+"You have changed text-align property of table to"+" "+value+"</p>"+"\n";
  } 
  function changebgcolor(){
    var logs="you have changed th backgroundColor of table heading to";
    var value = document.getElementById('thbgcolor').value;
    if(value!='custom')
    {
      document.getElementById('th').style.backgroundColor=value;
      document.getElementById('th1').style.backgroundColor=value;
      document.getElementById('th2').style.backgroundColor=value;
      document.getElementById("thbg_value").innerHTML=value;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+value+"</p>"+"\n";
    }
    else
    {
      var custom = prompt("Enter color name (or) hex code");
      document.getElementById('th').style.backgroundColor=custom;
      document.getElementById('th1').style.backgroundColor=custom;
      document.getElementById('th2').style.backgroundColor=custom;
      document.getElementById("thbg_value").innerHTML=custom;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+custom+"</p>"+"\n";
    }
  }
  function colorfun(){
    var logs="you have changed table tetx color  to";
    var value = document.getElementById('color').value;
    if(value!='custom')
    {
      document.getElementById('table').style.color=value;
      document.getElementById("color_value").innerHTML=value;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+value+"</p>"+"\n";
    }
    else
    {
      var custom = prompt("Enter color name (or) hex code");
      document.getElementById('table').style.color=custom;
      document.getElementById("color_value").innerHTML=custom;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+custom+"</p>"+"\n";
    }
  }
  function transform(){
    var logs="you have set transform property :";
    var value = document.getElementById('transform').value;
    if(value!='custom')
    {
      document.getElementById('table').style.transform=value;
      document.getElementById("transform_value").innerHTML=value;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+value+"</p>"+"\n";
    }
    else
    {
      var custom = prompt("Enter value");
      document.getElementById('table').style.transform=custom;
      document.getElementById("transform_value").innerHTML=custom;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+custom+"</p>"+"\n";
    }
  }
  function transition(){
    var logs="you have set transition property(speed) :";
    var value = document.getElementById('transition').value;
    if(value!='custom')
    {
      document.getElementById('table').style.transition=value;
      document.getElementById("transition_value").innerHTML=value;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+value+"</p>"+"\n";
    }
    else
    {
      var custom = prompt("Enter time in seconds");
      document.getElementById('table').style.transition=custom;
      document.getElementById("transition_value").innerHTML=custom;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+custom+"</p>"+"\n";
    }
  }
</script>
<!--js-ends-->
</div>
</body>
</html>