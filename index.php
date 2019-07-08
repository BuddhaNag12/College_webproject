
<?php
    session_start();
    
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Find Teacher</title>
        <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
            <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Hind+Madurai&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>	
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="css/animate/animate.css">
        <link href="css/index1.css" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <script src="javascript/form_process.js"></script>
     
        <link href="css/index.css" rel="stylesheet">
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.3"></script>
    </head>


    <body data-spy="scroll" data-target=".navbar" data-offset="50" id="top">
 
    <div class="loader"></div>
    <div id="fb-root"></div>
        <a href="register.php"  style="animation: fadeInRight 2s 1;" id="myBtn">Sign Up</a>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-md fixed-top " >
           <div class="containers d-flex justify-content-start" style="width:220px"><a class="navbar-brand nav-brand" href="#navtop" style="font-family: 'Baloo Bhai', cursive;">FT </a ><h4 class="em">Find Teacher</h4></div> 
            <button class="navbar-toggler second-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <div class="animated-icon"><span></span><span></span><span></span><span></span></div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="container-fluid d-flex justify-content-center ">
                    <ul class="navbar-nav " >
                        <li class="nav-item ">
                            <a class="nav-link " href="#top">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#statistic">Statistic</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#teachers">teachers card</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">about</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#pageend">Page End</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="loginform.php">Log in</a>
                        </li>
                      
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container1">
            <div class="imgs">
                <h1 class="text-center welcome1 text-uppercase header" style="font-family:'Bowlby One', cursive; animation: zoomIn 3s 1; padding-bottom:10px; font-size:5vh;">
                    Looking For teacher near You
                </h1>
                <a href="register.php" class="btn  btn-primary cps">Get Started</a>	
                <a href="infopage.php" class="btn  btn-md btn-outline-info">Info</a>	
                <h1 class="bottoms fade-out">scroll down</h1>
                <i class="fas fa-angle-double-down f1 fade-out"></i>
            </div>
            <div class="left">
                <h1 class="" style="padding-left:4px;margin:4px;font-size:20px; font-weight:5%; color:white; font-family: 'Baloo Bhai', cursive;">Hurry Sign up now</h1>
            </div>
            <div class="right">
                <h1 style="font-size:10px; font-weight:5%; color:white; padding-right:5px;">
                    Share The Website on
                </h1>
                <div class="fb-share-button" 
                    data-href="https://www.buddhanag.herokuapp.com/index.php" 
                    data-layout="button" data-size="large">
                </div>
            </div>
            <!--- container1 -->	
        </div>
        <!--- Welcome Section -->
        <!--- Cards -->
        <br>
        <div class="container" style="  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); padding:2rem; border-radius:20px;">
      
        <section id="statistic" class="statistics"  >
            <h1 class="welcome-4 welcome text-center" >Statistics</h1>
            <hr class="dashed">
            <div class="container" style="width:100%;  ">
                <!--- row -->
                <div class="row d-flex justify-content-center" style="width:100%;">
                    <div  class="col-lg-4 col-md-5 col-sm-4 ">
                        <div class="prof">
                            <i class="material-icons" data-aos="flip-right" style="font-size:80px;color:red;">people</i>
                            <h1 id="p" class="display-4"   style="text-align:center">154</h1>
                            <h5 class="card-title">Professors</h5>
                        </div>
                    </div>
                    <div  class="col-lg-4 col-md-5 col-sm-4 ">
                        <div class="cc">
                            <i class="material-icons" data-aos="flip-left" style="font-size:80px;color:blue;">
                            school
                            </i>
                            <h1 id="sc" class="display-4"  style="text-align:center">154</h1>
                            <h5 class="card-title">Coaching Centers</h5>
                        </div>
                    </div>
                    <div  class="col-lg-4 col-md-5 col-sm-4">
                        <div class="std">
                            <i class="material-icons" data-aos="flip-down" style="font-size:80px;color:limegreen;">
                            people_outline
                            </i>
                            <h1 id="cc" class="display-4"  style="text-align:center">154</h1>
                            <h5 class="card-title">students</h5>
                        </div>
                    </div>
                    <!--- row end--->					
                </div>
                <!--- container end--->			
            </div>
        </section>
        </div>
        <!--- Faculty Section--->
        <!--- Cards -->
        <section id="teachers" class="teachers" style="padding-top:2rem;padding-bottom:2rem;	marging-top:2rem; ">
            <div class="container padding">
            <div class="row justify-content-center">
                <div  class="col-lg-10" >
                    <h1 class="display-4 welcome"  style="text-align:center;" >Tons Of Faculties</h1>
                    <hr class="dashed">
                </div>
            </div>
            <div class="row justify-content-center">
            <div class="card-deck c2 ">
                <div class="card " data-aos="fade-up" >
                    <img class="card-img-top" src="images/math.png" alt="Card image cap">
                    <div class="card-body">
                        <div class="card-footer">
                            <h5 class="card-title">MATHEMATICS</h5>
                        </div>
                    </div>
                </div>
                <div class="card" data-aos="fade-up" >
                    <img class="card-img-top" src="images/computers.png" alt="Card image cap">
                    <div class="card-body">
                        <div class="card-footer">
                            <h5 class="card-title">COMPUTER SCIENCE</h5>
                        </div>
                    </div>
                </div>
                <div class="card" data-aos="fade-up">
                    <img class="card-img-top" src="images/politics.png" alt="Card image cap">
                    <div class="card-body">
                        <div class="card-footer">
                            <h5 class="card-title">Political Science</h5>
                        </div>
                    </div>
                </div>
            </div>
 
            <div class="card-deck c3">
      
                <div class="card" data-aos="fade-up">
                    <img class="card-img-top" src="images/com.png" alt="Card image cap">
                    <div class="card-body">
                        <div class="card-footer">
                            <h5 class="card-title">COMMERCE</h5>
                        </div>
                    </div>
                </div>
                <div class="card " data-aos="fade-up">
                    <img class="card-img-top" src="images/physics.jpg" alt="Card image cap">
                    <div class="card-body">
                        <div class="card-footer">
                            <h5 class="card-title">PHYSICS</h5>
                        </div>
                    </div>
                </div>
                <div class="card" data-aos="fade-up">
                    <img class="card-img-top" src="images/chem.jpg" alt="Card image cap">
                    <div class="card-body">
                        <div class="card-footer">
                            <h5 class="card-title">CHEMISTRY</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="about"  style="background: #F5F5F5; ">
            <div class="jumbotron-fluid">
                <div class="container-fluid" >
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-12">
                            <div class="card" data-aos="fade-right" style="width: 18rem; background:white;">
                                <img src="images/buddhanag.jpg" class="card-img-top " alt="..." style="width:200px;height:200px;   border-radius: 50%;">
                                <div class="card-body">
                                    <h5 class="card-title">BUDDHA NAG</h5>
                                    <p class="card-text font-weight-light" style="color:black;" >I like to make good design of webpages and i'm pursuing bca from kkhsou</p>
                                    <a href="https://www.facebook.com/ItSBuddhaHERE"><i class="fab fa-facebook" style="font-size:20px; color:blue;"></i>facebook profile</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <legend id="abt">A Few Words 
                                About the website
                            </legend>
                            <hr class="about" style="width:50%; border:1px solid grey; padding:auto; margin:auto;">
                            <p class="display-4 p1" data-aos="zoom-in" style="color:black;">The website brings teacher and students near them, it helps them to be conected with each other for tutorials and tutions
                            .</p>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Your Feedback</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>    
                    </div>
                    <div class="modal-body">
                        <h1 class="feed">Your Feedback is valuable to us.</h1>
                        <form class="feedback" method="post" action="feedback.php" onsubmit="return validateForm()" name="feedback">
                            <div class="form-group">
                                <input type="text" name="name"  id="name" class="form-control" placeholder="Enter your Name">
                                <br>
                                <input type="email" name="email"  id="email"  class="form-control" placeholder="Enter your Email">
                                <label for="comment">Comment:</label>
                                <textarea class="form-control" name="message" id="message" rows="5" id="comment"></textarea>
                            </div>
                    </div>
                    <div class="modal-footer">
                    <input type="submit"  class="btn btn-primary" name="submit" >
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <section class="abouts" id="contact">
            <div class="jumbotron jumbotron-fluid" style="background: #FFFFFF;" >
            <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="navbar-brand pb-3">
                        <div class="logo">
                            <a href="#">
                            <img class="navbar-logo" src="https://mobirise.com/extensions/educationm4/assets/images/logo.png" style="width:150px;height:150px;" alt="Mobirise">
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <h1   style="color:black;"data-aos="flip-left"
                                data-aos-easing="ease-out-cubic"
                                data-aos-duration="2000" class="text-center">KKHSOU</h1>
                            <h1  style="color:black;" data-aos="flip-left"
                                data-aos-easing="ease-out-cubic"
                                data-aos-duration="2000" class="text-center">UNIVERSITY</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 ab">
                    <div class="text-center" style="color:black;">Contact</div>
                    <hr class="contact" style="margin:auto; padding:auto;  border:1px solid grey ;width:40px;">
                    <ol>
                        <li><i class="material-icons">
                            smartphone
                            <small>123-456-78901<small>
                            </i>
                        </li>
                        <li>
                            <i class="material-icons">
                            gps_fixed 	<small>Silchar Cachar Assam<small>
                            </i>
                        </li>
                        <li>
                            <i class="material-icons">
                            mail   <a href="mailto:rahulnag514@gmail.com">rahulnag@gmail.com</a>
                            </i>
                        </li>
                        <li>
                            <h6 class="text-muted">Give Feedback below</h6>
                        </li>
                        <li>
                            <a class="btn btn-md btn-danger" data-toggle="modal" data-target="#myModal">Feedback</a>
                        </li>
                    </ol>
                </div>
                <div class="col-12 col-sm-12 col-md-8 col-lg-10">
                    <small>Site Map</small>
                    <ol>
                        <li>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57936.66815884068!2d92.7486197782311!3d24.828245470714357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x374e4a625ae8cddd%3A0x1783d41a15380398!2sSilchar%2C+Assam!5e0!3m2!1sen!2sin!4v1555827685230!5m2!1sen!2sin" width="350" height="280" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </li>
                    </ol>
                </div>
            </div>
        </section>
        <section id="pageend" style="background:#F8F9FA;">
        <div class="container" >
    <div id="mycarousel" class="carousel slide carousel-fade" data-ride="carousel" >
    <div class="carousel-inner"  >
    <div class="carousel-item active" >
      <img src="images/background.jpg" class="d-block img-fluid" alt="..." >
      <div class="carousel-caption">
                        <h4>Philip Wyline</h4>

                        <p class="welcome2">One good teacher in a lifetime may sometimes change a delinquent into a solid citizen.</p>
                    </div>
    </div>
    <div class="carousel-item">
      <img src="images/1.jpg" class="d-block img-fluid" alt="..." >
      <div class="carousel-caption">
      <h4>Chinese proverb</h4>
      <p class="welcome2">“Teachers can open the door, but you must enter it yourself.”</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/teacher.jpg" class="d-block  img-fluid" alt="..." >
      <div class="carousel-caption">
      <h4>B.B. King</h4>
      <p class="welcome2">“The beautiful thing about learning is that no one can take it away from you .”</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 </div>
