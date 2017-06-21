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

        <section id="signup">
            <div class=container>
                <div class="row">
                    <!---------------- Signing Up moddeling starts here ---------------->
                    <h2>Signup for user</h2>
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">

                                <h4 class="modal-title">Sign Up</h4>
                            </div>
                            <div class="modal-body">
                                <form action="scripts/script.Agent.Signup.php" method="POST">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Username" type="text" name="username" required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="First Name" type="text" id="firstName" name="firstName" required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Last Name" type="text" id="lastName" name="lastName" required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Contact Number" type="text" id="contactNumber" name="contacNumber" required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Email" type="email" id="userEmail" name="userEmail" required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" type="password" name="password" required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Renter Password" type="password" id="inputPasword" required>
                                    </div>
                                    <div class="modal-footer">
                                    <button class="btn btn-primary btn-block" type="submit">Sign Up</button>
                                    </div>
                                </form>
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
        <script>
            window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
        </script>
        <script src="js/main.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>

    </html>