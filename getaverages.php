<?php 
    
    function getAverages($company_id){
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
        $sql = "SELECT * FROM Reviews WHERE company_id = $company_id";
        $results = $db->execute($sql);
        $count = $results->num_rows;
        
        //Loop over results to get item sums
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
        
        //Divide sums by number of results to get avg
        $a /= $count;
        $b /= $count;
        $c /= $count;
        $d /= $count;
        $e /= $count;
        $f /= $count;
        $g /= $count;
        $h /= $count;
        $j /= $count;

        $superavg = ($a+$b+$c+$d+$e+$f+$g+$h+$j)/9;
        $superavg = substr($superavg, 0, 4);

        $output = [
            'WLBalance'=>$a,
            'Salary'=>$b,
            'Benefits'=>$c,
            'Opportunity'=>$d,
            'Fairness'=>$e,
            'Leadership'=>$f,
            'Loyalty'=>$g,
            'Morale'=>$h,
            'Communication'=>$j,
            'Average'=>$superavg
        ];

        $jsonout = json_encode($output);
        print_r($jsonout);
        return($jsonout);
    };

     $output = getAverages(1);


 