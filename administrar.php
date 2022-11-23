<?php
require('conexion.php');

$sql = "select * from contacto";
$resultado = mysqli_query($con,$sql);
$num_filas = mysqli_num_rows($resultado);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administrar Contactos</title>
</head>
<body>
  <br>
  <center>
    <h1>Administrar Contactos</h1>
    <br>

    <table border="1">
      <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Dirección</th>
        <th>Email</th>
        <th>Teléfono</th>
        <th>Celular</th>
        <th>Whatsapp</th>
        <th>Acciones</th>
      </thead>

      <?php
      while($fila=mysqli_fetch_assoc($resultado)){
        ?>
        <tbody>
        <td><?php echo $fila['id_contacto'] ?></td>
        <td><?php echo $fila['nombre_suc'] ?></td>
        <td><?php echo $fila['direccion'] ?></td>
        <td><?php echo $fila['email'] ?></td>
        <td><?php echo $fila['tel'] ?></td>
        <td><?php echo $fila['cel'] ?></td>
        <td><?php echo $fila['whatsapp'] ?></td>
        <td><a href="#">Actualizar</a></td>
      </tbody>
        <?php
      }
      ?>
    </table>
    <br>

    <h2>Número de registros: </h2>
  </center>
</body>
</html>