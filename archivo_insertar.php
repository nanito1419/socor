<?php
///////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////  REGISTRO 1 /////////////////////////////////////////
////////////////////////////////////////////////////////
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
		
	function comparar_correo($correo, $telf, $idrefe, $nombre, $cedula, $passcifrada) //comparar correo para no registrar 2 iguales
	{ 
		if(empty($nombre) || empty($cedula) || empty($passcifrada) || empty($idrefe) || empty($correo) || empty($telf)) //Devuelve FALSE si var existe y tiene un valor no vacío, distinto de cero. De otro modo devuelve TRUE.
		{
			$orror=1;
			header("location:formulario_registro.php?error=$orror");
		}
		else
		{
			$conexion=conexion();
			$sql="SELECT CORREO, TELEFONO FROM dato_persona WHERE CORREO = :correo OR TELEFONO = :telef OR CEDULA = :cel";
			$resultado=$conexion->prepare($sql);
			$resultado->execute(array(":correo"=>$correo, ":telef"=>$telf, ":cel"=>$cedula));
			$num_encontrado=$resultado->rowcount();
			if($num_encontrado>=1)
				{
		
					$celco="DATOS YA REGISTRADOS, INTENTE LOGUEARSE O INTRODUSCA NUEVOS DATOS.";// SI EL CORREO O EL CELU YA ESTAN REGISTRADOS
					header("location:formulario_registro.php?cortel=$celco");
				}
				else
					{
						insertar_reg ($nombre, $cedula, $passcifrada, $idrefe, $correo, $telf);
			
					}			

		}
	}
	
	function insertar_reg ($nombre, $cedula, $passcifrada, $idrefe, $correo, $telf)
	{
		$conexion=conexion();		
		$sql="INSERT INTO dato_persona (NOMBRE, CEDULA, PASSWORD, IDREFERE, CORREO, TELEFONO) VALUES (:nom, :cedu, :pass, :idre, :corr, :telef)";		
		$resultado=$conexion->prepare($sql);
		$resultado->execute(array(':nom'=>$nombre, ':cedu'=>$cedula, ':pass'=>$passcifrada, ':idre'=>$idrefe, ':corr'=>$correo,  ':telef'=>$telf));
		
		//$resulatado->closeCursor();
		ver_id($correo, $idrefe);
		}
	
	function ver_id($correo, $idrefe)
	{
		$conexion=conexion();
		$sql="SELECT ID FROM dato_persona WHERE CORREO = :corr";
		$r=$conexion->prepare($sql);
		$r->execute(array(':corr'=>$correo));
		while($DATOP=$r->fetch(PDO::FETCH_ASSOC))
		{
		$n_id=$DATOP["ID"];
		ref_empresa($idrefe, $n_id);
		}
		
	}
	
	
	function ref_empresa($idrefe, $n_id)
	{
		$conexion=conexion();
		$sql="SELECT * FROM dato_persona WHERE ID = :idref";
		$resultado=$conexion->prepare($sql);
		$resultado->execute(array(":idref"=>$idrefe));
		$n_coun=$resultado->rowcount();
		
		
		IF($n_coun==0)
		{
			update ($n_id);
			
		}ELSE
			{	
		echo "no entro en el update"; 
		/*$regi=1;
				header("location:portada.php?regis=$regi"); // PAGINA DE INFORMACION PARA DEPOSITAR */
			}
	}
	
	function update ($n_id)
	{
		$conexion=conexion();
			$sql="UPDATE dato_persona SET IDREFERE = 1 WHERE ID = :id_n ";
			$resultado=$conexion->prepare($sql);
			$resultado->execute(array(":id_n"=>$n_id));
			
			echo "entro en update";
	}
	
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//-----------------------------------FUNCIONES DE CONFIRMACIONDE PAGO--------------------------------------------------
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	
	function comparar_correo_pago($id_user,$correo, $cedula, $id_transferencia, $pasarela)//comparar correo para ver si existe
	{ 
		
		$conexion=conexion();
		$contador=0;
		$sql="SELECT CORREO, CEDULA FROM dato_persona WHERE CORREO = :corre OR CEDULA = :cedu";
		$resultado=$conexion->prepare($sql);
		$resultado->execute(array(":corre"=>$correo, ":cedu"=>$cedula));
		while($consulta=$resultado->fetch(PDO::FETCH_ASSOC)){
			
			if($consulta['CORREO']==$correo && $consulta['CEDULA']==$cedula)
			{				
				$contador+=4;
				
			}

		}
				if($contador==0)
				{
					$error3= "error: los datos que esta registrando no parecen validos o ya estan registrados, intentelo nuevamente";
				header("location:confirmar_pago.php?trampa3=$error3&id=$id_user");
				}
				elseif($contador==4)
				{
					comparar_todo1($id_user, $correo, $id_transferencia, $pasarela);
				
				}
		
			}
			
			function comparar_todo1($id_user, $correo, $id_transferencia, $pasarela)  //ver si existe otros correos con las mismas transferencia 
	{ 
		
		$conexion=conexion();
		$trampa=0;
		$sql="SELECT ID_TRANSFERENCIA, PASARELA_PAGO, CORREO FROM dato_transferencia WHERE ID_TRANSFERENCIA = :idtrans OR CORREO = :correo OR PASARELA_PAGO = :pasarela ";
		$resultado=$conexion->prepare($sql);
		$resultado->execute(array(":correo"=>$correo, ':idtrans'=>$id_transferencia, ':pasarela'=>$pasarela));
		while($consulta=$resultado->fetch(PDO::FETCH_ASSOC))
		{
			
			/*echo " ver correo: " . $consulta['CORREO'] . "<BR>"; 
			echo " ver correo: " . $consulta['ID_TRANSFERENCIA'] . "<BR>" . " ver correo: " . $consulta['PASARELA_PAGO'] . "<BR>";*/
			if($consulta['CORREO']==$correo && $consulta['ID_TRANSFERENCIA']==$id_transferencia && $consulta['PASARELA_PAGO']==$pasarela)
			{				
				$trampa+=3;
				
				$error3= "error: los datos que esta registrando no parecen validos o ya estan registrados, intentelo nuevamente";
				header("location:confirmar_pago.php?trampa3=$error3&id=$id_user");
				
				//echo "esta registrando sin duda un pago falso o pago ya realizado anteriormente";
				
			}	
				elseif($consulta['CORREO']==$correo && $consulta['ID_TRANSFERENCIA']==$id_transferencia)
			{
				$trampa+=2;
				$error2= "error: los datos que esta registrando no parecen validos o ya estan registrados, intentelo nuevamente";
				header("location:confirmar_pago.php?trampa3=$error2&id=$id_user");
				//echo " correo y el ID_transferencia son ==";
			}
				elseif($consulta['ID_TRANSFERENCIA']==$id_transferencia)
				{
					$error1= "error: los datos que esta registrando no parecen validos o ya estan registrados, intentelo nuevamente";
				header("location:confirmar_pago.php?trampa3=$error1&id=$id_user");
					//echo "referencia repetida";					
				}
		}
			if($trampa==0)
			{			
				insertar_reg_pago ($id_user, $correo, $pasarela, $id_transferencia);
				
			}
	}
	
		
	function insertar_reg_pago ($id_user, $correo, $pasarela, $id_transferencia){
	if(empty($pasarela) || empty($id_transferencia) || empty($correo)) //Devuelve FALSE si var existe y tiene un valor no vacío, distinto de cero. De otro modo devuelve TRUE.
	{		
    	//echo 'ALGUN DATOS ESTA MAL ESCRITO O FALTA POR RELLENAR FORMULARIO';
	}else
		{ 
			$hoy=date('y-m-d');
			$fecha_resultante=date('y-m-d', strtotime('+4 week'));
			
			$conexion=conexion();		
			$sql="INSERT INTO dato_transferencia (ID_USER, CORREO, ID_TRANSFERENCIA, PASARELA_PAGO, FECHA_DE_PAGO, FECHA_CADUCAR) VALUES (:id_user, :corr, :id_transf, :pasarela, :hoy, :caduca)";		
			$resultado=$conexion->prepare($sql);
			$resultado->execute(array(':id_user'=>$id_user, ':corr'=>$correo, ':id_transf'=>$id_transferencia, ':pasarela'=>$pasarela, ':hoy'=>$hoy, ':caduca'=>$fecha_resultante ));
		
			echo "pago registrado";
		// pagina: ahora debes esperar que tu pago sea verificado para poder entrar al sistema y logearse para poder saber cual es tu codigo de invitacion para 
		}
	}
	
	
?>