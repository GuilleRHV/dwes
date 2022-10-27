<?php

class App
{

    /**
     * run  ejecuta la app
     * 
     */
    function run()
    {
        require_once "formulario.php";
    }

    /**
     * login   confirma datos
     * @return method auth   
     */

    function login()
    {

        //require_once "formulario.html";
        if (isset($_POST["envio"])) {
            //si se envia el formulario se valida
            $this->auth();
        }
    }
    /**
     * auth   registra los datos
     * @return location home.php
     */
    function auth()
    {
        //Las cookies deben ser lo primero en hacer

        $nombre = $_POST["usuario"];
        $contraseña = $_POST["password"];
        $array = ['usuario' => $nombre, 'contraseña' => $contraseña];
        $datospersonales = json_encode($array);
        setcookie("datospersonales", $datospersonales, time() + 600);
        setcookie("nombre", $nombre, time() + 600);
        //Ver que recibe los datos
        //echo "el nombre es " . $nombre;
        //header("Location: pagina.php");
        header("Location: Home.php");
    }
}
