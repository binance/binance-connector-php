<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Mining\Api\MiningRestApi;
use Binance\Client\Mining\MiningRestApiUtil;

function hashrateResaleDetailExample()
{
    $configurationBuilder = MiningRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new MiningRestApi($configurationBuilder->build());
    $configId = 1;
    $pageIndex = 1;
    $pageSize = null;
    $recvWindow = 5000;
    $response = $api->hashrateResaleDetail($configId, $pageIndex, $pageSize, $recvWindow);
    print_r($response);
}

hashrateResaleDetailExample();
