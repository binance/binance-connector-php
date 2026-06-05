<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Spot\Api\SpotRestApi;
use Binance\Client\Spot\SpotRestApiUtil;

function getAccountExample()
{
    $configurationBuilder = SpotRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SpotRestApi($configurationBuilder->build());
    $omitZeroBalances = false;
    $recvWindow = 5000.0;
    $response = $api->getAccount($omitZeroBalances, $recvWindow);
    print_r($response);
}

getAccountExample();
