
<html>

     <body>

<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

<div class="title">
    <h1>Inside Job</h1>
    <h3>What It's REALLY Like on the Inside</h3>

    <div class="signed-in">
      <?php

      $email = (isset($_SESSION['email']) ? $_SESSION['email'] : null);
      // $email = $_SESSION['email'];

      $user_id = (isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null);
      if (is_numeric($_SESSION['user_id'])){ ?>
          <div class='welcome'>
            <p>Hello
              <a href="account.php?user_id=<?php echo $_SESSION['user_id']?>" class="userName"><?php echo "$email" ?></a> Not 
              <a href="account.php?user_id=<?php echo $_SESSION['user_id']?>" class='nonUser'><?php echo "$email" ?></a>?
              <button class='signOut'>Sign Out</button>
            </p>
          </div>
        <?php } else { ?>
          <div class='userButton'>
            <div>
              <button class='signinButton'>Sign In</button><button class='registerButton'>Register</button>
            </div>
          </div>
      <?php  } ?>
    </div>

</div>

<header>
  <nav>
            <a href="index.php" class="link">Home</a>
            <a href="companies.php" class="link">Companies</a>
            <a href="contact.html" class="link">Contact Us</a>
            <a href="signform.php" class="login">Log In</a>
  </nav>
</header>


    </body>
</html>