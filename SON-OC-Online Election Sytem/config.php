<?php

$user = 'root';
$pass = '';
$db = 'voting_system';

$conn = new mysqli('localhost', $user, $pass, $db) or die("unable to connect");

echo "Connected successfully";
?>