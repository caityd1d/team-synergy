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
            <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
            <script src="main.js"></script>
        </header>
            <form action="survey.php" method="POST">

            
            <fieldset>
                <legend>Rate Your Employer</legend>
                <label for='balance'>Work/Life Balance</label>
                <input type=range min=0 max=10 value=0 step=1 list='balance' name="balance" class="ranger"><p class="count" style="display: inline"></p>
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
                <input type=range min=0 max=10 value=0 step=1 list='balance' name="salary" class="ranger"><p class="count" style="display: inline"></p>
                <br>        
                <label for='benefits'>Benefits</label>
                <input type=range min=0 max=10 value=0 step=1 list='balance' name="benefits" class="ranger"><p class="count" style="display: inline"></p>
                <br>
                <label for='advancement'>Advancement Opportunities</label>
                <input type=range min=0 max=10 value=0 step=1 list='balance' name="advancement" class="ranger"><p class="count" style="display: inline"></p>
                <br>
                <label for='equality'>Fairness/Equality</label>
                <input type=range min=0 max=10 value=0 step=1 list='balance' name="equality" class="ranger"><p class="count" style="display: inline"></p>
                <br>
                <label for='leadership'>Quality of Leadership</label>
                <input type=range min=0 max=10 value=0 step=1 list='balance' name="leadership" class="ranger"><p class="count" style="display: inline"></p>
                <br>
                <label for='loyalty'>Loyalty</label>
                <input type=range min=0 max=10 value=0 step=1 list='balance' name="loyalty" class="ranger"><p class="count" style="display: inline"></p>
                <br>
                <label for='morale'>Morale</label>
                <input type=range min=0 max=10 value=0 step=1 list='balance' name="morale" class="ranger"><p class="count" style="display: inline"></p>
                <br>
                <label for='communication'>Communication</label>
                <input type=range min=0 max=10 value=0 step=1 list='balance' name="communication" class="ranger"><p class="count" style="display: inline"></p>
                <br>
                <button type="submit">Submit</button>
                
                <input type="hidden" value="1" name="userid">
                <input type="hidden" value="1" name="companyid">
            </fieldset>
        </form>
    </body>
</html>

