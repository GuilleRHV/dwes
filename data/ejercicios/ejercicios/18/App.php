<?php

class App
{


    function run()
    {
        require_once "formulario.php";
    }


    function login()
    {

        //require_once "formulario.html";
        if (isset($_POST["envio"])) {
            $this->auth();
        }
    }

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
