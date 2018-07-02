<?php
require('header.php');
include('getdb.php');
$link=$_SERVER['PHP_SELF'].$_SERVER['QUERY_STRING'];
if(isset($link)&& isset($_SESSION['id'])&&(function_exists('date_default_timezone_set'))) {
    date_default_timezone_set("Asia/Kolkata");
}
	$link='index1';
$data=$_SESSION['cust_id'].' '.$_SESSION['name'].' '.date("Y-m-d").' '.date("h:i:sa").' '.$link;
file_put_contents('sessionfile.txt',$data.PHP_EOL,FILE_APPEND );
$query="select max(cust_id) from register";
$query_run=mysqli_query($con,$query);
$res=mysqli_fetch_array($query_run);
$query2="select max(id) from movies";
$query2_run=mysqli_query($con,$query2);
$res2=mysqli_fetch_array($query2_run);
if($_SESSION['id']=='prateekmittal075@gmail.com')
{
?>
<script>
$(document).ready(function(){
$('#admin').show();
});
</script>	
<?php
}
if(isset($_POST['add_movie']))
{
$movie_id=$_POST['movie_id'];
$title=$_POST['title'];
$release_date=$_POST['release_date'];
$genre_id=$_POST['genre'];
$query="INSERT INTO `movies`(`id`, `title`, `release_date`) VALUES($movie_id,'$title','$release_date')";
$query_run=mysqli_query($con,$query);
$query_2="INSERT INTO `genres_movies`(`movie_id`,`genre_id`) VALUES($movie_id,$genre_id)";
$query_run_2=mysqli_query($con,$query_2);	
}
?>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="stylesheet" href="bootstrap-3.3.7-dist\css\bootstrap.min.css"/>
<link rel="stylesheet" href="wow/animate.css"/>
 <script src="wow/wow.min.js"></script>
<script src="jquery/jquery-3.1.1.min.js"></script>
<script src="bootstrap-3.3.7-dist\js\bootstrap.min.js"></script>
<script>new WOW().init();
</script>
<style>
* {
box-sizing:border-box;
}
body{
background-attachment:fixed;
background-size:cover;
}

@keyframes fade1{
  from {opacity:.4} 
  to {opacity: 1}
}
@keyframes fade2{
  from {opacity:.4} 
  to {opacity: 1}
}
@keyframes fade3{
  from {opacity:.4} 
  to {opacity: 1}
}
@keyframes fade4{
  from {opacity:.4} 
  to {opacity: 1}
}
@keyframes fade5{
  from {opacity:.4} 
  to {opacity: 1}
}
@keyframes fade6{
  from {opacity:.4} 
  to {opacity: 1}
}

#btn1,#btn2,#btn3,#btn4,#btn5,#btn6{
height:120px;
border-radius:50%;
}
.dot {
  height: 13px;
  width: 13px;
  background-color:white;
  margin:0 2px;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color:lightblue;
}

.cnlist{
	background-color:lightblue;

}
.cnlist:hover{
	box-shadow:0px 0px 15px lightblue;
}
#foot{
background-image:url('images.jpg');
background-size:cover;
}
select:focus option:first-of-type {
    display: none;
}
</style>

