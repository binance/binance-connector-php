<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Stocks\Api\StocksRestApi;
use Binance\Client\Stocks\StocksRestApiUtil;

function cancelEquityOrderExample()
{
    $configurationBuilder = StocksRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new StocksRestApi($configurationBuilder->build());
    $orderId = 'c3c58f49-7b0d-4b9e-a2db-1a2f9a3b8c71';
    $recvWindow = 5000;
    $response = $api->cancelEquityOrder($orderId, $recvWindow);
    print_r($response);
}

cancelEquityOrderExample();
