<?php
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $text = $_POST['text'];

$servername="localhost"; 
$username = "root";
$password ="";
$database = "banking_system";

  $conn = mysqli_connect($servername,$username,$password,$database);
  $sql = "INSERT INTO `feedback_tb`(`name`, `phone`, `email`, `text`) VALUES  ('$name','$phone','$email','$text')";

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