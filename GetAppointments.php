<?php
$host = 'localhost';
$dbname = 'TheHand';
$username = 'root';
$password = 'mysql';
$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

// calling stored procedure command
$sql = 'CALL TheHand.spAppointments(?)';
try {
    // prepare for execution of the stored procedure
    $stmt = $pdo->prepare($sql);

    // pass value to the command
    $mykey = 1;
    $stmt->bindParam(1,$mykey, PDO::PARAM_INT, 10);
   // print "Values of bound parameters _before_ CALL:\n";
 //   print "  1: {$mykey} \n";
    // execute the stored procedure
    $stmt->execute();



    $ret = array();
    $i = 0;
    while ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
        $dayoftheweek = $row[0];
        $theday = $row[1];
        $id = $row[2];
        $stylistId = $row[3];
        $dayId = $row[4];
        $starttime = $row[5];
        $time = $row[6];
        $apptime = $row[7];

        $return_arr[] = array(

            "dayoftheweek" => $dayoftheweek,
            "theday" => $theday,
            "id" => $id,
            "stylistId" => $stylistId,
            "dayId" => $dayId,
                        "starttime" => $starttime,
                        "time" => $time,
                        "apptime" => $apptime);
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