# Changelog

## 2.0.0 - 2025-10-21

### Added (1)

#### REST API

- `getLimitPricePairs()` (`GET /sapi/v1/margin/limit-price-pairs`)

### Changed (2)

#### REST API

- Modified parameter `isIsolated`:
  - affected methods:
    - `marginAccountBorrowRepay()` (`POST /sapi/v1/margin/borrow-repay`)
  - affected methods:
    - `getFutureHourlyInterestRate()` (`GET /sapi/v1/margin/next-hourly-interest-rate`)

- Modified response for `queryMarginAvailableInventory()` (`GET /sapi/v1/margin/available-inventory`):

## 1.0.0 - 2025-07-03

- Initial release
