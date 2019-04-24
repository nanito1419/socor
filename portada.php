<!DUCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>SOCOR C.A</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">

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
				width:   ;
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
	</body>
</html>
</h2>
		</nav>

		<section id="contenido">
			<article>
			<div id="espera"><center><?php
			if(isset($_GET["regis"])){
									
			echo "<img src='imagenes/4.png' id='espera'>";}?></center>
			
			<center><?php
			if(isset($_GET["espera"])){
									
			echo "<img src='imagenes/espera.png' alt='SU CORREO ESTA EN ESPERA' id='espera' >";}?></center></div>
			
				<center><img src="imagenes/mision.gif" alt= width="960" height="250">
				<img src="imagenes/vision.gif" alt= width="960" height="250">
				<br><img src="imagenes/valores.gif" alt= width="960" height="250"></br></center>
				
				<br>
				<br>
				<br>
				
			</article>
		</section>

		<aside>
			
			<FORM action="comprueba_login.php" method="post">
		
			<center><font face="Lucida Calligraphy" SIZE=4>Por favor introduzca sus datos</font></center>

	<center><br><font face="Lucida Calligraphy" SIZE=4>Usuario:</font><input name="login" type="text" size="20" maxlength="20" ></br>
	<br><font face="Lucida Calligraphy" SIZE=4>Contraseña:</font><input name="password" type="password" size="20" maxlength="20"></br></center>

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

		</aside>

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