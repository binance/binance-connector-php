<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Wallet\Api\WalletRestApi;
use Binance\Client\Wallet\Model\UserUniversalTransferRequest;
use Binance\Client\Wallet\WalletRestApiUtil;

function userUniversalTransferExample()
{
    $configurationBuilder = WalletRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new WalletRestApi($configurationBuilder->build());
    $userUniversalTransferRequest = new UserUniversalTransferRequest();
    $userUniversalTransferRequest->setType('');
    $userUniversalTransferRequest->setAsset('');
    $userUniversalTransferRequest->setAmount(1.0);
    $response = $api->userUniversalTransfer($userUniversalTransferRequest);
    print_r($response);
}

userUniversalTransferExample();
