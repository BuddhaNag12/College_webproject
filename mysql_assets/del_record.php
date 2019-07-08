<?php 
session_start();
include_once("../dbconfig/dbconnect.php");
if(isset($_POST['delete'])){
    deletedata();
  }
  
  
  
  function deletedata()
  {
    $id=$_SESSION['t_id'];
    $con=mysqli_connect ("localhost", 'root', '','registration');
  
    $drop=mysqli_query($con,"DELETE FROM available WHERE t_id='$id'");
    if($drop)
      {
        
          echo "<script>alert('Delete success');
          
          </script>";
         $_SESSION['delete']=1;
         $_SESSION['addcenter']= null;
         header("location:../myprofile.php");
         
      }else{
        $_SESSION['delete']=0;
      }
  
  }


?>