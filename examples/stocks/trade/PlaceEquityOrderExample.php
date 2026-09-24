<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Stocks\Api\StocksRestApi;
use Binance\Client\Stocks\Model\OrderType;
use Binance\Client\Stocks\Model\Side;
use Binance\Client\Stocks\Model\TimeInForce;
use Binance\Client\Stocks\Model\TradingSession;
use Binance\Client\Stocks\Model\WalletType;
use Binance\Client\Stocks\StocksRestApiUtil;

function placeEquityOrderExample()
{
    $configurationBuilder = StocksRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new StocksRestApi($configurationBuilder->build());
    $symbol = 'AAPL';
    $side = Side::BUY;
    $orderType = OrderType::MARKET;
    $quoteAsset = 'USDC';
    $price = '180.50';
    $quantity = '1';
    $notional = '1000.00';
    $timeInForce = TimeInForce::DAY;
    $tradingSession = TradingSession::RTH;
    $walletType = WalletType::CARD;
    $clientOrderId = 'web_2c9c92b74f1e4a7c8f3b9e1a2d3c4b5a';
    $tokenize = true;
    $recvWindow = 5000;
    $response = $api->placeEquityOrder($symbol, $side, $orderType, $quoteAsset, $price, $quantity, $notional, $timeInForce, $tradingSession, $walletType, $clientOrderId, $tokenize, $recvWindow);
    print_r($response);
}

placeEquityOrderExample();
