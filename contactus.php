<?php
ob_start(); 
require 'includes/db.connection.php';
?>
<!doctype html>
<html class="no-js" lang="">
    <?php include 'templates/head.php';?>

    <body>

      <!---------------- Header ---------------->
     <?php include 'templates/header.php';?>

    <!----------------  backgroundimage ---------------->
    <?php include 'templates/backgroundimage.php';?>

     <!----------------  ---------------->
     <section>
         <div class="container">
             <div class="row">
                 <div class="col-sm-5">
                 <img src="img/me.jpg" alt="profile picture">
                 <p>Raydine</p>
                 <p>Computer Science 2013</p>
                 <p>15931879212 or raydine@yahoo.com</p>
                 </div>

                 <div class="col-sm-7">
                     <h3>How Raydine Housing Agency </h3></br></br>
                     
                        <p>RaydineHousing Agency was made in 2013 in Jinzhou, China.</br>
                         It is part of the fulfilment for a Bachelor of Engineering in Computer Science Degree.</br>
                        The Website Allows Agents to list house so that pontential buyers can look at them and buy</br>
                        </p>

                        <p>The website Front-End was made using </br>
                        <li>HTML5</li>
                        <li>CSS3</li>
                        <li>JavaScript</li>
                        </p>
                        <p>Additional Technologies </br>
                        <li>Bootstrap Frame Work</li>
                        <li>jQuery</li>
                        </p>
                        
                        <p>The website Back-End was made using </br>
                        <li>PHP</li>
                        <li>MySQL</li>                        
                        </p>

                        <p>The Website runs on an Apache 2.4 HTTP server</p>                        
                 </div>
             </div>
         </div>
     </section>
     
    <!---------------- footer ---------------->
<?php include 'templates/footer.php';?>

</body>
</html>
