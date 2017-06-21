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


    <!---------------- About ---------------->
    <section id="about" class="about">
        <div class="container">
            <div class="row text-center">
                <h2>What we do!</h2>
                <div class="col-sm-4">
                    <img height="90" src="img/sale.png">
                    <h3 class="text-uppercase text-center">Selling</h3>
                    <p class="text-center">we sell affordable homes and office space</p>
                </div>

                <div class="col-sm-4">
                    <img height="90" src="img/rent.png">
                    <h3 class="text-uppercase text-center">Renting</h3>
                    <p class="text-center">we offer rental services from office to homes</p>
                </div>

                <div class="col-sm-4">
                    <img height="90" src="img/sold.png">
                    <h3 class="text-uppercase text-center">Sold</h3>
                    <p class="text-center">we inform you on houses already sold</p>
                </div>
            </div>
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

    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
    </script>
    <script src="js/main.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>