<?php
session_start();
include_once("../dbconfig/dbconnect.php");
$uid=$_SESSION['t_id'];
$time=$_POST['timing'];
$address=$_POST['address'];
$classes=$_POST['class'];


$addcoaching=mysqli_query($conn,"INSERT INTO `available`(`t_id`, `timing`, `coaching_center_address`, `coaching_center_available`) VALUES ('$uid','$time','$address','$classes')");

if($addcoaching)
{
  $_SESSION['addcenter']= "success";
  $_SESSION['delete']=null;
  header("location:../myprofile.php");
}else {
  $_SESSION['addcenter']= "failed";
 
}



?>