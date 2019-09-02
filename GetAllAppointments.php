<?php
// Include the json class
//include('includes/json.php');
//header('Content-type:application/json');
$con = mysql_connect("localhost", "root", "mysql");
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}
$db_selected = mysql_select_db("TheHand",$con);
$sql = "CALL spAllAppointments()";
$result = mysql_query($sql,$con);

$data=array();
$rows = array();

$i=0;
$ret = array();
while ($row =  mysql_fetch_row($result))
{
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

};


$qryResult = array();
$qryResult['data'] = $ret;
echo json_encode($qryResult);




mysql_close($con);

// new



 //  while($row = mysql_fetch_row($rows))
 //  {
 //    //  echo $row['id'];
 //
 //      $jsonformat['id']=$row['id'];
 //      $jsonformat['name']=$row['name'];
 //
 //      array_push($data, $jsonformat);
 //  }

  //      header('Content-type: application/json');
        $myresult =   json_encode($data);
    //   $myjson = json_encode($data);
       $mp =  "data: " .  $myjson;
    //   return  "data: ". json_encode($data);

    //    mysql_close($con);

?>