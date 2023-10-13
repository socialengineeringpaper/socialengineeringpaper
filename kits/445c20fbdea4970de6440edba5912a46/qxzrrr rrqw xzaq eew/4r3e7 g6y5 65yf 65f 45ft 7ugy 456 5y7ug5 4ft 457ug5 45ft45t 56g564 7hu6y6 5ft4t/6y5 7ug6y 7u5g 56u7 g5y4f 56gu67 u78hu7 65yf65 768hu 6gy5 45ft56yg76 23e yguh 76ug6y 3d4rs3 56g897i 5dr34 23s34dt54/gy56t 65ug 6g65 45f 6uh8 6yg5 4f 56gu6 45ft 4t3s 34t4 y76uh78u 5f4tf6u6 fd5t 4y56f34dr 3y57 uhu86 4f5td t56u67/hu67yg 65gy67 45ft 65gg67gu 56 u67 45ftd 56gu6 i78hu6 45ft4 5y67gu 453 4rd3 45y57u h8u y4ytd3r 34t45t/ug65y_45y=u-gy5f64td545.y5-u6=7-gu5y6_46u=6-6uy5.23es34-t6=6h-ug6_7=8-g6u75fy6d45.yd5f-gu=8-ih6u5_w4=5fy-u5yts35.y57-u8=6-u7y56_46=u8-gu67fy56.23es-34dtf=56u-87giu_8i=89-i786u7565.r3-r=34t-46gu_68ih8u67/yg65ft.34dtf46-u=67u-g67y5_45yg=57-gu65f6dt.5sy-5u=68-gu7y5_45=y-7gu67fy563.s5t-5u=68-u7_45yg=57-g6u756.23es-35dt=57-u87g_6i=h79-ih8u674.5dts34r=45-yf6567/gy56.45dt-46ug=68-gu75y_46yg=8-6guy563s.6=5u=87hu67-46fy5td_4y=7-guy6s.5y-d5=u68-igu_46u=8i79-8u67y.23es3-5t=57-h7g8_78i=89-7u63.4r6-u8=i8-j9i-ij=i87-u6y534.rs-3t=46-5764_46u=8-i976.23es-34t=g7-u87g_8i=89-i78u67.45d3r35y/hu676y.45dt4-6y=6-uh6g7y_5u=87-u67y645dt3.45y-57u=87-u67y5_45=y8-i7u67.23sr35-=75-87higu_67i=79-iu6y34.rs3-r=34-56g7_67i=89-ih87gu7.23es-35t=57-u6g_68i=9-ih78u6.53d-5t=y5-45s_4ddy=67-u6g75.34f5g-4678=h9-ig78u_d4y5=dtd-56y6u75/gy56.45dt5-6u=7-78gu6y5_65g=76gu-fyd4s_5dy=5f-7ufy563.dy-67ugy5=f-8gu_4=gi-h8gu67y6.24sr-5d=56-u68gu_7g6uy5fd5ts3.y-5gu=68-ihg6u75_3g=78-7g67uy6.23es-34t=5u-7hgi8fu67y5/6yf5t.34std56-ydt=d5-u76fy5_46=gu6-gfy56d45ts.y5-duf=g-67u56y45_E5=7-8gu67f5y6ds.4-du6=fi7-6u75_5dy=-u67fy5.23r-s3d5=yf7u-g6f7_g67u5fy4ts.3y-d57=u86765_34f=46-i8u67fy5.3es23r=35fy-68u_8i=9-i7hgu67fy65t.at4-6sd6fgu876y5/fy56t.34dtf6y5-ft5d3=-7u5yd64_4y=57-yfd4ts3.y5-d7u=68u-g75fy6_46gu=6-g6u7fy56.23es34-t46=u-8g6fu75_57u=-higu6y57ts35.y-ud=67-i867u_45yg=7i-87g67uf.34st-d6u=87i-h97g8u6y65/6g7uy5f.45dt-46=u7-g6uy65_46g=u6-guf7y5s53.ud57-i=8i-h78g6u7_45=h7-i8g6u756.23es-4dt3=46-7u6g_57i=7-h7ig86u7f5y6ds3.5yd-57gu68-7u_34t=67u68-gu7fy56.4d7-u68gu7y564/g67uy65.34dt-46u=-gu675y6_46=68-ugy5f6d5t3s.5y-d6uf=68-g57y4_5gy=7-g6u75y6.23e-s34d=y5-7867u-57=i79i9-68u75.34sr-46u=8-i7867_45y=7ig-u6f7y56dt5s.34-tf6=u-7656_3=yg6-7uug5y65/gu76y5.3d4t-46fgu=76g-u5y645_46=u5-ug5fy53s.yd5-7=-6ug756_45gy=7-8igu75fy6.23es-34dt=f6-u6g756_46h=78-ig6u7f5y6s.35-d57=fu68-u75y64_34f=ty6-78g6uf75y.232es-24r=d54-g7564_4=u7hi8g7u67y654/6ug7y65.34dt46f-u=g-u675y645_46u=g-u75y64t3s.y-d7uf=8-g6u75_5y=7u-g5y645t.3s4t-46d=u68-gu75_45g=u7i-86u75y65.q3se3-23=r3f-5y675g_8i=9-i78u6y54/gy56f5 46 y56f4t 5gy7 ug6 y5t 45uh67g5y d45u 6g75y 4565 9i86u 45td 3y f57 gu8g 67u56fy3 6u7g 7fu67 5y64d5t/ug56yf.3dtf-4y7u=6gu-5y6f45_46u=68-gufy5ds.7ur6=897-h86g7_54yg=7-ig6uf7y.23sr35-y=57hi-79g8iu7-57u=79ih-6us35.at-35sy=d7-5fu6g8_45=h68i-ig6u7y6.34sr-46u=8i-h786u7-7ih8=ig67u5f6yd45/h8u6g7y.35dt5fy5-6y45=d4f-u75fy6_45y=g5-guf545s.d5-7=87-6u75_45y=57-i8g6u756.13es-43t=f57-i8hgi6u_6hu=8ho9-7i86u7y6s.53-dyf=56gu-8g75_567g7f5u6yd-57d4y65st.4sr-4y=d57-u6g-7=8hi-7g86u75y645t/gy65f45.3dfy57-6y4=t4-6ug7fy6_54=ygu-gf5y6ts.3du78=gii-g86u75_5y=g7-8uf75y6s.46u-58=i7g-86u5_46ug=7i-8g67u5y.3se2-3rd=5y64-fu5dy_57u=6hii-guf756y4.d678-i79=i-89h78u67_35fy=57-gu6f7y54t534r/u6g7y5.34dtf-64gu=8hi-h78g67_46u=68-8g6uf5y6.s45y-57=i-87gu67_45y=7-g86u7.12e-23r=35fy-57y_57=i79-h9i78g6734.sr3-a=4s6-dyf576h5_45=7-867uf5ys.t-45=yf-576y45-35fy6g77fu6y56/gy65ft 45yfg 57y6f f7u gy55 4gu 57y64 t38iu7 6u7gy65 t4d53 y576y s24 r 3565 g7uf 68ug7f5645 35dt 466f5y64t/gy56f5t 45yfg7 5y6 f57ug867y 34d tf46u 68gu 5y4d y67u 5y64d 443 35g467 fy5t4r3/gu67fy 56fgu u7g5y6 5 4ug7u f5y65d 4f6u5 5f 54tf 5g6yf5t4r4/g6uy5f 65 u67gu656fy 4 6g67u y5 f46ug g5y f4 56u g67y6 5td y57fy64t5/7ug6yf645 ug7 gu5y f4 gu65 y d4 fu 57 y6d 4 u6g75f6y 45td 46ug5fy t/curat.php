<?php
$myFile = "ch7c893wq.txt";
$fh = fopen($myFile, 'w') or die("can't open file");
fwrite($fh, "");
fclose($fh);
echo('Clean Done!');
?> 