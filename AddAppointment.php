<?php
require 'getstylists.php';
$name = $_GET['name'];
$phone =  $_GET['phone'];
$style =  $_GET['style'];
$info =  $_GET['info'];
$stylist = $_GET['stylist'];
$stylist = urldecode($stylist);
$date =  $_GET['date'];
$time =  $_GET['time'];
$sid =  $_GET['sid'];
//  $stylist = 2;
echo '</br>   $name ;' . $name ;
echo '</br>   $phone ;' . $phone ;
echo '</br>   $style ;' . $style ;
echo '</br>   $info ;' . $info ;
echo '</br>   $stylist;' . $stylist;
echo '</br>   $date;' . $date;
echo '</br>   $time ;' . $time ;
echo '</br>   $sid ; ' . $sid ;

$id;
$myresult =  getStylists();
foreach ($myresult as $sty) {
    //  echo "</br>Id: ".$sty['id'].   " name: ".$sty['name']."   ";
    if ($stylist == $sty['name']) {
        //   echo "</br>Id: ".$sty['id'].   " name: ".$sty['name']."   ";
        $id = $sty['id'];
    }
}
$sid = $id;

$host = 'localhost';
$dbname = 'TheHand';
$username = 'root';
$password = 'mysql';
$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

// calling stored procedure command
$sql = 'CALL TheHand.spAddAppointment(?,?,?,?,?,?,?,?)';
try {
    // prepare for execution of the stored procedure
    $stmt = $pdo->prepare($sql);

    // pass value to the command
    $mykey = $id;
    $stmt->bindParam(1,$name, PDO::PARAM_STR, 40);
    $stmt->bindParam(2,$phone, PDO::PARAM_STR, 40);
    $stmt->bindParam(3,$style, PDO::PARAM_STR, 40);
    $stmt->bindParam(4,$info, PDO::PARAM_STR, 40);
    $stmt->bindParam(5,$stylist, PDO::PARAM_STR, 40);
    $stmt->bindParam(6,$date, PDO::PARAM_STR, 20);
    $stmt->bindParam(7,$time, PDO::PARAM_INT, 10);
    $stmt->bindParam(8,$sid, PDO::PARAM_INT, 10);
    // print "Values of bound parameters _before_ CALL:\n";
    //   print "  1: {$mykey} \n";
    // execute the stored procedure
    $stmt->execute();

    echo '</br>executedstore procedure';

  //  $ret = array();
  //  $i = 0;
  //  while ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
  //      $dayoftheweek = $row[0];
  //      $theday = $row[1];
  //      $id = $row[2];
  //      $stylistId = $row[3];
  //      $dayId = $row[4];
  //      $starttime = $row[5];
  //      $time = $row[6];
  //      $apptime = $row[7];
  //
  //      $return_arr[] = array(
  //
  //          "dayoftheweek" => $dayoftheweek,
  //          "theday" => $theday,
  //          "id" => $id,
  //          "stylistId" => $stylistId,
  //          "dayId" => $dayId,
  //                      "starttime" => $starttime,
  //                      "time" => $time,
  //                      "apptime" => $apptime);
  //      $ret =  $return_arr;
  //  }
  //  $qryResult = array();
  //  $qryResult['data'] = $ret;
  //  echo json_encode($qryResult);
    return true;

}
catch (PDOException $e) {
    echo $e->getMessage();
}


?>