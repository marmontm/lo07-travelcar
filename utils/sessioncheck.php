<?php

date_default_timezone_set("Europe/Paris");

session_start();

echo ("<pre>");
printf("Session opened.\n");
printf("Last refresh: ".date("Y-m-d h:i:s")."\n");
print_r($_SESSION);
echo ("</pre>");
