<!DOCTYPE html>
<html">
<head>
    <title>webnotes</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Cute+Font" rel="stylesheet">
<!---style @start---->
<style type="text/css">
html body
{
  margin:0;
  padding: 0;
  font-size: 16px;
  font-family: sans-serif;
}
html
{
  scroll-behavior: smooth!important;
}
.startbtn
{
  position: absolute;
  bottom:20px;
  width: 240px;
  left:50%;
  cursor: pointer;
  font-family: sans-serif;
  letter-spacing: 1px;
  transform: translateX(-50%);
}
.subject {display:none}

.sub-topics{display: inline-block;}
.nav-link:hover{cursor: pointer!important;}
nav{z-index: 5!important;}
.container-fluid
{
  margin: 0!important;
  padding: 0!important;
  position: relative;
}
.banner
{
  opacity: 1;
  background-size: cover;
  background-position: center center;
  height: 60vh;
  width: 100%;
}
.quote
{
  position: relative;
  top:130px;
  margin-left: 215px;
  color:#fff;
  font-size: 35px;
  letter-spacing: 1.5px;
}
.brand-left
{
  margin-left: 200px;
}
.float_right
{
  position: absolute;
  right: 0!important;
  margin-right: 100px;
}
.container2
{
  height: 70vh;
  display:flex;
  position: relative;
  overflow: hidden;
  background-color: rgba(0,100,200,0.1)!important;
  box-shadow: 3px 3px 8px #ccc;
}
.container2:before
{
  content: '';
  position: absolute;
  top:0;
  left:-42%;
  width: 100%;
  height: 100%;
  background-color: #292929;
  opacity: 0.7;
  transform: skewX(30deg);
}
.container1
{
  height: 70vh;
  display:flex;
  position: relative;
  overflow: hidden;
  background-color: rgba(0,100,200,0.1)!important;
  box-shadow: 3px 3px 8px #ccc;
}
.container1:before
{
  content: '';
  position: absolute;
  top:0;
  right:-42%!important;
  width: 100%;
  height: 100%;
  background-color: #292929;
  opacity: 0.7;
  transform: skewX(-30deg);
}
.visual
{
  position: relative;
  top:50%;
  left:50%;
  transform: translate(-50%,-50%);
  height: 65%;
  width:90%;
  overflow: hidden;
  box-sizing: border-box;
  box-shadow: 2px 2px 8px #333;
}
.visual img
{
  height:100%;
  width: 100%;
}
.visual1
{
  border-radius: 5px;
  position: relative;
  top:50%;
  left:50%;
  transform: translate(-50%,-50%);
  height: 75%;
  width:50%;
  overflow: hidden;
  box-sizing: border-box;
  box-shadow: 2px 2px 8px #333;
}
.visual1 img
{
  height:100%;
  width: 100%;
}
.left
{
  width:50%;
  left:0;
  background-color:transparent;
  height: 100%;
  overflow-wrap: break-word;
}
.right
{
  width:50%;
  right:0;
  background-color:transparent;
  height: 100%;
  overflow-wrap: break-word;
}
.lefft
{
  width:50%;
  left:0;
  background-color:transparent;
  height: 100%;
  overflow-wrap: break-word;
}
.rightt
{
  width:50%;
  right:0;
  background-color:transparent;
  height: 100%;
  overflow-wrap: break-word;
}
.caption
{
  text-transform: uppercase;
  font-size: 30px;
  color: #333;
  letter-spacing: 1.5px;
  text-align: center;
  margin-top: 60px!important;
}
.details
{
  color: #333;
  width: 400px;
  word-wrap: break-word;
  margin-top: 30px;
  font-size: 32px;
  font-family: 'Cute Font', cursive;
}
.fa-facebook
{
  color: #191919;
  font-size: 35px;
}
.fa-facebook:hover
{
  color:#3b5998 ;
  font-size: 35px;
  cursor: pointer;
}
.fa-google-plus-square
{
  font-size: 35px;
  color:#191919;
}
.fa-google-plus-square:hover
{
  color:#dd4b39;
  font-size: 35px;
  cursor: pointer;
}
.fa-github-square
{
  color:#191919;
  font-size: 35px;
}
.fa-github-square:hover
{
  color: #ccc;
  font-size: 35px;
  cursor: pointer;
}
.fa-youtube-square
{
  color:#191919;
  font-size: 35px;
}
.fa-youtube-square:hover
{
  color: #bb0000;
  font-size: 35px;
  cursor: pointer;
}
.fa-linkedin
{
  color:#191919;
  font-size: 35px;
}
.fa-linkedin:hover
{
  color: #0077b5;
  font-size: 35px;
  cursor: pointer;
}
#rating
{
  cursor: pointer;
  color: orange;
  font-size: 28px;
  padding: 0px;
  margin: -5px 8px;
}
.owner:hover
{
  text-decoration: underline;
  cursor: pointer;
}
.fa-sync
{
  color: #222;
  font-size: 23px;
  position: relative;
  margin: 0;
  padding: 0;
  animation:roll 3s linear;
  animation-iteration-count: infinite;
}
@keyframes roll
{
  0%{transform: rotate(0deg);}
  100%{transform: rotate(360deg);}
}
@media screen and (max-width: 1024px) {
  .container{display: block!important;height: auto!important;}
  .navbar-brand{margin-left: 0px;}
  .left{display: none;}
  .rightt{display: none;}
  .right{width: 100%;}
  .lefft{width: 100%;}
  .brand-left{margin-left: 0px;}
  .float_right{position: relative;}
  .caption{font-size: 22px;}
  .details{font-size: 12px;width:200px;}
  .banner{height: 30vh;}
  .quote{margin-left: 10px;top:50px;}
  .quote span{position: absolute;margin-top: 8px!important;top: 40px!important;padding: 0!important}
  .quote br{margin: 0px!important;padding: 0!important}
  .container1:before{display: none;}
  .container2:before{display: none;}
  .form{border-left:0px!important;}
  .connect-icons{right: 5px!important;}
  .startbtn{bottom:0;}
  .fa-sync{}
}
</style>
<!---style @end---->
</head>
<body>
<!--main @navbar-->
<nav class="navbar navbar-expand-md bg-info navbar-dark fixed-top">
  <a class="navbar-brand brand-left" href="#" style="letter-spacing:.15em">Web Notes</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="Navbar">
    <ul class="navbar-nav float_right">
      <li class="nav-item">
        <a class="nav-link page-scroll" href="#home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" onclick="document.getElementById('id01').style.display='block';">Topic</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about">About</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link page-scroll" href="#contact">Contact Us</a>
      </li>    
    </ul>
  </div>  
