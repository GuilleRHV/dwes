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
        session_start();
        $_SESSION["usuario"] = $nombre;
        header("Location: Home.php");
    }

    function new()
    {
        header("Location: New.php");
    }

    function empty()
    {
        $nombre = $_SESSION["usuario"];
        $listadeseos = $_SESSION[$nombre];
        if (isset($_SESSION[$nombre])) {
            
            $_SESSION[$nombre] = "";
            //elimina informacion
            
            //Borra cookie
            
    

            header("Location: Home.php");
        
        }
    }
    //No se borra
    function close()
    {
        session_start();
        //Cerramos la cookie nombre y la lista deseos
        $_SESSION=array();
        //elimina informacion
        session_destroy();
        //Borra cookie
        setcookie(session_name(),"", time() - 1);
        header("Location: index.php");
    }



    function delete()
    {
        $nombre = $_SESSION["usuario"];
        $listadeseos = $_SESSION[$nombre];
        if (isset($_POST["eliminarid"])) {
            $posicion = $_POST["ideliminar"];
            $listadeseos = json_decode($listadeseos);
            unset($listadeseos[$posicion]);
            // $listadeseos[$posicion]=null;
            $listadeseos = array_values($listadeseos);
            $listadeseos = json_encode($listadeseos);
            $_SESSION[$nombre] = $listadeseos;
            header("Location: Home.php");
        }
    }
}
