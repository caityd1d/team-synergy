<?php 
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');

include 'db.php';
include 'payload.php';

$db = new DB;
$sql = "SELECT * FROM Companies";
$results = $db->execute($sql);

Payload::$values = [];
while($row = $results->fetch_assoc()){
    $a = [];
    $a['Name'] = $row['Name'];
    $a['Industry'] = $row['Industry'];
    $a['Website'] = $row['Website'];
    $a['Logo'] = $row['Logo'];
    
    array_push(Payload::$values, $a);
}


    $payload = json_encode(Payload::$values);
    // print_r(Payload::$values);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Company List</title>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/handlebars.js/2.0.0-alpha.2/handlebars.min.js"></script>
    <script> var payload = <?php echo "$payload";?></script>
    <script src="render.js"></script>
    <link rel="stylesheet" type="text/css" href="companies.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="companies">
        <ul class="listing"></ul>
    </div>

    <script id="company-media-object" type="text/x-handlebars-template">
        {{#each this}}
                <li>
                  <div class="outer">
                    <img src="{{Logo}}">
                    <div class="content">
                      <h4>{{Name}}</h4>
                      <p>{{Industry}}</p>
                      <a href="{{Website}}">{{Name}}'s website</a>
                    </div>
                  </div>
                </li>
        {{/each}}
    </script>
</body>
</html>