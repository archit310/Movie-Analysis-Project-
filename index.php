<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap-3.3.7-dist\css\bootstrap.min.css"/>
<link rel="stylesheet" href="wow/animate.css"/>
 <script src="wow/wow.min.js"></script>
<script src="jquery/jquery-3.1.1.min.js"></script>
<script src="bootstrap-3.3.7-dist\js\bootstrap.min.js"></script>
<script src="angular.min.js"></script> 
<script>
new WOW().init();
</script>
<style>
body{
	background-image:url('background.jpg');
	background-size:cover;
	background-attachment:fixed;
}
select:focus option:first-of-type {
    display: none;
}
</style>

<script>
$(document).ready(function(){
$("#btn1").click(function(){
$("#reg").toggle();	
});
$("#btn2").click(function(){
$("#log").toggle();	
});
if((window.location.href).indexOf('?id=1')>=0)
{
$("#myModal").modal('show');
$(this).find("#mymodal1").show();	
}
if((window.location.href).indexOf('?id=2')>=0)
{
$("#myModal").modal('show');
$(this).find("#mymodal2").show();		
}
if((window.location.href).indexOf('?id=3')>=0)
{
$("#myModal").modal('show');
$(this).find("#mymodal3").show();	
}
if((window.location.href).indexOf('?id=4')>=0)
{
$("#myModal").modal('show');
$(this).find("#mymodal4").show();	
}
});
</script>
			<div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
		  <label><b>Alert!</b></label>
        </div>
      <div class="modal-body" id="mymodal1" style="display:none;"><center>You Have Already Registered With This Email Id.</br></br><b>You Need To Log In.</b> </center>
	  </div>
	    <div class="modal-body" id="mymodal2" style="display:none;"><center>You Have Registered Successfully.</br></br><b>Now, You Need To Log In.</b> </center>
	  </div>
	  <div class="modal-body" id="mymodal3" style="display:none;"><center>You Have Entered Wrong Email or Password.</br></br><b>Please, Fill Proper Details.</b> </center>
	  </div>
	   <div class="modal-body" id="mymodal4" style="display:none;"><center>Access Denied.</br></br><b>You Need to Login First.</b> </center>
	  </div>
	  </div></div></div>
	  
</head>
<body ng-app="">

