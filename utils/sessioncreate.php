<?php

date_default_timezone_set("Europe/Paris");

session_start();

$_SESSION['aa_opened'] = true;
$_SESSION['aa_user'] = 'maxmrmt';
$_SESSION['aa_lastOperation'] = date("Y-m-d h:i:s");


echo ("<pre>");
printf("Session created.\n");
printf("Last refresh: ".date("Y-m-d h:i:s")."\n");
print_r($_SESSION);
echo ("</pre>");
