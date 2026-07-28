<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Spot\Api\SpotRestApi;
use Binance\Client\Spot\SpotRestApiUtil;

function historicalBlockTradesExample()
{
    $configurationBuilder = SpotRestApiUtil::getConfigurationBuilder();
    $api = new SpotRestApi($configurationBuilder->build());
    $symbol = 'BNBBTC';
    $fromId = 582;
    $limit = 500;
    $response = $api->historicalBlockTrades($symbol, $fromId, $limit);
    print_r($response);
}

historicalBlockTradesExample();
