
<?php

class App
{


    function run()
    {
        $this->login();
        
    }


    function login()
    {

        echo '<form name="miformu" method="POST">
        <p>
            <label for="nombre">Añade elemento</label>
            <p>Usuario</p>
            <input type="text" name="usuario" >
            <p>Contraseña</p>
            <input type="password" name="password" >

        </p>

        <input type="submit" name="envio" id="envio" value="Añadir">

        </form>';
        if(isset($_POST["envio"])){

        $this->auth();}
    }

    function auth()
    {
        if (isset($_POST["envio"])) {
            $nombre = $_POST['usuario'];
            $contraseña = $_POST["password"];
            $array = ['usuario'=>$nombre,'contraseña'=>$contraseña];
            $datospersonales = json_encode($array);
            
            //Las cookies deben ser lo primero en hacer

            setcookie("datospersonales", $datospersonales, time() + 600);
            setcookie("nombre",$nombre,time() + 600);
            $this->home();
        }
    }

    function home(){
        echo "Hola " . $_COOKIE["nombre"];
        echo '<input type="button" name="caducarcookie" value="caducar Cookie"> ';
        if(isset($_POST["caducarcookie"])){
            setcookie("datospersonales", $$_COOKIE["datospersonales"], time() - 600);
            setcookie("nombre", $$_COOKIE["nombre"], time() - 600);
        }
    }
}
