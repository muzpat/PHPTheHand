<?php
$con = mysql_connect("localhost", "root", "mysql");
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}
$db_selected = mysql_select_db("TheHand",$con);
$sql = "CALL spAllAppointments()";
$result = mysql_query($sql,$con);
while ($row =  mysql_fetch_row($result))
{

    foreach ($row as $col_name => $col_val) {

        echo "<span><b>{$col_name}:</b> $col_val &nbsp;&nbsp;</span>";

    }
    echo "</br>";
};


mysql_close($con);
?>