<div class="container">
<div class="row" style="background-color:#ffd480;"><a href="#abt"><img src="rg3.png" height="80px;"></a></br>
&emsp;&emsp;<label style="font-size:42px;font-family:Ubuntu;">RECKBUZZ</label></br>
&emsp;&emsp;<label style="font-size:22px;font-family:BatangChe;color:midnightblue;">Analysis, Substantiate movie recommendations</label></br></br>
<div class="row">
<div class="col-lg-offset-1 col-lg-4">
<button class="btn btn-primary" id="btn1">REGISTER</button>
<div id="reg" style="border-radius:15px;display:none;"></br>
      <h1><center><b>REGISTRATION</b></center></h1>
  </br>    
 <form name="myform" action="reg.php" method="post" autocomplete="off">
    
	<label class="col-lg-4">NAME:</label><span class="col-lg-7 input-group">
	<span class="input-group-addon">
	<i class="glyphicon glyphicon-user"></i></span>
	<input type="text" class="form-control" name="username" placeholder="Enter Full Name" ng-model="username" ng-minlength="3" ng-pattern="/^[a-zA-Z\s]*$/" required/></span>
	<div ng-if="myform.username.$error.required && myform.username.$dirty">This field is mandatory</div>
	<div ng-if="myform.username.$error.minlength">Minimum 3 characters is required</div>
	<div ng-if="myform.username.$error.pattern">Enter Valid Name</div>
	<label class="col-lg-4">E-MAIL:</label><span class="col-lg-7 input-group">
	<span class="input-group-addon">
	<i class="glyphicon glyphicon-envelope"></i></span>
	<input type="email" class="form-control" name="email" placeholder="E-mail Address" ng-model="email" required/></span>
	<div ng-if="myform.email.$error.email">Enter Valid Email Address</div>
	<div ng-if="myform.email.$error.required && myform.email.$dirty">This field is mandatory</div>
	<label class="col-lg-4">AGE:</label><span class="col-lg-7 input-group">
	<span class="input-group-addon">
	<i class="glyphicon glyphicon-asterisk"></i></span>
	<input type="number" class="form-control" name="age" placeholder="Enter Age" required/></span>
	<div ng-if="myform.age.$error.required && myform.age.$dirty">This field is mandatory</div>
	<label class="col-lg-4">GENDER:</label><span class="col-lg-7 input-group dropdown">
	<span class="input-group-addon">
	<i class="glyphicon glyphicon-asterisk"></i></span>
	<select class="form-control" name="gender" required>
	<option>Choose Gender</option>
        <option value="M">M</option>
        <option value="F">F</option>
		</select>
	  </span>
	  <div ng-if="myform.gender.$error.required && myform.gender.$dirty">This field is mandatory</div>
	<label class="col-lg-4">PASSWORD:</label><span class="col-lg-7 input-group">
	<span class="input-group-addon">
	<i class="glyphicon glyphicon-lock"></i></span>
	<input type="password" class="form-control" name="password" placeholder="Password" required/></span>
	<div ng-if="myform.password.$error.required && myform.password.$dirty">This field is mandatory</div>
	<label class="col-lg-4">MOBILE:</label><span class="col-lg-7 input-group">
	<span class="input-group-addon">
	<i class="glyphicon glyphicon-phone"></i></span>
	<input type="number" class="form-control" name="mobile" placeholder="Enter Mobile No." ng-model="mobile" ng-pattern="/^[0-9]{10,10}$/" required/></span>
	<div ng-if="myform.mobile.$error.pattern">Mobile number must have 10 digits</div>
	<div ng-if="myform.mobile.$error.required && myform.mobile.$dirty">This field is mandatory</div>
	<label class="col-lg-4">OCCUPATION:</label><span class="col-lg-7 input-group dropdown">
	<span class="input-group-addon">
	<i class="glyphicon glyphicon-briefcase"></i></span>
      <select class="form-control" name="occ_id" placeholder="Choose Occupation">
	  <option>Choose Occupation </option>
        <option value="1">Administrator</option>
        <option value="2">Artist</option>
        <option value="3">Doctor</option>
        <option value="4">Educator</option>
		<option value="5">Engineer</option>
        <option value="6">Entertainment</option>
        <option value="7">Executive</option>
        <option value="8">Healthcare</option>
		<option value="9">Homemaker</option>
        <option value="10">Lawyer</option>
        <option value="11">Librarian</option>
        <option value="12">Marketing</option>
		<option value="13">None</option>
        <option value="14">Other</option>
        <option value="15">Programmer</option>
        <option value="16">Retired</option>
		<option value="17">Salesman</option>
        <option value="18">Scientist</option>
		<option value="19">Student</option>
		<option value="20">Technician</option>
        <option value="21">Writer</option>

      </select>
	  <div ng-if="myform.occ_id.$error.required && myform.occ_id.$dirty">This field is mandatory</div>
	</span>
	<label class="col-lg-4">ZIP CODE:</label><span class="col-lg-7 input-group">
	<span class="input-group-addon">
	<i class="glyphicon glyphicon-map-marker"></i></span>
	<input type="number" class="form-control" name="zip_code" placeholder="Enter ZIP CODE" ng-model="zip_code" ng-maxlength="6" required/></span>
	<div ng-if="myform.zip_code.$error.required && myform.zip_code.$dirty">This field is mandatory</div>
	<div ng-if="myform.zip_code.$error.maxlength">Zip code contains maximum 6 digits only</div>
	</br>
	
<center><button type="submit" class="btn btn-primary">SIGN UP</button>
<button type="reset" class="btn btn-primary">RESET</center>
 </br></br></form></div></div>
 <div class="col-lg-2"><h4><b>OR</h4></b></div>
 <div class="col-lg-offset-1 col-lg-4">
 <button class="btn btn-primary"id="btn2">LOGIN</button>
 <div id="log" style="border-radius:15px;display:none;"></br>
 
      <h1><center><b>LOGIN</b></center></h1>
  </br>    
 <form action="log.php" method="post" name="myform_login">
    
	<label class="col-lg-3">E-mail:</label><span class="col-lg-7 input-group">
	<span class="input-group-addon">
	<i class="glyphicon glyphicon-envelope"></i></span>
	<input type="email" class="form-control" name="email" placeholder="E-mail Address" ng-model="email" required/></span>
	<div ng-if="myform_login.email.$error.email">Enter Valid Email Address</div>
	<div ng-if="myform_login.email.$error.required && myform_login.email.$dirty">This field is mandatory</div>
	<label class="col-lg-3">Password:</label><span class="col-lg-7 input-group">
	<span class="input-group-addon">
	<i class="glyphicon glyphicon-lock"></i></span>
	<input type="password" class="form-control" name="password" placeholder="Password" ng-model="password" required/></span>
	<div ng-if="myform_login.password.$error.required && myform_login.password.$dirty">This field is mandatory</div></br>
