<?php // query.php
  require_once 'login.php';
  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die("Fatal Error");

  $query  = "SELECT * FROM availability";
  $result = $conn->query($query);
  if (!$result) die("Fatal Error");

  $rows = $result->num_rows;

  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    echo 'id: '   . htmlspecialchars($result->fetch_assoc()['id'])   . '<br>';
    $result->data_seek($j);
    echo 'stylistId: '    . htmlspecialchars($result->fetch_assoc()['stylistId'])    . '<br>';
    $result->data_seek($j);
    echo 'dayId: ' . htmlspecialchars($result->fetch_assoc()['dayId']) . '<br>';
    $result->data_seek($j);
    echo 'starttime: '     . htmlspecialchars($result->fetch_assoc()['starttime'])     . '<br>';
    $result->data_seek($j);
    echo 'time: '     . htmlspecialchars($result->fetch_assoc()['time'])     . '<br><br>';
  }

  $result->close();
  $conn->close();
?>
