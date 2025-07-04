# Compression Configuration

```php
    use Binance\Client\Spot\Api\ConvertRestApi;
    use Binance\Client\Spot\ConvertRestApiUtil;
    
    // set up a client array
    $configurationBuilder = ConvertRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->compression(false);

    $api = new ConvertRestApi($configurationBuilder->build());
```