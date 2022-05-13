<?php

if (isset($_POST['login-submit'])) {
    
  session_start();
  include 'dbh.inc.php';
  
  $email_username = $_POST['email/username'];
  $password = $_POST['login_password'];
  // to prevent from mysqli injections
  $password = stripcslashes($password);
  $password = mysqli_real_escape_string($conn, $password);
  
  $_SESSION['email_error'] = '';
  $_SESSION['password_error'] = '';
  $_SESSION['account_error'] = '';

  if (empty($email_username) && !empty($password)) {
    $_SESSION['email_error'] = 'Email is required!';
    header('Location: ../login.php');
    exit();
  }
  else if (empty($password) && !empty($email_username)) {
    $_SESSION['password_error'] = 'Password is required!';
    header('Location: ../login.php');
    exit();
  }
  else if (empty($email_username) && empty($password)) {
    $_SESSION['account_error'] = 'Email and the password are required!';
    header('Location: ../login.php');
    exit();
  }
    
  else {
    $sql = "SELECT * FROM newusers WHERE Email = '$email_username' AND Password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row    = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count  = mysqli_num_rows($result);
    
      if ($count == 1) {
        
        $_SESSION['ID'] = $row['ID'];
        $_SESSION['City'] = $row['City'];
        $_SESSION['StreetAddress'] = $row['StreetAddress'];
        $_SESSION['Zip'] = $row['Zip'];
        $_SESSION['UserType'] = $row['UserType'];
        $_SESSION['FirstName'] = $row['FirstName'];
        $_SESSION['LastName'] = $row['LastName'];
        $_SESSION['Profession'] = $row['Profession'];
        $_SESSION['Telephone'] = $row['Telephone'];
        $_SESSION['Email'] = $row['Email'];
        $_SESSION['Country'] = $row['Country'];
        $_SESSION['NewsLetter'] = $row['NewsLetter'];
        $_SESSION['PrivacyPolicy'] = $row['PrivacyPolicy'];
        $_SESSION['Password'] = $row['Password'];
        $_SESSION['Logo'] = $row['UploadLogo'];
        
        header("Location: ../profile.php");
        exit();
      }
      else {
        $_SESSION['account_error'] = 'In order to login, create an account!';
        header('Location: ../login.php');
        exit();
      }
    }
  mysqli_close($conn);
}
