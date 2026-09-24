<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Stocks\Api\StocksRestApi;
use Binance\Client\Stocks\Model\OrderType;
use Binance\Client\Stocks\Model\Side;
use Binance\Client\Stocks\StocksRestApiUtil;

function equityOrderHistoryExample()
{
    $configurationBuilder = StocksRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new StocksRestApi($configurationBuilder->build());
    $startTime = 1735800000000;
    $endTime = 1735900000000;
    $symbol = 'NVDA';
    $orderType = OrderType::MARKET;
    $side = Side::BUY;
    $orderStatus = 'FILLED,CANCELED';
    $current = 1;
    $size = 20;
    $recvWindow = 5000;
    $response = $api->equityOrderHistory($startTime, $endTime, $symbol, $orderType, $side, $orderStatus, $current, $size, $recvWindow);
    print_r($response);
}

equityOrderHistoryExample();
