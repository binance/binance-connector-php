# Changelog

## 6.0.0 - 2026-07-28

### Changed (6)

- Added parameter `autoCompoundPlan`
  - affected methods:
    - `changeAutoCompoundStatus()` (`POST /sapi/v1/dci/product/auto_compound/edit-status`)
- Deleted parameter `AutoCompoundPlan`
  - affected methods:
    - `changeAutoCompoundStatus()` (`POST /sapi/v1/dci/product/auto_compound/edit-status`)
- Modified parameter `autoCompoundPlan`:
  - enum added: `NONE`, `STANDARD`, `ADVANCED`
  - affected methods:
    - `subscribeDualInvestmentProducts()` (`POST /sapi/v1/dci/product/subscribe`)
- Modified parameter `optionType`:
  - enum added: `CALL`, `PUT`
  - affected methods:
    - `getDualInvestmentProductList()` (`GET /sapi/v1/dci/product/list`)
- Modified parameter `status`:
  - enum added: `PENDING`, `PURCHASE_SUCCESS`, `SETTLED`, `PURCHASE_FAIL`, `REFUNDING`, `REFUND_SUCCESS`, `SETTLING`
  - affected methods:
    - `getDualInvestmentPositions()` (`GET /sapi/v1/dci/product/positions`)
- Modified response for `getDualInvestmentPositions()` (`GET /sapi/v1/dci/product/positions`):
  - `list`.items: property `subscriptionTime` added
  - `list`.items: item property `subscriptionTime` added

## 5.0.0 - 2026-05-01

## 2.0.0 - 2026-01-08

## 1.0.0 - 2025-07-03

- Initial release
