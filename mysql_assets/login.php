<?php
session_start() ;
        include_once("../dbconfig/dbconnect.php");
 
        if(isset($_POST["login"])) 
        {     
           
            $name = $_POST['user']; 
            
            $password = md5($_POST['pass']); 
       
            $result1 = mysqli_query($conn,"SELECT id, email,name, password FROM teacher WHERE email = '$name' AND  password = '$password'");
            $result2 = mysqli_query($conn,"SELECT id, email,name, password FROM student WHERE email = '$name' AND  password = '$password'");
            $records=mysqli_fetch_array($result1);
            $records1=mysqli_fetch_array($result2);
            $id=$records['id'];
            $id1=$records1['id'];
           
            if(mysqli_num_rows($result1) > 0 )
            {   
                 if(!empty($_POST["remember_me"]))
                {
                $hour = time() + 3600 * 24 * 30;
                setcookie('email', $name, $hour);
                setcookie('password', $password, $hour);
                }else{
                  
                        setcookie('email', "");
                        setcookie('password', "");
              
                }
              
                $_SESSION['teacher_auth'] = 1 ;
                $_SESSION['t_id'] = $id ;
                $_SESSION['t_email']=$records['email'];
               header("location:../myprofile.php");
            
            }
            else if(mysqli_num_rows($result2) > 0 )
            {
                if(!empty($_POST["remember_me"]))
                {
                $hour = time() + 3600 * 24 * 30;
                setcookie('email1', $name, $hour);
                setcookie('password1', $password, $hour);
                }else{
                   
                        setcookie('email1', "");
                        setcookie('password1', "");
                 
                }
                $_SESSION['success'] =  "Successfully Logged In";
                $_SESSION['student_auth'] = 1 ;
                $_SESSION['s_id'] = $id1 ;
                $_SESSION['s_user_name']=$records1['name'];
                $_SESSION['s_email']=$records1['email'];
                $_SESSION['signed_in']=true;
                header("Location:../search.php") ;
               
            }
            else if(!mysqli_num_rows($result1) > 0 ||  !mysqli_num_rows($result2) > 0)
            {   
                $_SESSION['errorLogin']=1;
                header( "Location:../loginform.php") ;
               
            }
            else{
                die();
            }
    }
        

?>