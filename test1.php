<?php // test1.php

require 'getstylists.php';
$mass =getStylists();
foreach ($mass as $mas) {
    echo "<option id = '".$mas['id']."'>".$mas['name']."</option>";
}
?>
