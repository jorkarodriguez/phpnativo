<?php   

 session_start();
    require_once('_C0nect10n.php');
    $conexion = _conectar();
    $usuarios = strip_tags ( $_POST ['Nikname'] );
    $password= strip_tags(sha1( $_POST ['Password']));
    //echo "usuario ".$usuarios." password :   ".$password ;

    $consulta=mysqli_query ($conexion,"SELECT * FROM  users WHERE nikname='".mysqli_real_escape_string($conexion,$usuarios)."' AND password ='".mysqli_real_escape_string($conexion,$password)."';");    
    if($existe = mysqli_fetch_array($consulta)){
        $hoy=date("y-m-d H:i:s");
        $_SESSION['logged']='1';
        $consulta=mysqli_query($conexion,"UPDATE `users` SET `status`= ".$_SESSION['logged']." WHERE `nikname`='".$usuarios."';");
        $consulta=mysqli_query($conexion,"SELECT * FROM `users` where `nikname `='$usuarios';");
        //$row = mysqli_fetch_array($conexion,$consulta);
        $usuarios= $existe[2];
        $tiempo=0.05; //tiempo en horas que dura la secion
        $_SESSION['user']=$usuarios;
        ini_set('session.cookie_lifetime', time() + (60*60*$tiempo));
        session_regenerate_id(TRUE);
        if (!isset($_COOKIE['tiempo'])){
            //$row=mysqli_fetch_array($conexion,$consulta);
            setcookie('tiempo', $_COOKIE['tiempo'] = "conectado" , time() + (60*60*$tiempo));  
        }
        //echo 'entro';
        header('location: index.php'); 
        //echo '<meta http-equiv="Refresh" content="0;url=http:index.php">';
    }else{
        //echo 'no entro';
        header('location: login.html?Alert=Usuario no registrado '); 
        //echo '<meta http-equiv="Refresh" content="0;url=login.html">';
    }
    mysqli_close($conexion);
 ?>