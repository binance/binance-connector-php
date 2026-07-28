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
    $hashrateResaleRequestRequest->setUserName('test');
    $hashrateResaleRequestRequest->setAlgo('sha256');
    $hashrateResaleRequestRequest->setEndDate(1770736694138);
    $hashrateResaleRequestRequest->setStartDate(1770736694138);
    $hashrateResaleRequestRequest->setToPoolUser('S19pro');
    $hashrateResaleRequestRequest->setHashRate(100000000);
    $response = $api->hashrateResaleRequest($hashrateResaleRequestRequest);
    print_r($response);
}

hashrateResaleRequestExample();
