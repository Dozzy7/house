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
    <section>
        <div class="jumbotron">
            <h1>Favourite</h1>
            <p>Here you will will be able to view your favourite properties and store them for later contact if you so wish</p>            
        </div>
    </section>

    <!---------------- Advert ---------------->
    
<section id="advert" class="advert">
        <div class="container">
                <div class="row">
                <?php
                    $query = "SELECT * FROM houses,buyer_favorites, buyers WHERE buyers.username = buyer_favorites.userID AND houses.houseID = buyer_favorites.houseID";
                    $result = mysqli_query($conn,$query);

                    while($row = mysqli_fetch_assoc($result)){
                ?>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                    <img src="img/house2.jpg">
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