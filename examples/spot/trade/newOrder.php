<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

$key = '';
$secret = '';

$client = new \Binance\Spot([
    'key'  => $key,
    'secret'  => $secret,
    'baseURL' => 'https://testnet.binance.vision', # set the baseURL to testnet, omit for production site.
    'showWeightUsage' => true # optional, only if you need get order/ip weight usage
]);

/**
 * The complete parameters can be found at Binance API document
 * https://github.com/binance/binance-spot-api-docs/blob/master/rest-api.md#new-order--trade
 *
 */
$response = $client->newOrder(
    'BNBUSDT',
    'BUY',
    'LIMIT',
    [
        'quantity' => 1,
        'price' => 200,
        'timeInForce' => 'GTC',
        'newOrderRespType' => 'FULL',
        'recvWindow' => 5000
    ]
);


/**
 *
 * Example of response from server:
 *
 * 1. When showWeightUsage = true :
 *
 * {"data":{"symbol":"BNBUSDT","orderId":2084513,"orderListId":-1,"clientOrderId":"KtiDFrEKK653aCzDyEvfzg","transactTime":1652949629940,"price":"200.00000000","origQty":"1.00000000","executedQty":"0.00000000","cummulativeQuoteQty":"0.00000000","status":"NEW","timeInForce":"GTC","type":"LIMIT","side":"BUY","fills":[]},"weight_usage":{"x-mbx-used-weight":["1"],"x-mbx-used-weight-1m":["1"],"x-mbx-order-count-10s":["1"],"x-mbx-order-count-1d":["1"]}}
 *
 * 2. When showWeightUsage is not set or set to false:
 *
 * {"symbol":"BNBUSDT","orderId":2084657,"orderListId":-1,"clientOrderId":"DhhXGyfCYGoiBR9lYLddCr","transactTime":1652949791775,"price":"200.00000000","origQty":"1.00000000","executedQty":"0.00000000","cummulativeQuoteQty":"0.00000000","status":"NEW","timeInForce":"GTC","type":"LIMIT","side":"BUY","fills":[]}
 */

echo json_encode($response);
