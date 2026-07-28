<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingOptions\Api\DerivativesTradingOptionsRestApi;
use Binance\Client\DerivativesTradingOptions\DerivativesTradingOptionsRestApiUtil;

function queryBlockTradeDetailsExample()
{
    $configurationBuilder = DerivativesTradingOptionsRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingOptionsRestApi($configurationBuilder->build());
    $blockOrderMatchingKey = '12b96c28-ba05-8906-c89t-703215cfb2e6';
    $recvWindow = 5000;
    $response = $api->queryBlockTradeDetails($blockOrderMatchingKey, $recvWindow);
    print_r($response);
}

queryBlockTradeDetailsExample();
