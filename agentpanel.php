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
      <th>Address</th>
      <th>Description</th>
      <th>Listing</th>
      <th>Price</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>@mdo</td>
      <td>Mark</td>
      <td>@mdo</td>
      <td><input type="button" name="delete" value="Edit">
      <input type="button" name="delete" value="Delete"></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>@fat</td>
      <td>Jacob</td>
      <td>@fat</td>
      <td><input type="button" name="delete" value="Edit">
      <input type="button" name="delete" value="Delete"></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>@twitter</td>
      <td>Larry</td>
      <td>@twitter</td>
      <td><input type="button" name="delete" value="Edit">
      <input type="button" name="delete" value="Delete"></td>
    </tr>
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
