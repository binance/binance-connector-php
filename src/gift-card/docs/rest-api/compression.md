# Compression Configuration

```php
    use Binance\Client\Spot\Api\GiftCardRestApi;
    use Binance\Client\Spot\GiftCardRestApiUtil;
    
    // set up a client array
    $configurationBuilder = GiftCardRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->compression(false);

    $api = new GiftCardRestApi($configurationBuilder->build());
```