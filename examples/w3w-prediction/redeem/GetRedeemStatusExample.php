<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\W3WPrediction\Api\W3WPredictionRestApi;
use Binance\Client\W3WPrediction\W3WPredictionRestApiUtil;

function getRedeemStatusExample()
{
    $configurationBuilder = W3WPredictionRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new W3WPredictionRestApi($configurationBuilder->build());
    $walletAddress = '0x12e32db8817e292508c34111cbc4b23340df542c';
    $txHash = '0xabc123def456789abcdef123456789abcdef123456789abcdef123456789abcd';
    $recvWindow = 5000;
    $response = $api->getRedeemStatus($walletAddress, $txHash, $recvWindow);
    print_r($response);
}

getRedeemStatusExample();
