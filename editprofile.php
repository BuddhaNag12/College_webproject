<?php
session_start();

include_once("dbconfig/dbconnect.php");
if (isset($_SESSION['teacher_auth'])) {

$uid=$_SESSION['t_id'];
$t_email=$_SESSION['t_email'];
$sql=mysqli_query($conn,"SELECT *FROM teacher where id=$uid");

$row=mysqli_fetch_assoc($sql);
}elseif ($_SESSION['student_auth']) {
    $uid=$_SESSION['s_id'];
    $s_email=$_SESSION['s_email'];
    $sql=mysqli_query($conn,"SELECT *FROM student where id=$uid");

        $row=mysqli_fetch_assoc($sql);
}


if(isset($_POST['drop']))
{
    if (isset($_SESSION['teacher_auth'])){
        drop_t();
       
    }elseif ($_SESSION['student_auth']) {
        
        drop_s();
    }
}
if(isset($_POST['submit']))
{

    if (isset($_SESSION['teacher_auth'])){
        update_teacher();
        
    }elseif ($_SESSION['student_auth']) {
        
        update_student();
    }
  
}
if(isset($_POST['updatepicture']))
{
    if (isset($_SESSION['teacher_auth'])){
     updatepicture_teacher();
    header("editprofile.php");
    }elseif ($_SESSION['student_auth']) {
        updatepicture_student();
    }
}


function drop_t(){

    $id=$_SESSION['t_id'];
    $con=mysqli_connect ("localhost", 'root', '','registration');

    $drop=mysqli_query($con,"DELETE FROM `teacher` WHERE `teacher`.id='$id' ");
    if($drop)
    {
      
        echo "<script>alert('Delete success');
        
        </script>";
        session_destroy();
        header("location:index.php");
       
    }else {
        $_SESSION['failed']=1;
    }
}
function drop_s(){

    $id=$_SESSION['s_id'];
    $con=mysqli_connect ("localhost", 'root', '','registration');

    $drop=mysqli_query($con,"DELETE FROM `student` WHERE `student`.id='$id'");
    if($drop)
    {
        
        
        session_destroy();
        header("location:index.php");
       
    }else {
       $_SESSION['failedD']=true;
    }
}


function updatepicture_teacher()
{
    $id=$_SESSION['t_id'];
    $con=mysqli_connect ("localhost", 'root', '','registration');
  

   
            $files=$_FILES['files'];
            $filename= $files['name'];
            $fileerror= $files['error'];
            $filetmp=$files['tmp_name'];
            $fileext= explode('.',$filename);
            $filecheck= strtolower(end($fileext));
            $fileextstored= array('jpg','jpeg','png');
            if(in_array($filecheck,$fileextstored)){
                $upload_path='teacher_images/'.$filename;
                move_uploaded_file($filetmp,$upload_path);
            }
            $updateimage=mysqli_query($con,"update teacher set image='$upload_path' where id='$id'");

            if($updateimage)
            {
        
              
                $_SESSION['successimg']=1;
            }else{
              echo 'Failed';
        }  
    }   

    function updatepicture_student()
{
    $id=$_SESSION['s_id'];
    $con=mysqli_connect ("localhost", 'root', '','registration');
  

   
            $files=$_FILES['files'];
            $filename= $files['name'];
            $fileerror= $files['error'];
            $filetmp=$files['tmp_name'];
            $fileext= explode('.',$filename);
            $filecheck= strtolower(end($fileext));
            $fileextstored= array('jpg','jpeg','png');
            if(in_array($filecheck,$fileextstored)){
                $upload_path='student_images/'.$filename;
                move_uploaded_file($filetmp,$upload_path);
            }
            $updateimage=mysqli_query($con,"update student set image='$upload_path' where id='$id'");

            if($updateimage)
            {
        
              
                $_SESSION['successimg']=1;
            }else{
              echo 'Failed';
        }  
    }   
   


