# Compression Configuration

```php
    use Binance\Client\W3WPrediction\Api\W3WPredictionRestApi;
    use Binance\Client\W3WPrediction\W3WPredictionRestApiUtil;
    
    // set up a client array
    $configurationBuilder = W3WPredictionRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->compression(false);

    $api = new W3WPredictionRestApi($configurationBuilder->build());
```