<br>   

        <!-- Footer -->
        <footer class="page-footer ">
            <!-- Copyright -->
            <a href="#" style="color:white;">Back to top</a>
            <div class="footer-copyright text-center py-3 cp">
                © 2019 Copyright:
                <em href="#" style="color:white;text-weight:bold"> Buddha Nag</em>
                <div class="container d-flex justify-content-center">
                    <a href=""  class="icon"><i class="fab fa-twitter-square"></i></a>
                    <a href=""  class="icon"><i class="fab fa-facebook"></i></a>
                </div>
            </div>
            <!-- Copyright -->
        </footer>
        </section>
        <!-- Footer -->
        <script>
            $('.second-button').on('click', function () {
            
            $('.animated-icon').toggleClass('open');
            });    
        </script>
      
     
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
   
    <script>
          if($('.navbar').length > 0){
            $(window).on("scroll load resize", function(){
                checkScroll();
            });
        }
           function checkScroll(){
            var startY = $('.navbar').height() * 2;
        
            if($(window).scrollTop() > startY){
                $('.navbar').addClass("scrolled");
                $('.nav-brand').addClass("small");
                $(".em").fadeOut();
            }else{
              
                $(".em").fadeIn();
                $('.nav-brand').removeClass("small");
                $('.navbar').removeClass("scrolled");
            }
        }


      
    </script>
    <script>
         let below = false;
            
            window.onscroll = () => {
            
              const Ypos = window.pageYOffset;
              if(Ypos > 200 && !below) {
                document.getElementById("myBtn").style.display = "block";
            
                below = true;
              }
              else if(Ypos < 100 && below) {
            
                below = false;
                document.getElementById("myBtn").style.display = "none";
                
              
                //console.log('you have passed the "100px mark" while scrolling up');
            
                  }
            }
    
    
    </script>
    
    </body>
</html>