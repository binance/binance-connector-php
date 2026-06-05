<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SubAccount\Api\SubAccountRestApi;
use Binance\Client\SubAccount\Model\EnableFuturesForSubAccountRequest;
use Binance\Client\SubAccount\SubAccountRestApiUtil;

function enableFuturesForSubAccountExample()
{
    $configurationBuilder = SubAccountRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SubAccountRestApi($configurationBuilder->build());
    $enableFuturesForSubAccountRequest = new EnableFuturesForSubAccountRequest();
    $enableFuturesForSubAccountRequest->setEmail('sub-account-email@email.com');
    $response = $api->enableFuturesForSubAccount($enableFuturesForSubAccountRequest);
    print_r($response);
}

enableFuturesForSubAccountExample();
