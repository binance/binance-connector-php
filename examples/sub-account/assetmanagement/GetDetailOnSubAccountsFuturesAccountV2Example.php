<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SubAccount\Api\SubAccountRestApi;
use Binance\Client\SubAccount\SubAccountRestApiUtil;

function getDetailOnSubAccountsFuturesAccountV2Example()
{
    $configurationBuilder = SubAccountRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SubAccountRestApi($configurationBuilder->build());
    $email = 'sub-account-email@email.com';
    $futuresType = null;
    $recvWindow = 5000;
    $response = $api->getDetailOnSubAccountsFuturesAccountV2($email, $futuresType, $recvWindow);
    print_r($response);
}

getDetailOnSubAccountsFuturesAccountV2Example();
