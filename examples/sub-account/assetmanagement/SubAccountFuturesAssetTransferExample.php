<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SubAccount\Api\SubAccountRestApi;
use Binance\Client\SubAccount\Model\SubAccountFuturesAssetTransferRequest;
use Binance\Client\SubAccount\SubAccountRestApiUtil;

function subAccountFuturesAssetTransferExample()
{
    $configurationBuilder = SubAccountRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SubAccountRestApi($configurationBuilder->build());
    $subAccountFuturesAssetTransferRequest = new SubAccountFuturesAssetTransferRequest();
    $subAccountFuturesAssetTransferRequest->setFromEmail('');
    $subAccountFuturesAssetTransferRequest->setToEmail('');
    $subAccountFuturesAssetTransferRequest->setFuturesType(null);
    $subAccountFuturesAssetTransferRequest->setAsset('');
    $subAccountFuturesAssetTransferRequest->setAmount(1.0);
    $response = $api->subAccountFuturesAssetTransfer($subAccountFuturesAssetTransferRequest);
    print_r($response);
}

subAccountFuturesAssetTransferExample();
