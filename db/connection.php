<?php
@$link = new mysqli('localhost','shopuser','1234','shop');
@$link1 = new mysqli('localhost','shopuser','1234','shop');


$error = $link ->connect_errno;
$error1 = $link1->connect_errno;


if ($error != null) {
  echo "<p> Error $error conectando a la base de datos : $link->connect_error</p>";
  die();
}
if ($error1 != null) {
  echo "<p> Error $error1 conectando a la base de datos : $link1->connect_error</p>";
  die();
}