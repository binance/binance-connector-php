<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Spot\Api\SpotRestApi;
use Binance\Client\Spot\SpotRestApiUtil;

function orderAmendmentsExample()
{
    $configurationBuilder = SpotRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SpotRestApi($configurationBuilder->build());
    $symbol = 'BNBUSDT';
    $orderId = 1;
    $fromExecutionId = 1;
    $limit = 500;
    $recvWindow = 5000.0;
    $response = $api->orderAmendments($symbol, $orderId, $fromExecutionId, $limit, $recvWindow);
    print_r($response);
}

orderAmendmentsExample();
