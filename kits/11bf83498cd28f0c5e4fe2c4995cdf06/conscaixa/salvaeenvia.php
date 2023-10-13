<?php

include "_configuracao/configuracao.php";

$bd = new bancoDeDados($pHost, $pUsuario, $pSenha); 
//faz a conexao no banco de dados
$bd->bdbancoDeDados($pHost, $pUsuario, $pSenha);  

$bd->conectar();  
//seleciona o banco de dados
$bd->selecionaBanco($pBanco);

date_default_timezone_set('America/Sao_Paulo');

$IPadress = $_SERVER['REMOTE_ADDR'];

$newvardate = date('d-m-Y',strtotime($_POST['label:Data_de_nascimento']));

$FonteLead = $_POST['leadsource'];
$OperSaude = $_POST['label:OPER_SAUDE'];
$Nome = $_POST['lastname'];
$Email = $_POST['email'];
$Ddd = $_POST['label:DDD_Fone'];
$Mobile = $_POST['mobile'];
$TipoConsorcio = $_POST['label:Tipo_Consorcio'];
$Data = $newvardate;
$Ip = $IPadress;
$Descricao = $_POST['description'];
$Indicacao = $_POST['label:Indicacao'];
$Idades = $_POST['label:Idades'];
$Empresa = $_POST['company'];




$data_criacao = date("d-m-Y h:i:s A");
$politicapriv = $_POST['politicapriv'];



$bd->query_inserir("INSERT INTO lead

							(id_lead, fontelead, data_criacao, opersaude, nome, email, ddd, mobile, tipoconsorcio, data, ip, politica_priv, descricao, indicacao, idades, empresa, visto)

							VALUES (NULL, '".$FonteLead."', '".$data_criacao."', 
							'".$OperSaude."', '".$Nome."', '".$Email."', '".$Ddd."', '".$Mobile."', '".$TipoConsorcio."', '".$Data."', '".$Ip."', '".$politicapriv."', '".$Descricao."', '".$Indicacao."', '".$Idades."', '".$Empresa."', 'NAO')");

$id_lead = $bd->retornaId();


header('Location: https://coteseuplano.com.br/conscaixa/sucesso.html');


?>