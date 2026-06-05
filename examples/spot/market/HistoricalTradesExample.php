<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Spot\Api\SpotRestApi;
use Binance\Client\Spot\SpotRestApiUtil;

function historicalTradesExample()
{
    $configurationBuilder = SpotRestApiUtil::getConfigurationBuilder();
    $api = new SpotRestApi($configurationBuilder->build());
    $symbol = 'BNBUSDT';
    $limit = 500;
    $fromId = 1;
    $response = $api->historicalTrades($symbol, $limit, $fromId);
    print_r($response);
}

historicalTradesExample();
