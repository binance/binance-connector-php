<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SimpleEarn\Api\SimpleEarnRestApi;
use Binance\Client\SimpleEarn\Model\OrderType;
use Binance\Client\SimpleEarn\SimpleEarnRestApiUtil;

function getFlexibleRewardsHistoryExample()
{
    $configurationBuilder = SimpleEarnRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SimpleEarnRestApi($configurationBuilder->build());
    $productId = '1';
    $asset = 'USDC';
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $type = OrderType::FAST;
    $current = 1;
    $size = 10;
    $recvWindow = 5000;
    $response = $api->getFlexibleRewardsHistory($productId, $asset, $startTime, $endTime, $type, $current, $size, $recvWindow);
    print_r($response);
}

getFlexibleRewardsHistoryExample();
