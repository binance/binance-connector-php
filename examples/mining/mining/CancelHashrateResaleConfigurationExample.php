<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Mining\Api\MiningRestApi;
use Binance\Client\Mining\MiningRestApiUtil;
use Binance\Client\Mining\Model\CancelHashrateResaleConfigurationRequest;

function cancelHashrateResaleConfigurationExample()
{
    $configurationBuilder = MiningRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new MiningRestApi($configurationBuilder->build());
    $cancelHashrateResaleConfigurationRequest = new CancelHashrateResaleConfigurationRequest();
    $cancelHashrateResaleConfigurationRequest->setConfigId(1);
    $cancelHashrateResaleConfigurationRequest->setUserName('');
    $response = $api->cancelHashrateResaleConfiguration($cancelHashrateResaleConfigurationRequest);
    print_r($response);
}

cancelHashrateResaleConfigurationExample();
