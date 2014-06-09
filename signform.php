 <?php 
error_reporting(E_ALL);
ini_set('display_errors', 'on');

require 'db.php';

$db = new DB;

$email = '';
$logged_in = false;
$error_string = '';
$password = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    //is this an email address
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * from People WHERE email = '$email'";
    $results = $db->execute($sql);
    print_r($results);
    echo '<br><br>';
    $results_ok = $results->num_rows;
    $results = $results ->fetch_assoc();
    print_r($results_ok);
    echo '<br><br>';
    if ($results_ok == 0){
        $error_string = 'Please create an account. Your email was not found, or you type poorly. Do better.';
    } else {
        if ($results['email']='$email'){
            // if (password_verify($_POST['password'], $results['$password'])){
            if ($password == $results['password']){
                $logged_in = true;
            } else {
                $error_string = 'Sorry, bad password. Stop sucking.';
            }
        } 

    }
}
print_r($logged_in);
  ?>

  <!doctype html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <title>Sign in Form</title>
  </head>
  <body>

    <form action = "signform.php" method = "POST">  
        <input type = "text" name = "email">
        <input type = "password" name = "password">
        <button type = "submit">Submit</button>
    </form>

    <p class = "error"> <?php echo $error_string ?> </p>

  </body>
  </html>