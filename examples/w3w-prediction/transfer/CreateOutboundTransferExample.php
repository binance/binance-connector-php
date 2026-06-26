<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\W3WPrediction\Api\W3WPredictionRestApi;
use Binance\Client\W3WPrediction\Model\AccountType;
use Binance\Client\W3WPrediction\Model\CreateOutboundTransferRequest;
use Binance\Client\W3WPrediction\Model\SourceBiz;
use Binance\Client\W3WPrediction\W3WPredictionRestApiUtil;

function createOutboundTransferExample()
{
    $configurationBuilder = W3WPredictionRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new W3WPredictionRestApi($configurationBuilder->build());
    $createOutboundTransferRequest = new CreateOutboundTransferRequest();
    $createOutboundTransferRequest->setWalletId('5b5c1ec3be4e4416a5872b21c1ca5d20');
    $createOutboundTransferRequest->setWalletAddress('0x12e32db8817e292508c34111cbc4b23340df542c');
    $createOutboundTransferRequest->setFromTokenAmount('1000000000000000000');
    $createOutboundTransferRequest->setAccountType(AccountType::SPOT);
    $createOutboundTransferRequest->setSourceBiz(SourceBiz::USER_TRANSFER);
    $response = $api->createOutboundTransfer($createOutboundTransferRequest);
    print_r($response);
}

createOutboundTransferExample();
