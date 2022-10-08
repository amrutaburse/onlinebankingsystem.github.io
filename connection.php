<?php
$message = '';
$connect = new PDO('mysql:host=localhost;dbname=banking_system','root','');
if(isset($_POST["email"]))
{
	$query ="
	INSERT INTO loan_tb
	(first_name,last_name,gender,email,password,address,mobile_no)VALUES(:first_name,:last_name,:gender,:email,:password,:address,:mobile_no)
	";
	$password_hash = password_hash($_POST["password"],PASSWORD_DEFAULT);
	$user_data = array(
		':first_name'    => $_POST["first_name"],
		':last_name'     => $_POST["last_name"],
		':gender'        => $_POST["gender"],
		':email'         => $_POST["email"],
		':password'      => $_POST["password"],
		':address'       => $_POST["address"],
		':mobile_no'     => $_POST["mobile_no"]

	);
	$statement = $connect->prepare($query);
	if($statement->execute($user_data)){

    
echo"<script>alert('Registration successfully');</script>";

		

	} 
	else
	{
		$message = '
		<div class="alert alert-SUCCESS">
		There is an error in Registration
		</div>
		';
	}
}



?>