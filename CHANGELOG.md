# CHANGELOG


## 1.4.0 - 2022-12-20

### Added
- Support RSA signature

## 1.3.0 - 2022-09-14

### Added

- New endpoints for Portfolio Margin:
  - `GET /sapi/v1/portfolio/pmLoan` to query Portfolio Margin Bankruptcy Loan Record.
  - `POST /sapi/v1/portfolio/repay` to repay Portfolio Margin Bankruptcy Loan.
  - `GET /sapi/v1/portfolio/collateralRate` to get Portfolio Margin Collateral Rate.

## 1.2.0 - 2022-07-19

### Added

- New endpoint `POST /sapi/v3/asset/getUserAsset`
- New endpoint `GET /sapi/v1/margin/dribblet`

### Update

- Updated endpoint `GET /sapi/v1/convert/tradeFlow` weight

## 1.1.0 - 2022-07-07

### Add

- New endpoint `GET /api/v3/ticker`
- New endpoint `POST /api/v3/order/cancelReplace`
- New websocket stream `<symbol>@ticker_<window_size>`
- New websocket stream `!ticker_<window-size>@arr`

### Update

- Pump `guzzlehttp/guzzle` to latest version
- Apply lint fix

## 1.0.2 - 2022-06-14
- Pump `guzzlehttp/guzzle` to latest version

## 1.0.1 - 2022-06-04
- Update `psr/log` to support latest version
- Fix issue in examples file
- Lint fix

## 1.0.0 - 2022-05-19
- First release
