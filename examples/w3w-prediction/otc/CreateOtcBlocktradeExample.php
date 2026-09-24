<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\W3WPrediction\Api\W3WPredictionRestApi;
use Binance\Client\W3WPrediction\Model\CreateOtcBlocktradeRequest;
use Binance\Client\W3WPrediction\Model\Side;
use Binance\Client\W3WPrediction\W3WPredictionRestApiUtil;

function createOtcBlocktradeExample()
{
    $configurationBuilder = W3WPredictionRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new W3WPredictionRestApi($configurationBuilder->build());
    $createOtcBlocktradeRequest = new CreateOtcBlocktradeRequest();
    $createOtcBlocktradeRequest->setMarketId('123');
    $createOtcBlocktradeRequest->setTokenId('71321045679252212594626385532706912750332728571942532289631379312455583992563');
    $createOtcBlocktradeRequest->setSide(Side::BUY);
    $createOtcBlocktradeRequest->setMakerAmount('600000000000000000000');
    $createOtcBlocktradeRequest->setTakerAmount('1000000000000000000000');
    $createOtcBlocktradeRequest->setPricePerShare('0.65');
    $createOtcBlocktradeRequest->setExpiration(1790000000);
    $response = $api->createOtcBlocktrade($createOtcBlocktradeRequest);
    print_r($response);
}

createOtcBlocktradeExample();
