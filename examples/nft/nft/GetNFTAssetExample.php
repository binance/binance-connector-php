<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Nft\Api\NftRestApi;
use Binance\Client\Nft\NftRestApiUtil;

function getNFTAssetExample()
{
    $configurationBuilder = NftRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new NftRestApi($configurationBuilder->build());
    $limit = 50;
    $page = 1;
    $recvWindow = 5000;
    $response = $api->getNFTAsset($limit, $page, $recvWindow);
    print_r($response);
}

getNFTAssetExample();
