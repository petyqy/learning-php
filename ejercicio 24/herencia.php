<?php
//simular un objeto
class persona
{
    //public indica que la propiedad puede ser accedida desde fuera de la clase
    public $nombre; //propiedades
    //private idica que la propiedad solo puede ser usada y modificada dento de la clase
    private $Edad;
    //protected hace que la propiedad sea usada en la clase y las clases heredadas
    protected $altura;
    public function asignarNombre($nuevoNombre)
    {
        //acciones o metodos
        $this->nombre = $nuevoNombre;
    }
    //un nuevo metodo que imprime 'Hola soy nombre'
    public function imprimirnombre()
    {
        echo 'Hola soy ' . $this->nombre;
    }
    public function mostraredad()
    {
        $this->Edad = 19;
        return $this->Edad;
    }
}
//clase heredada
class trabajador extends persona{
    public $puesto;
    public function presentacion(){
        echo 'Hola soy '.$this->nombre.' y soy un '.$this->puesto;
    }
}
//objetos
$objTrabajador = new trabajador(); //crear un objeto
$objTrabajador->asignarNombre('Paul'); //le ponemos nombre con el metodo asignar nobmre
$objTrabajador->puesto='profesor';
$objTrabajador->presentacion();
echo $objTrabador->presentacion . '<br/>'; //imprimir
?>