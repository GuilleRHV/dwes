<?php

class Factorial{

    /*He hecho una clase especifica para calcular el factorial hasta 1 millon
    Para ello he hecho un pequeño formulario dentro de la funcion calcularfactorial()
    */ 
function calcularfactorial(){
    $resultado=1;
    echo "<h2>Factorial hasta 1.000.000</h2>";
    echo "<form name='minum' method='GET'>
    <p>
        <label for='nombre'>introduce numero</label>
        <input type='text' name='numero' id='nombrepersona'>

    </p>

    <input type='submit' name='envio' id='envio' value='Enviar' minlength='3'>
    </form>'";
    echo "<table border=1><tr>";
    
        //Mientras el numero ($num) sea menor a 1 millon se seguirá calculando los factorioales
        $num=$_GET['numero'];
        for($i=1;$i<=$num;$i++){
            $resultado=$resultado*$i;
            if ($resultado < 1000000) {
                echo "<br>El factorial de ".$i." es "  . $resultado;
            }else{
                echo "<br>Has alcanzado el limite (1.000.000)";
            break;
            }
        
    }
    
   
   
    }

}