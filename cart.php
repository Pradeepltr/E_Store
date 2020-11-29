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




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    

    <!--jQuery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cart page</title>
    <style>
        
        th{
            width: 200px;
            font-size: medium;
        }
        td{
            width: 200px;
            border: 1px solid black;
            background-color: darkblue;
            
        }
        
    </style>
</head>
<body>
    <?php
    include("login_header.php");
    ?><br><br><br><br>
    <div class="container-fluid" id="content">
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4" id="settings-container">
               <table>
                   <th>Item Number</th>
                   <th>Price</th>
                   <tr>
                       <td>  </td>
                       <td>  </td>
                   </tr>
               </table>
            </div>
        </div>
    
</body>
</html>