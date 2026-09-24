<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\W3WPrediction\Api\W3WPredictionRestApi;
use Binance\Client\W3WPrediction\Model\AccountType;
use Binance\Client\W3WPrediction\Model\ApplyMmDepositRequest;
use Binance\Client\W3WPrediction\W3WPredictionRestApiUtil;

function applyMmDepositExample()
{
    $configurationBuilder = W3WPredictionRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new W3WPredictionRestApi($configurationBuilder->build());
    $applyMmDepositRequest = new ApplyMmDepositRequest();
    $applyMmDepositRequest->setFromToken('USDT');
    $applyMmDepositRequest->setFromTokenAmount('1000000000000000000');
    $applyMmDepositRequest->setToToken('USDT');
    $applyMmDepositRequest->setAccountType(AccountType::SPOT);
    $response = $api->applyMmDeposit($applyMmDepositRequest);
    print_r($response);
}

applyMmDepositExample();
