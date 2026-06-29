<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\W3WPrediction\Api\W3WPredictionRestApi;
use Binance\Client\W3WPrediction\Model\AccountType;
use Binance\Client\W3WPrediction\Model\CreateInboundTransferRequest;
use Binance\Client\W3WPrediction\W3WPredictionRestApiUtil;

function createInboundTransferExample()
{
    $configurationBuilder = W3WPredictionRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new W3WPredictionRestApi($configurationBuilder->build());
    $createInboundTransferRequest = new CreateInboundTransferRequest();
    $createInboundTransferRequest->setWalletId('5b5c1ec3be4e4416a5872b21c1ca5d20');
    $createInboundTransferRequest->setWalletAddress('0x12e32db8817e292508c34111cbc4b23340df542c');
    $createInboundTransferRequest->setFromTokenAmount('1000000000000000000');
    $createInboundTransferRequest->setAccountType(AccountType::SPOT);
    $response = $api->createInboundTransfer($createInboundTransferRequest);
    print_r($response);
}

createInboundTransferExample();
