<?php
    include 'scripts/admin.Session.php';
?>
<!doctype html>
<html class="no-js" lang="">
    <?php include 'templates/head.php';?>

    <body>

      <!---------------- Header ---------------->
     <?php include 'templates/header.php';?>

    <!----------------  backgroundimage ---------------->
 

     <!----------------  ---------------->
     <section id="admin_tab">
    <div class="container">
          <div class="row">        
        <!--For adding a new house-->
                    
<div class="col-sm-6">
    <h2>Users Table</h2>
        <table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>Username</th>
      <th>Email</th>
      <th>Contact</th>
    </tr>
  </thead>
  <?php
    $userID = $_SESSION['login_admin'];

    $query = "SELECT * FROM buyers";
    $result = mysqli_query($conn, $query);

    $row = mysqli_fetch_assoc($result);
    while($row = mysqli_fetch_assoc($result)){
        // while loop begins here
    ?>

  ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $row['userID'] ?></th>
      <td><?php echo $row['username'] ?></td>
      <td><?php echo $row['email'] ?></td>
      <td><?php echo $row['contactno'] ?></td>
      <td>
      <form action="scripts/admin.Delete.Buyer" method="POST">
        <input type="hidden" name="houseID" value="<?php $row['houseID'] ?>">
        <input type="button" name="delete" value="Delete">
      </form>
      </td>
    </tr>
    <?php
    //while loop ends here
    }
        mysql_free_result($result);  
        mysql_close($conn);
    ?>
  </tbody>
</table>
    </div> 

    <div class="col-sm-6">
       <h2>Property Table</h2>
        <table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>Username</th>
      <th>Email</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>@mdo</td>
      <td><input type="button" name="delete" value="Delete"></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>@fat</td>
      <td><input type="button" name="delete" value="Delete"></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>@twitter</td>
      <td><input type="button" name="delete" value="Delete"></td>
    </tr>
  </tbody>
</table>
    </div>
        </div>
    </div>
</section>


    <!---------------- footer ---------------->
<?php include 'templates/footer.php';?>
        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/main.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