function update_teacher()
{
    $id=$_SESSION['id'];
    $con=mysqli_connect ("localhost", 'root', '','registration');
   
    $newname=$_POST['name'];
    $newemail=$_POST['email'];
    $newpassword=$_POST['password'];
    $newphone=$_POST['phone'];
    $newaddress=$_POST['address'];
    $newclass=$_POST['class'];
    
    $update=mysqli_query($con,"update teacher set name='$newname',password='$newpassword',email='$newemail' , phone='$newphone', address='$newaddress', class='$newclass' where id='$id'");
    if($update)
    {
        $_SESSION['successpro']=1;
    }else{
        $_SESSION['failed']=1;
        }


}
function update_student()
{
    $id=$_SESSION['s_id'];
    $con=mysqli_connect ("localhost", 'root', '','registration');
   
    $newname=$_POST['name'];
    $newemail=$_POST['email'];
    $newpassword=$_POST['password'];
    $newphone=$_POST['phone'];
    $newaddress=$_POST['address'];
    $newclass=$_POST['class'];
    
    $update=mysqli_query($con,"update student set name='$newname',password='$newpassword',email='$newemail' , phone='$newphone', address='$newaddress', class='$newclass' where id='$id'");
    if($update)
    {
        $_SESSION['successpro']=1;
    }else{
        $_SESSION['failed']=1;
}


}


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="css/style1.css">
    <script src="javascript/form_process.js"></script>
    <title>Settings</title>

 
</head>
<body>

<header>

        <h1 class="display-4" style="text-align:center;">
        <div class="alert alert-success" role="alert">EDIT YOUR PROFILE</div>
            <?php echo $row['name'];
            ?>
        </h1>
       
<div class="container">
<div class="row">
<div class="img">

    <img class="img-thumbnail rounded float-left" src="<?php echo $row['image'];?>" alt="">
   
   
             <form class="update" action="editprofile.php" method="post" enctype="multipart/form-data">
           
             <input type="file" name="files" id="files" accept="image/*"/>
             <br>
             <label for="image">Update Your image</label>
    <br>
          <input type="submit" onclick="return checkfile();" value="Update" name="updatepicture" id="updatepicture" class="btn btn-secondary">     
        
          </form>
          <?php    if($_SESSION['successimg']){
                echo '<div class="alert alert-success" role="alert">
               success 
              </div>';
                $_SESSION['success']=0;
            }else if( $_SESSION['failed']){
                echo'<div class="alert alert-danger" role="alert">
               failed
              </div>';
            }
            ?>
                </div>


                    <div class="col">
                      
                        <div class="form-group">

                        <form class="update" action="editprofile.php" method="post">
                            <label for="name">Update your name?</label>
                            <input type="text" class="form-control" name="name" id="name" value="<?php echo $row['name'];?>" placeholder="Enter your name." required>
                            <label for="name">Update your email?</label>
                            <input type="text" class="form-control" name="email" id="email"  value="<?php echo $row['email'];?>" placeholder="Enter new email"  required>
                            <label for="name">Update your password?</label>
                            <input type="password" class="form-control" name="password" id="password"  placeholder="Enter new password"  required>
                            <label for="name">Update your Phone?</label>
                            <input type="number" class="form-control" name="phone" id="phone" value="<?php echo $row['phone'];?>" placeholder="Enter new phone" required >
                            <label for="name">Update your address?</label>
                            <input type="text" class="form-control" name="address" id="address" value="<?php echo $row['address'];?>" placeholder="Enter new address" required>
<?php if(isset($_SESSION['student_auth'])){
 echo'  <div class="form-group">
   <label for="classselect">Select Your Class</label>

<select  class="form-control" id="class" name="class">';
?>
<option selected disabled ><?php echo $row["class"];?></option>  
<?php
echo '<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10th</option>
<option value="11">11</option>
<option value="12">12</option>
</select>
</div>';
}                        
    ?>

    <input type="submit" value="Update" name="submit" id="submit"  class="btn btn-primary">
   <a href="myprofile.php" class="btn btn-md btn-danger">Cancel</a>
  

                        </form>
                         </div>    
                         <?php

                        if(isset($_SESSION['successpro']))
                        echo '<div class="alert alert-success" role="alert">
               success 
              </div>';
              ?>
                    </div>
                 
                </div>


</div>

</header>
<footer>
<div class="alert alert-warning" role="alert">
 <a href="#" class="alert-link">Want to drop your account?</a> Click delete account

<form action="#" method="post" name="form"  onsubmit="return confirm('are u sure u want to delete your record')">
<input type="submit" value="Delete account" id="my-button" name="drop" class="btn btn-danger">

</form>

<div class="alert-text">
<?php if (isset($_SESSION['failedD'])) {
   
?>
        <p>Failed to delete</p>
<?php
}
?>
</div>

</div>



</footer>


</body>
</html>