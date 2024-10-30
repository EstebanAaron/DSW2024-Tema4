<?php
require_once 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>
    <a href="insert.php">Insertar nuevo producto</a>
  </p>
  <h1>Tabla productos</h1>
  <table>
    <thead>
      <tr>
        <th>id</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th colspan="2">Acciones</th>
      </tr>
    </thead>
    <tbody>
<?php
    $results = $link->query('SELECT * from products ORDER BY price DESC');

    while ($product = $results->fetch_object() ) {
      echo "<tr>";
    printf('<td>%d</td>',$product->id);
    printf('<td>%s</td>',$product->name);
    printf('<td>%.2f</td>',$product->price);
    printf('<td><a href="delete.php?id=%d">Eliminar</a></td>', $product->id);
    printf('<td><a href="edit.php?id=%d">Editar</a></td>', $product->id);
    echo "</tr>";

    }
    
?>

    </tbody>
  </table>
</body>
</html>