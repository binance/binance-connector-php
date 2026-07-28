<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SubAccount\Api\SubAccountRestApi;
use Binance\Client\SubAccount\Model\WithdrawlAssetsFromTheManagedSubAccountRequest;
use Binance\Client\SubAccount\SubAccountRestApiUtil;

function withdrawlAssetsFromTheManagedSubAccountExample()
{
    $configurationBuilder = SubAccountRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SubAccountRestApi($configurationBuilder->build());
    $withdrawlAssetsFromTheManagedSubAccountRequest = new WithdrawlAssetsFromTheManagedSubAccountRequest();
    $withdrawlAssetsFromTheManagedSubAccountRequest->setFromEmail('from@test.com');
    $withdrawlAssetsFromTheManagedSubAccountRequest->setAsset('BTC');
    $withdrawlAssetsFromTheManagedSubAccountRequest->setAmount(1.0);
    $response = $api->withdrawlAssetsFromTheManagedSubAccount($withdrawlAssetsFromTheManagedSubAccountRequest);
    print_r($response);
}

withdrawlAssetsFromTheManagedSubAccountExample();
