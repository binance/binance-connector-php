<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SubAccount\Api\SubAccountRestApi;
use Binance\Client\SubAccount\Model\CreateSubAccountApiKeyRequest;
use Binance\Client\SubAccount\SubAccountRestApiUtil;

function createSubAccountApiKeyExample()
{
    $configurationBuilder = SubAccountRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SubAccountRestApi($configurationBuilder->build());
    $createSubAccountApiKeyRequest = new CreateSubAccountApiKeyRequest();
    $createSubAccountApiKeyRequest->setEmail('123@test.com');
    $createSubAccountApiKeyRequest->setApiName('myKey');
    $createSubAccountApiKeyRequest->setStatus(2);
    $response = $api->createSubAccountApiKey($createSubAccountApiKeyRequest);
    print_r($response);
}

createSubAccountApiKeyExample();
