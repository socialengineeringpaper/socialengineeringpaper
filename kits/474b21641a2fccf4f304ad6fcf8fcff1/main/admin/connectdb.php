<?php
$connection = mysqli_connect('localhost', 'shigag1n_shiga', '19101983');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'shigag1n_shiga');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}