<?php
   require 'includes/db.connection.php';
   session_start();
   
   $user_check = $_SESSION['login_admin'];
   
   $ses_query = mysqli_query($conn,"SELECT ausername FROM admin WHERE ausername = '$user_check'");
   
   $row = mysqli_fetch_assoc($ses_query);
   
   $login_session = $row['ausername'];
   
   if(!isset($_SESSION['login_admin'])){
      header("location: adminlogin.php");
   }