<script>
$(document).ready(function(){
$('#btn2[data-toggle="modal"]').click(function(){
$("#adminid").show();
$("#genreid").hide();
$("#catid").hide();
});
$('#btn4[data-toggle="modal"]').click(function(){
$("#genreid").show();
$("#catid").hide();
$("#adminid").hide();
});
$('#btn5[data-toggle="modal"]').click(function(){
$("#catid").show();
$("#genreid").hide();
$("#adminid").hide();
});
$("#btn3").click(function(){
window.location.href='rating.php?id=page1';
});
$('#btn1').click(function(){
window.location.href='profile.php';
});
$("#btn6").click(function(e){
$("#contact").toggle(1000);
window.scrollTo(0,350);
});
$("#analyze").click(function(){
var i=$("#select option:selected").val();
if(i==1)
{
	window.open(
  "pergenre_1.txt",'_blank'
);
}
if(i==2)
{
	window.open(
  "pergenre_2.txt",'_blank'
);
}
if(i==3)
{
	window.open(
  "pergenre_3.txt",'_blank'
);	
}
if(i==4)
{
	window.open(
  "pergenre_4.txt",'_blank'
);	
}
if(i==5)
{
	window.open(
  "pergenre_5.txt",'_blank'
);
}
});
$("#subscribe").click(function(ev){
ev.preventDefault();
$("#subs").hide();
$("#subsmsg").show();
$()
});

$("body").scrollTop(0);
});
</script>
<script>
var step=0;
var slideIndex=0;
function slideit(){
	var i;
    var dots = document.getElementsByClassName("dot");
if(step<6){
	step++;
document.getElementById("fd").style.animationName = "fade"+step;
document.getElementById("fd").style.animationDuration = "1.5s";
document.getElementById('myimage').src=("image"+step+".jpg");

}
else
{
step=1;
document.getElementById("fd").style.animationName = "fade"+step;
document.getElementById("fd").style.animationDuration = "1.5s";
document.getElementById('myimage').src=("image1.jpg");
}
   slideIndex++;
    if (slideIndex>6) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    } 
    dots[slideIndex-1].className += " active";
