<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Mining\Api\MiningRestApi;
use Binance\Client\Mining\MiningRestApiUtil;

function extraBonusListExample()
{
    $configurationBuilder = MiningRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new MiningRestApi($configurationBuilder->build());
    $algo = 'sha256';
    $userName = 'test';
    $coin = 'BTC';
    $startDate = 1770736694138;
    $endDate = 1770736694138;
    $pageIndex = 1;
    $pageSize = 10;
    $recvWindow = 5000;
    $response = $api->extraBonusList($algo, $userName, $coin, $startDate, $endDate, $pageIndex, $pageSize, $recvWindow);
    print_r($response);
}

extraBonusListExample();
