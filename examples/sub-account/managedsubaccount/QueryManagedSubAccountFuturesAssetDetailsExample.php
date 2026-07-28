<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SubAccount\Api\SubAccountRestApi;
use Binance\Client\SubAccount\SubAccountRestApiUtil;

function queryManagedSubAccountFuturesAssetDetailsExample()
{
    $configurationBuilder = SubAccountRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SubAccountRestApi($configurationBuilder->build());
    $email = 'abc@test.com';
    $accountType = 'MARGIN';
    $response = $api->queryManagedSubAccountFuturesAssetDetails($email, $accountType);
    print_r($response);
}

queryManagedSubAccountFuturesAssetDetailsExample();
