<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Wallet\Api\WalletRestApi;
use Binance\Client\Wallet\Model\DustTransferRequest;
use Binance\Client\Wallet\WalletRestApiUtil;

function dustTransferExample()
{
    $configurationBuilder = WalletRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new WalletRestApi($configurationBuilder->build());
    $dustTransferRequest = new DustTransferRequest();
    $dustTransferRequest->setAsset('');
    $response = $api->dustTransfer($dustTransferRequest);
    print_r($response);
}

dustTransferExample();
