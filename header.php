<?php
session_start(); 
if(isset($_SESSION['id']))
{
}
else
{
	header('location:index.php?id=4');
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>Demo Page</title>
<link rel="stylesheet" href="bootstrap-3.3.7-dist\css\bootstrap.min.css"/>
<link rel="stylesheet" href="animate.css"/>
<script src="jquery/jquery-3.1.1.min.js"></script>
<script src="bootstrap-3.3.7-dist\js\bootstrap.min.js"></script>
<style>
#search{
background-color:white;
margin-top:25px;
}
#head{
background-image:url('images.jpg');
background-size:cover;	
}
</style>
<script>
$(document).ready(function(){
$('#hm').click(function(){
window.location.href='index1.php';	
});
});
</script>
</head>
<body>
<div class="container-fluid">
<div class="row" id="head" style="height:auto;">
<div class="col-lg-2" ><button class="btn btn-primary" id="hm"0 style="border-radius:50%; margin-top:18px;">RB</button></div>
  <div class="col-lg-offset-3 col-lg-4" style="color:white;"><h1><strong>RECKBUZZ</strong></h1></div>
  <div class="col-lg-3" id="search" >
             <div class="col-lg-7"><?php 
			 if(isset($_SESSION['id'])){
				 echo $_SESSION['id'];
			 }
			?></div><div class="col-lg-offset-2 col-lg-3"><a href="logout.php">Logout</a></div>
			</div></br></br>
		</div></div>
		</body>
</html>