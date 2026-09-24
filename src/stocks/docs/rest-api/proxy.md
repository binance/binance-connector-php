# Proxy Configuration

```php
    use Binance\Client\Spot\Api\SpotRestApi;
    use Binance\Client\Spot\SpotRestApiUtil;
    
    // set up a client array
    $configurationBuilder = SpotRestApiUtil::getConfigurationBuilder();
    // define the proxies
    $proxies = [
        'http'  => 'http://localhost:8080',
        'https' => 'http://localhost:8080',
    ];

    $configurationBuilder->setProxy($proxies);

    $api = new SpotRestApi($configurationBuilder->build());
```