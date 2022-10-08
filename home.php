<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">

    <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
    crossorigin="anonymous">

    <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="pagestyle.css">
  <title>Homepage|PHP</title>
</head>

<body>
  <!-- Start Nagigation -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
    <a href="index.html" class="navbar-brand">Banking</a>
    <span class="navbar-text">Learn and Implement</span>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myMenu">
      <ul class="navbar-nav pl-5 custom-nav">
        <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
        <li class="nav-item"><a href="loanpage.php" class="nav-link">Loan</a></li>
        <li class="nav-item"><a href="account.php" class="nav-link">Account</a></li>


      </ul>
    </div>
    </nav> <!-- End Navigation -->

  <!-- Start Header Jumbotron-->
  <header class="jumbotron back-image" style="background-image: url(images/homepage.jpg);">
    <div class="text-center" style="margin-top: 120px;">
      <h1 class="text-uppercase text-danger font-weight-bold">Welcome to online Banking</h1>
      <p class="font-italic font-weight-bold st">Learn and Implement</p>
      <a href="#Contact" class="btn btn-outline-danger mr-4">Feedback</a>
      <a href="register.php" target="_blank" class="btn btn-outline-danger">Register</a>
    </div>
  </header> <!-- End Header Jumbotron -->
  <!-- Start Services -->
  <div class="container text-center border-bottom" id="Services"> 
    <h2>Our Services</h2>
    <div class="row mt-4">
      <div class="col-sm-4 mb-4">
        <a href="#"><i class="fab fa-android fa-10x text-success"></i></a>
        <h4 class="mt-4">Android Application</h4>
      </div>
      <div class="col-sm-4 mb-4">
        <a href="#"><i class="fas fa-desktop fa-10x text-primary"></i></a>
        <h4 class="mt-4">Web Application</h4>
      </div>
      <div class="col-sm-4 mb-4">
        <a href="#"><i class="fas fa-database fa-10x text-info"></i></a>
        <h4 class="mt-4">Database</h4>
      </div>
    </div>
  </div> <!-- End Services -->

  <!-- Start Course  -->
  <div class="container pt-5" id="Courses"> <!-- Start Course Container -->
    <h2 class="text-center">Our Banking</h2>  <!-- Course Heading -->
    <div class="row mt-4">        <!-- Start Course 1st Row -->
      <div class="col-lg-6 mb-4">     <!-- Start Course 1st Row's 1st Column -->
        <img src="images/home.jpg" alt="" class="img-fluid">
      </div>  <!-- End Course 1st Row's 1st Column -->

      <div class="col-lg-6">    <!-- Start Course 1st Row's 2nd Column -->
        <h2 class="text-center">Learn Loan</h2> <br>
        <p>India is witnessing a phenomenal growth in its small and medium enterprise sector. The MSME sector contributes over 45% of our industrial output, forming 40% of the GDP output. A part of this success story is being written by the country’s women entrepreneurs. Traditionally, women entrepreneurs have found it hard to secure business finance due to a number of social stigmas.</p>
        <p>However, the recent evolution in business finance and the emergence of FinTech platforms has made it easier for women entrepreneurs to get business loans. Today, business loans for women are also enabling self-employment in rural and urban India.</p>
      </div>  <!-- End Course 1st Row's 2nd Column -->
    </div>  <!-- End Course 1st Row -->

    <div class="row mt-4">    <!-- Start Course 2nd Row -->
      <div class="col-lg-6">  <!-- Start Course 2nd Row's 1st Column -->
        <h2 class="text-center">Learn Accounts</h2> <br>
        <p>Phishing is a fraudulent attempt, usually made through email, phone calls, SMS etc seeking your personal and confidential information.
        State Bank or any of its representative never sends you email/SMS or calls you over phone to get your personal information,password or one time SMS (high security) password. Any such e-mail/SMS or phone call is an attempt to fraudulently withdraw money from your account through Internet Banking. Never respond to such email/SMS or phone call. Please report immediately on report call 2341673 if you receive any such email/SMS or Phone call. Please lock your user access immediately, if you have accidentally revealed your credentials.Click here to lock.</p>
        
      </div>  <!-- End Course 2nd Row's 1st Column -->

      <div class="col-lg-6 mb-4">   <!-- Start Course 2nd Row's 2nd Column -->
        <img src="images/bank-accounts.jpg" alt="" class="img-fluid">
      </div>    <!-- End Course 2nd Row's 2nd Column -->
    </div>    <!-- End Course 2nd Row -->
  </div> <!-- End Course Container --> <!-- End Course  -->

  <!-- Start Team  -->
  <div class="jumbotron bg-danger" id="Team">   <!-- Start Team Jumbotron -->
    <div class="container">     <!-- Start Team Container -->
      <h2 class="text-center text-white">Team</h2>    <!-- Team Heading-->
      <div class="row mt-5">    <!-- Start Team Row-->
        <div class="col-lg-3 col-sm-6">     <!-- Start Team 1st Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/avtar1.jpeg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Rahul Kumar</h4>
              <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad ducimus voluptas nesciunt debitis numquam.</p>
            </div>
          </div>
        </div>    <!-- End Team 1st Column-->

        <div class="col-lg-3 col-sm-6">     <!-- Start Team 2nd Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/avtar2.jpeg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Sonam Sharma</h4>
              <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad ducimus voluptas nesciunt debitis numquam.</p>
            </div>
          </div>
        </div>      <!-- End Team 2nd Column-->

        <div class="col-lg-3 col-sm-6">       <!-- Start Team 3rd Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/avtar3.jpeg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Sumit Vyas</h4>
              <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad ducimus voluptas nesciunt debitis numquam.</p>
            </div>
          </div>
        </div>       <!-- End Team 3rd Column-->

        <div class="col-lg-3 col-sm-6">        <!-- Start Team 4th Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/avtar4.jpeg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title">Jyoti Sinha</h4>
              <p class="card-text">Itaque illo explicabo voluptatum, saepe libero rerum, ad ducimus voluptas nesciunt debitis numquam.</p>
            </div>
          </div>
        </div>     <!-- End Team 4th Column-->
      </div>    <!-- End Team Row-->
    </div>  <!-- End Team Container -->
  </div> <!-- End Team Jumbotron -->

  <!--Start Contact Us-->
  <div class="container" id="Contact"> <!--Start Contact Us Container-->
    <h2 class="text-center mb-4">Feedback</h2>    <!-- Contact Us Heading -->
    <div class="row">           <!--Start Contact Us Row-->
      <div class="col-md-8">    <!--Start Contact Us 1st Column-->
        <form action="feedbackconnect.php" method="post">
          <input class="form-control" name="name" placeholder="Name" /><br />
          <input class="form-control" name="phone" placeholder="Phone" /><br />
          <input class="form-control" name="email" placeholder="E-mail" /><br />
          <textarea class="form-control" name="text" placeholder="Enter feedback" style="height:150px;"></textarea><br />
          <input class="btn btn-primary" type="submit" value="Send" /><br /><br />
        </form>
      </div>  <!-- End Contact Us 1st Column-->

      
          <!-- End Contact Us 2nd Column-->
    </div>    <!-- End Contact Us Row-->
  </div>  <!-- End Contact Us Container-->    <!-- End Contact Us -->

  <!-- Start Footer-->
  <footer class="container-fluid bg-dark text-white mt-5" style="border-top: 3px solid #DC3545;">
    <div class="container">   <!-- Start Footer Container -->
      <div class="row py-3">    <!-- Start Footer Row -->
        <div class="col-md-6">      <!-- Start Footer 1st Column -->
          <div>
            <span>Follow Us: </span>
            <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f px-3"></i></a>
            <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter pr-3"></i></a>
            <a href="https://www.youtube.com/user" target="_blank"><i class="fab fa-youtube pr-3"></i></a>
            <a href="#" target="_blank"><i class="fab fa-google-plus-g pr-3"></i></a>
            <a href="#" target="_blank"><i class="fas fa-rss pr-3"></i></a>
          </div>
        </div>    <!-- End Footer 1st Column -->

        <div class="col-md-6 text-right">   <!-- Start Footer 2nd Column -->
          <small> <a href="#" target="_blank"></a> &copy;  </small>
        </div>    <!-- End Footer 2nd Column -->
      </div>    <!-- End Footer Row -->
    </div>    <!-- End Footer Container -->
  </footer> <!-- End Footer -->

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
</body>
</html>

