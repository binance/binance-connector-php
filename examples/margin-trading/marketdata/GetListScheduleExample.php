<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\MarginTrading\Api\MarginTradingRestApi;
use Binance\Client\MarginTrading\MarginTradingRestApiUtil;

function getListScheduleExample()
{
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $api = new MarginTradingRestApi($configurationBuilder->build());
    $recvWindow = 5000;
    $response = $api->getListSchedule($recvWindow);
    print_r($response);
}

getListScheduleExample();
