<?php
include 'connection.php';
$id1=$_GET['id'];
//var_dump($id1);
//exit();
mysqli_query($con,"delete from assignment1 WHERE id='$id1'");
mysqli_query($con,"delete from login WHERE id='$id1'");
echo"<script> alert('deleted successfully')</script>" ;
echo"<script>window.location.href-'viewassmt.php';</script>";

?> 