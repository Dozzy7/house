<?php
    include 'scripts/agent.Session.php';
    $page ="agent";
?>
<!doctype html>
<html class="no-js" lang="en">
    <?php include 'templates/head.php';?>

    <body>

    <!---------------- Header ---------------->
     <?php include 'templates/headerafter.php';?>

    <!----------------  backgroundimage ---------------->
 
    <!----------------  ---------------->
     <section id="admin_tab">
    <div class="container">
          <div class="row">        
        <!--For adding a new house-->
     <div class="col-sm-7">
         <h2>Editing and deleting property</h2>
        <table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>#</th>
      <th>Description</th>
      <th>Price</th>
      <th>Listing</th>
      <th>Street</th>
      <th>City</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
   <?php
   $userID = $_SESSION['login_agents'];
    $query= "SELECT * FROM houses WHERE agentID = '$userID' ";
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)){
    // while loop begins here
    ?>
    <tr>
      <th scope="row"><?php echo $row['houseID'] ?></th>
      <td><img src="<?php echo $row['image'] ?>"/></td> 
      <td><?php echo $row['description'] ?></td>
      <td><?php echo $row['price'] ?></td>
      <td><?php echo $row['listing'] ?></td>
      <td><?php echo $row['street'] ?></td>
      <td><?php echo $row['city'] ?></td>
      <td>
            <form action="scripts/agent.Edit.House" method="POST">
                <input type="hidden" name="userID" value="<?php echo $userID ?>">
                <input type="hidden" name="houseID" value="<?php echo $row['houseID'] ?>">  
                <input type="submit" value="Edit">
            </form>
            <form action="scripts/agent.Delete.House" method="POST">
                <input type="hidden" name="houseID" value="<?php echo $userID ?>">
                <input type="hidden" name="houseID" value="<?php echo $row['houseID'] ?>">  
                <input type="submit" name="delete" value="Delete">
            </form>
        </td>
    </tr>
    <?php
    //while loop ends here
    }
    ?>
  </tbody>
</table>
     </div>  

     <div class="col-sm-2">
     </div> 

     <div class="col-sm-3">
     <h1>Adding property</h1>
         <form id="form" method="POST" action="scripts/agent.Add.House.php" type="multipart/form-data">
                            <input type="hidden" name="userID" value="<?php echo $userID ?>">
                            <div class="form-group">
                                <input id="image" type="file" name="image" required>
                            </div> 
                            <div class="form-group">
                                <input class="form-control" type="number" placeholder="Price" name="price" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="street" name="street" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="listing" name="listing" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Description" name="description" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="number" placeholder="Number of rooms" name="rooms" required>
                            </div>
                            
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="City/Town" name="city" required>
                            </div>

                            <div class="form-group text-center">
                                <input class="btn btn-primary" type="submit" id="insert" name="insert" value="Confirm">
                            </div>
            </form>
     </div>            
        </div>
    </div>
</section>

    <!---------------- footer ---------------->
<?php include 'templates/footer.php';?>

    </body>
</html>
