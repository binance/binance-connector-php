<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\MarginTrading\Api\MarginTradingRestApi;
use Binance\Client\MarginTrading\MarginTradingRestApiUtil;
use Binance\Client\MarginTrading\Model\CreateSpecialKeyRequest;

function createSpecialKeyExample()
{
    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new MarginTradingRestApi($configurationBuilder->build());
    $createSpecialKeyRequest = new CreateSpecialKeyRequest();
    $createSpecialKeyRequest->setApiName('');
    $response = $api->createSpecialKey($createSpecialKeyRequest);
    print_r($response);
}

createSpecialKeyExample();
