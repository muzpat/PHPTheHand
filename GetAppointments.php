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
$sql = 'CALL spGetBookings(?)';
try {
    // prepare for execution of the stored procedure
    $stmt = $pdo->prepare($sql);

    // pass value to the command
    $mykey = $id;
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
        $stylistId = $row[2];
        $dayId = $row[3];
        $starttime = $row[4];
        $name = $row[5];
        $phone = $row[6];
        $style = $row[7];
        $info = $row[8];
        $stylist = $row[9];
        $appdate = $row[10];
        $apptime = $row[11];

        $return_arr[] = array(
            "dayoftheweek" => $dayoftheweek,
            "theday" => $theday,
            "stylistId" => $stylistId,
            "dayId" => $dayId,
            "starttime" => $starttime,
            "name" => $name,
            "phone" => $phone,
            "style" => $style,
            "info" => $info,
            "stylist" => $stylist,
            "appdate" => $appdate,
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