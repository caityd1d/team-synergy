<?php 



include 'initialize.php';


    if ($results_ok == 0){
        $error_string = 'Please create an account. Your email was not found, or you type poorly. Do better.';
    } else {
        if ($results['email']== $email){
            if (password_verify($_POST['password'], $results['password'])){
                // echo "A hit, a palpable hit";
                $_SESSION['user_id'] = $results['person_id'];
                $_SESSION['email'] = $results['email'];
                header("Location: account.php");
                exit();
            } else {
                $error_string = 'Sorry, bad password. Stop sucking.';
            }
        } 

    }
}
?>

