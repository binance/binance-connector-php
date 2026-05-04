# Changelog

## 5.0.0 - 2026-05-01

### Added (5)

#### REST API

- `deleteMarginCallLevel()` (`DELETE /sapi/v1/portfolio/margin-call-level`)
- `getDeltaModeStatus()` (`GET /sapi/v1/portfolio/delta-mode`)
- `getMarginCallLevel()` (`GET /sapi/v1/portfolio/margin-call-level`)
- `setMarginCallLevel()` (`POST /sapi/v1/portfolio/margin-call-level`)
- `switchDeltaMode()` (`POST /sapi/v1/portfolio/delta-mode`)

## 3.0.0 - 2026-01-08

### Removed (2)

#### REST API

- `mintBfusdForPortfolioMargin()` (`POST /sapi/v1/portfolio/mint`)
- `redeemBfusdForPortfolioMargin()` (`POST /sapi/v1/portfolio/redeem`)

## 2.0.0 - 2025-10-21

### Changed (3)

#### REST API

- Modified parameter `autoRepay`:
  - affected methods:
    - `changeAutoRepayFuturesStatus()` (`POST /sapi/v1/portfolio/repay-futures-switch`)

- Modified response for `mintBfusdForPortfolioMargin()` (`POST /sapi/v1/portfolio/mint`):
  - property `mintRate` added
  - property `rate` deleted

- Modified response for `redeemBfusdForPortfolioMargin()` (`POST /sapi/v1/portfolio/redeem`):
  - property `redeemRate` added
  - property `rate` deleted

## 1.0.0 - 2025-07-03

- Initial release
