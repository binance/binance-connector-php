<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\CopyTrading\Api\CopyTradingRestApi;
use Binance\Client\CopyTrading\CopyTradingRestApiUtil;

function getFuturesLeadTradingSymbolWhitelistExample()
{
    $configurationBuilder = CopyTradingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new CopyTradingRestApi($configurationBuilder->build());
    $recvWindow = 5000;
    $response = $api->getFuturesLeadTradingSymbolWhitelist($recvWindow);
    print_r($response);
}

getFuturesLeadTradingSymbolWhitelistExample();
