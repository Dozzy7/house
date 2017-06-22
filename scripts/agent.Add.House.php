<?php       
    include '../includes/db.Connection.php';
    
   $errors= array();
   // global variable [not sure they are needed]
   $userID;
   $image;
   $description;
   $price;
   $rooms;
   $listing;
   $street;
   $city;

   if(($_FILES['image'])){
     
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
        move_uploaded_file($file_tmp,"images/".$file_name);
        $file_location = "images/".$file_name;
         // best practice to make sure if the data has slashes they are included
        if(! get_magic_quotes_gpc()){
            
            // ensures that the String from the forms are inserted as the come
            $userID = addslashes($_POST['userID']);
            $image = addslashes($file_location); 
            $description = addslashes($_POST['description']);
            $price = addslashes($_POST['price']);
            $rooms = addslashes($_POST['rooms']); 
            $street = addslashes($_POST['street']);
            $city = addslashes($_POST['city']); 
            $listing = addslashes($_POST['listing']);  
        }else{
            $userID =($_POST['userID']);
            $image = ($_POST['image']);
            $description = ($_POST['description']);
            $price = ($_POST['price']);
            $rooms = ($_POST['rooms']); 
            $street = ($_POST['street']);
            $city = ($_POST['city']); 
            $listing = ($_POST['listing']); 
        }

        // query to insert without listing the table coloumns did not want to work.
        $sql = "INSERT INTO `houses`(`houseID`, `agentID`, `image`, `description`, `price`, `rooms`, `listing`, `street`, `city`) VALUES (null, '$userID','$image','$description','$price','$rooms','$lsiting','$listing','$city')";
        
        // excute query
        $retval = mysqli_query($conn,$sql);

        // check if the query ran successfully
        if(! $retval){
            print_r('Could not enter data: ' . mysql_error());
        }else{
        // go to this page after insertionn has been completed
         header("location:../agentpanel.php");
        } 
}else{ 
    echo ($errors); 
    } }
 ?>