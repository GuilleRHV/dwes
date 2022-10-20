<?php

class App
{


    function run()
    {
        //Si da problemas poner este y quitar el del login
        //require_once "formulario.php";
    }


    function login()
    {
        require_once "formulario.php";
        //require_once "formulario.html";
        if (isset($_POST["envio"])) {
            
            $this->auth();
        }
    }

    function auth()
    {
        //Las cookies deben ser lo primero en hacer

        $nombre = $_POST["usuario"];
        setcookie("usuario", $nombre, time() +200);
        header("Location: Home.php");
    }

    function new(){
        header("Location: New.php");
    }

 
}
