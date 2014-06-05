

 <!-- add validation to this page you lazy bastards -->
<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 'on');

    include('db.php');
    $db = new DB();

    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $sql_values = $_POST;
        print_r($sql_values);
        $table = "People"; 
        $db->insert($table, $sql_values);
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>New User</title>
</head>


<body>

    <form action="newuser.php" method="POST">
        <fieldset> 
            <input type="text" placeholder="First" name="first_name">First Name<p></p>
            <input type="text" placeholder="Last" name="last_name">Last Name<p></p>
            <input type="email" placeholder="Email" name="email">Email<p></p>
            <input type="password" placeholder="Password" name="password">Password<p></p>
            <input type="password" placeholder="Verify Password" name="verifypassword">Password<p></p>
            <button type="submit">Submit</button>
            <button class="cancel">Cancel</button>
        </fieldset>
    </form>
</body>
</html>