</nav>


<!--end@NavBar-->
<div id="home" class="container-fluid">
    <div class="banner bg-info">
   <div class="quote" style="font-size: 25PX;">D<i class="fas fa-sync"></i> CREATE<br><span style="font-size: 14px;">stop looking start learning!</span></div> 
   <div class="btn btn-lg btn-dark startbtn" onclick="document.getElementById('id01').style.display='block';">Start Learning</div>
  </div>
    <!--modal-box-->
    <div id="id01" class="w3-modal" style="position:fixed;z-index:999!important;">
 <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="z-index: 999!important;">
  <header class="w3-container w3-blue"> 
   <span onclick="document.getElementById('id01').style.display='none'" 
   class="w3-button bg-danger w3-large w3-display-topright">&times;</span>
   <h2>Fields</h2>
  </header>

  <div class="w3-bar w3-border-bottom">
   <button class="tablink w3-bar-item w3-button" onclick="openSubject(event, 'HTML+CSS')">HTML+CSS</button>
   <button class="tablink w3-bar-item w3-button" onclick="openSubject(event, 'jQuerry')">jQuerry</button>
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

  <div id="jQuerry" class="w3-container subject">
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
 //  document.getElementById(subjectName).style.z-index = "20";
  evt.currentTarget.classList.add("w3-light-grey");
}
</script>
<!--modal box ends------------------>
</div><br>
<div class="container display1 container2">
  <div class="left">
    <div class="visual">
      <iframe src="https://drive.google.com/file/d/1U9P11_CY_biqGOmM0uMiVMwCVKcaDWEr/preview" width="100%" height="100%" frameborder="0"></iframe>
    </div>
  </div>
  <div class="right">
    <div class="caption">powerful environment</div>
    <center><div class="details"  style="">An environment with delighful experience, easy to interact with !</div></center>
  </div>