setTimeout(slideit,2000);
}
</script>
</head>
<body onload="slideit()" onload="slideit2()" background="blue.jpg">

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="container-fluid">
 <div class="modal fade" id="overlay">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
      <div class="modal-body">
     <div class="row"  id="genreid" style="display:none;"><h1><center><b>GENRES</b></center></h1></br>
     <div class="col-lg-4">
	<a href="genre.php?gid=Action" target="_blank" class="list-group-item list-group-item-warning">ACTION</a>
	<a href="genre.php?gid=Adventure" target="_blank" class="list-group-item list-group-item-warning">ADVENTURE</a>
	<a href="genre.php?gid=Animation" target="_blank" class="list-group-item list-group-item-warning">ANIMATION</a>
	<a href="genre.php?gid=Children" target="_blank" class="list-group-item list-group-item-warning">CHILDREN</a>
	<a href="genre.php?gid=Comedy" target="_blank" class="list-group-item list-group-item-warning">COMEDY</a>
	<a href="genre.php?gid=Crime" target="_blank" class="list-group-item list-group-item-warning">CRIME</a>
	</div>
	<div class="col-lg-4">
   
	<a href="genre.php?gid=Documentary" target="_blank" class="list-group-item list-group-item-warning">DOCUMENTARY</a>
	<a href="genre.php?gid=Drama" target="_blank" class="list-group-item list-group-item-warning">DRAMA</a>
	<a href="genre.php?gid=Fantasy" target="_blank"class="list-group-item list-group-item-warning">FANTASY</a>
	<a href="genre.php?gid=Film-Noir" target="_blank" class="list-group-item list-group-item-warning">FILM-NOIR</a>
	<a href="genre.php?gid=Horror" target="_blank" class="list-group-item list-group-item-warning">HORROR</a>
	<a href="genre.php?gid=Musical" target="_blank" class="list-group-item list-group-item-warning">MUSICAL</a>
	</div>
	<div class="col-lg-4">
	<a href="genre.php?gid=Mystery" target="_blank" class="list-group-item list-group-item-warning">MYSTERY</a>
	<a href="genre.php?gid=Romance" target="_blank" class="list-group-item list-group-item-warning">ROMANCE</a>
	<a href="genre.php?gid=Sci-Fi" target="_blank" class="list-group-item list-group-item-warning">SCI-FI</a>
	<a href="genre.php?gid=Thriller" target="_blank" class="list-group-item list-group-item-warning">THRILLER</a>
	<a href="genre.php?gid=War" target="_blank" class="list-group-item list-group-item-warning">WAR</a>
	<a href="genre.php?gid=Western" target="_blank" class="list-group-item list-group-item-warning">WESTERN</a>
	</div>
 </div>
 
    <div class="row" id="catid" style="display:none;"><h1><center><b>CATEGORY</b></center></h1></br></br>
	<div class="col-lg-4">
	<a href="cat.php?gid=Administrator" target="_blank" class="list-group-item list-group-item-warning">ADMINISRATOR</a>
	<a href="cat.php?gid=Artist" target="_blank" class="list-group-item list-group-item-warning">ARTIST</a>
	<a href="cat.php?gid=Doctor" target="_blank" class="list-group-item list-group-item-warning">DOCTOR</a>
	<a href="cat.php?gid=Educator" target="_blank" class="list-group-item list-group-item-warning">EDUCATOR</a>
	<a href="cat.php?gid=Engineer" target="_blank" class="list-group-item list-group-item-warning">ENGINEER</a>
	<a href="cat.php?gid=Entertainment" target="_blank" class="list-group-item list-group-item-warning">ENTERTAINMENT</a>
	<a href="cat.php?gid=Executive" target="_blank" class="list-group-item list-group-item-warning">EXECUTIVE</a>
	</div>
	<div class="col-lg-4">
    <a href="cat.php?gid=Healthcare" target="_blank" class="list-group-item list-group-item-warning">HEALTH-CARE</a>
	<a href="cat.php?gid=Homemaker" target="_blank" class="list-group-item list-group-item-warning">HOME-MAKER</a>
	<a href="cat.php?gid=Lawyer" target="_blank" class="list-group-item list-group-item-warning">LAWYER</a>
	<a href="cat.php?gid=Librarian" target="_blank" class="list-group-item list-group-item-warning">LIBRARIAN</a>
	<a href="cat.php?gid=Marketing" target="_blank" class="list-group-item list-group-item-warning">MARKETING</a>
	<a href="cat.php?gid=None" target="_blank" class="list-group-item list-group-item-warning">NONE</a>
	<a href="cat.php?gid=Other" target="_blank" class="list-group-item list-group-item-warning">OTHER</a>
	</div>
	<div class="col-lg-4">
	<a href="cat.php?gid=Programmer" target="_blank" class="list-group-item list-group-item-warning">PROGRAMMER</a>
	<a href="cat.php?gid=Retired" target="_blank" class="list-group-item list-group-item-warning">RETIRED</a>
	<a href="cat.php?gid=Salesman" target="_blank" class="list-group-item list-group-item-warning">SALESMAN</a>
	<a href="cat.php?gid=Scientist" target="_blank" class="list-group-item list-group-item-warning">SCIENTIST</a>
	<a href="cat.php?gid=Student" target="_blank" class="list-group-item list-group-item-warning">STUDENT</a>
	<a href="cat.php?gid=Technician" target="_blank" class="list-group-item list-group-item-warning">TECHNICIAN</a>
	<a href="cat.php?gid=Writer" target="_blank" class="list-group-item list-group-item-warning">WRITER</a>
	</div>
 </div>
 
   <div class="row" id="adminid" style="display:none;"><h1><center><b>ADMIN</b></center></h1></br>
<div class="col-lg-offset-2 col-lg-8 bg-warning" style="border-radius:15px;"></br>   
 <form action="" method="POST" autocomplete="off">
	<label class="col-lg-4">Movies-Id:</label><span class="col-lg-8">
	<input type="number" class="form-control" name="movie_id" placeholder="Enter Movies-Id"/></span></br></br>
	<label class="col-lg-4">Title:</label><span class="col-lg-8">
	<textarea class="form-control" style="resize:none;" name="title" placeholder="Enter Title"></textarea></span></br></br></br>
	<label class="col-lg-4">Release-Date:</label><span class="col-lg-8">
	<input type="text" class="form-control" name="release_date" placeholder="YYYY-MM-DD"/></span></br></br></br>
	<label class="col-lg-4">Select Genre:</label><span class="col-lg-8">
	<select class="form-control" name="genre">
	<option>Choose Genre</option>
    <option value="1">ACTION</option>
	<option value="2">ADVENTURE</option>
	<option value="3">ANIMATION</option>
	<option value="4">CHILDREN</option>
	<option value="5">COMEDY</option>
	<option value="6">CRIME</option>
	<option value="7">DOCUMENTARY</option>
	<option value="8">DRAMA</option>
	<option value="9">FANTASY</option>
	<option value="10">FILM-NOIR</option>
	<option value="11">HORROR</option>
	<option value="12">MUSICAL</option>
	<option value="13">MYSTERY</option>
	<option value="14">ROMANCE</option>
	<option value="15">SCI-FI</option>
	<option value="16">THRILLER</option>
	<option value="17">WAR</option>
	<option value="18">WESTERN</option>
	</select></span></br></br></br>
