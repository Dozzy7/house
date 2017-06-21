<?php
    include 'scripts/agent.Session.php';
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
     <div class="col-sm-7">
         <h2>Editing and deleting property</h2>
        <table class="table">
  <thead>
    <tr>
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
    
    $userID = $_SESSION['login_agent'];

    $query= "SELECT * FROM houses,agent_houses,agents WHERE agents.userID = agent_houses.agentID AND houses.houseID = agent_houses.houseID AND userID ='$userID'";
    $result = mysqli_query($conn, $query);

    $row = mysqli_fetch_assoc($result);
    while($row = mysqli_fetch_assoc($result)){
        // while loop begins here
    ?>
    <tr>
      <th scope="row"><?php echo $row['houseID'] ?></th>
      <td><?php echo $row['description'] ?></td>
      <td><?php echo $row['price'] ?></td>
      <td><?php echo $row['listing'] ?></td>
      <td><?php echo $row['street'] ?></td>
      <td><?php echo $row['city'] ?></td>
      <td>
            <form action="scripts/agent.Edit.House" method="POST">
                <input type="hidden" name="houseID" value="<?php $row['houseID'] ?>"> 
                <input type="submit" value="Edit">
            </form>
            <form action="scripts/agent.Edit.House" method="POST">
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

     <div class="col-sm-2">
         
     </div> 

     <div class="col-sm-3">
     <h1>Adding property</h1>
            <form id="" method="POST" action="scripts/admin.add_house.php" type="multipart/form-data" target="iframe">
                <input type="file" name="image"> <input type="submit" value="Upload Image">
            </form>
         <form id="form" method="POST" action="scripts/agent.Add.House.php" type="multipart/form-data">
                          <!--  
                            <div class="form-group">
                                <input id="btn_upload" type="text"  name="image" required>
                            </div>
                           -->  
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Price" name="price" required>
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
                                <input class="form-control" type="text" placeholder="Number of rooms" name="rooms" required>
                            </div>
                            
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="City/Town" name="city" required>
                            </div>

                            <div class="form-group text-center">
                                <input class="btn btn-default" type="submit" value="Confirm">
                            </div>

                </form>
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
