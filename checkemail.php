<?php
include("dbconfig/dbconnect.php");


    if(isset($_POST['email'])){
        $email=$_POST['email'];
        $sql = "SELECT email FROM teacher WHERE email = '$email'";
        $sql1 = "SELECT email FROM student WHERE email = '$email'";
        $select = mysqli_query($conn, $sql);
        $select1 = mysqli_query($conn, $sql1);
        // echo $checkrow=mysqli_num_rows($select);
        if (mysqli_num_rows($select) > 0) {
            echo 1;
          
        }else if(mysqli_num_rows($select1) > 0)
        {   
            echo 1;
        }   
        
        else{
            echo 0;
        }
      
    }elseif(isset($_POST['email1'])){
        $email=$_POST['email1'];
        $sql = "SELECT email FROM student WHERE email = '$email'";
        $sql1 = "SELECT email FROM teacher WHERE email = '$email'";
        $select = mysqli_query($conn, $sql);
        $select1 = mysqli_query($conn, $sql1);
        // echo $checkrow=mysqli_num_rows($select);
        if (mysqli_num_rows($select) > 0) {
            echo 1;
          
        }
         if(mysqli_num_rows($select1) > 0)
        {   
            echo 1;
        }  
        else{
            echo 0;
        }
      
    }
   
    


?>