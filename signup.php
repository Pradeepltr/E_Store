<?php
include("connection.php");

?>
<?php
if(isset($_POST['submit']))
{
$name= $_POST['name'];
$email= $_POST['email'];
$password= $_POST['password'];
$contact= $_POST['contact'];
$city= $_POST['city'];
$pass=md5($password);
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
  $regex_num = "/^[789][0-9]{9}$/";
  $query= "SELECT * FROM signup WHERE email='$email'";
  $run= mysqli_query($con, $query);
  $total= mysqli_num_rows($run);
  if($total==1)
  {
      $t= "Email exists";
  }
  elseif(!preg_match($regex_email, $email))
  {
      $r="Enter valid email";
  }
  elseif(!preg_match($regex_num, $contact))
  {
      $p="Enter valid phone";
  }
  else{
      $ins="INSERT INTO `signup` ( `name`, `email`, `password`, `contact`, `city`) VALUES ('$name', '$email', '$pass', '$contact', '$city');";
      $query1= mysqli_query($con, $ins);
      if($query1)
      {
          header('location:register.php');
      }
  }
}

?>




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
    <title>Sign Up</title>
    <style>
        
    </style>
</head>
<body>
    <?php
    include("header.php");
    
    ?>
    
   <br><br> <div class="row">
        <div class="col-lg-7">
        <img src="image/tcl-tri-hinge-foldable-ifa-2019-12.webp" width="750" class="left">
        </div>
     <br>   <div class="col-lg-5">
            <div class="log">
            
                <form method="post" action="">
                   <h2><b>Sign Up</b></h2>
                <br> <input type="text" name="name" id="name" placeholder="Name" required>
               <br><br> <input type="email" name="email" id="email" placeholder="Email" required>
                <b><?php
                echo $t;
                echo $r;
                ?></b>
                
               
    
                
                
                
                <br> <input type="password" name="password" id="password" placeholder="Password"required>
                <br><br> <input type="text" name="contact" id="contact" placeholder="Contact" required>
                <b><?php
                echo $p;
                ?>
                
                
               
                
                
                 <br><input type="text" name="city" id="city" placeholder="City" required>
                <br><br><button class="btn btn-primary" type="submit" name="submit">Submit</button>

                </form>
                </div>
                
            </div>
        </div>
    </div>
    

    
</body>


</html>

<br><br><br><?php
    include("footer.php");
    ?>