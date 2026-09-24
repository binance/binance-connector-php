<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SubAccount\Api\SubAccountRestApi;
use Binance\Client\SubAccount\Model\ProductType;
use Binance\Client\SubAccount\SubAccountRestApiUtil;

function getMovePositionHistoryForSubAccountExample()
{
    $configurationBuilder = SubAccountRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SubAccountRestApi($configurationBuilder->build());
    $symbol = 'BTCUSDT';
    $page = 1;
    $rows = 1;
    $productType = ProductType::UM;
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $recvWindow = 5000;
    $response = $api->getMovePositionHistoryForSubAccount($symbol, $page, $rows, $productType, $startTime, $endTime, $recvWindow);
    print_r($response);
}

getMovePositionHistoryForSubAccountExample();
