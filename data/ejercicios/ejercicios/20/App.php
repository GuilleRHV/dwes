<?php

class App
{


  
    /**
     * login
     * @return method auth
     */

    function login()
    {
        require_once "formulario.php";
        //require_once "formulario.html";
        if (isset($_POST["envio"])) {

            $this->auth();
        }
    }
    /**
     * auth     crea el usuario y la sesion
     * @return location home.php
     */
    function auth()
    {
        //Las cookies deben ser lo primero en hacer

        $nombre = $_POST["usuario"];
        session_start();
        $_SESSION["usuario"] = $nombre;
        header("Location: Home.php");
    }

    /**
     * new  Redirige a pagina para crear deseos
     * @return location new.php
     */
    function new()
    {
        if (isset($_POST["crearlista"])) {
            //$listadeseos=$_POST["deseo"];
            $nombre = $_SESSION["usuario"];
            //$listadeseos=[$_COOKIE["nombre"]=>$_POST["deseo"]];
        
            if (isset($_SESSION[$nombre])) {
                $listadeseos = $_SESSION[$nombre];
        
                $listadeseos = json_decode($listadeseos);
                //json_decode($listadeseos);
                
                
        
                $listadeseos[] = $_POST["deseo"];
            } else {
        
        
                $listadeseos = array($_POST["deseo"]);
                // $_SESSION[$nombre][]=$_POST["deseo"];
        
        
        
            }
            $listadeseos = json_encode($listadeseos);
            $_SESSION[$nombre] = $listadeseos;
        
            
        }
    }
    /**
     * empty    vacia lista de deseos
     * @return location home.php
     * 
     */
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
    /**
     * close    elimina cookies y redirige a index
     * @return location index.php
     */
    //Destruye la sesion y la borra 
    function close()
    {
        session_start();
        //Cerramos la cookie nombre y la lista deseos
        $_SESSION = array();
        //elimina informacion
        session_destroy();
        //Borra cookie
        setcookie(session_name(), "", time() - 1, "/");
        header("Location: index.php");
    }


    /**
     * delete   elimina un objeto de la lista y modifica la sesion en consecuencia
     * @return location home.php
     */
    //Elimina una posicion del array lista de deseos
    function delete()
    {
        $nombre = $_SESSION["usuario"];
        $listadeseos = $_SESSION[$nombre];

        $posicion = $_POST["ideliminar"];
        $listadeseos = json_decode($listadeseos);
        unset($listadeseos[$posicion]);
        //El espacio sobrante lo ordena
        $listadeseos = array_values($listadeseos);
        $listadeseos = json_encode($listadeseos);
        $_SESSION[$nombre] = $listadeseos;
        header("Location: Home.php");
    }
}
