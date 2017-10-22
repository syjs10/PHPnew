<?php
    // try {
    //     $pdo = new PDO('mysql://host=wrong_host;dbname=wrong_name;  ');
    // } catch (PDOException $e) {
    //     echo $code = $e->getCode();
    //     echo $message = $e->getMessage();
    // }
    //
    try {
        throw new Exception("Test", 123);
        // $pdo = new PDO('mysql://host=wrong_host;dbname=wrong_name;');
    } catch (PDOException $e) {
        echo $code = $e->getCode();
        echo $message = $e->getMessage();
    } catch (Exception $e) {
        echo $code = $e->getCode();
        echo $message = $e->getMessage();
    } finally {
        echo "hahaha";
    }