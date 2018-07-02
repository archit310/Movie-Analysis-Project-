<?php
session_start();
include('header.php');	

?>
<html>
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap-3.3.7-dist\css\bootstrap.min.css"/>
<link rel="stylesheet" href="animate.css"/>
 <script src="wow/wow.min.js"></script>
<script src="jquery-3.1.1.min.js"></script>
<script src="bootstrap-3.3.7-dist\js\bootstrap.min.js"></script>
<style>
body{
background-attachment:fixed;
background-size:cover;
}
</style>
</head>
<body background="blue.jpg">
</br></br>
<div class="container">
<center><video id="myvideo_1" height="400" controls onplay="myFunction()">
<source src="myvideo_1.mp4" type="video/mp4"/>
</video></br></br>
<center></br></br>
</div>

<script>
 

// For Video 1
var vid_1 = document.getElementById("myvideo_1");
vid_1.onpause = function(){
	cTime_1=vid_1.currentTime;
	localStorage.setItem("gTime_1", cTime_1);
};
vid_1.ontimeupdate = function(){
	var url = window.location.href;
	var id = url.substring(url.lastIndexOf('?') + 1);
	cTime_1=vid_1.currentTime;
	if(cTime_1==0 && id=='1'){
	cTime_1=0.1;
	}
	if(cTime_1==0){
	window.location.href="payu/PayUMoney_form.php";
	}

	localStorage.setItem("gTime_1",cTime_1);
};
vid_1.onplay=function(){
var gTime_1 = localStorage.getItem("gTime_1");
var length_1=vid_1.duration;
if(gTime_1>=length_1)
{
gTime_1=0;
}
vid_1.currentTime =gTime_1 ;
};
</script>
</body>
</html>