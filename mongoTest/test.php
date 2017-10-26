<?php
    require_once __DIR__.'/vendor/autoload.php';
    $collection = (new MongoDB\Client)->test->users;
    $insertOneResult = $collection->insertOne([
        'title'=>$_POST['title'],
    ]);
    // // $insertOneResult = $collection->insertOne([
    // //     '_id' => 1,
    // //     'username' => 'TEST'
    // // ]);
    printf("Insert %d document(s)", $insertOneResult->getInsertedCount());
    // var_dump($insertOneResult->getInsertedId());
    // $insertManyResult = $collection->insertMany([
    //     [
    //         'username' => 'admin',
    //         'email' => 'admin@example.com',
    //         'name' => 'Admin User',
    //     ],
    //     [
    //         'username' => 'test',
    //         'email' => 'test@example.com',
    //         'name' => 'Test User',
    //     ]
    // ]);
    // printf("Insert %d document(s)", $insertManyResult->getInsertedCount());
    // var_dump($insertManyResult->getInsertedIds());
    // $document = $collection->find(['username'=>'admin']);
    // foreach ($document as $doc) {
    //     echo $doc['_id'].'<br/>';
    // }
    //
    // $collection = (new MongoDB\Client)->test->users;
    // $collection->drop();

    // $collection->insertOne(['name' => 'Bob', 'state' => 'ny', 'country' => 'us']);
    // $collection->insertOne(['name' => 'Alice', 'state' => 'ny']);
    // $collection->insertOne(['name' => 'Sam', 'state' => 'ny']);
    // $updateResult = $collection->updateMany(
    //     ['state' => 'ny'],
    //     ['$set' => ['country' => 'us']]
    // );

    // printf("Matched %d document(s)\n", $updateResult->getMatchedCount());
    // printf("Modified %d document(s)\n", $updateResult->getModifiedCount());