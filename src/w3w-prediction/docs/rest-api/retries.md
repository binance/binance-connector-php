# Retries Configuration

```php
    use Binance\Client\W3WPrediction\Api\W3WPredictionRestApi;
    use Binance\Client\W3WPrediction\W3WPredictionRestApiUtil;

    $configurationBuilder = W3WPredictionRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')
    ->privateKey('file:///path/to/private.key')
    ->retries(5) // Retry up to 5 times
    ->backOff(500); // 500ms between retries
    $api = new W3WPredictionRestApi($configurationBuilder->build());
```
        