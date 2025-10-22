# Changelog

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
