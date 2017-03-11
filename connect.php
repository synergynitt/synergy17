<?php
$username="synergy";
$password="Synergy2017";
$server="localhost";
$database="synergy17";

$db = new mysqli($server,$username,$password,$database);

if ($db->connect_errno > 0){
  die("Can't connect to database[" . $db->connect_error . "]");
}

?>
