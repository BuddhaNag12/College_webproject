<?php
    session_start() ;
    include_once("dbconfig/dbconnect.php");
  
    $uid=$_GET['id'];
    $email=$_GET['email'];
    $_SESSION['t_id']=$uid;


    $query=mysqli_query($conn,"select * from teacher where id='$uid' or email='$email' ");
    $query1=mysqli_query($conn,"Select * from available where t_id='$uid'");
    if($row= mysqli_fetch_array($query))
    {
    		 $name=$row['name'];
    		 $img=$row['image'];
             $city=$row['city'];
             $_SESSION['t_email']=$row['email'];
    		 $lat=$row['lat'];
    		 $lng=$row['lng'];
    		$timing=$row['timing'];
    }else{
    	header("location:session_components/destroySession.php");
    	$_SESSION['session_expaire']="Session expired";
    }  
    
    $row1= mysqli_fetch_assoc($query1);
    if($row1>0)
    {
    		 $time=$row1['timing'];
    		 $address=$row1['coaching_center_address'];
    		 $available=$row1['coaching_center_available'];
    		 
    }   
    else{
    	$_SESSION['notavailable']="Not available";
    }
     

    if(isset($_SESSION['s_email'])){
        $s_email=$_SESSION['s_email'];
        $t_email=$_SESSION['t_email'];
       
        $searchT=mysqli_query($conn,"SELECT * FROM `tuition_requests` WHERE requid='$s_email' and tuid='$t_email' ");
    
        if(mysqli_fetch_assoc($searchT)>0){
         
            $disableReq=true;
           
        }else{
        
            $disableReq=false;
        }
    }
  
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Teko&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        <link rel="stylesheet" href="css/profile.css" >
        <title>Profile<?php echo $_POST['id']; ?></title>
    </head>
    <body>
        <div class="container">
            <div class="row profile">
                <div class="col-md-3">
                    <div class="profile-sidebar">
                        <!-- SIDEBAR USERPIC -->
                        <div class="profile-userpic">
                            <div class="d-flex justify-content-start"><img src="<?php echo $img ?>" class="img-responsive" alt="User Picture">  </div>
                        </div>
                        <!-- END SIDEBAR USERPIC -->
                        <!-- SIDEBAR USER TITLE -->
                        <div class="profile-usertitle">
                            <div class="profile-usertitle-name">
                                <?php echo $name ?>
                            </div>
                            <div class="profile-usertitle-job">
                                <input type="hidden" id="lat" name="LAT" value='<?php echo $lat ?>' disabled>
                            </div>
                            <div class="profile-usertitle-job">
                                <input type="hidden" id="lng" name="LNG" value='<?php echo $lng ?>' disabled>
                            </div>
                        </div>
                        <!-- END SIDEBAR BUTTONS -->
                        <!-- SIDEBAR MENU -->
                        <div class="profile-usermenu">
                            <ul class="nav">
                                <li class="active">
                                    <a href="#">
                                    <i class="glyphicon glyphicon-home"></i>
                                    Overview </a>
                                </li>
                                <li>
                                    <a href="search.php">
                                    <i class="glyphicon glyphicon-user"></i>
                                    Search Home </a>
                                </li>
                                    <li>
                                   
 

       <?php if($disableReq==true){
            
            echo'<input type="submit" name="request" class="btn btn-primary" id="request" value="requested" checked disabled>';
          
       }
        else{
            echo'<form action="mysql_assets/tut_req.php" method="post" id="reqForm">
        <input type="submit" name="request" class="btn btn-primary" id="request" value="Request for tuition">
            </form>';
        }
        
            ?>
            <?php if($successReq==true){
            echo '<div class="alert alert-success" role="alert">
           Request Success
        </div>';
        }?>
       
            
                                    </li>
                            </ul>
                        </div>
                        <!-- END MENU -->
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        <strong>Check out where Tutor lives </strong> 
                        <h6>Navigate on the map to see how far he is from you</h6>
                    </div>
                    <div id="map" style="width:100%;height:400px;">
                    </div>
                </div>
            </div>
        </div>
        <div class="container abt">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link  btn btn-outline-info" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="true">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline-info" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline-info" id="adinfo-tab" data-toggle="tab" href="#adinfo" role="tab" aria-controls="adinfo" aria-selected="false">Additional Information</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="about-tab">
                        <div class="col-md-8">
                            Available in : <?php echo $timing; ?>
                            Experience : <?php echo $row['experience'] ." years"; ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="col-md-8">
                            <?php echo "Phone " .$row['phone']; ?>
                            <?php echo "Address " .$row['address']; ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="adinfo" role="tabpanel" aria-labelledby="adinfo-tab">
                        <div class="col-md-12 ">
                            <?php
                                if(isset($_SESSION['notavailable'])){
                                		echo $_SESSION['notavailable'];
                                	}
                                	else{
                                	 echo '<h6> Timing for coaching center:</h6>';
                                
                                		echo $time;
                                
                                
                                	echo
                                	'<h5>Coaching Center address</h5>';
                                	echo $address; 
                                	echo '	<h5>Classes available for</h5>';
                                	echo $available; 
                                }
                                ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            var map;
             	var zoomLevel=13;
            
            
            function initMap()
            {
            //var markr;
            var lat=document.getElementById('lat').value;
            var lng=document.getElementById('lng').value;
            var plat=parseFloat(lat);
            var plng=parseFloat(lng);
            
            var marks = {lat: plat, lng: plng};
            //	alert(''+plat+''+plng);
            //initMap();
            map = new google.maps.Map(document.getElementById('map'), {
                 center: {lat: plat, lng: plng},
                 zoom: zoomLevel,
                 mapTypeControl: false
               });
            
            
            
            var contentString = "<div style='float:left'><img src='<?php echo $img ?>'  height='50' width='50	'></div><div style='float:right; padding: 10px;'><ul style='list-style: none;'><li style='text-transform:uppercase'><?php echo $name ?></li><li>Address<li/><?php echo $city?></div>"
            
            	var infowindow = new google.maps.InfoWindow({
                 content: contentString
               });
            var marker = new google.maps.Marker({
                 position: marks,
                 map: map,
                 title: 'tittle'
               });
            marker.addListener('click', function() {
            	infowindow.open(map, marker);
            });
            
            
            }
            
            
        </script>
        <script async defer
            src=
            "https://maps.googleapis.com/maps/api/js?key=AIzaSyB1vcUsHLsEIaTO3t4Ro8gXIUurrI6j68I&v=3&callback=initMap"></script>
    </body>
</html>