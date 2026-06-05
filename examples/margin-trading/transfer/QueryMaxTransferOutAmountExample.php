<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\MarginTrading\Api\MarginTradingRestApi;
use Binance\Client\MarginTrading\MarginTradingRestApiUtil;

function queryMaxTransferOutAmountExample()
{
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new MarginTradingRestApi($configurationBuilder->build());
    $asset = '';
    $isolatedSymbol = '';
    $recvWindow = 5000;
    $response = $api->queryMaxTransferOutAmount($asset, $isolatedSymbol, $recvWindow);
    print_r($response);
}

queryMaxTransferOutAmountExample();
