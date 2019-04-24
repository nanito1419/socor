<?php
	
	session_start();
	if(!isset($_SESSION["login"])) // si no hay nada guadado en la variable $_SESSION devuelvelo para la portada para que se logue
	{
		header("location:portada.php");
	}
	$ID=$_GET['id'];
?>

<!DUCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>SOCOR C.A</title>
	<link rel="stylesheet" type="text/css" href="css/sin_login.css">

	<div id="contenedor">
		<header>
		<h1> <img src="imagenes/logo de socor.png" alt= width="960" height="150"> </h1>
		</header>

		<nav>
		<h2>
			<html>
	
		<title>    </title>
		<style type="text/css">
			
			* {
				margin:0px;
				padding:0px;
			}
			
			#header {
				margin:auto;
				width:100%;
				text-align:center;
				
				font-family:Lucida Calligraphy, Helvetica, sans-serif;
			}
			
			ul, ol {
				list-style:none;
			}
			
			.nav > li {
				float:left;
			}
			
			.nav li a {
				color:#000;
				text-decoration:none;
				padding:10px 12px;
				display:   ;
			}
			
			.nav li a:hover {
				background-color:   ;
			}
			
			.nav li ul {
				display:none;
				position:absolute;
				min-width:140px;
			}
			
			.nav li:hover > ul {
				display:block;
			}
			
			.nav li ul li {
				position:relative;
			}
			
			.nav li ul li ul {
				right:-140px;
				top:0px;
			} 
			
		</style>
	</head>
	<body>
	
		<div id="header">
			<ul class="nav">
				<li><font SIZE=5><a href="">Inicio</font></a></li>
				<li><font SIZE=5><a href="">Servicios</font></a>
					<ul>
						<li><font SIZE=4><a href="">Submenu1</font></a></li>
						<li><font SIZE=4><a href="">Submenu2</font></a></li>
						<li><font SIZE=4><a href="">Submenu3</font></a></li>
						<li><font SIZE=4><a href="">Submenu4</font></a>
							<ul>
								<li><font SIZE=4><a href="">Submenu1</font></a></li>
								<li><font SIZE=4><a href="">Submenu2</font></a></li>
								<li><font SIZE=4><a href="">Submenu3</font></a></li>
								<li><font SIZE=4><a href="">Submenu4</font></a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><font SIZE=5><a href="">Acerca de</font></a>
					<ul>
						<li><font SIZE=4><a href="">Submenu1</font></a></li>
						<li><font SIZE=4><a href="">Submenu2</font></a></li>
						<li><font SIZE=4><a href="">Submenu3</font></a></li>
						<li><font SIZE=4><a href="">Submenu4</font></a></li>
					</ul>
				</li>
				</li>
				<li><font SIZE=5><a href="">Empresa</font></a>
					<ul>
						<li><font SIZE=4><a href="">Submenu1</font></a></li>
						<li><font SIZE=4><a href="">Submenu2</font></a></li>
						<li><font SIZE=4><a href="">Submenu3</font></a></li>
						<li><font SIZE=4><a href="">Submenu4</font></a></li>
					</ul>
				</li>
				<li><font SIZE=5><a href="">Fundadores</font></a>
					<ul>
						<li><font SIZE=4><a href="">Submenu1</font></a></li>
						<li><font SIZE=4><a href="">Submenu2</font></a></li>
						<li><font SIZE=4><a href="">Submenu3</font></a></li>
						<li><font SIZE=4><a href="">Submenu4</font></a></li>
					</ul>
				</li>
				<li><font SIZE=5><a href="">Contactos</font></a></li>
			</ul>
		</div>
	
</h2>
		</nav>

		<section id="contenido">
			<font COLOR="#Ff0000"><h1 align="center">PASO 1: LEER LAS CONDICIONES!!!</h1></font> <BR> 
   
  <li>Enchufar correctamente</li>
  <li>Comprobar conexiones</li>
  <li>Encender el aparato</li>



<TABLE ALIGN="CENTER" border="1">
<TR><TD align="center" colspan="3"><font COLOR="#FfF000"><h1 align="center">REALIZA TU PAGO</h1></font></TD> </TR>

