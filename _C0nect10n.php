<?php 	

		function _conectar (){
	date_default_timezone_set("America/Guatemala");
    //ubicacion del servidor de la base de datos
    $server = "localhost";
    //usuario de conexion a la base de datos
    $dbuser = "root";
    //password de conexion a la base de datos
    $dbpass = "";
    //datos de Conexion, primer parametro servidor, usuario,password
    $conectID = mysqli_connect($server,$dbuser,$dbpass);
    //base de datos a utilizar
    $dbdata = "repaso";
    mysqli_select_db($conectID,$dbdata);
    mysqli_query ($conectID,"SET NAMES 'utf8'");
	return $conectID;
		}
 ?>