</div><br>
<div class="container display1 container1" style="height: 70vh;background-color: #fff;display: flex;">
  <div class="lefft">
     <div class="caption">Real time simulation</div>
      <center><div class="details">Learn by creating and imitate by your own. It's time to be a smarter learner!!</div></center>
  </div>
  <div class="rightt">
    <div class="visual" style="background-color: #000;">
      <!--
      <iframe frameborder="0" marginheight="0" marginwidth="0" style="margin: 0;padding: 0;" height="100%" width="100%" src="video/video.mp4"></iframe>
      
      <video controls="true" style="margin: 0;padding: 0;" height="100%" width="100%">
        <source  src="https://www.youtube.com/embed/watch?v=kLqHAEUUffo&feature=youtu.be" type="video/mp4">
      </video>
    -->
      <iframe width="100%" height="100%" src="https://www.youtube.com/embed/kLqHAEUUffo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
  </div><br>
<div class="container display1 container2" style="height: 70vh;background-color: #fff;display: flex;">
 <div class="left">
   <div class="visual1">
    <iframe src="https://drive.google.com/file/d/15BGsRBuDVrhlezhcoKCy-NRqwQd0hE38/preview" height="100%" width="auto" frameborder="0" ></iframe>
   </div>
 </div>
  <div class="right">
     <div class="caption">get source code</div>
    <center><div class="details">
      Ready your code by creating your own version 
    </div></center>
  </div>
  </div>
</div><br>
<!--footer----------->
<footer>
    <div class="container-fluid" style="display: flex;height:auto; background-color:#333">
      <div class="left">
        <h6 class="owner" style="position: absolute;color:#fff;font-weight: 200;margin:30px 30px;">terms and conditions</h6>
        <h6 class="owner" style="position: absolute;top:30px;color:#fff;font-weight: 200;margin:30px 30px;"><a onclick="alert('Rishu kumar')">owner details</a></h6>
      </div>
      <div class="right" style="padding: 10px;">
        <div id="contact" class="form" style="color: #fff;border-left: 2px solid #000;padding: 20px;padding-left:50px;height:auto;display: flex;">
        <div style="width: 90%;">
          <h3 style="font-weight: 500; font-family: sans-serif;margin: 3px;letter-spacing: 1px;">Get In Touch</h3>
          <form method="POST" action="feedback">
            @csrf
            <input type="hidden" name="date" value="<?php date_default_timezone_set("Asia/Kolkata"); echo date('Y-m-d') ?>">
            <input style="width: 80%;margin: 3px;padding: 8px;background-color:#292929;border-radius: 5px;color: #fff;outline: none;letter-spacing: 1px;font-size: 14px; border: none;" type="text" name="name" placeholder="Fullname" required="true"><br>

            <input style="width: 80%;margin: 3px;padding: 8px;background-color:#292929;border-radius: 5px;color: #fff;outline: none;letter-spacing: 1px;font-size: 14px; border: none;"  type="email" name="email" placeholder="Email" required="true"><br>

            <input id="rate_us" style="width: 80%;margin: 3px;padding: 8px;background-color:#292929;border-radius: 5px;color: #fff;outline: none;letter-spacing: 1px;font-size: 14px; border: none;display: none;"  type="hidden" name="rate" value="0" placeholder="rate us" required="true">


            <textarea style="width: 80%;margin: 3px;padding: 8px;background-color:#292929;border-radius: 5px;color: #fff;outline: none;letter-spacing: 1px;font-size: 14px; border: none;min-height:85px;"  name="feedback" placeholder="Feedback" required="true"></textarea><br>

             <span style="margin-left: 8px;">Rate Us</span>
            <div id="rating">
              <span id="checked1" onclick="check1()">&#x2606</span>
              <span id="checked2" onclick="check2()">&#x2606</span>
              <span id="checked3" onclick="check3()">&#x2606</span>
              <span id="checked4" onclick="check4()">&#x2606</span>
              <span id="checked5" onclick="check5()">&#x2606</span>
            </div>
            <input type="submit" style="margin: 3px;" name="submit" class="btn btn-lg btn-info">
          </form>
        </div>
       
        <div class="connect-icons" style="right: 80px;position: absolute;margin-top: 40px;">
          <ul style="list-style: none;padding-left: 5px!important;">
            <li><a target="_blank" href="https://www.facebook.com"><i class="fab fa-facebook"></i></a></li>
            <li><i class="fab fa-google-plus-square"></i></li>
            <li><a target="_blank" href="https://github.com/Rishu-kumar/"><i class="fab fa-github-square"></i></li>
            <li><a href="https://www.linkedin.com/in/rishu-kumar-9a39ab148/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="https://youtu.be/kLqHAEUUffo" target="_blank"><i class="fab fa-youtube-square"></i></a></li>
          </ul>
        </div>
      </div>
      </div>
    </div>
