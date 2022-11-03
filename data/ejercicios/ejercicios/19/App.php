<?php

class App
{


    /**
     * run  ejecuta la pagina
     * @return method index/other
     */
    public function run()
    {
        if (isset($_GET['method'])) {
            $method = $_GET['method'];
        } else {
            $method = 'index';
        }

        $this->$method();
    }//Cierre de la funcion

    /**
     * index    Pagina index
     * @return view
     */
    function index()
    {
        require_once "views/Home.php";
    }//Cierre de la funcion

    /**
     * colorpage    redirige a la seleccion de colores
     * @return view
     */
    function colorpage()
    {
        require_once "views/Colores.php";
    }//Cierre de la funcion


    
    /*Como he tenido errores con el ?method=color="colorelegido"
        y como no hemos visto en profundidad su funcionamiento
        he hecho una funcion por cada color
    */
    /**
     * cambiocolorrojo  cambia el fondo a color rojo y establece la cookie
     */
    function cambiocolorrojo()
    {

        setcookie("color", "red", time() + 300);
        include "views/Home.php";
        echo "<style type'text/css'>
                body{
                    background-color:red;
                 } </style>";
    }//Cierre de la funcion

    /**
     * cambiocolorazul  cambia el fondo a color azul y establece la cookie
     */
    function cambiocolorazul()
    {
        setcookie("color", "blue", time() + 300);
        include "views/Home.php";

        echo "<style type'text/css'>
                body{
                    background-color:blue;
                 } </style>";
    }//Cierre de la funcion

    /**
     * cambiocoloramarillo  cambia el fondo a color amarillo y establece la cookie
     */
    function cambiocoloramarillo()
    {

        setcookie("color", "yellow", time() + 300);
        include "views/Home.php";
        echo "<style type'text/css'>
                body{
                    background-color:yellow;
                 } </style>";
    }//Cierre de la funcion

    /**
     * vistacolores     Si existe la cookie color pinta el fonde de ese color
     */
    function vistacolores()
    {
        // header("Location: views/Colores.php");
        require_once "views/Colores.php";
        if (isset($_COOKIE["color"])) {
            if ($_COOKIE["color"] == "red") {
                echo "<style type'text/css'>
                body{
                    background-color:red;
                 } </style>";
            } elseif ($_COOKIE["color"] == "blue") {
                echo "<style type'text/css'>
                body{
                    background-color:blue;
                 } </style>";
            } elseif ($_COOKIE["color"] == "yellow") {
                echo "<style type'text/css'>
                body{
                    background-color:yellow;
                 } </style>";
            }
        }
    }//Cierre de la funcion
}//Cierre de la clase
