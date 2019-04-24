<!DUCTYPE html>
<html lang="es">
<head>

	<meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, minimun-scale=1.0" >
		<meta charset="UTF-8">
	<title>Registro</title>
	<link rel="stylesheet" href="css/estilos.css">
	
</head>
<body>
	<div id="contenedor">
		<header>
		<center><img src="imagenes/logo de socor.png" alt= width="960" height="150"></center>
		</header>

		<nav>
		<center><font face="ARIAL" SIZE="9">Registro</font></center>
		</nav>

		<section id="contenido">
			<article>
		<BR>
<center><font face="ARIAL" SIZE="7">Debe llenar todos los datos solicitados por la empresa</font></center>
		<BR><BR>
		<center><font color="#ff0000" size=6><?php
								if(isset($_GET["cortel"])){
								$celco=$_GET["cortel"];
								echo $celco;}?> </font> </center>
		
		<BR><BR>
		<center><font color="#ff0000" size=7><?php
								if(isset($_GET["B"])){
								$C=$_GET["B"];
								echo $C;}?>
								</center> </font>
		<BR>
													
					<center><font color="#ff0000" size=6><?php
					if(isset($_GET["error"]) && $_GET["error"]==1){
					echo " DEJASTEALGUNOS DATOS VACIOS ";}?> </font> </center>
		
		<form action="insertar_controlador.php" method="POST">
				<center><table border=10 height=150% width=70% >
					<TR>
				<TD COLSPAN="2" ALIGN ="CENTER"><font  face="ARIAL" SIZE="5">NOMBRE Y APELLIDO</font><BR>
				<input name="Nombre" type="text" value="" size="30" maxlength="50"></TD></TR>
				
				<TR><TD COLSPAN="2" ALIGN ="CENTER"><BR><font face="ARIAL" SIZE="5">CEDULA Ó DNI</font><BR>
				<input name="Cedula" type="text" value="" size="15" maxlength="20"></TD></TR>
			
					<!-- <tr>	
		<p><td><font face="Lucida Calligraphy" SIZE=4>FN</font></td>
			<td><input type="date" name="fecha" size="20"></td></p>
						</tr>
					<tr>
		<p><td><font face="Lucida Calligraphy" SIZE=4>Sexo
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
						</tr>-->
		<TR><TD COLSPAN="2" ALIGN ="CENTER"><BR><FONT face="ARIAL" SIZE="5">PASWORD <BR>(7 a 15 caracteres)</FONT><BR> 
		<INPUT NAME="Password" TYPE="password" SIZE="30" MAXLENGTH="30"></INPUT></TD></TR>
		
		<TR><TD COLSPAN="2" ALIGN ="CENTER"><BR><FONT face="ARIAL" SIZE="5">REPITE TU PASWORD <BR></FONT><BR> 
		<INPUT NAME="PasswordR" TYPE="password" SIZE="30" MAXLENGTH="30"></INPUT></TD></TR>
						
		<TR><TD COLSPAN="2" ALIGN ="CENTER"><BR><font face="ARIAL" SIZE="5">CODIGO DE INVITACION </font><BR>
		<input name="IDrefe" type="text" value="" size="20" maxlength="30"></TD></TR>
					
		<TR><TD COLSPAN="2" ALIGN ="CENTER"><BR><font face="ARIAL" SIZE="5">CORREO </font><BR>
		<input name="Correo" type="text" value="" size="30" maxlength="35"></TD></TR>
					
		<TR><TD COLSPAN="2" ALIGN ="CENTER"><BR><font face="ARIAL" SIZE="4">NUMERO DE CELULAR </font><BR>
		<input name="Telf" type="text" value="+5804126484888" size="20" maxlength="16"></TD></TR>
					
					<!-- <tr>
		<p><td><font face="Lucida Calligraphy" SIZE=4> Subir foto</font></td></p> 
		<P><td><textarea name="ejemploarea" cols="30" rows="3"></textarea></P>
						<input name="boton" type="submit" value="Adjuntar">
						<input name="boton" type="submit" value="Subir"></td></P>
							</tr>
						<tr>
							<td>
								</td>--><BR><BR>
					<TR><TD ALIGN="CENTER"><BR><BR><BR><input name="BOTON" type="RESET" value="  LIMPIAR  "></TD>    
						<TD ALIGN="CENTER"><BR><BR><BR><input name="ENVIAR" type="SUBMIT" value="  REGISTRARSE  "></TD>
							</TR>	
			</table></center>
		
		</form>			<!--AQUI ESTA LO BUENP -->
		<BR>
			
			</article>
		</section>

		<aside ID="LOGIN">
		<center><font face="Lucida Calligraphy" SIZE=4>Nuestra empresa en imagen real</font>
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