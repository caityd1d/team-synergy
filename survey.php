<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 'on');
    include 'initialize.php';

    $db = new DB();

    $sql = "SELECT * FROM Companies";
    $results = $db->execute($sql);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (!$_SESSION){
            header("Location: signform.php");
            die("You must be logged in to create reviews.");
        }
        while($row = $results->fetch_assoc()){

        }
        $sql_values = $_POST;
        print_r($sql_values);
        $table = "Reviews"; 
        // $db->insert($table, $sql_values);
    }
?>

<html>

    <head>
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="main.js"></script>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <?php include 'header.php';?>
        
        <form action="survey.php" method="POST">

            <fieldset>
                <legend>Rate Your Employer</legend>
                <select class="employer" name="company_id">
                <?php while($row = $results->fetch_assoc()){
                    echo "<option value=\"" . $row['company_id'] . "\">" . $row['Name'] . "</option>";};
                ?>
                </select><br>
                <label for='balance'>Work/Life Balance</label>
                <input type=range min=0 max=10 value=0 step=1 list='balance' name="WLBalance" class="ranger"><p class="count" style="display: inline"></p>
                <datalist id='balance'>
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                </datalist>
                <br>        
                <label for='salary'>Salary</label>
                <input type=range min=0 max=10 value=0 step=1 list='balance' name="Salary" class="ranger"><p class="count" style="display: inline"></p>
                <br>        
                <label for='benefits'>Benefits</label>
                <input type=range min=0 max=10 value=0 step=1 list='balance' name="Benefits" class="ranger"><p class="count" style="display: inline"></p>
                <br>
                <label for='advancement'>Advancement Opportunities</label>
                <input type=range min=0 max=10 value=0 step=1 list='balance' name="Opportunity" class="ranger"><p class="count" style="display: inline"></p>
                <br>
                <label for='equality'>Fairness/Equality</label>
                <input type=range min=0 max=10 value=0 step=1 list='balance' name="Fairness" class="ranger"><p class="count" style="display: inline"></p>
                <br>
                <label for='leadership'>Quality of Leadership</label>
                <input type=range min=0 max=10 value=0 step=1 list='balance' name="Leadership" class="ranger"><p class="count" style="display: inline"></p>
                <br>
                <label for='loyalty'>Loyalty</label>
                <input type=range min=0 max=10 value=0 step=1 list='balance' name="Loyalty" class="ranger"><p class="count" style="display: inline"></p>
                <br>
                <label for='morale'>Morale</label>
                <input type=range min=0 max=10 value=0 step=1 list='balance' name="Morale" class="ranger"><p class="count" style="display: inline"></p>
                <br>
                <label for='communication'>Communication</label>
                <input type=range min=0 max=10 value=0 step=1 list='balance' name="Communication" class="ranger"><p class="count" style="display: inline"></p>
                <br>
                <textarea cols="50" rows="10" spellcheck='true' name='ReviewText' placeholder='Tell us about your employer'></textarea><br>

                <button type="submit">Submit</button>
                
                <input type="hidden" value="$_SESSION['user_id']" name="person_id">
                <input type="hidden" class="company_name" value="" name="company_id">
            </fieldset>
        </form>
    </body>
</html>

