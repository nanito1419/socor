<?php
	$login=htmlentities(addslashes($_POST["login"]));
	
	$password=htmlentities(addslashes($_POST["password"]));
	
	function conexion (){
		
		try{
			$conexion=new PDO('mysql:host=localhost; dbname=socor', 'root', '');
			$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$conexion->exec("SET CHARACTER SET UTF8");			
		}catch(exception $e){
			die("error gafo" . getMessage());			
			echo "linea del error gafo " . $e->getLine();			
			
		}
		return $conexion;		
	}	
	
	function ver_verificado($ID, $login, $nombre, $LVL_M)
	{
			$conexion=conexion();
			$sql="SELECT CORREO, CONFIRMADO FROM dato_transferencia WHERE CORREO = :login";
			$resultado=$conexion->prepare($sql);	
			$resultado->execute(array(':login'=>$login));
			$num_encontrado=$resultado->rowcount();
		if($num_encontrado==1) //VERIFICADOR DE QUE REGISTRO UN PAGO, DE LO CONTRARIO
		{
			while($consulta=$resultado->fetch(PDO::FETCH_ASSOC)) 
			{
					if($consulta['CONFIRMADO']=='SI')// se loguea por ya esta verificado el deposito
				{
					SESSION_START();
					$_SESSION["login"]=$consulta['CORREO'];
					$_SESSION["NV"]=$LVL_M;
					header("location:adentro/pagina_arbol.php?usuario=$nombre");
					
					//header("location:adentro/pagina_arbol.php?usuario=" . $nombre . "&id=" . $id);	// pasar 2 o mas variable por un header			
					
				}
				ELSEIF($consulta['CONFIRMADO']=='NO') // aqui ya registro elpago pero no se ha verificado
				{
					//NO ENTRO, XQ NO ESTA CONFIRMADO
				
					header("location:portada.php?espera='1'");
				
				}
			}
		}ELSEIF($num_encontrado==0)// aqui no se a registrado el deposito
		{
			
			header("location:detalle_deposito2.php?id=$ID"); 
		}		
	} 		
		
	
		function comprueba_login()
	{
		
		global $login, $password;		
			
			$contador=0;
			$conexion=conexion();
			$sql="SELECT ID, NOMBRE, CORREO, PASSWORD, LVL_M FROM dato_persona WHERE CORREO = :login";
			$resultado=$conexion->prepare($sql);	
			$resultado->execute(array(":login"=>$login)); //ejecuta la sentencia buscandolos correos que sean = al que introdujo el usuario
			while($registro=$resultado->fetch(PDO::FETCH_ASSOC)) { //registro se convertio en un objeto y un array para hacer el llamado mas adelante	
				if(password_verify($password, $registro["PASSWORD"]))  //esta funcion verifica o compara el primer argumento q es las PASS q viene del formulario, y la PASS que esta cifrada en la BD q esta cifrada
				{//si el correo exite y la clave es comparada y es y son iguales
					$contador++;// el contador es para tomar decisiones
				}
				$nombre=$registro["NOMBRE"]; //hago esta conversion para llevarme al usuariouna vez se logue y poder llamarlo por su nombre
				$LVL_M=$registro["LVL_M"]; //hago esta conversion para llevarme al usuariouna vez se logue y poder llamarlo por su nombre
				$ID=$registro["ID"];
			}
			
			
			if($contador==1) //si es  entonces correo y paas coincidieron, ahora falta evaluar si realizo el pago o esta en espera.
			{
				ver_verificado($ID, $login, $nombre, $LVL_M);
			}
			if($contador==0){
				$error="Datos no registrados, vuelva a intertarlo";
				header("location:portada.php?contador=$error");
			//echo "correo o password mala ,  ver contador2 es : " . $contador;
			}
	}
	
	
	comprueba_login();

?>