<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\CryptoLoan\Api\CryptoLoanRestApi;
use Binance\Client\CryptoLoan\CryptoLoanRestApiUtil;
use Binance\Client\CryptoLoan\Model\Direction;
use Binance\Client\CryptoLoan\Model\FlexibleLoanAdjustLtvRequest;

function flexibleLoanAdjustLtvExample()
{
    $configurationBuilder = CryptoLoanRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new CryptoLoanRestApi($configurationBuilder->build());
    $flexibleLoanAdjustLtvRequest = new FlexibleLoanAdjustLtvRequest();
    $flexibleLoanAdjustLtvRequest->setLoanCoin('BUSD');
    $flexibleLoanAdjustLtvRequest->setCollateralCoin('BNB');
    $flexibleLoanAdjustLtvRequest->setAdjustmentAmount(1);
    $flexibleLoanAdjustLtvRequest->setDirection(Direction::ADDITIONAL);
    $response = $api->flexibleLoanAdjustLtv($flexibleLoanAdjustLtvRequest);
    print_r($response);
}

flexibleLoanAdjustLtvExample();
