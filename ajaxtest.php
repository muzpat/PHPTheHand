<?php


$hn = '213.171.200.101:3306';
$db = 'TheHand';
$un = 'Hand123';
$pw = 'Daisy123';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) echo "fatal error";
$query = "SELECT * FROM TheHand.stylists";
$result = $conn->query($query);
$rows = $result->num_rows;

$ret = array();
for ($i = 0; $i < 2; $i++) {
    $dayoftheweek = 0;
    $theday = 1;
    $stylistId = 2;
    $dayId = 3;
    $starttime = 4;
    $name = 5;
    $phone = 6;
    $style = 7;
    $info = 8;
    $stylist = 9;
    $appdate = 10;
    $apptime = 11;

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

?>