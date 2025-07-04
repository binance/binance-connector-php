# Error Handling

```php
    $configurationBuilder = AlgoRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new AlgoRestApi($configurationBuilder->build());
    $symbol = 'BNBUSDT';
    try {
        $response = $api->accountCommission($symbol);
    } catch (ApiException $e) {
        $httpCode = $e->getResponseHeaders();
        $responseObject = $e->getResponseObject();
    }
    print_r($response);
```