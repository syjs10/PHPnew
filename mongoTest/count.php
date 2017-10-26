<?php
    require_once __DIR__.'/vendor/autoload.php';
    $collection = (new MongoDB\Client)->test->users;
    $result = $collection->count();
    var_dump($result);