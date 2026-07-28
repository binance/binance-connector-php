<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SubAccount\Api\SubAccountRestApi;
use Binance\Client\SubAccount\Model\FuturesTransferForSubAccountRequest;
use Binance\Client\SubAccount\SubAccountRestApiUtil;

function futuresTransferForSubAccountExample()
{
    $configurationBuilder = SubAccountRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SubAccountRestApi($configurationBuilder->build());
    $futuresTransferForSubAccountRequest = new FuturesTransferForSubAccountRequest();
    $futuresTransferForSubAccountRequest->setEmail('123@test.com');
    $futuresTransferForSubAccountRequest->setAsset('USDT');
    $futuresTransferForSubAccountRequest->setAmount(1.0);
    $futuresTransferForSubAccountRequest->setType(1);
    $response = $api->futuresTransferForSubAccount($futuresTransferForSubAccountRequest);
    print_r($response);
}

futuresTransferForSubAccountExample();
