<?php 
include 'initialize.php';
 ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <title>Sign in Form</title>
  </head>
  <body>
    <?php include 'header.php';?>
    <h3>Please log in to continue</h3>
    <form action = "verify.php" method = "POST">  <br>
        Email <input type = "text" name = "email"><br><br>
        Password <input type = "password" name = "password"><br><br>
        <button type = "submit">Submit</button>
    </form>

     <!-- <p class = "error"> <?php echo $error_string ?> </p> -->

  </body>
  </html>