<?php
    // require __DIR__.'/lib/user.php';
    require __DIR__.'/lib/article.php';
    $pdo = require __DIR__.'/lib/db.php';
    // $db  = new User($pdo);
    // print_r($db->login('test','test'));
    $article = new Article($pdo);
    // print_r($article->create("文章标题","文章内容", '1'));
    // print_r($article->view('1'));
    // print_r($article->edit(1, '文章标题2', '文章内容2',1));
    // print_r($article->delete(1,1));
    //
    // print_r($article->create("文章标题","文章内容", '1'));
    // print_r($article->create("文章标题1","文章内容1", '1'));
    // print_r($article->create("文章标题2","文章内容2", '1'));
    var_dump($article->getList(1,2,1));
