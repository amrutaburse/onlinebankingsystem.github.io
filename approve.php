<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Approve Form</title>
	<link rel="stylesheet" href="astyle.css">
</head>
<body>

<div class="wrapper">
    <div class="title">
      Approve Form
    </div>
        <form action="approveconnect.php" method="POST">

    <div class="form">
      <div class="inputfield">
          <label>Request Id</label>
          <input type="text" class="input" name="id">
       </div>  
       <div class="inputfield">
          <label>First Name</label>
          <input type="text" class="input" name="fname">
       </div>  
        <div class="inputfield">
          <label>Last Name</label>
          <input type="text" class="input" name="lname">
       </div>  
       
        <div class="inputfield" name="thing">
          <label>Which type of loan </label>

          <div class="custom_select">
            <select name="loan">
              <option value="">Select</option>
              <option value="home loan">Home Loan</option>
              <option value="business loan">Business Loan</option>
              <option value="personal loan">Personal Loan</option>

            </select>
            
          </div>
       </div>
       <div class="inputfield">
          <label>Loan Ammount</label>
          <input type="text" class="input" name="ammount">
       </div>
       <div class="inputfield">
          <label>Date</label>
          <input type="date" class="input" name="date">
       </div>  
        <div class="inputfield">
          <label>Email Address</label>
          <input type="text" class="input" name="email">
       </div> 
      <div class="inputfield">
          <label>Phone Number</label>
          <input type="text" class="input" name="phonenumber">
       </div> 
      <div class="inputfield">
          <label>Address</label>
           <input type="text" class="input" name="address">

       </div> 
       <div class="inputfield">
          <label>Interest Rate</label>
          <input type="text" class="input" name="rate">
       </div>  
      <div class="inputfield">
          <label>Interest Rate Lock Expires</label>
          <input type="text" class="input" name="expires">
       </div> 
      
      <div class="inputfield">
        <input type="submit" value="Submit" class="btn" name="submit">
      </div>
    </div>
</div>	
	
</body>
</html>