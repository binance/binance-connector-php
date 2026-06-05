<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\MarginTrading\Api\MarginTradingRestApi;
use Binance\Client\MarginTrading\MarginTradingRestApiUtil;
use Binance\Client\MarginTrading\Model\KeepaliveUserDataStreamRequest;

function keepaliveUserDataStreamExample()
{
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $api = new MarginTradingRestApi($configurationBuilder->build());
    $keepaliveUserDataStreamRequest = new KeepaliveUserDataStreamRequest();
    $keepaliveUserDataStreamRequest->setListenKey('');
    $api->keepaliveUserDataStream($keepaliveUserDataStreamRequest);
}

keepaliveUserDataStreamExample();
