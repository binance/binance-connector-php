<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Convert\Api\ConvertRestApi;
use Binance\Client\Convert\ConvertRestApiUtil;

function listAllConvertPairsExample()
{
    $configurationBuilder = ConvertRestApiUtil::getConfigurationBuilder();
    $api = new ConvertRestApi($configurationBuilder->build());
    $fromAsset = '';
    $toAsset = '';
    $response = $api->listAllConvertPairs($fromAsset, $toAsset);
    print_r($response);
}

listAllConvertPairsExample();
