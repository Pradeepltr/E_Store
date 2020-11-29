<?php
session_start();
include("connection.php");
?>
<?php
if (isset($_POST['submit'])) {
    //echo "hello";
    $email= $_POST['email'];
    $password= $_POST['password'];
    $pass= md5($password);

    $query= "SELECT * FROM `signup` WHERE email='$email' && password='$pass'";
    $run= mysqli_query($con, $query);
    $total= mysqli_num_rows($run);
    //echo $total;
    //echo "hello";
    if ($total==1) {
        header('location:home.php');
        $query1= "SELECT *	FROM signup WHERE email= '$email'";
        $ins= mysqli_query($con, $query1);
        $data= mysqli_fetch_assoc($ins);
        $name= $data['name'];
        $_SESSION['email']=$email;
        $_SESSION['name']=$name;
    } else {
        header('location:login_error.php');
        
    }
}
?>