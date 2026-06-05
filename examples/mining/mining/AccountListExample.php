<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Mining\Api\MiningRestApi;
use Binance\Client\Mining\MiningRestApiUtil;

function accountListExample()
{
    $configurationBuilder = MiningRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new MiningRestApi($configurationBuilder->build());
    $algo = '';
    $userName = '';
    $recvWindow = 5000;
    $response = $api->accountList($algo, $userName, $recvWindow);
    print_r($response);
}

accountListExample();
