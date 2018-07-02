<?php
require('getdb.php');
include('header.php');
 if(!isset($_SESSION)) 
    { 
     session_start(); 
    }

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
#tbl tr:hover{
	  background-color: #f1f1f1;
}
body{
background-attachment:fixed;
background-size:cover;	
}
.disabled{
  pointer-events:none;
}
</style>
<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("srch");
  filter = input.value.toUpperCase();
  table = document.getElementById("mytable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</head>
<body background="blue.jpg">
<div class="container bg-danger">
</br><h2 style="font-family:algerian; color:midnightblue;"><center><b>LIST OF MOVIES</b></center></h2>
</br></br>
<div class="col-lg-12 input-group">
            <input type="text" onkeyup="myFunction()" placeholder="Search..." class="form-control" id="srch"/>
			</div></br></br>  			
  <div class="table-responsive">          
  <table class="table col-lg-12" id="mytable">
    <thead>
      <tr class="bg-primary">
        <th class="col-lg-6"><center>MOVIES TITLE</center></th>
        <th class="col-lg-offset-1 col-lg-4"><center>RATE HERE</center></th>
      </tr>
    </thead>
    <tbody id="tbl">
	<?php
	$x=$_GET['id'];
	if($x=='page1'){
	$query= "SELECT title,id FROM movies where id<=300";
	}
	if($x=='page2'){
	$query= "SELECT title,id FROM movies where id>300 and id<=600";
	}
	if($x=='page3'){
	$query= "SELECT title,id FROM movies where id>600 and id<=900";
	}
	if($x=='page4'){
	$query= "SELECT title,id FROM movies where id>900 and id<=1200";
	}
	if($x=='page5'){
	$query= "SELECT title,id FROM movies where id>1200 and id<=1500";
	}
	if($x=='page6'){
	$query= "SELECT title,id FROM movies where id>1500";
	}

$res=mysqli_query($con,$query);
if(mysqli_num_rows($res)>0){
while($row=mysqli_fetch_array($res)){
	
	?>
	<tr class="bg-danger">
	<td><?php echo $row['title'];?></td>
	<td><center><div class="rating">
   <label class="glyphicon glyphicon-star rate1" style="color:white;" name="rating1" value="1" id="<?php echo $row['title'].'1';?>"> </label>
   <label class="glyphicon glyphicon-star rate2" style="color:white;" name="rating2" value="2" id="<?php echo $row['title'].'2';?>"> </label>
   <label class="glyphicon glyphicon-star rate3" style="color:white;" name="rating3" value="3" id="<?php echo $row['title'].'3';?>"> </label>
   <label class="glyphicon glyphicon-star rate4" style="color:white;" name="rating4" value="4" id="<?php echo $row['title'].'4';?>"> </label>
   <label class="glyphicon glyphicon-star rate5" style="color:white;" name="rating5" value="5" id="<?php echo $row['title'].'5';?>"> </label>
</div></center>
</td>
	</tr>
	<?php 
}
}?>
</tbody>
	</table>
</div>

<?php
$query2="select title,rating from user_rating where user_id=".$_SESSION['cust_id']."";
$query2_run=mysqli_query($con,$query2);
if(mysqli_num_rows($query2_run)>0){
	while($res2=mysqli_fetch_array($query2_run)){
$_SESSION['temp']=$res2['rating'];
$_SESSION['title']=$res2['title'];

?>
<script>
$(document).ready(function(){
var temp="<?php echo $_SESSION['temp'] ;?>";
if(temp==1)
{
document.getElementById("<?php echo $_SESSION['title'].'1';?>").style.color="#ffa726";
}
if(temp==2)
{
	document.getElementById("<?php echo $_SESSION['title'].'1';?>").style.color="#ffa726";
	document.getElementById("<?php echo $_SESSION['title'].'2';?>").style.color="#ffa726";

}
if(temp==3)
{
	document.getElementById("<?php echo $_SESSION['title'].'1';?>").style.color="#ffa726";
	document.getElementById("<?php echo $_SESSION['title'].'2';?>").style.color="#ffa726";
	document.getElementById("<?php echo $_SESSION['title'].'3';?>").style.color="#ffa726";
}
if(temp==4)
{
	document.getElementById("<?php echo $_SESSION['title'].'1';?>").style.color="#ffa726";
	document.getElementById("<?php echo $_SESSION['title'].'2';?>").style.color="#ffa726";
	document.getElementById("<?php echo $_SESSION['title'].'3';?>").style.color="#ffa726";
	document.getElementById("<?php echo $_SESSION['title'].'4';?>").style.color="#ffa726";
}
if(temp==5)
{
	document.getElementById("<?php echo $_SESSION['title'].'1';?>").style.color="#ffa726";
	document.getElementById("<?php echo $_SESSION['title'].'2';?>").style.color="#ffa726";
	document.getElementById("<?php echo $_SESSION['title'].'3';?>").style.color="#ffa726";
	document.getElementById("<?php echo $_SESSION['title'].'4';?>").style.color="#ffa726";
	document.getElementById("<?php echo $_SESSION['title'].'5';?>").style.color="#ffa726";
}
	});
</script>
<?php }
}
?>
<script>
$(document).ready(function(){
$('.rate1').click(function(){
var rating=$(this).attr('value');
var movie=$(this).parentsUntil("tr").prev().text();
window.location.href="rateanalysis.php"+'?rate='+rating+'&movie='+movie+'&id='+'<?php echo $x ;?>';
});	

$('.rate2').click(function(){
var rating=$(this).attr('value');
var movie=$(this).parentsUntil("tr").prev().text();	
window.location.href="rateanalysis.php"+'?rate='+rating+'&movie='+movie+'&id='+'<?php echo $x ;?>';
});

$('.rate3').click(function(){
var rating=$(this).attr('value');
var movie=$(this).parentsUntil("tr").prev().text();	
window.location.href="rateanalysis.php"+'?rate='+rating+'&movie='+movie+'&id='+'<?php echo $x ;?>';
});

$('.rate4').click(function(){
var rating=$(this).attr('value');
var movie=$(this).parentsUntil("tr").prev().text();	
window.location.href="rateanalysis.php"+'?rate='+rating+'&movie='+movie+'&id='+'<?php echo $x ;?>';
});

$('.rate5').click(function(){
var rating=$(this).attr('value');
var movie=$(this).parentsUntil("tr").prev().text();
window.location.href="rateanalysis.php"+'?rate='+rating+'&movie='+movie+'&id='+'<?php echo $x ;?>';
});
});
</script>
</div>
</br></br>
<center><div class="row">
<ul class="pagination">
    <li><a href="rating.php?id=page1" style="color:black;">Page1</a></li>
    <li><a href="rating.php?id=page2" style="color:black;">Page2</a></li>
    <li><a href="rating.php?id=page3" style="color:black;">Page3</a></li>
    <li><a href="rating.php?id=page4" style="color:black;">Page4</a></li>
    <li><a href="rating.php?id=page5" style="color:black;">Page5</a></li>
	<li><a href="rating.php?id=page6" style="color:black;">Page6</a></li>
</ul></div></center>
</body>
</html>