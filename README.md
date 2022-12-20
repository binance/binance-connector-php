# Binance Connector PHP

This is a thin library that working as a connector to the Binance public API.


## Installation

```php

composer require binance/binance-connector-php

```

## How to use

```php

require_once 'vendor/autoload.php';

$client = new \Binance\Spot();
$response = $client->time();
echo json_encode($response);


$client = new \Binance\Spot(['key' => $key, 'secret' => $secret]);
$response = $client->account();
echo json_encode($response);
```

Please find `examples` folder for more endpoints

### RSA Signature
RSA signature is supported.

```php

# RSA Key(Unencrypted) Authentication
$key = ''; # api key is also required
$privateKey = 'file:///path/to/rsa/private/key.pem';

$client = new \Binance\Spot([
    'key'  => $key,
    'privateKey'  => $privateKey, # pass the key file directly
    'baseURL' => 'https://testnet.binance.vision'
]);

# RSA key(Encrypted) Authentication
$key = '';
$encryptedPrivateKey = 'file:///path/to/rsa/private/key.pem';
$privateKey = openssl_pkey_get_private($encryptedPrivateKey, 'password');

$client = new \Binance\Spot([
    'key'  => $key,
    'privateKey'  => $privateKey,
    'baseURL' => 'https://testnet.binance.vision'
]);

```


### Testnet

The [spot testnet](https://testnet.binance.vision/) is available. In order to test on testnet:

```php

$client = new \Binance\Spot([
    'baseURL' => 'https://testnet.binance.vision'
]);
```

### RecvWindow

From Binance API, recvWindow is available for all endpoints require signature. By default, it's 5000ms. You are allowed to set this parameter to any value less than 60000, number beyond this limit will receive error from Binance server.

```php

$client = new \Binance\Spot(['key' => $key, 'secret' => $secret]);
$response = $client->getOrder('BNBUSDT', [
        'orderId'    => '11',
        'recvWindow' => 10000
    ]
);

```

### Optional parameters

For the optional parameters in the endpoint, pass exactly the field name from API document into the optional parameter array. e.g

```php

$response = $client->cancelOCOOrder('BNBUSDT',
    [
        'orderListId' => '12'
    ]
);

```

The mandartory parameter is validated in the library level, missing required parameter will throw `Binance\Exception\MissingArgumentException`.

### Timeout

Time out in seconds.

```php

$client = new \Binance\Spot(['timeout' => 0.5]);

$response = $client->time();

echo json_encode($response);

```

### Display meta info

Binance API server returns weight usage in the header of each response. This is very useful to indentify the current usage. To reveal this value, simpily intial the client with show_weight_usage=True as:

```php

$client = new \Binance\Spot(['showWeightUsage' => true]);
$response = $client->time();
echo json_encode($response);
```

this will returns:

```json
{"data":{"serverTime":1590579807751},"weight_usage":{"x-mbx-used-weight":["2"],"x-mbx-used-weight-1m":["2"]}}
```

It's also able to print out all headers, which may be very helpful for debug:

```php

$client = new \Binance\Spot(['showHeader' => true]);
$response = $client->time();
echo json_encode($response);
```
the returns will be like:

```json

{"data":{"serverTime":1590579942001},"header":{"Content-Type":["application/json;charset=utf-8"],"Transfer-Encoding":["chunked"],...}}
```

## Websocket

```php

$client = new \Binance\Websocket\Spot();

$callbacks = [
    'message' => function($conn, $msg){
        echo $msg.PHP_EOL;
    },
    'ping' => function($conn, $msg) {
        echo "received ping from server".PHP_EOL;
    }
];

$client->aggTrade('btcusdt', $callbacks);

```

It's able to provide a customlized websocket connector.

```php

$loop = \React\EventLoop\Factory::create();
$reactConnector = new \React\Socket\Connector($loop);
$connector = new \Ratchet\Client\Connector($loop, $reactConnector);
$client = new \Binance\Websocket\Spot(['wsConnector' => $connector]);

$callbacks = [
    'message' => function($conn, $msg){
        echo "received message".PHP_EOL;
    },
    'pong' => function($conn) {
        echo "received pong from server".PHP_EOL;
    },
    'ping' => function($conn) {
        echo "received ping from server".PHP_EOL;
    },
    'close' => function($conn) {
        echo "receive closed.".PHP_EOL;
    }
];

$client->miniTicker('btcusdt', $callbacks);

# send ping to server intervally
$loop->addPeriodicTimer(2, function () use ($client) {
    $client->ping();
    echo "ping sent ".PHP_EOL;
});

$loop->run();

```

Listen to combined stream:
```php

$client->combined([
    'btcusdt@miniTicker',
    'ethusdt@miniTicker'
], $callbacks);

```

## Test

```shell

# install the packages
composer install

vendor/bin/phpunit
```

## Limitation
Futures and Vanilla Options APIs are not supported:

- /fapi/*
- /dapi/*
- /vapi/*
- Associated Websocket Market and User Data Streams


## Contributing
Contributions are welcome.
If you've found a bug within this project, please open an issue to discuss what you would like to change.
If it's an issue with the API, please open a topic at Binance Developer Community

## License
MIT
