<?php 
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');

    require 'db.php';
    $db = new DB;
    $a = 0;
    $b = 0;
    $c = 0;
    $d = 0;
    $e = 0;
    $f = 0;
    $g = 0;
    $h = 0;
    $j = 0;
    $sql = "SELECT * FROM Reviews WHERE company_id = '1'";
    $results = $db->execute($sql);
    $count = $results->num_rows;
    while ($row = $results->fetch_assoc()) {
        $a += $row['WLBalance'];
        $b += $row['Salary'];
        $c += $row['Benefits'];
        $d += $row['Opportunity'];
        $e += $row['Fairness'];
        $f += $row['Leadership'];
        $g += $row['Loyalty'];
        $h += $row['Morale'];
        $j += $row['Communication'];
    }
    $a /= $count;
    $b /= $count;
    $c /= $count;
    $d /= $count;
    $e /= $count;
    $f /= $count;
    $g /= $count;
    $h /= $count;
    $j /= $count;
 ?>

 <!DOCTYPE html>
 <html>
 <head>
     <title></title>
 </head>
 <body>
 <?php 
 echo "WL Balance: " . $a . "<br>";
 echo "Salary: " . $b . "<br>";
 echo "Benefits: " . $c . "<br>";
 echo "Opportunity: " . $d . "<br>";
 echo "Fairness: " . $e . "<br>";
 echo "Leadership: " . $f . "<br>";
 echo "Loyalty: " . $g . "<br>";
 echo "Morale: " . $h . "<br>";
 echo "Communication: " . $j . "<br>";


 ?>
 
 </body>
 </html>