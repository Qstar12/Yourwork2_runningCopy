<?php
 session_start();
 if (!isset($_SESSION['Password']) && !isset($_SESSION['Email'])) {
   header('Location: ./login.php');
   exit();
 }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>YourWork - Profile</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../../../fontawesome-free-5.15.4-web/css/all.css">

  <link rel="stylesheet" href="../css/navigation.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="../css/profile.css">
</head>

<body>

  <header id="header">
    <nav id="navigation">
      <div class="logo">
        <a href="index.html"><span>Your</span>Work</a>
      </div>

      <div class="menu">
        <button class="menu-close-icon"><i class="bi bi-x"></i></button>

        <div class="menu-items">
          <ul class="links">
            <li><a class="link" href="../index.html">Home</a></li>
            <li class="drop-down-list">Services
              <ul>
                <li><a class="drop-down-item" href="./add-vacancy.html">Add new vacancy</a></li>
                <li><a class="drop-down-item" href="./find-vacancy.html">Find new vacancy</a></li>
              </ul>
            </li>
          </ul>

          <div class="search">
            <input type="search" name="search" id="search-input" placeholder="Type to search...">
            <label id="search-button" for="search"><i class="bi bi-search"></i></label>
          </div>

          <ul class="buttons">
            <li class="link" id="log-out"><a href="./includes/logout.inc.php">Log out</a></li>
          </ul>
        </div>
      </div>

      <div class="menu-icon">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </nav>


    <div class="profile_info">
      <div class="avatar">
        <!-- <img class="avatar_image" src="<?php echo 'includes/' . $_SESSION['Logo']; ?>" alt="logo"> -->
        <img class="avatar_image" src="../images/IMG-20220206-WA0004.jpg" alt="logo">
        <button class="edit_avatar" type="button">Edit</button>
      </div>

      <div class="user_details">

        <h1 class="user_name"><span class="first_name"><?php echo $_SESSION['FirstName']; ?></span> <span class="last_name"><?php echo $_SESSION['LastName']; ?></span><i style="font-size: 20px;" class="fa fa-star"></i> <span><?php echo $_SESSION['Profession']; ?></span></h2>
          <p><span class="country"><?php echo $_SESSION['Country']; ?></span><span class="city"><?php echo ', ' . $_SESSION['City']; ?></span></p>
          <p class="email"><?php echo $_SESSION['Email']; ?></p>
          <p class="phone"><?php echo $_SESSION['Telephone']; ?></p>

          <!--
        <h1 class="user_name">Madhushan hemachandra <span>Developer</span></h1>
        <p><span class="country">Sri lanka</span><span class="city">, Kandy</span></p>
        <p class="email">madhushan@gmail.com </p>
        <p class="phone">+1 999 999 99 99</p>
        -->
          <button class="edit_info" type="button">Edit info</button>
      </div>
    </div>
  </header>


  <!-- Main section -->

  <main>
    <div class="about_user">
      <h2>About me</h2>
      <textarea name="" id="" cols="30" rows="10" placeholder="Tell us about yourself, how many years you have experience, in what area, did you work somewhere, do you have your own portfolio of your work..."></textarea>
      <div class="map">
        map
      </div>
    </div>


    <!-- Update details form -->

    <div class="update_form">
      <form action="./includes/update.inc.php" method="post">
        <div class="logo">
          <a href="index.html"><span>Your</span>Work - &nbsp;</a>
          <h2>Edit</h2>
          <button class="close_btn update_form_close" type="button"><i class="bi bi-x"></i></button>
        </div>

        <div class="location">
          <h3>Location</h3>
          <div>
            <label for="city">City</label>
            <input type="text" name="city" id="city" placeholder="Your city...">
          </div>
          <div>
            <label for="street_address">Street address</label>
            <input type="text" name="street_address" id="street_address" placeholder="Street address...">
          </div>
          <div>
            <label for="zip">Zip</label>
            <input type="number" name="zip" id="zip" placeholder="Zip code...">
          </div>
        </div>

        <div class="personal_info">
          <h3>Personal information</h3>
          <div>
            <label for="first_name">First name</label>
            <input type="text" name="first_name" id="first_name" placeholder="First name...">
          </div>
          <div>
            <label for="last_name">Last name</label>
            <input type="text" name="last_name" id="last_name" placeholder="Last name...">
          </div>
          <div class="bottom_input">
            <div>
              <label for="telephone">Telephone</label>
              <input type="number" name="telephone" id="telephone" placeholder="Telephone...">
            </div>
            <div>
              <label for="email">Email / Mail</label>
              <input type="email" name="email" id="email" placeholder="Email / Mail...">
            </div>
          </div>
          <input type="submit" name="update-form" id="update-form" value="Confirm">
        </div>
      </form>
    </div>
  </main>


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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="./js/jquery-3.6.0.js"></script>
  <script src="../js/navigation effect.js"></script>

  <script>
    var update_btn = document.querySelector('.edit_info');
    var update_form = document.querySelector('.update_form');
    var update_form_close_btn = document.querySelector('.update_form_close');

    update_btn.addEventListener('click', function() {
      update_form.classList.add('open');
    })

    update_form_close_btn.addEventListener('click', function() {
      update_form.classList.remove('open');
    })
  </script>

</body>

</html>
