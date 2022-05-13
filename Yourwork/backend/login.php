<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>YourWork - Login</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="../css/login.css">
</head>

<body>

  <header>
    <div class="logo">
      <a href="index.html"><span>Your</span>Work</a>
    </div>


    <!-- Login section -->

    <section class="login" id="login_form">
      <form action="./includes/login.inc.php" method="post" id="login_content">
        <h2>Log in</h2>
        <div>
          <label for="email/username">Email / Username</label>
          <input type="email" name="email/username" id="email/username" placeholder="Email / Username...">
          <p><?php echo $_SESSION['email_error']; ?></p>
        </div>

        <div>
          <label for="login_password">Password</label>
          <input type="password" name="login_password" id="login_password" placeholder="Password...">
          <p><?php echo $_SESSION['password_error']; ?></p>
        </div>
        <p><?php echo $_SESSION['account_error']; ?></p>

        <input name="login-submit" type="submit" value="Log in">
        <hr>
        <div>
          <p>Don't you have an account?</p>
          <a class="button" href="./signup.php">Sign up</a>
        </div>
      </form>
    </section>
  </header>


  <!-- Footer section -->

  <footer>
    <div class="footer-top">
      <div class="footer-logo">
        <div class="logo">
          <h2><a href="index.html">YourWork</a> in short</h2>
        </div>
        <p style="font-weight: 700;"><i><span style="font-size: 30px;">"</span>Finding the best employees and better jobs<span style="font-size: 30px;">"</span></i></p>
        <p><span>YourWork</span> website is designed for job search, <span>YourWork</span> provides a large database of different job categories where you can find what you like.<br><br>Also post your vacancies, we share them all around the world.</p>
      </div>

      <div class="social-media">
        <h2>Connect us on</h2>
        <div class="links">
          <a class="link" href="#"><img src="../icons/2643199_facebook_friend_media_network_page_icon.svg"></a>
          <a class="link" href="#"><img src="../icons/5279112_camera_instagram_social media_instagram logo_icon.svg"></a>
          <a class="link" href="#"><img src="../icons/5279123_tweet_twitter_twitter logo_icon.svg"></a>
        </div>
        <p>Connect us on social networks, feel free to contact our agents for any issue.</p>
      </div>

      <form class="newsletter" action="" method="post">
        <h2>Want to stay updated ?</h2>

        <div class="email">
          <input type="text" name="email" id="email" placeholder="Type your mail...">
          <input type="submit" value="Subscribe">
        </div>
        <p>Subscribe to our news letter to be updated about us, we send direct mails to your email on new updates.</p>
      </form>
    </div>

    <div class="footer-bottom">
      <div>
        <p>Copyright 2022, All rights reserved.</p>

        <ul class="links">
          <li><a class="link" href="#">Guide</a></li>
          <li><a class="link" href="#">About</a></li>
          <li><a class="link" href="#">Contact</a></li>
        </ul>
      </div>
    </div>
  </footer>

</body>

</html>
