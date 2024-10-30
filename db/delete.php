<?php
require_once 'connection.php';
if (!empty($_GET['id'])) {
  $id = $_GET['id'];
  $deleteSQL = "DELETE FROM products WHERE id=$id";
  $link->query($deleteSQL);
}



?>
 <a href="read.php">Volver a la tabla</a>