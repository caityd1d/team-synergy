<?php

include('db.php');

?>

<html>
    <body>
        <header>
            <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
            <script src="main.js"></script>
        </header>
            <form action="" method="POST">

            
            <fieldset>
<legend>Lex Luthor’s Earthquake Machine</legend>
<label for=richter>Richter Scale</label>
<!-- <input id="richterscale" type="range" min="0" max="10" step="1" /> -->
<input type=range min=0 max=10 value=0 id='richter' step=1 list=richterscale>
<datalist id=richterscale>
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
            Work/Life Balance: <input type="range" name="balance" class="priorities"><br>
            Salary: <input type="range" name="last_name" class="priorities"> <br>
            Benefits: <input type="range" name="benefits" class="priorities"><br>
            Advancement Opportunities: <input type="range" name="advancement" class="priorities"><br>
            Fairness/Equality: <input type="range" name="equality" class="priorities"><br>
            Quality of Leadership: <input type="range" name="leadership" class="priorities"><br>
            Loyalty: <input type="range" name="loyalty" class="priorities"><br>
            Morale: <input type="range" name="morale" class="priorities"><br>
            Communication: <input type="range" name="communication" class="priorities"><br>

            </form>

        </body>
</html>


