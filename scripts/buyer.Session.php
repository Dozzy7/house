<?php
   require 'includes/db.connection.php';
   session_start();
   
   $user_check = $_SESSION['login_buyer'];
   
   $ses_query = mysqli_query($conn,"SELECT username FROM buyers WHERE username = '$user_check'");
   
   $row = mysqli_fetch_assoc($ses_query);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location: indexlogin.php");
   }