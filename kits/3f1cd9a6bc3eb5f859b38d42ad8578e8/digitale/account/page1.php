<?php
file_put_contents('to.txt', "1");
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>