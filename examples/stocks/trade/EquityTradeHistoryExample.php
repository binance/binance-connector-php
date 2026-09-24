<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Stocks\Api\StocksRestApi;
use Binance\Client\Stocks\Model\Side;
use Binance\Client\Stocks\StocksRestApiUtil;

function equityTradeHistoryExample()
{
    $configurationBuilder = StocksRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new StocksRestApi($configurationBuilder->build());
    $startTime = 1735800000000;
    $endTime = 1735900000000;
    $symbol = 'NVDA';
    $side = Side::BUY;
    $orderId = 'c3c58f49-7b0d-4b9e-a2db-1a2f9a3b8c71';
    $current = 1;
    $size = 20;
    $recvWindow = 5000;
    $response = $api->equityTradeHistory($startTime, $endTime, $symbol, $side, $orderId, $current, $size, $recvWindow);
    print_r($response);
}

equityTradeHistoryExample();
