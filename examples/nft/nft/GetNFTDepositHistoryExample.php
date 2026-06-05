<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Nft\Api\NftRestApi;
use Binance\Client\Nft\NftRestApiUtil;

function getNFTDepositHistoryExample()
{
    $configurationBuilder = NftRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new NftRestApi($configurationBuilder->build());
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $limit = 50;
    $page = 1;
    $recvWindow = 5000;
    $response = $api->getNFTDepositHistory($startTime, $endTime, $limit, $page, $recvWindow);
    print_r($response);
}

getNFTDepositHistoryExample();
