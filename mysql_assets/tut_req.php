<?php
session_start();
include_once("../dbconfig/dbconnect.php");
if(isset($_POST['request'])){
    $s_name=$_SESSION['s_name'];
    $s_email=$_SESSION['s_email'];
    $t_email=$_SESSION['t_email'];


    $query=mysqli_query($conn,"INSERT INTO `tuition_requests`(`requid`, `tuid`, `name`) VALUES ('$s_email','$t_email','$s_name')");
    if($query)
    {   
       echo'<div class="alert alert-success" role="alert">
      Requested you can go back
     </div>';
    }else {
    
       echo "failed";
    }

}


?>