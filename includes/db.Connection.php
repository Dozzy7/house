<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'app');
   define('DB_PASSWORD', '1234');
   define('DB_DATABASE', 'house');
   
   $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>