<?php

$nombrefich = "modulodwes.txt";
$fp = fopen($nombrefich,"r");

if(!$fp){
echo "<br> No he podido leer el fichero";
}else{
//LEE EL FICHERO
        //1. Leer caracter a caracter: funcion fgetc
     /*   while(!feof($fp)){
            $caracter = fgetc($fp);
            if($caracter=="\n"){
                echo "<br>";
            }
            echo $caracter;

        }
*/
        //2. Leer linea a linea: funcion fgets
      /*  while(!feof($fp)){
            $linea = fgets($fp);
            echo $linea . "<br>";
        }*/
        //3. Fread
            //fread(fichero,longitud)
        $contenido =fread($fp,filesize($nombrefich));
       // var_dump($contenido);
        print_r($contenido);

}

echo "Cerrando el fichero";
fclose($fp);

$fp2 =fopen($nombrefich,"a");
//a-> Escribir al final del fichero
if(!$fp2){
    echo "No existe el archivo";
}else{
    //PHP_EOL == \n (salto de linea)
$textoainsertar = "Esto es otra linea" . PHP_EOL;
fwrite($fp2,$textoainsertar) ;
}
fclose($fp2);