<center><button type="submit" name="add_movie" class="btn btn-primary">Add Movie</button></center>
 </br></br> </br></form></div>
 </div>
 </div> 
    </div>
  </div>
</div>
</br>
<div class="container">
  <div class="row" id="fd">
<img src="image1.jpg"  style="width:100%" id="myimage" alt="No Image"/></div>
<div style="text-align:center" id="dt">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span> 
</div>
</br></br>
<center>
<div class="row">
<div class="col-lg-2"><button type="button" class="btn btn-info" id="btn1" style="width:120px;"><center><b>PROFILE</b></center></button></div>
<div class="col-lg-2" id="admin" style="display:none;"><button type="button" class="btn btn-info" id="btn2" style="width:120px;" data-toggle="modal" data-target="#overlay"><center><b>ADMIN</b></center></button></div>
<div class="col-lg-2"><button type="button" class="btn btn-info" id="btn3" style="width:120px;"><center><b>RATE HERE</b></center></button></div>
<div class="col-lg-2"><button type="button" class="btn btn-info" id="btn4" style="width:120px;"data-toggle="modal" data-target="#overlay"><center><b>GENRES</b></center></button></div>
<div class="col-lg-2"><button type="button" class="btn btn-info" id="btn5" style="width:120px;"data-toggle="modal" data-target="#overlay"><center><b>CATEGORY</b></center></button></div>
<div class="col-lg-2"><button type="button" class="btn btn-info" id="btn6" style="width:120px;"><center><b>CONTACT</b></center></button></div>
</center></div></br></br>
<div class="container" id="contact" style="display:none; font-family:batang; color:white;">
<h2><strong>CONTACT US:</strong></h2></br>
<div class="col-lg-3 bg-primary"><h2><strong>Nitin Kumar</strong></h2></br>
<p style="font-style:italic;font-size:16px;">Computer Science & Engineering</br>F.G.I.E.T., Raebareli</br>kumarnitinarya3@gmail.com
<h5 class="glyphicon glyphicon-earphone">&nbsp;+91-7068721954</h5></p>
</div>
<div class="col-lg-3 bg-primary"><h2><strong>Prateek Mittal</strong></h2></br>
<p style="font-style:italic;font-size:16px;">Computer Science & Engineering</br>F.G.I.E.T., Raebareli</br>prateekmittal075@gmail.com</br>
<h5 class="glyphicon glyphicon-earphone">&nbsp;+91-8317079843</h5></p>
</div>
<div class="col-lg-3 bg-primary"><h2><strong>Ravi Ranjan</strong></h2></br>
<p style="font-style:italic;font-size:16px;">Computer Science & Engineering</br>F.G.I.E.T., Raebareli</br>ravirsingh1510@gmail.com</br>
<h5 class="glyphicon glyphicon-earphone">&nbsp;+91-8765624515</h5></p>
</div>
<div class="col-lg-3 bg-primary"><h2><strong>Archit Patel</strong></h2></br>
<p style="font-style:italic;font-size:16px;">Computer Science & Engineering</br>F.G.I.E.T., Raebareli</br>architpatel310@yahoo.com</br>
<h5 class="glyphicon glyphicon-earphone">&nbsp;+91-7084270265</h5></p>
</div>
</div></br></br>
<div class="container wow bounceInUp data-wow-duration='2s' bg-primary" style="opacity:0.8" >
<div class="col-lg-2" style="color:white;"></br>
<center><div class="row" style="background-color:rgb(215,201,104);"><h3 style="font-family:Times new roman;"><strong>ANALYTICS</strong></h3></div></center>
<h4 style="font-family:cambria math;">
<a role="button" style="color:white;" data-toggle="collapse" data-target="#pop_2">Top 5 Movies Per Genre</a>
<div class="collapse" id="pop_2">
<select class="form-control" name="year" id="select">
	<option disabled selected>Choose Year</option>
    <option value="1">1993</option>
    <option value="2">1994</option>
    <option value="3">1995</option>
    <option value="4">1996</option>
	<option value="5">1997</option>
