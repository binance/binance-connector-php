# Key Pair Based Authentication

```php
    use Binance\Client\Spot\Api\MarginTradingRestApi;
    use Binance\Client\Spot\MarginTradingRestApiUtil;

    $configurationBuilder = MarginTradingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')
    ->privateKey('file:///path/to/private.key') // Provide the private key directly as a string or specify the path to a private key file (e.g., '/path/to/private_key.pem')
    ->privateKeyPass('myPrivateKeyPass'); // Optional: Required if the private key is encrypted
    $api = new MarginTradingRestApi($configurationBuilder->build());
```