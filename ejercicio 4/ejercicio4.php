<?php
if($_POST){
    $nombre = $_POST["Nombre"];
    $apellido = $_POST["Apellido"];
    echo "Hola " . $nombre . " " . $apellido;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario usuario</title>
</head>
<body> 
    <form action="ejercicio4.php" method="post">
    Nombre:
    <input type="text" name="Nombre" id="">
    Apellido:
    <input type="text" name="Apellido" id="">
    <input type="submit"  value="enviar">
    </form>
</body>
</html>