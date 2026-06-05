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
    $marginTransferForSubAccountRequest->setEmail('sub-account-email@email.com');
    $marginTransferForSubAccountRequest->setAsset('');
    $marginTransferForSubAccountRequest->setAmount(1.0);
    $marginTransferForSubAccountRequest->setType(null);
    $response = $api->marginTransferForSubAccount($marginTransferForSubAccountRequest);
    print_r($response);
}

marginTransferForSubAccountExample();
