<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Algo\AlgoRestApiUtil;
use Binance\Client\Algo\Api\AlgoRestApi;
use Binance\Client\Algo\Model\Side;
use Binance\Client\Algo\Model\Urgency;
use Binance\Client\Algo\Model\VolumeParticipationFutureAlgoRequest;

function volumeParticipationFutureAlgoExample()
{
    $configurationBuilder = AlgoRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new AlgoRestApi($configurationBuilder->build());
    $volumeParticipationFutureAlgoRequest = new VolumeParticipationFutureAlgoRequest();
    $volumeParticipationFutureAlgoRequest->setSymbol('BTCUSDT');
    $volumeParticipationFutureAlgoRequest->setSide(Side::BUY);
    $volumeParticipationFutureAlgoRequest->setQuantity(1);
    $volumeParticipationFutureAlgoRequest->setUrgency(Urgency::LOW);
    $response = $api->volumeParticipationFutureAlgo($volumeParticipationFutureAlgoRequest);
    print_r($response);
}

volumeParticipationFutureAlgoExample();
