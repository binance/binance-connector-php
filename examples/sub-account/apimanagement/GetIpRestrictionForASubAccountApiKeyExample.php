<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SubAccount\Api\SubAccountRestApi;
use Binance\Client\SubAccount\SubAccountRestApiUtil;

function getIpRestrictionForASubAccountApiKeyExample()
{
    $configurationBuilder = SubAccountRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SubAccountRestApi($configurationBuilder->build());
    $email = '123@test.com';
    $subAccountApiKey = 'k5V49ldtn4tszj6W3hystegdfvmGbqDzjmkCtpTvC0G74WhK7yd4rfCTo4lShf';
    $recvWindow = 5000;
    $response = $api->getIpRestrictionForASubAccountApiKey($email, $subAccountApiKey, $recvWindow);
    print_r($response);
}

getIpRestrictionForASubAccountApiKeyExample();
