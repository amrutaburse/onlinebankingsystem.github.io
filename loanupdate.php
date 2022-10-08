
<?php
  $id = $_POST['id'];
  $fullname = $_POST['full-name'];
  $email = $_POST['email-address'];
  $phonenumber = $_POST['phonenumber'];
  $permanantadd = $_POST['permanent-address'];
  $monthlyincome = $_POST['monthlyincome'];
  $loantype = $_POST['loantype'];
  $loanreason = $_POST['loanreason'];
  $loanammount = $_POST['loanammount'];

$servername="localhost"; 
$username = "root";
$password ="";
$database = "banking_system";


 	$conn = mysqli_connect($servername,$username,$password,$database);
 	$sql ="UPDATE `loanp_tb` SET `fullname`='$fullname',`email`='$email',`phonenumber`='$phonenumber',`permanantadd`='$permanantadd ',`monthlyincome`='$monthlyincome',`loantype`='$loantype',`loanreason`='$loanreason',`loanammount`='$loanammount' WHERE 1";

 	$update = mysqli_query($conn,$sql);
 	if($update)
 	{
 		header("Location:dashboardloanconnect.php");
 	}


 	 
?>