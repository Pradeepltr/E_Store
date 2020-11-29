<?php
include("connection.php");
?>
<?php
session_start();
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}

?>
<?php
if (isset($_POST['submit'])) {
    $email= $_SESSION['email'];
    $oldpass= md5($_POST['oldpassword']);
    $newpass= md5($_POST['password']);
    $cnfpass= md5($_POST['password1']);
    $query1= "SELECT *	FROM signup WHERE email= '$email'";
    $ins= mysqli_query($con, $query1);
    $data= mysqli_fetch_assoc($ins);
    $pass= $data['password'];
    
    $_SESSION['password']=$pass;
    if ($pass==$oldpass) {
        if ($newpass==$cnfpass) {
            $query= "UPDATE `signup` SET password = '$cnfpass' WHERE email='$email';";
            $ins= mysqli_query($con, $query);
            if ($ins) {
                session_unset();
                session_destroy();
                header('location:setting_success.php');
            } 
        } else {
            $mg= "new and confirm password not match";
        }
    }
    else{
        $msg="old password not match";
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
    <title>Setting</title>
</head>
<body>
    <?php
    include("login_header.php");
    ?>
    <?php
    echo $ddd;
    ?>
    
  <br><br> <br><br> <div class="container-fluid" id="content">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4" id="settings-container">
                    <h2><b>Change Password</b></h2>
                    <form action="" method="POST">
                        <div class="form-group">
                            <input type="password" class="form-control" name="oldpassword"  placeholder="Old Password" required = "true">
                           <b> <?php
                            echo $msg;
                            
                            ?></b>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="New Password" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password1"  placeholder="Re-type New Password" required = "true">
                           <b> <?php
                             echo $mg;
                            
                            ?>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Change</button>
                       
                    </form>
                    
                </div>
            </div>
    
</body>
</html>