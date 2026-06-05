<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SubAccount\Api\SubAccountRestApi;
use Binance\Client\SubAccount\Model\TransferToSubAccountOfSameMasterRequest;
use Binance\Client\SubAccount\SubAccountRestApiUtil;

function transferToSubAccountOfSameMasterExample()
{
    $configurationBuilder = SubAccountRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SubAccountRestApi($configurationBuilder->build());
    $transferToSubAccountOfSameMasterRequest = new TransferToSubAccountOfSameMasterRequest();
    $transferToSubAccountOfSameMasterRequest->setToEmail('');
    $transferToSubAccountOfSameMasterRequest->setAsset('');
    $transferToSubAccountOfSameMasterRequest->setAmount(1.0);
    $response = $api->transferToSubAccountOfSameMaster($transferToSubAccountOfSameMasterRequest);
    print_r($response);
}

transferToSubAccountOfSameMasterExample();
