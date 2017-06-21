<?php
   require '../includes/db.connection.php';
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      // username and password sent from form 
      $username = mysqli_real_escape_string($conn,$_POST['userName']);
      $password = mysqli_real_escape_string($conn,$_POST['password']);
      $firstname = mysqli_real_escape_string($conn,$_POST['firstName']);
      $lastname = mysqli_real_escape_string($conn,$_POST['lastName']);
      $contactno = mysqli_real_escape_string($conn,$_POST['contactNumber']);
      $email = mysqli_real_escape_string($conn,$_POST['userEmail']);
    
      // 
      $query = " SELECT * FROM agents WHERE username = '$username' and apassword = '$password' ";
      $result = mysqli_query($conn,$query);
      
      $row = mysqli_fetch_assoc($result);
      $active = $row['username'];
      
      //check if the record exists
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row	
      if($count == 1) {
          $error = "User Alreadey Exists";
          $_SESSION['login_error'] = $error;
         
         header("location: ../agentlogin.php");
      }else {
          $query = "INSERT INTO agents VALUES( null,'$username','$firstname','$lastname','$contactno','$password','$email' ";
         header("location: ../agentpanel.php");
      }
   }