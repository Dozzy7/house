<?php 
    $houseID = $_POST['houseID'];
    $query = "DELETE * FROM houses,agent_houses WHERE houseID = '$houseID' "
    $result = mysqli_query($conn, $query);
    if($result){
        header("location: ../admin.php");
    }else{
        $error = "Could Not Delete ". mysqli_error();
        $_SESSION['delete_error'] = $error;
        header("location: ../admin.php");
}