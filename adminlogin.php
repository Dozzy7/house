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
      $query = " SELECT ausername FROM admin WHERE ausername = '$username' and apassword = '$password' ";
      $result = mysqli_query($conn, $query);
      
      $row = mysqli_fetch_assoc($result);
      $active = $row['ausername'];
      
      //check if the record exists
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row	
      if($count == 1) {
         isset($_SESSION['login_admin']);
         $_SESSION['login_admin'] = $username;
         header("location: ../adminpanel.php");
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
    <?php include "templates/header.php";?> 

    <!---------------- loging in for User---------------->

<section id="login">
<div class=container>
    <div class="row">
     <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Login for Admin</h4>
                    </div>
                        <div class="modal-body">
                        <p><span style="color:red;"><?php echo $error; ?></span></p>
                        <form action="adminlogin.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" type="text" name="username" required>
                            </div>
                                      
                             <div class="form-group">
                                <input class="form-control" placeholder="Password" type="password" name="password" required>
                            </div> 
                            <div class="modal-footer">
                                <button class="btn btn-primary btn-block" type="submit">Login</button> 
                            </div>          
                        </form>
                            </div>
                     
                    <div class="text-center">
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

