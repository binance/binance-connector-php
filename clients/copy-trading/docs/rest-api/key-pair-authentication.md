# Key Pair Based Authentication

```php
    use Binance\Client\Spot\Api\CopyTradingRestApi;
    use Binance\Client\Spot\CopyTradingRestApiUtil;

    $configurationBuilder = CopyTradingRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')
    ->privateKey('file:///path/to/private.key') // Provide the private key directly as a string or specify the path to a private key file (e.g., '/path/to/private_key.pem')
    ->privateKeyPass('myPrivateKeyPass'); // Optional: Required if the private key is encrypted
    $api = new CopyTradingRestApi($configurationBuilder->build());
```