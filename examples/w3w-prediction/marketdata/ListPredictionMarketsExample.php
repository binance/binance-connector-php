<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\W3WPrediction\Api\W3WPredictionRestApi;
use Binance\Client\W3WPrediction\Model\OrderBy;
use Binance\Client\W3WPrediction\Model\SortBy;
use Binance\Client\W3WPrediction\W3WPredictionRestApiUtil;

function listPredictionMarketsExample()
{
    $configurationBuilder = W3WPredictionRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new W3WPredictionRestApi($configurationBuilder->build());
    $l1Category = 'crypto';
    $l2Category = 'up-down';
    $sortBy = SortBy::RECOMMENDED;
    $orderBy = OrderBy::ASC;
    $offset = 0;
    $limit = 20;
    $response = $api->listPredictionMarkets($l1Category, $l2Category, $sortBy, $orderBy, $offset, $limit);
    print_r($response);
}

listPredictionMarketsExample();
