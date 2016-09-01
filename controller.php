<?php
require_once './conexion.php';
$titulo= $_POST['titulo'];
$autor= $_POST['autor'];
$autores= $_POST['autores'];
$resumen= $_POST['resumen'];
$tema= $_POST['tema'];
$correoPersonal= $_POST['correoPersonal'];
$correoGmail= $_POST['correoGmail'];
$tipo= $_POST['tipo'];
conectar();
$sql = "INSERT INTO trabajo_tb(titulo, autor, autores, resumen, tema, correo_personal, correo_gmail, t_presentacion, estado) 
 VALUES ('$titulo','$autor','$autores','$resumen','$tema','$correoPersonal','$correoGmail','$tipo', 'ingresada')";
$conexion->query($sql);

desconectar();
//   echo "¡Gracias! Hemos recibido sus datos.\n"; 
// process form
//   $link = mysql_connect("localhost", "root");
//   mysql_select_db("mydb",$db);
//   $sql = "INSERT INTO agenda (nombre, direccion, telefono, email) ".
//     "VALUES ('$nombre', '$direccion', '$telefono', '$email')";
//   $result = mysql_query($sql);
//   echo "¡Gracias! Hemos recibido sus datos.\n"; 
?>
