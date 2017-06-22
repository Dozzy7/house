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

    <!----------------  backgroundimage ---------------->
    <?php include 'templates/backgroundimage.php';?>

    <!----------------  Body ---------------->

    <section id="about" class="text-center">
        <div class="col-sm-6 imageC">
            <h2> We are Africas largest property portal. </h2>
        </div>

        <div class="col-sm-6">

            <article><br><br> Our aim is to empower the Chinas’s decisions around property. <br> Our sophisticated, yet simple, property search platform <br> makes it easy for home hunters to find their ‘happy’.<br> Raydines plc floated on the Aficas Stock Exchange
                on 15 March 2013.<br><br>
            </article>
            <article>
                <h3>Welcome to Rayline Housing Agency</h3>
                We are the fastest growing company in the online real estate space.<br> Born out of the need to simplify the search for a home, <br> free of fake listings and endless site visits,<br> we created a unique property search platform that filled
                the gaps<br> left by others in the market. Led by passionate problem-solvers,<br> and backed by top investors from around the world,<br> we are poised to become the most trusted place to find a home in Africa.
            </article>
        </div>

    </section>
    <!---------------- Footer ---------------->
    <?php include 'templates/footer.php';?>

</body>

</html>