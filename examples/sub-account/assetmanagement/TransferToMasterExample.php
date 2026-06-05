<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SubAccount\Api\SubAccountRestApi;
use Binance\Client\SubAccount\Model\TransferToMasterRequest;
use Binance\Client\SubAccount\SubAccountRestApiUtil;

function transferToMasterExample()
{
    $configurationBuilder = SubAccountRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SubAccountRestApi($configurationBuilder->build());
    $transferToMasterRequest = new TransferToMasterRequest();
    $transferToMasterRequest->setAsset('');
    $transferToMasterRequest->setAmount(1.0);
    $response = $api->transferToMaster($transferToMasterRequest);
    print_r($response);
}

transferToMasterExample();
