<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SubAccount\Api\SubAccountRestApi;
use Binance\Client\SubAccount\Model\AddIpRestrictionForSubAccountApiKeyRequest;
use Binance\Client\SubAccount\SubAccountRestApiUtil;

function addIpRestrictionForSubAccountApiKeyExample()
{
    $configurationBuilder = SubAccountRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SubAccountRestApi($configurationBuilder->build());
    $addIpRestrictionForSubAccountApiKeyRequest = new AddIpRestrictionForSubAccountApiKeyRequest();
    $addIpRestrictionForSubAccountApiKeyRequest->setEmail('123@test.com');
    $addIpRestrictionForSubAccountApiKeyRequest->setSubAccountApiKey('k5V49ldtn4tszj6W3hystegdfvmGbqDzjmkCtpTvC0G74WhK7yd4rfCTo4lShf');
    $addIpRestrictionForSubAccountApiKeyRequest->setStatus(1);
    $response = $api->addIpRestrictionForSubAccountApiKey($addIpRestrictionForSubAccountApiKeyRequest);
    print_r($response);
}

addIpRestrictionForSubAccountApiKeyExample();
