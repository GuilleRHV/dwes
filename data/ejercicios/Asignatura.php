<?php


/*
CONCEPTOS
    - Sobrescritura (metodos)
        ->mismo nombre con mismo numero de paramentros
            -> Clase figura -> metodo calcular_area
            -> Clase circulo -> metodo calcular_area
            -> Clase cuadrado -> metodo calcular_area

    - Sobrecarga (metodos)
        ->mismo nombre con diferentes numero de parametros
    - Sobrecarga (constructores)
        ->diferentes constructores con el mismo nombre con dif parametros
    - Polimorfismo: objeto que se comporta como otro.
        - casting
        - sobrescritura
        - sobrecarga
        - ligadura dinamica


PHP:
    - Si sobrescritura
    - No existe sobrecarga
    - No hay sobrecarga de constructores
    - Si hay polimorfismo (sobrescritura)
    - public, private, protected. Por defecto public
NOTACION: 
    - Nombre clases : UpperCamelCase (PascalCase)
    - Nombre metodos : loweCamelCase
    java : this.attr
    php :$this->attr
    */


class Asignatura{
    private $nombre=null;
    private $numcreditos=null;
    private static $ciclo = null;

    public function __construct($nombre,$numcreditos)
    {
        $this->nombre = $nombre;
        $this->numcreditos=$numcreditos;
    }
    


    function getNombre(){
        return $this->nombre;
    }

    function setNombre($noombre){
        $this->nombre=$noombre;
    }

    function getNumeroCreditos(){
        return $this->numcreditos;
    }

    static function getCiclo(){
        //para acceder a estaticos
        return self::$ciclo;
       
    }
    static function setCiclo($nomciclo){
        self::$ciclo = $nomciclo;
    }

    function setNumeroCreditos($numcreditos){
        $this->numcreditos=$numcreditos;
    }

    function __toString()
    {
        return "Datos de la asignatura :<br> " . $this->nombre . 
        "<br>numero de creditos : " . $this->numcreditos;
    }
}//fin clase