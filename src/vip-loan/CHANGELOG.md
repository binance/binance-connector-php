# Changelog

## 8.0.0 - 2026-10-28

**VIP Loan**

### Changed (2)

- Modified response for `getVIPLoanRepaymentHistory()` (`GET /sapi/v1/loan/vip/repay/history`):
  - `rows`.items: property `repayPrincipal` added
  - `rows`.items: property `repayInterest` added
  - `rows`.items: item property `repayPrincipal` added
  - `rows`.items: item property `repayInterest` added

- Modified response field `rows`:
  - items: property `repayPrincipal` added
  - items: property `repayInterest` added
  - items: item property `repayPrincipal` added
  - items: item property `repayInterest` added
  - affected events:
    - `getVIPLoanRepaymentHistoryResponse`

## 6.0.0 - 2026-07-28

### Added (1)

- `getVIPLoanRepaymentHistory()` (`GET /sapi/v1/loan/vip/repay/history`)

## 5.0.0 - 2026-05-01

### Changed (1)

- Modified response for `getVIPLoanOngoingOrders()` (`GET /sapi/v1/loan/vip/ongoing/orders`):
  - `rows`.items: property `loanRate` added
  - `rows`.items: item property `loanRate` added

## 3.0.0 - 2026-01-08

### Added (2)

- `getVIPLoanAccruedInterest()` (`GET /sapi/v1/loan/vip/accruedInterest`)
- `getVIPLoanInterestRateHistory()` (`GET /sapi/v1/loan/vip/interestRateHistory`)

## 2.0.0 - 2025-10-21

### Changed (1)

- Added parameter `loanTerm`
  - affected methods:
    - `vipLoanBorrow()` (`POST /sapi/v1/loan/vip/borrow`)

## 1.0.0 - 2025-07-03

- Initial release
