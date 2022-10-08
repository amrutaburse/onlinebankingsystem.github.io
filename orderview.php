<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Order Form</title>
	<link rel="stylesheet" href="css/ostyle.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
  <?php include 'oconnect.php';?>
  <?php
$message = '';
$connect = new PDO('mysql:host=localhost;dbname=internship','root','');
if(isset($_POST["email"]))
{
$sql = "SELECT * FROM `order` WHERE id=$id";
    $result =mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

  $user_data = array(
    ':fname'    => $_POST["fname"],
    ':lname'     => $_POST["lname"],
    ':thing'        => $_POST["thing"],
    ':quantity'      => $_POST["quantity"],
    ':date'       => $_POST["date"],
    ':email'     => $_POST["email"],
    ':phonenumber'     => $_POST["phonenumber"],
    ':address'     => $_POST["address"],
    ':district'     => $_POST["district"],
    ':postalcode'     => $_POST["postalcode"]


 );
  $statement = $connect->prepare($query);
  if($statement->execute($user_data)){

  echo"<script>alert('order successfully');</script>";

    

  } 
  else
  {
    $message = '
    <div class="alert alert-SUCCESS">
    There is an error in order
    </div>
    ';
  }
}



?>

<div class="wrapper">
    <div class="title">
      Order Form
    </div>

        <form action="" id="orderform" method="POST">

    <div class="form" >
       <div class="inputfield">
          <label>First Name</label>
          <input type="text" id="fname" disabled value="<?php echo $fname;?>"  class="input" name="fname">
       </div>  
        <div class="inputfield">
          <label>Last Name</label>
          <input type="text" id="lname" disabled value="<?php echo $lname;?>"  class="input" name="lname">
       </div>  
       
        <div class="inputfield" id="thing" disabled value="<?php echo $thing;?>"  name="thing">
          <label>What do you want thing </label>

          <div class="custom_select">
            <select name="thing">
              <option value="">Select</option>
              <option value="stairing soft cover">Stairing soft cover</option>
              <option value="Glass Cleanner">Glass Cleanner</option>
              <option value="Vacumme cleanner">Vacumme cleanner</option>
              
            </select>
            
          </div>
       </div>
       <div class="inputfield">
          <label>Quantity</label>
          <input type="text" id="quantity" disabled value="<?php echo $quantity;?>"  class="input" required name="quantity">
       </div>
       <div class="inputfield">
          <label>Date</label>
          <input type="date" id="date" disabled value="<?php echo $date;?>"  class="input" name="date">
       </div>  
        <div class="inputfield">
          <label>Email Address</label>
          <input type="text" id="email" disabled value="<?php echo $email;?>"  class="input" name="email">
       </div> 
      <div class="inputfield">
          <label>Phone Number</label>
          <input type="text" id="phonenumber" disabled value="<?php echo $phonenumber;?>"  class="input" name="phonenumber">
       </div> 
      <div class="inputfield">
          <label>Address</label>
           <input type="text" id="address" disabled value="<?php echo $address;?>"  class="input" name="address">

       </div> 
       <div class="inputfield">
          <label>District</label>
          <input type="text" id="district" disabled value="<?php echo $district;?>"  class="input" name="district">
       </div>  
      <div class="inputfield">
          <label>Postal Code</label>
          <input type="text" id="postalcode" disabled value="<?php echo $postalcode;?>"  class="input" name="postalcode">
       </div> 
      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <p>Agreed to terms and conditions</p>
       </div> 
      <div class="inputfield">
        <input type="update" value="Update" class="btn" name="submit">
      </div>
    </div>
</div>
</form>	

<script>
  
        function submitQuery() {
            var form_data = $(‘#orderform’).serialize();
            console.log(form_data);
            $.ajax({
                url: “./oconnect.php”,
                type: “post”,
                dataType: “json”,
                data: form_data,
                beforeSend: function() {
                    $(‘#submit’).attr(“disabled”, true);
                    // $(‘#enquiry’).html(“<p>Saving your enquiry, please wait...</p>“);
                },
                success: function(response) {
                    $(‘#submit’).attr(“disabled”, false);
                    if (response[0][‘status’] === “Active”) {
                        $(‘#franchisee_form’)[0].reset();
                        swal(“Inquiry Saved!“, response[0][“message”], “success”);
                        // $(‘#enquiry’).html(“<p class=‘text-success’>” + response[0][‘message’] + “</p>“);
                    } else {
                        swal(“Opps!“, response[0][“message”], “error”);
                        // $(‘#enquiry’).html(“<p class=‘text-danger’>” + response[0][‘message’] + “</p>“);
                    }
                }
            });
        }
    </script>
</script>
<!-- <script>
  $(document).ready(function(){
    $('#submit').on('click', function() {
     $('#submit').attr("disabled", "disabled");
     var fname = $('#fname').val(); 
     var lname = $('#lname').val();
     var thing = $('#thing').val();
     var quantity = $('#quantity').val();
     var date = $('#date').val();
     var email = $('#email').val();
     var phonenumber = $('#phonenumber').val(); 
     var address = $('#address').val();
     var district = $('#district').val(); 
     var postalcode = $('#postalcode').val(); 
     if(fname!="" && lname!="" && thing!="" && quantity!="" && date!="" && email!="" && phonenumber!="" && address!"" && district!"" && postalcode!""){
       $.ajax({
                url: "oconnect.php",
                type: "POST",
                data: {
                  fname: fname,
                  lnme: lname,
                  thing: thing,
                  quantity: quantity,
                  date: date,
                  email: email,
                  phonenumber: phonenumber,
                  address: address,
                  district: district,
                  postalcode: postalcode

                },
                cache: false,
                success: function(dataResult){
                  var dataResult = JSON.parse(dataResult);
                  if(dataResult.statusCode==200){
                    $("#submit").removeAttr("disabled");
                    $('#fupForm').find('input:text').val('');
                    $("#success").show();
                    $('#success').html('Data added successfully');
                  }
                    swal ( "Error" ,  "Please enter name" ,  "error" );
          }else{
               swal ( "Success" ,  "Please" ,  "success" )
          }
        }
      }
    });
  });
</script> -->
	
</body>
</html>