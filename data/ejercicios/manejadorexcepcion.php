<?php

class MiExcepcion extends Exception{

    public function errorpersonalizado(){
        $menserror = "Informacion del error :
            Mensaje del error " .  $this->getMessage() . "<br>
            Fichero que genera el error: " . $this->getFile() . "<br>
            Linea que produce el error: " . $this->getLine() . "<br>";
            return $menserror;
    }
}