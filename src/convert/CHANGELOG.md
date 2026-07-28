# Changelog

## 6.0.0 - 2026-07-28

### Changed (4)

- Modified parameter `expiredType`:
  - enum added: `1_D`, `3_D`, `7_D`, `30_D`
  - affected methods:
    - `placeLimitOrder()` (`POST /sapi/v1/convert/limit/placeOrder`)
- Modified parameter `side`:
  - enum added: `BUY`, `SELL`
  - affected methods:
    - `placeLimitOrder()` (`POST /sapi/v1/convert/limit/placeOrder`)
- Modified parameter `validTime`:
  - enum added: `10s`, `30s`, `1m`
  - affected methods:
    - `sendQuoteRequest()` (`POST /sapi/v1/convert/getQuote`)
- Modified parameter `walletType`:
  - enum added: `SPOT`, `FUNDING`, `EARN`, `SPOT_FUNDING`, `FUNDING_EARN`, `SPOT_FUNDING_EARN`, `SPOT_EARN`
  - affected methods:
    - `sendQuoteRequest()` (`POST /sapi/v1/convert/getQuote`)
    - `placeLimitOrder()` (`POST /sapi/v1/convert/limit/placeOrder`)

## 5.0.0 - 2026-05-01

### Changed (1)

- Modified response for `placeLimitOrder()` (`POST /sapi/v1/convert/limit/placeOrder`):
  - property `orderId` added
  - property `status` added
  - property `quoteId` deleted
  - property `ratio` deleted
  - property `toAmount` deleted
  - property `validTimestamp` deleted
  - property `fromAmount` deleted
  - property `inverseRatio` deleted

## 2.0.0 - 2025-10-21

## 1.0.0 - 2025-07-03

- Initial release
