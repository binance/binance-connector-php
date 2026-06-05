<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\SimpleEarn\Api\SimpleEarnRestApi;
use Binance\Client\SimpleEarn\SimpleEarnRestApiUtil;

function getLockedProductPositionExample()
{
    $configurationBuilder = SimpleEarnRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SimpleEarnRestApi($configurationBuilder->build());
    $asset = '';
    $positionId = '1';
    $projectId = '1';
    $current = 1;
    $size = 10;
    $recvWindow = 5000;
    $response = $api->getLockedProductPosition($asset, $positionId, $projectId, $current, $size, $recvWindow);
    print_r($response);
}

getLockedProductPositionExample();
