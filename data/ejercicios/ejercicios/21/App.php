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
        
    session_start();
    

    
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
     * cambiocolorrojo  cambia el fondo a color rojo y establece la sesion
     */
    function cambiocolorrojo()
    {
        
        $_SESSION["color"]="red";
    
        include "views/Home.php";
        echo "<style type'text/css'>
                body{
                    background-color:red;
                 } </style>";
    }//Cierre de la funcion

    /**
     * cambiocolorazul  cambia el fondo a color azul y establece la sesion
     */
    function cambiocolorazul()
    {
        
        $_SESSION["color"]="cyan";
        include "views/Home.php";

        echo "<style type'text/css'>
                body{
                    background-color:cyan;
                 } </style>";
    }//Cierre de la funcion

    /**
     * cambiocoloramarillo  cambia el fondo a color amarillo y establece la sesion
     */
    function cambiocoloramarillo()
    {

        $_SESSION["color"]="yellow";
        include "views/Home.php";
        echo "<style type'text/css'>
                body{
                    background-color:yellow;
                 } </style>";
    }//Cierre de la funcion

    /**
     * vistacolores     Si existe la sesion color pinta el fonde de ese color
     */
    function vistacolores()
    {
        if (isset($_SESSION["color"])) {
            if ($_SESSION["color"] == "red") {
                echo "<style type'text/css'>
                body{
                    background-color:red;
                 } </style>";
            } elseif ($_SESSION["color"] == "cyan") {
                echo "<style type'text/css'>
                body{
                    background-color:cyan;
                 } </style>";
            } elseif ($_SESSION["color"] == "yellow") {
                echo "<style type'text/css'>
                body{
                    background-color:yellow;
                 } </style>";
            }
        }
        require_once "views/Colores.php";
        
    }//Cierre de la funcion
}//Cierre de la clase
