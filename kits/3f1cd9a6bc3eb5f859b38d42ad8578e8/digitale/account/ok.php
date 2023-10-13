<?php
file_put_contents('ifok.txt', "1");
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>