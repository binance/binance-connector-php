# Binance PHP Connectors

[![Build Status](https://img.shields.io/github/actions/workflow/status/binance/binance-connector-php/php.yml)](https://github.com/binance/binance-connector-php/actions)
[![Open Issues](https://img.shields.io/github/issues/binance/binance-connector-php)](https://github.com/binance/binance-connector-php/issues)
[![Code Style: PHP-CS-Fixer](https://img.shields.io/badge/code%20style-PHP--CS--Fixer-ff69b4)](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer)
![PHP Version](https://img.shields.io/badge/PHP-%3E=8.4.0-brightgreen)
[![Known Vulnerabilities](https://snyk.io/test/github/binance/binance-connector-php/badge.svg)](https://snyk.io/test/github/binance/binance-connector-php)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

Collection of auto-generated PHP connectors for Binance APIs.

## Prerequisites

Before using the connectors, ensure you have:

- **PHP** (version >= 8.4.0)

## Available Connectors
- [binance-algo](src/algo) - Algo Trading connector
- [binance-c2c](src/c2c) - C2C connector
- [binance-convert](src/convert) - Convert connector
- [binance-copy-trading](src/copy-trading) - Copy Trading connector
- [binance-crypto-loan](src/crypto-loan) - Crypto Loan connector
- [binance-derivatives-trading-coin-futures](src/derivatives-trading-coin-futures) - Derivatives Trading (COIN-M Futures) connector
- [binance-derivatives-trading-options](src/derivatives-trading-options) - Derivatives Trading (Options) connector
- [binance-derivatives-trading-portfolio-margin](src/derivatives-trading-portfolio-margin) - Derivatives Trading (Portfolio Margin) connector
- [binance-derivatives-trading-portfolio-margin-pro](src/derivatives-trading-portfolio-margin-pro) - Derivatives Trading (Portfolio Margin Pro) connector
- [binance-derivatives-trading-usds-futures](src/derivatives-trading-usds-futures) - Derivatives Trading (USDS-M Futures) connector
- [binance-dual-investment](src/dual-investment) - Dual Investment connector
- [binance-fiat](src/fiat) - Fiat connector
- [binance-gift-card](src/gift-card) - Gift Card connector
- [binance-margin-trading](src/margin-trading) - Margin Trading connector
- [binance-mining](src/mining) - Mining connector
- [binance-nft](src/nft) - NFT connector
- [binance-pay](src/pay) - Pay connector
- [binance-rebate](src/rebate) - Rebate connector
- [binance-simple-earn](src/simple-earn) - Simple Earn connector
- [binance-spot](src/spot) - Spot Trading connector
- [binance-staking](src/staking) - Staking connector
- [binance-sub-account](src/sub-account) - Sub Account connector
- [binance-vip-loan](src/vip-loan) - VIP Loan connector
- [binance-wallet](src/wallet) - Wallet connector

## Documentation

For detailed information, refer to the [Binance API Documentation](https://developers.binance.com).

## Installation

All connectors are within the same package and can be install with the command:

```bash
composer require binance/binance-connector-php
```

## Contributing

Since this repository contains auto-generated code using OpenAPI Generator, we encourage you to:

1. Open a GitHub issue to discuss your ideas or report bugs
2. Allow maintainers to implement necessary changes through the code generation process

### Types of Signature Generator
When creating REST clients (such as SpotRestApi), you use one of the following types of Signature Generator to create signatures (for SIGNED endpoints) based on your security preference:

- `HMAC` - Use of API Key and Secret Key.
```php
    $configurationBuilder = SpotRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->secretKey('mySecretKey');
    $api = new SpotRestApi($configurationBuilder->build());
```

- `RSA` or `ED25519` - use of API Key and RSA/Ed25519 algorithm keys.
```php
    $configurationBuilder = SpotRestApiUtil::getConfigurationBuilder();
    $configurationBuilder
    ->apiKey('apiKey')
    ->privateKey('file:///path/to/private.key')
    // if the private key is protected by a password
    ->privateKeyPass("myPrivateKeyPass");
    
    $api = new SpotRestApi($configurationBuilder->build());
```

## How to use a proxy
### Rest Api
```php
    // set up a client array
    $configurationBuilder = SpotRestApiUtil::getConfigurationBuilder();
    // define the proxies
    $proxies = [
        'http'  => 'http://localhost:8080',
        'https' => 'http://localhost:8080',
    ];

    $configurationBuilder->setProxy($proxies);

    $api = new SpotRestApi($configurationBuilder->build());
```

## Examples
**Algo**: [Rest API](src/algo/example_rest.md)

**C2c**: [Rest API](src/c2c/example_rest.md)

**Convert**: [Rest API](src/convert/example_rest.md)

**Copy Trading**: [Rest API](src/copy-trading/example_rest.md)

**Crypto Loan**: [Rest API](src/crypto-loan/example_rest.md)

**Derivatives Trading Coin Futures**: [Rest API](src/derivatives-trading-coin-futures/example_rest.md)

**Derivatives Trading Options**: [Rest API](src/derivatives-trading-options/example_rest.md)

**Derivatives Trading Portfolio Margin**: [Rest API](src/derivatives-trading-portfolio-margin/example_rest.md)

**Derivatives Trading Portfolio Margin Pro**: [Rest API](src/derivatives-trading-portfolio-margin-pro/example_rest.md)

**Derivatives Trading Usds Futures**: [Rest API](src/derivatives-trading-usds-futures/example_rest.md)

**Dual Investment**: [Rest API](src/dual-investment/example_rest.md)

**Fiat**: [Rest API](src/fiat/example_rest.md)

**Gift Card**: [Rest API](src/gift-card/example_rest.md)

**Margin Trading**: [Rest API](src/margin-trading/example_rest.md)

**Mining**: [Rest API](src/mining/example_rest.md)

**Nft**: [Rest API](src/nft/example_rest.md)

**Pay**: [Rest API](src/pay/example_rest.md)

**Rebate**: [Rest API](src/rebate/example_rest.md)

**Simple Earn**: [Rest API](src/simple-earn/example_rest.md)

**Spot**: [Rest API](src/spot/example_rest.md)

**Staking**: [Rest API](src/staking/example_rest.md)

**Sub Account**: [Rest API](src/sub-account/example_rest.md)

**Vip Loan**: [Rest API](src/vip-loan/example_rest.md)

**Wallet**: [Rest API](src/wallet/example_rest.md)

## License

This project is licensed under the MIT License - see the [LICENSE](./LICENSE) file for details.