</footer>
<script type="text/javascript">
  function check1() {
      //body...
      document.getElementById("rate_us").value = "1";
      document.getElementById('checked1').innerHTML = '&#x2605';
      document.getElementById('checked2').innerHTML = '&#x2606';
      document.getElementById('checked3').innerHTML = '&#x2606';
      document.getElementById('checked4').innerHTML = '&#x2606';
      document.getElementById('checked5').innerHTML = '&#x2606';
      //rating color
      document.getElementById('checked1').style.color="red";
      document.getElementById('checked2').style.color="red";
      document.getElementById('checked3').style.color="red";
      document.getElementById('checked4').style.color="red";
      document.getElementById('checked5').style.color="red";
    }
    function check2() {
      // body...
      document.getElementById("rate_us").value = "2";
      document.getElementById('checked1').innerHTML = '&#x2605';
      document.getElementById('checked2').innerHTML = '&#x2605';
      document.getElementById('checked3').innerHTML = '&#x2606';
      document.getElementById('checked4').innerHTML = '&#x2606';
      document.getElementById('checked5').innerHTML = '&#x2606';
      //rating color
      document.getElementById('checked1').style.color="red";
      document.getElementById('checked2').style.color="red";
      document.getElementById('checked3').style.color="red";
      document.getElementById('checked4').style.color="red";
      document.getElementById('checked5').style.color="red";
    }
    function check3() {
      // body...
      document.getElementById("rate_us").value = "3";
      document.getElementById('checked1').innerHTML = '&#x2605';
      document.getElementById('checked2').innerHTML = '&#x2605';
      document.getElementById('checked3').innerHTML = '&#x2605';
      document.getElementById('checked4').innerHTML = '&#x2606';
      document.getElementById('checked5').innerHTML = '&#x2606';
      //rating color
      document.getElementById('checked1').style.color="yellow";
      document.getElementById('checked2').style.color="yellow";
      document.getElementById('checked3').style.color="yellow";
      document.getElementById('checked4').style.color="yellow";
      document.getElementById('checked5').style.color="yellow";
    }
    function check4() {
      // body...
      document.getElementById("rate_us").value = "4";
      document.getElementById('checked1').innerHTML = '&#x2605';
      document.getElementById('checked2').innerHTML = '&#x2605';
      document.getElementById('checked3').innerHTML = '&#x2605';
      document.getElementById('checked4').innerHTML = '&#x2605';
      document.getElementById('checked5').innerHTML = '&#x2606';
      //rating color
      document.getElementById('checked1').style.color="yellow";
      document.getElementById('checked2').style.color="yellow";
      document.getElementById('checked3').style.color="yellow";
      document.getElementById('checked4').style.color="yellow";
      document.getElementById('checked5').style.color="yellow";
    }
    function check5() {
      // body...
      document.getElementById("rate_us").value = "5";
      document.getElementById('checked1').innerHTML = '&#x2605';
      document.getElementById('checked2').innerHTML = '&#x2605';
      document.getElementById('checked3').innerHTML = '&#x2605';
      document.getElementById('checked4').innerHTML = '&#x2605';
      document.getElementById('checked5').innerHTML = '&#x2605';
      //rating color
      document.getElementById('checked1').style.color="yellow";
      document.getElementById('checked2').style.color="yellow";
      document.getElementById('checked3').style.color="yellow";
      document.getElementById('checked4').style.color="yellow";
      document.getElementById('checked5').style.color="yellow";
    }
</script>
<div style="letter-spacing: 1px;font-family: monospace;background: #111;color: #fff;width: 100%;text-align: center;padding:10px; ">Copyright&copy;2019 WebNotes</div>
</body>
</html>