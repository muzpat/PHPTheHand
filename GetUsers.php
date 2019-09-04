<?php

require 'getstylists.php';
$stylist = $_GET['stylist'];
//  $stylist = 2;
//  echo $stylist;
$id;
$myresult =  getStylists();
foreach ($myresult as $sty) {
    //  echo "</br>Id: ".$sty['id'].   " name: ".$sty['name']."   ";
    if ($stylist == $sty['name']) {
        //   echo "</br>Id: ".$sty['id'].   " name: ".$sty['name']."   ";
        $id = $sty['id'];
    }
}



$host = '213.171.200.101:3306';
$dbname = 'TheHand';
$username = 'Hand123';
$password = 'Daisy123';
$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

// calling stored procedure command
$sql = 'CALL spGetUserDetails(?)';
try {
    // prepare for execution of the stored procedure
    $stmt = $pdo->prepare($sql);

    // pass value to the command
    $mykey = $id;
    $stmt->bindParam(1,$mykey, PDO::PARAM_INT, 10);
    // print "Values of bound parameters _before_ CALL:\n";
   //    print "  1: {$mykey} \n";
    // execute the stored procedure
    $stmt->execute();



    $ret = array();
    $i = 0;

    while ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {

        $dayid = $row[0];
        $styleistid = $row[1];
        $starttime = $row[2];
        $time = $row[3];


        $return_arr[] = array(
            "dayId" => $dayid,
            "styleistid" => $styleistid,
            "starttime" => $starttime,
            "time" => $time);
        $ret =  $return_arr;
    }
    $qryResult = array();
    $qryResult['data'] = $ret;
    echo json_encode($qryResult);

}
catch (PDOException $e) {
    print $e->getMessage();
}


?>