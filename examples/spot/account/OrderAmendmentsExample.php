<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Spot\Api\SpotRestApi;
use Binance\Client\Spot\SpotRestApiUtil;

function orderAmendmentsExample()
{
    $configurationBuilder = SpotRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SpotRestApi($configurationBuilder->build());
    $symbol = 'BTCUSDT';
    $orderId = 9;
    $fromExecutionId = 22;
    $limit = 1;
    $recvWindow = 5000;
    $response = $api->orderAmendments($symbol, $orderId, $fromExecutionId, $limit, $recvWindow);
    print_r($response);
}

orderAmendmentsExample();
