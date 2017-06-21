<?php 
    $houseID = $_POST['userID'];
    $query = "DELETE * FROM users WHERE userID = '$userID' "
    $result = mysqli_query($conn, $query);
    if($result){
        header("location: ../admin.php");
    }else{
        $error = "Could Not Delete ". mysqli_error();
        $_SESSION['delete_error'] = $error;
        header("location: ../admin.php");
    }