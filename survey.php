<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');

    include('db.php');
    $db = new DB();

    $sql = "
        SELECT * 
        FROM Reviews
    ";

    $results = $db->execute($sql);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        print_r($_POST);
    };
?>


<html>
    <body>
        <header>
            <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
            <script type="text/javascript" src="main.js"></script>
        </header>
            <form action="survey.php" method="POST">

            Work/Life Balance: <input type="range" name="balance" class="first"> <p class="count"></p><br>
            Salary: <input type="range" name="last_name"> <br>
            Benfits: <input type="range" name="benefits"><br>
            Advancement Opportunties: <input type="range" name="advancement"><br>
            Fairness/Equality: <input type="range" name="equality"><br>
            Quality of Leadership: <input type="range" name="leadership"><br>
            Loyalty: <input type="range" name="loyalty"><br>
            Morale: <input type="range" name="morale"><br>
            Communication: <input type="range" name="communication"><br>
            <button type="submit">Submit</button>
            </form>

        </body>
</html>

