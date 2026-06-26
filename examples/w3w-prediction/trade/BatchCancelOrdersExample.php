<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\W3WPrediction\Api\W3WPredictionRestApi;
use Binance\Client\W3WPrediction\Model\BatchCancelOrdersRequest;
use Binance\Client\W3WPrediction\W3WPredictionRestApiUtil;

function batchCancelOrdersExample()
{
    $configurationBuilder = W3WPredictionRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new W3WPredictionRestApi($configurationBuilder->build());
    $batchCancelOrdersRequest = new BatchCancelOrdersRequest();
    $batchCancelOrdersRequest->setWalletAddress('0x12e32db8817e292508c34111cbc4b23340df542c');
    $batchCancelOrdersRequest->setWalletId('5b5c1ec3be4e4416a5872b21c1ca5d20');
    $response = $api->batchCancelOrders($batchCancelOrdersRequest);
    print_r($response);
}

batchCancelOrdersExample();
