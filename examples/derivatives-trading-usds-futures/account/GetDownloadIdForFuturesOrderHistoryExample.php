<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingUsdsFutures\Api\DerivativesTradingUsdsFuturesRestApi;
use Binance\Client\DerivativesTradingUsdsFutures\DerivativesTradingUsdsFuturesRestApiUtil;

function getDownloadIdForFuturesOrderHistoryExample()
{
    $configurationBuilder = DerivativesTradingUsdsFuturesRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingUsdsFuturesRestApi($configurationBuilder->build());
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $recvWindow = 5000;
    $response = $api->getDownloadIdForFuturesOrderHistory($startTime, $endTime, $recvWindow);
    print_r($response);
}

getDownloadIdForFuturesOrderHistoryExample();
