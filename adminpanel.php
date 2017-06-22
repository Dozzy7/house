<?php
    include 'scripts/admin.Session.php';
    $page = "admin";
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
                        <tbody>
                            <?php
                            $userID = $_SESSION['login_admin'];

                            $query = "SELECT * FROM buyers";
                            $result = mysqli_query($conn, $query);

                            while($row = mysqli_fetch_assoc($result)){
                                // while loop begins here
                            ?>
                                <tr>
                                    <th scope="row">
                                        <?php echo $row['userID'] ?>
                                    </th>
                                    <td>
                                        <?php echo $row['username'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['email'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['contact'] ?>
                                    </td>
                                    <td>
                                        <form action="scripts/admin.Delete.Buyer" method="POST">
                                            <input type="hidden" name="userID" value="<?php echo $row['userID'] ?>">
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
                    <h2>Agents Table</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Contact</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $userID = $_SESSION['login_admin'];

                            $query = "SELECT * FROM agents";
                            $result = mysqli_query($conn, $query);

                            while($row = mysqli_fetch_assoc($result)){
                                // while loop begins here
                            ?>
                                <tr>
                                    <th scope="row">
                                        <?php echo $row['userID'] ?>
                                    </th>
                                    <td>
                                        <?php echo $row['username'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['email'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['contact'] ?>
                                    </td>
                                    <td>
                                        <form action="scripts/admin.Delete.Agent" method="POST">
                                            <input type="hidden" name="userID" value="<?php echo $row['userID'] ?>">
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

                <div class="col-sm-6">
                    <h2>Property Table</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Rooms</th>
                                <th>Listing</th>
                                <th>Street</th>
                                <th>City</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $userID = $_SESSION['login_admin'];

                            $query = "SELECT * FROM houses" ;
                            $result = mysqli_query($conn, $query);

                            while($row = mysqli_fetch_assoc($result)){
                                // while loop begins here
                            ?>
                                <tr>
                                    <th scope="row">
                                        <?php echo $row['houseID'] ?>
                                    </th>
                                    <td>
                                        <?php echo $row['description'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['price'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['rooms'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['listing'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['street'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['city'] ?>
                                    </td>
                                    <td>
                                        <form action="scripts/admin.Delete.House" method="POST">
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
            </div>
        </div>
    </section>


    <!---------------- footer ---------------->
    <?php include 'templates/footer.php';?>

</body>

</html>