<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Sunflower:300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
      <link rel="stylesheet" href="css/register.css">
      <script src="javascript/form_validate.js"></script>
    <title>Register</title>
</head>

<body class="bg">

<?php		
if(isset($_SESSION['studentauth'])==1){
   echo "<script>alert('you must logout first'); </script>";
   echo'<a class="btn btn-md btn-danger" href="session_components/logout.php">Logout</a>';
   die();
}
 ?>



<div class="home">

<a class="btn btn-md btn-danger" href="index.php">
                       home
                       </a>
</div>
   


<div class="container">   
      <div class="row">
       <div class="col-md-6 mx-auto text-center">
               <div class="hero-text">
            
                  <h1 id="t" class="display-5 animate-pop-in" >
                        Sign up  So Students  Can Contact You
                     </h1>
                     <h1 id="s" style="display:none" class="display-5 animate-pop-in" >
                        Sign up To Find Teacher Near You
                     </h1>
                  
                  </div>
       </div>
   </div>
   </div>          <!-- Default checked -->
             <h2 style=" text-align:center;  font-size:100%; font-family: 'Sunflower', sans-serif; color:#FEFEDF;"><b>Register as!</b></h2>
        
             <div class="container"> 
            <div class="row">
         
             <div class="col-md-6 mx-auto text-center"> 
           
             <div class="box1">
             
        <div class="custom-control custom-radio custom-control-inline">
         <input  value="1" class="custom-control-input" type="radio" name="formselector" onClick="displayForm(this)" checked="checked" id="1">
          <label class="custom-control-label" for="1">TEACHER</label>
        </div>
               <div class="custom-control custom-radio custom-control-inline">
               <input value="2" type="radio" name="formselector" onClick="displayForm(this)"  class="custom-control-input" id="2">
                 <label class="custom-control-label" for="2">STUDENT</label>
               </div>
  
                  </div>   
                  <hr>
             </div> 
         </div>
    </div>

 
      <!---Student Form--->
      <div class="container">
         <div class="row">
          <div class="col-md-8 col-lg-4 mx-auto" >
             <div class="myform form ">
            <div class="box2">
            <form style="display:none" id="student"  action="registration.php" method="post" enctype="multipart/form-data">

              
               <div class="form-group">
                     <input type="text" name="name1" data-toggle="tooltip" data-placement="right" title="Enter Full Name" class="name form-control my-input" id="name1" placeholder="Full Name" required>
                  </div>
                  <div class="form-group">
                  
                <input type="text" name="username1"  class="form-control my-input " id="username1" placeholder="username" required>
                <div class="danger" id="infedusername1" >
            
            </div>
                  </div>
                  <div class="form-group">
                     <input type="password" name="password1"  class="form-control my-input"  placeholder="Password" required>
                  </div>
                  <div class="form-group">
                     <input type="password" name="confirmpassword1"  class="form-control my-input" placeholder="Confirm Password" required>
                  </div>
                  
                  
                  <div class="form-group">
                     <input type="number" min="0" name="phone1" id="phone1"  class="form-control my-input" placeholder="Phone">
                  </div>
                  <div class="form-group">
                     <input type="text"  name="address" id="address"  class="form-control my-input" placeholder="Address">
                  </div>
                  <div class="form-group">
                    <input type="text"  name="learnsub" id="sub"  class="form-control my-input" placeholder="Subjects you want to learn">
                 </div>
                 <div class="form-group">
                     <input type="text" name="percentage" id="percentage" class="form-control my-input" placeholder="enter your percentage %">
                  </div>

                  <div class="form-group">
                     <input type="text" name="sc_uni" id="sc_uni" class="form-control my-input" placeholder="Enter School name or university/collage name">
                  </div>
                 <div class="form-group">
                <select class="form-control" name="education">
                   <option value="" selected disabled>Select Your Class</option>
                   <option value="1">Class 1</option>
                   <option value="2">Class 2</option>
                   <option value="3">Class 3</option>
                   <option value="4">Class 4</option>
                   <option value="5">Class 5</option>
                   <option value="6">Class 6</option>
                   <option value="7">Class 7</option>
                   <option value="8">Class 8</option>
                   <option value="9">Class 9</option>
                   <option value="10">Class 10</option>
                   <option value="scienceHS">Science Hs</option>
                   <option value="artsHS">Arts Hs</option>
                   <option value="commerceHs">Commerce Hs</option>
                </select>
              </div>
                  
                  <div class="form-group" >
                      <label >Select Your Image </label>
                    <input type="file" name="file" accept="image/*"/>
                  </div>
                  <div class="text-center ">
                  <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="" id="btnfeed1">
                     <button type="submit" class=" btn btn-block send-button tx-tfm" name="submit1" id="btnSubmit1">Create Your Free Account</button>
                     </span>
                  </div>
                  <p style="color:white;">By creating an account you agree to our <a href="#" style="color:blue">Terms & Privacy</a>.</p>
                   </p>
               </form>
          
               </div>
               </div>
                  </div>
                </div>
               </div>

               <div class="container " >
       <div class="row" >
          <div class="col-md-8 col-lg-4 mx-auto ">
             <div class="myform form ">
             <div class="box3">
                <form style="display:visible" id="teacher" action="registration.php" method="post" enctype="multipart/form-data">
                

                <div class="form-group">
                  
                      <input type="text" name="name" id="name" class="name form-control my-input " id="name" placeholder="Full Name" required>
                   </div>
                   <div class="form-group">
     
          <input type="text" name="username"  class="form-control my-input username" id="username" placeholder="username"  >
       
              <div class="" id="infedusername">
            
              </div>
                   </div>
                   <div class="form-group">
                      <input type="password" name="password"  class="form-control my-input"  placeholder="Password" id="password" required>
                   </div>
                   <div class="form-group">
                      <input type="password" name="confirmpassword"  class="form-control my-input" placeholder="Confirm Password" required>
                   </div>
                   <div class="form-group">
                   </div>
 
                   <div class="form-group">
                      <input type="number" min="0" name="phone" id="phone"  class="form-control my-input" placeholder="Phone" required>
                   </div>
                   <div class="form-group">
                      <input type="text" name="city"  class="form-control my-input" id="city" placeholder="City" >
                           </div>
                      <div class="form-group">
                      <input type="text" name="locality"  class="form-control my-input" id="locality" placeholder="Current Address"  required>
                     
                   </div>
                   <div class="form-group">
                     <input type="text"  name="skill" id="skill"  class="form-control my-input" placeholder="Subjects You Can Teach" required>
                  </div>
                  <div class="form-group">
                     <input type="text"  name="education" id="education"  class="form-control my-input" placeholder="Provide your educational qualification" required>
                  </div>
                  <div class="form-group">
                  <select class="form-control" name="exp">
                    <option value="" selected disabled>Select Your Experience</option>
                    <option value="0">0 </option>
                    <option value="1">1 Years</option>
                    <option value="2">2 Years</option>
                    <option value="3">3 Years</option>
                    <option value="4">4 Years</option>
                    <option value="5">5 Years</option>
                    <option value="6">6 Years</option>
                    <option value="7">7 Years</option>
                    <option value="8">8 Years</option>
                    <option value="9">9 Years</option>
                    <option value="10">10 Years </option>
                    <option value="MoreThan10years">More Than 10 Years</option>
                 </select>
                  </div>
                  <div class="form-group">
                 <select class="form-control" name="timings">
                    <option value="" selected disabled>--Select Your Prefered Timing--</option>
                    <option value="Morning">Morning</option>
                    <option value="Evening">Afternoon</option>
                    <option value="Afternoon">Evening</option>
                 </select>
               </div>

                  <div class="form-group">
                 <select class="form-control" name="depname">
                    <option value="" selected disabled>--Select Your Department--</option>
                    <option value="Arts">Arts</option>
                    <option value="Commerce">Commerce</option>
                    <option value="Science">Science</option>
                 </select>
               </div>
               <div class="form-group">
                <input type="hidden"  name="lat" id="lat"  class="form-control my-input" placeholder="lat">
                <input type="hidden"  name="lng" id="lng"  class="form-control my-input" placeholder="long">
               <div class="col-md-12">
                  <div id="map" style="width:100%;height:400px; border-radius:20px;">
                  
                  </div>
                 
                  <input type="button" class="btn btn-md btn-danger " value="Store Location"  onclick="getLocation()"> 
   
                  </div>

                   <div class="form-group" >
                       <label >Select Your Image </label>
                     <input type="file" name="file" accept="image/*"/>
                   </div>
                   <div class="text-center ">
                   <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="" id="btnfeed">
                      <button type="submit" class=" btn btn-block send-button tx-tfm" name="submit" id="btnSubmit" >Create Your Free Account</button>
                      </span>
                   </div>

                   <p style="color:white;">By creating an account you agree to our <a href="#" style="color:blue;">Terms & Privacy</a>
                  </p>
                   
                </form>
               
                </div>
                </div>
                          
             </div>
      </div>
