<?php
//Esta sera la clase App, la que concentrara todos los metodos del ejercicio
class App
{
    /**
     * index
     * @return function variasfunciones
     */
    public function index()
    {
        echo "Ha arrancado el metodo index()";
        $this->fibonacci();
        $this->potencias2();
        //Introducimos numero hasta del que queremos saber los factoriales anteriores
        $this->factorial();
        $this->listaprimos();
    }

    public function fibonacci()
    {
        //Require_once para acceder a un archivo externo una vez
        require_once("17fibonacci.php");
    }

    public function potencias2()
    {
        require_once("17potencias2.php");
    }
    /**
     * factorial
     * @return method calcularfactorial
     */
    public function factorial()
    {
        //Para calcular el factorial he usado una clase extra para tambien montar un pequeño formulario que reciba nuestro numero
        require_once("17factorial.php");
        $facto = new Factorial();
        $facto->calcularfactorial();
    }
    /**
     * esPrimo
     * @param $num numero
     * @return boolean si es primo o no
     */
    private function esPrimo($num)
    {
        //Funcion para verificar si el numero recibido como parametro es primo
        if ($num == 0 || $num == 1 || $num == 4) {
            return false;
        }
        for ($i = 2; $i < $num; $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }
        return true;
    }
    /**
     * listaprimos
     * @return string primos
     */
    public function listaprimos()
    {
        //Para hacerlo mas facil usaremos el metodo esPrimo para comprobar los nºs primos
        echo "<h2>Numeros primos hasta 10.000</h2>";
        echo "<table border=1><tr>";
        for ($i = 0; $i < 10000; $i++) {
            //Cada vez que $i tome un valor se verificara si es primo, pasandose como parametro a la funcion esPrimo($i)
            if ($this->esPrimo($i)) {
                echo "<td>" . $i . "</td>";
            }
        }
        echo "</tr></table>";
    }
}
