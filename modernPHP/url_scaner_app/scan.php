<?php
    require 'vendor/autoload.php';

    $client = new \GuzzleHttp\Client();

    $csv = \League\Csv\Reader::createFromPath($argv[1]);

    foreach ($csv as $csvRow) {
        try {
            $httpResponse = $client->options($csvRow[0]);
            if ($httpResponse->getStatusCode() >= 400) {
                throw new \Exception();
            }
        } catch (\Exception $e) {
            echo $csvRow[0] . PHP_EOL;
        }
    }