<?php 
    include '../includes/db.Connection.php';

    $houseID = $_POST['houseID'];
    $query = "DELETE FROM houses WHERE houseID = $houseID ";
    mysqli_select_db($conn,'house');

    $retval = mysqli_query($conn,$query);
    
    if($retval){
        header("location: ../agentpanel.php");
    }else{
        $error = "Could Not Delete ". mysqli_error($retval);
        $_SESSION['delete_error'] = $error;
        header("location: ../agentpanel.php");
    }