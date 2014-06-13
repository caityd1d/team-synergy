<?php 
error_reporting(E_ALL);
ini_set('display_errors', 'on');

echo "monkey cat";
// include 'initialize.php';


$db = new DB;

$email = '';
$error_string = '';
$password = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    //is this an email address
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * from People WHERE email = '$email'";
    $results = $db->execute($sql);
    $results_ok = $results->num_rows;
    $results = $results ->fetch_assoc();
    

    if ($results_ok == 0){
        $error_string = 'Please create an account. Your email was not found, or you type poorly. Do better.';
    } else {
        if ($results['email']=='$email'){
            if (password_verify($_POST['password'], $results['password']){
                $_SESSION['user_id'] = $results['person_id'];
                header('Location: account.php');
                exit();
            } else {
                $error_string = 'Sorry, bad password. Stop sucking.';
            }
        } 

    }
}
  ?>