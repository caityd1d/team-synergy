

  <!doctype html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <title>Sign in Form</title>
  </head>
  <body>

    <form action = "verify.php" method = "POST">  
        <input type = "text" name = "email">
        <input type = "password" name = "password">
        <button type = "submit">Submit</button>
    </form>

    <p class = "error"> <?php echo $error_string ?> </p>

  </body>
  </html>