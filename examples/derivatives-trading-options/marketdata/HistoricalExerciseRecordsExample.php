<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingOptions\Api\DerivativesTradingOptionsRestApi;
use Binance\Client\DerivativesTradingOptions\DerivativesTradingOptionsRestApiUtil;

function historicalExerciseRecordsExample()
{
    $configurationBuilder = DerivativesTradingOptionsRestApiUtil::getConfigurationBuilder();
    $api = new DerivativesTradingOptionsRestApi($configurationBuilder->build());
    $underlying = '';
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $limit = 100;
    $response = $api->historicalExerciseRecords($underlying, $startTime, $endTime, $limit);
    print_r($response);
}

historicalExerciseRecordsExample();
