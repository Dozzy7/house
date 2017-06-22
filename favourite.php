<?php
ob_start(); 
require 'includes/db.connection.php';
?>
<!doctype html>
<html class="no-js" lang="">

<?php include "templates/head.php";?>

<body>
    <!---------------- Header ---------------->
    <?php include "templates/headerafter.php";?>

    <!----------------  slider ---------------->
    <section>
        <div class="jumbotron">
            <h1>Favourite</h1>
            <p>Here you will will be able to view your favourite proerties and
                 store them for later contact if you so wish</p>
            
        </div>
    </section>

    <!---------------- Advert ---------------->
    <section id="advert" class="advert">
        <div class="container">
                <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                    <img src="img/slider1.jpg" alt="...">
                    <div class="caption">
                        <h3>25000RMB</h3>
                        <p> Description</p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!---------------- Footer ---------------->
    <?php include 'templates/footer.php';?>

</body>

</html>