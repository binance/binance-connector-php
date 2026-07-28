<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SubAccount\Api\SubAccountRestApi;
use Binance\Client\SubAccount\Model\MarginTransferForSubAccountRequest;
use Binance\Client\SubAccount\SubAccountRestApiUtil;

function marginTransferForSubAccountExample()
{
    $configurationBuilder = SubAccountRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SubAccountRestApi($configurationBuilder->build());
    $marginTransferForSubAccountRequest = new MarginTransferForSubAccountRequest();
    $marginTransferForSubAccountRequest->setEmail('123@test.com');
    $marginTransferForSubAccountRequest->setAsset('BTC');
    $marginTransferForSubAccountRequest->setAmount(1.0);
    $marginTransferForSubAccountRequest->setType(1);
    $response = $api->marginTransferForSubAccount($marginTransferForSubAccountRequest);
    print_r($response);
}

marginTransferForSubAccountExample();
