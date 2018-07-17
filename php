<?php
$file = fopen("name.txt","a");
fputs($file,$_GET["n"]);
fputs($file,"\n");
?>
