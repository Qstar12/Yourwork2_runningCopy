<?php

if (isset($_POST['signup-submit'])) {

  include 'dbh.inc.php';
  
  $user_type = $_POST['userType'];
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $profession = $_POST['profession'];
  $email = $_POST['email'];
  $country = $_POST['country'];
  $news_letter = $_POST['newsLetter'];
  $privacy_policy = $_POST['privacyPolicy'];
  $password = $_POST['signup_password'];
  $password_repeat = $_POST['repeat_signup_password'];


  // Checking if the both passwords are matching.
  if (!($password === $password_repeat)) {
    header('Location: ../signup.php');
    exit();
  }
  else {
    $password = $password;
  }
  
  
  
 /* $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["logo"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  
  // Check if image file is an actual image or fake image
  
  $check = getimagesize($_FILES["logo"]["tmp_name"]);
  
  if ($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  }
  else {
    echo "File is not an image.";
    $uploadOk = 0;
  }

  // Check if file already exists
  if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }
  
  // Check file size
  if ($_FILES["logo"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }
  
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  } 
  
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  }
  else {
    if (move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file)) {
      echo "The file ". htmlspecialchars( basename($_FILES["logo"]["name"])). " has been uploaded.";
    }
    else {
      echo "Sorry, there was an error uploading your file.";
    }
  }
  
*/
  
  $sql = "INSERT INTO newusers (UserType, FirstName, LastName, Profession, Email, Country, NewsLetter, PrivacyPolicy, Password, UploadLogo)
  VALUES ('$user_type', '$firstName', '$lastName', '$profession', '$email', '$country', '$news_letter', '$privacy_policy', '$password', 'Logo')";
  
  if (mysqli_query($conn, $sql)) {
    header("Location: ../login.php");
    exit();
  }
  else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);
}


/* if (empty($inn) || empty($companyName) || empty($userType) || empty($firstName) || empty($middleName) || empty($lastName) || empty($position) || empty($email) || empty($telephone) || empty($login) || empty($password) || empty($passphrase)) {
   header("Location: ../signup.php?error=emptyfields&inn=".$inn."&companyName=".$companyName."&userType=".$userType."&firstName=".$firstName."&middleName=".$middleName."&lastName=".$lastName."&position=".$position."&email=".$email."&telephone=".$telephone."&username=".$username);
   exit();
  }*/
