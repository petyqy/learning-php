<?php
    //simular un objeto
    class persona{
        //public indica que la propiedad puede ser accedida desde fuera de la clase
        public $nombre; //propiedades
        //private idica que la propiedad solo puede ser usada y modificada dento de la clase
        private $Edad;
        //protected hace que la propiedad sea usada en la clase y las clases heredadas
        protected $altura;
        public function asignarNombre($nuevoNombre){
            //acciones o metodos
            $this->nombre=$nuevoNombre;
        }
        //un nuevo metodo que imprime 'Hola soy nombre'
        public function imprimirnombre(){
            echo'Hola soy '.$this->nombre;
        }
        public function mostraredad(){
            $this->Edad=19;
            return $this->Edad;
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