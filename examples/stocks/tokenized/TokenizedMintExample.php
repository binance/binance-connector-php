<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Stocks\Api\StocksRestApi;
use Binance\Client\Stocks\StocksRestApiUtil;

function tokenizedMintExample()
{
    $configurationBuilder = StocksRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new StocksRestApi($configurationBuilder->build());
    $underlyingAsset = 'AAPL';
    $underlyingAssetAmount = '1';
    $clientOrderId = 'mint-client-id-32chars-0000000001';
    $recvWindow = 5000;
    $response = $api->tokenizedMint($underlyingAsset, $underlyingAssetAmount, $clientOrderId, $recvWindow);
    print_r($response);
}

tokenizedMintExample();
