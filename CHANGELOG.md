# CHANGELOG

## 1.6.0 - 2024-05-30
### Added
- Convert
  - `GET /sapi/v1/convert/exchangeInfo`
  - `GET /sapi/v1/convert/assetInfo`
  - `POST /sapi/v1/convert/getQuote`
  - `POST /sapi/v1/convert/acceptQuote`
  - `GET /sapi/v1/convert/orderStatus`
  - `POST /sapi/v1/convert/limit/placeOrder`
  - `POST /sapi/v1/convert/limit/cancelOrder`
  - `GET /sapi/v1/convert/limit/queryOpenOrders`

- CryptoLoans
  - `POST /sapi/v1/loan/borrow`
  - `GET /sapi/v1/loan/borrow/history`
  - `GET /sapi/v1/loan/ongoing/orders`
  - `POST /sapi/v1/loan/repay`
  - `GET /sapi/v1/loan/repay/history`
  - `POST /sapi/v1/loan/adjust/ltv`
  - `GET /sapi/v1/loan/ltv/adjustment/history`
  - `GET /sapi/v1/loan/loanable/data`
  - `GET /sapi/v1/loan/collateral/data`
  - `GET /sapi/v1/loan/repay/collateral/rate`
  - `POST /sapi/v1/loan/customize/margin_call`

- DualInvestment
  - `GET /sapi/v1/dci/product/list`
  - `POST /sapi/v1/dci/product/subscribe`
  - `GET /sapi/v1/dci/product/positions`
  - `GET /sapi/v1/dci/product/accounts`
  - `POST /sapi/v1/dci/product/auto_compound/edit-status`

- GiftCard
  - `POST /sapi/v1/giftcard/buyCode`
  - `GET /sapi/v1/giftcard/buyCode/token-limit`

- Margin
  - `POST /sapi/v1/margin/borrow-repay`
  - `GET /sapi/v1/margin/borrow-repay`
  - `GET /sapi/v1/margin/crossMarginCollateralRatio`
  - `GET /sapi/v1/margin/exchange-small-liability`
  - `POST /sapi/v1/margin/exchange-small-liability`
  - `GET /sapi/v1/margin/exchange-small-liability-history`
  - `GET /sapi/v1/margin/next-hourly-interest-rate`
  - `GET /sapi/v1/margin/capital-flow`
  - `GET /sapi/v1/margin/delist-schedule`
  - `GET /sapi/v1/margin/available-inventory`
  - `POST /sapi/v1/margin/manual-liquidation`
  - `GET /sapi/v1/margin/leverageBracket`

- Market
  - `GET /api/v3/uiKlines`
  - `GET /api/v3/ticker/tradingDay`

- PortfolioMargin
  - `GET /sapi/v1/portfolio/interest-history`
  - `GET /sapi/v1/portfolio/asset-index-price`
  - `POST /sapi/v1/portfolio/auto-collection`
  - `POST /sapi/v1/portfolio/asset-collection`
  - `POST /sapi/v1/portfolio/bnb-transfer`
  - `POST /sapi/v1/portfolio/repay-futures-switch`
  - `GET /sapi/v1/portfolio/repay-futures-switch`
  - `POST /sapi/v1/portfolio/repay-futures-negative-balance`
  - `GET /sapi/v1/portfolio/margin-asset-leverage`

- Trade
  - `GET /api/v3/myPreventedMatches`
  - `GET /api/v3/myAllocations`
  - `GET /api/v3/account/commission`
  - `POST /api/v3/sor/order`
  - `POST /api/v3/sor/order/test`

- Wallet
  - `GET /sapi/v1/capital/contract/convertible-coins`
  - `POST /sapi/v1/capital/contract/convertible-coins`
  - `POST /sapi/v1/capital/deposit/credit-apply`
  - `GET /sapi/v1/capital/deposit/address/list`
  - `GET /sapi/v1/asset/wallet/balance`
  - `GET /sapi/v1/asset/custody/transfer-history`
  - `GET /sapi/v1/spot/delist-schedule`
  - `GET /sapi/v1/capital/withdraw/address/list`

### Updated
- Upgrade dependencies
- Update PHP version to 8.2

### Removed
- Bswap
  - `GET /sapi/v1/bswap/pools`
  - `GET /sapi/v1/bswap/liquidity`
  - `POST /sapi/v1/bswap/liquidityAdd`
  - `POST /sapi/v1/bswap/liquidityRemove`
  - `GET /sapi/v1/bswap/liquidityOps`
  - `GET /sapi/v1/bswap/quote`
  - `POST /sapi/v1/bswap/swap`
  - `GET /sapi/v1/bswap/swap`
  - `GET /sapi/v1/bswap/poolConfigure`
  - `GET /sapi/v1/bswap/addLiquidityPreview`
  - `GET /sapi/v1/bswap/removeLiquidityPreview`
  - `GET /sapi/v1/bswap/unclaimedRewards`
  - `POST /sapi/v1/bswap/claimRewards`
  - `GET /sapi/v1/bswap/claimedHistory`

- Margin
  - `GET /sapi/v1/margin/isolated/pair`
  - `POST /sapi/v1/margin/isolated/transfer`
  - `GET /sapi/v1/margin/isolated/transfer`
  - `GET /sapi/v1/margin/asset`
  - `POST /sapi/v1/margin/loan`
  - `GET /sapi/v1/margin/dribblet`
  - `GET /sapi/v1/margin/loan`
  - `GET /sapi/v1/margin/pair`
  - `POST /sapi/v1/margin/repay`
  - `GET /sapi/v1/margin/repay`
  - `POST /sapi/v1/margin/transfer`

- Staking
  - `GET /sapi/v1/staking/productList`
  - `POST /sapi/v1/staking/purchase`
  - `POST /sapi/v1/staking/redeem`
  - `GET /sapi/v1/staking/position`
  - `GET /sapi/v1/staking/stakingRecord`
  - `POST /sapi/v1/staking/setAutoStaking`
  - `GET /sapi/v1/staking/personalLeftQuota`

## 1.5.0 - 2023-07-03

### Updated
- Update `guzzlehttp/guzzle` to latest version
- Drop support of PHP 7.* or 8.0

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

### Updated

- Updated endpoint `GET /sapi/v1/convert/tradeFlow` weight

## 1.1.0 - 2022-07-07

### Add

- New endpoint `GET /api/v3/ticker`
- New endpoint `POST /api/v3/order/cancelReplace`
- New websocket stream `<symbol>@ticker_<window_size>`
- New websocket stream `!ticker_<window-size>@arr`

### Updated

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
