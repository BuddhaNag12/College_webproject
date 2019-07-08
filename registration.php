<?php
session_start() ;

include_once("dbconfig/dbconnect.php");


    if((isset($_POST['submit']))){
        adddatateacher();
}

if((isset($_POST['submit1']))){
    adddatdastudent();
}

function adddatdastudent(){
    $con=mysqli_connect ("localhost", 'root', '','registration');
    $name=$_POST['name1'];
    $username=mysqli_real_escape_string($con,$_POST['username1']);
    $pass=md5($_POST['password1']);
    $phone=$_POST['phone1'];
    $address=$_POST['address'];    
    $sub=$_POST['learnsub'];
    $edu=$_POST['education'];
    $per=$_POST['percentage'];
    $sc_uni=$_POST['sc_uni'];
    $files=$_FILES['file'];
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
    $sql="INSERT INTO `student`( `name`, `email`, `password`, `phone`, `address`, `subject`,`academyName`, `class`, `percentage`, `image`) VALUES ('$name','$username','$pass','$phone','$address','$sub','$sc_uni','$edu','$per','$upload_path')";

    $query=mysqli_query($con,$sql);

    
    if(!$query){
        die('Not connected : ' . mysqli_connect_error());

  
    }else{
        $_SESSION['registration']=1;
          
        header("location:loginform.php") ;
        
    }


}
function adddatateacher()
{
   
    $con=mysqli_connect ("localhost", 'root', '','registration');
    $name=$_POST['name'];
    $username=mysqli_real_escape_string($con,$_POST['username']);
    $pass=md5($_POST['password']);
    $sp=$_POST['skill'];
    $exp=$_POST['exp'];
    $edu=$_POST['education'];
    $num=$_POST['phone'];
    $dep=$_POST['depname'];
    $timing=$_POST['timings'];
    $files=$_FILES['file'];
    $city=$_POST['city'];
    $local=$_POST['locality'];
    $latt=$_POST['lat'];
    $lngg=$_POST['lng'];   
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

        $sql="INSERT INTO `teacher`(`name`, `email`, `password`, `phone`, `city`, `address`, `subjects`, `qualification`, `experience`, `timing`, `department`, `image`, `lat`, `lng`)
         VALUES ('$name','$username','$pass','$num','$city','$local','$sp','$edu','$exp','$timing','$dep','$upload_path','$latt','$lngg')";
        $query=mysqli_query($con,$sql);
        

        if(!$query){
            die('Not connected : ' . mysqli_connect_error());

      
        }else{
         $_SESSION['registration']=1;
          
        header("location:loginform.php") ;
            
        }
}

?>