<?php
    //simular un objeto
    class persona{
        //public indica que la propiedad puede ser accedida desde fuera de la clase
        public $nombre; //propiedades
        public function asignarNombre($nuevoNombre){
            //acciones o metodos
            $this->nombre=$nuevoNombre;
        }
        //un nuevo metodo que imprime 'Hola soy nombre'
        public function imprimirnombre(){
            echo'Hola soy '.$this->nombre;
        }
    
    }
    //objetos
    $objAlumno= new persona(); //crear un objeto
    $objAlumno->asignarNombre('William');//le ponemos nombre con el metodo asignar nobmre
    echo $objAlumno->nombre.'<br/>';//imprimir
    //creamos un nuevo objeto de la clase persona
    $objAlumno2= new persona();

    $objAlumno2->asignarNombre('Andres');
    echo $objAlumno2->nombre.'<br/>';
    $objAlumno2->imprimirnombre();
?>