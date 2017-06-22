<?php
ob_start(); 

   include_once 'includes/db.connection.php';
   session_start();

   $error="";
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {

        if(isset($_POST['firstname'])){
            $firstname = trim(mysqli_real_escape_string($conn,$_POST['firstName']));
        }else{
            $firstname ="";
        }
         if(isset($_POST['lastName'])){
            $lastname = trim(mysqli_real_escape_string($conn,$_POST['lastName']));
        }else{
            $lastname="";
        }
         if(isset($_POST['firstname'])){
            $email = trim(mysqli_real_escape_string($conn,$_POST['userEmail']));
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = "Invalid email, please re-enter valid email"; 
}
        }else{
            $email ="";
        }
      
      // username and password sent from form 
      $username = trim(mysqli_real_escape_string($conn,$_POST['username']));
      $password = trim(mysqli_real_escape_string($conn,$_POST['password']));
      $password1 = trim(mysqli_real_escape_string($conn,$_POST['passworda']));

      $contactno = trim(mysqli_real_escape_string($conn,$_POST['contactNumber']));
      $email = trim(mysqli_real_escape_string($conn,$_POST['userEmail']));
    
      //

      $query = " SELECT * FROM agents WHERE username = '$username' and apassword = '$password' ";
      $result = mysqli_query($conn,$query);
      
      $row = mysqli_fetch_assoc($result);
      $active = $row['username'];
      
      //check if the record exists
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row	
      if($count == 1) {
          $error = "User Already Exists";
      }else {
          if($password == $password1){
            $query1 = "INSERT INTO `agents`(`userID`, `username`, `f_name`, `l_name`, `contact`, `upassword`, `email`) VALUES (null, '$username','$firstname','$lastname','$contactno','$password','$email')";
            $retval = mysqli_query($conn,$query1);
            if($retval){
                header("location: ../agentlogin.php"); 
            }else{
                $error = "Failed User not created Try Again";
            }                              
          }else{
              $error = "Password's do not match";
          }        
      }
   }
   ?>
    <!doctype html>
    <html class="no-js" lang="">

    <?php include "templates/head.php";?>

    <body>

        <!---------------- Header ---------------->
        <?php include "templates/header.php";?>

        <!---------------- loging in for User---------------->


        <section id="signup">
            <div class=container>
                <div class="row">
                    <!---------------- Signing Up moddeling starts here ---------------->
                   
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            
                            <div class="modal-header">
                                <h2>Agent Sign Up</h2>
                                <h4 class="modal-title">Sign Up</h4>
                            </div>
                            <div class="modal-body">
                            <p><span style="color:red;"><?php echo $error; ?></span></p>
                                <form action="agentsignup.php" method="POST">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Username" type="text" name="username" required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="First Name" type="text" id="firstName" name="firstName" required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Last Name" type="text" id="lastName" name="lastName" required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Contact Number" type="text" id="contactNumber" name="contacNumber" required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Email" type="email" id="userEmail" name="userEmail" required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" type="password" name="password" required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Renter Password" type="password" id="inputPasword" name="password1" required>
                                    </div>
                                    <div class="modal-footer">
                                    <button class="btn btn-primary btn-block" type="submit">Sign Up</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> >
        <!---------------- Ends here ---------------->
        <!---------------- Footer ---------------->
        <?php include 'templates/footer.php';?>

    </body>

    </html>