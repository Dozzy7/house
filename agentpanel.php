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
        <h1>Editing/ Deleting Property</h1>
              <a href="#" class="list-group-item">
                <div class="media col-md-3">
                    <figure class="pull-left">
                        <img class="media-object img-rounded img-responsive" src="http://placehold.it/350x250" alt="placehold.it/350x250" >
                    </figure>
                        <input type="hodden" name="houseID" value="">
                        <input class="btn btn-primary btn-lg btn-block" type="submit" value="Edit">
                    </form>
                    <form action="scripts/agent.Delete.House.php" method="POST">
                        <input class="btn btn-danger btn-lg btn-block" type="submit" value="Delete">    
                    </form>                    
                </div>
          </a>  
    </div> 

<div class=col-sm-1>
    
</div>

    <div class="col-sm-4 adding">
        <div class="">
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
