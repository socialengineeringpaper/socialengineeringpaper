<?php

$praga=rand();
$praga=md5($praga);

header("location: cda.php?id=$praga$praga&session=$praga$praga");

?>