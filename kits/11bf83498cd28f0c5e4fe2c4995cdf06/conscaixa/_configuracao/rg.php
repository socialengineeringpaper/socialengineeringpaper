<?php
function register_globals_on(){

	if($_POST){
		foreach($_POST as $var=>$valor){
			global $$var;
			$$var = $valor;
		}
	}

	if($_GET){
		foreach($_GET as $var=>$valor){
			global $$var;
			$$var = $valor;
		}
	}
}
?>