# Compression Configuration

```php
    use Binance\Client\Spot\Api\CryptoLoanRestApi;
    use Binance\Client\Spot\CryptoLoanRestApiUtil;
    
    // set up a client array
    $configurationBuilder = CryptoLoanRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->compression(false);

    $api = new CryptoLoanRestApi($configurationBuilder->build());
```