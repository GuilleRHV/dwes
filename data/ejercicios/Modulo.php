<?php

//include_once "Asignatura.php";
class Modulo extends Asignatura{
    private $codigo =null;


public function __construct($nombre,$numerocreditos,$codigo){

    parent::__construct($nombre,$numerocreditos);
    $this->codigo=$codigo;


}

    

function getCodigo(){
    return $this->codigo;
}


function setCodigo($nuevocodigo){
    $this->codigo=$nuevocodigo;
}


function __toString()
    {
        return "<h3>Datos del modulo</h3><br> 
        Nombre del modulo:" . $this->getNombre() . 
        "<br>Numero de creditos : " . $this->getNumeroCreditos() . 
        "<br>Codigo del modulo: " . $this->codigo;
    }

}