<?php 
 session_start() ;
 include_once("../dbconfig/dbconnect.php");

$id=$_SESSION['id'];

if(isset($_POST['name']) && isset($_POST['email'])){

    $sql=mysqli_query($conn,"SELECT *FROM student WHERE id='$id' ");

    $row=mysqli_fetch_array($sql);


    if(isset($_POST['submit'])){
        $newname=$_POST['name'];
        $newemail=$_POST['email1'];
        $newpassword=$_POST['pass1'];
    
        $oldemail=$_POST['email'];
        $oldpass=$_POST['pass'];
        if($oldemail!=$row['email'] && $oldpass!=$row['password']){
            echo 'username password not valid';
        }else{
           
            $update=mysqli_query($conn,"update student set name='$newname',password='$newpassword',email='$newemail' where id='$id'");
            echo 'updated success';
        }
       
    }

}



?>