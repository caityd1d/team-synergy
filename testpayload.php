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
    
    array_push(Payload::$values, $a);
}


    $payload = json_encode(Payload::$values);
    print_r(Payload::$values);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Company List</title>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/handlebars.js/2.0.0-alpha.2/handlebars.min.js"></script>
    <script> var payload = <?php echo "$payload";?></script>
    <script src="render.js"></script>
</head>
<body>
    <ul class="listing">
        
    </ul>


    <script id="company-media-object" type="text/x-handlebars-template">
        {{#each this}}
            <li id="{{@key}}">
              <div class="outer">
                <img src="{{logo}}">
                <div class="content">
                  <h4>{{Name}}</h4>
                  <p>{{Industry}}</p>
                  <a href="{{Website}}">Company Website</a>
                </div>
              </div>
            </li>
        {{/each}}
    </script>
</body>
</html>