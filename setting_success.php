<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <!--jQuery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Success Page</title>
</head>
<body>
    <div class="navbar  navbar-light bg-success navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><b>E-Store</b></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                  
            <ul class="nav navbar-nav navbar-right mr-auto bg-success">
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span><b> Sign Up</b></a></li>
                    <li><a button type="button" href="#"  data-target="#mymodal" data-toggle="modal"><span class="glyphicon glyphicon-log-in"></span> <b>Login</b></a></li>
                   
  
                    
    
                    

                    <li><a href="aboutus.php"><span class="glyphicon glyphicon-list-alt"></span><b> About Us</b></a></li>
                    <li><a href="contactus.php"><span class="glyphicon glyphicon-phone"></span><b>Contact Us </b></a></li>
                </ul>
            </div>
        </div>
    </div>
  <br><br><br>  <div class="container">
        <h2> <b>Your password successsfully updated .<br><br>For secuirity purpose please  </b></h2>
     
      <a button type="button" href="#"  data-target="#mymodal" data-toggle="modal"> <br><h2><b><u>click here</u></b></h2> <h2> </a>To Login again and Enjoy shopping</h2>
      <br>  <h2><b>Thank you</b><hr>
    </div>
    <?php
    include("login.php");
    ?>
</body>
</html>