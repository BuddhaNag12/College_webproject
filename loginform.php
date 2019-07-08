<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Sign in </title>

    <style>
   
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .home{
  padding-left: 4px;
  padding-top: 4px;
  position:absolute;
  top:1%;

}
    </style>
    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
            <div class="home">
    <a class="btn btn-md btn-primary" href="index.php">
                       home
         </a>
        </div>
  
    <form class="form-signin " method="post" action="mysql_assets/login.php">
 
  <h1 class="h3 mb-3 font-weight-normal sign">Please sign in</h1>
  <i class="material-icons" style="font-size:50px; color:red;">
unlocked
</i>
  <label for="inputEmail" class="sr-only">Username</label>
  <div class="input-group">

  <input type="text" id="inputEmail" name="user" class="form-control" placeholder="Username" required autofocus>
  </div>
  <label for="inputPassword" class="sr-only">Password</label>
  <div class="input-group">
  <input type="password" id="pass" name="pass" class="form-control pwd"  placeholder="Password"   required autocomplete>
     
    </div>
    <div class="dropdown-divider"></div>
  <div class="checkbox mb-3">
  <?php if(isset($_SESSION['errorLogin'])){
  echo'<div class="alert alert-danger" role="alert">
  Invalid Credentials!
    </div>';
  }elseif (isset($_SESSION['registration'])) {
    echo'<div class="alert alert-success" role="alert">
  Registration Success, You can Log in now!
    </div>';
  }elseif(isset($_SESSION['session_expaire']))
  {
    echo'<div class="alert alert-warning" role="alert">
    Your Session has been expired!
      </div>';
      session_destroy();
  }
    ?>
    <label style="color:white;">
      <input type="checkbox" value="remember-me" name="remember_me" > Remember me
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Sign in</button>
  
  <p class="mt-5 mb-3 text-muted">&copy; 2019</p>
</form>




<script>
$(".reveal").mousedown(function() {
    $(".pwd").replaceWith($('.pwd').clone().attr('type', 'text'));
})
.mouseup(function() {
	$(".pwd").replaceWith($('.pwd').clone().attr('type', 'password'));
})
.mouseout(function() {
	$(".pwd").replaceWith($('.pwd').clone().attr('type', 'password'));
});


</script>
</body>
</html>
