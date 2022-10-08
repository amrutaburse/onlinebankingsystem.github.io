<?php
  $firstname = $_POST['first_name'];
  $lastname = $_POST['last_name'];
  $address = $_POST['address'];
  $gender = $_POST['gender'];
  $state = $_POST['state'];
  $city = $_POST['city'];
  $birthdate = $_POST['birth_date'];
  $pincode = $_POST['pincode'];
  $emailid = $_POST['email'];

$servername="localhost"; 
$username = "root";
$password ="";
$database = "banking_system";

  $conn = mysqli_connect($servername,$username,$password,$database);
  $sql = "INSERT INTO `register_tb`(`firstname`, `lastname`, `address`, `gender`, `state`, `city`, `dob`, `pincode`, `emailid`) VALUES ('$firstname','$lastname','$address','$gender','$state','$city','$birthdate','$pincode','$emailid')";

  $insert = mysqli_query($conn,$sql);

  if($insert)
  {
    echo "Data inserted successfully..";
    header("Location:home.php");

  }
  else
  {
    echo "error";
  }

?>