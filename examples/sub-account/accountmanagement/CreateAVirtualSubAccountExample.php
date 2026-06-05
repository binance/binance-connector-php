<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SubAccount\Api\SubAccountRestApi;
use Binance\Client\SubAccount\Model\CreateAVirtualSubAccountRequest;
use Binance\Client\SubAccount\SubAccountRestApiUtil;

function createAVirtualSubAccountExample()
{
    $configurationBuilder = SubAccountRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SubAccountRestApi($configurationBuilder->build());
    $createAVirtualSubAccountRequest = new CreateAVirtualSubAccountRequest();
    $createAVirtualSubAccountRequest->setSubAccountString('');
    $response = $api->createAVirtualSubAccount($createAVirtualSubAccountRequest);
    print_r($response);
}

createAVirtualSubAccountExample();
