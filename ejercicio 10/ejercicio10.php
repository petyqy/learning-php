
<?php
//operaciones aritmeticas
if($_POST){
    $valorA=$_POST["valorA"];
    $valorB=$_POST["valorB"];
    //suma
    $suma=$valorA+$valorB;
    //resta
    $resta=$valorA-$valorB;
    //division
    $division=$valorA/$valorB;
    //multiplicacion
    $multiplicacion=$valorA*$valorB;
    //resultados
    echo "resultado: ".$suma."<br/>";
    echo "resultado: ".$resta."<br/>";
    echo "resultado: ".$division."<br/>";
    echo "resultado: ".$multiplicacion."<br/>";
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
    <form action="ejercicio10.php" method="post">
        Valor A: 
    <input type="text" name="valorA" id="">
        Valor B: 
    <input type="text" name="valorB" id="">
        Resultado=
    <input type="submit" name="resultado" id="">
    </form>
</body>
</html>