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


        if ($listadeseos != null) {
            $_SESSION['usuario'] = array();
            //elimina informacion
            session_destroy();
            //Borra cookie
            setcookie($_SESSION[$nombre], '', time() - 7200);
            header("Location: Home.php");
        } else {
            $_SESSION['usuario'] = array();
            //elimina informacion
            session_destroy();
            //Borra cookie
            setcookie($_SESSION[$nombre], '', time() - 7200);
            header("Location: Home.php");
        }

        header("Location: Home.php");
    }

    function close()
    {
        $nombre = $_SESSION["usuario"];
        $listadeseos = $_SESSION[$nombre];
        if ($listadeseos != null) {
            //Cerramos la cookie nombre y la lista deseos
            $_SESSION = array();
            //elimina informacion
            session_destroy();
            //Borra cookie
            setcookie(session_name(), '', time() - 7200);
            header("Location: index.php");
        } else {
            $nombre = $_SESSION["usuario"];
            //Cerramos la cookie nombre y la lista deseos
            $_SESSION = array();
            //elimina informacion
            session_destroy();
            //Borra cookie
            setcookie(session_name(), '', time() - 7200);
            header("Location: index.php");
        }
    }



    function delete()
    {
        $nombre = $_SESSION["usuario"];
        $listadeseos = $_SESSION[$nombre];
        if (isset($_POST["eliminarid"])) {
            $listadeseos = json_decode($listadeseos);
            $listadeseos[$_POST["ideliminar"]] = null;
            $listadeseos = json_encode($listadeseos);

            setcookie($nombre, $listadeseos, time() + 400);
        }
    }
}
