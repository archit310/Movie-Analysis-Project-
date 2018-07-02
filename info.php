<?php
session_start( );
$sessionfile = fopen("sessionfile.txt", "r");
session_decode(fgets($sessionfile,4096) );
fclose($sessionfile);
?>