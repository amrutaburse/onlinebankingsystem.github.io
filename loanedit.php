<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/loanpage.css">



    <link rel="icon" href="Favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>Loan</title>
</head>
<body>
    <?php

    $id = $_GET['id'];
    //echo $id;

    $severname="localhost"; 
    $username = "root";
    $password ="";
    $database = "banking_system";

    $conn = mysqli_connect($severname,$username,$password,$database);

    $sql = "SELECT * FROM `loanp_tb` WHERE id=$id";
    $result =mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    // print_r($row);
     
     $fullname = $row['fullname'];
     $email = $row['email'];
     $phonenumber = $row['phonenumber'];
     $permanantadd = $row['permanantadd'];
     $monthlyincome = $row['monthlyincome'];
     $loantype = $row['loantype'];
     $loanreason = $row['loanreason'];
     $loanammount = $row['loanammount'];



    ?>

<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
    <a class="navbar-brand" href="#">Apply For Loan</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    
    </div>
</nav>

<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Loan</div>
                        <div class="card-body">
                            <form action="loanupdate.php" method="POST">
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">Full Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="full_name" value="<?php echo $fullname;?>" class="form-control" name="full-name">
                                    </div>
                                </div>

                             <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" value="<?php echo $email;?>"class="form-control" name="email-address">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="user_name" class="col-md-4 col-form-label text-md-right">Phone Number</label>
                                    <div class="col-md-6">
                                        <input type="text" id="phonenumber" value="<?php echo $phonenumber;?>" class="form-control" name="phonenumber">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">Permanant Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="permanantaddress"  value="<?php echo $permanantadd;?>" class="form-control" name="permanent-address">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="present_address" class="col-md-4 col-form-label text-md-right">Monthly Income</label>
                                    <div class="col-md-6">
                                        <input type="text" id="monthlyincome" value="<?php echo $monthlyincome;?>" class="form-control" name="monthlyincome">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="permanent_address" class="col-md-4 col-form-label text-md-right">Loan Type</label>
                                    <div class="col-md-6">
                                        <input type="text" id="loantype" value="<?php echo $loantype;?>" class="form-control" name="loantype">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="permanent_address" class="col-md-4 col-form-label text-md-right">Loan Reason</label>
                                    <div class="col-md-6">
                                        <input type="text" id="loanreason" value="<?php echo $loanreason;?>" class="form-control" name="loanreason">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="permanent_address" class="col-md-4 col-form-label text-md-right">Loan Ammount</label>
                                    <div class="col-md-6">
                                        <input type="text" id="loanammount"  value="<?php echo $loanammount;?>" class="form-control" name="loanammount">
                                    </div>
                                </div>

                                

                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                        Update
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>

</main>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>