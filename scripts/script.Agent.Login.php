<?php
   require '../includes/db.connection.php';
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      // username and password sent from form 
      $username = mysqli_escape_string($conn,$_POST['username']);
      $password = mysqli_escape_string($conn,$_POST['password']); 
    
      // 
      $query = " SELECT * FROM agents WHERE username = '$username' and apassword = '$password' ";
      $result = mysqli_query($conn,$query);
      
      $row = mysqli_fetch_assoc($result);
      $active = $row['username'];
      
      //check if the record exists
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row	
      if($count == 1) {
         isset($_SESSION['login_agents']);
         $_SESSION['login_agents'] = $username;

         header("location: ../agent.php");
      }else { 
         $error = "Your Login Name or Password is invalid";
         $_SESSION['login_error'] = $error;

         header("location: ../agentlogin.php");
      }
   }