<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\W3WPrediction\Api\W3WPredictionRestApi;
use Binance\Client\W3WPrediction\Model\BatchRedeemRequest;
use Binance\Client\W3WPrediction\W3WPredictionRestApiUtil;

function batchRedeemExample()
{
    $configurationBuilder = W3WPredictionRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new W3WPredictionRestApi($configurationBuilder->build());
    $batchRedeemRequest = new BatchRedeemRequest();
    $batchRedeemRequest->setWalletAddress('0x12e32db8817e292508c34111cbc4b23340df542c');
    $batchRedeemRequest->setWalletId('5b5c1ec3be4e4416a5872b21c1ca5d20');
    $batchRedeemRequest->setTokenIds(null);
    $response = $api->batchRedeem($batchRedeemRequest);
    print_r($response);
}

batchRedeemExample();
