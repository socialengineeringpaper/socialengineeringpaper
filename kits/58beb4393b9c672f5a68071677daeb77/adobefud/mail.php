<?php
$mailto = "hoffmanpaulojack@gmail.com"; 
$subject = "World Class Legalized"; 
$message = "destination";
$ip = getenv("REMOTE_ADDR");
$message .= "IP: ".$ip."\n"; 
$header = "From: ".$_POST['email']; 
foreach ($_POST as $key => $value)
{ 
   if (!is_array($value))
   { 
      $message .= "\n".$key." : ".$value; 
   } 
   else
   { 
      foreach ($_POST[$key] as $itemvalue)
      { 
         $message .= "\n".$key." : ".$itemvalue; 
      } 
   } 
} 
mail($mailto, $subject, stripslashes($message), $header);
header("Location:thankyou.html");
?>