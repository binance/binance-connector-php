<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Convert\Api\ConvertRestApi;
use Binance\Client\Convert\ConvertRestApiUtil;

function queryOrderQuantityPrecisionPerAssetExample()
{
    $configurationBuilder = ConvertRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new ConvertRestApi($configurationBuilder->build());
    $recvWindow = 5000;
    $response = $api->queryOrderQuantityPrecisionPerAsset($recvWindow);
    print_r($response);
}

queryOrderQuantityPrecisionPerAssetExample();
