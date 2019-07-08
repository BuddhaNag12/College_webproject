<?php
    session_start();
    ?>
<?php
    include_once('dbconfig/dbconnect.php');
    
    
    if(isset($_SESSION['student_auth'])==1)
    {
       
    if(isset($_POST['load'])){
      
      $q = $_POST['q'];
      $p=$_POST['p'];
    	if(empty($q) ){
            $_SESSION['valid']="Enter Valid query";
    
    
       }else{
        $query="SELECT * FROM `teacher` WHERE subjects like '$q%' and city like '$p%' ";
        $result = mysqli_query($conn,$query); 
          }
      
        }
       
      } else {
        header("location:session_components/destroySession.php");
        $_SESSION['session_expaire']="Session expired";
    
       
      }
    // student data
    $uid=$_SESSION['s_id'];
    $query1=mysqli_query($conn,"select * from student where id='$uid' ");
    
          if($row1=mysqli_fetch_assoc($query1))
          {
                $id=$row1['id'];
              $name=$row1['name'];
              $img=$row1['image'];
              $city=$row1['city'];
              $_SESSION['s_name']=$name;
              $_SESSION['s_email']=$row1['email'];

          }
     
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="https://fonts.googleapis.com/css?family=Cinzel&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <script src="javascript/form_process.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
        <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
        <link href="css/search.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Search Results</title>
    </head>
    <body >
        <button onclick="topFunction()" id="myBtn1" title="Go to top">Top</button>

            <div class="ui menu" >
                <div class="ui container" >
                    <a  class="header item h-i" style="  cursor: default;"> <i class=" fas fa-graduation-cap" ></i></a> 
                    <a href="index.php" class="item" >  <i class="fab fa-houzz"> </i> Home</a>  
                    <div class="ui right simple dropdown item " >
                        <img src="<?php echo $row1['image']; ?>" alt="" > <i class="dropdown icon"><?php echo $row1['name'];?></i>
                        <div class="menu ">
                            <a class="active item" href="myprofile.php?id=<?php echo $row1['id'];?>">
                            Account
                            </a>
                            <a class="item" href="editprofile.php">
                            Settings
                            </a>
                            <div class="divider"></div>
                            <!-- <div class="header">Header Item</div> -->
                            <?php
                                if(isset($_SESSION['success']))
                                 {
                                
                                echo'<a class="ui blue basic button item"  onclick="Logout1()">Log out</a>';
                                
                                  $_SESSION['studentauth']=1;
                                } 
                                ?>
                        </div>
                    </div>
                </div>
            </div>
            <h2  class="header-text"> find Your Suitable Teacher</h2>
           
            <div class="ui container-fluid form1">
                <form action="search.php" method="POST" class="ui form">
                    <div class="ui container-fluid form2">
                        <div class="ui icon input">
                            <input type="text" name="q" placeholder="Subject...">
                        </div>
                        <div class="ui icon input">
                            <input class="prompt" type="text" name="p" placeholder="place...">
                        </div>
                        <button name="load" class="ui teal button" id="src">Search</button>
                    </div>

                </form>
            </div>
        </div>
        <hr class="hr">
   
        <div class="dx ui container">
            <div class="ui three stackable cards ">
                <div class="ui link cards dx1">
                    <?php
                        if(!$result )
                        {
                        
                          echo'<div>
                          <div class="ui info message">
                        
                          <div class="header">
                           No result Found!
                          </div>
                          <ul class="list">';
                            echo "<li>Try Searching With different keyword</li>
                            <li>Enter subject name and place </li>
                          </ul>
                        </div>
                        </div>";
                        
                        
                        } 
                        
                        else 
                        {
                        
                        while ($records = mysqli_fetch_assoc($result)){
                        
                         if($records == "0"){
                              echo "<h2>No result found!</h2>";
                              die("ENTER SOME QUERY");
                             
                          }else{     
                          
                          ?>   
                    <div class="blue card"  data-tooltip="<?php echo 'Experience '.$records['experience'].' Years';?>" data-position="top center">
                        <div class="ui small images">
                            <img src="<?php echo $records['image'] ?>" style="width:120px;height:60px;"> 
                        </div>
                        <div class="content">
                            <div class="header">
                                <?php echo $records['name'] ?>
                            </div>
                            <div class="description">
                                <ul style="list-style: none;">
                                    <li>
                                        <?php  echo $records['qualification'] ?>
                                    </li>
                                    <?php   $id=$records['id'] ?>
                                    <li>
                                        <?php  echo $records['dep'] ?>
                                    </li>
                                    <li>
                                        <?php  echo $records['subjects'] ?>
                                    </li>
                                    <li>
                                        <div class="meta"> 
                                            <?php  echo $records['email'] ?>
                                        </div>
                                    </li>
                                </ul>
                                <?php echo'<a class="btn btn-primary" href=profilePage.php?id='.$id.'> View Profile </a>'; ?>
                                <!-- desc --> 
                            </div>
                            <!-- card -->
                        </div>
                        <!-- ui cards --> 
                    </div>
                    <?php
                        }
                        
                        
                        }
                        }
                        ?> 
                </div>
            </div>
        </div>
        </div>  
        <script>
        
        </script>
        <div class="container-fluid footer">
            <footer class="page-footer ">
                <!-- Copyright -->
                <div class="footer-copyright text-center py-3 cp">
                    © 2019 Copyright:
                    <em href="#" style="color:white;text-weight:bold"> Buddha Nag</em>
                    <div class="ui container ">
                        <a href=""  class="icon"><i class="fab fa-twitter-square"></i></a>
                        <a href=""  class="icon"><i class="fab fa-facebook-square"></i></a>
                    </div>
                </div>
                <!-- Copyright -->
            </footer>
            </div>





          <script src="javascript/animationjs.js"></script>
    </body>
</html>