</select>
<div class="col-lg-offset-1 col-lg-1"><button class="btn btn-primary" name="analyze" id="analyze">Submit</button></div>
</div></br></br>
<a role="button" data-toggle="collapse" data-target="#pop3" style="color:white;">Top Genre</a></br>
<div class="collapse" id="pop3">
 <ul style="color:white;">
    <li>1994: Drama</li>
	<li>1995: Drama</li>
	<li>1996: Drama</li>
	<li>1997: Drama</li>
 </ul>
</div></br>
<a href="analysis.php" id="more" style="font-family:cambria math; color:white;">Ratings Per Genre</a></br></br>
<form method="POST" action="trial.php">
<center><button class="btn btn-primary" type="submit" name="show_movie">Watch Trailer</button></center>
</form>
</h4>
</div>
<div class="col-lg-8 "></br>
<p style="text-align:justify;font-family:batang;"><b>The film industry has seen many technical changes over the years, making itself adaptable to its evolving audience's mentality and also contributing to that evolution. Using movies ratings & reviews, both target  & audiences and public reviews, we have a glimpse into the change process. Any of these data points, once analyzed, may contribute to greater business intelligence. 
Analytics has delivered some important insights over the past year. Now a days it is easy to obtain readable data from online resources such as the websites ox Office Mojo, BookMyShow.com and many more. If a site like Book My Show has a database of 990GB. It contains all kinds of details about movies like tickets sold, transaction details, information listed on the site. We can use data science to get really good useful information which might be useful for the company and for the entire Film Industry. 
</br></br>
Quick and easy access to data has opened up a few worlds of business questions especially for movie recommendation. If we know the taste of customers, for example which genre of movies customers have booked in past, we can analyze the taste of audience and that too for different regions which might be highly useful for mainstream commercial Cinema. The movie makers uses the analytics to study their Fan base The better they understand customers, the more successful they will be living them the best product. 
</br></br>
After analyzing the user’s ratings, the movie makers can have better understanding about the viewer’s choice expectations which in turn is beneficial for marketing of their movies. This is done by determining the relationship between viewers‟ and their ratings. These findings provide better understanding about viewers‟ expectations and hence movie choice. In RECKBUZZ, we are using MovieLens dataset for the analysis purpose .which is an open dataset collected by GroupLen Research Project at the University of Minnesota.
This dataset is made available for the users on the website to rate the movies. This dataset consists of: 100,000 ratings (1-5) on 1,700 movies from 1000 users. At least 20 movies are rated by each user in this dataset. Each user has rated at least 20 movies.</br></br>
Large scale data set provides the better opportunity to find out much better data relationship in the area of analytics. Here we are implementing our RECKBUZZ using Hadoop that has been popular to store and compute Big Data.</b></br>
</p></div>
<div class="col-lg-2 "style="color:black;font-family:Times new roman;"></br>
<div class="row" style="background-color:rgb(215,201,104);"><h4><strong><center>TWITTER REVIEWS</center></strong></h4></div>
</br><div class="col-lg-12" style="background-color:white;">
<a role="button" data-toggle="collapse"data-target="#pop">Jab Herry Met Sejal</a></br></div>
<div class="collapse" id="pop">
 <ul style="color:white;">
    <li><a href="positive_1.txt" target="_blank" style="color:white;">Positive Response</a></li>
    <li><a href="negative_1.txt" target="_blank" style="color:white;">Negative Response</a></li>
 </ul>
