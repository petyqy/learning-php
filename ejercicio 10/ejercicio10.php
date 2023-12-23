
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

 /*   if($valorA==$valorB){
        echo"el valor de A es igual que el valor de B ,";
        //condicionales anidados
        if ($valorA==4){
            echo 'el valor es 4';
        }
        if($valorA==5){
            echo'el valor es 5';
        }
    }
    */
}

//condicional compacto (sin anidar)
if (($valorA==$valorB) && ($valorA==4)){
    echo'el valor de A es igual a B y es 4';
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