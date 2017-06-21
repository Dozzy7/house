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
    <section id="slider" class=" carousel slide" data-ride="carousel">
        <div class="carousel-inner">

            <div class="item active">
                <div id="imageContainer1" class="text-center">
                    <h2> Raydine Housing Agency</h2>
                    <h3>Not you everyday housing Agency</h3>
                    <h4>We not only help you get the next home but we also help your find Office Space and Rental of property.</h4>
                    
                </div>
            </div>

            <div class="item">
                <div id="imageContainer2">
                    <div class="text-center">
                        <h2>Signup for More</h2>
                        <h3>Get to like your property and arrange appointments with the sellers</h3>
                    </div>
                </div>
            </div>

            <div class="item">
                <div id="imageContainer3">
                    <div class="text-center">

                        <img width="200" src="img/logo.png">
                        <h2> Raydine Housing Agency</h2>
                    </div>
                </div>

            </div>
        </div>

        <a class="left carousel-control" href="#slider" role="button" data-slide="prev">
            <span class="glyphicon glypicon-chevron-left"></span>
        </a>

        <a class="right carousel-control" href="#slider" role="button" data-slide="next">
            <span class="glyphicon glypicon-chevron-right"></span>
        </a>

        <ol class="carousel-indicators">
            <li data-target="#slider" data-slide-to="0" class="active"></li>
            <li data-target="#slider" data-slide-to="1"></li>
            <li data-target="#slider" data-slide-to="2"></li>

        </ol>
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
                        <p><a href="#" class="btn btn-primary" role="button">favourite</a></p>
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