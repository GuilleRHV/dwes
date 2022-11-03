<?php

class App
{


    

    /**
     * login    Redirige al formulario
     * @return method auth
     */
    function login()
    {
        require_once "formulario.php";
        //Si se envia
        if (isset($_POST["envio"])) {

            $this->auth();
        }
    }//Cierre de la funcion

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
    }//Cierre de la funcion
   
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
    }//Cierre de la funcion

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
    }//Cierre de la funcion

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
    }//Cierre de la funcion

     /**
     * new   crea deseos
     * @return location home.php
     */
   
    function new(){
        if (isset($_POST["crearlista"])) {
            //$listadeseos=$_POST["deseo"];
            $nombre = $_COOKIE["usuario"];
            //$listadeseos=[$_COOKIE["nombre"]=>$_POST["deseo"]];
            $listadeseos = $_COOKIE[$nombre];
            if ($listadeseos == null) {
                $listadeseos = array($_POST["deseo"]);
                $listadeseos = json_encode($listadeseos);
            } else {
                $listadeseos = $_COOKIE[$nombre];
                $listadeseos = json_decode($listadeseos);
        
        
                $listadeseos[] = $_POST["deseo"];
        
                $listadeseos = json_encode($listadeseos);
            }
        
            setcookie($nombre, $listadeseos, time() + 400);
            header("Location: Home.php");
        }
    }//Cierre de la funcion
}//Cierre de la clase
