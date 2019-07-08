        <?php
        session_start() ;
        include_once("dbconfig/dbconnect.php");
         
        // teacher
        if(isset($_SESSION['teacher_auth'])){
          $uid=$_SESSION['t_id'];
          $t_email=$_SESSION['t_email'];
         
          $searchCoaching=mysqli_query($conn,"select id from available where t_id='$uid' ");
          
          if($row=mysqli_fetch_assoc($searchCoaching)>0)
          {
            $_SESSION['disable']=1;
           
          }else{
            $_SESSION['disable']=0;
          
          }

          $searchtuitionrequest=mysqli_query($conn,"select * from tuition_requests where tuid='$t_email' ");
        
            $viewStudent=mysqli_query($conn,"SELECT*
            FROM student
            INNER JOIN tuition_requests
            ON tuition_requests.requid=student.email");
           $notf=mysqli_num_rows($searchtuitionrequest);
      
          
        
        }
        // student 
        if(isset($_SESSION['student_auth'])){
          $s_email=$_SESSION['s_email'];
          $searchResponse=mysqli_query($conn,"select * from status where avail_email='$s_email' ");
          $searchResponse1=mysqli_query($conn,"SELECT*
          FROM teacher
          INNER JOIN status
          ON status.t_email=teacher.email");

          $notf=mysqli_num_rows($searchResponse);
        }
          
            if(isset($_SESSION['teacher_auth'])){
              $uid=$_SESSION['t_id'];
            
              $query=mysqli_query($conn,"select * from teacher where id='$uid' ");
  
            if($row=mysqli_fetch_assoc($query))
            {
                 $name=$row['name'];
                 $img=$row['image'];
                 $city=$row['city'];
               
            
            }      
          }elseif (isset($_SESSION['student_auth'])) {

             $uid=$_SESSION['s_id'];
            
              $query=mysqli_query($conn,"select * from student where id='$uid' ");
  
            if($row=mysqli_fetch_assoc($query))
            {
                 $name=$row['name'];
                 $img=$row['image'];
                 $city=$row['city'];
               
            
            }      
          }else{
            header("location:session_components/destroySession.php");
            $_SESSION['session_expaire']="Session expired";
          }
          //approve to status

                
if(isset($_POST['approve'])){
  $t_email=$_SESSION['t_email'];
  $email=$_POST['email'];

  $bool=true;
 
  $query=mysqli_query($conn,"INSERT INTO `status`(`t_email`, `avail_email`, `status`) VALUES ('$t_email','$email','$bool')");

  if($query){
     $_SESSION['approved']=true;
  }else {
    $_SESSION['approved']=false;
  }

}
if(isset($_POST['deny'])){

  $t_email=$_SESSION['t_email'];
  $email=$_POST['email'];
  $_SESSON['s_email']=$email;
  $bool=false;
  $query=mysqli_query($conn,"INSERT INTO `status`(`t_email`, `avail_email`, `status`) VALUES ('$t_email','$email','$bool')");
  }
  if($query){
    $_SESSION['deny']=true;
  }else {
    $_SESSION['deny']=false;
  }
// check the approves

         if(isset($_SESSION['teacher_auth'])){
          $t_email=$_SESSION['t_email'];
          $approved_denied=mysqli_query($conn,"select * from status where t_email='$t_email' and status=1");
          $rows2=mysqli_fetch_assoc($approved_denied);
          $approved_denied1=mysqli_query($conn,"select * from status where t_email='$t_email' and status=0");
          $rows3=mysqli_fetch_assoc($approved_denied1);
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
      <script src="javascript/form_process.js"></script>
    <link rel="stylesheet" href="css/style1.css">
  
    <title>Profile</title>
</head>
<body>

<nav class="navbar  navbar-expand-md navbar-light bg-light sticky-top " id="mainNav">
<div class="container-fluid">
<a class="navbar-brand nav-brand" href="#navtop" style="font-family: 'Baloo Bhai', cursive;">FT</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

	<div class="container-fluid d-flex justify-content-end">
	
    	<ul class="navbar-nav	nav-pills nav-fill " >
      <li>
      <?php if(isset($_SESSION['student_auth']))

      {

        echo'<a class="nav-link " href="search.php">search home </a>';
    
      } ?>
       </li>
             <li class="nav-item ">
                 <a class="nav-link " href="editprofile.php">Setting</a>
                 </li>	
                 <li class="nav-item ">
                  <a class="nav-link " href="infopage.php">Help</a>
                  </li>	
                  <li class="nav-item ">
                  <a class="nav-link " href="session_components/logout.php">Log out</a>
                  </li>	
     
            </ul>  
            </div>
          </div>
        </div>
</nav>

<div class="container-fluid d1">
<div class="jumbotron-fluid" >
  
    <a class="btn btn-outline-info float-right" data-toggle="modal" data-target="#myModal">Edit Profile</a>
    
    <img src="<?php echo $img;?>" class="float-left  " alt=""> <h1 class="h1"><?php echo $name;?></h1>
</div>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <div class="modal-header">
				<h4 class="modal-title">Want To update Profile</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>    
				</div>
				
							<div class="modal-body">
								<h1 class="update">Provide Your changes</h1>
								<form class="updateprofile" method="POST" action="updateprofile.php" onsubmit="return validateForm2()" name="updateprofile">
								<div class="form-group">
								<input type="text" name="name"  id="name" class="form-control" placeholder="Enter your New Name">
                <br>
                <input type="email" name="email"  id="email"  class="form-control" placeholder="Enter your old Email">
                <br>
                <input type="email" name="email1"  id="email1"  class="form-control" placeholder="Enter your New Email">
                <br>
                <input type="password" name="pass"  id="pass"  class="form-control" placeholder="Enter your old Password">
                <br>
                <input type="password" name="pass1"  id="pass1"  class="form-control" placeholder="Enter your New Password">
				
										</div>
									</div>
		
        <div class="modal-footer">
					<input type="submit"  class="btn btn-primary" value="Update" name="submit">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</form>
								</div>
								</div>
						</div>
					</div>
</div>
<ul class="nav nav-tabs nav-pills ml-auto float-center justify-content-center " >

  <li class="nav-item">
    <a class="nav-link active nl" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Deshboard</a>
  </li>
<li>
<a class="nav-link nl" id="notif-tab" data-toggle="tab" href="#notif" role="tab" aria-controls="notif" aria-selected="true"> Notifications <span class="badge badge-light"><?php echo $notf; ?></span></a>
</li>
</ul>

<div class="tab-content">

  <div class="tab-pane active" id="profile" role="tabpanel" aria-labelledby="profile-tab"><div class="alert alert-success" role="alert">
  
  <?php if(isset($_SESSION['teacher_auth'])==1){
  echo' <h4 class="alert-heading">WELLCOME PROFILE</h4>
  <p>Now you are registered, now students around you can easily search for you and can contact you!</p>
  <hr>
  <p class="mb-0">Stay with us registered we are happy to provide aquinstance</p>
        <div class="alert alert-warning" role="alert">
     <p class="alert-link"> Add Coaching Center</p> Provide timing for Tuitions.
      </div>';
  }else if(isset($_SESSION['student_auth'])==1) {
    echo'<h4 class="alert-heading">WELLCOME PROFILE</h4>
    <p>Now you are registered, Now you can able to search teacher around you!</p>
    <hr>
    <p class="mb-0">Stay with us registered we are happy to provide aquinstance</p>';
  }

  if(isset($_SESSION['teacher_auth'])){
  
    if(isset($_SESSION['addcenter'])){
      echo'<h4 class="alert-heading">
      <p>Coaching center added successfully!</p> </h4>';
    }
    
    if(isset($_SESSION['delete'])){
      echo'<h4 class="alert-heading">Coaching center deleted successfully</h4>
      <p>Provide details</p>';
      
    }
      if($_SESSION['disable']){
        echo
        '<p>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#addcoaching" aria-expanded="false" aria-controls="addcoaching" disabled>Add Details About Coaching Center</button>
      </p>
      
      ';
    
        echo'<form action="mysql_assets/del_record.php" method="post" name="form"  onsubmit="return confirm("Are You sure you want to delete your record? ");">
        <input type="submit" value="Delete Coaching Center Details" id="my-button" name="delete" class="btn btn-danger">
        </form> ';
      }else{  
        echo
      '<p>
      <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#addcoaching" aria-expanded="false" aria-controls="addcoaching">Add Details About Coaching Center</button>
    </p>
    <div class="container-fluid" style="background:#F8F9FA; width:100%; margin:auto;">
    <div class="row d-flex justify-content-center" >
    <div class="col-12 col-lg-6 col-md-6 col-sm-2">
    <div class="collapse multi-collapse" id="addcoaching">


    <form method="post" action="mysql_assets/addtime.php">
        <div class="form-group">
          <label for="Addressinput">Address of coaching center</label>
          <input type="text" class="form-control" id="addressinput" name="address" placeholder="Coaching center address">
        </div>
        <div class="form-group">
          <label for="classes">Class</label>
          <input type="text" class="form-control" id="classes"  name="class" placeholder="Enter which class is available for coaching">
        </div>
        <div class="form-group">
        <select class="form-control" name="timing" id="timing">
          <option value="" selected disabled>Select your coaching time</option>
          <option value="Morning 7-9">Morning 7-9 </option>
          <option value="Afternoon 1-3">Afternoon 1-3 </option>
          <option value="Evening 6-9">Evening 6-9 </option>   
       </select>
        </div>


        <button id ="button" type="submit" value="send" class="btn btn-primary">Add</button>
        </form>


    </div>

    </div>

    </div>
    </div>';

      }
      }

    ?>

</div>

</div>

<!--- notification pane --->
<div class="tab-pane " id="notif" role="tabpanel" aria-labelledby="notif-tab">
<div class="container-fluid">
<?php 
if(isset($_SESSION['student_auth']))
{
  
  ?>
<?php if($notf==0)
{
  ?>

<h1 class="display-4">No Responses</h1>
  <?php
  
}else {

  ?>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Experience</th>
      <th scope="col">Response</th>
      <th scope="col">View profile</th>
    </tr>
  </thead>
  <tbody>
  <?php while($rows4=mysqli_fetch_assoc($searchResponse1)){
    $val1=$val1+1;
  ?>
  
    <tr>
      <th scope="row"><?php echo $val1;?></th>
      <td><img src="<?php echo $rows4['image']; ?>" style="width:45px; height:35px" > </td>
      <td><?php echo$rows4['name'];?></td>
      <td><?php echo$rows4['email'];?></td>
      <td><?php echo$rows4['experience']." years";?></td>
      <?php if($rows4['status']==0){
          echo' <td>Denied</td>';
      }else {
        echo' <td>approved</td>';
      }
       ?>
    
      <td> <?php echo'<a class="btn btn-primary" href=profilePage.php?email='.$rows4['email'].'> View Profile </a>'; ?></td>
    </tr>
   
  </tbody>
  <?php 
}
 ?>
</table>
  <?php
  

}
?>


  <?php
}
?>
<?php if(isset($_SESSION['teacher_auth'])){
  ?>

<h1 class="display-4">Requests</h1>
<div class="table-responsive">

<table class="table  table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>

      <th scope="col">Class</th>
      <th scope="col">Percentage</th>
      <th scope="col">Contact</th>
      <th scope="col">Subject</th>
      <th scope="col">Response</th>
      
    </tr>
   </thead>
     <tbody>
     
     <?php 
     if(mysqli_fetch_assoc($searchtuitionrequest)>0)
      while ($rows = mysqli_fetch_assoc($viewStudent)){
        $val=$val+1;
    
   
  ?>
    <tr>  
   
           <th scope="row"><?php echo $val;?></th>
           <td><?php echo $rows['name'];?></td>
          <td> <?php echo $rows['class'];?></td>
          
          <td> <?php echo $rows['percentage']." %";?></td>
          <td> <?php echo $rows['phone'];?></td>
          <td> <?php echo $rows['subject'];?></td>
          <td> <form action="#" method="post">
          <input type="hidden" name="email" value="<?php echo $rows['requid']?>">
        
          <?php if($rows2['avail_email']==$rows['requid'])
          {
            echo '<div class="btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-success active">
              <input type="checkbox" checked autocomplete="off" disabled> approved
            </label>
          </div>';
          }
          elseif($rows3['avail_email']==$rows['requid']){
            echo '<div class="btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-danger active">
              <input type="checkbox" checked autocomplete="off"> denied
            </label>
          </div>';
          }
            else{
            echo' <input type="submit" class="btn btn-success" value="Approve" id="approve" name="approve">
            <input type="submit" class="btn btn-danger" value="Deny" id="deny" name="deny">';
          }
           ?>
         
          </form>
          </td>
      <?php  

      }
     
      ?>
  </tbody>
</table>
</div>
<?php
}
?>
</div>




</div>

</div>


<script>
  $(function () {
    $('#myTab li:last-child a').tab('show')
  })
</script>


</body>
</html>