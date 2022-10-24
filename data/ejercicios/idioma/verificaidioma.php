<?php

if(isset($_POST["envio"])){
    //si no esta vacia y tampoco se ha establecido la cookie idioma
    if(!empty($_POST["idioma"]) && !isset($_COOKIE["idioma"])){
        setcookie("idioma",$_POST["idioma"],time()+200);

    }
    if(!empty($_POST["marca"])&& !isset($_COOKIE["marca"])){
        setcookie("marca",$_POST["marca"],time()+200);
        
    }
    if(!empty($_POST["idioma"]) && !empty($_POST["marca"])){
        header("Location: visualizaopciones.php");
        exit();
    }
}else{
    //Borrar las coockies como medida de seguridad
    //y redirigir a idioma.html
    setcookie("idioma","",time()-200);
    setcookie("marca","",time()-200);
    header("Location: idioma.html");

    exit(); // die()
}