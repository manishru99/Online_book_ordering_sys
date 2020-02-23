<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Paper Forest</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>We distribute knowledge.</h1>
                       <p>Flat 40% OFF on all books.</p>
                       <a href="products.php" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/rich.jpg" alt="rich">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Finance</p>
                                        <p>Choose among the best available in the world.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/reema.jpg" alt="book">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Engineering</p>
                                    <p>Original books from the author.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/meluha.jpg" alt="book">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Fiction</p>
                                   <p>Exclusive collection of originals.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>Copyright &copy Paper Forest. All Rights Reserved. | Contact Us: +91 9594008979</p>
                   <p>This website is developed by <br> Manish Utekar , Pooja Shirude <br> Rutuja Saigaonkar , Prajakta Tambe </p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>