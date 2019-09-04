<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'getstylists.php';
try {
    $stylist = $_GET['stylist'];
    $stylist = urldecode($stylist);
    $arrayhrs = $_GET['arrayhrs'];
    $dayId;
    $day =  $_GET['day'];
            if ($day == "Sunday")
            {
                $dayId = 1;
            }
            else if ($day == "Monday")
            {
                $dayId = 2;
            }
            else if (day == "Tuesday")
            {
                $dayId = 3;
            }
            else if (day == "Wednesday")
            {
                $dayId = 4;
            }
            else if (day == "Thursday")
            {
                $dayId = 5;
            }
            else if (day == "Friday")
            {
                $dayId = 6;
            }
            else if (day == "Saturday")
            {
                $dayId = 7;
            }
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

    $host = '213.171.200.101:3306';
    $dbname = 'TheHand';
    $username = 'Hand123';
    $password = 'Daisy123';
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // calling stored procedure command
    $sql = 'CALL spUpdateAvailabilty(?,?,?)';

    // prepare for execution of the stored procedure
    $stmt = $pdo->prepare($sql);

    // pass value to the command
    $mykey = $id;
    $stringhrs = (string)"99";
    if ($arrayhrs != 99) {
        $stringhrs = $arrayhrs;
    }
 ;

    $stmt->bindParam(1,$sid, PDO::PARAM_INT, 10);
    $stmt->bindParam(2,$stringhrs, PDO::PARAM_STR, 100);
    $stmt->bindParam(3,$dayId, PDO::PARAM_INT, 10);



    $stmt->execute();

    return true;

}
catch (PDOException $e) {
    echo $e->getMessage();
}


?>