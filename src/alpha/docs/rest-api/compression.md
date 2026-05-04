# Compression Configuration

```php
    use Binance\Client\Spot\Api\AlphaRestApi;
    use Binance\Client\Spot\AlphaRestApiUtil;
    
    // set up a client array
    $configurationBuilder = AlphaRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->compression(false);

    $api = new AlphaRestApi($configurationBuilder->build());
```