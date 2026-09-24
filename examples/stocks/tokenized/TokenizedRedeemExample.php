<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Stocks\Api\StocksRestApi;
use Binance\Client\Stocks\StocksRestApiUtil;

function tokenizedRedeemExample()
{
    $configurationBuilder = StocksRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new StocksRestApi($configurationBuilder->build());
    $tokenizedAsset = 'AAPLB';
    $tokenizedAssetAmount = '1';
    $clientOrderId = 'redeem-client-id-32chars-000000001';
    $recvWindow = 5000;
    $response = $api->tokenizedRedeem($tokenizedAsset, $tokenizedAssetAmount, $clientOrderId, $recvWindow);
    print_r($response);
}

tokenizedRedeemExample();
