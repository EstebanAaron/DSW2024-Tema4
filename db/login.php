<?php
require_once 'connection.php';



$username=$_POST["name"];
$password=$_POST["password"];


$results = $link1->query("SELECT * FROM users WHERE user='$username' and password LIKE '$password'");

if ($product = $results->fetch_object()) {
  echo "<h1>Existo absoluto<h1>";
}
else{
  echo "<h1>Fallo</h1>";
}
$link1->close();