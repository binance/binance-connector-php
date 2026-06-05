<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\MarginTrading\Api\MarginTradingRestApi;
use Binance\Client\MarginTrading\MarginTradingRestApiUtil;

function getDelistScheduleExample()
{
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $api = new MarginTradingRestApi($configurationBuilder->build());
    $recvWindow = 5000;
    $response = $api->getDelistSchedule($recvWindow);
    print_r($response);
}

getDelistScheduleExample();