<center><button type="submit" class="btn btn-primary">SIGN IN</button>&emsp;<button type="reset" class="btn btn-primary">RESET</button></center>
 </br></br></form></div></div></br></br></div></br></br>
	</div></br><br>
<div class="row wow bounceInUp data-wow-duration='2s'">
<div class="col-lg-4"></br>
&emsp;&emsp;<label style="font-size:30px;font-family:BatangChe;color:blue;">Rich Effort</label></br></br>
<p style="text-align:justify; font-family:comic sans ms;font-size:20px;">Learn more about movies genre, user category with RECKBUZZ. Browse movies by genre tags, or apply your own search. Explore the movies with expressive search tools.</p>
</div>
<div class="col-lg-offset-1 col-lg-7">
<img src="screen1.jpg"  style="width:100%;background-size:cover";>
</div>
</div></br></br>
<div class="row wow bounceInUp data-wow-duration='2s'">
<div class="col-lg-4"></br>
&emsp;&emsp;<label style="font-size:30px;font-family:BatangChe;color:blue;">More Annex</label></br></br>
<p style="text-align:justify; font-family:comic sans ms;font-size:20px;">Find movies that are similar to the ones you like. Tune the matching category so that the results are "less violent", "more realistic", or "more favourable".</p>
</div>
<div class="col-lg-offset-1 col-lg-7">
<img src="screen2.jpg"  style="width:100%;background-size:cover";>
</div>
</div></br></br>
<div class=" row wow bounceInUp data-wow-duration='2s'">
<div class="col-lg-4"></br>
&emsp;&emsp;<label style="font-size:30px;font-family:BatangChe;color:blue;">Looming Analysis</label></br></br>
<p style="text-align:justify; font-family:comic sans ms;font-size:20px;">RECKBUZZ helps you to find movies you will like and also provides Twitter Reviews for upcomming movies. Rate movies to build a custom taste profile, then RECKBUZZ recommends you to watch trailers of upcoming movies.</p>
</div>
<div class="col-lg-offset-1 col-lg-7">
<img src="screen3.jpg"  style="width:100%;background-size:cover";>
</div>
</div></br></br>	
<div class="row wow bounceInUp data-wow-duration='2s'" id="abt">
<div><h1><b>ABOUT RECKBUZZ</b></h1></br>
<b><p style="text-align:justify; font-family:batang; font-size:18px;">PROPOSED SYSTEM:</br>
Hive summarizes the Big Data makes querying and analyzing easy. It is a data warehouse infrastructure tool which process structured data and resides on top of the Hadoop to make it possible. HiveQL the declarative language supported by HIVE is used to express queries which is like SQL. These queries are then compiled into Map Reduce jobs and then executed on Hadoop cluster. In addition, HiveQL enables users to plug in custom map-reduce scripts into queries. Hadoop Distributed File system (HDFS) with complete Meta data repository is used for storing flat files in the form of tables. HiveQL is used for querying those tables. Hive keeps the metadata in a relational database to support features like schemas and data partitioning. To know the contents of the HDFS in Hadoop, one needs to write Map Reduce programs. Hive supports partitioning of the table on a particular dimension. For example like we partition the MovieLens dataset on the genres, occupation etc. This allows to later creating queries on an organized data model.</br></br>
Exploring: The mechanisms for searching and filtering movies affect which movies a user can rate and therefore have a fundamental influence on the shape of the MovieLens datasets. In RECKBUZZ, the user views the movies in a list and rates those movies. The movies that appear first in search results for a user are those movies that the algorithm predicts that user will rate the highest. The main page of MovieLens is a focus of user attention, and a prime spot to show top-recommended movies to users. The MovieLens interface has always supported searching and filtering operations that allow users to restrict their view to particular groups of movies.</br></br>
Interactive: The Reckbuzz interface has emphasized interacting with movies over interacting with other users. However, through the history of other sites, features have come and gone that draw users’ attention towards more social uses of the system.</br></br>
In RECKBUZZ, we are implementing our systems using Hadoop that has been popular to store and compute Big Data. However, it is not easy to write Hadoop Map Reduce code. Therefore, we use Hive and Hive QL codes to understand the relationships between ratings and the users ’ profiles for the different movies in the Movie Lens data set.</b></br>
</p></div></div><br></br>
<h3 style="font-family:times new roman; color:midnightblue;"><center><b>Copyright&nbsp;&copy;&nbsp;All Right Reserved Streaming At reckbuzz.000webhostapp.com</b></center></h3>	
</div>	
</html>