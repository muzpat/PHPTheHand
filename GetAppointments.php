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
    print "Values of bound parameters _before_ CALL:\n";
    print "  1: {$mykey} \n";
    // execute the stored procedure
    $stmt->execute();



    echo '</br>here!';
    $i = 0;
    while ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
        $i = $i +1 ;
      //  echo $row[0];
        $data = $row[0] . "\t" . $row[1] . "\t" . $row[2] . "\n";
        echo $data, '</br>';
    }
    echo $i;
  }
catch (PDOException $e) {
    print $e->getMessage();
}


?>