<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SubAccount\Api\SubAccountRestApi;
use Binance\Client\SubAccount\SubAccountRestApiUtil;

function getSubAccountsStatusOnMarginOrFuturesExample()
{
    $configurationBuilder = SubAccountRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SubAccountRestApi($configurationBuilder->build());
    $email = '';
    $recvWindow = 5000;
    $response = $api->getSubAccountsStatusOnMarginOrFutures($email, $recvWindow);
    print_r($response);
}

getSubAccountsStatusOnMarginOrFuturesExample();
