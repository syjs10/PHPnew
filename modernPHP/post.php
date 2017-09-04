<?php

    header('Content-Type:text/html;charset=utf-8');
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_URL, './Password.php');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Length: 43',
        'Content-Type: application/x-www-form-urlencoded',
        'password=test'
    ));
    curl_exec($ch);