<TR>
	<TD align="center" colspan="3"><FONT color="#000fff">
	<H3> PARA CONFIRMAR TU SALDO DEBES ENVIAR UN CORREO A LA DIRECCION DE LA EMPRESA, QUE ES LA MISMA DONDE REALIZASTE EL PAGO "GIOVANNY1419@GMAIL.COM"</H3>  <BR>
	
		<P> ENVIA TODOS LOS DATOS NECESARIOS PARA CONFIRMAR TU TRANSACCION:<P> <BR>
		<LI>CORREO DE ORIGEN DE LA TRANSFERENCIA</LI>
		<LI>ID O NUMERO DE LA TRANSFERENCIA</LI>
		<LI>MONTO DE LA TRANSFRENCIA</LI>
		<LI>CORREO O NICK DEL USUARIO DEL SISTEMA</LI>
		<LI>SE RECOMIENDA REALIZAR UN CAPTURE DE LA TRANSFERENCIA PARA MAYOR CONFIRMACION Y ENVIARLA POR CORREO ELECTRONICO JUNTO A TODOS LOS DATOS </LI></h2></FONT> <BR> 
		
	<img src="imagenes/PAGOS PASARELAS.png" alt= width="1080" height="720">
	
	
	<TR><TD align="center" colspan="3"> <BR>
	<a href="confirmar_pago.php?id=<?php echo $ID?>"> <INPUT TYPE="button" id="confir" name="confirmar" VALUE=">>> CONFIRMAR PAGO POR PASARELAS <<<" style='width:340px; height:50px'></a>
	<BR> </TD></TR>
	
	<TR><TD colspan="3"><br> <img src="imagenes/transferencia bancaria.png" alt= width="960" height="150"></td></tr>
	
	<TR><TD colspan="3"> <h1 align="center">transfrencia bancaria</h1>
	</TD></TR>
	<TR><TD> <h2> banco de venezuela pequeño "logo"</h2> </td> <TD> <h2>banco bicentenario "logo" </h2> </td> <TD> <h2> banesco "logo" </h2> </td></tr>
<TR><TD> <h2> datos de la cuenta</h2> </td> <TD> <h2>datos de la cuenta" </h2> </td> <TD> <h2> datos de la cuenta</h2> </td></tr>	
<TR><TD> <h2> datos de la cuenta</h2> </td> <TD> <h2>datos de la cuenta" </h2> </td> <TD> <h2> datos de la cuenta</h2> </td></tr>	
<TR><TD> <h2> datos de la cuenta</h2> </td> <TD> <h2>datos de la cuenta" </h2> </td> <TD> <h2> datos de la cuenta</h2> </td></tr>
 
<TR><TD align="center" colspan="3"> 


	<a href="confirmar_pago.php?id=<?php echo $ID?>"> <INPUT TYPE="button" id="confir" name="confirmar" VALUE=">>> CONFIRMAR PAGO POR TRANSFERENCIA BANCARIA <<<" style='width:440px; height:50px'></a>
	</TD></TR>

<BR>	
		<td colspan="3"><img src="imagenes/billetera blockchain.png" alt= width="960" height="150"></td></tr>
		<TR><TD> BILLETERA DE BITCOIN </TD><TD> >>>>>>>>>> </TD> <TD> ASDQWDDADSADWQDSAXACSAFQ</TD></TR>
		
		
		<BR> <TR><TD align="center" colspan="3"><a href="confirmar_pago.php?id=<?php echo $ID?>"> <input name="pago" type="submit" value=">>> CONFIRMAR PAGO POR TRANSFERENCIA DE BITCOIN <<<" style='width:440px; height:50px'> <BR> </TD> </TR>
<TR><TD align="center" colspan="3"> <H2> CUALQUIER DUDA PUEDES COMUNICARTE POR CUALQUIER MEDIO DE COMUNICACION O REDES SOCIALES</H2> </TD> </TR>
<TR><TD ALIGN="CENTER" colspan="3"><br> <img src="imagenes/AgN9.GIF" alt= width="960" height="150"></td></tr>
		
		
</TABLE>

		</section>

		<!--<aside>
			
			<FORM action="comprueba_login.php" method="post">
		
			<center><font face="Lucida Calligraphy" SIZE=4>Por favor introduzca sus datos</font></center>

	<center><br><font face="Lucida Calligraphy" SIZE=4>Usuario:</font><input name="login" type="text" size="20" maxlength="20" ></br>
	<br><font face="Lucida Calligraphy" SIZE=4>ContraseĂ±a:</font><input name="password" type="password" size="20" maxlength="20"></br></center>

			<center><br><input name="ENTRAR" type="submit" value="Entrar"></a> </FORM>  
			            <a href="formulario_registro.php"> <input name="boton" type="button" value="Registrase"></a></br></center>
						<CENTER>
						<BR>
						
						<center><font color="#ff0000"><?php
								if(isset($_GET["contador"])){
								$error=$_GET["contador"];
								echo $error;}?> </font>
						<center>
						<BR>
					<p><font face="Lucida Calligraphy" SIZE=4>Reloj</font></p>
				<embed src="http://www.creatupropiaweb.com/recursos/relojes/coleccion_relojes-flash/clock_242.swf" width="150" height="150"></embed>
			</center>

		</aside> -->

		<footer>
			<center><br><font face="Lucida Calligraphy" SIZE=4>Recuerda de seguirnos en muestras redes sociales</font></br></center>
			<center><img src="imagenes/facebook.gif" alt= width="50" height="60">
			<img src="imagenes/twiter.gif" alt= width="50" height="60">
			<img src="imagenes/correo.png" alt= width="50" height="60">
			<img src="imagenes/instagran.gif" alt= width="50" height="60">
			<img src="imagenes/whasapp.png" alt= width="50" height="60">
			<img src="imagenes/youtube.gif" alt= width="50" height="60"></center>
		</footer>

		</div>

</body>
</html>