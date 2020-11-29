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
    <title>E-store/Contact Us</title>
</head>
<body>
    <?php
    include("header.php");
    
    ?>
    <div class="jumbotron">
        <div class="row">
            <div class="col-lg-8">
                <ul class="list-group center-list">
                    <li><h2><b><u>LIVE SUPPORT</u></b></h2></li>
                    <li><p>24 hours | 7 days a week | 365 days a year Live Technical Support </p></li>
                    <li>Provide Support software can make your website visitors feel as though they are visiting a brick and mortar retail store. They can be greeted when they enter; products that suit their needs can be shown to them. If they need assistance, their questions can be answered online in real time. Promotions and discounts can be offered to them while they are browsing. Such real-time interaction provides a high quality shopping experience. Customers will remember their positive experience and keep coming back.</li>
                </ul>
            </div>                              
            <div class="col-lg-4">
                <img src="image/images.jpeg" class="pull-right">
            </div>               
        </div>
    </div>
    <div class="container-fluid">
    
        <div class="row">
            <div class="col-lg-7">
                
                    <h2><b><u>CONTACT US</u></b></h2>
                    <form method="post" action="contact_script.php">
                     <b>Name:</b>
                    <br> <input type="text" name="name" id="name"><br>
                    <br><b>Email:</b>
                      <br> <input type="email" name="email" id="email"><br>
                  <br><b>Message:</b>
                   <br> <textarea class="set" name="message" id="message"> </textarea>
                    <br><button class="btn btn-primary" type="submit" name="submit">Submit</button>
                    </form>
                
            </div>                              
            <div class="col-lg-5">
               <h1>Company Information</h1><br>
               500 Lorem Ipsum Dobor Sit<br>
               22-56-2-9 Sit Amet, Lorem,<br>
               USA<br><br>
               Phone : (00) 222 666 444<br>
               Fax : (000) 000 000 00 0<br>
               Email : info@mycompany.com <br>
               Follow on : Facebok, Twitter
                
            </div>  


        </div>
</div>
        
       <br> <?php
        include("footer.php");
        ?>
    
</body>
</html>