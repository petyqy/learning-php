<?php
//funciones
            /*apellido tiene un valor nulo o vacio para 
            no provocar errores
            sin ese valor seran requeridos todos los argumentos 
            de manera obligatoria*/
    function printname($nombre,$apellido=""){
        //intrucciones o rutinas que seran
        //aplicados en todas los llamados
        echo'hola '.$nombre.' '.$apellido.'<br/>';
    }
    //llamar a la funcion 
printname('William');
printname('Andres','Ortega');
?>