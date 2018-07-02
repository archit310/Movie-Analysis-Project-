<?php
include('header.php');
?>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>Demo Page</title>
<link rel="stylesheet" href="bootstrap-3.3.7-dist\css\bootstrap.min.css"/>
<link rel="stylesheet" href="wow/animate.css"/>
 <script src="wow/wow.min.js"></script>
<script src="jquery/jquery-3.1.1.min.js"></script>
<script src="angular.min.js"></script>
<script src="bootstrap-3.3.7-dist\js\bootstrap.min.js"></script>
<script>new WOW().init();
</script>
<style>
body{
background-attachment:fixed;
background-size:cover;
}
</style>
</head>
<body background="blue.jpg">
<div class="container"></br>
<div class="row">
<form action="" method="POST">
<div class="col-lg-2">
<select class="form-control" name="genre_id" id="select">
	    <option disabled selected>Choose Genre </option>
        <option value="1">Action</option>
        <option value="2">Adventure</option>
        <option value="3">Animation</option>
        <option value="4">Children</option>
		<option value="5">Comedy</option>
        <option value="6">Crime</option>
        <option value="7">Documentary</option>
        <option value="8">Drama</option>
		<option value="9">Fantasy</option>
        <option value="10">Film-Noir</option>
        <option value="11">Horror</option>
        <option value="12">Musical</option>
		<option value="13">Mystery</option>
        <option value="14">Romance</option>
        <option value="15">Sci-Fi</option>
        <option value="16">Thriller</option>
		<option value="17">War</option>
        <option value="18">Western</option>
		</select>
</div>
<div class="col-lg-offset-1 col-lg-1"><button class="btn btn-primary" name="analyze" id="analyze">Submit</button></button>
</div></form></div></br></br>
<div class="row">
<div class="table-responsive" id="mytable">          
  <table class="table col-lg-12" >
    <thead>
      <tr class="bg-primary">
        <th class="col-lg-2">GENDER</center></th>
		<th class="col-lg-2">YEAR</center></th>
		<th class="col-lg-2">GENRE</center></th>
		<th class="col-lg-2">NO. OF RATED USER</th>
		<th class="col-lg-2">AVERAGE RATING</th>
      </tr>
    </thead>
    <tbody id="tbl" class="bg-danger">
<?php 
	if(isset($_POST['analyze'])){
	$Option =$_POST['genre_id'];
$file = file("file_".$Option.".txt");
$length=count($file); 
$lines= array_slice($file,0,$length);
for($i=0;$i<$length;$i++){
	?><tr>
	<?php for($j=0;$j<=7;$j++){
		if($j==0||$j==2||$j==3)
	continue;
?><td class="col-lg-2">
<?php $text=explode("\n", $lines[$i]);
$data=explode(" ",$text[0]);
echo $data[$j];
?>
	</td>
	<?php
	}?>
	<?php
	}?>
	<?php
	}?></tr>
</tbody></table>
</div></div>
</div>
</body>
</html>