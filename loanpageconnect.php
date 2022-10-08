<?php
  $fullname = $_POST['full-name'];
  $email = $_POST['email-address'];
  $phonenumber = $_POST['phonenumber'];
  $permanantadd = $_POST['permanent-address'];
  $date = $_POST['date'];
  $monthlyincome = $_POST['monthlyincome'];
  $loantype = $_POST['loantype'];
  $loanreason = $_POST['loanreason'];
  $loanammount = $_POST['loanammount'];

$servername="localhost"; 
$username = "root";
$password ="";
$database = "banking_system";

  $conn = mysqli_connect($servername,$username,$password,$database);
  $sql = "INSERT INTO `loanp_tb`(`fullname`, `email`, `phonenumber`, `permanantadd`, `monthlyincome`, `loantype`, `loanreason`, `loanammount`) VALUES ('$fullname','$email','$phonenumber','$permanantadd','$monthlyincome','$loantype','$loanreason','$loanammount')";

  $insert = mysqli_query($conn,$sql);

  if($insert)
  {
    echo "Data inserted successfully..";
  }
  else
  {
    echo "error";
  }


  


?>