<?php
/*
Autor: Maur�cio Rosa (48)9957 3422
Data: 20/08/2002
Objetivo: Encapsular os acessos ao banco de Dados.
*/
//
class bancoDeDados {
//
//*****************************ATRIBUTOS DA CLASSE ************************
//
//************* Atributos para conex�o ************************************
   var $aHost;
   var $aUsuario;
   var $aSenha;
//
//***************** BD selecionado ****************************************
   var $aBanco;
//
//************ Atributos usados durante as consultas *********************
   var $aConexao;
   var $aSql;
   var $aRetorno;
   var $aNumeroRegistros;
   var $aRegistro;
   var $aPosicao;
   var $aUltimoId;
//
//
//**************************** CONSTRUTOR DA CLASSE BD ********************
	function bdbancoDeDados($pHost, $pUsuario, $pSenha){             
	   $this->aHost = $pHost;
	   $this->aUsuario = $pUsuario;
	   $this->aSenha  = $pSenha;
   }
//*************************************************************************
//
//
//*************************** FUN��O DE SELE��O DO BD *********************
   function selecionaBanco($pBanco){
	   if (mysqli_select_db($this->aConexao, $pBanco)){
		   $this->aBanco = $pBanco;
	   }
   }
//*************************************************************************
//
//
//************************* FUN��O CONECTAR *******************************
   function conectar(){
	   $this->aConexao = mysqli_connect($this->aHost, $this->aUsuario, $this->aSenha, $this->aBanco);
   }
//*************************************************************************
//
//
//************************** FUN��O QUERY *********************************
   function query($pSql){
	   $this->aSql = $pSql;
	   $this->aRetorno = mysqli_query($this->aConexao, $this->aSql);
	   $this->aNumeroRegistros = mysqli_num_rows($this->aRetorno);
	   $this->aPosicao = 1;
   }
//*************************************************************************
//
//
//************************** FUN��O QUERY *********************************
   function query_atualizacao($pSql){
	   $this->aSql = $pSql;
	   $this->aRetorno = mysqli_query($this->aConexao, $this->aSql);       
   }
//*************************************************************************
//
//
//************************** FUN��O QUERY *********************************
   function query_inserir($pSql){
	   $this->aSql = $pSql;
	   $this->aRetorno = mysqli_query($this->aConexao, $this->aSql); 
	   $this->aUltimoId = mysqli_insert_id($this->aConexao);        
   }
//*************************************************************************
//
//
//*************************** FUN��O QTDADE DE REGISTROS ******************
   function numeroDeRegistros(){
	   return $this->aNumeroRegistros;

   }
//*************************************************************************
//
//
//*************************** FUN��O LE REGISTRO **************************
   function leRegistro(){
	   $this->aRegistro = mysqli_fetch_array($this->aRetorno);
	   $this->aPosicao++;
	   return $this->aRegistro;
   }
//*************************************************************************
//
//
//****** FUN��O RETORNA ULTIMO ID INSERIDO ******
   function retornaId(){		   	   
	   return $this->aUltimoId;
   }
//*************************************************************************
//
//
}//fim da classe
?>