<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Mining\Api\MiningRestApi;
use Binance\Client\Mining\MiningRestApiUtil;

function extraBonusListExample()
{
    $configurationBuilder = MiningRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new MiningRestApi($configurationBuilder->build());
    $algo = '';
    $userName = '';
    $coin = '';
    $startDate = null;
    $endDate = null;
    $pageIndex = 1;
    $pageSize = null;
    $recvWindow = 5000;
    $response = $api->extraBonusList($algo, $userName, $coin, $startDate, $endDate, $pageIndex, $pageSize, $recvWindow);
    print_r($response);
}

extraBonusListExample();
