<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Mining\Api\MiningRestApi;
use Binance\Client\Mining\MiningRestApiUtil;
use Binance\Client\Mining\Model\HashrateResaleRequestRequest;

function hashrateResaleRequestExample()
{
    $configurationBuilder = MiningRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new MiningRestApi($configurationBuilder->build());
    $hashrateResaleRequestRequest = new HashrateResaleRequestRequest();
    $hashrateResaleRequestRequest->setUserName('');
    $hashrateResaleRequestRequest->setAlgo('');
    $hashrateResaleRequestRequest->setEndDate(null);
    $hashrateResaleRequestRequest->setStartDate(null);
    $hashrateResaleRequestRequest->setToPoolUser('');
    $hashrateResaleRequestRequest->setHashRate(null);
    $response = $api->hashrateResaleRequest($hashrateResaleRequestRequest);
    print_r($response);
}

hashrateResaleRequestExample();
