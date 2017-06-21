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
 <section>
        <div class="jumbotron">
            <h1>Editing</h1>
            <p>Here you can edit previously property you uploaded.</p>
            
        </div>
    </section>
     <!----------------  ---------------->
     <section id="admin_tab">
    <div class="container">
          <div class="row">        
        <!--For Editing a new house-->
    
     <div class="col-sm-3">
     <h1>Editing property</h1>
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
                                <input class="form-control" type="text" placeholder="listing" name="listing" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Description" name="description" required>
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
