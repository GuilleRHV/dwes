<?php
$var1 = 5;
$var2 = "7";
$var2 =(int)"7";

$var3 = (string)8;
//Concatenar se usa el punto: .
echo "var 1 es del tipo " . gettype($var3);
//isset (si es null debolvera FALSE(nada) y si existe devolbera 1)
echo "la variable 3 esta definido : ? " . isset($var3) . "<br>";
echo "la variable 4 esta definido : ? " . isset($var4) . "<br>";
//MEtodo empty
$var5="";
echo "la variable 5 esta vacia: " . empty($var5) . "<br>";
echo "la variable 1 esta vacia: " . empty($var1) . "<br>";
/* 
    variables: [A-Z,a-z,0-9]
        - No pueden comenzar con numeros ni caraceres especiales
        
    constantes: 
        NO TIENEN DOLAR
*/
  const MICONST = 100;
  echo 'mi constante vale ' . MICONST . "<br>";

  define('CONSTANTE2',200);
  echo 'mi constante 2 vale ' . CONSTANTE2 . "<br>";
/*
    -----------------------------------
        TIPOS DE DATOS
            int,string,boolean,float
            arrays, objetos, ficheros
        tipado de lenguaje de programacion
            -Fuerte: En Java es fuerte (int var1 = 0)
            -Debil: PHP ($var1 = 0)
            Consensitive 
                java ->si
                php-> a medias
                    las variables -> si
                    $MIVAR ->diferente mibar
                    los metodos no
        
        typ VSC ctrl+mayus+7 para comentar lineas seleccionadas
        getType();
--------------------------------------------------------------
        OPERADORES
        =, >, <, <=,
        == si el valor es el mismo
        === es del mismo valor y del mismo tipo
        <=>
        */
        $num1 = 3;
        $num2 = "3";
        if($num1 === $num2){
            echo 'son iguales <br>';
        }else{
            echo 'son diferentes <br>';
        }



        $num1 = 3;
        $num2 = 7;
        echo $num1<=>$num2;

        /*IF
            if(){
            }elsefi{
            }
            else{
            }
        ---------------------------------------
        WHILE
        do()while
        -----------------------------------------
        FOR
            for($i=0;$i<10;$i++){
                $miarray[$i];
            }
        --------------------------------------
        FOR EACH (SE USA MAS QUE EL FOR)
        foreach($array as &$elm){
            echo "$elm";
        }
        */