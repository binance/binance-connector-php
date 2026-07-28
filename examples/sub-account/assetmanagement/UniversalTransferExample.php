<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SubAccount\Api\SubAccountRestApi;
use Binance\Client\SubAccount\Model\FromAccountType;
use Binance\Client\SubAccount\Model\ToAccountType;
use Binance\Client\SubAccount\Model\UniversalTransferRequest;
use Binance\Client\SubAccount\SubAccountRestApiUtil;

function universalTransferExample()
{
    $configurationBuilder = SubAccountRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SubAccountRestApi($configurationBuilder->build());
    $universalTransferRequest = new UniversalTransferRequest();
    $universalTransferRequest->setFromAccountType(FromAccountType::SPOT);
    $universalTransferRequest->setToAccountType(ToAccountType::SPOT);
    $universalTransferRequest->setAsset('BTC');
    $universalTransferRequest->setAmount(1.0);
    $response = $api->universalTransfer($universalTransferRequest);
    print_r($response);
}

universalTransferExample();
