<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'getstylists.php';
try {

    $name = $_GET['name'];
    $phone =  $_GET['phone'];
    $style =  $_GET['style'];
    $info =  $_GET['info'];
    $stylist = $_GET['stylist'];
    $stylist = urldecode($stylist);
    $date =  $_GET['date'];
    $time =  $_GET['time'];

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
    $sql = 'CALL spAddAppointment(?,?,?,?,?,?,?,?)';

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


    $stmt->execute();

    return true;

}
catch (PDOException $e) {
    echo $e->getMessage();
}


?>