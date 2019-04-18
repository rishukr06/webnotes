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
&lt;input <span class="attributes">list</span><span style="color: #fff;">="games"</span>&gt;
   &lt;datalist <span class="attributes">id</span><span style="color: #fff;">="games"</span>&gt;
        &lt;option <span class="attributes">value</span><span style="color: #fff;">="Cricket"</span>&gt;
        &lt;option <span class="attributes">value</span><span style="color: #fff;">="football"</span>&gt;
         &lt;option <span class="attributes">value</span><span style="color: #fff;">="Hockey"</span>&gt;
          &lt;option <span class="attributes">value</span><span style="color: #fff;">="American football"</span>&gt;
           &lt;option <span class="attributes">value</span><span style="color: #fff;">="<select id="datalist" onchange="datachangefun()"><option>Rammy</option><option>custom</option></select>"</span>&gt;<span style="color: orange"> /* Try it yourself */</span>
      &lt;/datalist&gt;
&lt;/body&gt;
&lt;/html&gt;</span>
<b>Note:</b> <spam class="text text-info">The datalist tag is not supported in Internet Explorer 9<br> and earlier versions, or in Safari.</spam>
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

<span class="tags">input</span>
{
 
  <span class="css">display:</span><select onchange="displayfun()" id="display">
    <option>block</option>
    <option>none</option>
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
input
{
  display:<span id="display_value">block</span>;
}

&lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;input list="games"&gt;
   &lt;datalist id="games"&gt;
        &lt;option value="Cricket"&gt;
        &lt;option value="football"&gt;
        &lt;option value="Hockey"&gt;
        &lt;option value="American football"&gt;
        &lt;option value="<span id="game_value">Rammy</span>"&gt;
      &lt;/datalist&gt;
&lt;/body&gt;
&lt;/body&gt;
&lt;/html&gt;
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
     <input id="anchor" list="games">
      <datalist id="games">
        <option value="Cricket">
        <option value="Football">
        <option value="Hockey">
        <option value="American Football">
        <option id="gamevalue" value="Rammy">
      </datalist>
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
<script type="text/javascript" >
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
    
    document.getElementById('anchor').style.display="block";//reset display
    document.getElementById('anchor').value='';
    document.getElementById('gamevalue').value="Rammy";
    
    document.getElementById('Logs').innerHTML +="<p>"+ ++i +" >>"+"You have reset the code"+"</p>"+"\n";

//===============================Reset values in source code==========================================================//
    
    document.getElementById("display_value").innerHTML="block";
    document.getElementById("game_value").innerHTML="Rammy";
    

//==================================display required css only=======================================================//
        /* will add this function later*/
  }
   
  function displayfun(){
    var value = document.getElementById('display').value;
    var logs="you have set display property as:";

      document.getElementById('anchor').style.display=value;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+value+"</p>"+"\n";
      document.getElementById("display_value").innerHTML=value;
  }
  function datachangefun() {
    var value = document.getElementById('datalist').value;
    var logs="you have set a datalist item:";
    if(value!='custom')
    {
      document.getElementById('gamevalue').value=value;
      document.getElementById('game_value').innerHTML=value;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+value+"</p>"+"\n";
    }
    else
    {
      var custom = prompt('Enter game name:');
      document.getElementById('gamevalue').value=custom;
      document.getElementById('game_value').innerHTML=custom;
      document.getElementById('Logs').innerHTML +="<p>"+ ++i +">>"+logs+" "+custom+"</p>"+"\n";
    }
  }
  
</script>
<!--js-ends-->
</div>
</body>
</html>