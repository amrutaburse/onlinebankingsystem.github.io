
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/signup-img.jpg" alt="">
                </div>
                <div class="signup-form">
                    <form action="connect.php" method="POST">
                        <h2>Registration form</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">First Name :</label>
                                <input type="text" name="first_name" id="name" required/>
                            </div>
                            <div class="form-group">
                                <label for="father_name">Last Name :</label>
                                <input type="text" name="last_name" id="father_name" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Address :</label>
                            <input type="text" name="address" id="address" required/>
                        </div>
                        <div class="form-radio">
                            <label for="gender" class="radio-label">Gender :</label>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="male" >
                                <label for="male">Male</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="female">
                                <label for="female">Female</label>
                                <span class="check"></span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                            <label for="state">State :</label>
                            <input type="text" name="state" id="state">
                        </div>
                            
                            <div class="form-group">
                            <label for="city">City :</label>
                            <input type="text" name="city" id="city">
                        </div>
                            
                        </div>
                        <div class="form-group">
                            <label for="birth_date">DOB :</label>
                            <input type="text" name="birth_date" id="birth_date">
                        </div>
                        <div class="form-group">
                            <label for="pincode">Pincode :</label>
                            <input type="text" name="pincode" id="pincode">
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email ID :</label>
                            <input type="email" name="email" id="email" />
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />

                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>


    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>