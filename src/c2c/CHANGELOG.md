# Changelog

## 6.0.0 - 2026-07-28

### Changed (3)

- Deleted parameter `recvWindow`
  - affected methods:
    - `getC2CTradeHistory()` (`GET /sapi/v1/c2c/orderMatch/listUserOrderHistory`)
- Modified parameter `tradeType`:
  - enum added: `BUY`, `SELL`
  - affected methods:
    - `getC2CTradeHistory()` (`GET /sapi/v1/c2c/orderMatch/listUserOrderHistory`)
- Modified response for `getC2CTradeHistory()` (`GET /sapi/v1/c2c/orderMatch/listUserOrderHistory`):
  - property `code` added
  - property `data` added
  - property `message` added
  - property `success` added
  - property `total` added
  - property `unitPrice` deleted
  - property `orderNumber` deleted
  - property `takerCommission` deleted
  - property `additionalKycVerify` deleted
  - property `fiat` deleted
  - property `counterPartNickName` deleted
  - property `asset` deleted
  - property `totalPrice` deleted
  - property `commission` deleted
  - property `createTime` deleted
  - property `advNo` deleted
  - property `fiatSymbol` deleted
  - property `takerAmount` deleted
  - property `takerCommissionRate` deleted
  - property `orderStatus` deleted
  - property `amount` deleted
  - property `payMethodName` deleted
  - property `tradeType` deleted

## 5.0.0 - 2026-05-01

### Changed (1)

- Modified response for `getC2CTradeHistory()` (`GET /sapi/v1/c2c/orderMatch/listUserOrderHistory`):
  - property `asset` added
  - property `takerCommissionRate` added
  - property `takerAmount` added
  - property `additionalKycVerify` added
  - property `totalPrice` added
  - property `orderStatus` added
  - property `advNo` added
  - property `amount` added
  - property `orderNumber` added
  - property `commission` added
  - property `tradeType` added
  - property `unitPrice` added
  - property `createTime` added
  - property `fiatSymbol` added
  - property `takerCommission` added
  - property `counterPartNickName` added
  - property `payMethodName` added
  - property `fiat` added
  - property `data` deleted
  - property `message` deleted
  - property `success` deleted
  - property `total` deleted
  - property `code` deleted

## 2.0.0 - 2026-01-08

### Changed (6)

- Added parameter `endTimestamp`
  - affected methods:
    - `getC2CTradeHistory()` (`GET /sapi/v1/c2c/orderMatch/listUserOrderHistory`)
- Added parameter `rows`
  - affected methods:
    - `getC2CTradeHistory()` (`GET /sapi/v1/c2c/orderMatch/listUserOrderHistory`)
- Added parameter `startTimestamp`
  - affected methods:
    - `getC2CTradeHistory()` (`GET /sapi/v1/c2c/orderMatch/listUserOrderHistory`)
- Added parameter `tradeType`
  - affected methods:
    - `getC2CTradeHistory()` (`GET /sapi/v1/c2c/orderMatch/listUserOrderHistory`)
- Deleted parameter `endTime`
  - affected methods:
    - `getC2CTradeHistory()` (`GET /sapi/v1/c2c/orderMatch/listUserOrderHistory`)
- Deleted parameter `startTime`
  - affected methods:
    - `getC2CTradeHistory()` (`GET /sapi/v1/c2c/orderMatch/listUserOrderHistory`)

## 1.0.0 - 2025-07-03

- Initial release
