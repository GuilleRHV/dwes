<?php
class App{

public function index(){
    echo "Ha arrancado el metodo index()";
   $this->fibonacci();
   $this->potencias2();
   $this->factorial();
   $this->listaprimos();
}

public function fibonacci(){
    require_once("17fibonacci.php");
}

public function potencias2(){
    require_once("17potencias2.php");
    
}

public function factorial (){
    require_once("17factorial.php");
}

private function esPrimo($num){
    if($num==0 || $num==1 || $num==4){
        return false;
    }
    for($i=2;$i < $num;$i++){
        if($num%$i==0){
            return false;
        }
       
    }
    return true;
}

public function listaprimos(){
    //Para hacerlo mas facil usaremos el metodo esPrimo para comprobar los nºs primos
    echo "<h2>Numeros primos hasta 10.000</h2>";
    echo "<table border=1><tr>";
    for($i=0;$i<10000;$i++){
        
        if($this->esPrimo($i)){
            echo "<td>" . $i . "</td>";
        }
        
    }
    echo "</tr></table>";
}

}

?>