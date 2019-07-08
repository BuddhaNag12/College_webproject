<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <title>Help Desk</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

  </head>
  <body>

  <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <a href="index.php" class="btn btn-md btn-secondary">Home</a>
    <?php 
    if(isset($_SESSION['student_auth'])|| isset($_SESSION['teacher_auth'])){
     echo  '<a href="session_components/logout.php" class="btn btn-danger"> Log out </a>';
    }
      ?>
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic">Welcome to find teachers</h1>
      <p class="lead my-3">The site provides students with the help to find teachers near them</p>
      <p class="lead mb-0"><a href="#reading" class="text-white font-weight-bold">Continue reading...</a></p>
    </div>
  </div>

 
<section id="reading">
<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
      <h3 class="pb-4 mb-4 font-italic border-bottom">
        From the site author
      </h3>

      <div class="blog-post">
        <h2 class="blog-post-title">Quick Guide</h2>
        <p class="blog-post-meta">july 1 2019 by <a href="#">Buddha</a></p>

        <p>Find teachers works like magic all you need is just sign up</p>
        <hr>
        <h2 class="blog-post-title">Teachers</h2>
        <p>Any Teacher who is willing to provite private tuitions or to teach student near them can sign up with this website</p>
        <blockquote>
          <p>The <strong>teachers</strong> who is going to sign up need to provide few <strong>details about them</strong> to provide convenience to students who are looking for tutors those are</p>
        </blockquote>
        <p><ol>
          <li>
            Name
          </li>
          <li>
           Email
          </li>
          <li>
           Address
          </li>
          <li>
           Phone number
          </li>
          <li>
            Need to provide location
          </li>
          
          <li>
           Subject they can teach
          </li>
          <li>
           Qualification
          </li>
          <li>
           Experience
          </li>
          <li>
          etc
          </li>
        </ol>
      </p>
        <h3>Secure</h3>
        <p><strong>teachers</strong> don't need to worry about data which they are providing for convecience we keep them <strong>secure.</strong> </p>
        <pre><code>Accessibility</code></pre>
        <p>Teachers who are registered can handle their account profile</p>
        <h3>feature</h3>
        <p>Teacher can also fill up about the details of coaching center after being registered</p>

        <ul>
          <li>Need to provide Coaching center address.</li>
          <li>Need to provide timing for classes.</li>
          <li>Need to provide which class is eligible, that way student can opt in for tuition in coaching center.</li>
        </ul>

        <strong>Alteration</strong>
        <ol>
          <li>Teachers can alter their profile whenever needed.</li>
          <li>Can able to update picture of themself</li>
          <li>Can able to drop their registerd account</li>
        </ol>
        <p>For more information Contact the site author</p>
      </div><!-- /.blog-post -->
<hr>
      <div class="blog-post">
        <h2 class="blog-post-title">Student</h2>
        <p>Any student who is willing to find private tuitions or to teacher  near them can sign up with this website</p>
        <blockquote>
          <p>The <strong>Students</strong> who is going to sign up need to provide few <strong>details about them</strong> to provide convenience to for searching teacher</p>
        </blockquote>
        <p><ol>
          <li>
            Name
          </li>
          <li>
           Email
          </li>
          <li>
           Address
          </li>
          <li>
           Phone number
          </li>
          <li>
            Subject to learn
          </li>
          <li>
            etc
          </li>
       
        </ol>
      </p>
        <h3>Secure</h3>
        <p><strong>Students</strong> don't need to worry about data which they are providing for convecience we keep them <strong>secure.</strong> </p>
        <pre><code>Accessibility</code></pre>
        <p>Students who are registered can handle their account profile</p>
        <h3>feature</h3>
        <ul>
          <li>Student who are registered can Search for teachers</li>
          <p>Searching has two custom options </p>
          <li>They can search by subject name.</li>
          <li> Can search by subject name with locality.</li>
        </ul>

        <strong>Alteration</strong>
        <ol>
          <li>Students can alter their profile whenever needed.</li>
          <li>Can able to update picture of themself</li>
          <li>Can able to drop their registerd account</li>
        </ol>
        <p>For more information Contact the site author</p>




      </div><!-- /.blog-post -->

 
    </div><!-- /.blog-main -->

    <aside class="col-md-4 blog-sidebar">


      <div class="p-4">
        <h4 class="font-italic">Social Links</h4>
        <ol class="list-unstyled">
          <li><a href="https://github.com/BuddhaNag12">GitHub</a></li>
          <li><a href="https://twitter.com/buddha_nag">Twitter</a></li>
          <li><a href="https://www.facebook.com/ItSBuddhaHERE?ref=bookmarks">Facebook</a></li>
        </ol>
      </div>
    </aside><!-- /.blog-sidebar -->

  </div><!-- /.row -->

</main><!-- /.container -->
</section>

      <div class="jumbotron">
      <footer class="blog-footer">
      <a href="#">Back to top</a>

      </footer>
      </div>
  

</body>
</html>