</div>
     
            <div class="container ui" >
                <div class="col-12 ">
                     
                         <hr class="hr-or">
                         <center>
                         <span class="span-or" style="text-align:center; color:white;">or
                         
                         </span>
                        </center>
                   </div>
                  
                   <div class="form-group">
                   <div class="text-center "><a class="btn btn-primary" href="loginform.php">
                    Already Have an account?
                    </a>
                    </div>
                   
                 
                  </div>
             
                  </div>
     




<!--- Google geolocation api--->
 <script>
        var map, infoWindow;
        var lat,lng;
        
        function getLocation(){
   
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            lat = position.coords.latitude;
              lng = position.coords.longitude;
             document.getElementById("lat").value=lat;
             document.getElementById("lng").value=lng;

             var pos = {
              lat: lat,
              lng: lng
            };
           // console.log('Your latitude is :'+lat+' and longitude is '+lng);
           infoWindow.setPosition(pos);
         infoWindow.setContent('Location Tracked go ahead and complete sign up.');
         infoWindow.open(map);
          map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }
     

      function initialize() {
  geocoder = new google.maps.Geocoder();
}

     function initMap() {
       map = new google.maps.Map(document.getElementById('map'), {
         center: {lat: 26.2006, lng: 92.9376},
         zoom: 10
       });
       infoWindow = new google.maps.InfoWindow;

   }

  
    </script>

    <script async defer
        src=
        "https://maps.googleapis.com/maps/api/js?key=AIzaSyB1vcUsHLsEIaTO3t4Ro8gXIUurrI6j68I&v=3&callback=initMap">
    </script>

 </body>

</html>