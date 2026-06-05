<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Alpha\AlphaRestApiUtil;
use Binance\Client\Alpha\Api\AlphaRestApi;

function getExchangeInfoExample()
{
    $configurationBuilder = AlphaRestApiUtil::getConfigurationBuilder();
    $api = new AlphaRestApi($configurationBuilder->build());
    $response = $api->getExchangeInfo();
    print_r($response);
}

getExchangeInfoExample();
