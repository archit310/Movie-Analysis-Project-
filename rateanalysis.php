<?php
include('getdb.php');
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
$rate=$_GET['rate'];
$movie=$_GET['movie'];
$id=$_GET['id'];
if(isset($rate)&&isset($movie)){
$query="Select title from user_rating where user_id=".$_SESSION['cust_id']." and title='".$movie."'";
$query_run=mysqli_query($con,$query);
if(mysqli_num_rows($query_run)>0){
while($row = mysqli_fetch_assoc($query_run)){
if (in_array($movie, $row))
  {
	$query2="update `user_rating` SET `rating`='".$rate."' where `title`='".$movie."'";
	$query2_run=mysqli_query($con,$query2);
	$result=mysqli_query($con,"select id from movies where title='".$movie."'");
	$row = mysqli_fetch_row($result);
  	$query="update `ratings` SET `rating`='".$rate."' where `movie_id`='".$row[0]."'";
	$query_run=mysqli_query($con,$query);
	header('location:rating.php?id='.$id);
  }
}
}	
else
{
	$result=mysqli_query($con,"select id from movies where title='".$movie."'");
	$row = mysqli_fetch_row($result);
	$query="insert into ratings values ('',".$_SESSION['cust_id'].",".$row[0].",".$rate.",NOT NULL)";
	$query_run=mysqli_query($con,$query);
	$query2="insert into user_rating values ('',".$_SESSION['cust_id'].",".$_SESSION['age'].",'".$_SESSION['gender']."',".$_SESSION['occ_id'].",".$_SESSION['zip_code'].",'".$movie."',".$rate.",NOT NULL)";
	$query2_run=mysqli_query($con,$query2);

$link=$_SERVER['PHP_SELF'].$_SERVER['QUERY_STRING'];
if(isset($link)&& isset($_SESSION['id'])&&(function_exists('date_default_timezone_set'))) {
    date_default_timezone_set("Asia/Kolkata");
	$link='rated_movie'.' '.$movie.' '.$rate;
$data=$_SESSION['cust_id'].' '.$_SESSION['name'].' '.date("Y-m-d").' '.date("h:i:sa").' '.$link;
file_put_contents('sessionfile.txt',$data.PHP_EOL,FILE_APPEND );
}
$_SESSION['rate']=$rate;
$_SESSION['movie']=$movie;
header('location:rating.php?id='.$id);
}
}
?>