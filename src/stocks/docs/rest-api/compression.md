# Compression Configuration

```php
    use Binance\Client\Spot\Api\StocksRestApi;
    use Binance\Client\Spot\StocksRestApiUtil;
    
    // set up a client array
    $configurationBuilder = StocksRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->compression(false);

    $api = new StocksRestApi($configurationBuilder->build());
```