# Compression Configuration

```php
    use Binance\Client\Spot\Api\SubAccountRestApi;
    use Binance\Client\Spot\SubAccountRestApiUtil;
    
    // set up a client array
    $configurationBuilder = SubAccountRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->compression(false);

    $api = new SubAccountRestApi($configurationBuilder->build());
```