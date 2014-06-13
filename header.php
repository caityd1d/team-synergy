<?php

$user_ID = true;

if ($logged_in){
    echo "<div class='welcome'>
          <p>Hello
            <a href='#'class='userName'>$email</a> Not 
            <a href='#'class='nonUser'>$email</a>?
            <button class='signOut'>Sign Out</button>
          </p>
        </div>";
  } else {
    echo "<div class='userButton'>
          <div>
            <button class='signinButton'>Sign In</button><button class='registerButton'>Register</button>
          </div>
        </div>";
  }




?>




<!DOCTYPE html>
<html>
<head>
    
</head>
    <body>


        <header>
          <nav>
                <a href="index.html" class="link">Home</a>
                <a href="ourwork.html" class="link">Companies</a>
                <a href="contact.html" class="link">Contact Us</a>
                <a href="newuser.php" class="login">Log In</a>
          </nav>
        </header>
    </body>
</html>
