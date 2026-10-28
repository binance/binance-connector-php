<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\MarginTrading\Api\MarginTradingRestApi;
use Binance\Client\MarginTrading\MarginTradingRestApiUtil;
use Binance\Client\MarginTrading\Model\KeepaliveUserDataStreamV2Request;

function keepaliveUserDataStreamV2Example()
{
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $api = new MarginTradingRestApi($configurationBuilder->build());
    $keepaliveUserDataStreamV2Request = new KeepaliveUserDataStreamV2Request();
    $keepaliveUserDataStreamV2Request->setListenKey('');
    $api->keepaliveUserDataStreamV2($keepaliveUserDataStreamV2Request);
}

keepaliveUserDataStreamV2Example();
