<?php
if($_POST){
    $boton=$_POST['sw'];
    switch($boton){
        case 1:
            echo "se ha presionado el boton 1";
        break;
        case 2:
            echo 'se ha presionado el boton 2';
        break;
        case 3:
            echo 'se ha presionado el boton 3';
        break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch</title>
</head>
<body>
    
    <form action="ejercicio12.php" method='post'>
        <input type="submit" name='sw' value="1">
        <br/>
        <input type="submit" name='sw' value="2">
        <br/>
        <input type="submit" name='sw' value="3">
        <br/>
    </form>

</body>
</html>