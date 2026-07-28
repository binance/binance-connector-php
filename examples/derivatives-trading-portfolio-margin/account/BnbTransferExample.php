<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMargin\Api\DerivativesTradingPortfolioMarginRestApi;
use Binance\Client\DerivativesTradingPortfolioMargin\DerivativesTradingPortfolioMarginRestApiUtil;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\BnbTransferRequest;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\TransferSide;

function bnbTransferExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingPortfolioMarginRestApi($configurationBuilder->build());
    $bnbTransferRequest = new BnbTransferRequest();
    $bnbTransferRequest->setAmount(1.0);
    $bnbTransferRequest->setTransferSide(TransferSide::TO_UM);
    $response = $api->bnbTransfer($bnbTransferRequest);
    print_r($response);
}

bnbTransferExample();
