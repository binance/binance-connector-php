# Changelog

## 2.0.0 - 2025-10-21

### Changed (3)

#### REST API

- Modified parameter `autoRepay`:
  - affected methods:
    - `changeAutoRepayFuturesStatus()` (`POST /papi/v1/repay-futures-switch`)

- Modified response for `marginMaxBorrow()` (`GET /papi/v1/margin/maxBorrowable`):
  - `amount`: type `number` → `string`
  - `borrowLimit`: type `integer` → `string`

- Modified response for `newMarginOrder()` (`POST /papi/v1/margin/order`):
  - `marginBuyBorrowAmount`: type `integer` → `string`

## 1.0.0 - 2025-07-03

- Initial release
