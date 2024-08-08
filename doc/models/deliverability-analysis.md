
# Deliverability Analysis

A nested object containing a breakdown of the deliverability of an address.

## Structure

`DeliverabilityAnalysis`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `dpvConfirmation` | [`string(DpvConfirmationEnum)`](../../doc/models/dpv-confirmation-enum.md) | Required | - | getDpvConfirmation(): string | setDpvConfirmation(string dpvConfirmation): void |
| `dpvCmra` | [`string(DpvCmraEnum)`](../../doc/models/dpv-cmra-enum.md) | Required | - | getDpvCmra(): string | setDpvCmra(string dpvCmra): void |
| `dpvVacant` | [`string(DpvVacantEnum)`](../../doc/models/dpv-vacant-enum.md) | Required | - | getDpvVacant(): string | setDpvVacant(string dpvVacant): void |
| `dpvActive` | [`string(DpvActiveEnum)`](../../doc/models/dpv-active-enum.md) | Required | - | getDpvActive(): string | setDpvActive(string dpvActive): void |
| `dpvFootnotes` | [`string(DpvFootnoteEnum)[]`](../../doc/models/dpv-footnote-enum.md) | Required | An array of 2-character strings that gives more insight into how `deliverability_analysis[dpv_confirmation]` was determined. Will always include at least 1 string, and can include up to 3. For details, see [US Verification Details](#tag/US-Verification-Types). | getDpvFootnotes(): array | setDpvFootnotes(array dpvFootnotes): void |
| `ewsMatch` | `bool` | Required | Indicates whether or not an address has been flagged in the <a href="https://docs.informatica.com/data-engineering/data-engineering-quality/10-4-0/address-validator-port-reference/postal-carrier-certification-data-ports/early-warning-system-return-code.html" target="_blank">Early Warning System</a>, meaning the address is under development and not yet ready to receive mail. However, it should become available in a few months. | getEwsMatch(): bool | setEwsMatch(bool ewsMatch): void |
| `lacsIndicator` | [`string(LacsIndicatorEnum)`](../../doc/models/lacs-indicator-enum.md) | Required | - | getLacsIndicator(): string | setLacsIndicator(string lacsIndicator): void |
| `lacsReturnCode` | `string` | Required | A code indicating how `deliverability_analysis[lacs_indicator]` was determined.<br>Possible values are:<br><br>* `A` — A new address was produced because a match was found in LACS<sup>Link</sup>.<br>* `92` — A LACS<sup>Link</sup> record was matched after dropping secondary information.<br>* `14` — A match was found in LACS<sup>Link</sup>, but could not be converted to a deliverable address.<br>* `00` — A match was not found in LACS<sup>Link</sup>, and no new address was produced.<br>* `''` — LACS<sup>Link</sup> was not attempted. | getLacsReturnCode(): string | setLacsReturnCode(string lacsReturnCode): void |
| `suiteReturnCode` | [`string(SuiteReturnCodeEnum)`](../../doc/models/suite-return-code-enum.md) | Required | - | getSuiteReturnCode(): string | setSuiteReturnCode(string suiteReturnCode): void |

## Example (as JSON)

```json
{
  "dpv_confirmation": "Y",
  "dpv_cmra": "Y",
  "dpv_vacant": "Y",
  "dpv_active": "Y",
  "dpv_footnotes": [
    "AA",
    "BB"
  ],
  "ews_match": false,
  "lacs_indicator": "Y",
  "lacs_return_code": "lacs_return_code0",
  "suite_return_code": "A"
}
```

