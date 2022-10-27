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
        //Si se envia
        if (isset($_POST["envio"])) {

            $this->auth();
        }
    }
    /**
     * auth     crea el usuario y las coockies
     * @return location home.php
     */
    function auth()
    {
        //Las cookies deben ser lo primero en hacer

        $nombre = $_POST["usuario"];
        setcookie("usuario", $nombre, time() + 200);
        header("Location: Home.php");
    }
    /**
     * new  Redirige a pagina para crear deseos
     * @return location new.php
     */
    function new()
    {
        header("Location: New.php");
    }
    /**
     * empty    vacia lista de deseos
     * @return location home.php
     * 
     */
    function empty()
    {
        $nombre = $_COOKIE["usuario"];
        $listadeseos = $_COOKIE[$nombre];


        if ($listadeseos != null) {
            //unset para eliminar
            setcookie($nombre, $listadeseos, time() - 400);
            //Creamos cookie solo con el nombre y para que podamos seguir poniendo deseos (y no de problemas)
            setcookie($nombre, "", time() - 400);
            header("Location: Home.php");
        } else {
            $nombre = $_COOKIE["usuario"];
            setcookie($nombre, $listadeseos, time() - 400);
            //Creamos cookie solo con el nombre y para que podamos seguir poniendo deseos (y no de problemas)
            setcookie($nombre, "", time() - 400);
            header("Location: Home.php");
        }

        header("Location: Home.php");
    }
    /**
     * close    elimina cookies y redirige a index
     * @return location index.php
     */
    function close()
    {
        $nombre = $_COOKIE["usuario"];
        $listadeseos = $_COOKIE[$nombre];
        if ($listadeseos != null) {
            //Cerramos la cookie nombre y la lista deseos
            setcookie("usuario", "", time() - 400);

            setcookie($nombre, "", time() - 400);
            header("Location: index.php");
        } else {
            $nombre = $_COOKIE["usuario"];
            //Cerramos la cookie nombre y la lista deseos
            setcookie("usuario", "", time() - 400);
            setcookie($nombre, "", time() - 400);
            header("Location: index.php");
        }
    }

    /**
     * delete   elimina un objeto de la lista y modifica la cookie en consecuencia
     * @return location home.php
     */
    function delete()
    {
        $nombre = $_COOKIE["usuario"];
        $listadeseos = $_COOKIE[$nombre];
        if (isset($_POST["eliminarid"])) {
            $posicion = $_POST["ideliminar"];
            $listadeseos = json_decode($listadeseos);
            unset($listadeseos[$posicion]);
            // $listadeseos[$posicion]=null;
            $listadeseos = array_values($listadeseos);
            $listadeseos = json_encode($listadeseos);

            setcookie($nombre, $listadeseos, time() + 600);

            header("Location: Home.php");
        }
    }
}
