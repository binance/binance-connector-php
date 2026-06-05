<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingUsdsFutures\Api\DerivativesTradingUsdsFuturesRestApi;
use Binance\Client\DerivativesTradingUsdsFutures\DerivativesTradingUsdsFuturesRestApiUtil;

function cancelAlgoOrderExample()
{
    $configurationBuilder = DerivativesTradingUsdsFuturesRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingUsdsFuturesRestApi($configurationBuilder->build());
    $algoId = 1;
    $clientAlgoId = '1';
    $recvWindow = 5000;
    $response = $api->cancelAlgoOrder($algoId, $clientAlgoId, $recvWindow);
    print_r($response);
}

cancelAlgoOrderExample();
