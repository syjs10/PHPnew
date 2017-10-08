<?php
    require __DIR__.'/lib/user.php';
    $pdo = require __DIR__.'/lib/db.php';
    $db  = new User($pdo);
    print_r($db->login('test','test'));