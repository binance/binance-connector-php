# Changelog

## 7.0.0 - 2026-09-24

**Derivatives Trading Portfolio Margin Pro**

### Changed (2)

#### WebSocket Streams

- Modified response schema `UserDataStreamEventsResponse`:
  - oneOf modified

## 6.0.0 - 2026-07-28

### Changed (6)

#### REST API

- Modified parameter `asset`:
  - enum added: `LDUSDT`, `RWUSD`
  - affected methods:
    - `transferLdusdtRwusdForPortfolioMargin()` (`POST /sapi/v1/portfolio/earn-asset-transfer`)
- Modified parameter `autoRepay`:
  - enum added: `true`, `false`
  - affected methods:
    - `changeAutoRepayFuturesStatus()` (`POST /sapi/v1/portfolio/repay-futures-switch`)
- Modified parameter `deltaEnabled`:
  - enum added: `true`, `false`
  - affected methods:
    - `switchDeltaMode()` (`POST /sapi/v1/portfolio/delta-mode`)
- Modified parameter `from`:
  - enum added: `SPOT`, `MARGIN`
  - affected methods:
    - `portfolioMarginProBankruptcyLoanRepay()` (`POST /sapi/v1/portfolio/repay`)
    - `repayFuturesNegativeBalance()` (`POST /sapi/v1/portfolio/repay-futures-negative-balance`)
- Modified parameter `transferSide`:
  - enum added: `TO_UM`, `FROM_UM`
  - affected methods:
    - `bnbTransfer()` (`POST /sapi/v1/portfolio/bnb-transfer`)
- Modified parameter `transferType`:
  - enum added: `EARN_TO_FUTURE`, `FUTURE_TO_EARN`
  - affected methods:
    - `getTransferableEarnAssetBalanceForPortfolioMargin()` (`GET /sapi/v1/portfolio/earn-asset-balance`)
    - `transferLdusdtRwusdForPortfolioMargin()` (`POST /sapi/v1/portfolio/earn-asset-transfer`)

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
