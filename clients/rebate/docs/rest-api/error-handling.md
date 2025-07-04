# Error Handling

```php
    $configurationBuilder = RebateRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new RebateRestApi($configurationBuilder->build());
    $symbol = 'BNBUSDT';
    try {
        $response = $api->accountCommission($symbol);
    } catch (ApiException $e) {
        $httpCode = $e->getResponseHeaders();
        $responseObject = $e->getResponseObject();
    }
    print_r($response);
```