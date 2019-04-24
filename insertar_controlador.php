<?php
//listo
$nombre=htmlentities(addslashes($_POST["Nombre"]));
$cedula=htmlentities(addslashes($_POST["Cedula"]));
$password=$_POST["Password"];
$passwordR=$_POST["PasswordR"];
$idrefe=htmlentities(addslashes($_POST["IDrefe"]));
$correo=htmlentities(addslashes($_POST["Correo"]));
$telf=htmlentities(addslashes($_POST["Telf"]));

IF ($password===$passwordR)
{
require('archivo_insertar.php');

$passcifrada=password_hash($password,PASSWORD_DEFAULT);


	comparar_correo($correo, $telf, $idrefe, $nombre, $cedula, $passcifrada);
	
	
//header
}
ELSE
{
	$A="LA PASSWORD NO COINCIDEN, INTENTA DE NUEVO ";
	header("LOCATION:formulario_registro.php?B=$A");
}
?>