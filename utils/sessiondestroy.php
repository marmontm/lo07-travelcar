<?php

date_default_timezone_set("Europe/Paris");

session_start();

$_SESSION = array();

session_destroy();


echo ("<pre>");
printf("Session destroyed.\n");
printf("Last refresh: ".date("Y-m-d h:i:s")."\n");
print_r($_SESSION);
echo ("</pre>");
