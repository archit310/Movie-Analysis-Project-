<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='';
$mysql_db='moviesjuly';
$con =  mysqli_connect($mysql_host,$mysql_user,$mysql_pass);
$db_selected =  mysqli_select_db($con,$mysql_db);
if (!$db_selected) {
    die (mysqli_connect_error());
}
?>