<?php
$message = '';
$connect = new PDO('mysql:host=localhost;dbname=banking_system','root','');
if(isset($_POST["email"]))
{
  $query ="
  INSERT INTO `approve`(`requestid`, `firstname`, `lastname`, `loan`, `ammount`, `date`, `email`, `phonenumber`, `address`, `rate`, `expires`)VALUES(:requestid,:firstname,:lastname,:loan,:ammount,:date,:email,:phonenumber,:address,:rate,:expires)
  ";
  $user_data = array(
    ':requestid'    => $_POST["id"],
    ':firstname'     => $_POST["fname"],
    ':lastname'        => $_POST["lname"],
    ':loan'         => $_POST["loan"],
    ':ammount'      => $_POST["ammount"],
    ':date'       => $_POST["date"],
    ':email'     => $_POST["email"],
    ':phonenumber'     => $_POST["phonenumber"],
    ':address'     => $_POST["address"],
    ':rate'     => $_POST["rate"],
    ':expires'     => $_POST["expires"]


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