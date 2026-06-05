<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SubAccount\Api\SubAccountRestApi;
use Binance\Client\SubAccount\Model\DepositAssetsIntoTheManagedSubAccountRequest;
use Binance\Client\SubAccount\SubAccountRestApiUtil;

function depositAssetsIntoTheManagedSubAccountExample()
{
    $configurationBuilder = SubAccountRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SubAccountRestApi($configurationBuilder->build());
    $depositAssetsIntoTheManagedSubAccountRequest = new DepositAssetsIntoTheManagedSubAccountRequest();
    $depositAssetsIntoTheManagedSubAccountRequest->setToEmail('');
    $depositAssetsIntoTheManagedSubAccountRequest->setAsset('');
    $depositAssetsIntoTheManagedSubAccountRequest->setAmount(1.0);
    $response = $api->depositAssetsIntoTheManagedSubAccount($depositAssetsIntoTheManagedSubAccountRequest);
    print_r($response);
}

depositAssetsIntoTheManagedSubAccountExample();
