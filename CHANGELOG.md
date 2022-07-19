# CHANGELOG

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
