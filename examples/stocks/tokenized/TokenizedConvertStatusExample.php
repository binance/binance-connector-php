<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Stocks\Api\StocksRestApi;
use Binance\Client\Stocks\Model\ConvertType;
use Binance\Client\Stocks\StocksRestApiUtil;

function tokenizedConvertStatusExample()
{
    $configurationBuilder = StocksRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new StocksRestApi($configurationBuilder->build());
    $issuerRequestId = 'mint-20260505-8f3b9e1a2d3c4b5a';
    $convertType = ConvertType::MINT;
    $recvWindow = 5000;
    $response = $api->tokenizedConvertStatus($issuerRequestId, $convertType, $recvWindow);
    print_r($response);
}

tokenizedConvertStatusExample();
