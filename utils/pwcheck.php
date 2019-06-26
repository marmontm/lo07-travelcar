<?php

$pw = array(
    'clover' => '$2y$10$j1tSVzxsX3SAvAMHHzpFm.j4H.5UPPwkmI.Z0m.WFZln1vPzU8Wum',
    'dumbledore' => '$2y$10$id8oxF1wYbgSSKuJ0Tx3a.tq2GOKAaDeib78A2.7ZDCf4DUl/.JZu',
    'emmaWatson42' => '$2y$10$jFePDvoDTB81iDIc2w/PrelpowIsIUb0d6XVXoWx7/UPPepAhN5.y',
    'maxmrmt22' => '$2y$10$1HJ8ZPR1lxKtm7CuqY7SnezRbVa.woCb1WGVc36kFcCWiZaCHLh4K'
);

$pw_check = array();

foreach ($pw as $plainpw => $hashedpw) {
    $check = password_verify($plainpw, $hashedpw);
    if($check) {
        array_push($pw_check, 'OK');
    }
    else{
        array_push($pw_check, 'FAIL');
    }
}

print_r($pw_check);
