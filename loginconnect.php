<?php
session_start();

$con=mysqli_connect('localhost','root');
if($con){
  echo "connection successful";
}else{
	echo "no connection";
}

$db = mysqli_select_db($con,'banking_system');
if(isset($_POST['login'])){
	$adminusername = $_POST['adminusername'];
	$password = $_POST['password'];

 $sql="SELECT * FROM `login` WHERE adminusername='$adminusername' AND password ='$password' ";
 $query = mysqli_query($con,$sql);
 $row = mysqli_num_rows($query);
 	if($row == 1){
 		echo "login successfully";
 		$_SESSION['adminusername'] = $adminusername;
 		header('location:dashboard.php');
 	}else{
 		echo "login failed";
 		header('location:login.php');
 	}
 }






?>