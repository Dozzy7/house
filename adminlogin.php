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

<?php include 'templates/widget/login.php';?>

<section id="ad_login">
<div class=container>
    <div class="row">
     <!---------------- Signing Up moddeling starts here ---------------->
                    <h2>login for Admin</h2>
                    <h2>login for Admin</h2>
                    
     <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Login for Admin</h4>
                    </div>
                        <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" type="text" name="username" required="" >
                            </div>
                                      
                             <div class="form-group">
                                <input class="form-control" placeholder="Password" type="password" id="inputPasword" required="" >
                            </div>
                                       
                        </form>
                            </div>
                            <div class="modal-footer">
                        <button class="btn btn-primary btn-block" type="submit">Login</button> 
                    </div>
                </div>
            </div>           
        </div>
    </div>
</section> >
                    <!---------------- Ends here ---------------->

    <!---------------- Footer ---------------->
    <?php include 'templates/footer.php';?>



        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="js/main.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
