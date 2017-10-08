<?php
    /*
     * 连接数据库并且返回数据库链接句柄
     */
    $pdo = new PDO('mysql:host=localhost;dbname=Rest_test', 'root', 'asdfghjkl;\'');
    return $pdo;