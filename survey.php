<?php
    include('db.php');
    $db = new DB();

    $sql = "
        SELECT * 
        FROM Reviews
    ";

    $results = $db->execute($sql);
    
?>


<html>
    <body>
        <header></header>
            <form action="" method="POST">

            Work/Life Balance: <input type="range" name="balance"><br>
            Salary: <input type="range" name="last_name"> <br>
            Benfits: <input type="range" name="benefits"><br>
            Advancement Opportunties: <input type="range" name="advancement"><br>
            Fairness/Equality: <input type="range" name="equality"><br>
            Quality of Leadership: <input type="range" name="leadership"><br>
            Loyalty: <input type="range" name="loyalty"><br>
            Morale: <input type="range" name="morale"><br>
            Communication: <input type="range" name="communication"><br>

            </form>

        </body>
</html>

