# Proxy Configuration

```php
    use Binance\Client\W3WPrediction\Api\W3WPredictionRestApi;
    use Binance\Client\W3WPrediction\W3WPredictionRestApiUtil;
    
    // set up a client array
    $configurationBuilder = W3WPredictionRestApiUtil::getConfigurationBuilder();
    // define the proxies
    $proxies = [
        'http'  => 'http://localhost:8080',
        'https' => 'http://localhost:8080',
    ];

    $configurationBuilder->setProxy($proxies);

    $api = new W3WPredictionRestApi($configurationBuilder->build());
```