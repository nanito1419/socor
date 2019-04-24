<?PHP

$correo=htmlentities(addslashes($_POST["CORREO"]));
$pasarela=htmlentities(addslashes($_POST["PASARELA"]));
$id_transferencia=htmlentities(addslashes($_POST["ID_TRANSFE"]));
$cedula=htmlentities(addslashes($_POST["CEDULA"]));
$id_user=$_POST["mid"];

require('archivo_insertar.php');

comparar_correo_pago($id_user,$correo, $cedula, $id_transferencia, $pasarela);


?>

