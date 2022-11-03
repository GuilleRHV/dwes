<?php

class App
{   



  public function run()
  {
    if (isset($_GET['method'])) {
      $method = $_GET['method'];
    } else {
      $method = 'index';
    }
  
    $this->$method();      
  }
    

  function index(){
    require_once "views/Home.php";



  }

  function colorpage(){
      require_once "views/Colores.php";
  } 

    /*Como he tenido errores con el ?method=color="colorelegido"
        y como no hemos visto en profundidad su funcionamiento
        he hecho una funcion por cada color
    */   
    
    function cambiocolorrojo()
    {   
        
        setcookie("color","red",time()+300);
        include "views/Home.php";
        echo "<style type'text/css'>
                body{
                    background-color:red;
                 } </style>";
       
    }
    function cambiocolorazul()
    {   
        setcookie("color","blue",time()+300);
        include "views/Home.php";
        
        echo "<style type'text/css'>
                body{
                    background-color:blue;
                 } </style>";
       
    }
    function cambiocoloramarillo()
    {   
        
        setcookie("color","yellow",time()+300);
        include "views/Home.php";
        echo "<style type'text/css'>
                body{
                    background-color:yellow;
                 } </style>";
       
    }

    function vistacolores(){
        // header("Location: views/Colores.php");
        require_once "views/Colores.php";
        if(isset($_COOKIE["color"])){
            if($_COOKIE["color"]=="red"){
                echo "<style type'text/css'>
                body{
                    background-color:red;
                 } </style>";
            }elseif($_COOKIE["color"]=="blue"){
                echo "<style type'text/css'>
                body{
                    background-color:blue;
                 } </style>";
            }elseif($_COOKIE["color"]=="yellow"){
                echo "<style type'text/css'>
                body{
                    background-color:yellow;
                 } </style>";
            }
        }
    }
}
