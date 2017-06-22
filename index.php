<?php
ob_start(); 
include_once 'includes/db.connection.php';
   session_start();

   $error = "";
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      // username and password sent from form 
      $username = mysqli_escape_string($conn,$_POST['username']);
      $password = mysqli_escape_string($conn,$_POST['password']); 
    
      // 
      $query = " SELECT username FROM buyers WHERE username = '$username' and upassword = '$password' ";
      $result = mysqli_query($conn, $query);
      
      $row = mysqli_fetch_assoc($result);
      $active = $row['username'];
      
      //check if the record exists
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row	
      if($count == 1) {
         isset($_SESSION['login_buyer']);
         $_SESSION['login_buyer'] = $username;
         header("location: ../buyerlanding.php");
      }else {
         $error = "username or password is invalid";
      }
   }
?>
<!doctype html>
<html class="no-js" lang="">
    
    <?php include "templates/head.php";?>

<body>

      <!---------------- Header ---------------->
    <header>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-collapse collapse">
                    <ul class="nav nav-justified">
                        
                        <li><a href="agentlogin.php">Login as Agent</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="contactus.php">Contact Us</a></li>
                        <li><a href="adminlogin.php">Admin</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=navbar-header>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
    </nav>
</header>

    <!---------------- loging in for User---------------->

  <!---------------- Signing Up moddeling starts here ---------------->
<section id="login">
<div class=container>
    <div class="row">
                    
     <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Buyer Login</h4>
                    </div>
                        <div class="modal-body">
                        <p><span style="color:red;"><?php echo $error; ?></span></p>
                        <form action="index.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" type="text" name="username" required>
                            </div>
                                      
                             <div class="form-group">
                                <input class="form-control" placeholder="Password" type="password" name="password" required>
                            </div>
                                   </div>
                            <div class="modal-footer">
                        <button class="btn btn-primary btn-block" type="submit">Login</button>           
                        </form>
                      
                    </div>
                    <div class="text-center">
                        <p>
                            <li>Not Yet A Memeber <a href="buyersignup.php"> Signup as Buyer </a></li>
                        </p>
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
