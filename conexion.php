<?php

function conectar(){
    //almacenamos los datos para la conexion
    $servidor = "localhost";
    $base = "dssd2016_bd";
    $usuario = "root";
   // $pass = "";
    global $conexion;
    //conectamos
    $conexion=@mysql_connect($servidor, $usuario);
    if($conexion){
     mysql_select_db($base,$conexion);
    }else{
        echo "No se logro conectar a la base de datos";
    }
}
 
//desconectamos
function desconectar(){
    mysql_close(); //desconectamos
}


//if (!$conexion) {
//    die('<strong>No pudo conectarse:</strong> ' . mysql_error());
//} else {
////La siguiente linea no es necesaria, simplemente la pondremos ahora para poder observar que la conexión ha sido realizada
//    echo 'Conectado  satisfactoriamente al servidor <br />';
//}
///* En esta linea seleccionaremos la BD con la que trabajaremos y le pasaremos como referencia la conexión al servidor.
//  Para saber si se conecto o no a la BD podríamos utilizar el IF de la misma forma que la utilizamos al momento de conectar al servidor, pero usaremos otra forma de comprobar eso usando die().
// */
//mysql_select_db($BD, $conexion) or die(mysql_error($conexion));
?>
