<?php
include('header.php');
$link=$_SERVER['PHP_SELF'].$_SERVER['QUERY_STRING'];
if(isset($link)&& isset($_SESSION['id'])&&(function_exists('date_default_timezone_set'))) {
    date_default_timezone_set("Asia/Kolkata");
}
	$link='profile';
$data=$_SESSION['cust_id'].' '.$_SESSION['name'].' '.date("Y-m-d").' '.date("h:i:sa").' '.$link;
file_put_contents('sessionfile.txt',$data.PHP_EOL,FILE_APPEND );
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap-3.3.7-dist\css\bootstrap.min.css"/>
<link rel="stylesheet" href="animate.css"/>
 <script src="wow/wow.min.js"></script>
<script src="jquery/jquery-3.1.1.min.js"></script>
<script src="bootstrap-3.3.7-dist\js\bootstrap.min.js"></script> 
<script>
new WOW().init();
</script>
<style>
body{
background-attachment:fixed;
background-size:cover;
}
#propic{
border-radius:50%;
width:120px;
height:120px;
background-image:url('pic.png');
background-size:cover;
}
</style>
<script>
$(document).ready(function(){	
$("#pic").fadeIn();	
$('#rtd').click(function(){	
window.location.href="rated.php";	
});
$('#rate').click(function(){	
window.location.href='rating.php?id=page1';	
});
});
</script>
</head>
<body background="blue.jpg">
<div class="container">
<div class="row" style="background-image:url('profile.jpg');background-size:cover;" >
 <div class="col-lg-12"><h1><center><b>USER PROFILE</b></center></h1>
 </br>
 <center><div class="row" id="propic">
 <img id="pic" src='<?php echo $_SESSION['var'];?>' style="display:none;background-size:cover; border-radius:50%;" width="100%"; height="100%;"> 
 </div></center></div></div>
 <div class="row bg-info">
<center><form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="fileToUpload" id="fileToUpload">
	<input type="submit" value="Upload Image" name="submit"></form></center></div>
 <div class="row bg-danger">
 <div class="col-lg-6"></br></br>
<div class="row"><center><h3><b>YOUR INFORMATION<b></h3></center></br>
<div class=" col-lg-6">
<label>Name:</label> <label><?php echo $_SESSION['name'];?> </label></div></div>
</br><div class="row"><div class=" col-lg-6">
<label>Email:</label> <label><?php echo $_SESSION['id'];?>  </label></div></div>
</br><div class="row"><div class=" col-lg-6">
<label>Age:</label> <label> <?php echo $_SESSION['age'];?> </label></div></div>
</br><div class="row"><div class=" col-lg-6">
<label>Occupation:</label> <label> <?php echo $_SESSION['occ_id'];?> </label></div></div>
</br><div class="row"><div class=" col-lg-6">
 <label>Zip_code:</label> <label> <?php echo $_SESSION['zip_code'];?> </label></div></div>
</br>
<div class="row">
<button class="col-lg-offset-2 col-lg-2 btn btn-primary" id="rate">RATE HERE</button></div></br>
</div>
<div class="col-lg-offset-1 col-lg-5 bg-danger">
</br></br></br></br></br></br><center><button class="btn btn-primary" id="rtd">RATED MOVIES</button></center></br></br></br></br>
</div></div>
 </body>
 </html>