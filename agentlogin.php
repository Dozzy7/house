<?php
ob_start(); 
require 'includes/db.connection.php';

?>
<!doctype html>
<html class="no-js" lang="">
    
    <?php include "templates/head.php";?>

<body>

      <!---------------- Header ---------------->
    <?php include "templates/header.php";?> 

    <!---------------- loging in for User---------------->
<!---------------- Signing Up moddeling starts here ---------------->
<section id="login">
<div class=container>
    <div class="row">  
     <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Login for Agent</h4>
                    </div>
                        <div class="modal-body">
                        <p></p>
                        <form action="scripts/script.Agent.Login.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" type="text" name="username" required>
                            </div>
                                      
                             <div class="form-group">
                                <input class="form-control" placeholder="Password" type="password" name="password" required>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary btn-block" type="submit">Login</button> 
                            </div>          
                        </form>
                            </div>
                    <div class="text-center">
                        <p>
                            <li><a href="">Signup as Buyer </a></li>
                            <li><a href="">Signup as Agent </a></li>
                            <li><a href="">Login as Buyer</a></li>
                            <li><a href=""> Login as Agent</a></li>
                        </p>
                    </div>
                </div>
            </div>           
        </div>
    </div>
</section> >
<!---------------- Ends here ---------------->
    <!---------------- Footer ---------------->
    <?php include 'templates/footer.php';?>


        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="js/main.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
