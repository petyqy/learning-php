
<?php
//operadores logicos
if($_POST){
    $valorA=$_POST["valorA"];
    $valorB=$_POST["valorB"];
    //and, or , xor
    //and , verdadero los dos:&&
    /*if(($valorA != $valorB) && ($valorA > $valorB) ){
        echo 'El valor A: '.$valorA.' es diferente y ademas es mayor que el valor B: '.$valorB;
    }*/
    //OR si alguno de los dos es TRUE: ||
    if(($valorA != $valorB) || ($valorA > $valorB) ){
        echo 'El valor A: '.$valorA.' es diferente o mayor que el valor B: '.$valorB;
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
    <form action="ejercicio9.php" method="post">
        Valor A: 
    <input type="text" name="valorA" id="">
        Valor B: 
    <input type="text" name="valorB" id="">
        Resultado=
    <input type="submit" name="resultado" id="">
    </form>
</body>
</html>