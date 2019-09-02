<?php // test1.php
$hn = 'localhost';
$db = 'TheListeninghand';
$un = 'root';
$pw = 'admin';
$conn = new sqli($hn, $un, $pw, $db);
if ($conn->connect_error) die("Fatal Error");




?>
