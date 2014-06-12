<?php 
function getAverages($company_id){
    require 'db.php';
    $db = new DB;
    $sql = "SELECT * FROM Reviews WHERE company_id = $company_id";
    $results = $db->execute($sql);
    $count = $results->num_rows;
    $keys = ['WLBalance', 'Salary', 'Benefits', 'Opportunity', 'Fairness', 'Leadership', 'Loyalty', 'Morale', 'Communicaiton'];
    $scores = [];
    $superaverage = 0;

    foreach ($keys as $key) {
        $scores[$key] = 0;
    }
   
    while ($row = $results->fetch_assoc()) {
        unset($row['review_id']);
        unset($row['person_id']);
        unset($row['company_id']);
        unset($row['ReviewText']);
        
        foreach ($row as $key=>$value) {
            $scores[$key] += $value;
        }
    }

    foreach ($scores as $key => $value) {
        $scores[$key] = $value / $count;
    }

    foreach ($scores as $key => $value) {
        $superaverage += $value;
    }
    
    $superaverage /= count($keys);
    $superaverage = substr($superaverage, 0, 4);
    $scores['Average'] = $superaverage;
    print_r($scores);
    return($scores);
}

$scores = getAverages(1);

print_r($scores);
?>