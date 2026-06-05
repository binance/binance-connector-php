<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Spot\Api\SpotRestApi;
use Binance\Client\Spot\SpotRestApiUtil;

function aggTradesExample()
{
    $configurationBuilder = SpotRestApiUtil::getConfigurationBuilder();
    $api = new SpotRestApi($configurationBuilder->build());
    $symbol = 'BNBUSDT';
    $fromId = 1;
    $startTime = 1735693200000;
    $endTime = 1735693200000;
    $limit = 500;
    $response = $api->aggTrades($symbol, $fromId, $startTime, $endTime, $limit);
    print_r($response);
}

aggTradesExample();
