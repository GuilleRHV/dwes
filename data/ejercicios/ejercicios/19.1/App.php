<?php

class App{



    function run(){
        if (isset($_GET['method'])) {
            $method = $_GET['method'];
          } else {
            $method = 'login';
          }
        
          $this->$method();      
    }

    function login(){
        if(isset($_COOKIE["nombre"])){
            header("Location: ?method=home");
            return;
        }
        include ("views/login.php");
    }


    function auth(){
        if(isset($_POST["nombre"]) && isset($_POST["password"])){
            $nombre=$_POST["nombre"];
            $password=$_POST["password"];

        }else{
            header("Location: ?method=login");
        return;
    }
        setcookie("nombre",$nombre,time()+300);
        setcookie("password",$password,time()+300);
        header("Location: ?method=home");
}

    function home(){
        if(!isset($_COOKIE["nombre"])){
            header("Location: ?method=login");
            return;
        }
        if(isset($_COOKIE["deseos"])){
            $deseos=unserialize($_COOKIE["deseos"]);
        }else{
            $deseos=[];
        }
        include "views/Home.php";

    }

    function new() {
        if(!isset($_POST["new"])){
            header("Location: index.php?method=home");
            return;
        }

        $new = $_POST["new"];
        if(isset($_COOKIE["deseos"])){
            $deseos=unserialize($_COOKIE["deseos"]);

        }else{
            $deseos=[];
        }
        $deseos[]=$new;
        setcookie("deseos",serialize($deseos),time()+300);
        header("Location: index.php?method=home");


    }




}