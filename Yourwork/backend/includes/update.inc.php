<?php

session_start();
include 'dbh.inc.php';
  
if (isset($_POST['update-form'])) {
    
  $id = $_SESSION['ID'];
    
  $city = $_POST['city'];
  $street_address = $_POST['street_address'];
  $zip = $_POST['zip'];

  $firstName = $_POST['first_name'];
  $lastName = $_POST['last_name'];
  $telephone = $_POST['telephone'];
  $email = $_POST['email'];
      
  $sql = "UPDATE newusers SET City='$city', StreetAddress='$street_address', Zip='$zip', FirstName='$firstName', LastName='$lastName', Telephone='$telephone', Email='$email' WHERE ID='$id'";
         
  if (mysqli_query($conn, $sql)) {
      header('Location: ../login.php');
      exit();
   //  echo "Record updated successfully";
   } else {
      echo "Error updating record: " . mysqli_error($conn);
   }
      mysqli_close($conn);
}
