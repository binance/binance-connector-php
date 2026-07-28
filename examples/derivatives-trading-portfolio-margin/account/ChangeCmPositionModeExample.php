<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingPortfolioMargin\Api\DerivativesTradingPortfolioMarginRestApi;
use Binance\Client\DerivativesTradingPortfolioMargin\DerivativesTradingPortfolioMarginRestApiUtil;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\ChangeCmPositionModeRequest;
use Binance\Client\DerivativesTradingPortfolioMargin\Model\DualSidePosition;

function changeCmPositionModeExample()
{
    $configurationBuilder = DerivativesTradingPortfolioMarginRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingPortfolioMarginRestApi($configurationBuilder->build());
    $changeCmPositionModeRequest = new ChangeCmPositionModeRequest();
    $changeCmPositionModeRequest->setDualSidePosition(DualSidePosition::TRUE);
    $response = $api->changeCmPositionMode($changeCmPositionModeRequest);
    print_r($response);
}

changeCmPositionModeExample();
