<?php
$id = $_GET['id'];

$servername="localhost"; 
$username = "root";
$password ="";
$database = "banking_system";

 $conn = mysqli_connect($servername,$username,$password,$database);
 $sql = "DELETE FROM `loanp_tb` WHERE id=$id";

 $delete = mysqli_query($conn,$sql);
 if($delete)
 {
 		header("Location:dashboardloanconnect.php");
 }

?>
