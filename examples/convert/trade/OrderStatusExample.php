<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Convert\Api\ConvertRestApi;
use Binance\Client\Convert\ConvertRestApiUtil;

function orderStatusExample()
{
    $configurationBuilder = ConvertRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new ConvertRestApi($configurationBuilder->build());
    $orderId = '1';
    $quoteId = '1';
    $response = $api->orderStatus($orderId, $quoteId);
    print_r($response);
}

orderStatusExample();
