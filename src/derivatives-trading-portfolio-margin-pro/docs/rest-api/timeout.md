# Retries Configuration

```php
    use Binance\Client\Spot\Api\SpotRestApi;
    use Binance\Client\Spot\SpotRestApiUtil;

    $configurationBuilder = SpotRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')
    ->privateKey('file:///path/to/private.key')
    ->connectTimeout(500) // Connect timeout of 500ms
    ->readTimeout(1000); // Read timeout of 1s
    $api = new SpotRestApi($configurationBuilder->build());
```