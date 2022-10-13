<?php


include_once "manejadorexcepcion.php";
//Calcula el inverso del numero pasado como parametro
function inverso($num){
    if($num==0){
        throw new Exception("No se puede dividir por 0");
    }
return 1/$num;
}

try{
    echo "El inverso del numero 5 es " . inverso(5);
   }catch(Exception $e){
       echo "La razon de la excepcion es: " . $e->getMessage();
   }finally{
   echo "Esto siempre se ejecuta";
   }


try{
 echo "El inverso del numero 0 es " . inverso(0);
}catch(MiExcepcion $e){
    echo "La razon de la excepcion es: " . $e->errorpersonalizado();
}finally{
echo "Esto siempre se ejecuta";
}