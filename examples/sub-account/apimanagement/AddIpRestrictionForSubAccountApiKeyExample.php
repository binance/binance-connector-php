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
    $addIpRestrictionForSubAccountApiKeyRequest->setEmail('sub-account-email@email.com');
    $addIpRestrictionForSubAccountApiKeyRequest->setSubAccountApiKey('');
    $addIpRestrictionForSubAccountApiKeyRequest->setStatus(null);
    $response = $api->addIpRestrictionForSubAccountApiKey($addIpRestrictionForSubAccountApiKeyRequest);
    print_r($response);
}

addIpRestrictionForSubAccountApiKeyExample();
