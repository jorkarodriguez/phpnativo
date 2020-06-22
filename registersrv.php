<?php
	require_once('_C0nect10n.php');//importa la coneccion
    $conexion= _conectar();//verifica la coneccion
	$name= strip_tags($_POST['name']); //obtiene el nombre
	$lastname=strip_tags($_POST['lastname']);//obtiene el apellido
    $nikname=strip_tags($_POST['nikname']);//obtiene el nikname
    $email=strip_tags($_POST['email']);//obtiene el email
	$password=sha1(strip_tags($_POST['password']));//obtiene la contraseña y la sifra en sha1
	$passwordlen=strip_tags($_POST['password']);
	$tamañopas=strlen($passwordlen);
	$creationdate= date("y-m-d H:i:s");
	$hoy= date("y-m-d H:i:s");
	$data;
	if($tamañopas<8){
        echo json_encode("el tamaño de la contraseña es demaciado pequeño (minimo 8 caracteres)");
        
		die();
	}
	$query=mysqli_query($conexion," SELECT `nikname` FROM  users WHERE nikname='$nikname'");
	if($row=mysqli_fetch_array($query)){
		echo json_encode("El usuario ingresado ya existe, ingrese otro nombre de usuario");
		die();
	}else {
		$query=mysqli_query($conexion,"SELECT `email` FROM  users WHERE email='$email'");
		if($row=mysqli_fetch_array($query)){
			echo  json_encode ("El correo ingresado ya existe, ingrese otro Email valido ");
			die();
		}else {
				mysqli_query($conexion,"INSERT INTO `users`(`name`, `lastname`, `nikname`, `email`, `password`,`created_at` ) VALUES ('$name','$lastname','$nikname','$email','$password','$hoy')");
                echo  json_encode ("usuario Creado con exito"); 
                //echo("INSERT INTO `tb_usuarios`(`idrow`, `nombre`, `correo`, `usuario`, `password`, `fecha_creacion`, `idestado`, `tiempoconexion`, `nit`, `nombre_fact`, `direccion_fact`, `idgrupo`, `nivel`) VALUES (null,'$name','$mail','$user','$password','$hoy','$estado','$teimpodeconeccion','$nit','$nombrefactu','$direccionfactu','$grupo','$nivel')");
			}
		}
		
	         
	mysqli_close($conexion);
?>