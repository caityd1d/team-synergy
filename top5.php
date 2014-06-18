<?php 
    include 'initialize.php';
    function getTopFive($uid){

       $db = new DB;
       $sql = "SELECT company_id, Name FROM Companies";
       $compresults = $db->execute($sql);
       $allcompanies = [];
       $categoryavg = [];
       $c = [];
       
       while ($row = $compresults->fetch_assoc()){
        $allcompanies[$row['Name']] = $row['company_id'];
        
       }

       $usrsql = "SELECT priority FROM People WHERE person_id = $uid";
       // $usrsql = "SELECT priority FROM People WHERE person_id = 1";
       $usrresults = $db->execute($usrsql);
       $usrresults = $usrresults->fetch_assoc();
       $priority = $usrresults['priority'];


       foreach ($allcompanies as $key => $value) {
           $avgsql = "SELECT AVG($priority) FROM Reviews WHERE company_id = $value";
           $avgresults = $db->execute($avgsql);
           
           $avgresults = $avgresults->fetch_assoc();
           $c[$key] = implode(".", $avgresults);
        

       }
       
       // print_r($c);
       arsort($c);
       // print_r($c);
       $topfive = array_slice($c, 0, 5);

       echo "<br><br>";
       // print_r($topfive);
       return $topfive;
   };
 ?>