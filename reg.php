<?php
 require'getdb.php';

 if(isset($_POST['username'])&&isset($_POST['email'])&&isset($_POST['password'])&&isset($_POST['age'])&&isset($_POST['gender'])&& isset($_POST['mobile'])&& isset($_POST['occ_id'])&&isset($_POST['zip_code'])){
    $username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$age=$_POST['age'];
	$gender=$_POST['gender'];
	$mobile=$_POST['mobile'];
	$occ_id=$_POST['occ_id'];
	$zip_code=$_POST['zip_code'];
		$query="Select 'email' from register Where email='$email'";
		$query_run=mysqli_query($con,$query);
		if(mysqli_num_rows($query_run)>0){
			header('location:index.php?id=1');	
		}
		else{
		$query="Insert into register values('' ,'$username','$email','$password',$age,'$gender','$mobile',$occ_id,'$zip_code','')";
		$query_run=mysqli_query($con,$query);
		$query2="insert into users values ('',$age,'$gender',$occ_id,'$zip_code')";
		$query2_run=mysqli_query($con,$query2);
		header('location:index.php?id=2');
		}
		
 }
	?>