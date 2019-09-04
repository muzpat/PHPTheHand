<?php
  require_once 'login.php';
  function getStylists() {
      $hn = '213.171.200.101:3306';
      $db = 'TheHand';
      $un = 'Hand123';
      $pw = 'Daisy123';
  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) echo "fatal error";
  $query = "SELECT * FROM TheHand.stylists";
  $result = $conn->query($query);
  $rows = $result->num_rows;
  debugger;
  return $result;
  }
?>
