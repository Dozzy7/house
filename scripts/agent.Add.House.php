<?php
   include '../includes/db.Connection.php';

   // global variable [not sure they are needed]
   $userID;
   $image;
   $description;
   $price;
   $rooms;
   $listing;
   $street;
   $city;

      // best practice to make sure if the data has slashes they are included
      if(! get_magic_quotes_gpc()){
         
         // ensures that the String from the forms are inserted as the come
         $userID = addslashes($_POST['userID']);
         $image = addslashes(file_get_contents($_FILES["image"]["name"])); 
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
          die('Could not enter data: ' . mysql_error());
      }else{

       move_uploaded_file($_FILES["file"]["name"],"houses/" . $random_string .".jpg");
       // go to this page after insertionn has been completed
       header("location:../agentpanel.php");
      } 

    ?>
    <script src="js/main.js"></script>    

