<?php
require 'getdb.php';
session_start();
if(isset($_POST['email'])&&isset($_POST['password'])){
	$pass=$_POST['password'];
	$mail=$_POST['email'];
	$query="Select * from register Where email='$mail' && password='$pass'";
if($query_run=mysqli_query($con,$query)){
	if(mysqli_num_rows($query_run)>0){
		$row=mysqli_fetch_assoc($query_run);
		$_SESSION['cust_id']=$row['cust_id'];
		$_SESSION['name']=$row['username'];
		$_SESSION['age']=$row['age'];
		$_SESSION['gender']=$row['gender'];
		$_SESSION['occ_id']=$row['occ_id'];
		$_SESSION['zip_code']=$row['zip_code'];
		$_SESSION['id']=$mail;
		header('location:index1.php');
		}
		else{
		
			header('location:index.php?id=3');
		}
}
}		
?>