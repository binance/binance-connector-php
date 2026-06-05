<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingUsdsFutures\Api\DerivativesTradingUsdsFuturesRestApi;
use Binance\Client\DerivativesTradingUsdsFutures\DerivativesTradingUsdsFuturesRestApiUtil;

function currentAllAlgoOpenOrdersExample()
{
    $configurationBuilder = DerivativesTradingUsdsFuturesRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingUsdsFuturesRestApi($configurationBuilder->build());
    $algoType = '';
    $symbol = '';
    $algoId = 1;
    $recvWindow = 5000;
    $response = $api->currentAllAlgoOpenOrders($algoType, $symbol, $algoId, $recvWindow);
    print_r($response);
}

currentAllAlgoOpenOrdersExample();
