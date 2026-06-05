<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SubAccount\Api\SubAccountRestApi;
use Binance\Client\SubAccount\SubAccountRestApiUtil;

function getSubAccountDepositAddressExample()
{
    $configurationBuilder = SubAccountRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SubAccountRestApi($configurationBuilder->build());
    $email = 'sub-account-email@email.com';
    $coin = '';
    $network = '';
    $amount = 1.0;
    $recvWindow = 5000;
    $response = $api->getSubAccountDepositAddress($email, $coin, $network, $amount, $recvWindow);
    print_r($response);
}

getSubAccountDepositAddressExample();
