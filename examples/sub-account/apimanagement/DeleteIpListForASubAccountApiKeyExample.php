<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SubAccount\Api\SubAccountRestApi;
use Binance\Client\SubAccount\SubAccountRestApiUtil;

function deleteIpListForASubAccountApiKeyExample()
{
    $configurationBuilder = SubAccountRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SubAccountRestApi($configurationBuilder->build());
    $email = 'sub-account-email@email.com';
    $subAccountApiKey = '';
    $ipAddress = '';
    $recvWindow = 5000;
    $response = $api->deleteIpListForASubAccountApiKey($email, $subAccountApiKey, $ipAddress, $recvWindow);
    print_r($response);
}

deleteIpListForASubAccountApiKeyExample();
