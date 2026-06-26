# Retries Configuration

```php
    use Binance\Client\W3WPrediction\Api\W3WPredictionRestApi;
    use Binance\Client\W3WPrediction\W3WPredictionRestApiUtil;

    $configurationBuilder = W3WPredictionRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')
    ->privateKey('file:///path/to/private.key')
    ->connectTimeout(500) // Connect timeout of 500ms
    ->readTimeout(1000); // Read timeout of 1s
    $api = new W3WPredictionRestApi($configurationBuilder->build());
```