<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SubAccount\Api\SubAccountRestApi;
use Binance\Client\SubAccount\SubAccountRestApiUtil;

function getFuturesPositionRiskOfSubAccountV2Example()
{
    $configurationBuilder = SubAccountRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SubAccountRestApi($configurationBuilder->build());
    $email = 'sub-account-email@email.com';
    $futuresType = null;
    $recvWindow = 5000;
    $response = $api->getFuturesPositionRiskOfSubAccountV2($email, $futuresType, $recvWindow);
    print_r($response);
}

getFuturesPositionRiskOfSubAccountV2Example();
