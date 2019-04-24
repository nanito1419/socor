<?php
	
	session_start();
	if(!isset($_SESSION["login"])) // si no hay nada guadado en la variable $_SESSION devuelvelo para la portada para que se logue
	{
		header("location:portada.php?");
	}
	$ID=$_GET['id'];
	?>

<!DUCTYPE html>
<html lang="es">
<head>

	<meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, minimun-scale=1.0" >
		<meta charset="UTF-8">
	<title>confirmar pago</title>
	<link rel="stylesheet" href="css/estilos.css">
	
</head>
<body>
	<div id="contenedor">
		<header>
		<center><img src="imagenes/logo de socor.png" alt= width="960" height="150"></center>
		</header>

		<nav>
		<center><font face="Lucida Calligraphy" SIZE=9> confirma tu pago</font></center>
		</nav>

		<section id="contenido">
			<article>
		<br>
<center><font face="ARIAL" SIZE=6>Debe llenar todos los datos solicitados por la empresa y por motivo de seguridad tambien se recomienda enviar estos datos por correo con un capture adjuntado de su transaccion </font></center>
		<br>
		
						<center> <font color="#ff0000" size="6"><?php
								if(isset($_GET["trampa3"])){
								$trampa=$_GET["trampa3"];
								echo $trampa;}?> </font></center>
								
								<BR><BR>
		<form action="guardar_confirmacion.php" method="POST">
				<BR><BR>
				<div id="tabla"><center><table BORDER="10" height=150% >
					
					<tr><td COLSPAN="2" ALIGN="CENTER"><BR><font face="ARIAL" SIZE=5>FORMA DE PAGO</font>
					<BR><input name="fORMA_PAGO" type="text" size="20" maxlength="15"></td></tr>
					
					<tr><td COLSPAN="2" ALIGN="CENTER"><BR><font face="ARIAL" SIZE=5>NOMBRE DEL BANCO O PASARELA DE PAGO</font>  
					<BR>	<input name="PASARELA" type="text" size="20" value="banesco" maxlength="15"></td>
					</tr>
				<tr>
		<td COLSPAN="2" ALIGN="CENTER"><input name="mid" type="hidden" value="<?php echo $ID ?>">
		<BR><font face="ARIAL" SIZE=5>ID Ó NUMERO DE REFERENCIA DE LA TRASACCION</font>
				<BR><input name="ID_TRANSFE" type="text" value="1419" size="25" maxlength="50"></td>
						</tr>
						
					
					<!--	
	
	<p><td><font face="Lucida Calligraphy" SIZE=4>fecha que realizo el pago</font></td>
			<td><input type="date" name="FECHA" size="20"></td></p>
						</tr>
					<tr>  																

					-->
					
		<!--		<p><td><font face="Lucida Calligraphy" SIZE=4>Sexo
					    <select name="sexo">
						<option selected>---</option>
  						<option>F</option>
  						<option>M</option>
						</select></font></p>
						
		<p><td><font face="Lucida Calligraphy" SIZE=4>Paìs</font>
						<select name="pais">
						<option selected>---</option>
  						<option>Venezuela</option>
  						<option>Mexico</option>
						</select></p></td>				
						</tr>  -->
					<tr><td COLSPAN="2" ALIGN="CENTER"><BR><font face="ARIAL" SIZE=5>CORREO DEL USUARIO REGISTRADO QUE DESEA ACTIVAR </font>
				   <BR><input name="CORREO" type="text" value="a@gmail.com" size="50" maxlength="35"></td></TR>						
						
						<tr>
		<td COLSPAN="2" ALIGN="CENTER"><BR><font face="ARIAL" SIZE=5>CEDULA DEL USUARIO Ó DNI </font><BR>
				  <input name="CEDULA" type="text" value="20569118" size="50" maxlength="15"></td></tr>
					
					<TR><TD ALIGN="CENTER" ><a href="detalle_deposito2.php?id=<?php echo $ID?>"><input name="boton" type="button" value="    ATRAS    "></a></TD>
					<TD ALIGN="CENTER"><input name="enviar" type="submit" value="    CONFIRMAR >>>>>>>  "></TD></TR>
					</TABLE></CENTER> </div id="tabla">
					
		</form>
						
						<BR>
			</article>
		</section>

		<aside>
		<center><font face="ARIAL" SIZE=4>Nuestra empresa en imagen real</font>
			<p><img src="imagenes/imagen3.jpg" alt= width="100" height="100"></p>
			<br>
				<br>
			<p><img src="imagenes/imagen1.jpg" alt= width="100" height="100"></p>
			<br>
				<br>
			<p><img src="imagenes/imagen4.jpg" alt= width="100" height="100"></p></center>
		</aside>

		<footer>

			<center><table>
			<tr>
<td><font face="Lucida Calligraphy" SIZE=4>Recuerda de seguirnos en muestras redes sociales</font></td>
				<td><img src="imagenes/facebook.gif" alt= width="50" height="60"></td>
				<td><img src="imagenes/twiter.gif" alt= width="50" height="60"></td>
				<td><img src="imagenes/correo.png" alt= width="50" height="60"></td>
				<td><img src="imagenes/instagran.gif" alt= width="50" height="60"></td>
				<td><img src="imagenes/whasapp.png" alt= width="50" height="60"></td>
				<td><img src="imagenes/youtube.gif" alt= width="50" height="60"></td>
			</tr>
			</table></center>

		</footer>

		</div>

</body>
</html>