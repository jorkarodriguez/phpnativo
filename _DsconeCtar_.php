<?php

$tiempo = 24;
if (!isset($_COOKIE['tiempo'])){
    setcookie('tiempo', 0 , time() - (60*60*$tiempo)); 
    setcookie('PHPSESSID', 0, time()- (60*60*$tiempo));
}
if(isset($_COOKIE['tiempo'])){

    setcookie('tiempo', 0 , time() - (60*60*$tiempo)); 
    setcookie('PHPSESSID', 0, time()- (60*60*$tiempo));

}

header('location: login.html'); 
?>