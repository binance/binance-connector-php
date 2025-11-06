# Changelog

## 2.0.0 - 2025-10-21

### Added (1)

#### REST API

- `getLimitPricePairs()` (`GET /sapi/v1/margin/limit-price-pairs`)

### Changed (8)

#### REST API

- Marked `closeIsolatedMarginUserDataStream` (`DELETE /sapi/v1/userDataStream/isolated`) as deprecated
- Marked `closeMarginUserDataStream` (`DELETE /sapi/v1/userDataStream`) as deprecated
- Marked `keepaliveIsolatedMarginUserDataStream` (`PUT /sapi/v1/userDataStream/isolated`) as deprecated
- Marked `keepaliveMarginUserDataStream` (`PUT /sapi/v1/userDataStream`) as deprecated
- Marked `startIsolatedMarginUserDataStream` (`POST /sapi/v1/userDataStream/isolated`) as deprecated
- Marked `startMarginUserDataStream` (`POST /sapi/v1/userDataStream`) as deprecated
- Modified parameter `isIsolated`:
  - affected methods:
    - `marginAccountBorrowRepay()` (`POST /sapi/v1/margin/borrow-repay`)
  - affected methods:
    - `getFutureHourlyInterestRate()` (`GET /sapi/v1/margin/next-hourly-interest-rate`)

- Modified response for `queryMarginAvailableInventory()` (`GET /sapi/v1/margin/available-inventory`):

## 1.0.0 - 2025-07-03

- Initial release
