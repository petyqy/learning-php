
<?php
//operadores relacionales
if($_POST){
    $valorA=$_POST["valorA"];
    $valorB=$_POST["valorB"];
    if($valorA != $valorB){
        echo 'El valor A: '.$valorA.' es diferente al valor B: '.$valorB;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    <form action="ejercicio8.php" method="post">
        Valor A: 
    <input type="text" name="valorA" id="">
        Valor B: 
    <input type="text" name="valorB" id="">
        Resultado=
    <input type="submit" name="resultado" id="">
    </form>
</body>
</html>