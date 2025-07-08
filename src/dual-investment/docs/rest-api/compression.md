# Compression Configuration

```php
    use Binance\Client\Spot\Api\DualInvestmentRestApi;
    use Binance\Client\Spot\DualInvestmentRestApiUtil;
    
    // set up a client array
    $configurationBuilder = DualInvestmentRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->compression(false);

    $api = new DualInvestmentRestApi($configurationBuilder->build());
```