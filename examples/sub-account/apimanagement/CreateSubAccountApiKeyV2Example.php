<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SubAccount\Api\SubAccountRestApi;
use Binance\Client\SubAccount\Model\CreateSubAccountApiKeyV2Request;
use Binance\Client\SubAccount\SubAccountRestApiUtil;

function createSubAccountApiKeyV2Example()
{
    $configurationBuilder = SubAccountRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SubAccountRestApi($configurationBuilder->build());
    $createSubAccountApiKeyV2Request = new CreateSubAccountApiKeyV2Request();
    $createSubAccountApiKeyV2Request->setEmail('123@test.com');
    $createSubAccountApiKeyV2Request->setApiName('my-fix-api');
    $createSubAccountApiKeyV2Request->setStatus(2);
    $response = $api->createSubAccountApiKeyV2($createSubAccountApiKeyV2Request);
    print_r($response);
}

createSubAccountApiKeyV2Example();
