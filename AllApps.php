<?php
$host = '213.171.200.101:3306';
$dbname = 'TheHand';
$username = 'Hand123';
$password = 'Daisy123';
$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

// calling stored procedure command
$sql = 'CALL spAllAppointments()';
try {
    // prepare for execution of the stored procedure
    $stmt = $pdo->prepare($sql);

    // pass value to the command
  //  $mykey = 1;
  //  $stmt->bindParam(1,$mykey, PDO::PARAM_INT, 10);
    // print "Values of bound parameters _before_ CALL:\n";
    //    print "  1: {$mykey} \n";
    // execute the stored procedure
    $stmt->execute();



    $ret = array();
    $i = 0;
    while ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
        $id = $row[0];
        $stylistId = $row[1];
        $dayId = $row[2];
        $starttime = $row[3];
        $time = $row[4];
        $apptime = $row[5];
        $name = $row[6];
        $phone = $row[7];
        $style = $row[8];
        $info = $row[9];
        $stylist = $row[10];
        $appdate = $row[11];
        $return_arr[] = array("id" => $id,
            "stylistId" => $stylistId,
            "dayId" => $dayId,
            "starttime" => $starttime,
            "time" => $time,
            "apptime" => $apptime,
                        "name" => $name,
                        "phone" => $phone,
                        "style" => $style,
                        "info" => $info,
                        "stylist" => $stylist,
                        "appdate" => $appdate);
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