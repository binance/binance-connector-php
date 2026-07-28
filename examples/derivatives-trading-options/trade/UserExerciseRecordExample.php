<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingOptions\Api\DerivativesTradingOptionsRestApi;
use Binance\Client\DerivativesTradingOptions\DerivativesTradingOptionsRestApiUtil;

function userExerciseRecordExample()
{
    $configurationBuilder = DerivativesTradingOptionsRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingOptionsRestApi($configurationBuilder->build());
    $symbol = 'BTC-200730-9000-C';
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $limit = 20;
    $recvWindow = 5000;
    $response = $api->userExerciseRecord($symbol, $startTime, $endTime, $limit, $recvWindow);
    print_r($response);
}

userExerciseRecordExample();
