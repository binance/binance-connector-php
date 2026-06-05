<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SubAccount\Api\SubAccountRestApi;
use Binance\Client\SubAccount\Model\EnableOptionsForSubAccountRequest;
use Binance\Client\SubAccount\SubAccountRestApiUtil;

function enableOptionsForSubAccountExample()
{
    $configurationBuilder = SubAccountRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SubAccountRestApi($configurationBuilder->build());
    $enableOptionsForSubAccountRequest = new EnableOptionsForSubAccountRequest();
    $enableOptionsForSubAccountRequest->setEmail('sub-account-email@email.com');
    $response = $api->enableOptionsForSubAccount($enableOptionsForSubAccountRequest);
    print_r($response);
}

enableOptionsForSubAccountExample();
