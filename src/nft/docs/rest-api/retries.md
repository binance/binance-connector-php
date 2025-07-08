# Retries Configuration

```php
    use Binance\Client\Spot\Api\SpotRestApi;
    use Binance\Client\Spot\SpotRestApiUtil;

    $configurationBuilder = SpotRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')
    ->privateKey('file:///path/to/private.key')
    ->retries(5) // Retry up to 5 times
    ->backOff(500); // 500ms between retries
    $api = new SpotRestApi($configurationBuilder->build());
```
        