<?php
include("connection.php");



?>
<?php
$name= $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$query="INSERT INTO `contact_us` ( `name`, `email`, `message`) VALUES ( '$name', '$email', '$message');"
or die (mysqli_error($con));
$ins= mysqli_query($con, $query);
if($ins)
{
    header('location:submit.php');
}
?>