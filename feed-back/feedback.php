<?php
session_start();
include_once("../dbconfig/dbconnect.php");


 if(isset($_POST['submit'])) {


     addfeedback();

    // echo "<strong>Name</strong>: ".$name."</br>";
    // echo "<strong>Email</strong>: ".$email."</br>";
    //         echo "<strong>Message</strong>: ".$message."</br>";
    //     echo "<span class='label label-info'>Your feedback has been submitted with above details!</span>";

}



function addfeedback()
{
   
    $con=mysqli_connect ("localhost", 'root', '','registration');
    $name = strip_tags($_POST['name']);
    $email = strip_tags($_POST['email']);
    $message = strip_tags($_POST['message']);

        $sql="INSERT INTO `feedback`(`name`, `email`, `message`) VALUES ('$name','$email','$message')";
        
        $query=mysqli_query($con,$sql);
           // echo "The operation was a success!"; 
        

        if(!$query){
            die('Not connected : ' . mysqli_connect_error());

      
        }else{
           
            // echo' <div class="ui success message">
            // <i class="close icon"></i>
            // <div class="header">
            //     Your user registration was successful.
            // </div>
            // <p>You may now log-in with the username you have chosen</p>
            // </div>';
            echo "success";
            echo "<script>alert('success');</script>";
            header("location:index.php");
            
        }
}
?>