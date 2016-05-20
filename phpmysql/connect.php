<?php

$user = 'root';
$pass = 'Password1';
$db = 'dockerphpapp';

$dbc = new mysqli('mysql', $user, $pass, $db ) or die("Unable to Connect");

?>

