<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\W3WPrediction\Api\W3WPredictionRestApi;
use Binance\Client\W3WPrediction\Model\ApplyMmWithdrawRequest;
use Binance\Client\W3WPrediction\W3WPredictionRestApiUtil;

function applyMmWithdrawExample()
{
    $configurationBuilder = W3WPredictionRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new W3WPredictionRestApi($configurationBuilder->build());
    $applyMmWithdrawRequest = new ApplyMmWithdrawRequest();
    $applyMmWithdrawRequest->setCoin('USDT');
    $applyMmWithdrawRequest->setNetwork('BEP20');
    $applyMmWithdrawRequest->setAmount('100.00');
    $response = $api->applyMmWithdraw($applyMmWithdrawRequest);
    print_r($response);
}

applyMmWithdrawExample();
