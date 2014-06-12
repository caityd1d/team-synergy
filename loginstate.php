<?php

// error_reporting(E_ALL);
// ini_set('display_errors', 'on');
$logged_in = true;

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