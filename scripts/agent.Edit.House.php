<?php
$houseID= mysqli_escape_string($_POST['houseID']);
$price = mysqli_escape_string($_POST['image']);
$houseID= mysqli_escape_string($_POST['descrition']);
$price = mysqli_escape_string($_POST['price']);
$houseID= mysqli_escape_string($_POST['lisiting']);
$price = mysqli_escape_string($_POST['rooms']);

$sql = "UPDATE employee ". "SET image= $image, description = $description, price = $price, listing = $listing, rooms =$rooms ". 
"WHERE houseID = $houseID" ;

mysqli_select_db($conn,'house');

$retval = mysql_query($conn,$query);

if($retval){
        header("location: ../agentpanel.php");
    }else{
        $error = "Could Not Update". mysqli_error($retval);
        $_SESSION['delete_error'] = $error;
        header("location: ../agentpanel.php");
}
