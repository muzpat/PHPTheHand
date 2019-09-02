<?php
  require_once 'login.php';
  function getStylists() {
      $hn = 'localhost';
      $db = 'TheHand';
      $un = 'root';
      $pw = 'mysql';
  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) echo "fatal error";
  $query = "SELECT * FROM TheHand.stylists";
  $result = $conn->query($query);
  $rows = $result->num_rows;
  return $result;
  }
?>
