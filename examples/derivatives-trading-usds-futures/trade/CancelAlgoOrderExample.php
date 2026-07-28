<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingUsdsFutures\Api\DerivativesTradingUsdsFuturesRestApi;
use Binance\Client\DerivativesTradingUsdsFutures\DerivativesTradingUsdsFuturesRestApiUtil;

function cancelAlgoOrderExample()
{
    $configurationBuilder = DerivativesTradingUsdsFuturesRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingUsdsFuturesRestApi($configurationBuilder->build());
    $algoId = 2146760;
    $clientAlgoId = '6B2I9XVcJpCjqPAJ4YoFX7';
    $recvWindow = 5000;
    $response = $api->cancelAlgoOrder($algoId, $clientAlgoId, $recvWindow);
    print_r($response);
}

cancelAlgoOrderExample();
