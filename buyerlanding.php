<?php
ob_start(); 
include 'scripts/agent.Session.php';
$page = "buyer";
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
                    <h3>Not your everyday housing Agency</h3>
                    <h4>We not only help you get the next home but we also help your find Office Space and Rental of property.</h4>
                    
                </div>
            </div>

            <div class="item">
                <div id="imageContainer2">
                    <div class="text-center">
                        <h2>Favourite</h2>
                        <h3>Get to like your property and save the so you don't have to look for them again</h3>
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
                <?php
                    $query = "SELECT * FROM houses";
                    $result = mysqli_query($conn,$query);

                    while($row = mysqli_fetch_assoc($result)){
                ?>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                    <img src="<?php echo $row['image'] ?>"/>
                    <div class="caption">
                        <h3><?php echo $row['price'] ?></h3>
                        <p> <?php echo $row['description'] ?></p>
                        <p><a href="#" class="btn btn-primary" role="button">favourite</a></p>
                    </div>
                    </div>
                </div>
                <?php 
                }
                ?>
                </div>
            </div>
        </div>
    </section>
    <!---------------- Footer ---------------->
    <?php include 'templates/footer.php';?>

</body>

</html>