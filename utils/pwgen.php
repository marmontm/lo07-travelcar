<?php

$pw = array(
    'clover',
    'dumbledore',
    'emmaWatson42',
    'maxmrmt22'
);

$pw_hash = array();

foreach ($pw as $item) {
    $hash = password_hash($item, PASSWORD_DEFAULT);
    array_push($pw_hash, $hash);
}

print_r($pw_hash);
