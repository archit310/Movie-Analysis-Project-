<?php
include('getdb.php');
include('header.php');
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
?>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>Demo Page</title>
<link rel="stylesheet" href="bootstrap-3.3.7-dist\css\bootstrap.min.css"/>
<link rel="stylesheet" href="wow/animate.css"/>
 <script src="wow/wow.min.js"></script>
<script src="jquery-3.1.1.min.js"></script>
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
<?php
 $query="SELECT title,rated_at,rating FROM user_rating WHERE user_id=".$_SESSION['cust_id']." order by rating desc";
$res=mysqli_query($con,$query);
?>
<div class="container">
</br><h2 style="font-family:algerian; color:midnightblue;"><center><b>LIST OF RATED MOVIES</b></center></h2>
</br></br>
<div class="col-lg-12 input-group">
            <input type="text" onkeyup="myFunction()" placeholder="Search..." class="form-control" id="srch"/>
			</div></br></br>                                                                                
  <div class="table-responsive">          
  <table class="table col-lg-12" id="mytable" style="border:1px solid white;">
    <thead>
      <tr class="bg-primary">
        <th class="col-lg-4"><center>MOVIES TITLE</center></th>
        <th class="col-lg-offset-1 col-lg-2"><center>RATED DATE & TIME</center></th>
        <th class="col-lg-offset-1 col-lg-2"><center>GIVEN RATING</center></th>
      </tr>
    </thead>
    <tbody id="tbl">
<?php
if(mysqli_num_rows($res)>0){
while($row=mysqli_fetch_array($res)){
	?>
	
	<tr class="bg-danger">
	<td><?php echo $row['title'];?></td>
	<td><center><?php echo $row['rated_at'];?></center></td>
	<td><center><?php echo $row['rating'];?></center></td>
	</tr>
<?php }
}
 else{?>
 <script>
    $(window).on('load',function(){
        $('#myModal').modal('show');
    });
</script>
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
		  <label><b>SORRY !</b></label>
        </div>
      <div class="modal-body"><center>You Have Not Rated Any Movie</center>
	  </div>
	  </div></div></div>
<?php
 }?>	
    </tbody>
  </table>
  </div>
</div>

</body></html>