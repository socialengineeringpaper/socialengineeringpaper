<?php

file_put_contents('to.txt', "2");

header('Location: ' . $_SERVER['HTTP_REFERER']);