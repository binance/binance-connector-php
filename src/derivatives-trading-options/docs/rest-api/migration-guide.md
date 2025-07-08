# Migration Guide: Binance Derivatives Trading Options Connector Modularization

With the transition to a modularized structure, the Binance Connector has been split into separate composer libraries, each focusing on a distinct product (e.g., Auto Invest, Futures, etc.). 

---

## Key Changes

1. **Package Name**:  
   The modularised Derivatives Trading Options Connector has been moved to a new package:

   **Old:**
```json
   binance/binance-connector-php: "*"
```
   **New:**
```json
   binance/binance-connector-php: "*"
```

2**Imports**:  
   Update your import paths.

   **Old:**

```php
use \Binance\Spot;
```

   **New:**

```php
use \Binance\Client\DerivativesTradingOptions\Api\DerivativesTradingOptionsRestApi;
```

4. **Configuration and Client Initialization**:  
   The new structure keeps the existing configuration options but modularized clients into `DerivativesTradingOptionsRestApi`.

   **Old:**

```php
$key = ''; # api key is also required
$privateKey = 'file:///path/to/rsa/private/key.pem';

$client = new \Binance\Spot([
    'key'  => $key,
    'privateKey'  => $privateKey, # pass the key file directly
    'baseURL' => 'https://testnet.binance.vision'
]);
```

   **New:**

```php
$configurationBuilder = DerivativesTradingOptionsRestApiUtil::getConfigurationBuilder();
$configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
$api = new DerivativesTradingOptionsRestApi($configurationBuilder->build());
```

5. **Examples and Documentation**:  
   Updated examples can be found in the new repository folders:
    - REST API: `examples/derivatives-trading-options/`

---

## Migration Steps

### 1. Replace the composer dependency

Replace the composer dependency:

```bash
composer remove binance/binance-connector-php
```

by:

```bash
composer require binance/binance-connector-php
```

### 3. Update Import Paths

Replace all occurrences of:

```php
use \Binance\Spot;
```

With:

```php
use \Binance\Client\DerivativesTradingOptions\Api\DerivativesTradingOptionsRestApi;
```

### 4. Update Client Initialization

Adjust your code to use the modularized structure. For example:

**Old:**

```php
   $client = new \Binance\Spot([
      'key'  => $key,
      'privateKey'  => $privateKey, # pass the key file directly
      'baseURL' => 'https://testnet.binance.vision'
   ]);
```

**New:**

```php
   $configurationBuilder = DerivativesTradingOptionsRestApiUtil::getConfigurationBuilder();
   $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
   $api = new DerivativesTradingOptionsRestApi($configurationBuilder->build());
```

### 5. Test and Verify

Run your application to ensure everything works as expected. Refer to the new documentation for any advanced features or configuration options.

---

## Additional Notes

- **Future Modular Packages**: Similar packages for other products (e.g., Wallet, Staking) will follow this pattern.

For more details, refer to the updated [README](../../README.md) and [Examples](../../../../examples/).