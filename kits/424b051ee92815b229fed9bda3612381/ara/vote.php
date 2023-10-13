<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] <> "POST")
 die("Error Not Found");
 
include("includes/config.php");
$poll_id = intval($_POST['poll_id']);
$option_id = intval($_POST['option_id']);
$ip = $_SERVER["REMOTE_ADDR"];

$insert = $mysqli->query("INSERT INTO poll_votes (id, poll_id, option_id, ip) VALUE ('', '$poll_id', '$option_id', '$ip')");

if($insert){
echo "تم إضافة تصويتك";
}

?>
</body>
</html>