</div></br></br>
<div class="col-lg-12" style="background-color:white;">
<a role="button" data-toggle="collapse"data-target="#pop_3">RAID</a></br></div>
<div class="collapse" id="pop_3">
 <ul style="color:white;">
    <li><a href="positive_2.txt" target="_blank" style="color:white;">Positive Response</a></li>
    <li><a href="negative_2.txt" target="_blank" style="color:white;">Negative Response</a></li>
 </ul>
</div></br></br>
<div class="col-lg-12" style="background-color:white;">
<a role="button" data-toggle="collapse"data-target="#pop_4">HICHKI</a></br></div>
<div class="collapse" id="pop_4">
 <ul style="color:white;">
    <li><a href="positive_3.txt" target="_blank" style="color:white;">Positive Response</a></li>
    <li><a href="negative_3.txt" target="_blank" style="color:white;">Negative Response</a></li>
 </ul>
</div></br></br>
<div class="col-lg-12" style="background-color:white;">
<a role="button" data-toggle="collapse"data-target="#pop_5">AVENGERS: INFINITY WAR</a></br></div>
<div class="collapse" id="pop_5">
 <ul style="color:white;">
    <li><a href="positive_4.txt" target="_blank" style="color:white;">Positive Response</a></li>
    <li><a href="negative_4.txt" target="_blank" style="color:white;">Negative Response</a></li>
 </ul>
</div></br></br>
</div></div>
</br></br></div>
<div class="container-fluid wow data-wow-duration='2s'">
<div class="row" id="foot"></br></br>
<div class="col-lg-3" id="foot-left" style=" color:white;"></br>
<h4 style="font-family:cambria;"><b>LIKE US ON FACEBOOK:</b></h4></br>
<div class="col-lg-offset-1 fb-like bg-success" data-href="https://www.facebook.com/Reckbuzz-106793783340774/" data-width="100" data-action="like" data-share="True"></div>
</h4></div>
<div class="col-lg-offset-1 col-lg-7 ">
<div class="row">
<div class="col-lg-offset-1 col-lg-3" id="cnt1" style="background-color:white; border-radius:50%;">

<script>
var u=1;
var count="<?php echo $res[0] ;?>";
var x=setInterval(function(){
	 document.getElementById("cnt1").innerHTML = "<center>"+"<h1>"+u+"</h1>"+"<h4><strong>USERS.<strong></h4>"+"</center>";
	 u++;
	 if (u>count) {
        clearInterval(x);
    }
}, 18);
</script>
</div>
<div class="col-lg-offset-1 col-lg-3" id="cnt2" style="background-color:white; border-radius:50%;">
<script>
var v=1;
var count2="<?php echo $res2[0] ;?>";
var y=setInterval(function(){
	 document.getElementById("cnt2").innerHTML = "<center>"+"<h1>"+v+"</h1>"+"<h4><strong>MOVIES<strong></h4>"+"</center>";
	 v++;
	 if (v>count2) {
        clearInterval(y);
    }
}, 10);
</script>
</div>
</div></br></br>
<div id="subsmsg" style="display:none; color:white;"><h3><b>THANK YOU FOR SUBSCRIBING US</b></h3></div>
<div class="row" style="color:white;" id="subs"><h4>SUBSCRIBE TO HELP US LET YOU KNOW ABOUT OUR FUTURE CHANGE:</h4>
</br><div class="col-lg-8"><div class="input-group">
<span class="input-group-addon">
<i class="glyphicon glyphicon-user"></i></span>
    <input type="text" class="form-control" name="subs" placeholder="E-mail address"/>
	<div class="input-group-btn">
<button  class="btn btn-primary" type="submit" id="subscribe">SUBSCRIBE</button>
</div></div></div>
</div></br></div>
<button class="btn btn-primary" style="float:right;"onclick="$('body').animate({scrollTop:0},700);">
<a href="#top" style="color:white;">Back To Top</a></button></br>
</div>
</div>
</body>
</html>